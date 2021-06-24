<?php

namespace app;

use App\Mahasiswa;

class PerguruanTinggi{
    public $id;
    public $namaperguruntinggi;
    protected $akreditasi;

    function __construct($id, $namaPT, $akr){
        $this->id= $id;
        $this->namaperguruantinggi= $namaPT;
        $this->ekreditasi= $akr;
    }
    public function registerMaba(){

    }

}