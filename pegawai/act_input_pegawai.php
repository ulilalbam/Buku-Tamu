<?php
include "../include/koneksi_db.php"; //memanggil file koneksi_db.php
include "../include/fungsi2.php"; //memanggil file fungsi.php

$namapgw     = isset($_POST['namapgw']) ? addslashes($_POST['namapgw']) : "";
$nip 		= isset($_POST['nip']) ? addslashes($_POST['nip']) : "";
$jabatan    = isset($_POST['jabatan']) ? addslashes($_POST['jabatan']) : "";
$alamat  	= isset($_POST['alamat']) ? addslashes($_POST['alamat']) : "";
$klas	   = isset($_POST['klas']) ? addslashes($_POST['klas']) : "";
$tgl	   = isset($_POST['namapgw']) ? addslashes($_POST['namapgw']) : "";

$tgl       = $hari_ini;

if ($namapgw==""||$nip==""||$jabatan==""||$alamat==""||$klas=="") {
	echo "<script>alert('Pengisian form belum benar. Ulangi lagi');</script>";
	echo "<meta http-equiv='refresh' content='0; url=?page=input_pegawai'>";
} else {
	$cek=mysql_query("SELECT * FROM data_anggota WHERE namapgw='$namapgw'", $konek);
	$hasil_cek=mysql_num_rows($cek);

	if ($hasil_cek>0) {
		echo "<script>alert('Pegawai dengan nama $namapgw pernah direkam !')</script>";
	} else {
		$query = mysql_query("INSERT INTO data_anggota VALUES (NULL, '$namapgw', '$nip', '$jabatan', '$alamat',  '$klas',  NOW())");

		if ($query) {
			echo "<script>alert('Data berhasil ditambahkan @ $hari_ini. Terima Kasih')</script>";
			echo "<meta http-equiv='refresh' content='0; url=?page=pegawai'>";
		} else {
			echo "<script>alert('Data anda gagal dimasukkan. Ulangi sekali lagi')</script>";
			echo mysql_error();
			
		}
	}
}
?>
