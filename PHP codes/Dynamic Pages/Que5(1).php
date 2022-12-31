<html>
    <body>
        <form method="post">
            Enter the Length of Rectangle
            <input type="text" name="Length" required><br>
            Enter the Breadth of Rectangle
            <input type="text" name="Breadth" required><br>
            To Calculate Area Click Here!
            <input type="submit" name="Result" value="Click Here"><br>
        </form>
        <?php
        $Length = $_POST["Length"];
        $Breadth = $_POST["Breadth"];
        $Area = ($Length*$Breadth);
        echo "Area  of Rectangle is = ".$Area."<br>";
        ?>
    </body>
</html>