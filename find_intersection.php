<?php 

function FindIntersection($strArr) {
  $strArr=implode(',',

    array_intersect(explode(', ',$strArr[0]),
    explode(', ',$strArr[1]))
  
  );

  // code goes here
  return $strArr;

}
   
// keep this function call here  
echo FindIntersection(fgets(fopen('php://stdin', 'r')));  

?>