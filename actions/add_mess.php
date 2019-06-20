<?php

if(!$user || !can($user['id_role'],array("ADD_MESS"))) {
	$text = "Доступ запрещен";
	$content = render(TEMPLATE."error.tpl",array("text"=>$text));
}
else {
	if($_POST) {
		$msg = add_mess($_POST,$user['user_id']);
		
		if($msg === TRUE) {
			$_SESSION['msg'] = "Успешно добвлено. Ожидает проверки модератора";
		}
		else {
			$_SESSION['msg'] = $msg;
		}
		
		header("Location:".$_SERVER['PHP_SELF']);
		exit();
	}
	$content = render(TEMPLATE."add_mess.tpl",array(
												'categories'=>$categories,
												'razd' => $razd
												));
}

?>