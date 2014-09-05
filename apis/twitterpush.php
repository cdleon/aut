<?php
/** 
** ===================================
** POST TO TWITTER THROUGH OAUTH API.
** Include twitteroauth.php library.
** ===================================
**/
include ('twitterSDK/twitteroauth.php');

function twitterPush($msj,$url=0){
	/** 
	** =========================
	** Define Oauth Credentials.
	** =========================
	**/
	define(CONSUMER_KEY, 'SyqbvZoUM37ejSrBIIWpxA');
	define(CONSUMER_SECRET, 'kJno2XAo3s4rEkf6TBnXn26EQE4h7npEvnSOdrOw');
	define(OAUTH_TOKEN, '2236519183-yexVk0sKrCB3UhwYRwpOtdyXoo8Rgjo5gakxaE7');
	define(OAUTH_SECRET, 'CVV4jxWF191MhGX3KaRSWx1gTQgeCVKHxClLAQSNlqsAG');
	/** 
	** =========================
	** Check for tweet length.
	** =========================
	**/
	if(strlen($msj)>117){
		$msj=substr($msj,0,117);
	}
	/** 
	** =========================
	** Add Url, if it's set.
	** =========================
	**/
	if($url){
		$tweet = $msj.' '.$url;
	}else{
		$tweet = $msj;
	}
	/** 
	** =========================
	** Post tweet.
	** =========================
	**/
	if ($connection = new TwitterOAuth(CONSUMER_KEY,CONSUMER_SECRET,OAUTH_TOKEN,OAUTH_SECRET)) {
		$rtrn = 'Twitter connection successfull.<br />';
	}else{
		$rtrn = 'Could not connect to twitter.<br />';
	}
	if($account = $connection->get('account/verify_credentials')){
		$rtrn = 'Account get successful.<br />';
	}else{
		$rtrn = 'Could not get twitter account credentials.<br />';
	}
	if($status = $connection->post('statuses/update', array('status' => $tweet))){
		$rtrn = 'Twitter posted.<br />';
	}else{
		$rtrn = 'An error ocurred when posting tweet.<br />';
	}
	return $rtrn;
}
?>