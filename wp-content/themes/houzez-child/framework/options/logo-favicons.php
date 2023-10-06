<?php
global $houzez_opt_name;
Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Logos & Favicon', 'houzez-child' ),
    'id'     => 'logo-favicon',
    'desc'   => '',
    'icon'   => 'el-icon-picture el-icon-small',
    'fields'		=> array(
        array(
            'id'        => 'custom_logo',
            'url'       => true,
            'type'      => 'media',
            'title'     => esc_html__( 'Logo', 'houzez-child' ),
            'read-only' => false,
            'default'   => array( 'url' => HOUZEZ_IMAGE . 'logo-houzez-white.png' ),
            'desc'  => esc_html__( 'Upload the logo', 'houzez-child' ),
        ),

        array(
            'id'		=> 'retina_logo',
            'url'		=> true,
            'type'		=> 'media',
            'title'		=> esc_html__( 'Logo (For Retina Screens)', 'houzez-child' ),
            'default'	=> array( 'url'	=> HOUZEZ_IMAGE . 'logo-houzez-white@2x.png' ),
            'subtitle'	=> esc_html__( 'The retina logo have to be double size of the regular logo', 'houzez-child' ),
            'desc'  => esc_html__( 'Upload the logo for retina devices', 'houzez-child' ),
        ),

        array(
            'id'		=> 'mobile_logo',
            'url'		=> true,
            'type'		=> 'media',
            'title'		=> esc_html__( 'Mobile Logo', 'houzez-child' ),
            'read-only'	=> false,
            'default'	=> array( 'url'	=> HOUZEZ_IMAGE . 'logo-houzez-white.png' ),
            'desc'	=> esc_html__( 'Upload the logo for mobile devices.', 'houzez-child' ),
        ),

        array(
            'id'		=> 'mobile_retina_logo',
            'url'		=> true,
            'type'		=> 'media',
            'title'		=> esc_html__( 'Mobile Logo (For Retina Screens)', 'houzez-child' ),
            'default'	=> array( 'url'	=> HOUZEZ_IMAGE . 'logo-houzez-white@2x.png' ),
            'subtitle'  => esc_html__( 'The retina logo have to be double size of the regular logo', 'houzez-child' ),
            'desc'  => esc_html__( 'Upload the logo for retina devices', 'houzez-child' ),
        ),

        array(
            'id'		=> 'custom_logo_splash',
            'url'		=> true,
            'type'		=> 'media',
            'title'		=> esc_html__( 'Splash Page & Transparent Header Logo', 'houzez-child' ),
            'read-only'	=> false,
            'default'	=> array( 'url'	=> HOUZEZ_IMAGE . 'logo-houzez-white.png' ),
            'desc'	=> esc_html__( 'Upload the logo for the splash page and the transparent header', 'houzez-child' ),
        ),

        array(
            'id'		=> 'retina_logo_splash',
            'url'		=> true,
            'type'		=> 'media',
            'title'		=> esc_html__( 'Splash Page & Transparent Header Logo (For Retina Screens)', 'houzez-child' ),
            'default'	=> array( 'url'	=> HOUZEZ_IMAGE . 'logo-houzez-white@2x.png' ),
            'subtitle'	=> esc_html__( 'The retina logo have to be double size of the regular logo', 'houzez-child' ),
            'desc'  => esc_html__( 'Upload the retina logo for the splash page and the transparent header', 'houzez-child' ),
        ),


        array(
            'id'		=> 'custom_logo_mobile_splash',
            'url'		=> true,
            'type'		=> 'media',
            'title'		=> esc_html__( 'Mobile Splash Page Logo', 'houzez-child' ),
            'read-only'	=> false,
            'default'	=> array( 'url'	=> HOUZEZ_IMAGE . 'logo-houzez-white.png' ),
            'desc'	=> esc_html__( 'Upload your custom logo for mobile splash page.', 'houzez-child' ),
        ),

        array(
            'id'		=> 'retina_logo_mobile_splash',
            'url'		=> true,
            'type'		=> 'media',
            'title'		=> esc_html__( 'Mobile Splash Page Logo (For Retina Screens)', 'houzez-child' ),
            'default'	=> array( 'url'	=> HOUZEZ_IMAGE . 'logo-houzez-white@2x.png' ),
            'subtitle'	=> esc_html__( 'The retina logo have to be double size of the regular logo', 'houzez-child' ),
            'desc'  => esc_html__( 'Upload the retina logo for the mobile splash page', 'houzez-child' ),
        ),

        array(
            'id'		=> 'retina_logo_height',
            'type'		=> 'text',
            'default'	=> '',
            'title'		=> esc_html__( 'Standard Logo Height', 'houzez-child' ),
            'desc'	=> esc_html__( 'Enter the standard logo height', 'houzez-child' ),
        ),

        array(
            'id'		=> 'retina_logo_width',
            'type'		=> 'text',
            'default'	=> '',
            'title'		=> esc_html__( 'Standard Logo Width', 'houzez-child' ),
            'desc'	=> esc_html__( 'Enter the standard logo width', 'houzez-child' ),
        ),

        array(
            'id'        => 'retina_mobilelogo_height',
            'type'      => 'text',
            'default'   => '',
            'title'     => esc_html__( 'Mobile Logo Height', 'houzez-child' )
        ),

        array(
            'id'        => 'retina_mobilelogo_width',
            'type'      => 'text',
            'default'   => '',
            'title'     => esc_html__( 'Mobile Logo Width', 'houzez-child' )
        ),

        array(
            'id'	=> 'favicon',
            'url'			=> true,
            'type'		=> 'media',
            'title'		=> esc_html__( 'Favicon', 'houzez-child' ),
            'default'	=> array( 'url'	=> HOUZEZ_IMAGE . 'favicon.png' ),
            'subtitle'	=> esc_html__( 'Upload the favicon.', 'houzez-child' ),
        ),

        array(
            'id'		=> 'iphone_icon',
            'url'		=> true,
            'type'		=> 'media',
            'title'		=> esc_html__( 'Apple iPhone Icon ', 'houzez-child' ),
            'default'	=> array(
                'url'	=> HOUZEZ_IMAGE . 'favicon-57x57.png'
            ),
            'subtitle'	=> esc_html__( 'Upload the iPhone icon (57px by 57px).', 'houzez-child' ),
        ),

        array(
            'id'		=> 'iphone_icon_retina',
            'url'		=> true,
            'type'		=> 'media',
            'title'		=> esc_html__( 'Apple iPhone Retina Icon ', 'houzez-child' ),
            'default'	=> array(
                'url'	=> HOUZEZ_IMAGE . 'favicon-114x114.png'
            ),
            'subtitle'	=> esc_html__( 'Upload the iPhone retina icon (114px by 114px).', 'houzez-child' ),
        ),

        array(
            'id'		=> 'ipad_icon',
            'url'		=> true,
            'type'		=> 'media',
            'title'		=> esc_html__( 'Apple iPad Icon ', 'houzez-child' ),
            'default'	=> array(
                'url'	=> HOUZEZ_IMAGE . 'favicon-72x72.png'
            ),
            'subtitle'	=> esc_html__( 'Upload the iPad icon (72px by 72px).', 'houzez-child' ),
        ),

        array(
            'id'		=> 'ipad_icon_retina',
            'url'		=> true,
            'type'		=> 'media',
            'title'		=> esc_html__( 'Apple iPad Retina Icon ', 'houzez-child' ),
            'default'	=> array(
                'url'	=> HOUZEZ_IMAGE . 'favicon-144x144.png'
            ),
            'subtitle'	=> esc_html__( 'Upload the iPad retina icon (144px by 144px).', 'houzez-child' ),
        )
    ),
) );

Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Lightbox Logo', 'houzez-child' ),
    'id'     => 'lightbox-logo-options',
    'desc'   => '',
    'subsection'   => true,
    'fields'        => array(
        array(
            'id'        => 'lightbox_logo',
            'url'       => true,
            'type'      => 'media',
            'title'     => esc_html__( 'Lightbox Logo', 'houzez-child' ),
            'read-only' => false,
            'default'   => array( 'url' => '' ),
            'subtitle'  => esc_html__( 'Upload logo for lightbox.', 'houzez-child' ),
        )
    ),
) );

Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Dashboard Logo', 'houzez-child' ),
    'id'     => 'dashboard-logo-options',
    'desc'   => '',
    'subsection'   => true,
    'fields'        => array(
        array(
            'id'        => 'dashboard_logo',
            'url'       => true,
            'type'      => 'media',
            'title'     => esc_html__( 'Logo', 'houzez-child' ),
            'read-only' => false,
            'default'   => array( 'url' => HOUZEZ_IMAGE . 'logo-houzez-white.png' ),
            'desc'  => esc_html__( 'Upload the logo for dashboard', 'houzez-child' ),
        )
    ),
) );