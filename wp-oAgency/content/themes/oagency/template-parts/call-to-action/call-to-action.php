<section id="post-highlight" class="jarallax" style="background-image: url('<?= wp_get_attachment_url(get_theme_mod('oagency_callToAction_bgImg'))?>')">
    <h2 class="post-highlight__title"><?= get_theme_mod('oagency_callToAction_title') ?></h2>
    <p class="post-highlight__description"> <?= get_theme_mod('oagency_callToAction_content') ?> </p>

    <div class="post-highlight__item">
    <a class="post-highlight__item__button" href="<?= get_theme_mod('oagency_callToAction_btnLink1') ?>"> <?= get_theme_mod('oagency_callToAction_btn1') ?> </a>
    <a class="post-highlight__item__button" href="<?= get_theme_mod('oagency_callToAction_btnLink2') ?>"> <?= get_theme_mod('oagency_callToAction_btn2') ?> </a>
    </div>
</section>