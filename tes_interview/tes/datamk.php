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
					<h3>Data Penyakit</h3>
				</div>
				<div class="module-body table">
					&nbsp;&nbsp;<a class="btn btn-primary" href="tambahmk.php">+Tambah Penyakit</a>
					<br><br>
					<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
						<thead>
							<tr>
								<th>No</th>
								<th>Kode Penyakit</th>
								<th>Nama Penyakit</th>
								<th>SKS</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$a="select * from mk";
							$b=mysqli_query($koneksi,$a);
							$no=1;
							while($c=mysqli_fetch_array($b)){
								?>
								<tr class="odd gradeX">
									<td><?php echo $no;?></td>
									<td><?php echo $c['kodemk'];?></td>
									<td><?php echo $c['namamk'];?></td>
									<td class="center"><?php echo $c['sks'];?></td>
									<td class="center">
										<a href="ubahmk.php?kodemk=<?php echo $c['kodemk'];?>">Ubah</a> | 
										<a href="javascript:if(confirm('Anda yakin menghapus ini?'))
										{document.location='hapusmk.php?kodemk=<?php echo $c['kodemk'];?>';}">Hapus</a>
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