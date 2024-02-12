<?php //投稿されている絵をまとめているギャラリーページ?>
<?php get_header(); ?>
<article <? post_class();?>> 
    <div class="contents-wrapper">
        <?php if(have_posts()): while(have_posts()):the_post();//the_post()によってthe_content()等一つのコンテンツの内容を扱える?>
                
                <?php if(has_post_thumbnail()):?>
                    <a class="mycontent-images" href="<?php the_permalink();?>">
                        <?php the_post_thumbnail();?>
                    </a>
                <?php endif;?>
        
        <?php  endwhile;endif;?>
    </div>
</article>
<?php get_footer(); ?>