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
	public $gender;
	public $idCode;
	public static $id;


	private function getCentury(){
	$num = (int) substr($this -> idCode, 0, 1);
	return 1700 + ceil($num/2) *100;
		// switch($num){
		// 	case 1:
		// 	case 2:
		// 		return 1800;
		// 	case 3:
		// 	case 4:
		// 		return 1900;
		// 	case 5:
		// 	case 6:
		// 		return 2000;
		// }
	}

	public function birthYear(){
		return substr($this ->idCode, 1, 2);
	}
	public function getFullYear(){
		return $this->getCentury() + (int)substr($this->idCode, 1, 2);
}
	public static function getId(){ 
		return self::$id;
	}
}
class Client extends Person{
	public $purchases = [];
	public function addItem($itemId){
		$this -> purchases[] = $itemId; 
	}
}

Person::$id = 2;

// class Work extends Person {
// 	public $salary;
// }
// class Manager extends Work {

// }
// $irina = new Client();
// $irina->name = 'Irina Babkina';
// $irina -> age = 49;
// $irina -> gender = 'woman';
// $irina -> idCode = '47304142227';
// var_dump($irina);
// var_dump($irina ->getFullYear());
// $irina -> addItem(123);
Person::getId();
$irina = new Person ();
$kati = new Person();
var_dump(Person::$id);
var_dump(Person::$id);
var_dump($kati::$id);
