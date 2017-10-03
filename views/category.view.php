   <center>
   	<h1>Ви обрали категорію: <?=$data['category']['title'] ?></h1>
     
    <?php 
    global $_config, $_page;
    $i=$_page*$_config['items_on_page']; 
// echo $data['category']['id'];
    ?>
    <?php 

    foreach( $data['posts'] as $key =>  $posts ) {
      if ($posts ) { ?>
      <div style="border: 3px solid lawngreen; padding: 10px; margin: 5px;">
        <h3><?=$posts['title']?></h3>
        <p class="category_view"><?=$posts['text']?></p>
        <p style="float: right;"><?=$posts['created_at']?></p> <br/>
      </div> 
      <?php }} ?>
    <? else {
      $_SESSION['flash_msg'] = "В базе отсуствуют посты";
    } ?>

    
  </center>
  <div align="center" >
    <?php  pagination(
      $data['pagination']['pages_count'],'/catalog/'.$data['category']['id']
      
      );

      ?>

    </div>

