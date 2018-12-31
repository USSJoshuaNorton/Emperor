$(function(){
	$('.main-toggle').on('click', function(){
		$('.main-side-nav').toggleClass('open');
		$('.main-toggle').toggleClass('open');
		$('.main-close').toggleClass('open');
	});
	$('.sub-toggle').on('click', function(){
		$('.sub-side-nav').toggleClass('open');
		$('.sub-toggle').toggleClass('open');
		$('.sub-close').toggleClass('open');
	});
});
