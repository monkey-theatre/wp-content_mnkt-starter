<?php
function register_mnkt_menu() {
	register_nav_menus( array(
		'main'                => __( 'Header Main', 'mnkBlankLang' ),
		'footer'              => __( 'Footer Main', 'mnkBlankLang' ),
	) );
}
add_action( 'init', 'register_mnkt_menu' );

?>