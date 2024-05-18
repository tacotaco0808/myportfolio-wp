<?php //TOPページ
?>
<div class="anchor base-backcolor">
    <?php get_header(); ?>
    <main>
        <div class="fixed-background-2">
            <div class="main-visual main-visual-filter flex-column main-visual-anchor">
                <?php //<!-- 下矢印マーク -->
                ?>
                <div class="view-down-mark"><span class="dashicons dashicons-arrow-up-alt2"></span></div>
                <?php //<!-- TOPページメニュー -->
                ?>
                <div class="top-flex-wrap">
                    <a href="<?php echo home_url('/about') ?>" class="top-flex-content">
                        <div>
                            <img class="top-menu-about" src="<?php echo get_template_directory_uri(); ?>/images/dot_about.png" alt="">
                            <p>about</p>
                        </div>
                    </a>
                    <a href="<?php echo home_url('/illust') ?>" class="top-flex-content">
                        <div>
                            <img class="top-menu-illust" src="<?php echo get_template_directory_uri(); ?>/images/dot_illust.png" alt="">
                            <p>illust</p>
                        </div>
                    </a>
                    <a href="<?php echo home_url('/contact') ?>" class="top-flex-content">
                        <div>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/dot_contact.png" alt="">
                            <p>contact</p>
                        </div>
                    </a>
                </div>
                <?php //<!-- TOPの見出しタイトル -->
                ?>
                <div class="wp-contents chalk-font" style="color: var(--accentblack);">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
        <div class="main-visual-space"></div>
        <?php echo do_shortcode('[news_content]'); //newsコンテンツのショートコード 
        ?>

        <div class="works">
            <h1 class="chalk-font">Works!</h1>
            <?php /*ワードプレスの動的に追加される部分
            <?php
            $args = array(
                'post_type' => 'works', //カスタム投稿タイプ名
                'posts_per_page' => 10, //取得する投稿の件数
                'orderby' => 'date',
                'order' => 'DESC'
            );

            $my_posts = get_posts($args);
            ?>

            <?php foreach ($my_posts as $post) : setup_postdata($post); ?>

                <div class="works-content works-content-anchor">
                    <a href="<?php the_permalink(); ?>">
                        <time datetime="<?php echo esc_attr(get_the_date(DATE_W3C)); ?>">
                            <?php echo esc_html(get_the_date()); ?>
                        </time>
                        <img class="works-thumbnail" src="<? the_post_thumbnail_url() ?>" alt="">
                        <p class="works-title works-title-text"><?php the_title() ?></p>
                    </a>
                </div>

            <?php endforeach; ?>
            */ ?>

            <div class="works-content works-content-anchor works-content-4">
                <a href="https://www.canva.com/design/DAGFjoeAT6c/L46ur65CpotHG8nUflM2QA/edit?utm_content=DAGFjoeAT6c&utm_campaign=designshare&utm_medium=link2&utm_source=sharebutton">
                    <time datetime="<?php echo esc_attr(get_the_date(DATE_W3C)); ?>">
                        <?php echo esc_html(get_the_date()); ?>
                    </time>
                    <img class="works-thumbnail" src="<?php echo get_template_directory_uri(); ?>/images/this_page.png" alt="">
                    <p class="works-title works-title-text">このサイトについて</p>
                    <p class="works-detail">このサイトについての詳細<br> 別サイトへ移動します </p>
                </a>
            </div>
            <div class="works-content works-content-anchor works-content-3">
                <a href="https://joken-website.vercel.app/">
                    <time datetime="<?php echo esc_attr(get_the_date(DATE_W3C)); ?>">
                        <?php echo esc_html(get_the_date()); ?>
                    </time>
                    <img class="works-thumbnail" src="<?php echo get_template_directory_uri(); ?>/images/joken_web.png" alt="">
                    <p class="works-title works-title-text">初めてデザインしたサイト</p>
                    <p class="works-detail">サークルの合宿で作成したサークルホームページ<br> デザインに初挑戦！ </p>
                </a>
            </div>
            <div class="works-content works-content-anchor works-content-2">
                <a href="https://www.youtube.com/watch?v=VM9Kht2a7Ms">
                    <time datetime="<?php echo esc_attr(get_the_date(DATE_W3C)); ?>">
                        <?php echo esc_html(get_the_date()); ?>
                    </time>
                    <img class="works-thumbnail" src="<?php echo get_template_directory_uri(); ?>/images/shootinggame.png" alt="">
                    <p class="works-title works-title-text">シューティングゲーム:Youtube</p>
                    <p class="works-detail">チームで学内コンテストに応募しました。<br>コーディング担当です。</p>
                </a>
            </div>
            <div class="works-content works-content-anchor works-content-1">
                <a href="https://qiita.com/tacotaco0808/private/4d825374c765216f6aef">
                    <time datetime="<?php echo esc_attr(get_the_date(DATE_W3C)); ?>">
                        <?php echo esc_html(get_the_date()); ?>
                    </time>
                    <img class="works-thumbnail" src="<?php echo get_template_directory_uri(); ?>/images/window_capture.png" alt="">
                    <p class="works-title works-title-text">ウィンドウキャプチャアプリ:Qiita</p>
                    <p class="works-detail">イラストを描くのにほしかったので<br>資料を見るための補助アプリを作りました</p>
                </a>
            </div>
            <?php wp_reset_postdata(); ?>
        </div>

    </main>
    <?php get_footer(); ?>
</div>