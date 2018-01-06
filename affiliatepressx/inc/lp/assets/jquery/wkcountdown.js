(function($) {
	$.fn.wkcountdown = function(options) {

		//custom 'this' selector
	var	thisEl = $(this);

		//array of custom settings
		var settings = { 
			'day': null,
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
	var		eday = (settings['day']);
		var sdate = new Date();
			
var ndate;
			if(eday == "Sunday")
			{
		 ndate = sdate.next().sunday();
			// mdate = sdate.next().sunday();
			  }
		 else if(eday == "Monday")
			{
		  ndate = sdate.next().monday();
			//   mdate = sdate.next().monday();
			  }
			   else if(eday == "Tuesday")
			{
			 ndate = sdate.next().tuesday();
			//     mdate = sdate.next().tuesday();
			  }
			 else if(eday == "Wednesday")
			{
			  ndate = sdate.next().wednesday();
			  //    mdate = sdate.next().wednesday();
			  }
	else if(eday == "Thursday")
			{
			 ndate = sdate.next().thursday();
			 //  mdate = sdate.next().thursday();
			  }
			else if(eday == "Friday")
			{
			  ndate = sdate.next().friday();
			//  mdate = sdate.next().friday();
			  }
			else if(eday == "Saturday")
			{
			  ndate = sdate.next().saturday();
			 //  mdate = sdate.next().saturday();
			  }
		
			var ldate = new Date(ndate.getFullYear(),ndate.getMonth(),ndate.getDate(),eminsec[0],eminsec[1],eminsec[2]);
			
		var ldates = Math.floor(ldate.getTime());
			var ldatem = ldates - 604800000;
			
			var fdate = new Date();
var fdates = Math.floor(fdate.getTime());
//alert(fdate);	
//alert(ldatem > fdates);
		if(ldatem > fdates)
			{
				if(eday == "Sunday")
			{
		 ndate = sdate.previous().sunday();
			  }
		 else if(eday == "Monday")
			{
		  
		ndate = sdate.previous().monday();
			  }
			   else if(eday == "Tuesday")
			{
		
			ndate = sdate.previous().tuesday();
			  }
			 else if(eday == "Wednesday")
			{
			
			  ndate = sdate.previous().wednesday();
			  }
	else if(eday == "Thursday")
			{
			
			ndate = sdate.previous().thursday();
			  }
			else if(eday == "Friday")
			{
			
			ndate = sdate.previous().friday();
			  }
			else if(eday == "Saturday")
			{
			 
			ndate = sdate.previous().saturday();
			  }
			 	
			}
			
			var lldate = new Date(ndate.getFullYear(),ndate.getMonth(),ndate.getDate(),eminsec[0],eminsec[1],eminsec[2]);
		var	getdatem = Math.floor(lldate.getTime()/1000);
	
//alert(getdatem);
		//main countdown function
		
		
		var 	entDate = new Date();
		var	newentDate = Math.floor(entDate.getTime()/1000);
			//alert(newentDate);
		//	newgdatem = Math.floor(getdatem/1000);
			
		var	eventDate = getdatem - newentDate ;
//alert(eventDate);
		var 	zzone = (settings['zone']);
		//	alert(zzone);
			//currentDate = Math.floor($.now() / 1000);
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
			
		var	seconds = (getdatem + addzonesec) - (newzone);
				
//alert(seconds);
		var	days = Math.floor(seconds / (60 * 60 * 24)); //calculate the number of days
			seconds -= days * 60 * 60 * 24; //update the seconds variable with no. of days removed
		
		var	hours = Math.floor(seconds / (60 * 60));
			seconds -= hours * 60 * 60; //update the seconds variable with no. of hours removed
			
		var	minutes = Math.floor(seconds / 60);
			seconds -= (minutes * 60); //update the seconds variable with no. of minutes removed
			
			//separating days digits
		//	hunday = Math.floor(days/100);
			//ntenday = days%100;
			//tenday = Math.floor(ntenday/10);
			oneday = days;
		
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
	
	
		
			//logic for the two_digits ON setting
			//if(settings['format'] == "on") {
				
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
					thisEl.find(".wktensec").text(tensec);
				thisEl.find(".wkonesec").text(onesec);
					thisEl.find(".wktenmin").text(tenmin);
				thisEl.find(".wkonemin").text(onemin);
					thisEl.find(".wktenhour").text(tenhour);
				thisEl.find(".wkonehour").text(onehour);
					thisEl.find(".wkoneday").text(oneday);
			
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

$("#wkseconetop").flip({

direction:'tb',

color: '#000000',


onEnd: function(){
$("#wkseconetop").css("opacity","0");
		
	}

})



}

	
	// function for flipping tenth second.
	function countdown_tsproc()

{

$("#wksectentop").flip({

direction:'tb',

color: '#000000',


onEnd: function(){
$("#wksectentop").css("opacity","0");
		
	}

})
}





//flipping for oneth digit of day
	function countdown_hnoproc()

{

$("#wkdayonetop").flip({

direction:'tb',

color: '#000000',


onEnd: function(){
$("#wkdayonetop").css("opacity","0");
		
	}

})
}


// function for flipping tenth digit of hour.
	function countdown_htproc()

{

$("#wkhourtentop").flip({

direction:'tb',

color: '#000000',


onEnd: function(){
$("#wkhourtentop").css("opacity","0");
		
	}

})
}

// function for flipping oneth digit of hour.
	function countdown_hoproc()

{

$("#wkhouronetop").flip({

direction:'tb',

color: '#000000',


onEnd: function(){
$("#wkhouronetop").css("opacity","0");
		
	}

})
}

// function for flipping tenth digit of minutes.
	function countdown_mtproc()

{

$("#wkmintentop").flip({

direction:'tb',

color: '#000000',


onEnd: function(){
$("#wkmintentop").css("opacity","0");
		
	}

})
}
// function for oneth digit of minutes.
	function countdown_moproc()

{

$("#wkminonetop").flip({

direction:'tb',

color: '#000000',


onEnd: function(){
$("#wkminonetop").css("opacity","0");
		
	}

})
}

}) (jQuery);



