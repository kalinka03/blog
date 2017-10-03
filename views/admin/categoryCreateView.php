<center>
	
<form  style="margin-top: 20px;" class="form-horizontal" action="/admin/category/?method=insert" method="POST">
<div class="form-group">

    <div class="col-xs-12">
     <input type="text" placeholder="Введіть назву" name="insert[title]" value="" required="">
    </div>
  </div>
  <div class="form-group">

    <div class="col-xs-12">
    <input type="text" placeholder="Введіть slug" name="insert[slug]" value="" required=""><br/>
    </div>
  </div>

      <div class="form-group">
    <div class="col-xs-12">
      <button type="submit" class="btn btn-primary">Додати категорію</button>
    </div>
 
</form>

</center>