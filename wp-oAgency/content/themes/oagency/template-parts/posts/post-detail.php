<article class="single-blogpost">      
    <!--title + author-->
    <div class="single-blogpost__header">
        <h2 class="single-blogpost__header__title"><?php the_title() ?></h2>
        <p class="single-blogpost__header__author"> écrit par <?php the_author() ?></p>
    </div> 
    <!--/title + author-->

    <img class="single-blogpost__img" src="<?php the_post_thumbnail_url() ?>" alt="...">

    <!--text content-->
    <div class="single-blogposts__post__excerpt"> 
        <span class="span-highlighter"> Lorem ipsum dolor sit amet consectetur adipisicing elit. </span>  
        <?php the_content() ?> 
    </div>
    <!--/text content-->

    <!--nb lectures-->
    <div class="single-blogpost-reading">
        <i class="single-blogpost-reading__icon fa fa-eye" aria-hidden="true"> 76 </i>
        <p class="single-blogpost-reading__text">lecture(s)</p>
    </div>
    <!--/nb lectures-->
</article>