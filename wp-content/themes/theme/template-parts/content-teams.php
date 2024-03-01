<div class="container-fluid">
<?php get_header(); ?>
</div>


<div class="container">

<article class="content">
    <section class="content-header rounded">
        <div class="content-header-title">
            <h1 class="title">
                Team
            </h1>
        </div>

        <div class="page-actions mt-2">

        </div>
    </section>

    <section id="main" class="content-body">


        <div class="row m-0">
            <div class="col-md-12">
                <div class="user-right-container">
                    <div class="row users-list pb-3">

                        <?php
                       $args = array( 'post_type' => 'team', 'order' => "ASC");
                        $query  = new WP_Query($args);
                        if ($query->have_posts()) :
                            while ($query->have_posts()) : $query->the_post();
                        ?>
                                <div class="col-md-3 col-6">
                                 <div class="user-index-detail">
                                 <a href="<?php echo get_permalink(); ?>" class="text-light">
                                 <?php
                                 $image_attributes_logo = wp_get_attachment_image_src(get_field('image'))[0];
                                 ?>
                                        <img  src="<?php echo $image_attributes_logo; ?>"alt="... "class="users-img " >
                                        
                                        <div class="overlay  special-outline-male">
                                            <div class="text px-2">
                                                <span class="user-name text-center"><?php echo get_field('name') ?></span>
                                            </div>
                                            <span class="emp-id fw-bold rounded-circle"><?php echo get_field('id') ?></span>
                                            
                                            <span class="login-status bg-danger"></span>
                                            
                                            
                                        </div>
                                    </a>
                                    </div>
                                </div>
                        <?php
                            endwhile;
                        endif;
                        ?>


                      
                     
                      
           
                       
                        
                        
                        
                       

            <form class="d-none" method="post" id="delete-form">
                <input type="hidden" name="token" value="8cdb5c94599c740ef8e545.VaE5XvmZUq1QEkP4_danphq4ELz3vAPkaOjQ1rOe0l4.Y_NtCJf0C-hkWDa1q4HywyvWRMiuyXaKHICFgNXr5W88kQwSydwV9TN6IA">
            </form>

            <div id="modal-delete" class="modal fade" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <h4>Do you really want to delete this item?</h4>
                            <p>There is no undo for this operation.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" data-bs-dismiss="modal" class="btn btn-secondary">
                                <span class="btn-label">Cancel</span>
                            </button>

                            <button type="button" data-bs-dismiss="modal" class="btn btn-danger" id="modal-delete-button" form="delete-form">
                                <span class="btn-label">Delete</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>


            <div id="modal-filters" class="modal fade" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" data-bs-dismiss="modal" class="btn btn-sm btn-secondary" id="modal-clear-button" formtarget="_self">
                                <i class="fa fa-close"></i> Clear
                            </button>
                            <h5 class="modal-title">
                                <i class="fa fa-filter fa-fw"></i> Filters
                            </h5>
                            <button type="button" data-bs-dismiss="modal" class="btn btn-sm btn-primary" id="modal-apply-button" formtarget="_self">
                                <i class="fa fa-check"></i> Apply
                            </button>
                        </div>
                        <div class="modal-body p-0">
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>

</article>
</div>

<div class="a">

</div>



