<?php

/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<div class="about-content">
	<div id="primary" class="content-area">
		<div class="about-hero">
			<div class="about-hero-img"><?php the_post_thumbnail(); ?></div>
		</div>
		<main id="main" class="site-main" role="main">

			<?php while (have_posts()) : the_post(); ?>

				<?php get_template_part('template-parts/content', 'page'); ?>

			<?php endwhile; // End of the loop. 
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php get_footer(); ?>