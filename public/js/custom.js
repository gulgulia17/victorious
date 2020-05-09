var supportedFlag = $.keyframe.isSupported();
if($('#news').children().length<=5){
    console.log('Less Then 5');
}else{
    var heightNewsLi = $("#news li").innerHeight();
    var news = $("#news");
    var notification_block_child = news.parent();
    var element = [];
    var limit;

    notification_block_child.css({
        'position':'relative',
        'max-height':heightNewsLi*5,'float':'left',
        'width':'100%',
        'height':heightNewsLi*5,'overflow':'hidden',
        });
    
        news.css({
        'position':'absolute',
        'top':'0',
    });
    $.keyframe.define([{
        name: 'Newsscroll',
        '100%': { top: -heightNewsLi*$('#news').children().length+"px",left:0}  
    }]);
    $('#news').playKeyframe(
        'Newsscroll 15s linear infinite',
    );
    $('#news').hover(function () {
        $('#news').pauseKeyframe();                
        }, function () {
            $('#news').playKeyframe(
            'Newsscroll 15s linear infinite',
            );
        }
    );
}

if($('#event').children().length<=5){
    console.log('Less Then 5');
}else{
    var heightEventLi = $("#event li").innerHeight();
    var event = $("#event");
    var notification_block_child = event.parent();
    var element = [];
    var limit;

    notification_block_child.css({
        'position':'relative',
        'max-height':heightEventLi*5,'float':'left',
        'width':'100%',
        'height':heightEventLi*5,'overflow':'hidden',
        });
    
        event.css({
        'position':'absolute',
        'top':'0',
    });
    $.keyframe.define([{
        name: 'eventscroll',
        '100%': { top: -heightEventLi*$('#event').children().length+"px",left:0}  
    }]);
    $('#event').playKeyframe(
        'eventscroll 15s linear infinite',
    );
    $('#event').hover(function () {
        $('#event').pauseKeyframe();                
        }, function () {
            $('#event').playKeyframe(
            'eventscroll 15s linear infinite',
            );
        }
    );
}


if($(".height").parent().children().length<=5){
    console.log('Less Then 5');
}else{
    var heightGalleryLi = $(".height").innerHeight();
    var gallery = $(".height").parent();
    var notification_block_child = gallery.parent();
    var element = [];
    var limit;

    notification_block_child.css({
        'position':'relative',
        'max-height':heightGalleryLi*3,'float':'left',
        'width':'100%',
        'height':heightGalleryLi*3,'overflow':'hidden',
        });
    
    gallery.css({
        'position':'absolute',
        'top':'0',
    });
    $.keyframe.define([{
        name: 'Galleryscroll',
        '100%': { top: -heightGalleryLi*$(".height").parent().children().length+"px",left:0}  
    }]);
    $('.gallery').playKeyframe(
        'Galleryscroll 25s linear infinite',
    );
    $('.gallery').hover(function () {
        $('.gallery').pauseKeyframe();                
        }, function () {
            $('.gallery').playKeyframe(
            'Galleryscroll 25s linear infinite',
            );
        }
    );
}
