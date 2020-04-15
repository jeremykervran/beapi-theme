<?php

get_header();

echo '<div class="container">';
echo '<h1>Annonces</h1>';

if ( is_plugin_active( 'lbc-beapi/lbc-beapi.php' ) ) {
	include_once( LBC_PLUGIN_DIR . 'views/search.php' );
}


if ( have_posts() ) {
	while ( have_posts() ) : the_post();
		echo '<h2>';
		the_title();
		echo '</h2>';

		echo '<div class="entry-content">';
		the_content();
		echo '</div>';

		echo '<div class="featured-image" style="width: 300px; height: 300px;">';
		the_post_thumbnail();
		echo '</div>';

	endwhile;
}

echo '</div>';

get_footer();
