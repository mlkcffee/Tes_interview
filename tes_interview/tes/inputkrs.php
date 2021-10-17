<?php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['level'])){
	include "koneksi/koneksi.php";
//hapus
	if(isset($_GET['nim']) && isset($_GET['kodemk'])){
		$nim=$_GET['nim'];
		$kodemk=$_GET['kodemk'];
		$sql="insert into krs values('','$nim','$kodemk')";
		$query=mysqli_query($koneksi,$sql);
		echo "<script language='javascript'>
		alert('isi penyakit berhasil!');
		document.location='krsmhs.php';
	</script>";
}else{
	echo "Data yang dipilih tidak ada";
}
}else{
	echo "<script language='javascript'>
	alert('login dulu dong!');
	document.location='index.php';
</script>";
}
?>