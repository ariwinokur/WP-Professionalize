<?php

/* Function to change Howdy to Welcome */

add_filter('gettext', 'replace_howdy', 10, 3);

function replace_howdy($translated, $text, $domain) {

    if (!is_admin() || 'default' != $domain)
        return $translated;

    if (false !== strpos($translated, 'Howdy'))
        return str_replace('Howdy', 'Welcome', $translated);

    return $translated;
}

/* Function to remove Howdy */

add_filter('gettext', 'remove_howdy', 10, 3);

function remove_howdy($translated, $text, $domain) {

    if (!is_admin() || 'default' != $domain)
        return $translated;

    if (false !== strpos($translated, 'Howdy'))
        return str_replace('Howdy,', '', $translated);

    return $translated;
}



/* Default Dashboard Widgets */

// Main column (left):
$wp_meta_boxes['dashboard']['normal']['high']['dashboard_browser_nag']
$wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']
$wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']

// Side Column (right):
$wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']
$wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']

/* Function to remove Dashboard Widgets */

function remove_dashboard_meta() {
        remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
        remove_meta_box( 'dashboard_secondary', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
        remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
        remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');//since 3.8
}
add_action( 'admin_init', 'remove_dashboard_meta' );

/* Basic Function to create Dashboard Widget */

add_action( 'wp_dashboard_setup', 'register_my_dashboard_widget' );
function register_my_dashboard_widget() {
	wp_add_dashboard_widget(
		'my_dashboard_widget',
		'My Dashboard Widget',
		'my_dashboard_widget_display'
	);

}

function my_dashboard_widget_display() {
    echo 'Hello, I am Mr. Widget';
}



?>