<?php

if( $action == 'catalog' && $idRout ) {
  $category = getCategoriesId($db, $idRout)[0];
  $posts= getPostsId($db, $idRout);
  // var_dump( $posts);
  $count = getPostsCount( $db,  $idRout );
// echo $count[0]['post_count'];
  $allPostsCount = $count[0]['post_count'];
// var_dump ($allPostsCount);
  
  $pagination = [
  'pages_count' => ceil($allPostsCount / $_config['items_on_page'])
  ];
  
  view('category',['category'=>$category,'posts'=>$posts, 'pagination' => $pagination]);
}