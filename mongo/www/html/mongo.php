<?php
	//require_once '/var/www/html/vendor/autoload.php';
	require_once __DIR__ . '/vendor/autoload.php';
	$mongo = new MongoDB\Client("mongodb://testuser:testpass@mongo:27017");
	if($_GET['init']){
		echo 'OK';
	} else {
		$db = $mongo->selectDatabase('test');
		$collection = $db->selectCollection('test_col');
		
		$result = $collection->find();
		foreach($result as $column){
			print_r($column);
		}
	}
?>
