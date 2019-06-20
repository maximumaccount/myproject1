<h3 class="title_page">Пользователи</h3>
<?if($_SESSION['msg']):?>
	<?=$_SESSION['msg'];?>
	<? unset($_SESSION['msg']);?>
<? endif;?>
<? if($text):?>
<form method="POST">
	<table cellspacing="0" class="moder_mess">
	<thead>
		<th>id</th>
		<th>login|name</th>
		<th>role</th>
		<th>confirm</th>
		<th>Delete</th>
	</thead>
	<? foreach($text as $item) :?>
		<tr>
			<td>
				<?=$item['user_id']?>
			</td>
			<td><?=$item['login']?>|<?=$item['name']?>
				<br />
				<small><?=$item['email']?></small>
			</td>
			<td>
				<?if($roles):?>
				<form method="POST">
					<input type="hidden" name="role_id_u" value="<?=$item['user_id']?>" />
					<select name="role_u">
						<? foreach($roles as $val) :?>
							<? if($val['id'] == $item['id_role']) :?>
								<option selected value="<?=$val['id'];?>"><?=$val['name']?></option>
							<? else :?>
								<option value="<?=$val['id'];?>"><?=$val['name']?></option>
					  		<? endif;?>
						<? endforeach;?>
					</select>
					<input type="submit" name="edit_roles" value="Ok">
				</form>	
				<?else:?>
					<?=$item['role']?>
				<? endif;?>
				
			</td>
			<td>
				<?if($item['confirm']):?>
					<p style="color:green">Active</p>
				<?else:?>
					<form method="POST">
						<input type="checkbox" name="confirm_u" value="<?=$item['user_id']?>" />
					<input type="submit" name="confirm_user" value="Ok">
					</form>
				<?endif;?>
			</td>	
			
			<td>
				<input type="checkbox" name="delete_u[]" value="<?=$item['user_id'];?>">
			</td>
		</tr>
	<? endforeach;?>
	</table>
	<input type="submit" name="delete_user" value="Delete" />
</form>	
	<? if($navigation) :?>
							<ul class="pager">
								<? if($navigation['first']) :?>
									<li class="first">
										<a href="?action=edit_user&page=1">Первая</a>
									</li>
								<? endif; ?>
								
								<? if($navigation['last_page']) :?>
									<li>
										<a href="?action=edit_user&page=<?=$navigation['last_page']?>">&lt;</a>
									</li>
								<? endif; ?>
								
								<? if($navigation['previous']) :?>
									<? foreach($navigation['previous'] as $val) :?>
										<li>
											<a href="?action=edit_user&page=<?=$val;?>"><?=$val;?></a>
										</li>
									<? endforeach; ?>
								<? endif; ?>
							
							<? if($navigation['current']) :?>
									<li>
										<span><?=$navigation['current'];?></span>
									</li>
								<? endif; ?>
								
							<? if($navigation['next']) :?>
									<? foreach($navigation['next'] as $v) :?>
										<li>
											<a href="?action=edit_user&page=<?=$v;?>"><?=$v;?></a>
										</li>
									<? endforeach; ?>
								<? endif; ?>
							<? if($navigation['next_pages']) :?>
									<li>
										<a href="?action=edit_user&page=<?=$navigation['next_pages']?>">&gt;</a>
									</li>
								<? endif; ?>	
								
							<? if($navigation['end']) :?>
									<li class="last">
										<a href="?action=edit_user&page=<?=$navigation['end']?>">Последняя</a>
									</li>
								<? endif; ?>		
									
							</ul>
							<? endif;?>
<? else :?>
<p>Не подтвержденных объявлений нет</p>
<? endif;?>	
