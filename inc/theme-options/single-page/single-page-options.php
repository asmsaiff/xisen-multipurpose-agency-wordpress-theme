<?php
    // Single Page
    Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'Single Page', 'xisen' ),
        'id'     => 'single_page',
        'desc'   => esc_html__( 'Home page testimonial slider section', $xisen_textdomain ),
        'icon'   => 'el el-th-large',
        'fields' => array(
            array(
                'id'       => 'single_page_header_bg',
                'type'     => 'color',
                'title'    => __('Color', 'redux-framework-demo'), 
                'subtitle' => __('Single Page Header Background Color (default: #f0f9ff).', $xisen_textdomain),
                'default'  => '#f0f9ff',
                'validate' => 'color',
			),
        )
    ) );