<?php 

$organic_farm_custom_style= "";

//Slider-content-alignment

$agriculture_farming_slider_content_alignment = get_theme_mod( 'agriculture_farming_slider_content_alignment','CENTER-ALIGN');

if($agriculture_farming_slider_content_alignment == 'LEFT-ALIGN'){

$organic_farm_custom_style .='.carousel-caption{';

	$organic_farm_custom_style .='text-align:left;  right: 50%; left: 15%;';

$organic_farm_custom_style .='}';


}else if($agriculture_farming_slider_content_alignment == 'CENTER-ALIGN'){

$organic_farm_custom_style .='.carousel-caption{';

	$organic_farm_custom_style .='text-align:center;   right: 30%; left: 30%;';

$organic_farm_custom_style .='}';


}else if($agriculture_farming_slider_content_alignment == 'RIGHT-ALIGN'){

$organic_farm_custom_style .='.carousel-caption{';

	$organic_farm_custom_style .='text-align:right;  right: 15%; left: 50%;';

$organic_farm_custom_style .='}';

}

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
    $organic_farm_custom_style .= 'position: fixed; box-shadow: none; background: #8ec63f; padding: 0px 60px;';
    $organic_farm_custom_style .= '}';

    $organic_farm_custom_style .= '.admin-bar .fixed {';
    $organic_farm_custom_style .= ' margin-top: 32px;';
    $organic_farm_custom_style .= '}';
}