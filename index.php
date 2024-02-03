<?php get_header(); ?>
<?php if(have_posts()): ?>
    <article <? post_class();?>>
        <time datetime="<?php echo esc_attr(get_the_date(DATE_W3C)); ?>">
                <?php echo esc_html(get_the_date()); ?>
        </time>
        <h1><? the_title(); ?></h1>
        <?php the_content(); ?>
        <?php the_post_navigation(); ?>
    </article>
<?php endif; ?>
<?php get_footer(); ?>