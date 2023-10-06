<?php
if( !function_exists('houzez_testimonials_metaboxes') ) {

    function houzez_testimonials_metaboxes( $meta_boxes ) {
        $houzez_prefix = 'fave_';
        
        $meta_boxes[] = array(
            'id'        => 'fave_testimonials',
            'title'     => esc_html__('Testimonial Details', 'houzez-child' ),
            'post_types'     => array( 'houzez_testimonials' ),
            'context' => 'normal',

            'fields'    => array(
                array(
                    'name'      => esc_html__('Text', 'houzez-child' ),
                    'id'        => $houzez_prefix . 'testi_text',
                    'type'      => 'textarea',
                    'desc'      => esc_html__('Enter the testimonial message','houzez-child'),
                ),
                array(
                    'name'      => esc_html__('Name', 'houzez-child'),
                    'id'        => $houzez_prefix . 'testi_name',
                    'type'      => 'text',
                    'placeholder'      => esc_html__('Enter the testimonial name','houzez-child'),
                ),
                array(
                    'name'      => esc_html__('Position', 'houzez-child'),
                    'id'        => $houzez_prefix . 'testi_position',
                    'type'      => 'text',
                    'placeholder'      => esc_html__('Example: Founder & CEO.','houzez-child'),
                ),
                array(
                    'name'      => esc_html__('Company Name', 'houzez-child'),
                    'placeholder'      => esc_html__('Enter the company name','houzez-child'),
                    'id'        => $houzez_prefix . 'testi_company',
                    'type'      => 'text',
                    'desc'      => '',
                ),
                array(
                    'name'      => esc_html__('Photo', 'houzez-child'),
                    'id'        => $houzez_prefix . 'testi_photo',
                    'type' => 'image_advanced',
                    'max_file_uploads' => 1,
                    'desc'      => '',
                ),
                array(
                    'name'      => esc_html__('Company Logo', 'houzez-child'),
                    'id'        => $houzez_prefix . 'testi_logo',
                    'type' => 'image_advanced',
                    'max_file_uploads' => 1,
                    'desc'      => '',
                )
            )
        );
        

        return apply_filters('houzez_testimonials_meta', $meta_boxes);

    }

    add_filter( 'rwmb_meta_boxes', 'houzez_testimonials_metaboxes' );
}