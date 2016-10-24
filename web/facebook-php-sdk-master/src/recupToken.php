<?php
session_start();
include('facebook.php');

$app_id='672757779502648';
$app_secret='502c5f639dac0c457c94acccd1308855';
$facebook = new Facebook(array(
  'appId' => $app_id,
  'secret' => $app_secret
));

$user=$facebook->getUser();

if ($user==0) {
	echo '<a href="'.$facebook->getLoginUrl(array(
	'scope' =>'publish_stream,manage_pages'
)).'">connect</a>';
} else {
	$result = $facebook->api('/me/accounts');
	echo '<pre>';
	print_r($result);
	echo '</pre>';
}

?>