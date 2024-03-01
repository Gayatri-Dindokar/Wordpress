<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <title>Creative Workforce Solutions</title>
  <!-- Fav Icon -->
  <link rel="icon" href="<?php bloginfo('template_directory'); ?>/assets/images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/custom.css">

  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Spartan%3A400%2C500%2C600%2C700%2C800%2C900%7CInter%3A300%2C400%2C500%2C600%2C700%2C800%2C900&subset=latin%2Clatin-ext' type='text/css' media='all' />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css' type='text/css' media='all' />
  <!----woocommerce---->
  <?php // wp_head(); 
  ?>
</head>

<body class="home theme-creote page-home-default-one">
<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- <a class="navbar-brand" href="#"> <span class="logo-custom text-start ps-2"><img src="https://pears-live.s3.ap-south-1.amazonaws.com/resized/license_logo_thumb/1/logo-pears.png" class="img-fluid" /></span></a> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <?php 
        wp_nav_menu(
            array(
                'theme_location' => 'top-menu',
                'menu'=>'navbarSupportedContent',
                'menu_class'=> 'navbar-nav mr-auto',
            )
        )
        ?>
  </div>
</nav>
</div>

  <!----header-end---->