<?php
$id = $_POST['id'];
//get jsonData from jsonfile
$jsonData = file_get_contents('menulist.json');
//convert into array from json
	$data_arr  = json_decode($jsonData);
	unset($data_arr[$id]);

	$jsonData=json_encode($data_arr, JSON_PRETTY_PRINT);
	file_put_contents('menulist.json', $jsonData);
?>