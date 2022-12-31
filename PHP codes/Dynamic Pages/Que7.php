<html>
    <body>
        <form method="post">
            Enter the Year
            <input type="text" name="Year" required><br>
            To check Year is a leap Year Click Here!
            <input type="submit" name="Submit" Click Here>
        </form>
        <?php
        $Year = $_POST["Year"];
        if($Year%400==0)
        {
            echo "Year is a Leap Year";
        }
        elseif($Year%100==0)
        {
            echo "Year is not a Leap Year";
        }
        elseif($Year%4==0)
        {
            echo "Year is a Leap Year";
        }
        else
        {
            echo "Year is not a Leap Year";
        }
        ?>
    </body>
</html>