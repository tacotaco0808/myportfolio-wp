<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <?php wp_head(); ?><!--必ず記述テンプレこれのおかげでツールバーとCSS適用が可能-->
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?><!--必ず記述-->
    <header class="myhead mycontainer"><a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.webp"></a><span class="dashicons dashicons-menu-alt3"></span></header>