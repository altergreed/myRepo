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
                        <li class="FB"><a href="#"></a></li>
                        <li class="VK"><a href="#"></a></li>
                        <li class="TW"><a href="#"></a></li>
                        <li class="OD"><a href="#"></a></li>
                        <li class="MAIL"><a href="#"></a></li>
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
                    <span><i class="far fa-thumbs-up"></i></span><span class="count">123</span><span><i class="far fa-comment-dots"></i></span><span class="count"><?php comments_number( '0', '1', '%' );?></span>
                </div>
                <h1 class="blog-article-title"><?php the_title();?></h1>
                <?php the_content();?>
            </div>
            <div class="like">Понравилась статья? <a href="#">Жми сюда</a> <span><i class="far fa-thumbs-up"></i></span><span class="count">123</span></div>
            <?php if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;?>
            <?php endwhile;?>
        </div>
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_slider_industry(); ?>
<?php get_footer(); ?>
