<?php

// Load Framework - don't delete this shit
require_once( dirname(__FILE__) . '/setup.php' );

// Load our shit in a class cause it's awesome
class YourTheme {

	function __construct() {

		// Constants
		$this->url = sprintf('%s', PL_CHILD_URL);
		$this->dir = sprintf('/%s', PL_CHILD_DIR);

		// Add a filter so we can build a few custom LESS vars
		add_filter( 'pless_vars', array(&$this,'custom_less_vars'));

		// Run the theme options
		$this->theme_options();
	}

	// Custom LESS Vars
	function custom_less_vars($less){

		// Adding a custom LESS var, use this in LESS as @my-var. In this example, its linked to a custom color picker in options. We also must set a default or else it's going to error.
		$less['my-var']   =  ploption('my_custom_color') ? ploption('my_custom_color') : '#07C';

		return $less;
	}

	// Build options panel
	function theme_options(){
		
		$opt_array = array(
			'nb_custom_colors' => array(
				'title'		=> 'Sample Color Picker',
				'layout'	=> 'layout',
				'shortexp'	=> 'A simple color picker',
				'type'		=> 'color_multi',
				'selectvalues'	=> array(
					'my_custom_color'	=> array(
						'default'		=> '',
						'css_prop'		=> 'color',
						'selectors'		=> '.whatever',
						'inputlabel'	=> 'Some Selector',
					),
				),
				'exp' => 'Here\'s a color picker running a custom LESS variable.',
			),
		);
			
		$tab_settings = array(
			'name'		=> 'Nicks_Base_Theme',
			'array'		=> $opt_array,
			'icon'		=> CHILD_URL.'/icon.png'
		);

		pl_add_options_page( $tab_settings);
	}

}
new YourTheme;