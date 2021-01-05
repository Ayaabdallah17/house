<?php
    include_once "include/template/connection.php";
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $password = $password;
        
      $sql = "INSERT INTO `users` (`fname`, `lname`, `email`, `password`) VALUES ('$fname', '$lname', '$email', '$password');";
      if(mysqli_query($conn,$sql))
      {
          echo "success";
      }else{echo "failed";}

      
    }

?>