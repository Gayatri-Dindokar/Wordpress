<div class="container "><div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%;float: left;">
  <h3 class="w3-bar-item">Menu</h3>
 <div class="menu" style="display:grid;">
 <?php 
        wp_nav_menu(
            array(
                'theme_location' => 'side-menu',
                'menu'=>'navbarSupportedContent',
                'menu_class'=> 'navbar-nav mr-auto',
            )
        )
        ?>
 </div>
</div>
