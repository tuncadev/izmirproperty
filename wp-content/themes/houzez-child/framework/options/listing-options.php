<?php
global $houzez_opt_name, $custom_fields_array;

Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Listings Options', 'houzez-child' ),
    'id'     => 'lisitngs-options',
    'desc'   => esc_html__( 'Manage list or grid view information on the listing pages', 'houzez-child' ),
    'icon'   => 'el-icon-th-list el-icon-small',
    'fields'		=> array(
        array(
            'id'       => 'template_sidebar_pos',
            'type'     => 'select',
            'title'    => esc_html__('Sidebar Position', 'houzez-child'),
            'subtitle' => esc_html__('Choose sidebar position for listing templates', 'houzez-child'),
            'desc' => '',
            'options'  => array(
                'sbor'   => esc_html__( 'Sidebar on Right ', 'houzez-child' ),
                'wrap-order-first' => esc_html__( 'Sidebar on Left', 'houzez-child' ),
            ),
            'default'  => 'sbor',
        ),
        array(
            'id'       => 'listing_link_target',
            'type'     => 'button_set',
            'title'    => esc_html__( 'Open listing link to?', 'houzez-child' ),
            'subtitle' => '',
            'default'  => '_self',
            'options' => array(
                '_self' => esc_html__('Same Tab', 'houzez-child'), 
                '_blank' => esc_html__('New Tab', 'houzez-child'), 
            ), 
        ),
        array(
            'id'       => 'disable_compare',
            'type'     => 'switch',
            'title'    => esc_html__( 'Compare Buttom', 'houzez-child' ),
            'subtitle' => esc_html__( 'Enable or disable the compare button on the listing page', 'houzez-child' ),
            'default'  => 1,
            'on'       => esc_html__( 'Enable', 'houzez-child' ),
            'off'      => esc_html__( 'Disable', 'houzez-child' ),
        ),
        array(
            'id'       => 'disable_favorite',
            'type'     => 'switch',
            'title'    => esc_html__( 'Add To Favorite Button', 'houzez-child' ),
            'subtitle' => esc_html__( 'Enable or disable the add to favorite button on the listing page', 'houzez-child' ),
            'default'  => 1,
            'on'       => esc_html__( 'Enable', 'houzez-child' ),
            'off'      => esc_html__( 'Disable', 'houzez-child' ),
        ),
        array(
            'id'       => 'disable_preview',
            'type'     => 'switch',
            'title'    => esc_html__( 'Preview Button', 'houzez-child' ),
            'subtitle' => esc_html__( 'Enable or disable the preview button on the listing grid', 'houzez-child' ),
            'default'  => 1,
            'on'       => esc_html__( 'Enable', 'houzez-child' ),
            'off'      => esc_html__( 'Disable', 'houzez-child' ),
        ),
        array(
            'id'       => 'disable_address',
            'type'     => 'switch',
            'title'    => esc_html__( 'Address', 'houzez-child' ),
            'subtitle' => esc_html__( 'Enable or disable address on listing grids and detail page', 'houzez-child' ),
            'default'  => 1,
            'on'       => esc_html__( 'Enable', 'houzez-child' ),
            'off'      => esc_html__( 'Disable', 'houzez-child' ),
        ),
        array(
            'id'       => 'disable_agent',
            'type'     => 'switch',
            'title'    => esc_html__( 'Agent Name', 'houzez-child' ),
            'subtitle' => esc_html__( 'Enable or disable the agent name on the listing page', 'houzez-child' ),
            'default'  => 1,
            'on'       => esc_html__( 'Enable', 'houzez-child' ),
            'off'      => esc_html__( 'Disable', 'houzez-child' ),
        ),
        array(
            'id'       => 'disable_date',
            'type'     => 'switch',
            'title'    => esc_html__( 'Property Date', 'houzez-child' ),
            'subtitle' => esc_html__( 'Enable or disable the property date on the listing page', 'houzez-child' ),
            'default'  => 1,
            'on'       => esc_html__( 'Enable', 'houzez-child' ),
            'off'      => esc_html__( 'Disable', 'houzez-child' ),
        ),
        array(
            'id'       => 'disable_detail_btn',
            'type'     => 'switch',
            'title'    => esc_html__( 'Details Button', 'houzez-child' ),
            'subtitle' => esc_html__( 'Enable or disable the detail button on the listing page', 'houzez-child' ),
            'default'  => 1,
            'on'       => esc_html__( 'Enable', 'houzez-child' ),
            'off'      => esc_html__( 'Disable', 'houzez-child' ),
        ),
        array(
            'id'       => 'disable_type',
            'type'     => 'switch',
            'title'    => esc_html__( 'Property Type', 'houzez-child' ),
            'subtitle' => esc_html__( 'It shows only for the listing page v1, v4 and v5', 'houzez-child' ),
            'desc' => esc_html__( 'Enable or disable the property type on the listing page (It shows only for the listing page v1, v4 and v5)', 'houzez-child' ),
            'default'  => 1,
            'on'       => esc_html__( 'Enable', 'houzez-child' ),
            'off'      => esc_html__( 'Disable', 'houzez-child' ),
        ),
        array(
            'id'       => 'disable_status',
            'type'     => 'switch',
            'title'    => esc_html__( 'Property Status', 'houzez-child' ),
            'subtitle' => esc_html__( 'Enable or disable the property status for grids', 'houzez-child' ),
            'desc'     => '',
            'default'  => 1,
            'on'       => esc_html__( 'Enable', 'houzez-child' ),
            'off'      => esc_html__( 'Disable', 'houzez-child' ),
        ),
        array(
            'id'       => 'disable_label',
            'type'     => 'switch',
            'title'    => esc_html__( 'Property Label', 'houzez-child' ),
            'subtitle' => esc_html__( 'Enable or disable the property label for grids', 'houzez-child' ),
            'desc'     => '',
            'default'  => 1,
            'on'       => esc_html__( 'Enable', 'houzez-child' ),
            'off'      => esc_html__( 'Disable', 'houzez-child' ),
        ),
        
    )
));

/*-------------------------------------------------------------------------------
* Builder v1, v2 and half map 
*------------------------------------------------------------------------------*/
$listing_composer = array(
    'bed' => esc_html__('Bedrooms', 'houzez-child'),
    'bath' => esc_html__('Bathrooms', 'houzez-child'),
    'area-size' => esc_html__('Area Size', 'houzez-child'),
);

$listing_composer_disabled = array(
    'room' => esc_html__('Rooms', 'houzez-child'),
    'land-area' => esc_html__('Land Area', 'houzez-child'),
    'garage' => esc_html__('Garage', 'houzez-child'),
    'property-id' => esc_html__('Property ID', 'houzez-child'),
);

$listing_composer_disabled = array_merge($listing_composer_disabled, $custom_fields_array);

Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Composer', 'houzez-child' ),
    'id'     => 'lisitngs-composer',
    'desc'   => esc_html__( 'Manage list or grid view information on the listing pages', 'houzez-child' ),
    'subsection' => true,
    'fields'        => array(
        
        array(
            'id'      => 'listing_data_composer',
            'type'    => 'sorter',
            'title'   => 'Listing Meta Composer',
            'subtitle'    => esc_html__( 'Maximum 4 options allowed', 'houzez-child' ),
            'desc'    => esc_html__( 'Drag and drop layout manager, to quickly organize your grid and list meta.
', 'houzez-child' ),
            'options' => array(
                'enabled'  => $listing_composer,
                'disabled' => $listing_composer_disabled
            ),
        ),

        array(
            'id'      => 'listing_address_composer',
            'type'    => 'sorter',
            'title'   => 'Listing Address Composer',
            'subtitle'    => esc_html__( 'Manage address meta for list, grid and listing detail', 'houzez-child' ),
            'options' => array(
                'enabled'  => array(
                    'address' => esc_html__('Address', 'houzez-child') 
                ),
                'disabled' => array(
                    'country' => esc_html__('Country', 'houzez-child'),
                    'state' => esc_html__('State', 'houzez-child'),
                    'city' => esc_html__('City', 'houzez-child'),
                    'area' => esc_html__('Area', 'houzez-child'),
                    'streat-address' => esc_html__('Street Address', 'houzez-child'),
                ),
            ),
        ),
        
        
    )
));

Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Gallery', 'houzez-child' ),
    'id'     => 'lisitngs-gallery-slide',
    'desc'   => esc_html__( 'Manage gallery for listings grid/list', 'houzez-child' ),
    'subsection' => true,
    'fields'  => array(
        array(
            'id'       => 'disable_property_gallery',
            'type'     => 'switch',
            'title'    => esc_html__( 'Property Gallery', 'houzez-child' ),
            'subtitle' => esc_html__( 'Enable or disable images gallery for grid/list', 'houzez-child' ),
            'default'  => 1,
            'on'       => esc_html__( 'Enabled', 'houzez-child' ),
            'off'      => esc_html__( 'Disabled', 'houzez-child' ),
        ),

        array(
            'id'       => 'featured_img_in_gallery',
            'type'     => 'switch',
            'title'    => esc_html__( 'Exclude Featured Image', 'houzez-child' ),
            'subtitle' => esc_html__( 'Exlude property featured image from gallery for grid/list', 'houzez-child' ),
            'default'  => 0,
            'on'       => esc_html__( 'Yes', 'houzez-child' ),
            'off'      => esc_html__( 'No', 'houzez-child' ),
        ),

        array(
            'id'       => 'gallery_behaviour',
            'type'     => 'button_set',
            'title'    => esc_html__('Gallery Behaviour', 'houzez-child'),
            'subtitle' => esc_html__('Choose gallery behaviour', 'houzez-child'),
            'desc'     => '',
            'options' => array(
                'houzez-show-gallery' => esc_html__('Show Gallery as Active', 'houzez-child'), 
                'on_hover' => esc_html__('Show Gallery on Hover', 'houzez-child'),
             ), 
            'required' => array('disable_property_gallery', '=', '1'),
            'default' => 'on_hover'
        ) 
    )
));

$custom_icon_fields = $builtin_fields = $default_fields = array();

$default_fields [] = array(
    'id'       => 'icons_type',
    'type'     => 'select',
    'title'    => esc_html__('Icons Type', 'houzez-child'),
    'subtitle' => '',
    'options'  => array(
        'houzez-default'   => esc_html__( 'Houzez Default Icons', 'houzez-child' ),
        'font-awesome'   => esc_html__( 'Fontawesome Icons v5', 'houzez-child' ),
        'custom'   => esc_html__( 'Custom Image Icons', 'houzez-child' ),
    ),
    'default'  => 'houzez-default',
);

$builtin_fields = houzez_listing_fields_for_icons();
$all_fields = array_merge($builtin_fields, $custom_fields_array);

foreach ($all_fields as $key => $icon_field) {
    $custom_icon_fields[] = array(
        'id'        => $key,
        'type'      => 'media',
        'title'     => $icon_field,
        'read-only' => false,
        'required'   => array('icons_type', '=', 'custom'),
        'subtitle'  => esc_html__( 'Upload jpg, png or svg icon', 'houzez-child' ),
    );
    $custom_icon_fields[] = array(
        'id'        => 'fa_'.$key,
        'type'      => 'text',
        'title'     => $icon_field,
        'required'   => array('icons_type', '=', 'font-awesome'),
        'subtitle'  => esc_html__( 'Add font awesome icon class', 'houzez-child' ),
    );
}


$custom_icon_fields = array_merge($default_fields, $custom_icon_fields);

Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Icons', 'houzez-child' ),
    'id'     => 'lisitngs-composer-icons',
    'desc'   => esc_html__( 'Manage list or grid icons on the listing pages', 'houzez-child' ),
    'subsection' => true,
    'fields'  => $custom_icon_fields
));

Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Meta v1, v4 and v7', 'houzez-child' ),
    'id'     => 'lisitngs-meta-v1v4',
    'desc'   => esc_html__( 'Manage list or grid (grid v.1, v.4 and v.7) meta type on the listing pages', 'houzez-child' ),
    'subsection' => true,
    'fields'  => array(
        array(
            'id'       => 'v1_4_meta_type',
            'type'     => 'select',
            'title'    => esc_html__('Meta Type v1, v4 and v7', 'houzez-child'),
            'subtitle' => esc_html__('This option only works on the list view and grid v.1, v.4 and v.7', 'houzez-child'),
            'desc' => esc_html__('Select meta type', 'houzez-child'),
            'options'  => array(
                'icons'   => esc_html__( 'Icons', 'houzez-child' ),
                'icons_text' => esc_html__( 'Icons + Text', 'houzez-child' ),
                'text'   => esc_html__( 'Text', 'houzez-child' ),
            ),
            'default'  => 'icons',
        )
    )
));

Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Meta v2', 'houzez-child' ),
    'id'     => 'lisitngs-meta-v2',
    'desc'   => esc_html__( 'Manage the meta type for the grid v2', 'houzez-child' ),
    'subsection' => true,
    'fields'  => array(
        array(
            'id'       => 'v2_meta_type',
            'type'     => 'select',
            'title'    => esc_html__('Meta Type v2', 'houzez-child'),
            'subtitle' => esc_html__('This option only works on the grid view v.2', 'houzez-child'),
            'desc' => esc_html__('Select meta type', 'houzez-child'),
            'options'  => array(
                'icons'   => esc_html__( 'With Icons', 'houzez-child' ),
                'without_icons' => esc_html__( 'Without Icons', 'houzez-child' ),
            ),
            'default'  => 'icons',
        )
    )
));


/*-------------------------------------------------------------------------------
* Listing Preview lightbox
*------------------------------------------------------------------------------*/
$preview_composer = array(
    'bed' => esc_html__('Bedrooms', 'houzez-child'),
    'bath' => esc_html__('Bathrooms', 'houzez-child'),
    'garage' => esc_html__('Garage', 'houzez-child'),
    'area-size' => esc_html__('Area Size', 'houzez-child'),
    'land-area' => esc_html__('Land Area', 'houzez-child'),
    'year-built' => esc_html__('Year Built', 'houzez-child')
);

$preview_composer_disabled = array('property-id' => esc_html__('Property ID', 'houzez-child'), 'room' => esc_html__('Rooms', 'houzez-child'));

$preview_composer_disabled = array_merge($preview_composer_disabled, $custom_fields_array);
Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Listing Preview lightbox', 'houzez-child' ),
    'id'     => 'listing-preview-options',
    'desc'   => esc_html__( 'Manage listing preview information', 'houzez-child' ),
    'subsection' => true,
    'fields' => array(
        array(
            'id'       => 'preview_meta_type',
            'type'     => 'select',
            'title'    => esc_html__('Meta Type', 'houzez-child'),
            'subtitle' => esc_html__('Select meta type for listing preview lightbox', 'houzez-child'),
            'desc' => esc_html__('Select meta type', 'houzez-child'),
            'options'  => array(
                'icons'   => esc_html__( 'Icons', 'houzez-child' ),
                'icons_text' => esc_html__( 'Icons + Text', 'houzez-child' ),
                'text'   => esc_html__( 'Text', 'houzez-child' ),
            ),
            'default'  => 'icons_text',
        ),
        array(
            'id'      => 'preview_data_composer',
            'type'    => 'sorter',
            'title'   => 'Meta Composer',
            'subtitle'    => esc_html__( 'Maximum 6 options allowed', 'houzez-child' ),
            'desc'    => esc_html__( 'Drag and drop layout manager, to quickly organize your preview meta.
', 'houzez-child' ),
            'options' => array(
                'enabled'  => $preview_composer,
                'disabled' => $preview_composer_disabled
            ),
        ),
        
    )
));

Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Placeholder', 'houzez-child' ),
    'id'     => 'lisitngs-placeholder',
    'desc'   => esc_html__( 'Manage listings default Placeholder', 'houzez-child' ),
    'subsection' => true,
    'fields'        => array(  
        array(
            'id'        => 'houzez_placeholder',
            'url'       => false,
            'type'      => 'media',
            'title'     => esc_html__( 'Placeholder', 'houzez-child' ),
            'default'   => array( 'url' => '' ),
            'subtitle'  => esc_html__( 'Upload default placeholder. Recommended Size 1170 x 850 pixels', 'houzez-child' ),
            'desc'      => '',
        ), 
    )
));

Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Mark as Sold', 'houzez-child' ),
    'id'     => 'lisitngs-markassold',
    'desc'   => '',
    'subsection' => true,
    'fields'        => array(  
        array(
            'id'       => 'enable_mark_as_sold',
            'type'     => 'switch',
            'title'    => esc_html__( 'Enable Mark as Sold', 'houzez-child' ),
            'subtitle' => '',
            'default'  => 0,
            'on'       => esc_html__( 'Enabled', 'houzez-child' ),
            'off'      => esc_html__( 'Disabled', 'houzez-child' ),
        ),
        array(
            'id'        => 'mark_sold_status',
            'type'      => 'select',
            'title'     => esc_html__( 'Mark as Sold - Status', 'houzez-child' ),
            'subtitle'  => esc_html__( 'Select property status which you want to use for mark as sold feature.', 'houzez-child' ),
            'desc'      => '',
            'data'      => 'terms',
            'required' => array('enable_mark_as_sold', '=', '1'),
            'args'  => array(
                'taxonomy' => array( 'property_status' ),
                'hide_empty' => false,
            )
        ), 
    )
));