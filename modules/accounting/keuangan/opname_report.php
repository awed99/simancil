<?php
	include "otentik_keu.php";
	
include ("../include/globalx.php");
include ("../include/functions.php");
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>

<script type="text/javascript" src="../assets/kalendar_files/jsCalendar.js"></script>
<link href="../assets/kalendar_files/calendar.css" rel="stylesheet" type="text/css">
</head>

<body>
<form method="post" action="submission_keu.php">
<input type="hidden" name="cmd" value="add_opname" />
</form><br />
<table width="90%" border="1" align="center">
  <tr>
    <td width="4%"><div align="center">No.</div></td>
    <td width="12%"><div align="center">Tanggal</div></td>
    <td width="78%"><div align="center">Keterangan</div></td>
    <td width="6%"><div align="center">Todo</div></td>
  </tr>
  <?php 
  		$SQL = "select * from opname order by tanggal desc";
		$hasil = mysql_query($SQL);
		while($baris=mysql_fetch_array($hasil)){
  ?>
  <tr>
    <td><?=++$no; ?></td>
    <td><div align="center">
      <?=baliktglindo($baris["tanggal"]);?>
    </div></td>
    <td><?=($baris["keterangan"]);?></td>
    <td><div align="center"><a href="opname_detail.php?id=<?=$baris["id"];?>&tanggal=<?=baliktglindo($baris["tanggal"]);?>&keterangan=<?=($baris["keterangan"]);?>"></a>&nbsp;&nbsp;<a href="opname_cetak.php?id=<?=$baris["id"];?>&tanggal=<?=baliktglindo($baris["tanggal"]);?>&keterangan=<?=($baris["keterangan"]);?>">Cetak</a></div></td>
  </tr>
  <?php } ?>
</table>

</body>
</html>
