<?php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['level'])){
	include "header.php";
	include "menu.php";
	?>
	<!--/.span3-->
	<div class="span9">
		<div class="content">


			<div class="module">
				<div class="module-head">
					<h3>Data Pegawai</h3>
				</div>
				<div class="module-body table">
					&nbsp;&nbsp;<a class="btn btn-primary" href="#">+Tambah Pegawai</a>
					<br><br><table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
					<thead>
						<tr>
							<th>No</th>
							<th>NIK</th>
							<th>Nama Pegawai</th>
							<th>Pendidikan</th>
							<th>Posisi</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$a="select * from dosen";
						$b=mysqli_query($koneksi,$a);
						$no=1;
						while($c=mysqli_fetch_array($b)){
							?>
							<tr class="odd gradeX">
								<td><?php echo $no;?></td>
								<td><?php echo $c['nik'];?></td>
								<td><?php echo $c['namadosen'];?></td>
								<td><?php echo $c['pendidikan'];?></td>
								<td class="center"><?php echo $c['keahlian'];?></td>
								<td class="center">
									<a href="ubahmhs.php?nim=<?php echo $c['nim'];?>">Ubah</a> | 
									<a href="javascript:if(confirm('Anda yakin menghapus ini?'))
									{document.location='hapusmhs.php?nim=<?php echo $c['nim']; ?>';}">Hapus</a>
								</td>
							</tr>
							<?php $no++; } ?>
						</tbody>
						
					</table>
				</div>
			</div><!--/.module-->

			<br />
			
		</div><!--/.content-->
	</div><!--/.span9-->
</div>
</div><!--/.container-->
</div><!--/.wrapper-->
<?php
include "footer.php";
}else{
	echo "<script language='javascript'>
	alert('login dulu dong!');
	document.location='index.php';
</script>";
}
?>