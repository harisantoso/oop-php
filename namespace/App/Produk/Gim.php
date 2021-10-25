<?php

class Gim extends Produk implements InfoProduk
{
  public $waktuMain;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0)
  {
    parent::__construct($judul, $penulis, $penerbit, $harga);

    $this->waktuMain = $waktuMain;
  }

  public function getInfo()
  {
    $str = "{$this->judul} | {$this->getLable()} (Rp. {$this->harga})";

    return $str;
  }

  public function getInfoProduk()
  {
    return $str = "Gim : " . $this->getInfo() . " ~ " . $this->waktuMain . " Jam.";
  }
}
