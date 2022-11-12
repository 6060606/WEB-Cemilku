<?php 
require('koneksi.php');
session_start();
if(isset($_POST['submit'])){
        $email = $_POST['txt_email'];
        $pass = $_POST['txt_pass'];
    if(!empty(trim($email)) && !empty(trim($pass))){
            $query = "SELECT * FROM akun WHERE email = '$email'";
            echo $query . "<br>";
            $result = mysqli_query($koneksi,$query);
            $num = mysqli_num_rows($result);
            while($row = mysqli_fetch_array($result)){
                $id = $row['id_akun'];
                $firstName = $row['first_name'];
                $lastName = $row['last_name'];
                $emaild = $row['email'];
                $password =$row['password'];
                echo $emaild;
                $_SESSION['myusername'] = $row['first_name'];
            }
           
            if($num != 0){
                if($emaild == $email && $password == $pass){
                    echo "<p>Login Berhasil</p>";
                    $error = 'Login Berhasil';
                    echo "<SCRIPT> //not showing me this
                    alert('$error')
                    window.location.replace('login.html');
                    </SCRIPT>";
                    header('Location: index.php');
                } else{
                    $error = 'Login Gagal';
                    echo "<SCRIPT> //not showing me this
                    alert('$error')
                    window.location.replace('login.html');
                    </SCRIPT>";
                }
            }
    } else {
        $error = 'Data tidak boleh kosong !!';
        echo "<SCRIPT> //not showing me this
        alert('$error')
        window.location.replace('login.html');
        </SCRIPT>";
    }
}

?>