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
	if ($dbConnection and $query != NULL) {
		$statement = $dbConnection->query($query);
		$statement->setFetchMode(PDO::FETCH_ASSOC);
		$rows = $statement->fetchALL();
	} else {
		return NULL;
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
