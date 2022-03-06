<?php

//Hidden Sidebar admin in Frontend
add_filter('show_admin_bar', '__return_false');

// Add default posts and comments RSS feed links to head.
add_theme_support('automatic-feed-links');
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
// Add logo site
add_theme_support( 'custom-logo' );
remove_action('wp_head', 'wp_generator');

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
add_filter('excerpt_length', 'gb_custom_excerpt_length', 999);
function gb_custom_excerpt_length($length)
{
    return 25;
}


// This theme uses wp_nav_menu() in two locations.
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'tpv' ),
    'sidebar'  => __( 'Sidebar Menu', 'tpv' ),
) );


/**
 * Regiter stylesheet
 * Vendor and custom file
 */
add_action( 'wp_enqueue_scripts', 'tpv_theme_styles' );
function tpv_theme_styles()
{
    wp_enqueue_style( 'tpv-line-awesome', 'https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css' );
    wp_enqueue_style( 'tpv-lightbox', get_template_directory_uri().'/libs/lightbox2-2.11.3/lightbox.min.css' );
    wp_enqueue_style( 'tpv-reset', get_template_directory_uri().'/assets/css/reset.css' );
    wp_enqueue_style( 'tpv-slick', get_template_directory_uri().'/assets/css/slick.css' );
    wp_enqueue_style( 'tpv-style', get_template_directory_uri().'/assets/css/style.css' );
}

/**
 * Regiter JavaScript
 * Vendor and custom file
 */
add_action( 'wp_enqueue_scripts', 'tpv_theme_name_scripts' );
function tpv_theme_name_scripts()
{
    wp_enqueue_script( 'tpv-jquery-js', get_template_directory_uri() . '/assets/js/jquery.js', array(), true, true );
    wp_enqueue_script( 'tpv-lightbox-js', get_template_directory_uri().'/libs/lightbox2-2.11.3/lightbox.min.js', array(), true, true );
    wp_enqueue_script( 'tpv-slick-js', get_template_directory_uri() . '/assets/js/slick.js', array(), true, true );
    wp_enqueue_script( 'tpv-main-js', get_template_directory_uri() . '/assets/js/main.js', array(), true, true );
}

/**
 * Tạo theme options khi có Advanced Custom Fields PRO
 */
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => 'Theme Option', // Title hiển thị khi truy cập vào Options page
        'menu_title' => 'Theme Option', // Tên menu hiển thị ở khu vực admin
        'menu_slug' => 'theme-option', // Url hiển thị trên đường dẫn của options page
        'capability' => 'edit_posts',
        'redirect' => false
    ));
}


// To change add to cart text on single product page
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woocommerce_custom_single_add_to_cart_text' );
function woocommerce_custom_single_add_to_cart_text() {
    return __( 'Thêm vào giỏ hàng', 'woocommerce' );
}

// To change add to cart text on product archives(Collection) page
add_filter( 'woocommerce_product_add_to_cart_text', 'woocommerce_custom_product_add_to_cart_text' );
function woocommerce_custom_product_add_to_cart_text() {
    return __( 'Thêm vào giỏ hàng', 'woocommerce' );
}


/**
 * @snippet       Translate a String in WooCommerce
 * @sourcecode    https://businessbloomer.com/?p=162
 * @author        Rodolfo Melogli
 * @compatible    WooCommerce 3.5.4
 * @donate $9     https://businessbloomer.com/bloomer-armada/
 */

add_filter( 'gettext', 'bbloomer_translate_woocommerce_strings', 999, 3 );

function bbloomer_translate_woocommerce_strings( $translated, $text, $domain ) {
    if ( ! is_admin() && 'woocommerce' === $domain ) {
        switch ( strtolower( $translated ) ) {
            case 'view cart' :
                $translated = 'Mua ngay';
                break;
            case 'proceed to checkout' :
                $translated = 'Place Order ';
                break;
            case 'checkout' :
                $translated = 'Place Order ';
                break;
            case 'add to cart' :
                $translated = 'Add to Order';
                break;
            // enter a new case for each line where you want Woocommerce text to be changed.

        }
    }
    return $translated;
}

add_action( 'woocommerce_after_add_to_cart_quantity', 'ts_quantity_plus_sign' );

function ts_quantity_plus_sign() {
    echo '<button type="button" class="plus" >+</button>';
}

add_action( 'woocommerce_before_add_to_cart_quantity', 'ts_quantity_minus_sign' );

function ts_quantity_minus_sign() {
    echo '<button type="button" class="minus" >-</button>';
}

add_action( 'wp_footer', 'ts_quantity_plus_minus' );

function ts_quantity_plus_minus() {
// To run this on the single product page
    if ( ! is_product() ) return;
    ?>
    <script type="text/javascript">

        jQuery(document).ready(function($){

            $('form.cart').on( 'click', 'button.plus, button.minus', function() {

// Get current quantity values
                var qty = $( this ).closest( 'form.cart' ).find( '.qty' );
                var val = parseFloat(qty.val());
                var max = parseFloat(qty.attr( 'max' ));
                var min = parseFloat(qty.attr( 'min' ));
                var step = parseFloat(qty.attr( 'step' ));

// Change the value if plus or minus
                if ( $( this ).is( '.plus' ) ) {
                    if ( max && ( max <= val ) ) {
                        qty.val( max );
                    }
                    else {
                        qty.val( val + step );
                    }
                }
                else {
                    if ( min && ( min >= val ) ) {
                        qty.val( min );
                    }
                    else if ( val > 1 ) {
                        qty.val( val - step );
                    }
                }

            });

        });

    </script>
    <?php
}