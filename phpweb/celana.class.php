<?php
 
include_once("produk.class.php");
 
class Celana extends Produk {
     
    private $tipe;
    private $model;
     
    public function getTipe() {
        return $this->tipe;
    }
 
    public function setTipe($tipe) {
        $this->tipe = $tipe;
    }
 
    public function getModel() {
        return $this->model;
    }
 
    public function setModel($model) {
        $this->model = $model;
    }
 
}
?>