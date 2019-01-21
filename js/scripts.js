$(document).ready(function () {

    // Menu responsive
    $(".burger").sidr({
        source: ".nav-total",
        displace: false,
    });

    $('body').click(function () {
        $.sidr('close', 'sidr');
    });
});



 // carousel en responsive
$('.owl-carousel').owlCarousel({
	loop: true,
	responsiveClass: true,
	margin:20,
	responsive: {
		0: {
			items: 1,
			nav: true
		},
		
		768: {
			items: 2,
			nav: true,

		},
		992: {
			items: 3,
			nav: true,

		},
	}
});
 // carousel section en direct en responsive//
$('.endirect .owl-carousel').owlCarousel({
	loop: true,
	responsiveClass: true,
	responsive: {
		0: {
			items: 1,
			nav: true
		},
		
		768: {
			items: 2,
			nav: true,

		},
		992: {
			items: 3,
			nav: true,

			

		},
	}
});

//SOCIAL NAV APPARITION AU SCROLL


$('.social-nav').hide(); // cacher la nav

    $(window).scroll(function(){ 
        if ($(this).scrollTop() > 600) { 
            $('.social-nav').fadeIn(); // fondu en entrée
            $('body').addClass ('scrolled');

        } else { 
            $('.social-nav').fadeOut(); 
            $('body').removeClass ('scrolled');
        } 

    });


