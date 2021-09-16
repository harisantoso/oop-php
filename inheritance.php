<?php

class Produk
{
  public $judul,
    $penulis,
    $penerbit,
    $harga,
    $jmlHalaman,
    $waktuMain;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->jmlHalaman = $jmlHalaman;
    $this->waktuMain = $waktuMain;
  }

  public function getLable()
  {
    return "$this->penulis, $this->penerbit";
  }

  public function getInfoProduk()
  {
    $str = "{$this->judul} | {$this->getLable()} (Rp. {{$this->harga})";

    return $str;
  }
}

class Komik extends Produk
{
  public function getInfoProduk()
  {
    $str = "Komik : {$this->judul} | {$this->getLable()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
    return $str;
  }
}

class Gim extends Produk
{
  public function getInfoProduk()
  {
    // $str = "Gim : {$this->judul} | {$this->getLable()} (Rp. {$this->harga}) ~ {$this->waktuMain} Jam.";
    // beda penulisan saja
    return $str = "Gim : " . $this->judul . " | " . $this->getLable() . " (Rp" . $this->harga . ") ~ " . $this->waktuMain . " Jam.";
  }
}

class CetakInfoProduk
{
  public function cetak(Produk $produk)
  {
    return $str = "{$produk->judul} | {$produk->getLable()} (Rp. {$produk->harga})";
  }
}

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0);
$produk2 = new Gim("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 0, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
