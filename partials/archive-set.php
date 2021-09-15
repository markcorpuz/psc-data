<?php
/**
 * SETUP LINK | 1.0.0 | 210816 | partials/archive-set.php
 *
 * @package      Setup Child
 * @author       Mark Corpuz
 * @since        1.0.0
 * @license      GPL-2.0+
**/


echo '<article class="module post-summary">';

	// FEATURED IMAGE
	//setup_child_image();
	//setup_child_image_nolink();
	//setup_child_bgimage();
	//setup_child_bgimage_nolink();
	//setup_child_bgimage_wtitle();
	//setup_child_bgimage_wtitle_nolink();

	echo '<div class="items info">';

		// OVERLINE
		//setup_child_overline();
		//setup_child_overline_nolink();
		//setup_child_overline_override();
		//setup_child_overline_override_nolink();
		
		// TITLE
		echo '<div class="text-xs"">partials/archive-set.php</div>';
		//setup_child_title();
		//setup_link_title( get_the_ID() );
        setup_link_title_to_url( get_the_ID() );
        //setup_link_list_taxonomy( get_the_ID(), 'set' );
        //setup_link_list_taxonomy( get_the_ID(), 'category' );
        //setup_link_list_taxonomy( get_the_ID(), 'post_tag' );
		//setup_link_display_categories_list();
		//setup_link_display_tags_list();
		//setup_child_title_nolink();

		// AUTHOR
		//setup_child_author();
		//setup_child_author_nolink();
		//setup_child_author_by();
		//setup_child_author_by_nolink();
		//setup_child_author_icon();
		//setup_child_author_icon_nolink();
		//setup_child_author_gravatar();
		
		// DATE
		//setup_child_date();
		//setup_child_date_mdy();
		//setup_child_date_day_mdy();
		//setup_child_date_mdy_time();

		// DATE & AUTHOR
		//setup_child_dateauthor();
		//setup_child_dateauthor_nolink();

		// EXCERPT
		//setup_child_excerpt();
		//setup_child_excerpt_maxwords();

		// ADMIN
		//setup_child_edit();
		//setup_child_edit_date_modified();

	echo '</div>';

echo '</article>';