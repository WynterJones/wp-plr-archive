(function($) {
	$.fn.countdown = function(options, callback) {

	// this.each(function(){  
		//custom 'this' selector
		var thisEl = $(this);

		//array of custom settings
		var settings = { 
			'date': null,
			'zone': null
		};

		//append the settings array to options
		if(options) {
			$.extend(settings, options);
		}
		
		//main countdown function
		function countdown_proc() {
			
		var	eventDate = Date.parse(settings['date']) ;
		
		var 	zzone = (settings['zone']);
			//currentDate = Math.floor($.now() / 1000);
		var	plocalTime = new Date();
		var	localTime = plocalTime.getTime();
	var	 offset = (plocalTime.getTimezoneOffset()) * 60000;
	var	 utc = localTime + offset ;
	var	 	neweventDate = eventDate ;
		var	finaleventDate = Math.floor((neweventDate)/1000);
		var newzone = Math.floor((utc + (zzone*3600000))/1000);
	countdown_msproc();
			
		//alert(finaleventDate - newzone);
			//alert("vte" + newzone);
		if(finaleventDate <= newzone){
				callback.call(this);
				clearInterval(interval);
			}
			
		var	seconds = Math.floor((finaleventDate - newzone));
			if(seconds <= 0)
			{
			seconds = 0;
			}
		var	days = Math.floor(seconds / (60 * 60 * 24)); //calculate the number of days
		seconds -= days * 60 * 60 * 24; //update the seconds variable with no. of days removed
			
		var	hours = Math.floor(seconds / (60 * 60));
		seconds -= hours * 60 * 60; //update the seconds variable with no. of hours removed
			
		var	minutes = Math.floor(seconds / 60);
	 	seconds -= (minutes * 60); //update the seconds variable with no. of minutes removed
			var hunday;
			//separating days digits
			if(days > 0)
			{
			hunday = Math.floor(days/100);
		}else {
		hunday = 0;
		}
		
		
		var	ntenday = days%100;
		var	tenday ;
		var oneday;
		if(ntenday > 0)
		{
		tenday = Math.floor(ntenday/10);
		oneday = ntenday%10;
		}
		else {
		tenday = 0;
		oneday = 0;
		}
		
			if((ntenday == 0) && (oneday == 0) && (hours == 0) && (minutes == 0) && (seconds == 0))
			{
			countdown_hnproc();
			}
			if((oneday == 0) && (hours == 0) && (minutes == 0) && (seconds == 0))
			{
			countdown_dtproc();
			}
			if((hours == 0) && (minutes == 0) && (seconds == 0))
		{
	countdown_hnoproc();	
	}
			//separating hours digits
			var	tenhour = Math.floor(hours/10);
	var onehour = hours%10;
	if((onehour == 0) && (minutes == 0) && (seconds == 0))
	{
	countdown_htproc();
	}
if((minutes == 0) && (seconds == 0))
		{
	countdown_hoproc();	
	}
			
			
			//separating minutes digits
		var	tenmin = Math.floor(minutes/10);
var	onemin = minutes%10;
	if((onemin == 0)&& (seconds == 0))
	{
	countdown_mtproc();
	}
if(seconds == 0)
		{
	countdown_moproc();	
	}
			// separating seconds digits
var	tensec = Math.floor(seconds/10);
var	onesec = seconds%10;
	if(onesec == 0)
	{
	countdown_tsproc();
	}
	
	
			//conditional Ss
			if (days == 1) { thisEl.find(".timeRefDays").text("day"); } else { thisEl.find(".timeRefDays").text("days"); }
			if (hours == 1) { thisEl.find(".timeRefHours").text("hour"); } else { thisEl.find(".timeRefHours").text("hours"); }
			if (minutes == 1) { thisEl.find(".timeRefMinutes").text("minute"); } else { thisEl.find(".timeRefMinutes").text("minutes"); }
			if (seconds == 1) { thisEl.find(".timeRefSeconds").text("second"); } else { thisEl.find(".timeRefSeconds").text("seconds"); }
			
			//logic for the two_digits ON setting
			//if(settings['format'] == "on") {
				days = (String(days).length == 3) ? days : "00" + days;
					days = (String(days).length >= 2) ? days : "0" + days;
				hours = (String(hours).length >= 2) ? hours : "0" + hours;
				minutes = (String(minutes).length >= 2) ? minutes : "0" + minutes;
			seconds = (String(seconds).length >= 2) ? seconds : "0" + seconds;
			//}
			
			//update the countdown's html values.
			if(!isNaN(eventDate)) {
				thisEl.find(".days").text(days);
				thisEl.find(".hours").text(hours);
				thisEl.find(".minutes").text(minutes);
				thisEl.find(".seconds").text(seconds);
					thisEl.find(".tensec").text(tensec);
				thisEl.find(".onesec").text(onesec);
					thisEl.find(".tenmin").text(tenmin);
				thisEl.find(".onemin").text(onemin);
					thisEl.find(".tenhour").text(tenhour);
				thisEl.find(".onehour").text(onehour);
					thisEl.find(".oneday").text(oneday);
					thisEl.find(".tenday").text(tenday);
				thisEl.find(".hunday").text(hunday);
			} else { 
				alert("Invalid date. Here's an example: 12 Tuesday 2012 17:30:00");
				clearInterval(interval); 
			}
		}
		
		//run the function
		countdown_proc();
		
		//loop the function
	var	interval = setInterval(countdown_proc, 1000);
		
	}
	
	function countdown_msproc()

{

$("#seconetop").flip({

direction:'tb',

color: '#000000',


onEnd: function(){
$("#seconetop").css("opacity","0");
		
	}

})



}

	
	// function for flipping tenth second.
	function countdown_tsproc()

{

$("#sectentop").flip({

direction:'tb',

color: '#000000',


onEnd: function(){
$("#sectentop").css("opacity","0");
		
	}

})
}

//flipping for hundredth digit of day
	function countdown_dnproc()

{

$("#daythtop").flip({

direction:'tb',

color: '#000000',


onEnd: function(){
$("#daythtop").css("opacity","0");
		
	}

})
}

//flipping for tenth digit of day
	function countdown_dtproc()

{

$("#daytentop").flip({

direction:'tb',

color: '#000000',


onEnd: function(){
$("#daytentop").css("opacity","0");
		
	}

})
}

//flipping for oneth digit of day
	function countdown_hnoproc()

{

$("#dayonetop").flip({

direction:'tb',

color: '#000000',


onEnd: function(){
$("#dayonetop").css("opacity","0");
		
	}

})
}


// function for flipping tenth digit of hour.
	function countdown_htproc()

{

$("#hourtentop").flip({

direction:'tb',

color: '#000000',


onEnd: function(){
$("#hourtentop").css("opacity","0");
		
	}

})
}

// function for flipping oneth digit of hour.
	function countdown_hoproc()

{

$("#houronetop").flip({

direction:'tb',

color: '#000000',


onEnd: function(){
$("#houronetop").css("opacity","0");
		
	}

})
}

// function for flipping tenth digit of minutes.
	function countdown_mtproc()

{

$("#mintentop").flip({

direction:'tb',

color: '#000000',


onEnd: function(){
$("#mintentop").css("opacity","0");
		
	}

})
}
// function for oneth digit of minutes.
	function countdown_moproc()

{

$("#minonetop").flip({

direction:'tb',

color: '#000000',


onEnd: function(){
$("#minonetop").css("opacity","0");
		
	}

})
}
  // )}
}) (jQuery);