<?php
$args = array('post_type' => 'company', 'order' => "ASC");
$query  = new WP_Query($args);
if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post();
   ?>
        <?php
        // $post = get_the_id();
       // $bauthor = get_post_meta($post->ID, 'name', true);

        $bprice = get_post_meta($post->ID, 'registration_number', true);
        //  $bpublishdate = get_post_meta($post->ID, 'publication_date', true);
      ?>

         <div class="container" style=" width:50%; background:#FAA0A0; padding:40px;">
            <div class="logo" style=" ">
                <?php echo get_the_post_thumbnail(null, array(190, 150)); ?>
            </div>
            <div class="details" style="margin-inline: auto; margin-top:20px;">
                <div class="a"> <span style="font-size:17px; font-weight: bold;">Company Name </span> : <?php echo get_the_title() ?></div>
             <div class="b"><p> <span style="font-size:17px; font-weight: bold;">Registration Number </span> : <?php echo $bprice; ?> </p></div>
            <?php  if(get_the_content()){?>
                <div class="c" style="height:200px;background:	#FFCCB; padding:5px;"> <span style="font-size:17px; font-weight: bold;">Description </span>   :   <?php echo get_the_content(); ?></div>
             <?php } ?>
        </div>
        <?php if(get_post_meta($post->ID, 'address', true)) { ?>
            <div class="d" style=" padding:5px;"><span style="font-size:17px; font-weight: bold;">Address </span> : <?php echo get_post_meta($post->ID, 'address', true); ?></div>
        <?php }  ?>
        <?php if(get_post_meta($post->ID, 'contact_no', true)) { ?>
         <div class="d" style=" padding:5px;"><span style="font-size:17px; font-weight: bold;">contactNo </span> : <?php echo get_post_meta($post->ID, 'contact_no', true); ?></div>
         <?php }  ?>

         <?php if(get_post_meta($post->ID, 'gst_no', true)) { ?>
         <div class="d" style=" padding:5px;"><span style="font-size:17px; font-weight: bold;">Gst-No </span> : <?php echo get_post_meta($post->ID, 'gst_no', true); ?></div>
         <?php }  ?>
    </div>
    <br>
<?php
    endwhile;
  
endif;



?>
