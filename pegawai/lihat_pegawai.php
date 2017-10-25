<?php

include "../pegawai/link.php";
include "../include/koneksi_db.php"; //memanggil file koneksi_db.php
include "../include/config.php"; //memanggil file fungsi.php

$query=mysql_query("SELECT * FROM data_anggota ORDER BY id", $konek);

?>
<table class="table-data" border=1 width=100% border=0 >
<tr></tr>
<tr><td class="head-data">No</td><td class="head-data">Nama</td><td class="head-data">NIP</td><td class="head-data">Kode Bidang</td><td class="head-data">Hapus</td></tr>
<?php
while ($hasil=mysql_fetch_array($query)) {
echo "<tr><td class='pinggir-data'>$hasil[id]</td>
	  <td class='td-data'>$hasil[namapgw]</a></td>
      <td class='td-data'>$hasil[nip]</td>
	  <td class='td-data'>$hasil[kode_bidang]</td>

	  <td class='td-data'><a href='?page=act_hapus_pegawai&id=$hasil[id]' onclick='return confirm(\"Anda yakin ingin menghapus data pegawai $hasil[namapgw] ?\")'><img class='img_link' src='../image/delete.png' width='15px' height='15px'></a></td></tr>";

	  
}
?>
</table>
