<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package twentyseventeen
 */

get_header(); ?>
<?php global $redux_demo;
$i=1;
$in_page=array();?>
<div class="main-top-design mt-4">
    <div class="row">
        <div class="news-main-design col-12 col-sm-12 col-md-8 col-lg-9">
            <?php get_slider_main(); ?>
            <div class="main-small-design">
                <div class="row">
                    <?php
                    wp_reset_query();
                    $sticky = get_option( 'sticky_posts' );
                    query_posts(
                        array(
                        'meta_key'=>'custom_post_order',
                        'orderby' => 'meta_value_num',
                        'type' => 'NUMERIC',
                        'post_type'      => 'post',
                        'order' => 'ASC',
                        'post__not_in' =>$sticky,
                        'post_status'=>'publish',
                        'posts_per_page'=>-1
                        )
                    );?>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php if ( get_post_meta( $post->ID, 'custom_post_order', true)=='') continue; ?>
                    <?php $in_page[]=get_the_ID();?>
                    <div class="main-small-new <?php if($i==2):?>alt <?php endif;?>col-12 <?php if($i!=1):?>col-sm-6 col-md-6 <?php else:?>col-sm-12 col-md-12<?php endif;?> col-lg-4">
                    <?php if($i==2):?><div class="alt-inner"><?php endif;?>
                        <img src="<?=get_the_post_thumbnail_url();?>" class="d-block w-100">
                        <?php if($i==2):?><div class="alt-img-caption"><?php endif;?>
                        <div class="main-small-caption d-flex align-items-start flex-column">
                        <?php
                            $categories = get_the_category();
                            if($categories[0]){
                                if($i==2){
                                    echo '<a class="btn-link white" href="' . get_category_link($categories[0]->term_id ) . '">'. $categories[0]->name . '</a>';
                                } else {
                                    echo '<a class="btn-link" href="' . get_category_link($categories[0]->term_id ) . '">'. $categories[0]->name . '</a>';
                                }
                            }
                        ?>
                        <div class="title-small-new"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                        <div class="social-activity mt-auto<?php if($i==2):?> white<?php endif;?>">
                            <span><i class="far fa-thumbs-up"></i></span><span><?php if(function_exists('wp_ulike_get_post_likes')):?><?=wp_ulike_get_post_likes(get_the_ID());?><?php endif;?></span><span><i class="far fa-comment-dots"></i></span><span><?=$post->comment_count;?></span>
                            </div>
                            </div>
                            </div>
                        <?php if($i==2):?></div></div><?php endif;?>
                    <?php if($i==3) break;
                    $i=$i+1;?>
                    <?php endwhile;?>
                    <?php endif;
                    wp_reset_query();?>
                </div>
            </div>
        </div>
        <?php get_announ_news(); ?>
    </div>
</div>
<div class="grey-design border-top mt-5">
    <div class="row">
        <div class="col-12 col-sm-12 col-lg-9">
            <div class="title-grey-design">А вот это интересно...</div>
            <div class="big-grey-slider">
                <div id="grey-design-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <?php $post=get_post($redux_demo['id_grey_slider']);?>
                            <img src="<?=get_the_post_thumbnail_url();?>" class="d-block w-100">
                            <!--                            <img src="<?=get_theme_file_uri()?>/assets/img/grey-slider-img-1.png" class="d-block w-100">-->
                            <div class="carousel-caption"><div class="carousel-wrap d-flex align-items-start flex-column">
                               <?php $category = get_the_category($redux_demo['id_grey_slider']); ?>
                                <a href="<?=get_category_link($category[0]->cat_ID);?>" class="btn-link white"><?=$category[0]->cat_name;?></a>
                                <div class="slide-title"><a href="<?=$post->guid;?>"><?=$post->post_title;?></a></div>
                                <div class="social-activity white mt-auto">
                                    <span><i class="far fa-thumbs-up"></i></span><span><?php if(function_exists('wp_ulike_get_post_likes')):?><?=wp_ulike_get_post_likes(get_the_ID());?><?php endif;?></span><span><i class="far fa-comment-dots"></i></span><span><?=$post->comment_count;?></span>
                                </div>
                            </div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php get_on_this_category(); ?>
    </div>
</div>
<div class="small-news-design mt-4">
    <div class="row">
        <?php
        $i=1;
                    $sticky = get_option( 'sticky_posts' );
                    query_posts(
                        array(
                        'meta_key'=>'custom_post_order',
                        'orderby' => 'meta_value_num',
                        'type' => 'NUMERIC',
                        'post_type'      => 'post',
                        'order' => 'ASC',
                        'post__not_in' =>$sticky,
                        'post_status'=>'publish',
                        'posts_per_page'=>-1
                        )
                    );?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php if ( get_post_meta( $post->ID, 'custom_post_order', true)=='' || in_array(get_the_ID(), $in_page)) continue; ?>
        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
            <?php $in_page[]=get_the_ID();?>
            <div class="small-new <?php if($i==2 || $i==4):?>alt<?php endif;?>">
                <?php if($i==2 || $i==4):?>
                <div class="small-new-inner">
                    <?php endif;?>
                    <img src="<?=get_the_post_thumbnail_url();?>" class="d-block w-100">
                    <?php if($i==2 || $i==4):?>
                    <div class="small-new-caption">
                        <?php endif;?>
                        <div class="small-new-wrap d-flex align-items-start flex-column">
                        <?php
                            $categories = get_the_category();
                            if($categories[0]){
	                           if($i==2 || $i==4){echo '<a class="btn-link white" href="' . get_category_link($categories[0]->term_id ) . '">'. $categories[0]->name . '</a>';}
                                else {
                                    echo '<a class="btn-link" href="' . get_category_link($categories[0]->term_id ) . '">'. $categories[0]->name . '</a>';
                                }
                            }?>
                        <div class="small-new-title <?php if($i==2 || $i==4):?>white<?php endif;?>"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                        <div class="social-activity mt-auto<?php if($i==2 || $i==4):?> white<?php endif;?>">
                            <span><i class="far fa-thumbs-up"></i></span><span><?php if(function_exists('wp_ulike_get_post_likes')):?><?=wp_ulike_get_post_likes(get_the_ID());?><?php endif;?></span><span><i class="far fa-comment-dots"></i></span><span><?=$post->comment_count;?></span>
                        </div></div>
                    </div>
                    <?php if($i==2 || $i==4):?>
                </div>
            </div><?php endif;?>
        </div>
        <?php if($i==4) break;
                    $i=$i+1;?>
        <?php endwhile;?>
        <?php endif;
            wp_reset_query();
        wp_reset_postdata();?>
    </div>
</div>
<div class="long-news-design mt-3">
    <div class="row">
        <?php
        $i=1;
                    $sticky = get_option( 'sticky_posts' );
                    query_posts(
                        array(
                        'meta_key'=>'custom_post_order',
                        'orderby' => 'meta_value_num',
                        'type' => 'NUMERIC',
                        'post_type'      => 'post',
                        'order' => 'ASC',
                        'post__not_in' =>$sticky,
                        'post_status'=>'publish',
                        'posts_per_page'=>-1
                        )
                    );?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
       <?php if ( get_post_meta( $post->ID, 'custom_post_order', true)=='' ) continue; ?>
        <?php if(in_array(get_the_ID(), $in_page)) continue;?>
        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
            <?php $in_page[]=get_the_ID();?>
            <div class="long-new">
                <div class="long-new-inner">
                    <img src="<?=get_the_post_thumbnail_url();?>" class="d-block w-100">
                    <div class="long-new-caption">
                       <div class="long-new-wrap d-flex align-items-start flex-column">
                        <?php
                            $categories = get_the_category();
                            if($categories[0]){
	                           echo '<a class="btn-link white" href="' . get_category_link($categories[0]->term_id ) . '">'. $categories[0]->name . '</a>';
                            }?>
                        <div class="long-new-title white"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                        <div class="social-activity mt-auto white">
                            <span><i class="far fa-thumbs-up"></i></span><span><?php if(function_exists('wp_ulike_get_post_likes')):?><?=wp_ulike_get_post_likes(get_the_ID());?><?php endif;?></span><span><i class="far fa-comment-dots"></i></span><span><?=$post->comment_count;?></span>
                        </div>
                    </div></div>
                </div>
            </div>
        </div>
        <?php if($i==2) break;
                    $i=$i+1;?>
        <?php endwhile;?>
        <?php endif;
                    wp_reset_query();
            wp_reset_postdata();?>
    </div>
</div>
<?php get_slider_industry(); ?>
<?php get_footer(); ?>
