<?php
if($subAction=='password'&& $method=='update'){
//    function savePassword ( $db, $CategoriesData ) {
//        $res = sql($db,
//            'UPDATE `users` set
//            `password` = "'. $userData['password'].'"
//            WHERE `role` = 1'
//            );
//        return $res;
//    }

    $id = $_POST['form']['id'];
    var_dump($id);
    $res= savePassword($db, $_POST['form']);

    $_SESION['flash_msg']='Пароль змінено';
    header('location: /admin/');

    exit();
}

else if($subAction=='password'){
    viewHelpers('admin/passwordChange');
}














