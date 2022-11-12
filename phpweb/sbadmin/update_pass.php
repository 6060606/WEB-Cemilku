<?php 
require('koneksi.php');
session_start();
$idAccount = $_SESSION['myusername'];
echo $idAccount;
if(isset($_POST['reset_password'])){
    $txt_newPassword = $_POST['txt_password_reset'];
    $txt_repeatPassword = $_POST['reset_password'];
    $query = "UPDATE akun SET password = '$txt_newPassword' WHERE first_name =  '$idAccount';";
    echo "query = " . $query;
    $result = mysqli_query($koneksi,$query);
    header('Location: login.html');
}

?>