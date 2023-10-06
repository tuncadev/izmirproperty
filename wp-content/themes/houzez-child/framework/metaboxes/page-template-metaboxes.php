<?php
if( !function_exists('houzez_page_template_metaboxes') ) {

    function houzez_page_template_metaboxes( $meta_boxes ) {
        $houzez_prefix = 'fave_';
        
        $meta_boxes[] = array(
            'id'        => 'fave_default_template_settings',
            'title'     => esc_html__('Page Template Options', 'houzez-child' ),
            'pages'     => array( 'page' ),
            'context' => 'normal',
            'show'       => array(
                'template' => array(
                    'template/template-page.php'
                ),
            ),

            'fields'    => array(
                array(
                    'name'      => esc_html__('Page Title', 'houzez-child' ),
                    'id'        => $houzez_prefix . 'page_title',
                    'type'      => 'select',
                    'options'   => array(
                        'show' => esc_html__('Show', 'houzez-child' ),
                        'hide' => esc_html__('Hide', 'houzez-child' )
                    ),
                    'std'       => array( 'show' ),
                    'desc'      => '',
                ),
                array(
                    'name'      => esc_html__('Page Breadcrumb', 'houzez-child' ),
                    'id'        => $houzez_prefix . 'page_breadcrumb',
                    'type'      => 'select',
                    'options'   => array(
                        'show' => esc_html__('Show', 'houzez-child' ),
                        'hide' => esc_html__('Hide', 'houzez-child' )
                    ),
                    'std'       => array( 'show' ),
                    'desc'      => '',
                ),
                array(
                    'name'      => esc_html__('Page Sidebar', 'houzez-child' ),
                    'id'        => $houzez_prefix . 'page_sidebar',
                    'type'      => 'select',
                    'options'   => array(
                        'none' => esc_html__('None', 'houzez-child' ),
                        'right_sidebar' => esc_html__('Right Sidebar', 'houzez-child' ),
                        'left_sidebar' => esc_html__('Left Sidebar', 'houzez-child' )
                    ),
                    'std'       => array( 'right_sidebar' ),
                    'desc'      => esc_html__('Choose page Sidebar','houzez-child'),
                ),
                array(
                    'name'      => esc_html__('Page Background', 'houzez-child' ),
                    'id'        => $houzez_prefix . 'page_background',
                    'type'      => 'select',
                    'options'   => array(
                        'none' => esc_html__('None', 'houzez-child' ),
                        'yes' => esc_html__('Yes', 'houzez-child' )
                    ),
                    'std'       => array( 'yes' ),
                    'desc'      => esc_html__('Select the page background (only for page template)','houzez-child'),
                    'hidden' => array( 'fave_page_sidebar', '!=', 'none' )
                )
            )
        );

        return apply_filters('houzez_page_template_meta', $meta_boxes);

    }

    add_filter( 'rwmb_meta_boxes', 'houzez_page_template_metaboxes' );
}