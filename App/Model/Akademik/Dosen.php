<?php

namespace App\Model\Akademik;

class Dosen extends Pegawai{
    private $nidn;
    
    public function __construct(int $nip, string $nama, int $no_hp, string$alamat, string $nidn) {
        parent::__construct($nip, $nama, $alamat, $no_hp);
        $this->nidn = $nidn;
    }

    public function mengajar() : void{
        echo "{$this->nama} Sedang mengajar perkuliahan. \n ";
    }
}