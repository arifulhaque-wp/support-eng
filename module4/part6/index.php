<?php

// conditional statement if else
$day1 = "Friday";
$day2 = "Saturday";

// || OR , && AND logical operator
if ( $day1 === "Friday" || $day2 === "Saturday" ) {
	echo "Today is holiday.";
} else {
	echo "Today is working day.";
}

echo "\n";

$day_f = "Sunday";
$day_s = "Tuesday";

if ( $day_f === "Friday" && $day_s === "Saturday" ) {
	echo "Today is holiday.";
} else {
	echo "Today is working day.";
}