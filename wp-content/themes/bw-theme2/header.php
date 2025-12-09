<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="header">

       <!-- Left Side Navigation -->
    <nav class="side-nav">
        <ul>
            <li><a href="#hero">Home</a></li>
            <li><a href="#oursite">DramWise</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#about">About Us</a></li>
        </ul>
    </nav>


        <!-- Hero Section -->
        <section class="hero" id="hero">
            <div class="hero-content">
                <h1><?= CFS()->get('main_page') ?></h1>
                <p><strong><?= CFS()->get('names') ?></strong></p>
                <p><?= CFS()->get('description') ?></p>
                <!-- <a href="#contact" class="btn">Get in Touch</a> -->
            </div>
            <div class="hero-animation"></div>
        </section>
    </header>
