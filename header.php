<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <script defer src="<? echo get_template_directory_uri(); ?>/js/main.js"></script>
    <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/common.css" type="text/css" as="style" />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet" />
    <?php wp_head(); ?><!--必ず記述テンプレこれのおかげでツールバーとCSS適用が可能-->
</head>

<body>
    <?php wp_body_open(); ?><!--必ず記述-->
    <header class="myhead">
        <div class="filter">
            <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/topbanner.png"></a><span class="hamburger dashicons dashicons-menu-alt3"></span>
        </div>
        <div class="hamburger-menu">
            <div class="hamburger-menu-list hamburger-menu-flex">
                <div class="hamburger-menu-item">
                    <a href="<?php echo home_url('/') ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/dot_about.png" alt="">
                    </a>
                </div>
                <div class="hamburger-menu-item">
                    <a href="<?php echo home_url('/about') ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/dot_about.png" alt="">
                    </a>
                </div class="hamburger-menu-item">
                <div class="hamburger-menu-item">
                    <a href="<?php echo home_url('/illust') ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/dot_illust.png" alt="">
                    </a>
                </div>
                <div class="hamburger-menu-item">
                    <a href="<?php echo home_url('/contact') ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/dot_contact.png" alt="">
                    </a>
                </div>

            </div>
        </div>
    </header>