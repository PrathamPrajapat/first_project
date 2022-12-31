<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./style.css">
    <title>Main Page</title>
  </head>
  <body>
<?php
include './customermenu.php';
?>
      <br>
<div id='categories'>
<div class="container">
        <h2 class="heading text-center" id="categories">Categories We Serve</h2>
    <div class="row">
        <!--1st card-->
        <div class="card col-md-4 mt-3">
  <img src="./images/snacksnoodles.webp" class="card-img-top" alt="Snacks Images">
  <div class="card-body">
    <h5 class="card-title">Snacks</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="snacks.php" class="btn btn-primary">View More</a>
  </div>
</div>
        <!--2nd card-->
           <div class="card col-md-4 mt-3">
  <img src="./images/breakfastaaloo.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Breakfast</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="breakfast.php" class="btn btn-primary">View More</a>
  </div>
</div>
        <!--3rd card-->
           <div class="card col-md-4 mt-3">
  <img src="./images/beveragescold.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Beverages</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="beverages.php" class="btn btn-primary">View More</a>
  </div>
</div>
    </div>
        <!--bottom row-->
            <div class="row">
                <!--4th card-->
              <div class="card col-md-6 mt-3">
  <img src="./images/lunchpack.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Lunch</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="lunch.php" class="btn btn-primary">View More</a>
  </div>
</div>
                <!--5th card-->
                <div class="card col-md-6 mt-3">
  <img src="./images/dinnerpaneer.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Dinner</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="dinner.php" class="btn btn-primary">View More</a>
  </div>
</div>
                <!--end-->
            </div>
        </div>
    </div>
</div>
    <br>
    <br>
<?php
include './footer.php';


?>
<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>