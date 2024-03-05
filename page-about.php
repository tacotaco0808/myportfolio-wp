<?php //aboutページ
?>
<div class="anchor base-backcolor">
    <?php get_header(); ?>
    <main>
        <article class="about-article chalk-font">
            <?php
            /*本文を取得してpタグにクラス名を一括付与 */
            $content_string = get_the_content();
            $content_string = str_replace('<p', '<p class="about-para" ', $content_string);
            echo $content_string;

            ?>
        </article>
    </main>
    <?php get_footer(); ?>
</div>