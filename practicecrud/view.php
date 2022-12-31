<html>
    <head>
        <title>
            View DATA
        </title>
    </head>
    <body>
        <?php
        require './connection.php';
        $show = "select * from data";
        $rs=mysqli_query($connect, $show);
        $n = mysqli_num_rows($rs);
        if($n>0)
        {
        ?>
        <table>
            <thead>
            <th>Eid</th>
            <th>Name</th>
            <th>Mobile No.</th>
            <th>Age</th>
            <th>City</th>
            <th>Option</th>
            </thead>
            <?php
            while($a= mysqli_fetch_array($rs))
            {
            ?>
            <tbody><tr><td><?php echo $a[0];?></td>
                    <td><?php echo $a[1];?></td>
                    <td><?php echo $a[2];?></td>
                    <td><?php echo $a[3];?></td>
                    <td><?php echo $a[4];?></td>
                    <td><a href="edit.php?eid=<?php echo $a[0];?>">Edit</a>
                    <a href="delete.php?eid=<?php echo $a[0];?>">Delete</a></td>
                </tr>
            </tbody>
        </table>
        <?php
        }
        }
        ?>
        
    </body>
</html>


