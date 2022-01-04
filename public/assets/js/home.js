$('#carousel-new').owlCarousel({
  autoplay: true,
  rewind: true, 
  margin: 10,
   /*
  animateOut: 'fadeOut',
  animateIn: 'fadeIn',
  */
  responsiveClass: true,
  autoHeight: true,
  autoplayTimeout: 5000,
  smartSpeed: 800,
  nav: true,
  navText : ['<i class="bi bi-chevron-left"></i>','<i class="bi bi-chevron-right"></i>'],
  responsive: {
    0: {
      items: 1
    },

    600: {
      items: 2
    },

    1024: {
      items: 4
    },

    1366: {
      items: 4
    }
  }
})



$('#top-carousel').owlCarousel({
    loop:true,
    margin:10,
    rewind: true,
    nav:true,
    navigation:true,
    autoplay:true,
    autoplayTimeout: 5000,
    smartSpeed: 800,
    navText : ['<i class="bi bi-chevron-left"></i>','<i class="bi bi-chevron-right"></i>'],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})

jQuery("#carousel").owlCarousel({
  autoplay: true,
  rewind: true, 
  margin: 8,
   /*
  animateOut: 'fadeOut',
  animateIn: 'fadeIn',
  */
  responsiveClass: true,
  autoHeight: true,
  autoplayTimeout: 5000,
  smartSpeed: 800,
  nav: true,
  navText : ['<i class="bi bi-chevron-left"></i>','<i class="bi bi-chevron-right"></i>'],
  responsive: {
    0: {
      items: 1
    },

    600: {
      items: 2
    },

    1024: {
      items: 4
    },

    1366: {
      items: 4
    }
  }
})

