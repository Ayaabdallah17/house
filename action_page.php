<?php
    include_once "include/template/connection.php";
    $username = $_POST['uname'] ;
    $password = $_POST['psw'] ;

    $sql = mysqli_query($conn,'SELECT * FROM users WHERE email="'.$username.'" AND
     password = "'.$password.'" ') ;
    if(mysqli_num_rows($sql) > 0){
        header('location:index.php');
    }else{
        header('location:login.php?error=1'); ;
    }


?>