<?php
include "koneksi.php";
?>
<BODY onLoad="javascript:window.print()">
	<h2 align="center"><u>Hasil Analisa</u></h2>
	<?php
	$j="select * from mahasiswa where nim='$_GET[nim]'";
	$k=mysqli_query($koneksi,$j);
	$l=mysqli_fetch_array($k);
	?>
	<table border="0" align="center" width="700px">
		<tr>
			<td>NIK</td>
			<td>: <b><?php echo $l['nim'];?></b></td>
			<td>Wilayah Kelurahan</td>
			<td>: <b><?php echo $l['prodi'];?></b></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>: <b><?php echo $l['nama'];?></b></td>
			<td>Umur</td>
			<td>: <b><?php echo $l['semester'];?></b></td>
		</tr>
	</table>
	<table border="1" cellpadding="1" cellspacing="0"
	align="center" width="700px">
	<tr bgcolor="#cccccc">
		<th>No</th>
		<th>Kode Penyakit</th>
		<th>Keluhan</th>
		<th>SKS</th>
	</tr>
	<?php
	$a="select * from mk,mahasiswa,krs 
	where mk.kodemk=krs.kodemk and mahasiswa.nim=krs.nim and krs.nim='$_GET[nim]'";
	$b=mysqli_query($koneksi,$a);
	$no=1;
	while($c=mysqli_fetch_array($b)){
		?>
		<tr>
			<td align="center"><?php echo $no;?></td>
			<td align="center"><?php echo $c['kodemk'];?></td>
			<td><?php echo $c['namamk'];?></td>
			<td align="center"><?php echo $c['sks'];?></td>
		</tr>
		<?php $no++; } ?>
		<tr>
			<td colspan="3" align="center">Total SKS</td>
			<td>&nbsp;<b>
				<?php $m=mysqli_query($koneksi,"select sum(sks) as tot from mk,mahasiswa,krs where 
					mk.kodemk=krs.kodemk and mahasiswa.nim=krs.nim and krs.nim='$_GET[nim]'");
				$n=mysqli_fetch_array($m);
				echo $n['tot']; ?> sks</b></td>
			</tr>
		</table>
		<p>&nbsp;</p>
		<table border="0" align="center" width="700px">
			<tr><td width="67%">&nbsp;</td>
				<td width="33%"><p>Surabaya, 20 Juli 2021<br>
					Dokter Umum,<br><br><br><br>
					<b>Dr. Syahrur Rizki, S.Kom</b></p></td>
				</tr>
			</table>
		</body>