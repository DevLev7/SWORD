if ($(window).width() < 501){
	var lazyLoadInstance = new LazyLoad({
	  threshold: 500
	})
	} else {
	var lazyLoadInstance = new LazyLoad({
	  threshold: 1000
	})
}


// $("#header").each(function(i) {
// 	var tlh = gsap.timeline();
// 	var header=$(this).find(".mainrow")

// 	tlh.from(header, { yPercent: -150, opacity: 0, ease: 'power', duration: 1});
// });

$(document).ready(function(){

	

	// = Вешаем событие прокрутки к нужному месту
	//	 на все ссылки якорь которых начинается на #
	$('a[href^="#"]').bind('click.smoothscroll',function (e) {
		e.preventDefault();

		var target = this.hash,
		$target = $(target);
       
		
		$('html, body').stop().animate({
			'scrollTop': $target.offset().top
		}, 900, 'swing', function () {
			window.location.hash = target;
		});
	});

});



$("#hero").each(function(i) {
var tl0 = gsap.timeline();
var h1 = $(this).find("h1");
var h3 = $(this).find("h3");
var sq=$(this).find(".square_1");
var sq2=$(this).find(".square_2");
var cir=$(this).find(".circle");


tl0.from(h1, { yPercent: 100, opacity: 0, ease: 'power', duration: 1});
tl0.from(h3, { yPercent: 100, opacity: 0, ease: 'power', duration: 1});
tl0.from(sq, { xPercent: 100,  ease: 'power', duration: 1},"-=1.2");
tl0.from(sq2, { xPercent: 100,  ease: 'power', duration: 1},"-=1.1");
tl0.from(cir, { xPercent: 100,  ease: 'power', duration: 1},"-=1");

});





$('.btn').mouseenter(function(){
var btn = $('btn:after')
btn.animate({opacity:0},500)
})

gsap.to(".maps", {
	top: -100,
	ease: "none",
	scrollTrigger: {
	  trigger: "#block_6",
	  // start: "top bottom", // the default values
	  // end: "bottom top",
	  scrub: true
	}, 
  });
  
  


  var ctrl = new ScrollMagic.Controller();

  // Create scenes in jQuery each() loop
  $(".block_title").each(function(i) {
	var h2 = $(this).find("h2");
	var up = $(this).find(".up");
	var up1 = $(this).find(".up_1");

	var tl = new TimelineMax();
	
	
	tl.from(h2, 1, { yPercent: 50, opacity: 0, ease: 'power', duration: 3});

	tl.to(up, 1, {  top:'20%', ease: 'power', duration: 2});
	
	tl.from(up1, 1, {  top:'80%', ease: 'power', duration: 2});
	
	
	new ScrollMagic.Scene({
	  triggerElement: this,
	  duration: "95%",
	 
    triggerHook: 0.6
	})
	  .setTween(tl)
	//   .addIndicators({
	// 	colorTrigger: "white",
	// 	colorStart: "white",
	// 	colorEnd: "white",
	// 	indent: 40
	//   })
	  .addTo(ctrl);
  });


  var ctrl1 = new ScrollMagic.Controller();

  // Create scenes in jQuery each() loop
  $("#block_2").each(function(i) {

	var lift = $(this).find(".img_lift");
	var tl9 = new TimelineMax();

	tl9.from(lift, 1, {  yPercent: 80, transform:'scale(0.2)', ease: 'power', duration: 4},"-=2" );
	
	
	new ScrollMagic.Scene({
	  triggerElement: this,
	  duration: "95%",
	 
    triggerHook: 0.4
	})
	  .setTween(tl9)
	//   .addIndicators({
	// 	colorTrigger: "white",
	// 	colorStart: "white",
	// 	colorEnd: "white",
	// 	indent: 40
	//   })
	  .addTo(ctrl1);
  });






