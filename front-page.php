<?php //TOPページ?>
<div class="anchor base-backcolor">
    <?php get_header(); ?>
    <main >
        <div class="fixed-background-2">
            <div class="main-visual main-visual-filter flex-column main-visual-anchor">
                <?php //<!-- 下矢印マーク -->?>
                <div class="view-down-mark"><span class="dashicons dashicons-arrow-up-alt2"></span></div>
                <?php //<!-- TOPページメニュー -->?>
                <div class="top-flex-wrap">
                    <a href="<?php echo home_url('/about')?>" class="top-flex-content">
                        <div>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/dot_about.png" alt="">
                            <p>about</p>
                        </div>
                    </a>
                    <a href="<?php echo home_url('/illust')?>" class="top-flex-content">
                        <div>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/dot_illust.png" alt="">
                            <p>illust</p>
                        </div>
                    </a>
                    <a href="<?php echo home_url('/contact')?>" class="top-flex-content">
                        <div>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/dot_contact.png" alt="">
                            <p>contact</p>
                        </div>
                    </a>
                </div>
                <?php //<!-- TOPの見出しタイトル -->?>
                <div class="wp-contents chalk-font">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
        
        
        <div class="works">
            <?php
            $args = array(
                'post_type' => 'works', //カスタム投稿タイプ名
                'posts_per_page' => 10 //取得する投稿の件数
            );
            
            $my_posts = get_posts($args);
            ?>
            
            <?php foreach ($my_posts as $post) : setup_postdata($post); ?>
            
            <div class="works-content">
                <p><?php the_time( get_option( 'date_format' ) ); ?></p>
                <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
            </div>
            
            <?php endforeach; ?>
            
            <?php wp_reset_postdata(); ?>
        </div>

    </main>
    <?php get_footer(); ?>
</div>
