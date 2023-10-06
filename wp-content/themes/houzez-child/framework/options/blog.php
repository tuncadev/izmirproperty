<?php
global $houzez_opt_name, $allowed_html_array;
Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Blog', 'houzez-child' ),
    'id'     => 'blog',
    'desc'   => '',
    'icon'   => 'el-icon-edit el-icon-small',
    'fields'        => array(
        array(
            'id'       => 'blog_pages_s_layout',
            'type'     => 'image_select',
            'title'    => __('Page Layout', 'houzez-child'),
            'subtitle' => '',
            'options'  => array(
                
                'left-sidebar' => array(
                    'alt'   => '',
                    'img'   => HOUZEZ_IMAGE. '2cl.png'
                ),
                'right-sidebar' => array(
                    'alt'   => '',
                    'img'  => HOUZEZ_IMAGE. '2cr.png'
                )
            ),
            'default' => 'right-sidebar'
        ),
        array(
            'id'       => 'masorny_num_posts',
            'type'     => 'text',
            'title'    => esc_html__( 'Masonry Blog Template', 'houzez-child' ),
            'subtitle' => esc_html__( 'Number of posts to display on the Masonry blog pages', 'houzez-child' ),
            'desc'     => esc_html__( 'Enter the number of posts', 'houzez-child' ),
            'default'  => '12'
        ),
        array(
            'id'       => 'blog_featured_image',
            'type'     => 'switch',
            'title'    => esc_html__( 'Featured Image', 'houzez-child' ),
            'desc'     => esc_html__( 'Enable or disable the featured image', 'houzez-child' ),
            'subtitle' => esc_html__( 'Displayed on the single post page', 'houzez-child' ),
            'default'  => 1,
            'on'       => 'Enabled',
            'off'      => 'Disabled',
        ),

        array(
            'id'       => 'blog_date',
            'type'     => 'switch',
            'title'    => esc_html__( 'Post Date', 'houzez-child' ),
            'desc'     => esc_html__( 'Enable or disable the post date', 'houzez-child' ),
            'subtitle' => esc_html__( 'Displayed on the blog, archive and single post page', 'houzez-child' ),
            'default'  => 1,
            'on'       => 'Enabled',
            'off'      => 'Disabled',
        ),

        array(
            'id'       => 'blog_author',
            'type'     => 'switch',
            'title'    => esc_html__( 'Posts Author', 'houzez-child' ),
            'desc'     => esc_html__( 'Enable or disable the post author', 'houzez-child' ),
            'subtitle' => esc_html__( 'Displayed on the blog, archive and single post page', 'houzez-child' ),
            'default'  => 1,
            'on'       => 'Enabled',
            'off'      => 'Disabled',
        ),

        array(
            'id'       => 'blog_tags',
            'type'     => 'switch',
            'title'    => esc_html__( 'Tags', 'houzez-child' ),
            'default'  => 1,
            'on'       => 'Enabled',
            'off'      => 'Disabled',
        ),

        array(
            'id'       => 'blog_author_box',
            'type'     => 'switch',
            'title'    => esc_html__( 'Author Box', 'houzez-child' ),
            'desc'     => esc_html__( 'Enable or disable the author box', 'houzez-child' ),
            'subtitle' => esc_html__( 'Displayed on the single post page', 'houzez-child' ),
            'default'  => 1,
            'on'       => 'Enabled',
            'off'      => 'Disabled',
        ),
        array(
            'id'       => 'blog_next_prev',
            'type'     => 'switch',
            'title'    => esc_html__( 'Next/Prev Post', 'houzez-child' ),
            'default'  => 1,
            'on'       => 'Enabled',
            'off'      => 'Disabled',
        ),
        array(
            'id'       => 'blog_related_posts',
            'type'     => 'switch',
            'title'    => esc_html__( 'Related Posts', 'houzez-child' ),
            'default'  => 1,
            'on'       => 'Enabled',
            'off'      => 'Disabled',
        ),

    ),
));