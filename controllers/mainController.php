<?php


if( $action == 'main' ) {
	function getPostsSort( $db ) {
$res = sql( $db, 'SELECT * FROM `posts`  ORDER BY `id` DESC LIMIT 10', [],  'rows');
return $res;
}

	$posts = getPostsSort( $db );
	view('postssort', $posts );
}
if( $action == 'catalog'&& $idRout==null ) {
	$categories = getCategories( $db );
	// view('catalog', $categories );

$allCategoriesCount = getCategoryCount($db)[0]['category_count'];
	
	$pagination = [
	'pages_count' => ceil($allCategoriesCount / $_config['items_on_page'])
	];
    
  view('catalog',$categories, ['pagination' => $pagination]);
  }


?>