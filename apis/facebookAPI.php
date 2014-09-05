<?php
/**
** =========================
** POST TO FACEBOOK VIA API.
** Include facebookSDK/facebook.php
** =========================
**/
include('facebookSDK/facebook.php');
/*
$appId = '1387055384883153';
$appSecret = '8e82f67204e18e7a1e26461b21ce2776';
$returnurl = 'http://venezuelahoy.io';
$permissions = 'manage_pages, publish_stream';

$facebook = new facebook(array('appId'=>$appId,'secret'=>$appSecret,'fileUpload'=>true,'cookie'=>true));
$fbuser = $facebook->getUser();
*/
function facebookImagePush($foto,$msg=0,$rtrn_url){
	/** Define Credentials. **/
	define(FB_APP_ID, '1387055384883153');
	define(FB_APP_SECRET, '8e82f67204e18e7a1e26461b21ce2776');
	define(FB_RTRN_URL,  'http://venezuelahoy.io');
	$fb_permissions_array = array('manage_pages','publish_stream');
	define(FB_PERMISSIONS, serialize($fb_permissions_array)); //to use permissions $permissions = unserialize(FB_PERMISSIONS);
	define(FB_PAGE_ID, '655703067825605');

	/** Connect to facebook. **/
	$facebook = new facebook(array('appId'=>FB_APP_ID,'secret'=>FB_APP_SECRET,'fileUpload'=>true,'cookie'=>true));
	$fbuser = $facebook->getUser();

	/** Check for user and post to facebook. **/
	if ($fbuser) {
		try {
	    	$page_info = $facebook->api('/'.FB_PAGE_ID.'?fields=access_token');
	    	if( !empty($page_info['access_token']) ) {
	        	$args = array(
		        	    'access_token'  => $page_info['access_token'],
		            	'source' => '@'.$foto,
		            	'message'       => $msg);
		        $post_id = $facebook->api('/'.FB_PAGE_ID.'/photos','post',$args);
		        header('Location: '.$rtrn_url); //redirect to page where you watn user to land after post.
		    } else {
		        $permissions = $facebook->api("/me/permissions");
		        if( !array_key_exists('publish_stream', $permissions['data'][0]) ||
		            !array_key_exists('manage_pages', $permissions['data'][0])) {
		            // We don't have one of the permissions
		            // Alert the admin or ask for the permission!
		            header( "Location: " . $facebook->getLoginUrl(array("scope" => "publish_stream, manage_pages")) );
		        }
		    }
		} catch (FacebookApiException $e) {
		    error_log($e);
		    $fbuser = null;
		    echo '<div class="alert alert-error">Error:'.$e.'</div>';
			echo $post_error = '<div class="alert alert-error"><a href="../agregauntitular.php">No se puedo montar en facebook, haz click aqui para agregar otro titular.</a></div>';

		}
	}
	// Login or logout url will be needed depending on current user state.
	if ($fbuser) {
		$logoutUrl = $facebook->getLogoutUrl();
	} else {
		$loginUrl = $facebook->getLoginUrl(array('scope'=>'manage_pages,publish_stream'));
		echo $confirmPost_prompt = '<div style="background-color:white;color:blue;padding:15px;margin:auto;font-size:16px;"><a href="'.$loginUrl.'">Haz click aca para conectar con Facebook y postear la noticia en facebook/venezuelahoy.io</a></div>';
	}
}
?>