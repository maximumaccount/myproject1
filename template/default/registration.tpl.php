<center>
<h2>Войдите в систему!</h2>
<font size="1"><br></font>
	<?=$_SESSION['msg'];?>
	<? unset($_SESSION['msg']);?>
		<form method='POST'>
		Логин:<br>
			<input type='text' name='reg_login' class="input" value="<?=$_SESSION['reg']['login'];?>">
		<br>
		Пароль:<br>
			<input type='password' class="input" name='reg_password'>
		<br>
		Повторите пароль:<br>
			<input type='password' class="input" name='reg_password_confirm'>
		<br>
		Почтовый адрес:<br>
			<input type='text' name='reg_email' class="input" value="<?=$_SESSION['reg']['email'];?>">
		<br>
		Ваше имя:<br>
			<input type='text' name='reg_name' class="input" value="<?=$_SESSION['reg']['name'];?>">
		<br><font size="1"><br></font>
		<input type='submit' class='submit' name='reg' value='Регистрация'>
	</form>
</center>