<?php
function isPrime($number) {
    for($i=2; $i<$number; $i++) {
            // echo '<pre>';
            // print_r([
            //     'i' => $i,
            //     'number' => $number
            // ]);
        if($number % $i == 0) {
           return false;
        } 
    }
    return true;
}

$count = 0;

for($i=2; $i<50; $i++) {
    if(isPrime($i)) {
       $count++;
       echo $i;
       echo '<br>';
    } 
}
echo "The number of prime numbers less than 50 is: " . $count;


