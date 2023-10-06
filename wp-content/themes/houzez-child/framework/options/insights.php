<?php
global $houzez_opt_name, $allowed_html_array;
Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Insights Options', 'houzez-child' ),
    'id'     => 'favethemes-insights',
    'desc'   => '',
    'icon'   => 'el el-cog',
    'fields'        => array(
        array(
            'id'       => 'insights_removal',
            'type'     => 'button_set',
            'title'    => esc_html__('Insights Clearance', 'houzez-child'),
            'subtitle' => esc_html__('Delete data older then?', 'houzez-child'),
            'options'  => array(
                'keep'   => esc_html__( 'Always Keep', 'houzez-child' ),
                '7days'   => esc_html__( '7 Days', 'houzez-child' ),
                '14days'   => esc_html__( '14 Days', 'houzez-child' ),
                '30days'   => esc_html__( '30 Days', 'houzez-child' ),
                '60days'   => esc_html__( '60 Days', 'houzez-child' ),
                'custom'   => esc_html__( 'Custom', 'houzez-child' ),
            ),
            'default'  => '60days',
        ),
        array(
            'id'       => 'custom_days',
            'type'     => 'text',
            'required' => array('insights_removal', '=', 'custom'),
            'title'    => esc_html__( 'Number of Days', 'houzez-child' ),
            'default'    => '90',
            'validate' => 'numeric',
        ),

    ),
));