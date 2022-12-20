<?php 

function BracketCombinations($num) {

  // code goes here
$result = 1;

for ($i = 2; $i <= $num; $i++){

  $result *= (($num + $i) / $i);
}
  return $result;

}
   
// keep this function call here  
echo BracketCombinations(fgets(fopen('php://stdin', 'r')));  

?>