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

function dbQuery($dbConnection, $query)
{
	if ($dbConnection or $query != NULL) {
		$statement = $dbConnection->query($query);
		$statement->setFetchMode(PDO::FETCH_ASSOC);
		$rows = $statement->fetchALL();
		var_dump($rows);
	} else {
		return [];
	}
}

$dsn = 'mysql:host=localhost;dbname=market';
$username = 'market';
$password = 'market';
$query = 'SELECT * FROM zergs';
$dbConnection = dbConnect($dsn, $username, $password);
dbQuery($dbConnection, $query);


$result = '';

$description = '';
$inputData = '';