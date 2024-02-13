<?php
/**
 * Organic Farm: Customizer-home-page
 *
 * @subpackage Organic Farm
 * @since 1.0
 */

	//  Home Page Panel
	$wp_customize->add_panel( 'organic_farm_custompage_panel', array(
		'title' => esc_html__( 'Custom Page Settings', 'organic-farm' ),
		'priority' => 2,
	));
	// Top Header
    $wp_customize->add_section('organic_farm_top',array(
        'title' => __('Contact info', 'organic-farm'),
        'priority'=> 2,
        'panel' => 'organic_farm_custompage_panel',
    ) );
    $wp_customize->add_setting( 'organic_farm_section_contact_heading', array(
			'default'           => '',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( new Organic_Farm_Customizer_Customcontrol_Section_Heading( $wp_customize, 'organic_farm_section_contact_heading', array(
		'label'       => esc_html__( 'Contact Settings', 'organic-farm' ),
        'description' => __( 'Add contact info in the below feilds', 'organic-farm' ),
		'section'     => 'organic_farm_top',
		'settings'    => 'organic_farm_section_contact_heading',
		'priority'    => 1,
	) ) );
    $wp_customize->add_setting('organic_farm_email_text',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('organic_farm_email_text',array(
		'label' => esc_html__('Add Text','organic-farm'),
		'section' => 'organic_farm_top',
		'setting' => 'organic_farm_email_text',
		'type'    => 'text'
	));
	$wp_customize->selective_refresh->add_partial( 'organic_farm_email_text', array(
		'selector' => '.mail-box',
		'render_callback' => 'organic_farm_customize_partial_organic_farm_email_text',
	) );
	$wp_customize->add_setting('organic_farm_email',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_email'
	));
	$wp_customize->add_control('organic_farm_email',array(
		'label' => esc_html__('Add Email Address','organic-farm'),
		'section' => 'organic_farm_top',
		'setting' => 'organic_farm_email',
		'type'    => 'text'
	));
	$wp_customize->add_setting('organic_farm_email_icon',array(
		'default'	=> 'fas fa-envelope',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Organic_Farm_Fontawesome_Icon_Chooser(
        $wp_customize,'organic_farm_email_icon',array(
		'label'	=> __('Add Email Icon','organic-farm'),
		'transport' => 'refresh',
		'section'	=> 'organic_farm_top',
		'setting'	=> 'organic_farm_email_icon',
		'type'		=> 'icon'
	)));
	$wp_customize->add_setting('organic_farm_call_text',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('organic_farm_call_text',array(
		'label' => esc_html__('Add Text','organic-farm'),
		'section' => 'organic_farm_top',
		'setting' => 'organic_farm_call_text',
		'type'    => 'text'
	));
	$wp_customize->selective_refresh->add_partial( 'organic_farm_call_text', array(
		'selector' => '.phone-box',
		'render_callback' => 'organic_farm_customize_partial_organic_farm_call_text',
	) );
	$wp_customize->add_setting('organic_farm_call',array(
		'default' => '',
		'sanitize_callback' => 'organic_farm_sanitize_phone_number'
	));
	$wp_customize->add_control('organic_farm_call',array(
		'label' => esc_html__('Add Phone Number','organic-farm'),
		'section' => 'organic_farm_top',
		'setting' => 'organic_farm_call',
		'type'    => 'text'
	));
	$wp_customize->add_setting('organic_farm_call_icon',array(
		'default'	=> 'fas fa-phone',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Organic_Farm_Fontawesome_Icon_Chooser(
        $wp_customize,'organic_farm_call_icon',array(
		'label'	=> __('Add Phone Icon','organic-farm'),
		'transport' => 'refresh',
		'section'	=> 'organic_farm_top',
		'setting'	=> 'organic_farm_call_icon',
		'type'		=> 'icon'
	)));
	$wp_customize->add_setting('organic_farm_quote_btn',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('organic_farm_quote_btn',array(
		'label' => esc_html__('Add Button Text','organic-farm'),
		'section' => 'organic_farm_top',
		'setting' => 'organic_farm_quote_btn',
		'type'    => 'text'
	));
	$wp_customize->selective_refresh->add_partial( 'organic_farm_quote_btn', array(
		'selector' => '.quote-btn',
		'render_callback' => 'organic_farm_customize_partial_organic_farm_quote_btn',
	) );
    $wp_customize->add_setting('organic_farm_quote_btn_link',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	));
	$wp_customize->add_control('organic_farm_quote_btn_link',array(
		'label' => esc_html__('Add Button Link','organic-farm'),
		'section' => 'organic_farm_top',
		'setting' => 'organic_farm_quote_btn_link',
		'type'    => 'url'
	));

	// Social Media
    $wp_customize->add_section('organic_farm_urls',array(
        'title' => __('Social Media', 'organic-farm'),
        'priority'=> 2,
        'panel' => 'organic_farm_custompage_panel',
    ) );
    $wp_customize->add_setting( 'organic_farm_section_social_heading', array(
		'default'           => '',
		'transport'         => 'refresh',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( new Organic_Farm_Customizer_Customcontrol_Section_Heading( $wp_customize, 'organic_farm_section_social_heading', array(
		'label'       => esc_html__( 'Social Media Settings', 'organic-farm' ),
		'description' => __( 'Add social media links in the below feilds', 'organic-farm' ),
		'section'     => 'organic_farm_urls',
		'settings'    => 'organic_farm_section_social_heading',
	) ) );
	$wp_customize->add_setting(
		'header_social_icon_enable',
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
		new Organic_Farm_Customizer_Customcontrol_Switch(
			$wp_customize,
			'header_social_icon_enable',
			array(
				'settings'        => 'header_social_icon_enable',
				'section'         => 'organic_farm_urls',
				'label'           => __( 'Check to show social fields', 'organic-farm' ),
				'choices'		  => array(
					'1'      => __( 'On', 'organic-farm' ),
					'off'    => __( 'Off', 'organic-farm' ),
				),
				'active_callback' => '',
			)
		)
	);
	$wp_customize->selective_refresh->add_partial( 'header_social_icon_enable', array(
		'selector' => '.links a i',
		'render_callback' => 'organic_farm_customize_partial_header_social_icon_enable',
	) );
	$wp_customize->add_setting( 'organic_farm_theme_twitter_heading', array(
		'default'           => '',
		'transport'         => 'refresh',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( new Organic_Farm_Customizer_Customcontrol_Section_Heading( $wp_customize, 'organic_farm_theme_twitter_heading', array(
		'label'       => esc_html__( 'Twitter Settings', 'organic-farm' ),
		'section'     => 'organic_farm_urls',
		'settings'    => 'organic_farm_theme_twitter_heading',
	) ) );
    $wp_customize->add_setting('organic_farm_twitter_icon',array(
		'default'	=> 'fab fa-twitter',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Organic_Farm_Fontawesome_Icon_Chooser(
        $wp_customize,'organic_farm_twitter_icon',array(
		'label'	=> __('Add Icon','organic-farm'),
		'transport' => 'refresh',
		'section'	=> 'organic_farm_urls',
		'setting'	=> 'organic_farm_twitter_icon',
		'type'		=> 'icon'
	)));
	$wp_customize->add_setting('organic_farm_twitter',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	));
	$wp_customize->add_control('organic_farm_twitter',array(
		'label' => esc_html__('Add URL','organic-farm'),
		'section' => 'organic_farm_urls',
		'setting' => 'organic_farm_twitter',
		'type'    => 'url'
	));
	$wp_customize->add_setting(
		'organic_farm_header_twt_target',
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
		new Organic_Farm_Customizer_Customcontrol_Switch(
			$wp_customize,
			'organic_farm_header_twt_target',
			array(
				'settings'        => 'organic_farm_header_twt_target',
				'section'         => 'organic_farm_urls',
				'label'           => __( 'Open link in a new tab', 'organic-farm' ),				
				'choices'		  => array(
					'1'      => __( 'On', 'organic-farm' ),
					'off'    => __( 'Off', 'organic-farm' ),
				),
				'active_callback' => '',
			)
		)
	);
	$wp_customize->add_setting( 'organic_farm_theme_fb_heading', array(
		'default'           => '',
		'transport'         => 'refresh',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( new Organic_Farm_Customizer_Customcontrol_Section_Heading( $wp_customize, 'organic_farm_theme_fb_heading', array(
		'label'       => esc_html__( 'Facebook Settings', 'organic-farm' ),
		'section'     => 'organic_farm_urls',
		'settings'    => 'organic_farm_theme_fb_heading',
	) ) );
	$wp_customize->add_setting('organic_farm_fb_icon',array(
		'default'	=> 'fab fa-facebook-f',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Organic_Farm_Fontawesome_Icon_Chooser(
        $wp_customize,'organic_farm_fb_icon',array(
		'label'	=> __('Add Icon','organic-farm'),
		'transport' => 'refresh',
		'section'	=> 'organic_farm_urls',
		'setting'	=> 'organic_farm_fb_icon',
		'type'		=> 'icon'
	)));
	$wp_customize->add_setting('organic_farm_fb',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	));
	$wp_customize->add_control('organic_farm_fb',array(
		'label' => esc_html__('Add URL','organic-farm'),
		'section' => 'organic_farm_urls',
		'setting' => 'organic_farm_fb',
		'type'    => 'url'
	));
	$wp_customize->add_setting(
		'organic_farm_header_fb_target',
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
		new Organic_Farm_Customizer_Customcontrol_Switch(
			$wp_customize,
			'organic_farm_header_fb_target',
			array(
				'settings'        => 'organic_farm_header_fb_target',
				'section'         => 'organic_farm_urls',
				'label'           => __( 'Open link in a new tab', 'organic-farm' ),				
				'choices'		  => array(
					'1'      => __( 'On', 'organic-farm' ),
					'off'    => __( 'Off', 'organic-farm' ),
				),
				'active_callback' => '',
			)
		)
	);
	$wp_customize->add_setting( 'organic_farm_theme_youtube_heading', array(
		'default'           => '',
		'transport'         => 'refresh',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( new Organic_Farm_Customizer_Customcontrol_Section_Heading( $wp_customize, 'organic_farm_theme_youtube_heading', array(
		'label'       => esc_html__( 'Youtube Settings', 'organic-farm' ),
		'section'     => 'organic_farm_urls',
		'settings'    => 'organic_farm_theme_youtube_heading',
	) ) );
	$wp_customize->add_setting('organic_farm_youtube_icon',array(
		'default'	=> 'fab fa-youtube',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Organic_Farm_Fontawesome_Icon_Chooser(
        $wp_customize,'organic_farm_youtube_icon',array(
		'label'	=> __('Add Icon','organic-farm'),
		'transport' => 'refresh',
		'section'	=> 'organic_farm_urls',
		'setting'	=> 'organic_farm_youtube_icon',
		'type'		=> 'icon'
	)));
	$wp_customize->add_setting('organic_farm_youtube',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	));
	$wp_customize->add_control('organic_farm_youtube',array(
		'label' => esc_html__('Add URL','organic-farm'),
		'section' => 'organic_farm_urls',
		'setting' => 'organic_farm_youtube',
		'type'    => 'url'
	));
	$wp_customize->add_setting(
		'organic_farm_header_youtube_target',
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
		new Organic_Farm_Customizer_Customcontrol_Switch(
			$wp_customize,
			'organic_farm_header_youtube_target',
			array(
				'settings'        => 'organic_farm_header_youtube_target',
				'section'         => 'organic_farm_urls',
				'label'           => __( 'Open link in a new tab', 'organic-farm' ),				
				'choices'		  => array(
					'1'      => __( 'On', 'organic-farm' ),
					'off'    => __( 'Off', 'organic-farm' ),
				),
				'active_callback' => '',
			)
		)
	);
	$wp_customize->add_setting( 'organic_farm_theme_instagram_heading', array(
		'default'           => '',
		'transport'         => 'refresh',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( new Organic_Farm_Customizer_Customcontrol_Section_Heading( $wp_customize, 'organic_farm_theme_instagram_heading', array(
		'label'       => esc_html__( 'Instagram Settings', 'organic-farm' ),
		'section'     => 'organic_farm_urls',
		'settings'    => 'organic_farm_theme_instagram_heading',
	) ) );
	$wp_customize->add_setting('organic_farm_instagram_icon',array(
		'default'	=> 'fab fa-instagram',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Organic_Farm_Fontawesome_Icon_Chooser(
        $wp_customize,'organic_farm_instagram_icon',array(
		'label'	=> __('Add Icon','organic-farm'),
		'transport' => 'refresh',
		'section'	=> 'organic_farm_urls',
		'setting'	=> 'organic_farm_instagram_icon',
		'type'		=> 'icon'
	)));
	$wp_customize->add_setting('organic_farm_instagram',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	));
	$wp_customize->add_control('organic_farm_instagram',array(
		'label' => esc_html__('Add URL','organic-farm'),
		'section' => 'organic_farm_urls',
		'setting' => 'organic_farm_instagram',
		'type'    => 'url'
	));
	$wp_customize->add_setting(
		'organic_farm_header_instagram_target',
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
		new Organic_Farm_Customizer_Customcontrol_Switch(
			$wp_customize,
			'organic_farm_header_instagram_target',
			array(
				'settings'        => 'organic_farm_header_instagram_target',
				'section'         => 'organic_farm_urls',
				'label'           => __( 'Open link in a new tab', 'organic-farm' ),				
				'choices'		  => array(
					'1'      => __( 'On', 'organic-farm' ),
					'off'    => __( 'Off', 'organic-farm' ),
				),
				'active_callback' => '',
			)
		)
	);

    //Slider
	$wp_customize->add_section( 'organic_farm_slider_section' , array(
    	'title'      => __( 'Slider Settings', 'organic-farm' ),
    	'priority'   => 2,
    	'panel' => 'organic_farm_custompage_panel',
	) );
	$wp_customize->add_setting( 'organic_farm_section_slide_heading', array(
			'default'           => '',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( new Organic_Farm_Customizer_Customcontrol_Section_Heading( $wp_customize, 'organic_farm_section_slide_heading', array(
		'label'       => esc_html__( 'Slider Settings', 'organic-farm' ),
		'description' => __( 'Slider Image Dimension ( 1400 x 650 ) px', 'organic-farm' ),
		'section'     => 'organic_farm_slider_section',
		'settings'    => 'organic_farm_section_slide_heading',
		'priority'    => 1,
	) ) );
	$wp_customize->add_setting(
		'organic_farm_slider_arrows',
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
		new Organic_Farm_Customizer_Customcontrol_Switch(
			$wp_customize,
			'organic_farm_slider_arrows',
			array(
				'settings'        => 'organic_farm_slider_arrows',
				'section'         => 'organic_farm_slider_section',
				'label'           => __( 'Check To show Slider', 'organic-farm' ),
				'choices'		  => array(
					'1'      => __( 'On', 'organic-farm' ),
					'off'    => __( 'Off', 'organic-farm' ),
				),
				'active_callback' => '',
				'priority'    => 1,
			)
		)
	);

	$organic_farm_args = array('numberposts' => -1);
	$post_list = get_posts($organic_farm_args);
	$i = 0;
	$pst_sls[]= __('Select','organic-farm');
	foreach ($post_list as $key => $p_post) {
		$pst_sls[$p_post->ID]=$p_post->post_title;
	}
	for ( $i = 1; $i <= 4; $i++ ) {
		$wp_customize->add_setting('organic_farm_post_setting'.$i,array(
			'sanitize_callback' => 'organic_farm_sanitize_choices',
		));
		$wp_customize->add_control('organic_farm_post_setting'.$i,array(
			'type'    => 'select',
			'choices' => $pst_sls,
			'label' => __('Select post','organic-farm'),
			'section' => 'organic_farm_slider_section',
			'priority'    => 1,
			'active_callback' => 'organic_farm_slider_dropdown',
		));

		$wp_customize->selective_refresh->add_partial( 'organic_farm_post_setting'.$i, array(
			'selector' => '.carousel-caption',
			'render_callback' => 'organic_farm_customize_partial_organic_farm_post_setting'.$i,
		) );
	}
	wp_reset_postdata();
	$wp_customize->add_setting(
		'organic_farm_slider_excerpt_show_hide',
		array(
			'type'                 => 'option',
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '',
			'default'              => 'off',
			'transport'            => 'refresh',
			'sanitize_callback'    => 'organic_farm_callback_sanitize_switch',
		)
	);
	$wp_customize->add_control(
		new Organic_Farm_Customizer_Customcontrol_Switch(
			$wp_customize,
			'organic_farm_slider_excerpt_show_hide',
			array(
				'settings'        => 'organic_farm_slider_excerpt_show_hide',
				'section'         => 'organic_farm_slider_section',
				'label'           => __( 'Show Hide excerpt', 'organic-farm' ),				
				'choices'		  => array(
					'1'      => __( 'On', 'organic-farm' ),
					'off'    => __( 'Off', 'organic-farm' ),
				),
				'active_callback' => 'organic_farm_slider_dropdown',
			)
		)
	);
	$wp_customize->add_setting('organic_farm_slider_excerpt_count',array(
		'default'=> 25,
		'transport' => 'refresh',
		'sanitize_callback' => 'organic_farm_sanitize_integer'
	));
	$wp_customize->add_control(new Organic_Farm_Slider_Custom_Control( $wp_customize, 'organic_farm_slider_excerpt_count',array(
		'label' => esc_html__( 'Excerpt Limit','organic-farm' ),
		'section'=> 'organic_farm_slider_section',
		'settings'=>'organic_farm_slider_excerpt_count',
		'input_attrs' => array(
			'reset'			   => 25,
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
        'active_callback' => 'organic_farm_slider_dropdown',
	)));
	$wp_customize->add_setting(
		'organic_farm_slider_button_show_hide',
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
		new Organic_Farm_Customizer_Customcontrol_Switch(
			$wp_customize,
			'organic_farm_slider_button_show_hide',
			array(
				'settings'        => 'organic_farm_slider_button_show_hide',
				'section'         => 'organic_farm_slider_section',
				'label'           => __( 'Show Hide Button', 'organic-farm' ),				
				'choices'		  => array(
					'1'      => __( 'On', 'organic-farm' ),
					'off'    => __( 'Off', 'organic-farm' ),
				),
				'active_callback' => 'organic_farm_slider_dropdown',
			)
		)
	);
	$wp_customize->add_setting('organic_farm_slider_read_more',array(
		'default' => 'Read More',
		'sanitize_callback' => 'sanitize_text_field'
	)); 
	$wp_customize->add_control('organic_farm_slider_read_more',array(
		'label' => esc_html__('Button Text','organic-farm'),
		'section' => 'organic_farm_slider_section',
		'setting' => 'organic_farm_slider_read_more',
		'type'    => 'text',
		'active_callback' => 'organic_farm_slider_dropdown',
	));
	$wp_customize->add_setting( 'organic_farm_slider_content_alignment',
		array(
			'default' => 'LEFT-ALIGN',
			'transport' => 'refresh',
			'sanitize_callback' => 'organic_farm_sanitize_choices'
		)
	);
	$wp_customize->add_control( new Organic_Farm_Text_Radio_Button_Custom_Control( $wp_customize, 'organic_farm_slider_content_alignment',
		array(
			'type' => 'select',
			'label' => esc_html__( 'Slider Content Alignment', 'organic-farm' ),
			'section' => 'organic_farm_slider_section',
			'choices' => array(
				'LEFT-ALIGN' => __('LEFT','organic-farm'),
	            'CENTER-ALIGN' => __('CENTER','organic-farm'),
	            'RIGHT-ALIGN' => __('RIGHT','organic-farm'),
			),
			'active_callback' => 'organic_farm_slider_dropdown',
		)
	) );

	//Middle Section
	$wp_customize->add_section( 'organic_farm_middle_section' , array(
    	'title'      => __( 'Services Settings', 'organic-farm' ),
    	'panel' => 'organic_farm_custompage_panel',
		'priority'   => 2,
	) );
	$wp_customize->add_setting( 'organic_farm_section_middle_heading', array(
			'default'           => '',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( new Organic_Farm_Customizer_Customcontrol_Section_Heading( $wp_customize, 'organic_farm_section_middle_heading', array(
		'label'       => esc_html__( 'Services Settings', 'organic-farm' ),
		'description' => __( 'Image Dimension ( 80 x 80 ) px', 'organic-farm' ),
		'section'     => 'organic_farm_middle_section',
		'settings'    => 'organic_farm_section_middle_heading',
	) ) );
	$wp_customize->add_setting(
		'organic_farm_services_show_hide',
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
		new Organic_Farm_Customizer_Customcontrol_Switch(
			$wp_customize,
			'organic_farm_services_show_hide',
			array(
				'settings'        => 'organic_farm_services_show_hide',
				'section'         => 'organic_farm_middle_section',
				'label'           => __( 'Check To show Section', 'organic-farm' ),
				'choices'		  => array(
					'1'      => __( 'On', 'organic-farm' ),
					'off'    => __( 'Off', 'organic-farm' ),
				),
				'active_callback' => '',
			)
		)
	);

	$organic_farm_args = array('numberposts' => -1);
	$post_list = get_posts($organic_farm_args);
	$s = 0;
	$pst_sls[]= __('Select','organic-farm');
	foreach ($post_list as $key => $p_post) {
		$pst_sls[$p_post->ID]=$p_post->post_title;
	}
	for ( $s = 1; $s <= 3; $s++ ) {
		$wp_customize->add_setting('organic_farm_middle_sec_settigs'.$s,array(
			'sanitize_callback' => 'organic_farm_sanitize_choices',
		));
		$wp_customize->add_control('organic_farm_middle_sec_settigs'.$s,array(
			'type'    => 'select',
			'choices' => $pst_sls,
			'label' => __('Select post','organic-farm'),
			'section' => 'organic_farm_middle_section',
			'active_callback' => 'organic_farm_services_dropdown', 
		));
		$wp_customize->selective_refresh->add_partial( 'organic_farm_middle_sec_settigs'.$s, array(
			'selector' => '.inner-box',
			'render_callback' => 'organic_farm_customize_partial_organic_farm_middle_sec_settigs'.$s,
		) );
	}
	wp_reset_postdata();

	// Product Box
	$wp_customize->add_section( 'organic_farm_product_box_section' , array(
    	'title'      => __( 'Product Settings', 'organic-farm' ),
		'priority'   => 2,
		'panel' => 'organic_farm_custompage_panel',
	) );
	$wp_customize->add_setting( 'organic_farm_section_product_heading', array(
		'default'           => '',
		'transport'         => 'refresh',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( new Organic_Farm_Customizer_Customcontrol_Section_Heading( $wp_customize, 'organic_farm_section_product_heading', array(
		'label'       => esc_html__( 'Product Settings', 'organic-farm' ),
		'description' => __( 'Add New Page >> Add Title >> Add Shortcode "" >> Then Select the page in the below page dropdown.', 'organic-farm' ),
		'section'     => 'organic_farm_product_box_section',
		'settings'    => 'organic_farm_section_product_heading',
	) ) );
	$wp_customize->add_setting(
		'organic_farm_services_product_hide',
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
		new Organic_Farm_Customizer_Customcontrol_Switch(
			$wp_customize,
			'organic_farm_services_product_hide',
			array(
				'settings'        => 'organic_farm_services_product_hide',
				'section'         => 'organic_farm_product_box_section',
				'label'           => __( 'Check To show Section', 'organic-farm' ),
				'choices'		  => array(
					'1'      => __( 'On', 'organic-farm' ),
					'off'    => __( 'Off', 'organic-farm' ),
				),
				'active_callback' => '',
			)
		)
	);
	$wp_customize->add_setting( 'organic_farm_product_box_page', array(
		'default'  => '',
		'sanitize_callback' => 'organic_farm_sanitize_dropdown_pages'
	) );
	$wp_customize->add_control( 'organic_farm_product_box_page', array(
		'label'    => esc_html__( 'Select Product Page', 'organic-farm' ),
		'section'  => 'organic_farm_product_box_section',
		'type'     => 'dropdown-pages',
		'active_callback' => 'organic_farm_services_product_dropdown',
	) );
	$wp_customize->selective_refresh->add_partial( 'organic_farm_product_box_page', array(
		'selector' => '#product-box h3',
		'render_callback' => 'organic_farm_customize_partial_organic_farm_product_box_page',
	) );

	//Footer
    $wp_customize->add_section( 'organic_farm_footer_copyright', array(
    	'title'      => esc_html__( 'Footer Text', 'organic-farm' ),
    	'panel' => 'organic_farm_custompage_panel',
	) );
	$wp_customize->add_setting( 'organic_farm_section_footer_heading', array(
		'default'           => '',
		'transport'         => 'refresh',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( new Organic_Farm_Customizer_Customcontrol_Section_Heading( $wp_customize, 'organic_farm_section_footer_heading', array(
		'label'       => esc_html__( 'Footer Settings', 'organic-farm' ),
		'section'     => 'organic_farm_footer_copyright',
		'settings'    => 'organic_farm_section_footer_heading',
		'priority'   => 1,
	) ) );
    $wp_customize->add_setting('organic_farm_footer_text',array(
		'default'	=> 'Organic Farm WordPress Theme',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('organic_farm_footer_text',array(
		'label'	=> esc_html__('Copyright Text','organic-farm'),
		'section'	=> 'organic_farm_footer_copyright',
		'type'		=> 'textarea'
	));
	$wp_customize->selective_refresh->add_partial( 'organic_farm_footer_text', array(
		'selector' => '.site-info a',
		'render_callback' => 'organic_farm_customize_partial_organic_farm_footer_text',
	) );
	$wp_customize->add_setting( 'organic_farm_footer_content_alignment',
		array(
			'default' => 'CENTER-ALIGN',
			'transport' => 'refresh',
			'sanitize_callback' => 'organic_farm_sanitize_choices'
		)
	);
	$wp_customize->add_control( new Organic_Farm_Text_Radio_Button_Custom_Control( $wp_customize, 'organic_farm_footer_content_alignment',
		array(
			'type' => 'select',
			'label' => esc_html__( 'Footer Content Alignment', 'organic-farm' ),
			'section' => 'organic_farm_footer_copyright',
			'choices' => array(
				'LEFT-ALIGN' => __('LEFT','organic-farm'),
	            'CENTER-ALIGN' => __('CENTER','organic-farm'),
	            'RIGHT-ALIGN' => __('RIGHT','organic-farm'),
			),
			'active_callback' => '',
		)
	) );
	$wp_customize->add_setting( 'organic_farm_footer_widget',
		array(
			'default' => '4',
			'transport' => 'refresh',
			'sanitize_callback' => 'organic_farm_sanitize_choices'
		)
	);
	$wp_customize->add_control( new Organic_Farm_Text_Radio_Button_Custom_Control( $wp_customize, 'organic_farm_footer_widget',
		array(
			'type' => 'select',
			'label' => esc_html__('Footer Per Column','organic-farm'),
			'section' => 'organic_farm_footer_copyright',
			'choices' => array(
				'1' => __('1','organic-farm'),
	            '2' => __('2','organic-farm'),
	            '3' => __('3','organic-farm'),
	            '4' => __('4','organic-farm'),
			)
		)
	) );
	