<?php
function insertUser($db, $name, $email, $password,  $login){
	$insertUsers = $db->prepare("INSERT INTO users(`name`, `role`, `email`, `password`, `login`) VALUES (?, ?, ?, ?, ?)");
    $insertUsers->execute(array($name, 'customer', $email, $password, $login));
}


function getUsers( $db ) {
  
    $users = sql($db,
        'SELECT * FROM `users` 
        ORDER BY `id` DESC ',
        [],
        'rows'
    );
    return $users;
}
// var_dump($users );

function getUser( $db, $id ) {
    $user = sql($db,
        'SELECT * FROM `users` WHERE `id` = '.$id,
        [],
        'rows'
    );
    return $user;
}
function saveUser( $db, $userData ) {
    $user = sql($db,
        'UPDATE `users` set 
          `name` = "'. $userData['name'] .'",  
          `email` = "'. $userData['email'] .'",  
          `login` = "'. $userData['login'] .'",  
          `password` = "'. sha1($userData['password']) .'"
          WHERE `id` = '.$userData['id']
    );
    return $user;
}
function deleteUser($db, $id){
        $user = sql( $db, 'DELETE  FROM `users` 
        WHERE `id`='.$id,
        []  
    );
return $user;
}

function getUsersCount( $db ) {
    $usersCount = sql($db,
        'SELECT COUNT(*) as users_count FROM `users`',
        [],
        'rows'
    );
    return $usersCount;
}


