<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="apple-touch-icon" type="image/png" href="https://static.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />
<meta name="apple-mobile-web-app-title" content="CodePen">
<link rel="shortcut icon" type="image/x-icon" href="https://static.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />
<link rel="mask-icon" type="" href="https://static.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111" />
<title>Login form - JQuery animate</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/FontAwesome.otf'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/fontawesome-webfont.eot'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/fontawesome-webfont.svg'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/fontawesome-webfont.ttf'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/fontawesome-webfont.woff2'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css.map'>
<style>
* {box-sizing: border-box;}
body {
  background-image: url(http://ryokb95.upload-website.com/login-signupform/imgs/1.jpg);
  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
  font-family:sans-serif;
}
/*Start form style*/
form {
  background-image: url('http://ryokb95.upload-website.com/login-signupform/imgs/1.jpg');
  height: 550px;
  width: 300px;
  margin: 60px auto;
  border-radius: 8px
}
button{box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.58);}
/*End form style*/



/*****************************************/

/*Start header*/
form h1 {
  text-align: center;
  color: rgba(255, 255, 255, 0.42);
  padding-top: 64px;
}

form p {
  color: #828999;
  font-size: 11px;
  text-align: center;
  margin-top: -19px;
}
 /*The link of the site in the p tag ***/
form p>a{color:#828999;text-decoration: none;transition: 0.3s }
form p>a:hover{color: #1da1f2}
form p>a:active{color: #1da1f2 }
/*End login header*/


/* Start the input-info style*/
.input-info {margin-top: 30px;margin-bottom: 15px}/*the containe div style*/
input[type="text"],input[type="email"],input[type="password"]  {
    border: 1px solid #828999;
    padding: 10px;
    border-radius: 5px;
    width: 90%;
    background: none;
    color: #fff;
    margin: 5px 5px 5px 17px;
    outline: none;
    transition: 0.3s;
    text-indent: 15px;
    overflow: hidden;
}
 
.fa-refresh, .fa-lock, 
.fa-envelope, .fa-user-plus, 
.fa-user {
    position: absolute;
    margin-top: 14px;
    margin-left: 24px;
    color: #828999;
    display: block;
}

.input-info input:hover{background: #435688}
.input-info input[type="checkbox"] {margin-left: 17px;cursor: pointer;margin-top: 7px}
.input-info span {color: #83899a;font-size: 11px;}
.input-info span>a{color:#1da1f2 }
.input-info span>a:hover{color:#fff }

/*End the input-info style*/ 

/*start the tow button login and sign up*/
.log-sign{text-align: center;}/*the containe div style*/
.signup,
.login{/*button login style*/
    padding: 10px;
    margin-top: 16px;
    background: #435688;
    color: #fff;
    width: 103px;
    border-radius: 6px;
    cursor: pointer;
    transition: 0.5s;
    border: 1px solid #435688;
    outline: none;
}

input[type=submit]{/*button login style*/
    padding: 10px;
    margin-top: 16px;
    background: #435688;
    color: #fff;
    width: 103px;
    border-radius: 6px;
    cursor: pointer;
    transition: 0.5s;
    border: 1px solid #435688;
    outline: none;
}
.signup {/*button signup style*/
  background: #9e3434;
  border: 1px solid #9e3434;
}


.log-sign .signup>a{color: #fff;text-decoration: none;}/*the signup link style*/
.log-sign button:hover{
   background:none;
   border:1px solid #828999;
   color: #828999;
}

.send{/*sugn up button at the signup.html page*/
    padding: 10px;
    margin-top: 16px;
    background: #435688;
    color: #fff;
    width: 103px;
    border-radius: 6px;
    cursor: pointer;
    transition: 0.5s;
    border: 1px solid #435688;
    outline: none;
    margin-left: 32%
}


/*facebook social-media button style*/
.social-media{margin-bottom: 35px;}
.social-media .btn1 {/*facebook button*/
  border: 0;
  background: #3B5998;
  color: #fff;
  padding: 15px;
  width: 90%;
  margin-left: 16px;
  margin-top: 14px;
  border-radius: 5px;

}
.social-media .btn2 {/*twitter button*/
  border: 0;
  padding: 15px;
  margin-top: 11px;
  width: 90%;
  margin-left: 16px;
  border-radius: 5px;
  background: #1DA1F2;
  color: #fff;

}
.social-media button>a{color: #fff;text-decoration: none;}
/************/

.forget-password {text-align: center;}
.forget-password a {color: #1da1f2;transition: 0.3s;text-decoration:underline;}
.forget-password a:hover{color: #fff}
.forget-password a:active{color: #fff}




/*start form sign up*/
</style>
<script>
  window.console = window.console || function(t) {};
</script>
<script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>
</head>
<body translate="no">
<div id='AppendHere'></div>
<form id="loginform" action="#" method="POST">

<h1 style="color:black;">LOG IN</h1>
<div class="input-info">

<i class="fa fa-user"></i>

<input type="text" name="username" id="username" placeholder="User-Name"/>
<i class="fa fa-envelope"></i>

<!--<input type="email" placeholder="E-mail" required autocomplete="off" validate>
<i class="fa fa-lock"></i>-->

<input type="password" name="password" id="username" placeholder="Password"/>


<input type="checkbox">
<span>Remember Me</span><br>
</div>
<div class="log-sign">
<input type="submit" name="login" id="login" value="submit">
<a href="signup.php">
<button class="signup" form="signupform"><i class="fa fa-plus"></i> Sign Up</button>
</a>
</div>
<div class="social-media">
<button class="btn1">
<a href="#" target="_blank"><i class="fa fa-facebook"></i> Sign up with facebook</a>
</button>


<button class="btn2">
<a href="#" target="_blank"><i class="fa fa-google"></i> Sign up with google</a>
</button>
</div>




<p class= "forget-password">If you forget your password please <a href="create_pass.php">click here</a></p>


</a>

</form>

<script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-db44b196776521ea816683afab021f757616c80860d31da6232dedb8d7cc4862.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script id="rendered-js">
//this function to applay your animate style
function animate_Me(target, moveMe) {
  $(target).focus(function () {
    $(moveMe).animate({ "marginLeft": "266px" });
  });
  $(target).focusout(function () {
    $(moveMe).animate({ "marginLeft": "24px" });
  });

}
//--------------------

animate_Me("input[type='text']", ".fa-user");
animate_Me("input[placeholder='Your Last Name']", ".fa-user-plus");
animate_Me("input[type='email']", ".fa-envelope");
animate_Me("input[type='password']", ".fa-lock");
animate_Me("input[placeholder='Confirm Password']", ".fa-refresh");
//# sourceURL=pen.js
    </script>
<script src="https://static.codepen.io/assets/editor/iframe/iframeRefreshCSS-e120fd1ef4e480df85dd5faf7ee953074e62dc3d6da49fdf75fe06deb33f93c5.js"></script>


<?php
include "studentt_login.php";


?>
</body>
</html>