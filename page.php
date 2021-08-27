<?php
    get_header();

    the_post();
?>

<main>
<?php get_template_part('template-parts/common/page', 'header'); ?>

<!-- Start FAQ Area -->
    <section class="faq-area-inner pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <div class="faq-wrapper-inner mb-130">
                        <?php
                            if(has_post_thumbnail()) {
                                the_post_thumbnail('large', array('class'=>'img-fluid mb-5'));
                            }

                            the_content();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- End FAQ Area -->
<!-- Start FAQ Form -->
    <?php
        if(get_field('contact_form_shortcode')) :
    ?>
    <section class="faq-form">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-5 mb-50">
                        <span>Contact us</span>
                        <h2>Do You Have Any Questions</h2>
                    </div>
                    
                    <div class="faq-form">
                        <form action="">
                            <?php echo do_shortcode(get_field('contact_form_shortcode')); ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>
<!-- End FAQ Form -->
</main>

<?php
    get_footer();