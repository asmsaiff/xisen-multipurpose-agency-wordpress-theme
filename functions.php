<?php
    require_once(get_theme_file_path( '/inc/xisen-required-plugins.php' ));

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

        $locations = array(
            'main_menu'             =>  __('Primary Menu', 'xisen'),
        );
        register_nav_menus($locations);
    }
    add_action( 'after_setup_theme', 'xisen_theme_setup' );

    function xisen_assets_enqueue() {
        //Style Enqueue
        wp_enqueue_style('aos-css', get_template_directory_uri().'/assets/css/aos.css');
        wp_enqueue_style('slick-css', get_template_directory_uri().'/assets/css/slick.css');
        wp_enqueue_style('magnific-popup-css', get_template_directory_uri().'/assets/css/magnific-popup.css');
        wp_enqueue_style('slicknav-css', get_template_directory_uri().'/assets/css/slicknav-1.0.10.min.css');
        wp_enqueue_style('animate-css', get_template_directory_uri().'/assets/css/animate.min.css');
        wp_enqueue_style('custom-animation-css', get_template_directory_uri().'/assets/css/custom-animation.css');
        wp_enqueue_style('owl-carousel-css', get_template_directory_uri().'/assets/css/owl.carousel-2.3.4.min.css');
        wp_enqueue_style('fontawesome-css', get_template_directory_uri().'/assets/css/fontawesome-free-5.12.0.min.css');
        wp_enqueue_style('themify-icons-css', get_template_directory_uri().'/assets/css/themify-icons.css');
        wp_enqueue_style('bootstrap-css', get_template_directory_uri().'/assets/css/bootstrap-4.3.1.min.css');
        wp_enqueue_style('default-css', get_template_directory_uri().'/assets/css/default.css');
        wp_enqueue_style('main-css', get_template_directory_uri().'/assets/css/main.css');
        wp_enqueue_style('responsive-css', get_template_directory_uri().'/assets/css/responsive.css');
        wp_enqueue_style('theme-css', get_stylesheet_uri());

        //JS Enqueue
        wp_enqueue_script('popper-js', get_template_directory_uri().'/assets/js/popper.min.js', null, time(), true);
        wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/assets/js/bootstrap-4.3.1.min.js', null, time(), true);
        wp_enqueue_script('plugins-js', get_template_directory_uri().'/assets/js/plugins.js', array('jquery'), time(), true);
        wp_enqueue_script('modernizr-js', get_template_directory_uri().'/assets/js/vendor/modernizr-3.5.0.min.js', null, time(), true);
        wp_enqueue_script('owl-carousel-js', get_template_directory_uri().'/assets/js/vendor/owl.carousel-2.3.4.min.js', array('jquery'), time(), true);
        wp_enqueue_script('waypoints-js', get_template_directory_uri().'/assets/js/vendor/waypoints-4.0.1.min.js', array('jquery'), time(), true);
        wp_enqueue_script('wow-js', get_template_directory_uri().'/assets/js/vendor/wow-1.1.3.min.js', array('jquery'), time(), true);
        wp_enqueue_script('slicknav-js', get_template_directory_uri().'/assets/js/vendor/slicknav-1.0.10.min.js', null, time(), true);
        wp_enqueue_script('scrollUp-js', get_template_directory_uri().'/assets/js/vendor/scrollUp-2.4.1.min.js', null, time(), true);
        wp_enqueue_script('ajax-form-js', get_template_directory_uri().'/assets/js/vendor/ajax-form.js', array('jquery'), time(), true);
        wp_enqueue_script('magnific-popup-js', get_template_directory_uri().'/assets/js/vendor/magnific-popup-1.1.0.min.js', array('jquery'), time(), true);
        wp_enqueue_script('slick-js', get_template_directory_uri().'/assets/js/vendor/slick.min.js', array('jquery'), time(), true);
        wp_enqueue_script('imagesloaded-js', get_template_directory_uri().'/assets/js/vendor/imagesloaded.pkgd-4.1.4.min.js', null, time(), true);
        wp_enqueue_script('isotope-js', get_template_directory_uri().'/assets/js/vendor/isotope.pkgd-3.0.5.min.js', null, time(), true);
        wp_enqueue_script('aos-js', get_template_directory_uri().'/assets/js/vendor/aos.js', array('jquery'), time(), true);
        wp_enqueue_script('main-js', get_template_directory_uri().'/assets/js/main.js', array('jquery'), time(), true);
    }
    add_action( 'wp_enqueue_scripts', 'xisen_assets_enqueue' );