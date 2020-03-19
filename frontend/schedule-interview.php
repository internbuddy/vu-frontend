<?php
error_reporting(0);
$nameErr = $emailErr = $phoneErr = $dateErr = $timeErr= $success= $error="";
if(isset($_POST['submit'])){
    $name= $_POST['name'];
    $contact= $_POST['contact'];
    $email= $_POST['email'];
    $date = $_POST['date'];
    $test_arr  = explode('/', $date);
if (checkdate($test_arr[0], $test_arr[1], $test_arr[2])) {
}else{
    $dateErr= "Enter a valid Date";
}

 $time = $_POST['time'];
       
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
  $nameErr = "Please Fill Valid Name";
}
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid format and please re-enter valid email"; 
}
if (!preg_match("/^[0-9]{10}$/", $contact)) {
$phoneErr= "Please Fill Valid Contact No.";
}  
if($nameErr =="" && $emailErr =="" &&  $phoneErr == "" && $dateErr =="" && $timeErr==""){
$student_id=3;
$campus_id=4;

//$url= "http://localhost/virtual-university/vu-backend/api/interview-request.php";
$url= "https://mavoix.in/virtual-university/api/interview-request.php";
	
  $data = array(
  'name' => $name,
  'contact' => $contact,
  'email' => $email,
  'date' => $date,
  'time' => $time,
  'student_id' => $student_id,
  'campus_id' => $campus_id
  );

  foreach($data as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
rtrim($fields_string, '&');

$req = curl_init($url);
curl_setopt($req, CURLOPT_RETURNTRANSFER, true);
curl_setopt($req, CURLOPT_POST, true);
curl_setopt($req, CURLOPT_POSTFIELDS, $fields_string);
curl_setopt($req,CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($req, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));

$response = curl_exec($req);
/**
 * Check if an error is an SSL failure and retry with bundled CA certs on
 * the assumption that local server has none configured for ext/curl.
 * Error 77 refers to CURLE_SSL_CACERT_BADFILE which is not defined as
 * as a constant in PHP's manual for some reason.
 */
$error = curl_errno($req);
if ($error == CURLE_SSL_PEER_CERTIFICATE || $error == CURLE_SSL_CACERT
|| $error == 77) {
    curl_setopt($req, CURLOPT_CAINFO, __DIR__ . '/var/tmp/cert.pem');
    $response = curl_exec($req);
}

/**
 * Any subsequent errors cannot be recovered from while remaining
 * secure. So do NOT be tempted to disable SSL and try again ;).
 */

curl_close($req);

$array = json_decode($response, true);

	if($array["status"]=="success")
	{
		$success= $array["message"];
	}elseif($array["status"]=="failed"){
		$error =  $array["message"];
	}else{
		$error = "There is some Technical issue please try again";
	}
         }
}
            ?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<style>
	p .error{
    color:red;
}
	p .success{
    color:green;
    font-size: 20px;
    text-align: center;
}

</style>
</head>
<body>
	<br>
	<div class="container border border-info" style="width:80%">
<form method="post">
	<br>
	<h3 style="text-align: center"> Schedule an Interview </h3>
	<br>
	<p class="error" style="text-align: center; color: red;"> <?php echo $error; ?></p>
	<p class="success"  style="text-align: center; color: green; font-weight: bold;  font-size: 20px;"> <?php echo $success; ?></p>
	 <div class="form-group">
    <label for="exampleFullName">Enter Full name</label>
    <input type="text" class="form-control" id="exampleFullName" name="name" placeholder="Enter Full Name" required/>
    	<p class="error" style="color: red;"> <?php echo $nameErr; ?></p>
  </div>
   <div class="form-group">
    <label for="exampleContactNumber">Enter Contact Number</label>
    <input type="text" class="form-control" id="exampleContactNumber" name= "contact" placeholder="Enter Contact Number" required/>
    	<p class="error" style="color: red;"> <?php echo $phoneErr; ?></p>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Enter Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name= "email" placeholder="Enter email" required/>
    	<p class="error" style="color: red;"> <?php echo $emailErr; ?></p>
  </div>

 <div class="form-group">
    <label for="exampleDate">Enter Date</label>
    <input type="text" class="form-control" id="exampleDate" name= "date" placeholder="Enter Date MM/DD/YY" required/>
    	<p class="error" style="color: red;"> <?php echo $dateErr; ?></p>
  </div>
   <div class="form-group">
    <label for="exampleTime">Enter Time</label>
    <input type="text" class="form-control" id="exampleTime" name= "time" placeholder="Enter Time HH:MM" required/>
    	<p class="error" style="color: red;"> <?php echo $timeErr; ?></p>
  </div>

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  <br><br>
</form>

</div>
     
</body>
