
				<h3 class="title_page">Категория - <?=$cat_name?></h3>
				<? if($name_razd) :?>
					<strong>Раздел: <?=$name_razd;?></strong>
				<? endif;?>
				<? if($_SESSION['msg']) : ?>
					<?=$_SESSION['msg'];?>
					<? unset($_SESSION['msg']);?>
				<? endif;?>	
				<? if($text) :?>
					<? foreach($text as $item) :?>
						<div class="t_mess">
							<h4 class="title_p_mess"><a href="?action=view_mess&id=<?=$item['id']?>"><?=$item['title']?></a></h4>
					<p class="p_mess_cat">
						<strong>Категория:</strong><?=$item['cat']?> 			|
						<strong>Тип объявления:</strong> <?=$item['razd']?>				|
						<strong>Город:</strong> <?=$item['town']?>			</p>
					<p class="p_mess_cat">
						<strong>Дата добавления объявления:</strong> <?=date("d.m.Y",$item['date'])?>				|
						<!--<strong>Цена:</strong> <?=$item['price'];?>	-->			|
						<strong>Автор:</strong> <a href="mailto:<?=$item['email']?>"><?=$item['uname']?></a>
						
					</p>
					<p><img class="mini_mess" src="<?="/".MINI.$item['img'];?>">
					<?=nl2br($item['text']);?>
					</p>	
			</div>
					<? endforeach;?>
<? if($navigation) :?>
	<ul class="pager">
		<? if($navigation['first']) :?>
			<li class="first">
				<a href="?action=categories&page=1&id_cat=<?=$id_cat;?><?=$id_r;?>">Первая</a>
			</li>
		<? endif; ?>
								
		<? if($navigation['last_page']) :?>
			<li>
				<a href="?action=categories&page=<?=$navigation['last_page']?>&id_cat=<?=$id_cat;?><?=$id_r;?>">&lt;</a>
			</li>
		<? endif; ?>
								
		<? if($navigation['previous']) :?>
			<? foreach($navigation['previous'] as $val) :?>
				<li>
					<a href="?action=categories&page=<?=$val;?>&id_cat=<?=$id_cat;?><?=$id_r;?>"><?=$val;?></a>
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
					<a href="?action=categories&page=<?=$v;?>&id_cat=<?=$id_cat;?><?=$id_r;?>"><?=$v;?></a>
				</li>
			<? endforeach; ?>
		<? endif; ?>
		<? if($navigation['next_pages']) :?>
			<li>
				<a href="?action=categories&page=<?=$navigation['next_pages']?>&id_cat=<?=$id_cat;?><?=$id_r;?>">&gt;</a>
			</li>
		<? endif; ?>	
								
		<? if($navigation['end']) :?>
			<li class="last">
				<a href="?action=categories&page=<?=$navigation['end']?>&id_cat=<?=$id_cat;?><?=$id_r;?>">Последняя</a>
			</li>
		<? endif; ?>		
									
</ul>
							<? endif;?>					
				<? else :?>
					<p>Объявлений нет</p>	
				<? endif; ?>
					