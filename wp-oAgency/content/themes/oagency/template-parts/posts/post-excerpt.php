<article class="posts-post">
    <img src="<?php the_post_thumbnail_url(); ?>" alt="...">

    <div class="posts-post-text">
        <h2 class="posts-post-text__title"> <?php the_title() ?> </h2>
        <div class="posts-post-text__excerpt"> <?php the_excerpt() ?> </div>
        <a class="posts-post-text__link" style="color:<?= get_theme_mod('oagency_colors_links') ?>" href="<?php the_permalink() ?>"><i class="fa fa-link" aria-hidden="true"></i> Lire - <?php the_title() ?></a>
    </div>
</article>