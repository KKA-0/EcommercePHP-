<?php

    $con = mysqli_connect('localhost','root');
    mysqli_select_db($con,'ecommerce1');
    $sql = "SELECT * FROM product WHERE featured=1";
    $featured = $con->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>TechBuy</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="https://ajax.com.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Techbuy.com</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Products
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Laptops</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Phones</a>
         
        </div>
      </li>
      
    </ul>
    
  </div>
</nav>
<div class="col-md-2">
    <div class="col-md-8">
        <h2 class="text-center">Top Products</h2> <br> <br></div>
        <?php
            while($product = mysqli_fetch_assoc($featured)):
        ?>
        <div class="col-md-5">
            <h4> <?= $product['title'];?></h4>
            <img src="<?= $product['image'];?>" alt="<?= $product['title']; ?>"/>
            <p class="lprice">Rs <?= $product['price'];?></p>
            <a href="details.php">
                <button type="button" class="btn btn-success" data-toggle="model" data-target="#details-1">More</button>
            </a>
        </div>
        <?php endwhile; ?>
</div>
</div>
</body>
</html>