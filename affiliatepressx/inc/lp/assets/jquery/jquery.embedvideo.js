$.fn.embedVideo = function(videoUrl, options){
    return $(this).each(function(){
        var intOptions = {
            success: function(){},
            preview: false
        };
        $.extend(intOptions, options);
        var callback = intOptions.success;
        var $that = $(this);
        var m, embed, id;
        var img, imgUrl;
        var width = $that.width();
        var height = $that.height();
        if ((m = videoUrl.match(/.*youtu.+vi?[\/|=]([^&]+)/i)) ||
            (m = videoUrl.match(/.*youtu\.be\/([^&]+)/i))){
            id = m[1];
            var iframe = function(play){
                embed = '<iframe src="http://www.youtube.com/embed/:id?autoplay=:autoplay" width=":width" height=":height" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowfullscreen></iframe>';
                embed = embed.replace(':autoplay', play === true ? '1' : '0');
                embed = embed.replace(':id', id);
                embed = embed.replace(':width', width);
                embed = embed.replace(':height', height);
                var $embed = $(embed);
                $embed.load(callback);
                $that.html($embed);
            }
            var thumb = function(){
                imgUrl = 'http://img.youtube.com/vi/:id/0.jpg';
                img = 'url(:imgurl)';
                imgUrl = imgUrl.replace(':id', id);
                img = img.replace(':imgurl', imgUrl);
                $that.css({
                    'background-image': img,
                    'background-color': '#000000',
                    'background-repeat': 'no-repeat',
                    'background-size': 'cover',
                    'background-position': 'center',
                    'filter:': 'progid:DXImageTransform.Microsoft.AlphaImageLoader(src="'+imgUrl+'",sizingMethod="scale");',
                    '-ms-filter:': '"progid:DXImageTransform.Microsoft.AlphaImageLoader(src="'+imgUrl+'",sizingMethod="scale")";'
                });
                $that.click(function(){
                    iframe(true);
                });
            }
            if (intOptions.preview)
                thumb();
            else
                iframe(false);
        } else if (
            m = videoUrl.match(/.*vimeo[^0-9]+([0-9]+)/i)){
            id = m[1];
            var iframe = function(play){
                embed = '<iframe src="http://player.vimeo.com/video/:id?autoplay=:autoplay" width=":width" height=":height" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowfullscreen></iframe>';
                embed = embed.replace(':autoplay', play === true ? '1' : '0');
                embed = embed.replace(':id', id);
                embed = embed.replace(':width', width);
                embed = embed.replace(':height', height);
                var $embed = $(embed);
                $embed.load(callback);
                $that.html($embed);
            }
            var thumb = function(){
                var vimeoImgApi = 'http://vimeo.com/api/v2/video/:id.json?callback=?';
                vimeoImgApi = vimeoImgApi.replace(':id', id);
                $.getJSON(vimeoImgApi, function(vimeoD){
                    img = 'url(:url)';
                    img = img.replace(':url', vimeoD[0]['thumbnail_large']);
                    $that.css({
                        'background-image': img,
                        'background-color': '#000000',
                        'background-repeat': 'no-repeat',
                        'background-size': 'cover',
                        'background-position': 'center',
                        'filter:': 'progid:DXImageTransform.Microsoft.AlphaImageLoader(src="'+vimeoD[0]['thumbnail_large']+'",sizingMethod="scale");',
                        '-ms-filter:': '"progid:DXImageTransform.Microsoft.AlphaImageLoader(src="'+vimeoD[0]['thumbnail_large']+'",sizingMethod="scale")";'
                    });
                });
                $that.click(function(){
                    iframe(true);
                });
            }
            if (intOptions.preview)
                thumb();
          

            else
                iframe(false);
        } else if (
            m = videoUrl.match(/.*dailymotion.+video\/([^_]+)/i)){
            id = m[1];
            var iframe = function(play){
                embed = '<iframe src="http://www.dailymotion.com/embed/video/:id?autoplay=:autoplay" width=":width" height=":height" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowfullscreen></iframe>';
                embed = embed.replace(':autoplay', play === true ? '1' : '0');
                embed = embed.replace(':id', id);
                embed = embed.replace(':width', width);
                embed = embed.replace(':height', height);
                var $embed = $(embed);
                $embed.load(callback);
                $that.html($embed);
            }
            var thumb = function(){
                imgUrl = 'http://www.dailymotion.com/thumbnail/video/:id';
                img = 'url(:imgurl)';
                imgUrl = imgUrl.replace(':id', id);
                img = img.replace(':imgurl', imgUrl);
                $that.css({
                    'background-image': img,
                    'background-color': '#000000',
                    'background-repeat': 'no-repeat',
                    'background-size': 'cover',
                    'background-position': 'center',
                    'filter:': 'progid:DXImageTransform.Microsoft.AlphaImageLoader(src="'+imgUrl+'",sizingMethod="scale");',
                    '-ms-filter:': '"progid:DXImageTransform.Microsoft.AlphaImageLoader(src="'+imgUrl+'",sizingMethod="scale")";'
                });
                $that.click(function(){
                    iframe(true);
                });
            }
            if (intOptions.preview)
                thumb();
            else
                iframe(false);
        }
    });
};