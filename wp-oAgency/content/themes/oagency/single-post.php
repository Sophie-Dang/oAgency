<?php get_header() ?>

<div class="main-single-blogpost">
    <section id="single-blogpost">
        <!--Post-->
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <?php get_template_part('template-parts/posts/post-detail') ?>
        <?php endwhile; endif; ?>
        <!--/Post-->
    </section>

    <aside class="sidebar">
        <div class="sidebar-search">
            <div class="sidebar-search__part">
                <label class="sidebar-search__part__label" for="search"> Rechercher : </label>
                <input class="sidebar-search__part__input" type="search" name="search" id="search" placeholder="Recherche ...">
            </div>
            <button class="sidebar-search__button"> Rechercher </button>
        </div>

        <div class="sidebar-item">
            <h4 class="sidebar-item__title">Sidebar item</h4>
            
            <article class="sidebar-item-post">
                <p class="sidebar-item-post__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                <img class="sidebar-item-post__img" src="https://source.unsplash.com/user/blakepnw/8c8CpicodQM/600x600" alt="...">
            </article>
        </div>
    </aside>
</div>

<?php get_footer() ?>