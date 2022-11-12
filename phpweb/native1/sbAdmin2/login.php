<?php 
require('koneksi.php');
session_start();
if(isset($_POST['submit'])){
        $email = $_POST['txt_email'];
        $pass = $_POST['txt_pass'];
        echo "<p> email = $email </p>";
    if(!empty(trim($email)) && !empty(trim($pass))){
            $query = "SELECT * FROM user_detail WHERE user_email = '$email'";
            $result = mysqli_query($koneksi,$query);
            $num = mysqli_num_rows($result);
            while($row = mysqli_fetch_array($result)){
                $id = $row['id'];
                $userVal = $row['user_email'];
                $passVal = $row['user_password'];
                $userName = $row['user_fullname'];
                $level = $row['level'];
                $_SESSION['myusername'] = $row['user_fullname'];
            }
            if($num != 0){
                if($userVal == $email && $passVal == $pass){
                    echo "<p>Login Berhasil</p>";
                    $_POST['user_fullname'];
                    $error = 'user tidak ditemukan';
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