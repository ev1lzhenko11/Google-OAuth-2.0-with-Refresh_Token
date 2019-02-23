<?
require_once 'GoogleAPI/vendor/autoload.php';
session_start();
$OAUTH2_CLIENT_ID = 'CLIENT_ID';
$OAUTH2_CLIENT_SECRET = 'CLIENT_SECRET';
$OAUTH2_CLIENT_REFRESH_TOKEN = 'CLIENT_REFRESH_TOKEN';

$client = new Google_Client();
$client->setClientId($OAUTH2_CLIENT_ID);
$client->setClientSecret($OAUTH2_CLIENT_SECRET);
if($client->fetchAccessTokenWithRefreshToken($OAUTH2_CLIENT_REFRESH_TOKEN)){
	if($_SESSION["GOOGLE_TOKEN"] = $client->getAccessToken()){
		/*Your code*/
	}
}
?>