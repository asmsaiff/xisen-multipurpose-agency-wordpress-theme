<?php
    /**
     * Template Name: Portfolio
     */

    get_header();
?>

<main>
    <?php get_template_part('template-parts/common/page', 'header'); ?>
    <!-- Start Portfolio Area -->
        <section class="portfolio-area pt-100 pb-100">
            <div class="container">
                <div class="row text-center">
                    <div class="col-12">
                        <div class="portfolio-menu mb-40">
                            <button class="active" data-filter="*">all</button>
                            <?php
                                $terms = get_terms( array(
                                    'taxonomy' => 'xisen_portfolio_category',
                                    'hide_empty' => false,
                                ) );

                                foreach ($terms as $term) {
                                    echo '<button data-filter=".' . $term->slug . '">' . $term->name . '</button>';
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="row grid">
                    <div class="col-lg-4 col-md-6 grid-item text-center cat4 cat2">
                        <div class="single-portfolio mb-30">
                            <div class="portfolio-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/01.jpg" alt="">
                            </div>
                            <div class="portfolio-text">
                                <div class="portfolio-view">
                                    <a class="popup-img" href="assets/img/portfolio/01.jpg" ><i class="ti-plus"></i></a>
                                </div>
                                <h3><a href="#">Creative Design</a></h3>
                                <span>Digital Art</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-item text-center cat3 cat4">
                        <div class="single-portfolio mb-30">
                            <div class="portfolio-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/02.jpg" alt="">
                            </div>
                            <div class="portfolio-text">
                                <div class="portfolio-view">
                                    <a class="popup-img" href="assets/img/portfolio/02.jpg" ><i class="ti-plus"></i></a>
                                </div>
                                <h3><a href="#">Creative Design</a></h3>
                                <span>Digital Art</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-item text-center cat3 cat1">
                        <div class="single-portfolio mb-30">
                            <div class="portfolio-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/03.jpg" alt="">
                            </div>
                            <div class="portfolio-text">
                                <div class="portfolio-view">
                                    <a class="popup-img" href="assets/img/portfolio/03.jpg" ><i class="ti-plus"></i></a>
                                </div>
                                <h3><a href="#">Creative Design</a></h3>
                                <span>Digital Art</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-item text-center cat1 cat2">
                        <div class="single-portfolio mb-30">
                            <div class="portfolio-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/04.jpg" alt="">
                            </div>
                            <div class="portfolio-text">
                                <div class="portfolio-view">
                                    <a class="popup-img" href="assets/img/portfolio/04.jpg" ><i class="ti-plus"></i></a>
                                </div>
                                <h3><a href="#">Creative Design</a></h3>
                                <span>Digital Art</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-item text-center cat2 cat1">
                        <div class="single-portfolio mb-30">
                            <div class="portfolio-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/05.jpg" alt="">
                            </div>
                            <div class="portfolio-text">
                                <div class="portfolio-view">
                                    <a class="popup-img" href="assets/img/portfolio/05.jpg" ><i class="ti-plus"></i></a>
                                </div>
                                <h3><a href="#">Creative Design</a></h3>
                                <span>Digital Art</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-item text-center cat2 cat4">
                        <div class="single-portfolio mb-30">
                            <div class="portfolio-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/06.jpg" alt="">
                            </div>
                            <div class="portfolio-text">
                                <div class="portfolio-view">
                                    <a class="popup-img" href="assets/img/portfolio/06.jpg" ><i class="ti-plus"></i></a>
                                </div>
                                <h3><a href="#">Creative Design</a></h3>
                                <span>Digital Art</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-item text-center cat1 cat3">
                        <div class="single-portfolio mb-30">
                            <div class="portfolio-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/07.jpg" alt="">
                            </div>
                            <div class="portfolio-text">
                                <div class="portfolio-view">
                                    <a class="popup-img" href="assets/img/portfolio/07.jpg" ><i class="ti-plus"></i></a>
                                </div>
                                <h3><a href="#">Creative Design</a></h3>
                                <span>Digital Art</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-item text-center cat2 cat3">
                        <div class="single-portfolio mb-30">
                            <div class="portfolio-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/08.jpg" alt="">
                            </div>
                            <div class="portfolio-text">
                                <div class="portfolio-view">
                                    <a class="popup-img" href="assets/img/portfolio/08.jpg" ><i class="ti-plus"></i></a>
                                </div>
                                <h3><a href="#">Creative Design</a></h3>
                                <span>Digital Art</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 grid-item text-center cat1 cat2">
                        <div class="single-portfolio mb-30">
                            <div class="portfolio-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/09.jpg" alt="">
                            </div>
                            <div class="portfolio-text">
                                <div class="portfolio-view">
                                    <a class="popup-img" href="assets/img/portfolio/09.jpg" ><i class="ti-plus"></i></a>
                                </div>
                                <h3><a href="#">Creative Design</a></h3>
                                <span>Digital Art</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- End Portfolio Area -->
    </main>

<?php
    get_footer();