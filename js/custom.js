
/* Superfish */
/* ========================================== */
jQuery(document).ready(function ($) {
    $('.header_menu ul').superfish({
    speed:         'normal',
    autoArrows:    false,
    dropShadows:   false,
    onInit:        function(){
    $('.header_menu ul' + ' li').each(function(){
        $(this).addClass('sfHover');
    });
    }
    }).supposition();
});


/* Custom Select Boxes */
/* ========================================== */
jQuery(function(){
    jQuery('select').customSelect();
});

/* INIT Colourbox */
/* ========================================== */
jQuery(document).ready(function ($) {
	// colorbox
	$('a.colorbox').colorbox();
});


/* INIT Addthis */
/* ========================================== */
/* function initAddThis() { addthis.init() }
   jQuery(document).ready( function(){ initAddThis(); } );
*/

/* INIT Banner */
/* ========================================== */
jQuery(window).ready(function ($) {
	$('.flexslider').flexslider({
		animation: "slide",
		pauseOnAction: false,
		pauseOnHover: true
	});
});
