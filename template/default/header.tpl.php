<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?=TEMPLATE;?>css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?=TEMPLATE;?>css/style.css">
	<title><?=SITE_NAME_HEADER;?></title>
	<style>
		a{
			text-decoration: none;
		}
	</style>
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
	<div id="karkas" class="container">
		<div id="header">
			<h2>Доска объявлений</h2>
			
			<div id="auth">	
				<? if(!$user) : ?>
				<ul>
					<li>
					<a href="?action=login">Вход</a>
					</li>
					<li>
					<a href="?action=registration">Регистрация</a>
					</li>
				</ul>
				<? else :?>
				<ul>
					<li>
					<a href="?action=registration"> Добро пожаловать [<?=$user['name'];?>]</a>
					</li>
					<li>
					<a href="?action=login&logout=1">Выход</a>
					</li>
				</ul>
				<? endif; ?>
			</div>	
		</div>