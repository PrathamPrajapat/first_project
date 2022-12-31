<!-- Learn how to make a class -->
<?php
class student
{
    private $name, $contact;
    function getData($n,$c)
    {
        $this->name = $n;
        $this->contact = $c;
    }
    function showData()
    {
        echo "Name = " . $this->name . "<br>" . "Contact = " . $this->contact."<br>";
    }
}
$stu1 = new student();
$stu1 -> getData("Pratham", 123456789);
$stu1->showData();

$stu1 -> getData("Piyush", 123456789);
$stu1->showData();

?>