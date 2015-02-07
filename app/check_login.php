<?php

require_once 'init.php';

use Auth\ApiClient;

$auth = new ApiClient(array(
	'KEY' =>  '4783924789374897238947923',
	'SECRET' =>  '$2y$10$qT8gRka/U4A.2hm5cXVtkuBcKLCV0Impo72DNOQl6Rz55Z2rYWwTa',
	'LOGIN_URI' =>   '/login.php',
));

if($user = $auth->isLoggedIn()){
	echo 'Welcome ' . $user['first_name'] . ' ' . $user['last_name'];
// do your code
}