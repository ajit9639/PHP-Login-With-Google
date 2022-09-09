<?php
// Database configuration
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'login_with_google');
define('DB_USER_TBL', 'users');

// Google API configuration
define('GOOGLE_CLIENT_ID', '476051899607-u15aomq2qsiadu6i842ejsjng2ln50au.apps.googleusercontent.com');
define('GOOGLE_CLIENT_SECRET', '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');
define('GOOGLE_REDIRECT_URL', 'http://localhost/PHP-Login-With-Google/index.php');

// Start session
if (!session_id()) {
    session_start();
}

// Include Google API client library
require_once 'google-api-php-client/Google_Client.php';
require_once 'google-api-php-client/contrib/Google_Oauth2Service.php';

// Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to www.carry0987.com');
$gClient->setClientId('476051899607-u15aomq2qsiadu6i842ejsjng2ln50au.apps.googleusercontent.com');
$gClient->setClientSecret('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');
$gClient->setRedirectUri('http://localhost/PHP-Login-With-Google/index.php');

$google_oauthV2 = new Google_Oauth2Service($gClient);