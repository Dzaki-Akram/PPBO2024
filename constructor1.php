<?php

class Lingkaran
{
     const PHI = 3.14;
     public $jari_jari;

     public function __construct($jari_jari) {
          $this->jari_jari = $jari_jari;
     }

     public function Luas() : float {
          return self::PHI*$this->jari_jari*$this->jari_jari;
     }

     public function Keliling() : float {
          return 2*self::PHI*$this->jari_jari;
     }
}

class Bola
{
     const PHI = 3.14;
     public $jari_jari;

     public function __construct($jari_jari) {
          $this->jari_jari = $jari_jari;
     }

     public function Volume() : float {
          $volume = (4/3)*self::PHI*pow($this->jari_jari, 3);
          return $volume;
     }
}

class Tabung 
{
     const PHI = 3.14;
     public $jari_jari;
     
     public function __construct($jari_jari) {
          $this->jari_jari = $jari_jari;
     }

     public function Volume($tinggi) : float {
          $volume = self::PHI*pow($this->jari_jari, 2)*$tinggi;
          return $volume;
     }    
}

class Kerucut
{
     const PHI = 3.14;
     public $jari_jari;

     public function __construct($jari_jari) {
          $this->jari_jari = $jari_jari;
     }

     public function Volume($tinggi) : float {
          $volume = (1/3)*self::PHI*pow($this->jari_jari, 2)*$tinggi;
          return $volume;
     }
}

$pai = new Lingkaran(8);
$luas_lingkaran = $pai->Luas();
$keliling_lingkaran = $pai->Keliling();

echo "Hasil Perhitungan dengan Rumus Lingkaran adalah : \n";
echo "Nilai Luas Lingkaran adalah : {$luas_lingkaran} \n";
echo "Nilai Keliling Lingkaran adalah : {$keliling_lingkaran} \n";

$basket = new Bola(14);
$volume_bola = $basket->Volume();

echo "Hasil Perhitungan dengan Rumus Bola adalah : \n";
echo "Nilai Volume Bola adalah : {$volume_bola} \n";

$tabung_gas = new Tabung(14);
$volume_tabung = $tabung_gas->Volume(30);

echo "Hasil Perhitungan dengan Rumus Tabung adalah : \n";
echo "Nilai Volume Tabung adalah : {$volume_tabung} \n";

$nasi_tumpeng = new Kerucut(14);
$volume_kerucut = $nasi_tumpeng->Volume(20);

echo "Hasil Perhitungan dengan Rumus Kerucut adalah : \n";
echo "Nilai Volume Kerucut adalah : {$volume_kerucut} \n";
