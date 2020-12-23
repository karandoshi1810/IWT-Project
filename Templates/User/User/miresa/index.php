<?php
     session_start();
    include "connection.php";
    if(!isset($_SESSION['user'])){
        header("Location:Login_form.php");
        die();
    }
?>

<!DOCTYPE html>

<html lang="">
<head>
<title>Water and Cleanliness management</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
  
</head>
<body id="top">

<div id="google_translate_element"></div> 
  
  <script type="text/javascript"> 
    function googleTranslateElementInit() { 
      new google.translate.TranslateElement( 
        {pageLanguage: 'en'}, 
        'google_translate_element' 
      ); 
    } 
  </script> 
  
  <script type="text/javascript">
  (function(){var gtConstEvalStartTime = new Date();/*

 Copyright The Closure Library Authors.
 SPDX-License-Identifier: Apache-2.0
*/
function d(b){var a=document.getElementsByTagName("head")[0];a||(a=document.body.parentNode.appendChild(document.createElement("head")));a.appendChild(b)}function _loadJs(b){var a=document.createElement("script");a.type="text/javascript";a.charset="UTF-8";a.src=b;d(a)}function _loadCss(b){var a=document.createElement("link");a.type="text/css";a.rel="stylesheet";a.charset="UTF-8";a.href=b;d(a)}function _isNS(b){b=b.split(".");for(var a=window,c=0;c<b.length;++c)if(!(a=a[b[c]]))return!1;return!0}
function _setupNS(b){b=b.split(".");for(var a=window,c=0;c<b.length;++c)a.hasOwnProperty?a.hasOwnProperty(b[c])?a=a[b[c]]:a=a[b[c]]={}:a=a[b[c]]||(a[b[c]]={});return a}window.addEventListener&&"undefined"==typeof document.readyState&&window.addEventListener("DOMContentLoaded",function(){document.readyState="complete"},!1);
if (_isNS('google.translate.Element')){return}(function(){var c=_setupNS('google.translate._const');c._cest = gtConstEvalStartTime;gtConstEvalStartTime = undefined;c._cl='en';c._cuc='googleTranslateElementInit';c._cac='';c._cam='';c._ctkk='445160.996405948';var h='translate.googleapis.com';var s=(true?'https':window.location.protocol=='https:'?'https':'http')+'://';var b=s+h;c._pah=h;c._pas=s;c._pbi=b+'/translate_static/img/te_bk.gif';c._pci=b+'/translate_static/img/te_ctrl3.gif';c._pli=b+'/translate_static/img/loading.gif';c._plla=h+'/translate_a/l';c._pmi=b+'/translate_static/img/mini_google.png';c._ps=b+'/translate_static/css/translateelement.css';c._puh='translate.google.com';_loadCss(c._ps);_loadJs(b+'/translate_static/js/element/main.js');})();})(); 
  </script> 
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay light" style="background-image:url('https://i.pinimg.com/originals/03/99/35/039935a1bc2a22ced866344f237e6459.jpg');"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row0">
    <div id="topbar" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <ul class="nospace">
        <li><a href="index.php"><i class="fa fa-lg fa-home"></i></a></li>
        <li><a href="#" title="9925885830"><i class="fa fa-phone"></i></a></li>
        <li><a href="#" title="info@gmail.com"><i class="fa fa-envelope-o"></i></a></li>
        <li><a href="Sign-Out.php" title="Signout"><i class="fa fa-lg fa-sign-in"></i></a></li>
       
      </ul>
      <!-- ################################################################################################ -->
    </div>
  </div>
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="index.php">Water and Cleanliness Management</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="index.php">Home</a></li>
           <li><a href="new-complain.php">New Complain</a></li>
          <li><a href="recycling_user.php">Recycling</a></li>
          <li><a href="Feedbacks_user.php">Feedback</a></li>
          <li><a href="history.php">History</a></li>
          <li><a href="gifts.php">Rewards</a></li>
              <li><a href="#"></a></li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <article>
     <marquee style="font-family: serif;font-size: 25px;">A Step Towards Advance Management....</marquee>

      <footer>
        <ul class="nospace inline pushright">
          <!--<li><a class="btn" href="#">Ornare sem ultrices</a></li>
          <li><a class="btn inverse" href="#">Vestibulum porta</a></li>-->
        </ul>
      </footer>
    </article>
    <!-- ################################################################################################ -->
  </div>
  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <!--<h6 class="heading">Praesent ex malesuada</h6>
      <p>Quis mollis sit amet semper eget nulla cras tellus purus tincidunt</p>-->
    </div>
    <article class="group">
      <div class="one_half first">
        <h6 class="heading">Water and cleanliness management</h6>
        <p>Water and Cleanliness Management is a platform where you can reach out and communicate the problems and difficulties to the preferred authorities.<br><br>Cleanliness adds more value to personal and social life. Since good habits are contagious, it is possible to teach children, neighbours and illiterates on the importance of cleanliness, by being a role model.<br><br> With a collective effort, cleanliness and in turn, good health and happiness are within reach. Water is essential to life for all living organisms on Earth.  Because of absence of water on other planets life is absent over there.  We are so fortunate to have so many water bodies on our mother planet.<br><br>

Pure and clean water is equal to the divine magic potion “amrutham”, as it makes us live long and healthy.  So pure water is elixir of life. </p>
        <!--<p class="btmspace-30">Iaculis vehicula tristique ut gravida scelerisque mattis non erat a lectus tincidunt maximus aliquam sed ex quis nec maximus urna integer nec est sapien quisque pulvinar bibendum interdum donec a lacus diam cras sem ipsum finibus non volutpat nec&hellip;</p>
        <footer><a class="btn" href="#">Read More &raquo;</a></footer>-->
      </div>
      <div class="one_half"><a class="imgover" href="#"><img src="water.jpg" alt=""></a></div>
    </article>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>

<div class="wrapper row2 bgded overlay" style="background-image:url('https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRV0vDHJG1RQZ-wteN78DbVZUUS1UHPuiJ4WA&usqp=CAU');">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <h6 class="heading">एक कदम स्वच्छता की ओर </h6>
        <br><br>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="img_1.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="img_2.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="img_3.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3000); // Change image every 2 seconds
}
</script>
  </section>
</div>
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <figure class="hoc container clear clients"> 
    <!-- ################################################################################################ -->
    <!--<ul class="nospace group">
      <li class="one_quarter first"><a class="imgover" href="#"><img src="images/demo/222x100.png" alt=""></a></li>
      <li class="one_quarter"><a class="imgover" href="#"><img src="images/demo/222x100.png" alt=""></a></li>
      <li class="one_quarter"><a class="imgover" href="#"><img src="images/demo/222x100.png" alt=""></a></li>
      <li class="one_quarter"><a class="imgover" href="#"><img src="images/demo/222x100.png" alt=""></a></li>
    </ul>-->
    <!-- ################################################################################################ -->
  </figure>
</div>
<!-- ################################################################################################ -->
<div class="wrapper row2 bgded overlay" style="background-image:url('https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRHOhoDYmmV0gMVxfhBIPsFBp2fZ-prfvGF7w&usqp=CAU');">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <h6 class="heading">Gallery</h6>
      <!--<p> </p>-->
    </div>
    <div class="group team">
      <figure class="one_quarter first"><a class="imgover" href="#"><img src="one.png" alt=""></a>
       
      </figure>
      <figure class="one_quarter"><a class="imgover" href="#"><img src="second.png" alt=""></a>
       
      </figure>
      <figure class="one_quarter"><a class="imgover" href="#"><img src="third.png" alt=""></a>
        
      </figure>
      <figure class="one_quarter"><a class="imgover" href="#"><img src="fourth.png" alt=""></a>
        
      </figure>
    </div>
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<div class="wrapper">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <h6 class="heading">Contributors</h6>
      <!--<p></p>-->
    </div>
    <div class="group latest">
      <article class="one_third first"><a class="imgover btmspace-30" href="#"><img src="chiefminister.jpg" alt=""></a>
        <ul class="nospace meta">
          <!--<li><i class="fa fa-user"></i> <a href="#">Admin</a></li>
          <li><i class="fa fa-tag"></i> <a href="#">Tag Name</a></li>-->
        </ul>
        <h6 class="heading font-x1">Mr.Vijay Rupani</h6>
        <p>Honorable Chief Minister of Gujarat</p>
        <!--<footer><a href="#">Read More</a></footer>-->
      </article>
      <article class="one_third"><a class="imgover btmspace-30" href="#"><img src="primeminister.jpg" alt=""></a>
        <ul class="nospace meta">
          <!--<li><i class="fa fa-user"></i> <a href="#">Admin</a></li>
          <li><i class="fa fa-tag"></i> <a href="#">Tag Name</a></li>-->
        </ul>
        <h6 class="heading font-x1">Mr.Narendra Modi</h6>
        <p>Honorable Prime Minister of India</p>
        <!--<footer><a href="#">Read More</a></footer>-->
      </article>
      <article class="one_third"><a class="imgover btmspace-30" href="#"><img src="homeminister.jpg" alt=""></a>
        <ul class="nospace meta">
          <!--<li><i class="fa fa-user"></i> <a href="#">Admin</a></li>
          <li><i class="fa fa-tag"></i> <a href="#">Tag Name</a></li>-->
        </ul>
        <h6 class="heading font-x1">Mr.Amit Shah</h6>
        <p>Honorable Home Minister of India</p>
        <!--<footer><a href="#">Read More</a></footer>-->
      </article>
    </div>
    <!--<footer class="center"><a class="btn" href="#">Rhoncus mi congue &raquo;</a></footer>-->
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<div class="wrapper row2 bgded overlay" style="background-image:url('images/demo/backgrounds/04.png');">
  <section class="hoc cta clear"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <h6 class="heading">For Constant Updates</h6>
      <!--<p>Dictum risus tellus cursus ipsum vel facilisis lorem est fermentum</p>-->
    </div>
    <form action="send_mail.php" method="POST">
      <fieldset>
        <legend>Newsletter:</legend>
        <input class="btmspace-15" type="text" name = email value="" placeholder="Enter Your Email Here">
        <button type="submit" value="submit" id="generate" name="generate">Submit</button>
      </fieldset>
    </form> 
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <article class="one_quarter first">
      <h6 class="heading">Address</h6>
      <p>Race course road rajkot</p>
      <p class="nospace"><a href="#">Read More</a></p>
    </article>
    <div class="one_quarter">
      <h6 class="heading">Contact here</h6>
      <ul class="nospace btmspace-30 linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
          Pin number:360005
          </address>
        </li>
        <li><i class="fa fa-phone"></i>9925885830</li>
        <li><i class="fa fa-envelope-o"></i> info@gmail.com</li>
      </ul>
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
      </ul>
    </div>
    <div class="one_quarter">
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->

    <!--<p class="fl_right">Template by <a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>-->
  </div>
</div>
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>