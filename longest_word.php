<?php

function LongestWord($sen) {  
    $words = explode(' ', $sen);
    $words = array_map(function($value) {
       return preg_replace('/[^a-zA-Z0-9]/', '', $value);
    }, $words);
    $longestWord = $words[0];
    $countWords = count($words) - 1;
  for($i = 0; $i < $countWords; $i++) {
      if (strlen($words[$i]) < strlen($words[$i+1])) {
          $longestWord = $words[$i + 1];
      }
  }
  return $longestWord; 
         
}
   
// keep this function call here  
echo LongestWord(fgets(fopen('php://stdin', 'r'))); 

?>