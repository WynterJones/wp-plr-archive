<?php

// Universal Variables

$pluginName = "affiliatepressx";
$sitePath = site_url() . "/wp-content/plugins/". $pluginName;

?>

<style type="text/css">
	

html, body {
    height: 100%;
}
	#mWrapper{

		width: 981px;
		margin-top: 20px;
		margin-left: -20px;
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
		-webkit-text-shadow: 0 1px 0 #135891;
		-moz-text-shadow: 0 1px 0 #135891;
		text-shadow: 0 1px 0 #135891;
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
		-webkit-text-shadow: 0 1px 0 #135891;
		-moz-text-shadow: 0 1px 0 #135891;
		text-shadow: 0 1px 0 #135891;
		border-left: 1px solid #282829;
		border-right: 1px solid #282829;
		padding-left: 19px;
		padding-right: 19px;
	}

	#container{
		padding: 20px;
		border-bottom-right-radius: 10px;
		border-bottom-left-radius: 10px;
		border-top-right-radius: 10px;
		border-top-left-radius: 10px;
	}
.tabBlock h1 {
	color: #287eb7;
}
.tabBlock {
	padding-left: 40px; padding-top: 20px; background: #000; margin-left: -20px; width: 899px; height: 80px; color: #444; text-shadow: 0 1px 0 #fff; 
background: none;
}/*
.activeTabs, .tabBlock:hover {
-moz-box-shadow: inset 0 0 62px rgba(18,80,134,.98);
-webkit-box-shadow: inset 0 0 62px rgba(18,80,134,.98);
box-shadow: inset 0 0 62px rgba(18,80,134,.98);
background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEwMCAxMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxsaW5lYXJHcmFkaWVudCBpZD0iaGF0MCIgZ3JhZGllbnRVbml0cz0ib2JqZWN0Qm91bmRpbmdCb3giIHgxPSI1MCUiIHkxPSIxMDAlIiB4Mj0iNTAlIiB5Mj0iLTEuNDIxMDg1NDcxNTIwMmUtMTQlIj4KPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzI3ODlkZCIgc3RvcC1vcGFjaXR5PSIxIi8+CjxzdG9wIG9mZnNldD0iOTklIiBzdG9wLWNvbG9yPSIjMzhhNGYyIiBzdG9wLW9wYWNpdHk9IjEiLz4KPHN0b3Agb2Zmc2V0PSIxMDAlIiBzdG9wLWNvbG9yPSIjMzhhNGYyIiBzdG9wLW9wYWNpdHk9IjEiLz4KICAgPC9saW5lYXJHcmFkaWVudD4KCjxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIxMDAiIGhlaWdodD0iMTAwIiBmaWxsPSJ1cmwoI2hhdDApIiAvPgo8L3N2Zz4=);
background-image: -moz-linear-gradient(bottom, #2789dd 0%, #38a4f2 99.24%, #38a4f2 100%);
background-image: -o-linear-gradient(bottom, #2789dd 0%, #38a4f2 99.24%, #38a4f2 100%);
background-image: -webkit-linear-gradient(bottom, #2789dd 0%, #38a4f2 99.24%, #38a4f2 100%);
background-image: linear-gradient(bottom, #2789dd 0%, #38a4f2 99.24%, #38a4f2 100%);

color: #fff;
text-shadow: 0 1px 0 #08416d;
}*/
	/* DASHBOARD CSS :: */

	#listapps{
		border: 1px solid #ddd;
		background: #fafafa;
		border-radius: 10px;
		margin-bottom: -10px;
	}

	#dashinfo{
		float:left;
		width:182px;
		margin-left: 40px;
	}

	/*App Listing*/

	.appitem{
		padding: 10px;
		text-shadow: 1px 1px 1px #fff;
        filter: dropshadow(color=#000000, offx=1, offy=1);
		border-bottom: 1px solid #ccc;
		box-shadow: 0 0 3px #f8f8f8 inset;
		background-color: #e8e8e8;
		background-image: -webkit-gradient(linear, center top, center bottom, from(#e8e8e8), to(#f8f8f8));
		background-image: -webkit-linear-gradient(top, #e8e8e8, #f8f8f8);
		background-image: -moz-linear-gradient(top, #e8e8e8, #f8f8f8);
		background-image: -o-linear-gradient(top, #e8e8e8, #f8f8f8);
		background-image: -ms-linear-gradient(top, #e8e8e8, #f8f8f8);
		background-image: linear-gradient(to bottom, #e8e8e8, #f8f8f8);
		cursor: pointer;
		height: 66px;

	}

	.appitem:hover{
		box-shadow: 0 0 23px #ddd inset;
		
	}

	.appitem .appMeta{
		color: #ccc;
	}
	

	.appitem:hover .appedit{
		display: block;
	}

	#appHeader{
		padding: 20px;
		color: #663f07;
		text-decoration: none;
		font-weight: bold;
		font-size: 14px;
		border: 1px solid #b87441;
		border-top-left-radius: 10px;
		border-top-right-radius: 10px;
background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEwMCAxMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxsaW5lYXJHcmFkaWVudCBpZD0iaGF0MCIgZ3JhZGllbnRVbml0cz0ib2JqZWN0Qm91bmRpbmdCb3giIHgxPSI1MCUiIHkxPSIxMDAlIiB4Mj0iNTAlIiB5Mj0iLTEuNDIxMDg1NDcxNTIwMmUtMTQlIj4KPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2ZkYmU1YyIgc3RvcC1vcGFjaXR5PSIxIi8+CjxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iI2ZkZDc3MCIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgIDwvbGluZWFyR3JhZGllbnQ+Cgo8cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMTAwIiBoZWlnaHQ9IjEwMCIgZmlsbD0idXJsKCNoYXQwKSIgLz4KPC9zdmc+);
background-image: -moz-linear-gradient(bottom, #fdbe5c 0%, #fdd770 100%);
background-image: -o-linear-gradient(bottom, #fdbe5c 0%, #fdd770 100%);
background-image: -webkit-linear-gradient(bottom, #fdbe5c 0%, #fdd770 100%);
background-image: linear-gradient(bottom, #fdbe5c 0%, #fdd770 100%);

		text-shadow: 0 1px 0 #ffd9a3;
	}

	.appimage{
		float: left;
		margin-left: 10px;
	}

	.appinfo{
		float: left;
		margin-left: 5px;
		width: 810px;
		height: 80px;
	}

	.appedit{
		float: left;
		margin-left: 20px;
		width: 50px;
		padding-top: 23px;
		display: none;
	}

	.appTitle{
		font-weight: bold;
		display: block;
		font-size: 20px;
		padding-top: 5px;
		padding-bottom: 10px;
		color: #444;
		padding-left: 30px;
		margin-top: 7px;
	}

	.appMeta{
		font-size: 14px;	
		padding-left: 30px;
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
		border: 1px solid #306e17;
background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEwMCAxMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxsaW5lYXJHcmFkaWVudCBpZD0iaGF0MCIgZ3JhZGllbnRVbml0cz0ib2JqZWN0Qm91bmRpbmdCb3giIHgxPSI1MCUiIHkxPSIxMDAlIiB4Mj0iNTAlIiB5Mj0iLTEuNDIxMDg1NDcxNTIwMmUtMTQlIj4KPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzYzYTY0OSIgc3RvcC1vcGFjaXR5PSIxIi8+CjxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iIzg1YmY2NyIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgIDwvbGluZWFyR3JhZGllbnQ+Cgo8cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMTAwIiBoZWlnaHQ9IjEwMCIgZmlsbD0idXJsKCNoYXQwKSIgLz4KPC9zdmc+);
background-image: -moz-linear-gradient(bottom, #63a649 0%, #85bf67 100%);
background-image: -o-linear-gradient(bottom, #63a649 0%, #85bf67 100%);
background-image: -webkit-linear-gradient(bottom, #63a649 0%, #85bf67 100%);
background-image: linear-gradient(bottom, #63a649 0%, #85bf67 100%);

		text-shadow: 0 1px 0 #2c6314;
	}

	.blue-btn-2 a{
		text-decoration: none;
		color: #FFF;
	}

	.blue-btn a{
		text-decoration: none;
		color: #FFF;
	}

	.blue-btn:hover{
		border: 1px solid #306e17;
background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEwMCAxMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxsaW5lYXJHcmFkaWVudCBpZD0iaGF0MCIgZ3JhZGllbnRVbml0cz0ib2JqZWN0Qm91bmRpbmdCb3giIHgxPSI1MCUiIHkxPSIxMDAlIiB4Mj0iNTAlIiB5Mj0iLTEuNDIxMDg1NDcxNTIwMmUtMTQlIj4KPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzg3YzE2YiIgc3RvcC1vcGFjaXR5PSIxIi8+CjxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iI2FkZGY5MyIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgIDwvbGluZWFyR3JhZGllbnQ+Cgo8cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMTAwIiBoZWlnaHQ9IjEwMCIgZmlsbD0idXJsKCNoYXQwKSIgLz4KPC9zdmc+);
background-image: -moz-linear-gradient(bottom, #87c16b 0%, #addf93 100%);
background-image: -o-linear-gradient(bottom, #87c16b 0%, #addf93 100%);
background-image: -webkit-linear-gradient(bottom, #87c16b 0%, #addf93 100%);
background-image: linear-gradient(bottom, #87c16b 0%, #addf93 100%);

		text-shadow: 0 1px 0 #2c6314;
	}


	.blue-btn2{
		color: #896b26;
		font-weight: bold;
		font-size: 14px;
		border-radius: 3px;
		padding: 10px;
		cursor: pointer;
		border: 1px solid #824e27;
background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEwMCAxMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxsaW5lYXJHcmFkaWVudCBpZD0iaGF0MCIgZ3JhZGllbnRVbml0cz0ib2JqZWN0Qm91bmRpbmdCb3giIHgxPSI1MCUiIHkxPSIxMDAlIiB4Mj0iNTAlIiB5Mj0iLTEuNDIxMDg1NDcxNTIwMmUtMTQlIj4KPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2ZkYmU1YyIgc3RvcC1vcGFjaXR5PSIxIi8+CjxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iI2ZkZDc3MCIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgIDwvbGluZWFyR3JhZGllbnQ+Cgo8cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMTAwIiBoZWlnaHQ9IjEwMCIgZmlsbD0idXJsKCNoYXQwKSIgLz4KPC9zdmc+);
background-image: -moz-linear-gradient(bottom, #fdbe5c 0%, #fdd770 100%);
background-image: -o-linear-gradient(bottom, #fdbe5c 0%, #fdd770 100%);
background-image: -webkit-linear-gradient(bottom, #fdbe5c 0%, #fdd770 100%);
background-image: linear-gradient(bottom, #fdbe5c 0%, #fdd770 100%);

		text-shadow: 0 1px 0 #fde0a4;
	}

	.blue-btn2 a{
		text-decoration: none;
		color: #896b26;
	}

	

	.blue-btn2:hover{
		border: 1px solid #824e27;
background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEwMCAxMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxsaW5lYXJHcmFkaWVudCBpZD0iaGF0MCIgZ3JhZGllbnRVbml0cz0ib2JqZWN0Qm91bmRpbmdCb3giIHgxPSI1MCUiIHkxPSIxMDAlIiB4Mj0iNTAlIiB5Mj0iLTEuNDIxMDg1NDcxNTIwMmUtMTQlIj4KPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2ZkZDc2ZiIgc3RvcC1vcGFjaXR5PSIxIi8+CjxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iI2ZjZTVhOSIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgIDwvbGluZWFyR3JhZGllbnQ+Cgo8cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMTAwIiBoZWlnaHQ9IjEwMCIgZmlsbD0idXJsKCNoYXQwKSIgLz4KPC9zdmc+);
background-image: -moz-linear-gradient(bottom, #fdd76f 0%, #fce5a9 100%);
background-image: -o-linear-gradient(bottom, #fdd76f 0%, #fce5a9 100%);
background-image: -webkit-linear-gradient(bottom, #fdd76f 0%, #fce5a9 100%);
background-image: linear-gradient(bottom, #fdd76f 0%, #fce5a9 100%);


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
		background-image: -webkit-gradient(linear, center top, center bottom, from(#363637), to(#282829));
		background-image: -webkit-linear-gradient(top, #363637, #282829);
		background-image: -moz-linear-gradient(top, #363637, #282829);
		background-image: -o-linear-gradient(top, #363637, #282829);
		background-image: -ms-linear-gradient(top, #363637, #282829);
		background-image: linear-gradient(to bottom, #363637, #282829);
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

	/*EDIT AREA*/

	.editTop{
		padding: 20px;
		padding-bottom: 0;
		background-color: #363637;
		background-image: -webkit-gradient(linear, center top, center bottom, from(#363637), to(#282829));
		background-image: -webkit-linear-gradient(top, #363637, #282829);
		background-image: -moz-linear-gradient(top, #363637, #282829);
		background-image: -o-linear-gradient(top, #363637, #282829);
		background-image: -ms-linear-gradient(top, #363637, #282829);
		background-image: linear-gradient(to bottom, #363637, #282829);
		border-top-right-radius: 10px;
		border-top-left-radius: 10px;
	}

	.editArea{
		padding: 20px;
		background-color: #fafafa;
		border-left: 1px solid #c0c2c4;
		border-right: 1px solid #c0c2c4;
		border-bottom: 1px solid #c0c2c4;
		border-bottom-right-radius: 10px;
		border-bottom-left-radius: 10px;
	}

	.editNav{
		background-color: #363637;
		background-image: -webkit-gradient(linear, center top, center bottom, from(#363637), to(#282829));
		background-image: -webkit-linear-gradient(top, #363637, #282829);
		background-image: -moz-linear-gradient(top, #363637, #282829);
		background-image: -o-linear-gradient(top, #363637, #282829);
		background-image: -ms-linear-gradient(top, #363637, #282829);
		background-image: linear-gradient(to bottom, #363637, #282829);
		color: #FFF;
		text-decoration: none;
		font-weight: bold;
		font-size: 14px;
		text-shadow: 1px 1px 1px #000000;
        filter: dropshadow(color=#000000, offx=1, offy=1);
        border-top: 1px solid #000;
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
		background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEwMCAxMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxsaW5lYXJHcmFkaWVudCBpZD0iaGF0MCIgZ3JhZGllbnRVbml0cz0ib2JqZWN0Qm91bmRpbmdCb3giIHgxPSI1MCUiIHkxPSIxMDAlIiB4Mj0iNTAlIiB5Mj0iLTEuNDIxMDg1NDcxNTIwMmUtMTQlIj4KPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzE0NzBjMSIgc3RvcC1vcGFjaXR5PSIxIi8+CjxzdG9wIG9mZnNldD0iNCUiIHN0b3AtY29sb3I9IiMyMzgxZDUiIHN0b3Atb3BhY2l0eT0iMSIvPgo8c3RvcCBvZmZzZXQ9IjUwJSIgc3RvcC1jb2xvcj0iIzJiOGZlMyIgc3RvcC1vcGFjaXR5PSIxIi8+CjxzdG9wIG9mZnNldD0iNTMlIiBzdG9wLWNvbG9yPSIjMzE5YmU5IiBzdG9wLW9wYWNpdHk9IjEiLz4KPHN0b3Agb2Zmc2V0PSI5NyUiIHN0b3AtY29sb3I9IiMzZGFiZjkiIHN0b3Atb3BhY2l0eT0iMSIvPgo8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiMxOTg2ZDIiIHN0b3Atb3BhY2l0eT0iMSIvPgogICA8L2xpbmVhckdyYWRpZW50PgoKPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEwMCIgaGVpZ2h0PSIxMDAiIGZpbGw9InVybCgjaGF0MCkiIC8+Cjwvc3ZnPg==);
background-image: -moz-linear-gradient(bottom, #1470c1 0%, #2381d5 4%, #2b8fe3 49.63%, #319be9 53.13%, #3dabf9 97.24%, #1986d2 100%);
background-image: -o-linear-gradient(bottom, #1470c1 0%, #2381d5 4%, #2b8fe3 49.63%, #319be9 53.13%, #3dabf9 97.24%, #1986d2 100%);
background-image: -webkit-linear-gradient(bottom, #1470c1 0%, #2381d5 4%, #2b8fe3 49.63%, #319be9 53.13%, #3dabf9 97.24%, #1986d2 100%);
background-image: linear-gradient(bottom, #1470c1 0%, #2381d5 4%, #2b8fe3 49.63%, #319be9 53.13%, #3dabf9 97.24%, #1986d2 100%);

		-webkit-text-shadow: 0 1px 0 #135891;
		-moz-text-shadow: 0 1px 0 #135891;
		text-shadow: 0 1px 0 #135891;
	}

	.editSelected{
		
		background-image: linear-gradient(to bottom, #2BA0E8, #45b7fe);background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEwMCAxMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxsaW5lYXJHcmFkaWVudCBpZD0iaGF0MCIgZ3JhZGllbnRVbml0cz0ib2JqZWN0Qm91bmRpbmdCb3giIHgxPSI1MCUiIHkxPSIxMDAlIiB4Mj0iNTAlIiB5Mj0iLTEuNDIxMDg1NDcxNTIwMmUtMTQlIj4KPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzE0NzBjMSIgc3RvcC1vcGFjaXR5PSIxIi8+CjxzdG9wIG9mZnNldD0iNCUiIHN0b3AtY29sb3I9IiMyMzgxZDUiIHN0b3Atb3BhY2l0eT0iMSIvPgo8c3RvcCBvZmZzZXQ9IjUwJSIgc3RvcC1jb2xvcj0iIzJiOGZlMyIgc3RvcC1vcGFjaXR5PSIxIi8+CjxzdG9wIG9mZnNldD0iNTMlIiBzdG9wLWNvbG9yPSIjMzE5YmU5IiBzdG9wLW9wYWNpdHk9IjEiLz4KPHN0b3Agb2Zmc2V0PSI5NyUiIHN0b3AtY29sb3I9IiMzZGFiZjkiIHN0b3Atb3BhY2l0eT0iMSIvPgo8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiMxOTg2ZDIiIHN0b3Atb3BhY2l0eT0iMSIvPgogICA8L2xpbmVhckdyYWRpZW50PgoKPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEwMCIgaGVpZ2h0PSIxMDAiIGZpbGw9InVybCgjaGF0MCkiIC8+Cjwvc3ZnPg==);
background-image: -moz-linear-gradient(bottom, #1470c1 0%, #2381d5 4%, #2b8fe3 49.63%, #319be9 53.13%, #3dabf9 97.24%, #1986d2 100%);
background-image: -o-linear-gradient(bottom, #1470c1 0%, #2381d5 4%, #2b8fe3 49.63%, #319be9 53.13%, #3dabf9 97.24%, #1986d2 100%);
background-image: -webkit-linear-gradient(bottom, #1470c1 0%, #2381d5 4%, #2b8fe3 49.63%, #319be9 53.13%, #3dabf9 97.24%, #1986d2 100%);
background-image: linear-gradient(bottom, #1470c1 0%, #2381d5 4%, #2b8fe3 49.63%, #319be9 53.13%, #3dabf9 97.24%, #1986d2 100%);

		-webkit-text-shadow: 0 1px 0 #135891;
		-moz-text-shadow: 0 1px 0 #135891;
		text-shadow: 0 1px 0 #135891;
	}

	.helper {
		clear: left;
		display: block;
		font-size: 11px;
		padding-top: 10px;
		background: url(https://cdn2.iconfinder.com/data/icons/splashyIcons/help.png) no-repeat left;
		background-position: 2px 13px;
		opacity: .3;
		padding-left: 27px;
		padding-top: 15px;
		padding-right: 60px;
	}

	.editSection{
		padding: 20px;
		padding-top: 30px;
		border-bottom: 1px dashed #ddd;
	}

	.inputTitle{
		float: left;
		font-size: 18px;
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

		padding: 10px 15px !important;
		display: block;
		font-size: 15px  !important;
		height: 55px !important;
		border: 2px solid #DFDFDF !important;
		color: #333;
		font-weight: bold;
		width: 100%;
	}

	.inputField_select{
		
		height: 56px !important;
		/*padding-top: 26px !important;
		padding-bottom: 26px !important;*/
		line-height: 56px !important;

		padding-left: 15px !important;
		padding-right: 15px !important;
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
		padding-left: 88px;
		padding-right: 40px;
		padding-top: 13px;
		padding-bottom: 20px;
		border: 1px solid white;
		background: #fff;
		border-bottom: 1px solid #DDD;
	}

	.dashboard_icon {
		background: url(https://cdn2.iconfinder.com/data/icons/linecons/32/shop-48.png) no-repeat #fff;
		background-position: 25px 23px;
	}
	.main_icon {
		background: url(https://cdn2.iconfinder.com/data/icons/linecons/32/settings-48.png) no-repeat #fff;
		background-position: 25px 23px;
	}
	.deal_icon {
		background: url(https://cdn2.iconfinder.com/data/icons/linecons/32/banknote-48.png) no-repeat #fff;
		background-position: 25px 23px;
	}
	.sidebar_icon {
		background: url(https://cdn2.iconfinder.com/data/icons/linecons/32/pen-48.png) no-repeat #fff;
		background-position: 25px 23px;
	}
	.design_icon {
		background: url(https://cdn2.iconfinder.com/data/icons/linecons/32/star-48.png) no-repeat #fff;
		background-position: 25px 23px;
	}
	.shortcode_icon {
		background: url(https://cdn2.iconfinder.com/data/icons/linecons/32/mail-48.png) no-repeat #fff;
		background-position: 25px 23px;
	}
	.content_icon {
		background: url(https://cdn2.iconfinder.com/data/icons/linecons/32/note-48.png) no-repeat #fff;
		background-position: 25px 23px;
	}
	.popup_icon {
		background: url(https://cdn2.iconfinder.com/data/icons/linecons/32/location-48.png) no-repeat #fff;
		background-position: 25px 23px;
	}

	.titleBar p{
		margin-top: -10px;=

	}
	.titleBar h2 {
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
		width: 245px;
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
		margin-bottom: 20px;
		-webkit-box-shadow: 0 1px 5px rgba(0,0,0,0.29);
		-moz-box-shadow: 0 1px 5px rgba(0,0,0,0.29);
		box-shadow: 0 1px 5px rgba(0,0,0,0.29);
		margin-right: 20px; 
	}

	.dub_select_image:hover{
		background-color: #329be9; 
	}

	.dub_select_image img{
		padding: 5px;
		padding-bottom: 3px;
		width: 40px;
		height: 40px;
	}
	.dub_select_image.ds_chooseDate img{
		padding: 5px;
		padding-bottom: 3px;
		width: 80px;
		height: 80px;
	}


	.dub_select_image_selected{
		float: left;
		background-color: #329be9;
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


/* ==================== BAR GRAPH  ==================== */
/* ------ container ------ */
div.css_bar_graph
	{
	width: 430px;
	height: 320px;
	padding: 40px 20px 10px 70px;
	/* --- font --- */
	font-size: 13px;
	font-family: arial, sans-serif;
	font-weight: normal;
	color: #444444;
	background-color: #ffffff;
	position: relative; 
	display: block;
	margin-top: 20px;
	border: 1px solid #d5d5d5;
	/* --- css3 --- */
	}
	
/* ------ hyperlinks ------ */
div.css_bar_graph a
	{
	color: #444444;
	text-decoration: none;
	}
	
/* ------ lists ------ */
div.css_bar_graph ul
	{
	margin: 0px;
	padding: 0px;
	list-style-type: none;
	}
	
div.css_bar_graph li
	{
	margin: 0px;
	padding: 0px;
	}

/* ==================== Y-AXIS LABELS ==================== */
/* ------ base ------ */
div.css_bar_graph ul.y_axis
	{
	width: 50px;
	position: absolute;
	top: 40px;
	left: 10px;
	text-align: right;
	}
	
/* ------ labels ------ */
div.css_bar_graph ul.y_axis li
	{
	width: 100%;
	height: 49px;	/* 50px including border */
	float: left;
	color: #888888;
	/* --- alignment correction --- */
	border-top: 1px solid transparent;
	position: relative;
	top: -13px;	/* value = font height */
	}	
	
/* ==================== X-AXIS LABELS  ==================== */
/* ------ base ------ */
div.css_bar_graph ul.x_axis
	{
	width: 100%;
	height: 50px;
	position: absolute;
	bottom: 0px;
	left: 90px;
	text-align: center;
	}
	
/* ------ labels ------ */
div.css_bar_graph ul.x_axis li
	{
	display: inline;
	width: 90px;
	float: left;
	}
	
/* ==================== GRAPH LABEL  ==================== */
/* ------ base ------ */
div.css_bar_graph div.label
	{
	width: 100%;
	height: 70px;
	float: left;
	margin-top: 20px;
	text-align: center;
	}
	
div.css_bar_graph div.label span
	{
	font-weight: bold;
	}
	
/* ==================== GRAPH  ==================== */
/* ------ base ------ */
div.css_bar_graph div.graph
	{
	width: 100%;
	height: 100%;
	float: left;
	}
	
/* ------ grid ------ */
div.css_bar_graph div.graph ul.grid
	{
	width: 100%;
	}

/* ------ IE grid ------ */
div.css_bar_graph div.graph li
	{
	width: 100%;
	height: 49px;	/* 50px including border */
	float: left;
	border-top: 1px solid #e5e5e5;
	}	
	
/* ------ other browsers grid ------ */
div.css_bar_graph div.graph li:nth-child(odd)
	{
	width: 100%;
	height: 49px;	/* 50px including border */
	float: left;
	border-top: 1px solid #e5e5e5;
	background-color: #f8f8f8;
	}
	
div.css_bar_graph div.graph li:nth-child(even)
	{
	width: 100%;
	height: 49px;	/* 50px including border */
	float: left;
	border-top: 1px solid #e5e5e5;
	}
	
/* ------ bottom grid element ------ */
div.css_bar_graph div.graph li.bottom
	{
	border-top: 1px solid #d5d5d5;
	background-color: #eeeeee;
	height: 19px;
	}
	
/* ==================== BARS COMMON  ==================== */
/* ------ common styles ------ */
div.css_bar_graph div.graph li.bar
	{
	width: 70px;
	float: left;
	position: absolute;
	bottom: 70px;
	text-align: center;
	/* --- css3 --- */
	/* --- transitions --- */
	-webkit-transition: all 0.15s ease-in-out;
	-moz-transition: all 0.15s ease-in-out;
	-o-transition: all 0.15s ease-in-out;
	-ms-transition: all 0.15s ease-in-out;
	transition: all 0.15s ease-in-out;
	}
	
/* ------ bar top circle ------ */
div.css_bar_graph div.graph li.bar div.top
	{
	width: 100%;
	height: 20px;
	margin-top: -10px;
	/* --- css3 --- */
	-moz-border-radius: 50px/20px;
	-webkit-border-radius: 50px 20px;
	border-radius: 50px/20px;
	/* --- transitions --- */
	-webkit-transition: all 0.15s ease-in-out;
	-moz-transition: all 0.15s ease-in-out;
	-o-transition: all 0.15s ease-in-out;
	-ms-transition: all 0.15s ease-in-out;
	transition: all 0.15s ease-in-out;
	}
	
/* ------ bar bottom circle ------ */
div.css_bar_graph div.graph li.bar div.bottom
	{
	width: 100%;
	height: 20px;
	position: absolute;
	bottom: -10px;
	left: 0px;
	/* --- css3 --- */
	-moz-border-radius: 50px/20px;
	-webkit-border-radius: 50px 20px;
	border-radius: 50px/20px;
	/* --- transitions --- */
	-webkit-transition: all 0.15s ease-in-out;
	-moz-transition: all 0.15s ease-in-out;
	-o-transition: all 0.15s ease-in-out;
	-ms-transition: all 0.15s ease-in-out;
	transition: all 0.15s ease-in-out;
	}

/* ------ bar top label ------ */
div.css_bar_graph div.graph li.bar span
	{
	position: relative;
	top: -50px;
	padding: 3px 5px 3px 5px;
	z-index: 100;
	background-color: #eeeeee;
	border: 1px solid #bebebe;
	/* --- css3 --- */
	border-radius: 3px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	/* --- gradient --- */
	background-image: linear-gradient(top, #ffffff, #f1f1f1 1px, #ebebeb); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f1f1f1', endColorstr='#ebebeb'); /* IE5.5 - 7 */
	-ms-filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f1f1f1', endColorstr='#ebebeb'); /* IE8 */
	background: -ms-linear-gradient(top, #ffffff, #f1f1f1 1px, #ebebeb); /* IE9 */
	background: -moz-linear-gradient(top, #ffffff, #f1f1f1 1px, #ebebeb); /* Firefox */ 
	background: -o-linear-gradient(top, #ffffff, #f1f1f1 1px, #ebebeb); /* Opera 11  */
	background: -webkit-linear-gradient(top, #ffffff, #f1f1f1 1px, #ebebeb); /* Chrome 11  */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0, #ffffff), color-stop(0.05, #f1f1f1), color-stop(1, #ebebeb)); /* Chrome 10, Safari */
	/* --- shadow --- */
	text-shadow: 0px 1px 0px rgba(255,255,255,1);
	box-shadow: 0px 1px 0px rgba(0,0,0,0.1);
	-webkit-box-shadow: 0px 1px 0px rgba(0,0,0,0.1);
	-moz-box-shadow: 0px 1px 0px rgba(0,0,0,0.1);
	/* --- transitions --- */
	-webkit-transition: all 0.15s ease-in-out;
	-moz-transition: all 0.15s ease-in-out;
	-o-transition: all 0.15s ease-in-out;
	-ms-transition: all 0.15s ease-in-out;
	transition: all 0.15s ease-in-out;
	}
	
/* ------ bars positions ------ */
div.css_bar_graph div.graph li.nr_1
	{
	left: 110px;
	}
	
div.css_bar_graph div.graph li.nr_2
	{
	left: 200px;
	}
	
div.css_bar_graph div.graph li.nr_3
	{
	left: 290px;
	}
	
div.css_bar_graph div.graph li.nr_4
	{
	left: 380px;
	}
	
div.css_bar_graph div.graph li.nr_5
	{
	left: 470px;
	}
	
div.css_bar_graph div.graph li.nr_6
	{
	left: 560px;
	}
	
div.css_bar_graph div.graph li.nr_7
	{
	left: 650px;
	}
	
div.css_bar_graph div.graph li.nr_8
	{
	left: 740px;
	}

/* ==================== BLUE BAR  ==================== */
/* ------ base ------ */
div.css_bar_graph div.graph li.blue
	{
	background: #208faf;	/* --- IE --- */
	background: rgba(32,143,175,0.8);
	}

/* ------ top ------ */
div.css_bar_graph div.graph li.blue div.top
	{
	background: #72b8cc;
	}
	
/* ------ bottom ------ */
div.css_bar_graph div.graph li.blue div.bottom
	{
	background: #208faf;
	}
	
/* ==================== GREEN BAR  ==================== */
/* ------ base ------ */
div.css_bar_graph div.graph li.green
	{
	background: #608d00;	/* --- IE --- */
	background: rgba(96,141,0,0.8);
	}

/* ------ top ------ */
div.css_bar_graph div.graph li.green div.top
	{
	background: #a2c656;
	}
	
/* ------ bottom ------ */
div.css_bar_graph div.graph li.green div.bottom
	{
	background: #608d00;
	}
	
/* ==================== ORANGE BAR  ==================== */
/* ------ base ------ */
div.css_bar_graph div.graph li.orange
	{
	background: #ff9000;	/* --- IE --- */
	background: rgba(255,144,0,0.8);
	}

/* ------ top ------ */
div.css_bar_graph div.graph li.orange div.top
	{
	background: #ffc24c;
	}
	
/* ------ bottom ------ */
div.css_bar_graph div.graph li.orange div.bottom
	{
	background: #ff9000;
	}
	
/* ==================== PURPLE BAR  ==================== */
/* ------ base ------ */
div.css_bar_graph div.graph li.purple
	{
	background: #7d47ba;	/* --- IE --- */
	background: rgba(125,71,186,0.8);
	}

/* ------ top ------ */
div.css_bar_graph div.graph li.purple div.top
	{
	background: #b592dd;
	}
	
/* ------ bottom ------ */
div.css_bar_graph div.graph li.purple div.bottom
	{
	background: #7d47ba;
	}
	
/* ==================== RED BAR  ==================== */
/* ------ base ------ */
div.css_bar_graph div.graph li.red
	{
	background: #d23648;	/* --- IE --- */
	background: rgba(210,54,72,0.8);
	}

/* ------ top ------ */
div.css_bar_graph div.graph li.red div.top
	{
	background: #ea828e;
	}
	
/* ------ bottom ------ */
div.css_bar_graph div.graph li.red div.bottom
	{
	background: #d23648;
	}
	
/* ==================== HOVERS  ==================== */
div.css_bar_graph div.graph li.blue:hover
	{
	cursor: pointer;
	background: #208faf;
	}
	
div.css_bar_graph div.graph li.green:hover
	{
	cursor: pointer;
	background: #608d00;
	}
	
div.css_bar_graph div.graph li.orange:hover
	{
	cursor: pointer;
	background: #ff9000;
	}
	
div.css_bar_graph div.graph li.purple:hover
	{
	cursor: pointer;
	background: #7d47ba;
	}
	
div.css_bar_graph div.graph li.red:hover
	{
	cursor: pointer;
	background: #d23648;
	}
	
div.css_bar_graph div.graph li.bar:hover span
	{
	cursor: pointer;
	top: -60px;
	padding: 10px;
	margin: 0px;
	}





.ui-timepicker-wrapper {
	overflow-y: auto;
	height: 150px;
	width: 200px;
	font-size: 18px;
	background: #fff;
	border: 1px solid #ddd;
	-webkit-box-shadow:0 5px 10px rgba(0,0,0,0.2);
	-moz-box-shadow:0 5px 10px rgba(0,0,0,0.2);
	box-shadow:0 5px 10px rgba(0,0,0,0.2);
	outline: none;
	z-index: 10001;
	margin: 0;
}

.ui-timepicker-wrapper.ui-timepicker-with-duration {
	width: 11em;
}

.ui-timepicker-list {
	margin: 0;
	padding: 0;
	list-style: none;
}

.ui-timepicker-duration {
	margin-left: 5px; color: #888;
}

.ui-timepicker-list:hover .ui-timepicker-duration {
	color: #888;
}

.ui-timepicker-list li {
	padding: 3px 0 3px 5px;
	cursor: pointer;
	white-space: nowrap;
	color: #000;
	list-style: none;
	margin: 0;
}

.ui-timepicker-list:hover .ui-timepicker-selected {
	background: #fff; color: #000;
}

li.ui-timepicker-selected,
.ui-timepicker-list li:hover,
.ui-timepicker-list .ui-timepicker-selected:hover {
	background: #1980EC; color: #fff;
}

li.ui-timepicker-selected .ui-timepicker-duration,
.ui-timepicker-list li:hover .ui-timepicker-duration {
	color: #ccc;
}

.ui-timepicker-list li.ui-timepicker-disabled,
.ui-timepicker-list li.ui-timepicker-disabled:hover,
.ui-timepicker-list li.ui-timepicker-selected.ui-timepicker-disabled {
	color: #888;
	cursor: default;
}

.ui-timepicker-list li.ui-timepicker-disabled:hover,
.ui-timepicker-list li.ui-timepicker-selected.ui-timepicker-disabled {
	background: #f2f2f2;
}
</style>