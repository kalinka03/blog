<?php
if ($action == null){
  
    include "views/404.view.php";
}
include "controllers/catalogController.php";
include "controllers/mainController.php";
include "controllers/loginController.php";
include "controllers/logoutController.php";



if( isset( $_SESSION['user'] ) && $_SESSION['user_role'] == '1' )  {

 $method = $_GET['method'] ?? null;


if ($subAction!=null){
$controllerFileName = 'controllers/admin/' . $subAction . 'Controller.php';


                include_once $controllerFileName;
            }
 else {
                view('admin/main');
            }


}
