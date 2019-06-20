
				<div class="metro">
					<h3>Категории</h3>
					<ul>
					
					<? if(is_array($categories)):?>
						<? foreach($categories as $key=>$value):?>
							<? if($value['next']) :?>
								  <li><?=$value[0];?></li>
								  <ul>
								  <? foreach($value['next'] as $k=>$v):?>
								  	<li><a href="?action=categories&id_cat=<?=$k?>"><?=$v;?></a></li>
								  
								  <? endforeach;?>
								  </ul>
							<? endif;?>
						<? endforeach;?>
					<? endif;?>
                                            					
					</ul>
				</div>
				<center>
				<div>
					<h3>Поиск</h3>
					<form class="mysubform" action="#" method="GET">
						<input name="action" class="firstname" value="search" type="hidden">
						Поиск<br>
						<input name="search" class="firstname" type="text">
						Категория:<br>
							<select class="firstname" name="id_categories">
								<option selected="selected" value="">Выберите категорию</option>
								<optgroup label="Одежда">
									<option value="5">--Мужская</option>
									<option value="6">--Женская</option>
									<option value="13">--Детская</option>
								</optgroup>
								<optgroup label="Животные">
									<option value="7">--Кошки</option>
									<option value="8">--Собаки</option>
									<option value="14">--Другие</option>
								</optgroup>
								<optgroup label="Дом">
									<option value="9">--Мебель</option>
									<option value="10">--Сантехника</option>
									<option value="15">--Посуда</option>
									<option value="16">--Бытовая техника</option>
								</optgroup>
								<optgroup label="Сад, огород">
									<option value="11">--Интсрумент</option>
									<option value="12">--Строй материалы</option>
									<option value="17">--Растения</option>
								</optgroup>
							</select>
							<br>
							<br>
						Тип объявления:
						<input name="id_razd" value="1" type="radio" >Предложение							
						<input name="id_razd" value="2" type="radio" >Спрос					
						<br>
								
						<input value="Поиск" type="submit">
					</form>
				</div>
				</center>