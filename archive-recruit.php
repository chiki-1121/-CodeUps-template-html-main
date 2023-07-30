<?php get_header(); ?>

<!-- 下層ページのメインビュー -->
<div class="p-sub-mv js-mv-height">
    <div class="p-sub-mv__title">
        <div class="c-section-header c-section-header--white">
            <h1 class="c-section-header__engtitle ">recruit</h1>
            <p class="c-section-header__jatitle">採用情報</p>
        </div>
    </div>
</div>

<?php get_template_part('breadcrumb'); ?>

<section class="p-page-recruit">
    <div class="p-page-recruit__inner l-inner">
        <div class="p-page-recruit__title">
            <h2 class="p-page-recruit__main">Enjoy Creation for Client</h2>
            <p class="p-page-recruit__sub">楽しむ心が良いモノを生む</p>
        </div>
        <p class="p-page-recruit__text">
            心を弾ましながら<br>
            夢いっぱいのサイトを作ろう！<br>
            お客様も自分もみんなが幸せになれるように
        </p>
        <div class="p-page-recruit__image">
            <picture>
                <source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/page-recruit_1-pc.png">
                <img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/common/page-recruit_1.png" alt="女性たちの写真">
            </picture>
        </div>

        <div class="p-page-recruit__recruit">
            <div class="p-page-recruit__title c-section-header">
                <h2 class="c-section-header__subpage">募集中の職種</h2>
            </div>
            <div class="p-page-recruit__items">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <div class="p-page-recruit__item">
                            <h3 class="p-page-recruit__job-title"><?php the_title(); ?></h3>
                            <dl class="p-recruit__lists p-common-lists">
                                <?php
                                // 変数へ格納する場合
                                $text1 = SCF::get('text_1');
                                $text2 = SCF::get('text_2');
                                $text3 = SCF::get('text_3');
                                $text4 = SCF::get('text_4');
                                $text5 = SCF::get('text_5');
                                $link = SCF::get('link');
                                ?>
                                <?php if ($text1):?>
                                <div class="p-common-lists__list">
                                    <dt>雇用形態</dt>
                                    <dd><?php echo nl2br($text1); ?></dd>
                                </div>
                                <?php endif; ?>
                                <?php if ($text2):?>
                                <div class="p-common-lists__list">
                                    <dt>給与</dt>
                                    <dd><?php echo nl2br($text2); ?></dd>
                                </div>
                                <?php endif; ?>
                                <?php if ($text3):?>
                                <div class="p-common-lists__list">
                                    <dt>仕事内容</dt>
                                    <dd><?php echo nl2br($text3); ?></dd>
                                </div>
                                <?php endif; ?>
                                <?php if ($text4):?>
                                <div class="p-common-lists__list">
                                    <dt>勤務時間</dt>
                                    <dd><?php echo nl2br($text4); ?></dd>
                                </div>
                                <?php endif; ?>
                                <?php if ($text5):?>
                                <div class="p-common-lists__list">
                                    <dt>応募資格</dt>
                                    <dd><?php echo nl2br($text5); ?></dd>
                                </div>
                                <?php endif; ?>
                            </dl>
                            <div class="p-page-recruit__apply">
                                <a href="<?php echo $link; ?>" class="c-button">応募する</a>
                                <p>求人サイトへ遷移します</p>
                            </div>
                        </div>
                <?php endwhile;
                endif; ?>
                <!-- ループ処理 -->
            </div>
        </div>
        <div class="p-page-recruit__movies">
            <div class="p-page-recruit__title c-section-header">
                <h2 class="c-section-header__subpage">社内ムービー</h2>
            </div>
            <div class="p-page-recruit__movie">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/tXurntXHGt8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>