<?php 

class ContohStatic {

	public static $angka = 1;

	public static function Helo() {
		return "Halo " . self::$angka++ . " kali";
	}
}

echo ContohStatic::$angka;
echo "<br>";
echo ContohStatic::Helo();
echo "<hr>";
echo ContohStatic::Helo();



// cara manggil nya namaKelas::$properti atau function();
// kalo menggabung dia pakai self::$properti;