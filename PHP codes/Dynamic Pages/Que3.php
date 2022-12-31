<html>
    <body>
        <form method="post">
            Enter the First Number
            <input type="text" name="a" required><br>
            Enter the Second Number
            <input type="text" name="b" required><br>
            For Swapping of Number Click Here!
            <input type="submit" name="s" value="Click Here">
        </form>
        <?php
        $a = $_POST["a"];
        $b = $_POST["b"];
        echo " Number Before Swapping are ".$a. " " .$b."<br>";
        {
            $a = $a+$b;
            $b = $a-$b;
            $a = $a-$b;
        }
        echo " Numbers After Swapping are ".$a. " " .$b."<br>";
        ?>
    </body>
</html>