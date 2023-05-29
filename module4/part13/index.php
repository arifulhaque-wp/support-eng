<?php

// foreach loop
// foreach loop works for array


$array = [
    "f_name"   => "Support",
    "l_name"   => "Engineer",
    "age"      => 29,
    "height"   => 5.7
];

foreach($array as $value){
    echo $value, "\n";
}


$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

foreach ( $array as $key ) {
 echo "12 x " . $key . " = " . $key * 12, "\n";
}