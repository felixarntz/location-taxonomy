<?php
/**
 * Tests for the plugin main file.
 *
 * @package LocationTaxonomy\Tests
 * @author Felix Arntz <hello@felix-arntz.me>
 */

class Location_Taxonomy_Tests extends WP_UnitTestCase {

	public function test_hooks() {
		$this->assertSame( 10, has_action( 'init', 'location_taxonomy_register_taxonomy' ) );
	}

	public function test_location_taxonomy_register_taxonomy() {
		$this->assertFalse( taxonomy_exists( 'location' ) );

		location_taxonomy_register_taxonomy();

		$this->assertTrue( taxonomy_exists( 'location' ) );
		$this->assertTrue( is_taxonomy_hierarchical( 'location' ) );
		$this->assertContains( 'location', get_object_taxonomies( 'post' ) );
	}

	public function test_location_taxonomy_register_taxonomy_filter() {
		$this->assertFalse( taxonomy_exists( 'location' ) );

		add_filter(
			'location_taxonomy_post_types',
			function () {
				return array( 'page' );
			}
		);

		location_taxonomy_register_taxonomy();
		$this->assertNotContains( 'location', get_object_taxonomies( 'post' ) );
		$this->assertContains( 'location', get_object_taxonomies( 'page' ) );
	}
}
