<?php include "../pegawai/link.php"; ?>
<form method="post" action="?page=act_input_pegawai">
<table width=100% border=1 class="table-data">
<tr><td class="head-data" colspan="2">Tambah Pegawai</td></tr>
<tr><td class="pinggir-data">Nama Pegawai</td>
<td class="pinggir-data"><input type="text" name="namapgw" size="65"></td></tr>
<tr><td class="pinggir-data">NIP</td>
<td class="pinggir-data"><input type="text" name="nip" size="65"></td></tr>
<tr><td class="pinggir-data">Jabatan </td>
<td class="pinggir-data"><input type="text" name="jabatan" size="65"></td></tr>
<tr><td class="pinggir-data">Alamat </td>
<td class="pinggir-data"><input type="text" name="alamat" size="65"></td></tr>
<tr><td class="pinggir-data">Kode Bidang</td>
<td class="pinggir-data">
<select name="klas">
	<option value="">Pilih Bidang</option>
		<option value="105">BIDANG SEKRETARIAT</option>
		<option value="101">BIDANG PELAYANAN PENDAFTARAN PENDUDUK</option>
		<option value="102">BIDANG PELAYANAN PENCATATAN SIPIL</option>
		<option value="103">BIDANG PENGELOLAAN INFORMASI ADMINISTRASI KEPENDUDUKAN</option>
		<option value="104">BIDANG PEMANFAATAN DATA DAN INOVASI PELAYANAN</option>
			</optgroup>
</select>
</td></tr>
<tr><td colspan="2" align="center" class="head-data">
<input type="submit" value="Input">
</td></tr>
</table>
</form>
