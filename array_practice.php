<?php
	
	// define indexed array

	$idxArr = array("John", "Joe", "Harry", "Sally", "Mona");

	// process and print array elements one by one

	// result: "John | Joe | Harry | Sally | Mona | "

	foreach ($idxArr as $i) {

	print "$i | ";
	}



	// define associative array

	$assocArr = array("UK" => "London", "US" => "Washington","FR" => "Paris", "BD" => "Dhaka");

	// process and print array elements one by one

	// result: "UK: London US: Washington FR: Paris BD: Dhaka "

	foreach ($assocArr as $key=>$value) {

	print "$key: $value";

	print "<br />";

	}

	$vivag=["mym"=>"trishal","dha"=>"uttara","ctg"=>"sadr"];

	foreach ($vivag as $key => $thana) {
		echo  "$key:$value"."<br>";
	}

echo "<br>";

	// define associative array

	$assocArr = array("UK" => "London", "US" => "Washington","FR" => "Paris", "BD" => "Dhaka");

	// create an ArrayIterator object

	$iterator = new ArrayIterator($assocArr);

	// rewind to beginning of array

	$iterator->rewind();

	// process and print array elements one by one

	// result: "UK: London US: Washington FR: Paris BD: Dhaka "

	while($iterator->valid()) {

	print $iterator->key() . ": " . $iterator->current() . "<br>";

	$iterator->next();

	}

	echo "<br>";

	$nam = array
				(
					"prothom"=>array("akash","akmol","azom"),

					"ditiyo"=>array("rohim","rigan","lincoln")
				);
	echo '<pre>';
	print_r ($nam);

	echo "<br>";

	$one=1;
	$two=5;
	while ($one < $two) {
		echo "ashik"."<br>";
		$one++;
	}
	
	echo "<br>";

	$a = array(7,12,15,21,14,13);
	// $b=count($a);
		// $a=$b;
	 // if ($b>$a) {
	 // 	 echo $a;
	 // }
	
	// echo $b;
	$n=0;
	for ($i=0; $i < count($a) ; $i++) { 
		// echo $a[$i]."<br>";
		$a=$i;
		if ($a<$i) {
			
		}echo $a;
	}

	// $fruits = ["Banana", "Orange", "Lemon", "Apple", "Mango"];
 //    $myBest = fruits.slice(-3, -1);





$x=array("aaa","","ccc","ddd","");
$y=array_unique($x); 
echo count($x) . "," . count($y);



echo "<br>";

$a=20;

for ($i=1; $i <= $a; $i++){ 
	if ($i>10) {
		// echo "$i"."<br>";
	}
	
}


echo "<br>";


$ar='lincoln.duj@gmaafaratfafafil.com';

$r=str_split($ar);

$babu=0;

for ($i=0; $i < count($r) ; $i++) {

	if ($r[$i] == '@') {

		$babu= ++$i;
	}

	if ($babu != 0) {
		echo $r[$i];
	}

	// echo $babu.'<br>';


	
	
}
echo '<br>';

echo $babu;
// echo $r[$babu];

echo "<br>";

// 1 1 2 3 5 8
 for ($i=10; $i >=1 ; $i--) { 
 	// echo $i.'<br>';

 }
echo '<br>';
//ml no. deposit 
//result 4,5,5,6

$a=[3,4,2,5,7,5,8,6];
// echo count($a);
for ($i=count($a)-1; $i>0; $i--) { 
	if ($i%2!=0) {
		// echo $a[$i].' ';
	}
}
	$x=0;
for ($i=1; $i<count($a); $i=$i+2) { 
	echo $a[$i].'<br>';
	$x=$x+$a[$i];
}
// echo "Total ".$x;
echo "<br>";
$b=[1,2,3,4,5];

for ($i=2014; $i<2050 ; $i=$i+4) { 
	echo 'Leap year'.$i.'<br>';
}

echo "<br>";

$x=0;

for ($i=10; $i>0 ; $i--) { 
	echo 'Serial no:'.$i.'<br>';
	$x=$x+$i;
}

echo $x;

echo "<br>";


for ($i=0; $i <11 ; $i++) { 
	for ($j=2; $j<11 ; $j++) { 
		echo "$i*$j=".$i*$j.'<br>';
	}
}

echo "<br>";
for ($i=6; $i >0 ; $i--) { 
	for ($j=0; $j <$i ; $j++) { 
		echo "1";	}
		echo "<br>";
}
 echo "<br>";

$x = 1;
 $y = 1;
 echo $x."  ";
 echo $y."  ";
 for($i=1; $i<=6; $i++) {

  $z = $x + $y; 
  echo $z."  "; 
  $x = $y ; 
  $y = $z ;
  }

echo "<br>";

$p=[4,3,2,5,7,5,3,4,6,5,8,2,5];

for ($i=0; $i <count($p) ; $i=$i+3) { 	
	echo $p[$i].' ';
}

echo "<br>";

// for ($i=0; $i <6 ; $i++) { 
// 	for ($j=6; $j<$i ; $j--) { 
// 		echo "";	
// 	}
// 		echo "<br>";
// }

for ($i=0; $i <6 ; $i++) { 
	for ($j=0; $j <=$i ; $j++) { 
		echo "*";	}
		echo "<br>";
}

for ($i=5; $i >0 ; $i--) { 
	for ($j=0; $j <$i ; $j++) { 
		echo "*";	}
		echo "<br>";
}

echo "<br>";
// 2 ,5 ,6 ,10 ,1

//2, 5+2+2=9, 6+2=8, 10+2=12, 1+2=3 

$m=[1,4,6,10,8];

for ($i=0; $i <count($m) ; $i++) { 
	$n= $m[$i];
	if ($n%2==0) {
		if($i - 1 >= 0){
			$m[$i-1] = $m[$i-1] + 2;
		}
		if($i + 1 < count($m)){
			$m[$i+1] = $m[$i+1] + 2;
		}
	}
}
print_r($m);

echo "<br>";
