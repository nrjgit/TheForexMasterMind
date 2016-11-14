<?php


require_once($_SERVER["DOCUMENT_ROOT"].'/wordpress/wp-load.php');


if(isset($_POST['username'])&&isset($_POST['password'])) {

      $username= $_POST["username"];
      $password= $_POST["password"];
      
      

      
$theuser = $wpdb->get_row( $wpdb->prepare( "SELECT * FROM $wpdb->users WHERE display_name = '".$username."' and user_pass='".$password."' " ) );

$user_id= $theuser->ID;  



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
 
 
 //registration

 if(isset($_POST['reg_name'])&&isset($_POST['reg_pass'])&&isset($_POST['reg_email'])) {

      $username= $_POST["reg_name"];
      $password= $_POST["reg_pass"];
      $email= $_POST["reg_email"];

$theuser = $wpdb->get_row( $wpdb->prepare( "SELECT * FROM $wpdb->users WHERE user_email= '".$email."' " ) );

$userid= $theuser->ID;

  if(!$userid)
  {
   $user_id = wp_create_user($username,$password, $email);
   

 
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
             
         exit();
       }
   
   
    die();
  }


 }