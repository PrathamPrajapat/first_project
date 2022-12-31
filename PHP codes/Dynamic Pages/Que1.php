<html>
    <body>
        <form method="post">
            Enter First Number
            <input type="text" name="First" required><br>
            Enter Second Number
            <input type="text" name="Second" required><br>
            Enter Third Number
            <input type="text" name="Third" required><br>
            <input type="submit" name="button" value="Click Here">
        </form>
        <?php
        $First=$_POST["First"];
        $Second=$_POST["Second"];
        $Third=$_POST["Third"];
        $Average = ($First + $Second + $Third)/3;
        echo "The Average of Three Numbers are = ".$Average."<br>";
        ?>
    </body>
</html>