<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID | Copiar "ID DE CLIENTE"
$google_client->setClientId('60721513628-6rpd5mc0moqu5n912v5070pnqd5h7fq2.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('dhO2-BPKnC1Nirwt2Eh4ccDP');

//Set the OAuth 2.0 Redirect URI | URL AUTORIZADO
$google_client->setRedirectUri('http://localhost/API_LOGIN_GOOGLE/index.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?>