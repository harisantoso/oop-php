<?php

interface Buah
{
  public function makan();
  public function setWarna($warna);
}

interface Benda
{
  public function setUkuran($ukuran);
}

class Aple implements Buah, Benda
{
  protected $warna;
  protected $ukuran;
  public function makan()
  {
    echo "1. kunyak <br>";
    echo "2. sampai bagian tengah";
  }


  public function setWarna($warna)
  {
    $this->warna = $warna;
  }

  public function setUkuran($ukuran)
  {
    $this->ukuran = $ukuran;
  }
}

$tes = new Aple();
echo $tes->makan();
