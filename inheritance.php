<?php 

// Jualan produl
// komik
// game

class Produk {
	public $judul,
		   $penulis,
		   $penerbit,
		   $harga,
		   $jmlHalaman,
		   $jmlWaktu;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $jmlWaktu = 0) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->jmlWaktu = $jmlWaktu;
	}

	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoProduk(){
		// Komik : Naruto | Misaki Matsutomo, Shonen jump (Rp. 30000) - 100 Halaman.
		$str = "{$this->judul} | {$this->getLabel()}, (Rp.{$this->harga})";
		// if ($this->tipe == "Komik") {
		// 	$str .= " - {$this->jmlHalaman} Halaman.";
		// } else if($this->tipe =="Game") {
		// 	$str .= " ~ {$this->jmlWaktu} Waktu.";
		// }

		return $str;
	}
}

class Komik extends Produk {
	public function getInfoProduk() {
		$str = "Komik : {$this->judul} | {$this->getLabel()}, (Rp.{$this->harga}) - {$this->jmlHalaman} Halaman";

		return $str;
	}
}

class Game extends Produk {
	public function getInfoProduk() {
		$str = "Game : {$this->judul} | {$this->getLabel()}, (Rp.{$this->harga}) ~ {$this->jmlWaktu} Jam";

		return $str;
	}
}

class CetakInfoProduk {
	public function cetak( Produk $produk ){
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;
	}
}


$produk1 = new Komik("Naruto", "Misaki Matsutomo", "Shonen jump", 30000, 100, 0);
$produk2 = new Game("Uncharted", "Neil Amstrong", "Sony Playstation", 250000, 0, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();

// Komik : Naruto | Misaki Matsutomo, Shonen jump (Rp. 30000) - 100 Halaman.
// Komik : Uncharted | Neil Amstrong, Sony Playstation (Rp. 250000) ~ 50 Jam.
