<?php
	require('3koneksi.php');

	session_start();
	
	if(isset($_POST['submit'])){
		$email = $_POST['txt_email'];
		$pass = $_POST['txt_pass'];
		
	if(!empty(trim($email)) && !empty(trim($pass))){
		//select data berdasarkan username dari
		$query 		= "SELECT * FROM user_detail WHERE user_email='$email' AND user_password = '$pass'";
		$result 	= mysqli_query($koneksi, $query);
		$num 	   = mysqli_num_rows($result);
		
		while ($row = mysqli_fetch_array($result)){
			$id = $row['id'];
			$userVal = $row['user_email'];
			$passVal = $row['user_password'];
			$userName = $row['user_fullname'];
			$level = $row['level'];
		}
		if ($num !=0) {
			if($userVal==$email && $passVal==$pass){
				echo '<script>alert("Login Berhasil!")</script>';
				echo '<script>window.location="1home.php"</script>';
			} else {
				echo '<script>alert("Login Gagal!")</script>';
				echo '<script>window.location="4login.php"</script>';
			}
		} else{
			echo '<script>alert("User tidak ditemukan!")</script>';
			echo '<script>window.location="4login.php"</script>';
		}
	}else{
		$error = 'Data tidak boleh kosong!';
		echo $error;
	}
	}
?>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<form action="4login.php" method="post">
		<p>email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="txt_email"></p>
		<p>password : <input type="password" name="txt_pass"></p>
		<button type="submit" name="submit">Sign In</button>
	</form>	
</body>
</html>