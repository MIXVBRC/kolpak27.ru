$(document).ready(function(){

    $('.search__mobile, .search__close, .search__button').on('click', function() {
        $('.search').toggleClass('show');
    });

    $(window).on('resize', function(){
        if ($(this).outerWidth() > 767) {
            $('.search').removeClass('show');
        }
    });


    $('.burger, .menu-top__close, .menu-top__link').on('click', function() {
        $('.menu-top').toggleClass('show');
    });

    $(window).on('resize', function(){
        if ($(this).outerWidth() > 767) {
            $('.menu-top').removeClass('show');
        }
    });

    

});

