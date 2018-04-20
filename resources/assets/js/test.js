require('./bootstrap');

window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});

// 3D LOGO

var logo = $(".layer1");

$(document).on("mousemove",function(e) {
  var ax = -($(window).innerWidth()/2- e.pageX)/60;
  var ay = ($(window).innerHeight()/2- e.pageY)/30;
  logo.attr("style", "transform: rotateY("+ax+"deg) rotateX("+ay+"deg);-webkit-transform: rotateY("+ax+"deg) rotateX("+ay+"deg);-moz-transform: rotateY("+ax+"deg) rotateX("+ay+"deg)");
});

// TYPEWRITER FUNCTION

var typingText = function(el, toRotate, period) {
      this.toRotate = toRotate;
      this.el = el;
      this.loopNum = 0;
//---------period of wait before deleting and typing || 2000?
      this.period = parseInt(period, 10);
//---------made the default entry blank
      this.text = '';
      this.tick();
      this.isDeleting = false;
  };

  typingText.prototype.tick = function() {
      var i = this.loopNum % this.toRotate.length;
      var fulltext = this.toRotate[i];
//---------amount of characters are affected at a time/want 1 character per action
//---------also when the code adds and subtracts
      if (this.isDeleting) {
      this.text = fulltext.substring(0, this.text.length - 1);
      } else {
      this.text = fulltext.substring(0, this.text.length + 1);
      }

      this.el.innerHTML = '<h2 class="typewrite" style="margin:0px 0px;">I am a<h2 style="margin:0px 0px;">$( ' + this.text + ' );</h2><h2><i class="fas fa-map-marker-alt"></i> - Calgary, AB - 51.0486° N, 114.0708° W</h2>';


      var that = this;
//---------speed of typing(bigger number longer type time)
      var delta = 200 - Math.random() * 100;
// ---------speed of deletion, set it to half the typing speed
      if (this.isDeleting) { delta /= 2; }


      if (!this.isDeleting && this.text === fulltext) {
      delta = this.period;
      this.isDeleting = true;
      } else if (this.isDeleting && this.text === '') {
      this.isDeleting = false;
      this.loopNum++;
      delta = 500;
      }

      setTimeout(function() {
      that.tick();
      }, delta);
  };

  window.onload = function() {
      var elements = document.getElementsByClassName('typewriter');

      for (var i=0; i<elements.length; i++) {
          var toRotate = elements[i].getAttribute('data-type');
          var period = elements[i].getAttribute('data-period');
          if (toRotate) {
            new typingText(elements[i], JSON.parse(toRotate), period);
          }
      }

      document.createElement("style").type = "text/css";
      document.body.appendChild(document.createElement("style"));
  };

// PARALLAX BACKGROUNDS

var ticking = false;
var isFirefox = (/Firefox/i.test(navigator.userAgent));
var isIe = (/MSIE/i.test(navigator.userAgent)) || (/Trident.*rv\:11\./i.test(navigator.userAgent));
var scrollSensitivitySetting = 30; //Increase/decrease this number to change sensitivity to trackpad gestures (up = less sensitive; down = more sensitive)
var slideDurationSetting = 600; //Amount of time for which slide is "locked"
var currentSlideNumber = 0;
var totalSlideNumber = $(".background-projects").length;
var linkedId = 0;

var timer;
var delay = 1500;

// ------------- Determine delta/scroll direction ------------- //

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

//-------------Timout to prevent activation during scrolling----//

function slideDurationTimeout(slideDuration) {
  setTimeout(function() {
    ticking = false;
  }, slideDuration);
}

//------------Activate during scroll--------------------//

var mousewheelEvent = isFirefox ? "DOMMouseScroll" : "wheel";
window.addEventListener(mousewheelEvent, _.throttle(parallaxScroll, 60), false);

function nextItem() {
  var $previousSlide = $(".background-projects").eq(currentSlideNumber - 1);
  $previousSlide.removeClass("up-scroll").addClass("down-scroll");
  var linkedId = currentSlideNumber + 1;
  $('#n' + linkedId).focus();
}

function previousItem() {
  var $currentSlide = $(".background-projects").eq(currentSlideNumber);
  $currentSlide.removeClass("down-scroll").addClass("up-scroll");
  $('#n1, #n2, #n3, #n4, #n5, #n6').blur();
  var linkedId = currentSlideNumber + 1;
  $('#n' + linkedId).focus();
}

//------------Activate navigation entries on scroll/load---------//

$(document).ready(function() {
  $('#n1').focus();
});

$("#n1").click(function() {
  $("#s1, #s2, #s3, #s4, #s5").removeClass("down-scroll").removeClass("up-scroll");
  currentSlideNumber = 0;
});

$("#n2").click(function() {
  $("#s1, #s2, #s3, #s4, #s5").removeClass("down-scroll").removeClass("up-scroll");
  $("#s1").addClass("down-scroll")
  currentSlideNumber = 1;
});

$("#n3").click(function() {
  $("#s1, #s2, #s3, #s4, #s5").removeClass("down-scroll").removeClass("up-scroll");
  $("#s1, #s2").addClass("down-scroll")
  currentSlideNumber = 2;
});

$("#n4").click(function() {
  $("#s1, #s2, #s3, #s4, #s5").removeClass("down-scroll").removeClass("up-scroll");
  $("#s1, #s2, #s3").addClass("down-scroll")
  currentSlideNumber = 3;
});

$("#n5").click(function() {
  $("#s1, #s2, #s3, #s4, #s5").removeClass("down-scroll").removeClass("up-scroll");
  $("#s1, #s2, #s3, #s4").addClass("down-scroll")
  currentSlideNumber = 4;
});

// PHOTO SLIDER

(function($) {

$(document).ready(function() {

  var photo = $('.photo-slider'),
      photoWrapper = photo.find('.photo-slider-wrapper'),
      photoItem = photo.find('.photo-slider-entry'),
      navBtn = photo.find('.photo-slider-link'),
      photoWidth = photoItem.width(),
      photoCount = photoItem.length,
      photoTotalWidth = photoCount * photoWidth;

  photoWrapper.css('width', photoTotalWidth);
  photoWrapper.css('width', photoTotalWidth);

  var itemCount  = 0;

  navBtn.on('click', function(e) {
    e.preventDefault();

    if( $(this).is('#next') ) {

      ( clickCount < ( photoCount - 1 ) ) ? clickCount++ : clickCount = 0;
    } else if ( $(this).is('#prev') ) {

      ( clickCount > 0 ) ? clickCount-- : ( clickCount = photoCount - 1 );
    }
    TweenMax.to(photoWrapper, 1, {x: '-' + ( photoWidth * clickCount ) })
  });
});
})(jQuery);

// GOOGLE MAPS INTEGRATION

$(document).ready(function initMap() {
  var uluru = {lat: -51.0486, lng: -114.0708};
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 4,
    center: uluru
  });
  var marker = new google.maps.Marker({
    position: uluru,
    map: map
  });
});



// WORK IN PROGRESS code
// FLOATING CARDS FUNCTIONS

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
//     $(".wrapper-cards").mousemove(function(e) {
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
