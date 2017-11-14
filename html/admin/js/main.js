
(function($){
  	$(function(){

	  	// var swiper = new Swiper('.swiper-container', {
	   //      pagination: '.swiper-pagination',
	   //      paginationClickable: true,
	   //      loop: true,
	   //      autoplay: 3000,
	   //      speed: 300
	   //  });

	   // nav-top 菜单
	    $('body').on('click', '.tip-user', function() {
	        $('.top-nav-list').toggleClass('active');
	        return false;
	    });

	    // tab tltle切换
	    $('body').on('click', '.page-header .nav li', function(){
            $('.page-header .nav li').removeClass('active');
            $(this).addClass('active');
            var key = $(this).attr("id");
            $(".tab-content .tab-pane").removeClass('active');            
            $("." + key).addClass('active');
            return false;
        });

	    // PC菜单
	    $('body').on('click', '.nav-parent', function(){
            $(this).parent().toggleClass('active');
            $('.nav-child').toggleClass('active');
        });

        // 手机端 菜单
        $('body').on('click', '.nav-toggle .open', function(){
            $('.nav-toggle .close').addClass('active');
            $(this).removeClass('active');
            $('.main .main-fl').addClass('active');
            return false;
        });
        $('body').on('click', '.nav-toggle .close', function(){
            $('.nav-toggle .open').addClass('active');
            $(this).removeClass('active');
            $('.main .main-fl').removeClass('active');            
            return false;
        });

 	});
})(jQuery);
