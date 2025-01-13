=== Location Taxonomy ===

Plugin Name:  Location Taxonomy
Plugin URI:   https://wordpress.org/plugins/location-taxonomy/
Author:       Felix Arntz
Author URI:   https://felix-arntz.me
Contributors: flixos90
Donate link:  https://felix-arntz.me/wordpress-plugins/
Tested up to: 6.7
Stable tag:   1.0.0
License:      GPLv2 or later
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Tags:         location, taxonomy, post, hierarchical

Registers a hierarchical taxonomy to associate your posts with locations.

== Description ==

This plugin adds a "Location" taxonomy to your website - plain and simple. The taxonomy allows you to associate your posts with specific locations.

By default, the taxonomy will be available for posts. This can be customized with a filter.

== Installation ==

1. Upload the entire `location-taxonomy` folder to the `/wp-content/plugins/` directory or download it through the WordPress backend.
2. Activate the plugin through the 'Plugins' menu in WordPress.

== Frequently Asked Questions ==

= Where can I configure the plugin? =

This plugin doesn't come with a settings screen or options of any kind. Once you install it, you should find a "Location" taxonomy entry in your "Posts" menu.

= How can I modify for which post types the location taxonomy is available? =

This is very straightforward using the built-in filter `loctax_post_types`.

For example, the following snippet would additionally show the taxonomy for pages:

`
add_filter(
	'loctax_post_types',
	function ( $post_types ) {
		$post_types[] = 'page';
		return $post_types;
	}
);
`

= Where should I submit my support request? =

For regular support requests, please use the [wordpress.org support forums](https://wordpress.org/support/plugin/location-taxonomy). If you have a technical issue with the plugin where you already have more insight on how to fix it, you can also [open an issue on GitHub instead](https://github.com/felixarntz/location-taxonomy/issues).

= How can I contribute to the plugin? =

If you have ideas to improve the plugin or to solve a bug, feel free to raise an issue or submit a pull request in the [GitHub repository for the plugin](https://github.com/felixarntz/location-taxonomy). Please stick to the [contributing guidelines](https://github.com/felixarntz/location-taxonomy/blob/main/CONTRIBUTING.md).

You can also contribute to the plugin by translating it. Simply visit [translate.wordpress.org](https://translate.wordpress.org/projects/wp-plugins/location-taxonomy) to get started.

== Changelog ==

= 1.0.0-RC =

* Initial release candidate.
