<?php

class Produk {
    
    public  $judul, 
            $penulis,
            $penerbit,
            $harga;
  
    // construct method
    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
      $this->judul = $judul; 
      $this->penulis = $penulis;
      $this->penerbit = $penerbit;
      $this->harga = $harga;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }


}


class CetakInfoProduk {
  public function cetak( Produk $produk) {
    $str = "{$produk->judul} | {$produk->getlabel()} (Rp. {$produk->harga})";
    return $str;
  }
}

// object
$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 3000);

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);

