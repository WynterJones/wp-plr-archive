/**
 * @package jSocial	
 * @author Sitebase
 * @version 2.0.0
 * @license http://codecanyon.net/wiki/support/legal-terms/licensing-terms/
 * @copyright Copyright (c) 2008-2011 Sitebase (http://www.sitebase.be)
 */
(function($){
	$.fn.jsocial = function(custom) {
		var defaults = {
		  	highlight: true,
			buttons: "digg,stumbleupon,delicious,facebook,yahoo",
			blanktarget: true,
			shorturl_enable: false,
			icon_format: '../wp-content/plugins/affiliatepressx/inc/lp/assets/images/%s.gif',
			icon_hover_format: null
		  };
		var settings 		= $.extend({}, defaults, custom);
		var jsocial 		= this;
		var shorturl		= "";

		// Init with maybe delay for shortcode
		if(settings.shorturl_enable) {
			$.getJSON('http://json-tinyurl.appspot.com/?url=' + encodeURIComponent(jsocial_url()) + '&callback=?', function(data){
			   	shorturl = data.tinyurl;
				init();
			});
		} else {
			init();
		}
		
		function init() {
			
		// Set target attribute
		var target = settings.blanktarget ? 'target="_blank"' : '';
		
		// Write social icons to browser
		var buttons = settings.buttons.split(",");
		jsocial = jsocial.append('<ul class="jsocial"></ul>').find('ul');
		for ( key in buttons ) {
			var name = buttons[key];
			if(name.indexOf('_') == -1) {
				var url = jformat[buttons[key]];
				if(url != undefined){
					url = replace_vars(url, true);
					var sociallink = '<li class="jsocial_button"><a ' + target + ' href="' + url + '" title="' + name + '"><img border="0" src="' + settings.icon_format.replace('%s', name) + '" alt="' + name + '" /></a></li>';
					jsocial.append(sociallink);
				}
			} else {
				var parts = name.split('_');
				var format = jformat[parts[0] + '_*'];
				jsocial.append('<li class="jsocial_button">' + format.html + '</li>');
				var el = $(format.attr_target)
				
				if(format.hasOwnProperty('append')) {
					format.append.appendTo(el);
				}
				
				if(format.attr_target_first_child) {
					el = el.children(1);
				}
				el.attr(format.position_attr, format.positions[parts[1]]).attr(format.share_attr, replace_vars(format.share, false));
				if(format.script_function) {
					format.script.apply(this, format.arguments);
				} else {
					$.getScript(format.script);
				}
			}
			
		}
				
		// If highlight bind mousehover and mouseout
		var do_path_change_hover = (settings.icon_format != settings.icon_hover_format && settings.icon_hover_format != null);
		if(settings.highlight || do_path_change_hover){
			// Trigger focus animation
			jsocial.find(".jsocial_button").mouseover(function(){
				if(settings.highlight) $(this).siblings().stop().animate({"opacity": 0.2}, 500);
				if(do_path_change_hover) $(this).find('img').attr('src', settings.icon_hover_format.replace('%s', $(this).children(1).attr('title')));
			});
			jsocial.find(".jsocial_button").mouseout(function(){
				$(this).siblings().stop().animate({"opacity": 1}, 500);
				if(do_path_change_hover) $(this).find('img').attr('src', settings.icon_format.replace('%s', $(this).children(1).attr('title')));
			});
		}
		
		} // end init
		
		// Meta keywords
		var jsocial_keywords;
		function jsocial_metakeywords() { 
			if(jsocial_description == undefined){
				metaCollection = document.getElementsByTagName('meta'); 
				for (i=0;i<metaCollection.length;i++) { 
					nameAttribute = metaCollection[i].name.search(/keywords/);
					if (nameAttribute!= -1) { 
						jsocial_keywords = metaCollection[i].content;
						return jsocial_keywords; 
					} 
				} 
			}else{
				return jsocial_keywords;
			}
		} 
		
		// Meta description
		var jsocial_description;
		function jsocial_metadescription() { 
			if(jsocial_description == undefined){
				metaCollection = document.getElementsByTagName('meta'); 
				for (i=0;i<metaCollection.length;i++) { 
					nameAttribute = metaCollection[i].name.search(/description/);
					if (nameAttribute!= -1) { 
						jsocial_description = metaCollection[i].content;
						return jsocial_description; 
					} 
				} 
			}else{
				return jsocial_description;
			}
		} 
		
		// Title
		function jsocial_title(){
			return document.title;
		}
		
		// Url
		function jsocial_url(){
			var temp = document.location.href;
			return temp;
		}
		
		// Short url
		function jsocial_short_url(){
			if(shorturl == "") {
				return jsocial_url();
			}
			return shorturl;
		}
		
		// Replace vars with corresponding value
		function replace_vars(string, encode) {
			if(encode) {
				string = string.replace("{TITLE}"			, urlencode(jsocial_title()));
				string = string.replace("{URL}"				, urlencode(jsocial_url()));
				string = string.replace("{SHORTURL}"		, urlencode(jsocial_short_url()));
				string = string.replace("{KEYWORDS}"		, urlencode(jsocial_metakeywords()));
				string = string.replace("{DESCRIPTION}"		, urlencode(jsocial_metadescription()));
			} else {
				string = string.replace("{TITLE}"			, jsocial_title());
				string = string.replace("{URL}"				, jsocial_url());
				string = string.replace("{SHORTURL}"		, jsocial_short_url());
				string = string.replace("{KEYWORDS}"		, jsocial_metakeywords());
				string = string.replace("{DESCRIPTION}"		, jsocial_metadescription());
			}
			return string;
		}
		
		// Encode url
		function urlencode(string) {
			if(string == undefined){
				return "";
			}
			return string.replace(/\s/g, '%20').replace('+', '%2B').replace('/%20/g', '+').replace('*', '%2A').replace('/', '%2F').replace('@', '%40').replace('&', '%26');
		}
		
		function highlight(element, state){
			
			if(state){
				element.style.opacity = 1;
				element.childNodes[0].style.filter = "progid:DXImageTransform.Microsoft.Alpha(opacity=100);";
			}else{
				element.style.opacity = highlight_opacity/100;
				element.style.filter = "alpha(opacity=20)";
				element.childNodes[0].style.filter = "progid:DXImageTransform.Microsoft.Alpha(opacity=" + highlight_opacity + ");";
			}
		}

		// returns the jQuery object to allow for chainability.
		return this;
	}
	
})(jQuery);

// Format list
var jformat				= Array();
jformat['nujij']	 	= "http://nujij.nl/jij.lynkx?t={TITLE}&u={URL}&b={DESCRIPTION}"
jformat['ekudos'] 		= "http://www.ekudos.nl/artikel/nieuw?url={URL}&title={TITLE}&desc={DESCRIPTION}";
jformat['digg'] 		= "http://digg.com/submit?phase=2&url={URL}&title={TITLE}";
jformat['linkedin'] 	= "http://www.linkedin.com/shareArticle?mini=true&url={URL}&title={TITLE}&summary={DESCRIPTION}&source=";
jformat['sphere'] 		= "http://www.sphere.com/search?q=sphereit:{URL}";
jformat['technorati'] 	= "http://www.technorati.com/faves?add={URL}";
jformat['delicious'] 	= "http://del.icio.us/post?url={URL}&title={TITLE}";
jformat['furl'] 		= "http://furl.net/storeIt.jsp?u={URL}&t={TITLE}";
jformat['netscape'] 	= "http://www.netscape.com/submit/?U={URL}&T={TITLE}";
jformat['yahoo'] 		= "http://myweb2.search.yahoo.com/myresults/bookmarklet?u={URL}&t={TITLE}";
jformat['google'] 		= "http://www.google.com/bookmarks/mark?op=edit&bkmk={URL}&title={TITLE}";
jformat['newsvine'] 	= "http://www.newsvine.com/_wine/save?u={URL}&h={TITLE}";
jformat['reddit'] 		= "http://reddit.com/submit?url={URL}&title={TITLE}";
jformat['blogmarks'] 	= "http://blogmarks.net/my/new.php?mini=1&url={URL}&title={TITLE}";
jformat['magnolia'] 	= "http://ma.gnolia.com/bookmarklet/add?url={URL}&title={TITLE}";
jformat['live']		 	= "https://favorites.live.com/quickadd.aspx?marklet=1&mkt=en-us&url={URL}&title={TITLE}&top=1";
jformat['tailrank'] 	= "http://tailrank.com/share/?link_href={URL}&title={TITLE}";
jformat['facebook'] 	= "http://www.facebook.com/share.php?u={URL}";
jformat['twitter'] 		= "http://twitter.com/?status={TITLE}%20-%20{SHORTURL}";
jformat['stumbleupon'] 	= "http://www.stumbleupon.com/submit?url={URL}&title={TITLE}";
jformat['bligg'] 		= "http://www.bligg.nl/submit.php?url={URL}";
jformat['symbaloo'] 	= "http://www.symbaloo.com/en/add/url={URL}&title={TITLE}";
jformat['misterwong']   = "http://www.mister-wong.com/add_url/?bm_url={URL}&bm_title={TITLE}&bm_comment=&bm_tags={KEYWORDS}";
jformat['buzz']			= "http://www.google.com/reader/link?url={URL}&title={TITLE}&snippet={DESCRIPTION}&srcURL={URL}&srcTitle={TITLE}";
jformat['myspace']		= "http://www.myspace.com/Modules/PostTo/Pages/?u={URL}";
jformat['mail']			= "mailto:to@email.com?SUBJECT={TITLE}&BODY={DESCRIPTION}-{URL}";
jformat['twitter_*'] = {
	html: '<a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>',
	attr_target: '.twitter-share-button',
	attr_target_first_child: false,
	positions: {vertical: 'vertical', horizontal: 'horizontal', none: 'none'},
	position_attr: 'data-count',
	share: '{TITLE}',
	share_attr: 'data-text',
	script: 'http://platform.twitter.com/widgets.js',
	script_function: false
};
jformat['facebook_*'] = {
	html: '<div id="fb-root"></div><div class="fb-like" data-send="false" data-width="50" data-show-faces="false"></div>',
	attr_target: '.fb-like',
	attr_target_first_child: false,
	positions: {vertical: 'box_count', horizontal: 'button_count'},
	position_attr: 'data-layout',
	share: '{URL}',
	share_attr: 'data-href',
	script: function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) {return;}
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	},
	script_function: true,
	arguments: [document, 'script', 'facebook-jssdk']
};
jformat['googleplus_*'] = {
	html: '<span class="gplusone"><g:plusone></g:plusone></span>',
	attr_target: '.gplusone',
	attr_target_first_child: true,
	positions: {vertical: 'tall', horizontal: '', horizontalsmall: 'small', horizontalmedium: 'medium'},
	position_attr: 'size',
	share: '',
	share_attr: 'data-text',
	script: 'https://apis.google.com/js/plusone.js',
	script_function: false
};
jformat['linkedin_*'] = {
	html: '<span class="linkedinscript"></span>',
	attr_target: '.linkedinscript',
	attr_target_first_child: true,
	positions: {vertical: 'top', horizontal: 'right', none: 'none'},
	position_attr: 'data-counter',
	append: jQuery('<script/>').attr('type', 'IN/Share'),
	share: '{URL}',
	share_attr: 'data-url',
	script: 'http://platform.linkedin.com/in.js',
	script_function: false
};