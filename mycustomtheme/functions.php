
 <?php
 /*add menu option in dashboard**/
 register_nav_menus(
       array('primary-menu'=>'Top Menu')
);

/*featured image section*/
 add_theme_support('post-thumbnails');
function theme_name_scripts() {
    wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', array(), '5.1.3', 'all' );
    wp_enqueue_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js', array( 'jquery' ), '5.1.3', true );
}
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );



/*add header in appreance */
add_theme_support('custom-header');

/*create custome shortcode to show something*/
function fname(){
    echo '
<form action="submit.php" method="post">
        Name: <input type="text" name="name">
        Name: <input type="text" name="name">
        <input type="submit">
      </form>';
}
add_shortcode("customcode","fname");

/*sidebar widgte */
function custom_theme_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Custom Sidebar', 'custom_theme' ),
        'id' => 'custom_sidebar',
        'description' => __( 'Widgets in this area will be shown in the sidebar.', 'custom_theme' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ) );
}
add_action( 'widgets_init', 'custom_theme_widgets_init' );


/// Register Custom Column for Service Post Type
function custom_taxonomy_order_column_header($columns) {
      $columns['rcnumber'] = 'RC Number';
       $columns['num'] = 'Number';
    $columns['order'] = 'Order';
    $columns['title'] = 'Heading';
     // Add the custom column for order number
       
       
      

    return $columns;
}

add_filter('manage_service_posts_columns', 'custom_taxonomy_order_column_header'); // Change 'service' to your custom post type

// Display Data in Custom Column
function custom_taxonomy_order_column_content($column, $post_id) {

    if ($column === 'rcnumber') {
        $order_rcnumber = get_post_meta($post_id, 'rcnumber', true); // 'order_number' is the meta key for the order number
        echo $order_rcnumber ? $order_rcnumber : 'N/A'; // Display the order number or 'N/A' if not available
    }

    if ($column === 'num') {
        $order_num = get_post_meta($post_id, 'num', true); // 'order_number' is the meta key for the order number
        echo $order_num ? $order_num : 'N/A'; // Display the order number or 'N/A' if not available
    }

    if ($column === 'order') {
        $order_number = get_post_meta($post_id, 'order', true); // 'order_number' is the meta key for the order number
        echo $order_number ? $order_number : 'N/A'; // Display the order number or 'N/A' if not available
    }
}


add_action('manage_service_posts_custom_column', 'custom_taxonomy_order_column_content', 10, 2); // Change 'service' to your custom post type

// Make the Column Sortable
function custom_taxonomy_order_column_sortable($columns) {
    $columns['order'] = 'order'; // Make the custom column sortable by order number
    return $columns;
}
function custom_taxonomy_num_column_sortable($columns) {
    $columns['num'] = 'num'; // Make the custom column sortable by order number
    return $columns;
}
function custom_taxonomy_RCnumber_column_sortable($columns) {
    $columns['rcnumber'] = 'rcnumber'; // Make the custom column sortable by order number
    return $columns;
}
add_filter('manage_edit-service_sortable_columns', 'custom_taxonomy_num_column_sortable'); 
add_filter('manage_edit-service_sortable_columns', 'custom_taxonomy_rcnumber_column_sortable'); 
add_filter('manage_edit-service_sortable_columns', 'custom_taxonomy_order_column_sortable'); // Change 'service' to your custom post type

// Adjust Query for Sorting
function custom_order_column_orderby($query) {
    if (!is_admin() || !$query->is_main_query()) {
        return;
    }


    if ('order' === $query->get('orderby')) {
        $query->set('orderby', 'meta_value_num');
        $query->set('meta_key', 'order');
    }
}
add_action('pre_get_posts', 'custom_order_column_orderby');

/**form code**/




/**form code**/


?>

