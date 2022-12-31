<html>
    <head>
        <title>
            CRUD OPERATION
        </title>
    </head>
    <body>
        <nav><a href="#">Link</a>
            <a href="view.php">View</a>
        </nav>
        <br>
        <div id="form"class="container">
            <form method="post">
                <label for="eid">Enter Id</label><br>
                <input type="text" id="eid" name="eid" required><br>
                <label for="name">Enter Name</label><br>
                <input type="text" id="name" name="name" required><br>
                <label for="mobile">Enter Mobile No</label><br>
                <input type="text" id="mobile" name="mobile" required><br>
                <label for="age">Enter Age</label><br>
                <input type="text" id="age" name="age" required><br>
                <label for="city">Enter City</label><br>
                <input type="text" id="city" name="city" required><br>
                <button><input type="submit" name="s1" value="submit">
        </div>
        <?php
        require './connection.php';
        if(isset($_REQUEST["s1"]))
        {
            extract($_REQUEST);
            $query = "insert into data values($eid,'$name',$mobile,$age,'$city')";
            $rs = mysqli_query($connect, $query);
            $n = mysqli_affected_rows($connect);
            if($n>0)
            {
                echo "Data Inserted Successfully";
        }
        else
        {
            echo "Data Not Inserted";
        }
        }
        ?>
    </body>
</html>