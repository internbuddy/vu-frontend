

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="apple-touch-icon" type="image/png" href="https://static.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />
<meta name="apple-mobile-web-app-title" content="CodePen">
<link rel="shortcut icon" type="image/x-icon" href="https://static.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />
<link rel="mask-icon" type="" href="https://static.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111" />
<title>CodePen - Project-4a-Learning-Web-Components-Signup-Form</title>
<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Ubuntu", sans-serif;
}

body {
  background-color: black;
}

.container {
  height: 625px;
  clear: both;
  border: solid black 1px;
  background-color: #FBF9F2;
}

#header {
  width: 100%;
  color: #CAB79D;
  background-color: #192019;
  text-align: center;
  float: left;
}

.header_text {
  font-size: 32px;
   vertical-align:middle; 
    display:inline-block; 
}

span {
  line-height:90px; 
}

#signup_form {
  float: left;
  margin-left: 125px;
  font-size: 24px;
  margin-top: 40px;
  float: left;
}

.form_field {
  float: left;
  margin-right: 40px;
  padding-bottom: 20px; 
}

.label {
  font-size: 20px;
}
input {
  line-height: 2em;
}

.submit_button {
  padding-top: 30px;
}

.button {
    background-color: #567EDD; /* Green */
    border: solid black 1px;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
  width: 25%;
  border-radius: 5px;
  outline: none;
}

.button:hover {
  background-color: #6392ff;  
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

.button:active {
  background-color: #85a3ea;
}

.clear {
  clear: both;
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
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Document</title>
</head>
<body>
<div class="container">
<div id="header">
<span></span>
<div class="header_text"< div>
<p>Create New Password</p>
</div>
</div>
<div id="signup_form">
<div class="form_field">
<label class="label" for="first_name">First Name:</label><br>
<input type="text" id="first_name" size="40">
</div>

<div class="form_field">
<label class="label" for="last_name">Last Name:</label><br>
<input type="text" id="last_name" size="40">
<div class="clear"></div>
</div>

<div class="form_field">
<label class="label" for="email">Email:</label><br>
<input type="text" id="email" size="40">
</div>

<div class="form_field">
<label class="label" for="dob">Date of Birth:</label><br>
<input type="text" id="dob" size="40">
</div>

<div class="form_field">
<label class="label" for="password">Create New Password:</label><br>
<input type="text" id="password" size="40">
</div>

<div class="form_field">
<label class="label" for="confirm_password">Confirm New Password:</label><br>
<input type="text" id="confirm_password" size="40">
</div><div class="clear"></div>

<div class="submit_button">
<button class="button" type="submit">Submit</button>
</div>

</div>

</div>

</body>
</html>
</body>
</html>
