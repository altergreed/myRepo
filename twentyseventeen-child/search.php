<?php
/**
 * The template for displaying search results pages.
 *
 * @package Sydney
 */

get_header(); ?>

<div class="blog-article mt-4">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
            <?php if ( have_posts() ) : ?>

            <h3><?php printf( __( 'Search Results for: %s', 'sydney' ), '<span>' . get_search_query() . '</span>' ); ?></h3>

            <?php /* Start the Loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>

            <?php
				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'content', 'search' );
				?>

            <?php endwhile; ?>

            <?php the_posts_navigation(); ?>

            <?php else : ?>

            <?php get_template_part( 'content', 'none' ); ?>

            <?php endif; ?>
        </div>
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>
