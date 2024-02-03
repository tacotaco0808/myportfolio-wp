<?php get_header(); ?>
<p>single.php</p>
<?php if(have_posts()): while(have_posts()):the_post();?><!--the_post()によってthe_content()等一つのコンテンツの内容を扱える-->
    <article <? post_class();?>>
        <?php if(has_post_thumbnail()):?>
            <a href="<?php the_permalink();?>">
                <figure>
                    <?php the_post_thumbnail();?>
                    
                        <h2><?php the_title();?></h2>
                
                </figure>
            </a>
        <?php endif;?>
        
    </article>
<?php  endwhile;endif;?>
<?php get_footer(); ?>