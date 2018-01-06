<?php

// Universal Variables

$pluginName = "optinremix";
$sitePath = site_url() . "/wp-content/plugins/". $pluginName;

?>

<style type="text/css">



	#mWrapper{

		width: 981px;
		margin-top: 20px;
		color: #333;
		font-smooth:always;
		-webkit-font-smoothing: antialiased;

	}

	#mLogo{
		width:981px;
		height: 147px;
	}

	#mNav{
		/*padding: 20px;*/
		padding-left: 20px;
		border: 1px solid black;
		background-image: -webkit-gradient(linear, center top, center bottom, from(#363637), to(#282829));
		background-image: -webkit-linear-gradient(top, #363637, #282829);
		background-image: -moz-linear-gradient(top, #363637, #282829);
		background-image: -o-linear-gradient(top, #363637, #282829);
		background-image: -ms-linear-gradient(top, #363637, #282829);
		background-image: linear-gradient(to bottom, #363637, #282829);
	}

	#mNav a{
		color: #FFF;
		text-decoration: none;
		font-weight: bold;
		font-size: 14px;
		text-shadow: 1px 1px 1px #000000;
        filter: dropshadow(color=#000000, offx=1, offy=1);
	}

	/*#mNav a:hover{
		color: #29a8e0;
	}*/

	.navItem{
		float: left;
		cursor: pointer;
		padding: 20px;
	}

	.navItem a{
		color: #FFF;
		text-decoration: none;
		font-weight: bold;
		font-size: 14px;
		text-shadow: 1px 1px 1px #000000;
        filter: dropshadow(color=#000000, offx=1, offy=1);
	}

	.navItem:hover{
		background-image: -webkit-gradient(linear, center top, center bottom, from(#282829), to(#363637));
		background-image: -webkit-linear-gradient(top, #282829, #363637);
		background-image: -moz-linear-gradient(top, #282829, #363637);
		background-image: -o-linear-gradient(top, #282829, #363637);
		background-image: -ms-linear-gradient(top, #282829, #363637);
		background-image: linear-gradient(to bottom, #282829, #363637);
		-webkit-text-shadow: 0 1px 0 #1e4f73;
		-moz-text-shadow: 0 1px 0 #1e4f73;
		text-shadow: 0 1px 0 #1e4f73;
		border-left: 1px solid #282829;
		border-right: 1px solid #282829;
		padding-left: 19px;
		padding-right: 19px;
	}

	.navSelected{
		background-image: -webkit-gradient(linear, center top, center bottom, from(#282829), to(#363637));
		background-image: -webkit-linear-gradient(top, #282829, #363637);
		background-image: -moz-linear-gradient(top, #282829, #363637);
		background-image: -o-linear-gradient(top, #282829, #363637);
		background-image: -ms-linear-gradient(top, #282829, #363637);
		background-image: linear-gradient(to bottom, #282829, #363637);
		-webkit-text-shadow: 0 1px 0 #1e4f73;
		-moz-text-shadow: 0 1px 0 #1e4f73;
		text-shadow: 0 1px 0 #1e4f73;
		border-left: 1px solid #282829;
		border-right: 1px solid #282829;
		padding-left: 19px;
		padding-right: 19px;
	}

	#container{
		padding: 20px;
		padding-top: 0;
	}

	/* DASHBOARD CSS :: */

	#listapps{
		background-color: #FFF;
		border-radius: 10px;
		border: 1px solid #ddd;
	}

	#dashinfo{
		float:left;
		width:182px;
		margin-left: 40px;
	}

	/*App Listing*/

	.appitem{
		padding: 10px;
		padding-bottom: 20px;
		background: #fff;
		border-bottom: 1px solid #ddd;
		color: #555;
	}

	.appitem:hover{
		background: #fafafa;


	}

	.appitem:hover .appMeta{
		color: #777;
	}

	.appitem:hover .appedit{
		display: block;
	}

	#appHeader{
		padding: 20px;
		color: #fff;
		text-decoration: none;
		font-weight: bold;
		font-size: 14px;
		border-top-left-radius: 10px;
		border-top-right-radius: 10px;
		background: #333;
	}

	.appimage{
		float: left;
		margin-left: 10px;
	}

	.appinfo{
		float: left;
		margin-left: 20px;
		width: 810px;
	}

	.appedit{
		float: left;
		margin-left: 20px;
		width: 50px;
		padding-top: 23px;
		display: none;
	}


	.appinfo .appTitle{
		font-weight: bold;
		display: block;
		font-size: 24px;
		margin-top: 13px;
		color: #fff;
		padding-bottom: 10px;
	}

	.appinfo .appMeta{
		color: #fff;
		font-size: 11px;
		padding-top: 4px;
	}
	.appinside .appTitle{
		font-weight: bold;
		display: block;
		font-size: 24px;
		margin-top: 13px;
		color: #555;
		padding-bottom: 10px;
	}

	.appinside .appMeta{
		color: #555;
		font-size: 11px;
		padding-top: 4px;
	}

	.appnew{
		padding: 30px;
	}

	.btn a{
		text-decoration: none;
		/*color: #FFF;*/
	}

	.blue-btn-2{
		float: right;
		color: #FFF;
		font-weight: bold;
		font-size: 14px;
		border-radius: 3px;
		padding: 10px;
		cursor: pointer;
		border: 1px solid #67191d;
		background-color: #be333b;
		background-image: -webkit-gradient(linear, center top, center bottom, from(#be333b), to(#9f252b));
		background-image: -webkit-linear-gradient(top, #be333b, #9f252b);
		background-image: -moz-linear-gradient(top, #be333b, #9f252b);
		background-image: -o-linear-gradient(top, #be333b, #9f252b);
		background-image: -ms-linear-gradient(top, #be333b, #9f252b);
		background-image: linear-gradient(to bottom, #be333b, #9f252b);
		-webkit-box-shadow: 0 1px 1px rgba(0,0,0,0.75), inset 0 1px 0 #cd3f49;
		-moz-box-shadow: 0 1px 1px rgba(0,0,0,0.75), inset 0 1px 0 #cd3f49;
		box-shadow: 0 1px 1px rgba(0,0,0,0.75), inset 0 1px 0 #cd3f49;
		-webkit-text-shadow: 0 1px 0 #67191d;
		-moz-text-shadow: 0 1px 0 #67191d;
		text-shadow: 0 1px 0 #67191d;
	}

	.blue-btn{
		color: #FFF;
		font-weight: bold;
		font-size: 14px;
		border-radius: 3px;
		padding: 10px;
		cursor: pointer;
		border: 1px solid #67191d;
		border-bottom: 1px solid #67191d;
		background-color: #e9573f;
		background-image: -webkit-gradient(linear, center top, center bottom, from(#d06242), to(#d16340));
		background-image: -webkit-linear-gradient(top, #d06242, #d16340);
		background-image: -moz-linear-gradient(top, #d06242, #d16340);
		background-image: -o-linear-gradient(top, #d06242, #d16340);
		background-image: -ms-linear-gradient(top, #d06242, #d16340);
		background-image: linear-gradient(to bottom, #d06242, #d16340);
		-webkit-box-shadow: 0 1px 1px rgba(0,0,0,0.25), inset 0 1px 0 #b33339;
		-moz-box-shadow: 0 1px 1px rgba(0,0,0,0.25), inset 0 1px 0 #b33339;
		box-shadow: 0 1px 1px rgba(0,0,0,0.25), inset 0 1px 0 #b33339;
		-webkit-text-shadow: 0 1px 0 #67191d;
		-moz-text-shadow: 0 1px 0 #67191d;
		text-shadow: 0 1px 0 #67191d;
	}

	.blue-btn-2 a{
		text-decoration: none;
		color: #FFF;
	}

	.blue-btn a{
		text-decoration: none;
		color: #FFF;
	}



	.black-btn{
		color: #FFF;
		font-weight: bold;
		font-size: 14px;
		border-radius: 3px;
		padding: 10px;
		cursor: pointer;
		border: 1px solid #194a73;
		border-bottom: 1px solid #085081;
		border: 1px solid #191919;
		border-bottom: 1px solid #191919;
		background-color: #363637;
		background-image: -webkit-gradient(linear, center top, center bottom, from(#be333b), to(#9f252b));
		background-image: -webkit-linear-gradient(top, #be333b, #9f252b);
		background-image: -moz-linear-gradient(top, #be333b, #9f252b);
		background-image: -o-linear-gradient(top, #be333b, #9f252b);
		background-image: -ms-linear-gradient(top, #be333b, #9f252b);
		background-image: linear-gradient(to bottom, #be333b, #9f252b);
		-webkit-box-shadow: 0 1px 1px rgba(0,0,0,0.75), inset 0 1px 0 #474747;
		-moz-box-shadow: 0 1px 1px rgba(0,0,0,0.75), inset 0 1px 0 #474747;
		box-shadow: 0 1px 1px rgba(0,0,0,0.75), inset 0 1px 0 #474747;
		-webkit-text-shadow: 0 1px 0 #191919;
		-moz-text-shadow: 0 1px 0 #191919;
		text-shadow: 0 1px 0 #191919;
	}

	.black-btn a{
		text-decoration: none;
		color: #FFF;
	}

	.grey-btn{
		font-weight: bold;
		font-size: 14px;
		border-radius: 3px;
		padding: 10px;
		cursor: pointer;
		border: 1px solid #b9b9b9;
		background-color: #fdfdfd;
		background-image: -webkit-gradient(linear, center top, center bottom, from(#fdfdfd), to(#f5f5f5));
		background-image: -webkit-linear-gradient(top, #fdfdfd, #f5f5f5);
		background-image: -moz-linear-gradient(top, #fdfdfd, #f5f5f5);
		background-image: -o-linear-gradient(top, #fdfdfd, #f5f5f5);
		background-image: -ms-linear-gradient(top, #fdfdfd, #f5f5f5);
		background-image: linear-gradient(to bottom, #fdfdfd, #f5f5f5);
		-webkit-box-shadow: 0 1px 1px rgba(0,0,0,0.25), inset 0 1px 0 #FFF;
		-moz-box-shadow: 0 1px 1px rgba(0,0,0,0.25), inset 0 1px 0 #FFF;
		box-shadow: 0 1px 1px rgba(0,0,0,0.25), inset 0 1px 0 #FFF;
		-webkit-text-shadow: 0 1px 0 #FFF;
		-moz-text-shadow: 0 1px 0 #FFF;
		text-shadow: 0 1px 0 #FFF;
	}

	.grey-btn a{
		text-decoration: none;
		color: #372f2b;
	}

	.saved {
		font-weight: bold;
		font-size: 14px;
		border-radius: 3px;
		padding: 10px;
		cursor: pointer;
		border: 1px solid #C19114;
		background-color: #FEEEB8;
		background: -moz-linear-gradient(top, #FEEEB8 0%, #FED554 100%);
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#FEEEB8), color-stop(100%,#FED554));
		background: -webkit-linear-gradient(top, #FEEEB8 0%,#FED554 100%);
		background: -o-linear-gradient(top, #FEEEB8 0%,#FED554 100%);
		background: -ms-linear-gradient(top, #FEEEB8 0%,#FED554 100%);
		background: linear-gradient(top, #FEEEB8 0%,#FED554 100%);
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#feeeb8', endColorstr='#fed554',GradientType=0 );
		-webkit-box-shadow: inset 0 2px 2px #FEF9E9, inset 0 -3px 5px #FCAA20, 0 1px 2px rgba(0, 0, 0, 0.61);
		box-shadow: inset 0 2px 2px #FEF9E9, inset 0 -3px 5px #FCAA20, 0 1px 2px rgba(0, 0, 0, 0.61);
	}

	.saved a{
		color: #6A4A00;
		text-shadow: 0 1px 2px white;
	}
	.tabber h2.headline {
		padding-left: 20px;padding-top: 40px; color: #324551; font-weight: bold;
		text-transform: uppercase
	}

	/*EDIT AREA*/

	.editTop{
		padding: 20px;
		padding-bottom: 30px;
		background: #333;
		border: 1px solid #ddd;
		border-bottom: none;
		border-top-right-radius: 10px;
		border-top-left-radius: 10px;
		color: #fff;
	}

	.editArea{
		padding: 20px;
		background-color: #FFF;
		border-left: 1px solid #c0c2c4;
		border-right: 1px solid #c0c2c4;
		border-bottom: 1px solid #c0c2c4;
		border-bottom-right-radius: 10px;
		border-bottom-left-radius: 10px;
	}

	.editNav{
		background: #ccc;
		color: #555;
		text-decoration: none;
		font-weight: bold;
		font-size: 14px;
		text-shadow: 1px 1px 1px #fff;
        filter: dropshadow(color=#fff, offx=1, offy=1);

        border-left: 1px solid #c0c2c4;
        border-right: 1px solid #c0c2c4;
	}

	.editItem{
		float: left;
		cursor: pointer;
		padding: 20px;
	}

	.editItem2{
		float: left;
		cursor: pointer;
		padding: 20px;
	}

	.editItem:hover{
		background: #333;
color: #fff;
		-webkit-text-shadow: 0 1px 0 #121d27;
		-moz-text-shadow: 0 1px 0 #121d27;
		text-shadow: 0 1px 0 #121d27;
	}

	.editSelected{
		background: #333;
color: #fff;
		-webkit-text-shadow: 0 1px 0 #121d27;
		-moz-text-shadow: 0 1px 0 #121d27;
		text-shadow: 0 1px 0 #121d27;
	}

	.editSection{
		padding: 20px;
		padding-top: 30px;
		border-bottom: 1px solid #d8d8d8;
	}

	.inputTitle{
		float: left;
		font-size: 14px;
		font-weight: bold;
		width: 300px;
		padding-top: 16px;
	}

	.inputSection{
		float: left;
		width: 550px;
		/*background-color: #000;*/
	}

	.inputField{

		height: 56px !important;
		/*padding-top: 26px !important;
		padding-bottom: 26px !important;*/
		line-height: 56px !important;

		padding-left: 15px !important;
		padding-right: 15px !important;
		border: 2px solid #DFDFDF !important;
		color: #333;
		font-weight: bold;
		width: 100%;
	}

	.inputField_select{

		padding: 10px !important;
		padding-top: 15px !important;
		font-size: 16px;
		border: 2px solid #DFDFDF !important;
		color: #333;
		font-weight: bold;
		width: 100% !important;
	}


	.inputField:focus{
		border-color: #e9322d !important;
	}

	.inputTextarea{
		padding: 25px !important;
		border: 2px solid #DFDFDF !important;
		color: #333;
		font-weight: bold;
		width: 100%;
		height: 170px;
	}

	.inputTextarea:focus {
		border: 2px solid #478ce8 !important;
	}

	.inputField:focus {
		border: 2px solid #478ce8 !important;
	}

	.iconHelp{
		margin-bottom: -4px;
		margin-left: 10px;
		cursor: help;
	}


	.titleBar{
		margin-top: -20px;
		margin-left: -20px;
		margin-right: -20px;
		padding-left: 40px;
		padding-right: 40px;
		padding-top: 10px;
		padding-bottom: 10px;
		border: 1px solid white;
		border-bottom: 1px solid #DDD;
		background-image: -webkit-gradient(linear, center top, center bottom, from(#fdfdfd 76%), to(#f5f5f5));
		background-image: -webkit-linear-gradient(top, #fdfdfd 76%, #f5f5f5);
		background-image: -moz-linear-gradient(top, #fdfdfd 76%, #f5f5f5);
		background-image: -o-linear-gradient(top, #fdfdfd 76%, #f5f5f5);
		background-image: -ms-linear-gradient(top, #fdfdfd 76%, #f5f5f5);
		background-image: linear-gradient(to bottom, #fdfdfd 76%, #f5f5f5);
	}

	.titleBar p{
		margin-top: -10px;
	}

	.alertIT {
		color: #C09853;
		padding: 8px 35px 8px 14px;
		margin-bottom: 20px;
		text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
		background-color: #FCF8E3;
		border: 1px solid #FBEED5;
		-webkit-border-radius: 4px;
		-moz-border-radius: 4px;
		border-radius: 4px;
	}

	.alertIT2 {
		color: #3e3e3f;
		padding: 8px 35px 8px 14px;
		margin-bottom: 20px;
		text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
		background-color: #f2f2f2;
		-webkit-border-radius: 4px;
		-moz-border-radius: 4px;
		border-radius: 4px;
	}

	#chooseapp{
		padding: 10px;
		margin-top: 5px;
		background-color: #f3f8fc;
		border: 3px solid #c3dfed;
		-webkit-border-radius: 10px;
		border-radius: 10px;
	}

	#chooseapp img{
		padding: 10px;
		cursor: pointer;
	}

	.choosenapp{
		padding: 4px;
		background-color: #22649b;
		/*border: 3px solid #c3dfed;*/
		-webkit-border-radius: 10px;
		border-radius: 10px;
	}

	.choosenapp span{
		color: #FFF;
	}


	.appselect{
		padding: 4px;
		float: left;
		text-align: center;
	}

	.appselect img{
		display: block;
	}

	.appname{
		font-weight: bold;
	}

	.ex-tooltip{
		position: absolute;
		background-color: #000;
		color: #FFF;
	}

	.stat{
		float: left;
		width: 398px;
		height: 90px;
		text-align: center;
		background-color: #f2f2f2;
		padding: 20px;
		-webkit-border-radius: 10px;
		-moz-border-radius: 10px;
		border-radius: 10px;
	}

	.stat:hover{
		background-color: #fbfbfb;
	}

	.stat_number{
		display: block;
		font-size: 30px;
		font-weight: bold;
		padding-top: 25px;
	}

	.stat_title{
		display: block;
		padding-top: 15px;
		font-size: 12px;
		font-weight: bold;
		color: #4e4e4e;
	}

	.dub_select_image{
		float: left;
		cursor: pointer;
		background-color: #f4f4f4;
		/*border: 2px solid #ffffff;*/
		border-radius: 5px;
		-webkit-box-shadow: 0 1px 5px rgba(0,0,0,0.29);
		-moz-box-shadow: 0 1px 5px rgba(0,0,0,0.29);
		box-shadow: 0 1px 5px rgba(0,0,0,0.29);
		margin-right: 20px;
		margin-bottom: 20px;
	}

	.dub_select_image:hover{
		background-color: #ed5c45;
	}

	.dub_select_image img{
		padding-left: 15px;
		padding-right: 15px;
		padding-top: 15px;
		padding-bottom: 12px;
	}

	.dub_select_image_selected{
		float: left;
		background-color: #ed5c45;
		border-radius: 5px;
		-webkit-box-shadow: 0 1px 5px rgba(0,0,0,0.29);
		-moz-box-shadow: 0 1px 5px rgba(0,0,0,0.29);
		box-shadow: 0 1px 5px rgba(0,0,0,0.29);
	}

	.color-field-picker{
		background-image: url(<?php echo $sitePath; ?>/images/color.png) !important;
		background-position: right center;
		background-repeat: no-repeat;
	}

	.date-field-picker{
		background-image: url(<?php echo $sitePath; ?>/images/date.png) !important;
		background-position: right center;
		background-repeat: no-repeat;
	}

	.color-addon{
		margin-top: 1px !important;
		text-align: center;
		background-color: #efeef5 !important;
		width: 40px !important;
		height: 44px !important;
		border-top: 2px solid #DFDFDF !important;
		border-bottom: 2px solid #DFDFDF !important;
		border-right: 2px solid #DFDFDF !important;
		border-left: 0px !important;
		-webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075) !important;
		-moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075) !important;
		box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075) !important;
		-webkit-transition: border linear .2s, box-shadow linear .2s !important;
	}
	h1 {
		color: #222;
	}


	/* Custom Skin */

	/* Main Header */
	#appHeader {
		background: #2B333F;
		border: 1px solid #222427;
		text-shadow: 0 1px 0 #1e252e;
		box-shadow: 0 0 5px #1e252e inset
	}
		#appHeader span {
			color: #fff;
		}
	.appitem:hover{
		background: #fafafa;
	}

	.appitem:hover .appMeta,
	.appitem:hover .appTitle {
		color: #222;
	}

	/* Edit and Nav */
	.editTop {
		background: #2B333F;
		color: #eee;
		border: 1px solid #222427;
	}
	.editTop a {
		color: #eee
	}
	.editNav {
		background-color: #fdfdfd;
		background-image: -webkit-gradient(linear, center top, center bottom, from(#fdfdfd), to(#f5f5f5));
		background-image: -webkit-linear-gradient(top, #fdfdfd, #f5f5f5);
		background-image: -moz-linear-gradient(top, #fdfdfd, #f5f5f5);
		background-image: -o-linear-gradient(top, #fdfdfd, #f5f5f5);
		background-image: -ms-linear-gradient(top, #fdfdfd, #f5f5f5);
		background-image: linear-gradient(to bottom, #fdfdfd, #f5f5f5);
		-webkit-box-shadow: 0 1px 1px rgba(0,0,0,0.25), inset 0 1px 0 #FFF;
		-moz-box-shadow: 0 1px 1px rgba(0,0,0,0.25), inset 0 1px 0 #FFF;
		box-shadow: 0 1px 1px rgba(0,0,0,0.25), inset 0 1px 0 #FFF;
		-webkit-text-shadow: 0 1px 0 #FFF;
		-moz-text-shadow: 0 1px 0 #FFF;
		text-shadow: 0 1px 0 #FFF;
		border-bottom: 1px solid #ccc;
	}
	.editTop .appTitle {
		color: #fff;
	}
	.editTop .appMeta {
		color: #fff;
	}
	.editSelected,
	.editItem:hover{
		background: #2B333F;
		color: #fff;
		text-shadow: 0 1px 0 #1e252e;
		box-shadow: 0 0 5px #1e252e inset
	}
	.titleBar {
		background: #f5f7f8;
	}


</style>
