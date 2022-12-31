<html>
    <body>
    <form method = "post">
        Enter the Radius of Circle
        <input type="text" name="Radius" required><br>
        For Answer Click Here!
        <input type="submit" name="Answer" value="Click Here"><br>
    </form>
    <?php
    $Radius = $_POST["Radius"];
    $PI = 3.14;
    $Area = $PI*$Radius*$Radius;
    echo "Area of a Circle Is = ".$Area."<br>";
    ?>
    </body>
</html>