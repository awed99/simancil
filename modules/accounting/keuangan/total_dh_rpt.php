<!DOCTYPE HTML>
<html>
	<head>
		<title>TOTAL DANA TERHOLD</title>
		<link rel="stylesheet" type="text/css" href="total_dh.css" />
	</head>
	<body onLoad="window.print()">
		<h3 class="caption">TOTAL DANA TERHOLD</h3>
		<table width="1173" class="table">
			<thead>
				<tr>
					<th width="24">NO</th>
					<th width="143">NAMA BANK</th>
					<th colspan="2">TOTAL KPR</th>
					<th colspan="2">TOTAL CAIR</th>
					<th colspan="2">TAHAN 5%</th>
					<th colspan="2">TAHAN 10%</th>
					<th colspan="2">SISA</th>
					<th colspan="2">TOTAL TERHOLD</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					include ("../include/globalx.php");
					$sql = mysql_query("SELECT * FROM total_dh WHERE id='".$_GET['id']."'");
					$data = mysql_fetch_array($sql);
				?>
		  <form action="submission_keu.php" method="post">
		  </form>
				<?php 
					$sql = mysql_query("SELECT * FROM total_dh ORDER BY namaBank");
					$no = 1;
					while($data = mysql_fetch_array($sql)){
				?>
						
						<tr>
							<td><?php  echo $no; ?></td>
							<td><?php  echo $data['namaBank']; ?></td>
							<td width="73"></td>
							<td width="65"><div align="right"><?php  echo number_format($data['totalKpr'], 0, '', '.'); $t_kpr = $t_kpr + $data['totalKpr'];?></div></td>
							<td width="73"></td>
							<td width="65"><div align="right"><?php  echo number_format($data['totalCair'], 0, '', '.'); $t_cair = $t_cair + $data['totalCair']; ?></div></td>
							<td width="73"></td>
							<td width="65"><div align="right"><?php  echo number_format($data['tahan5'], 0, '', '.'); $t5 = $t5 + $data['tahan5'];?></div></td>
							<td width="73"></td>
							<td width="65"><div align="right"><?php  echo number_format($data['tahan10'], 0, '', '.'); $t10 = $t10 + $data['tahan10']; ?></div></td>
							<td width="60"></td>
							<td width="78"><div align="right"><?php  echo number_format($data['totalKpr']-$data['totalCair']-$data['tahan5']-$data['tahan10'], 0, '', '.'); $tsisa = $tsisa + $data['totalKpr']-$data['totalCair']-$data['tahan5']-$data['tahan10']; ?></div></td>
							<td width="71"></td>
							<td width="67"><div align="right"><?php  echo number_format($data['totalKpr']-$data['totalCair'], 0, '', '.'); $total = $total + $data['totalKpr']-$data['totalCair']; ?></div></td>
						
						</tr>
				<?php 
						$no++;
					}
				?>
				<tr>
						  <td>&nbsp;</td>
						  <td>TOTAL</td>
						  <td></td>
						  <td><div align="right"><?php  echo number_format($t_kpr);?></div></td>
						  <td></td>
						  <td><div align="right"><?php  echo number_format($t_cair);?></div></td>
						  <td></td>
						  <td><div align="right"><?php  echo number_format($t5);?></div></td>
						  <td></td>
						  <td><div align="right"><?php  echo number_format($t10);?></div></td>
						  <td></td>
						  <td><div align="right"><?php  echo number_format($tsisa);?></div></td>
						  <td></td>
						  <td><div align="right"><?php  echo number_format($total);?></div></td>
		  </tr>
			</tbody>
	</table>
	</body>
</html>