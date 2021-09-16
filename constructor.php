<?php

// Jual Produk Komik & Game 

use Produk as GlobalProduk;

class Produk
{
  public $judul,
    $penulis,
    $penerbit,
    $harga;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga")
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  public function getLable()
  {
    return "$this->penulis, $this->penerbit";
  }
}

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 2500000);
$produk3 = new Produk("Dragon Bll");


echo "Komik: " . $produk1->getLable();
echo "<br>";
echo "Game: " . $produk2->getLable();
echo "<br>";
var_dump($produk3);
