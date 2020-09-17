
<?php get_header() ?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<div class="main-single-project jarallax" style="background-image: url('<?= get_the_post_thumbnail_url() ?>')">
     <div class="single-project-bg">
        <div class="single-project">
            <?php get_template_part('template-parts/projects/project-detail') ?>
        </div>
    </div>
</div>
<?php endwhile; endif; ?>

<?php get_footer() ?>