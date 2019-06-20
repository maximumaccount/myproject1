<center>
<h2>Создайте новое объявление!</h2><font size="1"><br></font>
<form method='POST' enctype="multipart/form-data">
		Тема объявления:<br>
			<input type='text'  class='input' name='title' value="<?=$_SESSION['p']['title'];?>">
		<br>
		Текст объявления:<br>
			<textarea name="text" class='input'><?=$_SESSION['p']['text'];?></textarea>
		<br>
		Категория объявления:<br />
		<select name="id_categories" class='input'>
			<? if($categories) :?>
				<? foreach($categories as $key => $item) :?>
					<optgroup label="<?=$item[0]?>">
						<? foreach($item['next'] as $k => $v) :?>
							<option value="<?=$k?>">   --------- <?=$v;?> ---------</option>
						<? endforeach;?>
					</optgroup>
				<? endforeach;?>
			<? endif;?>	
		</select>
		<br />
		
		Тип объявления:<br />
		<? if($razd) :?>
			<? foreach($razd as $item) :?>
				<input type="radio" name="id_razd" value="<?=$item['id'];?>"><?=$item['name'];?>
			<? endforeach;?>
		<? endif;?>
				
		<br />
		
		Город:<br>
			<input type='text' name='town' class='input' value="<?=$_SESSION['p']['town'];?>">
		<br>
		
		Основное изображение:<br>
			<input type="hidden" name="MAX_FILE_SIZE" value="2097152">
			<input type='file' class='submit' name='img'><br/> <font size="1"><br></font>
		Дополнительные изображения:<br>
			<input type='file' class='submit' name='mini[]'>
			<input type='file' class='submit' name='mini[]'>
		<br/><font size="1"><br></font>
		
		Период актуальности объявления:<br />
		<select name="time" class='input'>
			<option value="10">--------------- 10 дней ---------------</option>
			<option value="15">--------------- 15 дней ---------------</option>
			<option value="20">--------------- 20 дней ---------------</option>
			<option value="30">--------------- 30 дней ---------------</option>
		</select>
		<br />
		
		Телефон:<br>
			<input type='text' name='price' class='input' value="<?=$_SESSION['p']['price'];?>">
		<br>
		
		Введите текст на изображении:<br>
			<img src="capcha.php"><br/> <font size="1"><br></font><input type='text' class='input' name='capcha'>
		<br> <font size="1"><br></font>
		
		<input type='submit' name='reg' class='submit' value='Добавить новое объявление'>
	</form>
<? unset($_SESSION['p'])?>	
</center>