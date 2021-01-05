<?php
include_once "include/template/connection.php";
if(isset($_SESSION['user']) && isset($_POST['product_id']) && isset($_POST['rate'])):
    if(!empty($_POST['product_id']) && !empty($_POST['rate'])):
        $comm = "INSERT INTO review (rate,product_id,user_id) VALUES(".$_POST['rate'].",".$_POST['product_id'].",".$_SESSION['user'].")";
        if(mysqli_query($conn,$comm)):
            echo "done";
        else:
            echo "error";
        endif;
    endif;
endif;
?>