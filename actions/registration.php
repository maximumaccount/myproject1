<?php
if($_GET['hash']) {
	
	$confirm = confirm();
	
	if($confirm === TRUE) {
		$_SESSION['msg'] = "Ваша учетная запись активирована. Можете авторизироваться на сайте.";
		header("Location:".$_SERVER['PHP_SELF']);
		exit();
	}
	else {
		$_SESSION['msg'] = $msg;
		header("Location:".$_SERVER['PHP_SELF']);
		exit();
	}
	
}




if(isset($_POST['reg'])) {
	
	$msg = registration($_POST);
	
	if($msg === TRUE) {
		$_SESSION['msg'] = "Вы успешно зарегистрировались на сайте. И для подтвержения регистрации  Вам на почту отправлено писмо с инструкциями.";
	}
	else {
		$_SESSION['msg'] = $msg;
	}
	
	header("Location:".$_SERVER['PHP_SELF']);
	exit();
}

$content = render(TEMPLATE."registration.tpl",array("title"=>"hello"));
?>