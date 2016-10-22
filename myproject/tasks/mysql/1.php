<?php
$dbHostname = 'localhost';
$dbUsername = 'market';
$dbPasssword = 'market';
$database = 'market';

$mysqli = new mysqli($dbHostname, $dbUsername, $dbPasssword, $database);
if (mysqli_connect_errno($mysqli)) {
	echo "Failed to connect to MySQL" . mysqli_connect_error();
}

$sql = <<<SQL
	SELECT *
	FROM zergs
SQL;
$res = $mysqli->query($sql);
$rows = [];
while ($row = $res->fetch_assoc()) {
	$rows[] = var_export($row, true);
}
$result = implode('<br>', $rows);

$description = '';
$inputData = '';
