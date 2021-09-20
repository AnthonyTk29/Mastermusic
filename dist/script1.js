let cont=0;


$(".slider").click(function(){
	au.volume = this.value;
});

$( ".boton_menu" ).click(function() {
	// ===== If Nav is not open	
	if($('.nav').css("display") == "none"){
		TweenMax.fromTo(".nav", 0.5, {xPercent: -100}, 
									{xPercent: 0, display: 'block', ease: Expo.easeOut});
		TweenMax.staggerFrom('.nav li', 0.5, {opacity:0, y: 20, ease: Power2.easeInOut}, 0.1);
		
		$('.logo-text').css({'opacity': '0', 'display': 'none'});
  }
	// ===== If Nav is open	and in Curation page
	else if($('.nav').css("display") == "block" && $('#curator').css("display") == "block"){
 		TweenMax.to(".nav", 0.5, {xPercent: -100, display:'none', ease: Expo.easeOut});
		// $('.logo-text').css({'opacity': '1', 'display': 'block'});
  }
	else {
	  	TweenMax.to(".nav", 0.5, {xPercent: -100, display:'none', ease: Expo.easeOut});
		$('.logo-text').css({'opacity': '1', 'display': 'block'});
	}
});

$('.btn-play').click(function(){
    alert(audi);
	audi.play();
    Push.create(tit, {
		body: genero,
		icon: 'musica-romantica.png',
		timeout: 4000,
		onClick: function () {
			window.focus();
			this.close();
		}
	});
	TweenMax.to($('.btn-play'), 0.2, {x: 20, opacity: 0, scale: 0.3,  display: 'none', ease: Power2.easeInOut});
	TweenMax.fromTo($('.btn-pause'), 0.2, {x: -20, opacity: 0, scale: 0.3, display: 'none'},
								 {x: 0, opacity: 1, scale: 1, display: 'block', ease: Power2.easeInOut});
});

$('.btn-pause').click(function(){
	audi.pause();
	alert(audi);
	TweenMax.to($('.btn-pause'), 0.2, {x: 20, opacity: 0, display: 'none', scale: 0.3, ease: Power2.easeInOut});
	TweenMax.fromTo($('.btn-play'), 0.2, {x: -20, opacity: 0, scale: 0.3, display: 'none'},
								 {x: 0, opacity: 1, display: 'block', scale: 1, ease: Power2.easeInOut});
});

$('.fondo').click(function() {
	TweenMax.to("#player", 0.5, {xPercent: -100, display: 'none', ease: Expo.easeOut});
	TweenMax.to(".nav", 0.5, {xPercent: -100, display: 'none', ease: Power2.easeInOut})
	TweenMax.to(".mini-player", 0.5, {x: 0, ease: Expo.easeOut});
});

$( ".btn-open-player" ).click(function() {
     TweenMax.fromTo("#player", 0.5, {xPercent: -100}, 
                                      {xPercent: 0, display: 'block', ease: Expo.easeOut});
      TweenMax.to(".mini-player", 0.5, {x: 0, ease: Expo.easeOut});
});

function play_func(){
    alert(audi);
	audi.play();
    Push.create(tit, {
		body: genero,
		icon: 'musica-romantica.png',
		timeout: 4000,
		onClick: function () {
			window.focus();
			this.close();
		}
	});
	TweenMax.to($('.btn-play'), 0.2, {x: 20, opacity: 0, scale: 0.3,  display: 'none', ease: Power2.easeInOut});
	TweenMax.fromTo($('.btn-pause'), 0.2, {x: -20, opacity: 0, scale: 0.3, display: 'none'},
								 {x: 0, opacity: 1, scale: 1, display: 'block', ease: Power2.easeInOut});

};
$('.btn-open-player').hover(function(){
	
	TweenMax.fromTo($(this), 0.5, {opacity: 0.5, ease: Power2.easeInOut},
								 {opacity: 1})},
	function(){
		$(this).css("opacity", "1")
});
$('.track_info').hover(function(){
	
	TweenMax.fromTo($(this), 0.5, {opacity: 0.5, ease: Power2.easeInOut},
								 {opacity: 1})},
	function(){
		$(this).css("opacity", "1");
});
// ===== Player - List Items =====
$('.list').on('click', 'li',function(){
	var parent = document.getElementById($(this).attr('id'));
	var child = parent.children[1];
	var chi=document.getElementById($(child).attr('id'));
	var chila = chi.children[0];
	var childen = chi.children[1];
	var genero = childen.innerHTML;
	var tit = chila.innerHTML;
	document.getElementById('titgene1').innerHTML = tit;
	document.getElementById('titgene2').innerHTML = tit;
	document.getElementById('titgenero1').innerHTML = genero;
	document.getElementById('titgenero2').innerHTML = genero;
	var audi = new Audio();
    audi.src = 'AUDIO/'+tit;
	audi.load();
    $('.btn-play').click();
});