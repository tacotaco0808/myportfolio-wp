<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <?php wp_head(); ?><!--必ず記述テンプレこれのおかげでツールバーとCSS適用が可能-->
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?><!--必ず記述-->
    <header class="myhead mycontainer"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.webp"></header>