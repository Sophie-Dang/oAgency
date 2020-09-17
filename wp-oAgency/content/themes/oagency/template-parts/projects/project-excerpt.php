<article class="projects-project">
    <img class="projects-project__img" src="<?= get_the_post_thumbnail_url() ?>" alt="...">

    <div class="projects-project-text">
        <h2 class="projects-project-text__title"> <?php the_title() ?> </h2>
        <div class="projects-project-text__excerpt"> <?php the_excerpt() ?> </div>
        <a href="<?php the_permalink() ?>" class="projects-project-text__button" style="color:<?= get_theme_mod('oagency_colors_links') ?>">Lire la suite</a>
    </div>
</article>