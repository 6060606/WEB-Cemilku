<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['nama_pembeli'])) {
    //header("Location: berhasil_login.php");
}

if (isset($_POST['submit'])) {
 $username = $_POST['nama_pembeli'];
 $password = md5($_POST['password']);

 $sql = "SELECT * FROM pembeli WHERE nama_pembeli='$username' AND password='$password'";
 $result = mysqli_query($conn, $sql);
 if ($result->num_rows > 0) {
  $row = mysqli_fetch_assoc($result);
  $_SESSION['nama_pembeli'] = $row['nama_pembeli'];
  echo "login berhasil";
 // header("Location: berhasil_login.php");
 } else {
  echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
 }
}

?>

<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

 <link rel="stylesheet" type="text/css" href="style.css">

 <title>Login</title>
</head>
<body>
 <div class="alert alert-warning" role="alert">
  <?php echo $_SESSION['error']?>
 </div>

 <div class="container">
  <form action="" method="POST" class="login-email">
   <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
   <div class="input-group">
    <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
   </div>
   <div class="input-group">
    <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
   </div>
   <div class="input-group">
    <button name="submit" class="btn">Login</button>
   </div>
   <p class="login-register-text">Anda belum punya akun? <a href="register.php">Register</a></p>
  
   <p class="login-lupa_password-text"> Anda <a href="lupa_password.php">Lupa Password?</a></p>
  </form>
 
 </div>

 
 
</body>
</html>