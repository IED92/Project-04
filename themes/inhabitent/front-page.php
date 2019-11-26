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
		<span class="full-logo"><img src="<?= get_template_directory_uri(); ?>/img/logos/inhabitent-logo-full.svg" alt="Inhabitent"></span>
	</div>

	<section class="product-info container">
		<h2 class="shop-title">Shop Stuff</h2>
		<?php
		$terms = get_terms(array(
			'taxonomy' => 'product_type',
			'hide_empty' => 0,
		));
		if (!empty($terms) && !is_wp_error($terms)) :
			?>
			<div class="product-type-blocks">
				<?php foreach ($terms as $term) : ?>
					<div class="product-type-wrapper">
						<img src="<?php echo get_template_directory_uri() . '/img/product-type-icons/' . $term->slug; ?>.svg" alt="<?php echo $term->name; ?>" />
						<p><?php echo $term->description; ?></p>
						<p><a href="<?php echo get_term_link($term); ?>" class="product-type-btn"><?php echo $term->name; ?> Stuff</a></p>
					</div>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
	</section>

	<main id="main" class="site-main" role="main">

		<?php while (have_posts()) : the_post(); ?>

			<?php get_template_part('template-parts/content', 'page'); ?>

		<?php endwhile; // End of the loop. 
		?>
		<section class="adventures container">
			<h2>Latest Adventures</h2>
			<ul>
				<li>
					<div class="story-wrapper">
						<img src="<?= get_template_directory_uri() ?>/img/adventure-photos/canoe-girl.jpg" alt="A girl paddling a canoe">
						<div class="story-info">
							<h3 class="entry-title"><a href="https://tent.academy.red/adventure/getting-back-to-nature-in-a-canoe/">Getting Back to Nature in a Canoe</a></h3> <a class="white-btn">Read More</a>
						</div>
					</div>
				</li>
				<li>
					<div class="story-wrapper">
						<img src="<?= get_template_directory_uri() ?>/img/adventure-photos/beach-bonfire.jpg" alt="Bonfire with friends">
						<div class="story-info">
							<h3 class="entry-title"><a href="https://tent.academy.red/adventure/a-night-with-friends-at-the-beach/">A Night with Friends at the Beach</a></h3> <a class="white-btn">Read More</a>
						</div>
					</div>
				</li>
				<li>
					<div class="story-wrapper">
						<img src="<?= get_template_directory_uri() ?>/img/adventure-photos/mountain-hikers.jpg" alt="Hikers taking in the view on a mountain">
						<div class="story-info">
							<h3 class="entry-title"><a href="https://tent.academy.red/adventure/taking-in-the-view-at-big-mountain/">Taking in the View at Big Mountain</a></h3> <a class="white-btn">Read More</a>
						</div>
					</div>
				</li>
				<li>
					<div class="story-wrapper">
						<img src="<?= get_template_directory_uri() ?>/img/adventure-photos/night-sky.jpg" alt="Person star-gazing at the night sky">
						<div class="story-info">
							<h3 class="entry-title"><a href="https://tent.academy.red/adventure/star-gazing-at-the-night-sky/">Star-Gazing at the Night Sky</a></h3> <a class="white-btn">Read More</a>
						</div>
					</div>
				</li>
			</ul>
			<p class="see-more">
				<a href="" class="btn">More Adventures</a>
			</p>
		</section>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>