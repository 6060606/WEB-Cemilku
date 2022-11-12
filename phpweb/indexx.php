<?php
echo "
<div class='container'>
<form action='' method='post'>
<p>Bilangan1 <input type='text' name='bilangan1'></p>
<p><input type='Radio' name='operasi' value='tambah'>+ <span style='font-size:10px;'>( penjumlahan )</span></p>
<p><input type='Radio' name='operasi' value='kurang'>- <span style='font-size:10px;'>( pengurangan )</span></p>
<p><input type='Radio' name='operasi' value='bagi'>/ <span style='font-size:10px;'>( pembagian )</span></p>
<p><input type='Radio' name='operasi' value='kali'>x <span style='font-size:10px;'>( perkalian )</span></p>
<p>Bilangan2 <input type='text' name='bilangan2'></p>
<input type='submit' name='submit' value='Submit'>
</form>	
</div>
";

include "kalkulator1.php";

$kalkulator = new kalkulator1;

 if(isset($_POST['submit'])){
	$kalkulator->setOperasi($_POST['bilangan1'],$_POST['bilangan2'], $_POST['operasi']);
	echo $kalkulator->getOperasi();
 }