<div id="menu">
			<ul>
			<? if($user) :?>
				<? if($edit_us) :?>
				<li><a href="<?=SITE_NAME;?>/admin.php?action=edit_user">Пользователи</a></li>
				<li><a href="<?=SITE_NAME;?>/admin.php?action=edit_priv">Привилегии</a></li>	
				<? endif;?>
				
				<? if($add_cat) :?>
				<li><a href="<?=SITE_NAME;?>/admin.php?action=edit_cat">Категории</a></li>	
				<? endif;?>
				
				<? if($edit_mess) :?>
				<li><a href="<?=SITE_NAME;?>/admin.php?action=edit_adm_mess">Объявления</a></li>	
				<? endif;?>
				
			<? endif;?>
			
			</ul>
			<div style="clear:both"></div>	
		</div>