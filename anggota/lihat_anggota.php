<?php

include "../include/koneksi_db.php"; //memanggil file koneksi_db.php
include "../include/config.php"; //memanggil file fungsi.php



$query=mysql_query("SELECT * FROM data_bidang ORDER BY id", $konek);
$query2=mysql_query("SELECT * FROM data_bidang");

?>
<table class="table-data" border=1 width=100% border=0 >
<tr></tr>
<tr><td class="head-data">Nama Bidang</td><td class="head-data">Kode Bidang</td><td class="head-data">Lokasi</td></tr>
<?php
while ($hasil=mysql_fetch_array($query)) {
echo "<tr><td class='pinggir-data'>$hasil[1]</td>
      <td class='td-data'>$hasil[2]</td>
	  <td class='td-data'>$hasil[3]</td>
	";
}
?>
</table>
