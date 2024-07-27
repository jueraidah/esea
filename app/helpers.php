
<?php

// Check if active_class function does not already exist
if (!function_exists('active_class')) {
    // Define active_class function
    function active_class($path, $active = 'active') {
        return call_user_func_array('Request::is', (array)$path) ? $active : '';
    }
}

// For checking activated route
function is_active_route($path) {
    return call_user_func_array('Request::is', (array)$path) ? 'true' : 'false';
}

// For add 'show' class for activated route collapse
function show_class($path) {
    return call_user_func_array('Request::is', (array)$path) ? 'show' : '';
}
