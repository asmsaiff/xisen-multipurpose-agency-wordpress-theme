<?php
    // Miscellaneous Page
    Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'Footer', $xisen_textdomain ),
        'id'     => 'xisen_footer_area',
        'icon'   => 'el el-th-large',
        'fields' => array(
            array(
                'id'    => 'info_success',
                'type'  => 'info',
                'style' => 'success',
                'title' => __('Footer', $xisen_textdomain),
            ),
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'         => esc_html__( 'Left First Widget Area', $xisen_textdomain ),
        'id'            => 'xisen_footer_left_first',
        // 'icon'       => 'el el-random',
        'subsection'    => true,
        'fields' => array(
            array(
                'id'        =>  'footer_left_first_widget_logo',
                'type'      =>  'media',
                'url'       =>  true,
                'title'     =>  __('Logo', $xisen_textdomain),
            ),

            array(
                'id'        =>  'footer_left_first_widget_short_desc',
                'type'      =>  'textarea',
                'rows'      =>  3,
                'title'     =>  __('Logo', $xisen_textdomain),
            ),
        )
    ) );