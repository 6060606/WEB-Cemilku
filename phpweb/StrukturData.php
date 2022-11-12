    <?php
    //1
        // $nilai_a        =array(4,6,16,20,12);
        // $nilai_b        =array(5,8,23,30,41);


        // for ($i = 0; $i < 5; $i++){
        //     echo $nilai_a[$i]$nilai_b[$i]."   ";
        // }
        // echo "\n";
          
     
    //2
    $A = array(array(5,14,25), array(1,5,16), array(31,12,9));
    $B = array(array(12,21,24), array(3,7,21), array(20,17,24));

    for ($i = 0; $i < 3; $i++){
    for ($j = 0; $j < 3; $j++){
    echo $A[$i][$j]+$B[$i][$j]."   ";
        }
     echo "\n";
}

    ?>

    
