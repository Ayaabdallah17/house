<?php
include_once "include/template/connection.php";
if(isset($_POST['comment']) && isset($_POST['cate']) && isset($_SESSION['user'])){
    if(!empty($_POST['comment']) && !empty($_POST['cate'])){
        
        $comm = "INSERT INTO comments (des,cate_id,user_id) VALUES('".$_POST['comment']."',".$_POST['cate'].",".$_SESSION['user'].")";
        if(mysqli_query($conn,$comm)){
            $comm = "SELECT comments.*,users.fname as fname,users.lname as lname from comments join users on comments.user_id=users.id where(cate_id=".$_POST['cate'].")";
  $comments = mysqli_query($conn,$comm);
  if($comments->num_rows> 0):
    while($row = $comments->fetch_assoc()):
  ?>
  <h3><?php echo $row['fname'].' '.$row['lname'];?></h3>
  <p><?php echo $row['des'];?></p>
    <?php endwhile;endif;
        }else{
            echo "unknown error";
        }
    }else{
        echo "don't leave empty fields";
    }
}
?>