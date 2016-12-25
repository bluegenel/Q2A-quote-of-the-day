<?php

/*
	Plugin Name: Quote of the Day
	Plugin URI: https://github.com/bluegenel/q2a-quote-of-the-day
	Plugin Description: Quote of the Day
	Plugin Version: 1.0
	Plugin Date: 2016-12-25
	Plugin Author: Richard Hulston
	Plugin Author URI: http://www.richardhulston.com
	Plugin License: GPLv2
	Plugin Minimum Question2Answer Version: 1.4

*/

	if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
		header('Location: ../../');
		exit;
	}


	qa_register_plugin_module('widget', 'q2a-quote.php', 'q2a_quote', 'Quote of the Day');
	

/*
	Omit PHP closing tag to help avoid accidental output
*/