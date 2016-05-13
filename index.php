<?
/**
 * @package WordPress
 * @subpackage blank_theme
 */
?>
<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<?php the_content(); ?>
<?php endwhile; ?>
<?php get_footer(); ?>