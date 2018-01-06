(function($) {
	$.fn.countdown = function(options) {

		//custom 'this' selector
	var	thisEl = $(this);

		//array of custom settings
		var settings = { 
			
			'time':null,
			'zone': null
		};

		//append the settings array to options
		if(options) {
			$.extend(settings, options);
		}
		function countdown_proc() {
		var	etime = (settings['time']);
	var	eminsec = etime.split(".");

		var sdate = new Date();
			var ndate =  new Date(sdate.getFullYear(),sdate.getMonth(),sdate.getDate(),eminsec[0],eminsec[1],eminsec[2]);
var mdate;
			var curDate = new Date();
			if(curDate > ndate)
			{
			 mdate = new Date(sdate.getFullYear(),sdate.getMonth(),sdate.getDate()+1,eminsec[0],eminsec[1],eminsec[2]);
			 }
			 else if(curDate < ndate)
			 {
			  mdate = new Date(sdate.getFullYear(),sdate.getMonth(),sdate.getDate(),eminsec[0],eminsec[1],eminsec[2]);
			  }
			  
			
		
		
	var	getdatem = Math.floor(mdate.getTime()/1000);
	

		
		var 	entDate = new Date();
		var	newentDate = Math.floor(entDate.getTime()/1000);
			//alert(newentDate);
		//	newgdatem = Math.floor(getdatem/1000);
			
		var	eventDate = getdatem - newentDate ;
//alert(eventDate);
		var 	zzone = (settings['zone']);
		//	alert(zzone);
		currentDate = Math.floor($.now() / 1000);
		var	plocalTime = new Date();
		var	localTime = (plocalTime.getTime());
		var offset = (plocalTime.getTimezoneOffset()) ;
		// alert(plocalTime.getTime()/1000);
		var utc = localTime + offset ;
	var	 addzone = Math.floor(zzone * 3600000);
	var	 addzonesec = Math.floor(addzone/1000);
	var	 newzone = Math.floor((utc + addzone)/1000);
		 //alert(newzone);
		countdown_msproc();
			
		/*	if(eventDate <= newzone) {
				callback.call(this);
				clearInterval(interval);
			}*/
			
		var	seconds = (getdatem + addzonesec) - (newzone)  ;
				

		
		
		var	hours = Math.floor(seconds / (60 * 60));
			seconds -= hours * 60 * 60; //update the seconds variable with no. of hours removed
			
		var	minutes = Math.floor(seconds / 60);
			seconds -= (minutes * 60); //update the seconds variable with no. of minutes removed
			
			//separating days digits
		//	hunday = Math.floor(days/100);
			//ntenday = days%100;
			//tenday = Math.floor(ntenday/10);
		
		
			//separating hours digits
			var	tenhour = Math.floor(hours/10);
	var onehour = hours%10;
//	alert(tenhour);
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
	
	
		
			//logic for the two_digits ON setting
			//if(settings['format'] == "on") {
				
				hours = (String(hours).length >= 2) ? hours : "0" + hours;
				minutes = (String(minutes).length >= 2) ? minutes : "0" + minutes;
			seconds = (String(seconds).length >= 2) ? seconds : "0" + seconds;
			//}
			
			//update the countdown's html values.
			if(!isNaN(seconds)) {
			
				thisEl.find(".hours").text(hours);
				thisEl.find(".minutes").text(minutes);
				thisEl.find(".seconds").text(seconds);
					thisEl.find(".dytensec").text(tensec);
				thisEl.find(".dyonesec").text(onesec);
					thisEl.find(".dytenmin").text(tenmin);
				thisEl.find(".dyonemin").text(onemin);
					thisEl.find(".dytenhour").text(tenhour);
				thisEl.find(".dyonehour").text(onehour);
				
			
			} else { 
				alert("Invalid date. Here's an example: 12 Tuesday 2012 17:30:00");
				clearInterval(interval); 
			}
		}
		
		//run the function
		countdown_proc();
		
		//loop the function
	var interval = setInterval(countdown_proc, 1000);
		
	}
	
	function countdown_msproc()

{

$("#dyseconetop").flip({

direction:'tb',

color: '#000000',


onEnd: function(){
$("#dyseconetop").css("opacity","0");
		
	}

})



}

	
	// function for flipping tenth second.
	function countdown_tsproc()

{

$("#dysectentop").flip({

direction:'tb',

color: '#000000',


onEnd: function(){
$("#dysectentop").css("opacity","0");
		
	}

})
}





//flipping for oneth digit of day
	function countdown_hnoproc()

{

$("#dydayonetop").flip({

direction:'tb',

color: '#000000',


onEnd: function(){
$("#dydayonetop").css("opacity","0");
		
	}

})
}


// function for flipping tenth digit of hour.
	function countdown_htproc()

{

$("#dyhourtentop").flip({

direction:'tb',

color: '#000000',


onEnd: function(){
$("#dyhourtentop").css("opacity","0");
		
	}

})
}

// function for flipping oneth digit of hour.
	function countdown_hoproc()

{

$("#dyhouronetop").flip({

direction:'tb',

color: '#000000',


onEnd: function(){
$("#dyhouronetop").css("opacity","0");
		
	}

})
}

// function for flipping tenth digit of minutes.
	function countdown_mtproc()

{

$("#dymintentop").flip({

direction:'tb',

color: '#000000',


onEnd: function(){
$("#dymintentop").css("opacity","0");
		
	}

})
}
// function for oneth digit of minutes.
	function countdown_moproc()

{

$("#dyminonetop").flip({

direction:'tb',

color: '#000000',


onEnd: function(){
$("#dyminonetop").css("opacity","0");
		
	}

})
}

}) (jQuery);



