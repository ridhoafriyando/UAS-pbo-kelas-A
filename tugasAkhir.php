<?php

namespace app\Models;

use App\Mahasiswa;

class tugasAkhir {
    public $id;
    public $judulTA;
    public $mahasiswaTA;
    public $pembimbingTA;
    public $pengujiTA;

    public function setId($id){
    }

    public function getId(){

    }

    public function setJudul($judul){

    }

    public function getJudul(){

    }

    public function setMahasiwa(Mahasiswa $mhsTA){

    }

    public function setPembimbing(Dosen $pembimbingTA){

    }

    public function setPenguji(Dosen $pengujiTA){
        
    }

}