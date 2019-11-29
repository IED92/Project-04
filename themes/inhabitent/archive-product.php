<?php

/**
 * Template for displaying products.
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>
<div class="shop-content">
	<div id="primary" class="content-area container">
		<main id="main" class="site-main" role="main">

			<?php if (have_posts()) : ?>

				<header class="page-header">
					<h1 class="page-title">Shop Stuff</h1>
					<?php
						$args = array('post_type' => 'product_type');
						$terms = get_terms($args);
						?>

					<div class="product-links">
						<?php foreach ($terms as $term) :; ?>
							<a href="<?php echo get_site_url(); ?>/<?php echo $term->taxonomy; ?>/<?php echo $term->slug; ?>"><?php echo $term->name; ?></a>
						<?php endforeach; ?>
					</div>
				</header><!-- .page-header -->

				<?php /* Start the Loop */ ?>

				<div class="product-archive-grid">
					<?php while (have_posts()) : the_post(); ?>
						<div class="product-grid-item">
							<?php
									get_template_part('template-parts/product', 'archive');
									?>
						</div>

					<?php endwhile; ?>
				</div>
			<?php else : ?>

				<?php get_template_part('template-parts/content', 'none'); ?>

			<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php get_footer(); ?>