// ドロップダウンリスト
$(function(){
    $('.dropdwn li').hover(function(){
        $("ul:not(:animated)", this).slideDown();
    }, function(){
        $("ul.dropdwn_menu",this).slideUp();
    });
});

// スライダー
$('.slider').slick({
    autoplay:true,
    autoplaySpeed:4000,
    dots: false,
    arrows: false,
   pauseOnFocus: false,
   pauseOnHover: false,
   pauseOnDotsHover: false
});
