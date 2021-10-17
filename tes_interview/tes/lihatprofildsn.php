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
					<h3>Profile User</h3>
				</div>
				<div class="module-body">
					<table class="table">
						<?php
						$a="select * from dosen where nik='$_SESSION[username]'";
						$b=mysqli_query($koneksi,$a);
						$c=mysqli_fetch_array($b);
						?>
						<tbody>
							<tr>
								<td>NIK</td>
								<td>: <strong><?php echo $c['nik'];?></strong></td>
							</tr>
							<tr>
								<td>Nama Lengkap</td>
								<td>: <strong><?php echo $c['namadosen'];?></strong></td>
							</tr>
							<tr>
								<td>Pendidikan</td>
								<td>: <strong><?php echo $c['pendidikan'];?></strong></td>
							</tr>
							<tr>
								<td>Bidang Keahlian</td>
								<td>: <strong><?php echo $c['keahlian'];?></strong></td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td><a class="btn btn-primary" href="#">Update Profil</a></td>
							</tr>
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
	alert('Nah siap looh, login dulu dong!');
	document.location='index.php';
</script>";
}
?>