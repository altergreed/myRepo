<?php get_header(); ?>

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
                </div></div>
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
                </div></div>
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
} else {
    ?>
<div class="main-top-design mt-4">
    <div class="row">
        <div class="col-sm-12 col-md-8 col-lg-9">
           <div class="mx-auto">
                <p class="empty-category">В данной рубрике еще нет статей.</p>
                <a href="/jurnal_1/" class="btn-submit">Перейти на главную</a>
            </div>
        </div>
        <?php
    $category = get_queried_object();
    $sticky = get_option( 'sticky_posts' );
    $cat=$category->term_id;
        query_posts(
            array(
                    'post__not_in' =>$sticky,
                    'post_status'=>'future',
                    'category__in' => $cat,
            ));
        $i=1;?>
        <?php if ( have_posts() ):
            ?>
        <div class="sidebar-announce mt-sm-5 mt-md-0 col-sm-12 col-md-4 col-lg-3">
            <div class="border">
                <div class="title-announce d-flex align-items-center">
                    <span>Читайте уже скоро:</span>
                </div>
                <?php
                while ( have_posts() ) : the_post(); ?>

                <div class="announce-new <?php if($i==1):?>with-img<?php endif;?>">
                    <?php
                        if($i==1) the_post_thumbnail(full, array('class'=>'d-block img-fluid'));
                    $categories = get_the_category();
                    if($categories[0]){
	                   echo '<a class="btn-link" href="' . get_category_link($categories[0]->term_id ) . '">'. $categories[0]->name . '</a>';
                    }?>
                    <?php the_title('<div class="announce-new-title">','</div>'); ?>
                </div>

                <?php $i=$i+1;
        endwhile;
    ?>
            </div>
        </div>
        <?php
        endif;
        wp_reset_query();
    ?>
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
                            <div class="carousel-caption"><?php $category = get_the_category($redux_demo['id_grey_slider']); ?>
                                <a href="<?=get_category_link($category[0]->cat_ID);?>" class="btn-link white"><?=$category[0]->cat_name;?></a>
                                <div class="slide-title"><a href="<?=$post->guid;?>"><?=$post->post_title;?></a></div>
                                <div class="social-activity white">
                                    <span><i class="far fa-thumbs-up"></i></span><span><?php if(function_exists('wp_ulike_get_post_likes')):?><?=wp_ulike_get_post_likes(get_the_ID());?><?php endif;?></span><span><i class="far fa-comment-dots"></i></span><span><?=$post->comment_count;?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php get_on_this_category(); ?>
    </div>
</div>

<?php
}
    wp_paginate();?>


<?php get_footer(); ?>
