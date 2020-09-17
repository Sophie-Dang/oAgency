<?php get_header() ?>

    <div class="main-blog">
        <section id="blog-posts">

        <!--Posts-->
        <?php
            $args = [
                'post_type' => 'post',
            ];
            
            $wpPostsQuery = new WP_Query($args);
        ?>

        <?php if($wpPostsQuery->have_posts()) : while($wpPostsQuery->have_posts()) : $wpPostsQuery->the_post(); ?>
            <?php get_template_part('template-parts/posts/blogpost-excerpt') ?>
        <?php endwhile; endif; ?>
        <!--/Posts-->
        
        </section>
        
        <aside class="sidebar">
            <?php dynamic_sidebar('sidebar-sidebar-1') ?>

            <!--Recent Post-->
            <?php
            $args = [
                'post_type' => 'post',
                'posts_per_page' => 1
            ];
            
            $wpPostsQuery = new WP_Query($args);
            ?>

            <?php if($wpPostsQuery->have_posts()) : while($wpPostsQuery->have_posts()) : $wpPostsQuery->the_post(); ?>
                <?php get_template_part('template-parts/sidebar') ?>
            <?php endwhile; endif; ?>
            <!--/Recent Post-->
        </aside>
    </div>

<?php get_footer() ?>