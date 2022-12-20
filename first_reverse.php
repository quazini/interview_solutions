<?php 

function FirstReverse($str) {  

  // code goes here
  return strrev($str); 
         
}
   
// keep this function call here  
echo FirstReverse(fgets(fopen('php://stdin', 'r')));  

?>