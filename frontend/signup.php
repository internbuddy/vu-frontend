

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="apple-touch-icon" type="image/png" href="https://static.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />
<meta name="apple-mobile-web-app-title" content="CodePen">
<link rel="shortcut icon" type="image/x-icon" href="https://static.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />
<link rel="mask-icon" type="" href="https://static.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111" />
<title>CodePen - Sign up page (Dribbble Project)</title>
<link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<style>
@import url(https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic);
html, body {
  font-family:"Open Sans", sans-serif;
  -webkit-font-smoothing: subpixel-antialiased;
}

.container {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  overflow: hidden;
  background: #2c3e50;
  background-size: cover;
}
.container .box#sign-up {
  box-sizing: border-box;
  width: 440px;
  margin: 40px auto;
  background: #FBFBFB;
  border-radius: 2px;
  box-shadow: 0 1px 20px 5px rgba(0, 0, 0, 0.4);
  padding: 15px 35px;
}
.container .box#sign-up .back {
  text-decoration: none;
  line-height: 40px;
}
.container .box#sign-up .back .back-arrow {
  color: #777;
}
.container .box#sign-up .brand .logo {
  position: relative;
  width: 65px;
  height: 60px;
  margin: 0 auto;
}
.container .box#sign-up .brand .logo .square {
  position: absolute;
  left: 9px;
  background: #FBFBFB;
  width: 40px;
  height: 40px;
  border: 3px solid #3498db;
  border-radius: 8px;
  transform: rotateX(55deg) rotateZ(45deg);
  box-shadow: 3px 3px 0px 2px white;
  -webkit-backface-visibility: hidden;
}
.container .box#sign-up .brand .logo .square:nth-of-type(1) {
  background: #3498db;
  top: 0;
  z-index: 99;
}
.container .box#sign-up .brand .logo .square:nth-of-type(2) {
  top: 12px;
  z-index: 98;
}
.container .box#sign-up .brand .logo .square:nth-of-type(3) {
  top: 24px;
  z-index: 97;
}
.container .box#sign-up .brand .title {
  font-weight: 400;
  color: #333;
  text-align: center;
}
.container .box#sign-up .form input {
  outline: 0;
  border: 1px solid #CCC;
  box-sizing: border-box;
  padding: 8px;
  color: #222;
  border-radius: 4px;
  width: 100%;
  margin: 5px 0;
  font-weight: 600;
}
.container .box#sign-up .form input::-webkit-input-placeholder {
  color: #AAA;
  font-weight: 400;
}
.container .box#sign-up .form .row input {
  width: calc(50% - 5px);
  float: left;
}
.container .box#sign-up .form .row input:first-of-type {
  margin-right: 10px;
}
.container .box#sign-up .form .checkbox {
  margin: 5px 0;
}
.container .box#sign-up .form .checkbox .checkbox-label {
  position: relative;
  display: table;
  width: 16px;
  height: 16px;
  background: white;
  border: 1px solid #CCC;
  border-radius: 2px;
  float: left;
  margin: 5px 5px 5px 0;
}
.container .box#sign-up .form .checkbox input[type="checkbox"] {
  display: none;
}
.container .box#sign-up .form .checkbox input[type="checkbox"]:checked ~ label.checkbox-label:before {
  content: "";
  position: absolute;
  top: 7px;
  left: 5px;
  height: 3px;
  width: 10px;
  background: #3498db;
  transform: rotate(-45deg);
}
.container .box#sign-up .form .checkbox input[type="checkbox"]:checked ~ label.checkbox-label:after {
  content: "";
  position: absolute;
  top: 5px;
  left: 3px;
  height: 6px;
  width: 3px;
  background: #3498db;
  transform: rotate(-45deg);
}
.container .box#sign-up .form .checkbox label.description {
  float: left;
  margin: 3px 0;
  color: #333;
}
.container .box#sign-up .form .checkbox label.description a {
  text-decoration: none;
  color: #5AA4EC;
  font-weight: 600;
}
.container .box#sign-up .form button {
  width: 100%;
  background: #3498db;
  line-height: 40px;
  border: 0;
  outline: 0;
  color: white;
  border-radius: 20px;
  font-weight: 300;
  margin-top: 15px;
  margin-bottom: 50px;
}
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
<div class="container">
<div class="box" id="sign-up">
<a class="back" href="student_login.php"><span class="back-arrow">Back</span></a>
<div class="brand">
<div class="logo">
<div class="square"></div>
<div class="square"></div>
<div class="square"></div>
</div>
<h2 class="title">Sign up now</h2>
</div>
<div class="form">
<form>
<div class= "row">
<input type="text" name="firstname" placeholder="First name">
<input type="text" name="lastname" placeholder="Last name">
</div>
<input type="email" name="email" placeholder="Email">
<input type="password" name="password" placeholder="Password">
<div class="checkbox">
<input type="checkbox" name="terms" id="terms">
<label for="terms" class="checkbox-label"></label>
<label for="terms" class="description">I agree with <a href="#terms">Terms & conditions</a></label>
</div>
<button type="submit" name="submit">Sign up for free</button>
</form>
</div>
</div>
</div>
</body>
</html>
