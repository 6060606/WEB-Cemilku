<?php
include_once("produk.class.php");
 
class Baju extends Produk {
     
    private $tipe;
     
    public function getTipe() {
        return $this->tipe;
    }
 
    public function setTipe($tipe) {
        $this->tipe = $tipe;
    }
}
 
?>