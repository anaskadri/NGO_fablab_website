// Set the date we're counting down to
var date_js = document.getElementById('date_js').value;
console.log(date_js);
var countDownDate = new Date(date_js).getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now an the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("countdown").innerHTML ="<span class='countdown-item'>"+ days + " J </span><span class='countdown-item'>" + hours + " H </span><span class='countdown-item'>"
  + minutes + " M </span><span class='countdown-item'>" + seconds + " S </span>";

  // If the count down is finished, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementsById("countdown").innerHTML = "EXPIRED";
  }
}, 1000);