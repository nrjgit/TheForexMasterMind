<?php

require_once($_SERVER["DOCUMENT_ROOT"].'/wordpress/wp-load.php');
require_once(ABSPATH.'wp-admin/includes/user.php' );

 
$id=$_REQUEST["id"];
$username=$_REQUEST["name"];
$email=$_REQUEST["email"];


$the_user = get_user_by('email', $email);
$deletd_user=wp_delete_user($the_user->ID);

$random_password = wp_generate_password( 12, false );

       $user_id = wp_create_user($username,$random_password, $email);
       
    if(!$user_id):
      echo 'Registration failed';
    else:
 
   update_user_option($user_id, 'default_password_nag', true, true);
    
   if(array_key_exists('$user_id', $user_id))
   {
    echo 'array';
      wp_cache_delete ($user_id, 'users');
      wp_cache_delete ($user_login, 'userlogins');
   }
  
      do_action ('user_register', $user_id);
      $user_data = get_userdata ($user_id);
      if ($user_data !== false) {
    echo 'user_data';
         wp_clear_auth_cookie();
         wp_set_auth_cookie ($user_data->ID, true);
         do_action ('wp_login', $user_data->user_login, $user_data);
         // Redirect user.
   wp_redirect (home_url());
  
         exit();
       }
    endif;