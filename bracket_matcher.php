<?php

function BracketMatcher($str) {

// code goes here
if (preg_match('/[^A-Za-z0-9]/', $string)) {
  return '1';
}

$openB = substr_count($str, '(');
$closeB = substr_count($str, ')');

if ($openB == $closeB) {
  return '1';
} else {
  return '0';
}

}
 
// keep this function call here  
echo BracketMatcher(fgets(fopen('php://stdin', 'r')));  

?>