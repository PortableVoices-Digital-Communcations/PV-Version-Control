<?php
/**
 * @package ultra
 * @since ultra 1.0
 * @license GPL 2.0
 */

function ultra_customizer_init(){

	$sections = apply_filters( 'ultra_customizer_sections', array(

        'ultra_general' => array(
            'title' => __('General', 'ultra'),
            'priority' => 10,
        ),    

        'ultra_top_bar' => array(
            'title' => __('Top Bar', 'ultra'),
            'priority' => 20,
        ),          

        'ultra_header' => array(
            'title' => __('Header', 'ultra'),
            'priority' => 30,
        ),  

        'ultra_main_menu' => array(
            'title' => __('Main Menu', 'ultra'),
            'priority' => 40,
        ),

         'ultra_mobile_menu' => array(
            'title' => __('Mobile Menu', 'ultra'),
            'priority' => 50,
        ),       

        'ultra_content_header' => array(
            'title' => __('Content Header', 'ultra'),
            'priority' => 60,
        ),        

        'ultra_content' => array(
            'title' => __('Content', 'ultra'),
            'priority' => 70,
        ),                            

        'ultra_sidebar' => array(
            'title' => __('Sidebar', 'ultra'),
            'priority' => 80,
        ),    

        'ultra_footer' => array(
            'title' => __('Footer', 'ultra'),
            'priority' => 90,
        ),   

        'ultra_bottom_bar' => array(
            'title' => __('Bottom Bar', 'ultra'),
            'priority' => 90,
        ),                              

	) );

	$settings = apply_filters( 'ultra_premium_customizer_settings', array(

        'ultra_general' => array(

            'site_max_width' => array(
                'type' => 'measurement',
                'title' => __('Site Max Width (px)', 'ultra'),
                'default' => '1200',
                'callback' => 'ultra_set_site_width',
            ),

        ),       

        'ultra_top_bar' => array(                           

            'link_color' => array(
                'type' => 'color',
                'title' => __('Link Color', 'ultra'),
                'default' => '#acaeaf',
                'selector' => '#top-bar .top-bar-text span a, .top-bar-navigation ul li a, .top-bar-arrow:before',
                'property' => 'color',
            ),  

            'link_hover_color' => array(
                'type' => 'color',
                'title' => __('Link Hover Color', 'ultra'),
                'default' => '#ffffff',
                'selector' => '#top-bar .top-bar-text span a:hover, .top-bar-navigation ul li:hover a, .top-bar-navigation ul ul li:hover > a',
                'property' => 'color',
                'no_live' => true,
            ),

            'menu_hover_accent_color' => array(
                'type' => 'color',
                'title' => __('Menu Hover Accent Color', 'ultra'),
                'default' => '#0896fe',
                'callback' => 'ultra_top_bar_menu_accent',
                'no_live' => true,
            ), 

            'font' => array(
                'type' => 'font',
                'title' => __('Font', 'ultra'),
                'default' => 'Lato',
                'selector' => '#top-bar',
            ),                 	             

			'text_size' => array(
				'type' => 'measurement',
				'title' => __('Text Size (px)', 'ultra'),
				'default' => 12,
				'unit' => 'px',
                'selector' => '#top-bar .top-bar-text span, .top-bar-navigation ul li a',
				'property' => 'font-size',
			),

			'height' => array(
				'type' => 'measurement',
				'title' => __('Height (px)', 'ultra'),
				'default' => 38,
				'unit' => 'px',
				'callback' => 'ultra_set_top_bar_height',
			),

            'background_color' => array(
                'type' => 'color',
                'title' => __('Background Color', 'ultra'),
                'default' => '#313539',
                'selector' => '#top-bar, .top-bar-arrow',
                'property' => 'background-color',
            ),

            'background_image' => array(
                'type' => 'image',
                'title' => __('Background Image', 'ultra'),
                'default' => false,
                'selector' => '#top-bar',
                'property' => 'background-image',
            ),

            'background_image_layout' => array(
                'type' => 'select',
                'title' => __('Background Image Layout', 'ultra'),
                'default' => '',
                'selector' => '#top-bar',
                'choices' => array(
                    '' => __( 'Default', 'ultra' ),
                    'center' => __( 'Center', 'ultra' ),
                    'tile' => __( 'Tile', 'ultra' ),
                    'cover' => __( 'Cover', 'ultra' ),
                ),
                'callback' => 'ultra_customizer_callback_image_layout'
            ),            				                                           

        ),         

        'ultra_header' => array(                          

			'site_title_color' => array(
				'type' => 'color',
				'title' => __('Site Title Color', 'ultra'),
				'default' => '#313539',
				'selector' => '.site-branding h1.site-title',  
				'property' => 'color',
			),           

			'site_title_font' => array(
				'type' => 'font',
				'title' => __('Site Title Font', 'ultra'),
				'default' => 'Muli:300',
				'selector' => '.site-header .site-branding h1.site-title',
			),	

			'site_title_font_size' => array(
				'type' => 'measurement',
				'title' => __('Site Title Font Size (px)', 'ultra'),
				'default' => 36,
				'unit' => 'px',
				'selector' => '.site-header .site-branding h1.site-title',
				'property' => 'font-size',
			),

			'site_tagline_color' => array(
				'type' => 'color',
				'title' => __('Site Tagline Color', 'ultra'),
				'default' => '#313539',
				'selector' => '.site-header .site-branding h2.site-description',
				'property' => 'color',
			),				

			'site_tagline_font' => array(
				'type' => 'font',
				'title' => __('Site Tagline Font', 'ultra'),
				'default' => 'Lato',
				'selector' => '.site-header .site-branding h2.site-description',
			),

			'site_tagline_font_size' => array(
				'type' => 'measurement',
				'title' => __('Site Tagline Font Size (px)', 'ultra'),
				'default' => 14,
				'unit' => 'px',
				'selector' => '.site-header .site-branding h2.site-description',
				'property' => 'font-size',
			),

			'height' => array(
				'type' => 'measurement',
				'title' => __('Height (px)', 'ultra'),
				'default' => 112,
				'unit' => 'px',
				'callback' => 'ultra_set_header_height',
			),

            'background_color' => array(
                'type' => 'color',
                'title' => __('Background Color', 'ultra'),
                'default' => '#ffffff',
                'callback' => 'ultra_set_header_background',
            ),

            'background_image' => array(
                'type' => 'image',
                'title' => __('Background Image', 'ultra'),
                'default' => false,
                'callback' => 'ultra_set_header_background_image'
            ),

            'background_image_layout' => array(
                'type' => 'select',
                'title' => __('Background Image Layout', 'ultra'),
                'default' => '',
                'selector' => '.site-header:before',
                'choices' => array(
                    '' => __( 'Default', 'ultra' ),
                    'center' => __( 'Center', 'ultra' ),
                    'tile' => __( 'Tile', 'ultra' ),
                    'cover' => __( 'Cover', 'ultra' ),
                ),
                'callback' => 'ultra_customizer_callback_image_layout'
            ),             												            

        ),   

        'ultra_main_menu' => array(

            'link_text_color' => array(
                'type' => 'color',
                'title' => __('Link Color', 'ultra'),
                'default' => '#313539',
                'selector' => '.main-navigation ul li a, .main-navigation .menu-search .search-icon:before, .responsive-menu .menu-toggle, .main-navigation .menu-search .search-icon:before, .main-navigation .menu-search .searchform input[name=s]',
                'property' => 'color',
            ),

            'link_text_hover_color' => array(
                'type' => 'color',
                'title' => __('Link Hover Color', 'ultra'),
                'default' => '#0896fe',
                'callback' => 'ultra_set_main_menu_hover_color',
                'no_live' => true,
            ),   

            'current_link_text_color' => array(
                'type' => 'color',
                'title' => __('Current Link Color', 'ultra'),
                'default' => '#0896fe',
                'selector' => '.main-navigation .current_page_item > a, .main-navigation .current-menu-item > a, .main-navigation .current_page_ancestor > a',               
                'property' => 'color',
            ),  

            'dropdown_background_color' => array(
                'type' => 'color',
                'title' => __('Dropdown Background Color', 'ultra'),
                'default' => '#ffffff',
                'selector' => '.main-navigation ul ul, .main-navigation .menu-search .searchform',
                'property' => 'background',
            ),

            'dropdown_link_text_color' => array(
                'type' => 'color',
                'title' => __('Dropdown Link Color', 'ultra'),
                'default' => '#5a5d60',
                'selector' => '.main-navigation ul ul li a',
                'property' => 'color',
            ), 

            'dropdown_background_hover_color' => array(
                'type' => 'color',
                'title' => __('Dropdown Background Hover Color', 'ultra'),
                'default' => '#0896fe',
                'selector' => '.main-navigation ul ul li:hover > a',
                'property' => 'background',
                'no_live' => true,
            ),

            'dropdown_link_text_hover_color' => array(
                'type' => 'color',
                'title' => __('Dropdown Link Hover Color', 'ultra'),
                'default' => '#ffffff',
                'selector' => '.main-navigation ul ul li:hover > a',
                'property' => 'color',
                'no_live' => true,
            ),                                           

            'font' => array(
                'type' => 'font',
                'title' => __('Font', 'ultra'),
                'default' => 'Lato',
                'selector' => '.main-navigation, .main-navigation .menu-search .searchform input[name=s]',
            ),

            'text_size' => array(
                'type' => 'measurement',
                'title' => __('Text Size (px)', 'ultra'),
                'default' => 14,
                'unit' => 'px',
                'selector' => '.main-navigation',
                'property' => 'font-size',
            ),

            'link_text_right_margin' => array(
                'type' => 'measurement',
                'title' => __('Link Right Margin (px)', 'ultra'),
                'default' => 25,
                'unit' => 'px',
                'callback' => 'ultra_set_menu_right_margin',
            ),                                                                                             	                  	

        ),

        'ultra_mobile_menu' => array(

            'background_color' => array(
                'type' => 'color',
                'title' => __('Link Background Color', 'ultra'),
                'default' => '#eaeaea',
                'selector' => '.responsive-menu .main-navigation.toggled ul li a, .responsive-menu .main-navigation.toggled ul ul li:hover > a',
                'property' => 'background',
            ),      

            'text_color' => array(
                'type' => 'color',
                'title' => __('Link Color', 'ultra'),
                'default' => '#5a5d60',
                'selector' => '.responsive-menu .main-navigation.toggled ul li a, .responsive-menu .main-navigation.toggled ul ul li:hover > a',              
                'property' => 'color',
            ),      

            'background_hover_color' => array(
                'type' => 'color',
                'title' => __('Link Background Hover Color', 'ultra'),
                'default' => '#0896fe',
                'selector' => array(
                    '.responsive-menu .main-navigation.toggled ul li a:hover',
                    '.responsive-menu .main-navigation.toggled ul ul li a:hover',
                ),
                'property' => 'background',
                'no_live' => true,
            ),   

            'text_hover_color' => array(
                'type' => 'color',
                'title' => __('Link Hover Color', 'ultra'),
                'default' => '#ffffff',
                'selector' => '.responsive-menu .main-navigation.toggled ul li a:hover, .responsive-menu .main-navigation.toggled ul ul li a:hover',
                'property' => 'color',
            ), 

        ), 

        'ultra_content_header' => array(

            'font_color' => array(
                'type' => 'color',
                'title' => __('Heading Color', 'ultra'),
                'default' => '#313539',
                'selector' => '.site-content header .container h1',
                'property' => 'color',
            ),              

            'font' => array(
                'type' => 'font',
                'title' => __('Heading Font', 'ultra'),
                'default' => 'Lato:700',
                'selector' => '.site-content header .container h1',
            ),

            'font_size' => array(
                'type' => 'measurement',
                'title' => __('Heading Font Size (px)', 'ultra'),
                'default' => 25,
                'unit' => 'px',
                'selector' => '.site-content header .container h1',
                'property' => 'font-size',
            ),

            'breadcrumb_font' => array(
                'type' => 'font',
                'title' => __('Breadcrumb Font', 'ultra'),
                'default' => 'Lato',
                'selector' => '.entry-header .breadcrumbs, .page-header .breadcrumbs',
            ),

            'breadcrumb_font_size' => array(
                'type' => 'measurement',
                'title' => __('Breadcrumb Font Size (px)', 'ultra'),
                'default' => 13,
                'unit' => 'px',
                'selector' => '.entry-header .breadcrumbs > *, .page-header .breadcrumbs > *',
                'property' => 'font-size',
            ),

            'breadcrumb_text_color' => array(
                'type' => 'color',
                'title' => __('Breadcrumb Text Color', 'ultra'),
                'default' => '#acaeaf',
                'selector' => '.entry-header .breadcrumbs, .page-header .breadcrumbs, .archive .container .title-wrapper .taxonomy-description p',
                'property' => 'color',
            ), 

            'breadcrumb_link_color' => array(
                'type' => 'color',
                'title' => __('Breadcrumb Link Color', 'ultra'),
                'default' => '#acaeaf',
                'selector' => '.entry-header .breadcrumbs a, .page-header .breadcrumbs a',
                'property' => 'color',
            ),  

            'breadcrumb_link_hover_color' => array(
                'type' => 'color',
                'title' => __('Breadcrumb Link Hover Color', 'ultra'),
                'default' => '#0896fe',
                'selector' => '.entry-header .breadcrumbs a:hover, .page-header .breadcrumbs a:hover',                
                'property' => 'color',
                'no_live' => true,
            ),                        

            'background_color' => array(
                'type' => 'color',
                'title' => __('Background Color', 'ultra'),
                'default' => '#f6f6f7',
                'selector' => '.single .entry-header, .page .site-content > .entry-header, .blog .page-header, .archive .page-header, .search-results .page-header, .search-no-results .page-header, .error404 .page-header',
                'property' => 'background',
            ),

            'background_image' => array(
                'type' => 'image',
                'title' => __('Background Image', 'ultra'),
                'default' => false,
                'selector' => '.single .entry-header, .page .site-content > .entry-header, .blog .page-header, .archive .page-header, .search-results .page-header, .search-no-results .page-header, .error404 .page-header',
                'property' => 'background-image',
            ),

            'background_image_layout' => array(
                'type' => 'select',
                'title' => __('Background Image Layout', 'ultra'),
                'default' => '',
                'selector' => '.single .entry-header, .page .site-content > .entry-header, .blog .page-header, .archive .page-header, .search-results .page-header, .search-no-results .page-header, .error404 .page-header',
                'choices' => array(
                    '' => __( 'Default', 'ultra' ),
                    'center' => __( 'Center', 'ultra' ),
                    'tile' => __( 'Tile', 'ultra' ),
                    'cover' => __( 'Cover', 'ultra' ),
                ),
                'callback' => 'ultra_customizer_callback_image_layout'
            ),             

        ), 

        'ultra_content' => array(

            'link_color' => array(
                'type' => 'color',
                'title' => __('Link Color', 'ultra'),
                'default' => '#0896fe',
                'callback' => 'ultra_link_color',
            ),              

            'body_text_color' => array(
                'type' => 'color',
                'title' => __('Text Color', 'ultra'),
                'default' => '#5a5d60',
                'callback' => 'ultra_body_text_color',
            ),  

            'body_text_font' => array(
                'type' => 'font',
                'title' => __('Text Font', 'ultra'),
                'default' => 'Lato',
                'selector' => '#primary label, #primary button, #primary input, #primary select, #primary textarea, #primary p, #primary > ul, #primary > ol, #primary > table, #primary > dl, #primary address, #primary pre, .paging-navigation, .page-links, .site-main .comment-navigation, .site-main .post-navigation, #secondary label, #secondary button, #secondary input, #secondary select, #secondary textarea, #secondary p, #secondary > ul, #secondary > ol, #secondary > table, #secondary > dl, #secondary address, #secondary pre',                  
            ),                      

            'body_text_size' => array(
                'type' => 'measurement',
                'title' => __('Text Size (px)', 'ultra'),
                'default' => 14,
                'unit' => 'px',
                'callback' => 'ultra_body_text_size',
            ),

            'post_meta_text_size' => array(
                'type' => 'measurement',
                'title' => __('Post Meta Text Size (px)', 'ultra'),
                'default' => 13,
                'unit' => 'px',
                'selector' => '.single .entry-meta div > span, .single .entry-meta .post-navigation .nav-previous a:before, .single .entry-meta .post-navigation .nav-next a:after, .entry-footer > span',
                'property' => 'font-size',
            ),

            'content_heading_text_color' => array(
                'type' => 'color',
                'title' => __('Heading Color', 'ultra'),
                'default' => '#313539',
                'selector' => '#primary .entry-content h1, #primary .entry-content h1 a, #primary .entry-content h2, #primary .entry-content h2 a, #primary .entry-content h3, #primary .entry-content h3 a, #primary .entry-content h4, #primary .entry-content h4 a, #primary .entry-content h5, #primary .entry-content h5 a, #primary .entry-content h6, #primary .entry-content h6 a, .comments-area h1, .comments-area h2, .comments-area h3, .comments-area h4, .comments-area h5, .comments-area h6, .comments-area .comment-author .fn a',
                'property' => 'color',
            ),

            'content_heading_text_font' => array(
                'type' => 'font',
                'title' => __('Heading Font', 'ultra'),
                'default' => 'Lato:700',
                'selector' => '#primary .entry-content h1, #primary .entry-content h2, #primary .entry-content h3, #primary .entry-content h4, #primary .entry-content h5, #primary .entry-content h6',
            ),                                           

            'content_heading_one_size' => array(
                'type' => 'measurement',
                'title' => __('H1 Text Size (px)', 'ultra'),
                'default' => 25,
                'unit' => 'px',
                'selector' => '#primary .entry-content h1',
                'property' => 'font-size',
            ),  
            'content_heading_two_size' => array(
                'type' => 'measurement',
                'title' => __('H2 Text Size (px)', 'ultra'),
                'default' => 22,
                'unit' => 'px',
                'selector' => '#primary .entry-content h2',
                'property' => 'font-size',
            ),  

            'content_heading_three_size' => array(
                'type' => 'measurement',
                'title' => __('H3 Text Size (px)', 'ultra'),
                'default' => 20,
                'unit' => 'px',
                'selector' => '#primary .entry-content h3',
                'property' => 'font-size',
            ),  

            'content_heading_four_size' => array(
                'type' => 'measurement',
                'title' => __('H4 Text Size (px)', 'ultra'),
                'default' => 18,
                'unit' => 'px',
                'selector' => '#primary .entry-content h4',
                'property' => 'font-size',
            ),  

            'content_heading_five_size' => array(
                'type' => 'measurement',
                'title' => __('H5 Text Size (px)', 'ultra'),
                'default' => 16,
                'unit' => 'px',
                'selector' => '#primary .entry-content h5',
                'property' => 'font-size',
            ),  

            'content_heading_six_size' => array(
                'type' => 'measurement',
                'title' => __('H6 Text Size (px)', 'ultra'),
                'default' => 14,
                'unit' => 'px',
                'selector' => '#primary .entry-content h6',
                'property' => 'font-size',
            ),   

            'element_border_color' => array(
                'type' => 'color',
                'title' => __('Element Border Color', 'ultra'),
                'default' => '#eaeaeb',
                'callback' => 'ultra_element_border_color',      
            ),  

            'element_background_color' => array(
                'type' => 'color',
                'title' => __('Element Background Color', 'ultra'),
                'default' => '#f6f6f7',
                'callback' => 'ultra_element_background_color',      
            ),                                                  

            'background_color' => array(
                'type' => 'color',
                'title' => __('Page Background Color', 'ultra'),
                'default' => '#ffffff',
                'selector' => '.site-content',
                'property' => 'background',
            ),           

            'background_image' => array(
                'type' => 'image',
                'title' => __('Background Image', 'ultra'),
                'default' => false,
                'selector' => '.site-content',
                'property' => 'background-image',
            ),     

            'background_image_layout' => array(
                'type' => 'select',
                'title' => __('Background Image Layout', 'ultra'),
                'default' => '',
                'selector' => '.site-content',
                'choices' => array(
                    '' => __( 'Default', 'ultra' ),
                    'center' => __( 'Center', 'ultra' ),
                    'tile' => __( 'Tile', 'ultra' ),
                    'cover' => __( 'Cover', 'ultra' ),
                ),
                'callback' => 'ultra_customizer_callback_image_layout'
            ),                                                                                            

        ),                      

        'ultra_sidebar' => array(

			'positon' => array(
				'type' => 'select',
				'title' => __('Position', 'ultra'),
				'default' => 'right',
				'choices' => array(
					'right' => __('Right', 'ultra'),
					'left' => __('Left', 'ultra'),
				),
				'callback' => 'ultra_sidebar_position',				
			),

			'heading_color' => array(
				'type' => 'color',
				'title' => __('Heading Color', 'ultra'),
				'default' => '#313539',
				'selector' => '#secondary .widget h3.widget-title',
				'property' => 'color',
			),				

			'heading_size' => array(
				'type' => 'measurement',
				'title' => __('Heading Size (px)', 'ultra'),
				'default' => 16,
				'unit' => 'px',
				'selector' => '#secondary .widget h3.widget-title',
				'property' => 'font-size',
			),

			'text_color' => array(
				'type' => 'color',
				'title' => __('Text Color', 'ultra'),
				'default' => '#5a5d60',
				'selector' => '#secondary .widget',
				'property' => 'color',
			),	

			'text_size' => array(
				'type' => 'measurement',
				'title' => __('Text Size (px)', 'ultra'),
				'default' => 13,
				'unit' => 'px',
				'selector' => '#secondary .widget h3.widget-title ~ *',
				'property' => 'font-size',
			),	

        ),  

		'ultra_footer' => array(                 	

			'heading_color' => array(
				'type' => 'color',
				'title' => __('Heading Color', 'ultra'),
				'default' => '#ffffff',
				'selector' => '#colophon .widget h3.widget-title',
				'property' => 'color',
			),				

			'heading_size' => array(
				'type' => 'measurement',
				'title' => __('Heading Size (px)', 'ultra'),
				'default' => 16,
				'unit' => 'px',
				'selector' => '#colophon .widget h3.widget-title',
				'property' => 'font-size',
			),

			'text_color' => array(
				'type' => 'color',
				'title' => __('Text Color', 'ultra'),
				'default' => '#acaeaf',
				'selector' => '.site-footer .footer-main .widget h3.widget-title ~ *',
				'property' => 'color',
			),	

			'text_size' => array(
				'type' => 'measurement',
				'title' => __('Text Size (px)', 'ultra'),
				'default' => 13,
				'unit' => 'px',
				'selector' => '.site-footer .footer-main .widget h3.widget-title ~ *',
				'property' => 'font-size',
			),

            'link_color' => array(
                'type' => 'color',
                'title' => __('Link Color', 'ultra'),
                'default' => '#acaeaf',
                'selector' => '.site-footer .footer-main a',
                'property' => 'color',
            ),  

            'link_hover_color' => array(
                'type' => 'color',
                'title' => __('Link Hover Color', 'ultra'),
                'default' => '#ffffff',
                'selector' => '.site-footer .footer-main a:hover',
                'property' => 'color',
                'no_live' => true,
            ),

			'padding' => array(
				'type' => 'measurement',
				'title' => __('Footer Padding (px)', 'ultra'),
				'default' => 37.5,
				'unit' => 'px',
				'selector' => '#colophon .widget',
				'property' => array(
					'padding-top', 
					'padding-bottom',
				),
			),

            'background_color' => array(
                'type' => 'color',
                'title' => __('Background Color', 'ultra'),
                'default' => '#272a2d',
                'selector' => '.site-footer .footer-main',
                'property' => 'background',
            ),          

            'background_image' => array(
                'type' => 'image',
                'title' => __('Background Image', 'ultra'),
                'default' => false,
                'selector' => '.site-footer .footer-main',
                'property' => 'background-image',
            ),     

            'background_image_layout' => array(
                'type' => 'select',
                'title' => __('Background Image Layout', 'ultra'),
                'default' => '',
                'selector' => '.site-footer .footer-main',
                'choices' => array(
                    '' => __( 'Default', 'ultra' ),
                    'center' => __( 'Center', 'ultra' ),
                    'tile' => __( 'Tile', 'ultra' ),
                    'cover' => __( 'Cover', 'ultra' ),
                ),
                'callback' => 'ultra_customizer_callback_image_layout'
            ),              														

		),	 

		'ultra_bottom_bar' => array(               

			'text_color' => array(
				'type' => 'color',
				'title' => __('Text Color', 'ultra'),
				'default' => '#acaeaf',
				'selector' => '.site-info',
				'property' => 'color',
			),

			'text_size' => array(
				'type' => 'measurement',
				'title' => __('Text Size (px)', 'ultra'),
				'default' => 12,
				'unit' => 'px',
				'selector' => '.site-footer .bottom-bar .site-info',
				'property' => 'font-size',
			),			

            'link_color' => array(
                'type' => 'color',
                'title' => __('Link Color', 'ultra'),
                'default' => '#acaeaf',
                'selector' => '.site-footer .bottom-bar a',
                'property' => 'color',
            ),  

            'link_hover_color' => array(
                'type' => 'color',
                'title' => __('Link Hover Color', 'ultra'),
                'default' => '#ffffff',
                'selector' => '.site-footer .bottom-bar a:hover',
                'property' => 'color',
                'no_live' => true,
            ),

            'background_color' => array(
                'type' => 'color',
                'title' => __('Background Color', 'ultra'),
                'default' => '#313539',
                'selector' => '.site-footer .bottom-bar',
                'property' => 'background',
            ),

            'background_image' => array(
                'type' => 'image',
                'title' => __('Background Image', 'ultra'),
                'default' => false,
                'selector' => '.site-footer .bottom-bar',
                'property' => 'background-image',
            ),     

            'background_image_layout' => array(
                'type' => 'select',
                'title' => __('Background Image Layout', 'ultra'),
                'default' => '',
                'selector' => '.site-footer .bottom-bar',
                'choices' => array(
                    '' => __( 'Default', 'ultra' ),
                    'center' => __( 'Center', 'ultra' ),
                    'tile' => __( 'Tile', 'ultra' ),
                    'cover' => __( 'Cover', 'ultra' ),
                ),
                'callback' => 'ultra_customizer_callback_image_layout'
            ),             								

		),	               																							
		
	) );

	// Include all the SiteOrigin Customizer classes
	global $siteorigin_ultra_customizer;
	$siteorigin_ultra_customizer = new SiteOrigin_Customizer_Helper($settings, $sections, 'ultra');
}
add_action('init', 'ultra_customizer_init');

/**
 * @param WP_Customize_Manager $wp_customize
 */
function ultra_customizer_register($wp_customize){
	global $siteorigin_ultra_customizer;
	$siteorigin_ultra_customizer->customize_register($wp_customize);
}
add_action( 'customize_register', 'ultra_customizer_register', 15 );

/**
 * @param SiteOrigin_Customizer_CSS_Builder $builder
 * @param mixed $val
 * @param array $setting
 *
 * @return SiteOrigin_Customizer_CSS_Builder
 */
function ultra_customizer_callback_image_layout($builder, $val, $setting){
    if( $val ) {
        if ( $val == 'center' ) {
            $builder->add_css($setting['selector'], 'background-position', 'center');
            $builder->add_css($setting['selector'], 'background-repeat', 'no-repeat');
        }
        else if ( $val == 'tile' ) {
            $builder->add_css($setting['selector'], 'background-repeat', 'repeat');
        }
        else if ( $val == 'cover' ) {
            $builder->add_css($setting['selector'], 'background-size', 'cover');
        }
    }

    return $builder;
}

/**
 * @param SiteOrigin_Customizer_CSS_Builder $builder
 * @param mixed $val
 * @param array $setting
 */
function ultra_set_site_width( $builder, $val, $setting ) {

    if( empty($val) ) return;

    switch ($setting['id']) {
        case 'ultra_general_site_max_width' :
            if( $val != 1200 ) {
                $builder->add_raw_css('.boxed #page, .container { max-width: ' . intval( $val ) . 'px }');
                $builder->add_raw_css('body:not(.resp).boxed #page, body:not(.resp) .container { width: ' . intval( $val ) . 'px }');
            }
            break;
    }
}

/**
 * @param SiteOrigin_Customizer_CSS_Builder $builder
 * @param mixed $val
 * @param array $setting
 */
function ultra_set_top_bar_height( $builder, $val, $setting ) {

    if( empty($val) ) return;

    switch ($setting['id']) {
        case 'ultra_top_bar_height' :
            if( $val != 38 ) {
            	$top_bar_submenu = esc_html($val) - 3;
                $builder->add_raw_css('.top-bar-navigation div > ul > li > a { height: ' . intval( $val ) . 'px }');
                $builder->add_raw_css('#top-bar .top-bar-text span, #top-bar .top-bar-text .social-links-menu ul li a:before, .top-bar-navigation div > ul > li > a { line-height: ' . intval( $val ). 'px }');
            	$builder->add_raw_css('.top-bar-navigation ul ul { top: ' . $top_bar_submenu . 'px }');
            }
            break;
    }
}

/**
 * @param SiteOrigin_Customizer_CSS_Builder $builder
 * @param mixed $val
 * @param array $setting
 */
function ultra_top_bar_menu_accent( $builder, $val, $setting ) {

    if( empty($val) ) return;

    switch ($setting['id']) {
        case 'ultra_top_bar_menu_hover_accent_color' :
            if( $val != '#0896fe' ) {
            	$builder->add_raw_css('.top-bar-navigation ul ul li:hover > a { background: ' . esc_html( $val ) . ' }');
                $builder->add_raw_css('.top-bar-navigation div > ul > li > a:hover, .top-bar-navigation ul ul { border-color: ' . esc_html( $val ) . ' }');
            }
            break;
    }
}

/**
 * @param SiteOrigin_Customizer_CSS_Builder $builder
 * @param mixed $val
 * @param array $setting
 */
function ultra_set_header_background( $builder, $val, $setting ) {

    if( empty($val) ) return;

    switch ($setting['id']) {
        case 'ultra_header_background_color' :
            if( $val != '#ffffff' ) {
                $header_bg_rgb = $builder->hex2rgb( esc_html($val) );
                $header_sticky_opacity = apply_filters('ultra_sticky_header_opacity', 1);
                $builder->add_raw_css('.site-header { background: ' . esc_attr( $val ) . ' }');
                $builder->add_raw_css('@media (min-width: 1024px) { .overlap .site-header:not(.fixed) { background: rgba(' . $header_bg_rgb . ',0.9); } .site-header.site-header-sentinel.fixed { background: rgba(' . $header_bg_rgb . ',' . floatval($header_sticky_opacity) . ') } }');
            }
            break;
    }
}

/**
 * @param SiteOrigin_Customizer_CSS_Builder $builder
 * @param mixed $val
 * @param array $setting
 */
function ultra_set_header_background_image( $builder, $val, $setting ) {

    if( empty($val) ) return;

    switch ($setting['id']) {
        case 'ultra_header_background_image' :
            if( $val != false ) {
                $header_sticky_opacity = apply_filters('ultra_sticky_header_opacity', 1);
                $builder->add_raw_css('.site-header:before { background-image: url("' . esc_attr( $val ) . '"); }');
                $builder->add_raw_css('@media (min-width: 1024px) { .site-header.fixed:before { opacity: ' . floatval($header_sticky_opacity) . ' } }');

            }
            break;
    }
}

/**
 * @param SiteOrigin_Customizer_CSS_Builder $builder
 * @param mixed $val
 * @param array $setting
 */
function ultra_set_header_height( $builder, $val, $setting ) {

    if( empty($val) ) return;

    switch ($setting['id']) {
        case 'ultra_header_height' :
            if( $val != 112 ) {
            	$main_menu_submenu = intval($val) - 3;
                $builder->add_raw_css('.site-header, .site-header .site-branding-container, .main-navigation .menu-search { height: ' . intval( $val ) . 'px }');
                $builder->add_raw_css('@media (min-width: 1024px) { #main-slider.overlap { margin-top: -' . intval( $val ) . 'px } }');
                $builder->add_raw_css('.main-navigation div > ul > li > a, .main-navigation .menu-search .search-icon:before { height: ' . intval( $val ). 'px; line-height: ' . intval( $val ). 'px }');
            	$builder->add_raw_css('.main-navigation ul ul { top: ' . $main_menu_submenu . 'px }');
            }
            break;
    }
}

/**
 * @param SiteOrigin_Customizer_CSS_Builder $builder
 * @param mixed $val
 * @param array $setting
 */
function ultra_set_main_menu_hover_color( $builder, $val, $setting ) {

    if( empty($val) ) return;

    switch ($setting['id']) {
        case 'ultra_main_menu_link_text_hover_color' :
            if( $val != '#0896fe' ) {
                $builder->add_raw_css('.main-navigation ul li:hover > a, .main-navigation .menu-search .search-icon:hover:before { color: ' . esc_attr( $val ) . ' }');
                $builder->add_raw_css('.main-navigation div > ul > li > a:hover, .main-navigation ul ul, .main-navigation .menu-search .searchform input[name=s] { border-color: ' . esc_attr( $val ) . ' }');
            }
            break;
    }
}

/**
 * @param SiteOrigin_Customizer_CSS_Builder $builder
 * @param mixed $val
 * @param array $setting
 */
function ultra_set_menu_right_margin( $builder, $val, $setting ) {

    if( empty($val) ) return;

    switch ($setting['id']) {
        case 'ultra_menu_link_text_right_margin' :
            if( $val != '25' ) {
                $search_icon_width = intval( $val ) + 14;
                $builder->add_raw_css('.main-navigation ul li { margin-right: ' . intval( $val ) . 'px }');
                $builder->add_raw_css('.main-navigation ul li:last-of-type { margin-right: 0 }');
                $builder->add_raw_css('.main-navigation .menu-search .search-icon { padding-left: ' . $search_icon_width . 'px }');
            }
            break;
    }
}

/**
 * @param SiteOrigin_Customizer_CSS_Builder $builder
 * @param mixed $val
 * @param array $setting
 */
function ultra_link_color( $builder, $val, $setting ) {

    if( empty($val) ) return;

    switch ($setting['id']) {
        case 'ultra_content_link_color' :
            if( $val != '#0896fe' ) {
                $link_color_rgb = $builder->hex2rgb( esc_html($val) );
                $builder->add_raw_css('::selection, a, a:visited, a:hover, a:focus, a:active, .comment-navigation .nav-links a:hover, .paging-navigation .nav-links a:hover, .post-navigation .nav-links a:hover, .panel-grid-cell .sow-features-list .sow-features-feature p.sow-more-text a:hover, .panel-grid-cell .sow-carousel-wrapper ul.sow-carousel-items li.sow-carousel-item h3 a:hover, .panel-grid-cell .sow-carousel-wrapper ul.sow-carousel-items li.sow-carousel-item .sow-carousel-thumbnail a span.overlay, .entry-header h1.entry-title a:hover, .entry-header h1.page-title a:hover, .page-header h1.entry-title a:hover, .page-header h1.page-title a:hover, .site-content .entry-meta a:hover, .entry-footer a:hover, .comments-area .comment-author .fn a:hover, .comments-area .comment-metadata a:hover, .comments-area .reply a.comment-reply-link:hover, .comments-area .reply a.comment-reply-login:hover, .mbt-breadcrumbs a:hover, .mbt-featured-book-widget .mbt-book-title a:hover { color: ' . esc_attr( $val ) . ' }');
                $builder->add_raw_css('button, input[type="button"], input[type="reset"], input[type="submit"], .pagination .page-numbers:hover, .pagination .current, .entry-content .more-wrapper .more-link:hover, .entry-content .page-links span, .entry-content .page-links a span:hover { background: ' . esc_attr( $val ) . ' }');
                $builder->add_raw_css('button:hover, input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:hover { background: rgba(' . $link_color_rgb . ',0.8) }');
                $builder->add_raw_css('blockquote { border-left: 3px solid ' . esc_attr( $val ) . ' }');
                $builder->add_raw_css('.entry-content p a, .entry-content li a, .entry-content dl a, .entry-content pre a, .entry-content code a, .entry-content blockquote a, .content-none .site-main a { border-bottom: 1px dotted ' . esc_attr( $val ) . '; color: ' . esc_attr( $val ) . ' }');
                $builder->add_raw_css('.entry-content p a:hover, .entry-content li a:hover, .entry-content dl a:hover, .entry-content pre a:hover, .entry-content code a:hover, .entry-content blockquote a:hover, .content-none .site-main a:hover, .comments-area .comment-list .pingback a, .comments-area .comment-list .pingback a:hover, .comments-area .comment-list .pingback .edit-link a:hover, .comments-area .comment-content a, .comments-area .comment-content a:hover { border-bottom: 1px solid ' . esc_attr( $val ) . '; }');
            }
            break;
    }
}

/**
 * @param SiteOrigin_Customizer_CSS_Builder $builder
 * @param mixed $val
 * @param array $setting
 */
function ultra_body_text_color( $builder, $val, $setting ) {

    if( empty($val) ) return;

    switch ($setting['id']) {
        case 'ultra_content_body_text_color' :
            $text_secondary = $builder->adjustBrightness( esc_html($val), 82 );
            if( $val != '#5a5d60' ) {
                $builder->add_raw_css('body, button, input, select, textarea, .entry-content table a:hover, input[type="text"]:focus, input[type="email"]:focus, input[type="url"]:focus, input[type="password"]:focus, input[type="search"]:focus, textarea:focus, .pagination .page-numbers, .pagination .dots:hover, #secondary .widget a:hover, .entry-content .more-wrapper .more-link, .entry-content .page-links .page-links-title, .entry-content .page-links a span, .comments-area .comment-respond p:first-of-type a:hover, .mbt-book .mbt-book-meta a:hover, .mbt-featured-book-widget .mbt-book-title, .wpcf7 .wpcf7-mail-sent-ok, .gform_confirmation_wrapper .gform_confirmation_message { color: ' . esc_attr( $val ) . ' }');
                $builder->add_raw_css('input[type="text"], input[type="email"], input[type="url"], input[type="tel"], input[type="number"], input[type="date"], input[type="password"], input[type="search"], select[multiple], textarea, .site-content .entry-meta, .site-content .entry-meta a, #secondary .widget_search .search-form label:before, #colophon .widget_search .search-form label:before, .comment-navigation .nav-links a, .paging-navigation .nav-links a, .post-navigation .nav-links a, .entry-footer a, .entry-footer span, .comments-area .comment-list .pingback .edit-link a, .comments-area .comment-metadata a, .comments-area .comment-metadata .edit-link:before, .comments-area .reply a.comment-reply-link, .comments-area .reply a.comment-reply-login, .comments-area .comment-respond .form-allowed-tags, .mbt-breadcrumbs, .mbt-breadcrumbs a { color: ' . $text_secondary . '; }');
            }
            break;
    }
}

/**
 * @param SiteOrigin_Customizer_CSS_Builder $builder
 * @param mixed $val
 * @param array $setting
 */
function ultra_body_text_size( $builder, $val, $setting ) {

    if( empty($val) ) return;

    switch ($setting['id']) {
        case 'ultra_content_body_text_size' :
        $blockquote = intval( $val ) + 2;
            if( $val != '14' ) {
                $builder->add_raw_css('#primary label, #primary button, #primary input, #primary select, #primary textarea, #primary p, #primary ul, #primary ol, #primary table, #primary dl, #primary address, #primary pre, .paging-navigation, .page-links, .site-main .comment-navigation, .site-main .post-navigation { font-size: ' . esc_attr( $val ) . 'px; }');
                $builder->add_raw_css('#primary blockquote { font-size: ' . $blockquote . 'px; }');
            }
            break;
    }
}

/**
 * @param SiteOrigin_Customizer_CSS_Builder $builder
 * @param mixed $val
 * @param array $setting
 */
function ultra_element_border_color( $builder, $val, $setting ) {

    if( empty($val) ) return;

    switch ($setting['id']) {
        case 'ultra_content_element_border_color' :
            if( $val != '#eaeaeb' ) {
                $builder->add_raw_css('table, table th, table td, input[type="text"], input[type="email"], input[type="url"], input[type="tel"], input[type="number"], input[type="date"], input[type="password"], input[type="search"], select[multiple], textarea, .single .entry-meta .container > div, .site-main .comment-navigation, .site-main .post-navigation, .sidebar #primary, article, .comments-area .comments-title, .comments-area .comment-respond { border-color: ' . esc_attr( $val ) . '; }');
                $builder->add_raw_css('hr { background-color: ' . esc_attr( $val ) . '; }');
            }
            break;
    }
}

/**
 * @param SiteOrigin_Customizer_CSS_Builder $builder
 * @param mixed $val
 * @param array $setting
 */
function ultra_element_background_color( $builder, $val, $setting ) {

    if( empty($val) ) return;

    switch ($setting['id']) {
        case 'ultra_content_element_background_color':
        $background_secondary = $builder->adjustBrightness( esc_html($val), -11.9 );
            if( $val != '#f6f6f7' ) {
                $builder->add_raw_css('#main-slider, .format-chat .entry-content, .comments-area .comment-list .comment .comment-body, figure.wp-caption, blockquote, pre, input[type="text"], input[type="email"], input[type="url"], input[type="tel"], input[type="number"], input[type="date"], input[type="password"], input[type="search"], select[multiple], textarea { background: ' . esc_attr( $val ) . '; }');
                $builder->add_raw_css('.entry-content .more-wrapper .more-link, .entry-content .page-links a span, .comments-area .comment-content blockquote, .pagination .page-numbers, #wp-calendar tbody td { background: ' . $background_secondary . '; }');
            }
            break; 
    }
}

/**
 * @param SiteOrigin_Customizer_CSS_Builder $builder
 * @param mixed $val
 * @param array $setting
 */
function ultra_sidebar_position($builder, $val, $setting){
	if($val == 'left') {		
		$builder->add_raw_css('#secondary { float: left; padding: 0 3.5% 0 0; }');
		$builder->add_raw_css('.sidebar #primary { border-width: 0 0 0 1px; float: right; padding: 0 0 0 3.5%; }');		
	}

	return $builder;
}

/**
 * Display the styles
 */
function ultra_customizer_style() {
	global $siteorigin_ultra_customizer;
	if(empty($siteorigin_ultra_customizer)) return;
	
	$builder = $siteorigin_ultra_customizer->create_css_builder();

	// Add any extra CSS customizations
	echo $builder->css();
}
add_action('wp_head', 'ultra_customizer_style', 20);