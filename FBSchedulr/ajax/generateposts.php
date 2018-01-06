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

if (isset($_POST['page']) && isset($_POST['numposts']) && isset($_POST['dataehora']) && isset($_POST['time']) && isset($_POST['from']) && isset($_POST['subfolder']) ) {
	
	$posts = array('page' => $_POST['page'], 'dataehora' => $_POST['dataehora'], 'time' => $_POST['time'], 'folder' => $_POST['subfolder'], 'from' => $_POST['from']);

	if($_POST['from']=="folder"){
    if(is_dir(PATH . "/" . $_POST['subfolder']) && is_numeric($_POST['numposts'])){
      $images = glob(PATH . "/" . $_POST['subfolder'] . "/*");
      if (is_array($images) && !empty($images)){
        shuffle($images);
      	$x = 0;
        foreach ($images as $key => $value){
        		if($x<$_POST['numposts']){
              if(!is_dir($value)){
        			$value = explode('/', $value);
        			$posts['images'][] = $value[count($value)-1];
        		  }
            }else
        			break;         
        		++$x;
        }
      }
    }
	}else{
      $fileCsv = glob(PATH . "/*.csv");
      if (is_array($fileCsv) && !empty($fileCsv)){
         $lines = readCSV($fileCsv[0]);
         unset($lines[0]);
         foreach ($lines as $key => $value){
          if(count($value)>2){
            $value[1] = $value[1];
            $value[2] = $value[2]; 
            list($posts['type'][],$posts['content'][],$posts['text'][]) = $value;
          }
            
        }
      }
	}
  $posts = json_encode($posts);
  $posts = json_decode($posts, true);
	echo json_encode($posts);
}
exit(0);
?>