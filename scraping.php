<?php 

	// function getStringBetween($teks, $sebelum, $sesudah)
	// {
	// 	$teks = ' ' . $teks;
	// 	$ini = strpos($teks, $sebelum);
	// 	if($ini == 0) return '';
	// 	$ini += strlen($sebelum);
	// 	$panjang = strpos($teks, $sesudah, $ini) - $ini;
	// 	return substr($teks, $ini, $panjang);
	// }
$post = [
    'username' => 'user1',
    'password' => 'passuser1',
    'gender'   => 1,
];

$ch = curl_init('http://www.domain.com');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

// execute!
$response = curl_exec($ch);

// close the connection, release resources used
curl_close($ch);

// do anything you want with your response
var_dump($response);

 ?>