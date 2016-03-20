<?php

$a=1234;
$b=1234;

$c=$a%10;


$x=[];
$y=[];

for ($i=0; $i <$c ; $i++) { 
	$x[] = $a%10;
	$y[] = $b%10;
	$a = floor($a / 10);
	$b = floor($b / 10);
}
echo '<pre>';
print_r($x);
print_r($y);

$f=0;

for ($j=0; $j < count($x); $j++) { 
	
 $f= $f+ $x[$j] * $y[$j];

	 // * $y[$j];


}


echo $f;

$k=['akash','batash',['c','d']];

print_r($k);
