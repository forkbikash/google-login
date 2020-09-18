<?php
if(!defined('config')){
    header("HTTP/1.1 403 Forbidden");
    exit;
}
//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId(/*******Client ID*******/);

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret(/*******Client secret*******/);

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/googlelogin/index.php');/******your redirect uri********/

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');
?>