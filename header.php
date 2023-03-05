<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head() ?>
</head>

<body <?php body_class() ?>>
    <?php wp_body_open(); ?>

    <header class="header">
        <div class="container d-flex header__inner">
            <div class="header__logo"><?= the_custom_logo() ?></div>
            <nav class="header__menu">
                <?php
                wp_nav_menu([
                    'theme_location' => 'primary',
                    'menu_id'        => 'primary',
                ])
                ?>
            </nav>
            <div class="header__language">

            </div>
        </div>
    </header>

    <main class="main" role="main">