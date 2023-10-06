<?php
global $houzez_opt_name;
if( class_exists('Houzez_login_register') ):
Redux::setSection( $houzez_opt_name, array(
    'title'            => esc_html__( 'Login & Register', 'houzez-child' ),
    'id'               => 'header-login-register',
    'subsection'       => false,
    'desc'             => '',
    'icon'   => 'el-icon-lock-alt el-icon-small',
    'fields'           => array(
        array(
            'id'       => 'header_login',
            'type'     => 'switch',
            'title'    => esc_html__( 'Login', 'houzez-child' ),
            'subtitle' => esc_html__( 'Display the login in the header', 'houzez-child' ),
            'on'       => esc_html__( 'Yes', 'houzez-child' ),
            'off'      => esc_html__( 'No', 'houzez-child' ),
            'default'  => 0
        ),

        array(
            'id'       => 'header_register',
            'type'     => 'switch',
            'title'    => esc_html__( 'Register', 'houzez-child' ),
            'subtitle' => esc_html__( 'Display the register in the header', 'houzez-child' ),
            'on'       => esc_html__( 'Yes', 'houzez-child' ),
            'off'      => esc_html__( 'No', 'houzez-child' ),
            'default'  => 0
        ),

        array(
            'id'       => 'login_register_type',
            'type'     => 'select',
            'title'    => esc_html__( 'Login, register type', 'houzez-child' ),
            'subtitle' => '',
            'options'   => array(
                'as_icon'   => esc_html__( 'Show as Icon', 'houzez-child' ),
                'as_text'    => esc_html__( 'Show as Text', 'houzez-child' )
            ),
            'default'  => 'as_icon'
        ),

        array(
            'id'       => 'header_loggedIn',
            'type'     => 'switch',
            'title'    => esc_html__( 'Logged In Menu', 'houzez-child' ),
            'subtitle' => esc_html__( 'Disable LoggedIn menu', 'houzez-child' ),
            'on'       => esc_html__( 'Yes', 'houzez-child' ),
            'off'      => esc_html__( 'No', 'houzez-child' ),
            'default'  => 0
        ),

        array(
            'id'       => 'register_first_name',
            'type'     => 'switch',
            'title'    => esc_html__( 'First Name', 'houzez-child' ),
            'subtitle' => esc_html__( 'Show first name field for register form', 'houzez-child' ),
            'on'       => esc_html__( 'Yes', 'houzez-child' ),
            'off'      => esc_html__( 'No', 'houzez-child' ),
            'default'  => 0
        ),

        array(
            'id'       => 'register_last_name',
            'type'     => 'switch',
            'title'    => esc_html__( 'Last Name', 'houzez-child' ),
            'subtitle' => esc_html__( 'Show last name field for register form', 'houzez-child' ),
            'on'       => esc_html__( 'Yes', 'houzez-child' ),
            'off'      => esc_html__( 'No', 'houzez-child' ),
            'default'  => 0
        ),

        array(
            'id'       => 'register_mobile',
            'type'     => 'switch',
            'title'    => esc_html__( 'Phone Number', 'houzez-child' ),
            'subtitle' => esc_html__( 'Show phone number field for register form', 'houzez-child' ),
            'on'       => esc_html__( 'Yes', 'houzez-child' ),
            'off'      => esc_html__( 'No', 'houzez-child' ),
            'default'  => 0
        ),

        array(
            'id'       => 'enable_password',
            'type'     => 'select',
            'title'    => esc_html__( 'Users can type the password on registration form', 'houzez-child' ),
            'subtitle' => esc_html__('If no, users will get the auto generated password via email', 'houzez-child'),
            'options'   => array(
                'yes'   => esc_html__( 'Yes', 'houzez-child' ),
                'no'    => esc_html__( 'No', 'houzez-child' )
            ),
            'desc'     => '',
            'default'  => 'no'
        ),

        array(
            'id'       => 'user_as_agent',
            'type'     => 'select',
            'title'    => esc_html__( 'Frontend register user as agent or agency', 'houzez-child' ),
            'subtitle' => '',
            'options'   => array(
                'yes'   => esc_html__( 'Yes', 'houzez-child' ),
                'no'    => esc_html__( 'No', 'houzez-child' )
            ),
            'desc'     => esc_html__( 'If set to "Yes" then every user register from front-end role Agent will be auto create in agent custom post type and role Agency will be auto create in agency custom post type', 'houzez-child' ),
            'default'  => 'yes'
        ),

        array(
            'id'       => 'realtor_visible',
            'type'     => 'switch',
            'title'    => esc_html__( 'Agent/Agency Visibility', 'houzez-child' ),
            'subtitle' => esc_html__( 'Front-end registered agent/agency should not show automatically on front-end', 'houzez-child' ),
            'on'       => esc_html__( 'Not Show', 'houzez-child' ),
            'off'      => esc_html__( 'Show', 'houzez-child' ),
            'required' => array('user_as_agent', '=', 'yes'),
            'default'  => 0
        ),

        array(
            'id'       => 'login_redirect',
            'type'     => 'select',
            'title'    => esc_html__( 'After Login Redirect Page', 'houzez-child' ),
            'subtitle' => '',
            'options'   => array(
                'same_page'   => esc_html__( 'Current Page', 'houzez-child' ),
                'diff_page'    => esc_html__( 'Different Page', 'houzez-child' )
            ),
            'default'  => 'same_page'
        ),
        array(
            'id'       => 'login_redirect_link',
            'type'     => 'text',
            'required' => array('login_redirect', '=', 'diff_page' ),
            'title'    => esc_html__( 'Enter Redirect Page Link', 'houzez-child' ),
            'subtitle' => esc_html__( 'This must be a URL.', 'houzez-child' ),
            'desc'     => '',
            'validate' => 'url',
            'default'  => '',
        ),

        array(
            'id'       => 'login_terms_condition',
            'type'     => 'select',
            'data'     => 'pages',
            'title'    => esc_html__( 'Terms & Conditions', 'houzez-child' ),
            'subtitle' => esc_html__( 'Select which page to use for Terms & Conditions', 'houzez-child' ),
            'desc'     => '',
        ),
        array(
            'id'       => 'facebook_login',
            'type'     => 'select',
            'title'    => esc_html__( 'Allow login via Facebook ?', 'houzez-child' ),
            'subtitle' => '',
            'options'   => array(
                'yes'   => esc_html__( 'Yes', 'houzez-child' ),
                'no'    => esc_html__( 'No', 'houzez-child' )
            ),
            'desc'     => '',
            'default'  => 'no'
        ),
        array(
            'id'       => 'facebook_api_key',
            'type'     => 'text',
            'required' => array( 'facebook_login', '=', 'yes' ),
            'title'    => esc_html__( 'Facebook Api key', 'houzez-child' ),
            'subtitle' => esc_html__( 'Facebook Api key for facebook login', 'houzez-child' ),
            'desc'     => '',
            'default'  => ''
        ),
        array(
            'id'       => 'facebook_secret',
            'type'     => 'text',
            'required' => array( 'facebook_login', '=', 'yes' ),
            'title'    => esc_html__( 'Facebook Secret Code', 'houzez-child' ),
            'subtitle' => esc_html__( 'Facebook secret code for facebook login', 'houzez-child' ),
            'desc'     => '',
            'default'  => ''
        ),
        array(
            'id'       => 'google_login',
            'type'     => 'select',
            'title'    => esc_html__( 'Allow login via Google ?', 'houzez-child' ),
            'subtitle' => '',
            'options'   => array(
                'yes'   => esc_html__( 'Yes', 'houzez-child' ),
                'no'    => esc_html__( 'No', 'houzez-child' )
            ),
            'desc'     => '',
            'default'  => 'no'
        ),
        array(
            'id'       => 'google_client_id',
            'type'     => 'text',
            'required' => array( 'google_login', '=', 'yes' ),
            'title'    => esc_html__( 'Google OAuth Client ID', 'houzez-child' ),
            'subtitle' => esc_html__( 'Google oAuth client id for google login', 'houzez-child' ),
            'desc'     => '',
            'default'  => ''
        ),
        array(
            'id'       => 'google_secret',
            'type'     => 'text',
            'required' => array( 'google_login', '=', 'yes' ),
            'title'    => esc_html__( 'Google Client Secret', 'houzez-child' ),
            'subtitle' => esc_html__( 'Google client secret code for google login', 'houzez-child' ),
            'desc'     => '',
            'default'  => ''
        ),
    )
) );

Redux::setSection( $houzez_opt_name, array(
    'title'            => esc_html__( 'User Roles', 'houzez-child' ),
    'id'               => 'header-user-roles',
    'subsection'       => true,
    'desc'             => '',
    'fields'           => array(

        array(
            'id'       => 'user_show_roles',
            'type'     => 'switch',
            'title'    => esc_html__( 'Registration Form', 'houzez-child' ),
            'subtitle' => esc_html__( 'If enabled, the registration form displays a drop-down menu with the list of user roles', 'houzez-child' ),
            'default'  => 0,
            'on'       => esc_html__( 'Enabled', 'houzez-child' ),
            'off'      => esc_html__( 'Disabled', 'houzez-child' ),
            'desc'     => esc_html__( 'Enable or disable the user role selection on the register form', 'houzez-child' ),
        ),
        array(
            'id'       => 'user_show_roles_profile',
            'type'     => 'switch',
            'title'    => esc_html__( 'Enable user roles on profile page', 'houzez-child' ),
            'subtitle' => esc_html__( 'If enabled, it allow users to change role from their profile page', 'houzez-child' ),
            'default'  => 0,
            'on'       => esc_html__( 'Enabled', 'houzez-child' ),
            'off'      => esc_html__( 'Disabled', 'houzez-child' ),
            'desc'     => esc_html__( 'Enable or disable the user role selection on the profile page', 'houzez-child' ),
        ),
        array(
            'id'       => 'show_hide_roles',
            'type'     => 'checkbox',
            'title'    => esc_html__( 'Enable/Disable User Roles', 'houzez-child' ),
            'desc'     => '',
            'subtitle' => esc_html__('Select which user roles you want to disable', 'houzez-child'),
            'options'  => array(
                'agent' => esc_html__('Agent', 'houzez-child'),
                'agency' => esc_html__('Agency', 'houzez-child'),
                'owner' => esc_html__('Owner', 'houzez-child'),
                'buyer' => esc_html__('Buyer', 'houzez-child'),
                'seller' => esc_html__('Seller', 'houzez-child'),
                'manager' => esc_html__('Manager', 'houzez-child')
            ),
            'default' => array(
                'agent' => '0',
                'agency' => '0',
                'owner' => '0',
                'buyer' => '0',
                'seller' => '0',
                'manager' => '0'
            )
        ),
        array(
            'id'       => 'agent_role',
            'type'     => 'text',
            'title'    => esc_html__( 'Agent Role', 'houzez-child' ),
            'subtitle' => esc_html__( 'Change the default name of the agent role', 'houzez-child' ),
            'desc'     => esc_html__( 'Enter a name for the agent role (Default is Agent)', 'houzez-child' ),
            'default'  => esc_html__( 'Agent', 'houzez-child' ),
        ),
        array(
            'id'       => 'agency_role',
            'type'     => 'text',
            'title'    => esc_html__( 'Agency Role', 'houzez-child' ),
            'subtitle' => esc_html__( 'Change the default name of the agency role', 'houzez-child' ),
            'desc'     => esc_html__( 'Enter a name for the agncy role (Default: Agency)', 'houzez-child' ),
            'default'  => esc_html__( 'Agency', 'houzez-child' ),
        ),
        array(
            'id'       => 'owner_role',
            'type'     => 'text',
            'title'    => esc_html__( 'Owner Role', 'houzez-child' ),
            'subtitle' => esc_html__( 'Change the default name of the owner role', 'houzez-child' ),
            'desc'     => esc_html__( 'Enter a name for the owner role (Default: Owner)', 'houzez-child' ),
            'default'  => esc_html__( 'Owner', 'houzez-child' ),
        ),
        array(
            'id'       => 'buyer_role',
            'type'     => 'text',
            'title'    => esc_html__( 'Buyer Role', 'houzez-child' ),
            'subtitle' => esc_html__( 'Change the default name of the buyer role', 'houzez-child' ),
            'desc'     => esc_html__( 'Enter a name for the buyer role (Default: Buyer)', 'houzez-child' ),
            'default'  => esc_html__( 'Buyer', 'houzez-child' ),
        ),
        array(
            'id'       => 'seller_role',
            'type'     => 'text',
            'title'    => esc_html__( 'Seller Role', 'houzez-child' ),
            'subtitle' => esc_html__( 'Change the default name of the seller role', 'houzez-child' ),
            'desc'     => esc_html__( 'Enter a name for the seller role (Default: Seller)', 'houzez-child' ),
            'default'  => esc_html__( 'Seller', 'houzez-child' ),
        ),
        array(
            'id'       => 'manager_role',
            'type'     => 'text',
            'title'    => esc_html__( 'Manager Role', 'houzez-child' ),
            'subtitle' => esc_html__( 'Change the default name of the manager role', 'houzez-child' ),
            'desc'     => esc_html__( 'Enter a name for the manager role (Default: Manager)', 'houzez-child' ),
            'default'  => esc_html__( 'Manager', 'houzez-child' ),
        ),
    )
) );

endif;