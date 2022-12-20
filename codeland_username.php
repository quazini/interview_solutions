<?php 

function CodelandUsernameValidation($str) {

// code goes here
$length = strlen($str);
if ($length < 4 || $length > 25) {
  return 'false';
}

if(!preg_match('/^[A-Za-z][A-Za-z0-9_]*[^_]$/', $str)){
  return 'false';
}

return 'true';

}

?>