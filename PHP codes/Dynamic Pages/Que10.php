<html>
    <body>
        <form method="post">
            Enter the First Number
            <input type="text" name="First" required><br>
            Enter the Second Number
            <input type="text" name="Second" required><br>
            Enter the Third Number
            <input type="text" name="Third" required><br>
            To Find the Middle Number Click Here!
            <input type="submit" name="Submit" value="Click Here"><br>
        </form>
        <?php
        $First=$_POST["First"];
        $Second=$_POST["Second"];
        $Third=$_POST["Third"];
        echo "The First Number is ".$First. "<br>";
        echo "The Second Number is ".$Second. "<br>";
        echo "The Third Number is ".$Third. "<br>";
        echo "<br>";
        echo "<br>";
        
        if($First<$Second && $Second<$Third)
        {
            echo "The Middle Number is ".$Second. "<br>";
        }
        elseif($Second>$First && $Third>$First)
        {
            echo "The Middle Number is ".$First. "<br>";
        }
        else
        {
            echo "The Middle Number is ".$Third. "<br>";
        }
        ?>
    </body>
</html>