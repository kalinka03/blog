                             <h1 align="center"> КАТЕГОРІЇ </h1>
<center>
 <table style="border-collapse: collapse;"> 
<?php
foreach( $data as $category) { ?>
    <!-- <div style="width: 900px; border: 3px solid lawngreen; padding: 10px; margin: 5px;"> -->

 <!-- <div style="margin: 10px 0"> -->
  <tr  style="border-collapse: collapse;">
    <td style="border: solid 1px black; padding: 10px">
		<a href="/catalog/<?=$category['id']?>"><?=$category['title'] ?></a>
		  </td>
			<!-- 	</div> -->
				
		<?php
						
						
						if(file_exists('files/pictures/picture_'.$category['id'].'.jpg')) {
							?>
							<td style="border: solid 1px black; padding: 10px">
								<img   src="/files/pictures/picture_<?=$category['id']?>.jpg"  alt=""> </td>
						  </tr>
<!-- </div> -->
							<?php
						}}

					
					?>
				

						
</table>
	</center>