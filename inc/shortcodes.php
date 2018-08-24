<?php


// example: [pageurl id="2"]
function nstheme_page_url_shortcode( $atts ) {
	
	$page_id = false;
	
	if ( isset( $atts['id'] ) ) {
		$page_id = $atts['id'];
	}

	if ( ! $page_id && isset( $atts['slug'] ) ) {
		$page = get_page_by_path( $atts['slug'] );
		if( $page ) {
			$page_id = $page->ID;
		}
	}

	if ( $page_id ) {
        /**
         * In case WPML is used, get page with the correct language
         */
		if ( function_exists('icl_object_id') ) {
			return get_page_link( icl_object_id($atts['id'] , 'page', true) ); 
		}
	
		return get_page_link( $atts['id'] );
	}

	return home_url( add_query_arg( $_GET, $wp->request ) );
}
add_shortcode( 'pageurl', 'nstheme_page_url_shortcode' );