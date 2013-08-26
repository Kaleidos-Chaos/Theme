/**
 * Adjustments for kaleidos-chaos.de
 */
/* global jQuery */
jQuery(function($) {
	'use strict';

	var $window = $(window),
		$document = $(document),
		$background = $('#background'),
		$vigniette = $background.find('.vigniette'),
		$quotes = $vigniette.find('.quote');

	/* Prepare scroll animations */
	$quotes.each(function() {
		var $quote = $(this),
			targetX = Math.random()*$window.width(),
			targetY = Math.random()*$window.height();

		if (+$quote.css('top').replace('px', '') > 0) {
			targetY *= -1;
		}

		if (+$quote.css('left').replace('px', '') > 0) {
			targetX *= -1;
		}
		
		$quote.data('scroll-target', {x: targetX, y: targetY});
	});

	/* Perform scroll animations */
	$window.scroll((function scroll() {
		var offset = $window.scrollTop()/($document.height()-$window.height());

		$quotes.each(function() {
			var $quote = $(this),
				target = $quote.data('scroll-target');
				console.log('rotate('+$quote.data('rotation')+'deg) translate3d('+target.x*offset+'px, '+target.y*offset+'px, 0)');
			$quote.css('transform', 'rotate('+$quote.data('rotation')+'deg) translate3d('+target.x*offset+'px, '+target.y*offset+'px, 0)');
		});

		return scroll;
	})());
});