 var player;
  function onYouTubePlayerAPIReady() {
    player = new YT.Player('video', {
      events: {
        // call this function when player is ready to use
        'onReady': onPlayerReady,
        'onStateChange': onPlayerStateChange
      }
    });
  }
  function onPlayerStateChange(event) {
    if(event.data === 0) {
      // Video Ended
    }
    var checkOptin = 0;
    setInterval(function(){
        if (Math.ceil(player.getCurrentTime()) === 1 && checkOptin == 0){
            checkOptin = 1;
            $( ".optinpop" ).velocity({
              top: 0
            });
            player.pauseVideo();
        }
         

        if (Math.ceil(player.getCurrentTime()) === 2){
            $( ".popup_social" ).fadeIn();
        }

        if (Math.ceil(player.getCurrentTime()) === 7){
            $('.popup_bottom').velocity({
              bottom: 10
            });
        }
        if (Math.ceil(player.getCurrentTime()) === 9){
            $('.popup_bottom').velocity({
              bottom: -510
            });
        }

        if (Math.ceil(player.getCurrentTime()) === 1){
            $('.popup_right').velocity({
              right: 10
            });
        }
        if (Math.ceil(player.getCurrentTime()) === 14){
            $('.popup_right').velocity({
              right: -511
            });
        }

        if (Math.ceil(player.getCurrentTime()) === 16){
            $('.popup_left').velocity({
              left: 11
            });
        }
        if (Math.ceil(player.getCurrentTime()) === 21){
            $('.popup_left').velocity({
              left: -511
            });
        }
    },1000);
  }
  function onPlayerReady(event) {
    var playviedeo2 = document.getElementById("playvideo2");
          playviedeo2.addEventListener("click", function() {
            
            $( ".optinpop" ).velocity({
              top: -410
            });
            player.playVideo();

          });

    var playButton = document.getElementById("playvideo");
    playButton.addEventListener("click", function() {
      player.playVideo();
    });
    var pauseButton = document.getElementById("pause-button");
    pauseButton.addEventListener("click", function() {
      player.pauseVideo();
    });
  
  }
  var tag = document.createElement('script');
  tag.src = "//www.youtube.com/player_api";
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

  