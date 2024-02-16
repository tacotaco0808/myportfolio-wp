<?php //TOPページ?>
<div class="anchor base-backcolor">
    <?php get_header(); ?>
    <main >
        <?php the_content(); ?>
        <!-- TOPページメニュー -->
        <div class="top-flex-wrap">
            <a href="<?php echo home_url('/illust')?>" class="top-flex-content">
                <div>
                    <img src="" alt="">
                    <p>illust</p>
                </div>
            </a>
            <a href="<?php echo home_url('/about')?>" class="top-flex-content">
                <div>
                    <img src="" alt="">
                    <p>about</p>
                </div>
            </a>
            <a href="<?php echo home_url('/contact')?>" class="top-flex-content">
                <div>
                    <img src="" alt="">
                    <p>contact</p>
                </div>
            </a>
        </div>
        
    </main>
    <?php get_footer(); ?>
</div>
