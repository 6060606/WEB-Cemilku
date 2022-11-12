<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
 $username = $_POST['username'];
 $email = $_POST['email'];
 $password = md5($_POST['password']);
 $cpassword = md5($_POST['cpassword']);

 if ($password == $cpassword) {
  $sql = "SELECT * FROM users WHERE email='$email'";
  $result = mysqli_query($conn, $sql);
  if (!$result->num_rows > 0) {
   $sql = "INSERT INTO users (username, email, password)
     VALUES ('$username', '$email', '$password')";
   $result = mysqli_query($conn, $sql);
   if ($result) {
    echo "<script>alert('Selamat, registrasi berhasil!')</script>";
    $username = "";
    $email = "";
    $_POST['password'] = "";
    $_POST['cpassword'] = "";
   } else {
    echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
   }
  } else {
   echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
  }
  
 } else {
  echo "<script>alert('Password Tidak Sesuai')</script>";
 }
}

?>

<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

 <link rel="stylesheet" type="text/css" href="lupa_password.css">

 <title>Lupa password</title>
</head>
<body>
 <div class="container">
  <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Lupa Password</p>
   
   <div class="input-group">
    <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
   </div>
   <div class="input-group">
    <input type="password" placeholder="Password baru" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
    <input type="password" placeholder="Konfirmasi Password baru" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
   </div>
   <div class="input-group">
    <button name="submit" class="btn">Submit</button>
   </div>
   <p class="login-register-text">tidak jadi mengganti password?<a href="index.php">Login </a></p>
  </form>
 </div>
</body>
</html>