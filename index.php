<?php get_header();?>

<?php

//loops
    if(have_posts()):
        while(have_posts()):
            the_post();

            // get blog post title
            the_title();

            //get blog content
            the_content();
        endwhile;
    endif;



?>

<?php get_sidebar();?>

<?php get_footer();?>