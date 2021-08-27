<?php
    get_header();

    the_post();
?>

<main>
<!-- Start Breadcrumb Area -->
    <section class="breadcrumb-area position-relative pt-90 pb-60 fix" data-background="assets/img/bg/page-title-bg.jpg" style="background: <?php echo get_xisen_redux_data('single_page_header_bg'); ?>;">
        <div class="shape-action">
            <img class="shape shape-2" src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/shape2.png" alt="">
            <img class="shape shape-4" src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/shape3.png" alt="">
            <img class="shape shape-5" src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/shape-sq.png" alt="">
            <img class="shape shape-6" src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/shape-c-2.png" alt="">
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-title mb-30">
                        <h4><?php the_title(); ?></h4>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="breadcrumb-list text-md-right mb-30">
                        <ul>
                            <li><a href="index.html"><i class="fas fa-home"></i> Home</a></li>
                            <li class="active">FAQs</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- End Breadcrumb Area -->
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