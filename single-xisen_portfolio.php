<?php
    get_header();
    the_post();
?>

<main>
    <?php get_template_part('template-parts/common/page', 'header'); ?>
    <!-- Start Portfolio Area -->
        <section class="portfolio-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 order-lg-2">
                        <div class="portfolio-details mb-40">
                            <?php the_content(); ?>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="portfolio-list-info mb-30">
                            <ul>
                                <li>
                                    <div class="portfolio-list-text">
                                        <h5>Client</h5>
                                        <span>Futura</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="portfolio-list-text">
                                        <h5>Services</h5>
                                        <span>Branding</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="portfolio-list-text">
                                        <h5>Website</h5>
                                        <span><a href="https://www.itanvir.net">www.itanvir.net</a></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="social-button mb-40">
                            <h5>Share</h5>
                            <div class="social-share">
                                <a href="#" class="btn-social" data-toggle="tooltip" title="Share on Facebook"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="btn-social" data-toggle="tooltip" title="Share on Twitter"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="btn-social" data-toggle="tooltip" title="Share on Pinterest"><i class="fab fa-pinterest"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- End Portfolio Area -->
    <!-- Start Details Pagination -->
        <div class="details-pagination">
            <div class="container">
                <div class="row">
                    <div class="col-5">
                        <a href="portfolio-single-4.html" class="p-nav-item" data-toggle="tooltip" title="Portfolio Single 4">
                            <div class="p-nav-title">
                                <h3>prev</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-2 text-center">
                        <a href="portfolio.html" data-toggle="tooltip" title="Back To Portfolio">
                            <div class="p-nav-title">
                                <i class="fas fa-grip-horizontal"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col-5 text-right">
                        <a href="portfolio-single-2.html" class="p-nav-item"  data-toggle="tooltip" title="Portfolio Single 2">
                            <div class="p-nav-title">
                                <h3>Next</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    <!-- End Details Pagination -->

    <section class="portfolio-area pt-100 pb-110">
        <div class="container">
            <div class="row portfolio-slider-active">
                <div class="col-12">
                    <div class="single-portfolio">
                        <div class="portfolio-img grad-overlay">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/m-01.jpg" alt="">
                            <div class="port-view">
                                <a class="popup-img" href="assets/img/portfolio/m-01.jpg"><i class="fas fa-search"></i></a>
                                <a class="port-link" href="portfolio-single-1.html"><i class="fas fa-link"></i></a>
                                <h3>Architecture</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="single-portfolio">
                        <div class="portfolio-img grad-overlay">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/m-02.jpg" alt="">
                            <div class="port-view">
                                <a class="popup-img" href="assets/img/portfolio/m-02.jpg"><i class="fas fa-search"></i></a>
                                <a class="port-link" href="portfolio-single-1.html"><i class="fas fa-link"></i></a>
                                <h3>Mobile Apps</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="single-portfolio">
                        <div class="portfolio-img grad-overlay">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/m-03.jpg" alt="">
                            <div class="port-view">
                                <a class="popup-img" href="assets/img/portfolio/m-03.jpg"><i class="fas fa-search"></i></a>
                                <a class="port-link" href="portfolio-single-1.html"><i class="fas fa-link"></i></a>
                                <h3>Cube House</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="single-portfolio">
                        <div class="portfolio-img grad-overlay">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/m-04.jpg" alt="">
                            <div class="port-view">
                                <a class="popup-img" href="assets/img/portfolio/m-04.jpg"><i class="fas fa-search"></i></a>
                                <a class="port-link" href="portfolio-single-1.html"><i class="fas fa-link"></i></a>
                                <h3>Parkson Hill Office</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="single-portfolio">
                        <div class="portfolio-img grad-overlay">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/m-05.jpg" alt="">
                            <div class="port-view">
                                <a class="popup-img" href="assets/img/portfolio/m-05.jpg"><i class="fas fa-search"></i></a>
                                <a class="port-link" href="portfolio-single-1.html"><i class="fas fa-link"></i></a>
                                <h3>Book Musem</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="single-portfolio">
                        <div class="portfolio-img grad-overlay">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/m-06.jpg" alt="">
                            <div class="port-view">
                                <a class="popup-img" href="assets/img/portfolio/m-06.jpg"><i class="fas fa-search"></i></a>
                                <a class="port-link" href="portfolio-single-1.html"><i class="fas fa-link"></i></a>
                                <h3>Liquid Bottle</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
    get_footer();