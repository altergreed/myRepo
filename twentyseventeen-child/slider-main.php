<div class="big-main-slider">
    <div id="big-main-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <?php
            $sticky = get_option('sticky_posts');
            rsort( $sticky );
            $sticky = array_slice( $sticky, 0, count($sticky));
            query_posts( array( 'post__in' => $sticky, 'caller_get_posts' => 1 ) );
            $i=1;
            if (have_posts()) :
                while (have_posts()) : the_post();
                    if($i==1){?>
            <div class="carousel-item active">
                <?php } else{ ?>
                <div class="carousel-item">
                    <?php }?>
                    <img src="<?=get_the_post_thumbnail_url();?>" class="d-block w-100">
                    <div class="carousel-caption">
                        <div class="carousel-wrap d-flex align-items-start flex-column">
                            <?php $categories = get_the_category();
                    if($categories[0]){
	                   echo '<a class="btn-link white" href="' . get_category_link($categories[0]->term_id ) . '">'. $categories[0]->name . '</a>';
                    }?>
                            <div class="slide-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></div>
                            <div class="social-activity mt-auto white"><span><i class="far fa-thumbs-up"></i></span><span><?php if(function_exists('wp_ulike_get_post_likes')):?><?=wp_ulike_get_post_likes(get_the_ID());?><?php endif;?></span><span><i class="far fa-comment-dots"></i></span><span><?=$post->comment_count;?></span></div>
                        </div>
                    </div>
                </div>
                <?php $i=$i+1;
            endwhile;
            endif;
            wp_reset_query();
            ?>
        </div>
        <a class="carousel-control-prev" href="#big-main-carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#big-main-carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <ol class="carousel-indicators">
            <?php
            $sticky = get_option('sticky_posts');
            rsort( $sticky );
            $sticky = array_slice( $sticky, 0, count($sticky));
            query_posts( array( 'post__in' => $sticky, 'caller_get_posts' => 1 ) );
            $i=1;
            if (have_posts()) :
                while (have_posts()) : the_post();?>
            <li data-target="#big-main-carousel" data-slide-to="<?=$i;?>" class="active"></li>
            <?php $i=$i+1;
            endwhile;
            endif;
            wp_reset_query();
            ?>
        </ol>
    </div>
</div>
