<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <script defer src="<? echo get_template_directory_uri(); ?>/js/main.js"></script> 
    <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/common.css" type="text/css" as="style" />   
    <?php wp_head(); ?><!--必ず記述テンプレこれのおかげでツールバーとCSS適用が可能-->
</head>

<body >
    <?php wp_body_open(); ?><!--必ず記述-->
    <header class="myhead">
        <div class="filter">
            <a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri(); ?>/images/topbanner.png"></a><span class="hamburger dashicons dashicons-menu-alt3"></span>
        </div>
        <div class="hamburger-menu">
            <ul>
                <li>
                    <a href="<?php echo home_url('/about')?>" class="top-flex-content">
                        about
                    </a>
                </li>
                <li>メニュー2</li>
                <li>メニュー3</li>
                <li>メニュー4</li>
            </ul>
        </div>
    </header>