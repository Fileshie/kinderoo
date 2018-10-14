/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {

	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );

	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );
	


	/**************************************************
	** Navigation Section
	*************************************************/

	wp.customize( 'navigation_text_color', function( value ) {
		value.bind( function( to ) {
			$( '.main-navigation a' ).css( 'color', to );
		} );
	} );

	wp.customize( 'navigation_active_text_color', function( value ) {
		value.bind( function( to ) {
			$( '.main-navigation a:active' ).css( 'color', to );
		} );
	} );

	wp.customize( 'navigation_hover_text_color', function( value ) {
		value.bind( function( to ) {
			$( '.main-navigation a:hover' ).css( 'color', to );
		} );
	} );


/**************************************************
	** Hero Section
	*************************************************/

	wp.customize( 'header_background_color', function( value ) {
		value.bind( function( to ) {
			$( '#hero-section' ).css( 'background-color', to );
			
		} );
	} ); 

	wp.customize( 'hero_section_background_image', function( value ) {
		value.bind( function( to ) {
			$( '#hero-section' ).css( 'background-image', "url('" + to + "')" );
		} );
	} );


	wp.customize( 'hero_section_image', function( value ) {
		value.bind( function( to ) {
			$( '#hero-image' ).attr( 'src',  to );
		} );
	} );

	wp.customize( 'hero_title', function( value ) {
		value.bind( function( to ) {
			$( '#hero-title' ).text( to );
		} );
	} );

	wp.customize( 'hero_title_color', function( value ) {
		value.bind( function( to ) {
			$( '#hero-title' ).css( 'color', to );
		} );
	} );


	wp.customize( 'hero_description', function( value ) {
		value.bind( function( to ) {
			$( '#hero-description' ).text( to );
		} );
	} );

	wp.customize( 'hero_description_color', function( value ) {
		value.bind( function( to ) {
			$( '#hero-description' ).css( 'color', to );
		} );
	} );

	wp.customize( 'hero_button_text', function( value ) {
		value.bind( function( to ) {
			$( 'hero-button' ).text( to );
		} );
	} );

	wp.customize( 'hero_button_url', function( value ) {
		value.bind( function( to ) {
			$( 'hero-button' ).url( to );
		} );
	} );

	wp.customize( 'hero_button_text_color', function( value ) {
		value.bind( function( to ) {
			$( '#hero-button' ).css( 'color', to );
		} );
	} );

	wp.customize( 'hero_button_background_color', function( value ) {
		value.bind( function( to ) {
			$( '#hero-button' ).css( 'background-color', to );
		} );
	} );


/**************************************************
	** About Section
	*************************************************/

	wp.customize( 'about_title', function( value ) {
		value.bind( function( to ) {
			$( '#about-heading' ).text( to );
		} );
	} );

	wp.customize( 'about_title_text_color', function( value ) {
		value.bind( function( to ) {
			$( '#about-heading' ).css( 'color', to );
		} );
	} );

	wp.customize( 'about_text', function( value ) {
		value.bind( function( to ) {
			$( '#about-text' ).text( to );
		} );
	} );

	wp.customize( 'about_text_color', function( value ) {
		value.bind( function( to ) {
			$( '#about-text' ).css( 'color', to );
		} );
	} );


	wp.customize( 'about_image', function( value ) {
		value.bind( function( to ) {
			$( '#about-img' ).attr( 'src',  to );
		} );
	} );

	wp.customize( 'about_background_color', function( value ) {
		value.bind( function( to ) {
			$( '#about-section' ).css( 'background-color', to );
		} );
	} );

	/**************************************************
	** Classes Section
	*************************************************/

	wp.customize( 'classes_title', function( value ) {
		value.bind( function( to ) {
			$( '#services-heading' ).text( to );
		} );
	} );

	wp.customize( 'classes_title_text_color', function( value ) {
		value.bind( function( to ) {
			$( '#services-heading' ).css( 'color', to );
		} );
	} );

	wp.customize( 'box1_classes_title', function( value ) {
		value.bind( function( to ) {
			$( '#services-box-heading1' ).text( to );
		} );
	} );

	wp.customize( 'box1_classes_title_text_color', function( value ) {
		value.bind( function( to ) {
			$( '#services-box-heading1' ).css( 'color', to );
		} );
	} );

	wp.customize( 'box1_classes_text', function( value ) {
		value.bind( function( to ) {
			$( '#services-box-text1' ).text( to );
		} );
	} );

	wp.customize( 'box1_classes_text_color', function( value ) {
		value.bind( function( to ) {
			$( '#services-box-text1' ).css( 'color', to );
		} );
	} );


	wp.customize( 'classes_box1_background_color', function( value ) {
		value.bind( function( to ) {
			$( '#service-box-1' ).css( 'background-color', to );
		} );
	} );

	wp.customize( 'box2_classes_title', function( value ) {
		value.bind( function( to ) {
			$( '#services-box-heading2' ).text( to );
		} );
	} );

	wp.customize( 'box2_classes_title_text_color', function( value ) {
		value.bind( function( to ) {
			$( '#services-box-heading2' ).css( 'color', to );
		} );
	} );

	wp.customize( 'box2_classes_text', function( value ) {
		value.bind( function( to ) {
			$( '#services-box-text2' ).text( to );
		} );
	} );

	wp.customize( 'box2_classes_text_color', function( value ) {
		value.bind( function( to ) {
			$( '#services-box-text2' ).css( 'color', to );
		} );
	} );


	wp.customize( 'classes_box2_background_color', function( value ) {
		value.bind( function( to ) {
			$( '#service-box-2' ).css( 'background-color', to );
		} );
	} );

	wp.customize( 'box3_classes_title', function( value ) {
		value.bind( function( to ) {
			$( '#services-box-heading3' ).text( to );
		} );
	} );

	wp.customize( 'box3_classes_title_text_color', function( value ) {
		value.bind( function( to ) {
			$( '#services-box-heading3' ).css( 'color', to );
		} );
	} );

	wp.customize( 'box3_classes_text', function( value ) {
		value.bind( function( to ) {
			$( '#services-box-text3' ).text( to );
		} );
	} );

	wp.customize( 'box3_classes_text_color', function( value ) {
		value.bind( function( to ) {
			$( '#services-box-text3' ).css( 'color', to );
		} );
	} );


	wp.customize( 'classes_box3_background_color', function( value ) {
		value.bind( function( to ) {
			$( '#service-box-3' ).css( 'background-color', to );
		} );
	} );

	wp.customize( 'box4_classes_title', function( value ) {
		value.bind( function( to ) {
			$( '#services-box-heading4' ).text( to );
		} );
	} );

	wp.customize( 'box4_classes_title_text_color', function( value ) {
		value.bind( function( to ) {
			$( '#services-box-heading4' ).css( 'color', to );
		} );
	} );

	wp.customize( 'box4_classes_text', function( value ) {
		value.bind( function( to ) {
			$( '#services-box-text4' ).text( to );
		} );
	} );

	wp.customize( 'box4_classes_text_color', function( value ) {
		value.bind( function( to ) {
			$( '#services-box-text4' ).css( 'color', to );
		} );
	} );


	wp.customize( 'classes_box4_background_color', function( value ) {
		value.bind( function( to ) {
			$( '#service-box-4' ).css( 'background-color', to );
		} );
	} );

	wp.customize( 'classes_background_color', function( value ) {
		value.bind( function( to ) {
			$( '.services' ).css( 'background-color', to );
		} );
	} );

		/**************************************************
			** Classes Section
		*************************************************/

	wp.customize( 'team_heading', function( value ) {
		value.bind( function( to ) {
			$( '#team-heading' ).text( to );
		} );
	} );

	wp.customize( 'team_text', function( value ) {
		value.bind( function( to ) {
			$( '#team-heading' ).text( to );
		} );
	} );	

	wp.customize( 'team_member_1_image', function( value ) {
		value.bind( function( to ) {
			$( '#pills-member1-tab' ).attr( 'src',  to );
		} );
	} );

	wp.customize( 'team_member_1_text', function( value ) {
		value.bind( function( to ) {
			$( '#pills-member1' ).attr( 'src',  to );
		} );
	} );

	wp.customize( 'team_member_2_image', function( value ) {
		value.bind( function( to ) {
			$( '#pills-member2-tab' ).attr( 'src',  to );
		} );
	} );

	wp.customize( 'team_member_2_text', function( value ) {
		value.bind( function( to ) {
			$( '#pills-member2' ).attr( 'src',  to );
		} );
	} );


	wp.customize( 'team_member_3_image', function( value ) {
		value.bind( function( to ) {
			$( '#pills-member3-tab' ).attr( 'src',  to );
		} );
	} );

	wp.customize( 'team_member_3_text', function( value ) {
		value.bind( function( to ) {
			$( '#pills-member3' ).attr( 'src',  to );
		} );
	} );


	wp.customize( 'team_member_4_image', function( value ) {
		value.bind( function( to ) {
			$( '#pills-member4-tab' ).attr( 'src',  to );
		} );
	} );

	wp.customize( 'team_member_4_text', function( value ) {
		value.bind( function( to ) {
			$( '#pills-member4' ).attr( 'src',  to );
		} );
	} );


	wp.customize( 'team_member_5_image', function( value ) {
		value.bind( function( to ) {
			$( '#pills-member5-tab' ).attr( 'src',  to );
		} );
	} );

	wp.customize( 'team_member_5_text', function( value ) {
		value.bind( function( to ) {
			$( '#pills-member5' ).attr( 'src',  to );
		} );
	} );


	wp.customize( 'team_member_6_image', function( value ) {
		value.bind( function( to ) {
			$( '#pills-member6-tab' ).attr( 'src',  to );
		} );
	} );

	wp.customize( 'team_member_6_text', function( value ) {
		value.bind( function( to ) {
			$( '#pills-member6' ).attr( 'src',  to );
		} );
	} );

	/**************************************************
	** Contact Section
	*************************************************/
	
	wp.customize( 'contact_title', function( value ) {
		value.bind( function( to ) {
			$( 'contact-details-social' ).text( to );
		} );
	} );

	wp.customize( 'contact_facebook_url', function( value ) {
		value.bind( function( to ) {
			$( 'fa-facebook-f' ).url( to );
		} );
	} );

	wp.customize( 'contact_twitter_url', function( value ) {
		value.bind( function( to ) {
			$( 'fa-twitter' ).url( to );
		} );
	} );


	wp.customize( 'contact_linkedin_url', function( value ) {
		value.bind( function( to ) {
			$( 'fa-linkedin-in' ).url( to );
		} );
	} );


	wp.customize( 'contact_instergram_url', function( value ) {
		value.bind( function( to ) {
			$( 'fa-instagram' ).url( to );
		} );
	} );

	wp.customize( 'contact_slack_url', function( value ) {
		value.bind( function( to ) {
			$( 'fa-slack' ).url( to );
		} );
	} );

	wp.customize( 'contact_info_title', function( value ) {
		value.bind( function( to ) {
			$( 'contact-details-info' ).text( to );
		} );
	} );
	

	wp.customize( 'contact_phone', function( value ) {
		value.bind( function( to ) {
			$( 'phone' ).text( to );
		} );
	} );

	wp.customize( 'contact_email', function( value ) {
		value.bind( function( to ) {
			$( 'email' ).text( to );
		} );
	} );


	wp.customize( 'contact_address', function( value ) {
		value.bind( function( to ) {
			$( 'address' ).text( to );
		} );
	} );

	wp.customize( 'contact_background_color', function( value ) {
		value.bind( function( to ) {
			$( '.contact' ).css( 'background-color', to );
			
		} );
	} ); 



	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title, .site-description' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				$( '.site-title, .site-description' ).css( {
					'clip': 'auto',
					'position': 'relative'
				} );
				$( '.site-title a, .site-description' ).css( {
					'color': to
				} );
			}
		} );
	} );
} )( jQuery );
