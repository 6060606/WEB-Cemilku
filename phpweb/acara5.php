<?php

// nilai terbesar
// function maximum($x, $y)
// {
//  $max = $x; 
//  if ($y> $max) { 
//   $max = $y;
//  } 
//  echo "Nilai terbesar adalah ".$max;
// }
// maximum(150, 100);


//getdate
// $tanggal = getdate();
// print_r($tanggal);

//D,F,Y

// echo "<br/>";
 
// echo date('D - F / Y');


//matrik penjumlahan 3x3
$A = array(array(1,1,1), array(2,2,2), array(3,3,3));
$B = array(array(3,3,3), array(2,2,2), array(1,1,1));

for ($i = 0; $i < 3; $i++){
    for ($j = 0; $j < 3; $j++){
        echo $A[$i][$j]+$B[$i][$j]."   ";
    }
    echo "\n";
}
?>
