<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <script defer src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <?php if (is_front_page()) : /*front-pageのみ適用*/ ?>
        <script defer src="<?php echo get_template_directory_uri(); ?>/js/front-page.js"></script>
    <?php endif; ?>
    <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/common.css" type="text/css" as="style" />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet" />
    <?php wp_head(); ?><!--必ず記述テンプレこれのおかげでツールバーとCSS適用が可能-->
</head>

<body>
    <?php wp_body_open(); ?><!--必ず記述-->
    <header class="myhead">
        <div id="bl_loading">
            <div id="bl_loadingPercentWrap"><span id="bl_loadingIcon-1" class="loading-circle"></span><span id="bl_loadingIcon-2" class="loading-circle"></span><span id="bl_loadingIcon-3" class="loading-circle"></span></div>
            <div id="bl_loadingGaugeWrap"><span id="bl_loadingGaugeMeter"></span></div>
        </div>
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