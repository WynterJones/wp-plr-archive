<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,700,700italic,800,800italic,600,600italic' rel='stylesheet' type='text/css'>
<style>
	#adminSettings * {
		margin: 0;
		outline: none;
		padding: 0;
	}
	#adminSettings {
		position: relative;
	}
	#adminSettings .colors {
		clear: both;
		width: 100%;
		padding: 10px 0;
	}
	#adminSettings .updated.fade {
		clear: both; width: 455px !important;text-align: left;background: #D6E380; color: #343a0e;border: 2px solid  #8B935A; font-size: 23px; height: 20px;border-radius: 5px;padding: 7px; width: 370px;  position: relative; margin-bottom: 10px;
		position: absolute;
		top: 130px;
		left: 15px;
		margin: 0 auto;
	}
		#adminSettings .updated.fade img {
			float: left; margin-right: 10px;
		}
		#adminSettingƒs .colors .default {
			width: 79px;
			margin-right: 6px;
			border-radius: 7px;
			float: left;
			text-align: center;
			font-weight: bold;
			color: #777;
			padding:10px;
			background: #fafafa;
			border: 2px solid #ddd;
		}

		#adminSettings .iconLink {
			padding: 3px;
			margin-right:5px;
			border-radius: 150px;
		}
		.switch-wrapper {
		  display: inline-block;
		  position: relative;
		  top: 3px;
		}
		#adminSettings .colors .danger {
			width: 82px;
			margin-right: 6px;
			border-radius: 7px;
			float: left;
			text-align: center;
			font-weight: bold;
			color: #A94442;
			padding:10px;
			background: #ECCDCD;
			border: 2px solid #DCA7A7;
		}
		#adminSettings .colors .primary {
			width: 82px;
			margin-right: 6px;
			border-radius: 7px;
			float: left;
			text-align: center;
			font-weight: bold;
			color: #fff;
			padding:10px;
			background: #4189C8;
			border: 2px solid #2B669A;
		}
		#adminSettings .colors .warning {
			width: 82px;
			margin-right: 6px;
			border-radius: 7px;
			float: left;
			text-align: center;
			font-weight: bold;
			color: #8A6D3B;
			padding:10px;
			background: #FAF5D6;
			border: 2px solid #F5E79E;
		}
		#adminSettings .colors .success {
			width: 82px;
			margin-right: 6px;
			border-radius: 7px;
			float: left;
			text-align: center;
			font-weight: bold;
			color: #3C763D;
			padding:10px;
			background: #D6ECCD;
			border: 2px solid #B2DBA1;
		}
		#adminSettings .colors .info {
			width: 82px;
			margin-right: 6px;
			border-radius: 7px;
			float: left;
			text-align: center;
			font-weight: bold;
			color: #31708F;
			padding:10px;
			background: #CAE6F3;
			border: 2px solid #9ACFEA;
		}
	#adminSettings .tabs {
		padding: 10px 0;
	}
	#adminSettings .tabs li a {
		float: left;
		padding: 10px;
		font-size: 15px;
		text-decoration: none;
		border: 2px solid #fff;
		border-radius: 5px;
		margin-right: 10px;
		color: #333F58;
		font-weight: 600;
		background: #fafafa;
		outline: none;
		border: 2px solid #eee;
		color: #555;
	}
	#adminSettings .tabs li a.active, #adminSettings .tabs li a:hover {
		background: #42A0CF;
		outline: none;
		border: 2px solid #2773B4;
		color: #fff;
		opacity: .7;
		transition: opacity .25s ease-in-out;
  		 -moz-transition: opacity .25s ease-in-out;
   		-webkit-transition: opacity .25s ease-in-out;
	}
	#adminSettings .innerTabs {
		
		height: 41px;
	}
	#adminSettings .switch {
		display: none !important;
	}
	#adminSettings .innerTabs li a {
		float: left;
		padding: 10px;
		font-size: 13px;
		text-decoration: none;
		border: 2px solid #ddd;
		border-radius: 5px;
		background: #fff;
		margin-right: 10px;
		color: #333F58;
		font-weight: 600;
		opacity: 1;
	}
	#adminSettings .innerTabs li a.active, #adminSettings .innerTabs li a:hover {
		background: #42A0CF;
		outline: none;
		border: 2px solid #2773B4;
		color: #fff;
		opacity: .7;
		transition: opacity .25s ease-in-out;
  		 -moz-transition: opacity .25s ease-in-out;
   		-webkit-transition: opacity .25s ease-in-out;
	}
	#adminSettings .tab {
		padding:  5px 0;
		clear: both;
	}
	#adminSettings .help {
		display: block; text-align: right; margin: 0px 0; top: 30px; right: 0;font-size: 13px; position: absolute; color: #444;  float: right;padding:0; border-radius: 10px;
	}
	#adminSettings {
		width: 720px;

		margin-top: 10px;
		border-radius: 5px;
		font-family: 'Open Sans', sans-serif !important;
	}
	#footer {
		width: 700px;
		clear: both;
		margin-top: 10px;
		border-radius: 5px;
		font-family: 'Open Sans', sans-serif !important;
	}
    #message {
		position: fixed;
		width: 400px;
		top: 20px;
		right: 20px;
	}
	#adminSettings .header {
		padding:10px;
		padding-top: 0;
	}
	#adminSettings #shadowDemo {
		width: 100%;
		z-index: 999999;
		margin-bottom: 10px;
		border: 2px solid #ddd;
		border-radius: 5px;
		background: #fff;
		color: #ccc;
		height: 150px;
		text-align: center;
		
	}
		#adminSettings #shadowDemo h4 {
			padding-top: 65px;
			font-size: 27px;
		}
	#adminSettings .item {
		background: #fff;
		padding: 20px;
		border: 5px solid #fff;
		border-radius: 7px;
		margin: 5px 0;
		box-shadow: 0 0 5px #ddd inset, 0 0 3px #ddd;
	}
		#adminSettings .item:hover {
		}
		#adminSettings .item h1 {
			float: left;
			font-size: 30px;
			padding: 0 9px;
			font-weight: bolder;
			width: 420px;
			line-height: 1.2em;
			padding-left:0;
			letter-spacing: -1px;
			text-transform: capitalize;
			color: #2A2A2A;
			padding-bottom: 5px;
		}
		#adminSettings .item h2 {
			float: left;
			font-size: 24px;
			padding: 0 9px;
			width: 480px;
			line-height: 1.4em;
			padding-left:0;
			letter-spacing: -1px;
			text-transform: capitalize;
			font-weight: bolder;
			padding-bottom: 3px;
			text-align: left;
		}
			#adminSettings .item h2 a {
				color: #333;
				float: none;
				text-decoration: none;
				text-align: left;
			}
		#adminSettings .item .date {
			float: left;
			clear: left;
			padding: 5px;
			font-size: 15px;
			opacity: .7;
			font-weight: lighter;
			padding-left: 25px;
			background: url(https://cdn0.iconfinder.com/data/icons/stuttgart/16/date.png) no-repeat left;
		}
		#adminSettings .item a {
			float: right;
		}
		#adminSettings .item a img {
			padding: 5px;
		}
	#adminSettings .stats {
		background: #fafafa;
		margin-top: 10px;
		background: #f8f8f8;
		border: 2px solid #eee;
		outline: none;
		color: #555;
		border-radius: 5px;
		padding: 10px;
	}
	#adminSettings form {
		padding: 10px 0;
	}
	#adminSettings .shortcode {
		float: right;
		font-size: 14px;		font-weight: lighter;
		padding-top: 4px;
	}
		#adminSettings .shortcode input {
			padding: 5px;
			border-radius: 5px;
		}
		#adminSettings .stats .views {
			float: left;
			padding: 5px;
			font-size: 12px;
			margin-right: 10px;
			font-weight: 600;
			padding-left: 20px;
			background: url(https://cdn2.iconfinder.com/data/icons/freecns-cumulus/16/519620-119_Eye-16.png) no-repeat left;
		}
		#adminSettings .stats .clicks {
			float: left;
			padding: 5px;
			font-size: 12px;
			margin-right: 10px;
			font-weight: 600;
			padding-left: 20px;
			background: url(https://cdn3.iconfinder.com/data/icons/fatcow/16/coins.png) no-repeat left;
		}
		#adminSettings .stats .convRate {
			float: left;
			padding: 5px;
			font-size: 12px;
			margin-right: 10px;
			font-weight: 600;
			padding-left: 20px;
			background: url(https://cdn1.iconfinder.com/data/icons/Momentum_MatteEntireSet/16/percent.png) no-repeat left;
		}
		#adminSettings .stats .number {
			background: #fff;
			padding:4px 10px;
			border-radius: 80px;
		}
	#adminSettings .newInput {
		font-size: 20px;
		padding: 10px;
		width: 457px;
		border-radius: 5px;
	}
	#adminSettings .title {
		padding: 20px 0;
	}
	#adminSettings .button {
		font-size: 17px;
		font-weight: bolder;
		padding: 10px 20px;
		height: 49px;
		float: right;
		opacity: 1;
		transition: opacity .25s ease-in-out;
  		 -moz-transition: opacity .25s ease-in-out;
   		-webkit-transition: opacity .25s ease-in-out;

	}
	#adminSettings .button:hover {
		opacity:.9;
	}
	#adminSettings .input {
		display: block;
		width: 100%;
		clear: left;
		padding: 20px 0;
		padding-top: 10px;
	}
		#adminSettings .input strong {
			display: block;
			font-size: 18px;
			padding: 6px 0;
			color: #42A0CF;
		}
		#adminSettings .input strong small {
			float: right;
			font-size: 15px;
			opacity: .7;
			color: #777;
			font-weight: lighter;
		}
		#adminSettings .input input[type=text] {
			font-size: 18px;
			padding: 10px;
			width: 100%;
			color: #666;
			margin-top: 5px;
			border-radius: 5px;
		}
		#adminSettings .input textarea {
			font-size: 18px;
			padding: 10px;
			width: 100%;
			height: 170px;
			color: #666;
			margin-top: 5px;
			border-radius: 5px;
		}
		#adminSettings .input select {
			font-size: 18px;
			padding: 10px;
			width: 100%;
			height: 50px;
			color: #666;
			text-transform: capitalize;
			margin-top: 5px;
			border-radius: 5px;
		}
		#newId {
			font-size: 20px;
			padding: 10px;
			width: 100%;
			height: 50px;
			color: #666;
			text-transform: capitalize;
			margin-top: 5px;
			border-radius: 5px;
		}
	#adminSettings .info {
		display: block;
	}
	#adminSettings .total {
		float: left;
		padding: 15px 9px;
		text-align: center;
		width: 146px;
		margin: 5px;
		border-radius: 5px;
		border: 2px solid #ccc;
		background: #fff;
		opacity: .7;
	}
		#adminSettings .total:hover {
			opacity: 1;
		}
		#adminSettings .total.views {
			background: #C87E99;
			border: 3px solid #863d58;
			color: #fff;
			text-shadow: 1px 1px 0 #863d58;
		}
		#adminSettings .total.clicks {
			background: #E64A33;
			border: 3px solid #8f2616;
			color: #fff;
			text-shadow: 1px 1px 0 #8f2616;
		}
		#adminSettings .total.rate {
			background: #C8DB4D;
			border: 3px solid #5d6818;
			color: #fff;
			text-shadow: 1px 1px 0 #5d6818;
		}
		#adminSettings .total.shortcodes {
			background: #9BCFDD;
			border: 3px solid #378093;
			color: #fff;
			text-shadow: 1px 1px 0 #378093;
		}
		#adminSettings .total h3 {
			font-size: 32px;
			letter-spacing: -1px;
			font-weight: bolder;
			padding-bottom: 12px;
			color: #fff;
			padding-top: 4px;
		}
		#adminSettings .total span {
			text-transform: uppercase;
			opacity: .9;
			font-weight: bold;
			font-size: 13px;
		}
	#adminSettings .holder { margin: 15px 0; }
	#adminSettings .holder a {
	  font-size: 15px;
	  cursor: pointer;
	  margin: 0 5px;
	  color: #333;
	  float: left;
	  padding: 10px;
	}
	#adminSettings .holder a:hover {
	  
	}
	#adminSettings .fade {
		padding: 10px !important;
		padding-right: 0 !important;
		margin-left: 2px !important;
		width: 600px !important;
	}
	#adminSettings .holder a.jp-previous { margin-right: 95px; float: left; }
	#adminSettings .holder a.jp-next { margin-left: 95px; float: right; }
	#adminSettings .holder a.jp-current, a.jp-current:hover { 
	  color: #ed4e2a;
	  font-weight: bold;
	}
	#adminSettings .holder a.jp-disabled, a.jp-disabled:hover { color: #bbb; }
	#adminSettings .holder a.jp-current, a.jp-current:hover,
	#adminSettings .holder a.jp-disabled, a.jp-disabled:hover {
	  cursor: default; 
	  background: none;
	}
	#adminSettings .holder span { margin: 0 5px; text-align: center; float: left; padding: 10px; }
</style>