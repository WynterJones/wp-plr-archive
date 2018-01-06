<?php 
error_reporting(E_ALL);
ini_set('display_errors', '1');
define('PATH', dirname(__file__) . '/..');
session_start();

if(!isset($_SESSION['logged']) || $_SESSION['logged']!=true){
  exit(0);
}

require_once(PATH . '/config.php');
require_once (PATH . '/src/facebook.php');
require_once(PATH . '/class/JsonDB.class.php');

function strip_tags_deep($value)
{
	return is_array($value) ?
	array_map('strip_tags_deep', $value) :
	strip_tags($value);
}



if (isset($_POST['text']) && isset($_POST['time']) && isset($_POST['type']) && isset($_POST['url']) && isset($_POST['image']) && isset($_POST['page'])) {
  $facebook = new Facebook(array('appId'  => $idApp,'secret' => $appSecret, 'cookie' => true,  )); 
  Facebook::$CURL_OPTS[CURLOPT_SSL_VERIFYPEER] = false;
  Facebook::$CURL_OPTS[CURLOPT_SSL_VERIFYHOST] = 2;
  $facebook->setFileUploadSupport(true);

  $db = new JsonDB( PATH . "/db/");
  $result = $db->selectAll("config");
  if(isset($result[0]['token']))
    $token = $result[0]['token'];
  else
    exit(0);

  $result = $db->select("pages", "ID", $_POST['page']);
  if (isset($result[0]['idalbum'])) {
    $album = $result[0]['idalbum'];
  }else{
    exit(0);
  }

  $pages_arr = array(
    'access_token'=>$token ,
    'fields'=>'access_token' 
    );


// Get Page access_token
  $page_token = $facebook->api('/'.$_POST['page'], 'get',$pages_arr);
$page_access_token=$page_token['access_token']; // get page access_token

if($_POST['type']=="image"){
  if(file_exists(PATH . '/' .$_POST['image'])){
    $args = array(
     'message' => $_POST['text'],
     'scheduled_publish_time' => $_POST['time'],
     'image' => '@' . realpath(PATH . '/' .$_POST['image']),
     'aid' => $album,
       // 'no_story' => 1,
     'access_token' => $page_access_token,
     'published' => "0",
     );

    $args = json_encode($args);
    $args = json_decode($args, true);
    $photo = $facebook->api('/' . $_POST['page'] . '/photos', 'post', $args);
  }
}else{
 $args = array(
   'message' => $_POST['text'],
   'scheduled_publish_time' => $_POST['time'],
   'link' => $_POST['url'],
   'access_token' => $page_access_token,
   'published' => "0",
   ); 
 $args = json_encode($args);
 $args = json_decode($args, true);
 $link = $facebook->api('/' . $_POST['page'] . '/feed', 'post', $args);
}

}
exit(0);
?>