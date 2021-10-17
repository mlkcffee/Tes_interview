<?php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['level'])){
	include "header.php";
	include "menu.php";
	include "content.php";
	include "footer.php";
}else{
	echo "<script language='javascript'>
	alert('login dulu dong!');
	document.location='index.php';
</script>";
}
?>