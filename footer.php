<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ThemeTim_WordPress_Framework
 */

?>

<footer class="footer-main">
	<!--------------- Footer Middle ---------------->
	<section class="footer-middle">
        <div class="container">
            <div class="row">
				<?php
				if(get_theme_mod('middle_footer_text_enable','1')) :
					do_action('themetim_middle_footer_description');
				 endif;
				if(get_theme_mod('middle_footer_nav_1_enable','1')) :
					do_action('themetim_middle_footer_nav_1');
				 endif;
				if(get_theme_mod('middle_footer_nav_2_enable','1')) :
					do_action('themetim_middle_footer_nav_2');
				 endif;
				if(get_theme_mod('middle_footer_nav_3_enable','1')) :
					do_action('themetim_middle_footer_nav_3');
				endif; ?>
			</div>
		</div>
	</section>
	<!--------------- Footer bottom ---------------->
	<section class="footer-bottom">
		<div class="container">
			<div class="row">
				<?php
				if(get_theme_mod('bottom_footer_copyright_enable','1')) :
					do_action('themetim_bottom_footer_copyright');
				endif;
				if(get_theme_mod('bottom_footer_nav_enable','1')) :
					do_action('themetim_bottom_footer_nav');
				endif;
				?>

			</div>
		</div>
	</section>
</footer>
</div>
<?php wp_footer(); ?>

<script>
	var $ = jQuery;
	$(function() {
		/***************************************************************************************
		 * Mega Menu
		 ***************************************************************************************/
		window.prettyPrint && prettyPrint();
		$(document).on('click', '.primary-menu .xs-dropdown-menu', function(e) {
			e.stopPropagation();
		});
		$('.primary-menu .xs-dropdown-menu').parent().hover(function() {
			var menu = $(this).find("ul");
			var menupos = $(menu).offset();
			if (menupos.left + menu.width() > $(window).width()) {
				var newpos = -$(menu).width();
				menu.css({ left: newpos });
			}
		});
		$(document).on('click', '.primary-menu .xs-angle-down', function(e) {
			e.preventDefault();
			$(this).parents('.xs-dropdown').find('.xs-dropdown-menu').toggleClass('active');
		});
	});
</script>



</body>
</html>
