<article class="single-blogpost">      
    <!--title + author-->
    <div class="single-blogpost__header">
        <h2 class="single-blogpost__header__title"><?php the_title() ?></h2>
    </div> 
    <!--/title + author-->

    <img class="single-blogpost__img" src="<?php the_post_thumbnail_url() ?>" alt="...">

    <!--text content-->
    <div class="single-blogposts__post__excerpt"> 
        <?php the_content() ?> 
    </div>
    <!--/text content-->

</article>