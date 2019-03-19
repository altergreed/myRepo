  <div class="slider-industry-news border-top mt-3 mt-sm-4 mt-md-5">
    <div class="title-industry-news d-flex justify-content-center">Новости отрасли</div>
    <div class="industry-slider">
        <div class="owl-carousel owl-theme owl-loaded owl-drag">
            <div class="owl-stage-outer">
                <div class="owl-stage">
                    <?php
                        $i=1;
                        if ( have_posts() ) : query_posts('cat=7');
                        while (have_posts()) : the_post();?>
                            <div class="owl-item <?php if($i<=4) echo 'active';?>">
                                <div class="item">
                                    <?php
                                        the_post_thumbnail(full, array('class'=>'h-100'));
                                    ?>
                                    <div class="item-caption">
                                       <div class="item-wrap d-flex align-items-start flex-column">
                                        <?php
                                            $categories = get_the_category();
                                            if($categories[0]){
                                                echo '<a class="btn-link white" href="' . get_category_link($categories[0]->term_id ) . '">'. $categories[0]->name . '</a>';
                                            }
                                        ?>
                                        <div class="industry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                                        <div class="social-activity mt-auto white">
                                            <span><i class="far fa-thumbs-up"></i></span><span><?php if(function_exists('wp_ulike_get_post_likes')):?><?=wp_ulike_get_post_likes(get_the_ID());?><?php endif;?></span><span><i class="far fa-comment-dots"></i></span><span><?=$post->comment_count;?></span>
                                        </div>
                                    </div></div>
                                </div>
                            </div>
                        <?php $i=$i+1;?>
                        <?php endwhile;
                        endif;
                        wp_reset_query();?>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center">
        <a class="btn-link text-center" href="<?php echo get_category_link(7);?>">Посмотреть все новости</a>
    </div>
</div>
