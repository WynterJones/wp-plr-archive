$(document).ready(function() {

$.backstretch("http://dotcomsecretswebsites.com/dotcomsecretsboise/images/russell-brunson.jpg");



  $('#nextStep').on("click", function() {
    $.backstretch("http://opaquewindow.files.wordpress.com/2012/04/img_4516.jpg");
    $('#step1').velocity({
      left: "-2000px"
    });
    $('#step2').velocity({
      right: "0"
    });
    $('#skipVideo').fadeIn(4000);

    $( "#play-button" ).trigger( "click" );
  })
});