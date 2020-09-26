<?php 

// Jualan produl
// komik
// game

interface InfoProduk {
	public function getInfoProduk();
}

abstract class Produk {
	protected $judul,
		   $penulis,
		   $penerbit,
		   $harga,
		   $diskon = 0;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}

	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}

	public function setJudul($judul) {
		if (!is_string($judul)) {
			throw new Exception("Error Processing Request");
		}
		$this->judul = $judul;
	}

	public function getJudul() {
		return $this->judul;
	}

	public function setPenulis($penulis) {
		$this->penulis = $penulis;
	}

	public function getPenulis() {
		return $this->penulis;
	}

	public function setPenerbit($penerbit) {
		$this->penerbit = $penerbit;
	}

	public function getPenerbit() {
		return $this->penerbit;
	}

	public function setDiskon( $diskon ) {
		$this->diskon = $diskon;
	}

	public function setHarga ($harga) {
		$this->harga = $harga;
	}

	public function getHarga() {
		return $this->harga - ($this->harga * $this->diskon / 100);
	}

	abstract function getInfo();

	
}

class Komik extends Produk implements InfoProduk {

	public $jmlHalaman;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0) {
		parent::__construct($judul, $penulis, $penerbit, $harga);

		$this->jmlHalaman = $jmlHalaman;
	}

	public function getInfo() {

		$str = "{$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";

		return $str;
	}


	public function getInfoProduk() {

		$str = "Komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman";

		return $str;
	}
}

class Game extends Produk implements InfoProduk {

	public $jmlWaktu;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlWaktu = 0) {
		parent::__construct($judul, $penulis, $penerbit, $harga); // overriding
		$this->jmlWaktu = $jmlWaktu;
	}

	public function getInfo() {

		$str = "{$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";

		return $str;
	}

	public function getInfoProduk() {
		$str = "Game : " . $this->getInfo() . " ~ {$this->jmlWaktu} Jam";

		return $str;
	}
}

class CetakInfoProduk {

	public $daftarProduk = array();

	public function tambahProduk ( Produk $produk ) {
		$this->daftarProduk[] = $produk;
	}

	public function cetak(){
		$str = "DAFTAR PRODUK : <br>";

		foreach ($this->daftarProduk as $p) {
			$str .= "- {$p->getInfoProduk()} <br>";
		}
		return $str;
	}
}


$produk1 = new Komik("Naruto", "Misaki Matsutomo", "Shonen jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Amstrong", "Sony Playstation", 250000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();


