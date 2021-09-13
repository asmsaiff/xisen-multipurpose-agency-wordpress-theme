<?php
    // Miscellaneous Page
    Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'Miscellaneous', $xisen_textdomain ),
        'id'     => 'xisen_miscellaneous',
        'icon'   => 'el el-random',
        'fields' => array(
            array(
                'id'    => 'info_success',
                'type'  => 'info',
                'style' => 'success',
                'title' => __('Miscellaneous', $xisen_textdomain),
                'icon'  => 'el el-network',
            ),
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'         => esc_html__( 'Social Links', $xisen_textdomain ),
        'id'            => 'xisen_social_links',
        // 'icon'       => 'el el-random',
        'subsection'    => true,
        'fields' => array(
            array(
                'id'        =>  'xisen_facebook',
                'type'      =>  'text',
                'title'     =>  __('Facebook', $xisen_textdomain),
            ),
            array(
                'id'        =>  'xisen_linkedin',
                'type'      =>  'text',
                'title'     =>  __('LinkedIn', $xisen_textdomain),
            ),
            array(
                'id'        =>  'xisen_twitter',
                'type'      =>  'text',
                'title'     =>  __('Twitter', $xisen_textdomain),
            ),
            array(
                'id'        =>  'xisen_pinterest',
                'type'      =>  'text',
                'title'     =>  __('Pinterest', $xisen_textdomain),
            ),
            array(
                'id'        =>  'xisen_instagram',
                'type'      =>  'text',
                'title'     =>  __('Instagram', $xisen_textdomain),
            ),
            array(
                'id'        =>  'xisen_youtube',
                'type'      =>  'text',
                'title'     =>  __('Youtube', $xisen_textdomain),
            ),
        )
    ) );