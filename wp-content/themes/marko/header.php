<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Marko
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="page">
        
        <header id="masthead" class="header ttm-header-style-01">
            <div id="site-header-menu" class="site-header-menu ttm-bgcolor-white">
                <div class="site-header-menu-inner ttm-stickable-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="site-navigation d-flex flex-row  justify-content-between align-items-center">
                                    <div class="site-branding ">
                                        <?php if( !empty( get_field('logo', 'option')['url'] ) ): ?>
                                        <a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Buildtab" rel="home">
                                            <img id="logo-img" height="45" width="120" class="img-fluid auto_size"
                                                src="<?php echo get_field('logo', 'option')['url']; ?>" alt="<?php echo bloginfo('name');?>">
                                        </a>
                                        <?php else: ?>
                                        <?php  if ( has_custom_logo() ) :
                                            $image = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' ); ?>
                                            <a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Buildtab" rel="home">
                                                <img id="logo-img" height="45" width="120" class="img-fluid auto_size"
                                                    src="<?php echo esc_url( $image[0] ); ?>" alt="<?php echo bloginfo('name');?>">
                                            </a>
                                            <?php
                                        endif; ?>
                                        <?php endif; ?>

                                    </div>
                                    <div class=" d-flex flex-row ">
                                        <div class="btn-show-menu-mobile menubar menubar--squeeze">
                                            <span class="menubar-box">
                                                <span class="menubar-inner"></span>
                                            </span>
                                        </div>
                                        <!------- menu ------->
                                        <nav class="main-menu menu-mobile" id="menu">
                                            <?php
                                            wp_nav_menu(
                                                array(
                                                    'theme_location' => get_field('menus', 'option'),
                                                    'menu_id'        => 'primary-menu',
                                                    'menu_class' => 'menu',
                                                    'add_li_class'  => 'mega-menu-item'
                                                )
                                            );
                                            ?>
                                        </nav>
                                        <!------- menu end ------>
                                        
                                        <?php 
                                        $menu_button = get_field('menu_button', 'option');
                                        if( $menu_button ): 
                                            $menu_button_url = $menu_button['url'];
                                            $menu_button_title = $menu_button['title'];
                                            $menu_button_target = $menu_button['target'] ? $menu_button['target'] : '_self';
                                            ?>
                                        <div class="header_extra d-flex flex-row align-items-center justify-content-end">
                                            <div class="padding_left15">
                                                <div class="header_btn">
                                                    <a class="ttm-btn ttm-btn-size-md ttm-text-darkgrey btn-inline ttm-icon-btn-right" href="<?php echo esc_url( $menu_button_url ); ?>" target="<?php echo esc_attr( $menu_button_target ); ?>"><?php echo esc_html( $menu_button_title ); ?> <i class="fa fa-long-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endif; ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>