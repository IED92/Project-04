<?php

/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">

	<div class="front-hero">
		<div class="front-hero-img"><?php the_post_thumbnail(); ?></div>
		<!-- get_template_directory_uri(); -->
		<span class="full-logo"><img src= "<?= get_template_directory_uri(); ?>/img/logos/inhabitent-logo-full.svg" alt="Inhabitent"></span>
	</div>

	<main id="main" class="site-main" role="main">

		<?php while (have_posts()) : the_post(); ?>

			<?php get_template_part('template-parts/content', 'page'); ?>

		<?php endwhile; // End of the loop. 
		?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>