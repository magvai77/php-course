<?php
function dbConnect($dsn, $username, $password)
{
	try {
		$db = new PDO($dsn, $username, $password);
		return $db;
	} catch (PDOException $exception) {
//		echo "Error! Message: " . $exception->getMessage() . " Code: " . $exception->getCode();
		return NULL;
	}
}

function dbInsert($dbConnection, $table, $array)
{
	if ($dbConnection and $array != NULL) {
		$statement = $dbConnection->prepare("INSERT INTO $table VALUES(:unit, :description, :price)");
		$statement->execute($array);
		$count = $statement->rowCount(); 
		return ($count != 0) ? 1 : 0;
	} else {
		return 0;
	}
}

$dsn = 'mysql:host=localhost;dbname=market';
$username = 'market';
$password = 'market';
$dbConnection = dbConnect($dsn, $username, $password);
$table = 'zergs(unit,description,price)';
$array = ["unit" => "Spine crawler",
		  "description" => "The Spine crawler is a mobile zerg defensive structure. It replaces the sunken colony as the zerg's primary anti-ground defense structure in StarCraft II.",
		  "price" => "100"
		 ];

$result = dbInsert($dbConnection, $table, $array);


$description = 'Создать функцию, которая будет создавать запись в БД, используя PDO Mysql.';
$inputData = '';