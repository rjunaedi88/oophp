<?php 

// Jualan produl
// komik
// game

class Produk {
	public $judul,
		   $penulis,
		   $penerbit,
		   $harga;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}

	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoProduk(){
		// Komik : Naruto | Misaki Matsutomo, Shonen jump (Rp. 30000) - 100 Halaman.
		$str = "{$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";
		// if ($this->tipe == "Komik") {
		// 	$str .= " - {$this->jmlHalaman} Halaman.";
		// } else if($this->tipe =="Game") {
		// 	$str .= " ~ {$this->jmlWaktu} Waktu.";
		// }

		return $str;
	}
}

class Komik extends Produk {
	
	public $jmlHalaman;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0) {
		parent::__construct($judul, $penulis, $penerbit, $harga);

		$this->jmlHalaman = $jmlHalaman;
	}


	public function getInfoProduk() {

		$str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman";

		return $str;
	}
}

class Game extends Produk {

	public $jmlWaktu;

		public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlWaktu = 0) {
			parent::__construct($judul, $penulis, $penerbit, $harga);
			$this->jmlWaktu = $jmlWaktu;
		}

	public function getInfoProduk() {
		$str = "Game : " . parent::getInfoProduk() . " ~ {$this->jmlWaktu} Jam";

		return $str;
	}
}

class CetakInfoProduk {
	public function cetak( Produk $produk ){
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;
	}
}


$produk1 = new Komik("Naruto", "Misaki Matsutomo", "Shonen jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Amstrong", "Sony Playstation", 250000, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();

// Komik : Naruto | Misaki Matsutomo, Shonen jump (Rp. 30000) - 100 Halaman.
// Komik : Uncharted | Neil Amstrong, Sony Playstation (Rp. 250000) ~ 50 Jam.
