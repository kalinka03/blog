<center>
	

<form action="/admin/password/?method=update" method="POST">

    <input type="password" placeholder="Введіть пароль"  name="insert[password]" value="<?=$data['user']['password']?>" required=""><br/>

    <button type="submit">Змінити пароль</button>
</form>

</center>