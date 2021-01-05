<?php 
$tag = "product";
$pagetitle = "product Page";
include_once "include/template/header.php"; 
include_once "include/template/connection.php";
if(isset($_GET['cate']) && !empty($_GET['cate'])):
  $cate = $_GET['cate'];
$comm = "SELECT products.*,category.name FROM products JOIN category on products.category_id=category.id where(products.category_id=$cate)";
$result = mysqli_query($conn,$comm);?>
<div id="products">
<?php
if($result->num_rows > 0):
  while($row = $result->fetch_assoc()):
    $comm = "SELECT AVG(rate) as rate from review where(product_id=".$row['id'].")";
    $res = mysqli_query($conn,$comm);
?>

    <!-- Coffee page Banner -->
    <div class="coffee-banner">
      <img src="<?php echo $row['img'];?>" alt="" />

      <div class="photo-description">
        <h1><?php echo $row['title'];?></h1>
        
        <p><?php echo $row['desc'];?>

        <h3>Price: <?php echo $row['price'];?> $</h3>
        <h4><?php 
        $i=5;
        $rate =5;
        if($res->num_rows > 0):
        while($r = $res->fetch_assoc()):
          $rate = $r['rate'];
          $i = intval($rate);
        endwhile;endif;
        $j = 5 - $i;
        while($i > 0){echo "<i style='color:yellow;'>&#10029</i>";$i--;}
        while($j > 0){echo "<i style='color:yellow;'>&#10025;</i>";$j--;}
        echo " ".number_format($rate,1,".","");?></h4>
        <?php
        if(isset($_SESSION['user'])):
          $comm = "SELECT id from review where(product_id = ".$row['id']." and user_id = ".$_SESSION['user'].")";
          $res = mysqli_query($conn,$comm);
          $id = 0;
          if($res->num_rows > 0):
              while($r = $res->fetch_assoc()){
                $id = $r['id'];
              }
            endif;
          if($id == 0):
        ?>
       
        <form id="rate-form_<?php echo $row['id'];?>" method="POST" action="">
<label for="rate_<?php echo $row['id'];?>">rate this product</label>
<select id="rate_<?php echo $row['id'];?>" name="rate">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
      </select>
      <button type="submit" onclick="Rate(<?php echo $row['id'];?>)">submit review</button>
      <input type="hidden" id="product_id_<?php echo $row['id'];?>" name="product_id" value="<?php echo $row['id']; ?>">
      </form>
          <?php endif;endif;?>
      </div>
    </div>
<hr  style="border:1px solid #111">
  <?php endwhile; endif; ?>
      </div>
      <button id="toggleShow" style=" width: 150px; margin-left: 15px;">Show Comments</button>
  <div class="coffee-banner" id="comments" style="display: none" data-show="false">
    <div id="content" class="photo-description">
          <?php
          $comm = "SELECT comments.*,users.fname as fname,users.lname as lname from comments join users on comments.user_id=users.id where(cate_id=".$_GET['cate'].")";
          $comments = mysqli_query($conn,$comm);
          if($comments->num_rows> 0):
            while($row = $comments->fetch_assoc()):
          ?>
          <h4><?php echo $row['fname'].' '.$row['lname'];?></h4>
          <p><?php echo $row['des'];?></p>
        <hr/>
          <?php endwhile; endif;?>
   </div>     
  </div>
 <!--to   --> 
  <?php
  if(isset($_SESSION['user'])):
  ?>
<div class="container">
<form class="modal-content animate" id="comment-form" method="POST" action="">
  <label for="comment">leave your comment:</label>
<textarea name="comment" id="comment" style="width:100%;min-height:200px"></textarea>
<input type="hidden" id="cate" name="cate" value="<?php echo $_GET['cate'];?>">
<button type="submit" name="submit">publish comment</button>
</form>
<script>
$("#comment-form").submit(function(e){
e.preventDefault();
var data = $("#comment-form").serialize();
$.ajax({
type: 'post',
url:'comment.php',
data:data,
success:function(data){
  $("#content").html(data);
$("#comment").val('');
}
});
});  

function Rate(id){
var data = $("#rate-form_"+id).serialize();
$.ajax({
type: 'post',
url:'rate.php',
data:data,
success:function(data){
  if(data == "done"){
    location.reload();
  }else{
    alert("error");
  }
}
});
}
  
</script>
</div>
<?php
endif;
  else:
    if(headers_sent()){
      die('<p>if you not automatically redirected please press <a href="index.php">here</a></p>');
    }else{
      header("Location: index.php");
    }
  endif;
  include_once "include/template/footer.php"; ?>
  
  <script>
    let commentBox = document.getElementById('comments');
    document.getElementById('toggleShow').addEventListener('click', function(){
        console.log('clicked')
        if(commentBox.dataset.show === "false"){
            commentBox.style.display = "block";
            commentBox.dataset.show = "true";
            this.innerText = 'Hide Comments';
        } else {
            commentBox.style.display = "none";
            commentBox.dataset.show = "false";
            this.innerText = 'Show Comments';
        }
    });
  </script>
    