<?php
/**
 * Rank Math Seo plugin OpenGraph data
 * @return mixed|string
 */
function get_rank_math_open_graph_image() {
	if ( is_plugin_active( 'seo-by-rank-math/rank-math.php' ) ) {
		// Get OpenGraph img ID
		$open_graph_image = \RankMath\Helper::get_settings( 'titles.open_graph_image_id' );
		if ( ! empty( $open_graph_image ) ) {
			return $open_graph_image;
		}
	}

	return null;
}