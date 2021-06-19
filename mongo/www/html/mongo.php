<?php
	//require_once '/var/www/html/vendor/autoload.php';
	require_once __DIR__ . '/vendor/autoload.php';
	$mongo = new MongoDB\Client("mongodb://km2:km2pass@mongo:27017");
	#$mongo = new MongoDB\Client("mongodb://mongo:27017");
	$db = $mongo->selectDatabase('test');
	$collection = $db->selectCollection('test_col');
	
	$result = $collection->find();
	foreach($result as $column){
		print_r($column);
	}
?>
