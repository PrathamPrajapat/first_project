<html>
    <body>
        <form method="post">
            Enter the First Number
            <input type="text" name="First" required><br>
            Enter the Second Number
            <input type="text" name="Second" required><br>
            To find the Greatest Nummber Click Here!
            <input type="submit" name="Submit" value="Click Here">
        </form>
        <?php
        $First = $_POST["First"];
        $Second = $_POST["Second"];
        if($First>$Second)
        {
            echo "First Number is Greatest Number.";
        }
        else
        {
            echo "Second Number is Greatest Number.";
        }
        ?>
    </body>
</html>