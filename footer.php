    <footer class="footer-bg" data-background="assets/img/bg/footer-bg.png">
        <div class="footer-top pt-140 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="footer-widget mb-40">
                            <div class="footer-logo mb-30">
                                <a href="index.html">
                                    <img src="<?php global $xisen_options; echo $xisen_options['footer_left_first_widget_logo']['url']; ?>" alt="">
                                </a>
                            </div>
                            <div class="footer-text">
                                <p>
                                    <?php echo get_xisen_redux_data('footer_left_first_widget_short_desc'); ?>
                                </p>
                            </div>
                            <div class="footer-social">
                                <?php if(get_xisen_redux_data('xisen_facebook')) : ?>
                                <a href="<?php echo get_xisen_redux_data('xisen_facebook'); ?>" data-target="_blank" data-toggle="tooltip" title="Facebook"><i class="fab fa-facebook-square"></i></a>
                                <?php endif; ?>

                                <?php if(get_xisen_redux_data('xisen_linkedin')) : ?>
                                <a href="<?php echo get_xisen_redux_data('xisen_linkedin'); ?>" data-target="_blank" data-toggle="tooltip" title="LinkedIn"><i class="fab fa-linkedin"></i></a>
                                <?php endif; ?>

                                <?php if(get_xisen_redux_data('xisen_twitter')) : ?>
                                <a href="<?php echo get_xisen_redux_data('xisen_twitter'); ?>" data-target="_blank" data-toggle="tooltip" title="Twitter"><i class="fab fa-twitter-square"></i></a>
                                <?php endif; ?>

                                <?php if(get_xisen_redux_data('xisen_pinterest')) : ?>
                                <a href="<?php echo get_xisen_redux_data('xisen_pinterest'); ?>" data-target="_blank" data-toggle="tooltip" title="Pinterest"><i class="fab fa-pinterest-square"></i></a>
                                <?php endif; ?>

                                <?php if(get_xisen_redux_data('xisen_instagram')) : ?>
                                <a href="<?php echo get_xisen_redux_data('xisen_instagram'); ?>" data-target="_blank" data-toggle="tooltip" title="Instagram"><i class="fab fa-instagram-square"></i></a>
                                <?php endif; ?>

                                <?php if(get_xisen_redux_data('xisen_youtube')) : ?>
                                <a href="<?php echo get_xisen_redux_data('xisen_youtube'); ?>" data-target="_blank" data-toggle="tooltip" title="Youtube"><i class="fab fa-youtube"></i></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-6">
                        <div class="footer-widget mb-40">
                            <h3><?php _e('About Us', 'xisen'); ?></h3>
                            <ul class="footer-links">
                                <li><a href="#">Managed Website</a></li>
                                <li><a href="#">Manage Reputation</a></li>
                                <li><a href="#">Power Tools</a></li>
                                <li><a href="#">Marketing Service</a></li>
                                <li><a href="#"> Customer Service</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-6">
                        <div class="footer-widget mb-40">
                            <h3><?php _e('Quick Links', 'xisen'); ?></h3>
                            <ul class="footer-links">
                                <li><a href="#">Store Hours</a></li>
                                <li><a href="#">Brand Assets</a></li>
                                <li><a href="#"> Investor Relations</a></li>
                                <li><a href="#">Terms of Service</a></li>
                                <li><a href="#">  Privacy & Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-6">
                        <div class="footer-widget mb-40">
                            <h3><?php _e('My Account', 'xisen'); ?></h3>
                            <ul class="footer-links">
                                <li><a href="#">Press Inquiries</a></li>
                                <li><a href="#">Media</a></li>
                                <li><a href="#">Directories</a></li>
                                <li><a href="#">Investor</a></li>
                                <li><a href="#"> Relations</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-6">
                        <div class="footer-widget mb-40">
                            <h3><?php _e('Resources', 'xisen'); ?></h3>
                            <ul class="footer-links">
                                <li><a href="#">Application Security</a></li>
                                <li><a href="#">Software Policy</a></li>
                                <li><a href="#">Supply Chain</a></li>
                                <li><a href="#"> Agencies Relation</a></li>
                                <li><a href="#">  Manage Reputation</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="copyright-border">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="copyright-text">
                                <span>Copyright © 2019 Xisen. All rights reserved</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="footer-menu text-left text-md-right">
                                <ul>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Tips &amp; Tricks</a></li>
                                    <li><a href="#">Service</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>