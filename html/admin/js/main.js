
(function($){
  	$(function(){

	  	// var swiper = new Swiper('.swiper-container', {
	   //      pagination: '.swiper-pagination',
	   //      paginationClickable: true,
	   //      loop: true,
	   //      autoplay: 3000,
	   //      speed: 300
	   //  });

	    $('body').on('click', '.tip-user', function() {
	        $('.top-nav-list').toggleClass('active');
	        return false;
	    });

	    $('body').on('click', '.page-header .nav li', function(){
            $('.page-header .nav li').removeClass('active');
            $(this).addClass('active');
            var key = $(this).attr("id");
            $(".tab-content .tab-pane").removeClass('active');            
            $("." + key).addClass('active');
            return false;
        });


 	});
})(jQuery);
