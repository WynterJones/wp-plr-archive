<script src="http://code.jquery.com/jquery-latest.min.js"
        type="text/javascript"></script>
<script src='../wp-content/plugins/embedfire/inc/js/number.js'></script>
<script>
$(document).ready(function() {

  // Pretty numbers 1000 = 1,000


  var apikey = "<?php echo get_option('embedfire_apiKey') ?>";
  var jsonp_url = "http://lacolhost.com:3000/apiwidget?apikey="+apikey+"&callback=?";
  $.getJSON(jsonp_url, function(data) {
    $.each(data, function(idx, obj) {
      t_views = obj.views + obj.views_a;
      t_clicks = obj.clicks + obj.clicks_a;
      ctr = t_clicks / t_views * 100;
      $('#setupShortcodes .widget_name').html(obj.name);
      $('#setupShortcodes .t_views').html(t_views);
      $('#setupShortcodes .t_clicks').html(t_clicks);
      $('#setupShortcodes .ctr').html(ctr);
      $('#setupShortcodes small').html('<i class="fa fa-question-circle"></i> Widget Type: '+obj.type);
      $('#setupShortcodes .widgetkey').text(obj.widgetkey);
      $('#setupShortcodes .widgettype').text(obj.type);
      put_widget = $('#setupShortcodes').html();
      $('#shortcodes').append(put_widget);
      $('.numberpercent').number(true, 1);
      $('.number').number(true);
    });
  });

  // Tabs for Settings
  $(".tabLink").click(function(e) {
    e.preventDefault();
    tabLink = $(this).attr('tab');
    type = $(this).attr('type');
    $('.tab').hide();
    var height = $('.sidebar').height() ;
    if( $("#"+tabLink).height() < height) {
    }

    $("#"+tabLink).show();
    $(".tabLink").removeClass('active');
    $(this).addClass('active');
  });

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
        url: "../wp-content/plugins/embedfire/admin/save.php",
        data: str,
        success: function(value) {

        }
      });
      $('#msg').fadeIn();
      setTimeout(function(){
        $('#msg').fadeOut();
      }, 3000);
    });
  });

  // New Page
  $('#new').click(function (e) {
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
        url: "../wp-content/plugins/embedfire/admin/new.php",
        data: str,
        success: function(value) {

        }
      });
      $('#msg').fadeIn();
      setTimeout(function(){
        $('#msg').fadeOut();
      }, 3000);
    });
  });

});
</script>
<div id="setupShortcodes" style="display:none">
  <strong><span class="widget_name"></span>
    <span class="embedfire1"><i class="fa fa-eye"></i> <span class="t_views number"></span></span>
    <span class="embedfire2"><i class="fa fa-external-link"></i> <span class="t_clicks number"></span></span>
    <span class="embedfire3"><i class="fa fa-bar-chart"></i> <span class="ctr numberpercent"></span>%</span>
    <small></small></small>
  </strong>
  <div class="newInput embedfireWidget">[embedfire widget="<span class="widgetkey"></span>"  type="<span class="widgettype"></span>"]</div>
</div>
