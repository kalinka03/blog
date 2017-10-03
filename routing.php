<?php
$routs=[
'main',
'catalog',
'posts',
'login',
'logout',
'admin'
];
$action = null;
$subAction = null;
$idRout = null;
//print_r($_SERVER);
$_page = $_GET['page'] ?? 0 ;
if( $_SERVER['REQUEST_URI'] != '/' ) {
    $url =  parse_url($_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']);
    print_r($url);
    $urlArray = explode('/',$url['path']);
    
    $urlArray = array_filter($urlArray);
    $action = $urlArray[1];
    if( isset($urlArray[2]) ) {
        if(is_numeric($urlArray[2])){
            $idRout = $urlArray[2];
        }
        else $subAction = $urlArray[2];
    }
    if( !in_array( $action, $routs ) ) {
        $action = null;
        $subAction = null;
    }
    if( $action == '/' ) {
        $_page = $_GET['page'] ?? 0;
    }
}
else {
    $action = 'main';
}
