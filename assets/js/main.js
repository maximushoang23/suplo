$('.banner-slider, .customer-slider').slick({
    infinite: true,
    slidesToShow: 1,
    centerMode: true,
    autoplay: false,
    autoplaySpeed: 2000,
    slidesToScroll: 1,
    swipeToSlide: true,
    cssEase: 'linear',
    centerPadding: 0,
    arrows: true,
    prevArrow: '<div class="slick-prev"><i class="las la-angle-left"></i></div>',
    nextArrow: '<div class="slick-next"><i class="las la-angle-right"></i></div>',
});
$('.category-slider, .license-slider, .feature-slider').slick({
    infinite: true,
    slidesToShow: 3,
    centerMode: true,
    autoplay: false,
    autoplaySpeed: 2000,
    slidesToScroll: 1,
    swipeToSlide: true,
    cssEase: 'linear',
    centerPadding: '0',
    arrows: true,
    prevArrow: '<div class="slick-prev"><i class="las la-angle-left"></i></div>',
    nextArrow: '<div class="slick-next"><i class="las la-angle-right"></i></div>',
    responsive: [
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 576,
            settings: {
                slidesToShow: 1,
                centerPadding: '12%',
            }
        },
        {
            breakpoint: 400,
            settings: {
                slidesToShow: 1,
                centerPadding: '0',
            }
        }
    ],
});
$(document).ready(function () {
    $('.icon-show-menu-mobile a').click(function (e) {
        e.preventDefault();
        $('.box-modal').removeClass('d-block')
        $('.box-modal').addClass('d-block')

    })
    $('.modal-overlay, .mobile-menu-title i').click(function () {
        $('.box-modal').removeClass('d-block')
    })
    $('#primary-menu .menu-item-has-children a').click(function (event) {
        event.preventDefault();
        $(this).find('li.menu-item-has-children').children('ul').addClass('d-block')
    })
})
$('.product-slider-main').slick({
    asNavFor: '.product-slider-gallery',
    infinite: true,
    slidesToShow: 1,
    centerMode: true,
    autoplay: false,
    autoplaySpeed: 2000,
    slidesToScroll: 1,
    swipeToSlide: true,
    cssEase: 'linear',
    centerPadding: 0,
    arrows: false,
    adaptiveHeight: false,
    prevArrow: '<div class="slick-prev"><i class="las la-angle-left"></i></div>',
    nextArrow: '<div class="slick-next"><i class="las la-angle-right"></i></div>',
});

$('.product-slider-gallery').slick({
    asNavFor: '.product-slider-main',
    infinite: true,
    slidesToShow: 3,
    centerMode: true,
    autoplay: false,
    autoplaySpeed: 2000,
    slidesToScroll: 1,
    swipeToSlide: true,
    cssEase: 'linear',
    centerPadding: 0,
    arrows: true,
    adaptiveHeight: false,
    prevArrow: '<div class="slick-prev"><i class="las la-angle-left"></i></div>',
    nextArrow: '<div class="slick-next"><i class="las la-angle-right"></i></div>',
});

lightbox.option({
    'resizeDuration': 200,
    'wrapAround': true,
    'showImageNumberLabel' : false,
    'alwaysShowNavOnTouchDevices' :true
})