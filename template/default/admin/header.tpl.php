<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="<?=TEMPLATE;?>css/style.css">
<title><?=SITE_NAME_HEADER;?></title>
</head>
<body>
	<div id="karkas">
		<div id="header">
			<h2><a href="<?=SITE_NAME;?>">Доска объявлений</a></h2>
			
			<div id="auth">	
				<? if(!$user) : ?>
					<a href="?action=login">Вход</a>
					|
					<a href="?action=registration">Регистрация</a>
				<? else :?>
					Добро пожаловать[<?=$user['name'];?>]
				|
					<a href="?action=login&logout=1">Выход</a>
				<? endif; ?>
			</div>	
		</div>