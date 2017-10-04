$(window).scroll(function(e) {
    var scroller_anchor = $(".scroller_anchor").offset().top;
    if ($(this).scrollTop() >= scroller_anchor && $('.scroller').css('position') != 'fixed') 
    {   
        $('.scroller').css({
            'position': 'fixed',
            'top': '40px',
            'z-index':'9999',
            'width':'1005px',
            '-moz-box-shadow': '0px 3px 8px #888',
            '-webkit-box-shadow': '0px 3px 8px #888',
            'box-shadow': '0px 3px 8px #888'
        });
        $('.scroller_anchor').css('height', '50px');
    } 
    else if ($(this).scrollTop() < scroller_anchor && $('.scroller').css('position') != 'relative') 
    {    
        $('.scroller_anchor').css('height', '0px');
        $('.scroller').css({
            'position': 'relative',
            'top': '0px'
        });
    }
});