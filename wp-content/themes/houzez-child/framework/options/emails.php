<?php
global $houzez_opt_name, $allowed_html_array;
Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Email Management', 'houzez-child' ),
    'id'     => 'houzez-email-management',
    'desc'   => esc_html__( 'Global variables: %website_url as website url,%website_name as website name, %user_email as user_email, %username as username', 'houzez-child' ),
    'icon'   => 'el-icon-envelope el-icon-small',
    'fields'        => array(
        array(
            'id'       => 'enable_html_emails',
            'type'     => 'switch',
            'title'    => esc_html__( 'HTML Emails?', 'houzez-child' ),
            'desc'     => '',
            'subtitle' => esc_html__('Enable/Disable HTML emails, if enable then system will allow you to add html in email templates', 'houzez-child'),
            'default'  => 1,
            'on'       => esc_html__( 'Enable', 'houzez-child' ),
            'off'      => esc_html__( 'Disable', 'houzez-child' ),
        ),
        
         array(
            'id'     => 'email-header',
            'type'   => 'info',
            'notice' => false,
            'style'  => 'info',
            'title'  => wp_kses(__( '<span class="font24">Email Header</span>', 'houzez-child' ), $allowed_html_array),
            'subtitle' => '',
            'desc'   => ''
        ),

         array(
            'id'       => 'enable_email_header',
            'type'     => 'switch',
            'title'    => esc_html__( 'Enable Email Header.', 'houzez-child' ),
            'desc'     => '',
            'subtitle' => esc_html__('Enable/Disable email header', 'houzez-child'),
            'default'  => 1,
            'on'       => esc_html__( 'Enable', 'houzez-child' ),
            'off'      => esc_html__( 'Disable', 'houzez-child' ),
        ),
        array(
            'id'        => 'email_head_logo',
            'url'       => true,
            'type'      => 'media',
            'title'     => esc_html__( 'Logo', 'houzez-child' ),
            'read-only' => false,
            'required' => array('enable_email_header', '=', '1'),
            'default'   => array( 'url' => get_template_directory_uri() .'/images/logo/logo-houzez-white.png' ),
            'subtitle'  => esc_html__( 'Upload your custom logo for email header.', 'houzez-child' ),
        ),
        array(
            'id'       => 'email_head_bg_color',
            'type'     => 'color',
            'title'    => esc_html__( 'Header background Color', 'houzez-child' ),
            'subtitle' => '',
            'required' => array('enable_email_header', '=', '1'),
            'default'  => '#00AEEF',
            'transparent' => false
        ),

         //Email Footer
         array(
            'id'     => 'email-footer',
            'type'   => 'info',
            'notice' => false,
            'style'  => 'info',
            'title'  => wp_kses(__( '<span class="font24">Email Footer</span>', 'houzez-child' ), $allowed_html_array),
            'subtitle' => '',
            'desc'   => ''
        ),

         array(
            'id'       => 'enable_email_footer',
            'type'     => 'switch',
            'title'    => esc_html__( 'Enable Email Footer.', 'houzez-child' ),
            'desc'     => '',
            'subtitle' => esc_html__('Enable/Disable email footer', 'houzez-child'),
            'default'  => 1,
            'on'       => esc_html__( 'Enable', 'houzez-child' ),
            'off'      => esc_html__( 'Disable', 'houzez-child' ),
        ),
        array(
            'id'       => 'email_foot_bg_color',
            'type'     => 'color',
            'title'    => esc_html__( 'Footer background Color', 'houzez-child' ),
            'subtitle' => '',
            'required' => array('enable_email_footer', '=', '1'),
            'default'  => '#FFFFFF',
            'transparent' => false
        ),

        array(
            'id'       => 'email_footer_content',
            'type'     => 'editor',
            'title'    => esc_html__('Footer Content', 'houzez-child'),
            'subtitle' => '',
            'desc'     => '',
            'required' => array('enable_email_footer', '=', '1'),
            'default'  => '<p style="margin: 0 0 10px;">Copyright © 2018 Favethemes, All rights reserved.</p>
            <p style="margin: 0 0 10px;">Please do not reply to this email. You are receiving this email because you are subscribed to <a href="http://houzez.co" style="color: #00AEEF; text-decoration: none;">Houzez.co</a></p>

            <p style="margin: 0 0 10px;">Our mailing address is:</p>
            <p style="margin: 0 0 10px;">Favethemes<br>
                1680 Michigan Ave<br>
            Miami Beach, FL 33139-2538</p>',
            'args' => array(
                'teeny' => false,
                'textarea_rows' => 10
            )
        ),
        array(
            'id'     => 'email-ft-social-link1',
            'type'   => 'info',
            'notice' => false,
            'required' => array('enable_email_footer', '=', '1'),
            'style'  => 'info',
            'title'  => wp_kses(__( '<span class="font24">Social Link 1</span>', 'houzez-child' ), $allowed_html_array),
            'desc'   => ''
        ),
        array(
            'id'       => 'social_1_icon',
            'url'       => true,
            'type'      => 'media',
            'required' => array('enable_email_footer', '=', '1'),
            'read-only' => true,
            'title'    => esc_html__( 'Social Icon', 'houzez-child' ),
            'subtitle' => '',
            'default'  => ''
        ),
        array(
            'id'       => 'social_1_link',
            'type'     => 'text',
            'required' => array('enable_email_footer', '=', '1'),
            'title'    => esc_html__('Link', 'houzez-child'),
            'subtitle' => esc_html__('Enter full url', 'houzez-child'),
            'desc'     => '',
            'default'  => '',
        ),

        array(
            'id'     => 'email-ft-social-link2',
            'type'   => 'info',
            'notice' => false,
            'style'  => 'info',
            'required' => array('enable_email_footer', '=', '1'),
            'title'  => wp_kses(__( '<span class="font24">Social Link 2</span>', 'houzez-child' ), $allowed_html_array),
            'desc'   => ''
        ),
        array(
            'id'       => 'social_2_icon',
            'url'       => true,
            'type'      => 'media',
            'read-only' => false,
            'required' => array('enable_email_footer', '=', '1'),
            'title'    => esc_html__( 'Social Icon', 'houzez-child' ),
            'subtitle' => '',
            'default'  => ''
        ),
        array(
            'id'       => 'social_2_link',
            'type'     => 'text',
            'required' => array('enable_email_footer', '=', '1'),
            'title'    => esc_html__('Link', 'houzez-child'),
            'subtitle' => esc_html__('Enter full url', 'houzez-child'),
            'desc'     => '',
            'default'  => '',
        ),
        array(
            'id'     => 'email-ft-social-link3',
            'type'   => 'info',
            'notice' => false,
            'style'  => 'info',
            'required' => array('enable_email_footer', '=', '1'),
            'title'  => wp_kses(__( '<span class="font24">Social Link 3</span>', 'houzez-child' ), $allowed_html_array),
            'desc'   => ''
        ),
        array(
            'id'       => 'social_3_icon',
            'url'       => true,
            'type'      => 'media',
            'read-only' => false,
            'required' => array('enable_email_footer', '=', '1'),
            'title'    => esc_html__( 'Social Icon', 'houzez-child' ),
            'subtitle' => '',
            'default'  => ''
        ),
        array(
            'id'       => 'social_3_link',
            'type'     => 'text',
            'title'    => esc_html__('Link', 'houzez-child'),
            'subtitle' => esc_html__('Enter full url', 'houzez-child'),
            'desc'     => '',
            'required' => array('enable_email_footer', '=', '1'),
            'default'  => '',
        ),
        array(
            'id'     => 'email-ft-social-link4',
            'type'   => 'info',
            'notice' => false,
            'style'  => 'info',
            'required' => array('enable_email_footer', '=', '1'),
            'title'  => wp_kses(__( '<span class="font24">Social Link 4</span>', 'houzez-child' ), $allowed_html_array),
            'desc'   => ''
        ),
        array(
            'id'       => 'social_4_icon',
            'url'       => true,
            'type'      => 'media',
            'read-only' => false,
            'title'    => esc_html__( 'Social Icon', 'houzez-child' ),
            'subtitle' => '',
            'required' => array('enable_email_footer', '=', '1'),
            'default'  => ''
        ),
        array(
            'id'       => 'social_4_link',
            'type'     => 'text',
            'title'    => esc_html__('Link', 'houzez-child'),
            'subtitle' => esc_html__('Enter full url', 'houzez-child'),
            'desc'     => '',
            'required' => array('enable_email_footer', '=', '1'),
            'default'  => '',
        ),

    ),
));


/* **********************************************************************
 * Prooperty Agent
 * **********************************************************************/
Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Property Agent', 'houzez-child' ),
    'id'     => 'email-property-agent',
    'desc'   => '',
    'icon'   => '',
    'subsection' => true,
    'fields'    => array(
        array(
            'id'     => 'email-property_agent_contact',
            'type'   => 'info',
            'notice' => false,
            'style'  => 'info',
            'title'  => wp_kses(__( '<span class="font24">Property Agent Contact Form</span>', 'houzez-child' ), $allowed_html_array),
            'subtitle' => esc_html__('Use %sender_name , %sender_email , %sender_phone , %website_name , %property_title , %property_link , %property_id , %user_type ,  %sender_message', 'houzez-child'),
            'desc'   => ''
        ),
        array(
            'id'       => 'houzez_subject_property_agent_contact',
            'type'     => 'text',
            'title'    => esc_html__('Subject', 'houzez-child'),
            'subtitle' => esc_html__('Email subject for Propety Agent Contact', 'houzez-child'),
            'desc'     => '',
            'default'  => 'New message sent by %sender_name using agent contact form at %website_name',
        ),
        array(
            'id'       => 'houzez_property_agent_contact',
            'type'     => 'editor',
            'title'    => esc_html__('Content', 'houzez-child'),
            'subtitle' => esc_html__('Email content for Propety Agent Contact, HTML tags are allowed.', 'houzez-child'),
            'desc'     => '',
            'default'  => '
            You have received new message from: %sender_name
            Property Title : %property_title
            Property URL : %property_link
            Property ID  : %property_id
            Phone Number : %sender_phone
            User Type    : %user_type
            Additional message is
            %sender_message
            You can contact %sender_name via email %sender_email</div>
            ',
            'args' => array(
                'teeny' => false,
                'textarea_rows' => 10
            )
        ),
    )
));

/* **********************************************************************
 * Schedule Tour
 * **********************************************************************/
Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Schedule Tour', 'houzez-child' ),
    'id'     => 'email-scheduletour',
    'desc'   => '',
    'icon'   => '',
    'subsection' => true,
    'fields'    => array(
        array(
            'id'     => 'email-property_schedule_tour',
            'type'   => 'info',
            'notice' => false,
            'style'  => 'info',
            'title'  => wp_kses(__( '<span class="font24">Property Schedule Tour</span>', 'houzez-child' ), $allowed_html_array),
            'subtitle' => esc_html__('Use %sender_name , %sender_email , %sender_phone , %website_name , %property_title , %property_link, %property_id, %schedule_date , %schedule_time ,  %sender_message, %schedule_tour_type', 'houzez-child'),
            'desc'   => ''
        ),
        array(
            'id'       => 'houzez_subject_property_schedule_tour',
            'type'     => 'text',
            'title'    => esc_html__('Subject', 'houzez-child'),
            'subtitle' => esc_html__('Email subject for Propety Schedule Tour', 'houzez-child'),
            'desc'     => '',
            'default'  => 'New message sent by %sender_name using schedule contact form at %website_name',
        ),
        array(
            'id'       => 'houzez_property_schedule_tour',
            'type'     => 'editor',
            'title'    => esc_html__('Content', 'houzez-child'),
            'subtitle' => esc_html__('Email content for Propety Schedule Tour, HTML tags are allowed.', 'houzez-child'),
            'desc'     => '',
            'default'  => '
            You have received new message from: %sender_name
            Property Title : %property_title
            Property URL : %property_link
            Date & Time  : %schedule_date at %schedule_time
            Phone Number : %sender_phone
            Additional message is
            %sender_message
            You can contact %sender_name via email %sender_email</div>
            ',
            'args' => array(
                'teeny' => false,
                'textarea_rows' => 10
            )
        ),
    )
));

/* **********************************************************************
 * Register user
 * **********************************************************************/
Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'New Register', 'houzez-child' ),
    'id'     => 'email-register-user',
    'desc'   => '',
    'icon'   => '',
    'subsection' => true,
    'fields'    => array(
        array(
            'id'     => 'email-new-user-info',
            'type'   => 'info',
            'notice' => false,
            'style'  => 'info',
            'title'  => wp_kses(__( '<span class="font24">New Registered User</span>', 'houzez-child' ), $allowed_html_array),
            'desc'   => esc_html__( '%user_login_register as username, %user_pass_register as user password, %user_email_register as new user email, %user_phone_register as phone number, %email_verification_link as email verification', 'houzez-child' )
        ),

        array(
            'id'       => 'houzez_subject_new_user_register',
            'type'     => 'text',
            'title'    => esc_html__('Subject for New User Notification', 'houzez-child'),
            'subtitle' => esc_html__('Email subject for new user notification', 'houzez-child'),
            'desc'     => '',
            'default'  => esc_html__('Your username and password on %website_url', 'houzez-child'),
        ),
        array(
            'id'       => 'houzez_new_user_register',
            'type'     => 'editor',
            'title'    => esc_html__('Content for New User Notification', 'houzez-child'),
            'subtitle' => esc_html__('Email content for new user notification', 'houzez-child'),
            'desc'     => '',
            'default'  => esc_html__('Hi there,
Welcome to %website_url! You can login now using the below credentials:
Username:%user_login_register
Password: %user_pass_register
If you have any problems, please contact us.
Thank you!', 'houzez-child'),
            'args' => array(
                'teeny' => false,
                'textarea_rows' => 10
            )
        ),

        array(
            'id'       => 'houzez_subject_admin_new_user_register',
            'type'     => 'text',
            'title'    => esc_html__('Subject for New User Admin Notification', 'houzez-child'),
            'subtitle' => esc_html__('Email subject for new user admin notification', 'houzez-child'),
            'desc'     => '',
            'default'  => esc_html__('New User Registration', 'houzez-child'),
        ),
        array(
            'id'       => 'houzez_admin_new_user_register',
            'type'     => 'editor',
            'title'    => esc_html__('Content for New User Admin Notification', 'houzez-child'),
            'subtitle' => esc_html__('Email content for new user admin notification', 'houzez-child'),
            'desc'     => '',
            'default'  => esc_html__('New user registration on %website_url.
Username: %user_login_register,
E-mail: %user_email_register', 'houzez-child'),
            'args' => array(
                'teeny' => false,
                'textarea_rows' => 10
            )
        ),

        /*array(
            'id'       => 'houzez_subject_user_register_verification',
            'type'     => 'text',
            'title'    => esc_html__('Subject for New User Verification', 'houzez-child'),
            'subtitle' => esc_html__('Email subject for new user verification', 'houzez-child'),
            'desc'     => '',
            'default'  => esc_html__('Please verify your email on %website_name', 'houzez-child'),
        ),
        array(
            'id'       => 'houzez_user_register_verification',
            'type'     => 'editor',
            'title'    => esc_html__('Content for New User Verification', 'houzez-child'),
            'subtitle' => esc_html__('Email content for new user verification', 'houzez-child'),
            'desc'     => '',
            'default'  => esc_html__('Hi there,
Welcome to %website_name! Click the following link to verify your email: %email_verification_link', 'houzez-child'),
            'args' => array(
                'teeny' => false,
                'textarea_rows' => 10
            )
        ),*/
    )
));

/* **********************************************************************
 * Package activated
 * **********************************************************************/
Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Package Activated', 'houzez-child' ),
    'id'     => 'email-package-activated',
    'desc'   => '',
    'icon'   => '',
    'subsection' => true,
    'fields'    => array(
        array(
            'id'     => 'email-purchase-activated-package-info',
            'type'   => 'info',
            'notice' => false,
            'style'  => 'info',
            'title'  => wp_kses(__( '<span class="font24">Purchase Activated Packages</span>', 'houzez-child' ), $allowed_html_array),
            'subtitle' => esc_html__('Packages wire transfer and other payments gateways purchase activate', 'houzez-child'),
            'desc'   => ''
        ),

        array(
            'id'       => 'houzez_subject_purchase_activated_pack',
            'type'     => 'text',
            'title'    => esc_html__('Subject for Purchase Activated', 'houzez-child'),
            'subtitle' => esc_html__('Email subject for purchase activated', 'houzez-child'),
            'desc'     => '',
            'default'  => esc_html__('Your purchase was activated', 'houzez-child'),
        ),
        array(
            'id'       => 'houzez_purchase_activated_pack',
            'type'     => 'editor',
            'title'    => esc_html__('Content for Purchase Activated', 'houzez-child'),
            'subtitle' => esc_html__('Email content for Purchase Activated', 'houzez-child'),
            'desc'     => '',
            'default'  => __("Hi there,<br>
Welcome to %website_url and thank you for purchasing a plan with us. We are excited you have chosen %website_name . %website_name is a great place to advertise and search properties.<br>

You plan on  %website_url activated! You can now list your properties according to you plan.", 'houzez-child'),
            'args' => array(
                'teeny' => false,
                'textarea_rows' => 10
            )
        ),
    )
));

/* **********************************************************************
 * Purchase activated
 * **********************************************************************/
Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Purchase Activated', 'houzez-child' ),
    'id'     => 'email-purchase-activated',
    'desc'   => '',
    'icon'   => '',
    'subsection' => true,
    'fields'    => array(
        array(
            'id'     => 'email-purchase-activated-info',
            'type'   => 'info',
            'notice' => false,
            'style'  => 'info',
            'title'  => wp_kses(__( '<span class="font24">Purchase Activated</span>', 'houzez-child' ), $allowed_html_array),
            'subtitle' => esc_html__('Per listing wire transfer purchase activate', 'houzez-child'),
            'desc'   => ''
        ),

        array(
            'id'       => 'houzez_subject_purchase_activated',
            'type'     => 'text',
            'title'    => esc_html__('Subject for Purchase Activated', 'houzez-child'),
            'subtitle' => esc_html__('Email subject for purchase activated', 'houzez-child'),
            'desc'     => '',
            'default'  => esc_html__('Your purchase was activated', 'houzez-child'),
        ),
        array(
            'id'       => 'houzez_purchase_activated',
            'type'     => 'editor',
            'title'    => esc_html__('Content for Purchase Activated', 'houzez-child'),
            'subtitle' => esc_html__('Email content for Purchase Activated', 'houzez-child'),
            'desc'     => '',
            'default'  => esc_html__('Hi there,
Your purchase on %website_url is activated! You should go and check it out.', 'houzez-child'),
            'args' => array(
                'teeny' => false,
                'textarea_rows' => 10
            )
        ),
    )
));

/* **********************************************************************
 * Approved & Expired listing
 * **********************************************************************/
Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Approved, Expired & Disapproved Listing', 'houzez-child' ),
    'id'     => 'email-approved-expired-listing',
    'desc'   => '',
    'icon'   => '',
    'subsection' => true,
    'fields'    => array(
        array(
            'id'     => 'email-approved-info',
            'type'   => 'info',
            'notice' => false,
            'style'  => 'info',
            'title'  => wp_kses(__( '<span class="font24">Approved Listing</span>', 'houzez-child' ), $allowed_html_array),
            'subtitle' => esc_html__('You can use %listing_title as listing title, %listing_url as listing link', 'houzez-child'),
            'desc'   => ''
        ),

        array(
            'id'       => 'houzez_subject_listing_approved',
            'type'     => 'text',
            'title'    => esc_html__('Subject for Approved Listing', 'houzez-child'),
            'subtitle' => esc_html__('Email subject for approved listing', 'houzez-child'),
            'desc'     => '',
            'default'  => esc_html__('Your listing approved', 'houzez-child'),
        ),
        array(
            'id'       => 'houzez_listing_approved',
            'type'     => 'editor',
            'title'    => esc_html__('Content for Listing Approved', 'houzez-child'),
            'subtitle' => esc_html__('Email content for listing approved', 'houzez-child'),
            'desc'     => '',
            'default'  => esc_html__("Hi there,
Your listing on %website_url has been approved.

Listins Title:%listing_title
Listing Url: %listing_url", 'houzez-child'),
            'args' => array(
                'teeny' => false,
                'textarea_rows' => 10
            )
        ),

        array(
            'id'     => 'email-expired-info',
            'type'   => 'info',
            'notice' => false,
            'style'  => 'info',
            'title'  => wp_kses(__( '<span class="font24">Expired Listing</span>', 'houzez-child' ), $allowed_html_array),
            'subtitle' => esc_html__('You can use %listing_title as listing title, %listing_url as listing link', 'houzez-child'),
            'desc'   => ''
        ),

        array(
            'id'       => 'houzez_subject_listing_expired',
            'type'     => 'text',
            'title'    => esc_html__('Subject for Expired Listing', 'houzez-child'),
            'subtitle' => esc_html__('Email subject for expired listing', 'houzez-child'),
            'desc'     => '',
            'default'  => esc_html__('Your listing expired', 'houzez-child'),
        ),
        array(
            'id'       => 'houzez_listing_expired',
            'type'     => 'editor',
            'title'    => esc_html__('Content for Listing Expired', 'houzez-child'),
            'subtitle' => esc_html__('Email content for listing expired', 'houzez-child'),
            'desc'     => '',
            'default'  => esc_html__("Hi there,
Your listing on %website_url has been expired.

Listins Title:%listing_title
Listing Url: %listing_url", 'houzez-child'),
            'args'   => array(
                'teeny'            => true,
                'textarea_rows'    => 10
            )
        ),

        array(
            'id'     => 'email-disapproved-info',
            'type'   => 'info',
            'notice' => false,
            'style'  => 'info',
            'title'  => wp_kses(__( '<span class="font24">Disapproved Listing</span>', 'houzez-child' ), $allowed_html_array),
            'subtitle' => esc_html__('You can use %listing_title as listing title, %listing_url as listing link', 'houzez-child'),
            'desc'   => ''
        ),

        array(
            'id'       => 'houzez_subject_listing_disapproved',
            'type'     => 'text',
            'title'    => esc_html__('Subject for Disapproved Listing', 'houzez-child'),
            'subtitle' => esc_html__('Email subject for disapproved listing', 'houzez-child'),
            'desc'     => '',
            'default'  => esc_html__('Your listing Disapproved', 'houzez-child'),
        ),
        array(
            'id'       => 'houzez_listing_disapproved',
            'type'     => 'editor',
            'title'    => esc_html__('Content for Listing Disapproved', 'houzez-child'),
            'subtitle' => esc_html__('Email content for listing disapproved', 'houzez-child'),
            'desc'     => '',
            'default'  => esc_html__("Hi there,
Your listing on %website_url has been disapproved.

Listins Title:%listing_title
Listing Url: %listing_url", 'houzez-child'),
            'args' => array(
                'teeny' => false,
                'textarea_rows' => 10
            )
        ),
    )
));

/* **********************************************************************
 * New Wire Transfer 
 * **********************************************************************/
Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Wire Transfer', 'houzez-child' ),
    'id'     => 'email-wire-transfer',
    'desc'   => '',
    'icon'   => '',
    'subsection' => true,
    'fields'    => array(
        array(
            'id'     => 'email-wire-transfer-info',
            'type'   => 'info',
            'notice' => false,
            'style'  => 'info',
            'title'  => wp_kses(__( '<span class="font24">New Wire Transfer.</span>', 'houzez-child' ), $allowed_html_array),
            'desc'   => esc_html__( 'you can use %invoice_no as invoice number, %total_price as total price and %payment_details as payment details', 'houzez-child' )
        ),
        array(
            'id'       => 'houzez_subject_new_wire_transfer',
            'type'     => 'text',
            'title'    => esc_html__('Subject for New wire Transfer', 'houzez-child'),
            'subtitle' => esc_html__('Email subject for New wire Transfer', 'houzez-child'),
            'desc'     => '',
            'default'  => esc_html__('You ordered a new Wire Transfer', 'houzez-child'),
        ),
        array(
            'id'       => 'houzez_new_wire_transfer',
            'type'     => 'editor',
            'title'    => esc_html__('Content for New wire Transfer', 'houzez-child'),
            'subtitle' => esc_html__('Email content for New wire Transfer', 'houzez-child'),
            'desc'     => '',
            'default'  => esc_html__('We received your Wire Transfer payment request on  %website_url !
Please follow the instructions below in order to start submitting properties as soon as possible.
The invoice number is: %invoice_no, Amount: %total_price.
Instructions:  %payment_details.', 'houzez-child'),
            'args' => array(
                'teeny' => false,
                'textarea_rows' => 10
            )
        ),

        array(
            'id'       => 'houzez_subject_admin_new_wire_transfer',
            'type'     => 'text',
            'title'    => esc_html__('Subject for Admin - New wire Transfer', 'houzez-child'),
            'subtitle' => esc_html__('Email subject for New wire Transfer', 'houzez-child'),
            'desc'     => '',
            'default'  => esc_html__('Somebody ordered a new Wire Transfer', 'houzez-child'),
        ),
        array(
            'id'       => 'houzez_admin_new_wire_transfer',
            'type'     => 'editor',
            'title'    => esc_html__('Content for Admin - New wire Transfer', 'houzez-child'),
            'subtitle' => esc_html__('Email content for New wire Transfer', 'houzez-child'),
            'desc'     => '',
            'default'  => esc_html__('We received your Wire Transfer payment request on  %website_url !
Please follow the instructions below in order to start submitting properties as soon as possible.
The invoice number is: %invoice_no, Amount: %total_price.
Instructions:  %payment_details.', 'houzez-child'),
            'args' => array(
                'teeny' => false,
                'textarea_rows' => 10
            )
        ),
    )
));

/* **********************************************************************
 * Paid Submission per listing
 * **********************************************************************/
Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Paid Submission Per Listing', 'houzez-child' ),
    'id'     => 'email-paid-submission-perlisting',
    'desc'   => '',
    'icon'   => '',
    'subsection' => true,
    'fields'    => array(
        array(
            'id'     => 'email-paid-perlisting-info',
            'type'   => 'info',
            'notice' => false,
            'style'  => 'info',
            'title'  => wp_kses(__( '<span class="font24">Paid Submission Per Listing.</span>', 'houzez-child' ), $allowed_html_array),
            'subtitle' => esc_html__('you can use %invoice_no as invoice number, %listing_title as listing title, %listing_url as listing link and %listing_id as listing id', 'houzez-child'),
            'desc'   => ''
        ),
        array(
            'id'       => 'houzez_subject_paid_submission_listing',
            'type'     => 'text',
            'title'    => esc_html__('Subject for Paid Submission', 'houzez-child'),
            'subtitle' => esc_html__('Email subject for paid submission per listing', 'houzez-child'),
            'desc'     => '',
            'default'  => esc_html__('Your new listing on %website_url', 'houzez-child'),
        ),
        array(
            'id'       => 'houzez_paid_submission_listing',
            'type'     => 'editor',
            'title'    => esc_html__('Content for Paid Submission', 'houzez-child'),
            'subtitle' => esc_html__('Email content for paid submission per listing', 'houzez-child'),
            'desc'     => '',
            'default'  => esc_html__('Hi there,
You have submitted new listing on  %website_url!
Listing Title: %listing_title
Listing url: %listing_url
Listing ID:  %listing_id
The invoice number is: %invoice_no', 'houzez-child'),
            'args'   => array(
                'teeny'         => true,
                'textarea_rows' => 10
            )
        ),

        array(
            'id'       => 'houzez_subject_admin_paid_submission_listing',
            'type'     => 'text',
            'title'    => esc_html__('Subject for Admin - Paid Submission', 'houzez-child'),
            'subtitle' => esc_html__('Email subject for paid submission per listing', 'houzez-child'),
            'desc'     => '',
            'default'  => esc_html__('New paid submission on %website_url', 'houzez-child'),
        ),
        array(
            'id'       => 'houzez_admin_paid_submission_listing',
            'type'     => 'editor',
            'title'    => esc_html__('Content for Admin - Paid Submission', 'houzez-child'),
            'subtitle' => esc_html__('Email content for paid submission per listing', 'houzez-child'),
            'desc'     => '',
            'default'  => esc_html__('Hi there,
You have a new paid submission on  %website_url!
Listing Title: %listing_title
Listing url: %listing_url
Listing ID:  %listing_id
The invoice number is: %invoice_no', 'houzez-child'),
            'args' => array(
                'teeny' => false,
                'textarea_rows' => 10
            )
        ),

        array(
            'id'     => 'email-featured-perlisting-info',
            'type'   => 'info',
            'notice' => false,
            'style'  => 'info',
            'title'  => wp_kses(__( '<span class="font24">Featured Submission Per Listing.</span>', 'houzez-child' ), $allowed_html_array),
            'subtitle' => esc_html__('you can use %invoice_no as invoice number, %listing_title as listing title , %listing_url as listing link and %listing_id as listing id', 'houzez-child'),
            'desc'   => ''
        ),
        array(
            'id'       => 'houzez_subject_featured_submission_listing',
            'type'     => 'text',
            'title'    => esc_html__('Subject for Featured Submission', 'houzez-child'),
            'subtitle' => esc_html__('Email subject for featured submission per listing', 'houzez-child'),
            'desc'     => '',
            'default'  => esc_html__('New featured upgrade on %website_url', 'houzez-child'),
        ),
        array(
            'id'       => 'houzez_featured_submission_listing',
            'type'     => 'editor',
            'title'    => esc_html__('Content for Featured Submission', 'houzez-child'),
            'subtitle' => esc_html__('Email content for featured submission per listing', 'houzez-child'),
            'desc'     => '',
            'default'  => esc_html__('Hi there,
You have a new featured submission on  %website_url!
Listing Title: %listing_title
Listing url: %listing_url
Listing ID:  %listing_id
The invoice number is: %invoice_no', 'houzez-child'),
            'args' => array(
                'teeny' => false,
                'textarea_rows' => 10
            )
        ),

        array(
            'id'       => 'houzez_subject_admin_featured_submission_listing',
            'type'     => 'text',
            'title'    => esc_html__('Subject for Admin - Featured Submission', 'houzez-child'),
            'subtitle' => esc_html__('Email subject for featured submission per listing', 'houzez-child'),
            'desc'     => '',
            'default'  => esc_html__('New featured submission on %website_url', 'houzez-child'),
        ),
        array(
            'id'       => 'houzez_admin_featured_submission_listing',
            'type'     => 'editor',
            'title'    => esc_html__('Content for Admin - Featured Submission', 'houzez-child'),
            'subtitle' => esc_html__('Email content for featured submission per listing', 'houzez-child'),
            'desc'     => '',
            'default'  => esc_html__('Hi there,
You have a new featured submission on  %website_url!
Listing Title: %listing_title
Listing url: %listing_url
Listing ID:  %listing_id
The invoice number is: %invoice_no', 'houzez-child'),
            'args' => array(
                'teeny' => false,
                'textarea_rows' => 10
            )
        ),
    )
));

/* **********************************************************************
 * Package & free submission listing 
 * **********************************************************************/
Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Free Submission Listing, Update Listing and Package Listing', 'houzez-child' ),
    'id'     => 'email-free-submissionandpackagelisting',
    'desc'   => '',
    'icon'   => '',
    'subsection' => true,
    'fields'    => array(
        array(
            'id'     => 'email-free-package-perlisting-info',
            'type'   => 'info',
            'notice' => false,
            'style'  => 'info',
            'title'  => wp_kses(__( '<span class="font24">Package and Free Submission Listings.</span>', 'houzez-child' ), $allowed_html_array),
            'subtitle' => esc_html__('you can use %listing_title as listing title, %listing_url as listing link and %listing_id as listing id', 'houzez-child'),
            'desc'   => ''
        ),
        array(
            'id'       => 'houzez_subject_free_submission_listing',
            'type'     => 'text',
            'title'    => esc_html__('Subject for Submission', 'houzez-child'),
            'subtitle' => esc_html__('Email subject for package and free listing submission', 'houzez-child'),
            'desc'     => '',
            'default'  => esc_html__('Your new listing on %website_url', 'houzez-child'),
        ),
        array(
            'id'       => 'houzez_free_submission_listing',
            'type'     => 'editor',
            'title'    => esc_html__('Content for Submission', 'houzez-child'),
            'subtitle' => esc_html__('Email content for package and free listing submission', 'houzez-child'),
            'desc'     => '',
            'default'  => esc_html__('Hi there,
You have submitted new listing on  %website_url!
Listing Title: %listing_title
Listing url: %listing_url
Listing ID:  %listing_id', 'houzez-child'),
            'args' => array(
                'teeny' => false,
                'textarea_rows' => 10
            )
        ),

        array(
            'id'       => 'houzez_subject_admin_free_submission_listing',
            'type'     => 'text',
            'title'    => esc_html__('Subject for Admin - Submission', 'houzez-child'),
            'subtitle' => esc_html__('Email subject for package and free listing submission', 'houzez-child'),
            'desc'     => '',
            'default'  => esc_html__('New submission on %website_url', 'houzez-child'),
        ),
        array(
            'id'       => 'houzez_admin_free_submission_listing',
            'type'     => 'editor',
            'title'    => esc_html__('Content for Admin - Submission', 'houzez-child'),
            'subtitle' => esc_html__('Email content for package and free listing submission', 'houzez-child'),
            'desc'     => '',
            'default'  => __('Hi there,
You have a new submission on  %website_url!
Listing Title: %listing_title
Listing url: %listing_url
Listing ID:  %listing_id', 'houzez-child'),
            'args' => array(
                'teeny' => false,
                'textarea_rows' => 10
            )
        ),

        array(
            'id'     => 'email-update-listing-info',
            'type'   => 'info',
            'notice' => false,
            'style'  => 'info',
            'title'  => wp_kses(__( '<span class="font24">Update Listing.</span>', 'houzez-child' ), $allowed_html_array),
            'subtitle' => esc_html__('you can use %listing_title as listing title, %listing_url as listing link and %listing_id as listing id', 'houzez-child'),
            'desc'   => ''
        ),

        array(
            'id'       => 'houzez_subject_admin_update_listing',
            'type'     => 'text',
            'title'    => esc_html__('Subject for Admin', 'houzez-child'),
            'subtitle' => esc_html__('Email subject for update listing', 'houzez-child'),
            'desc'     => '',
            'default'  => esc_html__('Update Listing on %website_url', 'houzez-child'),
        ),
        array(
            'id'       => 'houzez_admin_update_listing',
            'type'     => 'editor',
            'title'    => esc_html__('Content for Admin', 'houzez-child'),
            'subtitle' => esc_html__('Email content for update listing submission', 'houzez-child'),
            'desc'     => '',
            'default'  => __('Hi there,
You have a new updated listing on  %website_url!
Listing Title: %listing_title
Listing url: %listing_url
Listing ID:  %listing_id', 'houzez-child'),
            'args' => array(
                'teeny' => false,
                'textarea_rows' => 10
            )
        ),
    )
));

/* **********************************************************************
 * Expired Listing
 * **********************************************************************/
Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Expired Listing', 'houzez-child' ),
    'id'     => 'email-expiredlisting',
    'desc'   => '',
    'icon'   => '',
    'subsection' => true,
    'fields'    => array(
        array(
            'id'     => 'email-free-listing-expired-info',
            'type'   => 'info',
            'notice' => false,
            'style'  => 'info',
            'title'  => wp_kses(__( '<span class="font24">Free Listing Expired</span>', 'houzez-child' ), $allowed_html_array),
            'desc'   => esc_html__('Can use %expired_listing_url as expired listing url and %expired_listing_name as expired listing name', 'houzez-child')
        ),
        array(
            'id'       => 'houzez_subject_free_listing_expired',
            'type'     => 'text',
            'title'    => esc_html__('Subject for Free Listing Expired', 'houzez-child'),
            'subtitle' => esc_html__('Email subject for free listing expired', 'houzez-child'),
            'desc'     => '',
            'default'  => esc_html__('Free Listing expired on %website_url', 'houzez-child'),
        ),
        array(
            'id'       => 'houzez_free_listing_expired',
            'type'     => 'editor',
            'title'    => esc_html__('Content for Free Listing Expired', 'houzez-child'),
            'subtitle' => esc_html__('Email content for free listing expired', 'houzez-child'),
            'desc'     => '',
            'default'  => esc_html__('Hi there,
One of your free listings on  %website_url has "expired". The listing is %expired_listing_url.
Thank you!', 'houzez-child'),
            'args' => array(
                'teeny' => false,
                'textarea_rows' => 10
            )
        ),

        array(
            'id'     => 'email-featured-listing-expired-info',
            'type'   => 'info',
            'notice' => false,
            'style'  => 'info',
            'title'  => wp_kses(__( '<span class="font24">Featured Listing Expired</span>', 'houzez-child' ), $allowed_html_array),
            'desc'   => esc_html__('Can use %expired_listing_url as expired listing url and %expired_listing_name as expired listing name', 'houzez-child')
        ),
        array(
            'id'       => 'houzez_subject_featured_listing_expired',
            'type'     => 'text',
            'title'    => esc_html__('Subject for featured Listing Expired', 'houzez-child'),
            'subtitle' => esc_html__('Email subject for featured listing expired', 'houzez-child'),
            'desc'     => '',
            'default'  => esc_html__('Featured Listing expired on %website_url', 'houzez-child'),
        ),
        array(
            'id'       => 'houzez_featured_listing_expired',
            'type'     => 'editor',
            'title'    => esc_html__('Content for Featured Listing Expired', 'houzez-child'),
            'subtitle' => esc_html__('Email content for featured listing expired', 'houzez-child'),
            'desc'     => '',
            'default'  => esc_html__('Hi there,
One of your free listings on  %website_url has "expired". The listing is %expired_listing_url.
Thank you!', 'houzez-child'),
            'args' => array(
                'teeny' => false,
                'textarea_rows' => 10
            )
        ),

        array(
            'id'     => 'email-expired-listing-info',
            'type'   => 'info',
            'notice' => false,
            'style'  => 'info',
            'title'  => wp_kses(__( '<span class="font24">Expired Listings Resend For Approval.</span>', 'houzez-child' ), $allowed_html_array),
            'desc'   => esc_html__('%submission_title as property title, %submission_url as property submission url', 'houzez-child')
        ),
        array(
            'id'       => 'houzez_subject_admin_expired_listings',
            'type'     => 'text',
            'title'    => esc_html__('Subject for Admin - Expired Listing', 'houzez-child'),
            'subtitle' => esc_html__('Email subject for admin expired listing', 'houzez-child'),
            'desc'     => '',
            'default'  => esc_html__('Expired Listing sent for approval on %website_url', 'houzez-child'),
        ),
        array(
            'id'       => 'houzez_admin_expired_listings',
            'type'     => 'editor',
            'title'    => esc_html__('Content for Admin - Expired Listing', 'houzez-child'),
            'subtitle' => esc_html__('Email content for admin expired listing', 'houzez-child'),
            'desc'     => '',
            'default'  => esc_html__('Hi there,
A user has re-submited a new property on %website_url! You should go and check it out.
This is the property title: %submission_title.', 'houzez-child'),
            'args' => array(
                'teeny' => false,
                'textarea_rows' => 10
            )
        ),
    )
));

/* **********************************************************************
 * Match Submission
 * **********************************************************************/
Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Matching Submission', 'houzez-child' ),
    'id'     => 'email-matchingsubmission',
    'desc'   => '',
    'icon'   => '',
    'subsection' => true,
    'fields'    => array(
        array(
            'id'     => 'email-matching-submissions-info',
            'type'   => 'info',
            'notice' => false,
            'style'  => 'info',
            'title'  => wp_kses(__( '<span class="font24">Matching Submission.</span>', 'houzez-child' ), $allowed_html_array),
            'desc'   => esc_html__('Use %matching_submissions as matching submissions list, %listing_count for number of listing count', 'houzez-child')
        ),
        array(
            'id'       => 'houzez_subject_matching_submissions',
            'type'     => 'text',
            'title'    => esc_html__('Subject for Matching Submissions', 'houzez-child'),
            'subtitle' => esc_html__('Email subject for matching submissions', 'houzez-child'),
            'desc'     => '',
            'default'  => esc_html__('Matching Submissions on %website_url', 'houzez-child'),
        ),
        array(
            'id'       => 'houzez_matching_submissions',
            'type'     => 'editor',
            'title'    => esc_html__('Content for Matching Submissions', 'houzez-child'),
            'subtitle' => esc_html__('Email content for matching submissions', 'houzez-child'),
            'desc'     => '',
            'default'  => '<div class="title">
<h1 style="font-size: 20px; line-height: 30px; margin: 0 0 10px;">New Suggested Properties</h1>
<p style="margin: 0 0 30px; color: #777777;">We have found %listing_count new properties that match your saved searches.</p>

</div>
%matching_submissions',
            'args' => array(
                'teeny' => false,
                'textarea_rows' => 10
            )
        ),
    )
));

/* **********************************************************************
 * Register user
 * **********************************************************************/
Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Recurring Payment & Membership Cancelled', 'houzez-child' ),
    'id'     => 'email-membershipcancelledandrecurring',
    'desc'   => '',
    'icon'   => '',
    'subsection' => true,
    'fields'    => array(
        array(
            'id'     => 'email-recurring-payment-info',
            'type'   => 'info',
            'notice' => false,
            'style'  => 'info',
            'title'  => wp_kses(__( '<span class="font24">Recurring Payment</span>', 'houzez-child' ), $allowed_html_array),
            'desc'   => esc_html__('Can use %recurring_package_name as recurring packacge name and %merchant as merchant name', 'houzez-child')
        ),
        array(
            'id'       => 'houzez_subject_recurring_payment',
            'type'     => 'text',
            'title'    => esc_html__('Subject for Recurring Payment', 'houzez-child'),
            'subtitle' => esc_html__('Email subject for recurring payment', 'houzez-child'),
            'desc'     => '',
            'default'  => esc_html__('Recurring Payment on %website_url', 'houzez-child'),
        ),
        array(
            'id'       => 'houzez_recurring_payment',
            'type'     => 'editor',
            'title'    => esc_html__('Content for Recurring Payment', 'houzez-child'),
            'subtitle' => esc_html__('Email content for recurring payment', 'houzez-child'),
            'desc'     => '',
            'default'  => esc_html__('Hi there,
We charged your account on %merchant for a subscription on %website_url ! You should go and check it out.', 'houzez-child'),
            'args' => array(
                'teeny' => false,
                'textarea_rows' => 10
            )
        ),

        array(
            'id'     => 'email-membership-cancelled-info',
            'type'   => 'info',
            'notice' => false,
            'style'  => 'info',
            'title'  => wp_kses(__( '<span class="font24">Membership Cancelled</span>', 'houzez-child' ), $allowed_html_array),
            'desc'   => ''
        ),
        array(
            'id'       => 'houzez_subject_membership_cancelled',
            'type'     => 'text',
            'title'    => esc_html__('Subject for Membership Cancelled', 'houzez-child'),
            'subtitle' => esc_html__('Email subject for membership cancelled', 'houzez-child'),
            'desc'     => '',
            'default'  => esc_html__('Membership Cancelled on %website_url', 'houzez-child'),
        ),
        array(
            'id'       => 'houzez_membership_cancelled',
            'type'     => 'editor',
            'title'    => esc_html__('Content for Membership Cancelled', 'houzez-child'),
            'subtitle' => esc_html__('Email content for membership cancelled', 'houzez-child'),
            'desc'     => '',
            'default'  => esc_html__('Hi there,
Your subscription on %website_url was cancelled because it expired or the recurring payment from the merchant was not processed. All your listings are no longer visible for our visitors but remain in your account.
Thank you.', 'houzez-child'),
            'args' => array(
                'teeny' => false,
                'textarea_rows' => 10
            )
        ),
    )
));

