<html>
    <head>
        <title>
            CRUD OPERATION
        </title>
    </head>
    <body>
        <?php
        require './connection.php';
        $eid = $_REQUEST["eid"];
        $edit = "select * from data where eid = '$eid'";
        $rs = mysqli_query($connect,$edit);
        $a = mysqli_fetch_array($rs);
        {
        ?>
        <br>
        <div id="form"class="container">
            <form method="post">
                <label for="eid">Enter Id</label><br>
                <input type="text" id="eid" name="eid" value="<?php echo $a[0];?>" readonly><br>
                <label for="name">Enter Name</label><br>
                <input type="text" id="name" name="name" value="<?php echo $a[1];?>"  required><br>
                <label for="mobile">Enter Mobile No</label><br>
                <input type="text" id="mobile" name="mobile" value="<?php echo $a[2];?>"  required><br>
                <label for="age">Enter Age</label><br>
                <input type="text" id="age" name="age" value="<?php echo $a[3];?>"  required><br>
                <label for="city">Enter City</label><br>
                <input type="text" id="city" name="city" value="<?php echo $a[4];?>"  required><br>
                <button><input type="submit" name="update" value="Update">
        </div>
        <?php
        require './connection.php';
        if(isset($_REQUEST["update"]))
        {
            extract($_REQUEST);
            $query = "update data set name='$name', mobile = '$mobile', age = '$age', city = '$city' where eid = '$eid'";
            $rs = mysqli_query($connect, $query);
            $n = mysqli_affected_rows($connect);
            if($n>0)
            {
                echo "Data Updated Successfully";
        }
        else
        {
            echo "Data Not Updated";
        }
        }
        }
        ?>
    </body>
</html>