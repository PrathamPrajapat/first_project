<html>
    <body>
        <form method="post">
            Enter the Number
            <input type="text" name="Number" required><br>
            For Reversing of Number Click Here!
            <input type="submit" name="Submit" required><br>
        </form>
        <?php
        $Number = $_POST["Number"];
        $Reverse = 0;
        echo "Number Before Reversing = ".$Number."<br>";
        while($Number>0)
        {
            $Rem = $Number%10;
            $Reverse = ($Reverse*10) + $Rem;
            $Number = (int)($Number/10);
        }
        echo "Number After Reversing = ".$Reverse."<br>";
        ?>
    </body>
</html>