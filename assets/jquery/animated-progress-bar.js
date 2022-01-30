(function($){
$(window).scroll(function(){
	if($(window).scrollTop() > 200){
		$(".progressbar").each(function(){
			each_bar_width = $(this).attr('aria-valuenow');
			$(this).width(each_bar_width + '%');
		}); 
	};
});
})(jQuery);