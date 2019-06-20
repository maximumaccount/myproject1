<div style="margin:0px auto; width:300px; border:2px solid gray; text-align:center;">
<? if($acc) :?>
	<p style="color:red"><?=$acc;?></p>
<? endif;?>
<h1>Авторизируйтесь</h1>
			<?=$_SESSION['msg'];?>
			<? unset($_SESSION['msg'])?>
				<form method='POST'>
				<label>
				login<br>
					<input type='text' name='login'>
				</label><br>
				Password<br>
				<label>
					<input type='password' name='password'>
				</label><br>
				<input type='submit' value='Вход'>
			</form>
</div>			