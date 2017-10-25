<?php
include "../tamu/link.php";
$masuk		= date("d-m-Y");
?>

<form method="post" action="?page=act_input_tamu">
<input type="hidden" name="masuk" value="<?php echo $masuk; ?>">
<table border=1 width=100% class="table-data">
<tr><td class="head-data" colspan="2">Pengisian Buku Tamu</td></tr>
<tr><td class="pinggir-data">Pegawai yang Ditemui</td>
<td class="pinggir-data">
<select name="tamu">
<option value="" selected>Pilih  </option>
<?php
include "../include/koneksi_db.php";
$q=mysql_query("SELECT * FROM data_anggota ORDER BY id", $konek);
while ($tamu=mysql_fetch_array($q)) {
echo "<option value='$tamu[0].$tamu[1]'>$tamu[0]. $tamu[1]</option>";
}
?>
</select> <a href="?page=input_pegawai">Tambah Pegawai Baru</a>
</td></tr>

<tr><td class="pinggir-data">Nama Tamu</td>
<td class="pinggir-data"><input type="text" name="nama" size="40"></td></tr>


<tr><td class="pinggir-data">Tanggal Datang</td><td class="pinggir-data"><b><?php echo $masuk; ?></b></td></tr>
<tr><td class="pinggir-data">Keperluan</td>
<td class="pinggir-data"><input type="text" name="ket" size="40"></td></tr>

<tr><td colspan="2" align="center" class="head-data">
<input type="submit" value="Input">
</td></tr>
</table>
</form>
