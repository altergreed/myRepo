<?php
/**
 * The template for displaying search results pages.
 *
 * @package Sydney
 */

get_header(); ?>
<div class="search-result mt-4">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
            <h3><?php printf( __( 'Результаты поиска по запросу: %s'), '<span>' . get_search_query() . '</span>' ); ?></h3>
            <?php
$i=1;
if ( have_posts() ){
while ( have_posts() ) : the_post();?>

            <?php if($i==1) echo '<div class="small-news-design mt-4"><div class="row">';?>

            <?php if($i==5) echo '<div class="long-news-design mt-3"><div class="row">';?>

            <?php if($i<=4):?>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <div class="small-new <?php if($i==2 || $i==4):?>alt<?php endif;?>">
                    <?php if($i==2 || $i==4):?><div class="small-new-inner"><?php endif;?>
                        <img src="<?=get_the_post_thumbnail_url();?>" class="d-block w-100">
                        <?php if($i==2 || $i==4):?><div class="small-new-caption"><?php endif;?>
                            <div class="small-new-wrap d-flex align-items-start flex-column">
                                <?php $categories = get_the_category();
                    if($categories[0]){
                        if($i==2 || $i==4){
                            echo '<a class="btn-link white" href="' . get_category_link($categories[0]->term_id ) . '">'. $categories[0]->name . '</a>';
                        } else {
                            echo '<a class="btn-link" href="' . get_category_link($categories[0]->term_id ) . '">'. $categories[0]->name . '</a>';
                        }
                    }?>
                                <div class="small-new-title <?php if($i==2 || $i==4):?>white<?php endif;?>"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                                <div class="social-activity mt-auto<?php if($i==2 || $i==4):?> white<?php endif;?>">
                                    <span><i class="far fa-thumbs-up"></i></span><span><?php if(function_exists('wp_ulike_get_post_likes')):?><?=wp_ulike_get_post_likes(get_the_ID());?><?php endif;?></span><span><i class="far fa-comment-dots"></i></span><span><?=$post->comment_count;?></span>
                                </div>
                            </div>
                            <?php if($i==2 || $i==4):?>
                        </div>
                    </div><?php endif;?>
                </div>
            </div>
            <?php endif;?>


            <?php if($i>4 && $i<=6):?>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                <div class="long-new">
                    <div class="long-new-inner">
                        <img src="<?=get_the_post_thumbnail_url();?>" class="d-block w-100">
                        <div class="long-new-caption">
                            <div class="long-new-wrap d-flex align-items-start flex-column">
                                <?php $categories = get_the_category();
                    if($categories[0]){
                        echo '<a class="btn-link white" href="' . get_category_link($categories[0]->term_id ) . '">'. $categories[0]->name . '</a>';
                    }?>
                                <div class="long-new-title white"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                                <div class="social-activity mt-auto white">
                                    <span><i class="far fa-thumbs-up"></i></span><span><?php if(function_exists('wp_ulike_get_post_likes')):?><?=wp_ulike_get_post_likes(get_the_ID());?><?php endif;?></span><span><i class="far fa-comment-dots"></i></span><span><?=$post->comment_count;?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif;?>

            <?php if($i==4) echo '</div></div>';?>
            <?php if($i==6) {
    echo '</div></div>';
    $i=0;
}?>

            <?php
$i=$i+1;
endwhile;
} else{
    echo 'Ничего не найдено';
}?>
        </div>
    </div>
    <?php
    wp_paginate();?>
    <?php get_footer(); ?>
