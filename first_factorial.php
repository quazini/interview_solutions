<?php 

function FirstFactorial($num) {  
    return array_product(range(1, $num));
}
   
// keep this function call here  
echo FirstFactorial(fgets(fopen('php://stdin', 'r'))); 

?>