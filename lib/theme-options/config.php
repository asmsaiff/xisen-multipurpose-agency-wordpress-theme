<?php
	if ( ! class_exists( 'Redux' ) ) {
        return;
    }

	$opt_name = 'xisen_options';
	$xisen_textdomain = 'xisen';
	$theme = wp_get_theme();

	$args = array(
		'display_name'         => $theme->get( 'Name' ),
		'display_version'      => $theme->get( 'Version' ),
		'menu_title'           => esc_html__( 'Xisen Options', $xisen_textdomain ),
		'customizer'           => true,
	);
	
	Redux::setArgs( $opt_name, $args );

    Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'Home Page', 'xisen' ),
        'id'     => 'basic',
        'desc'   => esc_html__( 'Basic fields.', $xisen_textdomain ),
        'icon'   => 'el el-home',
        'fields' => array(
            array(
                'id'       => 'opt-text',
                'type'     => 'text',
                'title'    => esc_html__( 'Example Text', $xisen_textdomain ),
                'desc'     => esc_html__( 'Example description.', $xisen_textdomain ),
                'subtitle' => esc_html__( 'Example subtitle.', $xisen_textdomain ),
                'hint'     => array(
                    'content' => 'This is a hint tool-tip for the text field.<br/><br/>Add any HTML based text you like here.',
                )
            )
        )
    ) );