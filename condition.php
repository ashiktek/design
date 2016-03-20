<?php

$a=[2,3,5,2,5,5,7,4,6,7,4,3,5,5,5,4,4,4,2,2,2];
	$x=0;
	$y=0;
	$z=0;
for ($i=0; $i <count($a) ; $i++) { 
	if ($a[$i]==5) {
		$x=$x+1;
	}
	if ($a[$i]==3) {
		$y=$y+1;
	}
	if ($a[$i]==4) {
		$z=$z+1;
	}
}
echo 'The number of Five is '.$x;
echo "<br>";
echo 'The number of Three is '.$y;
echo "<br>";
echo 'The number of Four is '.$z;

echo "<br>";

$b=[2,2,4,4,4,5,5];

// for ($i=0; $i <count($b) ; $i++) { 
// 	$x=$b[$i];
// 	$r=0;
// 	for ($j=$i; $j <count($b); $j++) { 
// 		if ($b[$i]==$x) {
// 			$r++;
// 		}

// 	}
// }
// echo $r;

echo "<br>";

for ($i=0; $i <count($b) ; $i++) { 
	$x=$b[$i];
	for ($j=$i; $j <count($b) ; $j++) { 
		# code...
	}
}
