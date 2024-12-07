<?php
/**
 * Plugin main file.
 *
 * @package LocationTaxonomy
 * @author Felix Arntz <hello@felix-arntz.me>
 *
 * @wordpress-plugin
 * Plugin Name: Location Taxonomy
 * Plugin URI: https://wordpress.org/plugins/location-taxonomy/
 * Description: Registers a hierarchical taxonomy to associate your posts with locations.
 * Version: 1.0.0
 * Requires at least: 6.0
 * Requires PHP: 7.2
 * Author: Felix Arntz
 * Author URI: https://felix-arntz.me
 * License: GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: location-taxonomy
 * Tags: location, taxonomy, post, hierarchical
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Registers the location taxonomy.
 *
 * @since 1.0.0
 */
function location_taxonomy_register_taxonomy(): void {
	$post_types = array( 'post' );

	/**
	 * Filters the post types the location taxonomy should be registered for.
	 *
	 * @since 1.0.0
	 *
	 * @param string[] $post_types Array of post type slugs.
	 */
	$post_types = (array) apply_filters( 'location_taxonomy_post_types', $post_types );

	register_taxonomy(
		'location',
		$post_types,
		array(
			'hierarchical'      => true,
			'rewrite'           => array(
				'slug'         => 'location',
				'hierarchical' => true,
			),
			'public'            => true,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_rest'      => true,
			'rest_base'         => 'locations',
			'labels'            => array(
				'name'                       => _x( 'Locations', 'taxonomy general name', 'location-taxonomy' ),
				'singular_name'              => _x( 'Location', 'taxonomy singular name', 'location-taxonomy' ),
				'add_new_item'               => __( 'Add New Location', 'location-taxonomy' ),
				'add_or_remove_items'        => __( 'Add or remove locations', 'location-taxonomy' ),
				'back_to_items'              => __( '&larr; Go to Locations', 'location-taxonomy' ),
				'choose_from_most_used'      => __( 'Choose from the most used locations', 'location-taxonomy' ),
				'edit_item'                  => __( 'Edit Location', 'location-taxonomy' ),
				'item_link'                  => __( 'Location Link', 'location-taxonomy' ),
				'item_link_description'      => __( 'A link to a location.', 'location-taxonomy' ),
				'items_list'                 => __( 'Locations list', 'location-taxonomy' ),
				'items_list_navigation'      => __( 'Locations list navigation', 'location-taxonomy' ),
				'new_item_name'              => __( 'New Location Name', 'location-taxonomy' ),
				'no_terms'                   => __( 'No locations', 'location-taxonomy' ),
				'not_found'                  => __( 'No locations found.', 'location-taxonomy' ),
				'popular_items'              => __( 'Popular Locations', 'location-taxonomy' ),
				'search_items'               => __( 'Search Locations', 'location-taxonomy' ),
				'all_items'                  => __( 'All Locations', 'location-taxonomy' ),
				'parent_item'                => __( 'Parent Location', 'location-taxonomy' ),
				'parent_item_colon'          => __( 'Parent Location:', 'location-taxonomy' ),
				'separate_items_with_commas' => __( 'Separate locations with commas', 'location-taxonomy' ),
				'update_item'                => __( 'Update Location', 'location-taxonomy' ),
				'view_item'                  => __( 'View Location', 'location-taxonomy' ),
			),
		)
	);
}
add_action( 'init', 'location_taxonomy_register_taxonomy' );
