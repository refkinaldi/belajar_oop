<?php

class Gitar{
  public $brand,
         $seri,
         $warna,
         $harga;

  public function __construct($brand="brand", $seri="seri", $warna="warna", $harga=0){
    $this->brand=$brand;
    $this->seri=$seri;
    $this->warna=$warna;
    $this->harga=$harga;
}

  public function getLabel(){
    return "$this->brand, $this->seri, $this->warna, $this->harga";
  }
}

class CetakInfoGitar{
  public function cetak( Gitar $gitar){
    $str = "{$gitar->brand} | {$gitar->getLabel()} (Rp. {$gitar->harga})";
    return $str;
  }
}

$gitar1 = new Gitar("Fender", "Telecaster", "Merah", 7000000);
$gitar2 = new Gitar("Gibson", "Les Paul", "Hitam", 10000000);

echo $gitar1->getLabel();
echo "<br>";
echo $gitar2->getLabel();
echo "<br>";

$infoGitar1 = new CetakInfoGitar();
echo $infoGitar1->cetak($gitar1);
