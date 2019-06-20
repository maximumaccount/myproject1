
				<h3 class="title_page"><?=$text['title']?></h3>
				<? if($_SESSION['msg']) : ?>
					<?=$_SESSION['msg'];?>
					<? unset($_SESSION['msg']);?>
				<? endif;?>	
				<? if($text) :?>
						<div class="t_mess">
							<h4 class="title_p_mess"><a href="?action=view_mess&id=<?=$text['id']?>"><?=$text['title']?></a></h4>
						<? if($text['confirm'] == 0) :?>
							<p class="no_confirm"><strong>Внимание! Объявление обрабатывается модератором!</strong></p>
						<? endif;?>	
						<? if($text['is_actual'] == 0) :?>
							<p class="no_actual"><strong>Уже не актуально</strong></p>
						<? endif;?>	
					<p class="p_mess_cat">
						<strong>Категория:</strong><?=$text['cat']?> 			|
						<strong>Тип объявления:</strong> <?=$text['razd']?>				|
						<strong>Город:</strong> <?=$text['town']?>			</p>
					<p class="p_mess_cat">
						<strong>Дата объявления:</strong> <?=date("d.m.Y",$text['date'])?>				|
						<strong>Телефон:</strong> <?=$text['price'];?>				|
						<strong>Автор</strong> <a href="mailto:<?=$text['email']?>"><?=$text['uname']?></a>
						
					</p>
					<p><img class="mini_mess" src="<?="/".MINI.$text['img'];?>">
					<?=nl2br($text['text']);?>
					</p>	
			<?if($img_s && is_array($img_s)) :?>
				<? foreach($img_s as $item) :?>
					<img src="<?="/".MINI.$item;?>">
				<? endforeach;?>	
			<?endif;?>
			</div>
				<? endif; ?>
					