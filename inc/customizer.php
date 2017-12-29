<?php
/**
 * sivanPortfolio Theme Customizer
 *
 * @package sivanPortfolio
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
 function sivanportfolio_customize_register( $wp_customize ) {
	$wp_customize->get_section('static_front_page')->priority = 2;
	$wp_customize->get_section('title_tagline')->priority = 4;
	$wp_customize->get_section('header_image')->priority = 5;
	$wp_customize->get_setting('blogname')->transport         = 'postMessage';
	$wp_customize->get_setting('blogdescription')->transport  = 'postMessage';
	$wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

	$sivanportfolio_font_choices = array(
		'Abel:400' => 'Abel',
		'Alegreya Sans:300,400,700,800'	=> 'Alegreya Sans',
		'Arimo:400,700'	=> 'Arimo',
		'Arvo:400,700' => 'Arvo',
		'Asap:400,700' => 'Asap',
		'Bitter:400,700' => 'Bitter',
		'Bree Serif:400' => 'Bree Serif',
		'Cabin:400,500,600,700'	=> 'Cabin',
		'Catamaran:300,400,600,700,800'	=> 'Catamaran',
		'Crimson Text:400,600,700' => 'Crimson Text',
		'Cuprum:400,700' => 'Cuprum',
		'Dosis:300,400,500,600,700,800'	=> 'Dosis',
		'Droid Sans:400,700' => 'Droid Sans',
		'Droid Serif:400,700' => 'Droid Serif',
		'Exo:300,400,600,700,800' => 'Exo',
		'Exo 2:300,400,600,700,800'	=> 'Exo 2',
		'Fjalla One:400' => 'Fjalla One',
		'Hind:300,400,500,600,700' => 'Hind',
		'Inconsolata:400,700' => 'Inconsolata',
		'Josefin Sans:300,400,600,700' => 'Josefin Sans',
		'Karla:400,700'	=> 'Karla',
		'Lato:300,400,700' => 'Lato',
		'Lora:400,700' => 'Lora',
		'Maven Pro:400,500,700'	=> 'Maven Pro',
		'Merriweather:300,400,700' => 'Merriweather',
		'Merriweather Sans:300,400,700,800'	=> 'Merriweather Sans',
		'Montserrat:400,700' => 'Montserrat',
		'Muli:300,400' => 'Muli',
		'Noto Sans:400,700'	=> 'Noto Sans',
		'Noto Serif:400,700' => 'Noto Serif',
		'Nunito:300,400,700' => 'Nunito',
		'Open Sans:300,400,600,700,800'	=> 'Open Sans',
		'Orbitron:400,500,700' => 'Orbitron',
		'Oswald:300,400,700' => 'Oswald',
		'Oxygen:300,400,700' => 'Oxygen',
		'Passion One:400,700' => 'Passion One',
		'Play:400,700' => 'Play',
		'Playfair Display:400,700' => 'Playfair Display',
		'Poppins:300,400,500,600,700' => 'Poppins',
		'PT Sans:400,700' => 'PT Sans',
		'PT Serif:400,700' => 'PT Serif',
		'Raleway:300,400,600,700,800' => 'Raleway',
		'Roboto:300,400,500,700' => 'Roboto',
		'Roboto Slab:300,400,700' => 'Roboto Slab',
		'Rubik:300,400,700'	=> 'Rubik',
		'Signika:300,400,600,700' => 'Signika',
		'Source Sans Pro:300,400,600,700' => 'Source Sans Pro',
		'Titillium Web:300,400,600,700'	=> 'Titillium Web',
		'Ubuntu:300,400,500,700' => 'Ubuntu',
		'Vollkorn:400,700' => 'Vollkorn',
		'Yanone Kaffeesatz:300,400,700'	=> 'Yanone Kaffeesatz',
	);

	$wp_customize->add_setting(
		'sivanportfolio_font_page_content',
		array(
			'default'			=> 0,
			'sanitize_callback' => 'absint'
		)
	);
	$wp_customize->add_control(
			'sivanportfolio_font_page_content',
			array(
				'settings'		=> 'sivanportfolio_font_page_content',
				'section'		=> 'static_front_page',
				'label'			=> esc_html__( 'Show Page Content On Front Page', 'sivanportfolio' ),
				'description'	=> esc_html__( 'If you have selected a static front page, the page content will be displayed below the Featured Services Section', 'sivanportfolio' ),
				'type'       	=> 'checkbox',
			)
	);

	$wp_customize->add_setting(
		'site_title_font_size',
		array(
			'default'			=> '46',
			'transport'			=> 'postMessage',
			'sanitize_callback' => 'absint'
		)
	);
	$wp_customize->add_control(
			'site_title_font_size',
			array(
				'settings'		=> 'site_title_font_size',
				'section'		=> 'title_tagline',
				'label'			=> esc_html__( 'Site Title Font Size', 'sivanportfolio' ),
				'description'   => esc_html__( 'Default is 46px. Scales proportionally on smaller screens.', 'sivanportfolio' ),
				'type'       	=> 'number',
				'input_attrs' => array(
                'min'   => 10,
                'max'   => 60,
                'step'  => 1,
            ),
			)
	);

	$wp_customize->add_setting(
		'tagline_font_size',
		array(
			'default'			=> '16',
			'transport'			=> 'postMessage',
			'sanitize_callback' => 'absint'
		)
	);
	$wp_customize->add_control(
			'tagline_font_size',
			array(
				'settings'		=> 'tagline_font_size',
				'section'		=> 'title_tagline',
				'label'			=> esc_html__( 'Tagline Font Size', 'sivanportfolio' ),
				'description'   => esc_html__( 'Default is 16px. Scales proportionally on smaller screens.', 'sivanportfolio' ),
				'type'       	=> 'number',
				'input_attrs' => array(
                'min'   => 10,
                'max'   => 24,
                'step'  => 1,
            ),
			)
	);

	//SITE CONTAINER WIDTH
	$wp_customize->add_section('container', array(
	     'title'			=> esc_html__( 'Site Width', 'sivanportfolio' ),
	     'priority'			=> 10,
	) );

	$wp_customize->add_setting(
		'sitewidth',
		array(
			'default'			=> '1200',
			'sanitize_callback' => 'absint'
		)
	);
	$wp_customize->add_control(
			'sitewidth',
			array(
				'settings'		=> 'sitewidth',
				'section'		=> 'container',
				'label'			=> esc_html__( 'Content Width in pixels', 'sivanportfolio' ),
				'description'   => esc_html__( 'Default width is 1200px. Minimum width is 1120px.', 'sivanportfolio' ),
				'type'       	=> 'number',
				'input_attrs' => array(
                'min'   => 1120,
                'max'   => 1920,
                'step'  => 10,
            ),
			)
	);

	$wp_customize->add_setting(
		'fullwidth',
		array(
			'default'			=> 0,
			'sanitize_callback' => 'absint'
		)
	);
	$wp_customize->add_control(
			'fullwidth',
			array(
				'settings'		=> 'fullwidth',
				'section'		=> 'container',
				'label'			=> esc_html__( 'Or Switch To Full Width', 'sivanportfolio' ),
				'type'       	=> 'checkbox',
			)
	);

	//Header and Menu Styling
	$wp_customize->add_section(
		'header_bg_sec',
		array(
			'title'			=> esc_html__( 'Header and Menu Styling', 'sivanportfolio' ),
			'priority'		=> 11,
		)
	);

	$wp_customize->add_setting(
		'header_bg',
		array(
			'default'			=> 'rgba(0,0,0,0.08)',
			'transport'         => 'postMessage',
			'sanitize_callback' => 'sivanportfolio'
		)
	);
    $wp_customize->add_control(
        new Sivanportfolio_Alpha_Color_Control(
            $wp_customize,
            'header_bg',
            array(
                'label'         => esc_html__( 'Header Background Color', 'sivanportfolio' ),
                'section'       => 'header_bg_sec',
                'settings'      => 'header_bg',
                'priority' => 1,
                'show_opacity'  => true,
                'palette'   => array(
                    '#000000',
                    '#ffffff',
                    '#dd3333',
                    '#dd9933',
                    '#eeee22',
                    '#81d742',
                    '#1e73be',
                    '#8224e3',
                )
            )
        )
    );

	$wp_customize->add_setting(
		'header_bg_scr',
		array(
			'default'			=> 'rgba(0,0,0,0.8)',
			'transport'         => 'postMessage',
			'sanitize_callback' => 'sivanportfolio_sanitize_hex_rgb_rgba_color'
		)
	);
    $wp_customize->add_control(
        new Sivanportfolio_Alpha_Color_Control(
            $wp_customize,
            'header_bg_scr',
            array(
                'label'         => esc_html__( 'Header Background Color (Scrolled)', 'sivanportfolio' ),
                'section'       => 'header_bg_sec',
                'settings'      => 'header_bg_scr',
                'priority' => 1,
                'show_opacity'  => true,
                'palette'   => array(
                    '#000000',
                    '#ffffff',
                    '#dd3333',
                    '#dd9933',
                    '#eeee22',
                    '#81d742',
                    '#1e73be',
                    '#8224e3',
                )
            )
        )
    );

	$wp_customize->add_setting(
		'menu_item_color',
		array(
			'default'			=> '#ffffff',
			'transport'			=> 'postMessage',
			'sanitize_callback' => 'sanitize_hex_color'
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'menu_item_color',
			array(
				'label'      => esc_html__( 'Menu Item Color', 'sivanportfolio' ),
				'settings'   => 'menu_item_color',
				'section'    => 'header_bg_sec',
			)
		)
	);

	$wp_customize->add_setting(
		'disable_header_hover',
		array(
			'default'			=> 0,
			'sanitize_callback' => 'absint'
		)
	);
	$wp_customize->add_control(
			'disable_header_hover',
			array(
				'settings'		=> 'disable_header_hover',
				'section'		=> 'header_bg_sec',
				'label'			=> esc_html__( 'Disable Hover Effect', 'sivanportfolio' ),
				'type'       	=> 'checkbox',
			)
	);

	$wp_customize->add_setting(
		'menu_height',
		array(
			'default'			=> '82',
			'transport'			=> 'postMessage',
			'sanitize_callback' => 'absint'
		)
	);
	$wp_customize->add_control(
			'menu_height',
			array(
				'settings'		=> 'menu_height',
				'section'		=> 'header_bg_sec',
				'label'			=> esc_html__( 'Menu Line Height', 'sivanportfolio' ),
				'description'   => esc_html__( 'Default is 82px', 'sivanportfolio' ),
				'type'       	=> 'number',
				'input_attrs' => array(
                'min'   => 18,
                'max'   => 130,
                'step'  => 1,
            ),
			)
	);

	$wp_customize->add_setting(
		'menu_uppercase',
		array(
			'default'			=> 0,
			'transport'			=> 'postMessage',
			'sanitize_callback' => 'absint'
		)
	);
	$wp_customize->add_control(
			'menu_uppercase',
			array(
				'settings'		=> 'menu_uppercase',
				'section'		=> 'header_bg_sec',
				'label'			=> esc_html__( 'Menu Uppercase', 'sivanportfolio' ),
				'type'       	=> 'checkbox',
			)
	);

	$wp_customize->add_setting(
		'lastmenu_hi_color',
		array(
			'default'			=> '#b50b52',
			'sanitize_callback' => 'sanitize_hex_color'
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'lastmenu_hi_color',
			array(
				'label'      => esc_html__( 'Highlight Menu Item Background', 'sivanportfolio' ),
				'description'      => esc_html__( 'Add', 'sivanportfolio' ).' "highlight" '.esc_html__( 'to your menu item(s) CSS class', 'sivanportfolio' ),
				'settings'   => 'lastmenu_hi_color',
				'section'    => 'header_bg_sec',
			)
		)
	);

	$wp_customize->add_setting(
		'menu_search',
		array(
			'default'			=> 0,
			'sanitize_callback' => 'absint'
		)
	);
	$wp_customize->add_control(
			'menu_search',
			array(
				'settings'		=> 'menu_search',
				'section'		=> 'header_bg_sec',
				'label'			=> esc_html__( 'Show Search Icon In Menu', 'sivanportfolio' ),
				'description'	=> esc_html__( 'Search icon will only display if you have set your own menu as Primary Menu in Appearance >> Menus', 'sivanportfolio' ),
				'type'       	=> 'checkbox',
			)
	);

	//PAGE TITLE AREA (BACKGROUND IMAGE, TITLE COLOR, BREADCRUMBS)
	$wp_customize->add_section(
		'page_header_bg_sec',
		array(
			'title'			=> esc_html__( 'Header/Page Title', 'sivanportfolio' ),
			'priority'		=> 12,
		)
	);

	$wp_customize->add_setting(
		'page_header_pattern',
		array(
			'default'			=> 'none',
			'sanitize_callback' => 'sivanportfolio_sanitize_choices'
		)
	);
	$wp_customize->add_control(
		'page_header_pattern',
		array(
			'label'    => esc_html__( 'Background Overlay Pattern', 'sivanportfolio' ),
			'description'   => esc_html__( 'Only works with a background image. Set this at Customize > Header Image', 'sivanportfolio' ),
			'section'  => 'page_header_bg_sec',
			'settings' => 'page_header_pattern',
			'type'     => 'select',
			'choices'  => array(
				'none' => esc_html__( 'None', 'sivanportfolio' ),
				'sivanportfolio-broken-lines' => esc_html__( 'Broken Lines', 'sivanportfolio' ),
				'sivanportfolio-carbon-fiber' => esc_html__( 'Carbon Fiber', 'sivanportfolio' ),
				'sivanportfolio-dark-mosaic' => esc_html__( 'Dark Mosaic', 'sivanportfolio' ),
				'sivanportfolio-diagonal-large' => esc_html__( 'Diagonal (Large)', 'sivanportfolio' ),
				'sivanportfolio-diagonal-small' => esc_html__( 'Diagonal (Small)', 'sivanportfolio' ),
				'sivanportfolio-small-bricks' => esc_html__( 'Small Bricks', 'sivanportfolio' ),
				'sivanportfolio-small-pixels' => esc_html__( 'Small Pixels', 'sivanportfolio' ),
				'sivanportfolio-dark-squares' => esc_html__( 'Squares (Dark)', 'sivanportfolio' ),
				'sivanportfolio-light-squares' => esc_html__( 'Squares (Light)', 'sivanportfolio' ),
			),
		)
	);

	$wp_customize->add_setting(
		'page_header_opacity',
		array(
			'default'			=> '0',
			'sanitize_callback' => 'absint'
		)
	);
	$wp_customize->add_control(
			'page_header_opacity',
			array(
				'settings'		=> 'page_header_opacity',
				'section'		=> 'page_header_bg_sec',
				'label'			=> esc_html__( 'Background Image Darkness', 'sivanportfolio' ),
				'description'   => esc_html__( 'Only works with a background image. 0 is normal, 100 is very dark', 'sivanportfolio' ),
				'type'       	=> 'number',
				'input_attrs' => array(
                'min'   => 0,
                'max'   => 100,
                'step'  => 1,
            ),
			)
	);

	$wp_customize->add_setting(
		'page_header_bgcolor',
		array(
			'default'			=> '#232629',
			'transport'			=> 'postMessage',
			'sanitize_callback' => 'sanitize_hex_color'
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'page_header_bgcolor',
			array(
				'label'      => esc_html__( 'Background Color', 'sivanportfolio' ),
				'description'   => esc_html__( 'If not using a Header Image', 'sivanportfolio' ),
				'settings'   => 'page_header_bgcolor',
				'section'    => 'page_header_bg_sec',
			)
		)
	);

	$wp_customize->add_setting(
		'page_header_titlecolor',
		array(
			'default'			=> '#FFFFFF',
			'transport'			=> 'postMessage',
			'sanitize_callback' => 'sanitize_hex_color'
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'page_header_titlecolor',
			array(
				'label'      => esc_html__( 'Page Title Color', 'sivanportfolio' ),
				'settings'   => 'page_header_titlecolor',
				'section'    => 'page_header_bg_sec',
				'active_callback' => 'sivanportfolio_callback_page_title_header',
			)
		)
	);
	$wp_customize->get_control( 'page_header_titlecolor' )->active_callback = 'sivanportfolio_callback_page_title_header';
	function sivanportfolio_callback_page_title_header( $control ) {
		if ( $control->manager->get_setting( 'page_header_position' )->value() == 'header' ) {
			return true;
		} else {
			return false;
		}
	}

	$wp_customize->add_setting(
		'page_header_position',
		array(
			'default'			=> 'header',
			'sanitize_callback' => 'sivanportfolio_sanitize_choices'
		)
	);
	$wp_customize->add_control(
		'page_header_position',
		array(
			'label'    => esc_html__( 'Page Title Position', 'sivanportfolio' ),
			'description'    => esc_html__( 'If you select Below Header, the page title will be the same color as Headings in Customize > Colors', 'sivanportfolio' ),
			'section'  => 'page_header_bg_sec',
			'settings' => 'page_header_position',
			'type'     => 'select',
			'choices'  => array(
				'header' => esc_html__( 'In Header', 'sivanportfolio' ),
				'content' => esc_html__( 'Below Header', 'sivanportfolio' ),
			),
		)
	);

	$wp_customize->add_setting(
		'page_header_align',
		array(
			'default'			=> 'center',
			'sanitize_callback' => 'sivanportfolio_sanitize_choices'
		)
	);
	$wp_customize->add_control(
		'page_header_align',
		array(
			'label'    => esc_html__( 'Layout', 'sivanportfolio' ),
			'section'  => 'page_header_bg_sec',
			'settings' => 'page_header_align',
			'type'     => 'select',
			'choices'  => array(
				'center' => esc_html__( 'Centered', 'sivanportfolio' ),
				'left' => esc_html__( 'Title left, breadcrumbs right', 'sivanportfolio' ),
				'right' => esc_html__( 'Breadcrumbs left, title right', 'sivanportfolio' ),
			),
		)
	);

	$wp_customize->add_setting(
		'enable_bread',
		array(
			'default'			=> 1,
			'sanitize_callback' => 'absint'
		)
	);
	$wp_customize->add_control(
			'enable_bread',
			array(
				'settings'		=> 'enable_bread',
				'section'		=> 'page_header_bg_sec',
				'label'			=> esc_html__( 'Enable Breadcrumbs', 'sivanportfolio' ),
				'type'       	=> 'checkbox',
			)
	);

	//BLOG SETTINGS
	$wp_customize->add_section(
		'blog_settings',
		array(
			'title'			=> esc_html__( 'Blog Settings', 'sivanportfolio' ),
			'priority'		=> 13,
		)
	);

	$wp_customize->add_setting(
		'blog_meta_layout',
		array(
			'default'			=> 'left',
			'transport'			=> 'postMessage',
			'sanitize_callback' => 'sivanportfolio_sanitize_choices'
		)
	);
	$wp_customize->add_control(
		'blog_meta_layout',
		array(
			'label'    => esc_html__( 'Title/Meta Alignment', 'sivanportfolio' ),
			'section'  => 'blog_settings',
			'settings' => 'blog_meta_layout',
			'type'     => 'radio',
			'choices'  => array(
				'center' => esc_html__( 'Center', 'sivanportfolio' ),
				'left' => esc_html__( 'Left', 'sivanportfolio' ),
				'right' => esc_html__( 'Right', 'sivanportfolio' ),
			),
		)
	);

	$wp_customize->add_setting(
		'blog_img_overlap',
		array(
			'default'			=> 'overlap',
			'sanitize_callback' => 'sivanportfolio_sanitize_choices'
		)
	);
	$wp_customize->add_control(
		'blog_img_overlap',
		array(
			'label'    => esc_html__( 'Title/Image Style', 'sivanportfolio' ),
			'section'  => 'blog_settings',
			'settings' => 'blog_img_overlap',
			'type'     => 'radio',
			'choices'  => array(
				'overlap' => esc_html__( 'Overlap', 'sivanportfolio' ),
				'no-overlap' => esc_html__( 'No Overlap', 'sivanportfolio' ),
			),
		)
	);

	$wp_customize->add_setting(
		'disable_blog_date',
		array(
			'default'			=> 0,
			'transport'			=> 'postMessage',
			'sanitize_callback' => 'absint'
		)
	);
	$wp_customize->add_control(
			'disable_blog_date',
			array(
				'settings'		=> 'disable_blog_date',
				'section'		=> 'blog_settings',
				'label'			=> esc_html__( 'Disable Post Date', 'sivanportfolio' ),
				'type'       	=> 'checkbox',
			)
	);

	$wp_customize->add_setting(
		'disable_blog_author',
		array(
			'default'			=> 0,
			'transport'			=> 'postMessage',
			'sanitize_callback' => 'absint'
		)
	);
	$wp_customize->add_control(
			'disable_blog_author',
			array(
				'settings'		=> 'disable_blog_author',
				'section'		=> 'blog_settings',
				'label'			=> esc_html__( 'Disable Post Author', 'sivanportfolio' ),
				'type'       	=> 'checkbox',
			)
	);

	$wp_customize->add_setting( 'blog_layout', array(
		'default'           => 'right_sidebar',
		'sanitize_callback' => 'sivanportfolio_sanitize_choices',
	) );
	$wp_customize->add_control( 'blog_layout', array(
		'label'   => esc_html__( 'Blog Sidebar Position', 'sivanportfolio' ),
		'description'   => esc_html__( 'Applies to blog index and archives. Sidebar position can be edited for each page/post individually.', 'sivanportfolio' ),
		'type'    => 'select',
		'section' => 'blog_settings',
		'choices' => array(
			'left_sidebar'  => esc_html__( 'Left Sidebar', 'sivanportfolio' ),
			'right_sidebar' => esc_html__( 'Right Sidebar', 'sivanportfolio' ),
			'no_sidebar'    => esc_html__( 'No Sidebar', 'sivanportfolio' ),
			'no_sidebar_condensed'		=> esc_html__( 'No Sidebar (Condensed)', 'sivanportfolio' ),
		)
	) );

	//EXTRA COLORS
	$wp_customize->add_setting(
		'body_text_color',
		array(
			'default'			=> '#6a7382',
			'transport'			=> 'postMessage',
			'sanitize_callback' => 'sanitize_hex_color'
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'body_text_color',
			array(
				'label'      => esc_html__( 'Text', 'sivanportfolio' ),
				'settings'   => 'body_text_color',
				'section'    => 'colors',
				'priority'   => 80,
			)
		)
	);

	$wp_customize->add_setting(
		'heading_color',
		array(
			'default'			=> '#515b69',
			'transport'			=> 'postMessage',
			'sanitize_callback' => 'sanitize_hex_color'
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'heading_color',
			array(
				'label'      => esc_html__( 'Headings', 'sivanportfolio' ),
				'settings'   => 'heading_color',
				'section'    => 'colors',
				'priority'   => 81,
			)
		)
	);

	$wp_customize->add_setting(
		'post_bgcolor',
		array(
			'default'			=> '#f9f9f9',
			'transport'			=> 'postMessage',
			'sanitize_callback' => 'sanitize_hex_color'
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'post_bgcolor',
			array(
				'label'      => esc_html__( 'Posts Wrapper', 'sivanportfolio' ),
				'settings'   => 'post_bgcolor',
				'section'    => 'colors',
				'priority'   => 82,
			)
		)
	);

	$wp_customize->add_setting(
		'sidebar_bgcolor',
		array(
			'default'			=> '#f9f9f9',
			'transport'			=> 'postMessage',
			'sanitize_callback' => 'sanitize_hex_color'
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'sidebar_bgcolor',
			array(
				'label'      => esc_html__( 'Sidebar Background', 'sivanportfolio' ),
				'settings'   => 'sidebar_bgcolor',
				'section'    => 'colors',
				'priority'   => 83,
			)
		)
	);

	$wp_customize->add_setting(
		'sidebar_linkcolor',
		array(
			'default'			=> '#000000',
			'transport'			=> 'postMessage',
			'sanitize_callback' => 'sanitize_hex_color'
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'sidebar_linkcolor',
			array(
				'label'      => esc_html__( 'Sidebar Links', 'sivanportfolio' ),
				'settings'   => 'sidebar_linkcolor',
				'section'    => 'colors',
				'priority'   => 84,
			)
		)
	);

	$wp_customize->add_setting(
		'page_footertop_color',
		array(
			'default'			=> '#232629',
			'transport'			=> 'postMessage',
			'sanitize_callback' => 'sanitize_hex_color'
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'page_footertop_color',
			array(
				'label'      => esc_html__( 'Footer Top Background', 'sivanportfolio' ),
				'settings'   => 'page_footertop_color',
				'section'    => 'colors',
				'priority'   => 90,
			)
		)
	);

	$wp_customize->add_setting(
		'page_footermid_color',
		array(
			'default'			=> '#1c1e21',
			'transport'			=> 'postMessage',
			'sanitize_callback' => 'sanitize_hex_color'
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'page_footermid_color',
			array(
				'label'      => esc_html__( 'Footer Mid Background', 'sivanportfolio' ),
				'settings'   => 'page_footermid_color',
				'section'    => 'colors',
				'priority'   => 91,
			)
		)
	);

	$wp_customize->add_setting(
		'page_footerbot_color',
		array(
			'default'			=> '#15171a',
			'transport'			=> 'postMessage',
			'sanitize_callback' => 'sanitize_hex_color'
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'page_footerbot_color',
			array(
				'label'      => esc_html__( 'Footer Bottom Background', 'sivanportfolio' ),
				'settings'   => 'page_footerbot_color',
				'section'    => 'colors',
				'priority'   => 92,
			)
		)
	);

	//BACKGROUND IMAGE
	$wp_customize->add_section('background_image', array(
	     'title'    => esc_html__( 'Background Image', 'sivanportfolio' ),
	     'priority'		=> 15,
	) );

	$wp_customize->add_section('colors', array(
	     'title'    => esc_html__( 'Colors' , 'sivanportfolio' ),
	     'priority'		=> 16,
	) );

	$wp_customize->add_setting(
		'hi_color',
		array(
			'default'			=> '#b50b52',
			'transport'			=> 'postMessage',
			'sanitize_callback' => 'sanitize_hex_color'
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'hi_color',
			array(
				'label'      => esc_html__( 'Main Highlight Color', 'sivanportfolio' ),
				'settings'   => 'hi_color',
				'section'    => 'colors',
			)
		)
	);

	$wp_customize->add_section('typography', array(
	     'title'    => esc_html__( 'Typography' , 'sivanportfolio' ),
	     'priority'		=> 17,
	) );

	// Setting - Font - Header
	$wp_customize->add_setting( 'font_header', array(
		'default'           => 'Ubuntu:300,400,500,700',
		'transport'			=> 'postMessage',
		'sanitize_callback' => 'sivanportfolio_sanitize_choices',
	) );
	$wp_customize->add_control( 'font_header', array(
		'label'   => esc_html__( 'Header', 'sivanportfolio' ),
		'type'    => 'select',
		'section' => 'typography',
		'choices' => $sivanportfolio_font_choices,
	) );

	// Setting - Font - Navigation
	$wp_customize->add_setting( 'font_nav', array(
		'default'           => 'Hind:300,400,500,600,700',
		'transport'			=> 'postMessage',
		'sanitize_callback' => 'sivanportfolio_sanitize_choices',
	) );
	$wp_customize->add_control( 'font_nav', array(
		'label'   => esc_html__( 'Navigation', 'sivanportfolio' ),
		'type'    => 'select',
		'section' => 'typography',
		'choices' => $sivanportfolio_font_choices,
	) );

	// Setting - Font - Page Title
	$wp_customize->add_setting( 'font_page_title', array(
		'default'           => 'Ubuntu:300,400,500,700',
		'transport'			=> 'postMessage',
		'sanitize_callback' => 'sivanportfolio_sanitize_choices',
	) );
	$wp_customize->add_control( 'font_page_title', array(
		'label'   => esc_html__( 'Page Title', 'sivanportfolio' ),
		'type'    => 'select',
		'section' => 'typography',
		'choices' => $sivanportfolio_font_choices,
	) );

	// Setting - Font - Content
	$wp_customize->add_setting( 'font_content', array(
		'default'           => 'Source Sans Pro:300,400,600,700',
		'transport'			=> 'postMessage',
		'sanitize_callback' => 'sivanportfolio_sanitize_choices',
	) );
	$wp_customize->add_control( 'font_content', array(
		'label'   => esc_html__( 'Content', 'sivanportfolio' ),
		'type'    => 'select',
		'section' => 'typography',
		'choices' => $sivanportfolio_font_choices,
	) );

	// Setting - Font - Headings
	$wp_customize->add_setting( 'font_headings', array(
		'default'           => 'Montserrat:400,700',
		'transport'			=> 'postMessage',
		'sanitize_callback' => 'sivanportfolio_sanitize_choices',
	) );
	$wp_customize->add_control( 'font_headings', array(
		'label'   => esc_html__( 'Headings', 'sivanportfolio' ),
		'type'    => 'select',
		'section' => 'typography',
		'choices' => $sivanportfolio_font_choices,
	) );

	// Setting - Font - Footer
	$wp_customize->add_setting( 'font_footer', array(
		'default'           => 'Hind:300,400,500,600,700',
		'transport'			=> 'postMessage',
		'sanitize_callback' => 'sivanportfolio_sanitize_choices',
	) );
	$wp_customize->add_control( 'font_footer', array(
		'label'   => esc_html__( 'Footer', 'sivanportfolio' ),
		'type'    => 'select',
		'section' => 'typography',
		'choices' => $sivanportfolio_font_choices,
	) );

	/*============HOME SETTINGS PANEL============*/
	$wp_customize->add_panel(
		'home_settings_panel',
		array(
			'title' 			=> esc_html__( 'Static Homepage Options', 'sivanportfolio' ),
			'priority'          => 3,
		)
	);

	/*============SLIDER IMAGES SECTION============*/
	$wp_customize->add_section(
		'slider_sec',
		array(
			'title'			=> esc_html__( 'Full Screen Slider/Hero Section', 'sivanportfolio' ),
			'panel'         => 'home_settings_panel'
		)
	);

	$wp_customize->add_setting(
		'disable_slider',
		array(
			'default'			=> 0,
			'sanitize_callback' => 'absint'
		)
	);
	$wp_customize->add_control(
			'disable_slider',
			array(
				'settings'		=> 'disable_slider',
				'section'		=> 'slider_sec',
				'label'			=> esc_html__( 'Disable Slider/Hero Section', 'sivanportfolio' ),
				'type'       	=> 'checkbox',
			)
	);

	$wp_customize->add_setting(
		'slider_bg',
		array(
			'default'			=> get_template_directory_uri().'/images/sivanportfolio-background.jpg',
			'sanitize_callback' => 'esc_url_raw'
		)
	);
	$wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'slider_bg',
           array(
               'label'      => esc_html__( 'Default Slider Background Image', 'sivanportfolio' ),
               'section'    => 'slider_sec',
               'settings'   => 'slider_bg',
               'description'    => esc_html__( 'Recommended minimum image size: 1600 x 900', 'sivanportfolio' ),
           )
       )
   );

	$wp_customize->add_setting(
		'slider_pattern',
		array(
			'default'			=> 'none',
			'sanitize_callback' => 'sivanportfolio_sanitize_choices'
		)
	);
	$wp_customize->add_control(
		'slider_pattern',
		array(
			'label'    => esc_html__( 'Slider Image Overlay Pattern', 'sivanportfolio' ),
			'section'  => 'slider_sec',
			'settings' => 'slider_pattern',
			'type'     => 'select',
			'choices'  => array(
				'none' => esc_html__( 'None', 'sivanportfolio' ),
				'sivanportfolio-broken-lines' => esc_html__( 'Broken Lines', 'sivanportfolio' ),
				'sivanportfolio-carbon-fiber' => esc_html__( 'Carbon Fiber', 'sivanportfolio' ),
				'sivanportfolio-dark-mosaic' => esc_html__( 'Dark Mosaic', 'sivanportfolio' ),
				'sivanportfolio-diagonal-large' => esc_html__( 'Diagonal (Large)', 'sivanportfolio' ),
				'sivanportfolio-diagonal-small' => esc_html__( 'Diagonal (Small)', 'sivanportfolio' ),
				'sivanportfolio-small-bricks' => esc_html__( 'Small Bricks', 'sivanportfolio' ),
				'sivanportfolio-small-pixels' => esc_html__( 'Small Pixels', 'sivanportfolio' ),
				'sivanportfolio-dark-squares' => esc_html__( 'Squares (Dark)', 'sivanportfolio' ),
				'sivanportfolio-light-squares' => esc_html__( 'Squares (Light)', 'sivanportfolio' ),
			),
		)
	);

	$wp_customize->add_setting(
		'slider_opacity',
		array(
			'default'			=> '0',
			'sanitize_callback' => 'absint'
		)
	);
	$wp_customize->add_control(
			'slider_opacity',
			array(
				'settings'		=> 'slider_opacity',
				'section'		=> 'slider_sec',
				'label'			=> esc_html__( 'Slider Image Darkness', 'sivanportfolio' ),
				'description'   => esc_html__( '0 is normal, 100 is very dark', 'sivanportfolio' ),
				'type'       	=> 'number',
				'input_attrs' => array(
                'min'   => 0,
                'max'   => 100,
                'step'  => 1,
            ),
			)
	);

	// Sliders - maximum of 3
	for ($i=1; $i < 4; $i++) {

	$wp_customize->add_setting(
		'slider_heading'.$i,
		array(
			'default'			=> '',
			'sanitize_callback' => 'sivanportfolio_sanitize_text'
		)
	);
	$wp_customize->add_control(
		new Sivanportfolio_Customize_Heading(
			$wp_customize,
			'slider_heading'.$i,
		array(
			'settings'		=> 'slider_heading'.$i,
			'section'		=> 'slider_sec',
			'label'			=> esc_html__( 'Slide ', 'sivanportfolio' ).$i,
			'description'	=> esc_html__( 'If you do not want to show this slide, simply leave the Select Page empty, or choose "--Select--" from the page list.', 'sivanportfolio' ),
		)
		)
	);

	$wp_customize->add_setting(
		'slider_page'.$i,
		array(
			'default'			=> '',
			'sanitize_callback' => 'absint'
		)
	);
	$wp_customize->add_control(
		'slider_page'.$i,
		array(
			'settings'		=> 'slider_page'.$i,
			'section'		=> 'slider_sec',
			'type'			=> 'dropdown-pages',
			'label'			=> esc_html__( 'Select Page', 'sivanportfolio' ),
			'description'	=> esc_html__( 'The slide will display the Title, Excerpt and Featured Image of the selected page. **If you do not upload a Featured Image in the page editor, your Default Slider Background Image will be displayed**', 'sivanportfolio' )
		)
	);

	$wp_customize->add_setting(
		'slider_button_left'.$i,
		array(
			'default'			=> '',
			'sanitize_callback' => 'sivanportfolio_sanitize_text'
		)
	);
	$wp_customize->add_control(
		'slider_button_left'.$i,
		array(
			'settings'		=> 'slider_button_left'.$i,
			'section'		=> 'slider_sec',
			'type'			=> 'text',
			'label'			=> esc_html__( 'Left Button Text', 'sivanportfolio' ),
			'description'	=> esc_html__( 'Leave this empty to not show this button.', 'sivanportfolio' )
		)
	);

	$wp_customize->add_setting(
		'slider_left_link'.$i,
		array(
			'default'			=> '',
			'sanitize_callback' => 'absint'
		)
	);
	$wp_customize->add_control(
		'slider_left_link'.$i,
		array(
			'settings'		=> 'slider_left_link'.$i,
			'section'		=> 'slider_sec',
			'type'			=> 'dropdown-pages',
			'label'			=> esc_html__( 'Link to Page:', 'sivanportfolio' )
		)
	);

	$wp_customize->add_setting(
		'slider_button_right'.$i,
		array(
			'default'			=> '',
			'sanitize_callback' => 'sivanportfolio_sanitize_text'
		)
	);
	$wp_customize->add_control(
		'slider_button_right'.$i,
		array(
			'settings'		=> 'slider_button_right'.$i,
			'section'		=> 'slider_sec',
			'type'			=> 'text',
			'label'			=> esc_html__( 'Right Button Text', 'sivanportfolio' ),
			'description'	=> esc_html__( 'Leave this empty to not show this button.', 'sivanportfolio' )
		)
	);

	$wp_customize->add_setting(
		'slider_right_link'.$i,
		array(
			'default'			=> '',
			'sanitize_callback' => 'absint'
		)
	);
	$wp_customize->add_control(
		'slider_right_link'.$i,
		array(
			'settings'		=> 'slider_right_link'.$i,
			'section'		=> 'slider_sec',
			'type'			=> 'dropdown-pages',
			'label'			=> esc_html__( 'Link to Page:', 'sivanportfolio' )
		)
	);

	}

	/*============FEATURED SECTION============*/

	//FEATURED ICONS, TITLES & TEXT
	$wp_customize->add_section(
		'featured_page_sec',
		array(
			'title'			=> esc_html__( 'Featured Services', 'sivanportfolio' ),
			'description'	=> esc_html__( 'By default this displays your latest posts. To override this, select a page for the first feature.', 'sivanportfolio' ),
			'panel'         => 'home_settings_panel'
		)
	);

	$wp_customize->add_setting(
		'disable_featured',
		array(
			'default'			=> 0,
			'sanitize_callback' => 'absint'
		)
	);
	$wp_customize->add_control(
			'disable_featured',
			array(
				'settings'		=> 'disable_featured',
				'section'		=> 'featured_page_sec',
				'label'			=> esc_html__( 'Disable Featured Section', 'sivanportfolio' ),
				'type'       	=> 'checkbox',
			)
	);

	$wp_customize->add_setting(
		'featured_title',
		array(
			'default'			=> '',
			'sanitize_callback' => 'sivanportfolio_sanitize_text'
		)
	);
	$wp_customize->add_control(
		'featured_title',
		array(
			'settings'		=> 'featured_title',
			'section'		=> 'featured_page_sec',
			'type'			=> 'text',
			'label'			=> esc_html__( 'Section Title', 'sivanportfolio' )
		)
	);

	$wp_customize->add_setting(
		'enable_featured_link',
		array(
			'default'			=> 1,
			'sanitize_callback' => 'absint'
		)
	);
	$wp_customize->add_control(
			'enable_featured_link',
			array(
				'settings'		=> 'enable_featured_link',
				'section'		=> 'featured_page_sec',
				'label'			=> esc_html__( 'Enable \'Read More\' Buttons', 'sivanportfolio' ),
				'type'       	=> 'checkbox',
			)
	);

	//FEATURES (MAX 4)
	for( $i = 1; $i < 5; $i++ ){

	$wp_customize->add_setting(
		'featured_header'.$i,
		array(
			'default'			=> '',
			'sanitize_callback' => 'sivanportfolio_sanitize_text'
		)
	);
	$wp_customize->add_control(
		new Sivanportfolio_Customize_Heading(
			$wp_customize,
			'featured_header'.$i,
			array(
				'settings'		=> 'featured_header'.$i,
				'section'		=> 'featured_page_sec',
				'label'			=> esc_html__( 'Feature ', 'sivanportfolio' ).$i
			)
		)
	);

	$wp_customize->add_setting(
		'featured_page_icon'.$i,
		array(
			'default'			=> 'fa fa-check',
			'transport'         => 'postMessage',
			'sanitize_callback' => 'sivanportfolio_sanitize_text'
		)
	);
	$wp_customize->add_control(
		new Sivanportfolio_Icon_Choices(
		$wp_customize,
		'featured_page_icon'.$i,
		array(
			'settings'		=> 'featured_page_icon'.$i,
			'section'		=> 'featured_page_sec',
			'type'			=> 'select',
			'label'			=> esc_html__( 'Icon', 'sivanportfolio' ),
		)
		)
	);

	$wp_customize->add_setting(
		'featured_page_link'.$i,
		array(
			'default'			=> '',
			'sanitize_callback' => 'absint'
		)
	);
	$wp_customize->add_control(
		'featured_page_link'.$i,
		array(
			'settings'		=> 'featured_page_link'.$i,
			'section'		=> 'featured_page_sec',
			'type'			=> 'dropdown-pages',
			'label'			=> esc_html__( 'Select Page', 'sivanportfolio' )
		)
	);
	}

	/*============ABOUT SECTION============*/

	$wp_customize->add_section(
		'about_sec',
		array(
			'title'			=> esc_html__( 'About Us Section', 'sivanportfolio' ),
			'description'	=> esc_html__( 'By default this displays a random post. To override this, select a page. The middle text displays the excerpt of your chosen page, if you have added an excerpt. The lower text displays the first 50 words of the page content. The image is the featured image of the selected page.', 'sivanportfolio' ),
			'panel'         => 'home_settings_panel'
		)
	);

	$wp_customize->add_setting(
		'disable_about_sec',
		array(
			'default'			=> 0,
			'sanitize_callback' => 'absint'
		)
	);
	$wp_customize->add_control(
			'disable_about_sec',
			array(
				'settings'		=> 'disable_about_sec',
				'section'		=> 'about_sec',
				'label'			=> esc_html__( 'Disable About Section', 'sivanportfolio' ),
				'type'       	=> 'checkbox',
			)
	);

	$wp_customize->add_setting(
		'about_page_link',
		array(
			'default'			=> '',
			'sanitize_callback' => 'absint'
		)
	);
	$wp_customize->add_control(
		'about_page_link',
		array(
			'settings'		=> 'about_page_link',
			'section'		=> 'about_sec',
			'type'			=> 'dropdown-pages',
			'label'			=> esc_html__( 'Select Page', 'sivanportfolio' )
		)
	);

	/*============CTA SECTION============*/

	$wp_customize->add_section(
		'cta_sec',
		array(
			'title'			=> esc_html__( 'Call-to-action Panel', 'sivanportfolio' ),
			'panel'         => 'home_settings_panel'
		)
	);

	$wp_customize->add_setting(
		'disable_cta_sec',
		array(
			'default'			=> 0,
			'sanitize_callback' => 'absint'
		)
	);
	$wp_customize->add_control(
			'disable_cta_sec',
			array(
				'settings'		=> 'disable_cta_sec',
				'section'		=> 'cta_sec',
				'label'			=> esc_html__( 'Disable Call-to-action Panel', 'sivanportfolio' ),
				'type'       	=> 'checkbox',
			)
	);

	$wp_customize->add_setting(
		'cta_link',
		array(
			'default'			=> '',
			'sanitize_callback' => 'absint'
		)
	);
	$wp_customize->add_control(
		'cta_link',
		array(
			'settings'		=> 'cta_link',
			'section'		=> 'cta_sec',
			'type'			=> 'dropdown-pages',
			'label'			=> esc_html__( 'Select Page', 'sivanportfolio' ),
			'description'	=> esc_html__( 'Displays the page title and excerpt, if you have added an excerpt to the selected page.', 'sivanportfolio' )
		)
	);

	$wp_customize->add_setting(
		'cta_button',
		array(
			'default'			=> esc_html__( 'Read More', 'sivanportfolio' ),
			'sanitize_callback' => 'sivanportfolio_sanitize_text'
		)
	);
	$wp_customize->add_control(
		'cta_button',
		array(
			'settings'		=> 'cta_button',
			'section'		=> 'cta_sec',
			'type'			=> 'text',
			'label'			=> esc_html__( 'Button Text', 'sivanportfolio' )
		)
	);

	// Section - Theme Information
	$wp_customize->add_section( 'theme_info_sec' , array(
		'title'      => esc_html__( 'Theme Help', 'sivanportfolio' ),
		'priority'   => 200,
		'description' => esc_html__( 'For help with the sivanportfolio theme, please see the theme documentation.', 'sivanportfolio' ),
	) );
	$wp_customize->add_control(
		new Sivanportfolio_Customize_Extra_Control(
			$wp_customize,
			'theme_docs',
			array(
				'section'   => 'theme_info_sec',
				'type'      => 'docs',
				'label'		=> esc_html__( 'Documentation', 'sivanportfolio' ),
				'url'		=> 'https://uxlthemes.com/docs/sivanportfolio-theme/',
				'priority'	=> 10
			)
		)
	);

	// Section - Go Pro
	$wp_customize->add_section( 'go_pro_sec' , array(
		'title'      => esc_html__( 'Go Pro', 'sivanportfolio' ),
		'priority'   => 1,
		'description' => esc_html__( 'Upgrade to sivanportfolio Pro for even more cool features and customization options.', 'sivanportfolio' ),
	) );
	$wp_customize->add_control(
		new Sivanportfolio_Customize_Extra_Control(
			$wp_customize,
			'go_pro',
			array(
				'section'   => 'go_pro_sec',
				'type'      => 'pro-link',
				'label'		=> esc_html__( 'Go Pro', 'sivanportfolio' ),
				'url'		=> 'https://uxlthemes.com/theme/sivanportfolio-pro/',
				'priority'	=> 10
			)
		)
	);

}
add_action('customize_register', 'sivanportfolio');

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function sivanportfolio_customize_preview_js() {
	wp_enqueue_script('sivanportfolio_customizer', get_template_directory_uri() . '/js/customizer.js', array('customize-preview'), '20161020', true );
}
add_action('customize_preview_init', 'sivanportfolio_customize_preview_js');


function sivanportfolio_customizer_script() {
	wp_enqueue_script('sivanportfolio-customizer-script', get_template_directory_uri() .'/functions/js/customizer-scripts.js', array("jquery","jquery-ui-draggable"),'', true  );
	wp_enqueue_script('chosen-jquery', get_template_directory_uri() .'/functions/js/chosen.jquery.js', array("jquery"),'1.4.1', true  );
	wp_enqueue_style('chosen', get_template_directory_uri() .'/functions/css/chosen.css');
	wp_enqueue_style('font-awesome', get_template_directory_uri() .'/css/font-awesome.css');
	wp_enqueue_style('sivanportfolio-customizer-style', get_template_directory_uri() .'/functions/css/customizer-style.css');
}
add_action('customize_controls_enqueue_scripts', 'sivanportfolio_customizer_script');


if( class_exists('WP_Customize_Control') ):

class Sivanportfolio_Customize_Extra_Control extends WP_Customize_Control {
	public $settings = 'blogname';
	public $description = '';
	public $url = '';
	public $group = '';

	public function render_content() {
		switch ( $this->type ) {
			default:

			case 'extra':
				echo '<p style="margin-top:40px;">' . sprintf(
							'<a href="%1$s" target="_blank">%2$s</a>',
							esc_url( $this->url ),
							esc_html__( 'More options available', 'sivanportfolio' )
						) . '</p>';
				echo '<p class="description" style="margin-top:5px;">' . $this->description . '</p>';
				break;

			case 'docs':
				echo sprintf(
							'<a href="%1$s" class="button-primary" target="_blank">%2$s</a>',
							esc_url( $this->url ),
							esc_html__( 'Documentation', 'sivanportfolio' )
						);
				break;

			case 'pro-link':
				echo sprintf(
							'<a href="%1$s" class="button-primary" target="_blank">%2$s</a>',
							esc_url( $this->url ),
							esc_html__( 'Go Pro', 'sivanportfolio' )
						);
				break;

			case 'line' :
				echo '<hr />';
				break;
		}
	}
}

class sivanportfolio_Icon_Choices extends WP_Customize_Control{
	public $type = 'icon';

	public function render_content(){
		?>
            <label>
                <span class="customize-control-title">
                <?php echo esc_html( $this->label ); ?>
                </span>

                <?php if($this->description){ ?>
	            <span class="description customize-control-description">
	            	<?php echo wp_kses_post($this->description); ?>
	            </span>
	            <?php } ?>

                <div class="selected-icon">
                	<i class="<?php echo esc_attr($this->value()); ?>"></i>
                	<span><i class="fa fa-angle-down"></i></span>
                </div>

                <ul class="icon-list clearfix">
                	<?php
                	$fontawesome_array = sivanportfolio_fontawesome_array();
                	foreach ($fontawesome_array as $fontawesome_array_single) {
							$icon_class = $this->value() == $fontawesome_array_single ? 'icon-active' : '';
							echo '<li class='.$icon_class.'><i class="fa fa-'.$fontawesome_array_single.'"></i> '.$fontawesome_array_single.'</li>';
						}
                	?>
                </ul>
                <input type="hidden" value="<?php $this->value(); ?>" <?php $this->link(); ?> />
            </label>
		<?php
	}
}

class sivanportfolio_Alpha_Color_Control extends WP_Customize_Control {
	/**
	 * Official control name.
	 */
	public $type = 'alpha-color';
	/**
	 * Add support for palettes to be passed in.
	 *
	 * Supported palette values are true, false, or an array of RGBa and Hex colors.
	 */
	public $palette;
	/**
	 * Add support for showing the opacity value on the slider handle.
	 */
	public $show_opacity;
	/**
	 * Render the control.
	 */
	public function render_content() {
		// Process the palette
		if ( is_array( $this->palette ) ) {
			$palette = implode( '|', $this->palette );
		} else {
			// Default to true
			$palette = ( false === $this->palette || 'false' === $this->palette ) ? 'false' : 'true';
		}
		// Support passing show_opacity as string or boolean. Default to true.
		$show_opacity = ( false === $this->show_opacity || 'false' === $this->show_opacity ) ? 'false' : 'true';
		// Output the label if passed in
		if ( isset( $this->label ) && '' !== $this->label ) {
			echo '<span class="customize-control-title">' . sanitize_text_field( $this->label ) . '</span>';
		}
		// Output the description if passed in
		if ( isset( $this->description ) && '' !== $this->description ) {
			echo '<span class="description customize-control-description">' . sanitize_text_field( $this->description ) . '</span>';
		}
		?>
		<div class="customize-control-content">
			<label>
				<input class="alpha-color-control" type="text" data-show-opacity="<?php echo $show_opacity; ?>" data-palette="<?php echo esc_attr( $palette ); ?>" data-default-color="<?php echo esc_attr( $this->settings['default']->default ); ?>" <?php $this->link(); ?>  />
			</label>
		</div>
		<?php
	}
}

class sivanportfolio_Customize_Heading extends WP_Customize_Control {
    public function render_content() {
    	?>

        <?php if ( !empty( $this->label ) ) : ?>
            <h3 class="sivanportfolio-accordion-section-title"><?php echo esc_html( $this->label ); ?></h3>
        <?php endif; ?>
        <?php if ( !empty( $this->description ) ) : ?>
            <p class="sivanportfolio-accordion-section-paragraph"><?php echo esc_html( $this->description ); ?></p>
        <?php endif; ?>
    <?php }
}

class sivanportfolio_Dropdown_Chooser extends WP_Customize_Control{
	public function render_content(){
		if ( empty( $this->choices ) )
                return;
		?>
            <label>
                <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
                <select class="hs-chosen-select" <?php $this->link(); ?>>
                    <?php
                    foreach ( $this->choices as $value => $label )
                        echo '<option value="' . esc_attr( $value ) . '"' . selected( $this->value(), $value, false ) . '>' . $label . '</option>';
                    ?>
                </select>
            </label>
		<?php
	}
}

endif;

//SANITIZATION FUNCTIONS
function sivanportfolio_sanitize_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}

function sivanportfolio_sanitize_checkbox( $input ) {
    if ( $input == 1 ) {
        return 1;
    } else {
        return '';
    }
}

function sivanportfolio_sanitize_integer( $input ) {
    if( is_numeric( $input ) ) {
        return intval( $input );
    }
}

function sivanportfolio_sanitize_choices( $input, $setting ) {
    global $wp_customize;

    $control = $wp_customize->get_control( $setting->id );

    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

function sivanportfolio_sanitize_hex_rgb_rgba_color( $input ) {

    if ( '' === $input ) {
        return '';
    }

    if (
    	preg_match('|^#([A-Fa-f0-9]{3}){1,2}$|', $input )
    	|| preg_match('/\A^rgb\(([0]*[0-9]{1,2}|[1][0-9]{2}|[2][0-4][0-9]|[2][5][0-5])\s*,\s*([0]*[0-9]{1,2}|[1][0-9]{2}|[2][0-4][0-9]|[2][5][0-5])\s*,\s*([0]*[0-9]{1,2}|[1][0-9]{2}|[2][0-4][0-9]|[2][5][0-5])\s*,\s*([0-9]*\.?[0-9]+)\)$\z/im', $input)
    	|| preg_match('/\A^rgba\(([0]*[0-9]{1,2}|[1][0-9]{2}|[2][0-4][0-9]|[2][5][0-5])\s*,\s*([0]*[0-9]{1,2}|[1][0-9]{2}|[2][0-4][0-9]|[2][5][0-5])\s*,\s*([0]*[0-9]{1,2}|[1][0-9]{2}|[2][0-4][0-9]|[2][5][0-5])\s*,\s*([0-9]*\.?[0-9]+)\)$\z/im', $input)
    	) {
        return $input;
    }

}

function sivanportfolio_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'sivanportfolio_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'sivanportfolio_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'sivanportfolio_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function sivanportfolio_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function sivanportfolio_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function sivanportfolio_customize_preview_js() {
	wp_enqueue_script( 'sivanportfolio-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'sivanportfolio_customize_preview_js' );
