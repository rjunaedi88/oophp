<?php 


require_once 'App/init.php';



// $produk1 = new Komik("Naruto", "Misaki Matsutomo", "Shonen jump", 30000, 100);
// $produk2 = new Game("Uncharted", "Neil Amstrong", "Sony Playstation", 250000, 50);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);
// echo $cetakProduk->cetak();

//echo "<hr>";

use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUser;

new ServiceUser();
echo "<br>";
new ProdukUser();