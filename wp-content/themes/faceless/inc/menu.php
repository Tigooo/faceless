<?php 
function menu_setup() {
	register_nav_menu('main-menu', __('Main menu', 'menu_setup'));
	register_nav_menu('footer-first-menu', __('Footer first menu', 'menu_setup'));
	register_nav_menu('footer-last-menu', __('Footer last menu', 'menu_setup'));
}

add_action('after_setup_theme', 'menu_setup');