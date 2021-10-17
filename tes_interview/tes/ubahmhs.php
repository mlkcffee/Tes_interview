<?php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['level'])){
	include "header.php";
	include "menu.php";
	if(isset($_GET['nim'])){
		$nim=$_GET['nim'];
		$sql="select * from mahasiswa where nim='$nim'";
		$query=mysqli_query($koneksi,$sql);
		$data=mysqli_fetch_array($query);
	}else{
		echo "Data yang diubah belum ada";
	}
	?>
	?>

	<div class="span9">
		<div class="content">

			<div class="module">
				<div class="module-head">
					<h3>Form Ubah Data Pasien</h3>
				</div>
				<div class="module-body">
					<?php
					if(isset($_POST['ubah'])){
						$nama=$_POST['nama'];
						$prodi=$_POST['prodi'];
						$semester=$_POST['semester'];
						$a="update mahasiswa set nama='$nama',prodi='$prodi',
						semester='$semester' where nim='$nim'";
						$b=mysqli_query($koneksi,$a);
						if($b){
							echo "<div class='alert alert-success'>
							<button type='button' class='close' data-dismiss='alert'>×</button>
							<strong>Pesan!</strong> Ubah data mahasiswa berhasil 
						</div>";
					}
				}
				?>
				
				<form class="form-horizontal row-fluid" method="POST" action="">
					
					<!--					
					<div class="control-group">
						<label class="control-label" for="basicinput">NIK</label>
						<div class="controls">
							<input type="text" name="nim" id="basicinput" value="<?php echo $data['nim'];?>" class="span8" disabled>
						</div>
					</div>
					-->

					
					<div class="control-group">
						<label class="control-label" for="basicinput">NIK</label>
						<div class="controls">
							<input type="text" name="nim" id="basicinput" value="<?php echo $data['nim'];?>" class="span8">	
						</div>
					</div>
					
	
					<div class="control-group">
						<label class="control-label" for="basicinput">Nama Pasien</label>
						<div class="controls">
							<input type="text" name="nama" id="basicinput" value="<?php echo $data['nama'];?>" class="span8">	
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label" for="basicinput">Alamat Wilayah</label>
						<div class="controls">
							<select tabindex="1" name="prodi" data-placeholder="Pilih program studi" class="span8">
								<option value="Keputih" <?php if($data['prodi']=="Keputih"){ echo "selected";}?>>Keputih</option>
								<option value="Gebang Putih" <?php if($data['prodi']=="Gebang Putih"){ echo "selected";}?>>Gebang Putih</option>
								<option value="Nginden Jangkungan" <?php if($data['prodi']=="Nginden Jangkungan"){ echo "selected";}?>>Nginden Jangkungan</option>
								<option value="Menur Pumpungan" <?php if($data['prodi']=="Menur Pumpungan"){ echo "selected";}?>>Menur Pumpungan</option>
								<option value="Semolowaru" <?php if($data['prodi']=="Semolowaru"){ echo "selected";}?>>Semolowaru</option>
								<option value="Medokan Semampir" <?php if($data['prodi']=="Medokan Semampir"){ echo "selected";}?>>Medokan Semampir</option>
								<option value="Klampis Ngasem" <?php if($data['prodi']=="Klampis Ngasem"){ echo "selected";}?>>Klampis Ngasem</option>
							</select>
						</div>
					</div>
					
					<!--
					<div class="control-group">
						<label class="control-label" for="basicinput">Semester</label>
						<div class="controls">
							<select tabindex="1" name="semester" data-placeholder="Pilih semester" class="span8">
								<option value="1" <?php if($data['semester']=="1"){ echo "selected";}?>>1</option>
								<option value="2" <?php if($data['semester']=="2"){ echo "selected";}?>>2</option>
								<option value="3" <?php if($data['semester']=="3"){ echo "selected";}?>>3</option>
								<option value="4" <?php if($data['semester']=="4"){ echo "selected";}?>>4</option>
								<option value="5" <?php if($data['semester']=="5"){ echo "selected";}?>>5</option>
								<option value="6" <?php if($data['semester']=="6"){ echo "selected";}?>>6</option>
							</select>
						</div>
					</div>
					-->

					<div class="control-group">
						<label class="control-label" for="basicinput">Umur</label>
						<div class="controls">
							<input type="text" name="semester" id="basicinput" value="<?php echo $data['semester'];?>" class="span8">	
						</div>
					</div>

					<div class="control-group">
						<div class="controls">
							<button type="submit" name="ubah" class="btn btn-primary">Ubah Data</button>
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