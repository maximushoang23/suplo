$('.ultimate-slider').slick({
    infinite: true,
    slidesToShow: 5,
    centerMode: true,
    autoplay: false,
    autoplaySpeed: 2000,
    slidesToScroll: 3,
    swipeToSlide: true,
    cssEase: 'linear',
    responsive: [
        {
            breakpoint: 1200,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 960,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                centerPadding: '25%',
                centerMode: true,
            }
        },
        {
            breakpoint: 576,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                centerMode: false,
            }
        }
    ],
    centerPadding: 0,
    dots: true,
    appendArrows: $('.block-3 .slick-slider-nav'),
    appendDots: $('.block-3 .slick-slider-dots'),
    customPaging : function(slider, i) {
        var thumb = $(slider.$slides[i]).data();
        return '<a class="dot">'+(i+1)+'</a>';
    },
    arrows: true,
    prevArrow: '<div class="slick-prev"><i class="las la-angle-left"></i></div>',
    nextArrow: '<div class="slick-next"><i class="las la-angle-right"></i></div>',
});
$('.compatibe-slider').slick({
    infinite: true,
    slidesToShow: 5,
    centerMode: true,
    autoplay: false,
    autoplaySpeed: 2000,
    slidesToScroll: 2,
    responsive: [
        {
            breakpoint: 1200,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 960,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                centerPadding: '25%',
                centerMode: true,
            }
        },
        {
            breakpoint: 576,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                centerMode: false,
            }
        }
    ],
    centerPadding: 0,
    dots: true,
    appendArrows: $('.block-7 .slick-slider-nav'),
    appendDots: $('.block-7 .slick-slider-dots'),
    arrows: false,
    prevArrow: '<div class="slick-prev"><i class="las la-angle-left"></i></div>',
    nextArrow: '<div class="slick-next"><i class="las la-angle-right"></i></div>',
});
$('.unlimited-slider').slick({
    infinite: true,
    slidesToShow: 2,
    centerMode: true,
    autoplay: false,
    autoplaySpeed: 2000,
    slidesToScroll: 2,
    responsive: [
        {
            breakpoint: 1200,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 960,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                centerPadding: '25%',
                centerMode: true,
            }
        },
        {
            breakpoint: 576,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                centerMode: false,
            }
        }
    ],
    centerPadding: '15%',
    dots: true,
    appendArrows: $('.block-8 .slick-slider-nav'),
    appendDots: $('.block-8 .slick-slider-dots'),
    customPaging : function(slider, i) {
        return '<a class="dot">'+(i+1)+'</a>';
    },
    arrows: true,
    prevArrow: '<div class="slick-prev"><i class="las la-angle-left"></i></div>',
    nextArrow: '<div class="slick-next"><i class="las la-angle-right"></i></div>',

    asNavFor: '.block-nav',
});
// $('.block-nav .slick-slide').eq(0).addClass('slick-active');
$('.block-nav').on('init', function(event, slick) {
    $(this).find('.slick-slide.slick-current').addClass('is-active');
})
    .slick({
    slidesToShow: 5,
    slidesToScroll: 2,
    autoplay: false,
    autoplaySpeed: 2000,
    asNavFor: '.unlimited-slider',

    centerPadding: 0,
    dots: true,
    arrows: false,
    focusOnSelect: true,
});
$('.block-nav').on('click', '.slick-slide', function (e) {
    var $currTarget = $(e.currentTarget),
        index = $currTarget.data('slick-index'),
        slickObj = $('.ultimate-slider').slick('getSlick');

    slickObj.slickGoTo(index);

});


$(document).ready(function () {
    // Animate scroll element right to left
    function reveal_left() {
        var reveal_lefts = document.querySelectorAll(".reveal_left");

        for (var i = 0; i < reveal_lefts.length; i++) {
            var windowHeight = window.innerHeight;
            var elementTop = reveal_lefts[i].getBoundingClientRect().top;
            var elementVisible = 150;

            if (elementTop < windowHeight - elementVisible) {
                reveal_lefts[i].classList.add("active-left");
            } else {
                // reveal_lefts[i].classList.remove("active-left");
            }
        }
    }
    window.addEventListener("scroll", reveal_left);

    // Animate scroll element left to right
    function reveal_right() {
        var reveal_rights = document.querySelectorAll(".reveal_right");

        for (var i = 0; i < reveal_rights.length; i++) {
            var windowHeight = window.innerHeight;
            var elementTop = reveal_rights[i].getBoundingClientRect().top;
            var elementVisible = 150;

            if (elementTop < windowHeight - elementVisible) {
                reveal_rights[i].classList.add("active-right");
            } else {
                // reveal_rights[i].classList.remove("active-right");
            }
        }
    }
    window.addEventListener("scroll", reveal_right);

    // Animate scroll element bottom to top
    function reveal_top() {
        var reveal_tops = document.querySelectorAll(".reveal_top");

        for (var i = 0; i < reveal_tops.length; i++) {
            var windowHeight = window.innerHeight;
            var elementTop = reveal_tops[i].getBoundingClientRect().top;
            var elementVisible = 150;

            if (elementTop < windowHeight - elementVisible) {
                reveal_tops[i].classList.add("active-top");
            } else {
                // reveal_tops[i].classList.remove("active-top");
            }
        }
    }
    window.addEventListener("scroll", reveal_top);

    // Scroll Top when click button top
    $("html", "body").on('scrollTop', function(){
        $('.btn-scroll-top').addClass('text-top');
    });

    var $element = $('.btn-scroll-top');
    $element.on('click', function(e) {
        e.preventDefault();
        $('html,body').animate({scrollTop: '0px'}, 300, 'swing');
        return false;
    });

//    Scroll to element
    $('.block-1 .drop-down-template').click(function (event) {
        event.preventDefault();
        $('html, body').animate({ scrollTop: ($('.block-4').offset().top)},200);

    });

});




