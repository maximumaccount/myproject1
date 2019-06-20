<center>
<h2>Авторизируйтесь в системе!</h2>
<font size="1"><br></font>
			<?=$_SESSION['msg'];?>
			<? unset($_SESSION['msg'])?>
				<form method='POST'>
				<label>
				Логин:<br>
					<input type='text' class="input" name='login'>
				</label><br>
				Пароль:<br>
				<label>
					<input type='password' class="input" name='password'>
				</label><br><font size="1"><br></font>
				<label>Запомнить меня
					<input type="checkbox" name='member' id='member' value="1">
				</label><br>
				<style>

  </style>
				<input  type='submit' class='submit' value='Войти в систему'>
			</form>
			
			<p>
				<a href="?action=registration.php">Регистрация</a> | <a href="?action=returnpass">Забыли пароль?</a>
			</p>
			</center>