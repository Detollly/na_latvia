<?php 

	$expert_consultant_custom_style = '';

	// Logo Size
	$expert_consultant_logo_top_margin = get_theme_mod('expert_consultant_logo_top_margin');
	$expert_consultant_logo_bottom_margin = get_theme_mod('expert_consultant_logo_bottom_margin');
	$expert_consultant_logo_left_margin = get_theme_mod('expert_consultant_logo_left_margin');
	$expert_consultant_logo_right_margin = get_theme_mod('expert_consultant_logo_right_margin');

	if( $expert_consultant_logo_top_margin != '' || $expert_consultant_logo_bottom_margin != '' || $expert_consultant_logo_left_margin != '' || $expert_consultant_logo_right_margin != ''){
		$expert_consultant_custom_style .=' .logo {';
			$expert_consultant_custom_style .=' margin-top: '.esc_attr($expert_consultant_logo_top_margin).'px; margin-bottom: '.esc_attr($expert_consultant_logo_bottom_margin).'px; margin-left: '.esc_attr($expert_consultant_logo_left_margin).'px; margin-right: '.esc_attr($expert_consultant_logo_right_margin).'px;';
		$expert_consultant_custom_style .=' }';
	}

	// Site Title Font Size
	$expert_consultant_site_title_font_size = get_theme_mod('expert_consultant_site_title_font_size');
	if( $expert_consultant_site_title_font_size != ''){
		$expert_consultant_custom_style .=' .logo h1.site-title, .logo p.site-title {';
			$expert_consultant_custom_style .=' font-size: '.esc_attr($expert_consultant_site_title_font_size).'px;';
		$expert_consultant_custom_style .=' }';
	}