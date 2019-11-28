<?php

/**
 * Template part for displaying product archives.
 *
 * @package RED_Starter_Theme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <?php if (has_post_thumbnail()) : ?>
      <div class="product-thumbnail-wrapper">
        <a href="<?php echo get_post_permalink() ?>"><?php the_post_thumbnail('large'); ?></a>
      </div>
    <?php endif; ?>
    <div class="product-info">
      <h2 class="p-title"><?php the_title(); ?></h2>
      <span class="p-price"><?php the_field('product_price'); ?></span>
      <span class="separator">......................................................................</span>
    </div>
  </header>
</article>