
<?php get_header();?>
<?php get_sidebar();?>
<?php   
        global $post;
        $pageName = $post->post_name;
        if (locate_template( array( 'template-parts/content-' . $pageName . '.php' ) ) != '') {
            // yep, load the page template
            get_template_part('template-parts/content', $pageName);
        } else {
            // nope, load the default
            get_template_part( 'template-parts/content', 'page' );
        }
    ?>