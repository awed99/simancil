<?php 
@session_start();
include_once("../include/globalx.php");
switch ($_SESSION['sess_kelasuser']) {
	case "Super Admin" :
		break;
	case "Admin" :
		break;
	case "User" :
		break;	
	default :
		echo "<h1>Maaf Anda tidak diizinkan mengakses halaman General Ledger.</h1>";
		exit();
		
}

?>