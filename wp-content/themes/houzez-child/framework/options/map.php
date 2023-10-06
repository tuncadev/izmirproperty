<?php
global $houzez_opt_name, $allowed_html_array, $Option_Countries;
Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Map Settings', 'houzez-child' ),
    'id'     => 'houzez-googlemap-settings',
    'desc'   => '',
    'icon'   => 'el-icon-globe el-icon-small',
    'fields' => array(
        array(
            'id'       => 'houzez_map_system',
            'type'     => 'button_set',
            'title'    => esc_html__('Map System', 'houzez-child'),
            'subtitle' => esc_html__('Select the map system that you want to use', 'houzez-child'),
            'desc'     => '',
            'options' => array(
                'osm' => 'Open Street Map',
                'mapbox' => 'Map Box',
                'google' => 'Google',
             ), 
            'default' => 'osm'
        ),
        array(
            'id'       => 'googlemap_api_key',
            'type'     => 'text',
            'title'    => esc_html__( 'Google Maps API KEY', 'houzez-child' ),
            'desc'     => wp_kses(__( 'We strongly encourage you to get an APIs Console key and post the code in Theme Options. You can get it from <a target="_blank" href="https://developers.google.com/maps/documentation/javascript/tutorial#api_key">here</a>.', 'houzez-child' ), $allowed_html_array),
            'subtitle' => esc_html__( 'Enter your google maps api key', 'houzez-child' ),
            'required'  => array('houzez_map_system', '=', 'google')
        ),
        array(
            'id'       => 'mapbox_api_key',
            'type'     => 'text',
            'title'    => esc_html__( 'Mapbox API KEY', 'houzez-child' ),
            'desc'     => wp_kses(__( 'Please enter the Mapbox API key, you can get from <a target="_blank" href="https://account.mapbox.com/">here</a>.', 'houzez-child' ), $allowed_html_array),
            'required'  => array('houzez_map_system', '=', 'mapbox')
        ),
        array(
            'id'       => 'houzez_map_type',
            'type'     => 'button_set',
            'title'    => esc_html__('Map Type', 'houzez-child'),
            'subtitle' => '',
            'desc'     => esc_html__( 'Select the map type', 'houzez-child' ),
            'required'  => array('houzez_map_system', '=', 'google'),
            'options' => array(
                'roadmap' => 'Road Map',
                'satellite' => 'Satellite',
                'hybrid' => 'Hybrid',
                'terrain' => 'Terrain',
             ), 
            'default' => 'roadmap'
        ),
        

        array(
            'id'       => 'markerPricePins',
            'type'     => 'select',
            'title'    => esc_html__( 'Marker Type', 'houzez-child' ),
            'desc' => esc_html__( 'Select marker type for Google Maps', 'houzez-child' ),
            //'desc'     => '',
            'options'  => array(
                'no'   => esc_html__( 'Marker Icon', 'houzez-child' ),
                'yes'   => esc_html__( 'Price Pins', 'houzez-child' )
            ),
            'default'  => 'no'
        ),
        array(
            'id'       => 'short_prices_pins',
            'type'     => 'switch',
            'title'    => esc_html__( 'Short Price', 'houzez-child' ),
            'subtitle'     => esc_html__( 'Please note that the currency switcher will not work if the short price functionality is enabled.', 'houzez-child' ),
            'desc' => esc_html__( 'Enable or disable the short price numbers like 12K, 10M, 10B.', 'houzez-child' ),
            'default'  => 0,
            'on'       => esc_html__( 'Enabled', 'houzez-child' ),
            'off'      => esc_html__( 'Disabled', 'houzez-child' ),
            'required'  => array('markerPricePins', '=', 'yes'),
        ),
        array(
            'id'       => 'marker_spiderfier',
            'type'     => 'switch',
            'title'    => esc_html__( 'Overlapping Marker Spiderfier', 'houzez-child' ),
            'desc' => esc_html__( 'Do you want to display the Overlapping Marker Spiderfier?', 'houzez-child' ),
            //'desc'     => '',
            'on'       => 'Yes',
            'off'      => 'No',
            'default'  => 0,
            'required'  => array('houzez_map_system', '=', 'google')
        ),

        array(
            'id'       => 'map_default_lat',
            'type'     => 'text',
            'title'    => esc_html__( 'Default Latitude', 'houzez-child' ),
            'subtitle' => esc_html__( 'Enter default latitude for maps', 'houzez-child' ),
            'default'  => '25.686540',
            'validate' => 'numeric'
        ),

        array(
            'id'       => 'map_default_long',
            'type'     => 'text',
            'title'    => esc_html__( 'Default Longitude', 'houzez-child' ),
            'subtitle' => esc_html__( 'Enter default longitude for maps', 'houzez-child' ),
            'default'  => '-80.431345',
            'validate' => 'numeric'
        ),

        array(
            'id'       => 'geo_country_limit',
            'type'     => 'switch',
            'title'    => esc_html__( 'Limit to Country', 'houzez-child' ),
            'desc'     => '',
            'subtitle' => esc_html__( 'Geo autocomplete limit to specific country', 'houzez-child' ),
            'default'  => 0,
            'on'       => 'Enabled',
            'off'      => 'Disabled',
        ),
        array(
            'id'		=> 'geocomplete_country',
            'type'		=> 'select',
            'required'  => array('geo_country_limit', '=', '1'),
            'title'		=> esc_html__( 'Geo Auto Complete Country', 'houzez-child' ),
            'subtitle'	=> esc_html__( 'Limit Geo auto complete to specific country', 'houzez-child' ),
            'options'	=> $Option_Countries,
            'default' => ''
        ),

        /*array(
            'id'       => 'map_fullscreen',
            'type'     => 'switch',
            'title'    => esc_html__( 'Map Fullscreen', 'houzez-child' ),
            'desc'     => '',
            'subtitle' => esc_html__( 'Enable/Disable map fullscreen button on half map.', 'houzez-child' ),
            'default'  => 1,
            'on'       => 'Enabled',
            'off'      => 'Disabled',
        ),

        array(
            'id'       => 'geo_location',
            'type'     => 'switch',
            'title'    => esc_html__( 'Geo Location', 'houzez-child' ),
            'desc'     => '',
            'subtitle' => esc_html__( 'Enable/Disable geo location.', 'houzez-child' ),
            'default'  => 0,
            'on'       => 'Enabled',
            'off'      => 'Disabled',
            'required'  => array('houzez_map_system', '=', 'google')
        ),

        array(
            'id' => 'geo_location_info',
            'type' => 'info',
            'required' => array('geo_location', '=', '1'),
            'title' => '',
            'style' => 'info',
            'desc' => __('Note: Google Geo location not work in chrome without SSL (https://), you can enable IPINFO location below for Google chrome if you don not have SSL. ', 'houzez-child')
        ),

        array(
            'id'       => 'ipinfo_location',
            'type'     => 'switch',
            'title'    => esc_html__( 'IPINFO Location', 'houzez-child' ),
            'desc'     => '',
            'subtitle' => esc_html__( 'Enable/Disable Ip info location, only work with chrome withour SSL.', 'houzez-child' ),
            'default'  => 0,
            'on'       => 'Enabled',
            'off'      => 'Disabled',
            'required'  => array('houzez_map_system', '=', 'google')
        ),
        array(
            'id'       => 'googlemap_zoom_level',
            'type'     => 'text',
            'title'    => esc_html__( 'Default Map Zoom', 'houzez-child' ),
            'desc'     => '',
            'subtitle' => esc_html__( '1 to 20', 'houzez-child' ),
            'default'  => '12',
            'required'  => array('houzez_map_system', '=', 'google')
        ),*/
    ),
));

Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Cluster', 'houzez-child' ),
    'id'     => 'map-cluster',
    'desc'   => '',
    'icon'   => '',
    'subsection' => true,
    'fields'    => array(
        array(
            'id'       => 'map_cluster_enable',
            'type'     => 'switch',
            'title'    => esc_html__( 'Markers cluster', 'houzez-child' ),
            'subtitle' => '',
            'desc'     => esc_html__( 'enable or disable the marker cluster', 'houzez-child' ),
            'on'       => esc_html__('Enabled', 'houzez-child'),
            'off'      => esc_html__('Disabled', 'houzez-child'),
            'default'  => 1
        ),
        array(
            'id'        => 'map_cluster',
            'type'      => 'media',
            'title'     => esc_html__( 'Map Cluster', 'houzez-child' ),
            'read-only' => false,
            'default'   => array( 'url' => HOUZEZ_IMAGE . 'map/cluster-icon.png' ),
            'desc'  => esc_html__( 'Upload the map cluster icon.', 'houzez-child' ),
        ),
        array(
            'id'       => 'googlemap_zoom_cluster',
            'type'     => 'text',
            'title'    => esc_html__( 'Cluster Zoom Level', 'houzez-child' ),
            //'desc'     => '',
            'desc' => esc_html__( 'Enter the maximum zoom level for the cluster to appear. From 1 to 20 the fefault is 12', 'houzez-child' ),
            'default'  => '12',
            'required'  => array('houzez_map_system', '=', 'google')
        ),
    )
        
));

Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Single Listing Map', 'houzez-child' ),
    'id'     => 'map-single-listing',
    'desc'   => '',
    'icon'   => '',
    'subsection' => true,
    'fields'    => array(
        array(
            'id'       => 'detail_map_pin_type',
            'type'     => 'select',
            'title'    => esc_html__('Pin or Circle', 'houzez-child'),
            'desc' => esc_html__('Select what to show on map, Marker or Circle', 'houzez-child'),
            'options'  => array(
                'marker'   => esc_html__( 'Marker Pin', 'houzez-child' ),
                'circle'   => esc_html__( 'Circle', 'houzez-child' ),
            ),
            'default'  => 'marker',
        ),
        array(
            'id'       => 'single_mapzoom',
            'type'     => 'text',
            'title'    => esc_html__( 'Single Listing Map Zoom', 'houzez-child' ),
            'desc'     => '',
            'desc' => esc_html__( 'Enter a number from 1 to 20 the fefault is 12', 'houzez-child' ),
            'default'  => '14',
            'validate' => 'numeric'
        )
    )
));

Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Map Style', 'houzez-child' ),
    'id'     => 'map-style',
    'desc'   => '',
    'icon'   => '',
    'subsection' => true,
    'fields'    => array(
        array(
            'id'       => 'googlemap_stype',
            'type'     => 'ace_editor',
            'title'    => esc_html__( 'Style for Google Map', 'houzez-child' ),
            'subtitle' => esc_html__( 'Use https://snazzymaps.com/ to create styles', 'houzez-child' ),
            'desc'     => '',
            'default'  => '',
            'mode'     => 'plain',
        )
    )
));