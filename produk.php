<?php 

// Jualan produl
// komik
// game

class produk {
	public $judul = "judul", //cara pertama
		   $penulis = "penulis",
		   $penerbit = "penerbit",
		   $harga = 0;

	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}
}

// $produk1 = new produk();
// $produk1->judul = "Naruto"; //cara kedua
// var_dump($produk1);

// $produk2 = new produk();
// $produk2->judul = "Uncharted";
// $produk2->propertyBaru = "hahah";
// var_dump($produk2);

$produk3 = new produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Misaki Masutomo";
$produk3->penerbit = "Shonen jump";
$produk3->harga = 30000;

$produk4 = new produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Amstrong";
$produk4->penerbit = "Sony Playstation";
$produk4->harga = 250000;

echo "Komik : . " . $produk3->getLabel();
echo "<br>";
echo "Game : . " . $produk4->getLabel();
