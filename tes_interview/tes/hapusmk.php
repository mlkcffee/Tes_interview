<?php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['level'])){
	include "koneksi.php";
//hapus
	if(isset($_GET['kodemk'])){
		$kodemk=$_GET['kodemk'];
		$sql="delete from mk where kodemk='$kodemk'";
		$query=mysqli_query($koneksi,$sql);
		header("location:datamk.php");
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