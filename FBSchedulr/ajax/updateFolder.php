<?php 
define('PATH', dirname(__file__) . '/..');
session_start();
require_once(PATH . '/config.php');

function strip_tags_deep($value)
{
	return is_array($value) ?
	array_map('strip_tags_deep', $value) :
	strip_tags($value);
}

function readCSV($csvFile){
  $file_handle = fopen($csvFile, 'r');
  while (!feof($file_handle) ) {
    $line_of_text[] = fgetcsv($file_handle, 1024);
  }
  fclose($file_handle);
  return $line_of_text;
}

if(!isset($_SESSION['logged']) || $_SESSION['logged']!=true){
	exit(0);
}

if(isset($_POST['folder'])){
	$_SESSION['folder'] = strip_tags($_POST['folder']);
}
exit(0);
?>
