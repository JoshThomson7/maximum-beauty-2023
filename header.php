<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(' - ', true, 'right'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="format-detection" content="telephone=no">
    <?php wp_head(); ?>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.0/dist/chart.umd.min.js"></script>
</head>

<body <?php body_class(); ?>>

    <?php
    global $post;
    include get_stylesheet_directory() . '/modules/mega-menu-mobile.php';
    ?>

    <div id="page">
        <header class="header">

            <div class="header--site__wide__notice">
                <div class="max__width">
                    <p>We now have a new booking system! All customers using it for the first time need to register a new account to book.</p>
                </div>
            </div>

            <div class="header__main">

                <div class="max__width">

                    <div class="header__main--left">
                        <div class="logo">
                            <a href="<?php echo esc_url(home_url()); ?>" title="<?php bloginfo('name'); ?>">
                                <img src="<?php echo esc_url(get_stylesheet_directory_uri().'/img/maximum_beauty_logo_rgb.png'); ?>" alt="<?php bloginfo('name'); ?>"/>
                            </a>
                        </div><!-- logo -->

                        <?php include FL1_PATH . '/modules/mega-menu.php'; ?>

                    </div><!-- left -->

                    <div class="header__main--right">
                        <a href="#nav_mobile" class="burger__menu">
                            <i class="fal fa-bars"></i>
                        </a>

                        <nav class="top-nav">
                            <ul>
                                <li>
                                    <a href="https://online.premiersoftware.co.uk/Book-OnlineV2/?i=8ff029c999aedcef50c1c949eaf4e07a" target="_blank" class="button primary tiny">
                                        Appointments
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div><!-- right -->

                </div><!-- max__width -->
            </div><!-- header__main -->

            <?php do_action('fc_tab_scroller', $post->ID); ?>
        </header><!-- header -->