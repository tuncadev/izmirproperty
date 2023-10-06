<?php
global $houzez_opt_name;
Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Invoice Options', 'houzez-child' ),
    'id'     => 'property-invoice',
    'desc'   => '',
    'icon'   => 'el-icon-file el-icon-small',
    'fields'		=> array(
        array(
            'id'		=> 'invoice_logo',
            'url'		=> true,
            'type'		=> 'media',
            'title'		=> esc_html__( 'Company Logo', 'houzez-child' ),
            'read-only'	=> false,
            'default'	=> array( 'url'	=> HOUZEZ_IMAGE .'/logo-houzez-white.png' ),
            'desc'	=> esc_html__( 'Logo to use in the invoices tenplate', 'houzez-child' ),
            'desc'  => esc_html__( 'Upload the logo', 'houzez-child' ),
        ),
        array(
            'id'		=> 'invoice_company_name',
            'type'		=> 'text',
            'title'		=> esc_html__( 'Company Name', 'houzez-child' ),
            'default'	=> 'Company Name',
            'desc'	=> esc_html__( 'Enter the company name', 'houzez-child' ),
        ),
        array(
            'id'		=> 'invoice_address',
            'type'		=> 'textarea',
            'title'		=> esc_html__( 'Address', 'houzez-child' ),
            'default'	=> '1161 Washingtown Avenue 299<br> Miami Beach 33141 FL',
            'desc'	=> esc_html__( 'Enter the company address', 'houzez-child' ),
        ),
        array(
            'id'		=> 'invoice_phone',
            'type'		=> 'text',
            'title'		=> esc_html__( 'Phone', 'houzez-child' ),
            'default'	=> '(987)654 3210',
            'desc'  => esc_html__( 'Enter the company phone number', 'houzez-child' ),
        ),
        array(
            'id'		=> 'invoice_additional_info',
            'type'		=> 'editor',
            'title'		=> esc_html__( 'Additional Information', 'houzez-child' ),
            'default'	=> '<p>The lorem ipsum text is typically a scrambled section of De finibus bonorum et malorum, a 1st-century BC Latin text by Cicero, with words altered, added, and removed to make it nonsensical, improper Latin.[citation needed]</p>',
            'subtitle'	=> '',
            'desc'  => esc_html__( 'Enter additional infomartion if needed', 'houzez-child' ),
        ),
        array(
            'id'		=> 'invoice_thankyou',
            'type'		=> 'text',
            'title'		=> esc_html__( 'Thank You Message', 'houzez-child' ),
            'default'	=> 'Thank you for your business with us.',
            'subtitle'	=> '',
            'desc'  => esc_html__( 'Enter the thank you message', 'houzez-child' ),
        ),
    ),
));