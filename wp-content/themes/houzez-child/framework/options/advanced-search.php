<?php
global $houzez_opt_name, $allowed_html_array, $custom_search_fields_array;
$search_builder = array(
    'keyword' => esc_html__('Keyword', 'houzez-child'),
    'city' => esc_html__('Cities', 'houzez-child'),
    'areas' => esc_html__('Areas', 'houzez-child'),
    'status' => esc_html__('Status', 'houzez-child'),
    'type' => esc_html__('Type', 'houzez-child'),
    'bedrooms' => esc_html__('Bedrooms', 'houzez-child'),
    'bathrooms' => esc_html__('Bathrooms', 'houzez-child'),
    'min-area' => esc_html__('Min. Area', 'houzez-child'),
    'max-area' => esc_html__('Max. Area', 'houzez-child'),
    'min-price' => esc_html__('Min. Price', 'houzez-child'),
    'max-price' => esc_html__('Max. Price', 'houzez-child'),
    'property-id' => esc_html__('Property ID', 'houzez-child'),
    'label' => esc_html__('Label', 'houzez-child'),
    'price' => esc_html__('Price (Only Search v.3)', 'houzez-child'),
);

$search_builder_disabled = array(
    'rooms' => esc_html__('Rooms', 'houzez-child'),
    'country' => esc_html__('Countries', 'houzez-child'),
    'state' => esc_html__('States', 'houzez-child'),
    'geolocation' => esc_html__('Geolocation', 'houzez-child'),
    'min-land-area' => esc_html__('Min. Land Area', 'houzez-child'),
    'max-land-area' => esc_html__('Max. Land Area', 'houzez-child'),
    'garage' => esc_html__('Garage', 'houzez-child'),
    'year-built' => esc_html__('Year Built', 'houzez-child'),
);

$search_builder = array_merge($search_builder, $custom_search_fields_array);


Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Searches', 'houzez-child' ),
    'id'     => 'advanced-search-houzez',
    'desc'   => '',
    'icon'   => 'el-icon-search el-icon-small',
    'fields' => array(
        
        
    ),
));

/*-------------------------------------------------------------------------------
* Header Search 
*------------------------------------------------------------------------------*/
Redux::setSection( $houzez_opt_name, array(
    'title'            => esc_html__( 'Header Search', 'houzez-child' ),
    'id'               => 'header-search',
    'subsection'       => true,
    'desc'             => '',
    'fields'           => array(
        array(
            'id'       => 'main-search-enable',
            'type'     => 'switch',
            'title'    => esc_html__( 'Enable/Disable Search', 'houzez-child' ),
            'desc'    => esc_html__( 'Enable or disable the search bar below the navigation bar', 'houzez-child' ),
            'subtitle' => '',
            'default'  => 0,
            'on'       => esc_html__( 'Enabled', 'houzez-child' ),
            'off'      => esc_html__( 'Disabled', 'houzez-child' ),
        ),
        array(
            'id'       => 'search_style',
            'type'     => 'image_select',
            'required' => array( 'main-search-enable', '=', '1' ),
            'title'    => esc_html__( 'Search Style', 'houzez-child' ),
            'subtitle' => '',
            'options'  => array(
                'style_1' => array(
                    'alt' => '',
                    'img' => HOUZEZ_IMAGE . 'search/search-v1.png'
                ),
                'style_2' => array(
                    'alt' => '',
                    'img' => HOUZEZ_IMAGE . 'search/search-v2.png'
                ),
                'style_3' => array(
                    'alt' => '',
                    'img' => HOUZEZ_IMAGE . 'search/search-v3.png'
                ),
                
            ),
            'desc'     => esc_html__('Select search style', 'houzez-child'),
            'default'  => 'style_1'
        ),
        array(
            'id'       => 'search_width',
            'type'     => 'select',
            'required' => array( 'main-search-enable', '=', '1' ),
            'title'    => esc_html__( 'Search Layout', 'houzez-child' ),
            'subtitle' => '',
            'options'   => array(
                'container' => esc_html__( 'Boxed', 'houzez-child' ),
                'container-fluid'  => esc_html__( 'Full Width', 'houzez-child' )
            ),
            'desc'     => esc_html__('Select the search layout', 'houzez-child'),
            'default'  => 'container'
        ),
        array(
            'id'       => 'search_position',
            'type'     => 'select',
            'required' => array( 'main-search-enable', '=', '1' ),
            'title'    => esc_html__( 'Search Position', 'houzez-child' ),
            'subtitle' => '',
            'options'	=> array(
                'under_nav'	=> esc_html__( 'Under Navigation', 'houzez-child' ),
                'under_banner'	=> esc_html__( 'Under banner ( Slider, Map etc )', 'houzez-child' )
            ),
            'desc'     => esc_html__('Select the search position', 'houzez-child'),
            'default'  => 'under_nav'
        ),
        array(
            'id'       => 'search_pages',
            'type'     => 'select',
            'required' => array( 'main-search-enable', '=', '1' ),
            'title'    => esc_html__( 'Search Pages', 'houzez-child' ),
            'subtitle' => '',
            'options'	=> array(
                'only_home'	=> esc_html__( 'Only Homepage', 'houzez-child' ),
                'all_pages'	=> esc_html__( 'Homepage + Inner Pages', 'houzez-child' ),
                'only_innerpages' => esc_html__( 'Only Inner Pages', 'houzez-child' ),
                'specific_pages' => esc_html__( 'Specific Pages', 'houzez-child' )
            ),
            'desc'     => esc_html__('Select on which pages you want to display the search', 'houzez-child'),
            'default'  => 'all_pages'
        ),
        array(
            'id'       => 'header_search_selected_pages',
            'type'     => 'select',
            'multi'    => true,
            'required' => array('search_pages', '=', 'specific_pages'),
            'title'    => __('Specify Pages', 'houzez-child'),
            'desc' => __('Specify which pages have to display the search. You can select multiple pages', 'houzez-child'),
            'data' => 'pages',
        ),
        array(
            'id'       => 'single_prop_search',
            'type'     => 'switch',
            'title'    => esc_html__( 'Property Detail Page', 'houzez-child' ),
            'subtitle' => esc_html__( 'Enable or disable advnaced search on propery detail page.', 'houzez-child' ),
            'desc'     => '',
            'default'  => 0,
            'on'       => esc_html__( 'Enabled', 'houzez-child' ),
            'off'      => esc_html__( 'Disabled', 'houzez-child' ),
        ),
        array(
            'id'       => 'is_tax_page',
            'type'     => 'switch',
            'title'    => esc_html__( 'Taxonomy Pages', 'houzez-child' ),
            'subtitle' => esc_html__( 'Enable or disable advnaced search on taxonomy pages.', 'houzez-child' ),
            'desc'     => '',
            'default'  => 1,
            'required' => array( 'search_pages', '!=', 'specific_pages' ),
            'on'       => esc_html__( 'Enabled', 'houzez-child' ),
            'off'      => esc_html__( 'Disabled', 'houzez-child' ),
        ),
        array(
            'id'       => 'blog_page_search',
            'type'     => 'switch',
            'title'    => esc_html__( 'Blog & Single Post Page', 'houzez-child' ),
            'subtitle' => esc_html__( 'Enable or disable search on blog & single post page.', 'houzez-child' ),
            'desc'     => '',
            'default'  => 0,
            'on'       => esc_html__( 'Enabled', 'houzez-child' ),
            'off'      => esc_html__( 'Disabled', 'houzez-child' ),
        ),
        array(
            'id'       => 'search_top_row_fields',
            'type'     => 'select',
            'title'    => esc_html__( 'Top Row Fields', 'houzez-child' ),
            'subtitle' => esc_html__( 'Number of fields to show in search top row', 'houzez-child' ),
            'options'   => array(
                '1' => esc_html__( 'One', 'houzez-child' ),
                '2' => esc_html__( 'Two', 'houzez-child' ),
                '3' => esc_html__( 'Three', 'houzez-child' ),
                '4' => esc_html__( 'Four', 'houzez-child' ),
                '5' => esc_html__( 'Five', 'houzez-child' )
            ),
            'desc'     => '',
            'default'  => '3'
        ),
        array(
            'id'      => 'search_builder',
            'type'    => 'sorter',
            'title'   => 'Search Builder',
            'subtitle'    => 'Drag and drop search manager, to quickly organize your search fields.',
            'options' => array(
                'enabled'  => $search_builder,
                'disabled' => $search_builder_disabled
            ),
        ),
        array(
            'id'       => 'enable_radius_search',
            'type'     => 'switch',
            'title'    => esc_html__( 'Enable Radius Search.', 'houzez-child' ),
            //'desc'     => '',
            'desc' => esc_html__('Enable or disable the advanced search radius search', 'houzez-child'),
            'default'  => 0,
            'on'       => esc_html__( 'Enable', 'houzez-child' ),
            'off'      => esc_html__( 'Disable', 'houzez-child' ),
        ),
        
        array(
            'id'       => 'price_range',
            'type'     => 'switch',
            'title'    => esc_html__( 'Price Range Slider', 'houzez-child' ),
            'subtitle'     => esc_html__('If enabled, min and max price dropdown fields will not show', 'houzez-child'),
            'desc' => esc_html__('Enable or disable the price range slider', 'houzez-child'),
            'default'  => 0,
            'on'       => esc_html__( 'Enabled', 'houzez-child' ),
            'off'      => esc_html__( 'Disabled', 'houzez-child' ),
        ),

        array(
            'id'       => 'price_range_mobile',
            'type'     => 'switch',
            'title'    => esc_html__( 'Price Range Slider for Mobile', 'houzez-child' ),
            'subtitle'     => esc_html__('If enabled, min and max price dropdown fields will not show', 'houzez-child'),
            'desc' => esc_html__('Enable or disable the price range slider', 'houzez-child'),
            'default'  => 1,
            'on'       => esc_html__( 'Enabled', 'houzez-child' ),
            'off'      => esc_html__( 'Disabled', 'houzez-child' ),
        ),

        array(
            'id'       => 'search_other_features',
            'type'     => 'switch',
            'title'    => esc_html__( 'Other Features', 'houzez-child' ),
            //'desc'     => '',
            'desc' => esc_html__('Enable or disable other features in searches', 'houzez-child'),
            'default'  => 0,
            'on'       => esc_html__( 'Enabled', 'houzez-child' ),
            'off'      => esc_html__( 'Disabled', 'houzez-child' ),
        ),

        array(
            'id'       => 'search_other_features_mobile',
            'type'     => 'switch',
            'title'    => esc_html__( 'Other Features for Mobile', 'houzez-child' ),
            //'desc'     => '',
            'desc' => esc_html__('Enable or disable other features in searches', 'houzez-child'),
            'default'  => 0,
            'on'       => esc_html__( 'Enabled', 'houzez-child' ),
            'off'      => esc_html__( 'Disabled', 'houzez-child' ),
        ),
        array(
            'id'       => 'header-search-visible',
            'type'     => 'switch',
            'required' => array( 'main-search-enable', '=', '1' ),
            'title'    => esc_html__( 'Advanced Filters Visible', 'houzez-child' ),
            'subtitle' => esc_html__( 'Use this option to keep the advanced search filters always visible', 'houzez-child' ),
            'desc'     => esc_html__('Note: If "Yes" it will remove advanced button in search and show all filters', 'houzez-child'),
            'default'  => 0,
            'on'       => esc_html__( 'Yes', 'houzez-child' ),
            'off'      => esc_html__( 'No', 'houzez-child' ),
        ),
        array(
            'id'       => 'main-search-sticky',
            'type'     => 'switch',
            'required' => array( 'header-search-visible', '=', '0' ),
            'title'    => esc_html__( 'Sticky Advanced Search - Desktop', 'houzez-child' ),
            'desc' => esc_html__( 'Enable or disable the advanced sticky search', 'houzez-child' ),
            'subtitle'     => esc_html__('Note: It will only work when the main menu sticky is disabled', 'houzez-child'),
            'default'  => 0,
            'on'       => esc_html__( 'Enabled', 'houzez-child' ),
            'off'      => esc_html__( 'Disabled', 'houzez-child' ),
        ),
        array(
            'id'       => 'mobile-search-sticky',
            'type'     => 'switch',
            'required' => array( 'main-search-enable', '=', '1' ),
            'title'    => esc_html__( 'Sticky Advanced Search - Mobile', 'houzez-child' ),
            'desc' => esc_html__( 'Enable or disable the advanced sticky search on mobile devices', 'houzez-child' ),
            'subtitle'     => esc_html__('Note: It will only work when the main menu sticky is disabled', 'houzez-child'),
            'default'  => 0,
            'on'       => esc_html__( 'Enabled', 'houzez-child' ),
            'off'      => esc_html__( 'Disabled', 'houzez-child' ),
        ),
    )
) );

/*-------------------------------------------------------------------------------
* Dock Search 
*------------------------------------------------------------------------------*/
$dock_search_builder = $search_builder;
$dock_search_builder_disabled = $search_builder_disabled;
unset($dock_search_builder['price']);

Redux::setSection( $houzez_opt_name, array(
    'title'            => esc_html__( 'Dock Search', 'houzez-child' ),
    'id'               => 'dock-search',
    'subsection'       => true,
    'desc'             => '',
    'fields'           => array(
        array(
            'id'       => 'enable_advanced_search_over_headers',
            'type'     => 'switch',
            'title'    => esc_html__( 'Advanced Search Panel', 'houzez-child' ),
            'desc' => esc_html__('Enable or disable the advanced search panel over the header type like Header Map, Revolution Slider, Image, Property Slider and Video.', 'houzez-child'),
            'default'  => 0,
            'on'       => esc_html__( 'Yes', 'houzez-child' ),
            'off'      => esc_html__( 'No', 'houzez-child' ),
        ),

        array(
            'id'       => 'adv_search_which_header_show',
            'type'     => 'checkbox',
            'required' => array('enable_advanced_search_over_headers', '=', '1'),
            'title'    => esc_html__( 'Choose Header Type', 'houzez-child' ),
            'desc'     => '',
            'subtitle' => esc_html__('Choose on which header type you want to show the advanced search panel', 'houzez-child'),
            'options'  => array(
                'header_map' => 'Header with google map',
                'header_video' => 'Header Video',
                'header_image' => 'Header Parallax Image',
                'header_rs' => 'Header Revolution Slider',
                'header_ps' => 'Header Properties Slider'
            ),
            'default' => array(
                'header_map' => '1',
                'header_video' => '0',
                'header_image' => '0',
                'header_rs' => '0',
                'header_ps' => '0'
            )
        ),
        array(
            'id'       => 'adv_search_over_header_pages',
            'type'     => 'select',
            'title'    => esc_html__( 'Search Pages', 'houzez-child' ),
            'subtitle' => '',
            'options'	=> array(
                'only_home'	=> esc_html__( 'Only Homepage', 'houzez-child' ),
                'all_pages'	=> esc_html__( 'Homepage + Inner Pages', 'houzez-child' ),
                'only_innerpages' => esc_html__( 'Only Inner Pages', 'houzez-child' ),
                'specific_pages' => esc_html__( 'Specific Pages', 'houzez-child' )
            ),
            'desc'     => esc_html__('Select on which pages you want to display the search', 'houzez-child'),
            'default'  => 'only_home'
        ),
        array(
            'id'       => 'adv_search_selected_pages',
            'type'     => 'select',
            'multi'    => true,
            'required' => array('adv_search_over_header_pages', '=', 'specific_pages'),
            'title'    => __('Select Pages', 'houzez-child'),
            'subtitle' => __('You can select multiple pages', 'houzez-child'),
            'desc'     => '',
            'data' => 'pages',
        ),
        array(
            'id'       => 'keep_adv_search_live',
            'type'     => 'switch',
            'title'    => esc_html__( 'Keep Advanced Search visible?', 'houzez-child' ),
            'desc' => esc_html__('If no, the advanced search panel over the header will be displayed in the closed position by default.', 'houzez-child'),
            'default'  => 1,
            'on'       => esc_html__( 'Yes', 'houzez-child' ),
            'off'      => esc_html__( 'No', 'houzez-child' ),
        ),

        array(
            'id'       => 'dock_search_top_row_fields',
            'type'     => 'select',
            'title'    => esc_html__( 'Top Row Fields', 'houzez-child' ),
            'subtitle' => esc_html__( 'Number of fields to show in search top row', 'houzez-child' ),
            'options'   => array(
                '1' => esc_html__( 'One', 'houzez-child' ),
                '2' => esc_html__( 'Two', 'houzez-child' ),
                '3' => esc_html__( 'Three', 'houzez-child' ),
                '4' => esc_html__( 'Four', 'houzez-child' ),
                '5' => esc_html__( 'Five', 'houzez-child' )
            ),
            'desc'     => '',
            'default'  => '3'
        ),
        array(
            'id'      => 'dock_search_builder',
            'type'    => 'sorter',
            'title'   => 'Search Builder',
            'subtitle'    => 'Drag and drop search manager, to quickly organize your search fields.',
            'options' => array(
                'enabled'  => $dock_search_builder,
                'disabled' => $dock_search_builder_disabled
            ),
        ),
        array(
            'id'       => 'dock_radius_search',
            'type'     => 'switch',
            'title'    => esc_html__( 'Enable Radius Search.', 'houzez-child' ),
            //'desc'     => '',
            'desc' => esc_html__('Enable or disable the advanced search radius search', 'houzez-child'),
            'default'  => 0,
            'on'       => esc_html__( 'Enable', 'houzez-child' ),
            'off'      => esc_html__( 'Disable', 'houzez-child' ),
        ),
        
        array(
            'id'       => 'dock_price_range',
            'type'     => 'switch',
            'title'    => esc_html__( 'Price Range Slider', 'houzez-child' ),
            'subtitle'     => esc_html__('If enabled, min and max price dropdown fields will not show', 'houzez-child'),
            'desc' => esc_html__('Enable or disable the price range slider', 'houzez-child'),
            'default'  => 0,
            'on'       => esc_html__( 'Enabled', 'houzez-child' ),
            'off'      => esc_html__( 'Disabled', 'houzez-child' ),
        ),
        array(
            'id'       => 'dock_search_other_features',
            'type'     => 'switch',
            'title'    => esc_html__( 'Other Features', 'houzez-child' ),
            //'desc'     => '',
            'desc' => esc_html__('Enable or disable other features in searches', 'houzez-child'),
            'default'  => 0,
            'on'       => esc_html__( 'Enabled', 'houzez-child' ),
            'off'      => esc_html__( 'Disabled', 'houzez-child' ),
        ),

    )
) );

/*-------------------------------------------------------------------------------
* Dock Search 
*------------------------------------------------------------------------------*/
Redux::setSection( $houzez_opt_name, array(
    'title'            => esc_html__( 'Half Map Search', 'houzez-child' ),
    'id'               => 'halfmap-search',
    'subsection'       => true,
    'desc'             => '',
    'fields'           => array(
        array(
            'id'       => 'enable_halfmap_search',
            'type'     => 'switch',
            'title'    => esc_html__( 'Show Search', 'houzez-child' ),
            'desc'     => '',
            'subtitle' => esc_html__('Enable or disable the search for half map', 'houzez-child'),
            'default'  => 1,
            'on'       => esc_html__( 'Yes', 'houzez-child' ),
            'off'      => esc_html__( 'No', 'houzez-child' ),
        ),

        array(
            'id'       => 'halfmap_search_layout',
            'type'     => 'image_select',
            'title'    => esc_html__('Select Version', 'houzez-child'),
            'subtitle' => '',
            'desc'     => '',
            'options'  => array(
                'v1' => array(
                    'alt' => '',
                    'img' => HOUZEZ_IMAGE . 'search/search-v1.png'
                ),
                'v2' => array(
                    'alt' => '',
                    'img' => HOUZEZ_IMAGE . 'search/search-v2.png'
                ),
                'v3' => array(
                    'alt' => '',
                    'img' => HOUZEZ_IMAGE . 'search/search-v3.png'
                ),
                'v4' => array(
                    'alt' => '',
                    'img' => HOUZEZ_IMAGE . 'search/search-halfmap.png'
                ),
                
            ),
            'default'  => 'v4'
        ),

        array(
            'id'       => 'search_top_row_fields_halfmap',
            'type'     => 'select',
            'title'    => esc_html__( 'Top Row Fields', 'houzez-child' ),
            'desc' => esc_html__( 'Select the number of fields to display in the search top row', 'houzez-child' ),
            'options'   => array(
                '1' => esc_html__( 'One', 'houzez-child' ),
                '2' => esc_html__( 'Two', 'houzez-child' ),
                '3' => esc_html__( 'Three', 'houzez-child' ),
                '4' => esc_html__( 'Four', 'houzez-child' ),
                '5' => esc_html__( 'Five', 'houzez-child' )
            ),
            //'desc'     => '',
            'default'  => '3'
        ),
        array(
            'id'      => 'search_builder_halfmap',
            'type'    => 'sorter',
            'title'   => 'Search Builder Half Map',
            'subtitle'    => 'Drag and drop search manager, to quickly organize your search fields.',
            'options' => array(
                'enabled'  => $search_builder,
                'disabled' => $search_builder_disabled
            ),
        ),

        array(
            'id'       => 'enable_radius_search_halfmap',
            'type'     => 'switch',
            'title'    => esc_html__( 'Enable Radius Search On The Half Map Page.', 'houzez-child' ),
            //'desc'     => '',
            'desc' => esc_html__('Enable or disable the radius search on the half map page', 'houzez-child'),
            'default'  => 1,
            'on'       => esc_html__( 'Enable', 'houzez-child' ),
            'off'      => esc_html__( 'Disable', 'houzez-child' ),
        ),
        array(
            'id'       => 'price_range_halfmap',
            'type'     => 'switch',
            'title'    => esc_html__( 'Price Range Slider for Half Map', 'houzez-child' ),
            'subtitle'     => esc_html__('If enabled, the minimum and maximum price dropdown fields will not displayed', 'houzez-child'),
            'desc' => esc_html__('Enable or disable the price range slider', 'houzez-child'),
            'default'  => 1,
            'on'       => esc_html__( 'Enabled', 'houzez-child' ),
            'off'      => esc_html__( 'Disabled', 'houzez-child' ),
        ),
        array(
            'id'       => 'search_other_features_halfmap',
            'type'     => 'switch',
            'title'    => esc_html__( 'Other Features for Half Map', 'houzez-child' ),
            //'desc'     => '',
            'desc' => esc_html__('Enable or disable other features in searches', 'houzez-child'),
            'default'  => 1,
            'on'       => esc_html__( 'Enabled', 'houzez-child' ),
            'off'      => esc_html__( 'Disabled', 'houzez-child' ),
        ),

        array(
            'id'       => 'halfmap-search-visible',
            'type'     => 'switch',
            'title'    => esc_html__( 'Advanced Filters Visible', 'houzez-child' ),
            'desc' => esc_html__( 'Keep the advaced search filters always visible', 'houzez-child' ),
            'subtitle'     => esc_html__('Note: If "Yes" it will remove advanced button in search and show all filters', 'houzez-child'),
            'default'  => 0,
            'on'       => esc_html__( 'Yes', 'houzez-child' ),
            'off'      => esc_html__( 'No', 'houzez-child' ),
        ),
        
    )
) );

Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Banner Search', 'houzez-child' ),
    'id'     => 'home-banner-search',
    'desc'   => '',
    'subsection' => true,
    'fields' => array(
        array(
            'id'       => 'splash_v1_dropdown',
            'type'     => 'select',
            'title'    => esc_html__( 'Banner Search dropdown', 'houzez-child' ),
            'desc'     => esc_html__('Select what you want to display as first field in the banner search', 'houzez-child' ),
            'options'  => array(
                'property_country' => esc_html__('Countries', 'houzez-child'),
                'property_state' => esc_html__('States', 'houzez-child'),
                'property_city' => esc_html__('Cities', 'houzez-child'),
                'property_area' => esc_html__('Areas', 'houzez-child'),
                'property_status' => esc_html__('Status', 'houzez-child'),
                'property_type' => esc_html__('Type', 'houzez-child')
            ),
            'default' => 'property_city'
        ),
        array(
            'id'       => 'banner_search_tabs',
            'type'     => 'switch',
            'title'    => esc_html__( 'Search Tabs', 'houzez-child' ),
            'subtitle'     => 'This option will display the status tabs on the search bar',
            'desc' => esc_html__('Do you want to display tabs on the search banner?', 'houzez-child'),
            'default'  => 0,
            'on'       => esc_html__( 'Yes', 'houzez-child' ),
            'off'      => esc_html__( 'No', 'houzez-child' ),
        ),
        array(
            'id'       => 'tabs_limit',
            'type'     => 'text',
            'title'    => esc_html__('Tabs Limit', 'houzez-child'),
            'desc' => esc_html__('Enter the number of tabs to display in banner search', 'houzez-child'),
            //'desc'     => '',
            'default'  => '2',
            'required'  => array('banner_search_tabs', '=', '1'),
            'validate'  => 'numeric',
        ),
        array(
            'id'       => 'banner_radius_search',
            'type'     => 'switch',
            'title'    => esc_html__( 'Enable Radius Search.', 'houzez-child' ),
            //'desc'     => '',
            'desc' => esc_html__('Enable or disable the search radius search', 'houzez-child'),
            'default'  => 0,
            'on'       => esc_html__( 'Enable', 'houzez-child' ),
            'off'      => esc_html__( 'Disable', 'houzez-child' ),
        ),
    )
));


Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Settings', 'houzez-child' ),
    'id'     => 'adv-search-settings',
    'desc'   => '',
    'subsection' => true,
    'fields' => array(
        array(
            'id'       => 'keyword_field',
            'type'     => 'select',
            'title'    => __('Keyword Field', 'houzez-child'),
            'desc' => __('Select the search criteria for the keyword field', 'houzez-child'),
            'options'  => array(
                'prop_title' => esc_html__('Property Title or Content', 'houzez-child'),
                'prop_address' => esc_html__('Property address, street, zip or property ID', 'houzez-child'),
                'prop_city_state_county' => esc_html__('Search State, City or Area', 'houzez-child'),
            ),
            'default' => 'prop_address'
        ),
        array(
            'id'       => 'keyword_autocomplete',
            'type'     => 'switch',
            'title'    => esc_html__( 'Auto Complete', 'houzez-child' ),
            //'desc'     => '',
            'desc' => esc_html__('Enable or disable the auto complete functionality for the keyword field', 'houzez-child'),
            'default'  => 0,
            'on'       => esc_html__( 'Enable', 'houzez-child' ),
            'off'      => esc_html__( 'Disable', 'houzez-child' ),
        ),
        array(
            'id'       => 'beds_baths_search',
            'type'     => 'select',
            'title'    => esc_html__( 'Bedrooms, Rooms, Bathrooms', 'houzez-child' ),
            'desc'    => esc_html__( 'Select the search criteria for bedrooms, Rooms and bathrooms', 'houzez-child' ),
            //'desc'     => '',
            'options'  => array(
                'equal' => esc_html__('Equal', 'houzez-child'),
                'greater' => esc_html__('Greater', 'houzez-child'),
                'like' => esc_html__('Like', 'houzez-child'),
            ),
            'default' => 'equal'
        ),
        array(
            'id'       => 'state_city_area_dropdowns',
            'type'     => 'switch',
            'title'    => esc_html__( 'State, City, Area dropdowns.', 'houzez-child' ),
            //'desc'     => '',
            'desc' => esc_html__('Do you want to display the States, Cities, Areas fields if they have at least 1 property?', 'houzez-child'),
            'default'  => 0,
            'on'       => esc_html__( 'Yes', 'houzez-child' ),
            'off'      => esc_html__( 'Show All', 'houzez-child' ),
        ),

        array(
            'id'       => 'price_field_type',
            'type'     => 'button_set',
            'title'    => __('Price Field Type', 'houzez-child'),
            'subtitle' => '',
            'desc'     => '',
            'options' => array(
                'input' => esc_html__('Input Field', 'houzez-child'), 
                'select' => esc_html__('Select Field', 'houzez-child'), 
             ), 
            'default' => 'select'
        ),

        array(
            'id'          => 'search_exclude_status',
            'type'        => 'select',
            'title'       => esc_html__( 'Exclude Statuses', 'houzez-child' ),
            'subtitle'    => esc_html__( 'Which statuses would you like to exclude from searches?', 'houzez-child' ),
            'multi'       => true,
            'data'        => 'terms',
            'args'  => array(
                'taxonomy' => array( 'property_status' ),
                'hide_empty' => false,
            )
        ),

        array(
            'id'       => 'ms_section-start',
            'type'     => 'section',
            'title'    => esc_html__( 'Multi Selection', 'houzez-child' ),
            'subtitle' => '',
            'indent'   => true,
        ),

        array(
            'id'       => 'ms_type',
            'type'     => 'switch',
            'title'    => esc_html__( 'Type', 'houzez-child' ),
            'desc'     => '',
            'subtitle' => esc_html__('Show multi-select for property type', 'houzez-child'),
            'default'  => 1,
            'on'       => esc_html__( 'Yes', 'houzez-child' ),
            'off'      => esc_html__( 'No', 'houzez-child' ),
        ),

        array(
            'id'       => 'ms_status',
            'type'     => 'switch',
            'title'    => esc_html__( 'Status', 'houzez-child' ),
            'desc'     => '',
            'subtitle' => esc_html__('Show multi-select for property status', 'houzez-child'),
            'default'  => 0,
            'on'       => esc_html__( 'Yes', 'houzez-child' ),
            'off'      => esc_html__( 'No', 'houzez-child' ),
        ),

        array(
            'id'       => 'ms_label',
            'type'     => 'switch',
            'title'    => esc_html__( 'Label', 'houzez-child' ),
            'desc'     => '',
            'subtitle' => esc_html__('Show multi-select for property label', 'houzez-child'),
            'default'  => 0,
            'on'       => esc_html__( 'Yes', 'houzez-child' ),
            'off'      => esc_html__( 'No', 'houzez-child' ),
        ),

        array(
            'id'       => 'ms_city',
            'type'     => 'switch',
            'title'    => esc_html__( 'City', 'houzez-child' ),
            'desc'     => '',
            'subtitle' => esc_html__('Show multi-select for property city', 'houzez-child'),
            'default'  => 0,
            'on'       => esc_html__( 'Yes', 'houzez-child' ),
            'off'      => esc_html__( 'No', 'houzez-child' ),
        ),

        array(
            'id'       => 'ms_area',
            'type'     => 'switch',
            'title'    => esc_html__( 'Area', 'houzez-child' ),
            'desc'     => '',
            'subtitle' => esc_html__('Show multi-select for property Area', 'houzez-child'),
            'default'  => 1,
            'on'       => esc_html__( 'Yes', 'houzez-child' ),
            'off'      => esc_html__( 'No', 'houzez-child' ),
        ),

        array(
            'id'     => 'ms_section_end',
            'type'   => 'section',
            'indent' => false,
        ),

        array(
            'id' => 'houzez_default_radius',
            'type' => 'slider',
            'title' => __('Default Radius', 'houzez-child'),
            'desc' => __('Setup the default distance', 'houzez-child'),
            //'desc' => '',
            "default" => 50,
            "min" => 0,
            "step" => 1,
            "max" => 100,
            'display_value' => ''
        ),
        array(
            'id'       => 'radius_unit',
            'type'     => 'select',
            'title'    => __('Radius Unit', 'houzez-child'),
            'desc' => __('Select the distance unit', 'houzez-child'),
            'description' => '',
            'options'  => array(
                'km' => 'km',
                'mi' => 'mi'
            ),
            'default' => 'km'
        ),

        array(
            'id'       => 'features_limit',
            'type'     => 'text',
            'title'    => esc_html__('Features Limit', 'houzez-child'),
            'desc' => esc_html__('Enter the number of features to show in the advanced search. Note: enter -1 to display them all.', 'houzez-child'),
            //'desc'     => '',
            'default'  => '-1',
        ),
        array(
            'id'       => 'enable_disable_save_search',
            'type'     => 'switch',
            'title'    => esc_html__( 'Save Search Button', 'houzez-child' ),
            'subtitle'     => '',
            'desc' => esc_html__('Enable the save search button option on search result page', 'houzez-child'),
            'default'  => 1,
            'on'       => esc_html__( 'Yes', 'houzez-child' ),
            'off'      => esc_html__( 'No', 'houzez-child' ),
        ),
        array(
            'id'       => 'save_search_duration',
            'type'     => 'select',
            'title'    => esc_html__('Send Emails', 'houzez-child'),
            'subtitle' => 'If a customer saved a search result, he will receive periodic updates if new proprties will match his search criteria',
            'desc'     => 'Select when you want to send the emails related to saved searches',
            'required' => array( 'enable_disable_save_search', '=', '1' ),
            'options'  => array(
                'daily'   => esc_html__( 'Daily', 'houzez-child' ),
                'weekly'   => esc_html__( 'weekly', 'houzez-child' )
            ),
            'default'  => 'daily',
        ),
        array(
            'id'        => 'min_price',
            'type'      => 'textarea',
            'title'     => esc_html__( 'Minimum Prices List for Advance Search Form', 'houzez-child' ),
            'read-only' => false,
            'default'   => '1000, 5000, 10000, 50000, 100000, 200000, 300000, 400000, 500000, 600000, 700000, 800000, 900000, 1000000, 1500000, 2000000, 2500000, 5000000',
            'subtitle'  => esc_html__( 'Only provide comma separated numbers. Do not add decimal points, dashes, spaces and currency signs.', 'houzez-child' ),
            'validate' => 'comma_numeric'
        ),
        array(
            'id'        => 'max_price',
            'type'      => 'textarea',
            'title'     => esc_html__( 'Maximum Prices List for Advance Search Form', 'houzez-child' ),
            'read-only' => false,
            'default'   => '5000, 10000, 50000, 100000, 200000, 300000, 400000, 500000, 600000, 700000, 800000, 900000, 1000000, 1500000, 2000000, 2500000, 5000000, 10000000',
            'subtitle'  => esc_html__( 'Only provide comma separated numbers. Do not add decimal points, dashes, spaces and currency signs.', 'houzez-child' ),
            'validate' => 'comma_numeric'
        ),
        array(
            'id'     => 'rentPrice-info',
            'type'   => 'info',
            'notice' => false,
            'style'  => 'info',
            'title'  => wp_kses(__( '<span class="font24">Rent Prices.</span>', 'houzez-child' ), $allowed_html_array),
            'desc'   => esc_html__( 'Visitors expect smaller values for rent prices, So please provide the list of minimum and maximum rent prices below', 'houzez-child' )
        ),
        array(
            'id'          => 'search_rent_status',
            'type'        => 'select',
            'title'       => esc_html__( 'Select the Appropriate Rent Status', 'houzez-child' ),
            'subtitle'    => esc_html__( 'The rent prices will be displayed based on selected status.', 'houzez-child' ),
            'desc'        => '',
            'data'        => 'terms',
            'args'  => array(
                'taxonomy' => array( 'property_status' ),
                'hide_empty' => false,
            )
        ),

        array(
            'id'        => 'min_price_rent',
            'type'      => 'textarea',
            'title'     => esc_html__( 'Minimum Prices List for Rent Only', 'houzez-child' ),
            'read-only' => false,
            'default'   => '500, 1000, 2000, 3000, 4000, 5000, 7500, 10000, 15000, 20000, 25000, 30000, 40000, 50000, 75000, 100000',
            'subtitle'  => esc_html__( 'Only provide comma separated numbers. Do not add decimal points, dashes, spaces and currency signs.', 'houzez-child' ),
            'validate' => 'comma_numeric'
        ),
        array(
            'id'        => 'max_price_rent',
            'type'      => 'textarea',
            'title'     => esc_html__( 'Maximum Prices List for Rent Only', 'houzez-child' ),
            'read-only' => false,
            'default'   => '1000, 2000, 3000, 4000, 5000, 7500, 10000, 15000, 20000, 25000, 30000, 40000, 50000, 75000, 100000, 150000',
            'subtitle'  => esc_html__( 'Only provide comma separated numbers. Do not add decimal points, dashes, spaces and currency signs.', 'houzez-child' ),
            'validate' => 'comma_numeric'
        ),
        array(
            'id'     => 'advanced-search-widget-priceRang-info',
            'type'   => 'info',
            'notice' => false,
            'style'  => 'info',
            'title'  => __( '<span class="font24">Advanced Search Price range for price slider.</span>', 'houzez-child' ),
            'desc'   => ''
        ),
        array(
            'id'        => 'advanced_search_widget_min_price',
            'type'      => 'text',
            'title'     => esc_html__( 'Minimum Price', 'houzez-child' ),
            'desc'     => esc_html__( 'Enter the minimum price', 'houzez-child' ),
            'read-only' => false,
            'default'   => '200',
            'subtitle'  => '',
            'validate' => 'numeric'
        ),
        array(
            'id'        => 'advanced_search_widget_max_price',
            'type'      => 'text',
            'title'     => esc_html__( 'Maximum Price', 'houzez-child' ),
            'desc'     => esc_html__( 'Enter the maximum price', 'houzez-child' ),
            'read-only' => false,
            'default'   => '2500000',
            'subtitle'  => '',
            'validate' => 'numeric'
        ),
        array(
            'id'          => 'search_rent_status_for_price_range',
            'type'        => 'select',
            'title'       => esc_html__( 'Select the Appropriate Rent Status', 'houzez-child' ),
            'subtitle'    => esc_html__( 'The rent prices will be displayed based on selected status.', 'houzez-child' ),
            'desc'        => '',
            'data'  => 'terms',
            'args'  => array(
                'taxonomy' => array( 'property_status' ),
                'hide_empty' => false,
            )
        ),
        array(
            'id'        => 'advanced_search_min_price_range_for_rent',
            'type'      => 'text',
            'title'     => esc_html__( 'Minimum Price For Rent Only', 'houzez-child' ),
            'desc'     => esc_html__( 'Enter the minimum price', 'houzez-child' ),
            'read-only' => false,
            'default'   => '50',
            'subtitle'  => '',
            'validate' => 'numeric'
        ),
        array(
            'id'        => 'advanced_search_max_price_range_for_rent',
            'type'      => 'text',
            'title'     => esc_html__( 'Maximum Price For Rent Only', 'houzez-child' ),
            'desc'     => esc_html__( 'Enter the maximum price', 'houzez-child' ),
            'read-only' => false,
            'default'   => '25000',
            'subtitle'  => '',
            'validate' => 'numeric'
        ),

        array(
            'id'     => 'beds-baths-info',
            'type'   => 'info',
            'notice' => false,
            'style'  => 'info',
            'title'  => wp_kses(__( '<span class="font24">Bedrooms & Bathrooms</span>', 'houzez-child' ), $allowed_html_array),
            'desc'   => ''
        ),
        array(
            'id'        => 'adv_beds_list',
            'type'      => 'textarea',
            'title'     => esc_html__( 'Bedrooms List', 'houzez-child' ),
            'read-only' => false,
            'default'   => '1,2,3,4,5,6,7,8,9,10',
            'subtitle'  => esc_html__( 'Only provide comma separated numbers. Do not add dashes, spaces and currency signs.', 'houzez-child' ),
            //'validate' => 'comma_numeric'
        ),
        array(
            'id'        => 'adv_rooms_list',
            'type'      => 'textarea',
            'title'     => esc_html__( 'Rooms List', 'houzez-child' ),
            'read-only' => false,
            'default'   => '1,2,3,4,5,6,7,8,9,10',
            'subtitle'  => esc_html__( 'Only provide comma separated numbers. Do not add dashes, spaces and currency signs.', 'houzez-child' ),
            //'validate' => 'comma_numeric'
        ),
        array(
            'id'        => 'adv_baths_list',
            'type'      => 'textarea',
            'title'     => esc_html__( 'Bathrooms List', 'houzez-child' ),
            'read-only' => false,
            'default'   => '1,2,3,4,5,6,7,8,9,10',
            'subtitle'  => esc_html__( 'Only provide comma separated numbers. Do not add dashes, spaces and currency signs.', 'houzez-child' ),
            //'validate' => 'comma_numeric'
        )
    )
));

Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Search Results Page', 'houzez-child' ),
    'id'     => 'adv-search-resultpage',
    'icon'   => 'el-icon-search el-icon-small',
    'desc'   => '',
    'subsection' => false,
    'fields' => array(
        array(
            'id'       => 'search_result_page',
            'type'     => 'select',
            'title'    => __('Search Reslt Page', 'houzez-child'),
            'desc' => __('Create this page using "Search Results" template', 'houzez-child'),
            'options'  => array(
                'normal_page' => 'Normal Page',
                'half_map' => 'Half Map'
            ),
            'default' => 'normal_page'
        ),
        
        array(
            'id'       => 'search_result_layout',
            'type'     => 'image_select',
            'required' => array( 'search_result_page', '=', 'normal_page' ),
            'title'    => __('Search Result Page Layout', 'houzez-child'),
            'subtitle' => __('Select the layout for search result page.', 'houzez-child'),
            'options'  => array(
                'no-sidebar' => array(
                    'alt'   => '',
                    'img'   => ReduxFramework::$_url.'assets/img/1c.png'
                ),
                'left-sidebar' => array(
                    'alt'   => '',
                    'img'   => ReduxFramework::$_url.'assets/img/2cl.png'
                ),
                'right-sidebar' => array(
                    'alt'   => '',
                    'img'  => ReduxFramework::$_url.'assets/img/2cr.png'
                )
            ),
            'default' => 'right-sidebar'
        ),
        array(
            'id'       => 'search_result_posts_layout',
            'type'     => 'select',
            'title'    => __('Properties Layout', 'houzez-child'),
            'desc' => __('Select the properties layout for search result page.', 'houzez-child'),
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
            'id'       => 'search_default_order',
            'type'     => 'select',
            'title'    => __('Default Order', 'houzez-child'),
            'desc' => __('Select the results page properties order.', 'houzez-child'),
            'options'  => array(
                '' => esc_html__( 'Default Order', 'houzez-child' ),
                'a_title' => esc_html__( 'Title - ASC', 'houzez-child' ),
                'd_title' => esc_html__( 'Title - DESC', 'houzez-child' ),
                'd_date' => esc_html__( 'Date New to Old', 'houzez-child' ),
                'a_date' => esc_html__( 'Date Old to New', 'houzez-child' ),
                'd_price' => esc_html__( 'Price (High to Low)', 'houzez-child' ),
                'a_price' => esc_html__( 'Price (Low to High)', 'houzez-child' ),
                'featured_first' => esc_html__( 'Show Featured Listings on Top', 'houzez-child' ),
            ),
            'default' => ''
        ),

        array(
            'id'       => 'search_num_posts',
            'type'     => 'text',
            'title'    => esc_html__('Number of Listings', 'houzez-child'),
            'desc'    => esc_html__('Enter the number of listings to display on the search result page', 'houzez-child'),
            'subtitle' => '',
            //'desc'     => '',
            'default'  => '9',
        ),
    )
));