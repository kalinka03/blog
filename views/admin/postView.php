<center>

 <script type="text/javascript" src="//..tinymce/tinymce.min.js"></script>
            <script type="text/javascript">tinymce.init({ selector:'textarea', language: 'uk_UA', height:250,
        language : "ru",
        theme: 'modern',
        plugins: [
            'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            'searchreplace wordcount visualblocks visualchars code fullscreen',
            'insertdatetime media nonbreaking save table contextmenu directionality',
            'emoticons template paste textcolor colorpicker textpattern imagetools'
        ],
        toolbar1: 'insertfile undo redo | styleselect| bold italic | alignleft aligncenter alignright alignjustify ' +
        '| bullist numlist outdent indent | link image',
        toolbar2: 'print preview media | forecolor backcolor emoticons',
        image_advtab: true });</script>      
                 

 <form action="/admin/post/?method=insert" method="POST">
  <div class="form-group">
    <label for="inputEmail" class="control-label col-xs-2">ЗАГОЛОВОК</label>
    <div class="col-xs-10">
       <input type="text" class="form-control" type="text"  name="insert[title]" placeholder="Введіть назву" value="" required >
    </div>
  </div>
   <div class="form-group">
    <label for="inputEmail" class="control-label col-xs-2">ВИБЕРІТЬ КАТЕГОРІЮ</label>
    <div class="col-xs-10">
       <select  style="width:150px padding: 25px;" name="insert[category_id]" id="" required>
            
            <?php 

            foreach ($data['category'] as $key => $category){?>
            <option style="width=50px" value="<?=$category['id']?>"><?=$category['title']?></option>
            <?php
        }
        ?>

    </select>
    </div>
  </div>
  <br/>

   <br/>
    <br/>
   <textarea align="center" name="insert[text]"  style="margin-right: 20px; width: 800px; height: 200px;" required>
          
       <br/>
       
    <br>

 </textarea><br />

                <button type="submit">Додати продукт</button>
                </form>

</center>