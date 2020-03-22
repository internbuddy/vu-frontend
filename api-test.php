<head>
<body>
<form method="post">
    <label> Test API </label>
    <input type="submit" name="submit">
 </form>
 <?php
 if (isset($_POST["submit"])){
 $curl = curl_init();
 curl_setopt($curl, CURLOPT_URL, 'https://mavoix.in/virtual-university/api/get-student-info.php');
 curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
 curl_exec($curl);
 }
 ?>
 </body>
 </head>
