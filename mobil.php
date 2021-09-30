<?php
if(isset($_POST['lanjut'])){

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mobil</title>
</head>
<body background="img/a.jpg">
<form action="transaksi.php" method="post">
<link rel="stylesheet" href="index.css" media="screen" title="no title">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"> 
<ul>
      <li><a class="active" href="index.php">Beranda</a></li>
      <li><a href="kostumer.php">Kostumer</a></li>
      <li><a href="mobil.php">Mobil</a></li>
      <li><a href="transaksi.php">Transaksi</a></li>
      <li style="float: right;"><a href="#">Tentang Saya</a></li>
</ul>
<h1>PILIH - MOBIL</H1><br>
<section class="portofolio" id="portofolio">
        <div class="container">
            <div class="row">
                    <div class="col-sm-4">1
                        <a href=" " class="img-thumbnail">
                        <img src="img/agya.jpg">
                        </a>
                        2<a href=" " class="img-thumbnail">
                        <img src="img/ayla.jpg">
                        </a>
                </div>
                    <div class="col-sm-4">3
                        <a href=" " class="img-thumbnail">
                        <img src="img/brio.jpg">
                        </a>
                        4<a href=" " class="img-thumbnail">
                        <img src="img/dx.jpg">
                        </a>
                </div>
                
                    <div class="col-sm-4">5
                        <a href=" " class="img-thumbnail">
                        <img src="img/ertiga.jpg">
                        </a>
                        6<a href=" " class="img-thumbnail">
                        <img src="img/go.jpg">
                        </a>
                </div>
                    
                    <div class="col-sm-4">7
                        <a href=" " class="img-thumbnail">
                        <img src="img/hrv.jpg">
                        </a>
                        8<a href=" " class="img-thumbnail">
                        <img src="img/mobilio.jpg">
                        </a>
                </div>

                    <div class="col-sm-4">9
                        <a href=" " class="img-thumbnail">
                        <img src="img/nissan.jpg">
                        </a>
                        10<a href=" " class="img-thumbnail">
                        <img src="img/ta.jpg">
                        </a>
                </div><br>
   <form>
   <form method=post action="bayar.php">
   <table width="500" border="1" cellpadding="0" cellspacing="0" align="center">
   <tr>
   <th><h2>Form Pemesanan</h2></th>
   </tr>
   <tr>
   <td>
   <table width="500" border="" cellpadding="5" cellspacing="5" align="center">

   <tr height="30">
   <td width="200" valign="center">ID Mobil</td>
   <td width="10" valign="center">:</td>

   <td>
   <select name="id_mobil">
   <option name="id_mobil">ID
   <option name="id_mobil">Toyota1234
   <option name="id_mobil">DaihatsuAyla1234
   <option name="id_mobil">HondaBrio1234
   <option name="id_mobil">DaihatsuXenia1234
   <option name="id_mobil">SuzukiErtiga1234
   <option name="id_mobil">DatsunGo1234
   <option name="id_mobil">HondaHRv1234
   <option name="id_mobil">HondaMobilio1234
   <option name="id_mobil">NissanLivina1234
   <option name="id_mobil">ToyotaAvanza1234
   </select>
   </select>
   </td>
   </tr>
   <tr>

   <table width="500" border="" cellpadding="5" cellspacing="5" align="center">
   <tr height="30">
   <td width="200" valign="center">Nama Mobil</td>
   <td width="10" valign="center">:</td>

   <td>
   <select name="nama_mobil">
    <option name="nama_mobil">Nama Mobil
    <option name="nama_mobil">ToyotaAgya
    <option name="nama_mobil">DaihatsuAyla
    <option name="nama_mobil">HondaBrio
    <option name="nama_mobil">DaihatsuXenia
    <option name="nama_mobil">SuzukiErtiga
    <option name="nama_mobil">DatsunGo
    <option name="nama_mobil">HondaHRv
    <option name="nama_mobil">HondaMobilio
    <option name="nama_mobil">NissanLivina
    <option name="nama_mobil">ToyotaAvanza
   </select>
   </select>
   </td>
   </tr>

   <table width="500" border="" cellpadding="5" cellspacing="5" align="center">
   <tr height="30">
   <td width="200" valign="center">MERK</td>
   <td width="10" valign="center">:</td>

   <td>
   <select name="merk">
    <option name="merk">MERK
    <option name="merk">Toyota
    <option name="merk">Daihatsu
    <option name="merk">Honda
    <option name="merk">Daihatsu
    <option name="merk">Suzuki
    <option name="merk">Datsun
    <option name="merk">Honda
    <option name="merk">Honda
    <option name="merk">Nissan
    <option name="merk">Toyota
    </select>
   </select>
   </select>
   </td>
   </tr>

   <table width="500" border="" cellpadding="5" cellspacing="5" align="center">
   <tr height="30">
   <td width="200" valign="center">Warna</td>
   <td width="10" valign="center">:</td>

   <td>
   <select name="warna">
    <option name="warna">Merah
    <option name="warna">Kuning
    <option name="warna">Hitam
    <option name="warna">Abu
    </select>
   </select>
   </select>
   </td>
   </tr>

   <table width="500" border="" cellpadding="5" cellspacing="5" align="center">
   <tr height="30">
   <td width="200" valign="center">No Plat</td>
   <td width="10" valign="center">:</td>

   <td>
   <select name="no_plat">
    <option name="no_plat">No Plat
    <option name="no_plat">TYT3883
    <option name="no_plat">DHTS473
    <option name="no_plat">HDA7538
    <option name="no_plat">DHTSU99
    <option name="no_plat">SZK1324
    <option name="no_plat">DTSN987
    <option name="no_plat">HDA2415
    <option name="no_plat">HDA1395
    <option name="no_plat">NSN8399
    <option name="no_plat">TYT7924
    </select>
   </select>
   </select>
   </td>
   </tr>
   <tr>
   <td align="right" colspan="2"><input type="submit" name="okey" value="Simpan" /></td>
   <td><input type="reset" name="cancel" value="Cancel"/></td>
   </tr>
   </table>
   </table>
</body>
</html>