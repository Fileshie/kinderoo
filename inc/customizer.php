`<?php
/**
 * Kinder Theme Customizer
 *
 * @package Kinder
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function kinder_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

/**************************************************
	** Navigation Section
	*************************************************/

	$wp_customize->add_section(
		'kinderoo_navigation_section',
		array(
		'title'         => __('Navigation section', 'kinderoo'),
				'priority'      => 3,
		)
	);

	$wp_customize->add_setting( 
		'navigation_text_color',
			array(
					'default' => '#404040',
					'type'              => 'theme_mod',
					'transport' => 'postMessage',
					'sanitize_callback' => 'sanitize_hex_color'
			)
	);
	 
	$wp_customize->add_control( 
		'navigation_text_color',
			array(
					'label' => __( 'Navigation text color' ),
					'settings'  => 'navigation_text_color',
					'section' => 'kinderoo_navigation_section',
					'priority' => 10, 
					'type' => 'color',
			)
	);

	$wp_customize->add_setting( 
		'navigation_active_text_color',
			array(
					'default' => '#04AEDC',
					'type'              => 'theme_mod',
					'transport' => 'postMessage',
					'sanitize_callback' => 'sanitize_hex_color'
			)
	);
	 
	$wp_customize->add_control( 
		'navigation_active_text_color',
			array(
					'label' => __( 'Navigation text color: Active' ),
					'settings'  => 'navigation_active_text_color',
					'section' => 'kinderoo_navigation_section',
					'priority' => 10, 
					'type' => 'color',
			)
	);
	$wp_customize->add_setting( 
		'navigation_hover_text_color',
			array(
					'default' => '#04AEDC',
					'type'              => 'theme_mod',
					'transport' => 'postMessage',
					'sanitize_callback' => 'sanitize_hex_color'
			)
	);
	 
	$wp_customize->add_control( 
		'navigation_hover_text_color',
			array(
					'label' => __( 'Navigation text color: Hover' ),
					'settings'  => 'navigation_hover_text_color',
					'section' => 'kinderoo_navigation_section',
					'priority' => 10, 
					'type' => 'color',
			)
	);



/**************************************************
	** Hero Section
	*************************************************/

	$wp_customize->add_panel( 'kinderoo_hero_panel', array(
		'priority'       => 4,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => __('Hero section', 'kinderoo'),
	) );

$wp_customize->add_section(
	'kinderoo_hero_background',
		array(
			'title'         => __('Background', 'kinderoo'),
			'panel'         => 'kinderoo_hero_panel', 
		)
);



$wp_customize->add_setting( 
	'header_background_color',
		array(
				'default' => '#04AEDC',
				'type'              => 'theme_mod',
				'transport' => 'postMessage',
				'sanitize_callback' => 'sanitize_hex_color'
		)
);
 
$wp_customize->add_control( 
	'header_background_color',
		array(
				'label' => __( 'Background color' ),
				'settings'  => 'header_background_color',
				'section' => 'kinderoo_hero_background',
				'priority' => 10, 
				'type' => 'color',
		)
);

$wp_customize->add_setting( 
	'hero_section_background_image',
   array(
      'default' => get_template_directory_uri() . '/images/sunshine.png',
      'transport' => 'postMessage',
   )
);
 
$wp_customize->add_control( 
	new WP_Customize_Image_Control( 
	$wp_customize, 'hero_section_background_image',
   array(
      'label' => __( 'Hero Background Image' ),
      'description' => esc_html__( '' ),
      'section' => 'kinderoo_hero_background',
      'button_labels' => array( // Optional.
         'select' => __( 'Select Image' ),
         'change' => __( 'Change Image' ),
         'remove' => __( 'Remove' ),
         'default' => __( 'Default' ),
         'placeholder' => __( 'No image selected' ),
         'frame_title' => __( 'Select Image' ),
         'frame_button' => __( 'Choose Image' ),
      )
   )
) );

$wp_customize->add_section(
	'kinderoo_hero_image',
		array(
			'title'         => __('Image', 'kinderoo'),
			'panel'         => 'kinderoo_hero_panel', 
		)
);

$wp_customize->add_setting( 
	'hero_section_image',
   array(
      'default' => get_template_directory_uri() . '/images/Hero.png',
      'transport' => 'postMessage',
   )
);
 
$wp_customize->add_control( 
	new WP_Customize_Image_Control( 
	$wp_customize, 'hero_section_image',
   array(
      'label' => __( 'Hero Image' ),
      'description' => esc_html__( '' ),
      'section' => 'kinderoo_hero_image',
      'button_labels' => array( // Optional.
         'select' => __( 'Select Image' ),
         'change' => __( 'Change Image' ),
         'remove' => __( 'Remove' ),
         'default' => __( 'Default' ),
         'placeholder' => __( 'No image selected' ),
         'frame_title' => __( 'Select Image' ),
         'frame_button' => __( 'Choose Image' ),
      )
   )
) );

$wp_customize->add_section(
	'kinderoo_hero_text',
		array(
			'title'         => __('Text', 'kinderoo'),
			'panel'         => 'kinderoo_hero_panel', 
		)
);

$wp_customize->add_setting(
'hero_title',
array(
		'default' => 'WELCOME TO KINDEROO',
		'transport'     => 'postMessage'
)
);

$wp_customize->add_control(
'hero_title',
array(
		'label' => __( 'Title', 'kinderoo' ),
		'section' => 'kinderoo_hero_text',
		'type' => 'text',
		'priority' => 10
)
);

$wp_customize->add_setting( 
	'hero_title_color',
		array(
				'default' => '#ffffff',
				'type'              => 'theme_mod',
				'transport' => 'postMessage',
				'sanitize_callback' => 'sanitize_hex_color'
		)
);
 
$wp_customize->add_control( 
	'hero_title_color',
		array(
				'label' => __( 'Title text color' ),
				'settings'  => 'hero_title_color',
				'section' => 'kinderoo_hero_text',
				'priority' => 10, 
				'type' => 'color',
		)
);

$wp_customize->add_setting(
	'hero_description',
	array(
			'default' => 'A fun easy to customize Kindergarten Theme',
			'transport'     => 'postMessage'
	)
);

$wp_customize->add_control(
	'hero_description',
	array(
			'label' => __( 'Description', 'kinderoo' ),
			'section' => 'kinderoo_hero_text',
			'type' => 'textarea',
			'priority' => 10
			
	)
);

$wp_customize->add_setting( 
	'hero_description_color',
		array(
				'default' => '#ffffff',
				'type'              => 'theme_mod',
				'transport' => 'postMessage',
				'sanitize_callback' => 'sanitize_hex_color'
		)
);
 
$wp_customize->add_control( 
	'hero_description_color',
		array(
				'label' => __( 'Description text color' ),
				'settings'  => 'hero_description_color',
				'section' => 'kinderoo_hero_text',
				'priority' => 10, 
				'type' => 'color',
		)
);

$wp_customize->add_section(
	'kinderoo_hero_button',
		array(
			'title'         => __('Button', 'kinderoo'),
			'panel'         => 'kinderoo_hero_panel', 
		)
);

$wp_customize->add_setting(
	'hero_button_text',
	array(
			'default' => 'Contact Us',
			'transport'     => 'postMessage'
	)
);

$wp_customize->add_control(
	'hero_button_text',
	array(
			'label' => __( 'Button text', 'kinderoo' ),
			'section' => 'kinderoo_hero_button',
			'type' => 'text',
			'priority' => 10
			
	)
);

$wp_customize->add_setting(
	'hero_button_url',
	array(
			'default' => '/#contact',
			'transport'     => 'postMessage'
	)
);

$wp_customize->add_control(
	'hero_button_url',
	array(
			'label' => __( 'Button url', 'kinderoo' ),
			'section' => 'kinderoo_hero_button',
			'type' => 'url',
			'priority' => 10
			
	)
);

$wp_customize->add_setting( 
	'hero_button_text_color',
		array(
				'default' => '#404040',
				'type'              => 'theme_mod',
				'transport' => 'postMessage',
				'sanitize_callback' => 'sanitize_hex_color'
		)
);
 
$wp_customize->add_control( 
	'hero_button_text_color',
		array(
				'label' => __( 'Button text color' ),
				'settings'  => 'hero_button_text_color',
				'section' => 'kinderoo_hero_button',
				'priority' => 10, 
				'type' => 'color',
		)
);

$wp_customize->add_setting( 
	'hero_button_background_color',
		array(
				'default' => '#FFE700',
				'type'              => 'theme_mod',
				'transport' => 'postMessage',
				'sanitize_callback' => 'sanitize_hex_color'
		)
);
 
$wp_customize->add_control( 
	'hero_button_background_color',
		array(
				'label' => __( 'Background color' ),
				'settings'  => 'hero_button_background_color',
				'section' => 'kinderoo_hero_button',
				'priority' => 10, 
				'type' => 'color',
		)
);



/**************************************************
	** About Section
	*************************************************/

$wp_customize->add_section(
		'kinderoo_about',
		array(
		'title'         => __('About section', 'kinderoo'),
				'priority'      => 5,
		)
);

//Title
$wp_customize->add_setting(
	'about_title',
	array(
			'default' => 'ABOUT',
			'transport'     => 'postMessage'
	)
);

$wp_customize->add_control(
	'about_title',
	array(
			'label' => __( 'Title', 'kinderoo' ),
			'section' => 'kinderoo_about',
			'type' => 'text',
			'priority' => 10
	)
);

$wp_customize->add_setting( 
	'about_title_text_color',
		array(
				'default' => '#04AEDC',
				'type'              => 'theme_mod',
				'transport' => 'postMessage',
				'sanitize_callback' => 'sanitize_hex_color'
		)
);
 
$wp_customize->add_control( 
	'about_title_text_color',
		array(
				'label' => __( 'Title text color' ),
				'settings'  => 'about_title_text_color',
				'section' => 'kinderoo_about',
				'priority' => 10, 
				'type' => 'color',
		)
);

//Text

$wp_customize->add_setting(
	'about_text',
	array(
			'default' => 'Are you a Kindergarten in need of an awesome website? </br>Do you want to cut out the middle man and save on expenses that could be reinvested back into your Kindergarten? </br></br>Then Kinderoo is the theme for you. Kinderoo is a free WordPress theme that provides a great front page experience. You do not need to know a single line of code to easily customize this site to suit your needs.</br></br>All customizations are available via the WordPress Customizer.</br></br>Sections:</br>Header</br>About</br>Contains options for 4 classes</br>Contains options for 6 teachers</br>Footer allows allows widgets to be added for a contact form',
			'transport'     => 'postMessage'
	)
);

$wp_customize->add_control(
	'about_text',
	array(
			'label' => __( 'Text', 'kinderoo' ),
			'section' => 'kinderoo_about',
			'type' => 'textarea',
			'priority' => 10
			
	)
);

$wp_customize->add_setting( 
	'about_text_color',
		array(
				'default' => '#404040',
				'type'              => 'theme_mod',
				'transport' => 'postMessage',
				'sanitize_callback' => 'sanitize_hex_color'
		)
);
 
$wp_customize->add_control( 
	'about_text_color',
		array(
				'label' => __( 'Text color' ),
				'settings'  => 'about_text_color',
				'section' => 'kinderoo_about',
				'priority' => 10, 
				'type' => 'color',
		)
);

//Image

$wp_customize->add_setting( 'about_image',
   array(
      'default' => get_template_directory_uri() . '/images/About.png',
      'transport' => 'refresh',
   )
);
 
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'about_image',
   array(
      'label' => __( 'Image' ),
      'description' => esc_html__( '' ),
      'section' => 'kinderoo_about',
      'button_labels' => array( // Optional.
         'select' => __( 'Select Image' ),
         'change' => __( 'Change Image' ),
         'remove' => __( 'Remove' ),
         'default' => __( 'Default' ),
         'placeholder' => __( 'No image selected' ),
         'frame_title' => __( 'Select Image' ),
         'frame_button' => __( 'Choose Image' ),
      )
   )
) );

$wp_customize->add_setting( 
	'about_background_color',
		array(
				'default' => '#ffffff',
				'type'              => 'theme_mod',
				'transport' => 'postMessage',
				'sanitize_callback' => 'sanitize_hex_color'
		)
);
 
$wp_customize->add_control( 
	'about_background_color',
		array(
				'label' => __( 'Background color' ),
				'settings'  => 'about_background_color',
				'section' => 'kinderoo_about',
				'priority' => 10, 
				'type' => 'color',
		)
);

/**************************************************
	** Classes Section
	*************************************************/

$wp_customize->add_panel( 'kinderoo_classes_panel', array(
	'priority'       => 6,
	'capability'     => 'edit_theme_options',
	'theme_supports' => '',
	'title'          => __('Classes section', 'kinderoo'),
) );

//Title
$wp_customize->add_section(
		'kinderoo_classes_title',
		array(
		'title'         => __('Title', 'kinderoo'),
				'priority'      => 10,
				'panel'         => 'kinderoo_classes_panel', 
		)
);

$wp_customize->add_setting(
	'classes_title',
	array(
			'default' => 'CLASSES',
			'transport'     => 'postMessage'
	)
);

$wp_customize->add_control(
	'classes_title',
	array(
			'label' => __( 'Title', 'kinderoo' ),
			'section' => 'kinderoo_classes_title',
			'type' => 'text',
			'priority' => 10
	)
);


$wp_customize->add_setting( 
	'classes_title_text_color',
		array(
				'default' => '##04aedc',
				'type'              => 'theme_mod',
				'transport' => 'postMessage',
				'sanitize_callback' => 'sanitize_hex_color'
		)
);
 
$wp_customize->add_control( 
	'classes_title_text_color',
		array(
				'label' => __( 'Title text color' ),
				'settings'  => 'classes_title_text_color',
				'section' => 'kinderoo_classes_title',
				'priority' => 10, 
				'type' => 'color',
		)
);

//Classes Box 1

$wp_customize->add_section(
	'kinderoo_classes_box_1',
	array(
	'title'         => __('Class 1', 'kinderoo'),
			'priority'      => 10,
			'panel'         => 'kinderoo_classes_panel', 
	)
);

$wp_customize->add_setting(
'box1_classes_title',
array(
		'default' => 'Busy Bees',
		'transport'     => 'postMessage'
)
);

$wp_customize->add_control(
'box1_classes_title',
array(
		'label' => __( 'Title', 'kinderoo' ),
		'section' => 'kinderoo_classes_box_1',
		'type' => 'text',
		'priority' => 10
)
);

$wp_customize->add_setting( 
	'box1_classes_title_text_color',
		array(
				'default' => '#ffffff',
				'type'              => 'theme_mod',
				'transport' => 'postMessage',
				'sanitize_callback' => 'sanitize_hex_color'
		)
);
 
$wp_customize->add_control( 
	'box1_classes_title_text_color',
		array(
				'label' => __( 'Title text color' ),
				'section' => 'kinderoo_classes_box_1',
				'settings'  => 'box1_classes_title_text_color',
				'priority' => 10, 
				'type' => 'color',
		)
);

$wp_customize->add_setting(
	'box1_classes_text',
	array(
			'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</br></br> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
			'transport'     => 'postMessage'
	)
);

$wp_customize->add_control(
	'box1_classes_text',
	array(
			'label' => __( 'Text', 'kinderoo' ),
			'section' => 'kinderoo_classes_box_1',
			'type' => 'textarea',
			'priority' => 10
			
	)
);

$wp_customize->add_setting( 
	'box1_classes_text_color',
		array(
				'default' => '#ffffff',
				'type'              => 'theme_mod',
				'transport' => 'postMessage',
				'sanitize_callback' => 'sanitize_hex_color'
		)
);
 
$wp_customize->add_control( 
	'box1_classes_text_color',
		array(
				'label' => __( 'text color' ),
				'settings'  => 'box1_classes_text_color',
				'section' => 'kinderoo_classes_box_1',
				'priority' => 10, 
				'type' => 'color',
		)
);

$wp_customize->add_setting( 'classes_box1_background_color',
   array(
			'default' => '#04dc9f',
			'type'              => 'theme_mod',
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_hex_color'
   )
);
 
$wp_customize->add_control( 'classes_box1_background_color',
   array(
      'label' => __( 'Background color' ),
      'section' => 'kinderoo_classes_box_1',
      'priority' => 10,
      'type' => 'color',
      'capability' => 'edit_theme_options',
   )
);
 

//Classes Box 2

$wp_customize->add_section(
	'kinderoo_classes_box_2',
	array(
	'title'         => __('Class 2', 'kinderoo'),
			'priority'      => 10,
			'panel'         => 'kinderoo_classes_panel', 
	)
);

$wp_customize->add_setting(
'box2_classes_title',
array(
		'default' => 'Jungle Cubs',
		'transport'     => 'postMessage'
)
);

$wp_customize->add_control(
'box2_classes_title',
array(
		'label' => __( 'Title', 'kinderoo' ),
		'section' => 'kinderoo_classes_box_2',
		'type' => 'text',
		'priority' => 10
)
);

$wp_customize->add_setting( 
	'box2_classes_title_text_color',
		array(
				'default' => '#ffffff',
				'type'              => 'theme_mod',
				'transport' => 'postMessage',
				'sanitize_callback' => 'sanitize_hex_color'
		)
);
 
$wp_customize->add_control( 
	'box2_classes_title_text_color',
		array(
				'label' => __( 'Title text color' ),
				'section' => 'kinderoo_classes_box_2',
				'settings'  => 'box2_classes_title_text_color',
				'priority' => 10, 
				'type' => 'color',
		)
);

$wp_customize->add_setting(
	'box2_classes_text',
	array(
			'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</br></br> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
			'transport'     => 'postMessage'
	)
);

$wp_customize->add_control(
	'box2_classes_text',
	array(
			'label' => __( 'Text', 'kinderoo' ),
			'section' => 'kinderoo_classes_box_2',
			'type' => 'textarea',
			'priority' => 10
			
	)
);

$wp_customize->add_setting( 
	'box2_classes_text_color',
		array(
				'default' => '#ffffff',
				'type'              => 'theme_mod',
				'transport' => 'postMessage',
				'sanitize_callback' => 'sanitize_hex_color'
		)
);
 
$wp_customize->add_control( 
	'box2_classes_text_color',
		array(
				'label' => __( 'text color' ),
				'settings'  => 'box2_classes_text_color',
				'section' => 'kinderoo_classes_box_2',
				'priority' => 10, 
				'type' => 'color',
		)
);


$wp_customize->add_setting( 'classes_box2_background_color',
   array(
			'default' => '#04AEDC',
			'type'              => 'theme_mod',
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_hex_color'
   )
);
 
$wp_customize->add_control( 'classes_box2_background_color',
   array(
      'label' => __( 'Background color' ),
      'section' => 'kinderoo_classes_box_2',
      'priority' => 10,
      'type' => 'color',
      'capability' => 'edit_theme_options',
   )
);

// Classes Box 3

$wp_customize->add_section(
	'kinderoo_classes_box_3',
	array(
	'title'         => __('Class 3', 'kinderoo'),
			'priority'      => 10,
			'panel'         => 'kinderoo_classes_panel', 
	)
);

$wp_customize->add_setting(
'box3_classes_title',
array(
		'default' => 'Super Sprouts',
		'transport'     => 'postMessage'
)
);

$wp_customize->add_control(
'box3_classes_title',
array(
		'label' => __( 'Title', 'kinderoo' ),
		'section' => 'kinderoo_classes_box_3',
		'type' => 'text',
		'priority' => 10
)
);

$wp_customize->add_setting( 
	'box3_classes_title_text_color',
		array(
				'default' => '#ffffff',
				'type'              => 'theme_mod',
				'transport' => 'postMessage',
				'sanitize_callback' => 'sanitize_hex_color'
		)
);
 
$wp_customize->add_control( 
	'box3_classes_title_text_color',
		array(
				'label' => __( 'Title text color' ),
				'section' => 'kinderoo_classes_box_3',
				'settings'  => 'box3_classes_title_text_color',
				'priority' => 10, 
				'type' => 'color',
		)
);

$wp_customize->add_setting(
	'box3_classes_text',
	array(
			'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</br></br> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
			'transport'     => 'postMessage'
	)
);

$wp_customize->add_control(
	'box3_classes_text',
	array(
			'label' => __( 'Text', 'kinderoo' ),
			'section' => 'kinderoo_classes_box_3',
			'type' => 'textarea',
			'priority' => 10
			
	)
);

$wp_customize->add_setting( 
	'box3_classes_text_color',
		array(
				'default' => '#ffffff',
				'type'              => 'theme_mod',
				'transport' => 'postMessage',
				'sanitize_callback' => 'sanitize_hex_color'
		)
);
 
$wp_customize->add_control( 
	'box3_classes_text_color',
		array(
				'label' => __( 'text color' ),
				'settings'  => 'box3_classes_text_color',
				'section' => 'kinderoo_classes_box_3',
				'priority' => 10, 
				'type' => 'color',
		)
);


$wp_customize->add_setting( 'classes_box3_background_color',
   array(
			'default' => '#04dc9f',
			'type'              => 'theme_mod',
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_hex_color'
   )
);
 
$wp_customize->add_control( 'classes_box3_background_color',
   array(
      'label' => __( 'Background color' ),
      'section' => 'kinderoo_classes_box_3',
      'priority' => 10,
      'type' => 'color',
      'capability' => 'edit_theme_options',
   )
);

// Classes Box 4

$wp_customize->add_section(
	'kinderoo_classes_box_4',
	array(
	'title'         => __('Class 4', 'kinderoo'),
			'priority'      => 10,
			'panel'         => 'kinderoo_classes_panel', 
	)
);

$wp_customize->add_setting(
'box4_classes_title',
array(
		'default' => 'Space Cadets',
		'transport'     => 'postMessage'
)
);

$wp_customize->add_control(
'box4_classes_title',
array(
		'label' => __( 'Title', 'kinderoo' ),
		'section' => 'kinderoo_classes_box_4',
		'type' => 'text',
		'priority' => 10
)
);

$wp_customize->add_setting( 
	'box4_classes_title_text_color',
		array(
				'default' => '#ffffff',
				'type'              => 'theme_mod',
				'transport' => 'postMessage',
				'sanitize_callback' => 'sanitize_hex_color'
		)
);
 
$wp_customize->add_control( 
	'box4_classes_title_text_color',
		array(
				'label' => __( 'Title text color' ),
				'section' => 'kinderoo_classes_box_4',
				'settings'  => 'box4_classes_title_text_color',
				'priority' => 10, 
				'type' => 'color',
		)
);

$wp_customize->add_setting(
	'box4_classes_text',
	array(
			'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</br></br> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
			'transport'     => 'postMessage'
	)
);

$wp_customize->add_control(
	'box4_classes_text',
	array(
			'label' => __( 'Text', 'kinderoo' ),
			'section' => 'kinderoo_classes_box_4',
			'type' => 'textarea',
			'priority' => 10
			
	)
);

$wp_customize->add_setting( 
	'box4_classes_text_color',
		array(
				'default' => '#ffffff',
				'type'              => 'theme_mod',
				'transport' => 'postMessage',
				'sanitize_callback' => 'sanitize_hex_color'
		)
);
 
$wp_customize->add_control( 
	'box4_classes_text_color',
		array(
				'label' => __( 'text color' ),
				'settings'  => 'box4_classes_text_color',
				'section' => 'kinderoo_classes_box_4',
				'priority' => 10, 
				'type' => 'color',
		)
);


$wp_customize->add_setting( 'classes_box4_background_color',
   array(
			'default' => '#04AEDC',
			'type'              => 'theme_mod',
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_hex_color'
   )
);
 
$wp_customize->add_control( 'classes_box4_background_color',
   array(
      'label' => __( 'Background color' ),
      'section' => 'kinderoo_classes_box_4',
      'priority' => 10,
      'type' => 'color',
      'capability' => 'edit_theme_options', 
   )
);

$wp_customize->add_section(
	'kinderoo_classes_background_color',
	array(
	'title'         => __('Background color', 'kinderoo'),
			'priority'      => 10,
			'panel'         => 'kinderoo_classes_panel', 
	)
);

$wp_customize->add_setting( 'classes_background_color',
   array(
			'default' => '#F2F2F2',
			'type'              => 'theme_mod',
      'transport' => 'postMessage',
      'sanitize_callback' => 'sanitize_hex_color'
   )
);
 
$wp_customize->add_control( 'classes_background_color',
   array(
      'label' => __( 'Background color' ),
      'section' => 'kinderoo_classes_background_color',
      'priority' => 10,
      'type' => 'color',
      'capability' => 'edit_theme_options', 
   )
);

/**************************************************
	** Team Section
	*************************************************/

$wp_customize->add_panel( 'kinderoo_team_panel', array(
	'priority'       => 7,
	'capability'     => 'edit_theme_options',
	'theme_supports' => '',
	'title'          => __('Team section', 'kinderoo'),
) );


$wp_customize->add_section(
		'kinderoo_team_section',
		array(
		'title'         => __('Meet The Team', 'kinderoo'),
				'priority'      => 10,
				'panel'         => 'kinderoo_team_panel', 
		)
);

$wp_customize->add_setting(
	'team_heading',
	array(
			'default' => 'Meet Our Teachers',
			'transport'     => 'postMessage'
	)
);

$wp_customize->add_control(
	'team_heading',
	array(
			'label' => __( 'Title', 'kinderoo' ),
			'section' => 'kinderoo_team_section',
			'type' => 'text',
			'priority' => 10
	)
);

$wp_customize->add_setting( 
	'team_heading_text_color',
		array(
				'default' => '#04aedc',
				'type'              => 'theme_mod',
				'transport' => 'postMessage',
				'sanitize_callback' => 'sanitize_hex_color'
		)
);
 
$wp_customize->add_control( 
	'team_heading_text_color',
		array(
				'label' => __( 'Title text color' ),
				'section' => 'kinderoo_team_section',
				'settings'  => 'team_heading_text_color',
				'priority' => 10, 
				'type' => 'color',
		)
);

$wp_customize->add_setting(
	'team_text',
	array(
			'default' => 'This Kinderoo theme allows you to display 6 Team Members',
			'transport'     => 'postMessage'
	)
);

$wp_customize->add_control(
	'team_text',
	array(
			'label' => __( 'Text', 'kinderoo' ),
			'section' => 'kinderoo_team_section',
			'type' => 'textarea',
			'priority' => 10
			
	)
);

$wp_customize->add_setting( 
	'team_text_color',
		array(
				'default' => '#404040',
				'type'              => 'theme_mod',
				'transport' => 'postMessage',
				'sanitize_callback' => 'sanitize_hex_color'
		)
);
 
$wp_customize->add_control( 
	'team_text_color',
		array(
				'label' => __( 'Text color' ),
				'section' => 'kinderoo_team_section',
				'settings'  => 'team_text_color',
				'priority' => 10, 
				'type' => 'color',
		)
);

$wp_customize->add_setting( 
	'team_background_color',
		array(
				'default' => '#ffffff',
				'type'              => 'theme_mod',
				'transport' => 'postMessage',
				'sanitize_callback' => 'sanitize_hex_color'
		)
);
 
$wp_customize->add_control( 
	'team_background_color',
		array(
				'label' => __( 'Background color' ),
				'settings'  => 'team_background_color',
				'section' => 'kinderoo_team_section',
				'priority' => 10, 
				'type' => 'color',
		)
);



//Team Member 1

$wp_customize->add_section(
	'kinderoo_team_member_1',
	array(
	'title'         => __('Team Member 1', 'kinderoo'),
			'priority'      => 10,
			'panel'         => 'kinderoo_team_panel', 
	)
);

$wp_customize->add_setting( 'team_member_1_image',
   array(
      'default' => get_template_directory_uri() . '/images/Teacher1.png',
      'transport' => 'postMessage',
   )
);
 
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'team_member_1_image',
   array(
      'label' => __( 'Image' ),
      'description' => esc_html__( '' ),
      'section' => 'kinderoo_team_member_1',
      'button_labels' => array( // Optional.
         'select' => __( 'Select Image' ),
         'change' => __( 'Change Image' ),
         'remove' => __( 'Remove' ),
         'default' => __( 'Default' ),
         'placeholder' => __( 'No image selected' ),
         'frame_title' => __( 'Select Image' ),
         'frame_button' => __( 'Choose Image' ),
      )
   )
) );

$wp_customize->add_setting(
	'team_member_1_text',
	array(
			'default' => '<strong>Alice Smith</strong><br/>Head Mistress<br/><br/> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</br></br> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
			'transport'     => 'postMessage'
	)
);

$wp_customize->add_control(
	'team_member_1_text',
	array(
			'label' => __( 'Text', 'kinderoo' ),
			'section' => 'kinderoo_team_member_1',
			'type' => 'textarea',
			'priority' => 10
			
	)
);

//Team Member 2

$wp_customize->add_section(
	'kinderoo_team_member_2',
	array(
	'title'         => __('Team Member 2', 'kinderoo'),
			'priority'      => 10,
			'panel'         => 'kinderoo_team_panel', 
	)
);

$wp_customize->add_setting( 'team_member_2_image',
   array(
      'default' => get_template_directory_uri() . '/images/Teacher2.png',
      'transport' => 'postMessage',
   )
);
 
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'team_member_2_image',
   array(
      'label' => __( 'Image' ),
      'description' => esc_html__( '' ),
      'section' => 'kinderoo_team_member_2',
      'button_labels' => array( // Optional.
         'select' => __( 'Select Image' ),
         'change' => __( 'Change Image' ),
         'remove' => __( 'Remove' ),
         'default' => __( 'Default' ),
         'placeholder' => __( 'No image selected' ),
         'frame_title' => __( 'Select Image' ),
         'frame_button' => __( 'Choose Image' ),
      )
   )
) );

$wp_customize->add_setting(
	'team_member_2_text',
	array(
			'default' => '<strong>Sally White</strong><br/><br/>Busy Bees Teacher<br/> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</br></br> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
			'transport'     => 'postMessage'
	)
);

$wp_customize->add_control(
	'team_member_2_text',
	array(
			'label' => __( 'Text', 'kinderoo' ),
			'section' => 'kinderoo_team_member_2',
			'type' => 'textarea',
			'priority' => 10
			
	)
);

//Team Member 3

$wp_customize->add_section(
	'kinderoo_team_member_3',
	array(
	'title'         => __('Team Member 3', 'kinderoo'),
			'priority'      => 10,
			'panel'         => 'kinderoo_team_panel', 
	)
);

$wp_customize->add_setting( 'team_member_3_image',
   array(
      'default' => get_template_directory_uri() . '/images/Teacher3.png',
      'transport' => 'postMessage',
   )
);
 
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'team_member_3_image',
   array(
      'label' => __( 'Image' ),
      'description' => esc_html__( '' ),
      'section' => 'kinderoo_team_member_3',
      'button_labels' => array( // Optional.
         'select' => __( 'Select Image' ),
         'change' => __( 'Change Image' ),
         'remove' => __( 'Remove' ),
         'default' => __( 'Default' ),
         'placeholder' => __( 'No image selected' ),
         'frame_title' => __( 'Select Image' ),
         'frame_button' => __( 'Choose Image' ),
      )
   )
) );

$wp_customize->add_setting(
	'team_member_3_text',
	array(
			'default' => '<strong>John Reed</strong><br/>Jungle Cubs Teacher<br/><br/> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</br></br> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
			'transport'     => 'postMessage'
	)
);

$wp_customize->add_control(
	'team_member_3_text',
	array(
			'label' => __( 'Text', 'kinderoo' ),
			'section' => 'kinderoo_team_member_3',
			'type' => 'textarea',
			'priority' => 10
			
	)
);

//Team Member 4

$wp_customize->add_section(
	'kinderoo_team_member_4',
	array(
	'title'         => __('Team Member 4', 'kinderoo'),
			'priority'      => 10,
			'panel'         => 'kinderoo_team_panel', 
	)
);

$wp_customize->add_setting( 'team_member_4_image',
   array(
      'default' => get_template_directory_uri() . '/images/Teacher4.png',
      'transport' => 'postMessage',
   )
);
 
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'team_member_4_image',
   array(
      'label' => __( 'Image' ),
      'description' => esc_html__( '' ),
      'section' => 'kinderoo_team_member_4',
      'button_labels' => array( // Optional.
         'select' => __( 'Select Image' ),
         'change' => __( 'Change Image' ),
         'remove' => __( 'Remove' ),
         'default' => __( 'Default' ),
         'placeholder' => __( 'No image selected' ),
         'frame_title' => __( 'Select Image' ),
         'frame_button' => __( 'Choose Image' ),
      )
   )
) );

$wp_customize->add_setting(
	'team_member_4_text',
	array(
			'default' => '<strong>Jenna Blake</strong><br/>Super Sprouts Teacher<br/><br/> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</br></br> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
			'transport'     => 'postMessage'
	)
);

$wp_customize->add_control(
	'team_member_4_text',
	array(
			'label' => __( 'Text', 'kinderoo' ),
			'section' => 'kinderoo_team_member_4',
			'type' => 'textarea',
			'priority' => 10
			
	)
);

//Team Member 5

$wp_customize->add_section(
	'kinderoo_team_member_5',
	array(
	'title'         => __('Team Member 5', 'kinderoo'),
			'priority'      => 10,
			'panel'         => 'kinderoo_team_panel', 
	)
);

$wp_customize->add_setting( 'team_member_5_image',
   array(
      'default' => get_template_directory_uri() . '/images/Teacher5.png',
      'transport' => 'postMessage',
   )
);
 
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'team_member_5_image',
   array(
      'label' => __( 'Image' ),
      'description' => esc_html__( '' ),
      'section' => 'kinderoo_team_member_5',
      'button_labels' => array( // Optional.
         'select' => __( 'Select Image' ),
         'change' => __( 'Change Image' ),
         'remove' => __( 'Remove' ),
         'default' => __( 'Default' ),
         'placeholder' => __( 'No image selected' ),
         'frame_title' => __( 'Select Image' ),
         'frame_button' => __( 'Choose Image' ),
      )
   )
) );

$wp_customize->add_setting(
	'team_member_5_text',
	array(
			'default' => '<strong>Oliver Lake</strong><br/>Space Cadets Teacher<br/><br/> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</br></br> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
			'transport'     => 'postMessage'
	)
);

$wp_customize->add_control(
	'team_member_5_text',
	array(
			'label' => __( 'Text', 'kinderoo' ),
			'section' => 'kinderoo_team_member_5',
			'type' => 'textarea',
			'priority' => 10
			
	)
);

//Team Member 6

$wp_customize->add_section(
	'kinderoo_team_member_6',
	array(
	'title'         => __('Team Member 6', 'kinderoo'),
			'priority'      => 10,
			'panel'         => 'kinderoo_team_panel', 
	)
);

$wp_customize->add_setting( 'team_member_6_image',
   array(
      'default' => get_template_directory_uri() . '/images/Teacher6.png',
      'transport' => 'postMessage',
   )
);
 
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'team_member_6_image',
   array(
      'label' => __( 'Image' ),
      'description' => esc_html__( '' ),
      'section' => 'kinderoo_team_member_6',
      'button_labels' => array( // Optional.
         'select' => __( 'Select Image' ),
         'change' => __( 'Change Image' ),
         'remove' => __( 'Remove' ),
         'default' => __( 'Default' ),
         'placeholder' => __( 'No image selected' ),
         'frame_title' => __( 'Select Image' ),
         'frame_button' => __( 'Choose Image' ),
      )
   )
) );

$wp_customize->add_setting(
	'team_member_6_text',
	array(
			'default' => '<strong>Laura Price</strong><br/>Music Teacher<br/><br/> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</br></br> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
			'transport'     => 'postMessage'
	)
);

$wp_customize->add_control(
	'team_member_6_text',
	array(
			'label' => __( 'Text', 'kinderoo' ),
			'section' => 'kinderoo_team_member_6',
			'type' => 'textarea',
			'priority' => 10
			
	)
);

/**************************************************
	** Contact Section
	*************************************************/
	$wp_customize->add_panel( 'kinderoo_contact_panel', array(
		'priority'       => 8,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => __('Contact section', 'kinderoo'),
	) );

	$wp_customize->add_section(
		'kinderoo_contact_social',
			array(
				'title'         => __('Social', 'kinderoo'),
				'panel'         => 'kinderoo_contact_panel', 
			)
	);
	
	$wp_customize->add_setting(
		'contact_title',
		array(
				'default' => 'Get Social',
				'transport'     => 'postMessage'
		)
		);
		
		$wp_customize->add_control(
		'contact_title',
		array(
				'label' => __( 'Title', 'kinderoo' ),
				'section' => 'kinderoo_contact_social',
				'type' => 'text',
				'priority' => 10
		)
		);

	$wp_customize->add_setting(
		'contact_facebook_url',
		array(
				'default' => '#',
				'transport'     => 'postMessage'
		)
	);
	
	$wp_customize->add_control(
		'contact_facebook_url',
		array(
				'label' => __( 'Facebook url', 'kinderoo' ),
				'section' => 'kinderoo_contact_social',
				'type' => 'url',
				'priority' => 10
				
		)
	);

	$wp_customize->add_setting(
		'contact_twitter_url',
		array(
				'default' => '#',
				'transport'     => 'postMessage'
		)
	);
	
	$wp_customize->add_control(
		'contact_twitter_url',
		array(
				'label' => __( 'Twitter url', 'kinderoo' ),
				'section' => 'kinderoo_contact_social',
				'type' => 'url',
				'priority' => 10
				
		)
	);

	$wp_customize->add_setting(
		'contact_linkedin_url',
		array(
				'default' => '#',
				'transport'     => 'postMessage'
		)
	);
	
	$wp_customize->add_control(
		'contact_linkedin_url',
		array(
				'label' => __( 'Linkedin url', 'kinderoo' ),
				'section' => 'kinderoo_contact_social',
				'type' => 'url',
				'priority' => 10
				
		)
	);

	$wp_customize->add_setting(
		'contact_instergram_url',
		array(
				'default' => '#',
				'transport'     => 'postMessage'
		)
	);
	
	$wp_customize->add_control(
		'contact_instergram_url',
		array(
				'label' => __( 'Instergram url', 'kinderoo' ),
				'section' => 'kinderoo_contact_social',
				'type' => 'url',
				'priority' => 10
				
		)
	);

	$wp_customize->add_setting(
		'contact_slack_url',
		array(
				'default' => '#',
				'transport'     => 'postMessage'
		)
	);

	$wp_customize->add_control(
		'contact_slack_url',
		array(
				'label' => __( 'Slack url', 'kinderoo' ),
				'section' => 'kinderoo_contact_social',
				'type' => 'url',
				'priority' => 10
				
		)
	);

	$wp_customize->add_section(
		'kinderoo_contact_information',
			array(
				'title'         => __('Information', 'kinderoo'),
				'panel'         => 'kinderoo_contact_panel', 
			)
	);

	$wp_customize->add_setting(
		'contact_info_title',
		array(
			'default' => 'More Traditional',
			'transport'     => 'postMessage'
				)
		);
			
			$wp_customize->add_control(
				'contact_info_title',
				array(
						'label' => __( 'Title', 'kinderoo' ),
						'section' => 'kinderoo_contact_information',
						'type' => 'text',
						'priority' => 10
						
				)
			);

	$wp_customize->add_setting(
		'contact_phone',
		array(
			'default' => '0312345678',
			'transport'     => 'postMessage'
				)
		);
			
			$wp_customize->add_control(
				'contact_phone',
				array(
						'label' => __( 'Phone number', 'kinderoo' ),
						'section' => 'kinderoo_contact_information',
						'type' => 'text',
						'priority' => 10
						
				)
			);

			
			$wp_customize->add_setting(
				'contact_email',
				array(
						'default' => 'example@kinderoo.com',
						'transport'     => 'postMessage'
				)
			);
			
			$wp_customize->add_control(
				'contact_email',
				array(
						'label' => __( 'Email', 'kinderoo' ),
						'section' => 'kinderoo_contact_information',
						'type' => 'text',
						'priority' => 10
						
				)
			);

			
			$wp_customize->add_setting(
				'contact_address',
				array(
						'default' => '1 Example Road, Melbourne, Australia, 3000',
						'transport'     => 'postMessage'
				)
			);
			
			$wp_customize->add_control(
				'contact_address',
				array(
						'label' => __( 'Address', 'kinderoo' ),
						'section' => 'kinderoo_contact_information',
						'type' => 'text',
						'priority' => 10
						
				)
			);



			$wp_customize->add_section(
				'kinderoo_contact_background',
					array(
						'title'         => __('Background', 'kinderoo'),
						'panel'         => 'kinderoo_contact_panel', 
					)
			);
			
			
			
			$wp_customize->add_setting( 
				'contact_background_color',
					array(
							'default' => '#04dc9f',
							'type'              => 'theme_mod',
							'transport' => 'postMessage',
							'sanitize_callback' => 'sanitize_hex_color'
					)
			);
			 
			$wp_customize->add_control( 
				'contact_background_color',
					array(
							'label' => __( 'Background color' ),
							'settings'  => 'contact_background_color',
							'section' => 'kinderoo_contact_background',
							'priority' => 10, 
							'type' => 'color',
					)
			);

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'kinder_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'kinder_customize_partial_blogdescription',
		) );
	}

}



add_action( 'customize_register', 'kinder_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function kinder_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function kinder_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function kinder_customize_preview_js() {
	wp_enqueue_script( 'kinder-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}

add_action( 'customize_preview_init', 'kinder_customize_preview_js' );