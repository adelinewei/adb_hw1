<?php
$dbhost = '127.0.0.1';
$dbuser = 'root';
$dbpass = '';
$dbname = 'adbhw1';

/* === Database Connection === */
$db = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if($db->connect_errno) {
	echo "Connection Failed: " . $db->connect_errno;
	exit();
}

$db->query("SET NAMES 'utf8'");

/* === Functions ===*/

function getCountryByPos($pos){
	global $db;
	$result = $db->query("SELECT cid, ISO3, Name FROM country WHERE ST_CONTAINS (g, geomfromtext('POINT(".$pos.")'))");
	if($result->num_rows==0)
		$data = NULL;
	else
		$data = $result->fetch_array();
	$result->close();
	return $data;
}

function getAppByCountry($country){
	global $db;
	$result = $db->query("SELECT * FROM app WHERE country = '".$country."'");
	$i=0;
	while($row = $result->fetch_assoc()){
		$data[$i++] = $row;
	}
	$result->close();
	return $data;
}