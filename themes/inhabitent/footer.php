<?php

/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo" style="background:url('<?= get_template_directory_uri() ?>/img/dark-wood.png');">

	<div class="site-info">
		<div class="contact-info">
			<h1>Contact Info</h1>
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
		<div id="footer-sidebar" class="secondary">
			<div id="footer-sidebar1">
				<?php
				if (is_active_sidebar('footer-sidebar-1')) {
					dynamic_sidebar('footer-sidebar-1');
				}
				?>
			</div>
		</div>
		<img src="<?= get_template_directory_uri() ?>/img/logos/inhabitent-logo-text.svg">
	</div> <!-- .site-info -->
	<h2 class="copywrite-notice">COPYRIGHT &copy 2019 INHABITENT</h2>
</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>

</html>