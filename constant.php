<?php

//tidak bisa disimpan di class
define('NAMA','Refkinaldi');
echo NAMA;

echo "<br>";

//bisa disimpan di class
const UMUR = 27;
echo UMUR;

echo "<hr>";

class Coba {
  const HOBI = "Musik";
}

echo Coba::HOBI;

?>
