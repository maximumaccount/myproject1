<h3 class="title_page">Не подтвержденные объявления</h3>
<? if($_SESSION['a_msg']) :?>
	<?=$_SESSION['a_msg'];?>
	<? unset($_SESSION['a_msg']);?>
<? endif;?>

<? if($_SESSION['msg']) :?>
	<?=$_SESSION['msg'];?>
	<? unset($_SESSION['msg']);?>
<? endif;?>
<? if(is_array($text)) :?>
<form method="POST">
	<table cellspacing="0" class="moder_mess">
	<thead>
		<th>id</th>
		<th>title</th>
		<th>User</th>
		<th>Action</th>
	</thead>
		<? foreach($text as $item) :?>
		<tr>
				<td>
					<?=$item['id'];?>
				</td>
				<td>
					 <?=$item['title'];?> <br />
					 <small><?=$item['cat'];?></small> |
					 <small><?=$item['razd'];?></small>
				</td>
				<td>
					<?=$item['user'];?> <br />
					<?=$item['email'];?>
				</td>	
				
				<td>
					<input type="checkbox" name="id_mess[]" value="<?=$item['id'];?>">
				</td>
		</tr>
		<? endforeach;?>
	
	</table>
	<input type="submit" value="Ok" />
</form>

<? else :?>
		<p>Не подтвержденных объявлений нет</p>
	<? endif;?>	
	<? if($navigation) :?>
							<ul class="pager">
								<? if($navigation['first']) :?>
									<li class="first">
										<a href="?page=1">Первая</a>
									</li>
								<? endif; ?>
								
								<? if($navigation['last_page']) :?>
									<li>
										<a href="?page=<?=$navigation['last_page']?>">&lt;</a>
									</li>
								<? endif; ?>
								
								<? if($navigation['previous']) :?>
									<? foreach($navigation['previous'] as $val) :?>
										<li>
											<a href="?page=<?=$val;?>"><?=$val;?></a>
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
											<a href="?page=<?=$v;?>"><?=$v;?></a>
										</li>
									<? endforeach; ?>
								<? endif; ?>
							<? if($navigation['next_pages']) :?>
									<li>
										<a href="?page=<?=$navigation['next_pages']?>">&gt;</a>
									</li>
								<? endif; ?>	
								
							<? if($navigation['end']) :?>
									<li class="last">
										<a href="?page=<?=$navigation['end']?>">Последняя</a>
									</li>
								<? endif; ?>		
									
							</ul>
							<? endif;?>
							



