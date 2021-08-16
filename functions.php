<?php
    function xisen_theme_setup() {
        // Theme TextDomain
        load_theme_textdomain('xisen');

        // Theme Supports
        add_theme_support('title');
        add_theme_support('description');
        add_theme_support('custom-header');
        add_theme_support('custom-logo');
        add_theme_support('custom-background');
        add_theme_support('menus');
        add_theme_support('widgets');
        add_theme_support('post-thumbnails');
        add_theme_support('post-formats', array('aside', 'image', 'gallery', 'audio', 'video', 'link', 'status', 'quote', 'chat'));
    }
    add_action( 'after_setup_theme', 'xisen_theme_setup' );