<?php

class ContohStatic {
  public static $angka = 1;

  public static function halo(){
    return "Hallo ".self::$angka++." kali";
  }
}

echo ContohStatic::$angka;
echo "<br>";
echo ContohStatic::halo();
echo "<br>";
echo ContohStatic::halo();

?>
