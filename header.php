<!doctype html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?> ">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="<?= esc_url( home_url( '/' ) ) ?>" hreflang="vi-vn" />
    <meta id="directory_uri" content="<?= get_template_directory_uri(); ?>" />
    <title><?= bloginfo('name') ?></title>

    <?php wp_head() ?>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

<?php
    $header_option = get_field('header_option', 'option');
    $social_option = get_field('social_option_link', 'option');
?>
<header id="header">
    <div class="thim-desktop" data-clear="medium--hide small--hide">
        <div class="thim-header-top">
            <div class="wrapper-container">
                <div class="inner">
                    <div class="box-social">
                        <a href="<?= $social_option['link_facebook'] ?>">
                            <i class="lab la-facebook-f"></i>
                        </a>
                        <a href="<?= $social_option['link_twitter'] ?>">
                            <i class="lab la-twitter"></i>
                        </a>
                        <a href="<?= $social_option['link_google_plus'] ?>">
                            <i class="lab la-google-plus-g"></i>
                        </a>
                        <a href="<?= $social_option['link_youtube'] ?>">
                            <i class="lab la-youtube"></i>
                        </a>
                        <a href="<?= $social_option['link_instagram'] ?>">
                            <i class="lab la-instagram"></i>
                        </a>
                    </div>

                    <div class="box-logo">
                        <a href="<?= bloginfo("url"); ?>">
                            <img src="<?= $header_option['logo'] ?>" alt="">
                        </a>
                    </div>

                    <div class="box-contact-shop">
                        <div class="contect-tel">
                            <i class="las la-phone"></i>
                            <a href="tel:<?= $header_option['contact_phone_number'] ?>"><?= $header_option['contact_phone_number'] ?></a>
                        </div>
                        <div class="contact-email">
                            <i class="las la-envelope"></i>
                            <a href="mailto:<?= $header_option['contact_email'] ?>"><?= $header_option['contact_email'] ?></a>
                        </div>
                    </div>

                    <div class="icon-show-menu-mobile">
                        <a href="">
                                <span>
                                    Menu
                                </span>
                            <i class="las la-bars"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="thim-header-bottom nav-bar">
            <div class="wrapper-container">
                <div class="inner">
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'menu_class' => 'menu-desktop navbar-main-menu',
                        'menu_id' => 'primary-menu'
                    ) );
                    ?>
<!--                    <ul id="primary-menu" class="navbar-main-menu">-->
<!--                        <li class="menu-item menu-item-type-custom current-menu-item">-->
<!--                            <a href="">-->
<!--                                Trang chủ-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li class="menu-item menu-item-type-custom menu-item-has-children">-->
<!--                            <a href="">-->
<!--                                Sản phẩm-->
<!--                            </a>-->
<!--                            <ul class="sub-menu">-->
<!--                                <li class="menu-item menu-item-type-custom menu-item-has-children">-->
<!--                                    <a href="">-->
<!--                                        Thực phẩm chức năng-->
<!--                                    </a>-->
<!--                                    <ul class="sub-menu">-->
<!--                                        <li class="menu-item menu-item-type-custom">-->
<!--                                            <a href="">-->
<!--                                                Xuất xứ Hoa Kì-->
<!--                                            </a>-->
<!--                                        </li>-->
<!--                                        <li class="menu-item menu-item-type-custom">-->
<!--                                            <a href="">-->
<!--                                                Xuất xứ Nhật Bản-->
<!--                                            </a>-->
<!--                                        </li>-->
<!--                                        <li class="menu-item menu-item-type-custom">-->
<!--                                            <a href="">-->
<!--                                                Xuất xứ Việt Nam-->
<!--                                            </a>-->
<!--                                        </li>-->
<!--                                    </ul>-->
<!--                                </li>-->
<!--                                <li class="menu-item menu-item-type-custom">-->
<!--                                    <a href="">-->
<!--                                        Thuốc Đông Y-->
<!--                                    </a>-->
<!--                                </li>-->
<!--                                <li class="menu-item menu-item-type-custom">-->
<!--                                    <a href="">-->
<!--                                        Thuốc Tây Y-->
<!--                                    </a>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                        <li class="menu-item menu-item-type-custom">-->
<!--                            <a href="">-->
<!--                                Tin tức-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li class="menu-item menu-item-type-custom">-->
<!--                            <a href="">-->
<!--                                Liên hệ-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li class="menu-item menu-item-type-custom">-->
<!--                            <a href="">-->
<!--                                Hệ thống cửa hàng-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li class="menu-item menu-item-type-custom menu-item-has-children">-->
<!--                            <a href="">-->
<!--                                Chăm sóc khách hàng-->
<!--                            </a>-->
<!--                            <ul class="sub-menu mega-menu">-->
<!--                                <li class="inner-sub-menu">-->
<!--                                    <div class="inner-item">-->
<!--                                        <a href="">-->
<!--                                            Tư vấn sản phẩm-->
<!--                                        </a>-->
<!--                                    </div>-->
<!--                                    <div class="inner-item">-->
<!--                                        <a href="">-->
<!--                                            Chính sách giao hàng-->
<!--                                        </a>-->
<!--                                    </div>-->
<!--                                    <div class="inner-item">-->
<!--                                        <a href="">-->
<!--                                            Chính sách đổi trả-->
<!--                                        </a>-->
<!--                                    </div>-->
<!--                                    <div class="inner-item">-->
<!--                                        <a href="">-->
<!--                                            Câu hỏi thường gặp-->
<!--                                        </a>-->
<!--                                        <ol class="list-question">-->
<!--                                            <li class="question-item">-->
<!--                                                <a href="">-->
<!--                                                    Về sản phẩm-->
<!--                                                </a>-->
<!--                                            </li>-->
<!--                                            <li class="question-item">-->
<!--                                                <a href="">-->
<!--                                                    Về suplo-->
<!--                                                </a>-->
<!--                                            </li>-->
<!--                                        </ol>-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                        <li class="menu-item menu-item-type-custom">-->
<!--                            <a href="">-->
<!--                                Tìm kiếm-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li class="menu-item menu-item-type-custom">-->
<!--                            <a href="">-->
<!--                                Tài khoản-->
<!--                            </a>-->
<!--                        </li>-->
<!--                    </ul>-->
                    <div class="cart-icon">
                        <a href="">
                            <i class="las la-shopping-cart"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>