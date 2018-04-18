
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});



// -------------------------




// ------------- VARIABLES ------------- //
var ticking = false;
var isFirefox = (/Firefox/i.test(navigator.userAgent));
var isIe = (/MSIE/i.test(navigator.userAgent)) || (/Trident.*rv\:11\./i.test(navigator.userAgent));
var scrollSensitivitySetting = 30; //Increase/decrease this number to change sensitivity to trackpad gestures (up = less sensitive; down = more sensitive)
var slideDurationSetting = 600; //Amount of time for which slide is "locked"
var currentSlideNumber = 0;
var totalSlideNumber = $(".background").length;
var linkedId = 0;

var timer;
var delay = 1500;


// ------------- DETERMINE DELTA/SCROLL DIRECTION ------------- //
function parallaxScroll(evt) {
  if (isFirefox) {
    //Set delta for Firefox
    delta = evt.detail * (-120);
  } else if (isIe) {
    //Set delta for IE
    delta = -evt.deltaY;
  } else {
    //Set delta for all other browsers
    delta = evt.wheelDelta;
  }

  if (ticking != true) {
    if (delta <= -scrollSensitivitySetting) {
      //Down scroll
      ticking = true;
      if (currentSlideNumber !== totalSlideNumber - 1) {
        currentSlideNumber++;
        nextItem();
      }
      slideDurationTimeout(slideDurationSetting);
    }
    if (delta >= scrollSensitivitySetting) {
      //Up scroll
      ticking = true;
      if (currentSlideNumber !== 0) {
        currentSlideNumber--;
      }
      previousItem();
      slideDurationTimeout(slideDurationSetting);
    }
  }
}

// ------------- SET TIMEOUT TO TEMPORARILY "LOCK" SLIDES ------------- //
function slideDurationTimeout(slideDuration) {
  setTimeout(function() {
    ticking = false;
  }, slideDuration);
}

// ------------- ADD EVENT LISTENER ------------- //
var mousewheelEvent = isFirefox ? "DOMMouseScroll" : "wheel";
window.addEventListener(mousewheelEvent, _.throttle(parallaxScroll, 60), false);

// ------------- SLIDE MOTION ------------- //
function nextItem() {
  var $previousSlide = $(".background").eq(currentSlideNumber - 1);
  $previousSlide.removeClass("up-scroll").addClass("down-scroll");
  var linkedId = currentSlideNumber + 1;
  $('#n' + linkedId).focus();
}

function previousItem() {
  var $currentSlide = $(".background").eq(currentSlideNumber);
  $currentSlide.removeClass("down-scroll").addClass("up-scroll");
  $('#n1, #n2, #n3, #n4, #n5, #n6').blur();
  var linkedId = currentSlideNumber + 1;
  $('#n' + linkedId).focus();
}

$(document).ready(function() {
  $('#n1').focus();
});

// ---------Slide function for mouse cards---------

// var linkId = 1;
// $('div').each(function() {
//    $(this).attr('id', 'q' + idCount);
//    idCount++;
// });

$("#n1").click(function()
{
  $("#s1, #s2, #s3, #s4, #s5").removeClass("down-scroll").removeClass("up-scroll");
  currentSlideNumber = 0;
});

$("#n2").click(function()
{
  $("#s1, #s2, #s3, #s4, #s5").removeClass("down-scroll").removeClass("up-scroll");
  $("#s1").addClass("down-scroll")
  currentSlideNumber = 1;
});

$("#n3").click(function()
{
  $("#s1, #s2, #s3, #s4, #s5").removeClass("down-scroll").removeClass("up-scroll");
  $("#s1, #s2").addClass("down-scroll")
  currentSlideNumber = 2;
});

$("#n4").click(function()
{
  $("#s1, #s2, #s3, #s4, #s5").removeClass("down-scroll").removeClass("up-scroll");
  $("#s1, #s2, #s3").addClass("down-scroll")
  currentSlideNumber = 3;
});

$("#n5").click(function()
{
  $("#s1, #s2, #s3, #s4, #s5").removeClass("down-scroll").removeClass("up-scroll");
  $("#s1, #s2, #s3, #s4").addClass("down-scroll")
  currentSlideNumber = 4;
});

// document.getElementById("#r2").onclick = previousItem;

//--------------Mouse movement fucntion-------//
// function mouseMoveEnableFun(cl) {
//   $(cl).mousemove(function(e) {
//     parallax(e, document.getElementById('a1'), 1);
//     parallax(e, document.getElementById('b1'), 2);
//     parallax(e, document.getElementById('c1'), 3);
//
//   });
// }
//
// function mouseMoveDisableFun(cl) {
//   $(cl).mousemove(function(e) {
//   });
// }
// $("#b1").hover(function(){
// var cubes = $(document).ready(function() {
//     $(".paraWrapper").mousemove(function(e) {
//       parallax(e, document.getElementById('a1'), 1);
//       parallax(e, document.getElementById('b1'), 2);
//       parallax(e, document.getElementById('c1'), 3);
//       parallax(e, document.getElementById('a2'), 1);
//       parallax(e, document.getElementById('b2'), 2);
//       parallax(e, document.getElementById('c2'), 3);
//       parallax(e, document.getElementById('a3'), 1);
//       parallax(e, document.getElementById('b3'), 2);
//       parallax(e, document.getElementById('c3'), 3);
//       parallax(e, document.getElementById('a4'), 1);
//       parallax(e, document.getElementById('b4'), 2);
//       parallax(e, document.getElementById('c4'), 3);
//       parallax(e, document.getElementById('a5'), 1);
//       parallax(e, document.getElementById('b5'), 2);
//       parallax(e, document.getElementById('c5'), 3);
//       parallax(e, document.getElementById('a6'), 1);
//       parallax(e, document.getElementById('b6'), 2);
//       parallax(e, document.getElementById('c6'), 3);
//       parallax(e, document.getElementById('a7'), 1);
//       parallax(e, document.getElementById('b7'), 2);
//       parallax(e, document.getElementById('c7'), 3);
//       parallax(e, document.getElementById('a8'), 1);
//       parallax(e, document.getElementById('b8'), 2);
//       parallax(e, document.getElementById('c8'), 3);
//     });
// });


  //   $("div[id='b2']").mousemove(function(e) {
  //     parallax(e, document.getElementById('c2'), 1);
  //   });
  //   $("div[id='b3']").mousemove(function(e) {
  //     parallax(e, document.getElementById('c3'), 1);
  //   });
  //
  // }, delay);
  // });

// function parallax(e, target, layer) {
// 	var strength = 40;
// 	var layer_coeff = strength / layer;
// 	var x = ($(window).width() - target.offsetWidth) / 5 - (e.pageX - ($(window).width() / 4)) / layer_coeff;
// 	var y = ($(window).height() - target.offsetHeight) / 2 - (e.pageY - ($(window).height() / 2)) / layer_coeff;
// 	$(target).offset({
// 		top: y,
// 		left: x
// 	});
// };


// --------------------------------------


var TxtType = function(el, toRotate, period) {
		        this.toRotate = toRotate;
		        this.el = el;


		        this.loopNum = 0;

//---------period of wait before deleting and typing || 2000?
		        this.period = parseInt(period, 10);
//---------sets default to blank
		        this.txt = '';

		        this.tick();
		        this.isDeleting = false;
		    };

		    TxtType.prototype.tick = function() {
		        var i = this.loopNum % this.toRotate.length;
		        var fullTxt = this.toRotate[i];

//------------------amount of characters are affected at a time/want 1 character per action
//--------------also when the code adds and subtracts
//---------this is deleting false
		        if (this.isDeleting) {
		        this.txt = fullTxt.substring(0, this.txt.length - 1);
		        } else {
		        this.txt = fullTxt.substring(0, this.txt.length + 1);
		        }


//-------------------inject code into html doc
		        this.el.innerHTML = '<h2 class="typewrite" style="margin:0px 0px;">I am a<h2 style="margin:0px 0px;">$( ' + this.txt + ' );</h2><h2>based in Calgary, AB</h2>';


		        var that = this;

//-------------speed of typing(bigger number longer type time)
		        var delta = 200 - Math.random() * 100;




// ---------speed of deletion half of type speed
		        if (this.isDeleting) { delta /= 2; }


		        if (!this.isDeleting && this.txt === fullTxt) {
		        delta = this.period;
		        this.isDeleting = true;
		        } else if (this.isDeleting && this.txt === '') {
		        this.isDeleting = false;
		        this.loopNum++;
		        delta = 500;
		        }

		        setTimeout(function() {
		        that.tick();
		        }, delta);
		    };


//--------------loads the function upon document load
		    window.onload = function() {
		        var elements = document.getElementsByClassName('textswap');

		        for (var i=0; i<elements.length; i++) {
		            var toRotate = elements[i].getAttribute('data-type');
		            var period = elements[i].getAttribute('data-period');
		            if (toRotate) {
		              new TxtType(elements[i], JSON.parse(toRotate), period);
		            }
		        }
//----------------INJECT CSS
		        // var css = document.createElement("style");
		        // css.type = "text/css";
		        // css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
		        // document.body.appendChild(css);
						//

						document.createElement("style").type = "text/css";						document.body.appendChild(document.createElement("style"));
		    };



//-----------------------3D logo

var card = $(".card");

$(document).on("mousemove",function(e) {
  var ax = -($(window).innerWidth()/2- e.pageX)/60;
  var ay = ($(window).innerHeight()/2- e.pageY)/30;
  card.attr("style", "transform: rotateY("+ax+"deg) rotateX("+ay+"deg);-webkit-transform: rotateY("+ax+"deg) rotateX("+ay+"deg);-moz-transform: rotateY("+ax+"deg) rotateX("+ay+"deg)");
});



//------------------image slider

( function($) {

  $(document).ready(function() {

    var s           = $('.photo-slider'),
        sWrapper    = s.find('.photo-slider-wrapper'),
        sItem       = s.find('.photo-slider-entry'),
        btn         = s.find('.photo-slider-link'),
        sWidth      = sItem.width(),
        sCount      = sItem.length,
        sTotalWidth = sCount * sWidth;

    sWrapper.css('width', sTotalWidth);
    sWrapper.css('width', sTotalWidth);

    var clickCount  = 0;

    btn.on('click', function(e) {
      e.preventDefault();

      if( $(this).is('#next') ) {

        ( clickCount < ( sCount - 1 ) ) ? clickCount++ : clickCount = 0;
      } else if ( $(this).is('#prev') ) {

        ( clickCount > 0 ) ? clickCount-- : ( clickCount = sCount - 1 );
      }
      TweenMax.to(sWrapper, 1, {x: '-' + ( sWidth * clickCount ) })
    });

  });
})(jQuery);
