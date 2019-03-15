<?php
/**
 * The template for displaying search results pages.
 *
 * @package Sydney
 */

get_header(); ?>
<div class="search-result mt-4">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
            <?php if ( have_posts() ) : ?>
            <h3><?php printf( __( 'Результаты поиска по запросу: %s'), '<span>' . get_search_query() . '</span>' ); ?></h3>
            <?php /* Start the Loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'content', 'search' );?>

            <?php endwhile; ?>
        </div>
        <?php $pagi=get_the_posts_navigation();
                    $pagi = preg_replace('~<h2.*?h2>~', '', $pagi);
                    echo $pagi; ?>

        <?php else : ?>

        <?php get_template_part( 'content', 'none' ); ?>

        <?php endif; ?>
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>
