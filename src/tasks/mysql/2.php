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
		return $rows;
	} else {
		return NULL;
	}
}

function taskFunction(array $data)
{
	$config = new Config(__DIR__ . '/../../config/config.php');
	$dbParameters = $config->get('db');
	$dsn = $dbParameters['dsn'];
	$username = $dbParameters['username'];
	$password = $dbParameters['password'];
	$query = 'SELECT * FROM zergs';
	$dbConnection = dbConnect($dsn, $username, $password);
	return dbQuery($dbConnection, $query);
}



// $result = '';

// $description = '';
// $inputData = '';
