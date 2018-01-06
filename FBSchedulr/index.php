<?php
define('PATH', dirname(__file__));
session_start();


if(!isset($_SESSION['logged']) || $_SESSION['logged']!=true){
  header("Location: login.php");
  exit(0);
}

require_once(PATH . '/config.php');
require_once(PATH . '/createDatabase.php');

if(isset($_GET['id']) && is_numeric($_GET['id'])){
  $db->delete("pages", "ID",  $_GET['id']); 
  echo '<script type="text/javascript">
<!--
window.location = "index.php"
//-->
</script>';
  exit(0);
}

require_once(PATH . '/header.php');

      if (isset($_POST['rss'])) {
          if(strlen($_POST['rss'])>5){
              $db->insert("rss",array('url' => strip_tags($_POST['rss'])));
          }
      }

if(!function_exists('curl_init')){
  echo '<div class="alert alert-error">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Warning!</strong> You need CURL extension on your server to run this script. <br /> Please contact your host provider to activate CURL.
  </div>';
  exit(0);
}

if(!isset($idApp) || $idApp == ""){
  echo '<div class="alert alert-error">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Warning!</strong> Open the file config.php and define the id of your App. <br />
  EG : $idApp = "yourid";
  </div>';
  exit(0);
}

if(!isset($appSecret) || $appSecret == ""){
  echo '<div class="alert alert-error">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Warning!</strong> Open the file config.php and define the secret of your App. <br />
  EG : $appSecret = "your app secret";
  </div>';
  exit(0);
}

if(!isset($canvasUrl) || $canvasUrl == ""){
  echo '<div class="alert alert-error">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Warning!</strong> Open the file config.php and define the your canvas url. Usually is the URL of this website. <br />
  EG : $canvasUrl = "http://urlofthisSite.com";
  </div>';
  exit(0);
}

if(!isset($folder) || $folder == ""){
  echo '<div class="alert alert-error">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Warning!</strong> Open the file config.php and define the name of your images folder. <br />
  EG : $folder = "NameOfFolder";
  </div>';
  exit(0);
}


if(isset($_FILES["zip_file"]["name"])) {
  $filename = $_FILES["zip_file"]["name"];
  $source = $_FILES["zip_file"]["tmp_name"];
  $type = $_FILES["zip_file"]["type"];
  
  $name = explode(".", $filename);
  $accepted_types = array('application/zip', 'application/x-zip-compressed', 'multipart/x-zip', 'application/x-compressed');
  foreach($accepted_types as $mime_type) {
    if($mime_type == $type) {
      $okay = true;
      break;
    } 
  }
  
  $continue = strtolower($name[1]) == 'zip' ? true : false;
  if(!$continue) {
    $message = '<div class="alert alert-error">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Warning!</strong> The file you are trying to upload is not a .zip file. Please try again.
    </div>';
  }

  $target_path = PATH . "/" . $folder . "/" .$filename;  // change this to the correct site path
  if(move_uploaded_file($source, $target_path)) {
    $zip = new ZipArchive();
    $x = $zip->open($target_path);
    if ($x === true) {
      $zip->extractTo(PATH . "/" . $folder . "/"); // change this to the correct site path
      $zip->close();

      unlink($target_path);
    }
    $message = '<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Success!</strong> Your .zip file was uploaded and unpacked.
    </div>';
  } else {  
    $message = '<div class="alert alert-error">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Warning!</strong> There was a problem with the upload. Please try again.
    </div>';
  }
}

if(isset($_POST['deleteFolder'])){

  function rrmdir($dir) {
   if (is_dir($dir)) {
     $objects = scandir($dir);
     foreach ($objects as $object) {
       if ($object != "." && $object != "..") {
         if (filetype($dir."/".$object) == "dir") rmdir($dir."/".$object); else unlink($dir."/".$object);
       }
     }
     reset($objects);
     rmdir($dir);
   }
 }

if(is_dir(PATH . '/' . $_POST['deleteFolder'])){
  rrmdir(PATH . '/' . $_POST['deleteFolder']);
}


}

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>FB Scheduler</title>
   <!-- Le styles -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">
  <link rel="stylesheet" href="toast.css">
  <link rel="stylesheet" href="style.css">
  <script src="http://code.jquery.com/jquery-latest.min.js"
        type="text/javascript"></script>
  <script>
    $(document).ready(function() {
        $('.myButton').click(function() {
          $('.myButton').removeClass('active');
          $(this).addClass('active');
          $('.tab').hide();
          var tab = $(this).attr('tabID');
          $('#'+tab).fadeIn();
        });
    });
  </script>
</head>
<body>
  <div class="container">
    <div class="grid header">
      <a href="#" tabID="tab7" class="myButton" style="float: right; background: none; border: none; box-shadow: none;"><img src="https://cdn4.iconfinder.com/data/icons/gnome-desktop-icons-png/PNG/64/Gnome-Preferences-System-64.png" style="float: right; margin: 10px;"></a>
      <a href="#" tabID="tab6" class="myButton" style="float: right; background: none; border: none;box-shadow: none;"><img src="https://cdn3.iconfinder.com/data/icons/snowish/64x64/apps/gnome-help.png" style="float: right; margin: 10px;"></a>
      
        <img src="images/logo.png" style="margin: 0; padding: 0; margin-top: -10px; margin-bottom: -13px; margin-left: -18px;">
        
        <div id="nav">
          <a href="logout.php" class="" style="float: right; text-decoration: none; color: #888; padding: 6px;">Log Out of FB Schedulr</a>
          <a href="#" tabID="tab1" class="myButton active">Manage Pages</a>
          <a href="#" tabID="tab3" class="myButton">Manage Photos &amp; Folders</a>
          <a href="#" tabID="tab2" class="myButton">Generate Posts</a>
          <a href="#" tabID="tab4" class="myButton">RSS Posts</a>
          <a href="#" tabID="tab5" class="myButton">Renew Token</a>
        </div>
    </div>
    <div class="grid content">
      <div id="tab1" class="tab">
        <div class="one-of-three unit">
          <div class="sidebar">
            <img src="https://cdn0.iconfinder.com/data/icons/woocons1/Button%20White%20Info.png" style="float: right; margin: 10px; margin-top: 20px;">
          
            <h3>How to Add Pages</h3>
            <p>Copy the full URL to your facebook page. For example: <strong>http://facebook.com/page/yourpage</strong></p>
          <p>This will allow you to connect to your page with your private key to schedule posts.</p>
          
          </div>
        </div>
        <div class="two-of-three unit">
          <h2><strong>Manage Your Facebook Pages</strong></h2>
          <p class="lead">FB Page to Schedule Posts</p>
              <form class="form-horizontal" method="POST">
                  <label>Add URL to Your Page</label>
            <input id="page" name="page" type="text" required="">
                  <p class="help-text">Copy and Paste The URL for Your FB Page</p>
                  <button id="add" name="add" class="saveButton">Add New Page</button>
              </form>
        </div>
      </div>





      <div id="tab2" class="tab" style="display: none;">
        <div class="one-of-three unit">
          <div class="sidebar">
            <img src="https://cdn0.iconfinder.com/data/icons/woocons1/Button%20White%20Info.png" style="float: right; margin: 10px; margin-top: 20px;">
          
            <h3>Scheduling Posts</h3>
          <p>You can choose the number of posts, the time of first post and the time that will pass between each post. </p>
          <p>You Cannot define a date in past. And All posts for future are just valid if they are not in next 10 minutes. Here is and example of a valid CSV file.</p>
          <img src="images/csv file.jpg" style="width: 100%">
          </div>
        </div>
        <div class="two-of-three unit">
          <h2><strong>Generate Posts (Images or .CSV)</strong></h2>
           <p class="lead">Schedule Posts or Post Multiple at Once</p>

    <form class="form-horizontal" onsubmit="return false;" id="formPosts">
     

          <label >Folder</label>
         <select id="subfolder" name="subfolder" required>
              <?php 
              echo '<option value="' , $folder , '">' , $folder ,  ' (root) </option>';
              $folders = glob(PATH . '/' . $folder . "/*", GLOB_ONLYDIR );
              foreach ($folders as $subfolder){
                $subfolder = explode('/', $subfolder);
                echo '<option value="' , $folder , '/', $subfolder[count($subfolder)-1] ,  '">' , $folder , '/', $subfolder[count($subfolder)-1] , '/' ,  '</option>';
              } 
              ?>
            </select>
          <br clear="all"><br>

          <label >Page</label>
            <select id="page" name="page[]" multiple required>
              <?php 
              $result = $db->selectAll("pages");
              if(!empty($result)){
               foreach ($result as $value){
                echo '<option value="' , $value['ID'] , '">' , $value['url'] ,  '</option>';
              } 
            }
            ?>
          </select>
        <br clear="all"><br>


      <!-- Multiple Radios (inline) -->
        <label >Number of posts</label>
          <label class="radio inline">
            <input type="radio" name="numposts" value="10" checked="checked">
            10
          </label>
          <label class="radio inline">
            <input type="radio" name="numposts" value="25">
            25
          </label>
          <label class="radio inline">
            <input type="radio" name="numposts" value="50">
            50
          </label>
          <label class="radio inline">
            <input type="radio" name="numposts" value="100">
            100
          </label>
          <label class="radio inline">
            <input type="radio" name="numposts" value="250">
            250
          </label>
          <label class="radio inline">
            <input type="radio" name="numposts" value="500">
            500
          </label>

        <br clear="all"><br>

        <label >Time of first post</label>
          <div id="datetimepicker1" class="input-append date">
            <input data-format="dd/MM/yyyy hh:mm:ss" type="text" id="dataehora" name="dataehora" required></input>
            <span class="add-on">
              <i data-time-icon="icon-time" data-date-icon="icon-calendar">
              </i>
            </span>
          </div>
        <br clear="all"><br>

        <label >Time bettween each post</label>
          <div style="padding-right: 50px;">
            <label class="radio inline">
            <input type="radio" name="time" value="5m" checked="checked">
            5 minutes
          </label>
          <label class="radio inline">
            <input type="radio" name="time" value="10m">
            10 minutes
          </label>
          <label class="radio inline">
            <input type="radio" name="time" value="15m">
            15 minutes
          </label>
          <label class="radio inline">
            <input type="radio" name="time" value="20m">
            20 minutes
          </label>
          <br clear="all">
          <label class="radio inline">
            <input type="radio" name="time" value="30m">
            30 minutes
          </label>
          <label class="radio inline">
            <input type="radio" name="time" value="1h">
            1 hour
          </label>
          <label class="radio inline">
            <input type="radio" name="time" value="2h">
            2 hours
          </label>
          <label class="radio inline">
            <input type="radio" name="time" value="3h">
            3 hours
          </label>
          <br clear="all">
          <label class="radio inline">
            <input type="radio" name="time" value="4h">
            4 hours
          </label>
          <label class="radio inline">
            <input type="radio" name="time" value="5h">
            5 hours
          </label>
          <label class="radio inline">
            <input type="radio" name="time" value="6h">
            6 hours
          </label>
          </div>
          <br clear="all">
        <br clear="all"><br>

        <label >MAX posts per day (if reach jump to next day)</label>
          <div>
            <input type="text" id="postsperday" name="postsperday"></input>
          </div>
        <br clear="all">

        <label >Choose Images or .CSV File</label>
          <label class="radio inline">
            <input type="radio" name="from" value="folder" checked="checked">
            Random images from folder
          </label>
          <label class="radio inline">
            <input type="radio" name="from" value="file">
            File .cvs
          </label>
          <br clear="all">
      <br clear="all">
 <button id="generatePosts" name="singlebutton" class="saveButton">Generate &amp; Schedule Posts</button>

  </form>

  <div class="progress progress-striped active" style="display:none">
    <div class="bar" style="width: 0%;"></div>
  </div>

  <ul class="thumbnails" id="listaposts">

  </ul>
  <br clear="all" />
  <div class="alert alert-success sucessoPost" style="display:none">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Success!</strong> All posts are done. <a onClick="window.location.reload()">Click here to go back!</a>
  </div>


  <div class="options" style="display:none">

    <div class="alert alert-error">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>Warning!</strong> After you click post dont close this page before all posts are done.
    </div>
    <hr>
    <button id="postall" name="singlebutton" class="btn btn-success">Post all</button>
    <a onClick="window.location.reload()" name="singlebutton" class="btn btn-error">Delete all and show form again</a>

  </div>
        </div>
      </div>








      <div id="tab3" class="tab" style="display: none;">
        <div class="one-of-three unit">
          <div class="sidebar">
            <img src="https://cdn0.iconfinder.com/data/icons/woocons1/Button%20White%20Info.png" style="float: right; margin: 10px; margin-top: 20px;">
          
            <h3>Uploading Images</h3>
          <p>The option folders let you upload new folders or images to folders that already exist.

You delete old folders you dont need too.</p>
          </div>
        </div>
        <div class="two-of-three unit">
          <h2><strong>Upload Photos</strong></h2>
           <p class="lead">Upload .zip Folders of Images or Add Images to Folders</p>

    <?php if(isset($message)) echo "<p>$message</p>"; ?>
    <form enctype="multipart/form-data" method="post" action="">
      <label>Choose a zip file to upload: <br><input type="file" name="zip_file" /></label>
      
      <input type="submit" name="submit" class="saveButton" value="Upload" />
    </form>
 <br>
    <label>Delete any folder</label>
    <form method="post" action="">
      <select id="deleteFolder" name="deleteFolder" required>
        <?php 
        $folders = glob(PATH . '/' . $folder . "/*", GLOB_ONLYDIR );
        foreach ($folders as $subfolder){
          $subfolder = explode('/', $subfolder);
          echo '<option value="' , $folder , '/', $subfolder[count($subfolder)-1] ,  '">' , $folder , '/', $subfolder[count($subfolder)-1] , '/' ,  '</option>';
        } 
        ?>
      </select>
      <input type="submit" name="submit" class="saveButton"  value="Delete this folder" />
    </form>
    <br>

    <label>Upload multiple images to specific folder</label>
          <select id="puthere" name="puthere" required>
              <?php 
              echo '<option value="' , $folder , '">' , $folder ,  ' (root) </option>';
              $folders = glob(PATH . '/' . $folder . "/*", GLOB_ONLYDIR );
              foreach ($folders as $subfolder){
                $subfolder = explode('/', $subfolder);
                echo '<option value="' , $folder , '/', $subfolder[count($subfolder)-1] ,  '">' , $folder , '/', $subfolder[count($subfolder)-1] , '/' ,  '</option>';
              } 
              ?>
            </select>

  <div id="file-uploader-demo1">    
    <noscript>      
      <p>Please enable JavaScript to use file uploader.</p>
      <!-- or put a simple form for upload here -->
    </noscript>         
  </div>
  <div class="qq-upload-extra-drop-area" style="padding: 50px; background: #ddd; border: 2px dashed #ccc; display: block; height: 200px; width: 100%;">Drop files here too</div>

        </div>
      </div>





      <div id="tab4"  class="tab" style="display: none;">
        <div class="one-of-three unit">
          <div class="sidebar">
            <img src="https://cdn0.iconfinder.com/data/icons/woocons1/Button%20White%20Info.png" style="float: right; margin: 10px; margin-top: 20px;">
          
            <h3>How to Setup</h3>
          <p>The option Live posts let you create posts from RSS feed. You can add multiple RSS feeds and then select one or more pages and set how many time you will wait between each verification. </p>
          <p>Then just click start posting. When a new post is found will post in all pages you select.</p>
          <p>You can not close the page because that page will be working search for new posts. But you can open other tabs of course.</p>
          </div>
        </div>
        <div class="two-of-three unit">
          <h2><strong>Post RSS</strong></h2>
          <p class="lead">Use any RSS feed to generate facebook posts.</p>
   <form class="form-horizontal" method="POST">
          <fieldset>

            <!-- Form Name -->

            <!-- Text input-->
              <label  for="page">RSS URL</label>
                <input id="rss" name="rss" type="text" placeholder="https://www.something.com/rss" required="">
                <p class="help-text">Your RSS URL</p>
             

                <button id="add" name="add" class="saveButton">Add RSS Feed</button>
             

          </fieldset>
        </form>

        <legend>Start posting live</legend>
        This will search for new posts in RSS, each time found a new one will post on pages you select. If you select more then one rss url the order of check will be random. Please dont close this page.

                <!-- Select Basic -->
        <div class="control-group">
          <label >Pick your rss</label>
          <div class="controls">
            <select id="urlRss" name="urlRss" multiple required>
              <?php 
              $result = $db->selectAll("rss");
              if(!empty($result)){
               foreach ($result as $value){
                echo '<option value="' , $value['url'] , '">' , $value['url'] ,  '</option>';
              } 
            }
            ?>
          </select>
        </div>
      </div>

              <!-- Select Basic -->
        <div class="control-group">
          <label >Pages</label>
          <div class="controls">
            <select id="pageRss" name="pageRss" multiple required>
              <?php 
              $result = $db->selectAll("pages");
              if(!empty($result)){
               foreach ($result as $value){
                echo '<option value="' , $value['ID'] , '">' , $value['url'] ,  '</option>';
              } 
            }
            ?>
          </select>
        </div>
      </div>


                    <!-- Select Basic -->
        <div class="control-group">
          <label >Time to check posts</label>
          <div class="controls">
            <select id="timeRss" name="timeRss" required>
                  <option value="5">5 minutes</option>
                  <option value="10">10 minutes</option>
                  <option value="15">15 minutes</option>
                  <option value="20">20 minutes</option>
                  <option value="30">30 minutes</option>
                  <option value="45">45 minutes</option>
                  <option value="60">60 minutes</option>
          </select>
        </div>
      </div>
      <button id="startRss" name="startRss" class="saveButton">Start Live Posting</button>
      <button id="stopRss" name="stopRss" class="saveButton" style="display:none" onClick="window.location.reload()">Stop Live Posting</button>
      <div id="postsDone"></div>
        </div>


      </div>


      <div id="tab5" class="tab" style="display: none;">
        <div class="one-of-three unit">
          <div class="sidebar">
            <h3>Setup Token</h3>
          <p>The first option you will see after login is the config. You will need to ask a new token when you use this script for the first time.

Time to time you shoud renew your token. Usually facebook tokens are valid for 60 days.</p>
          </div>
        </div>
        <div class="two-of-three unit">
          <h2><strong>Renew Your Token</strong></h2>
           <!--Body content-->
          <p class="lead">Ensure that Facebook allows you connection to the API</p>

          <?php 
          if (count($db->selectAll("config"))>0) {
           echo '<button class="btn btn-success">You have your token</button>';
           echo '<a href="https://www.facebook.com/dialog/oauth?client_id=' . $idApp. '&scope=manage_pages,publish_stream&response_type=token&redirect_uri=' . $canvasUrl . '"><button class="saveButton">Renew token</button></a>';

         } else {
           echo '<a href="https://www.facebook.com/dialog/oauth?client_id=' . $idApp. '&scope=manage_pages,publish_stream&response_type=token&redirect_uri=' . $canvasUrl . '"><button class="saveButton">Get your token</button></a>';
         }

         ?>
        </div>
      </div>

      <div id="tab6" class="tab" style="display: none">
        <div class="one-of-three unit">
          <div class="sidebar">
            <h3>Get Facebook API Key</h3>
          <p>The first option you will see after login is the config. You will need to ask a new token when you use this script for the first time.
</p><p>
Time to time you shoud renew your token. Usually facebook tokens are valid for 60 days.</p>
          </div>
        </div>
        <div class="two-of-three unit">
         <h2><strong>How to Get Facebook API Key</strong></h2>
          <img src="images/config.png" style="width: 100%">
        </div>
      </div>

      <div id="tab7" class="tab" style="display: none">
        <div class="one-of-three unit">
          <div class="sidebar">
            <h3>How to Setup App</h3>
          <p>Open the file config.php (is in root of the folder script). And choose an username, an password and write your App id, and app secret.
</p><p>
Time to time you shoud renew your token. Usually facebook tokens are valid for 60 days.</p>
          </div>
        </div>
        <div class="two-of-three unit">
         <h2><strong>How to Setup Facebook Scheduler</strong></h2>
         <div style="padding-right: 30px;">
            <p>Open the file config.php (is in root of the folder script). And choose an username, an password and write your App id, and app secret.</p>
<pre>
<code>&lt;php
  $user = "<b style="color:red">WriteSomeUsename</b>";     
  // USERNAME TO LOGIN EG: $user = "someUser";

  $psw  = "<b style="color:red">WriteSomeGoodPassword</b>"; 
  // PASSWORD TO LOGIN    EG : $psw = "safePassword277337";

  $idApp = "<b style="color:red">YourAppID</b>";   /
  / ID OF YOUR APPLICATION  EG : $idApp = "638263836299478";

  $appSecret = "<b style="color:red">YourAppSECRET</b>"; 
  //SECRET OF YOUR APP  EG : $appSecret = "ad73jdhsk288jdjfgks82hjsshf8hs";

  $canvasUrl = "<b style="color:red">YourCanvasUrl</b>"; 
  //   EG : $canvasUrl = "http://myurl.com";

  $folder = "upload"; 
  //NAME OF YOUR FOLDER WITH IMAGES  EG : $folder = "myImageFolder";
?></code>
</pre>  

    <p>After finish this configuration. Save this file, and upload all files and folders inside "script" folder to the root of your server. You can use any ftp client to this work. If you are not sure how to use an ftp client contact your hosting provider to help you. </p>
    <p>Make sure your upload folder have 755 permission. Inside the folder "upload" you can put more folders with images that you will use in your posts. Never delete your root folder "upload". Please rename the file a.htaccess to .htaccess using your ftp client.</p>

    <p>Now to start posting open your script adress in your brownser. And you will see login menu. You have to login with username and password you choose before.</p>
         </div>

        </div>
      </div>

      <div class="span-grid unit">
        <hr >
        <h3>Need more help?</h3>
        <p>Click the help icon on how to get your API key and settings icon to get information how to setup Facebook Scheduler to get your own username, password and setup your facebook API Key.</p>
      </div>
    </div>

    <div class="grid footer">
      <p>Copyright 2013 - FB Scheduler - All Rights Reserved</p>
    </div>
  </div>
</div></div>
</body>
</html>
<?php 
require_once(PATH . '/footer.php');
?>