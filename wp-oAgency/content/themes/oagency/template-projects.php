<?php
/*
Template Name: Template projets
*/
?>

<?php get_header() ?> 

<div class="projects">
    <?php 
        $args = [
        'post_type' => 'project',
        ];
        
        $wpProjectsQuery = new WP_Query($args);
    ?>
        
    <?php if($wpProjectsQuery->have_posts()) : while($wpProjectsQuery->have_posts()) : $wpProjectsQuery->the_post(); ?>
        <?php get_template_part('template-parts/projects/project-excerpt'); ?>
    <?php endwhile; endif; ?>
</div>

<?php get_footer() ?>