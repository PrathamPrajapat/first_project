<html>
    <body>
        <form method="post">
            Enter the Temperature in Fahrenheit
            <input type="text" name="Fahrenheit"><br>
            To Get Temperature in Celcius Click Here!
            <input type="submit" name="Submit" value="Click Here">
        </form>
        <?php
        $Fahrenheit = $_POST["Fahrenheit"];
        $Celcius = 5*($Fahrenheit - 32)/9;
        echo "The Temperature in Celcius is = ".$Celcius."<br>";
        ?>
    </body>
</html>