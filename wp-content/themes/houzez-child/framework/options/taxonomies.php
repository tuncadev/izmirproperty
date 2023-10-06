<?php
global $houzez_opt_name;

Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Taxonomies Layout', 'houzez-child' ),
    'id'     => 'taxonomies-pages',
    'desc'   => esc_html__( 'Select taxonomies (type, status, country, city, state, features, areas, labels) pages layout', 'houzez-child' ),
    'icon'   => 'el-icon-th-list el-icon-small',
    'subsection' => false,
    'fields' => array(
        array(
            'id'       => 'taxonomy_layout',
            'type'     => 'image_select',
            'title'    => __('Page Layout', 'houzez-child'),
            'subtitle' => '',
            'options'  => array(
                'no-sidebar' => array(
                    'alt'   => '',
                    'img'   => HOUZEZ_IMAGE. '1c.png'
                ),
                'left-sidebar' => array(
                    'alt'   => '',
                    'img'   => HOUZEZ_IMAGE. '2cl.png'
                ),
                'right-sidebar' => array(
                    'alt'   => '',
                    'img'  => HOUZEZ_IMAGE. '2cr.png'
                )
            ),
            'default' => 'right-sidebar'
        ),
        array(
            'id'       => 'taxonomy_content_position',
            'type'     => 'select',
            'title'    => __('Content Position', 'houzez-child'),
            'desc' => __('Select content position for taxonomies pages. Content can be added in desciption field for each taxonomy', 'houzez-child'),
            'options'  => array(
                'above' => esc_html__('Above listings', 'houzez-child'),
                'bottom' => esc_html__('Below listings', 'houzez-child'),
            ),
            'default' => 'above'
        ),

        array(
            'id'       => 'taxonomy_posts_layout',
            'type'     => 'select',
            'title'    => __('Listings Layout', 'houzez-child'),
            'desc' => __('Select the listings layout for the taxonomy page.', 'houzez-child'),
            'options'  => array(
                'Listings Version 1' => array(
                    'list-view-v1' => 'List View',
                    'grid-view-v1' => 'Grid View',
                ),
                'Listings Version 2' => array(
                    'list-view-v2' => 'List View',
                    'grid-view-v2' => 'Grid View',
                ),

                'Listings Version 3' => array(
                    'grid-view-v3' => 'Grid View',
                ),

                'Listings Version 4' => array(
                    'grid-view-v4' => 'Grid View',
                ),

                'Listings Version 5' => array(
                    'list-view-v5' => 'List View',
                    'grid-view-v5' => 'Grid View',
                ),

                'Listings Version 6' => array(
                    'grid-view-v6' => 'Grid View',
                ),

                'Listings Version 7' => array(
                    'list-view-v7' => 'List View',
                    'grid-view-v7' => 'Grid View',
                ),
            ),
            'default' => 'list-view-v1'
        ),

        array(
            'id'       => 'taxonomy_default_order',
            'type'     => 'select',
            'title'    => __('Default Order', 'houzez-child'),
            'desc' => esc_html__('Select the taxonomy page listings order.', 'houzez-child'),
            'options'  => array(
                'a_title' => esc_html__( 'Title - ASC', 'houzez-child' ),
                'd_title' => esc_html__( 'Title - DESC', 'houzez-child' ),
                'd_date' => esc_html__( 'Date New to Old', 'houzez-child' ),
                'a_date' => esc_html__( 'Date Old to New', 'houzez-child' ),
                'd_price' => esc_html__( 'Price (High to Low)', 'houzez-child' ),
                'a_price' => esc_html__( 'Price (Low to High)', 'houzez-child' ),
                'featured_first' => esc_html__( 'Show Featured Listings on Top', 'houzez-child' ),
                'random' => esc_html__( 'Random Listings', 'houzez-child' ),
            ),
            'default' => 'd_date'
        ),

        array(
            'id'       => 'taxonomy_num_posts',
            'type'     => 'text',
            'title'    => esc_html__('Number of Listings to Show', 'houzez-child'),
            'subtitle' => '',
            'desc' => esc_html__('Enter the number of listings to display.', 'houzez-child'),
            'default'  => '9',
            'validate' => 'numeric',
        ),
    )
));