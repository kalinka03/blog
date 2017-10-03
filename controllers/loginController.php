<?php
if( $action == 'login'){
	if(!empty($_POST)){
		if (  strpos($_POST['email'], '@') ==false) {
			$_SESSION['flash_msg'] = "Неправильно введён email";
		};
		$email = $_POST['email'];
		$password = ($_POST ['password']);
		if( $email != ''  && $password!= '' ) {
			$userLogIn =sql( $db, "SELECT * FROM `users` WHERE `email` = ?  AND `password` = ? AND `role` = 1", [$email, $password],  'rows');
			if(!empty($userLogIn)){
				$checkId=$userLogIn[0]['id'];
				$_SESSION['user'] = $checkId;
				$_SESSION['user_name']=$userLogIn[0]['email'];
				$_SESSION['user_role']=$userLogIn[0]['role'];
				$_SESSION['flash_msg'] = "Ви увійшли як користувач" ." ". $userLogIn[0]['name'] ;
				$_SESSION['flash_msg'] = "Ви увійшли як " ." ". $userLogIn[0]['email'] ;
				include "views/header.php";
				exit();
			}
			else {
				$_SESSION['flash_msg'] = "Цей вхід тільки для адміна";
			}
		}
	}
	view('login');
}






























//  <?php
// if( $action == 'login'){
// 	if(!empty($_POST)){
// 		$name = $_POST['name'];
// 		$password = $_POST['password'];
// 		if( $name != '' && $password!= '' ) {
// 			$userLogIn = sql( $db, "SELECT * FROM `users` WHERE `name` = '$name'  AND `password` = '$password' ", [],  'rows');
// 			/*$userLogIn =sql( $db, "SELECT * FROM `users` WHERE `name` = '?' AND `login` = '?' AND `email` = '?' AND `password` = '?' ", [$name, $login, $email, $password],  'rows');*/
// 			// var_dump($userLogIn);
// 			if (empty ($userLogIn)) {
// 				echo "В базі немає такого користувача";}
// 			if (!empty ($userLogIn)) {
// 				echo "ДОбро пожаловать ";

// 				$checkId=$userLogIn[0]['id'];
// 				$_SESSION['user'] = $checkId;

// 				include "views/header.php";
// 				// if(empty($userLogIn)){
// 				// 	echo "ТТаокг логына не ысн";
// 				// }
// 				// 	$home_url = 'http://' . $_SERVER['HTTP_HOST'];
// 				// header('Location: '. $home_url);

// 				// /*view('header', $product);*/
// 				exit();

// 		}}
// 	}

// 	view('login');
// } 