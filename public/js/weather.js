//----------WEATHER App
//----------Clock function

$(document).ready(function () {
  var watch = document.querySelector('.watch');
  var d = new Date();
  watch.setAttribute('start-seconds', d.getSeconds());
  watch.setAttribute('start-minutes', d.getMinutes());
  watch.setAttribute('start-hours', d.getHours() > 11 ? d.getHours() - 12 : d.getHours());
})();

//---------temperature





//---------barometer

// $(document).ready(function () {
//   var barometer = document.querySelector('.barometer');
//   var d = new Date();
//   barometer.setAttribute('pressure',
// })();
