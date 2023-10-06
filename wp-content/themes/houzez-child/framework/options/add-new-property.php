<?php
global $houzez_opt_name, $custom_fields_array;

Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Add New Property', 'houzez-child' ),
    'id'     => 'add-property-page',
    'desc'   => '',
    'icon'   => 'el-icon-plus-sign el-icon-small',
    'fields' => array(
        array(
            'id'       => 'submit_form_type',
            'type'     => 'select',
            'title'    => esc_html__('Add New Property Mode', 'houzez-child'),
            'subtitle' => '',
            'desc'     => esc_html__('Select between multi-steps or one step', 'houzez-child'),
            'options'  => array(
                'mstep'   => esc_html__( 'Multi-steps', 'houzez-child' ),
                'one_step'   => esc_html__( 'One-step', 'houzez-child' )
            ),
            'default'  => 'mstep',
        ),
        array(
            'id'       => 'listings_admin_approved',
            'type'     => 'select',
            'title'    => esc_html__('New Submited Listings Approval', 'houzez-child'),
            'subtitle' => '',
            'desc'     => esc_html__('Select yes if all new submissions must be approved by the administrator', 'houzez-child'),
            'options'  => array(
                'yes'   => esc_html__( 'Yes', 'houzez-child' ),
                'no'   => esc_html__( 'No', 'houzez-child' )
            ),
            'default'  => 'yes',
        ),
        array(
            'id'       => 'edit_listings_admin_approved',
            'type'     => 'select',
            'title'    => esc_html__('Edited Listings Approval', 'houzez-child'),
            'subtitle' => '',
            'desc'     => esc_html__('Select yes if all updates must be approved by the administrator', 'houzez-child'),
            'options'  => array(
                'yes'   => esc_html__( 'Yes', 'houzez-child' ),
                'no'   => esc_html__( 'No', 'houzez-child' )
            ),
            'default'  => 'no',
        ),
        array(
            'id'       => 're-activate_listings_admin_approved',
            'type'     => 'select',
            'title'    => esc_html__('Reactivate Listings Approval', 'houzez-child'),
            'subtitle' => '',
            'desc'     => esc_html__('Select yes if all reactivate must be approved by the administrator', 'houzez-child'),
            'options'  => array(
                'yes'   => esc_html__( 'Yes', 'houzez-child' ),
                'no'   => esc_html__( 'No', 'houzez-child' )
            ),
            'default'  => 'no',
        ),
        array(
            'id'       => 'enable_multi_agents',
            'type'     => 'switch',
            'title'    => esc_html__( 'Multi Agents Mode', 'houzez-child' ),
            'desc'     => esc_html__( 'Enable or Disable the multi agents mode', 'houzez-child' ),
            'subtitle' => esc_html__( 'Assign a property to several agents', 'houzez-child' ),
            'default'  => 0,
            'on'       => esc_html__( 'Enable', 'houzez-child' ),
            'off'      => esc_html__( 'Disable', 'houzez-child' ),
        ),
        array(
            'id'       => 'range-bedsroomsbaths',
            'type'     => 'switch',
            'title'    => esc_html__( 'Range Values for Bedrooms, Bathrooms and Rooms', 'houzez-child' ),
            'desc'     => __( 'Note: Set search query Like for bedrooms, bathrooms and Rooms under <strong>Searches -> Settings</strong> to make it searchable.', 'houzez-child' ),
            'subtitle' => esc_html__( 'Enable range inputs for bedrooms, rooms and bathrooms fields. Example( 3 - 5, 2 - 4)', 'houzez-child' ),
            'default'  => 0,
            'on'       => esc_html__( 'Enable', 'houzez-child' ),
            'off'      => esc_html__( 'Disable', 'houzez-child' ),
        ),
        array(
            'id'       => 'add_ms_section-start',
            'type'     => 'section',
            'title'    => esc_html__( 'Multi Selection', 'houzez-child' ),
            'subtitle' => '',
            'indent'   => true,
        ),

        array(
            'id'       => 'ams_type',
            'type'     => 'switch',
            'title'    => esc_html__( 'Property Types', 'houzez-child' ),
            'desc'     => '',
            'subtitle' => esc_html__('Allow multiple selection of property types', 'houzez-child'),
            'default'  => 0,
            'on'       => esc_html__( 'Yes', 'houzez-child' ),
            'off'      => esc_html__( 'No', 'houzez-child' ),
        ),

        array(
            'id'       => 'ams_status',
            'type'     => 'switch',
            'title'    => esc_html__( 'Property Status', 'houzez-child' ),
            'desc'     => '',
            'subtitle' => esc_html__('Allow multiple selection of property status', 'houzez-child'),
            'default'  => 0,
            'on'       => esc_html__( 'Yes', 'houzez-child' ),
            'off'      => esc_html__( 'No', 'houzez-child' ),
        ),

        array(
            'id'       => 'ams_label',
            'type'     => 'switch',
            'title'    => esc_html__( 'Property Labels', 'houzez-child' ),
            'desc'     => '',
            'subtitle' => esc_html__('Allow multiple selection of property labels', 'houzez-child'),
            'default'  => 0,
            'on'       => esc_html__( 'Yes', 'houzez-child' ),
            'off'      => esc_html__( 'No', 'houzez-child' ),
        ),
        array(
            'id'     => 'add_ms_section_end',

            'type'   => 'section',
            'indent' => false,
        ),
        
        array(
            'id'       => 'location_dropdowns',
            'type'     => 'select',
            'title'    => esc_html__('Display Drop-down Menus', 'houzez-child'),
            'subtitle' => '',
            'desc'     => esc_html__('Select Yes to replace the Property Location text fields with drop-down menus in order to select the property City, Area, County/State and Country', 'houzez-child'),
            'options'  => array(
                'yes'   => esc_html__( 'Yes', 'houzez-child' ),
                'no'   => esc_html__( 'No', 'houzez-child' )
            ),
            'default'  => 'no',
        ),
        array(
            'id'		=> 'area_prefix_default',
            'type'		=> 'select',
            'title'		=> esc_html__( 'Default area prefix', 'houzez-child' ),
            'subtitle'	=> esc_html__( 'Default option for area prefix.', 'houzez-child' ),
            'options'	=> array(
                'SqFt' => 'Square Feet - ft²',
                'm²' => 'Square Meters - m²',
            ),
            'default' => 'SqFt'
        ),
        array(
            'id'       => 'area_prefix_changeable',
            'type'     => 'switch',
            'title'    => esc_html__( 'Allow user to change area prefix?', 'houzez-child' ),
            'desc'     => '',
            'subtitle' => '',
            'default'  => 1,
            'on'       => esc_html__( 'Yes', 'houzez-child' ),
            'off'      => esc_html__( 'No', 'houzez-child' ),
        ),
        array(
            'id'       => 'auto_property_id',
            'type'     => 'switch',
            'title'    => esc_html__( 'Auto Generate Property ID ?', 'houzez-child' ),
            'desc'     => '',
            'subtitle' => esc_html__( 'Enable/Disable auto generate property id', 'houzez-child' ),
            'default'  => 0,
            'on'       => esc_html__( 'Enabled', 'houzez-child' ),
            'off'      => esc_html__( 'Disabled', 'houzez-child' ),
        ),
        array(
            'id'        => 'property_id_pattern',
            'type'      => 'text',
            'title'     => esc_html__( 'Property ID Pattern', 'houzez-child' ),
            'subtitle'  => esc_html__( "Enter pattern for property id. Example HZ-{ID}", 'houzez-child' ),
            'default' => '{ID}',
            'required' => array('auto_property_id', '=', '1')
        ),
        array(
            'id'        => 'property_id_prefix',
            'type'      => 'text',
            'title'     => esc_html__( 'Property ID Prefix', 'houzez-child' ),
            'subtitle'  => esc_html__( "Enter prefix for property id, leave empty if you don't want to show prefix. Example HZ-", 'houzez-child' ),
            'default' => ''
        ),
        array(
            'id'       => 'max_prop_images',
            'type'     => 'text',
            'title'    => esc_html__( 'Maximum Images', 'houzez-child' ),
            'desc'     => '',
            'subtitle' => esc_html__('Maximum images allow for single property.', 'houzez-child'),
            'default' => '50'
        ),
        array(
            'id'       => 'image_max_file_size',
            'type'     => 'text',
            'title'    => esc_html__( 'Maximum File Size', 'houzez-child' ),
            'desc'     => '',
            'subtitle' => esc_html__('Maximum upload image size. For example 10kb, 500kb, 1mb, 10m, 100mb', 'houzez-child'),
            'default' => '12000kb'
        ),
        array(
            'id'       => 'max_prop_attachments',
            'type'     => 'text',
            'title'    => esc_html__( 'Maximum Attachments', 'houzez-child' ),
            'desc'     => '',
            'subtitle' => '',
            'default' => '3'
        ),
        array(
            'id'       => 'attachment_max_file_size',
            'type'     => 'text',
            'title'    => esc_html__( 'Maximum File Size for attachments', 'houzez-child' ),
            'desc'     => '',
            'subtitle' => esc_html__('Maximum upload attachment size. For example 10kb, 500kb, 1mb, 10m, 100mb', 'houzez-child'),
            'default' => '3000kb'
        ),
    )
));

Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Layout Manager', 'houzez-child' ),
    'id'     => 'Add-new-property-layout-manager',
    'desc'   => '',
    'subsection' => true,
    'fields' => array(
        array(
            'id'      => 'property_form_sections',
            'type'    => 'sorter',
            'title'   => 'Add New Property Form Layout Manager',
            'subtitle'    => 'Drag-and-drop each module to quickly organize your property submission form layout',
            'options' => array(
                'enabled'  => array(
                    'description-price'     => esc_html__('Description & Price', 'houzez-child'),
                    'media'                 => esc_html__('Property Media', 'houzez-child'),
                    'details'               => esc_html__('Property Details', 'houzez-child'),
                    'features'              => esc_html__('Property Features', 'houzez-child'),
                    'location'              => esc_html__('Property Location', 'houzez-child'),
                    'virtual_tour'          => esc_html__('360° Virtual Tour', 'houzez-child'),
                    'floorplans'            => esc_html__('Floor Plans', 'houzez-child'),
                    'multi-units'           => esc_html__('Multi Units / Sub Properties', 'houzez-child'),
                    'agent_info'            => esc_html__('Agent Information', 'houzez-child'),
                    'private_note'          => esc_html__('Private Notes', 'houzez-child')
                ),
                'disabled' => array(
                    'attachments'    => esc_html__('Attachments', 'houzez-child'),
                    'energy_class'    => esc_html__('Energy Class', 'houzez-child')
                )
            ),
        ),
    )
));



$submit_form_fields = array(
    'beds' => esc_html__('Bedrooms', 'houzez-child'),
    'rooms' => esc_html__('Rooms', 'houzez-child'),
    'baths' => esc_html__('Bathrooms', 'houzez-child'),
    'area-size' => esc_html__('Area Size', 'houzez-child'),
    'area-size-unit' => esc_html__('Area Size Unit', 'houzez-child'),
    'land-area' => esc_html__('Land Area', 'houzez-child'),
    'land-area-unit' => esc_html__('Land Area Unit', 'houzez-child'),
    'garage' => esc_html__('Garage', 'houzez-child'),
    'garage-size' => esc_html__('Garage Size', 'houzez-child'),
    'property-id' => esc_html__('Property ID', 'houzez-child'),
    'year' => esc_html__('Year Built', 'houzez-child'),
);
$submit_form_fields = array_merge($submit_form_fields, $custom_fields_array);

Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Show/Hide Form Fields', 'houzez-child' ),
    'id'     => 'property-showhide',
    'desc'   => '',
    'subsection' => true,
    'fields' => array(
        array(
            'id'      => 'adp_details_fields',
            'type'    => 'sorter',
            'title'   => 'Property Detail Section',
            'subtitle'    => 'Drag-and-drop each module to quickly organize the form fields order of Property Details section.',
            'options' => array(
                'enabled'  => $submit_form_fields,
                'disabled' => array()
            ),
        ),
        array(
            'id'       => 'hide_add_prop_fields',
            'type'     => 'checkbox',
            'title'    => esc_html__( 'Add New Property Form Fields', 'houzez-child' ),
            'desc'     => '',
            'subtitle' => esc_html__('Select which fields you want to disable from the Add New Property form', 'houzez-child'),
            'options'  => array(
                'prop_type' => esc_html__('Property Type', 'houzez-child'),
                'prop_status' => esc_html__('Property Status', 'houzez-child'),
                'prop_label' => esc_html__('Property Label', 'houzez-child'),
                'sale_rent_price' => esc_html__('Sale or Rent Price', 'houzez-child'),
                'second_price' => esc_html__('Second Price', 'houzez-child'),
                'price_postfix' => esc_html__('After Price Label', 'houzez-child'),
                'price_prefix' => esc_html__('Price Prefix', 'houzez-child'),
                'video_url' => esc_html__('Property Video Url', 'houzez-child'),
                'neighborhood' => esc_html__('Neighborhood', 'houzez-child'),
                'city' => esc_html__('City', 'houzez-child'),
                'postal_code' => esc_html__('Postal Code/Zip', 'houzez-child'),
                'state' => esc_html__('County/State', 'houzez-child'),
                'country' => esc_html__('Country', 'houzez-child'),
                'map' => esc_html__('Map Section', 'houzez-child'),
                'map_address' => esc_html__('Map Address', 'houzez-child'),
                'additional_details' => esc_html__('Additional Details', 'houzez-child'),
            ),
            'default' => array(
                'prop_type' => '0',
                'prop_status' => '0',
                'prop_label' => '0',
                'sale_rent_price' => '0',
                'second_price' => '0',
                'price_postfix' => '0',
                'price_prefix' => '0',
                'video_url' => '0',
                'neighborhood' => '0',
                'city' => '0',
                'postal_code' => '0',
                'state' => '0',
                'country' => '0',
                'map' => '0',
                'map_address' => '0',
                'additional_details' => '0',
            )
        ),
    )
));


$submit_form_required_fields = array(
    'title' => esc_html__('Title', 'houzez-child'),

    'prop_type' => esc_html__('Type', 'houzez-child'),
    'prop_status' => esc_html__('Status', 'houzez-child'),
    'prop_labels' => esc_html__('Label', 'houzez-child'),
    'sale_rent_price' => esc_html__('Sale or Rent Price', 'houzez-child'),
    'prop_second_price' => esc_html__('Second Price ( Display optional price for rental or square feet )', 'houzez-child'),
    'price_label' => esc_html__('After Price Label', 'houzez-child'),
    'prop_id' => esc_html__('Property ID', 'houzez-child'),
    'bedrooms' => esc_html__('Bedrooms', 'houzez-child'),
    'rooms' => esc_html__('Rooms', 'houzez-child'),
    'bathrooms' => esc_html__('Bathrooms', 'houzez-child'),
    'area_size' => esc_html__('Area Size', 'houzez-child'),
    'land_area' => esc_html__('Land Area', 'houzez-child'),
    'garages' => esc_html__('Garages', 'houzez-child'),
    'year_built' => esc_html__('Year Built', 'houzez-child'),
    'energy_class' => esc_html__('Energy Class', 'houzez-child'),
    'property_map_address' => esc_html__('Map Address', 'houzez-child'),
    'country' => esc_html__('Country', 'houzez-child'),
    'state' => esc_html__('State', 'houzez-child'),
    'city' => esc_html__('City', 'houzez-child'),
    'area' => esc_html__('Area', 'houzez-child'),
    
    
);
$submit_form_required_fields = array_merge($submit_form_required_fields, $custom_fields_array);

Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Required Form Fields', 'houzez-child' ),
    'id'     => 'property-required-fields',
    'desc'   => '',
    'subsection' => true,
    'fields' => array(
        array(
            'id'       => 'enable_title_limit',
            'type'     => 'switch',
            'title'    => esc_html__( 'Property Title Limit', 'houzez-child' ),
            'desc'     => '',
            'subtitle' => esc_html__( 'Limit Title length for add listing', 'houzez-child' ),
            'default'  => 0,
            'on'       => esc_html__( 'Enabled', 'houzez-child' ),
            'off'      => esc_html__( 'Disabled', 'houzez-child' ),
        ),
        array(
            'id'       => 'property_title_limit',
            'type'     => 'text',
            'title'    => esc_html__( 'Number of Characters', 'houzez-child' ),
            'subtitle' => esc_html__( 'Enter number of allowed characters.ie 150', 'houzez-child' ),
            'default'  => '',
            'validate'  => 'numeric',
            'required'  => array('enable_title_limit', '=', '1'),
        ),
        array(
            'id'       => 'gallery_image_req',
            'type'     => 'switch',
            'title'    => esc_html__( 'Gallery Image', 'houzez-child' ),
            'desc'     => '',
            'subtitle' => esc_html__( 'Make at least 1 gallery image required?', 'houzez-child' ),
            'default'  => 1,
            'on'       => esc_html__( 'Enabled', 'houzez-child' ),
            'off'      => esc_html__( 'Disabled', 'houzez-child' ),
        ),
        array(
            'id'       => 'required_fields',
            'type'     => 'checkbox',
            'title'    => esc_html__( 'Required Fields', 'houzez-child' ),
            'desc'     => '',
            'subtitle' => esc_html__('Select which fields of the Add New Property form are mandatory', 'houzez-child'),
            'options'  => $submit_form_required_fields,
            'default' => array(
                'title' => '1',
                'prop_type' => '0',
                'gallery_image' => '1',
                'prop_status' => '0',
                'prop_labels' => '0',
                'sale_rent_price' => '1',
                'prop_second_price' => '0',
                'price_label' => '0',
                'prop_id' => '0',
                'bedrooms' => '0',
                'rooms' => '0',
                'bathrooms' => '0',
                'area_size' => '1',
                'land_area' => '0',
                'garages' => '0',
                'year_built' => '0',
                'property_map_address' => '1',
                'energy_class' => '0',
                'area' => '0',
                'city' => '0',
                'state' => '0',
                'country' => '0',
                
            )
        ),
    )
));