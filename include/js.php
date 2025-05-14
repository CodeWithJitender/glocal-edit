<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<!--==========counter runing open===================-->
<script src="https://cdn.jsdelivr.net/jquery.counterup/1.0/jquery.counterup.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<!--==========counter runing close===================-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
$(".counter").counterUp({
  delay: 15,
  time: 10000
});
$(".counter").addClass("animated fadeInDownBig");
$("h3").addClass("animated fadeIn");

</script>

<!--==========video open===================-->
<script>
var testVideo = document.querySelector("#testVideo");
//testVideo.currentTime = 5;

testVideo.addEventListener("timeupdate", function () {
  document.querySelector(".playButton").classList.add("hide");
  this.removeEventListener("timeupdate", arguments.callee);
  // console.log('test');
});

</script>
<!--==========video open close===================-->