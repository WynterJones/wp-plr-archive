
<style type="text/css">
	
	#wrapper-plugin p {
		padding: 5px 10px;
		margin: 0;
		color: #444;
		line-height: 1.5em;
		font-size: 12px;	
		font-family: 'Numans', sans-serif;
	}
	#wrapper-plugin h1, h2, h3, h4, h5 {
		padding: 5px 10px;
		color: #444;
		line-height: 1.5em;	
		
		letter-spacing: -1px;
		margin: 0;
		font-family: 'Droid Sans', sans-serif;
	}
	#wrapper-plugin h3, h4, h5 {
		padding: 5px 10px;
		font-weight: normal;
		color: #444;
		line-height: 1.5em;	
		letter-spacing: 0;
		margin: 0; 
		font-family: 'Droid Sans', sans-serif;
	}
	#wrapper-plugin a {
		color: #225a99;
		text-decoration: none;
		font-family: 'Numans', sans-serif;
	}
	
	.clear {
		clear: both;
	}
	
	.clearfix:after {
	    content: "."; 
	    display: block; 
	    height: 0; 
	    clear: both; 
	    visibility: hidden;
	}
	
	.clearfix {display: inline-block;}
	
	* html .clearfix {height: 1%;}
	.clearfix {display: block;}
	
	.wrapper-plugin {
		width: 97%;
		margin-top:  20px;
		background: url(<?php echo $curUrl; ?>/images/bg.png) repeat-x top #fff;
		clear: both;
		min-height: 135px;
		border: 1px solid #ccc;
		padding: 5px;
		-moz-border-radius: 5px;
		-webkit-border-radius: 5px;
		-khtml-border-radius: 5px; 
		border-radius: 5px;
		padding-top: 15px;
		position: relative;
		box-shadow: 0 5px 5px -3px #ccc;
	}
	
	.wrapper-plugin.client {
		width: 97%;
		margin-top:  20px;
		background: url(<?php echo $curUrl; ?>/images/bg2.png) repeat-x top #f2f2f2;
		clear: both;
		height: 105px;
		overflow: hidden;
		border: 1px solid #ccc;
		padding: 5px;
		-moz-border-radius: 5px;
		-webkit-border-radius: 5px;
		-khtml-border-radius: 5px; 
		border-radius: 5px;
		padding-top: 0;
		position: relative;
		box-shadow: 0 5px 5px -3px #ccc;
	}
	
	
	.float {
			float: left;
			width: 272px;
			padding: 10px 10px;
			padding-left: 20px;
			
		}
			.float strong {
				padding: 8px 0;
				margin-bottom: 5px;
				display: block;
				font-size: 14px;
				font-weight: bold;
				color: #2f6275;
			}
			.float input[type=text] {
				padding: 5px;
				width: 275px;
				font-size: 14px;
				color: #444;
			}
			.float select {
				padding: 15px;
				width: 243px;
				font-size: 14px;
				color: #444;
			}
		.titleName {
			background: url(<?php echo $imagePath; ?>/images/titleName.png) no-repeat top left;
			color: #444;
			text-shadow: 0 0 1px #fff;
			padding-bottom: 15px !important;
			width: 617px !important; 
			padding-top: 13px !important;
			height: 28px;
			margin-top: -10px;
		}
			.titleName strong { font-size: 16px  !important; color: #fff !important; text-shadow: 0 0 1px #ddd;  font-weight: bold  !important;}
			
		.webinarName {
			background: url(<?php echo $imagePath; ?>/images/webinarName.png) no-repeat top left;
			color: #444;
			text-shadow: 0 0 1px #fff;
			padding-bottom: 15px !important;
			padding-top: 13px !important;
			width: 605px !important; 
			
		}
			.webinarName strong { font-size: 16px  !important; font-weight: bold  !important;}
		.large {
			float: left;
			width: 625px;
			padding: 10px 10px;
			padding-bottom: 0;
			padding-left: 20px;
		}
			.large strong {
				padding: 8px 0;
				margin-bottom: 5px;
				display: block;
				font-size: 14px;
				font-weight: bold;
				color: #2f6275;
			}
			.large textarea {
				padding-left: 5px;
				width: 575px;
				height: 70px;
				font-size: 12px;
				margin-left: -5px;
				background: #fafafa;
			}
			.large input[type=text] {
				color: #444;
				width: 575px;
				float: left;
				font-size: 14px;
			}
		hr {
			display: block;
			border: none;
			margin: 10px 0;
			clear: both;
		}
	
		
	#logoArea {
		min-width: 250px;
		float: left;
		position: absolute;
		top: 15px;
		left: 0;
	}
		#logoArea h1 {
			padding: 0px;
			font-size: 26px;
			margin: 0;
			padding-left: 15px;
			margin-top: -7px;
			margin-bottom: 4px;
			color: #555;
		}
		.clientImage {
			background: url(<?php echo $imagePath; ?>/images/noclientimage.png) no-repeat;
			float: left;
			width: 107px;
			height: 107px;
			border: 3px solid #fff;
			-moz-border-radius: 5px;
			-webkit-border-radius: 5px;
			-khtml-border-radius: 5px;
			border-radius: 5px;
			margin: 15px 10px;
			  -moz-box-shadow:    0 1px 1px 0 #999;
			  -webkit-box-shadow: 0 1px 1px 0 #999;
			  box-shadow:         0 1px 1px 0 #999;
		}
		#clientName {
			float: left;
			padding: 5px;
			padding-left: 0;
		}
		#clientName h2 {
			text-shadow: 2px 2px 0 #1a1919; 
			font-size: 29px;
			color: #fff;
			margin-top: 5px;
		}
		#clientName h4 {
			text-shadow: 2px 2px 0 #1a1919; 
			font-size: 12px;
			color: #ccc;
			margin-top: -10px;
		}
	#statArea {
		min-width: 650px;
		height: 120px;
		float: right;
	}
		#statArea a.editInfo {
			float: right;
			margin: 4px;
		-moz-box-shadow:inset 0px 1px 0px 0px #ffffff;
		-webkit-box-shadow:inset 0px 1px 0px 0px #ffffff;
		box-shadow:inset 0px 1px 0px 0px #ffffff;
		background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #fafafa), color-stop(1, #fff) );
		background:-moz-linear-gradient( center top, #fafafa 5%, #fff 100% );
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fafafa', endColorstr='#fff');
		background-color:#fafafa;
		-moz-border-radius:6px;
		-webkit-border-radius:6px;
		border-radius:6px;
		border:1px solid #dcdcdc;
		display:inline-block;
		color:#2f3134;
		font-family:arial;
		font-size:15px;
		font-weight:bold;
		padding:6px 24px;
		text-decoration:none;
		text-shadow:1px 1px 0px #ddd;
	margin-top: -5px;
		}
		
	#clientNav {
		width: 600px;
		float: right;
		clear: right;
		position: relative;
	}
		#clientNav ul { list-style: none; float: right; }
		#clientNav ul li { 
			float: left;
			display: block;
		 }
		 #clientNav ul li a { 
			float: left;
			display: block;
			padding: 14px;
			color: #606060;
			font-size: 17px;
			text-decoration: none;
			font-weight: bold;
			border-left: 1px solid #fff;
			border-right: 1px solid #e4e5e6;
		 }
			 #clientNav ul li a.reports {
			 	padding-left: 50px;
				background: url(<?php echo $imagePath; ?>/images/reports.png) no-repeat top left;
				background-position: 5px 5px;
			 }
			 	#clientNav ul li a.reports.active, #clientNav ul li a.reports:hover {
				 	padding-left: 50px;
					background: url(<?php echo $imagePath; ?>/images/reports-hover.png) no-repeat top left #fff;
					background-position: 5px 5px;
				 }
			  #clientNav ul li a.landingpages {
			 	padding-left: 50px;
				background: url(<?php echo $imagePath; ?>/images/landingpages.png) no-repeat top left;
				background-position: 5px 5px;
			 }
			 	#clientNav ul li a.landingpages.active, #clientNav ul li a.landingpages:hover {
				 	padding-left: 50px;
					background: url(<?php echo $imagePath; ?>/images/landingpages-hover.png) no-repeat top left #fff;
					background-position: 5px 5px;
				 }
			  #clientNav ul li a.notifications {
			 	padding-left: 50px;
				background: url(<?php echo $imagePath; ?>/images/notifications.png) no-repeat top left;
				background-position: 5px 5px;
			 }
			 	#clientNav ul li a.notifications.active, #clientNav ul li a.notifications:hover {
				 	padding-left: 50px;
					background: url(<?php echo $imagePath; ?>/images/notifications-hover.png) no-repeat top left #fff;
					background-position: 5px 5px;
				 }
			 #clientNav ul li a.leads {
			 	padding-left: 50px;
				background: url(<?php echo $imagePath; ?>/images/leads.png) no-repeat top left;
				background-position: 5px 5px;
			 }
				 #clientNav ul li a.leads.active, #clientNav ul li a.leads:hover {
				 	padding-left: 50px;
					background: url(<?php echo $imagePath; ?>/images/leads-hover.png) no-repeat top left #fff;
					background-position: 5px 5px;
				 }
	#statBoxes {
		width: 277px;
		height: 91px;
		background: url(<?php echo $imagePath; ?>/images/quickStats.png) no-repeat top;
		float: right;
		clear: right;
		padding-left: 15px;
		margin-top: 0px;
		margin-right: -5px;
	}
		#statBoxes h3.totalVisitors {
			float: left;
			font-size: 32px;
			color: #fff;
			padding-top: 9px;
			text-align: center;
			width: 85px;
			font-weight: bold;
			text-shadow: 0 0 1px #333;
		}
		#statBoxes h3.conversions {
			float: left;
			font-size: 16px;
			color: #fff;
			padding-top: 26px;
			text-align: center;
			width: 45px;
			font-weight: bold;
			text-shadow: 0 0 1px #333;
		}
		#statBoxes h3.totalLeads {
			float: left;
			font-size: 32px;
			color: #fff;
			padding-top: 9px;
			text-align: center;
			width: 82px;
			font-weight: bold;
			text-shadow: 0 0 1px #333;
		}
	#clientContent {
		clear: both;
		width: 100%;
	}
	.innerBar {
		background: #efeff0;
		-moz-border-radius: 5px;
		-webkit-border-radius: 5px;
		-khtml-border-radius: 5px;
		border-radius: 5px;
		width: 99%;
		margin: 0 auto;
		margin-bottom: 15px;
		margin-top: -10px;
		height: 56px;
	}
		.innerBar h1 {
			float: left;
			background: url(<?php echo $imagePath; ?>/images/manageLeads.png) no-repeat left top;
			padding: 10px;
			padding-left: 50px;
			padding-top: 12px;
			margin-left: 8px;
			margin-top: 4px;
			font-size: 24px;
			color: #636363;
		}
			.innerBar h1.notification {
				background: url(<?php echo $imagePath; ?>/images/notification.png) no-repeat left top;
			}
		.innerBar a.csv {
			float: right;
			width: 159px;
			height: 45px;
			background: url(<?php echo $imagePath; ?>/images/csv.png) no-repeat left top;
			text-indent: -99999px;
			margin: 1px 4px;
			clear: both;
		}
		.innerBar .save {
			float: right;
			width: 169px;
			height: 45px;
			background: url(<?php echo $imagePath; ?>/images/save.png) no-repeat left top;
			text-indent: -99999px;
			margin: 1px 4px;
			clear: both;
			border: none;
			cursor: pointer;
		}
	#topBar {
		background: url(<?php echo $imagePath; ?>/images/topbar.png) repeat-x top;
		border: 1px solid #ccc;
		-moz-border-radius: 5px;
		-webkit-border-radius: 5px;
		-khtml-border-radius: 5px;
		border-radius: 5px;
		margin-right: 2%;
		margin-top: 20px;
		height: 50px;
		box-shadow: 0 5px 5px -3px #ccc;
	}
		#topBar h1 {
			float: left;
			background: url(<?php echo $imagePath; ?>/images/client.png) no-repeat left top;
			padding: 10px;
			padding-left: 56px;
			padding-top: 12px;
			margin-top: 4px;
			font-size: 24px;
			color: #636363;
		}
			#topBar h1.newClient {
				float: left;
				background: url(<?php echo $imagePath; ?>/images/new.png) no-repeat left top;
				padding: 10px;
				margin-left: 10px;
				padding-left: 46px;
				padding-top: 10px;
				margin-top: 7px;
				font-size: 24px;
				color: #636363;
			}
		#topBar a.editInfo {
			float: right;
			width: 155px;
			height: 45px;
			background: url(<?php echo $imagePath; ?>/images/addClient.png) no-repeat left top;
			text-indent: -99999px;
			margin: 3px;
		}
			#topBar .saveClient {
				float: right;
				width: 155px;
				height: 45px;
				background: url(<?php echo $imagePath; ?>/images/saveClient.png) no-repeat left top;
				text-indent: -99999px;
				margin: 3px;
				border: none;
				cursor: pointer;
			}
	a.viewDashboard {
		float: right; 
		clear: both;
		padding: 0 10px;
		color: #333 !important;
		font-weight: bold;
		margin-top: 19px;
		font-size: 14px;
		text-decoration: none;
	}
	#formBox {
		clear: both;
	}
		.columnBox {
			float: left;
			width: 55%;
			padding-left: 15px;
			margin-top: -5px;
			padding-bottom: 20px;
		}
		.larger {
			width: 66% !important;
		}
		.smaller {
			width: 50% !important;
		}
		.smallest {
			width: 40% !important;
		}
			.smaller textarea {
				margin-left: -30px !important;
				float: left;
			}
			.columnBox h2 {
				font-size: 18px;
				color: #666;
				margin: 0;
				padding: 5px 0;
			}
			.columnBox h4 {
				font-size: 13px;
				color: #777;
				font-weight: normal;
				margin: 0;
				padding: 5px 0;
			}
		.columnBox strong {
			display: block;
			padding: 10px;
			color: #666;
			padding-left: 0;
		}
		.columnBox input[type=text] {
			width: 100%;
			padding: 10px;
			margin-bottom: 20px;
			font-size: 15px;
		}
		.columnBox textarea {
			width: 100%;
			padding: 10px;
			margin-bottom: 20px;
			font-size: 15px;
		}
		.columnBox strong {
			display: block;
			padding: 10px;
			padding-left: 0;
		}
		.columnBox select {
			width: 100%;
			height: 40px;
			padding: 10px;
			margin-bottom: 20px;
			font-size: 15px;
		}
		.tab {
			padding: 10px 0;
			position: relative;
		}
	#showLeads td {
		border: 1px solid #eee;
	}
	#showLeads tr {
		border: 1px solid #eee;
		padding: 0;
	}
	#showLeads tr:nth-child(odd) {
	   background-color: #ccc;
	}
	.css3button {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
	color: #333333;
	padding: 10px 20px;
	background: -moz-linear-gradient(
		top,
		#fafafa 0%,
		#ebebeb);
	background: -webkit-gradient(
		linear, left top, left bottom, 
		from(#fafafa),
		to(#ebebeb));
	border-radius: 5px;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border: 1px solid #f5f5f5;
	-moz-box-shadow:
		0px 1px 1px rgba(000,000,000,0.5),
		inset 0px 0px 1px rgba(184,184,184,0.7);
	-webkit-box-shadow:
		0px 1px 1px rgba(000,000,000,0.5),
		inset 0px 0px 1px rgba(184,184,184,0.7);
	text-shadow:
		0px -1px 0px rgba(252,249,252,0.4),
		0px 1px 0px rgba(125,125,125,0.3);
	text-decoration: none;
	margin-top: 5px;
	display: block;
	width: 200px;
	text-align: center;
}

.well {
  padding: 19px;
  background-color: #f5f5f5;
  border: 1px solid #eee;
  border: 1px solid rgba(0, 0, 0, 0.05);
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
  -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
}

.well2 {
  padding: 10px;
  background-color: #f5f5f5;
  border: 1px solid #eee;
  border: 1px solid rgba(0, 0, 0, 0.05);
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
  -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
}

.fielddesc{
	display: block;
	font-size: 12px;
	color: #767676;
}

.fieldtitle{
	display: block;
	font-size: 16px;
	font-weight: bold;
}

.fieldarea input{
	margin-top: 10px;
}

.fieldError{
	color: #b94a48;
 	border-color: #b94a48;
	 -webkit-box-shadow: 0 0 6px #d59392;
	 -moz-box-shadow: 0 0 6px #d59392;
	 box-shadow: 0 0 6px #d59392;
}

.odd {
   background: #fafafa;
}
.gridtable {
	border-top: 1px solid #ddd; 
}
.gridtable tr, .gridtable td, .gridtable th {
	border: none !important;
	border-bottom: 1px solid #ddd !important;
}
	}
		.columnBox2 strong {
			display: block;
			padding: 10px;
			color: #666;
			padding-left: 0;
			font-size: 17px;
			padding-bottom: 20px;
			display: block;
		}
		.columnBox2 input[type=text] {
			width: 100%;
			padding: 10px;
			margin-bottom: 20px;
			font-size: 15px;
		}
		
/*	NEW LANDING PAGE EDIT CSS	*/

#landingpageTOPbar{
	background: url(<?php echo $imagePath; ?>/images/landingpage_topbar.png) repeat-x;
	height: 54px;
	width: 100%;
	margin-left: -5px;
	padding-right: 10px;
	margin-top: -27px;
}

#lp_title{
	float: left;
	width: 200px;
}

#lp_edittitle{
	float: right;
	width: 370px;
	margin-right: -10px;
}

#lp_menu{
	float: right;
	width: 352px;
	background-color: #f7f7f7;
	border-left-color: #e4e4e4;
	border-left-style: solid;
	border-left-width: 1px;
	margin-right: -5px;
	margin-top: -16px;
	-moz-border-radius-bottomright: 3px;
	-moz-border-radius-bottomleft: 3px;
	-webkit-border-radius: px px 3px 3px;
	border-radius: px px 3px 3px;
}

#lp_menu1{
	float: right;
	width: 352px;
	background-color: #f7f7f7;
	border-left-color: #e4e4e4;
	border-left-style: solid;
	border-left-width: 1px;
	margin-right: -5px;
	margin-top: -16px;
	-moz-border-radius-bottomright: 3px;
	-moz-border-radius-bottomleft: 3px;
	-webkit-border-radius: px px 3px 3px;
	border-radius: px px 3px 3px;
}


#lp_menu_fade{
	float: right;
	width: 352px;
}

#lp_content{

}

.lpmenu_item{
	border-bottom: 1px solid #e5e5e5;
	padding-top: 14px;
	padding-bottom: 10px;
	padding-left: 15px;
	cursor: pointer;
}

.lpmenu_item:hover{
	background-color: #FFF;
	margin-left: -1px;
	padding-left: 16px;
}
.lpmenu_item1{
	border-bottom: 1px solid #e5e5e5;
	padding-top: 14px;
	padding-bottom: 10px;
	padding-left: 15px;
	cursor: pointer;
}

.lpmenu_item1:hover{
	background-color: #FFF;
	margin-left: -1px;
	padding-left: 16px;
}

.lpmenu_current1{
	background-color: #FFF;
	margin-left: -1px;
	padding-left: 16px;
}
.lpmenu_current{
	background-color: #FFF;
	margin-left: -1px;
	padding-left: 16px;
}

.lp_edit_indent{
	margin-left: 15px;
	margin-right: 20px;
}
.color {
	text-indent: -999999px !important;
	border: 1px solid #fff !important;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	-khtml-border-radius: 5px;
	border-radius: 5px;
	background: url(<?php echo $imagePath; ?>/images/select2.png) no-repeat top left #fff;
	background-position: -3px -3px ;
	float: right !important;
	width: 32px !important; 
	height: 32px !important;
	clear: both !important;
	padding: 0 !important;
}

hr {
	clear: both;
	border: none;
	border-top: 1px solid #ddd;
	margin-bottom: 30px;
	display: block;
}
</style>