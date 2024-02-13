<?php

$organic_farm_custom_style= "";
// sticky-header

if (false === get_option('organic_farm_sticky_header')) {
    add_option('organic_farm_sticky_header', 'off');
}

// Define the custom CSS based on the 'organic_farm_sticky_header' option

if (get_option('organic_farm_sticky_header', 'off') !== 'on') {
    $organic_farm_custom_style .= '.menu_header.fixed {';
    $organic_farm_custom_style .= 'position: static;';
    $organic_farm_custom_style .= '}';
}

if (get_option('organic_farm_sticky_header', 'off') !== 'off') {
    $organic_farm_custom_style .= '.menu_header.fixed {';
    $organic_farm_custom_style .= 'position: fixed; box-shadow: 0px 3px 10px 2px #eee;';
    $organic_farm_custom_style .= '}';

    $organic_farm_custom_style .= '.admin-bar .fixed {';
    $organic_farm_custom_style .= ' margin-top: 32px;';
    $organic_farm_custom_style .= '}';
}

// logo-max-height
	
$organic_farm_logo_max_height = get_theme_mod('organic_farm_logo_max_height','100');

if($organic_farm_logo_max_height != false){

$organic_farm_custom_style .='.custom-logo-link img{';

	$organic_farm_custom_style .='max-height: '.esc_html($organic_farm_logo_max_height).'px;';
	
$organic_farm_custom_style .='}';
}

// body-Width

$organic_farm_theme_width = get_theme_mod( 'organic_farm_width_options','full_width');

if($organic_farm_theme_width == 'full_width'){

$organic_farm_custom_style .='body{';

	$organic_farm_custom_style .='max-width: 100%;';

$organic_farm_custom_style .='}';

}else if($organic_farm_theme_width == 'Container'){

$organic_farm_custom_style .='body{';

	$organic_farm_custom_style .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';

$organic_farm_custom_style .='}';

$organic_farm_custom_style .='@media screen and (max-width:600px){';

$organic_farm_custom_style .='body{';

    $organic_farm_custom_style .='max-width: 100%; padding-right:0px; padding-left: 0px';
    
$organic_farm_custom_style .='} }';

}else if($organic_farm_theme_width == 'container_fluid'){

$organic_farm_custom_style .='body{';

	$organic_farm_custom_style .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';

$organic_farm_custom_style .='}';

$organic_farm_custom_style .='@media screen and (max-width:600px){';

$organic_farm_custom_style .='body{';

    $organic_farm_custom_style .='max-width: 100%; padding-right:0px; padding-left: 0px';
    
$organic_farm_custom_style .='} }';
}

// Scroll-top-position

$organic_farm_scroll_options = get_theme_mod( 'organic_farm_scroll_options','right_align');

if($organic_farm_scroll_options == 'right_align'){

$organic_farm_custom_style .='.scroll-top button{';

	$organic_farm_custom_style .='';

$organic_farm_custom_style .='}';

}else if($organic_farm_scroll_options == 'center_align'){

$organic_farm_custom_style .='.scroll-top button{';

	$organic_farm_custom_style .='right: 0; left:0; margin: 0 auto; top:85% !important';

$organic_farm_custom_style .='}';

}else if($organic_farm_scroll_options == 'left_align'){

$organic_farm_custom_style .='.scroll-top button{';

	$organic_farm_custom_style .='right: auto; left:5%; margin: 0 auto';

$organic_farm_custom_style .='}';
}

// text-transform

$organic_farm_text_transform = get_theme_mod( 'organic_farm_menu_text_transform','CAPITALISE');
if($organic_farm_text_transform == 'CAPITALISE'){

$organic_farm_custom_style .='nav#top_gb_menu ul li a{';

	$organic_farm_custom_style .='text-transform: capitalize ; font-size: 14px;';

$organic_farm_custom_style .='}';

}else if($organic_farm_text_transform == 'UPPERCASE'){

$organic_farm_custom_style .='nav#top_gb_menu ul li a{';

	$organic_farm_custom_style .='text-transform: uppercase ; font-size: 14px;';

$organic_farm_custom_style .='}';

}else if($organic_farm_text_transform == 'LOWERCASE'){

$organic_farm_custom_style .='nav#top_gb_menu ul li a{';

	$organic_farm_custom_style .='text-transform: lowercase ; font-size: 14px;';

$organic_farm_custom_style .='}';
}

//Slider-content-alignment

$organic_farm_slider_content_alignment = get_theme_mod( 'organic_farm_slider_content_alignment','LEFT-ALIGN');

if($organic_farm_slider_content_alignment == 'LEFT-ALIGN'){

$organic_farm_custom_style .='.carousel-caption{';

	$organic_farm_custom_style .='text-align:left;  right: 50%; left: 15%;';

$organic_farm_custom_style .='}';


}else if($organic_farm_slider_content_alignment == 'CENTER-ALIGN'){

$organic_farm_custom_style .='.carousel-caption{';

	$organic_farm_custom_style .='text-align:center;   right: 15%; left: 15%;';

$organic_farm_custom_style .='}';


}else if($organic_farm_slider_content_alignment == 'RIGHT-ALIGN'){

$organic_farm_custom_style .='.carousel-caption{';

	$organic_farm_custom_style .='text-align:right;  right: 15%; left: 50%;';

$organic_farm_custom_style .='}';

}
//related products
if( get_option( 'organic_farm_related_product',true) != 'on') {

$organic_farm_custom_style .='.related.products{';

	$organic_farm_custom_style .='display: none;';
	
$organic_farm_custom_style .='}';
}

if( get_option( 'organic_farm_related_product',true) != 'off') {

$organic_farm_custom_style .='.related.products{';

	$organic_farm_custom_style .='display: block;';
	
$organic_farm_custom_style .='}';
}

// footer text alignment
$organic_farm_footer_content_alignment = get_theme_mod( 'organic_farm_footer_content_alignment','CENTER-ALIGN');

if($organic_farm_footer_content_alignment == 'LEFT-ALIGN'){

$organic_farm_custom_style .='.site-info{';

	$organic_farm_custom_style .='text-align:left; padding-left: 30px;';

$organic_farm_custom_style .='}';

$organic_farm_custom_style .='.site-info a{';

	$organic_farm_custom_style .='padding-left: 30px;';

$organic_farm_custom_style .='}';


}else if($organic_farm_footer_content_alignment == 'CENTER-ALIGN'){

$organic_farm_custom_style .='.site-info{';

	$organic_farm_custom_style .='text-align:center;';

$organic_farm_custom_style .='}';


}else if($organic_farm_footer_content_alignment == 'RIGHT-ALIGN'){

$organic_farm_custom_style .='.site-info{';

	$organic_farm_custom_style .='text-align:right; padding-right: 30px;';

$organic_farm_custom_style .='}';

$organic_farm_custom_style .='.site-info a{';

	$organic_farm_custom_style .='padding-right: 30px;';

$organic_farm_custom_style .='}';

}

// slider button
$mobile_button_setting = get_option('organic_farm_slider_button_mobile_show_hide', '1');
$main_button_setting = get_option('organic_farm_slider_button_show_hide', '1');

$organic_farm_custom_style .= '#slider .home-btn {';

if ($main_button_setting == 'off') {
    $organic_farm_custom_style .= 'display: none;';
}

$organic_farm_custom_style .= '}';

// Add media query for mobile devices
$organic_farm_custom_style .= '@media screen and (max-width: 600px) {';
if ($main_button_setting == 'off' || $mobile_button_setting == 'off') {
    $organic_farm_custom_style .= '#slider .home-btn { display: none; }';
}
$organic_farm_custom_style .= '}';


// scroll button
$mobile_scroll_setting = get_option('organic_farm_scroll_enable_mobile', '1');
$main_scroll_setting = get_option('organic_farm_scroll_enable', '1');

$organic_farm_custom_style .= '.scrollup {';

if ($main_scroll_setting == 'off') {
    $organic_farm_custom_style .= 'display: none;';
}

$organic_farm_custom_style .= '}';

// Add media query for mobile devices
$organic_farm_custom_style .= '@media screen and (max-width: 600px) {';
if ($main_scroll_setting == 'off' || $mobile_scroll_setting == 'off') {
    $organic_farm_custom_style .= '.scrollup { display: none; }';
}
$organic_farm_custom_style .= '}';

// theme breadcrumb
$mobile_breadcrumb_setting = get_option('organic_farm_enable_breadcrumb_mobile', '1');
$main_breadcrumb_setting = get_option('organic_farm_enable_breadcrumb', '1');

$organic_farm_custom_style .= '.archieve_breadcrumb {';

if ($main_breadcrumb_setting == 'off') {
    $organic_farm_custom_style .= 'display: none;';
}

$organic_farm_custom_style .= '}';

// Add media query for mobile devices
$organic_farm_custom_style .= '@media screen and (max-width: 600px) {';
if ($main_breadcrumb_setting == 'off' || $mobile_breadcrumb_setting == 'off') {
    $organic_farm_custom_style .= '.archieve_breadcrumb { display: none; }';
}
$organic_farm_custom_style .= '}';

// single post and page breadcrumb
$mobile_single_breadcrumb_setting = get_option('organic_farm_single_enable_breadcrumb_mobile', '1');
$main_single_breadcrumb_setting = get_option('organic_farm_single_enable_breadcrumb', '1');

$organic_farm_custom_style .= '.single_breadcrumb {';

if ($main_single_breadcrumb_setting == 'off') {
    $organic_farm_custom_style .= 'display: none;';
}

$organic_farm_custom_style .= '}';

// Add media query for mobile devices
$organic_farm_custom_style .= '@media screen and (max-width: 600px) {';
if ($main_single_breadcrumb_setting == 'off' || $mobile_single_breadcrumb_setting == 'off') {
    $organic_farm_custom_style .= '.single_breadcrumb { display: none; }';
}
$organic_farm_custom_style .= '}';

// woocommerce breadcrumb
$mobile_woo_breadcrumb_setting = get_option('organic_farm_woocommerce_enable_breadcrumb_mobile', '1');
$main_woo_breadcrumb_setting = get_option('organic_farm_woocommerce_enable_breadcrumb', '1');

$organic_farm_custom_style .= '.woocommerce-breadcrumb {';

if ($main_woo_breadcrumb_setting == 'off') {
    $organic_farm_custom_style .= 'display: none;';
}

$organic_farm_custom_style .= '}';

// Add media query for mobile devices
$organic_farm_custom_style .= '@media screen and (max-width: 600px) {';
if ($main_woo_breadcrumb_setting == 'off' || $mobile_woo_breadcrumb_setting == 'off') {
    $organic_farm_custom_style .= '.woocommerce-breadcrumb { display: none; }';
}
$organic_farm_custom_style .= '}';