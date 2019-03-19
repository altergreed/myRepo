<?php get_header(); ?>
<?php
    global $redux_demo;
    global $more;
?>
   <div class="blog-article mt-4">
    <div class="row">
        <div class="d-none d-lg-block col-md-2 col-lg-1">
            <div class="social-repost d-none d-lg-block" id="social-repost">
                <span>Поделиться статьей в соцсетях</span>
                <div>
                    <ul>
                        <li><noindex><a rel="nofollow" onclick="window.open('http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>', 'facebook', 'width=1000, height=1024'); return false;" href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" title="Поделиться в Facebook"><div class="FB"></div></a></noindex></li>
                        <li><noindex><a rel="nofollow" onclick="window.open('http://vkontakte.ru/share.php?url=<?php the_permalink(); ?>', 'vkontakte', 'width=626, height=436'); return false;" href="http://vkontakte.ru/share.php?url=<?php the_permalink(); ?>" title="Поделиться ВКонтакте"><div class="VK"></div></a></noindex></li>
                        <li>
                            <noindex><a rel="nofollow" rel="nofollow" onclick="window.open('http://twitter.com/home?status=Читаю <?php the_permalink(); ?>: <?php the_title(); ?>', 'twitter', 'width=1000, height=1024'); return false;" href="http://twitter.com/home?status=Читаю <?php the_permalink(); ?>: <?php the_title(); ?>" title="Добавить в Twitter"><div class="TW"></div></a></noindex>
                        </li>
                        <li><noindex><a rel="nofollow" onclick="window.open('https://connect.ok.ru/offer?url=<?php the_permalink(); ?>', 'ok', 'width=626, height=436'); return false;" href="https://connect.ok.ru/offer?url=<?php the_permalink(); ?>" title="Поделиться Одноклассники"><div class="OD"></div></a></noindex></li>
                        <li><noindex><a rel="nofollow" onclick="window.open('mailto:?subject=<?php the_title(); ?>&body=<?php the_permalink(); ?>', 'facebook', 'width=1000, height=1024'); return false;" href="mailto:?subject=<?php the_title(); ?>&body=<?php the_permalink(); ?>" title="Отправить на почту"><div class="MAIL"></div></a></noindex></li>
                    </ul>
                </div>

            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-8" id="article">
            <div class="article-body">
               <?php while( have_posts() ) : the_post();?>
               <?php
                    $more = 1;
                    $categories = get_the_category();
                    if($categories[0]){
	                   echo '<a class="btn-link" href="' . get_category_link($categories[0]->term_id ) . '">'. $categories[0]->name . '</a>';
                    } ?>
                <div class="social-activity">
                    <?php if(function_exists('wp_ulike')) wp_ulike('get');?><span><i class="far fa-comment-dots"></i></span><span class="count"><?php comments_number( '0', '1', '%' );?></span>

                </div>
                <h1 class="blog-article-title"><?php the_title();?></h1>
                <?php $content = get_the_content();
                echo $content;?>
            </div>
            <div class="like">Понравилась статья?  <div class="like-link"><?php if(function_exists('wp_ulike')) wp_ulike('get');?></div><?php if(function_exists('wp_ulike')) wp_ulike('get');?></div>
            <?php if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;?>
            <?php endwhile;?>
        </div>
        <?php get_sidebar(); ?>
</div></div>
<?php get_slider_industry(); ?>
<?php get_footer(); ?>
