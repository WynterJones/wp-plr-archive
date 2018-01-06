$(document).ready(function() {
    function getRandom() {
    	return Math.floor(Math.random() * 10) + 1;
    }
    $('head').append( $('<link rel="stylesheet" type="text/css" />').attr('href', 'framework/bg/bg'+getRandom()+'.css') );
    $('head').append( $('<link rel="stylesheet" type="text/css" />').attr('href', 'framework/container/container'+getRandom()+'.css') );
    $('head').append( $('<link rel="stylesheet" type="text/css" />').attr('href', 'framework/header/header'+getRandom()+'.css') );
    $('head').append( $('<link rel="stylesheet" type="text/css" />').attr('href', 'framework/lists/lists'+getRandom()+'.css') );
    $('head').append( $('<link rel="stylesheet" type="text/css" />').attr('href', 'framework/box/box'+getRandom()+'.css') );
});