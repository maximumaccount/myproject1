<?php

if(isset($_POST['login']) && isset($_POST['password'])) {

	$msg = login($_POST);
	
	if($msg === TRUE) {
		header("Location:".$_SERVER['PHP_SELF']);
	}
	else {
		$_SESSION['msg'] = $msg;
		header("Location:".$_SERVER['PHP_SELF']);
	}
	exit();
	
}

require_once TEMPLATE."admin/login.tpl.php";
?>