<?php
global $houzez_opt_name, $allowed_html_array;

$houzez_local = houzez_get_localization();

Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Translation', 'houzez-child' ),
    'id'     => 'labels-management',
    'desc'   => '',
    'icon'   => 'el-icon-home el-icon-small',
    'fields'        => array(
        
    )
));

Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Common', 'houzez-child' ),
    'id'     => 'common-labels',
    'desc'   => '',
    'subsection'   => true,
    'fields'        => array(
        array(
            'id'       => 'cl_common_section-start',
            'type'     => 'section',
            'title'    => '',
            'subtitle' => esc_html__('Manage common strings accross site', 'houzez-child'),
            'indent'   => true,
        ),
        array(
            'id'       => 'cl_featured_label',
            'type'     => 'text',
            'title'    => esc_html__('Featured Label', 'houzez-child'),
            'desc'     => '',
            'subtitle' => '',
            'default' => esc_html__('Featured', 'houzez-child')
        ),
        array(
            'id'       => 'cl_property',
            'type'     => 'text',
            'title'    => esc_html__('Property', 'houzez-child'),
            'desc'     => '',
            'subtitle' => '',
            'default' => esc_html__('Property', 'houzez-child')
        ),
        array(
            'id'       => 'cl_properties',
            'type'     => 'text',
            'title'    => esc_html__('Properties', 'houzez-child'),
            'desc'     => '',
            'subtitle' => '',
            'default' => esc_html__('Properties', 'houzez-child')
        ),
        array(
            'id'       => 'cl_favorite',
            'type'     => 'text',
            'title'    => esc_html__('Favourite', 'houzez-child'),
            'desc'     => '',
            'subtitle' => '',
            'default' => esc_html__('Favourite', 'houzez-child')
        ),
        array(
            'id'       => 'cl_preview',
            'type'     => 'text',
            'title'    => esc_html__('Preview', 'houzez-child'),
            'desc'     => '',
            'subtitle' => '',
            'default' => esc_html__('Preview', 'houzez-child')
        ),
        array(
            'id'       => 'cl_add_compare',
            'type'     => 'text',
            'title'    => esc_html__('Add Compare', 'houzez-child'),
            'desc'     => '',
            'subtitle' => '',
            'default' => esc_html__('Add to Compare', 'houzez-child')
        ),
        array(
            'id'       => 'cl_remove_compare',
            'type'     => 'text',
            'title'    => esc_html__('Remove Compare', 'houzez-child'),
            'desc'     => '',
            'subtitle' => '',
            'default' => esc_html__('Remove from Compare', 'houzez-child')
        ),
        array(
            'id'       => 'cl_none',
            'type'     => 'text',
            'title'    => esc_html__('None Label', 'houzez-child'),
            'default' => esc_html__('None', 'houzez-child')
        ),
        array(
            'id'       => 'cl_select',
            'type'     => 'text',
            'title'    => esc_html__('Select Label', 'houzez-child'),
            'default' => esc_html__('Select', 'houzez-child')
        ),
        array(
            'id'       => 'cl_only_digits',
            'type'     => 'text',
            'title'    => esc_html__('Only digits Label', 'houzez-child'),
            'default' => esc_html__('Only digits', 'houzez-child')
        ),
        array(
            'id'       => 'cl_example',
            'type'     => 'text',
            'title'    => esc_html__('For Example Label', 'houzez-child'),
            'default' => esc_html__('For example', 'houzez-child')
        ),
        array(
            'id'       => 'cl_hide',
            'type'     => 'text',
            'title'    => esc_html__('Hide Label', 'houzez-child'),
            'default' => esc_html__('Hide', 'houzez-child')
        ),
        array(
            'id'       => 'cl_show',
            'type'     => 'text',
            'title'    => esc_html__('Show Label', 'houzez-child'),
            'default' => esc_html__('Show', 'houzez-child')
        ),
        array(
            'id'       => 'cl_yes',
            'type'     => 'text',
            'title'    => esc_html__('Yes Label', 'houzez-child'),
            'default' => esc_html__('Yes', 'houzez-child')
        ),
        array(
            'id'       => 'cl_no',
            'type'     => 'text',
            'title'    => esc_html__('No Label', 'houzez-child'),
            'default' => esc_html__('No', 'houzez-child')
        ),
        array(
            'id'       => 'cl_or',
            'type'     => 'text',
            'title'    => esc_html__('OR Label', 'houzez-child'),
            'default' => esc_html__('OR', 'houzez-child')
        ),
        array(
            'id'       => 'cl_select_all',
            'type'     => 'text',
            'title'    => esc_html__('Select All', 'houzez-child'),
            'default' => esc_html__('Select All', 'houzez-child')
        ),
        array(
            'id'       => 'cl_deselect_all',
            'type'     => 'text',
            'title'    => esc_html__('Deselect All', 'houzez-child'),
            'default' => esc_html__('Deselect All', 'houzez-child')
        ),
        array(
            'id'       => 'cl_no_results_matched',
            'type'     => 'text',
            'title'    => esc_html__('No results matched', 'houzez-child'),
            'default' => esc_html__('No results matched', 'houzez-child')
        ),
        array(
            'id'       => 'cl_common_section-end',
            'type'     => 'section',
            'indent'   => false,
        ),
    )
));

Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Searches', 'houzez-child' ),
    'id'     => 'searches-labels',
    'desc'   => '',
    'subsection'   => true,
    'fields'        => array(
        array(
            'id'       => 'srh_labels_section-start',
            'type'     => 'section',
            'title'    => '',
            'subtitle' => esc_html__('Manage labels for searches accross the site', 'houzez-child'),
            'indent'   => true,
        ),

        array(
            'id'       => 'srh_item_selected',
            'type'     => 'text',
            'title'    => esc_html__('items selected', 'houzez-child'),
            'default' => esc_html__('items selected', 'houzez-child')
        ),
        array(
            'id'       => 'srh_any',
            'type'     => 'text',
            'title'    => esc_html__('Any', 'houzez-child'),
            'default' => esc_html__('Any', 'houzez-child')
        ),
        array(
            'id'       => 'srh_keyword',
            'type'     => 'text',
            'title'    => esc_html__('Keyword', 'houzez-child'),
            'default' => esc_html__('Enter Keyword...', 'houzez-child')
        ),
        array(
            'id'       => 'srh_address',
            'type'     => 'text',
            'title'    => esc_html__('Address, town, street, zip or property ID', 'houzez-child'),
            'default' => esc_html__('Enter an address, town, street, zip or property ID','houzez-child')
        ),

        array(
            'id'       => 'srh_csa',
            'type'     => 'text',
            'title'    => esc_html__('City, State or Area', 'houzez-child'),
            'default' => esc_html__('Search City, State or Area', 'houzez-child')
        ),
        array(
            'id'       => 'srh_location',
            'type'     => 'text',
            'title'    => esc_html__('Location', 'houzez-child'),
            'default' => esc_html__('Location', 'houzez-child')
        ),
        array(
            'id'       => 'srh_radius',
            'type'     => 'text',
            'title'    => esc_html__('Radius', 'houzez-child'),
            'default' => esc_html__('Radius', 'houzez-child')
        ),
        array(
            'id'       => 'srh_type',
            'type'     => 'text',
            'title'    => esc_html__('Type', 'houzez-child'),
            'default' => esc_html__('Type', 'houzez-child')
        ),
        array(
            'id'       => 'srh_types',
            'type'     => 'text',
            'title'    => esc_html__('types selected', 'houzez-child'),
            'default' => esc_html__('types selected', 'houzez-child')
        ),
        array(
            'id'       => 'srh_status',
            'type'     => 'text',
            'title'    => esc_html__('Status', 'houzez-child'),
            'default' => esc_html__('Status', 'houzez-child')
        ),
        array(
            'id'       => 'srh_statuses',
            'type'     => 'text',
            'title'    => esc_html__('statuses selected', 'houzez-child'),
            'default' => esc_html__('status selected', 'houzez-child')
        ),
        array(
            'id'       => 'srh_label',
            'type'     => 'text',
            'title'    => esc_html__('Label', 'houzez-child'),
            'default' => esc_html__('Label', 'houzez-child')
        ),
        array(
            'id'       => 'srh_labels',
            'type'     => 'text',
            'title'    => esc_html__('Labels', 'houzez-child'),
            'default' => esc_html__('Labels', 'houzez-child')
        ),

        array(
            'id'       => 'srh_all_status',
            'type'     => 'text',
            'title'    => esc_html__('All Status', 'houzez-child'),
            'default' => esc_html__('All Status', 'houzez-child')
        ),
        array(
            'id'       => 'srh_bedrooms',
            'type'     => 'text',
            'title'    => esc_html__('Bedrooms', 'houzez-child'),
            'default' => esc_html__('Bedrooms', 'houzez-child')
        ),
        array(
            'id'       => 'srh_studio',
            'type'     => 'text',
            'title'    => esc_html__('Studio', 'houzez-child'),
            'default' => esc_html__('Studio', 'houzez-child')
        ),
        array(
            'id'       => 'srh_rooms',
            'type'     => 'text',
            'title'    => esc_html__('Rooms', 'houzez-child'),
            'default' => esc_html__('Rooms', 'houzez-child')
        ),
        array(
            'id'       => 'srh_bathrooms',
            'type'     => 'text',
            'title'    => esc_html__('Bathrooms', 'houzez-child'),
            'default' => esc_html__('Bathrooms', 'houzez-child')
        ),
        array(
            'id'       => 'srh_beds',
            'type'     => 'text',
            'title'    => esc_html__('Beds', 'houzez-child'),
            'default' => esc_html__('Beds', 'houzez-child')
        ),
        array(
            'id'       => 'srh_baths',
            'type'     => 'text',
            'title'    => esc_html__('Baths', 'houzez-child'),
            'default' => esc_html__('Baths', 'houzez-child')
        ),
        array(
            'id'       => 'srh_min_area',
            'type'     => 'text',
            'title'    => esc_html__('Min Area', 'houzez-child'),
            'default' => esc_html__('Min. Area', 'houzez-child')
        ),
        array(
            'id'       => 'srh_max_area',
            'type'     => 'text',
            'title'    => esc_html__('Max Area', 'houzez-child'),
            'default' => esc_html__('Max. Area', 'houzez-child')
        ),
        array(
            'id'       => 'srh_min_land_area',
            'type'     => 'text',
            'title'    => esc_html__('Min Land Area', 'houzez-child'),
            'default' => esc_html__('Min. Land Area', 'houzez-child')
        ),
        array(
            'id'       => 'srh_max_land_area',
            'type'     => 'text',
            'title'    => esc_html__('Max Land Area', 'houzez-child'),
            'default' => esc_html__('Max. Land Area', 'houzez-child')
        ),
        array(
            'id'       => 'srh_min_price',
            'type'     => 'text',
            'title'    => esc_html__('Min Price', 'houzez-child'),
            'default' => esc_html__('Min. Price', 'houzez-child')
        ),
        array(
            'id'       => 'srh_max_price',
            'type'     => 'text',
            'title'    => esc_html__('Max Price', 'houzez-child'),
            'default' => esc_html__('Max. Price', 'houzez-child')
        ),
        array(
            'id'       => 'srh_price',
            'type'     => 'text',
            'title'    => esc_html__('Price', 'houzez-child'),
            'default' => esc_html__('Price', 'houzez-child')
        ),
        array(
            'id'       => 'srh_price_range',
            'type'     => 'text',
            'title'    => esc_html__('Price Range', 'houzez-child'),
            'default' => esc_html__('Price Range', 'houzez-child')
        ),
        array(
            'id'       => 'srh_from',
            'type'     => 'text',
            'title'    => esc_html__('From', 'houzez-child'),
            'default' => esc_html__('From', 'houzez-child')
        ),
        array(
            'id'       => 'srh_to',
            'type'     => 'text',
            'title'    => esc_html__('To', 'houzez-child'),
            'default' => esc_html__('To', 'houzez-child')
        ),
        array(
            'id'       => 'srh_prop_id',
            'type'     => 'text',
            'title'    => esc_html__('Property ID', 'houzez-child'),
            'default' => esc_html__('Property ID', 'houzez-child')
        ),
        array(
            'id'       => 'srh_countries',
            'type'     => 'text',
            'title'    => esc_html__('All Countries', 'houzez-child'),
            'default' => esc_html__('All Countries', 'houzez-child')
        ),
        array(
            'id'       => 'srh_states',
            'type'     => 'text',
            'title'    => esc_html__('All States', 'houzez-child'),
            'default' => esc_html__('All States', 'houzez-child')
        ),
        array(
            'id'       => 'srh_cities',
            'type'     => 'text',
            'title'    => esc_html__('All Cities', 'houzez-child'),
            'default' => esc_html__('All Cities', 'houzez-child')
        ),
        array(
            'id'       => 'srh_areas',
            'type'     => 'text',
            'title'    => esc_html__('All Areas', 'houzez-child'),
            'default' => esc_html__('All Areas', 'houzez-child')
        ),
        array(
            'id'       => 'srh_areass',
            'type'     => 'text',
            'title'    => esc_html__('Areas Selected', 'houzez-child'),
            'default' => esc_html__('areas selected', 'houzez-child')
        ),
        array(
            'id'       => 'srh_cities_selected',
            'type'     => 'text',
            'title'    => esc_html__('Cities Selected', 'houzez-child'),
            'default' => esc_html__('cities selected', 'houzez-child')
        ),

        array(
            'id'       => 'srh_garage',
            'type'     => 'text',
            'title'    => esc_html__('Garage', 'houzez-child'),
            'default' => esc_html__('Garage', 'houzez-child')
        ),

        array(
            'id'       => 'srh_year_built',
            'type'     => 'text',
            'title'    => esc_html__('Year Built', 'houzez-child'),
            'default' => esc_html__('Year Built', 'houzez-child')
        ),

        array(
            'id'       => 'srh_currency',
            'type'     => 'text',
            'title'    => esc_html__('Currency', 'houzez-child'),
            'default' => esc_html__('Currency', 'houzez-child')
        ),

        array(
            'id'       => 'srh_other_features',
            'type'     => 'text',
            'title'    => esc_html__('Other Features', 'houzez-child'),
            'default' => esc_html__('Other Features', 'houzez-child')
        ),

        array(
            'id'       => 'srh_btn_adv',
            'type'     => 'text',
            'title'    => esc_html__('Advanced Button', 'houzez-child'),
            'default' => esc_html__('Advanced', 'houzez-child')
        ),
        array(
            'id'       => 'srh_btn_search',
            'type'     => 'text',
            'title'    => esc_html__('Search Button', 'houzez-child'),
            'default' => esc_html__('Search', 'houzez-child')
        ),
        array(
            'id'       => 'srh_btn_go',
            'type'     => 'text',
            'title'    => esc_html__('Go Button', 'houzez-child'),
            'default' => esc_html__('Go', 'houzez-child')
        ),
        array(
            'id'       => 'srh_btn_save_search',
            'type'     => 'text',
            'title'    => esc_html__('Save Search Button', 'houzez-child'),
            'default' => esc_html__('Save Search', 'houzez-child')
        ),

        array(
            'id'       => 'srh_dock_title',
            'type'     => 'text',
            'title'    => esc_html__('Dock Search Main Title', 'houzez-child'),
            'default' => esc_html__('Advanced Search', 'houzez-child')
        ),

        array(
            'id'       => 'srh_mobile_title',
            'type'     => 'text',
            'title'    => esc_html__('Mobile Search Placeholder', 'houzez-child'),
            'default' => esc_html__('Search', 'houzez-child')
        ),

        array(
            'id'       => 'srh_btn_more',
            'type'     => 'text',
            'title'    => esc_html__('More Options Button', 'houzez-child'),
            'default' => esc_html__('More Options', 'houzez-child')
        ),
        array(
            'id'       => 'srh_clear',
            'type'     => 'text',
            'title'    => esc_html__('Clear', 'houzez-child'),
            'default' => esc_html__('Clear', 'houzez-child')
        ),
        array(
            'id'       => 'srh_apply',
            'type'     => 'text',
            'title'    => esc_html__('Apply', 'houzez-child'),
            'default' => esc_html__('Apply', 'houzez-child')
        ),

        array(
            'id'       => 'srh_labels_section-end',
            'type'     => 'section',
            'indent'   => false,
        ),
    )
));

Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Grid, List, Card & Preview', 'houzez-child' ),
    'id'     => 'glcp-translation',
    'desc'   => esc_html__( 'Manage titles for listings Grid, List, Card and Preview views', 'houzez-child' ),
    'subsection'   => true,
    'fields'        => array(
        
        /*--------------------------------------------------------------
        * Grid, list, card and preview
        **------------------------------------------------------------*/
        array(
            'id'       => 'cl_glcp_section-start',
            'type'     => 'section',
            'indent'   => true,
        ),

        array(
            'id'       => 'glc_bedroom',
            'type'     => 'text',
            'title'    => esc_html__('Bedroom Label', 'houzez-child'),
            'default' => esc_html__('Bedroom', 'houzez-child')
        ),
        array(
            'id'       => 'glc_bedrooms',
            'type'     => 'text',
            'title'    => esc_html__('Bedrooms Label', 'houzez-child'),
            'default' => esc_html__('Bedrooms', 'houzez-child')
        ),
        array(
            'id'       => 'glc_bathroom',
            'type'     => 'text',
            'title'    => esc_html__('Bathroom Label', 'houzez-child'),
            'default' => esc_html__('Bathroom', 'houzez-child')
        ),
        array(
            'id'       => 'glc_bathrooms',
            'type'     => 'text',
            'title'    => esc_html__('Bathrooms Label', 'houzez-child'),
            'default' => esc_html__('Bathrooms', 'houzez-child')
        ),
        array(
            'id'       => 'glc_bed',
            'type'     => 'text',
            'title'    => esc_html__('Bed Label', 'houzez-child'),
            'default' => esc_html__('Bed', 'houzez-child')
        ),
        array(
            'id'       => 'glc_beds',
            'type'     => 'text',
            'title'    => esc_html__('Beds Label', 'houzez-child'),
            'default' => esc_html__('Beds', 'houzez-child')
        ),
        array(
            'id'       => 'glc_room',
            'type'     => 'text',
            'title'    => esc_html__('Room Label', 'houzez-child'),
            'default' => esc_html__('Room', 'houzez-child')
        ),
        array(
            'id'       => 'glc_rooms',
            'type'     => 'text',
            'title'    => esc_html__('Rooms Label', 'houzez-child'),
            'default' => esc_html__('Rooms', 'houzez-child')
        ),
        array(
            'id'       => 'glc_bath',
            'type'     => 'text',
            'title'    => esc_html__('Bath Label', 'houzez-child'),
            'default' => esc_html__('Bath', 'houzez-child')
        ),
        array(
            'id'       => 'glc_baths',
            'type'     => 'text',
            'title'    => esc_html__('Baths Label', 'houzez-child'),
            'default' => esc_html__('Baths', 'houzez-child')
        ),
        array(
            'id'       => 'glc_garage',
            'type'     => 'text',
            'title'    => esc_html__('Garage Label', 'houzez-child'),
            'default' => esc_html__('Garage', 'houzez-child')
        ),
        array(
            'id'       => 'glc_garages',
            'type'     => 'text',
            'title'    => esc_html__('Garages Label', 'houzez-child'),
            'default' => esc_html__('Garages', 'houzez-child')
        ),
        array(
            'id'       => 'glc_year_built',
            'type'     => 'text',
            'title'    => esc_html__('Year Built Label', 'houzez-child'),
            'default' => esc_html__('Year Built', 'houzez-child')
        ),
        array(
            'id'       => 'glc_id',
            'type'     => 'text',
            'title'    => esc_html__('ID Label', 'houzez-child'),
            'default' => esc_html__('ID', 'houzez-child')
        ),
        array(
            'id'       => 'glc_listing_id',
            'type'     => 'text',
            'title'    => esc_html__('Listing ID Label', 'houzez-child'),
            'default' => esc_html__('Listing ID', 'houzez-child')
        ),
        array(
            'id'       => 'glc_detail_btn',
            'type'     => 'text',
            'title'    => esc_html__('Details Button Label', 'houzez-child'),
            'default' => esc_html__('Details', 'houzez-child')
        ),
        array(
            'id'       => 'cl_glcp_section-end',
            'type'     => 'section',
            'indent'   => false,
        ),
        
    )
));

Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Property Detail Page', 'houzez-child' ),
    'id'     => 'property-details-labels',
    'desc'   => esc_html__( 'Manage titles for property detail page.', 'houzez-child' ),
    'subsection'   => true,
    'fields'        => array(
        
        /*--------------------------------------------------------------
        * Property detail and create listing section titles
        **------------------------------------------------------------*/
        array(
            'id'       => 'sp_sections_section-start',
            'type'     => 'section',
            'title'    => esc_html__('Sections Titles', 'houzez-child'),
            'subtitle' => esc_html__('Manage Single Property page section titles', 'houzez-child'),
            'indent'   => true,
        ),

        array(
            'id'       => 'sps_overview',
            'type'     => 'text',
            'title'    => esc_html__('Overview title', 'houzez-child'),
            'default' => esc_html__('Overview', 'houzez-child')
        ),

        array(
            'id'       => 'sps_description',
            'type'     => 'text',
            'title'    => esc_html__('Description title', 'houzez-child'),
            'default' => esc_html__('Description', 'houzez-child')
        ),

        array(
            'id'       => 'sps_documents',
            'type'     => 'text',
            'title'    => esc_html__('Property Documents title', 'houzez-child'),
            'default' => esc_html__('Property Documents', 'houzez-child')
        ),

        array(
            'id'       => 'sps_details',
            'type'     => 'text',
            'title'    => esc_html__('Details title', 'houzez-child'),
            'default' => esc_html__('Details', 'houzez-child')
        ),
        array(
            'id'       => 'sps_additional_details',
            'type'     => 'text',
            'title'    => esc_html__('Additional details title', 'houzez-child'),
            'default' => esc_html__('Additional details', 'houzez-child')
        ),
        array(
            'id'       => 'sps_address',
            'type'     => 'text',
            'title'    => esc_html__('Address title', 'houzez-child'),
            'default' => esc_html__('Address', 'houzez-child')
        ),
        array(
            'id'       => 'sps_features',
            'type'     => 'text',
            'title'    => esc_html__('Features title', 'houzez-child'),
            'default' => esc_html__('Features', 'houzez-child')
        ),
        array(
            'id'       => 'sps_video',
            'type'     => 'text',
            'title'    => esc_html__('Video title', 'houzez-child'),
            'default' => esc_html__('Video', 'houzez-child')
        ),
        array(
            'id'       => 'sps_virtual_tour',
            'type'     => 'text',
            'title'    => esc_html__('360° Virtual Tour title', 'houzez-child'),
            'default' => esc_html__('360° Virtual Tour', 'houzez-child')
        ),

        array(
            'id'       => 'sps_sub_listings',
            'type'     => 'text',
            'title'    => esc_html__('Sub listings title', 'houzez-child'),
            'default' => esc_html__('Sub listings', 'houzez-child')
        ),
        array(
            'id'       => 'sps_energy_class',
            'type'     => 'text',
            'title'    => esc_html__('Energy Class title', 'houzez-child'),
            'default' => esc_html__('Energy Class', 'houzez-child')
        ),
        array(
            'id'       => 'sps_floor_plans',
            'type'     => 'text',
            'title'    => esc_html__('Floor Plans title', 'houzez-child'),
            'default' => esc_html__('Floor Plans', 'houzez-child')
        ),
        array(
            'id'       => 'sps_calculator',
            'type'     => 'text',
            'title'    => esc_html__('Mortgage Calculator title', 'houzez-child'),
            'default' => esc_html__('Mortgage Calculator', 'houzez-child')
        ),
        array(
            'id'       => 'sps_walkscore',
            'type'     => 'text',
            'title'    => esc_html__('Walk Score title', 'houzez-child'),
            'default' => esc_html__('Walk Score', 'houzez-child')
        ),
        array(
            'id'       => 'sps_nearby',
            'type'     => 'text',
            'title'    => esc_html__("What's Nearby? title", 'houzez-child'),
            'default' => esc_html__("What's Nearby?", 'houzez-child')
        ),
        array(
            'id'       => 'sps_schedule_tour',
            'type'     => 'text',
            'title'    => esc_html__("Schedule a Tour title", 'houzez-child'),
            'default' => esc_html__("Schedule a Tour", 'houzez-child')
        ),

        array(
            'id'       => 'sps_contact',
            'type'     => 'text',
            'title'    => esc_html__("Contact title", 'houzez-child'),
            'default' => esc_html__("Contact", 'houzez-child')
        ),

        array(
            'id'       => 'sps_contact_info',
            'type'     => 'text',
            'title'    => esc_html__("Contact Information title", 'houzez-child'),
            'default' => esc_html__("Contact Information", 'houzez-child')
        ),

        array(
            'id'       => 'sps_your_info',
            'type'     => 'text',
            'title'    => esc_html__("Your information title", 'houzez-child'),
            'default' => esc_html__("Your information", 'houzez-child')
        ),

        array(
            'id'       => 'sps_propperty_enqry',
            'type'     => 'text',
            'title'    => esc_html__("Enquire About This Property title", 'houzez-child'),
            'default' => esc_html__("Enquire About This Property", 'houzez-child')
        ),

        array(
            'id'       => 'sps_reviews',
            'type'     => 'text',
            'title'    => esc_html__("Reviews title", 'houzez-child'),
            'default' => esc_html__("Reviews", 'houzez-child')
        ),
        array(
            'id'       => 'sps_similar_listings',
            'type'     => 'text',
            'title'    => esc_html__("Similar Listings title", 'houzez-child'),
            'default' => esc_html__("Similar Listings", 'houzez-child')
        ),

        array(
            'id'       => 'sp_sections_section-end',
            'type'     => 'section',
            'indent'   => false,
        ),
        /*------------------------------- Detail page labels ---------------------------------------*/
        array(
            'id'       => 'sp_labels_section-start',
            'type'     => 'section',
            'title'    => esc_html__('Property Detail Labels', 'houzez-child'),
            'subtitle' => esc_html__('Manage property detail page labels', 'houzez-child'),
            'indent'   => true,
        ),

        array(
            'id'       => 'spl_prop_id',
            'type'     => 'text',
            'title'    => esc_html__("Property ID", 'houzez-child'),
            'default' => esc_html__("Property ID", 'houzez-child')
        ),
        array(
            'id'       => 'spl_price',
            'type'     => 'text',
            'title'    => esc_html__('Price', 'houzez-child'),
            'default' => esc_html__("Price", 'houzez-child')
        ),

        array(
            'id'       => 'spl_prop_type',
            'type'     => 'text',
            'title'    => esc_html__("Property Type", 'houzez-child'),
            'default' => esc_html__("Property Type", 'houzez-child')
        ),
        array(
            'id'       => 'spl_prop_status',
            'type'     => 'text',
            'title'    => esc_html__("Property Status", 'houzez-child'),
            'default' => esc_html__("Property Status", 'houzez-child')
        ),
        array(
            'id'       => 'spl_prop_size',
            'type'     => 'text',
            'title'    => esc_html__("Property Size", 'houzez-child'),
            'default' => esc_html__("Property Size", 'houzez-child')
        ),
        array(
            'id'       => 'spl_land',
            'type'     => 'text',
            'title'    => esc_html__("Land Area", 'houzez-child'),
            'default' => esc_html__("Land Area", 'houzez-child')
        ),
        array(
            'id'       => 'spl_room',
            'type'     => 'text',
            'title'    => esc_html__('Room Label', 'houzez-child'),
            'default' => esc_html__('Room', 'houzez-child')
        ),
        array(
            'id'       => 'spl_rooms',
            'type'     => 'text',
            'title'    => esc_html__('Rooms Label', 'houzez-child'),
            'default' => esc_html__('Rooms', 'houzez-child')
        ),
        array(
            'id'       => 'spl_bedroom',
            'type'     => 'text',
            'title'    => esc_html__('Bedroom Label', 'houzez-child'),
            'default' => esc_html__('Bedroom', 'houzez-child')
        ),
        array(
            'id'       => 'spl_bedrooms',
            'type'     => 'text',
            'title'    => esc_html__('Bedrooms Label', 'houzez-child'),
            'default' => esc_html__('Bedrooms', 'houzez-child')
        ),
        array(
            'id'       => 'spl_bathroom',
            'type'     => 'text',
            'title'    => esc_html__('Bathroom Label', 'houzez-child'),
            'default' => esc_html__('Bathroom', 'houzez-child')
        ),
        array(
            'id'       => 'spl_bathrooms',
            'type'     => 'text',
            'title'    => esc_html__('Bathrooms Label', 'houzez-child'),
            'default' => esc_html__('Bathrooms', 'houzez-child')
        ),
        array(
            'id'       => 'spl_garage',
            'type'     => 'text',
            'title'    => esc_html__('Garage Label', 'houzez-child'),
            'default' => esc_html__('Garage', 'houzez-child')
        ),
        array(
            'id'       => 'spl_garages',
            'type'     => 'text',
            'title'    => esc_html__('Garages Label', 'houzez-child'),
            'default' => esc_html__('Garages', 'houzez-child')
        ),
        array(
            'id'       => 'spl_garage_size',
            'type'     => 'text',
            'title'    => esc_html__('Garage Size Label', 'houzez-child'),
            'default' => esc_html__('Garage Size', 'houzez-child')
        ),
        array(
            'id'       => 'spl_year_built',
            'type'     => 'text',
            'title'    => esc_html__('Year Built Label', 'houzez-child'),
            'default' => esc_html__('Year Built', 'houzez-child')
        ),
        array(
            'id'       => 'spl_lot',
            'type'     => 'text',
            'title'    => esc_html__('Lot', 'houzez-child'),
            'default' => esc_html__('Lot', 'houzez-child')
        ),
        array(
            'id'       => 'spl_ogm',
            'type'     => 'text',
            'title'    => esc_html__('Open on Google Maps', 'houzez-child'),
            'default' => esc_html__('Open on Google Maps', 'houzez-child')
        ),

        array(
            'id'       => 'spl_address',
            'type'     => 'text',
            'title'    => esc_html__('Address Label', 'houzez-child'),
            'default' => esc_html__('Address', 'houzez-child')
        ),
        array(
            'id'       => 'spl_zip',
            'type'     => 'text',
            'title'    => esc_html__('Zip/Postal Code Label', 'houzez-child'),
            'default' => esc_html__('Zip/Postal Code', 'houzez-child')
        ),
        array(
            'id'       => 'spl_country',
            'type'     => 'text',
            'title'    => esc_html__('Country Label', 'houzez-child'),
            'default' => esc_html__('Country', 'houzez-child')
        ),
        array(
            'id'       => 'spl_state',
            'type'     => 'text',
            'title'    => esc_html__('State/county Label', 'houzez-child'),
            'default' => esc_html__('State/county', 'houzez-child')
        ),
        array(
            'id'       => 'spl_city',
            'type'     => 'text',
            'title'    => esc_html__('City Label', 'houzez-child'),
            'default' => esc_html__('City', 'houzez-child')
        ),
        array(
            'id'       => 'spl_area',
            'type'     => 'text',
            'title'    => esc_html__('Area Label', 'houzez-child'),
            'default' => esc_html__('Area', 'houzez-child')
        ),

        array(
            'id'       => 'sp_labels_section-end',
            'type'     => 'section',
            'indent'   => false,
        ),

        array(
            'id'       => 'sp_agent_forms_section-start',
            'type'     => 'section',
            'title'    => esc_html__('Contact Forms', 'houzez-child'),
            'subtitle' => esc_html__('Manage labels for agent contact forms and schedule tour', 'houzez-child'),
            'indent'   => true,
        ),

        array(
            'id'       => 'spl_con_name',
            'type'     => 'text',
            'title'    => esc_html__("Name", 'houzez-child'),
            'default' => esc_html__("Name", 'houzez-child')
        ),
        array(
            'id'       => 'spl_con_name_plac',
            'type'     => 'text',
            'title'    => esc_html__("Name Placeholder", 'houzez-child'),
            'default' => esc_html__("Enter your name", 'houzez-child')
        ),

        array(
            'id'       => 'spl_con_phone',
            'type'     => 'text',
            'title'    => esc_html__("Phone", 'houzez-child'),
            'default' => esc_html__("Phone", 'houzez-child')
        ),
        array(
            'id'       => 'spl_con_phone_plac',
            'type'     => 'text',
            'title'    => esc_html__("Phone Placeholder", 'houzez-child'),
            'default' => esc_html__("Enter your Phone", 'houzez-child')
        ),

        array(
            'id'       => 'spl_con_email',
            'type'     => 'text',
            'title'    => esc_html__("Email", 'houzez-child'),
            'default' => esc_html__("Email", 'houzez-child')
        ),
        array(
            'id'       => 'spl_con_email_plac',
            'type'     => 'text',
            'title'    => esc_html__("Email Placeholder", 'houzez-child'),
            'default' => esc_html__("Enter your email", 'houzez-child')
        ),

        array(
            'id'       => 'spl_con_message',
            'type'     => 'text',
            'title'    => esc_html__("Message", 'houzez-child'),
            'default' => esc_html__("Message", 'houzez-child')
        ),
        array(
            'id'       => 'spl_con_message_plac',
            'type'     => 'text',
            'title'    => esc_html__("Message Placeholder", 'houzez-child'),
            'default' => esc_html__("Enter your Message", 'houzez-child')
        ),

        array(
            'id'       => 'spl_con_interested',
            'type'     => 'text',
            'title'    => esc_html__("Message Default Prefix", 'houzez-child'),
            'default' => esc_html__("Hello, I am interested in", 'houzez-child')
        ),

        array(
            'id'       => 'spl_con_usertype',
            'type'     => 'text',
            'title'    => esc_html__("I'm a", 'houzez-child'),
            'default' => esc_html__("I'm a", 'houzez-child')
        ),
        
        array(
            'id'       => 'spl_con_select',
            'type'     => 'text',
            'title'    => esc_html__("Select", 'houzez-child'),
            'default' => esc_html__("Select", 'houzez-child')
        ),

        array(
            'id'       => 'spl_con_buyer',
            'type'     => 'text',
            'title'    => esc_html__("I'm a buyer", 'houzez-child'),
            'default' => esc_html__("I'm a buyer", 'houzez-child')
        ),

        array(
            'id'       => 'spl_con_tennant',
            'type'     => 'text',
            'title'    => esc_html__("I'm a tennant", 'houzez-child'),
            'default' => esc_html__("I'm a tennant", 'houzez-child')
        ),

        array(
            'id'       => 'spl_con_agent',
            'type'     => 'text',
            'title'    => esc_html__("I'm an agent", 'houzez-child'),
            'default' => esc_html__("I'm an agent", 'houzez-child')
        ),

        array(
            'id'       => 'spl_con_other',
            'type'     => 'text',
            'title'    => esc_html__("Other", 'houzez-child'),
            'default' => esc_html__("Other", 'houzez-child')
        ),

        array(
            'id'       => 'spl_con_view_listings',
            'type'     => 'text',
            'title'    => esc_html__("View Listings link", 'houzez-child'),
            'default' => esc_html__("View Listings", 'houzez-child')
        ),

        array(
            'id'       => 'spl_con_tour_type',
            'type'     => 'text',
            'title'    => esc_html__("Tour Type", 'houzez-child'),
            'default' => esc_html__("Tour Type", 'houzez-child')
        ),
        array(
            'id'       => 'spl_con_in_person',
            'type'     => 'text',
            'title'    => esc_html__("In Person", 'houzez-child'),
            'default' => esc_html__("In Person", 'houzez-child')
        ),
        array(
            'id'       => 'spl_con_video_chat',
            'type'     => 'text',
            'title'    => esc_html__("Video Chat", 'houzez-child'),
            'default' => esc_html__("Video Chat", 'houzez-child')
        ),
        array(
            'id'       => 'spl_con_date',
            'type'     => 'text',
            'title'    => esc_html__("Date", 'houzez-child'),
            'default' => esc_html__("Date", 'houzez-child')
        ),
        array(
            'id'       => 'spl_con_date_plac',
            'type'     => 'text',
            'title'    => esc_html__("Date Placeholder", 'houzez-child'),
            'default' => esc_html__("Select tour date", 'houzez-child')
        ),

        array(
            'id'       => 'spl_con_time',
            'type'     => 'text',
            'title'    => esc_html__("Time", 'houzez-child'),
            'default' => esc_html__("Time", 'houzez-child')
        ),

        array(
            'id'       => 'spl_btn_send',
            'type'     => 'text',
            'title'    => esc_html__("Send Email Button", 'houzez-child'),
            'default' => esc_html__("Send Email", 'houzez-child')
        ),
        array(
            'id'       => 'spl_btn_call',
            'type'     => 'text',
            'title'    => esc_html__("Call Button", 'houzez-child'),
            'default' => esc_html__("Call", 'houzez-child')
        ),

        array(
            'id'       => 'spl_btn_message',
            'type'     => 'text',
            'title'    => esc_html__("Send Message Button", 'houzez-child'),
            'default' => esc_html__("Send Message", 'houzez-child')
        ),

        array(
            'id'       => 'spl_btn_request_info',
            'type'     => 'text',
            'title'    => esc_html__("Request Information Button", 'houzez-child'),
            'default' => esc_html__("Request Information", 'houzez-child')
        ),
        array(
            'id'       => 'spl_btn_tour_sch',
            'type'     => 'text',
            'title'    => esc_html__("Submit a Tour Request Button", 'houzez-child'),
            'default' => esc_html__("Submit a Tour Request", 'houzez-child')
        ),

        array(
            'id'       => 'spl_sub_agree',
            'type'     => 'text',
            'title'    => esc_html__("By submitting this form I agree to", 'houzez-child'),
            'default' => esc_html__("By submitting this form I agree to", 'houzez-child')
        ),

        array(
            'id'       => 'spl_term',
            'type'     => 'text',
            'title'    => esc_html__("Terms of Use", 'houzez-child'),
            'default' => esc_html__("Terms of Use", 'houzez-child')
        ),

        array(
            'id'       => 'agent_forms_terms_validation',
            'type'     => 'text',
            'title'    => esc_html__( 'Terms of Use Checkbox Validation Message', 'houzez-child' ),
            'subtitle' => '',
            'default'  => esc_html__('Please accept terms of use', 'houzez-child')
        ),

        array(
            'id'       => 'sp_agent_forms_section-end',
            'type'     => 'section',
            'indent'   => false,
        ),

        /*------------------------------------------- Energy Detail page -------------------------*/
        array(
            'id'       => 'sp_energy_labels_section-start',
            'type'     => 'section',
            'title'    => esc_html__('Energy Class', 'houzez-child'),
            'subtitle' => esc_html__('Manage labels for energy class section', 'houzez-child'),
            'indent'   => true,
        ),

        array(
            'id'       => 'spl_energetic_cls',
            'type'     => 'text',
            'title'    => esc_html__("Energetic class", 'houzez-child'),
            'default' => esc_html__("Energetic class", 'houzez-child')
        ),
        
        array(
            'id'       => 'spl_energy_index',
            'type'     => 'text',
            'title'    => esc_html__("Global Energy Performance Index", 'houzez-child'),
            'default' => esc_html__("Global Energy Performance Index", 'houzez-child')
        ),
       
        array(
            'id'       => 'spl_energy_renew_index',
            'type'     => 'text',
            'title'    => esc_html__("Renewable energy performance index", 'houzez-child'),
            'default' => esc_html__("Renewable energy performance index", 'houzez-child')
        ),
        

        array(
            'id'       => 'spl_energy_build_performance',
            'type'     => 'text',
            'title'    => esc_html__("Energy performance of the building", 'houzez-child'),
            'default' => esc_html__("Energy performance of the building", 'houzez-child')
        ),
        

        array(
            'id'       => 'spl_energy_ecp_rating',
            'type'     => 'text',
            'title'    => esc_html__("EPC Current Rating", 'houzez-child'),
            'default' => esc_html__("EPC Current Rating", 'houzez-child')
        ),
    
        array(
            'id'       => 'spl_energy_ecp_p',
            'type'     => 'text',
            'title'    => esc_html__("EPC Potential Rating", 'houzez-child'),
            'default' => esc_html__("EPC Potential Rating", 'houzez-child')
        ),
        array(
            'id'       => 'spl_energy_cls',
            'type'     => 'text',
            'title'    => esc_html__("Energy class", 'houzez-child'),
            'default' => esc_html__("Energy class", 'houzez-child')
        ),
        
        array(
            'id'       => 'sp_energy_labels_section-end',
            'type'     => 'section',
            'indent'   => false,
        ),

        /*------------------------------------------- Mortgage Calculator -------------------------*/
        array(
            'id'       => 'sp_mortgage_cal_labels_section-start',
            'type'     => 'section',
            'title'    => esc_html__('Mortgage Calculator', 'houzez-child'),
            'subtitle' => esc_html__('Manage labels for mortgage calculator section', 'houzez-child'),
            'indent'   => true,
        ),

        array(
            'id'       => 'spc_principal_ints',
            'type'     => 'text',
            'title'    => esc_html__("Principal & Interest", 'houzez-child'),
            'default' => esc_html__("Principal & Interest", 'houzez-child')
        ),

        array(
            'id'       => 'spc_prop_tax',
            'type'     => 'text',
            'title'    => esc_html__("Property Tax", 'houzez-child'),
            'default' => esc_html__("Property Tax", 'houzez-child')
        ),
        array(
            'id'       => 'spc_hi',
            'type'     => 'text',
            'title'    => esc_html__("Home Insurance", 'houzez-child'),
            'default' => esc_html__("Home Insurance", 'houzez-child')
        ),
        array(
            'id'       => 'spc_hoa',
            'type'     => 'text',
            'title'    => esc_html__("Monthly HOA Fees", 'houzez-child'),
            'default' => esc_html__("Monthly HOA Fees", 'houzez-child')
        ),
        array(
            'id'       => 'spc_pmi',
            'type'     => 'text',
            'title'    => esc_html__("PMI", 'houzez-child'),
            'default' => esc_html__("PMI", 'houzez-child')
        ),
        array(
            'id'       => 'spc_total_amt',
            'type'     => 'text',
            'title'    => esc_html__("Total Amount", 'houzez-child'),
            'default' => esc_html__("Total Amount", 'houzez-child')
        ),
        array(
            'id'       => 'spc_down_payment',
            'type'     => 'text',
            'title'    => esc_html__("Down Payment", 'houzez-child'),
            'default' => esc_html__("Down Payment", 'houzez-child')
        ),
        array(
            'id'       => 'spc_loan_amount',
            'type'     => 'text',
            'title'    => esc_html__("Loan Amount", 'houzez-child'),
            'default' => esc_html__("Loan Amount", 'houzez-child')
        ),
        array(
            'id'       => 'spc_monthly_mortgage_payment',
            'type'     => 'text',
            'title'    => esc_html__("Monthly Mortgage Payment", 'houzez-child'),
            'default' => esc_html__("Monthly Mortgage Payment", 'houzez-child')
        ),
        array(
            'id'       => 'spc_ir',
            'type'     => 'text',
            'title'    => esc_html__("Interest Rate", 'houzez-child'),
            'default' => esc_html__("Interest Rate", 'houzez-child')
        ),

        array(
            'id'       => 'spc_load_term',
            'type'     => 'text',
            'title'    => esc_html__("Loan Term", 'houzez-child'),
            'default' => esc_html__("Loan Terms (Years)", 'houzez-child')
        ),

        array(
            'id'       => 'spc_monthly',
            'type'     => 'text',
            'title'    => esc_html__("Monthly", 'houzez-child'),
            'default' => esc_html__("Monthly", 'houzez-child')
        ),
        array(
            'id'       => 'spc_btn_cal',
            'type'     => 'text',
            'title'    => esc_html__("Calculate Button", 'houzez-child'),
            'default' => esc_html__("Calculate", 'houzez-child')
        ),
        
        
        array(
            'id'       => 'sp_mortgage_cal_labels_section-end',
            'type'     => 'section',
            'indent'   => false,
        ),
        
    )
));

Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Add New Property', 'houzez-child' ),
    'id'     => 'createlisting-translation',
    'desc'   => '',
    'subsection'   => true,
    'fields'        => array(
        
        array(
            'id'       => 'cl_buttons_section-start',
            'type'     => 'section',
            'title'    => esc_html__('Buttons and links', 'houzez-child'),
            'subtitle' => esc_html__('Manage buttons and links titles front-end', 'houzez-child'),
            'indent'   => true,
        ),

        array(
            'id'       => 'fal_submit_property',
            'type'     => 'text',
            'title'    => esc_html__('Submit Property', 'houzez-child'),
            'default' => esc_html__('Submit Property', 'houzez-child')
        ),

        array(
            'id'       => 'fal_save_draft',
            'type'     => 'text',
            'title'    => esc_html__('Save as Draft', 'houzez-child'),
            'default' => esc_html__('Save as Draft', 'houzez-child')
        ),

        array(
            'id'       => 'fal_save_changes',
            'type'     => 'text',
            'title'    => esc_html__('Save Changes', 'houzez-child'),
            'default' => esc_html__('Save Changes', 'houzez-child')
        ),

        array(
            'id'       => 'fal_view_property',
            'type'     => 'text',
            'title'    => esc_html__('View Property', 'houzez-child'),
            'default' => esc_html__('View Property', 'houzez-child')
        ),

        array(
            'id'       => 'fal_cancel',
            'type'     => 'text',
            'title'    => esc_html__('Cancel', 'houzez-child'),
            'default' => esc_html__('Cancel', 'houzez-child')
        ),
        array(
            'id'       => 'fal_back',
            'type'     => 'text',
            'title'    => esc_html__('Back', 'houzez-child'),
            'default' => esc_html__('Back', 'houzez-child')
        ),

        array(
            'id'       => 'fal_next',
            'type'     => 'text',
            'title'    => esc_html__('Next', 'houzez-child'),
            'default' => esc_html__('Next', 'houzez-child')
        ),

        array(
            'id'       => 'cl_buttons_section-end',
            'type'     => 'section',
            'indent'   => false,
        ),

        array(
            'id'       => 'cl_sections_section-start',
            'type'     => 'section',
            'title'    => esc_html__('Sections Titles', 'houzez-child'),
            'subtitle' => esc_html__('Manage create listing page section titles front-end and admin', 'houzez-child'),
            'indent'   => true,
        ),

        array(
            'id'       => 'cls_description',
            'type'     => 'text',
            'title'    => esc_html__('Description', 'houzez-child'),
            'default' => esc_html__('Description', 'houzez-child')
        ),

        array(
            'id'       => 'cls_description_price',
            'type'     => 'text',
            'title'    => esc_html__('Description & Price', 'houzez-child'),
            'default' => esc_html__('Description & Price', 'houzez-child')
        ),

        array(
            'id'       => 'cls_price',
            'type'     => 'text',
            'title'    => esc_html__('Price', 'houzez-child'),
            'default' => esc_html__('Price', 'houzez-child')
        ),

        array(
            'id'       => 'cls_media',
            'type'     => 'text',
            'title'    => esc_html__('Media', 'houzez-child'),
            'default' => esc_html__('Media', 'houzez-child')
        ),

        array(
            'id'       => 'cls_documents',
            'type'     => 'text',
            'title'    => esc_html__('Property Documents', 'houzez-child'),
            'default' => esc_html__('Property Documents', 'houzez-child')
        ),

        array(
            'id'       => 'cls_details',
            'type'     => 'text',
            'title'    => esc_html__('Details', 'houzez-child'),
            'default' => esc_html__('Details', 'houzez-child')
        ),
        array(
            'id'       => 'cls_private_notes',
            'type'     => 'text',
            'title'    => esc_html__('Private Note', 'houzez-child'),
            'default' => esc_html__('Private Note', 'houzez-child')
        ),
        array(
            'id'       => 'cls_additional_details',
            'type'     => 'text',
            'title'    => esc_html__('Additional details', 'houzez-child'),
            'default' => esc_html__('Additional details', 'houzez-child')
        ),
        array(
            'id'       => 'cls_address',
            'type'     => 'text',
            'title'    => esc_html__('Address', 'houzez-child'),
            'default' => esc_html__('Address', 'houzez-child')
        ),
        array(
            'id'       => 'cls_location',
            'type'     => 'text',
            'title'    => esc_html__('Location', 'houzez-child'),
            'default' => esc_html__('Location', 'houzez-child')
        ),
        array(
            'id'       => 'cls_map',
            'type'     => 'text',
            'title'    => esc_html__('Map', 'houzez-child'),
            'default' => esc_html__('Map', 'houzez-child')
        ),
        array(
            'id'       => 'cls_features',
            'type'     => 'text',
            'title'    => esc_html__('Features', 'houzez-child'),
            'default' => esc_html__('Features', 'houzez-child')
        ),
        array(
            'id'       => 'cls_video',
            'type'     => 'text',
            'title'    => esc_html__('Video', 'houzez-child'),
            'default' => esc_html__('Video', 'houzez-child')
        ),
        array(
            'id'       => 'cls_virtual_tour',
            'type'     => 'text',
            'title'    => esc_html__('360° Virtual Tour', 'houzez-child'),
            'default' => esc_html__('360° Virtual Tour', 'houzez-child')
        ),

        array(
            'id'       => 'cls_sub_listings',
            'type'     => 'text',
            'title'    => esc_html__('Sub listings', 'houzez-child'),
            'default' => esc_html__('Sub listings', 'houzez-child')
        ),
        array(
            'id'       => 'cls_energy_class',
            'type'     => 'text',
            'title'    => esc_html__('Energy Class', 'houzez-child'),
            'default' => esc_html__('Energy Class', 'houzez-child')
        ),
        array(
            'id'       => 'cls_floor_plans',
            'type'     => 'text',
            'title'    => esc_html__('Floor Plans', 'houzez-child'),
            'default' => esc_html__('Floor Plans', 'houzez-child')
        ),
        
        array(
            'id'       => 'cls_walkscore',
            'type'     => 'text',
            'title'    => esc_html__('Walkscore', 'houzez-child'),
            'default' => esc_html__('Walkscore', 'houzez-child')
        ),

        array(
            'id'       => 'cls_contact_info',
            'type'     => 'text',
            'title'    => esc_html__("Contact Information", 'houzez-child'),
            'default' => esc_html__("Contact Information", 'houzez-child')
        ),

        array(
            'id'       => 'cls_information',
            'type'     => 'text',
            'title'    => esc_html__("Information", 'houzez-child'),
            'default' => esc_html__("Information", 'houzez-child')
        ),

        array(
            'id'       => 'cls_settings',
            'type'     => 'text',
            'title'    => esc_html__("Property Settings", 'houzez-child'),
            'default' => esc_html__("Property Settings", 'houzez-child')
        ),

        array(
            'id'       => 'cls_slider',
            'type'     => 'text',
            'title'    => esc_html__("Slider", 'houzez-child'),
            'default' => esc_html__("Slider", 'houzez-child')
        ),

        array(
            'id'       => 'cls_layout',
            'type'     => 'text',
            'title'    => esc_html__("Layout", 'houzez-child'),
            'default' => esc_html__("Layout", 'houzez-child')
        ),

        array(
            'id'       => 'cls_rental',
            'type'     => 'text',
            'title'    => esc_html__("Rental Details", 'houzez-child'),
            'default' => esc_html__("Rental Details", 'houzez-child')
        ),
       
        array(
            'id'       => 'cls_gdpr',
            'type'     => 'text',
            'title'    => esc_html__("GDPR Agreement", 'houzez-child'),
            'default' => esc_html__("GDPR Agreement *", 'houzez-child')
        ),

        array(
            'id'       => 'cl_sections_section-end',
            'type'     => 'section',
            'indent'   => false,
        ),

        /*--------------------------------------------------------------
        * Location labels
        **------------------------------------------------------------*/
        array(
            'id'       => 'cl_location_section-start',
            'type'     => 'section',
            'title'    => esc_html__('Fields Labels and Placeholders', 'houzez-child'),
            'subtitle' => '',
            'indent'   => true,
        ),

        array(
            'id'       => 'cl_prop_title',
            'type'     => 'text',
            'title'    => esc_html__("Property Title", 'houzez-child'),
            'default' => esc_html__("Property Title", 'houzez-child')
        ),
        array(
            'id'       => 'cl_prop_title_plac',
            'type'     => 'text',
            'title'    => esc_html__("Property Title Placeholder", 'houzez-child'),
            'default' => esc_html__("Enter your property title", 'houzez-child')
        ),
        array(
            'id'       => 'cl_content',
            'type'     => 'text',
            'title'    => esc_html__("Content", 'houzez-child'),
            'default' => esc_html__("Content", 'houzez-child')
        ),
        
        array(
            'id'       => 'cl_prop_type',
            'type'     => 'text',
            'title'    => esc_html__("Type", 'houzez-child'),
            'default' => esc_html__("Type", 'houzez-child')
        ),
        array(
            'id'       => 'cl_prop_types',
            'type'     => 'text',
            'title'    => esc_html__("Types", 'houzez-child'),
            'default' => esc_html__("Types", 'houzez-child')
        ),
        array(
            'id'       => 'cl_prop_status',
            'type'     => 'text',
            'title'    => esc_html__("Status", 'houzez-child'),
            'default' => esc_html__("Status", 'houzez-child')
        ),
        array(
            'id'       => 'cl_prop_statuses',
            'type'     => 'text',
            'title'    => esc_html__("Statuses", 'houzez-child'),
            'default' => esc_html__("Statuses", 'houzez-child')
        ),
        array(
            'id'       => 'cl_prop_label',
            'type'     => 'text',
            'title'    => esc_html__("Label", 'houzez-child'),
            'default' => esc_html__("Label", 'houzez-child')
        ),
        array(
            'id'       => 'cl_prop_labels',
            'type'     => 'text',
            'title'    => esc_html__("Labels", 'houzez-child'),
            'default' => esc_html__("Labels", 'houzez-child')
        ),
        array(
            'id'       => 'cl_sale_price',
            'type'     => 'text',
            'title'    => esc_html__("Sale or Rent Price", 'houzez-child'),
            'default' => esc_html__("Sale or Rent Price", 'houzez-child')
        ),
        array(
            'id'       => 'cl_sale_price_plac',
            'type'     => 'text',
            'title'    => esc_html__("Sale or Rent Price Placeholder", 'houzez-child'),
            'default' => esc_html__("Enter the price", 'houzez-child')
        ),

        array(
            'id'       => 'cl_second_price',
            'type'     => 'text',
            'title'    => esc_html__("Second Price", 'houzez-child'),
            'default' => esc_html__("Second Price (Optional)", 'houzez-child')
        ),
        array(
            'id'       => 'cl_second_price_plac',
            'type'     => 'text',
            'title'    => esc_html__("Second Price Placeholder", 'houzez-child'),
            'default' => esc_html__("Enter the second price", 'houzez-child')
        ),
        array(
            'id'       => 'cl_price_postfix',
            'type'     => 'text',
            'title'    => esc_html__("Price Postfix", 'houzez-child'),
            'default' => esc_html__("After The Price", 'houzez-child')
        ),
        array(
            'id'       => 'cl_price_postfix_plac',
            'type'     => 'text',
            'title'    => esc_html__("Price Postfix Placeholder", 'houzez-child'),
            'default' => esc_html__("Enter the after price", 'houzez-child')
        ),
        array(
            'id'       => 'cl_price_postfix_tooltip',
            'type'     => 'text',
            'title'    => esc_html__("Price Postfix Tooltip", 'houzez-child'),
            'default' => esc_html__("For example: Monthly", 'houzez-child')
        ),

        array(
            'id'       => 'cl_price_prefix',
            'type'     => 'text',
            'title'    => esc_html__("Price Prefix", 'houzez-child'),
            'default' => esc_html__("Price Prefix", 'houzez-child')
        ),
        array(
            'id'       => 'cl_price_prefix_plac',
            'type'     => 'text',
            'title'    => esc_html__("Price Prefix Placeholder", 'houzez-child'),
            'default' => esc_html__("Enter the price prefix", 'houzez-child')
        ),
        array(
            'id'       => 'cl_price_prefix_tooltip',
            'type'     => 'text',
            'title'    => esc_html__("Price Postfix Tooltip", 'houzez-child'),
            'default' => esc_html__("For example: Start from", 'houzez-child')
        ),

        array(
            'id'       => 'cl_bedrooms',
            'type'     => 'text',
            'title'    => esc_html__('Bedrooms', 'houzez-child'),
            'default' => esc_html__('Bedrooms', 'houzez-child')
        ),
        array(
            'id'       => 'cl_bedrooms_plac',
            'type'     => 'text',
            'title'    => esc_html__('Bedrooms Placeholder', 'houzez-child'),
            'default' => esc_html__('Enter number of bedrooms', 'houzez-child')
        ),

        array(
            'id'       => 'cl_rooms',
            'type'     => 'text',
            'title'    => esc_html__('Rooms', 'houzez-child'),
            'default' => esc_html__('Rooms', 'houzez-child')
        ),
        array(
            'id'       => 'cl_rooms_plac',
            'type'     => 'text',
            'title'    => esc_html__('Rooms Placeholder', 'houzez-child'),
            'default' => esc_html__('Enter number of rooms', 'houzez-child')
        ),

        array(
            'id'       => 'cl_bathrooms',
            'type'     => 'text',
            'title'    => esc_html__('Bathrooms', 'houzez-child'),
            'default' => esc_html__('Bathrooms', 'houzez-child')
        ),

        array(
            'id'       => 'cl_bathrooms_plac',
            'type'     => 'text',
            'title'    => esc_html__('Bathrooms Placeholder', 'houzez-child'),
            'default' => esc_html__('Enter number of bathrooms', 'houzez-child')
        ),

        array(
            'id'       => 'cl_area_size',
            'type'     => 'text',
            'title'    => esc_html__('Area Size', 'houzez-child'),
            'default' => esc_html__('Area Size', 'houzez-child')
        ),

        array(
            'id'       => 'cl_area_size_plac',
            'type'     => 'text',
            'title'    => esc_html__('Area Size Placeholder', 'houzez-child'),
            'default' => esc_html__('Enter property area size', 'houzez-child')
        ),

        array(
            'id'       => 'cl_area_size_postfix',
            'type'     => 'text',
            'title'    => esc_html__('Size Postfix', 'houzez-child'),
            'default' => esc_html__('Size Postfix', 'houzez-child')
        ),

        array(
            'id'       => 'cl_area_size_postfix_plac',
            'type'     => 'text',
            'title'    => esc_html__('Size Postfix Placeholder', 'houzez-child'),
            'default' => esc_html__('Enter property area size postfix', 'houzez-child')
        ),

        array(
            'id'       => 'cl_area_size_postfix_tooltip',
            'type'     => 'text',
            'title'    => esc_html__('Size Postfix Tooltip', 'houzez-child'),
            'default' => esc_html__('For example: Sq Ft', 'houzez-child')
        ),

        array(
            'id'       => 'cl_land_size',
            'type'     => 'text',
            'title'    => esc_html__('Land Area', 'houzez-child'),
            'default' => esc_html__('Land Area', 'houzez-child')
        ),

        array(
            'id'       => 'cl_land_size_plac',
            'type'     => 'text',
            'title'    => esc_html__('Land Area Placeholder', 'houzez-child'),
            'default' => esc_html__('Enter property Land Area', 'houzez-child')
        ),

        array(
            'id'       => 'cl_land_size_postfix',
            'type'     => 'text',
            'title'    => esc_html__('Land Area Size Postfix', 'houzez-child'),
            'default' => esc_html__('Land Area Size Postfix', 'houzez-child')
        ),

        array(
            'id'       => 'cl_land_size_postfix_plac',
            'type'     => 'text',
            'title'    => esc_html__('Land Area Size Postfix Placeholder', 'houzez-child'),
            'default' => esc_html__('Enter property Land Area postfix', 'houzez-child')
        ),

        array(
            'id'       => 'cl_land_size_postfix_tooltip',
            'type'     => 'text',
            'title'    => esc_html__('Land Area Size Postfix Tooltip', 'houzez-child'),
            'default' => esc_html__('For example: Sq Ft', 'houzez-child')
        ),

        array(
            'id'       => 'cl_garage',
            'type'     => 'text',
            'title'    => esc_html__('Garages', 'houzez-child'),
            'default' => esc_html__('Garages', 'houzez-child')
        ),

        array(
            'id'       => 'cl_garage_plac',
            'type'     => 'text',
            'title'    => esc_html__('Garages Placeholder', 'houzez-child'),
            'default' => esc_html__('Enter number of garages', 'houzez-child')
        ),

        array(
            'id'       => 'cl_garage_size',
            'type'     => 'text',
            'title'    => esc_html__('Garage Size', 'houzez-child'),
            'default' => esc_html__('Garage Size', 'houzez-child')
        ),

        array(
            'id'       => 'cl_garage_size_plac',
            'type'     => 'text',
            'title'    => esc_html__('Garage Size Placeholder', 'houzez-child'),
            'default' => esc_html__('Enter the garage size', 'houzez-child')
        ),

        array(
            'id'       => 'cl_garage_size_tooltip',
            'type'     => 'text',
            'title'    => esc_html__('Garage Size Tooltip', 'houzez-child'),
            'default' => esc_html__('For example: 200 Sq Ft', 'houzez-child')
        ),

        array(
            'id'       => 'cl_year_built',
            'type'     => 'text',
            'title'    => esc_html__('Year Built', 'houzez-child'),
            'default' => esc_html__('Year Built', 'houzez-child')
        ),

        array(
            'id'       => 'cl_year_built_plac',
            'type'     => 'text',
            'title'    => esc_html__('Year Built Placeholder', 'houzez-child'),
            'default' => esc_html__('Enter year built', 'houzez-child')
        ),

        array(
            'id'       => 'cl_prop_id',
            'type'     => 'text',
            'title'    => esc_html__("Property ID", 'houzez-child'),
            'default' => esc_html__("Property ID", 'houzez-child')
        ),
        array(
            'id'       => 'cl_prop_id_plac',
            'type'     => 'text',
            'title'    => esc_html__("Property ID Placeholder", 'houzez-child'),
            'default' => esc_html__("Enter property ID", 'houzez-child')
        ),

        array(
            'id'       => 'cl_prop_id_tooltip',
            'type'     => 'text',
            'title'    => esc_html__("Property ID Tooltip", 'houzez-child'),
            'default' => esc_html__("For example: HZ-01", 'houzez-child')
        ),

        array(
            'id'       => 'cl_additional_title',
            'type'     => 'text',
            'title'    => esc_html__("Additional Details Title", 'houzez-child'),
            'default' => esc_html__("Title", 'houzez-child')
        ),
        array(
            'id'       => 'cl_additional_title_plac',
            'type'     => 'text',
            'title'    => esc_html__("Additional Details Title Placeholder", 'houzez-child'),
            'default' => esc_html__("Eg: Equipment", 'houzez-child')
        ),

        array(
            'id'       => 'cl_additional_value',
            'type'     => 'text',
            'title'    => esc_html__("Additional Details Value", 'houzez-child'),
            'default' => esc_html__("Value", 'houzez-child')
        ),
        array(
            'id'       => 'cl_additional_value_plac',
            'type'     => 'text',
            'title'    => esc_html__("Additional Details Value Placeholder", 'houzez-child'),
            'default' => esc_html__("Grill - Gas", 'houzez-child')
        ),

        array(
            'id'       => 'cl_drag_drop_text_image',
            'type'     => 'text',
            'title'    => esc_html__("Drag & Drop Text", 'houzez-child'),
            'default' => esc_html__("Drag and drop the images to customize the image gallery order.", 'houzez-child')
        ),

        array(
            'id'       => 'cl_drag_drop_title',
            'type'     => 'text',
            'title'    => esc_html__("Drag & Drop Title", 'houzez-child'),
            'default' => esc_html__("Drag and drop the gallery images here", 'houzez-child')
        ),

        array(
            'id'       => 'cl_image_size',
            'type'     => 'text',
            'title'    => esc_html__("Image Size", 'houzez-child'),
            'default' => esc_html__("(Minimum size 1440x900)", 'houzez-child')
        ),

        array(
            'id'       => 'cl_image_btn',
            'type'     => 'text',
            'title'    => esc_html__("Select Image Button", 'houzez-child'),
            'default' => esc_html__("Select and Upload", 'houzez-child')
        ),

        array(
            'id'       => 'cl_image_featured',
            'type'     => 'text',
            'title'    => esc_html__("Make Featured text", 'houzez-child'),
            'default' => esc_html__("To mark an image as featured, click the star icon. If no image is marked as featured, the first image will be considered the featured image.", 'houzez-child')
        ),

        array(
            'id'       => 'cl_video_url',
            'type'     => 'text',
            'title'    => esc_html__("Video Url", 'houzez-child'),
            'default' => esc_html__("Video URL", 'houzez-child')
        ),
        array(
            'id'       => 'cl_video_url_plac',
            'type'     => 'text',
            'title'    => esc_html__("Video Url Placeholder", 'houzez-child'),
            'default' => esc_html__("YouTube, Vimeo, SWF File and MOV File are supported", 'houzez-child')
        ),

        array(
            'id'       => 'cl_energy_cls',
            'type'     => 'text',
            'title'    => esc_html__("Energy Class", 'houzez-child'),
            'default' => esc_html__("Energy Class", 'houzez-child')
        ),
        array(
            'id'       => 'cl_energy_cls_plac',
            'type'     => 'text',
            'title'    => esc_html__("Energy Class Placeholder", 'houzez-child'),
            'default' => esc_html__("Select Energy Class", 'houzez-child')
        ),

        array(
            'id'       => 'cl_energy_index',
            'type'     => 'text',
            'title'    => esc_html__("Global Energy Performance Index", 'houzez-child'),
            'default' => esc_html__("Global Energy Performance Index", 'houzez-child')
        ),
        array(
            'id'       => 'cl_energy_index_plac',
            'type'     => 'text',
            'title'    => esc_html__("Global Energy Performance Index Placeholder", 'houzez-child'),
            'default' => esc_html__("For example: 92.42 kWh / m²a", 'houzez-child')
        ),

        array(
            'id'       => 'cl_energy_renew_index',
            'type'     => 'text',
            'title'    => esc_html__("Renewable energy performance index", 'houzez-child'),
            'default' => esc_html__("Renewable energy performance index", 'houzez-child')
        ),
        array(
            'id'       => 'cl_energy_renew_index_plac',
            'type'     => 'text',
            'title'    => esc_html__("Renewable energy performance index Placeholder", 'houzez-child'),
            'default' => esc_html__("For example: 00.00 kWh / m²a", 'houzez-child')
        ),

        array(
            'id'       => 'cl_energy_build_performance',
            'type'     => 'text',
            'title'    => esc_html__("Energy performance of the building", 'houzez-child'),
            'default' => esc_html__("Energy performance of the building", 'houzez-child')
        ),
        array(
            'id'       => 'cl_energy_build_performance_plac',
            'type'     => 'text',
            'title'    => esc_html__("Energy performance of the building Placeholder", 'houzez-child'),
            'default' => '',
        ),

        array(
            'id'       => 'cl_energy_ecp_rating',
            'type'     => 'text',
            'title'    => esc_html__("EPC Current Rating", 'houzez-child'),
            'default' => esc_html__("EPC Current Rating", 'houzez-child')
        ),
        array(
            'id'       => 'cl_energy_ecp_rating_plac',
            'type'     => 'text',
            'title'    => esc_html__("EPC Current Rating Placeholder", 'houzez-child'),
            'default' => ''
        ),

        array(
            'id'       => 'cl_energy_ecp_p',
            'type'     => 'text',
            'title'    => esc_html__("EPC Potential Rating", 'houzez-child'),
            'default' => esc_html__("EPC Potential Rating", 'houzez-child')
        ),
        array(
            'id'       => 'cl_energy_ecp_p_plac',
            'type'     => 'text',
            'title'    => esc_html__("EPC Potential Rating Placeholder", 'houzez-child'),
            'default' => '',
        ),

        array(
            'id'       => 'cl_virtual_plac',
            'type'     => 'text',
            'title'    => esc_html__("Virtual Tour Placeholder", 'houzez-child'),
            'default' => esc_html__("Enter virtual tour iframe/embeded code", 'houzez-child')
        ),

        array(
            'id'       => 'cl_private_note',
            'type'     => 'text',
            'title'    => esc_html__("Private Note Label", 'houzez-child'),
            'default' => esc_html__("Write private note for this property, it will not display for public.", 'houzez-child')
        ),

        array(
            'id'       => 'cl_private_note_plac',
            'type'     => 'text',
            'title'    => esc_html__("Private Note Placeholder", 'houzez-child'),
            'default' => esc_html__("Enter the note here", 'houzez-child')
        ),

        array(
            'id'       => 'cl_address',
            'type'     => 'text',
            'title'    => esc_html__('Address', 'houzez-child'),
            'default' => esc_html__('Address', 'houzez-child')
        ),
        array(
            'id'       => 'cl_address_plac',
            'type'     => 'text',
            'title'    => esc_html__('Address Placeholder', 'houzez-child'),
            'default' => esc_html__('Enter your property address', 'houzez-child')
        ),
        array(
            'id'       => 'cl_zip',
            'type'     => 'text',
            'title'    => esc_html__('Zip/Postal Code', 'houzez-child'),
            'default' => esc_html__('Zip/Postal Code', 'houzez-child')
        ),
        array(
            'id'       => 'cl_zip_plac',
            'type'     => 'text',
            'title'    => esc_html__('Zip/Postal Code Placeholder', 'houzez-child'),
            'default' => esc_html__('Enter zip/postal code', 'houzez-child')
        ),
        array(
            'id'       => 'cl_country',
            'type'     => 'text',
            'title'    => esc_html__('Country', 'houzez-child'),
            'default' => esc_html__('Country', 'houzez-child')
        ),
        array(
            'id'       => 'cl_country_plac',
            'type'     => 'text',
            'title'    => esc_html__('Country Placeholder', 'houzez-child'),
            'default' => esc_html__('Enter the country', 'houzez-child')
        ),
        array(
            'id'       => 'cl_state',
            'type'     => 'text',
            'title'    => esc_html__('State/county', 'houzez-child'),
            'default' => esc_html__('State/county', 'houzez-child')
        ),
        array(
            'id'       => 'cl_state_plac',
            'type'     => 'text',
            'title'    => esc_html__('State/county Placeholder', 'houzez-child'),
            'default' => esc_html__('Enter the State/county', 'houzez-child')
        ),
        array(
            'id'       => 'cl_city',
            'type'     => 'text',
            'title'    => esc_html__('City', 'houzez-child'),
            'default' => esc_html__('City', 'houzez-child')
        ),
        array(
            'id'       => 'cl_city_plac',
            'type'     => 'text',
            'title'    => esc_html__('City Placeholder', 'houzez-child'),
            'default' => esc_html__('Enter the city', 'houzez-child')
        ),
        array(
            'id'       => 'cl_area',
            'type'     => 'text',
            'title'    => esc_html__('Area', 'houzez-child'),
            'default' => esc_html__('Area', 'houzez-child')
        ),
        array(
            'id'       => 'cl_area_plac',
            'type'     => 'text',
            'title'    => esc_html__('Area Placeholder', 'houzez-child'),
            'default' => esc_html__('Enter the area', 'houzez-child')
        ),

        array(
            'id'       => 'cl_drag_drop_text',
            'type'     => 'text',
            'title'    => esc_html__('Drag & Drop Text', 'houzez-child'),
            'default' => esc_html__('Drag and drop the pin on map to find exact location', 'houzez-child')
        ),

        array(
            'id'       => 'cl_latitude',
            'type'     => 'text',
            'title'    => esc_html__('Latitude', 'houzez-child'),
            'default' => esc_html__('Latitude', 'houzez-child')
        ),
        array(
            'id'       => 'cl_latitude_plac',
            'type'     => 'text',
            'title'    => esc_html__('Latitude Placeholder', 'houzez-child'),
            'default' => esc_html__('Enter address latitude', 'houzez-child')
        ),

        array(
            'id'       => 'cl_longitude',
            'type'     => 'text',
            'title'    => esc_html__('Longitude', 'houzez-child'),
            'default' => esc_html__('Longitude', 'houzez-child')
        ),
        array(
            'id'       => 'cl_longitude_plac',
            'type'     => 'text',
            'title'    => esc_html__('Longitude Placeholder', 'houzez-child'),
            'default' => esc_html__('Enter address Longitude', 'houzez-child')
        ),

        array(
            'id'       => 'cl_street_view',
            'type'     => 'text',
            'title'    => esc_html__('Street View', 'houzez-child'),
            'default' => esc_html__('Street View', 'houzez-child')
        ),

        array(
            'id'       => 'cl_ppbtn',
            'type'     => 'text',
            'title'    => esc_html__('Place pin buttton', 'houzez-child'),
            'default' => esc_html__('Place the pin in address above', 'houzez-child')
        ),

        array(
            'id'       => 'cl_streat_address',
            'type'     => 'text',
            'title'    => esc_html__("Street Address", 'houzez-child'),
            'default' => esc_html__("Street Address", 'houzez-child')
        ),
        array(
            'id'       => 'cl_streat_address_plac',
            'type'     => 'text',
            'title'    => esc_html__("Street Address Placeholder", 'houzez-child'),
            'default' => esc_html__("Enter only the street name and the building number", 'houzez-child')
        ),

        array(
            'id'       => 'cl_make_featured',
            'type'     => 'text',
            'title'    => esc_html__("Make Featured Text", 'houzez-child'),
            'default' => esc_html__("Do you want to mark this property as featured?", 'houzez-child')
        ),

        array(
            'id'       => 'cl_login_view',
            'type'     => 'text',
            'title'    => esc_html__("Login to view title", 'houzez-child'),
            'default' => esc_html__("The user must be logged in to view this property?", 'houzez-child')
        ),

        array(
            'id'       => 'cl_login_view_plac',
            'type'     => 'text',
            'title'    => esc_html__("Login to view description", 'houzez-child'),
            'default' => esc_html__('If "Yes" then only logged in user can view property details.', 'houzez-child')
        ),

        array(
            'id'       => 'cl_disclaimer',
            'type'     => 'text',
            'title'    => esc_html__("Disclaimer", 'houzez-child'),
            'default' => esc_html__("Disclaimer", 'houzez-child')
        ),

        array(
            'id'       => 'cl_mortgage',
            'type'     => 'text',
            'title'    => esc_html__("Mortgage Calculator", 'houzez-child'),
            'default' => esc_html__("Mortgage Calulator", 'houzez-child')
        ),

        array(
            'id'       => 'cl_mortgage_plac',
            'type'     => 'text',
            'title'    => esc_html__("Mortgage Calulator Placeholder", 'houzez-child'),
            'default' => esc_html__('Show/Hide mortgage calculator for this listing?', 'houzez-child')
        ),

        array(
            'id'       => 'cl_decuments_text',
            'type'     => 'text',
            'title'    => esc_html__("Documents Text", 'houzez-child'),
            'default' => esc_html__("You can attach PDF files, Map images OR other documents.", 'houzez-child')
        ),

        array(
            'id'       => 'cl_attachment_btn',
            'type'     => 'text',
            'title'    => esc_html__("Attachment button", 'houzez-child'),
            'default' => esc_html__("Select Attachment.", 'houzez-child')
        ),

        array(
            'id'       => 'cl_uploaded_attachments',
            'type'     => 'text',
            'title'    => esc_html__("Uploaded Attachments", 'houzez-child'),
            'default' => esc_html__("Uploaded Attachments", 'houzez-child')
        ),

        array(
            'id'       => 'cl_contact_info_text',
            'type'     => 'text',
            'title'    => esc_html__("Contact Info Text", 'houzez-child'),
            'default' => esc_html__("What information do you want to display in agent data container?", 'houzez-child')
        ),
        array(
            'id'       => 'cl_author_info',
            'type'     => 'text',
            'title'    => esc_html__("Author Info", 'houzez-child'),
            'default' => esc_html__("Author Info", 'houzez-child')
        ),

        array(
            'id'       => 'cl_agent_info',
            'type'     => 'text',
            'title'    => esc_html__("Agent Info", 'houzez-child'),
            'default' => esc_html__("Agent Info (Choose agent from the list below)", 'houzez-child')
        ),

        array(
            'id'       => 'cl_agent_info_plac',
            'type'     => 'text',
            'title'    => esc_html__("Agent Info Placeholder", 'houzez-child'),
            'default' => esc_html__("Select an Agent", 'houzez-child')
        ),

        array(
            'id'       => 'cl_agency_info',
            'type'     => 'text',
            'title'    => esc_html__("Agency Info", 'houzez-child'),
            'default' => esc_html__("Agency Info (Choose agency from the list below)", 'houzez-child')
        ),

        array(
            'id'       => 'cl_agency_info2',
            'type'     => 'text',
            'title'    => esc_html__("Agency Info", 'houzez-child'),
            'default' => esc_html__("Agency Info", 'houzez-child')
        ),

        array(
            'id'       => 'cl_agency_info_plac',
            'type'     => 'text',
            'title'    => esc_html__("Agency Info Placeholder", 'houzez-child'),
            'default' => esc_html__("Select an Agency", 'houzez-child')
        ),

        array(
            'id'       => 'cl_not_display',
            'type'     => 'text',
            'title'    => esc_html__("Do not display", 'houzez-child'),
            'default' => esc_html__("Do not display", 'houzez-child')
        ),

        array(
            'id'       => 'cl_add_slider',
            'type'     => 'text',
            'title'    => esc_html__("Add to Slider", 'houzez-child'),
            'default' => esc_html__("Do you want to display this property on the custom property slider?", 'houzez-child')
        ),
        array(
            'id'       => 'cl_add_slider_plac',
            'type'     => 'text',
            'title'    => esc_html__("Add to Slider Placeholder", 'houzez-child'),
            'default' => esc_html__("Upload an image below if you selected yes.", 'houzez-child')
        ),
        array(
            'id'       => 'cl_slider_img',
            'type'     => 'text',
            'title'    => esc_html__("Slider Image", 'houzez-child'),
            'default' => esc_html__("Slider Image", 'houzez-child')
        ),

        array(
            'id'       => 'cl_slider_img_size',
            'type'     => 'text',
            'title'    => esc_html__("Slider Image Size", 'houzez-child'),
            'default' => esc_html__("Suggested size 2000px x 700px", 'houzez-child')
        ),
        array(
            'id'       => 'cl_plan_title',
            'type'     => 'text',
            'title'    => esc_html__("Plan Title", 'houzez-child'),
            'default' => esc_html__("Plan Title", 'houzez-child')
        ),

        array(
            'id'       => 'cl_plan_title_plac',
            'type'     => 'text',
            'title'    => esc_html__("Plan Title Placeholder", 'houzez-child'),
            'default' => esc_html__("Enter the plan title", 'houzez-child')
        ),

        array(
            'id'       => 'cl_plan_bedrooms',
            'type'     => 'text',
            'title'    => esc_html__("Plan Bedrooms", 'houzez-child'),
            'default' => esc_html__("Bedrooms", 'houzez-child')
        ),

        array(
            'id'       => 'cl_plan_bedrooms_plac',
            'type'     => 'text',
            'title'    => esc_html__("Plan Bedrooms Placeholder", 'houzez-child'),
            'default' => esc_html__("Enter the number of bedrooms", 'houzez-child')
        ),

        array(
            'id'       => 'cl_plan_bathrooms',
            'type'     => 'text',
            'title'    => esc_html__("Plan Bathrooms", 'houzez-child'),
            'default' => esc_html__("Bathrooms", 'houzez-child')
        ),
        array(
            'id'       => 'cl_plan_bathrooms_plac',
            'type'     => 'text',
            'title'    => esc_html__("Plan Bedrooms Placeholder", 'houzez-child'),
            'default' => esc_html__("Enter the number of bathrooms", 'houzez-child')
        ),

        array(
            'id'       => 'cl_plan_price',
            'type'     => 'text',
            'title'    => esc_html__("Plan Price", 'houzez-child'),
            'default' => esc_html__("Price", 'houzez-child')
        ),
        array(
            'id'       => 'cl_plan_price_plac',
            'type'     => 'text',
            'title'    => esc_html__("Plan Price Placeholder", 'houzez-child'),
            'default' => esc_html__("Enter the price", 'houzez-child')
        ),

        array(
            'id'       => 'cl_plan_price_postfix',
            'type'     => 'text',
            'title'    => esc_html__("Plan Price Postfix", 'houzez-child'),
            'default' => esc_html__("Price Postfix", 'houzez-child')
        ),
        array(
            'id'       => 'cl_plan_price_postfix_plac',
            'type'     => 'text',
            'title'    => esc_html__("Plan Price Postfix Placeholder", 'houzez-child'),
            'default' => esc_html__("Enter the price postfix", 'houzez-child')
        ),

        array(
            'id'       => 'cl_plan_size',
            'type'     => 'text',
            'title'    => esc_html__("Plan Size", 'houzez-child'),
            'default' => esc_html__("Plan Size", 'houzez-child')
        ),
        array(
            'id'       => 'cl_plan_size_plac',
            'type'     => 'text',
            'title'    => esc_html__("Plan Size Placeholder", 'houzez-child'),
            'default' => esc_html__("Enter the plan size", 'houzez-child')
        ),

        array(
            'id'       => 'cl_plan_img',
            'type'     => 'text',
            'title'    => esc_html__("Plan Image", 'houzez-child'),
            'default' => esc_html__("Plan Image", 'houzez-child')
        ),
        array(
            'id'       => 'cl_plan_img_plac',
            'type'     => 'text',
            'title'    => esc_html__("Plan Image Placeholder", 'houzez-child'),
            'default' => esc_html__("Upload the plan image", 'houzez-child')
        ),
        array(
            'id'       => 'cl_plan_img_btn',
            'type'     => 'text',
            'title'    => esc_html__("Plan Image Button", 'houzez-child'),
            'default' => esc_html__("Select Image", 'houzez-child')
        ),
        array(
            'id'       => 'cl_plan_img_size',
            'type'     => 'text',
            'title'    => esc_html__("Plan Image Size", 'houzez-child'),
            'default' => esc_html__("Minimum size 800 x 600 px", 'houzez-child')
        ),

        array(
            'id'       => 'cl_plan_des',
            'type'     => 'text',
            'title'    => esc_html__("Plan Description", 'houzez-child'),
            'default' => esc_html__("Description", 'houzez-child')
        ),
        array(
            'id'       => 'cl_plan_des_plac',
            'type'     => 'text',
            'title'    => esc_html__("Plan Description Placeholder", 'houzez-child'),
            'default' => esc_html__("Enter the plan description", 'houzez-child')
        ),

        array(
            'id'       => 'cl_subl_title',
            'type'     => 'text',
            'title'    => esc_html__("Title", 'houzez-child'),
            'default' => esc_html__("Title", 'houzez-child')
        ),

        array(
            'id'       => 'cl_subl_title_plac',
            'type'     => 'text',
            'title'    => esc_html__("Title Placeholder", 'houzez-child'),
            'default' => esc_html__("Enter the  title", 'houzez-child')
        ),

        array(
            'id'       => 'cl_subl_bedrooms',
            'type'     => 'text',
            'title'    => esc_html__("Bedrooms", 'houzez-child'),
            'default' => esc_html__("Bedrooms", 'houzez-child')
        ),

        array(
            'id'       => 'cl_subl_bedrooms_plac',
            'type'     => 'text',
            'title'    => esc_html__("Bedrooms Placeholder", 'houzez-child'),
            'default' => esc_html__("Enter the number of bedrooms", 'houzez-child')
        ),

        array(
            'id'       => 'cl_subl_bathrooms',
            'type'     => 'text',
            'title'    => esc_html__("Bathrooms", 'houzez-child'),
            'default' => esc_html__("Bathrooms", 'houzez-child')
        ),
        array(
            'id'       => 'cl_subl_bathrooms_plac',
            'type'     => 'text',
            'title'    => esc_html__("Bedrooms Placeholder", 'houzez-child'),
            'default' => esc_html__("Enter the number of bathrooms", 'houzez-child')
        ),

        array(
            'id'       => 'cl_subl_price',
            'type'     => 'text',
            'title'    => esc_html__("Price", 'houzez-child'),
            'default' => esc_html__("Price", 'houzez-child')
        ),
        array(
            'id'       => 'cl_subl_price_plac',
            'type'     => 'text',
            'title'    => esc_html__("Price Placeholder", 'houzez-child'),
            'default' => esc_html__("Enter the price", 'houzez-child')
        ),

        array(
            'id'       => 'cl_subl_price_postfix',
            'type'     => 'text',
            'title'    => esc_html__("Price Postfix", 'houzez-child'),
            'default' => esc_html__("Price", 'houzez-child')
        ),
        array(
            'id'       => 'cl_subl_price_postfix_plac',
            'type'     => 'text',
            'title'    => esc_html__("Price Postfix Placeholder", 'houzez-child'),
            'default' => esc_html__("Enter the price postfix", 'houzez-child')
        ),

        array(
            'id'       => 'cl_subl_size',
            'type'     => 'text',
            'title'    => esc_html__("Property Size", 'houzez-child'),
            'default' => esc_html__("Property Size", 'houzez-child')
        ),
        array(
            'id'       => 'cl_subl_size_plac',
            'type'     => 'text',
            'title'    => esc_html__("Property Size Placeholder", 'houzez-child'),
            'default' => esc_html__("Enter the property size", 'houzez-child')
        ),

        array(
            'id'       => 'cl_subl_size_postfix',
            'type'     => 'text',
            'title'    => esc_html__("Size Postfix", 'houzez-child'),
            'default' => esc_html__("Size Postfix", 'houzez-child')
        ),
        array(
            'id'       => 'cl_subl_size_postfix_plac',
            'type'     => 'text',
            'title'    => esc_html__("Size Postfix Placeholder", 'houzez-child'),
            'default' => esc_html__("Enter the property size postfix", 'houzez-child')
        ),

        array(
            'id'       => 'cl_subl_type',
            'type'     => 'text',
            'title'    => esc_html__("Property Type", 'houzez-child'),
            'default' => esc_html__("Property Type", 'houzez-child')
        ),
        array(
            'id'       => 'cl_subl_type_plac',
            'type'     => 'text',
            'title'    => esc_html__("Property Type Placeholder", 'houzez-child'),
            'default' => esc_html__("Enter the property type", 'houzez-child')
        ),

        array(
            'id'       => 'cl_subl_date',
            'type'     => 'text',
            'title'    => esc_html__("Availability Date", 'houzez-child'),
            'default' => esc_html__("Availability Date", 'houzez-child')
        ),
        array(
            'id'       => 'cl_subl_date_plac',
            'type'     => 'text',
            'title'    => esc_html__("Availability Date Placeholder", 'houzez-child'),
            'default' => esc_html__("Enter the availability date", 'houzez-child')
        ),

        array(
            'id'       => 'cl_subl_ids',
            'type'     => 'text',
            'title'    => esc_html__("Listing IDs", 'houzez-child'),
            'default' => esc_html__("Listing IDs", 'houzez-child')
        ),
        array(
            'id'       => 'cl_subl_ids_plac',
            'type'     => 'text',
            'title'    => esc_html__("Listing IDs Placeholder", 'houzez-child'),
            'default' => esc_html__("Enter the listing IDs comma separated", 'houzez-child')
        ),
        array(
            'id'       => 'cl_subl_ids_tooltip',
            'type'     => 'text',
            'title'    => esc_html__("Listing IDs Tooltp", 'houzez-child'),
            'default' => esc_html__("If the sub-properties are separated listings, use the box above to enter the listing IDs (Example: 4,5,6)", 'houzez-child')
        ),

        array(
            'id'       => 'cl_location_section-end',
            'type'     => 'section',
            'indent'   => false,
        ),
        
    )
));

Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Agencies & Agency Detail', 'houzez-child' ),
    'id'     => 'agency-translation-menu',
    'desc'   => '',
    'subsection'   => true,
    'fields'        => array(
        array(
            'id'       => 'agency_labels_section-start',
            'type'     => 'section',
            'title'    => '',
            'subtitle' => esc_html__('Manage labels for agencies & agency detail page', 'houzez-child'),
            'indent'   => true,
        ),

        array(
            'id'       => 'agency_lb_properties',
            'type'     => 'text',
            'title'    => esc_html__( 'Properties', 'houzez-child' ),
            'default' => esc_html__( 'Properties', 'houzez-child' )
        ),
        array(
            'id'       => 'agency_lb_service_areas',
            'type'     => 'text',
            'title'    => esc_html__( 'Service Areas', 'houzez-child' ),
            'default' => esc_html__( 'Service Areas', 'houzez-child' )
        ),
        array(
            'id'       => 'agency_lb_ask_question',
            'type'     => 'text',
            'title'    => esc_html__( 'Ask a question', 'houzez-child' ),
            'default' => esc_html__( 'Ask a question', 'houzez-child' )
        ),
        array(
            'id'       => 'agency_lb_mobile',
            'type'     => 'text',
            'title'    => esc_html__( 'Mobile', 'houzez-child' ),
            'default' => esc_html__( 'Mobile', 'houzez-child' )
        ),
        array(
            'id'       => 'agency_lb_office',
            'type'     => 'text',
            'title'    => esc_html__( 'Office', 'houzez-child' ),
            'default' => esc_html__( 'Office', 'houzez-child' )
        ),
        array(
            'id'       => 'agency_lb_fax',
            'type'     => 'text',
            'title'    => esc_html__( 'Fax', 'houzez-child' ),
            'default' => esc_html__( 'Fax', 'houzez-child' )
        ),
        array(
            'id'       => 'agency_lb_email',
            'type'     => 'text',
            'title'    => esc_html__( 'Email', 'houzez-child' ),
            'default' => esc_html__( 'Email', 'houzez-child' )
        ),
        array(
            'id'       => 'agency_lb_language',
            'type'     => 'text',
            'title'    => esc_html__( 'Language', 'houzez-child' ),
            'default' => esc_html__( 'Language', 'houzez-child' )
        ),
        array(
            'id'       => 'agency_lb_license',
            'type'     => 'text',
            'title'    => esc_html__( 'License', 'houzez-child' ),
            'default' => esc_html__( 'License', 'houzez-child' )
        ),
        array(
            'id'       => 'agency_lb_tax_number',
            'type'     => 'text',
            'title'    => esc_html__( 'Tax Number', 'houzez-child' ),
            'default' => esc_html__( 'Tax Number', 'houzez-child' )
        ),
        array(
            'id'       => 'agency_lb_website',
            'type'     => 'text',
            'title'    => esc_html__( 'Website', 'houzez-child' ),
            'default' => esc_html__( 'Website', 'houzez-child' )
        ),
        array(
            'id'       => 'agency_lb_contact',
            'type'     => 'text',
            'title'    => esc_html__( 'Contact', 'houzez-child' ),
            'default' => esc_html__( 'Contact', 'houzez-child' )
        ),
        array(
            'id'       => 'agency_lb_all',
            'type'     => 'text',
            'title'    => esc_html__( 'All', 'houzez-child' ),
            'default' => esc_html__( 'All', 'houzez-child' )
        ),
        array(
            'id'       => 'agency_view_profile',
            'type'     => 'text',
            'title'    => esc_html__( 'View Profile', 'houzez-child' ),
            'default' => esc_html__( 'View Profile', 'houzez-child' )
        ),
        array(
            'id'       => 'agency_view_listings',
            'type'     => 'text',
            'title'    => esc_html__('View Listings', 'houzez-child'),
            'default' => esc_html__('View Listings', 'houzez-child')
        ),
        array(
            'id'       => 'agency_send_email',
            'type'     => 'text',
            'title'    => esc_html__('Send Email', 'houzez-child'),
            'default' => esc_html__('Send Email', 'houzez-child')
        ),
        array(
            'id'       => 'agency_lb_call',
            'type'     => 'text',
            'title'    => esc_html__('Call', 'houzez-child'),
            'default' => esc_html__('Call', 'houzez-child')
        ),
        array(
            'id'       => 'agency_lb_about',
            'type'     => 'text',
            'title'    => esc_html__('About', 'houzez-child'),
            'default' => esc_html__('About', 'houzez-child')
        ),
        array(
            'id'       => 'agency_lb_listings',
            'type'     => 'text',
            'title'    => esc_html__('Listings', 'houzez-child'),
            'default' => esc_html__('Listings', 'houzez-child')
        ),
        array(
            'id'       => 'agency_lb_agents',
            'type'     => 'text',
            'title'    => esc_html__('Agents', 'houzez-child'),
            'default' => esc_html__('Agents', 'houzez-child')
        ),
        array(
            'id'       => 'agency_lb_reviews',
            'type'     => 'text',
            'title'    => esc_html__('Reviews', 'houzez-child'),
            'default' => esc_html__('Reviews', 'houzez-child')
        ),
        array(
            'id'       => 'agency_lb_property_cities',
            'type'     => 'text',
            'title'    => wp_kses(__( '<span>Property</span> Cities', 'houzez-child' ), $allowed_html_array ),
            'default' => wp_kses(__( '<span>Property</span> Cities', 'houzez-child' ), $allowed_html_array )
        ),
        array(
            'id'       => 'agency_lb_property_status',
            'type'     => 'text',
            'title'    => wp_kses(__( '<span>Property</span> Status', 'houzez-child' ), $allowed_html_array ),
            'default' => wp_kses(__( '<span>Property</span> Status', 'houzez-child' ), $allowed_html_array )
        ),
        array(
            'id'       => 'agency_lb_property_types',
            'type'     => 'text',
            'title'    => wp_kses(__( '<span>Property</span> Types', 'houzez-child' ), $allowed_html_array ),
            'default' => wp_kses(__( '<span>Property</span> Types', 'houzez-child' ), $allowed_html_array )
        ),
        array(
            'id'       => 'agency_lb_all_reviews',
            'type'     => 'text',
            'title'    => esc_html__('See all reviews', 'houzez-child'),
            'default' => esc_html__('See all reviews', 'houzez-child')
        ),

        array(
            'id'       => 'agency_labels_section-end',
            'type'     => 'section',
            'indent'   => false,
        ),
    )
));

Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Dashboard Menu', 'houzez-child' ),
    'id'     => 'dashboard-menu',
    'desc'   => '',
    'subsection'   => true,
    'fields'        => array(
        array(
            'id'       => 'dsh_labels_section-start',
            'type'     => 'section',
            'title'    => '',
            'subtitle' => esc_html__('Manage labels for dashboard menu', 'houzez-child'),
            'indent'   => true,
        ),

        array(
            'id'       => 'dsh_home',
            'type'     => 'text',
            'title'    => esc_html__("Home", 'houzez-child'),
            'default' => esc_html__("Home", 'houzez-child')
        ),
        array(
            'id'       => 'dsh_board',
            'type'     => 'text',
            'title'    => esc_html__("Board", 'houzez-child'),
            'default' => esc_html__("Board", 'houzez-child')
        ),
        array(
            'id'       => 'dsh_activities',
            'type'     => 'text',
            'title'    => esc_html__("Activities", 'houzez-child'),
            'default' => esc_html__("Activities", 'houzez-child')
        ),
        array(
            'id'       => 'dsh_deals',
            'type'     => 'text',
            'title'    => esc_html__("Deals", 'houzez-child'),
            'default' => esc_html__("Deals", 'houzez-child')
        ),
        array(
            'id'       => 'dsh_leads',
            'type'     => 'text',
            'title'    => esc_html__("Leads", 'houzez-child'),
            'default' => esc_html__("Leads", 'houzez-child')
        ),
        array(
            'id'       => 'dsh_inquiries',
            'type'     => 'text',
            'title'    => esc_html__("Inquiries", 'houzez-child'),
            'default' => esc_html__("Inquiries", 'houzez-child')
        ),
        array(
            'id'       => 'dsh_insight',
            'type'     => 'text',
            'title'    => esc_html__("Insight", 'houzez-child'),
            'default' => esc_html__("Insight", 'houzez-child')
        ),
        array(
            'id'       => 'dsh_props',
            'type'     => 'text',
            'title'    => esc_html__("Properties", 'houzez-child'),
            'default' => esc_html__("Properties", 'houzez-child')
        ),
        array(
            'id'       => 'dsh_all',
            'type'     => 'text',
            'title'    => esc_html__("All", 'houzez-child'),
            'default' => esc_html__("All", 'houzez-child')
        ),
        array(
            'id'       => 'dsh_published',
            'type'     => 'text',
            'title'    => esc_html__("Published", 'houzez-child'),
            'default' => esc_html__("Published", 'houzez-child')
        ),
        array(
            'id'       => 'dsh_pending',
            'type'     => 'text',
            'title'    => esc_html__("Pending", 'houzez-child'),
            'default' => esc_html__("Pending", 'houzez-child')
        ),
        array(
            'id'       => 'dsh_expired',
            'type'     => 'text',
            'title'    => esc_html__("Expired", 'houzez-child'),
            'default' => esc_html__("Expired", 'houzez-child')
        ),
        array(
            'id'       => 'dsh_draft',
            'type'     => 'text',
            'title'    => esc_html__("Draft", 'houzez-child'),
            'default' => esc_html__("Draft", 'houzez-child')
        ),
        array(
            'id'       => 'dsh_hold',
            'type'     => 'text',
            'title'    => esc_html__("On Hold", 'houzez-child'),
            'default' => esc_html__("On Hold", 'houzez-child')
        ),
        array(
            'id'       => 'dsh_disapproved',
            'type'     => 'text',
            'title'    => esc_html__("Disapproved", 'houzez-child'),
            'default' => esc_html__("Disapproved", 'houzez-child')
        ),
        array(
            'id'       => 'dsh_create_listing',
            'type'     => 'text',
            'title'    => esc_html__("Create a Listing", 'houzez-child'),
            'default' => esc_html__("Create a Listing", 'houzez-child')
        ),
        array(
            'id'       => 'dsh_favorite',
            'type'     => 'text',
            'title'    => esc_html__("Favorites", 'houzez-child'),
            'default' => esc_html__("Favorites", 'houzez-child')
        ),
        array(
            'id'       => 'dsh_messages',
            'type'     => 'text',
            'title'    => esc_html__("Messages", 'houzez-child'),
            'default' => esc_html__("Messages", 'houzez-child')
        ),
        array(
            'id'       => 'dsh_saved_searches',
            'type'     => 'text',
            'title'    => esc_html__("Saved Searches", 'houzez-child'),
            'default' => esc_html__("Saved Searches", 'houzez-child')
        ),
        array(
            'id'       => 'dsh_membership',
            'type'     => 'text',
            'title'    => esc_html__("Membership", 'houzez-child'),
            'default' => esc_html__("Membership", 'houzez-child')
        ),
        array(
            'id'       => 'dsh_invoices',
            'type'     => 'text',
            'title'    => esc_html__("Invoices", 'houzez-child'),
            'default' => esc_html__("Invoices", 'houzez-child')
        ),
        array(
            'id'       => 'dsh_profile',
            'type'     => 'text',
            'title'    => esc_html__("My Profile", 'houzez-child'),
            'default' => esc_html__("My Profile", 'houzez-child')
        ),
        array(
            'id'       => 'dsh_gdpr',
            'type'     => 'text',
            'title'    => esc_html__("GDPR Request", 'houzez-child'),
            'default' => esc_html__("GDPR Request", 'houzez-child')
        ),
        array(
            'id'       => 'dsh_agents',
            'type'     => 'text',
            'title'    => esc_html__("Agents", 'houzez-child'),
            'default' => esc_html__("Agents", 'houzez-child')
        ),
        array(
            'id'       => 'dsh_addnew',
            'type'     => 'text',
            'title'    => esc_html__("Add New", 'houzez-child'),
            'default' => esc_html__("Add New", 'houzez-child')
        ),
        array(
            'id'       => 'dsh_logout',
            'type'     => 'text',
            'title'    => esc_html__("Log Out", 'houzez-child'),
            'default' => esc_html__("Log Out", 'houzez-child')
        ),
    

        array(
            'id'       => 'dsh_labels_section-end',
            'type'     => 'section',
            'indent'   => false,
        ),
    )
));