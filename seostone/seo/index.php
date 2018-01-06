<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>SEO STONE</title>
  <?php $actualURL = $_GET['url']; ?>
  <?php
// Turn off all error reporting
error_reporting(0);
?>
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css"> 
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="number.js"></script>

   


    <style>
      body {
        background: none;
      }
    .container {
      width: 750px;
      margin: 0;
      border-radius: 10px;
    }
        .modal-body {
      
      padding: 40px;
    }
    h1, h2, h3, h4, h5, h6, p {
      padding:  0;
      margin: 0;
    }
    h5 {
      padding: 10px;
      background: #eee;
      color: #fff;
      text-shadow: 1px 1px 0 #9c1d06;
      font-weight: normal;
      border: 1px solid #9c1d06;
-moz-box-shadow: 0 1px 5px rgba(202,202,202,.75), inset 0 0 5px rgba(221,65,36,.75);
-webkit-box-shadow: 0 1px 5px rgba(202,202,202,.75), inset 0 0 5px rgba(221,65,36,.75);
box-shadow: 0 1px 5px rgba(202,202,202,.75), inset 0 0 5px rgba(221,65,36,.75);
background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEwMCAxMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxsaW5lYXJHcmFkaWVudCBpZD0iaGF0MCIgZ3JhZGllbnRVbml0cz0ib2JqZWN0Qm91bmRpbmdCb3giIHgxPSI1MCUiIHkxPSIxMDAlIiB4Mj0iNTAlIiB5Mj0iLTEuNDIxMDg1NDcxNTIwMmUtMTQlIj4KPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2RkNDEyMyIgc3RvcC1vcGFjaXR5PSIxIi8+CjxzdG9wIG9mZnNldD0iMSUiIHN0b3AtY29sb3I9IiNkZDQxMjMiIHN0b3Atb3BhY2l0eT0iMSIvPgo8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNmNjU2MzgiIHN0b3Atb3BhY2l0eT0iMSIvPgogICA8L2xpbmVhckdyYWRpZW50PgoKPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEwMCIgaGVpZ2h0PSIxMDAiIGZpbGw9InVybCgjaGF0MCkiIC8+Cjwvc3ZnPg==);
background-image: -moz-linear-gradient(bottom, #dd4123 0%, #dd4123 0.76%, #f65638 100%);
background-image: -o-linear-gradient(bottom, #dd4123 0%, #dd4123 0.76%, #f65638 100%);
background-image: -webkit-linear-gradient(bottom, #dd4123 0%, #dd4123 0.76%, #f65638 100%);
background-image: linear-gradient(bottom, #dd4123 0%, #dd4123 0.76%, #f65638 100%);
border-top-left-radius: 5px;
      border-top-right-radius: 5px;
      text-align: center;
      font-weight: bold;
      letter-spacing: 1px;
      font-size: 13px;
    }
    h2 {
      text-align: center;
      font-size: 47px;
      letter-spacing: -1px;
      text-shadow: 2px 2px 0 #fff;
    }
    .form-control {
      margin: 8px 0;
    }
    .inner {
      padding: 5px 10px;
      background: #fff;
      border: 1px solid #9c1d06;
      border-top: none;
      border-bottom-left-radius: 5px;
      border-bottom-right-radius: 5px;
      margin-bottom: 20px;
      -moz-box-shadow: 0 1px 5px rgba(202,202,202,.75), inset 0 0 5px rgba(202,202,202,.75);
-webkit-box-shadow: 0 1px 5px rgba(202,202,202,.75), inset 0 0 5px rgba(202,202,202,.75);
box-shadow: 0 1px 5px rgba(202,202,202,.75), inset 0 0 5px rgba(202,202,202,.75);
    }
      .inner:hover {
        background: #fffad2;
        -moz-box-shadow: 0 1px 5px rgba(202,202,202,.75), inset 0 0 5px #ffe7a6;
-webkit-box-shadow: 0 1px 5px rgba(202,202,202,.75), inset 0 0 5px #ffe7a6;
box-shadow: 0 1px 5px rgba(202,202,202,.75), inset 0 0 5px #ffe7a6;
cursor: help;
      }
      
    .whois p {
      font-size: 11px;
      color: #999;
      line-height: 20px;
      padding: 10px;
    }
    </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12 header">
        <!-- <h1>SEO<strong style="color: #ba6ead">STONE</strong> </h1>
        <h3>Evaluate Your Website in Style</h3> -->
        <img src="info.png" style=" float: right">
        <img src="logo.png" style="margin-bottom: 10px; width: 300px">
        <hr>
        <h4 style="color: #0652CE; font-size: 18px;"><strong><?php echo $actualURL; ?></strong></h4>
        <p><strong><?php 
 require("age.php");
$w=new DomainAge();
echo $w->age('wikipedia.org'); ?></strong></p>
       <hr>
      </div>
      <div class="col-md-6">
        <h5>Indexed Pages on Google</h5>
        <div class="inner google" title="The amount of pages that Google has indexed in their search results.">
          <h2><?php
function GoogleIP($domain){
$url="http://ajax.googleapis.com/ajax/services/search/web?v=1.0&q=site:".$domain."&filter=0";
$ch=curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_USERAGENT,$_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt ($ch, CURLOPT_HEADER, 0);
curl_setopt ($ch, CURLOPT_NOBODY, 0);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);
$json = curl_exec($ch);
curl_close($ch);
$data=json_decode($json,true);
if($data['responseStatus']==200)
return $data['responseData']['cursor']['resultCount'];
else
return false;
}

$domain=$actualURL; //your domain name
echo GoogleIP($domain);

?></h2>
        </div>
      </div>

      <div class="col-md-6">
        <h5>Alexa Ranking</h5>
        <div class="inner alexa" title="Alexa page rank which lists all websites.">
          <h2  class="alexaNumber"><?php
$url=$actualURL;
$xml = simplexml_load_file('http://data.alexa.com/data?cli=10&dat=snbamz&url='.$url);
$rank=isset($xml->SD[1]->POPULARITY)?$xml->SD[1]->POPULARITY->attributes()->TEXT:0;
$web=(string)$xml->SD[0]->attributes()->HOST;
echo $rank;
?></h2>
        </div>
      </div>




      <div class="col-md-4">
        <h5>Google Page Rank</h5>
        <div class="inner google" title="PageRank works by counting the number and quality of links to a page to determine a rough estimate of how important the website is.">
          <h2><?php
require("pageRank.php");
$url=$actualURL;
$pr = new PR();
echo $pr->get_google_pagerank($url);
?></h2>
        </div>
      </div>


<?php require("shareCount.php");
$obj=new shareCount($actualURL); ?>

      <div class="col-md-4">
        <h5>Twitter</h5>
        <div class="inner twitter" title="The amount of shares for this page on Twitter">
          <h2 class="twitterNumber"><?php echo $obj->get_tweets(); ?></h2>
        </div>
      </div>

      <div class="col-md-4">
        <h5>Facebook</h5>
        <div class="inner facebook" title="The amount of shares for this page on Facebook">
          <h2 class="facebookNumber"><?php echo $obj->get_fb(); ?></h2>
        </div>
      </div>

      

      <div class="col-md-4">
        <h5>LinkedIn</h5>
        <div class="inner linkedin" title="The amount of shares for this page on Linked In">
          <h2 class="linkedinNumber"><?php echo $obj->get_linkedin(); ?></h2>
        </div>
      </div>

      <div class="col-md-4">
        <h5>Delicious</h5>
        <div class="inner delicious" title="The amount of shares for this page on Delicious">
          <h2 class="deliciousNumber"><?php echo $obj->get_delicious(); ?></h2>
        </div>
      </div>

      <div class="col-md-4">
        <h5>Stumble Upon</h5>
        <div class="inner stumbleupon" title="The amount of shares for this page on Stumble Upon">
          <h2 class="stumbleuponNumber"><?php echo $obj->get_stumble(); ?></h2>
        </div>
      </div>

      


     


      <div class="col-md-12" style="opacity: .7; padding-top: 10px">
        <p>Copyright &copy; <strong>SEO Stone</strong> All Rights Reserved</p>
      </div>
    </div>
  </div>
<script type="text/javascript">
      $(window).ready(function() {
      
       var stumbleuponNumber = $('.stumbleuponNumber').text();
       $('.stumbleuponNumber').text($.number(stumbleuponNumber));

       var facebookNumber = $('.facebookNumber').text();
       $('.facebookNumber').text($.number(facebookNumber));

       var stumbleuponNumber = $('.stumbleuponNumber').text();
       $('.stumbleuponNumber').text($.number(stumbleuponNumber));

       var linkedinNumber = $('.linkedinNumber').text();
       $('.linkedinNumber').text($.number(linkedinNumber));

       var deliciousNumber = $('.deliciousNumber').text();
       $('.deliciousNumber').text($.number(deliciousNumber));

       var alexaNumber = $('.alexaNumber').text();
       $('.alexaNumber').text($.number(alexaNumber));


    var twitterNumber = $('.twitterNumber').text();
       $('.twitterNumber').text($.number(twitterNumber));
      
      });
    </script>
</body>
</html>