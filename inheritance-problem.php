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
		   $jmlWaktu,
		   $tipe;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $jmlWaktu = 0, $tipe) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->jmlWaktu = $jmlWaktu;
		$this->tipe = $tipe;
	}

	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoLengkap(){
		// Komik : Naruto | Misaki Matsutomo, Shonen jump (Rp. 30000) - 100 Halaman.
		$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()}, (Rp.{$this->harga})";
		if ($this->tipe == "Komik") {
			$str .= " - {$this->jmlHalaman} Halaman.";
		} else if($this->tipe =="Game") {
			$str .= " ~ {$this->jmlWaktu} Waktu.";
		}

		return $str;
	}
}

class CetakInfoProduk {
	public function cetak( Produk $produk ){
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;
	}
}


$produk1 = new Produk("Naruto", "Misaki Matsutomo", "Shonen jump", 30000, 100, 0, "Komik");
$produk2 = new Produk("Uncharted", "Neil Amstrong", "Sony Playstation", 250000, 0, 50, "Game");

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();

// Komik : Naruto | Misaki Matsutomo, Shonen jump (Rp. 30000) - 100 Halaman.
// Komik : Uncharted | Neil Amstrong, Sony Playstation (Rp. 250000) ~ 50 Jam.
