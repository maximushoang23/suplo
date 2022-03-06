<?php
get_header() ;

global $query_string;

wp_parse_str($query_string, $search_args);
?>
<main class="page page-list page-search page-news">
    <section class="box-breadcrumb">
        <div class="breadcrumb-overlay"></div>
        <div class="breadcrumb-content">
            <div class="wrapper">
                <div class="inner text-center">
                    <div class="breadcrumb-big">
                        <h2 class="h2-title title-page-list title-category">
                            Kết quả tìm kiếm "<?= $search_args['s'] ?>"
                        </h2>
                    </div>
                    <div class="breadcrumbs">
                        <?php yoast_breadcrumb(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="page-content block-category">
        <div class="wrapper-container">
            <div class="main-content">
                <h2 class="h2-title title-page-list title-category">
                     Kết quả tìm kiếm "<?= $search_args['s'] ?>
                </h2>
                <ul class="list-posts">
                    <?php
                    $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
                    $query_3 = new WP_Query( array(
                        'post_type'      => array('post'),
                        'posts_per_page' => get_option( 'posts_per_page' ),
                        's'              => get_query_var('s'),
                        'orderby'        => 'date',
                        'order'          => 'DESC',
                        'paged'           => $paged,
                    ) );

                    if ( $query_3->have_posts() ) {
                        $ii = 0;
                        while ( $query_3->have_posts() ) : $query_3->the_post();
                            $ii++;
                            ?>
                            <li class="item-slider category-item article-item">
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
                                            class="fb-comments-count fb_comments_count_zero_fluid_desktop"
                                            data-href="https://suplo-thuoc.myharavan.com/blogs/news/dong-trung-ha-thao-made-in-vietnam-chinh-thuc-xuat-ngoai"
                                            fb-xfbml-state="parsed"
                                            fb-iframe-plugin-query="app_id=&amp;container_width=0&amp;count=true&amp;height=100&amp;href=https%3A%2F%2Fsuplo-thuoc.myharavan.com%2Fblogs%2Fnews%2Fdong-trung-ha-thao-made-in-vietnam-chinh-thuc-xuat-ngoai&amp;locale=en_GB&amp;sdk=joey&amp;version=v2.11&amp;width=550"><span
                                                class="fb_comments_count">0</span></span>
                                    </div>
                                    <div class="aritcle-author">
                                        <i class="las la-user"></i> <?= get_the_author() ?>
                                    </div>
                                </div>
                                <div class="article-desc">
                                    <?php the_excerpt(); ?>
                                </div>
                            </li>
                        <?php
                        endwhile;
                        wp_reset_postdata();
                    }
                    ?>
                </ul>
                <!-- START: Pagination -->
                <?php
                global $wp_query, $paged;
                $big = 999999999;
                $pages = paginate_links( array(
                    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                    'format' => '?paged=%#%',
                    'current' => max( 1, get_query_var('paged') ),
                    'total' => $wp_query->max_num_pages,
                    'type'  => 'array',
                ) );
                if( is_array( $pages ) ) {
                    $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
                    echo '<ul class="pagination pb-4">';
                    foreach ( $pages as $page ) {
                        echo '<li class="page-item">';
                        echo $page;
                        echo '</li>';
                    }
                    echo '</ul>';
                }
                ?>
                <!-- END: Pagination -->
            </div>
        </div>
    </section>
</main>
<?php get_footer() ?>
