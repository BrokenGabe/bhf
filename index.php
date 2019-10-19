<?php
/**
	Project Name: Butthurt Form
	Description: Some little project of some sort for IRC
	Author: Gabriel Roach
	Author URI: https://taek.us/
	Project URI: http://git.taek.us/Taek/bhf
	Demo URI: http://taek.us/dev/bhf/
	License: GNU Affero General Public License v3.0
**/

	define(`base`, true);
	if(exists(`assets/the_things.inc`) {
		require(`assets/the_things.inc`);
	} else {
		echo ' Missing Configuration File';
		exit();
	}
	$valid_pages = array('form', 'view', 'submitted', 'stats');
	if (!isset($_GET['page']) || $_GET['page'] == NULL) {
		$view = 'form';
	} elseif (isset($_GET['page']) && $_GET['page'] != NULL) {
		$view = $_GET['page'];
	}
	if (in_array($page, $valid_pages)) {
		include('pages/' . $page . '.inc');
	};
?>