/*!
* Blueprint Content Slider
*/
;(function ( $, window, document, undefined ) {

    // undefined is used here as the undefined global variable in ECMAScript 3 is
    // mutable (ie. it can be changed by someone else). undefined isn't really being
    // passed in so we can ensure the value of it is truly undefined. In ES5, undefined
    // can no longer be modified.

    // window and document are passed through as local variable rather than global
    // as this (slightly) quickens the resolution process and can be more efficiently
    // minified (especially when both are regularly referenced in your plugin).

    // Create the defaults once
    var defaults = {
        "animation": {
            "next" : {
                "entrance" : "classicFadeInRight",
                "exit" : "classicFadeOutLeft"
            },
            "prev" : {
                "entrance" : "classicFadeInLeft",
                "exit" : "classicFadeOutRight"
            }
        },
        "onBefore": $.noop,
        "onAfter": $.noop,
        "theme": "premiumpixels",
        "speed": "one-sec",
        "separated": false
    };

    var templates = {
        "classic":  '<div class="bp-content-slider-nav">'+
                        '<a href="#" class="bp-content-slider-nav-left"></a>'+
                        '<a href="#" class="bp-content-slider-nav-right"></a>'+
                    '</div>',
        "lightweight": '<div class="bp-content-slider-nav">'+
                        '<a href="#" class="bp-content-slider-nav-left">← Prev</a>'+
                        '<a href="#" class="bp-content-slider-nav-right">Next →</a>'+
                    '</div>',
        "premiumpixels":  '<div class="bp-content-slider-nav">'+
                        '<a href="#" class="bp-content-slider-nav-left"></a>'+
                        '<a href="#" class="bp-content-slider-nav-right"></a>'+
                    '</div>',
        "woody": ''

    }

    // The actual plugin constructor
    function BpSlider( element, options ) {
        var self = this;

        self.element = $(element);

        self.options = $.extend( {}, defaults, options );

        self.templates = templates;

        self.init();

        return {
            next : $.proxy(self.next, self),
            prev : $.proxy(self.prev, self),
            goTo : function(index){
                return $.proxy(self.prev, self, index);
            },
            destroy : $.proxy(self.destroy, self)
        };
    }

    BpSlider.prototype = {

        init: function() {
            var self = this;
            self.current = 0;

            self.element    .addClass('bp-content-slider')
                            .wrap('<div class="bp-content-slider-wrapper bp-content-slider-wrapper-'+self.options.theme+'">')
                            .on({
                                    swipeleft : self.next,
                                    swiperight : self.prev
                                })
                            .find('li')
                            .each(function(index, value){
                                $(value).data('originalClasses', $(value).get(0).className);
                            });

            self.createNav();
            self.createBullets();
            self.createIFrames();
            self.createImages();
            self.goTo(0);

        },
        createIFrames : function(){
            var self = this;
            self.element    .find('.bp-content-slider-iframe')
                            .each(function(index, value){
                                var $t = $(value);
                                $t.append('<iframe src="'+$t.attr('rel')+'" width="500" height="281" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>');
                            });
        },
        createImages : function(){
            var self = this;
            self.element    .find('.bp-content-slider-image')
                            .each(function(index, value){
                                var $t = $(value);
                                $t.css('backgroundImage', "url("+$t.attr('rel')+")");
                            });
        },
        createNav : function(){
            var self = this;
            var $wrapper = self.element.parent();
            self.$nav = $(self.renderTemplate(self.templates[self.options.theme], {})).appendTo($wrapper);
            self.$nav.find('.bp-content-slider-nav-left').on('click', function(e){
                self.prev();
                e.preventDefault();
            });
            self.$nav.find('.bp-content-slider-nav-right').on('click', function(e){
                self.next();
                e.preventDefault();
            });
        },
        createBullets : function(){
            var self = this;
            var $wrapper = self.element.parent();
            self.$bullets = $('<ul/>', {
                "class" : "bp-content-slider-bullets"
            }).appendTo($wrapper);
            for(i=0;i<self.element.find('.bp-content-slider-item').length;i++){
                self.$bullets.append('<li class="bp-content-slider-bullet"><a href="#">'+i+'</a></li>');
            }
            self.$bullets.find('.bp-content-slider-bullet a').on('click', function(e){
                var $t = $(this);
                self.goTo($('.bp-content-slider-bullet a').index($t));
                e.preventDefault();
            });
        },
        next : function(){
            var self = this;
            self.goTo(self.current + 1);
        },
        prev : function(){
            var self = this;
            self.goTo(self.current - 1);
        },
        goTo : function(index){
            var self = this;
            var length = self.element.find('li').length;

            if(index + 1 > length)
                index = 0;
            else if(index < 0)
                index = length - 1;

            $('.bp-content-slider-bullet.bp-content-slider-bullet-active').removeClass('bp-content-slider-bullet-active');
            $('.bp-content-slider-bullet').eq(index).addClass('bp-content-slider-bullet-active');

            if(index == self.current)
                return false;
            
            self.options.onBefore(self.current, index);

            var direction = (self.current > index) ? "prev" : "next";

            if(self.options.separated)
                self.hideElement(direction, function(){
                    self.current = index;
                    self.showElement(direction);
                });
            else{
                self.hideElement(direction, $.noop);
                self.current = index;
                self.showElement(direction);
            }
        },
        showElement: function(direction){
            var self= this;
            var elm = self.element  .find('li').eq( self.current );
            var anim = elm.data("bpEntranceAnimation") ? elm.data("bpEntranceAnimation") : self.options.animation[direction].entrance;
            var speed = self.options.speed;
            elm .css('opacity', '1')
                .addClass("animated " + anim + " " + speed)
                .off("animationend webkitAnimationEnd MSAnimationEnd oAnimationEnd")
                .on("animationend webkitAnimationEnd MSAnimationEnd oAnimationEnd", function(){
                    $(this).css('zIndex', '2').get(0).className = $(this).data('originalClasses');
                    self.options.onAfter(self.current);
                });
        },
        hideElement: function(direction, cb){
            var self= this;
            var elm = self.element  .find('li').eq( self.current );
            var anim = elm.data("bpExitAnimation") ? elm.data("bpExitAnimation") : self.options.animation[direction].exit;
            var speed = self.options.speed;
            elm .addClass("animated " + anim + " " + speed)
                .off("animationend webkitAnimationEnd MSAnimationEnd oAnimationEnd")
                .on("animationend webkitAnimationEnd MSAnimationEnd oAnimationEnd", function(){
                    $(this).css('zIndex', '1').css('opacity', '0').get(0).className = $(this).data('originalClasses');
                    cb();
                });
        },
        renderTemplate: function(template, json){

            var flag_array = template.match(/{{(.*?)}}/g);
            var filled_template = template;

            if(flag_array)
                $.each(flag_array, function(index, value){
                    var value_pure = value.replace('{{', '').replace('}}', '');
                    filled_template = filled_template.replace(value, json[value_pure]);
                });

            return filled_template;
        },
        destroy: function(){
            var self = this;
            var $wrapper = self.element.parent();
            $wrapper.find('.bp-content-slider-nav').remove();
            $wrapper.find('.bp-content-slider-bullets').remove();
            self.element
                .unwrap()
                .removeClass('bp-content-slider')
                .off("swiperight swipeleft")
                .find('li')
                .off("animationend webkitAnimationEnd MSAnimationEnd oAnimationEnd")
                .each(function(index, value){
                    $(value).css('opacity', '');
                    if($(value).hasClass('bp-content-slider-iframe'))
                        $(value).empty();
                    if($(value).hasClass('bp-content-slider-image'))
                        $(value).css('backgroundImage', 'none');
                });
            $wrapper.remove();
            $.removeData(self.element.get(0), "bpSlider");
        }
    };

    // A really lightweight plugin wrapper around the constructor,
    // preventing against multiple instantiations
    $.fn["bpSlider"] = function ( options ) {
        return this.each(function () {
            $.data(this, "bpSlider", new BpSlider( this, options ));
        });
    };

})( jQuery, window, document );
