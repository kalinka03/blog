<?php

 if ($subAction=='category'&& $method=='insert'){
	
	$dataCategory=$_POST['insert'];
	$title=$dataCategory['title'];
	$slug=$dataCategory['slug'];
// $rescategory= getNameCategory($db, $_POST['insert']);
// if ($rescategory==false) {


	$res= insertCategories($db, $title, $slug);
	header('location: /admin');
	exit();
}

 else if($subAction=='category'){
	viewHelpers('admin/categoryCreate');
}
// }
// else {
// 	$_SESSION['flash_msg'] = "Цей вхід тільки для адміна";
// }