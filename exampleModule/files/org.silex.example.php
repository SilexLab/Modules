<?php
class org_silex_example implements IModule {
	public function __construct() {
		// Nothing to initialize
	}

	public function register() {
		Event::listen('silex.construct.end', ['UExampleModule', 'getSiteTitle']);
	}

	public function getParents() {
		return null;
	}
}
