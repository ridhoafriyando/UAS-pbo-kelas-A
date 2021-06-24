<?php

namespace App\Models;

class Mahasiswa extends Pengguna{
    private $nim;
    private $nama;
    protected $tanggal_lahir;
    protected $jenis_kelamin;
    private $ipk;
    private $alamat;
   
    
    function __construct($nim,$nama,$tgl,$jk){
        $this->nim = $nim;
        $this->nama = $nama;
        $this->tanggal_lahir = $tgl;
        $this->jenis_kelamin = $jk;
    }
    
    
    public function getNim()
    {
        return $this->nim;
    }

    public function getNama()
    {
        return $this->nama;
    }
    public function setNim($nim)
    {
        $this->nim = $nim;
    }

    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function setTanggalLahir($tgl)
    {
        $this->tanggal_lahir = $tgl;
    }

    public function setJenisKelamin($jk)
    {
        $this->jenis_kelamin = $jk;
    }
    public function getipk($ipk){

    }
    public function setipk($ipk){

    }
   
    public function inputkannilai(){
        
    }
    public function updateprofil(){

    }
    
}