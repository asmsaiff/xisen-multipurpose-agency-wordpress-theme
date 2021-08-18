<?php
    Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'Home Page', 'xisen' ),
        'id'     => 'basic',
        'icon'   => 'el el-home',
        'fields' => array(
            array(
                'id'       => 'opt-text',
                'type'     => 'checkbox',
                'title'    => esc_html__( 'Disable Section', $xisen_textdomain ),
                'desc'     => esc_html__( 'Check if you want to hide this section.', $xisen_textdomain ),
            ),
        )
    ) );

	Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'Hero Section', 'xisen' ),
        'id'     => 'home_hero',
        'desc'   => esc_html__( 'Homepage top section', $xisen_textdomain ),
        // 'icon'   => 'el el-th-large',
		'subsection'	=>	true,
        'fields' => array(
            array(
                'id'       => 'hero_title',
                'type'     => 'text',
                'title'    => esc_html__( 'Hero Title', $xisen_textdomain ),
                'desc'     => esc_html__( 'Homepage Hero Section Heading', $xisen_textdomain ),
			),
            array(
                'id'       => 'hero_short_desc',
                'type'     => 'textarea',
                'rows'      =>  2,
                'title'    => esc_html__( 'Hero Short Description', $xisen_textdomain ),
                'desc'     => esc_html__( 'Homepage Hero Section Short Description', $xisen_textdomain ),
			),
            array(
                'id'       => 'hero_section_button_label',
                'type'     => 'text',
                'title'    => esc_html__( 'Button Label', $xisen_textdomain ),
                'desc'     => esc_html__( 'Homepage Hero Section Button Label', $xisen_textdomain ),
			),
            array(
                'id'       => 'hero_section_button_url',
                'type'     => 'text',
                'title'    => esc_html__( 'Button Link', $xisen_textdomain ),
                'desc'     => esc_html__( 'Homepage Hero Section Button URL', $xisen_textdomain ),
			),
            array(
                'id'        => 'hero_section_img',
                'type'      => 'media',
                'url'       =>  true,
                'title'     => esc_html__( 'Image', $xisen_textdomain ),
                'desc'      => esc_html__( 'Homepage Hero Section Image', $xisen_textdomain ),
			),
        )
    ) );