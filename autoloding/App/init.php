<?php

// require_once 'Produk/InfoProduk.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/Komik.php';
// require_once 'Produk/Gim.php';
// require_once 'Produk/CetakInfoProduk.php';


// spl_autoload_register(function ($class) {
//   require_once 'Produk/' . $class . '.php';
// });

// lebih lengkap
spl_autoload_register(function ($class) {
  require_once __DIR__ . '/Produk/' . $class . '.php';
});
