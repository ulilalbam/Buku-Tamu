<?php

include "../include/koneksi_db.php"; //memanggil file koneksi_db.php
include "../include/fungsi.php";
include "../tamu/link.php";

$query=mysql_query("SELECT * FROM data_tamu WHERE status='masuk' ORDER BY id", $konek);
?>
<table border="1" width=100% class="table-data">
<tr><td class="head-data">No</td><td class="head-data">Nama Tamu</td><td class="head-data">Pegawai yang Ditemui</td><td class="head-data">Keperluan</td><td class="head-data">Tgl. Datang</td><td class="head-data">Hapus</td></tr>
<?php
while ($hasil=mysql_fetch_array($query)) {
echo "<tr>
	  <td class='td-data'>$hasil[id]</td>
      <td class='td-data'>$hasil[nama_tamu]</td>
	  <td class='td-data'>$hasil[namapgw2]</td>
		<td class='td-data'>$hasil[ket]</td>
		<td class='td-data'>$hasil[masuk]</td>
		<td class='td-data'><a href='?page=act_hapus_tamu&id=$hasil[id]' onclick='return confirm(\"Anda yakin ingin menghapus data $hasil[nama_tamu] ?\")'><img class='img_link' src='../image/delete.png' width='15px' height='15px'></a></td>
	</tr>";
}
?>
</table>
