<?php
include "connection.php";

if(isset($_POST['login']))
{
  $username =$_POST['username'];
  $password =$_POST['password'];

  if ($username != "" && $password != ""){
     $sql_query= "select count(*) as cntUser from system_users where username='".$username."' and password='".$password."'";
    $result= mysqli_query($conn, $sql_query);
    $row= mysqli_fetch_array($result);

    $count= $row['cntUser'];
    
    if($count > 0){
      $_SESSION['username']= $username;
      echo"<script>
      alert('Login Successful');
      window.location.href='card.php';
      </script>";

    }  
  
    else{
      echo "<script>
          alert('Invalid Login');
          </script>";
    }
  }
  else{
    echo "<script>
          alert('please fill the details');
          </script>";
  }
}
?>
