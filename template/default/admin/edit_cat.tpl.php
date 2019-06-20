<h3 class="title_page">Категории</h3>
<?if($_SESSION['msg']):?>
	<?=$_SESSION['msg'];?>
	<? unset($_SESSION['msg']);?>
<? endif;?>
<div class="new_cat">
	<? if($do == 'add') :?>
		<strong>Новая категория</strong>
		<form method="POST">
			<p>Имя категории:<br />
				<input type="text" name="name">
			</p>
			<p>
			Тип категории: <br />
			<select name="parent_id">
				<option value="0">Родительская</option>
				<? if(is_array($categories)) :?>
					 <? foreach($categories as $key => $item): ?>
					 	<option value="<?=$key?>"><?=$item['0']?></option>
					 <? endforeach; ?>
				<? endif;?>
			</select>
			</p>
			<input type="submit" value="Ok">
		</form>
	<? elseif($do == 'edit') :?>
		<strong>Категория - <?=$cat['name']?></strong>
		<form method="POST">
			<p>Имя категории:<br />
				<input type="text" name="name" value="<?=$cat['name']?>">
				<input type="hidden" name="id" value="<?=$cat['id']?>">
			</p>
			<p>
			Тип категории: <br />
			<select name="parent_id">
				<option value="0">Родительская</option>
				<? if(is_array($categories)) :?>
					 <? foreach($categories as $key => $item): ?>
					 	<? if($cat['parent_id'] == $key) :?>
							<option selected value="<?=$key?>"><?=$item['0']?></option>
						<? else :?>
							<option value="<?=$key?>"><?=$item['0']?></option>
						<? endif;?>
					 <? endforeach; ?>
				<? endif;?>
			</select>
			</p>
			<input type="submit" value="Ok">
		</form>	
	<? endif;?>
</div>
<div class ="edit_cat">
<?if(is_array($categories)) :?>
<table cellspacing="0" class="moder_mess">
<thead>
		<th>Категория</th>
		<th>Родительская</th>
		<th>Изменить</th>
		<th>Удалить</th>
</thead>
                    <? foreach($categories as $key => $item): ?>
						<tr>
							<td class="title">
	                        	<strong>
										<?=$item[0]?>
								</strong>
							</td>
							<td>
								Родительская
							</td>
							<td>
								<a href="<?=SITE_NAME;?>/admin.php?action=edit_cat&id=<?=$key?>&do=edit">Изменить</a>
							</td>
							<td>
								<a href="<?=SITE_NAME;?>/admin.php?action=edit_cat&id=<?=$key?>&do=delete">Удалить</a>
							</td>	
						</tr>
						<? if(is_array($item['next'])) :?>
                            <?php foreach($item['next'] as $key => $sub): ?>
						<tr>
							<td class="title">
								-- <?=$sub?>
							</td>
							<td>
								Дочерняя
							</td>
							<td>
								<a href="<?=SITE_NAME;?>/admin.php?action=edit_cat&id=<?=$key?>&do=edit">Изменить</a>
							</td>
							<td>
								<a href="<?=SITE_NAME;?>/admin.php?action=edit_cat&id=<?=$key?>&do=delete">Удалить</a>
							</td>
						</tr>	
                            <?php endforeach; ?>
						<? endif;?>	
                    <?php endforeach; ?>
</table>					
<? else :?>
<p>Категорий нет</p>
<? endif;?>	
</div>
