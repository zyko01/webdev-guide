<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php bloginfo('name'); ?></title>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?> 
    </head>
    <body class="<?php body_class(); ?>">
        <div class="container-full container-wrapper">
            <div class="site-header">
                
                <nav class="navbar navbar-inverse navbar-fixed-top">
                    
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span> 
                            </button>
                            <img src="<?php echo get_bloginfo('template_url') ?>/images/marklogo.png" alt="logo">
                        </div>
                        <div class="collapse navbar-collapse" id="myNavbar">
                            <?php 
                                wp_nav_menu(array(
                                    'theme_location' => 'primary',
                                    'container' => false,
                                    'menu_class' => 'nav navbar-nav navbar-right'
                                ));
                            ?>
                        </div>
                    
                </nav>
            </div>

