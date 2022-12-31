<!-- write a php script to extract the user name from the following email id -->
<?php
$mailid  = 'rayy@example.com';
$user = strstr($mailid, '@', true);
echo $user."\n";
?>