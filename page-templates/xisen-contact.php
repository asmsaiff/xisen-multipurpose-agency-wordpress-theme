<?php
    /**
     * Template Name: Contact Us Minimal
     */

     get_header();

     the_post();
?>
<main>
    <?php get_template_part('template-parts/common/page', 'header'); ?>

    <!-- Start Contact Area -->
    <section class="contact-area pt-140 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5 offset-xl-1">
                    <div class="contact-info-2 mb-30">
                        <div class="section-title-5 mb-20">
                            <span>
                                <?php echo get_xisen_redux_data('contact_page_form_section_subtitle'); ?>
                            </span>
                            <h2>
                                <?php echo get_xisen_redux_data('contact_page_form_section_title'); ?>
                            </h2>
                        </div>
                        <p>
                            <?php echo get_xisen_redux_data('contact_page_form_section_short_desc'); ?>
                        </p>
                        <div class="contact-social mt-30">
                            <a class="fb" href="#" target="_blank" data-toggle="tooltip" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                            <a class="ld" href="#" target="_blank" data-toggle="tooltip" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
                            <a class="tw" href="#" target="_blank" data-toggle="tooltip" title="Twitter"><i class="fab fa-twitter"></i></a>
                            <a class="pin" href="#" target="_blank" data-toggle="tooltip" title="Pinterest"><i class="fab fa-pinterest-p"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7">
                    <div class="contact-form mb-30">
                            <?php echo do_shortcode(get_field('contact_form_shortcode')); ?>
                        <p class="ajax-response"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- End Contact Area -->
<!-- Star Contact Map -->
    <section class="contact-map">
        <?php echo get_xisen_redux_data('contact_page_map'); ?>
    </section>
</main>

<?php
    get_footer();