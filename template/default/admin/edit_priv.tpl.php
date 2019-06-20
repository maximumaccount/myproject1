<h3 class="title_page">Привилегии</h3>
<? if($_SESSION['msg']) :?>
	<?=$_SESSION['msg'];?>
	<? unset($_SESSION['msg']);?>
<? endif;?>
<form method="POST">
	<table cellspacing="0" class="moder_mess">
	<thead>
		<th>Привилегии</th>
		<? if(is_array($roles)) :?>
			<? foreach($roles as $item) :?>
				<th><?=$item['name']?></th>
			<? endforeach;?>
		<? endif;?>
		<th></th>
	</thead>
	<? if(is_array($priv)) :?>

		<? foreach($priv as $key=>$val):?>
		<tr>
			<td><?=$key?></td>
			<? foreach($roles as $item) :?>
				<td>
					<? if(array_key_exists($item['id'],$val)) :?>
						<input name="<?=$item['id']?>[]" type="checkbox" checked value="<?=$val['id_priv'];?>">
					<? else :?>
						<input name="<?=$item['id']?>[]" type="checkbox"  value="<?=$val['id_priv'];?>">
					<? endif;?>
					
				</td>
			<? endforeach;?>		
		</tr>
		<? endforeach; ?>
	<? endif;?>
	</table>
	<input type="submit" value="Edit" />
</form>	