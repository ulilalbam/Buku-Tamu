<html>
<head>
<title>.:: Sistem Informasi Buku Tamu ::.</title>
<style type="text/css">
body {
background-color: #FFFFFF;
color: black;
margin-top: 0px;
margin-left: 50px;
margin-right: 50px;
font-family: Times New Roman;
font-size: 14px;
}
</style>
</head>

<body>
<center>
<table border=0 width="70%" height="100%" bgcolor="#F5F5F5" colspan="0">
	<tr>
	<form action="login.php" name="login" method="post">
		<td style="background: #FF8C00; padding: 8px 0 8px 0" colspan="2" align="right">
		Username : <input type="text" name="user" placeholder="username" required> Password : <input type="password" name="pass" placeholder="******" required> <input type="submit" value="log in">
		</td>
	</form>
	</tr>
	<tr>
		<td colspan="2" width="200%" height="120%"><img src="image/4.jpg" width="100%" height="500px"></td>
	</tr>
	<tr>
		<td colspan="2">
		<marquee behavior="alternate" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
		<b> Selamat Datang Di Sistem Informasi Buku Tamu Dinas Kependudukan Dan Pencatatan Sipil Kota Semarang</b></marquee>
		
	</td>
	
	</tr>
	<tr>
	<td width="1%" valign="top" align="center" >
	<?php
	//include "include/deteksi.php";
	?>
	</td>
	<td width="60%" style="background: #FF8C00">
	<?php
	//include "pengunjung/pengunjung.php";
	include "include/fungsi2.php";
	?></td>
	<tr>
	<td colspan="2" style="background: #FF8C00; border-top: solid 2px #FF8C00; font-size: 12px" align="center">&copy; copyright : 2017 Sistem Komputer Undip 14 &nbsp;  </a><br>All Right Reserved</td>
	</tr>
</table>
</center>