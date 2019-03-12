<?php global $redux_demo;?>
<div class="col-12 col-sm-12 col-lg-3 mt-3 mt-lg-0">
    <?php $post=get_post($redux_demo['id_grey_slider']);?>
    <?php $category = get_the_category($redux_demo['id_grey_slider']); ?>
    <a href="<?=get_category_link($category[0]->cat_ID);?>" class="btn-link">Также на эту тему</a>
    <?php
    $sticky = get_option( 'sticky_posts' );
    $sticky[]=$redux_demo['id_grey_slider'];
    query_posts(array(
    'showposts'=> 4,
    'post_status'=>'publish',
    'ignore_sticky_posts'=>1,
    'post__not_in' =>$sticky,
    'category__in'=>$category[0]->cat_ID
));
        $i=1;?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="grey-new">
        <div class="grey-new-title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></div>
        <div class="social-activity">
            <span><i class="far fa-thumbs-up"></i></span><span>123</span><span><i class="far fa-comment-dots"></i></span><span><?php comments_number( '0', '1', '%' );?></span>
        </div>
    </div>
    <?php endwhile;
        endif;
        wp_reset_query();?>
</div>
