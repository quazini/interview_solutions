<?php 

function TreeConstructor($strArr) {

  // code goes here
  $parent = [];
  $child = [];
  for ($i = 0; $i < count($strArr); $i++)
  {
    preg_match_all('!\d+!', $strArr[$i], $matches);
    $parent[$matches[0][1]]++;
    $child[$matches[0][0]]++;
    

  }
  if (max($parent) > 2) {
    return 'false';
  }
  if (max($child) > 1) {
    return 'false';
  }
  return  'true';
}
   
// keep this function call here  
echo TreeConstructor(fgets(fopen('php://stdin', 'r')));  

?>