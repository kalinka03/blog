<?php
function getCategories( $db ) {
   
    $category = sql( $db, 'SELECT * FROM `categories`', [], 'rows' );
    return $category;
}
function getCategoriesId($db, $idRout){
	$res = sql( $db,  'SELECT * FROM `categories` WHERE `id` = '.$idRout, [], 'rows' );
	return $res;
}

function getPosts ($db){
    $res = sql( $db, 'SELECT * FROM `posts`  ORDER BY `id` DESC LIMIT "10"', [],  'rows');
    return $res;
}

function getPostsAll ($db){
    $res = sql( $db, 'SELECT * FROM `posts`  ORDER BY `id` DESC', [],  'rows');
    return $res;
}

function saveCategory( $db, $categoryData ) {
    $category = sql($db,
        'UPDATE `categories` set 
        `title` = "'. $categoryData['title'] .'"  
        WHERE `id` = '.$categoryData['id']
        );
    return $category;
}


function savePost( $db, $postData ) {
    $post= sql($db,
        'UPDATE `posts` set 
        `title` = "'. $postData['title'] .'" ,
        `text` = "'. $postData['text'] .'" ,
        `category_id` = "'. $postData['category_id'] .'",
        `role` = 1 ,
        WHERE `id` = '.$postData['id']
        );
    return $post;
}
function getPostsId($db, $idRout){
   $_page = $_GET['page'] ?? 0;
   global $_config, $_page;
   $PostsId = sql($db,
    "SELECT * FROM `posts` WHERE
    `category_id` = '{$idRout}'
    LIMIT ".($_page*5).','.$_config['items_on_page'],
    [],
    'rows'
    ); 
   return $PostsId;
}

function getCategoriesById( $db, $id ) {
  
    $res = sql($db,
        'SELECT * FROM `categories` WHERE `id` = '.$id,
        [],
        'rows'
        );
    return $res;
}


function insertCategories($db, $title, $slug){
    $insertCategories = $db->prepare("INSERT INTO categories(`title`, `slug`) VALUES (?, ?)");
    $insertCategories->execute(array($title, $slug));
}

function insertPost($db, $title, $text, $user_id,  $category_id, $date ){
    $insertPost = $db->prepare("INSERT INTO posts(`title`, `text`, `user_id`, `category_id`, `created_at`) VALUES (?, ?, ?, ?, ?)");
    $insertPost->execute(array($title, $text, $user_id, $category_id, $date,));
}

function getCategoryCount( $db ) {
    $categoryCount = sql($db,
        'SELECT COUNT(*) as category_count FROM `categories`',
        [],
        'rows'
        );
    return $categoryCount;
}

function getPostsCount( $db, $idRout ) {
    $postCount = sql($db,
        'SELECT COUNT(*) as post_count FROM `posts` WHERE `category_id` = '.$idRout,  [],
        'rows' 
        
        );
    return $postCount;
    
}
