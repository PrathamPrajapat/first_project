<!-- Learn about object -->
<?php
class student
{
    private $name, $rollno, $contact;
    
    function getdata($name,$roll,$con)
    {
        $this->name = $name;
        $this->rollno = $roll;
        $this->contact = $con;
    }
    function showdata()
    {
        echo "Name = " . $this->name;
    }
}
$purvik = new student();
$pratham = new student();

$purvik->getdata("Purvik","1","123456789");
$purvik->showdata();

?>