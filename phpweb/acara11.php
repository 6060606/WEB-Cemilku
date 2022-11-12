<?php
// //case 1
// interface Bird {
//     public function makeSound();

//     }
// class Perkutut implements Bird {
//     public function makeSound(){
//         echo " Kur Kur ";
    
// }
// }
// $burung = new Perkutut ();
// $burung -> makeSound();

// //case 2
// interface Animal {
//     public function makeSound();
// }
// class Cat implements Animal {
//     public function makeSound(){
//         echo " Meow ";
//     }
// }
// class Dog implements Animal {
//     public function makeSound(){
//         echo " Bark ";
//     }
// }
// class Mouse implements Animal {
//     public function makeSound(){
//         echo " Squeak ";
//     }
// }
// $kucing = new Cat();
// $anjing = new Dog();
// $tikus = new Mouse();
// $binatang = array($kucing, $anjing, $tikus);

// foreach($binatang as $animal ){
//     $animal ->makeSound();
// }

// //case 3
// interface Logger
// {
//     public function log($message);
// }
// class FileLogger implements Logger
// {
//     private $handle;
//     private $logFile;
//     public function __construct($filename, $mode = 'a')
//     {
//         $this -> logfile = $filename;
//         $this -> handle = fopen($filename, $mode)
//         or die ('Could not open the log file ');
//     }
//     public function log($message)
//     {
//         $message = date('F j, Y, g:i a'). ': ' . $message . "\n";
//         fwrite($this->handle, $message);
//     }
//     Public function __destruct()
//     {
//         if($this->handle) {
//             fclose($this->handle);
//         }
//     }
// }
// class DatabaseLogger implements Logger
// {
//     public function log($message)
//     {
//         echo sprintf("Log %s to the database\n", $message);
//     }
// }

// $logger = new FileLogger('./log.txt', 'w');
// $logger->log ('PHP interface is awesome');

// $logger = [
//     new FileLogger('./log.txt'),
//     new DatabaseLogger()
// ];
// foreach ($logger as $loggers){
//     $loggers->log('Log message');
// }

//TUGAS

interface BangunDatar{
    public function hitungluas();
  }
 
  class hitungLuasPersegi implements BangunDatar{
    private $sisi = 4;
 
    public function __construct($sisi){
      $this->sisi = $sisi;
    }
 
    public function hitungLuas(){
      return pow($this->sisi,2);
    }
  }
 
  class hitungLuasSegitiga implements BangunDatar{
    private $alas;
    private $tinggi;
 
    public function __construct($alas,$tinggi){
      $this->alas = $alas;
      $this->tinggi = $tinggi;
    }
 
    public function hitungLuas(){
      return (0.5 * $this->alas * $this->tinggi);
    }
  }
 
  class hitungLuasLingkaran implements BangunDatar{
    private $jarijari = 7;
 
    public function __construct($jarijari){
      $this->jarijari = $jarijari;
    }
    
    public function hitungLuas(){
      return (3.14 * pow($this->jarijari,2));
    }
  }
 
  $persegi = new hitungLuasPersegi(4);
  echo 'Luas Persegi = '. $persegi->hitungLuas() . "<br>";
 
  $segitiga = new hitungLuasSegitiga(4,5);
  echo 'Luas Segitiga = '.$segitiga->hitungLuas() . "<br>";
 
  $lingkaran = new hitungLuasLingkaran(7);
  echo 'Luas Lingkaran = '.$lingkaran->hitungLuas() . "<br>";
 
?>
