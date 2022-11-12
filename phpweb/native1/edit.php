<?php 
require('koneksi.php');

if(isset($_POST['update'])){
    $userID = $_POST['txt_id'];
    $userMail = $_POST['txt_email'];
    $userPass = $_POST['txt_pass'];
    $userName = $_POST['txt_nama'];
    $query = "UPDATE user_detail SET user_password = '$userPass' , user_email = '$userMail', user_fullname = '$userName' WHERE `id` = $userID;";
    $result = mysqli_query($koneksi,$query);
    header('Location: home.php');
}
$id = $_GET['id'];
$query = "SELECT * FROM user_detail WHERE id = '$id'";
$result = mysqli_query($koneksi,$query) or die(mysql_errror());
while($row = mysqli_fetch_array($result)){
    $id = $row['id'];
    $userMail = $row['user_email'];
    $userPass = $row['user_password'];
    $userName = $row['user_fullname'];
    ?>
    <html>
        <head>
        <title> Register </title>
        </head>

        <body>
            <form action ="edit.php" method="POST">
                <p> <input type ="hidden" name="txt_id" value = "<?php echo $id;?>"></p>
                <p> email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type ="text" name="txt_email" value ="<?php echo $userMail;?>" readonly></p>
                <p> password : <input type ="password" name ="txt_pass" value ="<?php echo $userPass;?>"></p>
                <p> username &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type ="text" name="txt_nama" value ="<?php echo $userName;?>"> </p>
                <button type="submit" name ="update"> update </button> 
            </form>
            <p> <a href="home.php">Kembali </p> 
        </body>
    
    </html>

    <?php
    }
    ?>