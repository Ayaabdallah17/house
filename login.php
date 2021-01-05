<?php 
$tag = "login";
 include_once "include/template/connection.php";
$pagetitle = "Log IN Page";
if(!empty($_GET['error']) && $_GET['error']==1){
  $msg = 'wrong credentails' ;
}else{
  $msg = '' ;
}


if (isset($_POST['login'])) {

    $username=$_POST['uname'];
    $password=$_POST['password'];
    
    $result = mysqli_query($conn,'SELECT id FROM users WHERE email="'.$username.'" AND
    password = "'.$password.'" ') ;
    
   if($result->num_rows > 0){
     $id=0;
     while($row = $result->fetch_assoc()){
       $id = $row['id'];
     break;
     }
    $_SESSION['user'] =  $id;

       header('location:index.php');
   }else{
       header('location:login.php?error=1'); ;
   }
   
}


include_once "include/template/header.php"; ?>

    <div class="login-info">
    
      <div class="box">
        <p>Being on this page means that you are one of the beautiful Star Coffee.</p>
      </div>
      <div class="vertical-line"></div>
      <div class="box">
        <p>Your registration means that you have priority in receiving our new news and offers.</p>
      </div>
    </div>
    <center><h2 style="color:red;"><?php echo $msg; ?></h2></center>
    <form class="modal-content animate" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
    ?>" method="post">
      <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required />

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required />

        <button type="submit" name="login">Login</button>
      </div>
    </form>
    <?php include_once "include/template/footer.php"; ?>