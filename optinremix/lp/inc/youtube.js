var player;

// this function gets called when API is ready to use
function onYouTubePlayerAPIReady() {
  // create the global player from the specific iframe (#video)
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
                $('#step2').velocity({
                  left: "-2000px"
                });
                $('#step3').velocity({
                  right: "0"
                });
                 $('.backstretch').fadeOut();
                setTimeout(function() {
      $.backstretch("http://cdn.freshome.com/wp-content/uploads/2013/10/kitchen-size.jpg");

    }, 200);
    setTimeout(function() {
      $('.backstretch').fadeIn();
    }, 500);
                
            }
        }

function onPlayerReady(event) {
  
  // bind events
  var playButton = document.getElementById("play-button");
  playButton.addEventListener("click", function() {
    player.playVideo();
  });
  
  var pauseButton = document.getElementById("skipVideo");
  pauseButton.addEventListener("click", function() {
    player.pauseVideo();
    $('#step2').velocity({
                  left: "-2000px"
                });
                $('#step3').velocity({
                  right: "0"
                });
                $('.backstretch').fadeOut();
                setTimeout(function() {
      $.backstretch("http://cdn.freshome.com/wp-content/uploads/2013/10/kitchen-size.jpg");

    }, 200);
    setTimeout(function() {
      $('.backstretch').fadeIn();
    }, 500);
  });
  
}

// Inject YouTube API script
var tag = document.createElement('script');
tag.src = "//www.youtube.com/player_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);