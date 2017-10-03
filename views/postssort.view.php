                             <h1 align="center" style="color: red;
    font-size: 45px;"> БЛОГ </h1>
<center>
<?php 
foreach( $data as $posts ) { ?>
    <div style="width: 900px; border: 3px solid lawngreen; padding: 10px; margin: 5px;">
 <div style="margin: 10px 0">

		
   	<h2 style="color: blue;"><?=$posts['title']?></h2>
   		<p class="category_view"><?=$posts['text']?></p>
   		 <p style="float: right;"><?=$posts['created_at']?></p> <br/>
   		
	
		

			</div>
			</div>
	<?php } ?>

	</center>

