<style>

#cd_mainWrapper{
	width: 892px;
}

#cd_mainContent{
	background: url(<?php echo site_url(); ?>/wp-content/plugins/invoicetogo/images/repeater.png) repeat-y;
	padding: 20px;
	padding-left: 40px;
	padding-right: 40px;
}

#cd_headerWrapper{
	width: 892px;
	height: 117px;
	margin-top: 20px;
	background: url(<?php echo site_url(); ?>/wp-content/plugins/invoicetogo/images/header.png) no-repeat;
}

#cd_keypad{
	padding-top: 114px;
	padding-left: 40px;
}

.cd_keypad{
	float: left;
	width: 62px;
	height: 60px;
	cursor: pointer;
	margin-left: 10px;
}

.cd_keypad img{
	margin-left: 20px;
	margin-top: 12px;
}

.cd_keypad:hover{
	background: url(<?php echo site_url(); ?>/wp-content/plugins/invoicetogo/images/keypad_selected.png) no-repeat;
}

.cd_keypad_active{
	background: url(<?php echo site_url(); ?>/wp-content/plugins/invoicetogo/images/keypad_active.png) no-repeat;
}

.cd_keypad_notactive{
	background: url(<?php echo site_url(); ?>/wp-content/plugins/invoicetogo/images/keypad_inactive.png) no-repeat;
}

.cd_keypad_selected{
	background: url(<?php echo site_url(); ?>/wp-content/plugins/invoicetogo/images/keypad_selected.png) no-repeat;
}

#twilioAPI{
	padding-top: 20px;
	padding-bottom: 20px;
	border-bottom: 1px dotted #dbdbdb;
	border-top: 1px dotted #dbdbdb;
}

input{
	padding: 10px;
	font-weight: bold;
	font-size: 16px;
	width: 770px;
}

select {
	padding: 10px;
	font-weight: bold;
	font-size: 16px;
	width: 770px;
}

textarea {
	padding: 10px;
	font-weight: bold;
	font-size: 16px;
	width: 770px;
	height: 150px;
}

.well {
	min-height: 20px;
	padding: 19px;
	margin-bottom: 20px;
	background-color: whiteSmoke;
	border: 1px solid #EEE;
	border: 1px solid rgba(0, 0, 0, 0.05);
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
	-webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
	-moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
	box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
	/*background: url(<?php echo site_url(); ?>/wp-content/plugins/invoicetogo/images/bg.png) repeat;*/
}

.sepper{
	border-top: 1px dotted #dbdbdb;
	height: 1px;
	margin-top: 20px;
	margin-bottom: 20px;
}

#depTitle{
	float: left;
	width: 450px;
}

#depStat{
	float: right;
	width: 100px;
	text-align: center;
}

.depStat1{
	float: right;
	width: 100px;
	text-align: center;
	background-color: #eaeaea;
	-webkit-border-radius: 3px 0px 0px 3px;
	border-radius: 3px 0px 0px 3px;
	border-top: 1px solid #e2e2e2;
	border-left: 1px solid #e2e2e2;
	border-right: 1px dotted #dbdbdb;
}

.depStat2{
	float: right;
	width: 100px;
	text-align: center;
	background-color: #eaeaea;
	-webkit-border-radius: 0px 3px 3px 0px;
	border-radius: 0px 3px 3px 0px;
	border-top: 1px solid #e2e2e2;
	border-right: 1px solid #e2e2e2;
}

.depStat3{
	float: right;
	width: 100px;
	text-align: center;
	background-color: #eaeaea;
	border-top: 1px solid #e2e2e2;
	border-right: 1px dotted #dbdbdb;
}


.btn-successx {
	background-color: #5BB75B;
	background-image: -ms-linear-gradient(top, #62C462, #51A351);
	background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#62C462), to(#51A351));
	background-image: -webkit-linear-gradient(top, #62C462, #51A351);
	background-image: -o-linear-gradient(top, #62C462, #51A351);
	background-image: -moz-linear-gradient(top, #62C462, #51A351);
	background-image: linear-gradient(top, #62C462, #51A351);
	background-repeat: repeat-x;
	border-color: #51A351 #51A351 #387038;
	border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
	filter: progid:dximagetransform.microsoft.gradient(startColorstr='#62c462', endColorstr='#51a351', GradientType=0);
	filter: progid:dximagetransform.microsoft.gradient(enabled=false);
}
.btnx {
	border-color: #CCC;
	border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
}

.btnx {
	display: inline-block;
	padding: 4px 10px 4px;
	margin-bottom: 0;
	font-size: 13px;
	line-height: 18px;
	color: #333;
	text-align: center;
	text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75);
	vertical-align: middle;
	cursor: pointer;
	background-color: whiteSmoke;
	background-image: -ms-linear-gradient(top, white, #E6E6E6);
	background-image: -webkit-gradient(linear, 0 0, 0 100%, from(white), to(#E6E6E6));
	background-image: -webkit-linear-gradient(top, white, #E6E6E6);
	background-image: -o-linear-gradient(top, white, #E6E6E6);
	background-image: linear-gradient(top, white, #E6E6E6);
	background-image: -moz-linear-gradient(top, white, #E6E6E6);
	background-repeat: repeat-x;
	border: 1px solid #CCC;
	border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
	border-color: #E6E6E6 #E6E6E6 #BFBFBF;
	border-bottom-color: #B3B3B3;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
	filter: progid:dximagetransform.microsoft.gradient(startColorstr='#ffffff', endColorstr='#e6e6e6', GradientType=0);
	filter: progid:dximagetransform.microsoft.gradient(enabled=false);
	-webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
	-moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
	box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
}

.uibutton {
position: relative;
z-index: 1;
overflow: visible;
display: inline-block;
padding: 0.3em 0.6em 0.375em;
border: 1px solid #999;
border-bottom-color: #888;
margin: 0;
text-decoration: none;
text-align: center;
font: bold 11px/normal 'lucida grande', tahoma, verdana, arial, sans-serif;
white-space: nowrap;
cursor: pointer;
color: #333;
background-color: #EEE;
background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#F5F6F6), to(#E4E4E3));
background-image: -moz-linear-gradient(#F5F6F6, #E4E4E3);
background-image: -o-linear-gradient(#F5F6F6, #E4E4E3);
background-image: linear-gradient(#F5F6F6, #E4E4E3);
filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#f5f6f6', EndColorStr='#e4e4e3');
-webkit-box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1), inset 0 1px 0 white;
-moz-box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1), inset 0 1px 0 #fff;
box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1), inset 0 1px 0 white;
zoom: 1;
-webkit-border-radius: 3px;
border-radius: 3px;
}

.uibutton.large {
font-size: 13px;
}

.uibutton.special {
border-color: #3B6E22 #3B6E22 #2C5115;
color: white;
background-color: #69A74E;
background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#75AE5C), to(#67A54B));
background-image: -moz-linear-gradient(#75AE5C, #67A54B);
background-image: -o-linear-gradient(#75AE5C, #67A54B);
background-image: linear-gradient(#75AE5C, #67A54B);
filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#75ae5c', EndColorStr='#67a54b');
-webkit-box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1), inset 0 1px 0 #98C286;
-moz-box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1), inset 0 1px 0 #98c286;
box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1), inset 0 1px 0 #98C286;
}

.uibutton.confirm {
border-color: #29447E #29447E #1A356E;
color: white;
background-color: #5B74A8;
background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#637BAD), to(#5872A7));
background-image: -moz-linear-gradient(#637BAD, #5872A7);
background-image: -o-linear-gradient(#637BAD, #5872A7);
background-image: linear-gradient(#637BAD, #5872A7);
filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#637bad', EndColorStr='#5872a7');
-webkit-box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1), inset 0 1px 0 #8A9CC2;
-moz-box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1), inset 0 1px 0 #8a9cc2;
box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1), inset 0 1px 0 #8A9CC2;
}

#editor-toolbar #edButtonHTML, #quicktags {display: none;}

.nav {
  margin-bottom: 20px;
  margin-left: 0;
  list-style: none;
  font-size: 18px;
}

.nav > li > a {
  display: block;
}

.nav > li > a:hover {
  text-decoration: none;
  background-color: #eeeeee;
}

.nav > .pull-right {
  float: right;
}

.nav-header {
  display: block;
  padding: 3px 15px;
  font-size: 11px;
  font-weight: bold;
  line-height: 20px;
  color: #999999;
  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
  text-transform: uppercase;
}

.nav li + .nav-header {
  margin-top: 9px;
}

.nav-list {
  padding-right: 15px;
  padding-left: 15px;
  margin-bottom: 0;
}

.nav-list > li > a,
.nav-list .nav-header {
 text-decoration: none;
  margin-right: -15px;
  margin-left: -15px;
  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
}

.nav-list > li > a {
  padding: 3px 15px;
  text-decoration: none;
}

.nav-list > .active > a,
.nav-list > .active > a:hover {
text-decoration: none;
  color: #ffffff;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.2);
  background-color: #0088cc;
}

.nav-list [class^="icon-"],
.nav-list [class*=" icon-"] {
  margin-right: 2px;
}

.nav-list .divider {
  *width: 100%;
  height: 1px;
  margin: 9px 1px;
  *margin: -5px 0 5px;
  overflow: hidden;
  background-color: #e5e5e5;
  border-bottom: 1px solid #ffffff;
}

.nav-tabs,
.nav-pills {
  *zoom: 1;
}

.nav-tabs:before,
.nav-pills:before,
.nav-tabs:after,
.nav-pills:after {
  display: table;
  line-height: 0;
  content: "";
}

.nav-tabs:after,
.nav-pills:after {
  clear: both;
}

.nav-tabs > li,
.nav-pills > li {
  float: left;
}

.nav-tabs > li > a,
.nav-pills > li > a {
  padding-right: 12px;
  padding-left: 12px;
  margin-right: 2px;
  line-height: 14px;
}

.nav-tabs {
  border-bottom: 1px solid #ddd;
}

.nav-tabs > li {
  margin-bottom: -1px;
}

.nav-tabs > li > a {
  padding-top: 8px;
  padding-bottom: 8px;
  line-height: 20px;
  border: 1px solid transparent;
  -webkit-border-radius: 4px 4px 0 0;
     -moz-border-radius: 4px 4px 0 0;
          border-radius: 4px 4px 0 0;
}

.nav-tabs > li > a:hover {
  border-color: #eeeeee #eeeeee #dddddd;
}

.nav-tabs > .active > a,
.nav-tabs > .active > a:hover {
  color: #555555;
  cursor: default;
  background-color: #ffffff;
  border: 1px solid #ddd;
  border-bottom-color: transparent;
}

.nav-pills > li > a {
  padding-top: 8px;
  padding-bottom: 8px;
  margin-top: 2px;
  margin-bottom: 2px;
  -webkit-border-radius: 5px;
     -moz-border-radius: 5px;
          border-radius: 5px;
}

.op_check{
	float: left;
	width: 40px;
	/*background-color: #e4e4e4;*/
	padding-top: 10px;
}

.op_item{
	float: left;
	width: 760px;
}

</style>