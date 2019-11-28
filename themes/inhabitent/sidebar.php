<?php

/**
 * The sidebar containing the main widget area.s
 *
 * @package RED_Starter_Theme
 */

if (!is_active_sidebar('sidebar-1')) {
	return;
}
?>

<div id="secondary" class="side-bar" role="complementary">
	<div class="contact-info">
		<h2>Contact Info</h2>
		<div class="email-info">
			<i class="fas fa-envelope"></i>
			<a href="mailto:info@inhabitent.com">info@inhabitent.com</a>
		</div>
		<div class="phone-info">
			<i class="fas fa-phone-alt"></i>
			<a href="tel:" 15553434567>778-456-7891</a>
		</div>
		<div class="socials-icons">
			<i class="fab fa-facebook-square"></i>
			<i class="fab fa-twitter-square"></i>
			<i class="fab fa-google-plus-square"></i>
		</div>
	</div>
	<?php dynamic_sidebar('sidebar-1'); ?>
</div><!-- #secondary -->