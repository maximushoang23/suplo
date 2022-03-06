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
                    <div class="inner-right">
                        <div class="box-search">
                            <button class="btn btn-search-text dropdown-toggle" type="button" id="dropdownSearchButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Tìm kiếm
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <form class="input-group" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
                                    <input  name="s" class="form-control" placeholder="Tìm kiếm sản phẩm ..." value="<?php echo get_search_query(); ?>" />
                                    <button type="submit" class="btn btn-search" value="Search">
                                        <i class="las la-search"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="cart-icon">
                            <a href="">
                                <i class="las la-shopping-cart"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>