<?php

class Produk {
     
    protected $ukuran;
    protected $warna;
    protected $nama;
     
    public function getUkuran() {
        return $this->ukuran;
    }
 
    public function setUkuran($ukuran) {
        $this->ukuran = $ukuran;
    }
 
    public function getWarna() {
        return $this->warna;
    }
 
    public function setWarna($warna) {
        $this->warna = $warna;
    }
 
    public function getNama() {
        return $this->nama;
    }
 
    public function setNama($nama) {
        $this->nama = $nama;
    }
}
?>