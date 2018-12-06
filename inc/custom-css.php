<?php

function kinderoo_customizer_css($custom)
{

    $custom = '';

        /**************************************************
	** Navigation Section
    *************************************************/

    $navigation_text_color = esc_attr ( get_theme_mod( 'navigation_text_color', '#404040' ) );
    $custom .= ".main-navigation a { color: ${navigation_text_color} }";

    $navigation_active_text_color = esc_attr ( get_theme_mod( 'navigation_active_text_color', '#04AEDC' ) );
    $custom .= ".main-navigation a:active { color: ${navigation_active_text_color} }";

    $navigation_hover_text_color = esc_attr ( get_theme_mod( 'navigation_hover_text_color', '#04AEDC' ) );
    $custom .= ".main-navigation a:hover { color: ${navigation_hover_text_color} }";

    /**************************************************
	** Hero Section
    *************************************************/

    $header_background_color = esc_attr ( get_theme_mod( 'header_background_color', '#04AEDC' ) );
    $custom .= "#hero-section { background-color: ${header_background_color} }";

    $hero_section_background_image = esc_attr ( get_theme_mod( 'hero_section_background_image', 'http://localhost/customTheme/wp-content/uploads/2018/10/sunshine.png' ) );
    $custom .= "#hero-section { background-image: url('${hero_section_background_image}') }";

    $hero_title_color = esc_attr ( get_theme_mod( 'hero_title_color', '#FFFFFF' ) );
    $custom .= "#hero-title { color: ${hero_title_color} }";

    $hero_description_color = esc_attr ( get_theme_mod( 'hero_description_color', '#FFFFFF' ) );
    $custom .= "#hero-description { color: ${hero_description_color} }";

    $hero_button_text_color = esc_attr ( get_theme_mod( 'hero_button_text_color', '#404040' ) );
    $custom .= "#hero-button { color: ${hero_button_text_color} }";

    $hero_button_background_color = esc_attr ( get_theme_mod( 'hero_button_background_color', '#FFE700' ) );
    $custom .= "#hero-button { background-color: ${hero_button_background_color} }";

    /**************************************************
	** About Section
    *************************************************/
    
    $about_title_text_color = esc_attr ( get_theme_mod( 'about_title_text_color', '#04aedc' ) );
    $custom .= "#about-heading { color: ${about_title_text_color} }";

    $about_text_color = esc_attr ( get_theme_mod( 'about_text_color', '#404040' ) );
    $custom .= "#about-text { color: ${about_text_color} }";

    $about_background_color = esc_attr ( get_theme_mod( 'about_background_color', '#FFFFFF' ) );
    $custom .= "#about-section { background-color: ${about_background_color} }";

    /**************************************************
	** Classes Section
    *************************************************/

    $classes_title_text_color = esc_attr ( get_theme_mod( 'classes_title_text_color', '#04aedc' ) );
    $custom .= "#services-heading { color: ${about_title_text_color} }";

    $classes_box1_background_color = esc_attr ( get_theme_mod( 'classes_box1_background_color', '#04dc9f' ) );
    $custom .= "#service-box-1 { background-color: ${classes_box1_background_color} }";

    $box1_classes_title_text_color = esc_attr ( get_theme_mod( 'box1_classes_title_text_color', '#ffffff' ) );
    $custom .= "#services-box-heading1 { color: ${box1_classes_title_text_color} }";
        
    $box1_classes_text_color = esc_attr ( get_theme_mod( 'box1_classes_text_color', '#ffffff' ) );
    $custom .= "#services-box-text1 { color: ${box1_classes_text_color} }";

    $classes_box2_background_color = esc_attr ( get_theme_mod( 'classes_box2_background_color', '#04AEDC' ) );
    $custom .= "#service-box-2 { background-color: ${classes_box2_background_color} }";

   $box2_classes_title_text_color = esc_attr ( get_theme_mod( 'box2_classes_title_text_color', '#ffffff' ) );
   $custom .= "#services-box-heading2 { color: ${box2_classes_title_text_color} }";

   $box2_classes_text_color = esc_attr ( get_theme_mod( 'box2_classes_text_color', '#ffffff' ) );
   $custom .= "#services-box-text2 { color: ${box2_classes_text_color} }";

    $classes_box3_background_color = esc_attr ( get_theme_mod( 'classes_box3_background_color', '#04dc9f' ) );
    $custom .= "#service-box-3 { background-color: ${classes_box3_background_color} }";

   $box3_classes_title_text_color = esc_attr ( get_theme_mod( 'box3_classes_title_text_color', '#ffffff' ) );
   $custom .= "#services-box-heading3 { color: ${box3_classes_title_text_color} }";

   $box3_classes_text_color = esc_attr ( get_theme_mod( 'box3_classes_text_color', '#ffffff' ) );
   $custom .= "#services-box-text3 { color: ${box3_classes_text_color} }";

    $classes_box4_background_color = esc_attr ( get_theme_mod( 'classes_box4_background_color', '#04AEDC' ) );
    $custom .= "#service-box-4 { background-color: ${classes_box4_background_color} }";

    $box4_classes_title_text_color = esc_attr ( get_theme_mod( 'box4_classes_title_text_color', '#ffffff' ) );
    $custom .= "#services-box-heading4 { color: ${box4_classes_title_text_color} }";

    $box4_classes_text_color = esc_attr ( get_theme_mod( 'box4_classes_text_color', '#ffffff' ) );
    $custom .= "#services-box-text4 { color: ${box4_classes_text_color} }";

    $classes_background_color = esc_attr ( get_theme_mod( 'classes_background_color', '#F2F2F2' ) );
    $custom .= ".services { background-color: ${classes_background_color} }";

 /**************************************************
    ** Team Section
 *************************************************/
    
    $team_heading_text_color = esc_attr ( get_theme_mod( 'team_heading_text_color', '#04aedc' ) );
    $custom .= "#team-heading { color: ${team_heading_text_color} }";

    $team_text_color = esc_attr ( get_theme_mod( 'team_text_color', '#404040' ) );
    $custom .= "#team-text { color: ${team_text_color} }";

    $team_background_color = esc_attr ( get_theme_mod( 'team_background_color', '#ffffff' ) );
    $custom .= "#team { background-color: ${team_background_color} }";

    $team_arrow_color = esc_attr ( get_theme_mod( 'team_arrow_color', '#04aedc' ) );
    $custom .= ".fa-arrow-left:before { color: ${team_arrow_color} }";

    $team_arrow_color = esc_attr ( get_theme_mod( 'team_arrow_color', '#04aedc' ) );
    $custom .= ".fa-arrow-right:before { color: ${team_arrow_color} }";

    $team_member_1_text_color = esc_attr ( get_theme_mod( 'team_member_1_text_color', '#404040' ) );
    $custom .= "#pills-member1 { color: ${team_member_1_text_color} }";

    $team_member_2_text_color = esc_attr ( get_theme_mod( 'team_member_2_text_color', '#404040' ) );
    $custom .= "#pills-member2 { color: ${team_member_2_text_color} }";

    $team_member_3_text_color = esc_attr ( get_theme_mod( 'team_member_3_text_color', '#404040' ) );
    $custom .= "#pills-member3 { color: ${team_member_3_text_color} }";

    $team_member_4_text_color = esc_attr ( get_theme_mod( 'team_member_4_text_color', '#404040' ) );
    $custom .= "#pills-member4 { color: ${team_member_4_text_color} }";

    $team_member_5_text_color = esc_attr ( get_theme_mod( 'team_member_5_text_color', '#404040' ) );
    $custom .= "#pills-member5 { color: ${team_member_5_text_color} }";

    $team_member_6_text_color = esc_attr ( get_theme_mod( 'team_member_6_text_color', '#404040' ) );
    $custom .= "#pills-member6 { color: ${team_member_6_text_color} }";








 /**************************************************
    ** Contact Section
 *************************************************/
    
$contact_background_color = esc_attr ( get_theme_mod( 'contact_background_color', '#04aedc' ) );
$custom .= ".contact { background-color: ${contact_background_color} }";

    

 /**************************************************
    ** Footer Section
 *************************************************/

$footer_background_color = esc_attr ( get_theme_mod( 'footer_background_color', '#ffffff' ) );
$custom .= "site-footer { background-color: ${footer_background_color} }";


    wp_add_inline_style( 'kinderoo-style' , $custom );
}

add_action( 'wp_enqueue_scripts', 'kinderoo_customizer_css' );

?>