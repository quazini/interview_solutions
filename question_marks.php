<?php

function QuestionsMarks($str) {

// code goes here
$strArr = str_split($str);
$len = strlen($str);
$result = "false";
for($i = 0; $i < $len; $i++) {
  if(is_numeric($strArr[$i])) {
    $n1 = intval($strArr[$i]);
    $i++;
    $markCount = 0;
    for($j = $i;$j < $len;$j++){
      $curr = $strArr[$j];
      if($curr === "?") $markCount++;
      if(is_numeric($curr)){
        //var_dump("n1: ".$n1.", n2: ".$curr);
        if($n1 + intval($curr) === 10){
          //var_dump($n1."+".$curr.", ?: ".$markCount);
          if($markCount === 3) {
            $result = "true";
          } else return "false";
        }
        break;
      }
    }
  }
}
//var_dump($result);
return $result;
}
 
// keep this function call here  
echo QuestionsMarks(fgets(fopen('php://stdin', 'r')));  

?>