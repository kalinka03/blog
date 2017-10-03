<?php
if($subAction=='allpost'&& $method=='edit'){
	$id=$_GET['id'];
	$categories = getCategories($db);
	$post= getPostsId($db, $idRout);
	viewHelpers('admin/postEdit', ['post' => $post[0], 'category' => $categories]);
}
else if($subAction=='allpost'&& $method=='update'){
	
	$res= savePost($db, $_POST['form']);
	$id=$_POST['form']['id'];
	if( $res && $_FILES['picture'] ) {
		$fileName = 'picture_'.$id.'.jpg';
		
		move_uploaded_file($_FILES['picture']['tmp_name'], 'files/posts/'.$fileName);
	}
	header('location: /admin/product');
	exit();
}
else if($subAction=='allpost'){
	
	$posts= getPostsAll($db);
	// var_dump($posts);

	// exit();
	foreach ($posts as $key=>$post) {
		$category = getCategoriesId($db, $post['category_id']);
		$posts[$key]['category_title']=$category[0]['title'];
	}
	viewHelpers('admin/allpost',['post'=>$posts]);
}