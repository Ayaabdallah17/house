<?php 
$tag = "reg";
$pagetitle = "Register Page";
include_once "include/template/header.php"; ?>

    <!-- <h1>Register Form</h1> -->
    <h3
      style="
        text-align: center;
        margin-top: 20px;
        color: #784238;
        font-weight: bold;
        font-size: 24px;
        text-transform: capitalize;
      "
    >
      Fil form to complete your registertion !
    </h3>
    <form id="frm" action="register.php" method="POST">
      <h1>Register Form</h1>
      <div class="container">
        <label for="fname"><b>First Name</b></label>
        <input type="text" placeholder="First Name" id="fname" name="fname" required />

        <label for="lname"><b>Last Name</b></label>
        <input type="text" placeholder="Last Name" id="lname" name="lname" required />

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" id="email" name="email" required pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}"/>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" id="password" name="password" required />

        <label for="psw-repeat"><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" id="password-confirm" name="password-confirm" required />
        <hr />
        <button id="sbm" type="submit" class="registerbtn">Register</button>
        <div id="res"></div>
      </div>
    </form>

<script>
// validate form data on client side first before send to server side

$(document).ready(function(){



  $('#sbm').click(function(e){
    e.preventDefault();
  

    var data = $('#frm').serialize();
    var error="";
    var fname = $('#fname').val();
    var lname = $('#lname').val();
    var email = $('#email').val();
    var password = $('#password').val();
    var passwordconfirm = $('#password-confirm').val();
    
     if(fname.length > 2 || lname.length > 2  )
     {
        if( validateEmail(email)) { 
          if(password.length >= 8){
          if(password == passwordconfirm){
               // validation success then send to server side
                
               $.ajax({
                 type: 'post',
                  url: 'formaction.php',
                 data:data,
                 success:function(data){window.location = "login.php";}
                    
               });
           }else{
             error = "Password And Confirm Must Be Equel";
           }
       }else{
         error = "Password Length Must Be At Least  8 Characters";
        }
         }else{error="Enter Valid Email";
     }
       
      }else
    {
        error = "First Name And Last Name Lenght Coudn't Be Less Than 3 Character";
      }

     
      alert(error);
                  

  });

  function validateEmail($email) {
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  return emailReg.test( $email );
}

});

</script>
    <?php include_once "include/template/footer.php"; ?>