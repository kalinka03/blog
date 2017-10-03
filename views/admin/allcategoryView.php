

<center>
 <table style="border-collapse: collapse;"> 
  <tr style="border-collapse: collapse;">
    <td style="border: solid 1px black; padding: 10px"><b>number</b></td>
    <td style="border: solid 1px black; padding: 10px"><b>title</b></td>
    <td style="border: solid 1px black; padding: 10px"><b>edit</b></td>
   

  </tr>
  
  <?php 
  $k=0;
  foreach( $data as $key=> $res) { ?>
  
  <?php $k++; ?> 

  <tr  style="border-collapse: collapse;">
    <td style="border: solid 1px black; padding: 10px">
      <?= $k ?>
    </td>
    <td style="border: solid 1px black;  padding: 10px">
      <?= $res['title'] ?>
    </td>
           <!--  <td style="border: solid 1px black; padding: 10px">
                <?= $user['email'] ?>
              </td> -->
              <td style="border: solid 1px black; padding: 10px">
                <a href="/admin/allcategory?method=edit&id=<?=$res['id']?>">Редагувати</a>
              </td>
              </tr>

               <?php  }?>

          </table>  
        </center>