$('.sliderCno').slick({
	slidesToShow: 1,
	slidesToScroll: 1,
	arrows: false,
	// fade: true,
	asNavFor: '.contentRightSideslider',
	responsive: [
		{
			breakpoint: 769,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				infinite: false,
				dots: true,
				arrows: false,

			}
		},
	]
});
$('.contentRightSideslider').slick({
	slidesToShow: 1,
	slidesToScroll: 1,
	asNavFor: '.sliderCno',
	dots: false,
	loop: true,
	arrows: true,
	centerMode: false,
	focusOnSelect: true,
	responsive: [
		{
			breakpoint: 769,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				infinite: false,
				dots: false,
				arrows: false,

			}
		},
	]
});
$('.sliderContainerBanner').slick({
	slidesToShow: 1,
	responsive: [
		{
			breakpoint: 769,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				infinite: false,
				dots: false,
				arrows: false,

			}
		},
	]
});
$('.sliderContainerProduct').slick({
	slidesToShow: 5,
	slidesToScroll: 3,
	autoPlay: false,
	centerMode: false,
	dots: false,
	infinite: false,
	responsive: [
		{
			breakpoint: 769,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				infinite: false,
				dots: true,
				arrows: false,

			}
		},
	]
})
$('.sliderFeatureProduct').slick({
	slidesToShow: 4.5,
	slidesToScroll: 2,
	autoPlay: false,
	centerMode: false,
	dots: false,
	infinite: false,
	responsive: [
		{
			breakpoint: 769,
			settings: {
				slidesToShow: 1.3,
				slidesToScroll: 1,
				infinite: false,
				dots: true,
				arrows: false,

			}
		},
	]
})

if ($(window).width() < 767) {
	$('.sliderBlog').slick({
		slidesToScroll:1,
		slidesToShow: 1,
		dots: true,
		centerMode: false,
		infinite: false,
		arrows: false
	});
	$('.custom-footer-content h6').click( function(e) {
		$(this).parent().find('ul').slideToggle();
		$(this).toggleClass('actives');
	})
}
// var $grid = $('.grid').isotope({
// 	itemSelector: '.element-item',
// 	layoutMode: 'fitRows',
// 	filter: '.products'
// });
// var filterFns = {
// 	numberGreaterThan50: function() {
// 		var number = $(this).find('.number').text();
// 		return parseInt( number, 10 ) > 50;
// 	},
// 	ium: function() {
// 		var name = $(this).find('.name').text();
// 		return name.match( /ium$/ );
// 	}
// };
// $('.filters-button-group').on( 'click', 'button', function() {
// 	var tabValue = $(this).data('tab');

// 	$('.tabContainerCustom').delay(1000).removeClass('active');
// 	$('.tabContainerCustom#' + tabValue).addClass('active');
// 	var filterValue = $( this ).attr('data-filter');
// 	filterValue = filterFns[ filterValue ] || filterValue;
// 	$grid.isotope({ filter: filterValue });
// });
// $('.button-group').each( function( i, buttonGroup ) {
// 	var $buttonGroup = $( buttonGroup );
// 	$buttonGroup.on( 'click', 'button', function() {
// 		$buttonGroup.find('.is-checked').removeClass('is-checked');
// 		$( this ).addClass('is-checked');
// 	});
// });
$(window).on('load', function(e) {
// 	$('.button-group.filters-button-group button:nth-child(1)').trigger('click'); 
});
$(".nav-toggler").click(function () {
	$('.sch-menu nav').slideToggle('menu-active');
	$(this).toggleClass('nav-active');

});
$('.slideInnerContainer').slick({
	slidesToShow: 1,
	slidesToScroll: 1,
	arrows: false,
	fade: true,
	asNavFor: '.slideInnerThumbnail'
});
$('.slideInnerThumbnail').slick({
	slidesToShow: 4,
	slidesToScroll: 1,
	asNavFor: '.slideInnerContainer',
	dots: false,
	arrows: false,
	centerMode: false,
	focusOnSelect: true
});

$('.imageWrapperS').slick({
	slidesToScroll: 1,
	slidesToShow: 1,
	arrows: true,
	dots: false,
})

$('.bttn-ltgr button').on('click', function (e) {
	if ($(this).hasClass('list')) {
		$('.bttn-ltgr ul').addClass('list').removeClass('grids');
	} else if ($(this).hasClass('grids')) {
		$('.bttn-ltgr ul').addClass('grids').removeClass('list');
	}
});

$('.clk a').click(function () {
	$(this).find('i').toggleClass('fa-plus fa-minus')
});

$('.clk').click(function () {
	$('.clk').parent().toggleClass('hide');
});



$('.allCatsLink a, .sidebarLink a').click( function(e) {
	e.preventDefault();
	$('.allcatesMenu').addClass('active');
	$('body').addClass('active');
})

$('.closeIconSideBar').click( function(e) {
	e.preventDefault();
	$('.allcatesMenu').removeClass('active');
	$('body').removeClass('active');
})

$('ul.functional-menu li:first-child a').click( function(e) {
	e.preventDefault();
	$('.SearchContainer').slideToggle();
})

$('.sliderCOntainerImages').slick({
	slidesToShow: 5,
});

// var replaced = $("body").html().replace(/Capsells/g,'CleanArc Power');
// $("body").html(replaced);
$('.sliderFeatureProducts').slick({
	slidesToShow: 5,
	slidesToScroll: 1,
	dots: false,
	arrows: true,
	responsive: [
		{
			breakpoint: 769,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				infinite: false,
				dots: true,
				arrows: false,

			}
		},
	]
})


$('ul.pro-tag li').click( function(e) {
	$('ul.pro-tag li').removeClass('active');
	$(this).addClass('active');
});

$('.listTatgTabs ul li a').bind('click', function(e) 
								{   

	$( "ul.pro-tag li:nth-child(1)" ).trigger( "click" );
	console.log("You clicked foo! good work");
});

$(document).ready( function(e) {
// 	$( "ul.pro-tag li:nth-child(1)" ).trigger( "click" );
// 		$( "ul.pro-tag li:nth-child(1)" ).addClass( "active" );
})










































