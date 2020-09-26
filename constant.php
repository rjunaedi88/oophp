<?php 

// CARA 1 dengan menggunakan define 
define('NAMA', 'Rachmat junaedi');
echo NAMA;

echo "<br>";

// CARA 2 dengan menggunakan const
const UMUR = 26;
echo UMUR;

define tidak bisa digunakan di dalam kelas

class Coba {
	const NAMA = 'Juned';
}

echo Coba::NAMA;

// MAGIC CONSTANT
echo __LINE__;
echo "<br>";
echo __FILE__;
echo "<br>";
echo __DIR__;
echo "<br>";

function rahmat() {
	return __FUNCTION__;
}

echo rahmat();

echo "<br>";

class Junaedi {
	public $coba = __CLASS__;
}

$obj = new Junaedi;
echo $obj->coba;



?>