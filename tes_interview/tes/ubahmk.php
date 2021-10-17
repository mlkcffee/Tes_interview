<?php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['level'])){
	include "header.php";
	include "menu.php";
	if(isset($_GET['kodemk'])){
		$kodemk=$_GET['kodemk'];
		$sql="select * from mk where kodemk='$kodemk'";
		$query=mysqli_query($koneksi,$sql);
		$data=mysqli_fetch_array($query);
	}else{
		echo "Data yang diubah belum ada";
	}
	?>

	<div class="span9">
		<div class="content">

			<div class="module">
				<div class="module-head">
					<h3>Form Tambah Mata Kuliah</h3>
				</div>
				<div class="module-body">
					<?php
					if(isset($_POST['ubah'])){
						$namamk=$_POST['namamk'];
						$sks=$_POST['sks'];
						$a="update mk set namamk='$namamk',sks='$sks' where kodemk='$kodemk'";
						$b=mysqli_query($koneksi,$a);
						if($b){
							echo "<div class='alert alert-success'>
							<button type='button' class='close' data-dismiss='alert'>×</button>
							<strong>Pesan!</strong> Ubah data mata kuliah berhasil 
						</div>";
					}
				}
				?>	
				<form class="form-horizontal row-fluid" method="POST" action="">
					<div class="control-group">
						<label class="control-label" for="basicinput">Kode Mata Kuliah</label>
						<div class="controls">
							<input type="text" name="kodemk" id="basicinput" value="<?php echo $data['kodemk'];?>" class="span8" disabled>
						</div>
					</div>

					<div class="control-group">
						<label class="control-label" for="basicinput">Nama Mata Kuliah</label>
						<div class="controls">
							<input type="text" name="namamk" id="basicinput" value="<?php echo $data['namamk'];?>" class="span8">
							
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label" for="basicinput">Jumlah SKS</label>
						<div class="controls">
							<input type="text" name="sks" id="basicinput" value="<?php echo $data['sks'];?>" class="span8">
							
						</div>
					</div>										

					<div class="control-group">
						<div class="controls">
							<button type="submit" name="ubah" class="btn btn-primary">Simpan Data</button>
						</div>
					</div>
				</form>
			</div>
		</div>

		
		
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