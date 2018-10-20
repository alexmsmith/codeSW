const hotelHeader = "Hotel-Reservation";
const hotelContent = "This is the Hotel-Reservation content which contains content based upon the hotel.";

const cakeHeader = "Cake Decorating";
const cakeContent = "This is the cake decorating website that contains cakes and nothing but cakes.";

const techHeader = "The-Tech-Store";
const techContent = "This is an ecommerce website designed for customers to purchase technological related products. Here is a live link to the website: <a href='https://www.thetechstoredemo.co.uk/' target=”_blank”>www.thetechstoredemo.co.uk</a>";

const burnhamHeader = "Burnham-on-Sea";
const burnhamContent = "Burnham-on-Sea website; bringing the latest news from the local town. <a href='https://github.com/alexmsmith/burnhamOnSea'>View GitHub Repository</a>.";

// Wait till document has loaded; wait till button is selected and display content
$(document).ready(function(){
    $(".project-hotel").click(function(){
        $('.modal-title').html(hotelHeader);
        $('.modal-body').html(hotelContent);
    });
    $(".project-cake").click(function(){
        $('.modal-title').html(cakeHeader);
        $('.modal-body').html(cakeContent);
    });
    $('.project-tech').click(function(){
        $('.modal-title').html(techHeader);
        $('.modal-body').html(techContent);
    });
	$('.project-burnham').click(function() {
		$('.modal-title').html(burnhamHeader);
		$('.modal-body').html(burnhamContent);
	});
});

// Front-page Slider animation
/*
$(window).on('load', function() {
	$('.flexslider').flexslider({
		animation: "slide"
	});
});
*/