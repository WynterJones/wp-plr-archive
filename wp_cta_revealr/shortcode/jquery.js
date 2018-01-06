$(document).ready(function() {
  	$("#revealButton").click(function() {
	  $(this).fadeOut(1000);
	  $("#hiddenBox").delay(1000).fadeIn(1000);
	});
});