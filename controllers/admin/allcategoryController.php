<?php

if($subAction=='allcategory'&& $method=='edit'){
	$id=$_GET['id'];
	$category= getCategoriesId($db, $id);
	
	viewHelpers('admin/categoryEdit', ['category' => $category[0]]);
}
else if($subAction=='allcategory'&& $method=='update'){
	$res= saveCategory($db, $_POST['form']);
	$id=$_POST['form']['id'];
	if( $res && $_FILES['picture'] ) {
		$fileName = 'picture_'.$id.'.jpg';
		
		move_uploaded_file($_FILES['picture']['tmp_name'], 'files/pictures/'.$fileName);
	}
	header('location: /admin/allcategory');
	exit();
}

else if($subAction=='allcategory'){
	$categories = getCategories( $db );
	
	
	viewHelpers('admin/allcategory', $categories);
}