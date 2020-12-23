<?php
     session_start();
    include "connection.php";
    if(!isset($_SESSION['user'])){
        header("location:Login_form.php");
        die();
    }
?>

<!DOCTYPE html>

<html lang="">
<head>
<title>Complain Registeration</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<style>
.container .demo{text-align:center;}
.container .demo div{padding:8px 0;}
.container .demo div:nth-child(odd){color:#FFFFFF; background:#CCCCCC;}
.container .demo div:nth-child(even){color:#FFFFFF; background:#979797;}
@media screen and (max-width:900px){.container .demo div{margin-bottom:0;}}
/* DEMO ONLY */
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.4);
  transition: 0.3s;
  width: 50%;
  height: 30%;
  border-radius: 5p;
  background-color:lightblue;
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
    </style>
  
<script type="text/javascript">

     function formValidation()
        {
           
            var email = document.getElementById("email");
            var email_length = email.value.length;
            var atpattrn = /@/i;
            if(email_length==0)
            {
                document.getElementById("em").innerHTML= "Enter Email";
                email.focus();
                return false;
            }
            else if(!email.value.match(atpattrn) || !email.value.includes("."))
            {
                document.getElementById("em").innerHTML= "Email-id mail not in correct format.";
                email.focus();
                return false;
            }
            else
            {
                document.getElementById("em").innerHTML= "";
            }

            //for uniqueID
            var phone = document.getElementById("uniqueid");
            var phone_length = phone.value.length;
            var phoneno = /^\d{8}$/;
            var p_pattern=/[0-9]/;
            if(phone_length==0)
            {
                document.getElementById("uid").innerHTML= "Enter UniqueID ";
                phone.focus();
                return false;
            }
           
            else if(!phone.value.match(p_pattern))
            {
                document.getElementById("uid").innerHTML= "UniqueID must be of digits.";
                phone.focus();
                return false;  
            }
            else if(phone_length != 8)
            {
                document.getElementById("uid").innerHTML= "UniqueID must be of 8 digits.";
                phone.focus();
                return false;
            }
            else
            {
                document.getElementById("uid").innerHTML= "";
            }
        }
          </script>
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
</div>
        <div class="card">
          <div class="container">
            <br>
            <h style="font-size: 20px; color: black"><b> Please enter the following details.</b> </h>
            <br> <br>
            <form  onsubmit="return formValidation();" action="complain_form.php" method="POST" >
           
              <label for="course"  style="color: black"><b>Type of Complain</label>
              <select style="margin-left: 50px; width: 20%" name="problem" id="course">
              <option value="Leakage"  style="color: black">Leakage Problem </option>
              <option value="Sweeper"  style="color: black">Sweeper Problem</option>
              <option value="Dustbin"  style="color: black">Dustbin Problem </option>
              <option value="Died"  style="color: black">Died Animals</option>
              <option value="other"  style="color: black">Other</option>
              </select>
              <br>
              <label for="uniqueid" style="color: black"><b>Enter Unique ID:</b></label>
              <input type="text"  placeholder="Enter Unique ID" id="uniqueid" name="uniqueid" required="true"><span id="uid"></span><br>
              <label for="address"  style="color: black"><b>Address:</b></label>
              <input   type="text" placeholder="Enter Address" name="address" required><br>
              <label for="complaininfo"  style="color: black"><b>Type your complain here:</b></label>
              <input   type="text" placeholder="Enter Complain" name="complaininfo" required><br>
              <label for="email" style="color: black"><b>Email</b></label>
              <input type="text" placeholder="Enter Email" id="email" name="email" required="true"><span id="em"></span><br>
              <center><h style="color: black"><b>Click here to Submit your query.</b> </h></center>
              <input  class="block" type="submit" name="generate" value="Submit">
            </form><br>
          </div>
        </div>

    <!-- ################################################################################################ -->
  </div>
</div>
<br><br><br>
</body>
</html>