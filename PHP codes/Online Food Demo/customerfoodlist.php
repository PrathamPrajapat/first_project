<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Customerfoodlist</title>
  </head>
  <body id="body-home">
    <div class="black-fill">
    <?php
    require './connection.php';
    include './customermenu.php';
    ?>
    <br>
    <br>
    <div class="container">
        <?php
        $s = "SELECT a.foodimg,a.foodname,a.price,a.srno,b.ctgnm
        from fooditem as a
        inner join categoryname as b on a.ctgid=b.ctgid
        order by a.foodname";

        $rs = mysqli_query($connect, $s);
        $n = mysqli_num_rows($rs);

        if ($n > 0) {
        ?>
    <a href="viewcart.php">View Cart</a>
    <br>
<table class="table table-bordered table-hover">
    <tr>
        <th>Food Detail</th>
    </tr>
<?php
            while ($a = mysqli_fetch_array($rs)) {
        ?>
    <tr>
        <td><img src="<?php echo $a[0]; ?>"
                 height="30" width="50">
            <br>
            Food Category - <?php echo $a[4]; ?>
            <br>
            Food Name <?php echo $a[1]; ?>
            <br>
            Price - <?php echo $a[2]; ?>
            <br>
<a href="cart.php?srno=<?php echo $a[3]; ?>">
    Add To Cart</a>
</td>      
    </tr>
    <?php
            }
        }

?>
</table>
    </div>
    <?php
    include './footer.php';
    ?>
</div>
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