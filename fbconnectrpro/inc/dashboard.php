<?php
function fbcrx_dashboard() {
?>
	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
	
	<script type="text/javascript">
	$(document).ready(function() {
	
		$('#btnStyle').change(function() {
		  
		  $getVAL = $(this).val();
		  
		  if($getVAL == "4"){
		  
		  	$("#customBTN").show();
		  
		  } else {
		  
		  	$("#customBTN").hide();
		  
		  }
		  
		});
	
		
		$('#arcode').keyup(function() {
			
			break_apart_ar();
			
		  return false;
		});
		
		// TAKE APART AR CODE
		
		function break_apart_ar(){
				var tags = ['a','iframe','frame','frameset','script'], reg, val = $('#arcode').val(),
					hdn = $('#arcode_hdn_div2'), formurl = $('#arform'), hiddenfields = $('#arhidden');
			    formurl.val('');
				if(jQuery.trim(val) == '')
					return false;
				$('#arcode_hdn_div').html('');
				$('#arcode_hdn_div2').html('');
				for(var i=0;i<5;i++){
					reg = new RegExp('<'+tags[i]+'([^<>+]*[^\/])>.*?</'+tags[i]+'>', "gi");
					val = val.replace(reg,'');
					
					reg = new RegExp('<'+tags[i]+'([^<>+]*)>', "gi");
					val = val.replace(reg,'');
				}
				var tmpval;
				try {
					tmpval = decodeURIComponent(val);
				} catch(err){
					tmpval = val;
				}
				hdn.append(tmpval);
				var num = 0;
				var name_selected = '';
				var email_selected = '';
				$(':text',hdn).each(function(){
					var name = $(this).attr('name'),
						name_selected = num == '0' ? name : (num != '0' ? name_selected : ''), 
						email_selected = num == '1' ? name : email_selected;
						if(num=='0') jQuery('#arname').val(name_selected);
						if(num=='1') jQuery('#aremail').val(email_selected);
				num++;
				});
				jQuery(':input[type=hidden]',hdn).each(function(){
					jQuery('#arcode_hdn_div').append(jQuery('<input type="hidden" name="'+jQuery(this).attr('name')+'" />').val(jQuery(this).val()));
				});		
				var hidden_f = jQuery('#arcode_hdn_div').html();
				formurl.val(jQuery('form',hdn).attr('action'));
				hiddenfields.val(hidden_f);
				hdn.html('');
				
		};
		
	
	
	});
	</script>
	
	
	<style>
	
	.wellx {
		width: 500px;
		min-height: 20px;
		padding: 19px;
		margin-bottom: 20px;
		background-color: 
		whiteSmoke;
		border: 1px solid 
		#EEE;
		border: 1px solid 
		rgba(0, 0, 0, 0.05);
		-webkit-border-radius: 4px;
		-moz-border-radius: 4px;
		border-radius: 4px;
		-webkit-box-shadow: inset 0 1px 1px 
		rgba(0, 0, 0, 0.05);
		-moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
		box-shadow: inset 0 1px 1px 
		rgba(0, 0, 0, 0.05);
	}
	
	.fieldTitle{
		display: block;
		font-size: 16px;
		font-weight: bold;
	}
	
	.xfield{
		padding: 10px;
		margin-top: 10px;
		width: 480px;
	}
	
	.fieldSplitter{
		margin-bottom: 20px;
		margin-top: 20px;
		height: 1px;
		width: 480px;
		border-top: 1px dashed #dbdbdb;
	}
	
	#iconFB{
		background-image: url("<?php echo site_url() ?>/wp-content/plugins/fbconnectrpro/imgs/icon.png");
		background-repeat: no-repeat;
	}
	
	#logoArea{
		padding-bottom: 10px;
		padding-top: 20px;
		border-bottom: 1px solid #e0e0e0;
		margin-bottom: 20px;
	}
	
	.wellTitle{
		color: #757575;
		font-size: 16px;
		margin-bottom: -5px;
		border-top: 1px solid #e0e0e0;
		width: 540px;
		margin-top: 15px;
		padding-top: 15px;
		font-family: "HelveticaNeue-Light";
	}
	
	.wellTitle2{
		color: #757575;
		font-size: 16px;
		margin-bottom: -5px;
		border-top: 1px solid #e0e0e0;
		width: 540px;
		margin-top: 25px;
		padding-top: 15px;
		font-family: "HelveticaNeue-Light";
	}
	
	.alertJS {
		padding: 15px 35px 15px 14px;
		margin-bottom: 18px;
		color: 
		#C09853;
		text-shadow: 0 1px 0 
		rgba(255, 255, 255, 0.5);
		background-color: 
		#FCF8E3;
		border: 1px solid 
		#FBEED5;
		-webkit-border-radius: 4px;
		-moz-border-radius: 4px;
		border-radius: 4px;
		width: 490px;
	}
	
	</style>
	
	<!-- Create a header in the default WordPress 'wrap' container -->
	<div class="wrap">

		<div id="logoArea">
		
			<img src="<?php echo site_url() ?>/wp-content/plugins/fbconnectrpro/imgs/logo.png" />
		
		</div>


		<div id="iconFB" class="icon32"></div>
		

		<?php  
           $active_tab = isset( $_GET[ 'tab' ] ) ? $_GET[ 'tab' ] : 'display_leads';  
        ?>	
		
		<h2 class="nav-tab-wrapper">  
            <a href="?page=fbcrx-dashboard&tab=display_leads" class="nav-tab <?php echo $active_tab == 'display_leads' ? 'nav-tab-active' : ''; ?>" >Collected Leads</a>  
            <a href="?page=fbcrx-dashboard&tab=display_campaigns" class="nav-tab <?php echo $active_tab == 'display_campaigns' ? 'nav-tab-active' : ''; ?>" >Connect Buttons</a>
            <a href="?page=fbcrx-dashboard&tab=display_settings" class="nav-tab <?php echo $active_tab == 'display_settings' ? 'nav-tab-active' : ''; ?>" >Settings</a>  
        </h2> 		
		
		<!--MAIN CONTENT FOR TABS HERE-->
		
		<?php 
		
		if( $active_tab == 'display_leads' ) {  
		      include("display_leads.php"); 
		} else if( $active_tab == 'display_campaigns' ) {  
		      include("display_btns.php"); 
		} else if( $active_tab == 'display_settings' ) {  
		      include("display_settings.php"); 
		}
		
		?>
		

	</div><!-- /.wrap -->
<?php
} // end sandbox_theme_display


?>