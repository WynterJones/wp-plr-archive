   <script src="js/jquery.js"></script>
   <script src="js/bootstrap-datetimepicker.min.js"></script>
   <script src="js/jquery.dataTables.js"></script>
   <script src="js/bootstrap.js"></script>
   <link rel="stylesheet" type="text/css" href="css/fileuploader.css">
   <script src="js/fileuploader.js"></script>
   <style type="text/css">
   #listaposts .span3 {width:200px; height: 240px; margin: 10px;}
   #listaposts .thumbnail img {width: 150px; height: 100px;}
   #postsDone {padding:10px;}
   </style>
   <script type="text/javascript">


   function createUploader(){            
    var uploader = new qq.FileUploader({
      element: document.getElementById('file-uploader-demo1'),
      action: 'ajax/upload.php',
      debug: true,
      extraDropzones: [qq.getByClass(document, 'qq-upload-extra-drop-area')[0]]
    });           
  }
  
        // in your app create uploader as soon as the DOM is ready
        // don't wait for the window to load  
        window.onload = createUploader;  


        $('#puthere').change(function(event) {
          var current = $('#puthere').val();
          $.ajax({
            url: 'ajax/updateFolder.php',
            type: 'post',
            data: {folder : current},
            success: function(json) { }

          });
        }); 



        var picker = $('#datetimepicker1').datetimepicker({
          format: 'MM/dd/yyyy hh:mm:ss',
          language: 'en'
        });
        </script>
        <script type="text/javascript">
        $(document).ready(function (){

          $('.dropdown-toggle').dropdown();
          $(".alert").alert();
          $('.nav-tabs').button();

          $("#startRss").on('click', function() {
            var feed = $('#urlRss').val();
            var pages = $('#pageRss').val();
            var time = $('#timeRss').val();
            if(feed===null || pages===null){
              alert("You need to select at least one page and one url feed");
              return;
            }
            $("#startRss").hide();
            $("#stopRss").show();
            var rssInterval = setInterval(function(){
              searchRss(feed,pages); 
            }, 1000*(time*60)); 
          });


          function timeConverter(UNIX_timestamp){
           var a = new Date(UNIX_timestamp*1000);
           var months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
           var year = a.getFullYear();
           var month = months[a.getMonth()];
           var date = a.getDate();
           var hour = a.getHours();
           var min = a.getMinutes();
           var sec = a.getSeconds();
           var time = date+','+month+' '+year+' '+hour+':'+min+':'+sec ;
           return time;
         }


         $("#generatePosts").on('click', function() {
          if ( $('#dataehora').val() !="") {
            var val = $('#dataehora').val();
            var d = new Date(val.replace(/\./g, '/'));
            var time =  d.getTime()/1000;
            var todayDate = new Date();
            var nowTime =  todayDate.getTime()/1000;

            if((time-nowTime)<=600){
              alert("Date and time you pick are not valid. The post must be at least 10 minutes in the future. (this is a facebook limitation not from the script).")
            }else{

              if (isNaN($('#postsperday').val())) {
                var postsPerDay = 1000;
              }else{
                var postsPerDay = $('#postsperday').val();
              }


              $('#dataehora').val(time);
              var data = $("#formPosts").serialize();
              $.ajax({
                url: 'ajax/generateposts.php',
                type: 'post',
                data: data,
                dataType: 'json',
                success: function(json) {
                  $("#formPosts").hide();
                  $('.thumbnails, .options').show();
                  $('.thumbnails').html("");

                  if(json.from=="folder"){
                    var nextDay = parseInt(json.dataehora) + (24 * 3600);
                    for (var i in json.images){
                      var timeofpost = 0;
                      if(i>0){
                        if(i%parseInt(postsPerDay)==0){
                          json.dataehora = nextDay;
                          nextDay = parseInt(json.dataehora) + (24 * 3600);
                        }else{
                          switch(json.time){
                            case "5m":  json.dataehora = parseInt(json.dataehora) + (5 * 60); break;
                            case "10m":  json.dataehora = parseInt(json.dataehora) + (10 * 60); break;
                            case "15m":  json.dataehora = parseInt(json.dataehora) + (15 * 60); break;
                            case "20m":  json.dataehora = parseInt(json.dataehora) + (20 * 60); break;
                            case "30m":  json.dataehora = parseInt(json.dataehora) + (30 * 60); break;
                            case "1h":  json.dataehora = parseInt(json.dataehora) + (1 * 3600); break;
                            case "2h":  json.dataehora = parseInt(json.dataehora) + (2 * 3600); break;
                            case "3h":  json.dataehora = parseInt(json.dataehora) + (3 * 3600); break;
                            case "4h":  json.dataehora = parseInt(json.dataehora) + (4 * 3600); break;
                            case "5h":  json.dataehora = parseInt(json.dataehora) + (5 * 3600); break;
                            case "6h":  json.dataehora = parseInt(json.dataehora) + (6 * 3600); break;
                          }
                        }
                      }
                      timeofpost = json.dataehora;
                      var namePage = "";
                      var dataLabel = "";
                      dataLabel = timeConverter(timeofpost);
                      for(var j in json.page){
                        namePage = jQuery("select option[value=" + json.page[j] + "]").first().text();
                        $('.thumbnails').append('<li class="span3"><div class="thumbnail"><img src="' + json.folder + '/' + json.images[i] + '" class="ourimg" alt=""><div class="caption"><p><textarea style="width:90%"></textarea><input type="hidden" class="timeofpost" value="' + timeofpost + '" /><input type="hidden" class="type" value="image" /><input type="hidden" class="url" value="" /><input type="hidden" class="page" value="'+ json.page[j] +'" /></p></div><span class="label label-info">' + namePage +'</span><span class="label label-warning">' + dataLabel +'</span></div></li>');
                      }
                    }
                  }else{
                    var nextDay = parseInt(json.dataehora) + (24 * 3600);
                    for (var i in json.content){
                      var timeofpost = 0;
                      if(i>0){
                        if(i%parseInt(postsPerDay)==0){
                          json.dataehora = nextDay;
                          nextDay = parseInt(json.dataehora) + (24 * 3600);
                        }else{
                          switch(json.time){
                            case "5m":  json.dataehora = parseInt(json.dataehora) + (i*(5 * 60)); break;
                            case "10m":  json.dataehora = parseInt(json.dataehora) + (i*(10 * 60)); break;
                            case "15m":  json.dataehora = parseInt(json.dataehora) + (i*(15 * 60)); break;
                            case "20m":  json.dataehora = parseInt(json.dataehora) + (i*(20 * 60)); break;
                            case "30m":  json.dataehora = parseInt(json.dataehora) + (i*(30 * 60)); break;
                            case "1h":  json.dataehora = parseInt(json.dataehora) + (i*(1 * 3600)); break;
                            case "2h":  json.dataehora = parseInt(json.dataehora) + (i*(2 * 3600)); break;
                            case "3h":  json.dataehora = parseInt(json.dataehora) + (i*(3 * 3600)); break;
                            case "4h":  json.dataehora = parseInt(json.dataehora) + (i*(4 * 3600)); break;
                            case "5h":  json.dataehora = parseInt(json.dataehora) + (i*(5 * 3600)); break;
                            case "6h":  json.dataehora = parseInt(json.dataehora) + (i*(6 * 3600)); break;
                          }
                        }
                      }

                      timeofpost = json.dataehora;
                      var namePage = "";
                      var dataLabel = "";
                      dataLabel = timeConverter(timeofpost);

                      for(var j in json.page){
                        namePage = jQuery("select option[value=" + json.page[j] + "]").first().text();
                        if(json.type[i]=="image"){
                         $('.thumbnails').append('<li class="span3"><div class="thumbnail"><img src="' + json.folder + '/' + json.content[i] + '" class="ourimg" alt=""><div class="caption"><p><textarea style="width:90%">' + json.text[i] + '</textarea><input type="hidden" class="timeofpost" value="' + timeofpost + '" /><input type="hidden" class="type" value="image" /><input type="hidden" class="url" value="" /><input type="hidden" class="page" value="'+ json.page +'" /></p></div><span class="label label-info">' + namePage +'</span><span class="label label-warning">' + dataLabel +'</span></div></li>');
                       }else{
                        $('.thumbnails').append('<li class="span3"><div class="thumbnail"><div style="width: 150px;height: 100px;">' + json.content[i] + '</div><div class="caption"><p><textarea style="width:90%">' + json.text[i] + '</textarea><input type="hidden" class="timeofpost" value="' + timeofpost + '" /><input type="hidden" class="type" value="url" /><input type="hidden" class="url" value="' + json.content[i] + '" /><input type="hidden" class="page" value="'+ json.page +'" /></p></div><span class="label label-info">' + namePage +'</span><span class="label label-warning">' + dataLabel +'</span></div></li>');
                      }
                    }
                  }
                }
              }
            });
 }

}
});


   $("#postall").on('click', function() {
    if ( $('ul.thumbnails').find('li').length >0 ) {
      $('.options').hide();
      $('.progress-striped').show();
      var total = $('ul.thumbnails').find('li').length;
      var x = 1;
      var interval = setInterval(function(){
        if ($( 'ul.thumbnails li' ).length>0) {
          postOne(total, x);
          x = x + 1;
        } else {
          clearInterval(interval);
        }
          }, 3000); // every 100 milliseconds
    }
  });


   function growBar(total, x){
    var bar = 0;
    bar = (100/total)*x;
    $('.bar').css('width',  bar + '%');
    if(total==x){
      $('.progress-striped').fadeOut(1000);
      $('.sucessoPost').fadeIn(2000);
    }
    return;    
  }

  function searchRss(feed, pages){
    $.ajax({
      url: 'ajax/postRss.php',
      type: 'post',
      dataType: 'json',
      data: {'feed' : feed,'pages' : pages},
      success: function(json) {
        if(json===null){

        }else{
          var id;
          for (var i = json.length - 1; i >= 0; i--) {
           id = json[i].id.split('_');
           $('#postsDone').append('<div class="alert alert-info"><button type="button" class="close" data-dismiss="alert">&times;</button><a href="https://www.facebook.com/' + id[0]+ '/posts/' + id[1] + '" target="_blank">' + json[i].title[0] + '</a></div>');
         }
         
       }
     }
   }); 
  }



  function postOne(total, x){
    if($( 'ul.thumbnails li' ).length>0){
      var first = $( 'ul.thumbnails li' ).first();
      text = first.find('textarea').val();
      time = first.find('.timeofpost').val();
      type = first.find('.type').val();
      url =  first.find('.url').val();
      page = first.find('.page').val();
      if(type=="image")
        image = first.find('.ourimg').attr('src');
      else
        image = "1";
      $.ajax({
        url: 'ajax/post.php',
        type: 'post',
        data: {'text' : text,'time' : time,'type' : type,'url' : url, 'image' : image, 'page' : page},
        success: function(json) {
          growBar(total, x);
        }
      }); 
      first.remove();
    }
  }

  /* API method to get paging information */
  $.fn.dataTableExt.oApi.fnPagingInfo = function ( oSettings )
  {
    return {
      "iStart":         oSettings._iDisplayStart,
      "iEnd":           oSettings.fnDisplayEnd(),
      "iLength":        oSettings._iDisplayLength,
      "iTotal":         oSettings.fnRecordsTotal(),
      "iFilteredTotal": oSettings.fnRecordsDisplay(),
      "iPage":          oSettings._iDisplayLength === -1 ?
      0 : Math.ceil( oSettings._iDisplayStart / oSettings._iDisplayLength ),
      "iTotalPages":    oSettings._iDisplayLength === -1 ?
      0 : Math.ceil( oSettings.fnRecordsDisplay() / oSettings._iDisplayLength )
    };
  }

  /* Bootstrap style pagination control */
  $.extend( $.fn.dataTableExt.oPagination, {
    "bootstrap": {
      "fnInit": function( oSettings, nPaging, fnDraw ) {
        var oLang = oSettings.oLanguage.oPaginate;
        var fnClickHandler = function ( e ) {
          e.preventDefault();
          if ( oSettings.oApi._fnPageChange(oSettings, e.data.action) ) {
            fnDraw( oSettings );
          }
        };

        $(nPaging).addClass('pagination').append(
          '<ul>'+
          '<li class="prev disabled"><a href="#">&larr; '+oLang.sPrevious+'</a></li>'+
          '<li class="next disabled"><a href="#">'+oLang.sNext+' &rarr; </a></li>'+
          '</ul>'
          ).addClass('pagination-mini');
        var els = $('a', nPaging);
        $(els[0]).bind( 'click.DT', { action: "previous" }, fnClickHandler );
        $(els[1]).bind( 'click.DT', { action: "next" }, fnClickHandler );
      },

      "fnUpdate": function ( oSettings, fnDraw ) {
        var iListLength = 5;
        var oPaging = oSettings.oInstance.fnPagingInfo();
        var an = oSettings.aanFeatures.p;
        var i, j, sClass, iStart, iEnd, iHalf=Math.floor(iListLength/2);

        if ( oPaging.iTotalPages < iListLength) {
          iStart = 1;
          iEnd = oPaging.iTotalPages;
        }
        else if ( oPaging.iPage <= iHalf ) {
          iStart = 1;
          iEnd = iListLength;
        } else if ( oPaging.iPage >= (oPaging.iTotalPages-iHalf) ) {
          iStart = oPaging.iTotalPages - iListLength + 1;
          iEnd = oPaging.iTotalPages;
        } else {
          iStart = oPaging.iPage - iHalf + 1;
          iEnd = iStart + iListLength - 1;
        }

        for ( i=0, iLen=an.length ; i<iLen ; i++ ) {
                // Remove the middle elements
                $('li:gt(0)', an[i]).filter(':not(:last)').remove();

                // Add the new list items and their event handlers
                for ( j=iStart ; j<=iEnd ; j++ ) {
                  sClass = (j==oPaging.iPage+1) ? 'class="active"' : '';
                  $('<li '+sClass+'><a href="#">'+j+'</a></li>')
                  .insertBefore( $('li:last', an[i])[0] )
                  .bind('click', function (e) {
                    e.preventDefault();
                    oSettings._iDisplayStart = (parseInt($('a', this).text(),10)-1) * oPaging.iLength;
                    fnDraw( oSettings );
                  } );
                }

                // Add / remove disabled classes from the static elements
                if ( oPaging.iPage === 0 ) {
                  $('li:first', an[i]).addClass('disabled');
                } else {
                  $('li:first', an[i]).removeClass('disabled');
                }

                if ( oPaging.iPage === oPaging.iTotalPages-1 || oPaging.iTotalPages === 0 ) {
                  $('li:last', an[i]).addClass('disabled');
                } else {
                  $('li:last', an[i]).removeClass('disabled');
                }
              }
            }
          }
        } );

   var table = $('#example').dataTable({
    "sPaginationType": "bootstrap",
    "sDom": "<'row'<'span6'l><'span6'f>r>t<'row'<'span6'i><'span6'p>>"
  });
 });
   </script>
   <script type="text/javascript">
   var HashSearch = new function () {
     var params;

     this.set = function (key, value) {
      params[key] = value;
      this.push();
    };

    this.remove = function (key, value) {
      delete params[key];
      this.push();
    };


    this.get = function (key, value) {
     return params[key];
   };

   this.keyExists = function (key) {
     return params.hasOwnProperty(key);
   };

   this.push= function () {
     var hashBuilder = [], key, value;

     for(key in params) if (params.hasOwnProperty(key)) {
           key = escape(key), value = escape(params[key]); // escape(undefined) == "undefined"
           hashBuilder.push(key + ( (value !== "undefined") ? '=' + value : "" ));
         }

         window.location.hash = hashBuilder.join("&");
       };

       (this.load = function () {
         params = {}
         var hashStr = window.location.hash, hashArray, keyVal
         hashStr = hashStr.substring(1, hashStr.length);
         hashArray = hashStr.split('&');

         for(var i = 0; i < hashArray.length; i++) {
           keyVal = hashArray[i].split('=');
           params[unescape(keyVal[0])] = (typeof keyVal[1] != "undefined") ? unescape(keyVal[1]) : keyVal[1];
         }
       })();
     }

     if (typeof HashSearch.get('access_token')==='undefined') {
   // global variable v is defined
 } else {
   // global variable v is not defined
   if (HashSearch.get('access_token').length>20) { 
     $.ajax({
      type: "POST",
      url: 'ajax/store_access.php',
      data: 'access_token='+escape(HashSearch.get('access_token')),
      dataType: "html",
      success: function(response) {
       window.location.href="index.php";
     }
   });
   }
 }


 $(document).ready(function() {
  var url = document.location.toString();
  if (url.match('#')) {
    $('#tab a[href=#'+url.split('#')[1]+']').tab('show') ;
  } 

// Change hash for page-reload
$('#tab a').on('shown', function (e) {
  window.location.hash = e.target.hash;
});
});
 </script>
 <style type="text/css">
 #files div {width:150px; float:left;}
 </style>

</body>
</html>