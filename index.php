<?php 
require_once('./class/EzRouter.php');
require_once('./callback/callback_function.php');

$router = new Ezrouter();
$router->route('/',$func['home_test']);
$router->route('/test',$func['page_test']);
$router->end();
	


