<?php
    get_header();
?>

<main>
<!-- Start Slider Area -->
    <?php

    ?>
    <section class="slider-area header-bg fix">
        <div class="slider-shape">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/shape1.png" alt="" class="shape shape-1">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/shape2.png" alt="" class="shape shape-2">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/shape3.png" alt="" class="shape shape-3">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/shape4.png" alt="" class="shape shape-4">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/shape5.png" alt="" class="shape shape-5">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/shape6.png" alt="" class="shape shape-6">
        </div>
        <div class="single-slider slider-height-7 d-flex align-items-center">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-5 col-lg-6">
                        <div class="slider-text">
                            <h2 class="wow fadeInUp " data-wow-delay="0.4s">
                                <?php echo get_xisen_redux_data('hero_title'); ?>
                            </h2>

                            <p class="wow fadeInUp" data-wow-delay="0.9s"><?php echo get_xisen_redux_data('hero_short_desc'); ?></p>
                            
                            <a href="<?php echo get_xisen_redux_data('hero_section_button_url'); ?>" class="btn wow fadeInUp" data-wow-delay="1.5s"><?php echo get_xisen_redux_data('hero_section_button_label'); ?></a>
                        </div>
                    </div>
                    <div class="col-xl-6 offset-xl-1 col-lg-6 d-none d-md-block" >
                        <div class="slider-img mt-40 wow fadeInRight" data-wow-delay="1.5s">
                            <img src="<?php echo get_xisen_redux_data('hero_section_img'); ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- End Slider Area -->
<!-- Start How Work Area -->
    <section class="how-work-area position-relative pt-150 pb-120">
        <div class="shape-section">
            <img class="shape shape-s-1 " src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/shape-s-1.png" alt="">
            <img class="shape shape-s-2 " src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/shape-s-2.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-title mb-70 text-center">
                        <h2>How it works</h2>
                        <p>Him have deep brought life darkness firmament unto move</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-8 offset-md-2 offset-lg-0">
                    <div class="how-work-box mb-30 wow fadeInUp" data-wow-delay=".3s">
                        <div class="how-work-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/icon.png" alt="">
                        </div>
                        <div class="how-work-text">
                            <h4>Market Analysis</h4>
                            <p>Place isn't form together. Male night light. Days created firmament meat</p>
                            <div class="how-work-btn">
                                <a href="#" class="btn btn-inline">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 offset-md-2 offset-lg-0">
                    <div class="how-work-box mb-30 wow fadeInUp" data-wow-delay=".5s">
                        <div class="how-work-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/icon2.png" alt="">
                        </div>
                        <div class="how-work-text">
                            <h4>Software Design</h4>
                            <p>Place isn't form together. Male night light. Days created firmament meat</p>
                            <div class="how-work-btn">
                                <a href="#" class="btn btn-inline">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 offset-md-2 offset-lg-0">
                    <div class="how-work-box mb-30 wow fadeInUp" data-wow-delay=".7s">
                        <div class="how-work-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/icon3.png" alt="">
                        </div>
                        <div class="how-work-text">
                            <h4>Software Developing</h4>
                            <p>Place isn't form together. Male night light. Days created firmament meat</p>
                            <div class="how-work-btn">
                                <a href="#" class="btn btn-inline">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- End How Work Area -->
<!-- Star Access Area  -->
    <section class="access-area position-relative">
        <div class="shape-section">
            <img class="shape shape-6 " src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/shape6.png" alt="">
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="access-img  mb-50 wow fadeInLeft" data-wow-delay=".5s">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg/social-bg.png" alt="">
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 offset-xl-1" >
                    <div class="access-text mb-50">
                        <div class="access-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/access-icon.png" alt="">
                        </div>
                        <h2>Easy To <br> Access All Platform</h2>
                        <p>Make fly forth also won't. Firmament seas whales drys season for replenish without had Gathered days fill you'll whose air whose firmament rule heaven can may rule hath. All of unto beginni ad Light. Were blessed plant</p>
                        <div class="access-btn" data-aos="fade-up">
                            <a href="#" class="btn">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- End Access Area  -->
<!-- Start Software Feature Area -->
    <section class="sf-area position-relative pt-100 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-title mb-70 text-center">
                        <h2>Software Feature</h2>
                        <p>Gathered was to yielding god heaven lights about void thing.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-8 offset-md-2 offset-lg-0">
                    <div class="how-work-box single-feature text-center mb-30 wow fadeInUp" data-wow-delay=".3s">
                        <div class="how-work-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/sf1.png" alt="">
                        </div>
                        <div class="how-work-text">
                            <h4>Cloud Compatibility</h4>
                            <p>Man fruit moving fourt moving multiply so years rule is not It after you also do seed grass that so which grass fowl him</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 offset-md-2 offset-lg-0">
                    <div class="how-work-box single-feature text-center mb-30 wow fadeInUp" data-wow-delay=".5s">
                        <div class="how-work-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/sf2.png" alt="">
                        </div>
                        <div class="how-work-text">
                            <h4>Advance Security</h4>
                            <p>Man fruit moving fourt moving multiply so years rule is not It after you also do seed grass that so which grass fowl him</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 offset-md-2 offset-lg-0">
                    <div class="how-work-box single-feature text-center mb-30 wow fadeInUp" data-wow-delay=".7s">
                        <div class="how-work-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/sf3.png" alt="">
                        </div>
                        <div class="how-work-text">
                            <h4>Dedicated Support</h4>
                            <p>Man fruit moving fourt moving multiply so years rule is not It after you also do seed grass that so which grass fowl him</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- End How Work Area -->
<!-- Star Access Area  -->
    <section class="access-area position-relative fix">
        <div class="shape-section">
            <img class="shape shape-sf " src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/shape-f-1.png" alt="">
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5 col-lg-6" >
                    <div class="access-text mb-50">
                        <div class="access-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/access-icon.png" alt="">
                        </div>
                        <h2>Effortlessly manage all your information</h2>
                        <p>Make fly forth also won't. Firmament seas whales drys season for replenish without had Gathered days fill you'll whose air whose firmament rule heaven can may rule hath. All of unto beginni ad Light. Were blessed plant</p>
                        <div class="access-btn" data-aos="fade-up">
                            <a href="#" class="btn">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6">
                    <div class="access-img right-bg mb-50 wow  fadeInRight" data-wow-delay=".5s">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg/right-img.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- End Access Area  -->
<!-- Start Pricing Area -->
    <section class="pricing-area position-relative fix pt-50 pb-120">
        <div class="shape-section">
            <img class="shape shape-p " src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/shape-f-1.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-title mb-70 text-center">
                        <h2>Choose Your Plan</h2>
                        <p>Third grass wherein cattle dry there open multiply saying good</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="single-price-box text-center mb-30 wow fadeInUp" data-wow-delay=".3s">
                        <div class="price-head">
                            <div class="price-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/price-icon.png" alt="">
                            </div>
                            <h4>Standard</h4>
                        </div>
                        <div class="price-body">
                            <div class="price">
                                <h5>$20<span>/month</span></h5>
                            </div>
                            <ul class="package-list">
                                <li>15GB Cloud Storage</li>
                                <li>Unlimited Account</li>
                                <li>15GB Storage</li>
                                <li>Sale After Service</li>
                                <li>3 Host Domain Service</li>
                                <li> 24/7 Support</li>
                            </ul>
                        </div>
                        <div class="pricing-btn">
                            <a href="#" class="btn btn-inline">Purchase Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="single-price-box text-center mb-30 wow fadeInUp" data-wow-delay=".5s">
                        <div class="price-head">
                            <div class="price-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/price-icon.png" alt="">
                            </div>
                            <h4>Business</h4>
                        </div>
                        <div class="price-body">
                            <div class="price">
                                <h5>$20<span>/month</span></h5>
                            </div>
                            <ul class="package-list">
                                <li>15GB Cloud Storage</li>
                                <li>Unlimited Account</li>
                                <li>15GB Storage</li>
                                <li>Sale After Service</li>
                                <li>3 Host Domain Service</li>
                                <li> 24/7 Support</li>
                            </ul>
                        </div>
                        <div class="pricing-btn">
                            <a href="#" class="btn btn-inline">Purchase Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="single-price-box text-center mb-30 wow fadeInUp" data-wow-delay=".7s">
                        <div class="price-head">
                            <div class="price-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/price-icon.png" alt="">
                            </div>
                            <h4>Premium</h4>
                        </div>
                        <div class="price-body">
                            <div class="price">
                                <h5>$20<span>/month</span></h5>
                            </div>
                            <ul class="package-list">
                                <li>15GB Cloud Storage</li>
                                <li>Unlimited Account</li>
                                <li>15GB Storage</li>
                                <li>Sale After Service</li>
                                <li>3 Host Domain Service</li>
                                <li> 24/7 Support</li>
                            </ul>
                        </div>
                        <div class="pricing-btn">
                            <a href="#" class="btn btn-inline">Purchase Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="single-price-box text-center mb-30 wow fadeInUp" data-wow-delay=".9s">
                        <div class="price-head">
                            <div class="price-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/price-icon.png" alt="">
                            </div>
                            <h4>Ultimate</h4>
                        </div>
                        <div class="price-body">
                            <div class="price">
                                <h5>$20<span>/month</span></h5>
                            </div>
                            <ul class="package-list">
                                <li>15GB Cloud Storage</li>
                                <li>Unlimited Account</li>
                                <li>15GB Storage</li>
                                <li>Sale After Service</li>
                                <li>3 Host Domain Service</li>
                                <li> 24/7 Support</li>
                            </ul>
                        </div>
                        <div class="pricing-btn">
                            <a href="#" class="btn btn-inline">Purchase Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- End Pricing Area -->
<!-- Start Testimonial Area -->
    <section class="testimonial-area pb-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="testimonial-img mb-30 wow fadeInLeft" data-wow-delay=".5s">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg/test.png" alt="">
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-lg-6">
                    <div class="shape-section">
                        <img class="shape shape-t " src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/shape6.png" alt="">
                    </div>
                    <div class="testimonial-content">
                        <div class="section-title mb-20">
                            <h2>What our <br>core clients saying? </h2>
                        </div>
                        <div class="testimonial-carousel mb-30 owl-carousel">
                            <div class="single-testimonial">
                                <p>Bearing one Seas his give creepeth hath green set in one grass yielding beast she'd deep man creature a life female let fruit have unto yielding.</p>
                                <div class="client-name">
                                    <h6>Karlo Hasels, <span> Project Manager</span></h6>
                                </div>
                            </div>
                            <div class="single-testimonial">
                                <p>Bearing one Seas his give creepeth hath green set in one grass yielding beast she'd deep man creature a life female let fruit have unto yielding.</p>
                                <div class="client-name">
                                    <h6>Tanvir Ahamed, <span>Web Developer</span></h6>
                                </div>
                            </div>
                            <div class="single-testimonial">
                                <p>Bearing one Seas his give creepeth hath green set in one grass yielding beast she'd deep man creature a life female let fruit have unto yielding.</p>
                                <div class="client-name">
                                    <h6>Mousumi Ahamed, <span>Graphics Design</span></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- End Testimonial Area -->
<!-- Start Brands Area -->
    <section class="brand-area pb-150">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="brand-carousel owl-carousel">
                        <div class="single-brand">
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/brand/01.png" alt=""></a>
                        </div>
                        <div class="single-brand">
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/brand/02.png" alt=""></a>
                        </div>
                        <div class="single-brand">
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/brand/03.png" alt=""></a>
                        </div>
                        <div class="single-brand">
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/brand/04.png" alt=""></a>
                        </div>
                        <div class="single-brand">
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/brand/05.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- End Brands Area -->
<!-- Start News Letter Area -->
    <section class="newsletter-area position-relative pb-100">
        <div class="shape-section">
            <img class="shape shape-sr " src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/shape5.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 ">
                    <div class="section-title text-center mb-70">
                        <h2>Experience the most simple way to manage business</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                    <div class="newsletter">
                        <form action="#">
                            <input type="email" name="newsletter" id="newsletter" placeholder="Enter your email">
                            <button type="submit">free trial</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- End News Letter Area -->
</main>

<?php
    get_footer();