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
	if(exists(`assets/the_things.php`) {
		require(`assets/the_things.php`);
	} else {
		echo ' Missing Configuration File';
		exit();
	}
?>