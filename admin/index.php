<?php
session_start();
include "../include/fungsi2.php";
$sesi	= $_SESSION['sesi'];

if($_SESSION['sesi'] == "" || $_SESSION['sesi']  == NULL || empty($_SESSION['sesi'])){
	echo "<center><font color='red'>Anda tidak diperkenankan memasuki halaman ini, jika anda belum <a href='../index.php'>login</a> !!</font></center>";
	exit;
}
function logout() {
	session_start();
	session_destroy();
	echo "<meta http-equiv='refresh' content='0; url=../index.php'>";
}

$utama="<center><span class='s'>Selamat Datang di Buku Tamu Dinas Kependudukan Dan Pencatatan Sipil. Untuk menggunakan, silakan pilih menu di samping kiri !. <br>Status Anda login sebagai <b>\" $sesi \"</b> Jangan lupa melakukan Logout bila anda selesai menggunakan sistem.</span></center>";
?>

<html>
<head>
<title>.:: Sistem Informasi Buku Tamu Dinas Kependudukan Dan Pencatatan Sipil Kota Semarang  ::.</title>
<link rel="stylesheet" type="text/css" href="../include/style.css" />

</head>

<body>

<table border=0 width="100%" bgcolor="#E6E6FA"  cellpadding=2 cellspacing=2 >
<!--bgcolor="#E6E6FA"-->
	<tr>
		<td colspan="2"><img src="../image/background2.jpg" width="100%" height="200px"><div style="position: absolute; width: 100px; height: 80px; z-index: 1; left:400px; top:40px" id="layer1">
<p align="right"><font color="#0000FF"><u><b>

	</tr>
	<tr>
		<td colspan=2><marquee onmouseover="this.stop();" behavior="alternate" onmouseout="this.start();">Halaman Administrasi Buku Tamu Dinas Kependudukan Dan Pencatatan Sipil Kota Semarang</marquee>
		</td>
	</tr>
	<tr>
	<td width="20%" valign="top">

	<h3>Pilih Menu</h3>
	<div class="kotak">
	<ul>
	<li><a href="index.php">Home</a></li>
	<li><a href="?page=tamu">Data Tamu</a></li>
	<li><a href="?page=pegawai">Data Pegawai</a></li>
	<li><a href="?page=anggota">Data Bidang</a></li>
	<li><a href="?page=utility">Utility</a></li>
	<li><a href="?page=logout" onclick="return confirm('Anda yakin ingin Keluar ?')" >Log Out</a></li>
	</ul><br>
	<div style=<!-Local Time Clock widget - HTML code - localtimes.info --><div align="center" style="margin:15px 0px 0px 0px"><div align="center" style="width:140px;border:1px solid #ccc;background:#fff ;color: #fff ;font-weight:bold"><a style="padding:2px 1px;margin:2px 1px;font-size:12px;line-height:16px;font-family:arial;text-decoration:none;color:#000" href="http://localtimes.info/Asia/Indonesia/Semarang/"><img src="http://localtimes.info/images/countries/id.png" border=0 style="border:0;margin:0;padding:0">&nbsp;Time in Semarang </a></div><script type="text/javascript" src="http://localtimes.info/clock.php?continent=Asia&country=Indonesia&city=Semarang&color=black-white&widget_number=1000"></script></div><!-end of code-></b></p></div>
	</div>
	</td>
	<td width="80%" valign="top">
	<h3>
		<?php
			$page	= isset($_GET['page']) ? $_GET['page'] : "";

			if(strstr($page,"tamu")) {
			$j="Data Tamu";
			} else if(strstr($page,"pegawai")) {
			$j="Data Pegawai";
			} else if(strstr($page,"util")) {
			$j="Utility";
			} else if(strstr($page,"anggo")) {
			$j="Data Bidang";
			} else {
			$j="Halaman Utama";
			}
			echo $j;
		?>
			</h3>
			<div class="tengah">
		<?php
	//menu tamu
	if($page=="tamu") {
	include "../tamu/lihat_tamu.php";
	} else if($page=="input_tamu") {
	include "../tamu/$page.php";
	} else if($page=="act_input_tamu") {
	include "../tamu/$page.php";
	} else if($page=="act_hapus_tamu") {
	include "../tamu/$page.php";
	
	//======== akhir menu tamu =========

	//menu pegawai
	} else if($page=="pegawai") {
	include "../pegawai/lihat_pegawai.php";
	} else if($page=="input_pegawai") {
	include "../pegawai/$page.php";
	} else if($page=="act_input_pegawai") {
	include "../pegawai/$page.php";
	} else if($page=="act_hapus_pegawai") {
	include "../pegawai/$page.php";
	
	//======== akhir menu pegawai ================

	
	// menu anggota
	} else if($page=="anggota") {
	include "../anggota/lihat_$page.php";
	//============== akhir menu anggota ==================

	
	//menu ultilty
	} else if($page=="utility") {
	include "../utility/link.php";
	} else if($page=="backup") {
	include "../utility/$page.php";
	//========== akhir menu utility ===============

	//log out
	} else if($page=="logout") {
	logout();
	} else {
	echo $utama;
	}
	?>
	</div>
	</td><tr>
	<td colspan="2" style="border-top: solid 2px #000000; font-size: 12px" align="center">&copy; copyright : 2017 Sistem Komputer Universitas Diponegoro. &nbsp; </a><br>All Right Reserved</td>

	</tr>
</table>
<?php
//}
?>
