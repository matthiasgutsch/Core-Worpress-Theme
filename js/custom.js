/* 
 * INIT All Front End
 *
 * How to use:
 * - Create functions for each initialisation
 *    required and plug the function into the
 *    below init_Frontend function which you
 *    can call on load and any other time
 *    (eg. upon an Ajax load)
 */
/* ========================================== */
function init_Frontend($) {
    init_Superfish($);
    init_OffCanvasMenu($);
    init_CustomSelect($);
    init_Colorbox($);
    init_Tooltips($);
    init_FlexSlider($);
}

jQuery(document).ready(function ($) {
    init_Frontend($);
});


/* Superfish */
/* ========================================== */
function init_Superfish($) {
    var sfOptions = {
      popUpSelector: 'ul, .sf-mega',
      speed: 'normal',
      speedOut: 'normal',
      cssArrows: false,
      animation: {opacity:'show'},
    }
    var mainNav = $('#mainNav').superfish(sfOptions);
}

/* Off-Canvas menu */
/* ========================================== */
function init_OffCanvasMenu($) {
    $('#offcanv_menu').offCanvasMenu();
}

/* Custom Select Boxes */
/* ========================================== */
function init_CustomSelect($) {
    $('select').customSelect();
}


/* INIT Colourbox */
/* ========================================== */
function init_Colorbox($) {
	$('a.colorbox').colorbox();
}


/* INIT Tooltips */
/* ========================================== */
function init_Tooltips($) {
    $('.tooltip[title]').tipsy({
        fade: true, 
        gravity: 's'
    });
}


/* INIT Addthis */
/* ========================================== */
/* function init_AddThis() { addthis.init() }
   jQuery(document).ready( function(){ initAddThis(); } );
*/


/* INIT Banner */
/* ========================================== */
function init_FlexSlider($) {
	$('.flexslider').flexslider({
		animation: "slide",
		pauseOnAction: false,
		pauseOnHover: true
	});
}
