<?php
if(isset($_POST['masuk'])){

}
$server ="localhost";
$user ="root";
$password ="";
$nama_database ="rental_mobil";
$db =mysqli_connect($server,$user,$password,$nama_database);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kostumer</title>
</head>
<body background="a.jpg">
<link rel="stylesheet" href="kostumer.css" media="screen" title="no title">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <ul>
      <li><a class="active" href="index.php">Beranda</a></li>
      <li><a href="Kostumer.php">Kostumer</a></li>
      <li><a href="mobil.php">Mobil</a></li>
      <li><a href="transaksi.php">Transaksi</a></li>
      <li style="float: right;"><a href="#">Tentang Saya</a></li>
</ul><br>
    <form action="mobil.php" method="post">
      <div class="login">

          <div class="avatar">
            <i class="fa fa-user"></i>
          </div>

          <h2>Login Form</h2>

          <div class="box-login">
            <i class="fas fa-envelope-open-text"></i>
            <input type="text" name="id_kostumer" placeholder="id_kostomer">
          </div>

          <div class="box-login">
            <i class="fas fa-envelope-open-text"></i>
            <input type="text" name="nama_kostumer" placeholder="nama_kostumer">
          </div>

          <div class="box-login">
            <i class="fas fa-envelope-open-text"></i>
            <input type="text" name="no_telp" placeholder="no_telp">
          </div>

          <div class="box-login">
            <i class="fas fa-envelope-open-text"></i>
            <input type="text" name="alamat" placeholder="alamat">
          </div>

          <input type="submit" name="lanjut" value="Masuk" class="btn-login"></button>
          <div class="bottom">
            <a href="login.php">Forgot Password</a>
          </div>
      </div>
</form>
</body>
</html> 