<div class="container-fluid">
    <?php get_header(); ?>
</div>

<div class="container">


    <div class="content-wrapper">
        <article class="content">

            <section id="main" class="content-body">
                <div class="row m-0 mt-4 position-relative user-disable">
                    <div class="col-md-8 px-md-0 pb-3">
                        <div class="user-right-container">
                            <div class="row m-0">
                                <div class="col-md-12 bg-white rounded box-shadow">
                                    <div class="row">
                                        <div class="col-md-5 p-0 position-relative">
                                            <?php
                                            $image_attributes_logo = wp_get_attachment_image_src(get_field('image'), 'medium')[0];
                                            ?>

                                            <img src="<?php echo $image_attributes_logo; ?>" alt="... " class="users-img user-detail-img d-block  mx-auto mt-md-0 mt-2 rounded-start profile-img  w-100">

                                            <div class="social-link position-absolute w-100 bottom-0 p-2 rounded-start">
                                                <a href="mailto:Digambar@pixel6.co" title="Digambar@pixel6.co"><i class="fa-solid fa-envelope border rounded-circle p-1 me-2 border-light text-light"></i></a>
                                                <a href="tel:9049316979" title="9049316979"><i class="fa-solid fa-phone border rounded-circle p-1 me-2 border-light text-light"></i></a>
                                            </div>
                                        </div>
                                        <div class="col-md-7 user-detail position-relative px-4 user-detail-male-bg1 ">
                                            <h2 class="text-danger fw-semibold mt-4 mb-3"><?php echo get_field('name') ?></h2>

                                            <div class="designation row mx-0 mb-3">
                                                <div class="empid-user col-2 py-2 rounded-start text-center user-detail-male-bg2  ">
                                                    <h5 class="fw-semibold mb-0 text-dark"><?php echo get_field('id') ?></h5>
                                                </div>

                                                <div class="emp-des-user col-10 py-2 rounded-end  user-detail-male-bg3">
                                                    <h5 class="fw-semibold mb-0 text-muted text-start"><?php echo get_field('designation') ?></h5>
                                                </div>
                                            </div>
                                            <h6 class="emp-dis-user mx-0 pe-2 text-muted mb-5 font-size-14 lh-base fst-italic"><?php echo get_field('description') ?></h6>
                                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                                <div class="carousel-inner">
                                                    <?php   foreach (get_field("awards") as $award) {
                                                        ?>
                                                    <div class="carousel-item">
                                                        <div class="d-flex justify-content-center justify-content-md-start  mb-2">
                                                            <img src="https://pears.pixel6.co/images/trophy.svg" class="">
                                                            <div class="award-info ps-2 align-self-center">
                                                                <p class="font-size-14 fw-bold"><?php  echo $award['award']; ?></p>
                                                                <p class="font-size-12 text-muted pt-1">2017</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php } ?>
                                                   
                                                    <div class="carousel-item active">
                                                        <div class="d-flex justify-content-center justify-content-md-start  mb-2">
                                                            <img src="https://pears.pixel6.co/images/trophy.svg" class="">
                                                            <div class="award-info ps-2 align-self-center">
                                                                <p class="font-size-14 fw-bold"><?php echo $award['award']; ?></p>
                                                                <p class="font-size-12 text-muted pt-1">2019</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="carousel-control-next border-0" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                                    <span class="text-danger">»</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-12 mt-3 p-0">
                                    <div class="progress-section row bg-white p-2 m-0 rounded box-shadow">
                                        <?php
                                        foreach (get_field("skills") as $skill) {
                                        ?>

                                            <div class="col d-flex align-items-center py-3">
                                                <div class="progress mx-auto" data-value="<?php echo $skill['rating']; ?>">
                                                    <span class="progress-left">
                                                        <span class="progress-bar border-warning"></span>
                                                    </span>
                                                    <span class="progress-right">
                                                        <span class="progress-bar border-warning"></span>
                                                    </span>
                                                    <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                                                        <span class="text-muted"><?php echo ($skill['skill']);  ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>



                                    </div>
                                </div>
                                <div class="col-md-12 mt-3 bg-white rounded box-shadow">
                                    <h6 class="mx-2 my-4 fw-semibold">Work Profile</h6>
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th>Sr. No.</th>
                                                <th>Project</th>
                                                <th>Client</th>
                                                <th>Status</th>
                                            </tr>
                                            <?php
                                            // Check if rows exist
                                            if (have_rows('projects')) :
                                                // Loop through rows
                                                while (have_rows('projects')) : the_row();
                                                    // Load sub field values
                                                    $srno = get_sub_field('srno');
                                                    $project = get_sub_field('project');
                                                    $client = get_sub_field('client');
                                                    $status = get_sub_field('status');
                                            ?>
                                                    <tr>
                                                        <td><?php echo $srno; ?></td>
                                                        <td><?php echo $project; ?></td>
                                                        <td><?php echo $client; ?></td>
                                                        <td class="text-muted"><?php echo $status; ?></td>
                                                    </tr>
                                                <?php
                                                // End loop
                                                endwhile;
                                            // If rows don’t exist
                                            else :
                                                ?>
                                                <tr>
                                                    <td colspan="4">No projects found.</td>
                                                </tr>
                                            <?php
                                            // End if
                                            endif;
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ps-md-0 pe-2">
                        <div class="row m-0">
                            <div class="col-12 mb-3 bg-white p-3 rounded box-shadow">
                                <div class="company-record row text-center ">
                                    <div class="col-5 px-2 py-3">
                                        <?php
                                            $date = get_field('days-at-p6');
                                            $currentDate = date ('d-m-Y');
                                            $startDate = date_create($date);
                                            $endDate   = date_create($currentDate);
                                            $diff = date_diff($startDate, $endDate);
                                            $days = (int)$diff->format("%a");                                 
                                        
                                        ?>
                                        <p class="record-count mb-2"><?php echo $days; ?></p>
                                        <p class="record-label">Days@ Pixel6 Web Studio Pvt. Ltd.</p>
                                    </div>
                                    <div class="col-2 vertical-hr">
                                        <div class="vr vr-divider"></div>
                                    </div>
                                    <div class="col-5 px-2 py-3">
                                        <p class="record-count mb-2"><?php echo get_field('project-count'); ?></p>
                                        <p class="record-label">Projects</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 bg-white mb-3 p-3 rounded box-shadow">
                                <table class="table m-0">
                                    <tbody>
                                        <tr>
                                            <th class="text-muted">Date of Birth</th>
                                            <td class="text-dark"><?php echo get_field('date_of_birth'); ?></td>
                                        </tr>
                                        <tr>
                                            <th class="text-muted">Blood group</th>
                                            <td class="text-dark"><?php echo get_field('blood-group'); ?></td>
                                        </tr>
                                        <tr class="transparent-border">
                                            <th class="text-muted">Contact Number </th>
                                            <td class="text-dark"><a href="tel:9049316979"><?php echo get_field('contact-no'); ?></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-12 bg-white p-3 mb-3 rounded box-shadow">
                                <h6 class="text-muted fw-semibold mb-3">Reporting Manager</h6>
                                <?php
                                // Assuming you have the reporting manager's WP_Post object
                                // $reporting_manager = get_field('reporting-manager');

                                // if ($reporting_manager) {
                                //     $manager_name = $reporting_manager->post_title;
                                //     $manager_image = get_the_post_thumbnail_url($reporting_manager->ID, 'medium'); // Change 'medium' to your desired image size

                                //     if ($manager_image) {
                                //         echo '<div class="d-flex">';
                                //         echo '<img src="' . $manager_image . '" alt="' . $manager_name . '" class="rounded-circle align-self-center manager-img">';
                                //         echo '<h6 class="align-self-center ms-3 mb-0 text-danger font-size-14">' . $manager_name . '</h6>';
                                //         echo '</div>';
                                //     } else {
                                //         // Handle case where image is not available
                                //         echo '<div class="d-flex">';
                                //         echo '<h6 class="align-self-center ms-3 mb-0 text-danger font-size-14">' . $manager_name . '</h6>';
                                //         echo '</div>';
                                //     }
                                // }
                                // 
                                ?>

                                <a href="<?php echo get_permalink(get_field('reporting-manager'));?>">
                                    <div class="d-flex">
                                    
                                        <img src="<?php echo wp_get_attachment_image_src(get_post_field('image',get_field('reporting-manager')))[0] ?>" alt="" class="rounded-circle align-self-center manager-img 
">
                                        <h6 class="align-self-center ms-3 mb-0 text-danger font-size-14"><?php echo get_post_field('name',get_field('reporting-manager')); ?></h6>

                                        <?php //print_r(get_field('reporting-manager')) 
                                        ?>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-12 bg-white p-3 rounded box-shadow">
                                <h6 class="text-muted fw-semibold mb-3">Certifications</h6>
                                <div class="d-flex align-items-center pb-3">
                                    <img src="https://pears.pixel6.co/images/certificate.svg" class="">
                                    <div class="px-3">
                                        <h6 class="font-size-14 mb-0">Java Micro-Services</h6>
                                        <p class="text-muted">2023</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

        </article>
    </div>
    </section>
</div>


<?php get_footer(); ?>