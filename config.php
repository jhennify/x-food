<?php
//configurando

require_once 'vendor/autoload.php';

$google_client = new Google_Client();

$google_client->setClientId('352352155950-rig1rm15bf1e39shvkvb4okkukelh59d.apps.googleusercontent.com');

$google_client->setClientSecret('s_SGOmMnSD_P-2n5-qpb00Tt');

$google_client->setRedirectUri('index.html');

$google_client->addScope('email');
$google_client->addScope('profile');

session_start();

?>