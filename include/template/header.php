<?php include_once "connection.php"; ?>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="include/layout/css/home.css" rel="stylesheet" />
    <script src="include/layout/js/jquery.js"></script>
    <title><?php echo $pagetitle; ?></title>
  </head>
  <body>
    <nav class="navbar">
      <a href="index.php" class="brand">
        <img src="include/layout/images/logo.png" alt="" />
        <div class="brand-name">Star Coffee</div>
      </a>

      <ul class="navbar-list">
        <li  <?php if($tag=="home"){echo 'class="active"';}?>>
          <a href="index.php">home</a>
        </li>
        <li class="dropdown-container" >
          <a href="#">products</a>
            <ul class="dropdown">
              <li><a href="product.php?cate=1">WHOLESALE COFFEES</a></li>
              <li><a href="product.php?cate=2">WHOLESALE TEAS</a></li>
              <li><a href="product.php?cate=3">EQUIPMENT</a></li>
              <li><a href="product.php?cate=4">ALLIED</a></li>
            </ul>
        </li>
        <li  <?php if($tag=="about"){echo 'class="active"';}?>>
          <a href="about.php">about us</a>
        </li>
        <?php if(!isset($_SESSION['user'])):?>
        <li  <?php if($tag=="login"){echo 'class="active"';}?>>
          <a href="login.php">Login</a>
        </li>
        <li  <?php if($tag=="reg"){echo 'class="active"';}?>>
          <a href="register.php">Rigester</a>
        </li>
        <?php else:?>
        <li><a href="logout.php">Logout</a></li>
        <?php endif;?>
      </ul>
    </nav>