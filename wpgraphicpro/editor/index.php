<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Editor</title>
	 <link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>

<!-- Load Bootstrap -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- jQuery -->

    

  <script src="bower_components/velocity/jquery.velocity.min.js"></script>
  <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/html2canvas.js"></script>
<script type="text/javascript" src="js/jquery.plugin.html2canvas.js"></script>
<script type="text/javascript" src="js/jquery.form.min.js"></script>
<!-- Editor -->
  <link rel="stylesheet" href="editor/fontawesome/css/font-awesome.css" charset="utf-8" />
  <link rel="stylesheet" href="editor/hallo.css">
  <script src="editor/rangy-core.js"></script>
  <script src="editor/hallo.js"></script>
  <script>
  $(document).ready(function() {

        // $('#target').addClass('editable');
        // $('.editable').hallo({
        //   plugins: {
        //     'halloindicator': {},
        //     'halloformat': {},
        //     'halloheadings': {},
        //     'hallojustify': {},
        //     'hallolists': {},
        //     'hallolink': {},
        //     'halloreundo': {}
        //   },
        //   editable: true,
        //   toolbar: 'halloToolbarFixed'
        // })
        // .hallo('protectFocusFrom', $('#enable'));
        // $('.editable').bind('hallomodified', function(event, data) {
        //     $('#modified').html("Editables modified");
        // });
        // $('.editable').bind('halloselected', function(event, data) {
        //     $('#modified').html("Selection made");
        // });
        // $('.editable').bind('hallounselected', function(event, data) {
        //     $('#modified').html("Selection removed");
        // });
        // $('#getHTML').click(function() {
        //   $('.editable').hallo({editable: false});
        //   $( ".hallotoolbar" ).remove();
        //   $('.ui-dialog').remove();
        //   $('#showHTML').val($('body').html());
        //   $('#showHTML').fadeIn();
        // });



        var options = { 
			target: '#output',   // target element(s) to be updated with server response 
			beforeSubmit: beforeSubmit,  // pre-submit callback 
			success: afterSuccess,  // post-submit callback 
			resetForm: true        // reset the form after successful submit 
		}; 
		
	 $('#MyUploadForm').submit(function() { 
			$(this).ajaxSubmit(options);  			
			// always return false to prevent standard browser submit and page navigation 
			return false; 
		}); 


function afterSuccess()
{
	$('#submit-btn').show(); //hide submit button
	$('#loading-img').hide(); //hide submit button

}

//function to check file size before uploading.
function beforeSubmit(){
    //check whether browser fully supports all File API
   if (window.File && window.FileReader && window.FileList && window.Blob)
	{
		
		if( !$('#imageInput').val()) //check empty input filed
		{
			$("#output").html("Are you kidding me?");
			return false
		}
		
		var fsize = $('#imageInput')[0].files[0].size; //get file size
		var ftype = $('#imageInput')[0].files[0].type; // get file type
		

		//allow only valid image file types 
		switch(ftype)
        {
            case 'image/png': case 'image/gif': case 'image/jpeg': case 'image/pjpeg':
                break;
            default:
                $("#output").html("<b>"+ftype+"</b> Unsupported file type!");
				return false
        }
		
		//Allowed file size is less than 1 MB (1048576)
		if(fsize>1048576) 
		{
			$("#output").html("<b>"+bytesToSize(fsize) +"</b> Too big Image file! <br />Please reduce the size of your photo using an image editor.");
			return false
		}
				
		$('#submit-btn').hide(); //hide submit button
		$('#loading-img').show(); //hide submit button
		$("#output").html("");  
	}
	else
	{
		//Output error to older browsers that do not support HTML5 File API
		$("#output").html("Please upgrade your browser, because your current browser lacks some new features we need!");
		return false;
	}
}

//function to format bites bit.ly/19yoIPO
function bytesToSize(bytes) {
   var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
   if (bytes == 0) return '0 Bytes';
   var i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
   return Math.round(bytes / Math.pow(1024, i), 2) + ' ' + sizes[i];
}


$('#target').bind('DOMNodeInserted DOMNodeRemoved', function(event) {
    if (event.type == 'DOMNodeInserted') {
        $( ".inner img" ).draggable();
		$( "#draggable" ).draggable();
		$( "#draggable" ).resizable();
    } else {
       
    }
});
  });
  </script>
  <!-- Editor -->

<style type="text/css">
h1, h2, h3, h4, h5, h6, p {
	margin: 0;
	margin-bottom: 10px;
}
	#target {
		width: 1200px; max-width: 1200px;
		height: 628px; max-height: 628px;
		margin: 10px;
		overflow: hidden;
		position: relative;

	}
	#bg {
		width: 1200px; max-width: 1200px;
		height: 628px; max-height: 628px;
		position: absolute;

		top: 0;
		left: 0;
		z-index: 1;
	}
	.inner {
		width: 95%;
		padding: 30px;
		margin: 2.5%;
		color: #fff;
		background: rgba(0, 0, 0, .8);
		border: 2px solid #000;
		position: absolute;
		top: 0px;
		text-align: center;
		left: 0;
		z-index: 9999;
	}
	.editor {
		float: left;
		padding: 10px;
	}
	.sidebar {
		float: right;
		padding: 10px;
	}
</style>
</head>
<body>




<div class="editor">
	<form method="POST" enctype="multipart/form-data" action="save.php" id="myForm">
	<input type="hidden" name="img_val" id="img_val" value="" />
</form>

<button class="btn btn-lg btn-primary" onclick="capture();"><i class="fa fa-check"></i> Save Image</button>

	<div id="target">
		<img src="../images/bg.jpg" id="bg">
		<div class="inner" contenteditable="true">
		<div class="col-md-6"  style="font-size: 550%">
			<p>Content</p>
		</div>
		<div class="col-md-6">
			<img src="../images/shirt.png" style="width: 100%">
		</div>
		
				
		</div>	
	</div>

</div>


	<div class="sidebar">
		<form action="processupload.php" method="post" enctype="multipart/form-data" id="MyUploadForm">
<input name="image_file" id="imageInput" type="file" />
<input type="submit"  id="submit-btn" value="Upload" />
<img src="images/ajax-loader.gif" id="loading-img" style="display:none;" alt="Please Wait"/>
</form>
<div id="output"></div>
	</div>


	<script type="text/javascript">
		function capture() {
			$('#target').html2canvas({
				onrendered: function (canvas) {
	                //Set hidden field's value to image data (base-64 string)
					$('#img_val').val(canvas.toDataURL("image/png"));
	                //Submit the form manually
					document.getElementById("myForm").submit();
				}
			});
		}
		$( ".inner img" ).draggable();
		$( "p" ).draggable();
		
	</script>
	
</body>
</html>