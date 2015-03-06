<?php

require_once 'init.php';

$token = isset($_SESSION['auth_server_token'])?$_SESSION['auth_server_token']:NULL;

if($user = $auth->isLoggedIn($token)){
	echo 'Welcome ' . $user['first_name'] . ' ' . $user['last_name'];
// do your code
}
session_write_close();