<?php

$config = [
		'db' => [
			'dsn' => 'mysql:host=localhost;dbname=market',
			'username' => 'market',
			'password' => 'market'
		],
		'product_list' => [
			'peer_page' => 20
		]
];
return $config;





// $config = new Config($pathToConfig);
// $dbParameters = $config->get('db');
// $dbParameter = $config->get('product_list.peer_page');
