<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shibaura
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
	
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/shibaura-html/libs/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link href="<?php bloginfo('template_directory'); ?>/shibaura-html/css/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/shibaura-html/libs/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/shibaura-html/libs/owlcarousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/shibaura-html/css/main.css">
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <div class="header-fix" id="header-fix">
        <a href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php echo esc_html(get_field('logo', 'option')); ?>" alt="Avatar Logo" class="logo-mobile">
        </a>
        <div id="toggle" class="toggle-custom">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <div class="overlay" id="overlay">
      <nav class="overlay-menu">
            <?php
				wp_nav_menu( array( 'theme_location'=>'my-custom-menu', 'container' => 'ul','menu_class'=>'navbar-nav' ) );
			?>
      </nav>
    </div>

    <!-- Header -->
    <header id="header" class="header-scrolled">
        <div class="container-c-header">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                        <img src="<?php echo esc_html(get_field('logo', 'option')); ?>" alt="Avatar Logo" class="logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#menu-mobile">
                        <svg xmlns="http://www.w3.org/2000/svg" width="39" height="19" viewBox="0 0 39 19" fill="none">
                            <path d="M0 1H38.5M0 9.5H38.5M0 18.5H38.5" stroke="black" />
                        </svg>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <?php
                            wp_nav_menu( array( 'theme_location'=>'my-custom-menu', 'container' => 'ul','menu_class'=>'navbar-nav' ) );
                        ?>
                        <div class="dropdown dropdown-language">
                            <?php 
                            if( have_rows('change_language', 'option') ):
                            while( have_rows('change_language', 'option') ) : the_row(); ?>
                                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown"><?php echo esc_html(get_sub_field('language_active', 'option')); ?></button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <?php 
                                if( have_rows('muti', 'option') ):
                                while( have_rows('muti', 'option') ) : the_row(); ?>
                                    <li><a class="dropdown-item" href="<?php echo esc_html(get_sub_field('url', 'option')); ?>"><?php echo esc_html(get_sub_field('title', 'option')); ?></a></li>
                                <?php endwhile; endif;?>
                            </ul>
                            <?php endwhile; endif;?>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <div class="fix-pt"></div>

    <!-- wrapper -->
    <div class="wrapper">


