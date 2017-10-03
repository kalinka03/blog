<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<!-- 	<div style="margin: 0 auto;">
					<form   method='post' action="/login">
<input name='email' type="text" class="form-control"  placeholder="Ваш email"> 
												
															
        
						 <input id="password" class="form-control" type="password" name="password" placeholder="Ваш пароль"value="" >
						 
							<button type="submit" class="btn btn-default btn-lg pull-right ">Відправити</button>
	</form>
</div> -->




<form class="form-horizontal" method='post' action="/login" method='post'  >
  <div class="form-group">
    <label for="inputEmail" class="control-label col-xs-2">Email</label>
    <div class="col-xs-10">
       <input id="password" class="form-control" type="text"  name='email'  placeholder="Ваш email" value="" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword" class="control-label col-xs-2">Пароль</label>
    <div class="col-xs-10">
      <input type="password" class="form-control" name="password"  placeholder="Пароль" value="" required>
    </div>
  </div>
  <div class="form-group">
    <div class="col-xs-offset-2 col-xs-10">
      <div class="checkbox">
        <label><input type="checkbox"> Запомнить</label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-xs-offset-2 col-xs-10">
      <button type="submit" class="btn btn-primary">Войти</button>
    </div>
  </div>
</form>

	</body>
	</html>

