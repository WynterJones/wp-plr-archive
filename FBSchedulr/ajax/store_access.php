<?php 
error_reporting(E_ALL);
ini_set('display_errors', '1');
define('PATH', dirname(__file__) . '/..');
session_start();

require_once(PATH . '/config.php');
require_once(PATH . '/class/JsonDB.class.php');
$db = new JsonDB( PATH . "/db/");

function strip_tags_deep($value)
{
	return is_array($value) ?
	array_map('strip_tags_deep', $value) :
	strip_tags($value);
}

if(!isset($_SESSION['logged']) || $_SESSION['logged']!=true){
	exit(0);
}

if(isset($_POST['access_token']) && strlen($_POST['access_token'])>20){
	$_POST = array_map('strip_tags_deep', $_POST);
	$token = getSslPage('https://graph.facebook.com/oauth/access_token?client_id=' . $idApp . '&client_secret=' . $appSecret . '&grant_type=fb_exchange_token&fb_exchange_token=' . $_POST['access_token']);
	$paramsfb = null;
	parse_str($token, $paramsfb);
	print_r($paramsfb);
	if(isset($paramsfb['access_token']) && strlen($paramsfb['access_token'])>20){
		$db->deleteAll ( "config" );
		$token = $paramsfb['access_token'];
		$expire = $paramsfb['expires'];
		$db->insert("config",array('token' => $token, 'expire' => $expire));
	}
}

function getSslPage($url) {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_HEADER, false);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_REFERER, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	$result = curl_exec($ch);
	curl_close($ch);
	return $result;
}
echo "[{'success' : 1}]";
exit(0);
?>