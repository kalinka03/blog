<?php

if($subAction=='post'&& $method=='insert'){
  $datares=$_POST['insert'];
  $title=$datares['title'];
  $text=$datares['text'];
  $user_id=$_SESSION['user'];
  $category_id=$datares['category_id'];
  $date=date('Y-m-d G:i:s');

  $resPost= insertPost($db, $title, $text, $user_id, $category_id, $date );
  header('location: /admin/allpost');
  exit();
}

else if($subAction=='post'){
 $category = getCategories($db);
 viewHelpers('admin/post',['category'=>$category]);

}































// if($subAction=='product'&& $method=='edit'){
// 	   $id=$_GET['id'];
//        $res= getCategories($db);
// 	$resProduct=getProductId1($db, $id);
// 	// var_dump($res);
//  viewHelpers('admin/productEdit', ['product' => $resProduct[0],'category' => $res]);
// 	// $res= getCategorie1($db, $idRout);
// 	// var_dump($res);
// }

// else if($subAction=='product'&& $method=='update'){

//   $resProduct= saveProduct($db, $_POST['form']);

//   header('location: /admin/product');
//   exit();
// }

// else
//  if($subAction=='product'&& $method=='delete'){
//     $id=$_GET['id'];
//     $product= deleteProduct($db, $id);
//     header('location:/admin/product');
//     exit();
// }

//  else if($subAction=='product'&& $method=='create'){
//     viewHelpers('admin/productCreate');
// }


// else if($subAction=='product'&& $method=='insert'){
//     $datares=$_POST['insert'];
//     $title=$datares['title'];
//      $description=$datares['description'];
//       $price=$datares['price'];
//          $category_id=$datares['category_id'];

//     $resProduct= insertProduct($db, $title,$description, $price, $category_id );
//     header('location: /admin/product');
//     exit();
// }









//  else if ($subAction=='product'){
//      $resProduct = getProduct($db);
//     $res= getCategories($db);


// foreach ( $resProduct as $key=>$product) {

// $res = getCategories($db, $product['category_id']);

//          $resProduct[$key]['category_name']=$res[0]['title'];

//     }


//     viewHelpers('admin/product', $resProduct);

// }











    //  $category = getCategoriesId($db, $product['category_id']);
    //  $categoryTitle= getCategoriesTitle($db, $product['category['title']');
    // var_dump($categories); 
    // exit();
    // var_dump($category['title']);
    // exit();
// }}
     // var_dump( $category);
//     foreach ($res as $product) {
//     	$category = getCategoriesId($db, $product['category_id']);
//     	var_dump($category); exit();


//    $product['category_name']=$category[0]['title'];



//    var_dump($product['category_id']);

// 	$product['category_title']= getCategoriesById ($db, $product['category_id']);
// }
//     var_dump($product['category_title']);
//     viewHelpers('admin/product', $res);
// }

//  else if($subAction=='product'){
//     $resProduct = getProduct($db);
//     $res=getCategories( $db );
//     // var_dump($res);
//     viewHelpers('admin/product', $resProduct);
// }