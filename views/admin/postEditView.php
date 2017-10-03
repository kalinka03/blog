<form action="/admin/allpost/?method=update" method="POST" enctype="multipart/form-data">

  <input type="hidden" name="form[id]" value="<?=$data['product']['id']?>">

	<label> Введите название</label>
	<input type="text" name="form[title]" value="<?=$data['post']['title']?>"><br/>
<label> Введите текст</label>
  <input type="text" name="form[text]" value="<?=$data['post']['text']?>"><br/>

  <?php
	var_dump($data['post']['category_id']);
	
	?>
	<select name="form[category_id]" id="">
	
		<?php 
		foreach ($data['category'] as $key => $category){?>
			<option value="<?=$category['id']?>" 
			<?= ($category['id']==$data['post']['category_id']) ? 'selected' : '' ?>>
			<?=$category['title']?>
			</option>
		<?php
		}
		?>
	</select>
  
  Picture: <input type="file" name="picture" ><br/><br/> 
  <button type="submit">Редагувати</button>
</form>