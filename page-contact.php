<?php //contactページ?>
<div class="anchor base-backcolor">
    <?php get_header(); ?>
    <main>
        <article>
            <?php the_content();?>
            <div class="main-cf7">
                <?php echo apply_shortcodes( '[contact-form-7 id="070d7bc" title="test"]' ); ?>
            </div>
        </article>
    </main>
    <?php get_footer(); ?>
</div>
