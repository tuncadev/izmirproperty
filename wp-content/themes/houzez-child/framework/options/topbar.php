<?php
global $houzez_opt_name;

Redux::setSection( $houzez_opt_name, array(
    'title'            => esc_html__( 'Top Bar', 'houzez-child' ),
    'id'               => 'header-top-bar',
    'subsection'       => false,
    'desc'             => '',
    'fields'           => array(
        array(
            'id'       => 'top_bar',
            'type'     => 'switch',
            'title'    => esc_html__( 'Enable/Disable header top bar', 'houzez-child' ),
            'subtitle' => '',
            'default'  => 0,
            'on'       => esc_html__( 'Enabled', 'houzez-child' ),
            'off'      => esc_html__( 'Disabled', 'houzez-child' ),
        ),
        array(
            'id'       => 'top_bar_width',
            'type'     => 'select',
            'title'    => esc_html__( 'Layout', 'houzez-child' ),
            'subtitle' => '',
            'options'   => array(
                'container' => esc_html__( 'Boxed', 'houzez-child' ),
                'container-fluid'   => esc_html__( 'Full Width', 'houzez-child' )
            ),
            'desc'     => '',
            'default'  => 'container'// 1 = on | 0 = off
        ),
        array(
            'id'       => 'top_bar_mobile',
            'type'     => 'switch',
            'title'    => esc_html__( 'Hide Top Bar in Mobile?', 'houzez-child' ),
            'desc'     => '',
            'subtitle' => '',
            'default'  => 0,
            'on'       => esc_html__( 'Yes', 'houzez-child' ),
            'off'      => esc_html__( 'No', 'houzez-child' ),
        ),
        array(
            'id'       => 'top_bar_left',
            'type'     => 'select',
            'title'    => esc_html__( 'Top Bar Left Area', 'houzez-child' ),
            'subtitle' => esc_html__( 'What would you like to show on top bar left area.', 'houzez-child' ),
            'options'   => array(
                'none'   => esc_html__( 'Nothing', 'houzez-child' ),
                'menu_bar'    => esc_html__( 'Menu ( Create and assing menu under Appearance -> Menus )', 'houzez-child' ),
                'social_icons'    => esc_html__( 'Social Icons', 'houzez-child' ),
                'contact_info'    => esc_html__( 'Contact Info', 'houzez-child' ),
                'slogan'    => esc_html__( 'Slogan', 'houzez-child' ),
                'houzez_switchers'    => esc_html__( 'Currency Switcher + Area Switcher', 'houzez-child' )
            ),
            'default'  => 'none'
        ),
        array(
            'id'       => 'top_bar_right',
            'type'     => 'select',
            'title'    => esc_html__( 'Top Bar Right Area', 'houzez-child' ),
            'subtitle' => esc_html__( 'What would you like to show on top bar right area.', 'houzez-child' ),
            'options'   => array(
                'none'   => esc_html__( 'Nothing', 'houzez-child' ),
                'menu_bar'    => esc_html__( 'Menu ( Create and assing menu under Appearance -> Menus )', 'houzez-child' ),
                'social_icons'    => esc_html__( 'Social Icons', 'houzez-child' ),
                'contact_info'    => esc_html__( 'Contact Info', 'houzez-child' ),
                'slogan'    => esc_html__( 'Slogan', 'houzez-child' ),
                'houzez_switchers'    => esc_html__( 'Currency Switcher + Area Switcher', 'houzez-child' )
            ),
            'default'  => 'none'
        ),
        array(
            'id'        => 'top_bar_phone',
            'type'      => 'text',
            'default'   => '',
            'title'     => esc_html__( 'Phone Number', 'houzez-child' ),
            'subtitle'  => '',
        ),
        array(
            'id'        => 'top_bar_email',
            'type'      => 'text',
            'default'   => '',
            'title'     => esc_html__( 'Email Address', 'houzez-child' ),
            'subtitle'  => '',
        ),
        array(
            'id'        => 'top_bar_slogan',
            'type'      => 'textarea',
            'default'   => '',
            'title'     => esc_html__( 'Slogan', 'houzez-child' ),
            'subtitle'  => esc_html__( 'Enter website slogan', 'houzez-child' )
        )
    )
) );



// Currency Switcher
if ( class_exists( 'FCC_Rates' ) ) {    // if wp-currencies plugins is active

    // get all currency codes
    $currencies = Fcc_get_currencies();
    $currency_codes = array();
    if ( 0 < count( $currencies ) ) {
        foreach( $currencies as $currency_code => $currency ) {
            $currency_codes[$currency_code] = $currency_code;
        }
    }

    Redux::setSection($houzez_opt_name, array(
        'title' => esc_html__('Currency Switcher', 'houzez-child'),
        'id' => 'currency-switcher',
        'desc' => '',
        'subsection' => true,
        'fields' => array(
            array(
                'id'       => 'currency_switcher_enable',
                'type'     => 'switch',
                'title'    => esc_html__( 'Enable/Disable currency switcher in top bar', 'houzez-child' ),
                'subtitle' => '',
                'default'  => 0,
                'on'       => esc_html__( 'Enabled', 'houzez-child' ),
                'off'      => esc_html__( 'Disabled', 'houzez-child' ),
            ),
            array(
                'id' => 'currency_switcher_info',
                'type' => 'info',
                'title' => esc_html__('Guide', 'houzez-child'),
                'style' => 'info',
                'desc' => __('Please find full list of available currencies at <a target="_blank" href="https://openexchangerates.org/currencies">https://openexchangerates.org/currencies</a><br/>Add api key under Houzez -> Currency Converter API', 'houzez-child')
            ),
            array(
                'id' => 'houzez_base_currency',
                'type' => 'select',
                'title' => esc_html__('Base Currency', 'houzez-child'),
                'subtitle' => esc_html__('Please select base currency which will use as base currency for all conversions.', 'houzez-child'),
                'read-only' => false,
                'options' => $currency_codes,
                'default' => 'USD'
            ),
            array(
                'id' => 'houzez_supported_currencies',
                'type' => 'textarea',
                'title' => esc_html__('Your Supported Currencies.', 'houzez-child'),
                'subtitle' => esc_html__('Please provide comma separated currencies code in Capital Letters.', 'houzez-child'),
                'default' => 'AUD,CAD,CHF,EUR,GBP,HKD,JPY,NOK,SEK,USD,NGN'
            ),
            array(
                'id' => 'houzez_currency_expiry',
                'title' => esc_html__('Expiry time','houzez-child'),
                'subtitle' => esc_html__('Select expiry time for selected currency.','houzez-child'),
                'default' => '3600',
                'type' => "radio",
                'options' => array(
                    '3600' => esc_html__('One Hour','houzez-child'),
                    '86400' => esc_html__('One Day','houzez-child'),
                    '604800' => esc_html__('One Week','houzez-child'),
                    '18144000' => esc_html__('One Month','houzez-child'),
                )
            )
        ),
    ));
}

Redux::setSection($houzez_opt_name, array(
    'title' => esc_html__('Area Switcher', 'houzez-child'),
    'id' => 'area-switcher',
    'desc' => '',
    'subsection' => true,
    'fields' => array(
        array(
            'id'       => 'area_switcher_enable',
            'type'     => 'switch',
            'title'    => esc_html__( 'Enable/Disable area switcher in top bar', 'houzez-child' ),
            'subtitle' => '',
            'default'  => 0,
            'on'       => esc_html__( 'Enabled', 'houzez-child' ),
            'off'      => esc_html__( 'Disabled', 'houzez-child' ),
        ),

        array(
            'id' => 'houzez_base_area',
            'type' => 'select',
            'title' => esc_html__('Base Area', 'houzez-child'),
            'subtitle' => esc_html__('Selected area will be used as base area for all conversions.', 'houzez-child'),
            'read-only' => false,
            'options' => array(
                'sqft' => esc_html( 'Square Feet', 'houzez-child' ),
                'sq_meter' => esc_html( 'Square Meters', 'houzez-child' )
            ),
            'default' => 'sqft'
        )
    ),
));