
<?php
session_start();
require dirname(__DIR__).'/vendor/autoload.php';

use AuthServer\ApiClient;

$auth = new ApiClient(array(
	'KEY' =>  '1015466341',  // YOUR AUTH KEY 
	'SECRET' =>  '8OxDzE5minDU93h27G0R2pmeml1fhiWX44KZ0j6D',  // YOUR AUTH SECRET
	'LOGIN_URI' =>   '/login.php', // YOUR APP LOGIN URL
));