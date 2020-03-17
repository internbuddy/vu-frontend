<?php
include "api/connection.php";
if(isset($_POST['but_submit'])){

  $username = $_POST['txt_uname'];
    $password =$_POST['txt_pwd'];

    if ($username != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from system_users where username='".$username."' and password='".$password."'";
        $result = mysqli_query($conn,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['username'] = $username;
            echo "<script>
            alert('Login Successful');
            window.location.href='campusdashboard.php';
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
            alert('Please fill the Details');
            </script>";   
  }
}
?>
