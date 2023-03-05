<!DOCTYPE html>
<html <?php

        use Titanweb\lpk\TemplateFunction;

        language_attributes() ?>>

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
    <a href="tel: ＋623187885459" class="cta__call">
        <?php TemplateFunction::get_image_path('call.png') ?>
    </a>
    <div class="cta__right">
        <a href="#1" class="cta__location cta__item">
            <?php TemplateFunction::get_image_path('cta-lct.png') ?>
        </a>
        <a href="#2" class="cta__mess cta__item">
            <?php TemplateFunction::get_image_path('cta-mess.png') ?>
        </a>
        <a href="#3" class="cta__zalo cta__item">
            <?php TemplateFunction::get_icon('cta-zalo') ?>
        </a>
        <a href="" class="cta__btn cta__item">
            <?php TemplateFunction::get_image_path('cta-btn.png') ?>
        </a>
    </div>

    <main class="main" role="main">