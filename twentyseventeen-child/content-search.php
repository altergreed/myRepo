<?php
/**
 * The template part for displaying results in search pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Sydney
 */
?>


<?php the_title();?>
<?php $content = get_the_excerpt();
echo $content;?>
