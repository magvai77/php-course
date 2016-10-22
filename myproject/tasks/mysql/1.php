<?php
$dbHostname = 'localhost';
$dbUserName = 'market';
$dbPasssword = 'market';
$database = 'market';

$mysqli = new mysqli($dbHostname, $dbUserName, $dbPasssword, $database);
if (mysqli_connect_errno($mysqli)) {
	echo "Failed to connect to MySQL" . mysqli_connect_error();
}

$sql = <<<SQL
	SELECT *
	FROM zergs
SQL;
$res = $mysqli->query($sql);
while ($row = $res->fetch_assoc()) {
	var_dump($row);
}