<center>
<h2>Введите свой почтовый адресс!</h2>
<font size="1"><br></font>
			<?=$_SESSION['msg']?>
			<?unset($_SESSION['msg'])?>
				<form method='POST'>
				<label>
				Email:<br>
					<input type='text' class='input' name='email'>
				</label><br><font size="1"><br></font>
				<input type='submit' class='submit' value='Вход'>
			</form>	
</center>