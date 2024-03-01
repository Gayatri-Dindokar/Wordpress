<?php get_header();?>
<ul class="post-meta">
    <li><span class="post-meta-key">name:</span> <?php echo esc_html( get_post_meta( get_the_ID(), 'name', true ) ); ?></li>
    <!-- <li><span class="post-meta-key">Image:</span> <?php echo esc_html( get_post_meta( get_the_ID(), 'Image', true ) ); ?></li> -->
    <li><span class="post-meta-key">registration number:</span> <?php echo esc_html( get_post_meta( get_the_ID(), 'registration number', true ) ); ?></li>
  <?php

  ?>
</ul>

<?php get_footer();?>
