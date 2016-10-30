<?

// function wat_init() {





//     //search locations
//     // Add new taxonomy, NOT hierarchical (like tags)
//         $labels = array(
//             'name'                       => _x( 'Property locations', 'taxonomy general name' ),
//             'singular_name'              => _x( 'Property location', 'taxonomy singular name' ),
//             'search_items'               => __( 'Search Property locations' ),
//             'popular_items'              => __( 'Popular Property locations' ),
//             'all_items'                  => __( 'All Property locations' ),
//             'parent_item'                => null,
//             'parent_item_colon'          => null,
//             'edit_item'                  => __( 'Edit Property location' ),
//             'update_item'                => __( 'Update Property location' ),
//             'add_new_item'               => __( 'Add New Property location' ),
//             'new_item_name'              => __( 'New Property location Name' ),
//             'separate_items_with_commas' => __( 'Separate Property locations with commas' ),
//             'add_or_remove_items'        => __( 'Add or remove Property locations' ),
//             'choose_from_most_used'      => __( 'Choose from the most used Property locations' ),
//             'not_found'                  => __( 'No Property locations found.' ),
//             'menu_name'                  => __( 'Property locations' ),
//         );

//         $args = array(
//             'hierarchical'          => true,
//             'labels'                => $labels,
//             'show_ui'               => true,
//             'show_admin_column'     => true,
//             'update_count_callback' => '_update_post_term_count',
//             'query_var'             => true,
//         );

//         register_taxonomy( 'property_location', 'met_properties', $args );

//     flush_rewrite_rules(true );
// }
// add_action( 'init', 'wat_init' );