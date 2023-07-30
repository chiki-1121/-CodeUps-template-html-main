<?php get_header(); ?>

<!-- 下層ページのメインビュー -->
<div class="p-sub-mv js-mv-height">
    <div class="p-sub-mv__title">
        <div class="c-section-header c-section-header--white">
            <h1 class="c-section-header__engtitle ">news</h1>
            <p class="c-section-header__jatitle">お知らせ</p>
        </div>
    </div>
</div>

<?php get_template_part('breadcrumb'); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <section class="l-single-body p-single-body">
            <div class="p-single-body__inner l-inner">
                <div class="p-single-body__title">
                    <h1><?php the_title(); ?></h1>
                </div>
                <div class="p-single-body__meta">
                    <div class="p-news-content">
                        <div class="p-news-content__meta">
                            <time datetime="<?php the_time('Y.m.d'); ?>" class="p-news-content__date"><?php the_time('Y.m.d'); ?></time>
                            <p class="p-news-content__category"><?php $category = get_the_category();
                                                                echo '<span>' . $category[0]->name . '</span>'; ?></p>
                        </div>
                    </div>
                </div>
                <?php if (has_post_thumbnail()) : ?>
                    <div class="p-single-body__image">
                        <?php the_post_thumbnail(); ?><!-- アイキャッチ画像指定されている場合 -->
                    </div>
                <?php endif; ?>
                <div class="p-single-body__content">
                    <div><?php the_content(); ?></div>
                </div>
                <div class="c-page-link">
                    <div class="c-page-link__inner">
                        <div class="c-page-link__flex">
                            <div class="c-page-link__prev">
                                <a href=""><?php previous_post_link('%link', '%title'); ?></a>
                            </div>
                            <div class="c-page-link__next">
                                <a href="">
                                    <?php next_post_link('%link', '%title'); ?></a>
                            </div>
                        </div>
                        <div class="c-page-link__archive">
                            <a href="<?php echo esc_url(home_url('/news')); ?>">NEWS一覧</a>
                        </div>
                    </div>
                </div>
            </div>

        </section>
<?php endwhile;
endif; ?>


<?php get_footer(); ?>