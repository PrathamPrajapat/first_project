<html>
    <body>
        <form method="post">
            Enter The Principle
            <input type="text" name="Principle" required><br>
            Enter the Rate
            <input type="text" name="Rate" required><br>
            Enter the Time
            <input type="text" name="Time" required><br>
            For Calculation Click Here
            <input type="submit" name="button" value="Click Here"><br>
        </form>
        <?php
            $Principle = $_POST["Principle"];
            $Rate = $_POST["Rate"];
            $Time = $_POST["Time"];
            $SimpleInterest = ($Principle*$Rate*$Time)/100;
            echo "The Simple Interest of the Given Value is = ".$SimpleInterest."<br>";
        ?>
    </body>
</html>