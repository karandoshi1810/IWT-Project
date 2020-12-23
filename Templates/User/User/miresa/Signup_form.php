<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
  <title>Signup form</title>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
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

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and addf an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
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

<body>
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


            var phone = document.getElementById("phone");
            var phone_length = phone.value.length;
            var phoneno = /^\d{10}$/;
            var p_pattern=/[0-9]/;
            if(phone_length==0)
            {
                document.getElementById("ph").innerHTML= "Enter Phone Number";
                phone.focus();
                return false;
            }
           
            else if(!phone.value.match(p_pattern))
            {
                document.getElementById("ph").innerHTML= "Phone Number must be of digits.";
                phone.focus();
                return false;  
            }
            else if(phone_length != 10)
            {
                document.getElementById("ph").innerHTML= "Phone Number must be of 10 digits.";
                phone.focus();
                return false;
            }
            else
            {
                document.getElementById("ph").innerHTML= "";
            }

            //for ward no
            var phone = document.getElementById("ward");
            var phone_length = phone.value.length;
            var phoneno = /^\d{2}$/;
            var p_pattern=/[0-9]/;
            if(phone_length==0)
            {
                document.getElementById("wa").innerHTML= "Enter Ward Number";
                phone.focus();
                return false;
            }
           
            else if(!phone.value.match(p_pattern))
            {
                document.getElementById("wa").innerHTML= "Ward Number must be  digits.";
                phone.focus();
                return false;  
            }
            else if(phone_length > 2)
            {
                document.getElementById("wa").innerHTML= "Ward Number must be of 2 digits.";
                phone.focus();
                return false;
            }
            else
            {
                document.getElementById("wa").innerHTML= "";
            }

            //for pin code
            var phone = document.getElementById("pincode");
            var phone_length = phone.value.length;
            var phoneno = /^\d{6}$/;
            var p_pattern=/[0-9]/;
            if(phone_length==0)
            {
                document.getElementById("pin").innerHTML= "Enter Pin Code";
                phone.focus();
                return false;
            }
           
            else if(!phone.value.match(p_pattern))
            {
                document.getElementById("pin").innerHTML= "Pin code must be of digits.";
                phone.focus();
                return false;  
            }
            else if(phone_length != 6)
            {
                document.getElementById("pin").innerHTML= "Pin code must be of 6 digits.";
                phone.focus();
                return false;
            }
            else
            {
                document.getElementById("pin").innerHTML= "";
            }


            var shopname = document.getElementById("shopname");
            var os_pattern = /[a-zA-Z]/;
            var shopname_length= shopname.value.length;
            if(shopname_length==0)
            {
                document.getElementById("shn").innerHTML= "Enter shopname";
                shopname.focus();
                return false;
            }
            else if(!shopname.value.match(os_pattern))
            {
                document.getElementById("shn").innerHTML= "ShopName not in correct format";
                shopname.focus();
                return false;
            }
            else
            {
                document.getElementById("shn").innerHTML= "";
            }



            var shopaddress = document.getElementById("shopaddress");
            //var osa_pattern = /[a-zA-Z]/;
            var shopaddress_length= shopaddress.value.length;
            if(shopaddress_length==0)
            {
                document.getElementById("sha").innerHTML= "Enter shopaddress";
                shopaddress.focus();
                return false;
            }
            else
            {
                document.getElementById("sha").innerHTML= "";
            }

            var shopaddress1 = document.getElementById("shopaddress1");
            //var osa_pattern = /[a-zA-Z]/;
            var shopaddress_length= shopaddress1.value.length;
            if(shopaddress_length==0)
            {
                document.getElementById("sha1").innerHTML= "Enter shopaddress";
                shopaddress1.focus();
                return false;
            }
            else
            {
                document.getElementById("sha1").innerHTML= "";
            }
 var shopaddress2 = document.getElementById("city");
            var osa_pattern = /[a-zA-Z]/;
            var shopaddress_length= shopaddress2.value.length;
            if(shopaddress_length==0)
            {
                document.getElementById("cityF").innerHTML= "Enter City";
                shopaddress2.focus();
                return false;
            }
            else if(!shopaddress2.value.match(osa_pattern))
            {
                document.getElementById("cityF").innerHTML= "Not correct format";
                shopaddress2.focus();
                return false;  
            }
            else
            {
                document.getElementById("cityF").innerHTML= "";
            }
            var pincode = document.getElementById("pincode");
            var pincode_length = pincode.value.length;
            var pincodeno = /^\d{6}$/;
            var pin_pattern=/[0-9]/;
            if(pincode_length==0)
            {
                document.getElementById("pin").innerHTML= "Enter Pincode";
                pincode.focus();
                return false;
            }
           
            else if(!pincode.value.match(pin_pattern))
            {
                document.getElementById("pin").innerHTML= "Pincode must be of digits.";
                pincode.focus();
                return false;  
            }
            else if(pincode_length != 6)
            {
                document.getElementById("pin").innerHTML= "pincode must be of 6 digits.";
                pincode.focus();
                return false;
            }
            else
            {
                document.getElementById("pin").innerHTML= "";
            }

           

            var psswd = document.getElementById("password");
            var psswd_length = psswd.value.length;

            if(psswd_length==0)
            {
                document.getElementById("psswdF").innerHTML= "Enter Password";
                psswd.focus();
                return false;
            }
            else if(psswd_length < 8 || psswd_length > 16)
            {
                document.getElementById("psswdF").innerHTML= "Password: atleast 8 and atmost 16 characters.";
                psswd.focus();
                return false;
            }
            else
            {
                document.getElementById("psswdF").innerHTML= "";
            }
            var cpsswd = document.getElementById("confirmpassword");
            var cpsswd_length = cpsswd.value.length;
            if(cpsswd_length==0)
            {
                document.getElementById("cpsswdF").innerHTML= "Confirm your Password.";
                cpsswd.focus();
                return false;  
            }
            else if( cpsswd.value != psswd.value)
            {
                document.getElementById("cpsswdF").innerHTML= "Do not match with Password.";
                cpsswd.focus();
                return false;
            }
            else
            {

                document.getElementById("cpsswdF").innerHTML= "";
            }
            return true;
        }

</script>
</head>
<form  name="myForm" action="registeration.php"  onsubmit="return formValidation();" method="POST" style="border:1px solid #ccc">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

   <label for="email"><b>Full Name</b></label>
      <input type="text" placeholder="Enter Name" name="name" required="true"><br><br>

       <label for="email"><b>City </b></label>
      <input type="text" placeholder="Enter City" name="city" required="true"><br><br>

       <label for="email"><b>State</b></label>
      <input type="text" placeholder="Enter State" name="state" required="true"><br><br>

       <label for="email"><b>Address</b></label>
      <input type="text" placeholder="Enter Address" name="address" required="true"><br><br>

       <label for="email"><b>Pincode</b></label>
      <input type="Pincode" placeholder="Enter Pincode" name="pincode" id="pincode" required="true"><span id="pin"></span><br><br>

       <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" id="email" required="true"><span id="em"></span><br><br>

       <label for="email"><b>Mobile No</b></label>
      <input type="Mobile" placeholder="Enter Mobile No" name="mobileno" id="phone" required="true"><span id="ph"></span><br><br>
       <label for="email"><b>Ward No</b></label>
      <input type="Mobile" placeholder="Enter Ward No" name="wardno" id="ward" required="true"><span id="wa"></span><br><br>


      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" id="password" required="true"><span id="psswdF"></span><br><br>

      <label for="psw-repeat"><b>Confirm Password</b></label>
      <input type="password" placeholder="Confirm Password" name="confirmpsw" id="confirmpassword" required="true"><span id="cpsswdF"></span><br><br>
    <label>
        <br>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      <input  class="block" type="submit" id="generate" name="generate">
    </label>
   
  </div>
  </form>
</body>
</html>
