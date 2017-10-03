

<center>
 <table style="border-collapse: collapse;"> 
  <tr style="border-collapse: collapse;">
    <td style="border: solid 1px black; padding: 10px"><b>number</b></td>
    <td style="border: solid 1px black; padding: 10px"><b>title</b></td>
    <td style="border: solid 1px black; padding: 10px"><b>edit</b></td>
   

  </tr>
  
  <?php 
  $k=0;
  foreach ($data['post'] as $key => $post) {
  ?>
  
  <?php $k++; ?> 

  <tr  style="border-collapse: collapse;">
    <td style="border: solid 1px black; padding: 10px">
      <?= $k ?>
    </td>
    <td style="border: solid 1px black;  padding: 10px">
      <?= $post['title'] ?>
              <td style="border: solid 1px black; padding: 10px">
                <a href="/admin/allpost?method=edit&id=<?=$post['id']?>">Редагувати</a>
              </td>
              </tr>

               <?php  }?>

          </table>  
        </center>