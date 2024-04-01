// JavaScript Document

/*****Menuボタン*****/
$(function(){
  $('.menu_trigger').on('click', function() {
    $(this).toggleClass('active');
    $(".header_nav").fadeToggle(200);
    return false;
  });
});

/*****ふわっと表示（2種類）*****/
$(function(){
    $(window).scroll(function (){
        $('.fadein').each(function(){
            var targetElement = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > targetElement - windowHeight + 200){
                $(this).css('opacity','1');
                $(this).css('transform','translateY(0)');
            }
        });
    });
});

$(function(){
    $(window).scroll(function (){
        $('.fadein_x').each(function(){
            var targetElement = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > targetElement - windowHeight + 200){
                $(this).css('opacity','1');
                $(this).css('transform','translateX(0)');
            }
        });
    });
});

/*****MainVisualパララックス*****/
var rellax = new Rellax('.rellax');


/*****ページ途中リンク時のヘッダー分のずれ調整*****/
var headerHeight = $('.header').outerHeight(); // ヘッダーについているクラス名
var urlHash = location.hash;
if(urlHash) {
    $('body,html').stop().scrollTop(0);
    setTimeout(function(){
        var target = $(urlHash);
        var position = target.offset().top - headerHeight;
        $('body,html').stop().animate({scrollTop:position}, 600); // スクロールの速さ
    }, 100);
}
$('a[href^="#"]').click(function() {
    var href= $(this).attr("href");
    var target = $(href);
    var position = target.offset().top - headerHeight;
    $('body,html').stop().animate({scrollTop:position}, 600); // スクロールの速さ
});

