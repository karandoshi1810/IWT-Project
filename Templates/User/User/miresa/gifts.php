<?php
session_start();
if(!isset($_SESSION['user'])){
        header("location:Login_form.php");
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
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.4);
  transition: 0.3s;
  width: 50%;
  height: 30%;
  border-radius: 5p;
  background-color:white;
  left: 50px;
  top: 150px;

}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

img {
  border-radius: 5px 5px 0 0;
}

.container {
  padding: 2px 16px;
}
  input[type=text], input[type=password] {
  width: 50%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
.block {
  display: block;
  width: 100%;
  border: none;
  background-color: #4CAF50;
  color: white;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  text-align: center;
}

.block:hover {
  background-color: #ddd;
  color: black;
}
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}


* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.5);
  padding: 16px;
  text-align: center;
  width: 1500px;
  background-image: linear-gradient(to right, rgba(255,0,0,0), rgba(255,0,0,0.5));;
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
        <li><a href="index.html"><i class="fa fa-lg fa-home"></i></a></li>
        <li><a href="#" title="9925885830"><i class="fa fa-phone"></i></a></li>
        <li><a href="#" title="info@gmail.com"><i class="fa fa-envelope-o"></i></a></li>
        <li><a href="Sign-Out.php" title="Sign-Out"><i class="fa fa-lg fa-sign-in"></i></a></li>
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
          <li><a href="Feedbacks_user.php">Feedback</a>
           <li><a href="history.php">History</a></li>
          <li><a href="gifts.php">Rewards</a></li>
              </li>
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

 </article>
</div>
</div>
<br>
 <div class="group team">
      <figure class="one_quarter first"><a class="imgover" href="#"><img src="rewards.jpg" alt=""></a>
       
      </figure>
      <figure class="one_quarter"><a class="imgover" href="#"><img src="bus.jpg" alt=""></a>
       
      </figure>
      <figure class="one_quarter"><a class="imgover" href="#"><img src="musuem.png" alt=""></a>
      </figure>
      <figure class="one_quarter"><a class="imgover" href="#"><img src="cashback.jpg" alt=""></a>
      </figure>

    </div>
    
</div>
<center><h style="font-size: 40px; color: black; font-family: serif;"><b>A Step to Create awarness to keep our city clean.  </b></h></center>

<center><div class="row">

    <div class="card">
      <p style="font-size: 20px; color: black">You can recieve some goodies, rewards or cashbacks.  </p>
      <p style="font-size: 20px; color: black">Steps to reddem the Rewards. </p>
      <p style="font-size: 20px; color: black">You have to collect the dry waste from your surroundings and request RMC to collect it. You can fill the form from recycling page. </p>
      <p style="font-size: 30px; color: black">Let's Make our City clean and Pollution free </p>
    </div>
  </div>
</div></center>
<br><br><br>
</body>
</html>