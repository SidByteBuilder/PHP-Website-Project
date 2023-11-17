$(document).ready(function() {

	$(window).scroll(function() {

		var y = $(this).scrollTop();

		var container_pos = $('.logo-design-newzealand').position();

		var container_height = $('.logo-design-newzealand').height();

		if( y >= (container_pos - container_height - 700)){

			$('.logo-design-newzealand h2').addClass('fadeInLeft');

		} else {
			$('.logo-design-newzealand h2').removeClass('fadeInLeft');
		}

	});

});