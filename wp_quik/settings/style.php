<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {


					$("#buzzNav a").click(function() {

						var checkTab = $(this).attr('tab');
						$('.tab').hide();
						$('.'+checkTab).show();
						$('.tablink').removeClass('active');
						$('.'+checkTab).addClass('active');
					});
		  		

								jQuery('.upload_button').click(function() {
									uploadID = jQuery(this).prev('input'); // grabs the correct field
									spanID = jQuery(this).parent().find('span'); // grabs the correct span
									formfield = jQuery('.frp_upload').attr('name');
									tb_show('', 'media-upload.php?type=image&TB_iframe=true');
									return false;
								});

								window.send_to_editor = function(html) {
									imgurl = jQuery(html).attr('href'); // grabs the image URL from the IMG tag
									jQuery('#uploadphoto').val(imgurl); // sends the image URL to the hidden input field
									spanID.html(html); //sends the IMG tag to the preview span
									tb_remove();
								}

			});
		</script>
		<style>
			@import url(http://fonts.googleapis.com/css?family=Poly);
			.upload_button {
				border: 1px solid #752f0e; /* stroke */
background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEwMCAxMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxsaW5lYXJHcmFkaWVudCBpZD0iaGF0MCIgZ3JhZGllbnRVbml0cz0ib2JqZWN0Qm91bmRpbmdCb3giIHgxPSI1MCUiIHkxPSIxMDAlIiB4Mj0iNTAlIiB5Mj0iLTEuNDIxMDg1NDcxNTIwMmUtMTQlIj4KPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2Y1OTE2MyIgc3RvcC1vcGFjaXR5PSIxIi8+CjxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iI2Q0NWYyOSIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgIDwvbGluZWFyR3JhZGllbnQ+Cgo8cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMTAwIiBoZWlnaHQ9IjEwMCIgZmlsbD0idXJsKCNoYXQwKSIgLz4KPC9zdmc+); /* gradient overlay */
background-image: -moz-linear-gradient(bottom, #f59163 0%, #d45f29 100%); /* gradient overlay */
background-image: -o-linear-gradient(bottom, #f59163 0%, #d45f29 100%); /* gradient overlay */
background-image: -webkit-linear-gradient(bottom, #f59163 0%, #d45f29 100%); /* gradient overlay */
background-image: linear-gradient(bottom, #f59163 0%, #d45f29 100%); /* gradient overlay */
width: 80px;
margin: 10px 0;
display: block;
text-decoration: none;
padding: 10px;
border-radius: 5px;
font-weight: bold;
color: #fff;

			}
				.upload_button:hover {
					color: #fff;
				}
			#siteOptions {
				width: 100%;
				overflow: hidden;
				font-family: 'Poly', serif;
				text-shadow: 0px 0px 1px transparent; 
				font-size: 21px;
			}
			input[type=text] {
				display: block;
				width: 100%;
				font-size: 16px;
				padding: 6px;
				margin: 5px 0;
				color: #666;
			}
			textarea {
				display: block;
				width: 100%;
				height: 150px;
				font-size: 14px;
				padding: 6px;
				margin: 5px 0;
				color: #666;
			}
			select {
				display: block;
				width: 100%;
				font-size: 16px;
				padding: 6px;
				margin: 5px 0;
				color: #666;
			}
			.tab p strong {
				padding: 0 0;
				margin-bottom: -10px;
				display: block;
				font-size: 15px !important;
			}
			
			.tab hr {
				border: none;
				border-top: 1px solid #ddd;
				margin: 20px 0;
			}

			#topBar {
				width: 300px;
text-shadow: 1px 1px 0 #fff;
color: #333 !important;
padding: 20px 0;				margin-top: -6px;
margin-left: 10px;
			}
			#buzzNav {
				width: 96px;
				float: left;
background: #cb3433;	
margin-left: 10px;
border-bottom-right-radius: 5px;
border-bottom-left-radius: 5px;
margin-bottom: 20px;
margin-top: -37px;
				border-top: 1px solid #222;
			}
			#buzzNav a {
				width: 56px;
				font-size: 11px;
				text-decoration: none;
				color: #fff;
				text-align: center;
				display: block;
				padding: 11px 20px;
				font-family: verdana;
			}
			#buzzNav a:hover:first-child {
				text-shadow: 1px 1px 0 #111;
				color: #fff;
			}
			#buzzNav a:hover,#buzzNav a:focus, #buzzNav a.active  {
background: #235796; color: #fff;
outline: none;
text-shadow: 1px 1px 0 #111;
			}
				#buzzNav a:nth-child(0) {
					border-left: none;
				}
				#buzzNav a:nth-child(3) {
					border-right: none;
				}
				#buzzNav a img {
					display: block;
					margin: 0 auto;
					text-align: center;
				}
				.tab {
					padding: 0 30px;
					width:  600px;
					margin-top: -20px;
					float: left;
				}
				.leadSettings:hover, .leadSettings.active {
					border-bottom-right-radius: 5px;
border-bottom-left-radius: 5px;
				}
				.tab h2 {
					font-weight: bold;
					font-size: 24px !important;
					color: #222;
					letter-spacing: -1px;
				}
		</style>