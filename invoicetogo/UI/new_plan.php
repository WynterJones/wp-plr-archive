<script>
	function goBack()
	  {
	  window.history.back()
	  }
	</script>

	<a onclick="goBack()" class="uibutton large" style="float: right; margin-top:15px; " >Go Back</a>

	<div id="depTitle" style="margin-top: -3px;">
			
			<h1>Add New Item:</h1>
			<p style="margin-top: -10px;">This will be a new item for this plan...</p>
			
	</div>

	<br clear="all" />

	<div class="well">
			
					<div id="edit_dep2" >	
		
					<div id="introMp3x"  >
					
					
						<h3 style="margin-top: 0px;" >Item Bullet Image - Check OR X: </h3>
						<p style="margin-top: -10px;">You can either have a check mark or a cross for the item...</p>
						
						<select id="item_bullet" >
						  <option value="1">Check</option>
						  <option value="2">X</option>
						</select>
						
						<div class="sepper"></div>
							
							
							<h3 style="margin-top: 0px;" >Item Title:</h3>
							<p style="margin-top: -10px;">This is the title for the item, keep it short & sweet...</p>
						
							<input type="text" id="item_title" value="" />

							<div class="sepper"></div>
							
							
							<h3 style="margin-top: 0px;" >Item Blurb:</h3>
							<p style="margin-top: -10px;">OPTIONAL - you can have a quick blurb about this item/service, leave it blank if you dont want one...</p>
						
							<input type="text" id="item_blurb" value="" />

							<input type="hidden" id="plan" value="<?php echo $_GET['new_item']; ?>" />
												
					
					</div>
					
				</div>
				
				</div>

	<a class="uibutton large special" href="#" id="createnewitem" >Create New Item</a>
			