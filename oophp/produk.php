<?php

// class
class Produk {
    
    // property
    public  $judul, 
            $penulis,
            $penerbit,
            $harga;

    // method
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }


}

// object
$produk1 = new Produk();
// $produk1->judul = "Naruto";
// $produk1->penulis = "Masashi Kishimoto";
// $produk1->penerbit = "Shonen Jump";
// $produk1->harga = 3000;

echo $produk1->getlabel();

