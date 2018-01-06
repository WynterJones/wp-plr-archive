<?php 
error_reporting(E_ALL);
ini_set('display_errors', '1');
define('PATH', dirname(__file__) . '/..');
session_start();

if(!isset($_SESSION['logged']) || $_SESSION['logged']!=true){
  exit(0);
}

require_once(PATH . '/config.php');
require_once(PATH . '/createDatabase.php');
require_once (PATH . '/src/facebook.php');
require_once(PATH . '/class/JsonDB.class.php');

function strip_tags_deep($value)
{
	return is_array($value) ?
	array_map('strip_tags_deep', $value) :
	strip_tags($value);
}

function getFeed($feed_url) {  
  $content = file_get_contents($feed_url);  
  $x = new SimpleXmlElement($content);  
  foreach($x->channel->item as $entry) {  
    return $entry;
  }  
}



if (isset($_POST['feed']) && isset($_POST['pages'])) {
  $facebook = new Facebook(array('appId'  => $idApp,'secret' => $appSecret, 'cookie' => true,  )); 
  Facebook::$CURL_OPTS[CURLOPT_SSL_VERIFYPEER] = false;
  Facebook::$CURL_OPTS[CURLOPT_SSL_VERIFYHOST] = 2;
  $facebook->setFileUploadSupport(true);
  if(is_array($_POST['feed']))
    shuffle($_POST['feed']);

  foreach ($_POST['feed'] as $key => $feed) {
    $lastPosts[] = getFeed($feed);
  }



  foreach ($lastPosts as $key => $item) {

    if(isset($item->link)){
      $link = $item->link;
      $result = @$db->select("rssPosts", "url", "$link" );
      if(!empty($result)){
        unset($lastPosts[$key]);
      }else{
        $db->insert("rssPosts", array("url" => "$link"));
      }
    }else{
      unset($lastPosts[$key]);
    }
  }

  $result = $db->selectAll("rssPosts");
  if(!empty($result) && count($result)>30){
    $x = 1;
    foreach ($result as $key => $value) {
      $url = $value['url'];
      $db->delete("rssPosts", "url", "$url" );
      if($x==5)
        break;
      else
        ++$x;
    }
  }   


  $db = new JsonDB( PATH . "/db/");
  $result = $db->selectAll("config");
  if(isset($result[0]['token']))
    $token = $result[0]['token'];
  else
    exit(0);

  if(isset($lastPosts[0])){
    foreach ($_POST['pages'] as $key => $page) {

      $pages_arr = array(
        'access_token'=>$token ,
        'fields'=>'access_token' 
        );


// Get Page access_token
      $page_token = $facebook->api('/'.$page, 'get',$pages_arr);
$page_access_token=$page_token['access_token']; // get page access_token

$link = $lastPosts[0]->link;


if(is_array($lastPosts[0]->title))
  $title = $lastPosts[0]->title[0];
else
  $title = $lastPosts[0]->title;


$args = array(
 'message' => $title,
 'link' => $link,
 'access_token' => $page_access_token,
 );  

$args = json_encode($args);
$args = (array) json_decode($args, true);

$args2 = array(
 'message' => $args['message'][0],
 'link' => $args['link'][0],
 'access_token' => $page_access_token,
 );  


(array) $link = $facebook->api('/' . $page . '/feed', 'post', $args2);
$link['title'] = $title;
$posts[] = $link;

}
echo json_encode($posts);

}
}

exit(0);
?>