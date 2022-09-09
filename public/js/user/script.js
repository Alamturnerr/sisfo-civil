// Global
(function($) {
	"use strict"; // Start of use strict

	// Scroll to top button appear
	$(document).on('scroll', function() {
		var scrollDistance = $(this).scrollTop();
		if (scrollDistance > 100) {
			$('.scroll-to-top').fadeIn();
		} else {
			$('.scroll-to-top').fadeOut();
		}
	});

	// Smooth scrolling using jQuery easing
	$(document).on('click', 'a.scroll-to-top', function(e) {
		var $anchor = $(this);
		$('html, body').stop().animate({
			scrollTop: ($($anchor.attr('href')).offset().top)
		}, 1000, 'easeInOutExpo');
		e.preventDefault();
	});
	
})(jQuery); // End of use strict
// End Global

// Gallery Home
$(document).ready(function(){
	// Gallery Image
	$('.thumb-home').click(function(){
		const thumb=$(this).attr('src');
		$('#mainImg-home').attr('src',thumb);
		$('.thumb-home').removeClass("gallery-active");
		$(this).addClass("gallery-active")
	});
});

// Job 
$(document).ready(function(){
	$.getJSON("/loker/data",function(data){
		$(".link-job").click(function(){
			$(".link-job").removeClass("active-job")
			const active = $(this).addClass("active-job")
			$("#job-null").remove('p')
			const i =$(this).attr("id");
			$.each(data,function(index){
				if(data[index].id == i){
					$("#deskripsi-job").html("<p>"+ data[index].description +"</p>")
					$("#judul-job").html("<h4>"+ data[index].title +"</h4>")
				}
			})		
		})
	})
})
// End Job

// Custom File Input
$(document).ready(function () {
    bsCustomFileInput.init()
})

// Button can only clicked once
$(function () {
    $("form button").click(function () {
      $("form button").prop("disabled", true);
      $("form").not('form#logout-form').submit();
    });
});