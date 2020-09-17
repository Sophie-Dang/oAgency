<article class="blog-post">
    <img class="blog-post__img" src="<?php the_post_thumbnail_url() ?>" alt="...">
    <div class="blog-post__text">
        <h2 class="blog-post__text__title"><?php the_title() ?></h2>
        <div class="blog-post__text__excerpt"><?php the_excerpt() ?></div>
        <a href="<?php the_permalink() ?>" class="blog-post__text__button">Lire la suite</a>
    </div>
</article>
