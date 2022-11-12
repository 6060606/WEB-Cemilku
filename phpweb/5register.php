<?php
require ('3koneksi.php');
if ( isset($_POST['register']) ){
    $userMail = $_POST['txt_email'];
    $userPass = $_POST['txt_pass'];
    $userName = $_POST['txt_nama'];

    $query = "insert into user_detail values ('','$userMail', '$userPass', '$userName',2)";
    $result = mysqli_query($koneksi, $query);
    header('location: 4login.php');

}
?>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <form action="5register.php" method="POST">
        <p> email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="txt_email" required></p>
        <p> password : <input type = "password" name = "txt_pass" required ></p>
        <p> nama : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="txt_nama" required></p>
        <button type="submit" name="register"> Register</button>
    </form>
    <p><a href="4login.php">Login</p>
</body>
</html>