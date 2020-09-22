<?php

class Produk{
  private $judul,
         $penulis,
         $penerbit,
         $harga,
         $diskon =0;

  public function __construct($judul="judul", $penulis="penulis", $penerbit="penerbit", $harga=0){
    $this->judul=$judul;
    $this->penulis=$penulis;
    $this->penerbit=$penerbit;
    $this->harga=$harga;
  }

  public function getLabel(){
    return "$this->judul, $this->penulis, $this->penerbit";
  }

  public function getInfoProduk(){
    $str ="{$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";

    return $str;
  }

//setter & getter-------------------------
  public function getDiskon(){
    return $this->diskon;
  }

  public function setDiskon( $diskon ){
    $this->diskon = $diskon;
  }

  public function setHarga($harga){
    $this->harga=$harga;
  }

  public function getHarga(){
    return $this->harga - ($this->harga *$this->diskon /100 );
  }

  public function setPenulis($penulis){
    $this->penulis=$penulis;
  }

  public function getPenulis(){
    return $this->penulis;
  }

  public function setPenerbit($penerbit){
    $this->penerbit=$penerbit;
  }

  public function getPenerbit(){
    return $this->penerbit;
  }

  public function setJudul($judul){
    if(!is_string($judul)){
      throw new \Exception("Judul harus string");
    }else{
      $this->judul = $judul;
    }
  }

  public function getJudul(){
    return $this->judul;
  }
//----------------------------------------

}

class Komik extends Produk{
  public $jmlHalaman;

  public function __construct($judul="judul", $penulis="penulis", $penerbit="penerbit", $harga=0,
  $jmlHalaman=0){
    parent::__construct($judul, $penulis, $penerbit, $harga);
    $this->jmlHalaman = $jmlHalaman;
  }

  public function getInfoProduk(){
      $str ="Komik :".parent::getInfoProduk()."- {$this->jmlHalaman} Halaman.";
      return $str;
  }
}

class Game extends Produk{
  public $waktuMain;

  public function __construct($judul="judul", $penulis="penulis", $penerbit="penerbit", $harga=0,
  $waktuMain=0){
    parent::__construct($judul, $penulis, $penerbit, $harga);
    $this->waktuMain=$waktuMain;
  }

  public function getInfoProduk(){
      $str ="Game :".parent::getInfoProduk()."- {$this->waktuMain} Jam.";
      return $str;
  }

}

class CetakInfoProduk{
  public function cetak( Produk $produk){
    $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
  }
}


$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmen", "Sony Computer", 25000, 50);

// echo "Komik : ". $produk1->getLabel();
// echo "<br>";
// echo "Game : ". $produk2->getLabel();
// echo "<br>";
//
// $informasiProduk = new CetakInfoProduk();
// echo $informasiProduk->cetak($produk1);
echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";


$produk2->setDiskon(30);
echo $produk2->getHarga();

echo "<hr>";

$produk2->setPenulis("Refkinaldi");
echo $produk2->getPenulis();
