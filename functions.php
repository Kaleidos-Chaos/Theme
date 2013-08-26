<?php

function kc_register_menus() {
  register_nav_menu('primary', __( 'Main Menu', 'kaleidos-chaos' ));
  register_nav_menu('footer', __( 'Footer Menu', 'kaleidos-chaos' ));
}
add_action( 'init', 'kc_register_menus' );

function kc_prepare_quotes() {
	global $kc_quotes;

	$kc_quotes = file(dirname(__FILE__).'/quotes.txt');
	foreach ($kc_quotes as $i => $quote) {
		$quote = ucfirst(preg_replace('/^[\s\.,]+|[\s\.,]+$/', '', $quote));
		if (strlen($quote) <= 0) {
			unset($kc_quotes[$i]);
			$kc_quotes = array_values($kc_quotes);
		} else {
			$kc_quotes[$i];
		}
	}
}
kc_prepare_quotes();

function kc_get_quote($remove = false) {
	global $kc_quotes;

	if (count($kc_quotes) <= 0) {
		return '';
	}

	$key = rand(0, count($kc_quotes)-1);
	$quote = $kc_quotes[$key];

	if ($remove) {
		unset($kc_quotes[$key]);
		$kc_quotes = array_values($kc_quotes);
	}

	return $quote;
}

function kc_quote($remove = false) {
	echo kc_get_quote($remove);
}

function kc_get_random_styles() {

	$rotation = (rand(0, 400)/10-20);

	$styles = array(
		'font-size' => rand(7, 24).'rem',
		'opacity' => rand(18, 38)/1000,
		'top' => (rand(0, 950)/10-25).'%',
		'left' => (rand(0, 1900)/10-100).'%',
		'-webkit-transform' => 'rotate('.$rotation.'deg)',
		'-moz-transform' => 'rotate('.$rotation.'deg)',
		'-ms-transform' => 'rotate('.$rotation.'deg)',
		'-o-transform' => 'rotate('.$rotation.'deg)',
		'transform' => 'rotate('.$rotation.'deg)'
	);

	$style = '';
	foreach ($styles as $property => $value) {
		$style .= $property.':'.$value.';';
	}

	return 'style="'.$style.'" data-rotation="'.$rotation.'"';
}

function kc_random_styles() {
	echo kc_get_random_styles();
}