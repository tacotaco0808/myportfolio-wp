<?php //投稿されている絵をまとめているギャラリーページ
?>
<div class="anchor base-backcolor">
    <?php get_header(); ?>
    <main>
        <article>
            <div class="contents-wrapper">
                <?php if (have_posts()) : while (have_posts()) : the_post(); //the_post()によってthe_content()等一つのコンテンツの内容を扱える
                ?>

                        <?php if (has_post_thumbnail()) : ?>
                            <a class="mycontent-images" href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail(); ?>
                            </a>
                        <?php endif; ?>

                <?php endwhile;
                endif;  ?>

            </div>
        </article>
        <!-- ここ -->
        <div>
            <?php the_posts_pagination(array(
                'prev_text' => '<span class="dashicons dashicons-arrow-left-alt2"></span>',
                'next_text' => '<span class="dashicons dashicons-arrow-right-alt2"></span>',
            )); ?>
        </div>

    </main>
    <?php get_footer(); ?>
</div>