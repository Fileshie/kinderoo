<?php
  /**
  * Template Name: Home Page Template
  * @package Kinder

  */

  get_header();
?>

<!-- Hero Section -->

<div class="container-fluid">
  <div class="row">
    <div class=" col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" id="hero-section">
      <div class="row">
        <div class=" col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6" id="hero-image">

          <img src=" <?php echo esc_url( get_theme_mod('hero_section_image') , 'kinderoo'); ?>" class="animated fadeInDownBig">
        </div>
        <div class=" col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 hero-text-section">
          <h1 id="hero-title">
            <?php _e( get_theme_mod('hero_title') , 'kinderoo'); ?>
          </h1>
          <h2 id="hero-description">
            <?php _e( get_theme_mod('hero_description') , 'kinderoo'); ?>
          </h2>

          <div class="hero-cta-button">
            <a class="btn btn-lg" id="hero-button" href="<?php _e( get_theme_mod('hero_button_url') , 'kinderoo'); ?>">
              <?php _e( get_theme_mod('hero_button_text') , 'kinderoo'); ?></a>
          </div>


        </div>
      </div>
    </div>
  </div>
</div>

<!-- About Section -->

<div class="container-fluid content-section" id="about-section">
  <div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
      <h2 class="about-heading section-heading" id="about-heading">
        <?php _e( get_theme_mod('about_title') , 'kinderoo'); ?>
      </h2>
    </div>
  </div>
  <div class="row">
    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
      <p id="about-text" class="about-text section-text">
        <?php _e( get_theme_mod('about_text') , 'kinderoo'); ?>
      </p>
    </div>
    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12" id="about-img">
      <img src=" <?php echo esc_url( get_theme_mod('about_image') , 'kinderoo'); ?>" class="about-image">
    </div>
  </div>
</div>

<div class="container-fluid content-section services" id="classes">
  <div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
      <h2 class="services-heading section-heading" id="services-heading">
        <?php _e( get_theme_mod('classes_title') , 'kinderoo'); ?>
      </h2>
    </div>
  </div>

  <div class="row">
    <div class="col-xl-3 col-lg-6 col-md-12 col-sm-12 col-12">
      <div class="service-box-1 service-box" id="service-box-1">
        <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <h3 class="services-box-heading" id="services-box-heading1">
              <?php _e( get_theme_mod('box1_classes_title') , 'kinderoo'); ?>
            </h3>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <p class="service-box-text" id="services-box-text1">
              <?php _e( get_theme_mod('box1_classes_text') , 'kinderoo'); ?>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-lg-6 col-md-12 col-sm-12 col-12">
      <div class="service-box-2 service-box" id="service-box-2">
        <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <h3 class="services-box-heading" id="services-box-heading2">
              <?php _e( get_theme_mod('box2_classes_title') , 'kinderoo'); ?>
            </h3>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <p class="service-box-text" id="services-box-text2">
              <?php _e( get_theme_mod('box2_classes_text') , 'kinderoo'); ?>
            </p>

          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-12 col-sm-12 col-12">
      <div class="service-box-3 service-box" id="service-box-3">
        <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <h3 class="services-box-heading" id="services-box-heading3">
              <?php _e( get_theme_mod('box3_classes_title') , 'kinderoo'); ?>
            </h3>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <p class="service-box-text" id="services-box-text3">
              <?php _e( get_theme_mod('box3_classes_text') , 'kinderoo'); ?>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-lg-6 col-md-12 col-sm-12 col-12">
      <div class="service-box-4 service-box" id="service-box-4">
        <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <h3 class="services-box-heading" id="services-box-heading4">
              <?php _e( get_theme_mod('box4_classes_title') , 'kinderoo'); ?>
            </h3>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <p class="service-box-text" id="services-box-text4">
              <?php _e( get_theme_mod('box4_classes_text') , 'kinderoo'); ?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

<div class="container-fluid content-section" id="team">
  <div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
      <h2 class="team-heading section-heading" id="team-heading">
        <?php _e( get_theme_mod('team_heading') , 'kinderoo'); ?>
      </h2>
    </div>
  </div>
  <div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
      <p class="team-text section-text" id="team-text">
        <?php _e( get_theme_mod('team_text') , 'kinderoo'); ?>
      </p>
    </div>
  </div>

  <div class="row">

    <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1 nav-left">
      <!-- Set up your HTML -->
      <i class="fas fa-arrow-left fa-2x" id="nav-left"></i>
    </div>


    <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10">

      <ul class="nav nav-pills mb-3 owl-carousel" id="pills-tab" role="tablist">


        <li class="nav-item">
          <a class="nav-link active" id="pills-member1-tab" data-toggle="pill" href="#pills-member1" role="tab"
            aria-controls="pills-member1" aria-selected="true"><img class="img-fluid team-member" value="Show Div" src=" <?php echo esc_url( get_theme_mod('team_member_1_image') , 'kinderoo'); ?>" />
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" id="pills-member2-tab" data-toggle="pill" href="#pills-member2" role="tab" aria-controls="pills-member2"
            aria-selected="false"> <img class="img-fluid team-member" value="Show Div" src="<?php echo esc_url( get_theme_mod('team_member_2_image') , 'kinderoo'); ?>" />
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" id="pills-member3-tab" data-toggle="pill" href="#pills-member3" role="tab" aria-controls="pills-member3"
            aria-selected="false"> <img class="img-fluid team-member" value="Show Div" src="<?php echo esc_url( get_theme_mod('team_member_3_image') , 'kinderoo'); ?>" />
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" id="pills-member4-tab" data-toggle="pill" href="#pills-member4" role="tab" aria-controls="pills-member4"
            aria-selected="false"><img class="img-fluid team-member" value="Show Div" src="<?php echo esc_url( get_theme_mod('team_member_4_image') , 'kinderoo'); ?>" />
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" id="pills-member5-tab" data-toggle="pill" href="#pills-member5" role="tab" aria-controls="pills-member5"
            aria-selected="false"><img class="img-fluid team-member" value="Show Div" src="<?php echo esc_url( get_theme_mod('team_member_5_image') , 'kinderoo'); ?>" />
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" id="pills-member6-tab" data-toggle="pill" href="#pills-member6" role="tab" aria-controls="pills-member6"
            aria-selected="false">
            <img class="img-fluid team-member" value="Show Div" src="<?php echo esc_url( get_theme_mod('team_member_6_image') , 'kinderoo'); ?>" />
          </a>
        </li>

      </ul>
    </div>
    <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1 nav-right">

      <i class="fas fa-arrow-right fa-2x" id="nav-right"></i>
    </div>
  </div>

  <div class="row content-section">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-member1" role="tabpanel" aria-labelledby="pills-member-tab">
          <?php  _e( get_theme_mod('team_member_1_text') , 'kinderoo'); ?>
        </div>
        <div class="tab-pane fade" id="pills-member2" role="tabpanel" aria-labelledby="pills-member2-tab">
          <?php  _e( get_theme_mod('team_member_2_text') , 'kinderoo'); ?>
        </div>
        <div class="tab-pane fade" id="pills-member3" role="tabpanel" aria-labelledby="pills-member3-tab">
          <?php  _e( get_theme_mod('team_member_3_text') , 'kinderoo'); ?>
        </div>
        <div class="tab-pane fade" id="pills-member4" role="tabpanel" aria-labelledby="pills-member4-tab">
          <?php  _e( get_theme_mod('team_member_4_text') , 'kinderoo'); ?>
        </div>
        <div class="tab-pane fade" id="pills-member5" role="tabpanel" aria-labelledby="pills-member5-tab">
          <?php  _e( get_theme_mod('team_member_5_text') , 'kinderoo'); ?>
        </div>
        <div class="tab-pane fade" id="pills-member6" role="tabpanel" aria-labelledby="pills-member6-tab">
          <?php  _e( get_theme_mod('team_member_6_text') , 'kinderoo'); ?>
        </div>
      </div>

    </div>
  </div>
</div>


<div class="container-fluid content-section contact" id="contact">

  <div class="row">
    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
      <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <h2 class="contact-heading section-heading">
            Make an enquiry
          </h2>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Contact') ) : 
 
        endif; ?>
        </div>
      </div>
    </div>
    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
      <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <h2 class="contact-details-social"> <?php _e( get_theme_mod('contact_title') , 'kinderoo'); ?></h2>

          <?php if (!empty ( get_theme_mod('contact_facebook_url' ) )) : ?>
          <a href="<?php echo esc_url( get_theme_mod('contact_facebook_url') , 'kinderoo'); ?>"><i class="fab fa-facebook-f"></i></a>
          <?php endif;?>
          <?php if (!empty ( get_theme_mod('contact_twitter_url' ) )) : ?>
          <a href="<?php echo esc_url( get_theme_mod('contact_twitter_url') , 'kinderoo'); ?>"> <i class="fab fa-twitter"></i></a>
          <?php endif;?>
          <?php if (!empty ( get_theme_mod('contact_linkedin_url' ) )) : ?>
          <a href="<?php echo esc_url( get_theme_mod('contact_linkedin_url') , 'kinderoo'); ?>">
           <i class="fab fa-linkedin-in"></i></a>
           <?php endif;?>
          <?php if (!empty ( get_theme_mod('contact_instergram_url' ) )) : ?>
          <a href="<?php echo esc_url( get_theme_mod('contact_instergram_url') , 'kinderoo'); ?>">
          <i class="fab fa-instagram"></i> </a>
          <?php endif;?>
          <?php if (!empty ( get_theme_mod('contact_slack_url' ) )) : ?>
          <a href="<?php echo esc_url( get_theme_mod('contact_slack_url') , 'kinderoo'); ?>">
          <i class="fab fa-slack"></i></a>
          <?php endif;?>
        </div>
      </div>


      <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <h2 class="contact-details-info">
          <?php  _e( get_theme_mod('contact_info_title') , 'kinderoo'); ?></h2>
          <div id="phone"> <i class="fas fa-phone"></i>  
          <?php if (!empty ( get_theme_mod('contact_phone' ) )) : ?>
          <?php  _e( get_theme_mod('contact_phone') , 'kinderoo'); ?>
          <?php endif;?>
    </div>
          <div id="email"><i class="fas fa-at"></i>  <?php if (!empty ( get_theme_mod('contact_email' ) )) : ?>
          <?php  _e( get_theme_mod('contact_email') , 'kinderoo'); ?>
          <?php endif;?></div>
          <div id="address"><i class="fas fa-map-marker-alt"></i>  <?php if (!empty ( get_theme_mod('contact_address' ) )) : ?>
          <?php  _e( get_theme_mod('contact_address') , 'kinderoo'); ?>
          <?php endif;?> </div>
        </div>
      </div>

    </div>
  </div>
</div>

<?php
  get_footer();
?>