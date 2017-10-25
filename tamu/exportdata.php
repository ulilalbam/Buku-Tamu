<?php

include "../include/koneksi_db.php"; //memanggil file koneksi_db.php
include "../include/fungsi.php";

$query=mysql_query("SELECT * FROM data_tamu WHERE status='masuk' ORDER BY id", $konek);
?>
<table border="1" width=100% class="table-data">
<tr><td class="head-data">Nama Tamu</td><td class="head-data">Pegawai yang Ditemui</td><td class="head-data">Keperluan</td><td class="head-data">Tgl. Datang</td></tr>
<?php
while ($hasil=mysql_fetch_array($query)) {
echo "<tr>
      <td class='td-data'>$hasil[nama_tamu]</td>
	  <td class='td-data'>$hasil[namapgw2]</td>
		<td class='td-data'>$hasil[ket]</td>
		<td class='td-data'>$hasil[masuk]</td>
		
	</tr>";
}
?>
</table>