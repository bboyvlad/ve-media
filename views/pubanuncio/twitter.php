<?php

	require('../../Library/tw/twitteroauth.php'); // incluimos la librería para comunicarnos con twitter
	define('_CONSUMER_KEY','COArtgZvUscqtGwhDm9LE7luK'); // consumer key
	define('_CONSUMER_SECRET','Q1ZEk3xhbbmfAfXIGurg2nakxXWUskPKomLTSxxWZWq8kYxq6R'); // consumer secret
	define('_OAUTH_TOKEN','2551194246-ZmgvYBKT6Lp8n9SG1Yy9fjSsdZ4QG7zRvsXoVNp'); // access token
	define('_OAUTH_TOKEN_SECRET','zdK2vP9faIDwygxpHhCcSmdr7xRqrYyxh77nedrJEP9Fh'); // access token secret

	function getConnectionWithAccessToken() {
    $connection = new TwitterOAuth(_CONSUMER_KEY, _CONSUMER_SECRET,_OAUTH_TOKEN, _OAUTH_TOKEN_SECRET);
    return $connection;
	}

	// Ejecutamos la conexión
	$connection = getConnectionWithAccessToken();
	
?>