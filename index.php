<?php

// $num = 1;
// if ($num < 5){
// 	echo 'vahem';
// } else if ($num >10){
// 	echo 'suurem';
// };

//--------------------------
// switch($num){
// 	case 1:
// 		echo '1';
// 		break;
// 		case 2:
// 			echo '2';
// 			break;
// 		default;
// }
//--------------------------------
// $num = 2;
// while ($num < 10000){
// 	var_dump($num);
// 	$num *=2;
// };

// do {
// 	var_dump($num);
// }while ($num>10_000_000);

// for ($i = 10; $i<100; $i+=5){
// 	var_dump($i);
// }
//-------------------------------
// $array = [1, 2, 3, 4, 5];
// $array1= [1, 'asdad', 1.3, [5,6,7,8]];
// $array2 = [
// 	[1,2,3],
// 	[4,5,6],
// 	[7,8,9]
// ];
// var_dump($array2[1][0]);
// foreach($array as $num){
// 	var_dump($num);
// }
// foreach ($array as $key => $num) {
// 	var_dump($key . ':' .$num);
// }
//--------------------------
//object
class Person {
	public $name;
	public $age;
	public function __construct($name, $age)
	{
		$this -> name = $name;
		$this -> age = $age;
	}

	public function __toString()
	{
		return 'Hello ' . $this -> name;
	}

	public function __set($name, $value)
	{
		var_dump($name,$value);
	}
	public function __get($name)
	{
		var_dump($name);
		return 'poop color';  
	}
}

$irina = new Person('Irina', 38);
$irina -> hairColor = 'blod';
var_dump($irina);
// echo $irina ->hairColor;
// $irina =38; пропадает обьект 
$name = 'Irina';
$name2 = $name;
$name = 'Martin';
var_dump($name2);

$kati = clone $irina;
$irina->name = 'Martin';
var_dump($kati);
var_dump($irina);
