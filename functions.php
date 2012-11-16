<?php

// Load Framework //
require_once( dirname(__FILE__) . '/setup.php' );

class YourTheme {

	function __construct() {

		// Constants
		$this->url = sprintf('%s', PL_CHILD_URL);
		$this->dir = sprintf('/%s', PL_CHILD_DIR);
	}

	// antyhing else like actions and functions go here


}
new YourTheme;