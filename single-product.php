<?php
get_header() ;

global $post;


$product = wc_get_product($post->ID);
$attachment_ids  = $product->get_gallery_attachment_ids();

$ma_sp = get_field('ma_san_pham', $post->ID);
$loai_sp = get_field('loai_san_pham', $post->ID);
$thuong_hieu_sp = get_field('thuong_hieu', $post->ID);
$san_xuat_tai = get_field('san_xuat_tai', $post->ID);
$luu_y = get_field('luu_y', $post->ID);
$thanh_phan = get_field('thanh_phan', $post->ID);
$huong_dan_su_dung = get_field('huong_dan_su_dung', $post->ID);
$huong_dan_bao_quan = get_field('huong_dan_bao_quan', $post->ID);
$han_su_dung = get_field('han_su_dung', $post->ID);
?>
<main class="page page-single page-single-product page-product">
    <section class="box-breadcrumb">
        <div class="breadcrumb-overlay"></div>
        <div class="breadcrumb-content">
            <div class="wrapper">
                <div class="inner text-center">
                    <div class="breadcrumb-big">
                        <h2 class="h2-title title-page-list title-category">
                            <?= $post->post_title ?>
                        </h2>
                    </div>
                    <div class="breadcrumbs">
                        <?php yoast_breadcrumb(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="page-content">
        <div class="wrapper-container">
            <div class="main-content">
                <div class="product-slider">
                    <div class="inner">
                        <div class="inner-left">
                            <div class="product-slider-main">
                                <?php foreach( $attachment_ids as $key=>$attachment_id ) : ?>
                                    <a href="<?php echo wp_get_attachment_image_src( $attachment_id, 'full' )[0]; ?>" class="slider-item" data-lightbox="image-<?=$key ?> ">
                                        <?= wp_get_attachment_image($attachment_id, 'large') ?>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                            <div class="product-slider-gallery">
                                <?php foreach( $attachment_ids as $attachment_id ) : ?>
                                    <div class="slider-item">
                                        <?= wp_get_attachment_image($attachment_id, 'thumbnail') ?>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="inner-right">
                            <div class="pro-content-head">
                                <h1 class="h1-title single-product-title" itemprop="name"> <?= $post->post_title ?></h1>
                                <?php if(isset($thuong_hieu_sp)) :?>
                                    <div class="pro-brand">
                                        Thương hiệu : <a href=""><?= $thuong_hieu_sp ?></a>
                                    </div>
                                    <span>|</span>
                                <?php endif; ?>

                                <?php if(isset($loai_sp)) :?>
                                    <div class="pro-type">
                                        Loại sản phẩm :
                                        <a href="#">
                                            <?= $loai_sp ?>
                                        </a>
                                    </div>
                                    <span>|</span>
                                <?php endif; ?>

                                <?php if(isset($ma_sp)) :?>
                                    <div class="pro-type">
                                        Loại sản phẩm :
                                        <?= $ma_sp ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="product-price">
                                <?php if ($product->get_sale_price()): ?>
                                    <span class="sale-price">
                                         <?= $product->get_sale_price() ?>
                                         <?= get_woocommerce_currency_symbol(); ?>
                                     </span>
                                <?php endif; ?>

                                <?php if ($product->get_regular_price()): ?>
                                    <span class="regular-price <?= !empty($product->get_sale_price()) ? '' : 'no-sale-price' ?>">
                                         <?= $product->get_regular_price(); ?>
                                         <?= get_woocommerce_currency_symbol(); ?>
                                    </span>
                                <?php endif; ?>

                                <?php if ($product->get_sale_price() && $product->get_regular_price()) : ?>
                                    <span class="PriceSaving">(Bạn đã tiết kiệm được
                                    <?= $product->get_regular_price() - $product->get_sale_price() ?>
                                        <?= get_woocommerce_currency_symbol(); ?>
                                    )</span>
                                <?php endif; ?>
                            </div>
                            <table class="product-main-info">
                                <tbody>
                                <?php if(isset($san_xuat_tai)): ?>
                                    <tr>
                                        <td>
                                            Sản xuất tại:
                                        </td>
                                        <td>
                                            <?= $san_xuat_tai ?>
                                        </td>
                                    </tr>
                                <?php endif; ?>

                                <?php if(isset($luu_y)): ?>
                                    <tr>
                                        <td>
                                            Lưu ý:
                                        </td>
                                        <td>
                                            <?= $luu_y ?>
                                        </td>
                                    </tr>
                                <?php endif; ?>

                                <?php if(isset($thanh_phan)): ?>
                                    <tr>
                                        <td>
                                            Thành phần:
                                        </td>
                                        <td>
                                            <?= $thanh_phan ?>
                                        </td>
                                    </tr>
                                <?php endif; ?>

                                <?php if(isset($huong_dan_su_dung)): ?>
                                    <tr>
                                        <td>
                                            Hướng dẫn sử dụng:
                                        </td>
                                        <td>
                                            <?= $huong_dan_su_dung ?>
                                        </td>
                                    </tr>
                                <?php endif; ?>

                                <?php if(isset($huong_dan_bao_quan)): ?>
                                    <tr>
                                        <td>
                                            Hướng dẫn bảo quản:
                                        </td>
                                        <td>
                                            <?= $huong_dan_bao_quan ?>
                                        </td>
                                    </tr>
                                <?php endif; ?>

                                <?php if(isset($han_su_dung)): ?>
                                    <tr>
                                        <td>
                                            Hạn sử dụng:
                                        </td>
                                        <td>
                                            <?= $han_su_dung ?>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                                </tbody>
                            </table>
                            <div class="product-hotline">
                                <i class="las la-phone"></i>
                                <span>
                                    Hotline hỗ trợ 24/7:
                                    <a href="tel:<?= get_field('header_option', 'option')['contact_phone_number'] ?>">
                                        <?= get_field('header_option', 'option')['contact_phone_number'] ?>
                                    </a>
                                    <span>|</span>
                                </span>
                            </div>
                            <div class="product-buy">
                                <?php
                                $id = get_the_ID();
                                echo do_shortcode( '[add_to_cart id='.$id.']' );
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-des">
                    <div class="product-description-wrapper">
                        <div class="des-title">
                            <h3>
                                Mô tả
                            </h3>
                        </div>
                        <div class="des-content">
                            <table class="product-main-info">
                                <tbody>
                                <?php if(isset($san_xuat_tai)): ?>
                                    <tr>
                                        <td>
                                            Sản xuất tại:
                                        </td>
                                        <td>
                                            <?= $san_xuat_tai ?>
                                        </td>
                                    </tr>
                                <?php endif; ?>

                                <?php if(isset($luu_y)): ?>
                                    <tr>
                                        <td>
                                            Lưu ý:
                                        </td>
                                        <td>
                                            <?= $luu_y ?>
                                        </td>
                                    </tr>
                                <?php endif; ?>

                                <?php if(isset($thanh_phan)): ?>
                                    <tr>
                                        <td>
                                            Thành phần:
                                        </td>
                                        <td>
                                            <?= $thanh_phan ?>
                                        </td>
                                    </tr>
                                <?php endif; ?>

                                <?php if(isset($huong_dan_su_dung)): ?>
                                    <tr>
                                        <td>
                                            Hướng dẫn sử dụng:
                                        </td>
                                        <td>
                                            <?= $huong_dan_su_dung ?>
                                        </td>
                                    </tr>
                                <?php endif; ?>

                                <?php if(isset($huong_dan_bao_quan)): ?>
                                    <tr>
                                        <td>
                                            Hướng dẫn bảo quản:
                                        </td>
                                        <td>
                                            <?= $huong_dan_bao_quan ?>
                                        </td>
                                    </tr>
                                <?php endif; ?>

                                <?php if(isset($han_su_dung)): ?>
                                    <tr>
                                        <td>
                                            Hạn sử dụng:
                                        </td>
                                        <td>
                                            <?= $han_su_dung ?>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                                </tbody>
                            </table>
                            <div class="product-des-content">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer() ?>
