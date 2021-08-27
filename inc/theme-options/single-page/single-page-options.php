<?php
    // Single Page
    Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'Page', 'xisen' ),
        'id'     => 'xisen_page',
        'desc'   => esc_html__( 'Single page options', $xisen_textdomain ),
        'icon'   => 'el el-th-large',
        'fields' => array(
            array(
                'id'       => 'page_header_bg',
                'type'     => 'color',
                'title'    => __('Color', $opt_name), 
                'subtitle' => __('Page Header Background Color (default: #f0f9ff).', $xisen_textdomain),
                'default'  => '#f0f9ff',
                'validate' => 'color',
			),
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'FAQ Page', 'xisen' ),
        'id'     => 'faq_page',
        'desc'   => esc_html__( 'Single page options', $xisen_textdomain ),
        // 'icon'   => 'el el-th-large',
        'subsection'    =>  true,
        'fields' => array(
            array(
                'id'           => 'faq_page_raw_texts',
                'type'         => 'raw',
                'title'        => __('FAQ Page', $opt_name),
                'desc'         => __('This is the description field for additional info.', $opt_name),
            ),

            array(
                'id'        =>  'faq_page_under_header_title',
                'type'      =>  'text',
                'title'     =>  __('Heading', $opt_name), 
                'subtitle'  =>  __('Under Page Header Section Heading Text', $xisen_textdomain),
            ),
            array(
                'id'        =>  'faq_page_under_header_short_desc',
                'type'      =>  'textarea',
                'rows'      =>  2,
                'title'     =>  __('Short Description', $opt_name), 
                'subtitle'  =>  __('Write a short description about FAQ page', $xisen_textdomain),
            ),
        )
    ) );