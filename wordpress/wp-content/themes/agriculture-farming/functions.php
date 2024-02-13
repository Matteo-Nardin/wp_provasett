<?php
/**
 * Theme functions and definitions
 *
 * @package agriculture_farming
 */

// enque files
if ( ! function_exists( 'agriculture_farming_enqueue_styles' ) ) :
	/**
	 * Load assets.
	 *
	 * @since 1.0.0
	 */
	function agriculture_farming_enqueue_styles() {
		wp_enqueue_style( 'organic-farm-style-parent', get_template_directory_uri() . '/style.css' );
		wp_enqueue_style( 'agriculture-farming-style', get_stylesheet_directory_uri() . '/style.css', array( 'organic-farm-style-parent' ), '1.0.0' );
		// Theme Customize CSS.
		require get_parent_theme_file_path( 'inc/extra_customization.php' );
		wp_add_inline_style( 'agriculture-farming-style',$organic_farm_custom_style );
		require get_theme_file_path( 'inc/extra_customization.php' );
		wp_add_inline_style( 'agriculture-farming-style',$organic_farm_custom_style );

		// blocks css
        wp_enqueue_style( 'agriculture-farming-block-style', get_theme_file_uri( '/assets/css/blocks.css' ), array( 'agriculture-farming-style' ), '1.0' );
	}
endif;
add_action( 'wp_enqueue_scripts', 'agriculture_farming_enqueue_styles', 99 );

// theme setup
function agriculture_farming_setup() {
	add_theme_support( 'align-wide' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( "responsive-embeds" );
	add_theme_support( "wp-block-styles" );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support('custom-background',array(
		'default-color' => 'ffffff',
	));
	add_image_size( 'agriculture-farming-featured-image', 2000, 1200, true );
	add_image_size( 'agriculture-farming-thumbnail-avatar', 100, 100, true );

	$GLOBALS['content_width'] = 525;
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'agriculture-farming' ),
	) );

	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
		'flex-height' => true,
	) );
	/*
	* This theme styles the visual editor to resemble the theme style,
	* specifically font, colors, and column width.
	*/
	add_editor_style( array( 'assets/css/editor-style.css', organic_farm_fonts_url() ) );
}
add_action( 'after_setup_theme', 'agriculture_farming_setup' );

//widgets
function agriculture_farming_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'agriculture-farming' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'agriculture-farming' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget_container"><h3 class="widget-title">',
		'after_title'   => '</h3></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'agriculture-farming' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your pages and posts', 'agriculture-farming' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget_container"><h3 class="widget-title">',
		'after_title'   => '</h3></div>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Sidebar 3', 'agriculture-farming' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'agriculture-farming' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget_container"><h3 class="widget-title">',
		'after_title'   => '</h3></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'agriculture-farming' ),
		'id'            => 'footer-1',
		'description'   => __( 'Add widgets here to appear in your footer.', 'agriculture-farming' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'agriculture-farming' ),
		'id'            => 'footer-2',
		'description'   => __( 'Add widgets here to appear in your footer.', 'agriculture-farming' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 3', 'agriculture-farming' ),
		'id'            => 'footer-3',
		'description'   => __( 'Add widgets here to appear in your footer.', 'agriculture-farming' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 4', 'agriculture-farming' ),
		'id'            => 'footer-4',
		'description'   => __( 'Add widgets here to appear in your footer.', 'agriculture-farming' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'agriculture_farming_widgets_init' );

// remove sections
function agriculture_farming_customize_register() {
  	global $wp_customize;
	$wp_customize->remove_section( 'organic_farm_pro' );
	$wp_customize->remove_section( 'organic_farm_middle_section' );
	$wp_customize->remove_section( 'organic_farm_product_box_section' );

	$wp_customize->remove_setting( 'organic_farm_call_text' );
	$wp_customize->remove_control( 'organic_farm_call_text' );

	$wp_customize->remove_setting( 'organic_farm_email_text' );
	$wp_customize->remove_control( 'organic_farm_email_text' );

	$wp_customize->remove_setting( 'organic_farm_quote_btn' );
	$wp_customize->remove_control( 'organic_farm_quote_btn' );

	$wp_customize->remove_setting( 'organic_farm_quote_btn_link' );
	$wp_customize->remove_control( 'organic_farm_quote_btn_link' );

	$wp_customize->remove_setting( 'organic_farm_slider_content_alignment' );
	$wp_customize->remove_control( 'organic_farm_slider_content_alignment' );

	$wp_customize->remove_setting( 'organic_farm_slider_excerpt_show_hide' );
	$wp_customize->remove_control( 'organic_farm_slider_excerpt_show_hide' );

	$wp_customize->remove_setting( 'organic_farm_footer_text' );
	$wp_customize->remove_control( 'organic_farm_footer_text' );
}
add_action( 'customize_register', 'agriculture_farming_customize_register', 11 );

// dropdown
function agriculture_farming_cate_dropdown(){
	if(get_option('agriculture_farming_cate_show_hide') == true ) {
		return true;
	}
	return false;
}

// customizer
function agriculture_farming_customize( $wp_customize ) {

	wp_enqueue_style('customizercustom_css', esc_url( get_stylesheet_directory_uri() ). '/assets/css/customizer.css');

	require get_theme_file_path( 'inc/custom-control.php' );

	// pro section
	$wp_customize->add_section('agriculture_farming_pro', array(
		'title'    => __('UPGRADE AGRICULTURE PREMIUM', 'agriculture-farming'),
		'priority' => 1,
	));
	$wp_customize->add_setting('agriculture_farming_pro', array(
		'default'           => null,
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control(new Agriculture_Farming_Pro_Control($wp_customize, 'agriculture_farming_pro', array(
		'label'    => __('AGRICULTURE PREMIUM', 'agriculture-farming'),
		'section'  => 'agriculture_farming_pro',
		'settings' => 'agriculture_farming_pro',
		'priority' => 1,
	)));

	// slider
	$wp_customize->add_setting( 'agriculture_farming_slider_content_alignment',
		array(
			'default' => 'CENTER-ALIGN',
			'transport' => 'refresh',
			'sanitize_callback' => 'organic_farm_sanitize_choices'
		)
	);
	$wp_customize->add_control( new Agriculture_Farming_Text_Radio_Button_Custom_Control( $wp_customize, 'agriculture_farming_slider_content_alignment',
		array(
			'type' => 'select',
			'label' => esc_html__( 'Slider Content Alignment', 'agriculture-farming' ),
			'section' => 'organic_farm_slider_section',
			'choices' => array(
				'LEFT-ALIGN' => __('LEFT','agriculture-farming'),
	            'CENTER-ALIGN' => __('CENTER','agriculture-farming'),
	            'RIGHT-ALIGN' => __('RIGHT','agriculture-farming'),
			),
			'active_callback' => 'organic_farm_slider_dropdown',
		)
	) );

	$wp_customize->add_setting(
		'agriculture_farming_slider_excerpt_show_hide',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '1',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'organic_farm_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(
		new Agriculture_Farming_Customizer_Customcontrol_Switch(
			$wp_customize,
			'agriculture_farming_slider_excerpt_show_hide',
			array(
				'settings'        => 'agriculture_farming_slider_excerpt_show_hide',
				'section'         => 'organic_farm_slider_section',
				'label'           => __( 'Show Hide excerpt', 'agriculture-farming' ),				
				'choices'		  => array(
					'1'      => __( 'On', 'agriculture-farming' ),
					'off'    => __( 'Off', 'agriculture-farming' ),
				),
				'active_callback' => 'organic_farm_slider_dropdown',
			)
		)
	);

	//Category Section
	$wp_customize->add_section('agriculture_farming_category_section',array(
		'title'	=> __('Category Section','agriculture-farming'),
		'priority'=> 5,
		'panel' => 'organic_farm_custompage_panel',
	));
	$wp_customize->add_setting( 'agriculture_farming_section_category_heading', array(
			'default'           => '',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( new Agriculture_Farming_Customizer_Customcontrol_Section_Heading( $wp_customize, 'agriculture_farming_section_category_heading', array(
		'label'       => esc_html__( 'Category Section', 'agriculture-farming' ),
		'section'     => 'agriculture_farming_category_section',
		'settings'    => 'agriculture_farming_section_category_heading',
	) ) );
	$wp_customize->add_setting(
		'agriculture_farming_cate_show_hide',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => '',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'organic_farm_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(
		new Agriculture_Farming_Customizer_Customcontrol_Switch(
			$wp_customize,
			'agriculture_farming_cate_show_hide',
			array(
				'settings'        => 'agriculture_farming_cate_show_hide',
				'section'         => 'agriculture_farming_category_section',
				'label'           => __( 'Check To Show Section', 'agriculture-farming' ),
				'choices'		  => array(
					'1'      => __( 'On', 'agriculture-farming' ),
					'off'    => __( 'Off', 'agriculture-farming' ),
				),
				'active_callback' => '',
			)
		)
	);
    $wp_customize->add_setting('agriculture_farming_grocery_cate_title',array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('agriculture_farming_grocery_cate_title',array(
		'label'	=> __('Section Title','agriculture-farming'),
		'section' => 'agriculture_farming_category_section',
		'type' => 'text',
		'active_callback' => 'agriculture_farming_cate_dropdown',
	));

	$agriculture_farming_categories = get_categories();
	$agriculture_farming_cats = array();
	$agriculture_farming_i = 0;
	$agriculture_farming_cat_pst[]= 'select';
	foreach($agriculture_farming_categories as $category){
		if($agriculture_farming_i==0){
			$default = $category->slug;
			$agriculture_farming_i++;
		}
		$agriculture_farming_cat_pst[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('agriculture_farming_category_setting',array(
		'default' => 'select',
		'sanitize_callback' => 'organic_farm_sanitize_choices',
	));
	$wp_customize->add_control('agriculture_farming_category_setting',array(
		'type' => 'select',
		'choices' => $agriculture_farming_cat_pst,
		'label' => __('Select Category to display Post','agriculture-farming'),
		'section' => 'agriculture_farming_category_section',
		'active_callback' => 'agriculture_farming_cate_dropdown',
	));
	$wp_customize->selective_refresh->add_partial( 'agriculture_farming_category_setting', array(
		'selector' => '#home-mission h3',
		'render_callback' => 'agriculture_farming_customize_partial_agriculture_farming_category_setting',
	) );

	$wp_customize->add_setting('agriculture_farming_footer_text',array(
		'default'	=> 'Agriculture Farming WordPress Theme',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('agriculture_farming_footer_text',array(
		'label'	=> esc_html__('Copyright Text','agriculture-farming'),
		'section'	=> 'organic_farm_footer_copyright',
		'type'		=> 'textarea'
	));
	$wp_customize->selective_refresh->add_partial( 'agriculture_farming_footer_text', array(
		'selector' => '.site-info a',
		'render_callback' => 'organic_farm_customize_partial_agriculture_farming_footer_text',
	) );
}
add_action( 'customize_register', 'agriculture_farming_customize' );

// comments
function agriculture_farming_enqueue_comments_reply() {
  if( is_singular() && comments_open() && ( get_option( 'thread_comments' ) == 1) ) {
    // Load comment-reply.js (into footer)
    wp_enqueue_script( 'comment-reply', '/wp-includes/js/comment-reply.min.js', array(), false, true );
  }
}
add_action(  'wp_enqueue_scripts', 'agriculture_farming_enqueue_comments_reply' );

// Footer Text
function agriculture_farming_copyright_link() {
    $footer_text = get_theme_mod('agriculture_farming_footer_text', esc_html__('Agriculture Farming WordPress Theme', 'agriculture-farming'));
    $credit_link = esc_url('https://www.ovationthemes.com/wordpress/free-agriculture-wordpress-theme/');

    echo '<a href="' . $credit_link . '" target="_blank">' . esc_html($footer_text) . '<span class="footer-copyright">' . esc_html__(' By Ovation Themes', 'agriculture-farming') . '</span></a>';
}

if ( ! defined( 'AGRICULTURE_FARMING_PRO_LINK' ) ) {
	define('AGRICULTURE_FARMING_PRO_LINK',__('https://www.ovationthemes.com/wordpress/farming-wordpress-theme/','agriculture-farming'));
}

/* Pro control */
if (class_exists('WP_Customize_Control') && !class_exists('Agriculture_Farming_Pro_Control')):
    class Agriculture_Farming_Pro_Control extends WP_Customize_Control{

    public function render_content(){?>
        <label style="overflow: hidden; zoom: 1;">
            <div class="col-md upsell-btn">
                <a href="<?php echo esc_url( AGRICULTURE_FARMING_PRO_LINK ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('UPGRADE AGRICULTURE PREMIUM','agriculture-farming');?> </a>
            </div>
            <div class="col-md">
                <img class="agriculture_farming_img_responsive " src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/screenshot.png">
            </div>
            <div class="col-md">
                <h3 style="margin-top:10px; margin-left: 20px; text-decoration:underline; color:#333;"><?php esc_html_e('AGRICULTURE PREMIUM - Features', 'agriculture-farming'); ?></h3>
                <ul style="padding-top:10px">
                    <li class="upsell-agriculture_farming"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Responsive Design', 'agriculture-farming');?> </li>
                    <li class="upsell-agriculture_farming"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Boxed or fullwidth layout', 'agriculture-farming');?> </li>
                    <li class="upsell-agriculture_farming"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Shortcode Support', 'agriculture-farming');?> </li>
                    <li class="upsell-agriculture_farming"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Demo Importer', 'agriculture-farming');?> </li>
                    <li class="upsell-agriculture_farming"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Section Reordering', 'agriculture-farming');?> </li>
                    <li class="upsell-agriculture_farming"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Contact Page Template', 'agriculture-farming');?> </li>
                    <li class="upsell-agriculture_farming"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Multiple Blog Layouts', 'agriculture-farming');?> </li>
                    <li class="upsell-agriculture_farming"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Unlimited Color Options', 'agriculture-farming');?> </li>
                    <li class="upsell-agriculture_farming"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Designed with HTML5 and CSS3', 'agriculture-farming');?> </li>
                    <li class="upsell-agriculture_farming"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Customizable Design & Code', 'agriculture-farming');?> </li>
                    <li class="upsell-agriculture_farming"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Cross Browser Support', 'agriculture-farming');?> </li>
                    <li class="upsell-agriculture_farming"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Detailed Documentation Included', 'agriculture-farming');?> </li>
                    <li class="upsell-agriculture_farming"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Stylish Custom Widgets', 'agriculture-farming');?> </li>
                    <li class="upsell-agriculture_farming"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Patterns Background', 'agriculture-farming');?> </li>
                    <li class="upsell-agriculture_farming"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('WPML Compatible (Translation Ready)', 'agriculture-farming');?> </li>
                    <li class="upsell-agriculture_farming"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Woo-commerce Compatible', 'agriculture-farming');?> </li>
                    <li class="upsell-agriculture_farming"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Full Support', 'agriculture-farming');?> </li>
                    <li class="upsell-agriculture_farming"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('10+ Sections', 'agriculture-farming');?> </li>
                    <li class="upsell-agriculture_farming"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Live Customizer', 'agriculture-farming');?> </li>
                    <li class="upsell-agriculture_farming"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('AMP Ready', 'agriculture-farming');?> </li>
                    <li class="upsell-agriculture_farming"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Clean Code', 'agriculture-farming');?> </li>
                    <li class="upsell-agriculture_farming"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('SEO Friendly', 'agriculture-farming');?> </li>
                    <li class="upsell-agriculture_farming"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Supper Fast', 'agriculture-farming');?> </li>
                </ul>
            </div>
            <div class="col-md upsell-btn upsell-btn-bottom">
                <a href="<?php echo esc_url( AGRICULTURE_FARMING_PRO_LINK ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('UPGRADE AGRICULTURE PREMIUM','agriculture-farming');?> </a>
            </div>
        </label>
    <?php } }
endif;

if ( ! defined( 'ORGANIC_FARM_SUPPORT' ) ) {
	define('ORGANIC_FARM_SUPPORT',__('https://wordpress.org/support/theme/agriculture-farming','agriculture-farming'));
}
if ( ! defined( 'ORGANIC_FARM_REVIEW' ) ) {
	define('ORGANIC_FARM_REVIEW',__('https://wordpress.org/support/theme/agriculture-farming/reviews/#new-post','agriculture-farming'));
}
if ( ! defined( 'ORGANIC_FARM_LIVE_DEMO' ) ) {
define('ORGANIC_FARM_LIVE_DEMO',__('https://www.ovationthemes.com/demos/agriculture-farming/','agriculture-farming'));
}
if ( ! defined( 'ORGANIC_FARM_BUY_PRO' ) ) {
define('ORGANIC_FARM_BUY_PRO',__('https://www.ovationthemes.com/wordpress/farming-wordpress-theme/','agriculture-farming'));
}
if ( ! defined( 'ORGANIC_FARM_PRO_DOC' ) ) {
define('ORGANIC_FARM_PRO_DOC',__('https://www.ovationthemes.com/docs/ot-agriculture-farming-pro-doc','agriculture-farming'));
}
if ( ! defined( 'ORGANIC_FARM_FREE_DOC' ) ) {
define('ORGANIC_FARM_FREE_DOC',__('https://ovationthemes.com/docs/ot-agriculture-farming-free-doc','agriculture-farming'));
}
if ( ! defined( 'ORGANIC_FARM_THEME_NAME' ) ) {
define('ORGANIC_FARM_THEME_NAME',__('Premium Agriculture Theme','agriculture-farming'));
}
