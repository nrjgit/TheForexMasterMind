<?php
require_once($_SERVER["DOCUMENT_ROOT"].'/wordpress/wp-load.php');
require_once(ABSPATH.'wp-admin/includes/user.php' );
require_once(ABSPATH.'wp-includes/pluggable.php' );

session_start();
include_once("config.php");
include_once("inc/twitteroauth.php");
include_once("includes/functions.php");




if(isset($_REQUEST['oauth_token']) && $_SESSION['token']  !== $_REQUEST['oauth_token']) 
{

	//If token is old, distroy session and redirect user to index.php
	session_destroy();
	//header('Location: http://theforexmastermind.com/wordpress');
	
}
//CallBack
elseif(isset($_REQUEST['oauth_token']) && $_SESSION['token'] == $_REQUEST['oauth_token']) 
{

	//Successful response returns oauth_token, oauth_token_secret, user_id, and screen_name
	$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $_SESSION['token'] , $_SESSION['token_secret']);
	$access_token = $connection->getAccessToken($_REQUEST['oauth_verifier']);
	
	

	if($connection->http_code == '200')
	{
		//Redirect user to twitter
		$_SESSION['status'] = 'verified';
		$_SESSION['request_vars'] = $access_token;		
				
		
		//Insert user into the database
		$user_info = $connection->get('account/verify_credentials'); 

	        $userID= $user_info->ID;		
	        $username= $user_info->name;
		$email = 'test@mail.com';
				
		$the_user = get_user_by('username', $username);
	
$theuser = $wpdb->get_row( $wpdb->prepare( "SELECT * FROM $wpdb->users WHERE display_name = '".$username."'" ) );
$exist_username =$theuser->display_name; 

		if(!$exist_username)
		{
		
		 $user_id = wp_create_user($username,$random_password, $email);
		
		if($user_id)
    		{
    		update_user_option($user_id, 'default_password_nag', true, true);
    
		}
		
		
		if(array_key_exists('$user_id', $user_id))
   		{
    		echo 'array';
      		wp_cache_delete ($user_id, 'users');
      		wp_cache_delete ($user_login, 'userlogins');
   		}
    do_action ('user_register', $user_id);
    $user_data = get_userdata ($user_id);
    
 if ($user_data !== false) {

         wp_clear_auth_cookie();
         wp_set_auth_cookie ($user_data->ID, true);
         do_action ('wp_login', $user_data->user_login, $user_data);
                 
   wp_redirect (home_url());
  
         exit();
       }
    
   }
				
	}
	else{
		die("error, try again later!");
	}
		
}else{


echo '<script language="javascript">alert("2");</script>';


	if(isset($_GET["denied"]))
	{
		header('Location: http://theforexmastermind.com/wordpress');
		die();
	}
	

	//Fresh authentication
	$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET);
	$request_token = $connection->getRequestToken(OAUTH_CALLBACK);
	
	
	
	//Received token info from twitter
	$_SESSION['token'] 			= $request_token['oauth_token'];
	$_SESSION['token_secret'] 	= $request_token['oauth_token_secret'];
	
	

	//Any value other than 200 is failure, so continue only if http code is 200
	if($connection->http_code == '200')
	{
	
    
    //redirect user to twitter
		$twitter_url = $connection->getAuthorizeURL($request_token['oauth_token']);
		
		header('Location: ' . $twitter_url); 
	
	}else{
		die("error connecting to twitter! try again later!");
	}
}


