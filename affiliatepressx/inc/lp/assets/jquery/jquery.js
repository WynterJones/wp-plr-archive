$(document).ready(function() {

	$(".video iframe").attr('style', 'width: 100%; height: 402px');
	$(".video embed").attr('style', 'width: 100%; height: 402px');
	$(".video object").attr('style', 'width: 100%; height: 402px');
var d = '2013-6-10';
var dateParts = new Date((Number(d.split("-")[0])), (Number(d.split("-")[1]) - 1), (Number(d.split("-")[2])));
var dateis = dateParts.getTime();
alert(dateis);
  var currentDate = new Date(),
          finished = false,
          availiableExamples = {
            set15daysFromNow: 15 * 24 * 60 * 60 * 1000,
            set5minFromNow  : 5 * 60 * 1000,
            set1minFromNow  : 1 * 60 * 1000,
            other : dateis
          };
      
      function callback(event) {
  		  $this = $(this);
  			switch(event.type) {
  				case "seconds":
  				case "minutes":
  				case "hours":
  				case "days":
  				case "weeks":
  				case "daysLeft":
  				  $this.find('span#'+event.type).html(event.value);
  				  if(finished) {
  				    $this.fadeTo(0, 1);
  				    finished = false;
  				  }
  					break;
  				case "finished":
            $this.fadeTo('slow', .5);
            finished = true;
  					break;
  			}
      }
      
  		$('div#bigCountdown').countdown(availiableExamples.other + currentDate.valueOf(), callback);
  		
  		$('select#exampleDate').change(function() {
  		  try {
    		  var $this = $(this),
    		      value;
  		    currentDate = new Date();
    		  switch($this.attr('value')) {
    		    case "other":
    		      value = prompt('Set the date to countdown:\nThe hh:mm:ss parameters are opitionals', 'YYYY/MM/DD hh:mm:ss');
    		      break;
    		    case "daysFromNow":
    		      value = prompt('How many days from now?', '');
    		      value = new Number(value) * 24 * 60 * 60 * 1000 + currentDate.valueOf();
    		      break;
    		    case "minutesFromNow":
    		      value = prompt('How many minutes from now?', '');
    		      value = new Number(value) * 60 * 1000 + currentDate.valueOf();
    		      break;
    		    default:
    		      value = availiableExamples[$this.attr('value')] + currentDate.valueOf();
    		  }
    		  $('div#bigCountdown').countdown(value, callback);
    		  $this.find('option:first').attr('selected', true);
    		} catch(e) { alert(e); }
  		});


});