			</div><!-- #main -->
			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					&copy; <?php echo date('Y'); ?> <a href="<?php bloginfo('home'); ?>">Kaleidos Chaos</a>
				</div><!-- .site-info -->
				<nav id="footer-navigation" class="navigation footer-navigation" role="navigation">
                    <?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_class' => 'nav-menu' ) ); ?>
                </nav><!-- #site-navigation -->
                <div class="clear"></div>
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<div id="background">
			<div class="vigniette">
				<?php for ($i=0; $i < 15; $i++): ?>
					<div class="quote quote-<?php echo rand(1, 6); ?>" <?php kc_random_styles(); ?>><?php kc_quote(true); ?></div>
				<?php endfor; ?>
			</div>
		</div>

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/javascripts/vendor/jquery.colorbox-min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/javascripts/scripts.js"></script>
		<?php wp_footer(); ?>
		<?php $options = get_option('kc_theme_options'); if ($options['googleanalytics']) : ?>
		<script type="text/javascript">
			var _gaq=_gaq||[];_gaq.push(["_setAccount", <?php echo '"'.$options['googleanalytics'].'"'; ?>]);_gaq.push(["_trackPageview"]);(function(){var a=document.createElement("script");a.type="text/javascript";a.async=!0;a.src=("https:"==document.location.protocol?"https://ssl":"http://www")+".google-analytics.com/ga.js";var b=document.getElementsByTagName("script")[0];b.parentNode.insertBefore(a,b)})();
		</script>
		<?php endif; ?>
	</body>
</html>