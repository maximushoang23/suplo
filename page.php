<?php
get_header() ;

global $post;
?>
<main class="page page-static page-page">
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
            <div class="main-content">
                <h2 class="h2-title title-page-list title-category">
                    <?= the_title() ?>
                </h2>
                <div class="post-content">
                    <?= the_content() ?>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer() ?>
