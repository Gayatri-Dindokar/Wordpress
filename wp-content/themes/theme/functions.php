<?php
   function load_stylesheets(){
    // wp_enqueue_style('bootstrap' , get_template_directory_uri(). '/assets/css/bootstrap.min.css' ,array(),1,'all');
    // wp_enqueue_style('bootstrap'); 
    // wp_enqueue_style( 'bootstrap', get_template_directory_uri() .'/assets/p6-custom.scss');
    // wp_enqueue_style('bootstrap'); 

    wp_register_style('stylesheet' , get_template_directory_uri(). '/assets/css/custom.css');
    wp_enqueue_style('stylesheet'); 



 }
 add_action('wp_enqueue_scripts', 'load_stylesheets');

//   function addjs(){
//    wp_register_script('jquery' , get_template_directory_uri(). '/theme/jsscript.js' ,array(),1,1,1);
//     wp_enqueue_script('jquery'); 

//    wp_register_script('bootstrap' , get_template_directory_uri(). '/assets/js/bootstrap.min.js' ,array(),1,1,1);
//    wp_enqueue_script('bootstrap'); 

//    wp_register_script('switcher' , get_template_directory_uri(). '/assets/js/jQuery.style.switcher.min.js' ,array(),1,1,1);
//    wp_enqueue_script('switcher'); 

//    wp_register_script('scheme' , get_template_directory_uri(). '/assets/js/color-scheme.js' ,array(),1,1,1);
//    wp_enqueue_script('scheme'); 

//    wp_register_script('owl' , get_template_directory_uri(). '/assets/js/owl.js' ,array(),1,1,1);
//    wp_enqueue_script('owl'); 

   
//    wp_register_script('swiper' , get_template_directory_uri(). '/assets/js/swiper.min.js' ,array(),1,1,1);
//    wp_enqueue_script('swiper'); 

//    wp_register_script('appear' , get_template_directory_uri(). '/assets/js/appear.js' ,array(),1,1,1);
//    wp_enqueue_script('appear'); 

//    wp_register_script('creote' , get_template_directory_uri(). '/assets/js/creote-extension.js' ,array(),1,1,1);
//    wp_enqueue_script('creote'); 
// }
//  add_action('wp_enqueue_scripts', 'addjs');


//  theme support
add_theme_support('menus');
add_theme_support('post-thumbnails');// add feature images
// add_theme_support( 'title-tag' );
// add_theme_support( 'custom-header' );
// add_theme_support( 'custom-logo' );
// add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );        

//register menu
register_nav_menus(
    array(
        'top-menu' => __('Top Menu','theme'),
        'side-menu' => __('Side Menu','theme'),

    )
    );
   




    // function wp_get_attachment_image_src( $attachment_id, $size = 'thumbnail', $icon = false ) {
    //     // Get a thumbnail or intermediate image if there is one.
    //     $image = image_downsize( $attachment_id, $size );
    //     if ( ! $image ) {
    //         $src = false;
    
    //         if ( $icon ) {
    //             $src = wp_mime_type_icon( $attachment_id );
    
    //             if ( $src ) {
    //                 /** This filter is documented in wp-includes/post.php */
    
    //                 $src_file               = 'http://localhost/pears/'. '/' . wp_basename( $src );
    //                 list( $width, $height ) = wp_getimagesize( $src_file );
    //             }
    //         }
    
    //         if ( $src && $width && $height ) {
    //             $image = array( $src, $width, $height, false );
    //         }
    //     }
    //     /**
    //      * Filters the attachment image source result.
    //      *
    //      * @since 4.3.0
    //      *
    //      * @param array|false  $image         {
    //      *     Array of image data, or boolean false if no image is available.
    //      *
    //      *     @type string $0 Image source URL.
    //      *     @type int    $1 Image width in pixels.
    //      *     @type int    $2 Image height in pixels.
    //      *     @type bool   $3 Whether the image is a resized image.
    //      * }
    //      * @param int          $attachment_id Image attachment ID.
    //      * @param string|int[] $size          Requested image size. Can be any registered image size name, or
    //      *                                    an array of width and height values in pixels (in that order).
    //      * @param bool         $icon          Whether the image should be treated as an icon.
    //      */
    //     return apply_filters( 'wp_get_attachment_image_src', $image, $attachment_id, $size, $icon );
    // }
    





    // add post_type_company
    // function company_post_type() {
    //     $supports = array(
    //         'title', // post title
    //         'editor', // post content
    //         'author', // post author
    //         'thumbnail', // featured images
    //         'excerpt', // post excerpt
    //         'custom-fields', // custom fields
    //         'comments', // post comments
    //         'revisions', // post revisions
    //         'post-formats', // post formats
    //     );
    //     $labels = array(
    //     'name'                => _x( 'company', 'Post Type General Name', 'acsweb' ),
    //     'singular_name'       => _x( 'company', 'Post Type Singular Name', 'acsweb' ),
    //     'menu_name'           => __( 'company', 'acsweb' ),
    //     'parent_item_colon'   => __( 'Parent company', 'acsweb' ),
    //     'all_items'           => __( 'All company', 'acsweb' ),
    //     'view_item'           => __( 'View company', 'acsweb' ),
    //     'add_new_item'        => __( 'Add New company', 'acsweb' ),
    //     'add_new'             => __( 'Add New', 'acsweb' ),
    //     'edit_item'           => __( 'Edit company', 'acsweb' ),
    //     'update_item'         => __( 'Update company', 'acsweb' ),
    //     'search_items'        => __( 'Search company', 'acsweb' ),
    //     'not_found'           => __( 'Not Found', 'acsweb' ),
    //     'not_found_in_trash'  => __( 'Not found in Trash', 'acsweb' ),
    //     );
    //     $args = array(
    //         'supports' => $supports,
    //     'label'               => __( 'company', 'acsweb' ),
    //     'description'         => __( 'company news and reviews', 'acsweb' ),
    //     'labels'              => $labels,
    //     'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', ),
    //     'taxonomies'          => array( 'genres' ), 
    //     'hierarchical'        => false,
    //     'public'              => true,
    //     'show_ui'             => true,
    //     'show_in_menu'        => true,
    //     'show_in_nav_menus'   => true,
    //     'show_in_admin_bar'   => true,
        
    //     'menu_position'       => 5,
    //     'menu_icon'           => 'dashicons-businessman
    //     ',
    //     'can_export'          => true,
    //     'has_archive'         => true,
    //     'exclude_from_search' => false,
    //     'publicly_queryable'  => true,
    //     'capability_type'     => 'page',
    //     'taxonomies'          => array( 'category' ),
    //     );
    //     register_post_type( 'company', $args );
      
      
  
    //     }
    //     add_action( 'init', 'company_post_type' );








       
        // function wpcodex_add_custom_fields_support_for_company() {
        //     add_post_type_support( 'company', 'custom-fields' );
        // }
        // add_action( 'init', 'wpcodex_add_custom_fields_support_for_company', 11 );




//add post_type_News
// add_action('init', 'create_custom_post_type');
 
// function company_custom_post_type() {
//     $supports = array(
//         'title', // post title
//         'editor', // post content
//         'author', // post author
//         'thumbnail', // featured images
//         'excerpt', // post excerpt
//         'custom-fields', // custom fields
//         'comments', // post comments
//         'revisions', // post revisions
//         'post-formats', // post formats
//     );
 
//     $labels = array(
//         'name' => _x('company', 'plural'),
//         'singular_name' => _x('company', 'singular'),
//         'menu_name' => _x('company', 'admin menu'),
//         'name_admin_bar' => _x('company', 'admin bar'),
//         'add_new' => _x('Add New', 'add new'),
//         'add_new_item' => __('Add New company'),
//         'new_item' => __('New company'),
//         'edit_item' => __('Edit company'),
//         'view_item' => __('View company'),
//         'all_items' => __('All company'),
//         'search_items' => __('Search company'),
//         'not_found' => __('No company found.'),
//     );
 
//     $args = array(
//         'supports' => $supports,
//         'labels' => $labels,
//         'description' => 'Holds our company and specific data',
//         'public' => true,
//         'taxonomies' => array( 'category', 'post_tag' ),
//         'show_ui' => true,
//         'show_in_menu' => true,
//         'show_in_nav_menus' => true,
//         'show_in_admin_bar' => true,
//         'can_export' => true,
//         'capability_type' => 'post',
//         'show_in_rest' => true,
//         'query_var' => true,
//         'rewrite' => array('slug' => 'company'),
//         'has_archive' => true,
//         'hierarchical' => false,
//         'menu_position' => 6,
//         'menu_icon' => 'dashicons-megaphone',
        
//     );
 
//     register_post_type('company', $args); // Register Post type
// }







add_action('init', 'create_custom_post_type');
 
function create_custom_post_type() {
    $supports = array(
        'title', // post title
        'editor', // post content
        'author', // post author
        'thumbnail', // featured images
        'excerpt', // post excerpt
        'custom-fields', // custom fields
        'comments', // post comments
        'revisions', // post revisions
        'post-formats', // post formats
    );
 
    $labels = array(
        'name' => _x('company', 'plural'),
        'singular_name' => _x('company', 'singular'),
        'menu_name' => _x('company', 'admin menu'),
        'name_admin_bar' => _x('company', 'admin bar'),
        'add_new' => _x('Add New', 'add new'),
        'add_new_item' => __('Add New company'),
        'new_item' => __('New company'),
        'edit_item' => __('Edit company'),
        'view_item' => __('View company'),
        'all_items' => __('All company'),
        'search_items' => __('Search company'),
        'not_found' => __('No company found.'),
    );
 
    $args = array(
        'supports' => $supports,
        'labels' => $labels,
        'description' => 'Holds our company and specific data',
        'public' => true,
        'taxonomies' => array( 'category', 'post_tag' ),
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'can_export' => true,
        'capability_type' => 'post',
        'show_in_rest' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'company'),
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => 6,
        'menu_icon' => 'dashicons-businessman',
    );
 
    register_post_type('company', $args); // Register Post type
}



add_action('init', 'add_custom_fields_support');

function add_custom_fields_support() {
    add_post_type_support('post', 'custom-fields');
}



























































// Register Custom Post Type
// Register Custom Post Type
function custom_post_type() {
    $labels = array(
        'name'                  => _x( 'Custom Posts', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Custom Post', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Custom Posts', 'text_domain' ),
        'archives'              => __( 'Item Archives', 'text_domain' ),
        'attributes'            => __( 'Item Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
        'all_items'             => __( 'All Items', 'text_domain' ),
        'add_new_item'          => __( 'Add New Item', 'text_domain' ),
        'add_new'               => __( 'Add New', 'text_domain' ),
        'new_item'              => __( 'New Item', 'text_domain' ),
        'edit_item'             => __( 'Edit Item', 'text_domain' ),
        'update_item'           => __( 'Update Item', 'text_domain' ),
        'view_item'             => __( 'View Item', 'text_domain' ),
        'view_items'            => __( 'View Items', 'text_domain' ),
        'search_items'          => __( 'Search Item', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
        'items_list'            => __( 'Items list', 'text_domain' ),
        'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'Custom Post', 'text_domain' ),
        'description'           => __( 'Custom Post Type Description', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-format-status',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );
    register_post_type( 'custom_post', $args );
}
add_action( 'init', 'custom_post_type', 0 );

// Add meta box


add_action( 'add_meta_boxes', 'meta_box' );
  function meta_box() {
	  add_meta_box( 
		  'meta_box',
		  __( 'Starting', 'myplugin_textdomain' ),
		  'meta_box_content',
		  'company',
		  'normal',
		  'low'
	  );
  }


// Callback function to display the meta box content

function meta_box_content( $post ) {
    wp_nonce_field( plugin_basename( __FILE__ ), 'meta_box_content_nonce' );
    
        echo '<label style="display:block" for="address_one">Address line 1</label>';
        echo '<input type="text" style="display:block" id="address_one" name="address_one" value="' . get_post_meta( $post->ID, 'address_one', true )  . '"/>';
        
        echo '<label style="display:block" for="address_two">Address line 2</label>';
        echo '<input type="text" style="display:block" id="address_two" name="address_two" value="' . get_post_meta( $post->ID, 'address_two', true )  . '"/>';
        echo '<label style="display:block" for="state">State : </label>';
        echo '<input type="text" id="state" name="state" value="' . get_post_meta( $post->ID, 'state', true ) . '"/>';
        
        echo '<label style="display:block" for="pin_code">Pin-Code</label>';
        echo '<input type="text" id="pin_code" name="pin_code" value="' . get_post_meta( $post->ID, 'pin_code', true ) . '"/>'; 




        $dropdown_field = get_post_meta( $post->ID, 'dropdown_field', true );

        echo '<label for="field_type" style="font-size:17px; font-weight: bold;">Country:</label>';
        echo '<select name="field_type" id="field_type" style="width: 70%;">';
        echo '<option value="India" ' . selected( $dropdown_field, 'India') . '>India</option>';
        echo '<option value="China" ' . selected( $dropdown_field, 'China') . '>China</option>';
       
        echo '</select>';



        
        if ( 'India' === $dropdown_field ) {
            echo '<label for="india">Text Field:</label>';
            echo '<input type="text" name="india" id="india" value="' .  get_post_meta( $post->ID, 'india', true ) . '"><br>';
        } elseif ( 'China' === $dropdown_field ) {
            echo '<label for="number_field">Number Field:</label>';
            echo '<input type="number" name="number_field" id="number_field" value="' . esc_attr( $number_field ) . '"><br>';
        } elseif ( 'radio' === $dropdown_field ) {
            echo '<label>Radio Field:</label><br>';
            echo '<input type="radio" name="radio_field" value="option1" ' . checked( $radio_field, 'option1', false ) . '> Option 1<br>';
            echo '<input type="radio" name="radio_field" value="option2" ' . checked( $radio_field, 'option2', false ) . '> Option 2<br>';
        } elseif ( 'checkbox' === $dropdown_field ) {
            echo '<label>Checkbox Field:</label><br>';
            echo '<input type="checkbox" name="checkbox_field" value="checkbox_value" ' . checked( $checkbox_field, 'checkbox_value', false ) . '><br>';
        } elseif ( 'image' === $dropdown_field ) {
            echo '<label for="image_field">Image Field:</label><br>';
            echo '<input type="text" name="image_field" id="image_field" class="custom_media_url" value="' . esc_attr( $image_field ) . '" />';
            echo '<input type="button" class="button custom_media_button" id="custom_media_button" value="Upload Image" /><br>';
            if ( $image_field ) {
                echo '<img src="' . esc_url( $image_field ) . '" style="max-width: 300px; height: auto;" />';
            }
        }



        
        
  } 

  




  add_action( 'save_post', 'meta_box_save' );
  function meta_box_save( $post_id ) {	
  
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
	return;
  
	if ( !wp_verify_nonce( $_POST['meta_box_content_nonce'], plugin_basename( __FILE__ ) ) )
	return;
  
	if ( 'page' == $_POST['season'] ) {
	  if ( !current_user_can( 'edit_page', $post_id ) )
	  return;
	} else {
	  if ( !current_user_can( 'edit_post', $post_id ) )
	  return;
	}

	$fields = [
        'address_one',
        'address_two',
        'state',
	   'pin_code',
    	];
	foreach ( $fields as $field ) {
        if ( array_key_exists( $field, $_POST ) ) {
            update_post_meta( $post_id, $field, sanitize_text_field( $_POST[$field] ) );
        	}
	}
}










?>




<script>
document.addEventListener("DOMContentLoaded", function() {
    var fieldDropdown = document.getElementById("field_type");
    var fieldContainer = document.getElementById("field_container");

    fieldDropdown.addEventListener("change", function() {
        var fieldType = this.value;
        fieldContainer.innerHTML = '';

        if (fieldType === 'text') {
            fieldContainer.innerHTML = '<label for="text_field">Text Field:</label><input type="text" name="text_field" id="text_field" value="<?php echo esc_attr( $text_field ); ?>"><br>';
        } else if (fieldType === 'number') {
            fieldContainer.innerHTML = '<label for="number_field">Number Field:</label><input type="number" name="number_field" id="number_field" value="<?php echo esc_attr( $number_field ); ?>"><br>';
        } else if (fieldType === 'radio') {
            fieldContainer.innerHTML = '<label>Radio Field:</label><br><input type="radio" name="radio_field" value="option1" <?php checked( $radio_field, 'option1' ); ?>> Option 1<br><input type="radio" name="radio_field" value="option2" <?php checked( $radio_field, 'option2' ); ?>> Option 2<br>';
        } else if (fieldType === 'checkbox') {
            fieldContainer.innerHTML = '<label>Checkbox Field:</label><br><input type="checkbox" name="checkbox_field" value="checkbox_value" <?php checked( $checkbox_field, 'checkbox_value' ); ?>><br>';
        } else if (fieldType === 'image') {
            var imageHtml = '<label for="image_field">Image Field:</label><br><input type="text" name="image_field" id="image_field" class="custom_media_url" value="<?php echo esc_attr( $image_field ); ?>" /><input type="button" class="button custom_media_button" id="custom_media_button" value="Upload Image" /><br>';
            if ("<?php echo esc_attr( $image_field ); ?>") {
                imageHtml += '<img src="<?php echo esc_url( $image_field ); ?>" style="max-width: 300px; height: auto;" />';
            }
            fieldContainer.innerHTML = imageHtml;
        }
    });
});
</script>









 
