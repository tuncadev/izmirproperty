<?php
global $houzez_opt_name, $allowed_html_array;
Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Agencies', 'houzez-child' ),
    'id'     => 'houzez-agencies',
    'desc'   => '',
    'icon'   => 'el-icon-user el-icon-small',
    'fields'        => array(
        array(
            'id'       => 'agencies-template-layout',
            'type'     => 'image_select',
            'title'    => esc_html__('Agencies Layout', 'houzez-child'),
            'subtitle' => '',
            'desc'     => '',
            'options'  => array(
                'v1' => array(
                    'alt' => '',
                    'img' => HOUZEZ_IMAGE . 'all-agencies-style-1.jpg'
                ),
                'v2' => array(
                    'alt' => '',
                    'img' => HOUZEZ_IMAGE . 'all-agencies-style-2.jpg'
                ),
            ),
            'default'  => 'v1',
        ),
        array(
            'id'       => 'num_of_agencies',
            'type'     => 'text',
            'title'    => esc_html__( 'Number of Agencies', 'houzez-child' ),
            'subtitle'    => esc_html__( 'Number of agencies to display on the All Agencies page template', 'houzez-child' ),
            'desc'    => esc_html__( 'Enter the number of agencies', 'houzez-child' ),
            'default'  => '9'
        ),

        array(
            'id'       => 'agency_address',
            'type'     => 'switch',
            'title'    => esc_html__('Address', 'houzez-child'),
            'subtitle' => '',
            'default'  => 1,
            'on'       => 'Enabled',
            'off'      => 'Disabled',
        ),
        array(
            'id'       => 'agency_mobile',
            'type'     => 'switch',
            'title'    => esc_html__( 'Mobile', 'houzez-child' ),
            'subtitle' => '',
            'default'  => 1,
            'on'       => 'Enabled',
            'off'      => 'Disabled',
        ),
        array(
            'id'       => 'agency_phone',
            'type'     => 'switch',
            'title'    => esc_html__( 'Office Phone', 'houzez-child' ),
            'subtitle' => '',
            'default'  => 1,
            'on'       => 'Enabled',
            'off'      => 'Disabled',
        ),

         array(
            'id'       => 'agency_fax',
            'type'     => 'switch',
            'title'    => esc_html__( 'Fax', 'houzez-child' ),
            'subtitle' => '',
            'default'  => 1,
            'on'       => 'Enabled',
            'off'      => 'Disabled',
        ),

         array(
            'id'       => 'agency_email',
            'type'     => 'switch',
            'title'    => esc_html__( 'Email', 'houzez-child' ),
            'subtitle' => '',
            'default'  => 1,
            'on'       => 'Enabled',
            'off'      => 'Disabled',
        ),

         array(
            'id'       => 'agency_website',
            'type'     => 'switch',
            'title'    => esc_html__( 'Website', 'houzez-child' ),
            'subtitle' => '',
            'default'  => 1,
            'on'       => 'Enabled',
            'off'      => 'Disabled',
        ),

         array(
            'id'       => 'agency_social',
            'type'     => 'switch',
            'title'    => esc_html__( 'Social', 'houzez-child' ),
            'subtitle' => '',
            'default'  => 1,
            'on'       => 'Enabled',
            'off'      => 'Disabled',
        ),
    ),
));

Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Agency Detail Page', 'houzez-child' ),
    'id'     => 'agency-detail-page',
    'desc'   => '',
    'subsection' => true,
    'fields' => array(
        array(
            'id'       => 'agency-detail-layout',
            'type'     => 'image_select',
            'title'    => esc_html__('Single Agency Layout', 'houzez-child'),
            'subtitle' => '',
            'desc'     => '',
            'options'  => array(
                'v1' => array(
                    'alt' => '',
                    'img' => HOUZEZ_IMAGE . 'agency-detail-page-style-1.jpg'
                ),
                'v2' => array(
                    'alt' => '',
                    'img' => HOUZEZ_IMAGE . 'agency-detail-page-style-2.jpg'
                ),
            ),
            'default'  => 'v1',
        ),
        array(
            'id'       => 'agency_tabs',
            'type'     => 'switch',
            'title'    => esc_html__( 'Tabs', 'houzez-child' ),
            'subtitle' => esc_html__('Property status tabs displayed in the agency detail page', 'houzez-child'),
            'desc' => esc_html__( 'Enable or disable the tabs on agency detail page', 'houzez-child' ),
            'default'  => 0,
            'on'       => 'Enabled',
            'off'      => 'Disabled',
        ),
        array(
            'id'       => 'agency_detail_tab_1',
            'type'     => 'select',
            'title'    => esc_html__('Tab 1', 'houzez-child'),
            'subtitle' => esc_html__('Property status tab in the agency detail page', 'houzez-child'),
            'desc'     => esc_html__('Select the status', 'houzez-child'),
            'data'     => 'terms',
            'required' => array('agency_tabs', '=', '1'),
            'args'        =>  array('taxonomy'=>'property_status'),
            'default' => ''
        ),
        array(
            'id'       => 'agency_detail_tab_2',
            'type'     => 'select',
            'title'    => esc_html__('Tab 2', 'houzez-child'),
            'subtitle' => esc_html__('Property status tab in the agency detail page', 'houzez-child'),
            'desc'     => esc_html__('Select the status', 'houzez-child'),
            'required' => array('agency_tabs', '=', '1'),
            'data'        => 'terms',
            'args'        =>  array('taxonomy'=>'property_status'),
            'default' => ''
        ),

        array(
            'id'       => 'agency_listings_layout',
            'type'     => 'select',
            'title'    => __('Listings Layout', 'houzez-child'),
            'subtitle' => __('Select the listings layout for the agency detail page', 'houzez-child'),
            'desc'     => esc_html__('Select the layout', 'houzez-child'),
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
            'id'       => 'num_of_agency_listings',
            'type'     => 'text',
            'title'    => esc_html__( 'Number of Listings', 'houzez-child' ),
            'subtitle'    => esc_html__( 'Number of listings to display on the agency detail page', 'houzez-child' ),
            'desc'    => esc_html__( 'Enter the number of listings', 'houzez-child' ),
            'default'  => '10'
        ),
        array(
            'id'       => 'agency_listings_order',
            'type'     => 'select',
            'title'    => __('Default Order', 'houzez-child'),
            'subtitle' => __('Listings order on the agency detail page', 'houzez-child'),
            'desc' => __('Select the listings order.', 'houzez-child'),
            'options'  => array(
                'default' => esc_html__( 'Default', 'houzez-child' ),
                'a_title' => esc_html__( 'Title - ASC', 'houzez-child' ),
                'd_title' => esc_html__( 'Title - DESC', 'houzez-child' ),
                'd_date' => esc_html__( 'Date New to Old', 'houzez-child' ),
                'a_date' => esc_html__( 'Date Old to New', 'houzez-child' ),
                'd_price' => esc_html__( 'Price (High to Low)', 'houzez-child' ),
                'a_price' => esc_html__( 'Price (Low to High)', 'houzez-child' ),
                'featured_first' => esc_html__( 'Show Featured Listings on Top', 'houzez-child' ),
            ),
            'default' => 'default'
        ),
        array(
            'id'       => 'agency_stats',
            'type'     => 'switch',
            'title'    => esc_html__( 'Stats', 'houzez-child' ),
            'subtitle' => esc_html__('Enable or disable the stats on agency detail page', 'houzez-child'),
            'default'  => 1,
            'on'       => 'Enabled',
            'off'      => 'Disabled',
        ),
        array(
            'id'       => 'agency_review',
            'type'     => 'switch',
            'title'    => esc_html__( 'Review & Rating', 'houzez-child' ),
            'subtitle' => '',
            'default'  => 1,
            'on'       => 'Enabled',
            'off'      => 'Disabled',
        ),
        array(
            'id'       => 'agency_agents',
            'type'     => 'switch',
            'title'    => esc_html__( 'Agency Agents', 'houzez-child' ),
            'subtitle' => esc_html__('Enable or disable agency agents', 'houzez-child'),
            'default'  => 1,
            'on'       => 'Enabled',
            'off'      => 'Disabled',
        ),
        array(
            'id'       => 'agency_listings',
            'type'     => 'switch',
            'title'    => esc_html__( 'Listings', 'houzez-child' ),
            'subtitle' => esc_html__('Enable or disable the agency listins section', 'houzez-child'),
            'default'  => 1,
            'on'       => 'Enabled',
            'off'      => 'Disabled',
        ),
        array(
            'id'       => 'agency_bio',
            'type'     => 'switch',
            'title'    => esc_html__( 'About agency', 'houzez-child' ),
            'subtitle' => esc_html__('Enable or disable the about agency section', 'houzez-child'),
            'default'  => 1,
            'on'       => 'Enabled',
            'off'      => 'Disabled',
        ),
        array(
            'id'       => 'agency_sidebar',
            'type'     => 'switch',
            'title'    => esc_html__( 'agency Sidebar', 'houzez-child' ),
            'subtitle' => esc_html__('Enable or disable the side on agency detail page', 'houzez-child'),
            'default'  => 1,
            'on'       => 'Enabled',
            'off'      => 'Disabled',
        ),
        array(
            'id'       => 'agency_sidebar_map',
            'type'     => 'switch',
            'title'    => esc_html__( 'Agency Map', 'houzez-child' ),
            'subtitle' => '',
            'default'  => 1,
            'on'       => 'Enabled',
            'off'      => 'Disabled',
        ),
    )
));