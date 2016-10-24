<?php
include('facebook.php');

$app_id='672757779502648';
$app_secret='502c5f639dac0c457c94acccd1308855';
$facebook = new Facebook(array(
  'appId' => $app_id,
  'secret' => $app_secret
));
$pageID='1641745419387394';
$token='CAAJj3qB3ljgBADpZACATmbxWjYHZC738jzffvFke03bH8oCFRBXhbIZBuRui4lU8t4DZAZAZC5YDUfcbuWQnKgQA4jt6ZCoHS73Dxoht7WQGGuZCpdC3fY2VYkCRYIJ3lObcDBckqCVSPV9KQE905MPuD5y7Stwo4OHUGVpmagFC6gm5zgpc9iwGr2P3uPRizVjZCDXPQ86i8jAZDZD';

$attachment = array(
	'access_token' => $token,
	'message' => 'Premier message auto',
	'name' => 'Le pret à surfer',
	'caption' => 'Legend sous le tire',
	'link' => 'http://www.le-pret-a-surfer.com/',
	'description' => 'Description du lien',
	'picture' => 'https://www.google.fr/images/srpr/logo11w.png'
);
$deb = $facebook->api('/'.$pageID.'/feed/', 'post', $attachment);