<?php

$masuk			= isset($_POST['masuk']) ? $_POST['masuk'] : "";
$dapat			= isset($_POST['tamu']) ? $_POST['tamu'] : "";
$pecah			= explode (".", $dapat);
$id				= $pecah[0];
$tamu			= $pecah[1];
$namatamu		= isset($_POST['nama']) ? $_POST['nama'] : "";
$ket			= isset($_POST['ket']) ? $_POST['ket'] : "";


if($tamu == "" || $dapat == "") {
	echo "<script>alert('Mohon dilengkapi dulu datanya');</script>";
	echo "<meta http-equiv='refresh' content='0; url=?page=input_tamu'>";
} elseif ($namatamu=="") {
	echo "<script>alert('Mohon nama diisi terlebih dahulu');</script>";
	echo "<meta http-equiv='refresh' content='0; url=?page=input_tamu'>";
} else {
	include "../include/koneksi_db.php";
	$query=mysql_query("SELECT * FROM data_anggota WHERE namapgw = '$tamu'", $konek);
	while ($hasil=mysql_fetch_array($query)) {
			$qt	= mysql_query("INSERT INTO data_tamu VALUES (null, '$tamu', '$id', '$namatamu', '$masuk', 'masuk', '$ket')", $konek) or die ("Gagal Masuk".mysql_error());
	}
		if ($qt){
			echo "<script>alert('Data berhasil ditambahkan @ $hari_ini. Terima Kasih')</script>";
			echo "<meta http-equiv='refresh' content='0; url=?page=tamu'>";
		} else {
			echo "<script>alert('Data anda gagal dimasukkan. Ulangi sekali lagi')</script>";
			echo "<meta http-equiv='refresh' content='0; url=?page=input_tamu'>";
		}
	}

?>
