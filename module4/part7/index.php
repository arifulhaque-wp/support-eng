<?php

// conditional statement if elseif & else
$day = "Friday";

// || OR , && AND logical operator
if ( $day === "Friday" || $day === "Saturday" ) {
	echo "Today is holiday.";
} elseif ( $day === "Thursday" ) {
	echo "Today is half working day.";
} else {
	echo "Today is working day.";
}

// array dat type

$array = ["Support", "Engineer", 10, 203.7];

echo $array[3];
echo "\n";
echo $array[0];
echo "\n";
echo $array[2];
