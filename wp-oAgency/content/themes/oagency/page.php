<?php get_header(); ?>

<div class="main-single-blogpost">
    <section id="single-blogpost">
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <?php get_template_part('template-parts/page-detail') ?>
    <?php endwhile; endif; ?>
    </section>
</div>

<?php get_footer(); ?>