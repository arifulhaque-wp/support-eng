<?php
// multidimentional array

$array = [
 "f_name"   => "Support",
 "l_name"   => "Engineer",
 "age"      => 29,
 "height"   => 5.7,
 "edu_year" => [
  "ssc"        => 1999,
  "hsc"        => 2002,
  "graduation" => 2006,
  "masters"    => 2008,
 ],
 "address"  => [
  "house"   => "120, Block - C",
  "road"    => "Tajmoholroad, R#17",
  "area"    => "Mohammadpur",
  "city"    => "Dhaka",
  "zip"     => 1207,
  "country" => "Bangladesh",
 ],
];

echo $array["address"]["house"];