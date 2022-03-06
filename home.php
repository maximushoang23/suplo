<?php
/*
 * Template Name: Trang chủ
 * Author: Henry Ngo
 */
?>
<?php $id_homepage = 149 ?>
<?php get_header() ?>
<div class="wrapper">
    <main id="main">
        <?php $banner_option = get_field('banner', $id_homepage) ?>
        <section class="block-1 banner-carosel">
            <div class="banner-slider">
                <?php foreach ($banner_option['banner_images'] as $banner_item ) : ?>
                <div class="item-slider">
                    <a href="<?= $banner_item['link_item'] ?>">
                        <img src="<?= $banner_item['image_item'] ?>" alt="">
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="ms-slogan text-center">
                <?= $banner_option['banner_description'] ?>
            </div>
        </section>

        <?php $gioi_thieu_option = get_field('gioi_thieu_tong_quan', $id_homepage) ?>
        <section class="block block-2 block-main-post">
            <div class="wrapper-container">
                <h2 class="h2-title block-title block-main-post-title">
                    <?= $gioi_thieu_option['tieu_de'] ?>
                </h2>
                <div class="inner-content d-flex ">
                    <div class="inner-left">
                        <div class="post-des">
                           <?= $gioi_thieu_option['mo_ta'] ?>
                        </div>
                        <div class="btn btn-link">
                            <a href="<?= $gioi_thieu_option['link_gioi_thieu'] ?>">Đọc thêm</a>
                        </div>
                    </div>
                    <div class="inner-right">
                        <a href="<?= $gioi_thieu_option['link_gioi_thieu'] ?>">
                            <img src="<?= $gioi_thieu_option['hinh_anh'] ?>" alt="">
                        </a>
                    </div>

                </div>
            </div>
        </section>

        <?php $ve_chung_toi_option = get_field('ve_chung_toi', $id_homepage) ?>

        <section class="block-3 block-reason">
            <div class="wrapper-container">
                <div class="content d-flex">
                    <div class="policy-wrap-left content-left">
                        <div class="policy-wrap-item">
                            <img class=" lazyloaded"
                                 src="<?= $ve_chung_toi_option['ve_chung_toi_trai_phai'][0]['hinh_anh'] ?>">
                            <h3><?= $ve_chung_toi_option['ve_chung_toi_trai_phai'][0]['tieu_de'] ?></h3>
                            <span><?= $ve_chung_toi_option['ve_chung_toi_trai_phai'][0]['mo_ta'] ?></span>
                            <div class="animation-circle">
                                <div class="animation-circle-item"></div>
                                <div class="animation-circle-item"></div>
                                <div class="animation-circle-item"></div>
                                <div class="animation-circle-item"></div>
                            </div>
                        </div>

                        <div class="policy-wrap-item">
                            <img class=" lazyloaded"
                                 src="<?= $ve_chung_toi_option['ve_chung_toi_trai_phai'][1]['hinh_anh'] ?>">
                            <h3><?= $ve_chung_toi_option['ve_chung_toi_trai_phai'][1]['tieu_de'] ?></h3>
                            <span><?= $ve_chung_toi_option['ve_chung_toi_trai_phai'][1]['mo_ta'] ?></span>
                            <div class="animation-circle">
                                <div class="animation-circle-item"></div>
                                <div class="animation-circle-item"></div>
                                <div class="animation-circle-item"></div>
                                <div class="animation-circle-item"></div>
                            </div>
                        </div>
                    </div>
                    <div class="policy-wrap-center content-center">
                        <img class=" lazyloaded"
                             src="<?= $ve_chung_toi_option['ve_chung_toi_giua'] ?>">
                    </div>
                    <div class="policy-wrap-right content-right">
                        <div class="policy-wrap-item">
                            <img class=" lazyloaded"
                                 src="<?= $ve_chung_toi_option['ve_chung_toi_trai_phai'][2]['hinh_anh'] ?>">
                            <h3><?= $ve_chung_toi_option['ve_chung_toi_trai_phai'][2]['tieu_de'] ?></h3>
                            <span><?= $ve_chung_toi_option['ve_chung_toi_trai_phai'][2]['mo_ta'] ?></span>
                            <div class="animation-circle">
                                <div class="animation-circle-item"></div>
                                <div class="animation-circle-item"></div>
                                <div class="animation-circle-item"></div>
                                <div class="animation-circle-item"></div>
                            </div>
                        </div>
                        <div class="policy-wrap-item">
                            <img class=" lazyloaded"
                                 src="<?= $ve_chung_toi_option['ve_chung_toi_trai_phai'][3]['hinh_anh'] ?>">
                            <h3><?= $ve_chung_toi_option['ve_chung_toi_trai_phai'][3]['tieu_de'] ?></h3>
                            <span><?= $ve_chung_toi_option['ve_chung_toi_trai_phai'][3]['mo_ta'] ?></span>
                            <div class="animation-circle">
                                <div class="animation-circle-item"></div>
                                <div class="animation-circle-item"></div>
                                <div class="animation-circle-item"></div>
                                <div class="animation-circle-item"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <?php $san_pham_noi_bat = get_field('san_pham_noi_bat', $id_homepage) ?>
        <section class="block block-4 block-feature-product">
            <div class="wrapper-container">
                <h2 class="h2-title block-title">
                    <?= $san_pham_noi_bat['tieu_de'] ?>
                </h2>
                <div class="content">
                    <div class="feature-slider list-items list-product-feature-items d-flex">
                        <?php foreach ($san_pham_noi_bat['danh_sach_sp'] as $sp_item) : ?>
                        <div class="slider-item item feature-item">
                            <div class="item-thumb">
                                <a href="<?= $sp_item['link_san_pham'] ?>">
                                    <img src="<?= $sp_item['hinh_anh_san_pham'] ?>" alt="">
                                </a>
                            </div>
                            <h3 class="h3-title item-name">
                                <a href="<?= $sp_item['link_san_pham'] ?>">
                                    <?= $sp_item['ten_san_pham'] ?>
                                </a>
                            </h3>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>


        <?php $khach_hang_danh_gia = get_field('khach_hang_danh_gia', $id_homepage) ?>
        <section class="block block-5 block-customer-review">
            <div class="block-overlay"></div>
            <div class="wrapper-container">
                <div class="content">
                    <h2 class="h2-title blog-title review-title">
                        <?= $khach_hang_danh_gia['tieu_de'] ?>
                    </h2>
                    <div class="customer-slider">
                        <?php foreach ($khach_hang_danh_gia['danh_sach_review'] as $review_item ) : ?>
                        <div class="item-slider">
                            <div class="customer-thumb">
                                <img src="<?= $review_item['anh_dai_dien'] ?>" alt="">
                            </div>
                            <div class="customer-review-content">
                                <?= $review_item['noi_dung_danh_gia'] ?>
                            </div>
                            <div class="customer-info">
                                <?= $review_item['ten_khach_hang'] ?>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>

                </div>
            </div>
        </section>


        <?php $giay_to_cap_phep = get_field('giay_to_cap_phep', $id_homepage) ?>
        <section class="block block-6 block-license">
            <div class="wrapper-container">
                <h2 class="h2-title block-title">
                    <?= $giay_to_cap_phep['tieu_de'] ?>
                </h2>
                <div class="content">
                    <div class="license-slider">
                        <?php foreach ($giay_to_cap_phep['ds_hinh_anh_giay_to'] as $key=>$giay_to_item) : ?>
                        <div class="license-item">
                            <a href="<?= $giay_to_item['hinh_anh_giay_to'] ?>"
                               data-lightbox="image-<?=$key ?>" >
                                <img src="<?= $giay_to_item['hinh_anh_giay_to'] ?>" alt="">
                            </a>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>


        <?php $category = get_field('category', $id_homepage) ?>
        <?php foreach ($category as $category_item) : ?>
        <section class="block block-category block-company">
            <div class="wrapper-container">
                <h2 class="h2-title block-title">
                    <a href="<?= get_category_link($category_item) ?>">
                        <?= get_cat_name($category_item) ?>
                    </a>
                </h2>
                <div class="content">
                    <div class="category-slider">
                        <?php
                        $query_3 = new WP_Query( array(
                            'post_type'      => array('post'),
                            'posts_per_page' => get_option( 'posts_per_page' ),
                            'cat'            => $category_item,
                            'orderby'        => 'date',
                            'order'          => 'DESC',
                        ) );

                        if ( $query_3->have_posts() ) {
                            $ii = 0;
                            while ( $query_3->have_posts() ) : $query_3->the_post();
                                $ii++;
                                ?>
                                <div class="item-slider article-item">
                                    <div class="article-img">
                                        <a href="<?php the_permalink() ?>" title="<?php the_title() ?>">
                                            <img src="<?php the_post_thumbnail_url('medium') ?>" alt="<?php the_title() ?>">
                                        </a>
                                    </div>
                                    <div class="article-title">
                                        <a href="<?php the_permalink() ?>">
                                            <?php the_title() ?>
                                        </a>
                                    </div>
                                    <div class="article-info">
                                        <div class="article-date">
                                            <i class="las la-calendar"></i> <?= get_the_date() ?>
                                        </div>
                                        <div class="article-comment">
                                            <i class="las la-comment"></i> <span
                                                    class="fb-comments-count fb_comments_count_zero_fluid_desktop
                                                    fb_comments_count">0</span>
                                        </div>
                                        <div class="aritcle-author">
                                            <i class="las la-user"></i> <?= get_the_author() ?>
                                        </div>
                                    </div>
                                    <div class="article-desc">
                                        <?php the_excerpt(); ?>
                                    </div>
                                </div>
                            <?php
                            endwhile;
                            wp_reset_postdata();
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <?php endforeach; ?>
    </main>

</div>
<?php get_footer() ?>