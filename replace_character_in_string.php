<?php
  
// Declare a variable and initialize it
$string = "GeeksforGeeks is a best platform.....";
  
// Character which need to replace
$regex = "/\.+$/";
  
// Use preg_replace() function to replace 
// the character
echo preg_replace($regex, "", $string);
   
?>