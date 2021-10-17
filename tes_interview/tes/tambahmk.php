<?php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['level'])){
	include "header.php";
	include "menu.php";
	?>

	<div class="span9">
		<div class="content">

			<div class="module">
				<div class="module-head">
					<h3>Form Tambah Penyakit</h3>
				</div>
				<div class="module-body">
					<?php
//simpan
					if(isset($_POST['simpan'])){
						$kodemk=$_POST['kodemk'];
						$namamk=$_POST['namamk'];
						$sks=$_POST['sks'];
						if(empty($kodemk) || empty($namamk)){
							echo "<div class='alert'>
							<button type='button' class='close' data-dismiss='alert'>×</button>
							<strong>Peringatan!</strong> Kode dan nama mata kuliah harus diisi!
						</div>";
					}elseif(strlen($kodemk)<>4){
						echo "<div class='alert'>
						<button type='button' class='close' data-dismiss='alert'>×</button>
						<strong>Peringatan!</strong> Kode mata kuliah harus 4 karakter!
					</div>";
				}else{
					$a="insert into mk values ('$kodemk','$namamk','$sks')";
					$b=mysqli_query($koneksi,$a);
					if($b){
						echo "<div class='alert alert-success'>
						<button type='button' class='close' data-dismiss='alert'>×</button>
						<strong>Pesan!</strong> Input data mata kuliah berhasil 
					</div>";
				}
			}
		}
		?>
		
		<form class="form-horizontal row-fluid" method="POST" action="">
			<div class="control-group">
				<label class="control-label" for="basicinput">Kode Penyakit</label>
				<div class="controls">
					<input type="text" name="kodemk" id="basicinput" placeholder="Ketik disini" class="span8">
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="basicinput">Nama Penyakit</label>
				<div class="controls">
					<input type="text" name="namamk" id="basicinput" placeholder="Ketik disini" class="span8">
					
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="basicinput">Jumlah SKS</label>
				<div class="controls">
					<input type="text" name="sks" id="basicinput" placeholder="Ketik disini" class="span8">
					
				</div>
			</div>										

			<div class="control-group">
				<div class="controls">
					<button type="submit" name="simpan" class="btn btn-primary">Simpan Data</button>
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