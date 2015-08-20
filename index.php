<!-- Website by Debashis Barman (http://www.debashisbarman.in) -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="">
<meta name="keywords" content=""/>
<title>Welcome to Official Website of Prajyukttam 2015 | Towards Infinity ...</title>
<link rel="stylesheet" type="text/css" href="css/kathamo/kathamo.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome-4.2.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/jquery.jscrollpane.css">
<link rel="stylesheet" type="text/css" href="css/magnific-popup.css"> 
<!--link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,500">
<!--link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Didact+Gothic:400"-->
<script type="text/javascript" src="js/jquery1.8.2.js"></script>
<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
<script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
<script type="text/javascript" src="js/smoothscroll.js"></script>
<style>

@font-face {
  font-family: 'MarkWebPro Light';
  src:  url('css/font/MarkWebPro-Light.woff') format('woff');
}

@font-face {
  font-family: 'MarkWebPro Extra Light';
  src:  url('css/font/MarkWebPro-ExtraLight.woff') format('woff');
}


body {
  font-family: "MarkWebPro Light", sans-serif;
  font-size: 13px; 
  color: #b8b8b8;
  background-color: #000; 
}

@media (max-width:767px) {

  body {
    text-align: justify;
  }

}

h1,
h2,
h3,
h4,
h5,
h6 {
  font-family: "MarkWebPro Extra Light", sans-serif;
  font-weight: 300;
  line-height: 1;
}

p {
  font-family: "MarkWebPro Light", sans-serif;
  font-size: 13px;
  font-weight: 400;
}

.button {
  width: auto;
  margin-top: 21px;
  padding-top: 21px;
  padding-right: 34px;
  padding-bottom: 21px;
  padding-left: 34px;
  font-size: 13px;
  font-weight: bold;
  !color: #33ccff;
  text-transform: uppercase;
  !border: 2px solid #33ccff;
  border: 2px solid #b8b8b8;
  border-radius: 50px;
}

.button a:hover {
  color: #b8b8b8;
  background-color: transparent;
}

a {
  color: inherit;
}

a:hover {
  !color: #33ccff;
  color: #ffff99;
}

hr {
  border-top-color: #404040;
}

/* Vertical Center */
.vertical-center-wrapper {
  width: 100%;
  height: 100%;
  display: table;
}

.vertical-center {
  width: 100%;
  display: table-cell;
  vertical-align: middle;
}

.container-fluid {
  width: 100%;
  display: border-box;
}

/* SVG Icons */

.svg-icon {
  width: 21px;
  height: 30px;
  padding-top: 5px;
  margin-right: -8px;
  margin-bottom: -8px;
}

.svg-icon path,
.svg-icon polygon,
.svg-icon rect {
  fill: #b8b8b8;
}

.svg-icon circle {
  stroke: #b8b8b8;
  stroke-width: 1;
}

/* Isotop */
.isotope-item {
  z-index: 2;
}
 
.isotope-hidden.isotope-item {
  pointer-events: none;
  z-index: 1;
}

.isotope,
.isotope .isotope-item {
  -webkit-transition-duration: 0.8s;
     -moz-transition-duration: 0.8s;
          transition-duration: 0.8s;
}
 
.isotope {
  -webkit-transition-property: height, width;
     -moz-transition-property: height, width;
          transition-property: height, width;
}
 
.isotope .isotope-item {
  -webkit-transition-property: -webkit-transform, opacity;
     -moz-transition-property:    -moz-transform, opacity;
          transition-property:         transform, opacity;
}

/* Header */
header {
  height: 100vh;
  padding-top: 21px;
  padding-right: 34px;
  padding-bottom: 34px;
  padding-left: 34px;
}

@media (max-width:767px) {

  header {
    height: auto;
    padding-top: 13px;
    padding-right: 13px;
    padding-bottom: 0;
    padding-left: 13px;
    background: linear-gradient(rgba(8, 8, 8, 0.70), rgba(16, 16, 16, 1)), url(images/bg.png);
    background-size: 100%;
    background-repeat: no-repeat;
    background-position: right top;
  }

  .header-inner {
    padding: 13px;
    border-top: 2px solid #404040;
    border-right: 2px solid #404040;
    border-left: 2px solid #404040;
  }

}

@media (min-width: 768px) and (max-width: 1023px) {

  header {
    height: 610px; 
  }

}

.title {
  top: 21px;
  right: 34px;
  left: 34px;
  position: absolute;
  z-index: 500;
  font-size: 13px;
  font-weight: 500;
  letter-spacing: 5px;
  text-transform: uppercase;
}

.subtitle {
  font-size: 13px;
  font-weight: bold;
  text-transform: uppercase;
}

@media (max-width:767px) {

  .subtitle {
    font-weight: bold;
    text-transform: uppercase;
  }

}

.page-header {
  font-size: 8vh;
  font-weight: 300;
  line-height: 1.2;
  text-transform: capitalize; 
}

@media (max-width:767px) {

  .page-header {
    font-size: 34px;
    line-height: 1.5;
    !text-transform: uppercase;
  }

  .page-header small {
    !display: none;
  }

}

@media (min-width: 768px) and (max-width: 1023px) {

  .page-header {
    font-size: 40px;
    line-height: 1.5;
    !text-transform: uppercase;
  }

  .page-header small {
    !display: none;
  }

}

.countdown-timer {
  letter-spacing: normal;
}

/* Events */
main {
  padding-top: 34px;
  padding-right: 34px;
  padding-bottom: 89px;
  padding-left: 34px;
}

.events {
  height: 800px;
  overflow-y: auto;
}

nav.primary {
  height: auto;
  padding-right: 8px;
  padding-bottom: 89px;
  background-color: transparent;
  border-right: 1px solid #404040;
}

nav.primary li {
  width: 100%;
  clear: both;
  font-size: 13px;
  line-height: 42px;
  text-transform: uppercase;
  background-color: transparent;
}

nav.primary li a:hover {
  color: #ffff99;
}

nav.primary li a.selected {
  !margin-right: -44px;
  padding-right: 13px;
  !color: #33ccff;
  color: #ffff99;
  !border-right: 2px solid #33ccff;
  border-right: 2px solid #ffff99;
}

.club {
  width: 31.33%;
  padding-top: 13px;
  padding-bottom: 21px;
  padding-left: 34px;
  box-sizing: border-box;
  float: left;
}

@media (min-width: 768px) and (max-width: 1023px) {

  .club {
    width: 91%; 
  }

}

.club-events {
  padding: 34px;
  height: 233px;
  background-color: rgba(21, 21, 21, 0.5); 
  cursor: pointer;
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
  border: 1px solid #404040;
}

.club-events:hover {
  background-color: rgba(34, 34, 34, 0.7);
  box-shadow: 0px 4px 3px rgba(0,0,0,0.4), 0px 8px 13px rgba(0,0,0,0.1), 0px 18px 23px rgba(0,0,0,0.1);
}

.event-title {
  padding: 5px;
  font-weight: 500;
  -webkit-transition: all .2s linear;
          transition: all .2s linear;
}

.club-events:hover .event-title {
  color: #ffff99;
  !font-size: 21px;
}

.event-title-bg {
  padding: 13px;
  background-color: rgba(21, 21, 21, 0.8);
  border: 1px solid #404040;
}
  
/* Mobile */
@media (max-width:767px) {
 
  .mobile {
    padding-top: 0;
    padding-right: 13px;
    padding-bottom: 0;
    padding-left: 13px;
    background-color: #0c0c0c;
  }

  .mobile-inner {
    padding: 13px;
    border-right: 2px solid #404040;
    border-left: 2px solid #404040;
  }
  
  .mobile-button {
    padding: 13px;
    font-weight: bold;
    text-transform: uppercase;
    border: 2px solid #404040;
  }

  .event-title {
    font-size: 4vh;
    font-weight: bold;
    text-transform: uppercase;
  }

  .event-table,
  .event-table * {
    padding: 0;
    border: none;
    background-color: transparent;
  }
 
  .event-table tr {
    border-top: 1px solid #202020;
    border-bottom: 1px solid #202020;
  }

  .event-table td {
    padding-top: 8px;
    padding-right: 8px;
    padding-bottom: 8px;
  }

}


/* Footer */
footer {
  padding-top: 34px;
  padding-right: 34px;
  padding-bottom: 21px;
  padding-left: 34px;
  color: #707070;
  background-color: rgba(0,0,0,1);
}

@media (max-width:767px) {
 
  footer {
    padding-top: 0;
    padding-right: 13px;
    padding-bottom: 13px;
    padding-left: 13px;
  }

  .footer-inner {
    padding: 13px;
    border-right: 2px solid #404040;
    border-bottom: 2px solid #404040;
    border-left: 2px solid #404040;
  }

}

.li-inline {
  padding-left: 0;
}

.icons li:last-child {
  padding-right: 0;
}

.icons a:hover {
  color: #b8b8b8;
}

</style>

<style>

/* Loading */
div#load_screen{
  background: #000;
  opacity: 1;
  position: fixed;
  z-index: 600;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
}

.loader:before,
.loader:after,
.loader {
  border-radius: 50%;
  width: 13px;
  height: 13px;
  -webkit-animation-fill-mode: both;
          animation-fill-mode: both;
  -webkit-animation: load 1.8s infinite ease-in-out;
          animation: load 1.8s infinite ease-in-out;
}
.loader {
  font-size: 10px;
  margin: 80px auto;
  position: relative;
  text-indent: -9999em;
  -webkit-transform: translateZ(0);
      -ms-transform: translateZ(0);
          transform: translateZ(0);
  -webkit-animation-delay: -0.16s;
          animation-delay: -0.16s;
}
.loader:before {
  left: -3.5em;
  -webkit-animation-delay: -0.32s;
          animation-delay: -0.32s;
}
.loader:after {
  left: 3.5em;
}
.loader:before,
.loader:after {
  content: '';
  position: absolute;
  top: 0;
}

@-webkit-keyframes load {
  0%,
  80%,
  100% {
    box-shadow: 0 2.5em 0 -1.3em #404040;
  }
  40% {
    box-shadow: 0 2.5em 0 0 #404040;
  }
}
@keyframes load {
  0%,
  80%,
  100% {
    box-shadow: 0 2.5em 0 -1.3em #404040;
  }
  40% {
    box-shadow: 0 2.5em 0 0 #404040;
  }
}


</style>

<style>

@keyframes move-twink-back {

  from {
    background-position: 0 0;
  }

  to { 
    background-position: -10000px 5000px;
  }

}

@-webkit-keyframes move-twink-back {

  from {
    background-position: 0 0;
  }

  to {
    background-position: -10000px 5000px;
  }

}
@-moz-keyframes move-twink-back {

  from {
    background-position: 0 0;
  }

  to {
    background-position: -10000px 5000px;
  }

}

@-ms-keyframes move-twink-back {

  from {
    background-position: 0 0;
  }

  to {
    background-position: -10000px 5000px;
  }

}

@keyframes move-clouds-back {

  from {
    background-position: 0 0;
  }

  to {
    background-position: 10000px 0;
  }

}

@-webkit-keyframes move-clouds-back {

  from {
    background-position: 0 0;
  }
  
  to {
    background-position: 10000px 0;
  }

}

@-moz-keyframes move-clouds-back {

  from {
    background-position: 0 0;
  }

  to {
    background-position: 10000px 0;
  }

}

@-ms-keyframes move-clouds-back {

  from {
    background-position: 0;
  }

  to {
    background-position: 10000px 0;
  }

}

.stars, 
.twinkling {
  position:absolute;
  top:0;
  left:0;
  right:0;
  bottom:0;
  width:100%;
  !height:1831px;
  display:block;
}

.clouds {
  position:absolute;
  top:0;
  left:0;
  right:0;
  bottom:0;
  width:100%;
  height:100%;
  display:block;
}

@media (min-width: 768px) and (max-width: 1023px) {

  .clouds {
    height: 610px; 
  }

}

.stars {
  z-index:-3;
  background:#000 url(images/stars.png) repeat top center;
}

.twinkling{
  z-index:-2;
  background:transparent url(images/twinkling.png) repeat top center;
  -webkit-animation:move-twink-back 200s linear infinite;
     -moz-animation:move-twink-back 200s linear infinite;
      -ms-animation:move-twink-back 200s linear infinite;
       -o-animation:move-twink-back 200s linear infinite;
          animation:move-twink-back 200s linear infinite;
}

.clouds{
  z-index:0;
  background:transparent url(images/clouds.png) repeat top center;
  -webkit-animation:move-clouds-back 200s linear infinite;
     -moz-animation:move-clouds-back 200s linear infinite;
      -ms-animation:move-clouds-back 200s linear infinite;
       -o-animation:move-clouds-back 200s linear infinite;
          animation:move-clouds-back 200s linear infinite;
}

</style>

<style>

.modal-wrapper {
  width:auto;
  max-width: 55%;
  height: auto;
  margin-top: 21px;
  margin-right: auto;
  margin-bottom: 21px;
  margin-left: auto;
  padding: 8px;
  position: relative;
  background: #010101;
}

@media (min-width: 768px) and (max-width: 1023px) {

  .modal-wrapper {
    max-width: 89%; 
  }

}

.modal {
  width:auto;
  max-width: 100%;
  height: auto;
  padding: 21px;
  border: 1px solid #404040;
}

</style>

</head>
<body>
<div id="load_screen">
<div class="vertical-center-wrapper">
<div class="vertical-center">
<div class="loader">Loading...</div>
</div>
</div>
</div>

<div class="container-fluid">

<!-- Background Animation Starts -->
<span class="hidden-sm">
<div class="stars" id="stars-height"></div>
<div class="twinkling" id="twinkling-height"></div>
<div class="clouds"></div>
</span>
<!-- Background Animation Ends -->

<div class="body-wrapper">
<!-- Header Starts -->
<header class="hidden-sm">
<h1 class="title hidden-sm"><strong>Prajyukttam</strong><span class="pull-right" id="countdown"></span><!--a href="#more-information-modal" class="open-more-information fa fa-ellipsis-v"></a-->
<script type="text/javascript">
var target_date = new Date("Sep 10, 2015").getTime();
 
var days, hours, minutes, seconds;
 
var countdown = document.getElementById("countdown");
 
setInterval(function () {
 
    var current_date = new Date().getTime();
    var seconds_left = (target_date - current_date) / 1000;
 
    days = parseInt(seconds_left / 86400);
    seconds_left = seconds_left % 86400;
     
    hours = parseInt(seconds_left / 3600);
    seconds_left = seconds_left % 3600;
     
    minutes = parseInt(seconds_left / 60);
    seconds = parseInt(seconds_left % 60);
     
    countdown.innerHTML = "<strong class=\"countdown-timer\">" + days + "d : " + hours + "h : "
    + minutes + "m : " + seconds + "s to 10/09</strong>";  
 
}, 1000);

</script>
</h1>
<div class="vertical-center-wrapper">
<div class="vertical-center">
<div class="col-lg-offset-2 col-lg-5 col-md-offset-2 col-md-6 col-sm-12">
<h1 class="page-header hidden-sm"><strong>Prajyukttam 2015</strong> <small>towards infinity ...</small></h1>
<p class="hidden-sm" style="font-size:14px">Assam Don Bosco University, School of Technology welcomes over 1500+ students from about 25+ technical colleges and schools to its tech fest, <strong>Prajyukttam 2015</strong>, starting from <strong>10 September, 2015</strong>.</p>
<br>
<p class="hidden-sm"><span class="button"><a class="smoothScroll" href="#events"> <!-- onclick="exploreGuide()" -->Explore the Events <svg class="svg-icon" viewBox="0 0 20 20"><path fill="none" d="M11.611,10.049l-4.76-4.873c-0.303-0.31-0.297-0.804,0.012-1.105c0.309-0.304,0.803-0.293,1.105,0.012l5.306,5.433c0.304,0.31,0.296,0.805-0.012,1.105L7.83,15.928c-0.152,0.148-0.35,0.223-0.547,0.223c-0.203,0-0.406-0.08-0.559-0.236c-0.303-0.309-0.295-0.803,0.012-1.104L11.611,10.049z"></path></svg></a></span></p>
</div>
</div>
</div>
</header>
<header class="visible-sm clearfix">
<a name="mobile-top"></a>
<div class="header-inner visible-sm clearfix">
<div class="col-lg-offset-2 col-lg-5 col-md-offset-2 col-md-6 col-sm-12">
<h1 class="page-header">Prajyukttam 2015</h1>
<h1><small>Towards Infinity ...</small></h1>
<p>Assam Don Bosco University, School of Technology welcomes over 1500+ students from about 25+ technical colleges and schools to its tech fest, <strong>Prajyukttam 2015</strong>, starting from <strong>10 September, 2015</strong>.</p>

<p>20+ events and activities of all types and levels of technical experience will be coordinated and participants will have the opportunity to try out their skills and creativity during the fiesta.</p>

<p>About 60% increase in participation from all the major technical colleges and also from the students from different high schools has been projected based upon our record of participants and feedbacks of the last 4 years.</p>

<p><a class="subtitle smoothScroll" href="#mobile-events"> <!-- onclick="exploreGuide()" -->Explore the Events <svg class="svg-icon" viewBox="0 0 20 20"><path fill="none" d="M11.611,10.049l-4.76-4.873c-0.303-0.31-0.297-0.804,0.012-1.105c0.309-0.304,0.803-0.293,1.105,0.012l5.306,5.433c0.304,0.31,0.296,0.805-0.012,1.105L7.83,15.928c-0.152,0.148-0.35,0.223-0.547,0.223c-0.203,0-0.406-0.08-0.559-0.236c-0.303-0.309-0.295-0.803,0.012-1.104L11.611,10.049z"></path></svg></a></p>
</div>
</div>
</header>
<!-- Header Ends -->

<!-- Main Starts -->
<main class="clearfix hidden-sm" id="all-events">
<a name="events"></a>
<h1>Events</h1>
<hr>
<nav class="primary clearfix col-lg-2 col-md-4 col-sm-12 text-right hidden-sm">
<ul>
<li><a href="#" class="selected" data-filter="*">All Events</a></li>
<li><a href="#" data-filter=".basic-science">Basic Science</a></li>
<li><a href="#" data-filter=".circuitronics">Circuitronics</a></li>
<li><a href="#" data-filter=".civil">Civil</a></li>
<li><a href="#" data-filter=".coding">Coding</a></li>
<li><a href="#" data-filter=".debate">Debate</a></li>
<li><a href="#" data-filter=".gaming">Gaming</a></li>
<li><a href="#" data-filter=".marathon">Marathon</a></li>
<li><a href="#" data-filter=".mechanical">Mechanical</a></li>
<li><a href="#" data-filter=".robotics">Robotics</a></li>
<li><a href="#" data-filter=".web-designing">Web Designing</a></li>
</ul>
</nav>

<section class="main col-lg-10 col-md-8 col-sm-12">
<div class="events">
<div class="all-events">         
<article class="club robotics">
<a href="#auto-drive-modal" class="open-auto-drive">
<div class="club-events" style="background-image:url('images/autodrive.png')">
<div class="vertical-center-wrapper">
<div class="vertical-center text-center">
<h3 class="event-title"><span class="event-title-bg">Auto Drive</span></h3>
</div>
</div>
</div>
</a>
</article>
<article class="club debate">
<div class="club-events" style="background-image:url('images/bosquiz.png')">
<div class="vertical-center-wrapper">
<div class="vertical-center text-center">
<h3 class="event-title"><span class="event-title-bg">Bosquiz</span></h3>
</div>
</div>
</div>
</article>
<article class="club mechanical">
<a href="#cad-design-modal" class="open-cad-design">
<div class="club-events" style="background-image:url('images/caddesign.png')">
<div class="vertical-center-wrapper">
<div class="vertical-center text-center">
<h3 class="event-title"><span class="event-title-bg">CAD Design</span></h3>
</div>
</div>
</div>
</a>
</article>
<article class="club circuitronics">
<a href="#circuit-debugging-modal" class="open-circuit-debugging">
<div class="club-events" style="background-image:url('images/circuitdebugging.png')">
<div class="vertical-center-wrapper">
<div class="vertical-center text-center">
<h3 class="event-title"><span class="event-title-bg">Circuit Debugging</span></h3>
</div>
</div>
</div>
</a>
</article>
<article class="club civil">
<a href="#constro-dfice-modal" class="open-constro-dfice">
<div class="club-events" style="background-image:url('images/constrodfice.png')">
<div class="vertical-center-wrapper">
<div class="vertical-center text-center">
<h3 class="event-title"><span class="event-title-bg">Constro D'fice</span></h3>
</div>
</div>
</div>
</a>
</article>
<article class="club gaming">
<a href="#counter-strike-modal" class="open-counter-strike">
<div class="club-events" style="background-image:url('images/counterstrike.png')">
<div class="vertical-center-wrapper">
<div class="vertical-center text-center">
<h3 class="event-title"><span class="event-title-bg">Counter Strike 1.6</span></h3>
</div>
</div>
</div>
</a>
</article>
<article class="club web-designing">
<a href="#design-creator-modal" class="open-design-creator">
<div class="club-events" style="background-image:url('images/designcreator.png')">
<div class="vertical-center-wrapper">
<div class="vertical-center text-center">
<h3 class="event-title"><span class="event-title-bg">Design Creator</span></h3>
</div>
</div>
</div>
</a>
</article>
<article class="club civil">
<a href="#dream-planner-modal" class="open-dream-planner">
<div class="club-events" style="background-image:url('images/dreamplanner.png')">
<div class="vertical-center-wrapper">
<div class="vertical-center text-center">
<h3 class="event-title"><span class="event-title-bg">Dream Planner</span></h3>
</div>
</div>
</div>
</a>
</article>
<article class="club basic-science">
<a href="#extempore-speech-modal" class="open-extempore-speech">
<div class="club-events" style="background-image:url('images/extemporespeech.png')">
<div class="vertical-center-wrapper">
<div class="vertical-center text-center">
<h3 class="event-title"><span class="event-title-bg">Extempore Speech</span></h3>
</div>
</div>
</div>
</a>
</article>
<article class="club gaming">
<a href="#fifa-modal" class="open-fifa">
<div class="club-events" style="background-image:url('images/fifa.png')">
<div class="vertical-center-wrapper">
<div class="vertical-center text-center">
<h3 class="event-title"><span class="event-title-bg">FIFA 11</span></h3>
</div>
</div>
</div>
</a>
</article>
<article class="club coding">
<a href="#geeks-arena-modal" class="open-geeks-arena">
<div class="club-events" style="background-image:url('images/geeksarena.png')">
<div class="vertical-center-wrapper">
<div class="vertical-center text-center">
<h3 class="event-title"><span class="event-title-bg">Geek's Arena</span></h3>
</div>
</div>
</div>
</a>
</article>
<article class="club debate">
<div class="club-events">
<div class="vertical-center-wrapper">
<div class="vertical-center text-center">
<h3 class="event-title"><span class="event-title-bg">Inter College Debate</span></h3>
</div>
</div>
</div>
</article>
<article class="club coding">
<a href="#kryptocism-modal" class="open-kryptocism">
<div class="club-events" style="background-image:url('images/kryptocism.png')">
<div class="vertical-center-wrapper">
<div class="vertical-center text-center">
<h3 class="event-title"><span class="event-title-bg">Kryptocism</span></h3>
</div>
</div>
</div>
</a>
</article>
<article class="club circuitronics">
<a href="#labyrinth-modal" class="open-labyrinth">
<div class="club-events" style="background-image:url('images/labyrinth.png')">
<div class="vertical-center-wrapper">
<div class="vertical-center text-center">
<h3 class="event-title"><span class="event-title-bg">Labyrinth</span></h3>
</div>
</div>
</div>
</a>
</article>
<article class="club civil">
<a href="#lens-and-slide-modal" class="open-lens-and-slide">
<div class="club-events" style="background-image:url('images/lens&camera.png')">
<div class="vertical-center-wrapper">
<div class="vertical-center text-center">
<h3 class="event-title"><span class="event-title-bg">Lens & Slide</span></h3>
</div>
</div>
</div>
</a>
</article>
<article class="club gaming">
<a href="#need-for-speed-modal" class="open-need-for-speed">
<div class="club-events">
<div class="vertical-center-wrapper">
<div class="vertical-center text-center">
<h3 class="event-title"><span class="event-title-bg">Need For Speed</span></h3>
</div>
</div>
</div>
</a>
</article>
<article class="club robotics">
<a href="#off-road-drive-modal" class="open-off-road-drive">
<div class="club-events" style="background-image:url('images/offroaddrive.png')">
<div class="vertical-center-wrapper">
<div class="vertical-center text-center">
<h3 class="event-title"><span class="event-title-bg">Off Road Challenge</span></h3>
</div>
</div>
</div>
</a>
</article>
<article class="club basic-science">
<a href="#paper-presentation-modal" class="open-paper-presentation">
<div class="club-events" style="background-image:url('images/paperpresentation.png')">
<div class="vertical-center-wrapper">
<div class="vertical-center text-center">
<h3 class="event-title"><span class="event-title-bg">Paper Presentation</span></h3>
</div>
</div>
</div>
</a>
</article>
<article class="club web-designing">
<a href="#riddle-snipper-modal" class="open-riddle-snipper">
<div class="club-events" style="background-image:url('images/riddlesnipper.png')">
<div class="vertical-center-wrapper">
<div class="vertical-center text-center">
<h3 class="event-title"><span class="event-title-bg">Riddle Snipper</span></h3>
</div>
</div>
</div>
</a>
</article>
<article class="club gaming">
<div class="club-events">
<div class="vertical-center-wrapper">
<div class="vertical-center text-center">
<h3 class="event-title"><span class="event-title-bg">Subway Surfers</span></h3>
</div>
</div>
</div>
</article>
<article class="club marathon">
<div class="club-events" style="background-image:url('images/marathon.png')">
<div class="vertical-center-wrapper">
<div class="vertical-center text-center">
<h3 class="event-title"><span class="event-title-bg">Technodash</span></h3>
</div>
</div>
</div>
</article> 
</div>
</div>
</section>
</main>
<!-- Main Ends -->

<!-- Mobile Starts -->
<section class="mobile visible-sm clearfix">
<a name="mobile-events"></a>
<div class="mobile-inner clearfix">
<div class="col-sm-12">
<h2 class="event-title">Events</h2>
<table class="event-table">
<tbody>
<tr>
<td>Robotics</td>
<td>Auto Drive</td>
</tr>
<tr>
<td>Debate</td>
<td>Bosquiz</td>
</tr>
<tr>
<td>Mechanical</td>
<td>CAD Design</td>
</tr>
<tr>
<td>Circuitronics</td>
<td>Circuit Debugging</td>
</tr>
<tr>
<td>Civil</td>
<td>Constro D'fice</td>
</tr>
<tr>
<td>Gaming</td>
<td>Counter Strike 1.6</td>
</tr>
<tr>
<td>Web Designing</td>
<td>Design Creator</td>
</tr>
<tr>
<td>Civil</td>
<td>Dream Planner</td>
</tr>
<tr>
<td>Basic Science</td>
<td>Extempore Speech</td>
</tr>
<tr>
<td>Gaming</td>
<td>FIFA 11</td>
</tr>
<tr>
<td>Coding</td>
<td>Geek's Arena</td>
</tr>
<tr>
<td>Debate</td>
<td>Inter College Debate</td>
</tr>
<tr>
<td>Coding</td>
<td>Kryptocism</td>
</tr>
<tr>
<td>Circuitronics</td>
<td>Labyrinth</td>
</tr>
<tr>
<td>Civil</td>
<td>Lens & Slide</td>
</tr>
<tr>
<td>Gaming</td>
<td>Need For Speed</td>
</tr>
<tr>
<td>Robotics</td>
<td>Off Road Challenge</td>
</tr>
<tr>
<td>Basic Science</td>
<td>Paper Presentation</td>
</tr>
<tr>
<td>Web Designing</td>
<td>Riddle Snipper</td>
</tr>
<tr>
<td>Gaming</td>
<td>Subway Surfers</td>
</tr>
<tr>
<td>Marathon</td>
<td>Technodash</td>
</tr>
</tbody>
</table>
</div>
</div>
</section>
</div>
<!-- Mobile Ends -->

<!-- Footer Starts -->
<footer class="hidden-sm clearfix">
<hr>
<div class="col-lg-2 col-md-3 col-sm-12">
<h1 class="subtitle"><strong>Contact</strong></h1>
<p>Want to learn more ? Or want to talk with us ? Drop a mail.</p>
<p><a href="mailto:prajyukttam@dbuniversity.ac.in">prajyukttam@dbuniversity.ac.in</a></p>
</div>
<div class="col-lg-3 col-md-4 hidden-sm">
<h1 class="subtitle">Mention</h1>
<p><a href="#team-prajyukttam-modal" class="open-team-prajyukttam">Team Prajyukttam</a><br>
<a href="http://www.dbuniversity.ac.in/" target="_blank">Assam Don Bosco University</a></p>
</div>
<div class="col-lg-7 col-md-5 col-sm-12">
<ul class="li-inline icons pull-right clearfix hidden-sm">
<li class="subtitle hidden-md"><strong>Find Us On</strong></li>
<li><a href="https://www.facebook.com/prajyukttam" target="_blank"><span class="fa fa-2x fa-facebook-square"></span></a></li>
<li><a href="https://twitter.com/prajyukttam" target="_blank"><span class="fa fa-2x fa-twitter-square"></span></a></li>
<li><span class="fa fa-2x fa-instagram"></span></li>
<li><a href="https://www.youtube.com/user/prajyukttam" target="_blank"><span class="fa fa-2x fa-youtube-square"></span></a></li>
</ul>
</div>
<div class="col-lg-12 col-md-12 hidden-sm">
<br>
<ul class="li-inline">
<li><a href="#history-modal" class="open-history">History</a></li>
<li><a href="">Sponsors</a></li>
<li><a href="">Android App</a></li>
<li><a href="#terms-modal" class="open-terms">Terms</a></li>
<li><a href="http://www.debashisbarman.in/" target="_blank">Credits</a></li>
<li>&copy; 2015 Team Prajyukttam</li>
<div class="pull-right text-right">
<li style="margin-right:0;padding-right:0;">
<?php
  $count_my_page = ("doc/visitors.txt");
  $hits = file($count_my_page);
  $hits[0] = $hits[0]+1;
  $fp = fopen($count_my_page , "w");
  fputs($fp , "$hits[0]");
  fclose($fp);
  echo "Visitors : ".$hits[0];
?>
</li>
</div>
</ul>
</div>
</footer>
<footer class="clearfix visible-sm">
<div class="footer-inner clearfix">
<div class="container-fluid">
<div class="col-sm-12">
<h1 class="subtitle"><strong>Contact</strong></h1>
<p>Want to learn more ? Or want to talk with us ? Drop a mail.</p>
<p><a href="mailto:prajyukttam@dbuniversity.ac.in">prajyukttam@dbuniversity.ac.in</a></p>
<br>
<h2 class="subtitle">Find Us On</h2>
<p>
<ul class="li-inline icons clearfix">
<li><a href="https://www.facebook.com/prajyukttam"><span class="fa fa-2x fa-facebook-square"></span></a></li>
<li><a href="https://twitter.com/prajyukttam" target="_blank"><span class="fa fa-2x fa-twitter-square"></span></a></li>
<li><span class="fa fa-2x fa-instagram"></span></li>
<li><a href="https://www.youtube.com/user/prajyukttam" target="_blank"><span class="fa fa-2x fa-youtube-square"></span></a></li>
</ul>
</p>
<br>
<h2 class="subtitle">Disclaimer</h2>
<p>You are using a mobile friendly version of the official website of Prajyukttam, 2015. For better user experience, this version is made as light and minimal as possible, excluding all event details and registration. For more features, go to the desktop version of this website.</p>
<br>
<p><a class="smoothScroll" href="#mobile-top">Back to top</a></p>
<br>
<p>&copy; 2015 Team Prajyukttam</p>
</div>
</div>
</div>
</footer>
<!-- Footer Ends -->

<!-- Modal Starts -->
<div id="more-information-modal" class="modal-wrapper mfp-hide clearfix">
<div class="modal clearfix">
<div class="col-lg-7 col-md-7 col-sm-12">
<h2><strong>Prajyukttam 2015</strong></h2>

<p>Assam Don Bosco University, School of Technology welcomes over 1500+ students from about 25+ technical colleges and schools to its tech fest, Prajyukttam 2015.</p>

<h4><strong>School of Technology</strong></h4>

<p>School of Technology is the first constituent unit of Assam Don Bosco University. So it has been successful in producing engineers and technicians with a passion for excellence, creativity and commitment to visualize and create a better and more fulfilling life for themselves and the society they work for and work with.</p>

<h4><strong>Assam Don Bosco University</strong></h4>

<p>Assam Don Bosco University is the first State Private University founded on March 29th 2008. The university was established through the Assam Don Bosco University Act, 2009 on 9 January 2009 and created under Assam Private Universities Act 2007 in the State of Assam, India.</p>

</div>

<div class="col-lg-offset-1 col-lg-4 col-lg-offset-1 col-md-4 col-sm-12">
<h4><strong>Address</strong></h4>

<p>Assam Don Bosco University<br>
Airport Road, Azara<br>
Guwahati, 781017<br>
Assam, India<p>

<h4><strong>Contact</strong></h4>
<p>+91 94 35 545754<br>
+91 361 213 9291 / 92</p>

</div>
</div>
</div>
<div id="auto-drive-modal" class="modal-wrapper mfp-hide clearfix">
<div class="modal clearfix">
<div class="col-lg-7 col-md-7 col-sm-12">
<h2><strong>Auto Drive</strong></h2>
<p>This event will be purely autonomous. The participants should
build a line following robot intelligent enough to follow the track and reach the
finishing point with least time.</p>
<h4><strong>Rules and Regulations</strong></h4>
<ol>
<li>Maximum 4 members will consist of a single team.</li>
<li>Bots must be able to follow a black line.</li>
<li>Participants are requested to bring all their necessary items.</li>
</ol>
<p><strong>Note :</strong> Certificates will be awarded to the top three winners.</p>
</div>
<div class="col-lg-offset-1 col-lg-4 col-lg-offset-1 col-md-4 col-sm-12">
<h4><strong>Organizing Club</strong></h4>
<p>Robotics Club</p>
<h4><strong>Prize Money</strong></h4>
<ol>
<li><strong>First Prize :</strong> &#8377; 6000</li>
<li><strong>Second Prize :</strong> &#8377; 4000</li>
</ol>
<h4><strong>Contact</strong></h4>
<ol>
<li></li>
<li></li>
</ol>
</div>
</div>
</div>
<div id="cad-design-modal" class="modal-wrapper mfp-hide clearfix">
<div class="modal clearfix">
<div class="col-lg-7 col-md-7 col-sm-12">
<h2><strong>CAD Design</strong></h2>
<p>This contest is based on 3D designing in AUTOCAD 2015.
Various parts of a 3D model will be shown to the participants. The participants
will need to assemble those parts and show the final product.</p>
<h4><strong>Rules and Regulations</strong></h4>
<ol>
<li>This is an individual event.</li>
<li>Maximum time allotted will be 3 hours.</li>
<li>Participants will be judged on the basis of the perfection of the model.</li>
</ol>
<p><strong>Note :</strong> Certificates will be awarded to the top three winners.</p>
</div>
<div class="col-lg-offset-1 col-lg-4 col-lg-offset-1 col-md-4 col-sm-12">
<h4><strong>Organizing Club</strong></h4>
<p>Mechanical Club</p>
<h4><strong>Prize Money</strong></h4>
<ol>
<li><strong>First Prize :</strong> &#8377; 6000</li>
<li><strong>Second Prize :</strong> &#8377; 3500</li>
</ol>
<h4><strong>Contact</strong></h4>
<ol>
<li></li>
<li></li>
</ol>
</div>
</div>
</div>
<div id="circuit-debugging-modal" class="modal-wrapper mfp-hide clearfix">
<div class="modal clearfix">
<div class="col-lg-7 col-md-7 col-sm-12">
<h2><strong>Circuit Debugging</strong></h2>
<p>This event is fully based on hardware basis. The participants will be given circuits on hardware which will compromise of many misconnections in it, which the participants need to debug it in a specific allocated time.</p>
<h4><strong>Rules and Regulations</strong></h4>
<ol>
<li>Maximum 3 members will be allowed in a group.</li>
<li>Preliminary round wil be objective Q/A. Negative marking for wrong answers. No
calculators allowed. Extra sheets for rough work will be provided.</li>
</ol>
<p><strong>Note :</strong> Certificates will be awarded to the top three winners.</p>
</div>
<div class="col-lg-offset-1 col-lg-4 col-lg-offset-1 col-md-4 col-sm-12">
<h4><strong>Organizing Club</strong></h4>
<p>Circuitronics Club</p>
<h4><strong>Prize Money</strong></h4>
<ol>
<li><strong>First Prize :</strong> &#8377; 4500</li>
<li><strong>Second Prize :</strong> &#8377; 3500</li>
</ol>
<h4><strong>Contact</strong></h4>
<ol>
<li></li>
<li></li>
</ol>
</div>
</div>
</div>
<div id="constro-dfice-modal" class="modal-wrapper mfp-hide clearfix">
<div class="modal clearfix">
<div class="col-lg-7 col-md-7 col-sm-12">
<h2><strong>Constro D'fice</strong></h2>
<p>This is a bridge building competition using ice cream sticks. The required materials for the construction of
the model will be provided by the organizers.</p>
<h4><strong>Rules and Regulations</strong></h4>
<ol>
<li>Group event consisting of 5 members each.</li>
<li>Only 20 groups will be allowed to
participate in the event. The groups will be selected on the basis of preliminary
round where each group will be subjected to set of mutiple choice question testing
their basics on civil engineering subjects.</li>
<li>The 20 groups will have to concstruct a
bridge within a specified time limit.</li>
</ol>
<p><strong>Note :</strong> Certificates will be awarded to the top three winners.</p>
</div>
<div class="col-lg-offset-1 col-lg-4 col-lg-offset-1 col-md-4 col-sm-12">
<h4><strong>Organizing Club</strong></h4>
<p>Civil Club</p>
<h4><strong>Prize Money</strong></h4>
<ol>
<li><strong>First Prize :</strong> &#8377; 6500</li>
<li><strong>Second Prize :</strong> &#8377; 4500</li>
</ol>
<h4><strong>Contact</strong></h4>
<ol>
<li></li>
<li></li>
</ol>
</div>
</div>
</div>
<div id="counter-strike-modal" class="modal-wrapper mfp-hide clearfix">
<div class="modal clearfix">
<div class="col-lg-7 col-md-7 col-sm-12">
<h2><strong>Counter Strike 1.6</strong></h2>
<p>It is a first person shooter gaming event based on Counter Strike 1.6 (P48) where two teams will compete to qualify.</p>
<h4><strong>Rules and Regulations</strong></h4>
<ol>
<li>Maximum of 5 members in each team are allowed.</li>
<li>CFG files are not allowed.</li>
<li>Krieg 552, Bullpup, D3/AU-1, Krieg 550 Commando, M249 and Shield are not allowed to use.</li>
<li>Each round will be of 2.5 mins and freeze time will be of 10 seconds.</li>
<li>From quarterfinals, Knife round will be played for choosing sides.</li>
<li>Dust II (de_dust2) will be only for preliminary round. From quarterfinals there will be map ellimination. Inferno (de_inferno),
Nuke (de_nuke) and Train (de_train) will be allowed from quarterfinals.</li>
</ol>
<p><strong>Note :</strong> Certificates will be awarded to the top three winners.</p>
</div>
<div class="col-lg-offset-1 col-lg-4 col-lg-offset-1 col-md-4 col-sm-12">
<h4><strong>Event Type</strong></h4>
<p>Gaming</p>
<h4><strong>Prize Money</strong></h4>
<ol>
<li><strong>First Prize :</strong> &#8377; 10000</li>
<li><strong>Second Prize :</strong> &#8377; 8000</li>
</ol>
<h4><strong>Contact</strong></h4>
<ol>
<li>+91 97 06 479909</li>
<li>+91 84 72 916883</li>
</ol>
</div>
</div>
</div>
<div id="design-creator-modal" class="modal-wrapper mfp-hide clearfix">
<div class="modal clearfix">
<div class="col-lg-7 col-md-7 col-sm-12">
<h2><strong>Design Creator</strong></h2>
<p>In this event participants will have to develop a website based on the given theme. The website must also have interactive features and should also have a professional look and feel.</p>
<h4><strong>Rules and Regulations</strong></h4>
<ol>
<li>Maximum of two members are allowed in a group.</li>
<li>Maximum of 2 hour will be allotted to each group.</li>
<li>Other requirements will be provided on the spot to the participants.</li>
</ol>
<p><strong>Note :</strong> Certificates will be awarded to the top three winners.</p>
</div>
<div class="col-lg-offset-1 col-lg-4 col-lg-offset-1 col-md-4 col-sm-12">
<h4><strong>Organizing Club</strong></h4>
<p>Web Designing Club</p>
<h4><strong>Prize Money</strong></h4>
<ol>
<li><strong>First Prize :</strong> &#8377; 6000</li>
<li><strong>Second Prize :</strong> &#8377; 4000</li>
</ol>
<h4><strong>Contact</strong></h4>
<ol>
<li></li>
<li></li>
</ol>
</div>
</div>
</div>
<div id="dream-planner-modal" class="modal-wrapper mfp-hide clearfix">
<div class="modal clearfix">
<div class="col-lg-7 col-md-7 col-sm-12">
<h2><strong>Dream Planner</strong></h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
Nunc semper consequat augue, a fermentum elit.
Nullam eget dictum velit. Integer luctus arcu quis nisi hendrerit sollicitudin.</p>
<h4><strong>Rules and Regulations</strong></h4>
<ol>
<li>Group event consisting of 2 members each.</li>
<li>Plot size will be provided and the
participants have to design their their dream house plan on chart papers.</li>
<li>The chart papers for each group will be provided by the organizers.</li>
</ol>
<p><strong>Note :</strong> Certificates will be awarded to the top three winners.</p>
</div>
<div class="col-lg-offset-1 col-lg-4 col-lg-offset-1 col-md-4 col-sm-12">
<h4><strong>Organizing Club</strong></h4>
<p>Civil Club</p>
<h4><strong>Prize Money</strong></h4>
<ol>
<li><strong>First Prize :</strong> &#8377; 3500</li>
<li><strong>Second Prize :</strong> &#8377; 2500</li>
</ol>
<h4><strong>Contact</strong></h4>
<ol>
<li></li>
<li></li>
</ol>
</div>
</div>
</div>
<div id="extempore-speech-modal" class="modal-wrapper mfp-hide clearfix">
<div class="modal clearfix">
<div class="col-lg-7 col-md-7 col-sm-12">
<h2><strong>Extempore Speech</strong></h2>
<p>In this competition, the participants will have to pick up a chit of paper where the topic will be written on which he/she will have to speak for the allotted time.</p>
<h4><strong>Rules and Regulations</strong></h4>
<ol>
<li>Topic will be provided on spot.</li>
<li>The time given to each participant will be 5 mins.</li>
<li>Participants cannot change the topic once
picked.</li>
</ol>
<p><strong>Note :</strong> Certificates will be awarded to the top three winners.</p>
</div>
<div class="col-lg-offset-1 col-lg-4 col-lg-offset-1 col-md-4 col-sm-12">
<h4><strong>Organizing Club</strong></h4>
<p>Basic Science Club</p>
<h4><strong>Prize Money</strong></h4>
<ol>
<li><strong>First Prize :</strong> &#8377; 3000</li>
<li><strong>Second Prize :</strong> &#8377; 2000</li>
</ol>
<h4><strong>Contact</strong></h4>
<ol>
<li></li>
<li></li>
</ol>
</div>
</div>
</div>
<div id="fifa-modal" class="modal-wrapper mfp-hide clearfix">
<div class="modal clearfix">
<div class="col-lg-7 col-md-7 col-sm-12">
<h2><strong>FIFA 11</strong></h2>
<p>It is a gaming event based on FIFA 11. In this event two players will play against one another.</p>
<h4><strong>Rules and Regulations</strong></h4>
<ol>
<li>Competition mode will be one versus one.</li>
<li>Teams allowed will be international and club.</li>
<li>Teams not allowed will be Classic XI and World XI.</li>
<li>Half time will be of 5 mins.</li>
<li>In case of draw, there will be a 2 mins of half time or penalty shootout.</li>
</ol>
<p><strong>Note :</strong> Certificates will be awarded to the top three winners.</p>
</div>
<div class="col-lg-offset-1 col-lg-4 col-lg-offset-1 col-md-4 col-sm-12">
<h4><strong>Event Type</strong></h4>
<p>Gaming</p>
<h4><strong>Prize Money</strong></h4>
<ol>
<li><strong>First Prize :</strong> &#8377; 5000</li>
<li><strong>Second Prize :</strong> &#8377; 4000</li>
</ol>
<h4><strong>Contact</strong></h4>
<ol>
<li>+91 94 01 879295</li>
<li>+91 83 99 883584</li>
</ol>
</div>
</div>
</div>
<div id="geeks-arena-modal" class="modal-wrapper mfp-hide clearfix">
<div class="modal clearfix">
<div class="col-lg-7 col-md-7 col-sm-12">
<h2><strong>Geek's Arena</strong></h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
Nunc semper consequat augue, a fermentum elit.
Nullam eget dictum velit. Integer luctus arcu quis nisi hendrerit sollicitudin.</p>
<h4><strong>Rules and Regulations</strong></h4>
<ol>
<li>Group of two members and one PC per group.</li>
<li>Questions will be based on C and C++.</li>
<li>No participant is allowed to enter after 15 mins and exit after 30 mins.</li>
<li>Evaluation will be based on output, completion time and efficiency.</li>
<li>If nobody gets the required output of any questions, almost correct
answers will be checked.</li>
</ol>
<p><strong>Note :</strong> Certificates will be awarded to the top three winners.</p>
</div>
<div class="col-lg-offset-1 col-lg-4 col-lg-offset-1 col-md-4 col-sm-12">
<h4><strong>Organizing Club</strong></h4>
<p>Coding Club</p>
<h4><strong>Prize Money</strong></h4>
<ol>
<li><strong>First Prize :</strong> &#8377; 5000</li>
<li><strong>Second Prize :</strong> &#8377; 3500</li>
</ol>
<h4><strong>Contact</strong></h4>
<ol>
<li></li>
<li></li>
</ol>
</div>
</div>
</div>
<div id="kryptocism-modal" class="modal-wrapper mfp-hide clearfix">
<div class="modal clearfix">
<div class="col-lg-7 col-md-7 col-sm-12">
<h2><strong>Kryptocism</strong></h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
Nunc semper consequat augue, a fermentum elit.
Nullam eget dictum velit. Integer luctus arcu quis nisi hendrerit sollicitudin.</p>
<h4><strong>Rules and Regulations</strong></h4>
<ol>
<li>Questions will be based on C and C++.</li>
<li>No participant is allowed to enter after 15 mins and exit after 30 mins.</li>
<li>Evaluation will be based on completion time.</li>
</ol>
<p><strong>Note :</strong> Certificates will be awarded to the top three winners.</p>
</div>
<div class="col-lg-offset-1 col-lg-4 col-lg-offset-1 col-md-4 col-sm-12">
<h4><strong>Organizing Club</strong></h4>
<p>Coding Club</p>
<h4><strong>Prize Money</strong></h4>
<ol>
<li><strong>First Prize :</strong> &#8377; 4000</li>
<li><strong>Second Prize :</strong> &#8377; 3000</li>
</ol>
<h4><strong>Contact</strong></h4>
<ol>
<li></li>
<li></li>
</ol>
</div>
</div>
</div>
<div id="labyrinth-modal" class="modal-wrapper mfp-hide clearfix">
<div class="modal clearfix">
<div class="col-lg-7 col-md-7 col-sm-12">
<h2><strong>Labyrinth</strong></h2>
<p>This event is also based on hardware basis. The participants will be given a specific objective which they need to design it in a specific time. The winners will be decided on the basis of the duration of time they require to design it.</p>
<h4><strong>Rules and Regulations</strong></h4>
<ol>
<li>Maximum 3 members will be allowed in a group.</li>
<li>A simple circuit will be given to design, for example, full wave bridge rectifier.</li>
<li>10 groups will be selected for the final round.</li>
<li>If more than 10 groups are selected than time of execution will be taken under
consideration.</li>
<li>In final round, set of components will be given. Participants will have to use their
creativity and design a circuit.</li>
</ol>
<p><strong>Note :</strong> Certificates will be awarded to the top three winners.</p>
</div>
<div class="col-lg-offset-1 col-lg-4 col-lg-offset-1 col-md-4 col-sm-12">
<h4><strong>Organizing Club</strong></h4>
<p>Circuitronics Club</p>
<h4><strong>Prize Money</strong></h4>
<ol>
<li><strong>First Prize :</strong> &#8377; 6000</li>
<li><strong>Second Prize :</strong> &#8377; 4500</li>
</ol>
<h4><strong>Contact</strong></h4>
<ol>
<li></li>
<li></li>
</ol>
</div>
</div>
</div>
<div id="lens-and-slide-modal" class="modal-wrapper mfp-hide clearfix">
<div class="modal clearfix">
<div class="col-lg-7 col-md-7 col-sm-12">
<h2><strong>Lens & Slide</strong></h2>
<p>This is a group event on photography and presentation. The main theme for the photography is <strong>Historical Monuments and Civil Engineering Structures in Guwahati</strong>.</p>
<h4><strong>Rules and Regulations</strong></h4>
<ol>
<li>Group event consisting of 2 members each.</li> 
<li>Participants have to take photographs of
any historical monuments or civil engineering structures in Guwahati and then have
explain the structure in a presentation consisting of maximum of 6 to 7 slides.</li> 
<li>The time alloted for presentation will be 7 minutes.</li> 
<li>Photographs can be taken by any camera but the camera has to be shown and alos the date and time of the
photography shoud be shown in the photograph itself.</li> 
<li>The photographs and the presentation should be submitted to the event co-ordinators on the day of the
competition/presentation itself.</li>
</li>
</ol>
<p><strong>Note :</strong> Certificates will be awarded to the top three winners.</p>
</div>
<div class="col-lg-offset-1 col-lg-4 col-lg-offset-1 col-md-4 col-sm-12">
<h4><strong>Organizing Club</strong></h4>
<p>Civil Club</p>
<h4><strong>Prize Money</strong></h4>
<ol>
<li><strong>First Prize :</strong> &#8377; 3500</li>
<li><strong>Second Prize :</strong> &#8377; 2500</li>
</ol>
<h4><strong>Contact</strong></h4>
<ol>
<li></li>
<li></li>
</ol>
</div>
</div>
</div>
<div id="need-for-speed-modal" class="modal-wrapper mfp-hide clearfix">
<div class="modal clearfix">
<div class="col-lg-7 col-md-7 col-sm-12">
<h2><strong>Need For Speed</strong></h2>
<p>It is a car racing gaming event based on Need For Speed Most Wanted (2011) where each player will race against one another.</p>
<h4><strong>Rules and Regulations</strong></h4>
<ol>
<li>Reset and speed breaker will be not allowed.</li>
<li>In preliminary round, Circuit map will be played.</li>
<li>After preliminary round, Sprint map will be played.</li>
</ol>
<p><strong>Note :</strong> Certificates will be awarded to the top three winners.</p>
</div>
<div class="col-lg-offset-1 col-lg-4 col-lg-offset-1 col-md-4 col-sm-12">
<h4><strong>Event Type</strong></h4>
<p>Gaming</p>
<h4><strong>Prize Money</strong></h4>
<ol>
<li><strong>First Prize :</strong> &#8377; 5000</li>
<li><strong>Second Prize :</strong> &#8377; 4000</li>
</ol>
<h4><strong>Contact</strong></h4>
<ol>
<li>+91 84 72 916883</li>
<li>+91 87 21 980972</li>
</ol>
</div>
</div>
</div>
<div id="off-road-drive-modal" class="modal-wrapper mfp-hide clearfix">
<div class="modal clearfix">
<div class="col-lg-7 col-md-7 col-sm-12">
<h2><strong>Off Road Challenge</strong></h2>
<p>The bot have to clear a circuit full of various obstacles, from sand
to water, from rollers to stones. The bot should also be able to lift an object.</p>
<p>There will be two rounds in this event.</p>
<ul>
<li>1st round will be a time based round. The participants with the least times will
advance to the next round.</li>
<li>2nd round will be a delivery round. The bot must carry an object provided to its
destined location overcoming the obstacles. This round will be both time and
score based round.</li>
</ul>
</p>
<h4><strong>Rules and Regulations</strong></h4>
<ol>
<li>Maximum 4 members will consist of a single team.</li>
<li>The bot can be both wired or wireless.</li>
<li>If wired minimum length of the wire must be 2m.</li>
<li>Maximum dimensions for the bot including the arm must be 20 x 15 x 15
cm. (L-B-H)</li>
<li>There will be negative scoring in this event.</li>
<li>Participants are requested to bring all their necessary items.</li>
</ol>
<p><strong>Note :</strong> Certificates will be awarded to the top three winners.</p>
</div>
<div class="col-lg-offset-1 col-lg-4 col-lg-offset-1 col-md-4 col-sm-12">
<h4><strong>Organizing Club</strong></h4>
<p>Robotics Club</p>
<h4><strong>Prize Money</strong></h4>
<ol>
<li><strong>First Prize :</strong> &#8377; 7000</li>
<li><strong>Second Prize :</strong> &#8377; 5000</li>
</ol>
<h4><strong>Contact</strong></h4>
<ol>
<li></li>
<li></li>
</ol>
</div>
</div>
</div>
<div id="paper-presentation-modal" class="modal-wrapper mfp-hide clearfix">
<div class="modal clearfix">
<div class="col-lg-7 col-md-7 col-sm-12">
<h2><strong>Paper Presentation</strong></h2>
<p>This is an inter college paper presentation competition. Topics are : Minimal Quantity Lubrication, Dry Machining, Wearable Bio-sensors, Electronic Nose, 4G Wireless Technology, Nature Inspired Computing, Speech and Language Processing for Human Machine Communications, Next Generation Networks, Rocket Science, Nano-materials, Numerical Methods, Eigen Values and Eigen Vectors and its Applications, Renewable Energy and Environmental Protection and LED Lightening for Energy Efficiency.</p>
<h4><strong>Rules and Regulations</strong></h4>
<ol>
<li>Paper should be presented on any of the topics given
beforehand.</li>
<li>Maximum of two members are allowed in a group.</li>
<li>Participants must register themselves before
the presentation.</li>
<li>Maximum of 15 mins will be allotted to each
group.</li>
</ol>
<p><strong>Note :</strong> Certificates will be awarded to the top three winners.</p>
</div>
<div class="col-lg-offset-1 col-lg-4 col-lg-offset-1 col-md-4 col-sm-12">
<h4><strong>Organizing Club</strong></h4>
<p>Basic Science Club</p>
<h4><strong>Prize Money</strong></h4>
<ol>
<li><strong>First Prize :</strong> &#8377; 4000</li>
<li><strong>Second Prize :</strong> &#8377; 2500</li>
</ol>
<h4><strong>Contact</strong></h4>
<ol>
<li></li>
<li></li>
</ol>
</div>
</div>
</div>
<div id="riddle-snipper-modal" class="modal-wrapper mfp-hide clearfix">
<div class="modal clearfix">
<div class="col-lg-7 col-md-7 col-sm-12">
<h2><strong>Riddle Snipper</strong></h2>
<p>This is an event where the participants will be given a set of web pages with some integrated bugs on it. The participants will have to rectify those bugs present in the page within the stipulated time that will be allocated.</p>
<h4><strong>Rules and Regulations</strong></h4>
<ol>
<li>Maximum of two members are allowed in a group.</li>
<li>Codes will be based on PHP and HTML. They to connect the pages and linked where required.</li>
<li>Maximum of 1 hour will be allotted to each group. Whoever will finish the
task in less time they will be winner.</li>
</ol>
<p><strong>Note :</strong> Certificates will be awarded to the top three winners.</p>
</div>
<div class="col-lg-offset-1 col-lg-4 col-lg-offset-1 col-md-4 col-sm-12">
<h4><strong>Organizing Club</strong></h4>
<p>Web Designing Club</p>
<h4><strong>Prize Money</strong></h4>
<ol>
<li><strong>First Prize :</strong> &#8377; 5000</li>
<li><strong>Second Prize :</strong> &#8377; 3500</li>
</ol>
<h4><strong>Contact</strong></h4>
<ol>
<li></li>
<li></li>
</ol>
</div>
</div>
</div>
<div id="team-prajyukttam-modal" class="modal-wrapper mfp-hide clearfix">
<div class="modal clearfix">
<div class="col-lg-12 col-md-12 col-sm-12">
<h2><strong>Team Prajyukttam, 2015</strong></h2>
<h4><strong>Leading Team</strong></h4>
<p>Partha Pratim Sinha, CSE 7 as <strong>President</strong>, Nitul Islam, CVE 7 as <strong>Vice President</strong>, Khanindra Kalita, CVE 7 as <strong>Secretary</strong>, Debashis Changmai, CVE 7 as <strong>Assistant Secretary</strong>, Anubha Baruah, CVE 7 as <strong>Assistant Secretary</strong>, Abhijit Das, EEE 7 as <strong>Publicity Secretary</strong>, Rinky Gurumayum, CSE 7 as <strong>Assistant Publicity Secretary</strong>, Kaushik Kalita, EEE 7 as <strong>Treasurer</strong> and Puja Medhi, CSE 7 as <strong>Assistant Treasurer</strong></p>
<h4><strong>Graphics Design & Promotional Video</strong></h4>
<p>Priyank Baruah, CSE 7, Aman Basumatari, ECE 7 and Bumi Trueman Doley, MCH 5</p>

<h4><strong>Website & Android App</strong></h4>
<p>Debashis Barman, CSE 7</p>
</div>
</div>
</div>
<!--<div id="team-prajyukttam-modal" class="modal-wrapper mfp-hide clearfix">
<div class="modal clearfix">
<div class="col-lg-7 col-md-7 col-sm-12">
<h2><strong>Team Prajyukttam, 2015</strong></h2>
<h4><strong>Leading Team</strong></h4>
<ol>
<li><strong>President :</strong> Partha Pratim Sinha, CSE 7<br>
Contact : +91 97 06 358183</li>
<li><strong>Vice President :</strong> Nitul Islam, CVE 7<br>
Contact : +91 88 76 164439</li>
<li><strong>Secretary :</strong> Khanindra Kalita, CVE 7<br>
Contact : +91 95 77 625769</li>
<li><strong>Asst. Secretary :</strong> Debashis Changmai, CVE 7<br>
Contact : +91 88 76 167832</li>
<li><strong>Asst. Secretary :</strong> Anubha Baruah, CVE 7<br>
Contact : +91 84 73 945088</li>
<li><strong>Publicity Secretary :</strong> Abhijit Das, EEE 7<br>
Contact : +91 84 86 339155</li>
<li><strong>Asst. Publicity Secy. :</strong> Rinky Gurumayum, CSE 7<br>
Contact : +91 73 08 485445</li>
<li><strong>Treasurer :</strong> Kaushik Kalita, EEE 7<br>
Contact : +91 88 76 874747</li>
<li><strong>Asst. Treasurer :</strong> Puja Medhi, CSE 7<br>
Contact : +91 98 64 210358</li>
</ol>
</div>
<div class="col-lg-5 col-md-12 col-sm-12">
<br><br>
<h4><strong>Graphics & Video</strong></h4>
<ol>
<li>Priyank Baruah, CSE 7</li>
<li>Aman Basumatari, ECE 7</li>
<li>Bumi Trueman Doley, MCH 5</li>
</ol>

<h4><strong>Website & Android App</strong></h4>
<p>Debashis Barman, CSE 7</p>

<h4><strong>Contact</strong></h4>
<ul>
<li><a href="mailto:prajyukttam@dbuniversity.ac.in">prajyukttam@dbuniversity.ac.in</a></li>
<li><a href="">prajyukttam.dbuniversity.ac.in</a>
</ul>
</div>
</div>
</div>-->
<div id="history-modal" class="modal-wrapper mfp-hide clearfix">
<div class="modal clearfix">
<div class="col-lg-12 col-md-12 col-sm-12">
<h2><strong>History</strong></h2>

<p>The first Prajyukttam was held on 9th and 10th of Sept, 2011 with the sponsorship provided by State Bank of India & Punjab National Bank.</p>

<p>In 2012, Prajyukttam was held on 5th and 6th of Oct with a total of 15 events and approximate no. of 700 participants.</p>

<p>In 2013, 1000+ enthusiastic students and lecturers from about 20 different colleges and schools participated in various events.</p>

<p>In 2014, Prajyukttam was held from 18th-20th September with a total of 14 events and approximate no. of 900 participants.</p>

<h4><strong>Prajyukttam 2015</strong></h4>

<p>Assam Don Bosco University, School of Technology welcomes over 1500+ students from about 25+ technical colleges and schools to its tech fest, Prajyukttam 2015.</p>

<p>20+ events and activities of all types and levels of technical experience will be coordinated and participants will have the opportunity to try out their skills and creativity during the fiesta.</p>

<p>About 60% increase in participation from all the major technical colleges and also from the students from different high schools has been projected based upon our record of participants and feedbacks of the last 4 years.</p>

</div>
</div>
</div>
<div id="terms-modal" class="modal-wrapper mfp-hide clearfix">
<div class="modal clearfix">
<div class="col-lg-12 col-md-12 col-sm-12">
<h2><strong>Disclaimer & Privacy Policy</strong></h2>

<h4><strong>Terms of Use</strong></h4>

<p>What we provide on our site is for information purposes only and we don't guarantee that every information posted here is accurate or up-to-date. You are reading the information we post over here on your own will and any information you use is at your own risk. We don't provide any licensed or professional advice and so under no circumstances we will liable for any loss or damage in connection with the use or misuse of this website.</p>

<h4><strong>Third Party Website</strong></h4>

<p>We sometimes do advertise or link to our partner's or sponsor's sites, but we don't control them. These sites will have their own policies and so we are not responsible for the practices performed by those sites.</p>

<h4><strong>Privacy Policy</strong></h4>

<p>We do collect information when a user sign up to our site, comments or posts. But we store that information in a secured database so that no information can be used by any other 3rd party. We don't share with or sell user information to others. Your username, email address and password are always protected.</p>

<h4><strong>Acceptance of Policy</strong></h4>

<p>If you use our site then that means you agree to the terms of use. If you don't agree with our terms and conditions then please do not use our site.</p>

<h4><strong>Change of Policy</strong></h4>

<p>The policy may change with time. You can always check for updates in the policy by opening this page and the revised date will be mentioned at the bottom.</p>

<p>Last updated on Monday, 25 August 2015.</p>
</div>
</div>
</div>


<!-- Modal Ends -->

</div>

<script type="text/javascript">
function exploreGuide() {
    window.open("");
}
</script>

<script type="text/javascript">
$(document).ready(function(){
var $container = $('.all-events');
$container.isotope({
    filter: '*',
    animationOptions: {
        duration: 750,
        easing: 'linear',
        queue: false,
    }
});
 
$('nav.primary ul a').click(function(){
    var selector = $(this).attr('data-filter');
    $container.isotope({
        filter: selector,
        animationOptions: {
            duration: 750,
            easing: 'linear',
            queue: false,
        }
    });
  return false;
});
 
var $optionSets = $('nav.primary ul'),
       $optionLinks = $optionSets.find('a');
  
       $optionLinks.click(function(){
          var $this = $(this);
      // don't proceed if already selected
      if ( $this.hasClass('selected') ) {
          return false;
      }
   var $optionSet = $this.parents('nav.primary ul');
   $optionSet.find('.selected').removeClass('selected');
   $this.addClass('selected'); 
});
});
</script>

<script type="text/javascript">
$(document).ready(function(){
  browserWindowheight = $('.body-wrapper').height();
  document.getElementById("stars-height").style.height = browserWindowheight + "px";
  document.getElementById("twinkling-height").style.height = browserWindowheight + "px";
});
</script>

<script type="text/javascript">
$(function() {
  $('.events').jScrollPane();
});
</script>

<script type="text/javascript">
window.addEventListener("load", function(){
	var load_screen = document.getElementById("load_screen");
	document.body.removeChild(load_screen);
});
</script>

<script type="text/javascript">
$(function() {
  $('.open-more-information').magnificPopup({
    type:'inline',
    midClick: true 
  });
});
</script>

<script type="text/javascript">
$(function() {
  $('.open-auto-drive').magnificPopup({
    type:'inline',
    midClick: true 
  });
});
</script>

<script type="text/javascript">
$(function() {
  $('.open-cad-design').magnificPopup({
    type:'inline',
    midClick: true 
  });
});
</script>

<script type="text/javascript">
$(function() {
  $('.open-circuit-debugging').magnificPopup({
    type:'inline',
    midClick: true 
  });
});
</script>

<script type="text/javascript">
$(function() {
  $('.open-constro-dfice').magnificPopup({
    type:'inline',
    midClick: true 
  });
});
</script>

<script type="text/javascript">
$(function() {
  $('.open-counter-strike').magnificPopup({
    type:'inline',
    midClick: true 
  });
});
</script>

<script type="text/javascript">
$(function() {
  $('.open-design-creator').magnificPopup({
    type:'inline',
    midClick: true 
  });
});
</script>

<script type="text/javascript">
$(function() {
  $('.open-dream-planner').magnificPopup({
    type:'inline',
    midClick: true 
  });
});
</script>

<script type="text/javascript">
$(function() {
  $('.open-extempore-speech').magnificPopup({
    type:'inline',
    midClick: true 
  });
});
</script>

<script type="text/javascript">
$(function() {
  $('.open-fifa').magnificPopup({
    type:'inline',
    midClick: true 
  });
});
</script>

<script type="text/javascript">
$(function() {
  $('.open-geeks-arena').magnificPopup({
    type:'inline',
    midClick: true 
  });
});
</script>

<script type="text/javascript">
$(function() {
  $('.open-kryptocism').magnificPopup({
    type:'inline',
    midClick: true 
  });
});
</script>

<script type="text/javascript">
$(function() {
  $('.open-labyrinth').magnificPopup({
    type:'inline',
    midClick: true 
  });
});
</script>

<script type="text/javascript">
$(function() {
  $('.open-lens-and-slide').magnificPopup({
    type:'inline',
    midClick: true 
  });
});
</script>

<script type="text/javascript">
$(function() {
  $('.open-need-for-speed').magnificPopup({
    type:'inline',
    midClick: true 
  });
});
</script>

<script type="text/javascript">
$(function() {
  $('.open-off-road-drive').magnificPopup({
    type:'inline',
    midClick: true 
  });
});
</script>

<script type="text/javascript">
$(function() {
  $('.open-paper-presentation').magnificPopup({
    type:'inline',
    midClick: true 
  });
});
</script>

<script type="text/javascript">
$(function() {
  $('.open-riddle-snipper').magnificPopup({
    type:'inline',
    midClick: true 
  });
});
</script>

<script type="text/javascript">
$(function() {
  $('.open-team-prajyukttam').magnificPopup({
    type:'inline',
    midClick: true 
  });
});
</script>

<script type="text/javascript">
$(function() {
  $('.open-history').magnificPopup({
    type:'inline',
    midClick: true 
  });
});
</script>

<script type="text/javascript">
$(function() {
  $('.open-terms').magnificPopup({
    type:'inline',
    midClick: true 
  });
});
</script>

</body>
</html>
