<?php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['level'])){
	include "koneksi.php";
//hapus
	if(isset($_GET['nim'])){
		$nim=$_GET['nim'];
		$username=$_GET['username'];
		$sql="delete from mahasiswa where nim='$nim'";
		$sq1="delete from user where username='$username'";
		$query=mysqli_query($koneksi,$sql,$sq2);
		header("location:datamhs.php");
	}else{
		echo "Data yang dihapus belum dipilih";
	}
}else{
	echo "<script language='javascript'>
	alert('login dulu dong!');
	document.location='index.php';
</script>";
}
?>