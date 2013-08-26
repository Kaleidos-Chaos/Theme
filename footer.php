			</div><!-- #main -->
			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					&copy; <?php echo date('Y'); ?> <a href="<?php bloginfo('home'); ?>">Kaleidos Chaos</a>
				</div><!-- .site-info -->
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
		<script src="<?php echo get_template_directory_uri(); ?>/javascripts/scripts.js"></script>
		<?php wp_footer(); ?>
	</body>
</html>