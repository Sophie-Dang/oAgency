<div class="sidebar-item">
    <article class="sidebar-item-post">
        <h4 ><a class="sidebar-item__title" href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
        <p class="sidebar-item-post__text"> <?php the_excerpt(); ?> </p>
        <img class="sidebar-item-post__img" src="<?= get_the_post_thumbnail_url()?>" alt="...">
    </article>
</div> 