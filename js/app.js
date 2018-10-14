jQuery(document).ready(function () {
  jQuery(".owl-carousel").owlCarousel()

    

  function showTeamMember(e) {
    var clickedTeamMemberElement = e.target;
    jQuery(".active").removeClass("active");
   document.getElementById('teamMember').style.display = "block";
    jQuery(clickedTeamMemberElement).addClass("active");

  }

  jQuery('.team-member').click(showTeamMember);
}); 

jQuery('.owl-carousel').owlCarousel({
  loop:true,
  margin:10,
  nav:false,
  responsiveClass:true,
  responsive:{
      0:{
          items:1,
          nav:true
      },
      600:{
          items:2,
          nav:false
      },
      1000:{
          items:3,
          nav:true,
          loop:false
      }
  }
})


var owl = jQuery('.owl-carousel');
owl.owlCarousel();
// Go to the next item
jQuery('#nav-right').click(function() {
    owl.trigger('next.owl.carousel');
})
// Go to the previous item
$('#nav-left').click(function() {
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    owl.trigger('prev.owl.carousel', [300]);
})