<?php 
require('koneksi.php');
if(isset($_POST['submit'])){
    $txtFirstname = $_POST['txt_firstname'];
    $txtLastname = $_POST['txt_lastname'];
    $txtEmail = $_POST['txt_email'];
    $txtPassword = $_POST['txt_password'];
    $txtPasswordRepeat = $_POST['txt_repeatpassword'];
    $query = "INSERT INTO akun VALUES('', '$txtFirstname','$txtLastname','$txtEmail','$txtPassword');";
    $result = mysqli_query($koneksi,$query);
    echo $result;
    header('Location: login.html');
}   
?>