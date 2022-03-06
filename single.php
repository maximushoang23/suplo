<?php
get_header() ;

global $post;

$categories = get_the_category();
$cate_id = $categories[0]->term_id;
?>
<main class="page page-static page-single page-news">
    <section class="box-breadcrumb">
        <div class="breadcrumb-overlay"></div>
        <div class="breadcrumb-content">
            <div class="wrapper">
                <div class="inner text-center">
                    <div class="breadcrumb-big">
                        <h2 class="h2-title title-page-list title-category">
                            <?= the_title() ?>
                        </h2>
                    </div>
                    <div class="breadcrumbs">
                        <?php yoast_breadcrumb(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="page-content block-single">
        <div class="wrapper-container">
            <div class="side-bar">
                <div class="list-categories">
                    <h3>
                        <?= the_title() ?>
                    </h3>
                    <ul>
                        <li class="active">
                            <a href="/blogs/news">Tin tức</a>
                        </li>
                        <li class="">
                            <a href="/blogs/review-san-pham">Review sản phẩm</a>
                        </li>
                        <li class="">
                            <a href="/blogs/song-khoe-moi-ngay">Sống khỏe mỗi ngày</a>
                        </li>
                        <li class="">
                            <a href="/blogs/ban-tin-noi-bo">Bản tin nội bộ</a>
                        </li>
                    </ul>
                </div>
                <div class="blog-sb-banner">
                    <a href="/collections/all">
                        <img src="//theme.hstatic.net/1000255202/1000326859/14/blog_banner_1.png?v=999" alt="">
                    </a>
                </div>
            </div>
            <div class="main-content">
                <h2 class="h2-title title-page-list title-category">
                    <?= the_title() ?>
                </h2>
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
                <div class="post-content">
                    <?= the_content() ?>
                </div>

                <div class="nguon-tags">
                    <?php if(get_the_tag_list()){ ?>
                        <div class="tags">
                            <span>Từ khóa:</span>
                            <?php echo get_the_tag_list() ?>
                        </div>
                    <?php } ?>
                </div>

                <div class="related-posts">
                    <h3 class="h3-title">
                        Bài viết liên quan
                    </h3>
                    <ul class="list-related">
                        <?php
                        $query1 = new WP_Query( array(
                            'posts_per_page' => 4,
                            'post_type'      => 'post',
                            'cat'            => $cate_id,
                            'post__not_in'   => array(get_the_ID()),
                        ) );

                        if ( $query1->have_posts() ) {
                            while ( $query1->have_posts() )
                            {
                                $query1->the_post();
                                ?>
                                <li class="list-item list-item-related">
                                    <h4>
                                        <a href="<?= the_permalink() ?>">
                                            <?= the_title() ?>
                                        </a>
                                    </h4>
                                </li>
                                <?php
                            }
                            wp_reset_postdata();
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer() ?>
