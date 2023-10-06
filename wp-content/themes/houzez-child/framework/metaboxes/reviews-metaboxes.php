<?php
if( !function_exists('houzez_reviews_metaboxes') ) {

    function houzez_reviews_metaboxes( $meta_boxes ) {
        $houzez_prefix = 'fave_';
        
        $meta_boxes[] = array(
            'id'        => 'houzez_reviews',
            'title'     => esc_html__('Details', 'houzez-child'),
            'post_types'     => array( 'houzez_reviews' ),
            'context' => 'normal',

            'fields'    => array(
                array(
                    'name'    => esc_html__('Where to display?', 'houzez-child'),
                    'id'      => 'review_post_type',
                    'type'    => 'radio',
                    'options' => array(
                        'property' => esc_html__('Property Detail Page', 'houzez-child'),
                        'houzez_agent' => esc_html__('Agent Profile', 'houzez-child'),
                        'houzez_agency' => esc_html__('Agency Profile', 'houzez-child'),
                        'houzez_author' => esc_html__('Author Profile', 'houzez-child'),
                    ),
                ),

                array(
                    'name'        => esc_html__('Select a property', 'houzez-child'),
                    'id'        => 'review_property_id',
                    'type'        => 'post',
                    'post_type'   => 'property',
                    'ajax' => true,
                    'field_type'  => 'select_advanced',
                    'placeholder' => esc_html__('Select a Property', 'houzez-child'),
                    'query_args'  => array(
                        'post_status'    => 'publish',
                        'posts_per_page' => 10,
                    ),
                    'hidden' => array( 'review_post_type', '!=', 'property' )
                ),

                array(
                    'name'        => esc_html__('Select an Agent', 'houzez-child'),
                    'id'          => 'review_agent_id',
                    'type'        => 'post',
                    'ajax' => true,
                    'post_type'   => 'houzez_agent',
                    'field_type'  => 'select_advanced',
                    'placeholder' => esc_html__('Select an Agent', 'houzez-child'),
                    'query_args'  => array(
                        'post_status'    => 'publish',
                        'posts_per_page' => 10,
                    ),
                    'hidden' => array( 'review_post_type', '!=', 'houzez_agent' )
                ),

                array(
                    'name'        => esc_html__('Select an Agency', 'houzez-child'),
                    'id'          => 'review_agency_id',
                    'type'        => 'post',
                    'ajax' => true,
                    'post_type'   => 'houzez_agency',
                    'field_type'  => 'select_advanced',
                    'placeholder' => esc_html__('Select an Agency', 'houzez-child'),
                    'query_args'  => array(
                        'post_status'    => 'publish',
                        'posts_per_page' => 10,
                    ),
                    'hidden' => array( 'review_post_type', '!=', 'houzez_agency' )
                ),
                array(
                    'name'        => esc_html__('Select an Author', 'houzez-child'),
                    'id'          => 'review_author_id',
                    'type' => 'user',
                    'field_type'  => 'select_advanced',
                    'placeholder' => esc_html__('Select an Author', 'houzez-child'),
                    'ajax' => true,
                    'query_args' => array(
                        'number' => 10, // THIS
                        'orderby' => 'nicename',
                    ),
                    'hidden' => array( 'review_post_type', '!=', 'houzez_author' )
                ),

                array(
                    'name'            => esc_html__('Rating', 'houzez-child'),
                    'id'              => 'review_stars',
                    'type'            => 'select',
                    'options' => array(
                        '1' => esc_html__('1 Star - Poor', 'houzez-child'),
                        '2' => esc_html__('2 Star -  Fair', 'houzez-child'),
                        '3' => esc_html__('3 Star - Average', 'houzez-child'),
                        '4' => esc_html__('4 Star - Good', 'houzez-child'),
                        '5' => esc_html__('5 Star - Excellent', 'houzez-child'),
                    ),
                    'std'        => '1',
                ),
            )
        );
        

        return apply_filters('houzez_reviews_meta', $meta_boxes);

    }

    add_filter( 'rwmb_meta_boxes', 'houzez_reviews_metaboxes' );
}