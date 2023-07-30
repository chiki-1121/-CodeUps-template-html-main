<?php get_header(); ?>

<!-- 下層ページのメインビュー -->
<div class="p-sub-mv js-mv-height">
    <div class="p-sub-mv__title">
        <div class="c-section-header c-section-header--white">
            <h1 class="c-section-header__engtitle ">contact</h1>
            <p class="c-section-header__jatitle">お問い合わせ</p>
        </div>
    </div>
</div>

<?php get_template_part('breadcrumb'); ?>


<section class="l-page-contact  p-page-contact">
    <div class="p-page-contact__inner l-inner">
        <p class="p-page-contact__text">
            Webサイトの制作のご依頼やお見積りなど、<br class="u-mobile">
            お気軽にご相談ください。
        </p>
        <div class="p-page-contact__content p-form">
            <form action="" method="post" id="">
                <dl class="p-form__item">
                    <dt>お問い合わせ種別<span><sup>*</sup>必須</span></dt>
                    <dd class="p-form__radio">
                        <label><input type="radio" name="target" value="ラジオボタン" checked /><span>お仕事のご依頼・ご相談</span></label>
                        <label><input type="radio" name="target" value="ラジオボタン2" /><span>お見積りのご依頼</span></label>
                        <label><input type="radio" name="target" value="ラジオボタン2" /><span>採用について</span></label>
                        <label><input type="radio" name="target" value="ラジオボタン2" /><span>その他</span></label>
                    </dd>
                </dl>
                <dl class="p-form__item">
                    <dt>お名前<span><sup>*</sup>必須</span></dt>
                    <dd>
                        <input type="text" name="company" value="" required />
                    </dd>
                </dl>
                <dl class="p-form__item">
                    <dt>会社名</dt>
                    <dd>
                        <input type="text" name="company" value="" />
                    </dd>
                </dl>
                <dl class="p-form__item">
                    <dt>メールアドレス<span><sup>*</sup>必須</span></dt>
                    <dd>
                        <input type="email" name="mail_address" value="" class="validate[]" required />
                    </dd>
                </dl>
                <dl class="p-form__item">
                    <dt>お電話番号<span class="p-form__tel-info">（半角数字ハイフンなし）</span></dt>
                    <dd>
                        <input type="tel" name="mail_address" value="" class="validate[]" required />
                    </dd>
                </dl>
                <dl class="p-form__item">
                    <dt>お問い合わせ内容<span><sup>*</sup>必須</span></dt>
                    <dd>
                        <textarea name="contents"></textarea>
                    </dd>
                </dl>
                <dl>
                    <dt>PON DESIGNをどちらでお知りになりましたか？<span><sup>*</sup>必須</span></dt>
                    <dd class="">
                        <select name="hoge" class="">
                            <option value="">選択してください</option>
                            <option value="セレクト1">Google/Yahoo検索</option>
                            <option value="セレクト2">SNS</option>
                            <option value="セレクト3">ブログ</option>
                            <option value="セレクト4">友人や知人</option>
                            <option value="セレクト5">その他</option>
                        </select>
                    </dd>
                </dl>
                <div class="p-form__btn">
                    <input type="button" class="" value="送信する" />
                </div>
            </form>
        </div>
    </div>
</section>

<?php get_footer(); ?>