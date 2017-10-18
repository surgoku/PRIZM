<?php
    session_start();
$_SESSION["uid"]=24;

// Include the autoloader provided in the SDK
require_once __DIR__ . './php-graph-sdk-5.5/src/Facebook/autoload.php';

// Include required libraries
use Facebook\Facebook;
use Facebook\Exceptions\FacebookResponseException;
use Facebook\Exceptions\FacebookSDKException;

/*
 * Configuration and setup Facebook SDK
 */
$appId         = '1353942184671383'; //Facebook App ID
$appSecret     = '8f5b40d15447f3657f0245a71d758a8d'; //Facebook App Secret
$redirectURL   = 'http://www.arunram.in/prizm'; //Callback URL
$fbPermissions = array('email');  //Optional permissions

$fb = new Facebook (array(
    'app_id' => $appId,
    'app_secret' => $appSecret,
    'default_graph_version' => 'v2.2',
));

// Get redirect login helper
$helper = $fb->getRedirectLoginHelper();

// Try to get access token
try {
    /*if(isset($_SESSION['facebook_access_token'])){
        $accessToken = $helper->getAccessToken($this->params['login_done']);
    }else{
          $accessToken = $helper->getAccessToken();
    }*/
	
} catch(FacebookResponseException $e) {
     echo 'Graph returned an error: ' . $e->getMessage();
      exit;
} catch(FacebookSDKException $e) {
    echo 'Facebook SDK returned an error: ' . $e->getMessage();
      exit;
}

?>
