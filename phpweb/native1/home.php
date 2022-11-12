<?php
require("koneksi.php");
session_start();
?>

<html>
    <tittle> Home </tittle>

<body>
  <h1> Selamat Datang <?php echo $_SESSION['ses'];?> </h1> 
  <table border ='1'>
    <tr>
        <td> No </td>
        <td> Email </td>
        <td> Nama </td>
        <td> Password </td>
        <td> Edit </td>
        <td> Level </td>
      </tr>
    <?php 
        $query = " SELECT * FROM user_detail";
        $result = mysqli_query($koneksi,$query);
        $no = 1;
        while($row=mysqli_fetch_array($result)){
            $userMail = $row['user_email'];
            $userName = $row['user_fullname'];
            $password = $row['user_password'];
            $level = $row['level'];
    ?>
    <tr> 
        <td> <?php echo $no; ?> </td>
        <td> <?php echo $userMail; ?> </td>
        <td> <?php echo $userName; ?> </td>
        <td> <?php echo $password; ?> </td>
        <td> 
          <a href="edit.php?id= <?php echo $row['id'] ?>"> edit </a>
          <a href="hapus.php?id= <?php echo $row['id'] ?>"> hapus </a>
        </td>
        <td> <?php echo $level; ?> </td>
    </tr>
   <?php 
    $no++;
    }
    ?>
  </table>
</body>
</html>