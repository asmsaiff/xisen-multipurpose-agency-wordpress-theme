<?php
    Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'Home Page', 'xisen' ),
        'id'     => 'basic',
        'icon'   => 'el el-home',
        'fields' => array(
            array(
                'id'       => 'opt-text',
                'type'     => 'text',
                'title'    => esc_html__( 'Disable Section', $xisen_textdomain ),
                'desc'     => esc_html__( 'Check if you want to hide this section.', $xisen_textdomain ),
            ),
        )
    ) );

	Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'Hero Section', 'xisen' ),
        'id'     => 'basic2',
        'desc'   => esc_html__( 'Homepage top section', $xisen_textdomain ),
        // 'icon'   => 'el el-th-large',
		'subsection'	=>	true,
        'fields' => array(
            array(
                'id'       => 'hero_title',
                'type'     => 'text',
                'title'    => esc_html__( 'Hero Title', $xisen_textdomain ),
                'desc'     => esc_html__( 'Homepage Hero Section Heading', $xisen_textdomain ),
                'hint'     => array(
                    'content' => 'This is a hint tool-tip for the text field.<br/><br/>Add any HTML based text you like here.',
                )
			),
        )
    ) );