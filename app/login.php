<?php

require_once 'init.php';

$response = $auth->doLogin();

if(!$response['status']){
	exit($response['msg']);
}

$token = $auth->getToken();

$_SESSION['auth_server_token'] = $token;

header('Location: '.$auth->getCallbackUri());
session_write_close();