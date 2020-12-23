
<?
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>User side login/signup form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 20%;
  border-radius: 30%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
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
        }
           
</script>
<h2>Login Form</h2>

<form action="loginpage.php" onsubmit="return formValidation();" method="post">

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" id="email" name="email" required><span id="em"></span><br><br>


    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" id="password" name="password" required><span id="psswdF"></span><br><br>

        
    <button  type="submit" name="output" value="Submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button href="Signup_form.php" type="button" class="cancelbtn">Cancel</button>
    
  </div>

</form>
<form action="forgotpass.php" method="post" >
  
<span class="psw"><a href="forgotpass.php">Forgot password?</a></span>
</form>
<form method="post" >
  
<span class="psw" style="margin-right:600px;"><a href="Signup_form.php">Not Registered? Sign Up</a></span>
</form>

</body>
</html>
