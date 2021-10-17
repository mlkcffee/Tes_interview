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
					<h3>Form Tambah Pasien</h3>
				</div>
				<div class="module-body">
					<?php
//simpan
					if(isset($_POST['simpan'])){
						$nim=$_POST['nim'];
						$pass=md5($_POST['nim']);
						$nama=$_POST['nama'];
						$prodi=$_POST['prodi'];
						$semester=$_POST['semester'];
						if(empty($nim) || empty($nama)){
							echo "<div class='alert'>
							<button type='button' class='close' data-dismiss='alert'>×</button>
							<strong>Peringatan!</strong> NIK dan Nama pasien harus diisi!
						</div>";
					}elseif(strlen($nim)<>16){
						echo "<div class='alert'>
						<button type='button' class='close' data-dismiss='alert'>×</button>
						<strong>Peringatan!</strong> Nomor Induk Kependudukan harus 16 karakter!
					</div>";
				}else{
					$a="insert into mahasiswa values
					('$nim','$nama','$prodi','$semester')";
					$x="insert into user values('$nim','$pass','mahasiswa')";
					$y=mysqli_query($koneksi,$x);
					$b=mysqli_query($koneksi,$a);
					if($b){
						echo "<div class='alert alert-success'>
						<button type='button' class='close' data-dismiss='alert'>×</button>
						<strong>Pesan!</strong> Input data pasien berhasil 
					</div>";
				}
			}
		}
		?>
		
		<form class="form-horizontal row-fluid" method="POST" action="">
			<div class="control-group">
				<label class="control-label" for="basicinput">Nomor Induk Pasien</label>
				<div class="controls">
					<input type="text" name="nim" id="basicinput" placeholder="Ketik NIK disini" class="span8">
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="basicinput">Nama Pasien</label>
				<div class="controls">
					<input type="text" name="nama" id="basicinput" placeholder="Ketik Nama disini" class="span8">	
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="basicinput">Alamat Wilayah</label>
				<div class="controls">
					<select tabindex="1" name="prodi" data-placeholder="Pilih program studi" class="span8">
						<option value="Keputih">Keputih</option>
						<option value="Gebang Putih">Gebang Putih</option>
						<option value="Nginden Jangkungan">Nginden Jangkungan</option>
						<option value="Nginden Jangkungan">Nginden Jangkungan</option>
						<option value="Menur Pumpungan">Menur Pumpungan</option>
						<option value="Semolowaru">Semolowaru</option>
						<option value="Medokan Semampir">Medokan Semampir</option>
						<option value="Klampis Ngasem">Klampis Ngasem</option>
					</select>
				</div>
			</div>
			
			<!--
			<div class="control-group">
				<label class="control-label" for="basicinput">Umur</label>
				<div class="controls">
					<select tabindex="1" name="semester" data-placeholder="Pilih semester" class="span8">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
					</select>
				</div>
			</div>
			-->

			<div class="control-group">
				<label class="control-label" for="basicinput">Umur</label>
				<div class="controls">
					<input type="text" name="semester" id="basicinput" placeholder="Ketik Umur disini" class="span8">	
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