<?php

register_plugin_hook('all', 'system', 'example_plugin_hook_handler');

// This function will be called for any event of type 'object'
function example_plugin_hook_handler($hook, $type, $value, $params) {
	// logic here.
}
