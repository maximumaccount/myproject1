<div id="menu">
			<ul>
			<? if($user) :?>
				<?if($add_mess):?>
					<li><a href="?action=add_mess">Добавить объявление</a></li>	
				<? endif;?>
				<li><a href="?action=p_mess">Ваши объявления</a></li>
			<? endif;?>
			
			<? if($razd && is_array($razd)) :?>
				<? foreach($razd as $item) :?>
					<li><a href="?action=<?=$m_action;?>&amp;id_r=<?=$item['id']?>&id_cat=<?=$id_cat;?>"><?=$item['name']?></a></li>
				<? endforeach;?>
			<? endif;?>
			</ul>
			<div style="clear:both"></div>	
		</div>