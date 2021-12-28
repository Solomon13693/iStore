  var swiper = new Swiper(".mySwiper", {
    pagination: {
      el: ".swiper-pagination",
    },
    slidesPerView: "auto",
    spaceBetween: 20,
    centeredSlides: true,
    autoplay: true,
  });


  // OWL CAROUSEL
		$('.owl-carousel').owlCarousel({
			loop:true,
			// nav:true,
			dots:true,
			autoplay: true,
			autoplaySpeed: 1000,
			navSpeed: 1000,
			items:5,
			margin: 20,
			center: true,
			responsive:{
				0 : {
					items:1
				},
				// breakpoint from 480 up
				575 : {
					items:2
				},
				// breakpoint from 768 up
				768 : {
					items:3
				},
				// breakpoint from 1200 up
				1200 : {
					items:5
				}
			}
		})
	