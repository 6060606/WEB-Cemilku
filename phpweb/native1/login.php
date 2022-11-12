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
            }
            if($num != 0){
                if($userVal == $email && $passVal == $pass){
                    echo "<p>Login Berhasil</p>";
                    $_POST['user_fullname'];
                    header('Location: home.php');
                    $_SESSION['ses'] = $_POST['txt_email'];
                } else{
                    echo "<p>Login Gagal</p>";
                }
            }
    }
}

?>

<htmL>

    <head>
        <tittle> login page </tittle>   
    </head>

    <body>
        <form method="post"> 
        <p> email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 
            <input type="text" name="txt_email">
        </p>
        <p> password : <input type="password" name="txt_pass"></p>
        <button type="submit" name="submit" value ="submit"> Sign In </button>
        </form>
    </body>
</html>