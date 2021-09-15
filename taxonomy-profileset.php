<?php
/**
 * SETUP CHILD | 1.0.0 | 210819 | taxonomy-profileset.php
 *
 * @package      Setup Child
 * @author       Mark Corpuz
 * @since        1.0.0
 * @license      GPL-2.0+
**/

// Full Width
add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

/**
 * Blog Archive Body Class
 *
 */
function ea_blog_archive_body_class( $classes ) {
	$classes[] = 'profile';
	return $classes;
}
add_filter( 'body_class', 'ea_blog_archive_body_class' );

// Move breadcrumbs
remove_action( 'genesis_before_loop', 'genesis_do_breadcrumbs' );
add_action( 'genesis_archive_title_descriptions', 'genesis_do_breadcrumbs', 8 );

// Remove description on paginated archives
if( get_query_var( 'paged' ) ) {
	remove_action( 'genesis_archive_title_descriptions', 'genesis_do_archive_headings_intro_text', 12, 3 );
}

function title_taxonomy() {
    echo '<div class="text-xs">taxonomy-profileset.php</div>';
    setup_display_link_list_from_taxonomy_archive ();
    //setup_child_title();
    //setup_link_title( get_the_ID() );
    //setup_link_title_to_url( get_the_ID() );
    //setup_link_list_taxonomy( get_the_ID(), 'profile-set' );
    //setup_link_title_to_url( get_the_ID() );
}
add_action( 'genesis_before_content_sidebar_wrap', 'title_taxonomy' );

genesis();
