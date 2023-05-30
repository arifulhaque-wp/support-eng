<?php
// php functions array upper case
$array=["FirSt" => 1, "fuEl" => "Oil", "sWeEt" => "sugar"];
print_r(array_change_key_case($array, CASE_UPPER)). "\n";

// php function array replacement
$fruits = ["orange", "banana", "apple", "raspberry"];
$replacements = [0 => "pineapple", 4 => "cherry"];
$basket = array_replace($fruits, $replacements);
print_r($basket). "\n";

// php function array count
$array = array(1, "hello", 1, "world", "hello");
print_r(array_count_values($array));