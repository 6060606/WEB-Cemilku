<?php
//Enkapsulasi Objek : Private

class Car {
    public $model;
   
    public function setmodel ($model)
    {
        $this -> model = $model;
    }
    
}
    class SportsCar extends Car{
        public function hello()
    {
        return "beep! i am a <i>". $this-> model . "</i><br />";
    }

    }
    
$sportsCar1 = new SportsCar();
$sportsCar1 -> setmodel ('TOYOTA');
echo $sportsCar1 -> hello();

//abstract
// abstract class Car {
//     protected $tankvolume;
//     public function setTankVolume($volume)
//     {
//         $this -> tankVolume = $volume;
//     }
//     abstract public function calcNumMilesOnfullTank();
// }

//Prevent Override
// class car{
//     final public function hello()
//     {
//         return "beeb";
//     }
// }
// class SportsCar extends car{
//     public function hello()
//     {
//         return "Hallo";
//     }
// }
// $sportsCar1 = new SportsCar();
// echo $sportsCar1 -> hello();

//tugas1

// class mobilLengkap{
//     protected $warna;
//     protected $jenis;
//     protected $jumlahgigi;

//     public function warnaMobil ($color){
//         $this -> warna = $color;
//     }
//     public function jenisMobil($type){
//         $this -> jenis = $type;
//     }
//     public function jumlahgigimobil($jumlah){
//         $this -> jumlahgigi = $jumlah;
//     }
// }
// class MobilBMW extends mobilLengkap{
//     public function warnaMobilini (){
//         return "warna Mobil Ini adalah <i>".$this -> warna."</i><br/>";
//     }
//     public function jenisMobilini(){
//         return "jenis mobil ini adalah <i>". $this -> jenis."</i><br/>";
//     }
//     public function gigiMobilini(){
//         return "jumlah Gigi mobil ini ada ". $this -> jumlahgigi."<br/>";
//     }
//     public function nyalakanMobil(){
//         return "Mobil ini berhasil dinyalakan <br/> ";
//     }
//     public function matikanMobil(){
//         return "mobil ini berhasil dimatikan <br/>";
//     }
//     public function GigiPersenelang($gigi){
//         return "Gigi mobil sekarang $gigi <br/>";
//     }
// }


// $mobil1 = new MobilBMW();
// $mobil1 -> warnaMobil('Hitam');
// $mobil1 -> jenisMobil('sport car');
// $mobil1 -> jumlahgigimobil(8);

// echo $mobil1 -> warnaMobilini();
// echo $mobil1 -> jenisMobilini();
// echo $mobil1 -> gigiMobilini();
// echo $mobil1 -> nyalakanMobil();
// echo $mobil1 -> GigiPersenelang(5);
// echo $mobil1 -> matikanMobil();

// class Tablet{
//     protected $merk;
//     protected  $camera;
//     protected  $memory;
//     public function setMerk($Newmerk){
//         $this ->merk = $Newmerk;
//     }
//     public function setCamera($newCamera){
//         $this -> camera = $newCamera;
//     }
//     public function setmemory ($newmemory){
//         $this -> memory = $newmemory;
//     }
// }
// class handphone extends Tablet{
//     public function beli_handphone(){
//         return " HP yang baru saya beli adalah hp "
//         .$this->merk." ".$this-> camera." ".$this-> memory;
//     }
// }
// $device = new handphone();
// $device-> setMerk('Bermerek ADVAN');
// $device-> setCamera('Mempunyai Kamera 100MP');
// $device-> setmemory('Dengan Memory RAM 12 GB');

// echo $device->beli_handphone();
?>