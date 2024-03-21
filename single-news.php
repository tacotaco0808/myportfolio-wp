<div class="anchor base-backcolor">
    <?php get_header(); ?>
    <main style="
    color: var(--whitechalk);
    font-family: var(--myfont);
    text-align: center;
    
    ">
        <h1 style="
        margin-top: 0px;">
            <?php the_title(); ?>
        </h1>
        <p><?php the_content(); ?></p>
    </main>
    <?php get_footer(); ?>
</div>