<?php
	/*
		Plugin Name: Plugin: Frame-Fix
		Plugin URI: http://hovida-design.de
		Description: Fixxt ein Bug der Core, wenn Wordpress �ber einem iFrame betrieben wird
		Version: 1.0
		Author: Adrian Preu�
	*/
	
	remove_action('login_init', 'send_frame_options_header', 10, 0);
	remove_action('admin_init', 'send_frame_options_header', 10, 0);
?>