<?php
global $houzez_opt_name, $custom_fields_array;

Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Property Detail', 'houzez-child' ),
    'id'     => 'property-page',
    'desc'   => '',
    'icon'   => 'el-icon-home el-icon-small',
    'fields'		=> array(
        array(
            'id'       => 'prop-top-area',
            'type'     => 'image_select',
            'title'    => esc_html__('Property Banner', 'houzez-child'),
            'subtitle' => esc_html__('Select the banner version you want to display in the property detail page', 'houzez-child'),
            'desc'     => esc_html__('Select the banner version', 'houzez-child'),
            'options'  => array(
                'v1' => array(
                    'alt' => '',
                    'img' => HOUZEZ_IMAGE . 'property/property-banner-style-1.jpg'
                ),
                'v2' => array(
                    'alt' => '',
                    'img' => HOUZEZ_IMAGE . 'property/property-banner-style-2.jpg'
                ),
                'v3' => array(
                    'alt' => '',
                    'img' => HOUZEZ_IMAGE . 'property/property-banner-style-3.jpg'
                ),
                'v4' => array(
                    'alt' => '',
                    'img' => HOUZEZ_IMAGE . 'property/property-banner-style-4.jpg'
                ),
                'v5' => array(
                    'alt' => '',
                    'img' => HOUZEZ_IMAGE . 'property/property-banner-style-5.jpg'
                ),
                'v6' => array(
                    'alt' => '',
                    'img' => HOUZEZ_IMAGE . 'property/property-banner-style-6.jpg'
                ),
                'v7' => array(
                    'alt' => '',
                    'img' => HOUZEZ_IMAGE . 'property/property-banner-style-7.jpg'
                ),
            ),
            'default'  => 'v1',
        ),
        array(
            'id'       => 'prop-content-layout',
            'type'     => 'select',
            'title'    => esc_html__('Property Content Layout', 'houzez-child'),
            'subtitle' => '',
            'desc'     => esc_html__('Select the content layout', 'houzez-child'),
            'options'  => array(
                'simple' => esc_html__( 'Default', 'houzez-child' ),
                'tabs'   => esc_html__( 'Tabs', 'houzez-child' ),
                'tabs-vertical' => esc_html__( 'Tabs Vertical', 'houzez-child' ),
                'v2' => esc_html__( 'Luxury Homes', 'houzez-child' ),
                'minimal' => esc_html__( 'Minimal', 'houzez-child' ),
                'boxed' => esc_html__( 'Boxed', 'houzez-child' ),
            ),
            'default'  => 'simple',
        ),
        array(
            'id'       => 'prop_default_active_tab',
            'type'     => 'select',
            'title'    => esc_html__('Property Banner Active Tab', 'houzez-child'),
            'subtitle' => esc_html__('The property top banner has three tabs, the image/gallery, map view and street view. Select the one you want to display first', 'houzez-child'),
            'desc'     => esc_html__('Active tab must be enable in "Media Tabs Manager" below', 'houzez-child'),
            'options'  => array(
                'image_gallery'   => esc_html__( 'Image/Gallery', 'houzez-child' ),
                'map_view'        => esc_html__( 'Map View', 'houzez-child' ),
                'virtual_tour'        => esc_html__( '360 Virtual Tour', 'houzez-child' ),
                'video'        => esc_html__( 'Video', 'houzez-child' ),
            ),
            'default'  => 'image_gallery',
        ),
        array(
            'id'      => 'property_media_tabs',
            'type'    => 'sorter',
            'title'   => 'Media Tabs Manager',
            'subtitle'    => '',
            'desc'    => 'Drag and drop media tabs manager for property top banner',
            'options' => array(
                'enabled'  => array(
                    'gallery'     => esc_html__('Image/Gallery', 'houzez-child'),
                    'map'  => esc_html__('Map View', 'houzez-child'),
                    'street_view'      => esc_html__('Street View', 'houzez-child'),
                ),
                'disabled' => array(
                    '360_virtual_tour'      => esc_html__('360° Virtual Tour', 'houzez-child'),
                    'video'     => esc_html__('Video', 'houzez-child'),
                )
            ),
        ),

        array(
            'id'       => 'is_full_width',
            'type'     => 'switch',
            'title'    => esc_html__( 'Full Width Property Content Layout', 'houzez-child' ),
            'subtitle'     => esc_html__('If you select yes the property page will be full-width without the sidebar', 'houzez-child'),
            'desc' => esc_html__( 'Do you want to make the property page full width?', 'houzez-child' ),
            'default'  => 0,
            'required' => array( 'prop-content-layout', '!=', 'v2' ),
            'on'       => esc_html__( 'Yes', 'houzez-child' ),
            'off'      => esc_html__( 'No', 'houzez-child' ),
        ),

        array(
            'id'       => 'property_tools_mobile_pos',
            'type'     => 'button_set',
            'title'    => esc_html__( 'Property Tools Position in mobile', 'houzez-child' ),
            'subtitle' => esc_html__( 'Set position of share & favorite icons for mobile', 'houzez-child' ),
            'options'  => array(
                'under_banner'   => esc_html__( 'Under Banner', 'houzez-child' ),
                'under_title'   => esc_html__( 'Under Property Title', 'houzez-child' ),
            ),
            'default'  => 'under_banner',
        ),

        array(
            'id'       => 'prop_details_cols',
            'type'     => 'select',
            'title'    => esc_html__('Details section columns', 'houzez-child'),
            'subtitle' => esc_html__('Select number of columns you show for details section', 'houzez-child'),
            'desc'     => '',
            'options'  => array(
                'list-1-cols'   => esc_html__( '1 Column', 'houzez-child' ),
                'list-2-cols'   => esc_html__( '2 Columns', 'houzez-child' ),
                'list-3-cols'   => esc_html__( '3 Columns', 'houzez-child' )
            ),
            'default'  => 'list-2-cols',
        ),

        array(
            'id'       => 'prop_address_cols',
            'type'     => 'select',
            'title'    => esc_html__('Address section columns', 'houzez-child'),
            'subtitle' => esc_html__('Select number of columns you show for address section', 'houzez-child'),
            'desc'     => '',
            'options'  => array(
                'list-1-cols'   => esc_html__( '1 Column', 'houzez-child' ),
                'list-2-cols'   => esc_html__( '2 Columns', 'houzez-child' ),
                'list-3-cols'   => esc_html__( '3 Columns', 'houzez-child' )
            ),
            'default'  => 'list-2-cols',
        ),

        array(
            'id'       => 'prop_features_cols',
            'type'     => 'select',
            'title'    => esc_html__('Features section columns', 'houzez-child'),
            'subtitle' => esc_html__('Select number of columns you show for features section', 'houzez-child'),
            'desc'     => '',
            'options'  => array(
                'list-1-cols'   => esc_html__( '1 Column', 'houzez-child' ),
                'list-2-cols'   => esc_html__( '2 Columns', 'houzez-child' ),
                'list-3-cols'   => esc_html__( '3 Columns', 'houzez-child' )
            ),
            'default'  => 'list-3-cols',
        ),

        array(
            'id'       => 'prop-detail-nav',
            'type'     => 'select',
            'title'    => esc_html__('Property Detail Navigation', 'houzez-child'),
            'subtitle' => esc_html__('It works only for default layout', 'houzez-child'),
            'desc'     => esc_html__('Do you wan to display the property detail page sticky navigation bar?', 'houzez-child'),
            'options'  => array(
                'no' => esc_html__( 'No', 'houzez-child' ),
                'yes'   => esc_html__( 'Yes', 'houzez-child' )
            ),
            'default'  => 'no',
        ),
        array(
            'id'       => 'map_in_section',
            'type'     => 'switch',
            'title'    => esc_html__( 'Address Map Section', 'houzez-child' ),
            'subtitle' => esc_html__( 'If enabled, the map in the top banner will not displayed', 'houzez-child' ),
            'desc'     => esc_html__( 'Enable or disable the map in the address section', 'houzez-child' ),
            'default'  => 0,
            'on'       => esc_html__( 'Enabled', 'houzez-child' ),
            'off'      => esc_html__( 'Disabled', 'houzez-child' ),
        ),
        array(
            'id'       => 'send_agent_message_copy',
            'type'     => 'switch',
            'title'    => esc_html__( 'Do you want to receive the copy of message sent to agent ?', 'houzez-child' ),
            'desc'     => '',
            'subtitle' => '',
            'default'  => 0,
            'on'       => esc_html__( 'Yes', 'houzez-child' ),
            'off'      => esc_html__( 'No', 'houzez-child' ),
        ),
        array(
            'id'       => 'send_agent_message_email',
            'type'     => 'text',
            'required' => array( 'send_agent_message_copy', '=', '1' ),
            'title'    => esc_html__( 'Email address to receive message copy.', 'houzez-child' ),
            'desc'     => esc_html__('This email address will receive a copy of message sent to agent from property detail page.', 'houzez-child'),
            'subtitle' => 'Enter valid email address.'
        ),
        
    ),
));


/* Sections
----------------------------------------------------------------*/
Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Layout Manager - Default', 'houzez-child' ),
    'id'     => 'property-section',
    'desc'   => '',
    'subsection' => true,
    'fields' => array(
        array(
            'id'      => 'property_blocks',
            'type'    => 'sorter',
            'title'   => 'Property Layout Manager',
            'subtitle'    => 'Use this tool if you selected "Default" on the "Property Content Layout" option',
            'desc'    => 'Drag and drop layout manager to quickly organize your property page content',
            'options' => array(
                'enabled'  => array(
                    'overview'     => esc_html__('Overview', 'houzez-child'),
                    'description'  => esc_html__('Description', 'houzez-child'),
                    'address'      => esc_html__('Address', 'houzez-child'),
                    'details'      => esc_html__('Details', 'houzez-child'),
                    'features'     => esc_html__('Features', 'houzez-child'),
                    'floor_plans'  => esc_html__('Floor Plans', 'houzez-child'),
                    'video'        => esc_html__('Video', 'houzez-child'),
                    'virtual_tour' => esc_html__('360° Virtual Tour', 'houzez-child'),
                    'walkscore'    => esc_html__('Walkscore', 'houzez-child'),
                    'mortgage_calculator'        => esc_html__('Mortgage Calculator', 'houzez-child'),
                    'agent_bottom' => esc_html__('Agent bottom', 'houzez-child'),
                    'review'        => esc_html__('Reviews', 'houzez-child'),
                    'similar_properties' => esc_html__('Similar Listings', 'houzez-child'),
                ),
                'disabled' => array(
                    'overview-v2'     => esc_html__('Overview v2', 'houzez-child'),
                    'yelp_nearby'  => esc_html__('Near by Places', 'houzez-child'),
                    'block_gallery'  => esc_html__('Section Gallery', 'houzez-child'),
                    'schedule_tour' => esc_html__('Schedule Tour', 'houzez-child'),
                    'schedule_tour_v2' => esc_html__('Schedule Tour v2', 'houzez-child'),
                    'energy_class' => esc_html__('Energy Class', 'houzez-child'),
                    'unit'         => esc_html__('Multi Unit / Sub Listings', 'houzez-child'),
                    'adsense_space_1' => esc_html__('Adsense Space 1', 'houzez-child'),
                    'adsense_space_2' => esc_html__('Adsense Space 2', 'houzez-child'),
                    'adsense_space_3' => esc_html__('Adsense Space 3', 'houzez-child'),
                    'booking_calendar' => esc_html__('Availability Calendar', 'houzez-child'),
                )
            ),
        ),

        array(
            'id'       => 'block_gallery_visible',
            'type'     => 'text',
            'title'    => esc_html__('Section Gallery Number of Visible Images', 'houzez-child'),
            'subtitle' => '',
            'desc'     => '',
            'default'  => '9',
            'validate' => 'numeric'
        ),

        array(
            'id'       => 'block_gallery_columns',
            'type'     => 'text',
            'title'    => esc_html__('Section Gallery Images in a row', 'houzez-child'),
            'subtitle' => '',
            'desc'     => '',
            'default'  => '3',
            'validate' => 'numeric'
        ),
    )
));

Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Layout Manager - Tabs', 'houzez-child' ),
    'id'     => 'property-section-tabs',
    'desc'   => '',
    'subsection' => true,
    'fields' => array(
        array(
            'id'      => 'property_blocks_tabs',
            'type'    => 'sorter',
            'title'   => 'Property Layout Manager',
            'subtitle'    => 'Use this tool if you selected "Tab" or "Vertical Tabs" on the "Property Content Layout" option',
            'desc'    => 'Drag and drop layout manager to quickly organize your property page content',
            'options' => array(
                'enabled'  => array(
                    'description'  => esc_html__('Description', 'houzez-child'),
                    'address'      => esc_html__('Address', 'houzez-child'),
                    'details'      => esc_html__('Details', 'houzez-child'),
                    'features'     => esc_html__('Features', 'houzez-child'),
                    'floor_plans'  => esc_html__('Floor Plans', 'houzez-child'),
                    'video'        => esc_html__('Video', 'houzez-child'),
                ),
                'disabled' => array(
                    'virtual_tour' => esc_html__('360° Virtual Tour', 'houzez-child'),
                )
            ),
        ),
        array(
            'id'       => 'tabs_agent_bottom',
            'type'     => 'switch',
            'title'    => esc_html__( 'Agent contact form section', 'houzez-child' ),
            'desc' => esc_html__( 'Enable or disable agent contact for section section.', 'houzez-child' ),
            'default'  => 1,
            'on'       => esc_html__( 'Enable', 'houzez-child' ),
            'off'      => esc_html__( 'Disable', 'houzez-child' ),
        ),
        array(
            'id'       => 'houzez_availability_calendar',
            'type'     => 'switch',
            'title'    => esc_html__( 'Availability Calendar', 'houzez-child' ),
            'desc' => esc_html__( 'Enable or disable the availability calendar section.', 'houzez-child' ),
            'default'  => 0,
            'on'       => esc_html__( 'Enable', 'houzez-child' ),
            'off'      => esc_html__( 'Disable', 'houzez-child' ),
        ),
        array(
            'id'       => 'houzez_energy_class',
            'type'     => 'switch',
            'title'    => esc_html__( 'Energy Efficiency', 'houzez-child' ),
            'desc' => esc_html__( 'Enable or disable the energy class sectio.', 'houzez-child' ),
            'default'  => 0,
            'on'       => esc_html__( 'Enable', 'houzez-child' ),
            'off'      => esc_html__( 'Disable', 'houzez-child' ),
        ),
        array(
            'id'       => 'houzez_mortgage',
            'type'     => 'switch',
            'title'    => esc_html__( 'Mortgage Calculator', 'houzez-child' ),
            'desc' => esc_html__( 'Enable or disable mortgage calculator section.', 'houzez-child' ),
            'default'  => 1,
            'on'       => esc_html__( 'Enable', 'houzez-child' ),
            'off'      => esc_html__( 'Disable', 'houzez-child' ),
        ),
        array(
            'id'       => 'houzez_sublisting',
            'type'     => 'switch',
            'title'    => esc_html__( 'Sub Listings', 'houzez-child' ),
            'desc' => esc_html__( 'Enable or disable the sub listings section.', 'houzez-child' ),
            'default'  => 0,
            'on'       => esc_html__( 'Enable', 'houzez-child' ),
            'off'      => esc_html__( 'Disable', 'houzez-child' ),
        ),
        array(
            'id'       => 'houzez_tabs_schedule',
            'type'     => 'switch',
            'title'    => esc_html__( 'Schedule Tour', 'houzez-child' ),
            'subtitle' => esc_html__( 'Enable or disable the schedule a tour form.', 'houzez-child' ),
            'default'  => 0,
            'on'       => esc_html__( 'Enable', 'houzez-child' ),
            'off'      => esc_html__( 'Disable', 'houzez-child' ),
        ),
        array(
            'id'       => 'houzez_tabs_schedule_v2',
            'type'     => 'switch',
            'title'    => esc_html__( 'Schedule Tour v2', 'houzez-child' ),
            'subtitle' => esc_html__( 'Enable or disable the schedule a tour form.', 'houzez-child' ),
            'default'  => 0,
            'on'       => esc_html__( 'Enable', 'houzez-child' ),
            'off'      => esc_html__( 'Disable', 'houzez-child' ),
        ),
    )
));


Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Layout Manager - Luxury Homes', 'houzez-child' ),
    'id'     => 'property-section-luxury-homes',
    'desc'   => '',
    'subsection' => true,
    'fields' => array(
        array(
            'id'      => 'property_blocks_luxuryhomes',
            'type'    => 'sorter',
            'title'   => 'Property Layout Manager',
            'subtitle'    => 'Use this tool if you selected "Luxury Homes" on the "Property Content Layout" option',
            'desc'    => 'Drag and drop layout manager to quickly organize your property page content',
            'options' => array(
                'enabled'  => array(
                    'description'  => esc_html__('Description & Details', 'houzez-child'),
                    'features'     => esc_html__('Features', 'houzez-child'),
                    'address'      => esc_html__('Address', 'houzez-child'),
                    'gallery'      => esc_html__('Gallery', 'houzez-child'),
                    'floor_plans'  => esc_html__('Floor Plans', 'houzez-child'),
                    'video'        => esc_html__('Video', 'houzez-child'),
                    'mortgage_calculator'        => esc_html__('Mortgage Calculator', 'houzez-child'),
                    'agent_form'   => esc_html__('Agent Contact', 'houzez-child'),
                    'review'        => esc_html__('Reviews', 'houzez-child'),
                    'similar_properties' => esc_html__('Similar Listings', 'houzez-child'),
                ),
                'disabled' => array(
                    'virtual_tour' => esc_html__('360° Virtual Tour', 'houzez-child'),
                    'energy_class' => esc_html__('Energy Class', 'houzez-child'),
                    'yelp_nearby'  => esc_html__('Nearby', 'houzez-child'),
                    'unit'         => esc_html__('Multi Unit / Sub Listings', 'houzez-child'),
                    'walkscore'    => esc_html__('Walkscore', 'houzez-child'),
                    'schedule_tour' => esc_html__('Schedule Tour', 'houzez-child'),
                    'schedule_tour_v2' => esc_html__('Schedule Tour v2', 'houzez-child'),
                    'adsense_space_1' => esc_html__('Adsense Space 1', 'houzez-child'),
                    'adsense_space_2' => esc_html__('Adsense Space 2', 'houzez-child'),
                    'adsense_space_3' => esc_html__('Adsense Space 3', 'houzez-child'),
                    'booking_calendar' => esc_html__('Availability Calendar', 'houzez-child'),
                )
            ),
        ),

        array(
            'id'       => 'luxury_gallery_visible',
            'type'     => 'text',
            'title'    => esc_html__('Gallery Number of Visible Images', 'houzez-child'),
            'subtitle' => '',
            'desc'     => '',
            'default'  => '12',
            'validate' => 'numeric'
        ),

        array(
            'id'       => 'luxury_gallery_columns',
            'type'     => 'text',
            'title'    => esc_html__('Gallery Images in a row', 'houzez-child'),
            'subtitle' => '',
            'desc'     => '',
            'default'  => '4',
            'validate' => 'numeric'
        ),
    )
));

/* Popup Gallery 
----------------------------------------------------------------*/
Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Gallery Popup', 'houzez-child' ),
    'id'     => 'gallery-popup-section',
    'desc'   => '',
    'subsection' => true,
    'fields' => array(
        array(
            'id'       => 'property_gallery_popup_type',
            'type'     => 'button_set',
            'title'    => esc_html__('Gallery lightbox type', 'houzez-child'),
            'subtitle' => esc_html__('Select which popup lightox you want to use for property gallery.', 'houzez-child'),
            'desc'     => '',
            'options'  => array(
                'houzez-child'   => esc_html__( 'Houzez BuiltIn', 'houzez-child' ),
                'photoswipe'   => esc_html__( 'Photo Swipe', 'houzez-child' ),
            ),
            'default'  => 'houzez-child',
        ),
    )
));

$overview_composer = array(
    'type' => esc_html__('Property Type', 'houzez-child'),
    'bedrooms' => esc_html__('Bedrooms', 'houzez-child'),
    'bathrooms' => esc_html__('Bathrooms', 'houzez-child'),
    'garage' => esc_html__('Garage', 'houzez-child'),
    'area-size' => esc_html__('Area Size', 'houzez-child'),
    'year-built' => esc_html__('Year Built', 'houzez-child'),

);

$overview_composer_disabled = array(
    'rooms' => esc_html__('Rooms', 'houzez-child'),
    'land-area' => esc_html__('Land Area', 'houzez-child'),
    'property-id' => esc_html__('Property ID', 'houzez-child'),
);

if( ! empty( $custom_fields_array ) ) {
    $overview_composer_disabled = array_merge($overview_composer_disabled, $custom_fields_array);
}

/* Overview Composer 
----------------------------------------------------------------*/
Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Overview Section', 'houzez-child' ),
    'id'     => 'overview-section',
    'desc'   => '',
    'subsection' => true,
    'fields' => array(
        array(
            'id'       => 'show_id_head',
            'type'     => 'switch',
            'title'    => esc_html__( 'Property ID', 'houzez-child' ),
            'desc' => esc_html__( 'Show property id in section header.', 'houzez-child' ),
            'default'  => 1,
            'on'       => esc_html__( 'Show', 'houzez-child' ),
            'off'      => esc_html__( 'Hide', 'houzez-child' ),
        ),
        array(
            'id'      => 'overview_data_composer',
            'type'    => 'sorter',
            'title'   => 'Overview Data Composer',
            'subtitle'    => esc_html__( 'Drag and drop data manage for overview section', 'houzez-child' ),
            'desc'    => '',
            'options' => array(
                'enabled'  => $overview_composer,
                'disabled' => $overview_composer_disabled
            ),
        ),
    )
));

/* Energy Class
----------------------------------------------------------------*/
Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Energy Class', 'houzez-child' ),
    'id'     => 'energy-class-section',
    'desc'   => '',
    'subsection' => true,
    'fields' => array(
        array(
            'id'       => 'energy_class_data',
            'type'     => 'text',
            'title'    => esc_html__( 'Energy Classes', 'houzez-child' ),
            'default'  => 'A+, A, B, C, D, E, F, G, H',
            'subtitle' => esc_html__( 'Enter comma separated energy classes', 'houzez-child' ),
        ),
        array(
            'id'       => 'energy_1_color',
            'type'     => 'color',
            'title'    => esc_html__( 'Class 1 Color', 'houzez-child' ),
            'desc' => '',
            'default'  => '#33a357',
            'transparent' => false,
        ),
        array(
            'id'       => 'energy_2_color',
            'type'     => 'color',
            'title'    => esc_html__( 'Class 2 Color', 'houzez-child' ),
            'desc' => '',
            'default'  => '#79b752',
            'transparent' => false,
        ),
        array(
            'id'       => 'energy_3_color',
            'type'     => 'color',
            'title'    => esc_html__( 'Class 3 Color', 'houzez-child' ),
            'desc' => '',
            'default'  => '#c3d545',
            'transparent' => false,
        ),
        array(
            'id'       => 'energy_4_color',
            'type'     => 'color',
            'title'    => esc_html__( 'Class 4 Color', 'houzez-child' ),
            'desc' => '',
            'default'  => '#fff12c',
            'transparent' => false,
        ),
        array(
            'id'       => 'energy_5_color',
            'type'     => 'color',
            'title'    => esc_html__( 'Class 5 Color', 'houzez-child' ),
            'desc' => '',
            'default'  => '#edb731',
            'transparent' => false,
        ),
        array(
            'id'       => 'energy_6_color',
            'type'     => 'color',
            'title'    => esc_html__( 'Class 6 Color', 'houzez-child' ),
            'desc' => '',
            'default'  => '#d66f2c',
            'transparent' => false,
        ),
        array(
            'id'       => 'energy_7_color',
            'type'     => 'color',
            'title'    => esc_html__( 'Class 7 Color', 'houzez-child' ),
            'desc' => '',
            'default'  => '#cc232a',
            'transparent' => false,
        ),
        array(
            'id'       => 'energy_8_color',
            'type'     => 'color',
            'title'    => esc_html__( 'Class 8 Color', 'houzez-child' ),
            'desc' => '',
            'default'  => '#cc232a',
            'transparent' => false,
        ),
        array(
            'id'       => 'energy_9_color',
            'type'     => 'color',
            'title'    => esc_html__( 'Class 9 Color', 'houzez-child' ),
            'desc' => '',
            'default'  => '#cc232a',
            'transparent' => false,
        ),
        array(
            'id'       => 'energy_10_color',
            'type'     => 'color',
            'title'    => esc_html__( 'Class 10 Color', 'houzez-child' ),
            'desc' => '',
            'default'  => '#cc232a',
            'transparent' => false,
        ),
    )
));

$prop_details_showhide_options = array(
    'prop_id' => esc_html__('Property ID', 'houzez-child'),
    'prop_type' => esc_html__('Type', 'houzez-child'),
    'prop_status' => esc_html__('Status', 'houzez-child'),
    'prop_label' => esc_html__('Label', 'houzez-child'),
    'sale_rent_price' => esc_html__('Sale or Rent Price', 'houzez-child'),
    'bedrooms' => esc_html__('Bedrooms', 'houzez-child'),
    'rooms' => esc_html__('Rooms', 'houzez-child'),
    'bathrooms' => esc_html__('Bathrooms', 'houzez-child'),
    'area_size' => esc_html__('Area Size', 'houzez-child'),
    'land_area' => esc_html__('Land Area', 'houzez-child'),
    'garages' => esc_html__('Garages', 'houzez-child'),
    'year_built' => esc_html__('Year Built', 'houzez-child'),
    'updated_date' => esc_html__('Updated Date', 'houzez-child'),
    'additional_details' => esc_html__('Additional Details', 'houzez-child'),
    'address' => esc_html__('Address', 'houzez-child'),
    'country' => esc_html__('Country', 'houzez-child'),
    'city' => esc_html__('City', 'houzez-child'),
    'state' => esc_html__('State/county', 'houzez-child'),
    'area' => esc_html__('Area', 'houzez-child'),
    'zip' => esc_html__('Zip/Postal Code', 'houzez-child'),
);

$prop_details_showhide_options = array_merge($prop_details_showhide_options, $custom_fields_array);

$prop_details_showhide_default = array(
    'prop_id' => '0',
    'prop_type' => '0',
    'prop_status' => '0',
    'prop_label' => '0',
    'sale_rent_price' => '0',
    'bedrooms' => '0',
    'rooms' => '0',
    'bathrooms' => '0',
    'area_size' => '0',
    'land_area' => '0',
    'garages' => '0',
    'year_built' => '0',
    'updated_date' => '0',
    'additional_details' => '0',
);

Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Show/Hide Data', 'houzez-child' ),
    'id'     => 'propertydetail-showhide',
    'desc'   => '',
    'subsection' => true,
    'fields' => array(
        array(
            'id'       => 'print_property_button',
            'type'     => 'switch',
            'title'    => esc_html__( 'Print Property', 'houzez-child' ),
            'desc'     => '',
            'subtitle' => esc_html__( 'Enable/Disable print property button', 'houzez-child' ),
            'default'  => 1,
            'on'       => esc_html__( 'Enabled', 'houzez-child' ),
            'off'      => esc_html__( 'Disabled', 'houzez-child' ),
        ),
        array(
            'id'       => 'detail_featured_label',
            'type'     => 'switch',
            'title'    => esc_html__( 'Featured Label', 'houzez-child' ),
            'desc'     => '',
            'subtitle' => esc_html__( 'Enable/Disable featured label', 'houzez-child' ),
            'default'  => 1,
            'on'       => esc_html__( 'Enabled', 'houzez-child' ),
            'off'      => esc_html__( 'Disabled', 'houzez-child' ),
        ),
        array(
            'id'       => 'detail_status',
            'type'     => 'switch',
            'title'    => esc_html__( 'Status', 'houzez-child' ),
            'desc'     => '',
            'subtitle' => esc_html__( 'Enable/Disable property status', 'houzez-child' ),
            'default'  => 1,
            'on'       => esc_html__( 'Enabled', 'houzez-child' ),
            'off'      => esc_html__( 'Disabled', 'houzez-child' ),
        ),
        array(
            'id'       => 'detail_label',
            'type'     => 'switch',
            'title'    => esc_html__( 'Labels', 'houzez-child' ),
            'desc'     => '',
            'subtitle' => esc_html__( 'Enable/Disable property labels', 'houzez-child' ),
            'default'  => 1,
            'on'       => esc_html__( 'Enabled', 'houzez-child' ),
            'off'      => esc_html__( 'Disabled', 'houzez-child' ),
        ),
        array(
            'id'       => 'prop_detail_favorite',
            'type'     => 'switch',
            'title'    => esc_html__( 'Favorite Property', 'houzez-child' ),
            'desc'     => '',
            'subtitle' => esc_html__( 'Enable/Disable favorite property button', 'houzez-child' ),
            'default'  => 1,
            'on'       => esc_html__( 'Enabled', 'houzez-child' ),
            'off'      => esc_html__( 'Disabled', 'houzez-child' ),
        ),
        array(
            'id'       => 'prop_detail_share',
            'type'     => 'switch',
            'title'    => esc_html__( 'Share Property', 'houzez-child' ),
            'desc'     => '',
            'subtitle' => esc_html__( 'Enable/Disable share property button', 'houzez-child' ),
            'default'  => 1,
            'on'       => esc_html__( 'Enabled', 'houzez-child' ),
            'off'      => esc_html__( 'Disabled', 'houzez-child' ),
        ),
        array(
            'id'       => 'documents_download',
            'type'     => 'switch',
            'title'    => esc_html__( 'Documents Download', 'houzez-child' ),
            'subtitle' => esc_html__( 'Enable/Disable documents download only for registers users.', 'houzez-child' ),
            'default'  => 1,
            'on'       => esc_html__( 'Enabled', 'houzez-child' ),
            'off'      => esc_html__( 'Disabled', 'houzez-child' ),
        ),
        
        array(
            'id'       => 'hide_detail_prop_fields',
            'type'     => 'checkbox',
            'title'    => esc_html__( 'Property Detail Information', 'houzez-child' ),
            'desc'     => '',
            'subtitle' => esc_html__('Select which information you want to hide from the property detail page', 'houzez-child'),
            'options'  => $prop_details_showhide_options,
            'default' => $prop_details_showhide_default
        ),
    )
));

/* Adsense Spaces
----------------------------------------------------------------*/
Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Adsense Spaces', 'houzez-child' ),
    'id'     => 'adsense_spaces',
    'desc'   => '',
    'subsection' => true,
    'fields' => array(
        array(
            'id'       => 'adsense_space_1',
            'type'     => 'textarea',
            'title'    => esc_html__( 'Adsense Space 1', 'houzez-child' ),
            'subtitle' => esc_html__( 'Paste your banner JS or Google Adsense code, html banner also allowed.', 'houzez-child' ),
        ),
        array(
            'id'       => 'adsense_space_2',
            'type'     => 'textarea',
            'title'    => esc_html__( 'Adsense Space 2', 'houzez-child' ),
            'subtitle' => esc_html__( 'Paste your banner JS or Google Adsense code, html banner also allowed.', 'houzez-child' ),
        ),
        array(
            'id'       => 'adsense_space_3',
            'type'     => 'textarea',
            'title'    => esc_html__( 'Adsense Space 3', 'houzez-child' ),
            'subtitle' => esc_html__( 'Paste your banner JS or Google Adsense code, html banner also allowed.', 'houzez-child' ),
        ),
    )
));


/* WalkScore
----------------------------------------------------------------*/
Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Walkscore', 'houzez-child' ),
    'id'     => 'walkscore',
    'desc'   => '',
    'subsection' => true,
    'fields' => array(
        array(
            'id'       => 'houzez_walkscore',
            'type'     => 'switch',
            'title'    => esc_html__( 'Walkscore', 'houzez-child' ),
            'desc' => esc_html__( 'Enable or disable the Walkscore section on property detail page.', 'houzez-child' ),
            'default'  => 0,
            'on'       => esc_html__( 'Enabled', 'houzez-child' ),
            'off'      => esc_html__( 'Disabled', 'houzez-child' ),
        ),
        array(
            'id'       => 'houzez_walkscore_api',
            'type'     => 'text',
            'title'    => esc_html__( 'Walkscore API Key', 'houzez-child' ),
            'desc'     => wp_kses(__('Enter your Walkscore API key code. <a target="_blank" href="https://www.walkscore.com/professional/api.php">Get an API code</a>', 'houzez-child' ), $allowed_html_array),
            'required' => array('houzez_walkscore', '=', '1')
        ),
    )
));


Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Yelp Nearby Places', 'houzez-child' ),
    'id'     => 'yelp',
    'desc'   => '',
    'subsection' => true,
    'fields' => array(
        array(
            'id'       => 'houzez_yelp',
            'type'     => 'switch',
            'title'    => esc_html__( 'Yelp', 'houzez-child' ),
            'desc' => esc_html__( 'Enable or disable Yelp on the property detail page.', 'houzez-child' ),
            'subtitle' => wp_kses(__( 'Please note that Yelp is not working for all countries. See here <a target="_blank" href="https://www.yelp.com/factsheet">https://www.yelp.com/factsheet</a> the list of countries where Yelp is available.', 'houzez-child' ), $allowed_html_array),
            'default'  => 0,
            'on'       => esc_html__( 'Enabled', 'houzez-child' ),
            'off'      => esc_html__( 'Disabled', 'houzez-child' ),
        ),
        array(
            'id'       => 'houzez_yelp_api_key',
            'type'     => 'text',
            'title'    => esc_html__( 'Yelp API Key', 'houzez-child' ),
            //'subtitle' => esc_html__( "Yelp info doesn't show if you don't add the API Key.", 'houzez-child' ),
            'desc'     => wp_kses(__('Enter your Yelp API key code. <a target="_blank" href="https://www.yelp.com/developers/v3/manage_app">Get an API code</a>', 'houzez-child'), $allowed_html_array),
            'required' => array('houzez_yelp', '=', '1')
        ),
        array(
            'id'       => 'houzez_yelp_term',
            'type'     => 'select',
            'multi'    => true,
            'title'    => esc_html__( 'Yelp Categories', 'houzez-child' ),
            'desc' => esc_html__( "Select the Yelp categories that you want to display.", 'houzez-child' ),
            'options'  => $yelp_categories = array (
                'active' => 'Active Life',
                'arts' => 'Arts & Entertainment',
                'auto' => 'Automotive',
                'beautysvc' => 'Beauty & Spas',
                'education' => 'Education',
                'eventservices' => 'Event Planning & Services',
                'financialservices' => 'Financial Services',
                'food' => 'Food',
                'health' => 'Health & Medical',
                'homeservices' => 'Home Services ',
                'hotelstravel' => 'Hotels & Travel',
                'localflavor' => 'Local Flavor',
                'localservices' => 'Local Services',
                'massmedia' => 'Mass Media',
                'nightlife' => 'Nightlife',
                'pets' => 'Pets',
                'professional' => 'Professional Services',
                'publicservicesgovt' => 'Public Services & Government',
                'realestate' => 'Real Estate',
                'religiousorgs' => 'Religious Organizations',
                'restaurants' => 'Restaurants',
                'shopping' => 'Shoppi',
                'transport' => 'Transportation'
            ),
            'default' => array('food', 'health', 'education', 'realestate'),
            'required' => array('houzez_yelp', '=', '1')
        ),
        array(
            'id'       => 'houzez_yelp_limit',
            'type'     => 'text',
            'title'    => esc_html__( 'Yelp Results Limit', 'houzez-child' ),
            'desc' => esc_html__( "Enter the number of result that you want to display", 'houzez-child' ),
            'required' => array('houzez_yelp', '=', '1'),
            'default' => 3
        ),
        array(
            'id'       => 'houzez_yelp_dist_unit',
            'type'     => 'select',
            'multi'    => false,
            'title'    => esc_html__( 'Yelp Distance Unit', 'houzez-child' ),
            'desc' => esc_html__( "Select the distance unit.", 'houzez-child' ),
            'options'  => array (
                'miles' => 'Miles',
                'kilometers' => 'Kilometers'
            ),
            'default' => 'miles',
            'required' => array('houzez_yelp', '=', '1')
        )
    )
));


/* Adsense Spaces
----------------------------------------------------------------*/
Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Schedule a Tour', 'houzez-child' ),
    'id'     => 'schedule_a_tour',
    'desc'   => '',
    'subsection' => true,
    'fields' => array(
        array(
            'id'       => 'schedule_time_slots',
            'type'     => 'textarea',
            'title'    => esc_html__( 'Time Slots', 'houzez-child' ),
            'subtitle' => esc_html__( 'Use the comma to separate the time slots. (For example: 12:00 am, 12:15 am, 12:30 am)', 'houzez-child' ),
            'default'  => '10:00 am, 10:15 pm, 10:30 pm, 12:00 pm, 12:15 pm, 12:30 pm, 12:45 pm, 01:00 pm, 01:15 pm, 01:30 pm, 01:45 pm, 02:00 pm, 05:00 pm'
        ),
        array(
            'id'          => 'schedule_tour_where',
            'type'        => 'select',
            'title'       => esc_html__( 'Select the Status', 'houzez-child' ),
            'subtitle'    => esc_html__( 'Select status where you want to hide schedule tour section', 'houzez-child' ),
            'desc'        => '',
            'multi'    => true,
            'data'  => 'terms',
            'args'  => array(
                'taxonomy' => array( 'property_status' ),
                'hide_empty' => false,
            )
        ),

        array(
            'id'          => 'schedule_tour_redirect',
            'type'        => 'text',
            'title'       => esc_html__( 'Redirect to', 'houzez-child' ),
            'subtitle'    => esc_html__( 'Enter url where form will be redirect after success', 'houzez-child' ),
            'desc'        => 'https://example.com',
        ),
    )
));

$custom_licon_fields = $builtin_icons = $default_fields = array();
$builtin_icons = houzez_listing_fields_for_icons_luxury();
$all_icons_fields = array_merge($builtin_icons, $custom_fields_array);
foreach ($all_icons_fields as $key => $icon_field) {

    $prefix = '';
    if( !array_key_exists($key, $builtin_icons)) {
        $prefix = 'c_';
    }

    $custom_licon_fields[] = array(
        'id'        => $prefix.$key,
        'type'      => 'media',
        'title'     => $icon_field,
        'read-only' => false,
        'subtitle'  => esc_html__( 'Upload jpg, png or svg icon', 'houzez-child' ),
    );
}

/* Icons
----------------------------------------------------------------*/
Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Luxury Homes Icons', 'houzez-child' ),
    'id'     => 'luxury-homes',
    'desc'   => esc_html__( 'Icons for the Luxury Homes property detail page', 'houzez-child' ),
    'subsection' => true,
    'fields' => $custom_licon_fields
));

Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Mortgage Calculator', 'houzez-child' ),
    'id'     => 'prop-details-mortgage-cal',
    'desc'   => '',
    'subsection' => true,
    'fields' => array(
        array(
            'id'          => 'cal_where',
            'type'        => 'select',
            'title'       => esc_html__( 'Select the Status', 'houzez-child' ),
            'subtitle'    => esc_html__( 'Select status where you want to hide mortgage calculator', 'houzez-child' ),
            'desc'        => '',
            'multi'    => true,
            'data'  => 'terms',
            'args'  => array(
                'taxonomy' => array( 'property_status' ),
                'hide_empty' => false,
            )
        ),
        array(
            'id'       => 'mcal_down_payment',
            'type'     => 'text',
            'title'    => esc_html__( 'Default Down Payment', 'houzez-child' ),
            'subtitle' => esc_html__( 'Enter default down payment percentage(%)', 'houzez-child' ),
            'default'  => '15',
            'validate' => 'numeric'
        ),
        array(
            'id'       => 'mcal_terms',
            'type'     => 'text',
            'title'    => esc_html__( 'Default Terms(years)', 'houzez-child' ),
            'subtitle' => '',
            'default'  => '20',
            'validate' => 'numeric'
        ),
        array(
            'id'       => 'mcal_interest_rate',
            'type'     => 'text',
            'title'    => esc_html__( 'Default Interest Rate(%)', 'houzez-child' ),
            'subtitle' => '',
            'default'  => '3.5',
            'validate' => 'numeric'
        ),
        array(
            'id'       => 'mcal_prop_tax_enable',
            'type'     => 'switch',
            'title'    => esc_html__( 'Annual Property Tax Rate', 'houzez-child' ),
            'desc' => esc_html__( 'Enable or disable property tax', 'houzez-child' ),
            'default'  => 1,
            'on'       => esc_html__( 'Enabled', 'houzez-child' ),
            'off'      => esc_html__( 'Disabled', 'houzez-child' ),
        ),
        array(
            'id'       => 'mcal_prop_tax',
            'type'     => 'text',
            'title'    => esc_html__( 'Default Annual Property tax Rate(%)', 'houzez-child' ),
            'subtitle' => '',
            'default'  => '1.2',
            'required' => array('mcal_prop_tax_enable', '=', '1'),
            'validate' => 'numeric'
        ),
        array(
            'id'       => 'mcal_hi_enable',
            'type'     => 'switch',
            'title'    => esc_html__( 'Annual Home Insurance', 'houzez-child' ),
            'desc' => esc_html__( 'Enable or disable annual home insurance', 'houzez-child' ),
            'default'  => 1,
            'on'       => esc_html__( 'Enabled', 'houzez-child' ),
            'off'      => esc_html__( 'Disabled', 'houzez-child' ),
        ),
        array(
            'id'       => 'mcal_hi',
            'type'     => 'text',
            'title'    => esc_html__( 'Default Annual Home Insurance', 'houzez-child' ),
            'subtitle' => '',
            'default'  => '2000',
            'required' => array('mcal_hi_enable', '=', '1'),
            'validate' => 'numeric'
        ),
        array(
            'id'       => 'mcal_hoa_enable',
            'type'     => 'switch',
            'title'    => esc_html__( 'Monthly HOA Fees', 'houzez-child' ),
            'desc' => esc_html__( 'Enable or disable Monthly HOA Fees', 'houzez-child' ),
            'default'  => 1,
            'on'       => esc_html__( 'Enabled', 'houzez-child' ),
            'off'      => esc_html__( 'Disabled', 'houzez-child' ),
        ),
        array(
            'id'       => 'mcal_hoa',
            'type'     => 'text',
            'title'    => esc_html__( 'Default Monthly HOA Fees', 'houzez-child' ),
            'subtitle' => '',
            'default'  => '250',
            'required' => array('mcal_hoa_enable', '=', '1'),
            'validate' => 'numeric'
        ),
        array(
            'id'       => 'mcal_pmi_enable',
            'type'     => 'switch',
            'title'    => esc_html__( 'PMI', 'houzez-child' ),
            'desc' => esc_html__( 'Enable or disable pmi', 'houzez-child' ),
            'default'  => 1,
            'on'       => esc_html__( 'Enabled', 'houzez-child' ),
            'off'      => esc_html__( 'Disabled', 'houzez-child' ),
        ),
        array(
            'id'       => 'mcal_pmi',
            'type'     => 'text',
            'title'    => esc_html__( 'Default PMI(%)', 'houzez-child' ),
            'subtitle' => '',
            'default'  => '',
            'required' => array('mcal_pmi_enable', '=', '1'),
            'validate' => 'numeric'
        ),

    )
));

Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Similar Properties', 'houzez-child' ),
    'id'     => 'property-similar-showhide',
    'desc'   => '',
    'subsection' => true,
    'fields' => array(
        array(
            'id'       => 'houzez_similer_properties',
            'type'     => 'switch',
            'title'    => esc_html__( 'Similar Properties', 'houzez-child' ),
            'desc' => esc_html__( 'Enable or disable the similar properties on the property detail page.', 'houzez-child' ),
            'default'  => 0,
            'on'       => esc_html__( 'Enabled', 'houzez-child' ),
            'off'      => esc_html__( 'Disabled', 'houzez-child' ),
        ),
        array(
            'id'       => 'houzez_similer_properties_type',
            'type'     => 'select',
            'multi'     => true,
            'title'    => esc_html__( 'Similar Properties Criteria', 'houzez-child' ),
            'desc' => esc_html__( "Choose which criteria you want to use to display similar properties.", 'houzez-child' ),
            'options'  => array(
                'property_type' => esc_html__('Property Type', 'houzez-child'),
                'property_status' => esc_html__('Property Status', 'houzez-child'),
                'property_label' => esc_html__('Property Label', 'houzez-child'),
                'property_feature' => esc_html__('Property Feature', 'houzez-child'),
                'property_country' => esc_html__('Property Country', 'houzez-child'),
                'property_state' => esc_html__('Property State', 'houzez-child'),
                'property_city' => esc_html__('Property City', 'houzez-child'),
                'property_area' => esc_html__('Property Area', 'houzez-child'),
            ),
            'default' => 'property_type'
        ),

        array(
            'id'       => 'similar_order',
            'type'     => 'select',
            'title'    => __('Default Order', 'houzez-child'),
            'desc' => '',
            'options'  => array(
                'a_title' => esc_html__( 'Title - ASC', 'houzez-child' ),
                'd_title' => esc_html__( 'Title - DESC', 'houzez-child' ),
                'd_date' => esc_html__( 'Date New to Old', 'houzez-child' ),
                'a_date' => esc_html__( 'Date Old to New', 'houzez-child' ),
                'd_price' => esc_html__( 'Price (High to Low)', 'houzez-child' ),
                'a_price' => esc_html__( 'Price (Low to High)', 'houzez-child' ),
                'featured_first' => esc_html__( 'Show Featured Listings on Top', 'houzez-child' ),
                'random' => esc_html__( 'Random', 'houzez-child' ),
            ),
            'default' => 'd_date'
        ),

        array(
            'id'       => 'houzez_similer_properties_view',
            'type'     => 'select',
            'title'    => esc_html__( 'Similar Properties View', 'houzez-child' ),
            'desc' => esc_html__( "Select the view to display for similar properties.", 'houzez-child' ),
            'options'  => array(
                'Listings Version 1' => array(
                    'list-view-v1' => 'List View',
                    'grid-view-v1' => 'Grid View',
                ),
                'Listings Version 2' => array(
                    'list-view-v2' => 'List View',
                    'grid-view-v2' => 'Grid View',
                ),
                'grid-view-v3' => 'Grid View v3',
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
            'id'       => 'houzez_similer_properties_count',
            'type'     => 'select',
            'title'    => esc_html__( 'Similar Properties Number', 'houzez-child' ),
            'desc' => esc_html__( "Select how many similar properties to display", 'houzez-child' ),
            'options'  => array(
                1 => 1,
                2 => 2,
                3 => 3,
                4 => 4,
                5 => 5,
                6 => 6,
                7 => 7,
                8 => 8,
                9 => 9,
                10 => 10,
            ),
            'default' => 4
        )
    )
));

Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Reviews & Ratings', 'houzez-child' ),
    'id'     => 'property-reviews',
    'desc'   => '',
    'subsection' => true,
    'fields' => array(

        array(
            'id'       => 'property_reviews',
            'type'     => 'switch',
            'title'    => esc_html__( 'Reviews & Ratings', 'houzez-child' ),
            'desc' => esc_html__( 'Enable or disable the reviews & ratings on the property detail page.', 'houzez-child' ),
            'default'  => 1,
            'on'       => esc_html__( 'Enabled', 'houzez-child' ),
            'off'      => esc_html__( 'Disabled', 'houzez-child' ),
        ),
        array(
            'id'       => 'login_for_review',
            'type'     => 'switch',
            'title'    => esc_html__( 'Allow review only for loggedIn user?', 'houzez-child' ),
            'desc' => '',
            'default'  => 0,
            'on'       => esc_html__( 'Enabled', 'houzez-child' ),
            'off'      => esc_html__( 'Disabled', 'houzez-child' ),
        ),
        array(
            'id'       => 'property_reviews_approved_by_admin',
            'type'     => 'switch',
            'title'    => esc_html__( 'New Ratings Approved By Admin', 'houzez-child' ),
            'desc' => esc_html__( 'New reviews & ratings must be approved by the administrator', 'houzez-child' ),
            'default'  => 0,
            'on'       => esc_html__( 'Yes', 'houzez-child' ),
            'off'      => esc_html__( 'No', 'houzez-child' ),
        ),
        array(
            'id'       => 'update_review_approved',
            'type'     => 'switch',
            'title'    => esc_html__( 'Updated Ratings Approved by Admin', 'houzez-child' ),
            'desc' => esc_html__( 'Updated reviews & ratings must be approved by the administrator', 'houzez-child' ),
            'default'  => 0,
            'on'       => esc_html__( 'Yes', 'houzez-child' ),
            'off'      => esc_html__( 'No', 'houzez-child' ),
        ),
        array(
            'id'       => 'num_of_review',
            'type'     => 'text',
            'title'    => esc_html__( 'Number of Reviews', 'houzez-child' ),
            'desc' => esc_html__( 'Enter the number of reviews to display on the property detail page', 'houzez-child' ),
            'default'  => 5,
        )
    )
));

Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Breadcrumbs', 'houzez-child' ),
    'id'     => 'property-breadcrumbs',
    'desc'   => '',
    'subsection' => true,
    'fields' => array(

        array(
            'id'       => 'single_prop_breadcrumb',
            'type'     => 'radio',
            'title'    => '',
            'subtitle' => esc_html__('Choose breadcrumb type for single property page', 'houzez-child'),
            'default'  => 'property_type',
            'options'  => array(
                'property_type' => esc_html__('Property Type', 'houzez-child'),
                'property_status' => esc_html__('Property Status', 'houzez-child'),
                'property_status_type' => esc_html__('Property Status and Type', 'houzez-child'),
                'property_city' => esc_html__('Property City', 'houzez-child'),
                'property_area' => esc_html__('Property Area', 'houzez-child'),
                'property_city_area' => esc_html__('Property City and Area', 'houzez-child'),
            )
        )
    )
));


Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Next/Prev Property', 'houzez-child' ),
    'id'     => 'property-next-prev',
    'desc'   => '',
    'subsection' => true,
    'fields' => array(

        array(
            'id'       => 'enable_next_prev_prop',
            'type'     => 'switch',
            'title'    => esc_html__( 'Next/Prev Property Navigation', 'houzez-child' ),
            'desc' => esc_html__( 'Enable or disable the next/prev property navigation at the end of the property detail page', 'houzez-child' ),
            'default'  => 0,
            'on'       => esc_html__( 'Enabled', 'houzez-child' ),
            'off'      => esc_html__( 'Disabled', 'houzez-child' ),
        )
    )
));

Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Disclaimer', 'houzez-child' ),
    'id'     => 'property-disclaimer',
    'desc'   => '',
    'subsection' => true,
    'fields' => array(

        array(
            'id'       => 'enable_disclaimer',
            'type'     => 'switch',
            'title'    => esc_html__( 'Show Disclaimer', 'houzez-child' ),
            'desc' => esc_html__( 'Enable or disable disclaimer', 'houzez-child' ),
            'default'  => 1,
            'on'       => esc_html__( 'Enabled', 'houzez-child' ),
            'off'      => esc_html__( 'Disabled', 'houzez-child' ),
        ),
        array(
            'id'       => 'property_disclaimer',
            'type'     => 'textarea',
            'title'    => esc_html__( 'Disclaimer Text', 'houzez-child' ),
            'desc' => esc_html__( 'Add disclaimer text globally for all properties, this can be also set on single property level when add/edit property', 'houzez-child' ),
        )
    )
));