<html>
    <body>
        <form method="post">
            Enter the Age of Candidate
            <input type="text" name="Age" required><br>
            Enter the Nationality of Candidate
            <input type="text" name="Nationality" required><br>
            To Check the Eligibility to Vote Click Here!
            <input type="submit" name="Submit" value="Click Here">
        </form>
        <?php
        $Age=$_POST["Age"];
        $Nationality=$_POST["Nationality"];
        
        if(($Age>=18)and ($Nationality==("Indian"||"INDIAN"||"indian")))
        {
            echo "Candidate is Eligible for Voting.";
        }
        else
        {
            echo "Candidate is not Eligible for Voting.";
        }
        ?>
    </body>
</html>