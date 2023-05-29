<?php
// functions 1
function hello() {
	echo "Hello World...\n";
}
hello();

// functions 2
function sum($num1, $num2) {
	echo $num1 + $num2, "\n";
}
sum(10, 25);

// functions 3
function diff($num1, $num2) {
	echo $num1 - $num2, "\n";
}
diff(10, 25);

// functions 4 return
function sum_otn($num1, $num2) {
	return $num1 - $num2;
}
echo sum_otn(100, 25) * 5;