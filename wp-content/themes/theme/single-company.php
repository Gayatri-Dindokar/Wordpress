
<?php get_header();?>
<?php echo get_post_meta( $post->ID, 'address_one', true );?>
<?php  echo get_post_meta( $post->ID, 'address_two', true );?>
<?php echo get_post_meta( $post->ID, 'state', true );?>
<?php echo  get_post_meta( $post->ID, 'pin_code', true );?>
<?php echo   get_post_meta( $post->ID, 'country', true );?>
<?php echo  get_post_meta( $post->ID, 'dropdown_field', true );?>
<?php get_footer();?>