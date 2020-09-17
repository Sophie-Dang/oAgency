<?php get_header() ?> 

    <!--Carousel-->
    <?php if(get_theme_mod('oagency_carousel_active')) : ?>
    <section id="carousel">

      <!--slide-->
      <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel" data-interval="<?= get_theme_mod('oagency_carousel_interval') ?>">
        <div class="carousel-inner">

            <!--1st carousel post-->
            <?php
                $pageId = get_theme_mod('oagency_carousel_slide1');
                
                $args = [
                  'post_type' => 'page',
                  'page_id' => $pageId,
                ];
                
                $wpFirstPageCarouselQuery = new WP_Query($args);
            ?>
            <?php if($wpFirstPageCarouselQuery->have_posts()) : while($wpFirstPageCarouselQuery->have_posts()) : $wpFirstPageCarouselQuery->the_post(); ?>
                <?php get_template_part('template-parts/carousel/carousel-first-page') ?>
            <?php endwhile; endif; ?>
            <!--/1st carousel post-->

            <!--all carousel posts-->
            <!--slide 1-->
            <?php
                $pageId_2 = get_theme_mod('oagency_carousel_slide2');

                $args = [
                  'post_type' => 'page',
                  'page_id' => $pageId_2,
                ];
              
              $wpPagesCarouselQuery = new WP_Query($args);
            ?>
            <?php if($wpPagesCarouselQuery->have_posts()) : while($wpPagesCarouselQuery->have_posts()) : $wpPagesCarouselQuery->the_post(); ?>
                <?php get_template_part('template-parts/carousel/carousel-pages') ?>
            <?php endwhile; endif; ?>
            <!--/slide 1-->

            <!--slide 2-->
            <?php
                $pageId_3 = get_theme_mod('oagency_carousel_slide3');

                $args = [
                  'post_type' => 'page',
                  'page_id' => $pageId_3,
                ];
              
              $wpPagesCarouselQuery = new WP_Query($args);
            ?>
            <?php if($wpPagesCarouselQuery->have_posts()) : while($wpPagesCarouselQuery->have_posts()) : $wpPagesCarouselQuery->the_post(); ?>
                <?php get_template_part('template-parts/carousel/carousel-pages') ?>
            <?php endwhile; endif; ?>
            <!--/slide 2-->
            <!--/all carousel posts-->
        </div>
        <!--/slide-->

        <!--next - Previous-->
              <?php get_template_part('template-parts/carousel/carousel-button') ?>
        <!--/next - Previous-->
        </div>
    </section>
    <?php endif; ?>
    <!--/Carousel-->

   
    <!--News-->
    <?php if(get_theme_mod('oagency_posts_active')) : ?>
    <section id="posts">

      <!--intro-->
      <?php get_template_part('template-parts/posts/posts-intro') ?>
      <!--/intro-->

      <!--all posts-->
      <div class="posts">

        <?php 
          $args = [
            'post_type' => 'post',
            'posts_per_page' => get_theme_mod('oagency_posts_number'),
            'category_name' => get_theme_mod('oagency_posts_category')
          ];

          $wpPostsQuery = new WP_Query($args);
        ?>
        
        <?php if($wpPostsQuery->have_posts()) : while($wpPostsQuery->have_posts()) : $wpPostsQuery->the_post(); ?>
            <?php get_template_part('template-parts/posts/post-excerpt') ?>
        <?php endwhile; endif; ?>
      </div>
      <!--/all posts-->
    </section>
    <?php endif; ?>
    <!--/News-->

    <!--Post highlight-->
    <?php if(get_theme_mod('oagency_callToAction_active')) : ?>
      <?php get_template_part('template-parts/call-to-action/call-to-action') ?>
    <?php endif; ?>
    <!--/Post highlight-->

<?php get_footer() ?>
