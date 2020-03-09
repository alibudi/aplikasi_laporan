<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=$title.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>

<table border="1" width="100%">

<thead>

<tr>

 <th>No</th>
 <th>Tanggal</th>
 <th>Pengguna</th>
 <th>Nilai</th>
 <th>Keterangan</th>

 </tr>

</thead>

<tbody>

<?php foreach($keuangan as $keuangan) { ?>

<tr>
<td><?php echo $keuangan->id?></td>
 <td><?php echo $keuangan->tgl ?></td>
	<td><?php echo $keuangan->nama?></td>
 <td><?php echo $keuangan->nilai ?></td>
 <td><?php echo $keuangan->keterangan ?></td>

 </tr>

<?php  } ?>

</tbody>

</table>