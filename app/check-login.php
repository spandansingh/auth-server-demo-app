<?php

require_once 'init.php';

if($user = $auth->isLoggedIn()){
	echo 'Welcome ' . $user['first_name'] . ' ' . $user['last_name'];
// do your code
}