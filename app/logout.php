<?php

require_once 'init.php';

unset($_SESSION['auth_server_token']);
$auth->doLogout();