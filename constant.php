<?php

// PERBEDAAN
// PENULISAN HANYA CONST BISA DIDALAM CLASS
// DAN DIFINE UNTUK DILUAR CLASS

// DEFINE
// define('NAMA', 'Hari Santoso');
// echo NAMA;

// echo "<hr>";

// CONST
// const UMUR = 35;
// echo UMUR;

// class Coba
// {
//   const NAMA = 'Hari Santoso';
// }

// echo Coba::NAMA;


// __FUNCTION__
// function coba()
// {
//   return __FUNCTION__;
// }
// echo coba();


// __CLASS__
class Coba
{
  public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;
