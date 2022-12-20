<?php

$results = array_map(function($number) {
    if($number % 15 === 0) return 'FizzBuzz';
    if($number % 3 === 0) return 'Fizz';
    if($number % 5 === 0) return 'Buzz';
    return $number;
}, range(1,100));

print_r($results);

?>