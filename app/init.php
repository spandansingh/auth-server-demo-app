
<?php

require dirname(__DIR__).'/vendor/autoload.php';

use Auth\ApiClient;

$auth = new ApiClient(array(
	'KEY' =>  '4783924789374897238947923',  // YOUR AUTH KEY 
	'SECRET' =>  '$2y$10$qT8gRka/U4A.2hm5cXVtkuBcKLCV0Impo72DNOQl6Rz55Z2rYWwTa',  // YOUR AUTH SECRET
	'LOGIN_URI' =>   '/login.php', // YOUR APP LOGIN URL
));