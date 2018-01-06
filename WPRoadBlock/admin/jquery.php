<script src='http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js'></script>
<script>
	$(document).ready(function() {
		
		// Serialize Data
		$('#save').click(function (e) {
			e.preventDefault();
			$( ".wp-editor-wrap" ).each(function( index ) {
		    		$getID = $(this).attr("id"); 
			  	$getID = $getID.replace("wp-", ""); 
			  	$getID = $getID.replace("-wrap", ""); 
			  	if ($("#wp-"+$getID+"-wrap").hasClass("tmce-active")){  
		        			$getContent = tinyMCE.get($getID).getContent();
		        			$("#"+$getID).val($getContent);
			    	} 
			    	else { 
			      		$getContent = $("#"+$getID).val();
			   	}
			}).promise().done( function() { 
			  	var str = $("form").serializeArray();
				$.ajax({  
				    type: "POST",  
				    url: "../wp-content/plugins/WPRoadBlock/admin/save.php",  
				    data: str,  
				    success: function(value) {  
				            $('#msg').fadeIn();
				            setTimeout(function(){
				            	$('#msg').fadeOut();
				            }, 3000);
				    }
				});
			});
		});
		
	});
</script>