<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
   <meta charset="<?php bloginfo('charset'); ?>">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="description" content="Xisen - Creative HTML5 Template for Saas, Startup & Agency">
   <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title><?php bloginfo( 'title' ); ?></title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/icon.png">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <!-- preloader  -->
        <div id="preloader">
            <div id="ctn-preloader" class="ctn-preloader">
                <div class="animation-preloader">
                    <div class="spinner"></div>
                    <div class="txt-loading">
                        <span data-text-preloader="X" class="letters-loading">
                            X
                        </span>
                        <span data-text-preloader="I" class="letters-loading">
                            I
                        </span>
                        <span data-text-preloader="S" class="letters-loading">
                            S
                        </span>
                        <span data-text-preloader="E" class="letters-loading">
                            E
                        </span>
                        <span data-text-preloader="N" class="letters-loading">
                            N
                        </span>
                    </div>
                </div>
                <div class="loader">
                    <div class="row">
                        <div class="col-3 loader-section section-left">
                            <div class="bg"></div>
                        </div>
                        <div class="col-3 loader-section section-left">
                            <div class="bg"></div>
                        </div>
                        <div class="col-3 loader-section section-right">
                            <div class="bg"></div>
                        </div>
                        <div class="col-3 loader-section section-right">
                            <div class="bg"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- preloader end -->
<!-- Start Header Area -->
    <header id="header-sticky" class="header-area header-absolute">
        <div class="container">
            <div class="header-wrapper">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-6">
                        <div class="site-logo">
                            <a href="<?php echo home_url(); ?>">
                                <?php if(current_theme_supports('custom-logo')) : the_custom_logo(); endif; ?>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 d-block d-lg-none static">
                        <div class="show-mobile-menu"></div>
                    </div>
                    <div class="col-lg-8 d-none d-lg-block static">
                        <nav>
                            <ul class="main-menu text-center" id="mobile-menu">
                                <li><a href="index.html">Home</a>
                                    <ul class="submenu">
                                        <li><a href="index.html">Home Version 1</a></li>
                                        <li><a href="index-2.html">Home Version 2</a></li>
                                        <li><a href="index-3.html">Home Version 3</a></li>
                                        <li><a href="index-4.html">Home Version 4</a></li>
                                        <li><a href="index-5.html">Home Version 5</a></li>
                                        <li><a href="index-6.html">Home Version 6</a></li>
                                        <li><a href="index-7.html">Home Version 7</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Page</a>
                                    <ul class="submenu">
                                        <li class="menu-children"><a href="about.html">About</a>
                                            <ul class="submenu">
                                                <li><a href="about.html">About Us 01</a></li>
                                                <li><a href="about-2.html">About Us 02</a></li>
                                            </ul>
                                        </li>
                                        <li  class="menu-children"><a href="services.html">services</a>
                                            <ul class="submenu">
                                                <li><a href="services.html">services 01</a></li>
                                                <li><a href="services-2.html">services 02</a></li>
                                                <li><a href="services-details.html">services details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="price.html">Pricing</a></li>
                                        <li><a href="faq.html">faq</a></li>
                                        <li class="menu-children"><a href="contact.html">Contact Us</a>
                                            <ul class="submenu">
                                                <li><a href="contact.html">Contact</a></li>
                                                <li><a href="contact-standart.html">contact standart</a></li>
                                                <li><a href="contact-minimal.html">contact minimal</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="process.html">Process</a></li>
                                        <li class="menu-children"><a href="team.html">team</a>
                                            <ul class="submenu">
                                                <li><a href="team.html">team 01</a></li>
                                                <li><a href="team-2.html">team 02</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="register.html">Register</a></li>
                                        <li><a href="coming-soon.html">Coming Soon</a></li>
                                        <li><a href="404.html">404 Error</a></li>
                                    </ul>
                                </li>
                                <li><a href="portfolio.html">Portfolio</a>
                                    <ul class="submenu">
                                        <li><a href="portfolio.html">Portfolio Grid 01</a></li>
                                        <li><a href="portfolio-2.html">Portfolio Grid 02</a></li>
                                        <li><a href="portfolio-3.html">Portfolio Grid 03</a></li>
                                        <li><a href="portfolio-full.html">Portfolio Grid full</a></li>
                                        <li><a href="portfolio-m.html">Portfolio Masonary</a></li>
                                        <li><a href="portfolio-m-2.html">Portfolio Masonary 02</a></li>
                                        <li><a href="portfolio-slider-full.html">Portfolio Slider Full</a></li>
                                        <li><a href="portfolio-slider-box.html">Portfolio Slider Box</a></li>
                                        <li><a href="portfolio-single-1.html">Portfolio Single 01</a></li>
                                        <li><a href="portfolio-single-2.html">Portfolio Single 02</a></li>
                                        <li><a href="portfolio-single-3.html">Portfolio Single 03</a></li>
                                        <li><a href="portfolio-single-4.html">Portfolio Single 04</a></li>
                                    </ul>
                                </li>
                                <li class="static"><a href="#">Elements</a>
                                    <ul class="row mega-menu">
                                        <div class="col-lg-3">
                                            <li class="mega-menu-title"><a href="javascript:void(0)">Elements 01</a>
                                                <ul class="mega-menu-inner">
                                                    <li><a href="elements-accordion.html">accordion</a></li>
                                                    <li><a href="elements-alerts.html">alerts</a></li>
                                                    <li><a href="elements-badges.html">badges</a></li>
                                                    <li><a href="elements-brand.html">brand logo</a></li>
                                                    <li><a href="elements-breadcrumbs.html">breadcrumbs</a></li>
                                                    <li><a href="elements-buttons.html">buttons</a></li>
                                                </ul>
                                            </li>
                                        </div>
                                        <div class="col-lg-3">
                                            <li class="mega-menu-title"><a href="javascript:void(0)">Elements 01</a>
                                                <ul class="mega-menu-inner">
                                                    <li><a href="elements-columns.html">columns</a></li>
                                                    <li><a href="elements-counter.html">counter</a></li>
                                                    <li><a href="elements-contact-form.html">contact form</a></li>
                                                    <li><a href="elements-cta.html">call to action</a></li>
                                                    <li><a href="elements-dropdowns.html">dropdowns</a></li>
                                                    <li><a href="elements-fancy-text.html">fancy text</a></li>
                                                </ul>
                                            </li>
                                        </div>
                                        <div class="col-lg-3">
                                            <li class="mega-menu-title"><a href="javascript:void(0)">Elements 03</a>
                                                <ul class="mega-menu-inner">
                                                    <li><a href="elements-footer.html">footer</a></li>
                                                    <li><a href="elements-gallery.html">gallery</a></li>
                                                    <li><a href="elements-lightbox.html">lightbox</a></li>
                                                    <li><a href="elements-page-titles.html">page titles</a></li>
                                                    <li><a href="elements-post.html">latest post</a></li>
                                                    <li><a href="elements-progressbar.html">progressbar</a></li>
                                                </ul>
                                            </li>
                                        </div>
                                        <div class="col-lg-3">
                                            <li class="mega-menu-title"><a href="javascript:void(0)">Elements 04</a>
                                                <ul class="mega-menu-inner">
                                                    <li><a href="elements-subscribe.html">subscribe</a></li>
                                                    <li><a href="elements-tabs.html">tabs</a></li>
                                                    <li><a href="elements-team.html">team</a></li>
                                                    <li><a href="elements-testimonials.html">Testimonials</a></li>
                                                    <li><a href="elements-tooltips.html">Tooltips</a></li>
                                                    <li><a href="elements-typography.html">typography</a></li>
                                                </ul>
                                            </li>
                                        </div>
                                    </ul>
                                </li>
                                <li><a href="blog.html">Blog</a>
                                    <ul class="submenu">
                                        <li><a href="blog.html">Blog right sidebar</a></li>
                                        <li><a href="blog-left-sidebar.html">Blog left sidebar</a></li>
                                        <li><a href="blog-no-sidebar.html">Blog no sidebar</a></li>
                                        <li><a href="blog-2-column.html">Blog tow column 01</a></li>
                                        <li><a href="blog-2-column-2.html">Blog tow column 02</a></li>
                                        <li><a href="blog-2-column-mas.html">Blog tow col Masonary</a></li>
                                        <li><a href="blog-3-column.html">Blog three column</a></li>
                                        <li><a href="blog-3-column-mas.html">Blog three col Masonary</a></li>
                                        <li><a href="blog-details.html">Blog Image Details</a></li>
                                        <li><a href="blog-details-audio.html">Blog Audio Details</a></li>
                                        <li><a href="blog-details-video.html">Blog Video Details</a></li>
                                        <li><a href="blog-details-gallery.html">Blog Gallery Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="shop.html">Shop</a>
                                    <ul class="submenu">
                                        <li><a href="shop.html">Shop Details</a></li>
                                        <li><a href="shop-list.html">Shop List</a></li>
                                        <li><a href="product-details.html">Product Details</a></li>
                                        <li><a href="cart.html">Shopping Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-2 d-none d-lg-block">
                        <div class="header-btn text-right">
                            <a href="#" class="btn border-btn">Sign up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
<!-- End Header Area -->