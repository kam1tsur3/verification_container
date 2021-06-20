<?php
	//require_once '/var/www/html/vendor/autoload.php';
	require_once __DIR__ . '/vendor/autoload.php';
	$mongo = new MongoDB\Client("mongodb://testuser:testpass@mongo:27017");
	$db = $mongo->selectDatabase('test');
	$collection = $db->selectCollection('test_col');
	
	if($_GET['init']){
		echo 'OK';
		if($collection->count()) {
			echo 'DB has already been initialized.';
		} else {
			$collection->insertOne(['name' => 'user1', 'pass' => 'pass1']);
			$collection->insertMany([
				['name' => 'user3', 'pass' => 'pass3'],
				['name' => 'user4', 'pass' => 'pass4'],
				['name' => 'user5', 'pass' => 'pass5'],
			]);
			echo 'Successfully initialized.';
		}
	} else {
		if($_GET['user'] && $_GET['pass']){
			$user = $_GET['user'];
			$pass = $_GET['pass'];
			$result = $collection->find(['name' => $user, 'pass' => $pass]);
			foreach($result as $r){
				print_r($r);
			}
		} else {
			$result = $collection->find();
			foreach($result as $r){
				print_r($r);
			}
		}
	}
?>
<html>
	<head>
	</head>
	<body>
		<h1>Mongo DB test</h1>
		<form action="./mongo.php" method="GET">
			user: <input type=text name=user></input>
			pass: <input type=text name=pass></input>
			<input type=submit value=send></input>
		</form>
	</body>
</html>
