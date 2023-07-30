<?php get_header(); ?>

<!-- 下層ページのメインビュー -->
<div class="p-sub-mv js-mv-height">
    <div class="p-sub-mv__title">
        <div class="c-section-header c-section-header--white">
            <h1 class="c-section-header__engtitle ">works</h1>
            <p class="c-section-header__jatitle">制作実績</p>
        </div>
    </div>
</div>

<?php get_template_part('breadcrumb'); ?>

<section class="l-archive-works p-archive-works">
    <div class="p-archive-works__inner l-inner">
        <div class="p-archive-works__items">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="p-archive-works__item">
                        <div class="p-archive-works__image">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail(); ?><!-- アイキャッチ画像指定されている場合 -->
                            <?php else : ?>
                                <img src='<?php echo get_template_directory_uri() ?>/dist/assets/images/common/noimg.png'><!-- アイキャッチ画像指定されていない場合に代替画像を表示 -->
                            <?php endif; ?>
                        </div>
                        <div class="p-archive-works__title">
                            <h2 class="p-archive-works__name"><?php the_title(); ?> 様</h2>
                        </div>
                    </div>
            <?php endwhile;
            endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>