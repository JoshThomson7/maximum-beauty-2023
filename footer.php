<footer class="footer" role="contentinfo">

    <div class="max__width">

        <div class="footer-cols">

            <?php
            while (have_rows('footer_menus', 'options')) : the_row();

                $footer_menu = get_sub_field('footer_menu');
                $footer_menu_2 = get_sub_field('footer_menu_2');
            ?>
                <div class="footer-col">

                    <?php if ($footer_menu) : ?>
                        <div class="footer-menu">
                            <div class="footer-menu__heading">
                                <h5><?php echo $footer_menu->name; ?></h5>
                                <span class="menu-dropdown"><i class="fas fa-chevron-down"></i></span>
                            </div>
                            <div class="footer-menu__items">
                                <?php wp_nav_menu(array('menu' => $footer_menu->name, 'container' => false)); ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if ($footer_menu_2) : ?>
                        <div class="footer-menu footer-menu--2">
                            <div class="footer-menu__heading">
                                <h5><?php echo $footer_menu_2->name; ?></h5>
                                <span class="menu-dropdown"><i class="fas fa-chevron-down"></i></span>
                            </div>
                            <div class="footer-menu__items">
                                <?php wp_nav_menu(array('menu' => $footer_menu_2->name, 'container' => false)); ?>
                            </div>
                        </div>
                    <?php endif; ?>

                </div>

            <?php endwhile; ?>

            <div class="footer-col footer-col--main">
                <div class="footer-menu footer-menu--company"> 

                    <!-- <figure>
                        <img src="<?php echo esc_url(get_stylesheet_directory_uri().'/img/max-beauty-logo.png'); ?>" alt="<?php bloginfo('name'); ?>"/>
                    </figure> -->

                    <div class="footer-menu__heading">
                        <h5>Connect</h5>
                        <span class="menu-dropdown"><i class="fas fa-chevron-down"></i></span>
                    </div>

                    <ul>
                        <li>105 High Street,<br>Old Town,<br>Stevenage,<br>Hertfordshire,<br>SG1 3HR</li>
                        
                        <li class="social">
                            <a href="#" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="subfooter">
            <div class="subfooter--left">
                <small>&copy;<?php date('Y'); ?> <?php bloginfo('name') ?>. All Rights Reserved.<br>
                Registered No. 1234567.</small>
            </div><!-- subfooter--left -->

            <div class="subfooter--right">
                <small><a href="https://thomson-website-solutions.com/" target="_blank">Website by Thomson Website Solutions</a></small>
            </div><!-- subfooter--left -->
        </div><!-- subfooter -->
</footer>

</div><!-- #page -->

<?php wp_footer(); ?>
</body>

</html>