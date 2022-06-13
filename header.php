<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title><?php bloginfo('name');?></title>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <!-- Mi css debajo para que tenga prioridad :) -->
        <?php wp_head(); ?>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>">
    </head>
    <body <?php body_class(); ?>>
        <div class="container">
            <div class="menu row">
                <div class="col-12">

                    <nav class="navbar navbar-expand-lg navbar-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                    
                        <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.html">Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="posts.html">Todas las recetas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="categories.html">Ingredientes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Contacto</a>
                                </li>
                            </ul>
                        </div> -->
                        
                        <?php
                        wp_nav_menu( array(
                            'theme_location'    => 'Main',
                            'depth'             => 2,
                            'container'         => 'div',
                            'container_class'   => 'collapse navbar-collapse',
                            'container_id'      => 'navbarSupportedContent',
                            'menu_class'        => 'navbar-nav mr-auto',
                            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'            => new WP_Bootstrap_Navwalker(),
                        ) );
                        ?>
                    </nav>
                </div>
            </div>