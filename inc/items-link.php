<?php
/**
 * SETUP LINK | 1.0.0 | 210817 | inc/items-link.php
 *
 * @package      Setup Link
 * @author       Mark Corpuz
 * @since        1.0.0
 * @license      GPL-2.0+
**/


// Go to CPT entry
function setup_link_title( $pid ) {

	$entry = get_field( 'link_entry', $pid );
	if( is_array( $entry ) && setup_link_array_validate( 'title', $entry ) ) {

		global $wp_query;
		$tag = ( is_singular() || -1 === $wp_query->current_post ) ? 'h3' : 'h2';
		echo '<' . $tag . ' class="item title"><a href="' . get_the_permalink( $pid ) . '">' . $entry[ "title" ] . '</a></' . $tag . '>';

	} else {

		echo setup_child_title();

	}

}


// Go to actual Link found in the CPT entry
function setup_link_title_to_url( $pid ) {

	$entry = get_field( 'link_entry', $pid );
	if( is_array( $entry ) && setup_link_array_validate( 'title', $entry ) ) {

		global $wp_query;
		$tag = ( is_singular() || -1 === $wp_query->current_post ) ? 'h3' : 'h2';

		if( setup_link_array_validate( 'target', $entry ) ) {
			$link_target = ' target="_blank"';
		} else {
			$link_target = '';
		}

		echo '<' . $tag . ' class="item title"><a href="' . $entry[ "url" ] . '"'.$link_target.'>' . $entry[ "title" ] . '</a></' . $tag . '>';

	} else {

		echo setup_child_title();

	}

}


// Simple array & key validation
function setup_link_array_validate( $key, $array ) {

	if( array_key_exists( $key, $array ) && !empty( $array[ $key ] ) ) {
		return $array[ $key ];
	} else {
		return FALSE; // return nothing
	}

}


// List custom taxonomy associated to the entry
function setup_link_list_taxonomy( $pid, $taxonomy ) {

	$print = ''; // declare empty variable
	$counter = 1; // counter for term entry

	$terms_x = get_the_terms( $pid, $taxonomy );

	if( is_array( $terms_x ) ) :

		$term_count = count( $terms_x );

		foreach( $terms_x as $term ) {

			$print .= '<a class="item taxonomy text-xs" href="'.get_term_link( $term->term_taxonomy_id ).'">'.$term->name.'</a>';

			// add coma
			if( $counter != $term_count ) {
				$print .= ', ';
			}

			$counter++;
		}

	endif;

	echo $print;

}


// Display link declared in taxonomy
// https://stackoverflow.com/questions/39687250/how-do-you-display-advanced-custom-fields-on-taxonomy-terms
function setup_display_link_list_from_taxonomy_archive () {

	$entry = get_field('link_entry');
    $link_url = $entry['url'];
    $link_title = $entry['title'];
    $link_target = $entry['target'] ? $link['target'] : '_self';

	if( $entry ) {
		echo '<a class="item title"><a href="' . $entry[ "url" ] . '"'.$link_target.'>' . $entry[ "title" ] . '</a>';
	} else {}

}