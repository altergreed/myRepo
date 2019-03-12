<?php global $redux_demo;?>
<div class="sidebar-announce col-sm-12 col-md-4 col-lg-3">
    <div class="border">
        <div class="title-announce d-flex align-items-center">
            <span>Читайте уже скоро:</span>
        </div>
        <?php
        $sticky = get_option( 'sticky_posts' );
        query_posts(
            array(
                    'showposts' => 4,
                    'post__not_in' =>$sticky,
                    'post_status'=>'future',));
        $i=1;?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

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
        endif;
        wp_reset_query();?>
    </div>
</div>
