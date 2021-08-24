<?php
    get_header();

    if(have_posts()) {
        while(have_posts()) {
            the_post();

            woocommerce_content();
        }
    }

    get_footer();
?>