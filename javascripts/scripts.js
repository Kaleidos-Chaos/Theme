/**
 * Adjustments for kaleidos-chaos.de
 */
/* global jQuery */
jQuery(function($) {
	'use strict';

	var $window = $(window),
		$background = $('#background'),
		$vigniette = $background.find('.vigniette');

	/* make the vigniette always as heigh as the window is. */
	$window.resize((function resize() {
		// $vigniette.height($window.height());

		return resize;
	})());
});