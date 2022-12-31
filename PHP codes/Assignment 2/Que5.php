<?php
function Palindrome($MyString) {
  $revString = strrev($MyString);
  if ($revString == $MyString){
    echo $MyString." is a Palindrome string.<br>";
  } else {
    echo $MyString." is not a Palindrome string.<br>";
  }
}

Palindrome("radar");
Palindrome("rubber");
Palindrome("malayalam");
?>