 <?php
 
 global $current_user;
get_currentuserinfo();

require_once( ABSPATH . WPINC . '/registration.php' );

if ( !empty($_POST) && !empty( $_POST['action'] ) && $_POST['action'] == 'update-user' ) {

    /* Update user password */
    if ( !empty($_POST['current_pass']) && !empty($_POST['pass1'] ) && !empty( $_POST['pass2'] ) ) {

        if ( !wp_check_password( $_POST['current_pass'], $current_user->user_pass, $current_user->ID) ) {
            $error = 'Your current password does not match. Please retry.';
        } elseif ( $_POST['pass1'] != $_POST['pass2'] ) {
            $error = 'The passwords do not match. Please retry.';
        } elseif ( strlen($_POST['pass1']) < 4 ) {
            $error = 'Password too short';
        } elseif ( false !== strpos( wp_unslash($_POST['pass1']), "" ) ) {
            $error = 'Password may not contain the character "" (backslash).';
        } else {
            $error = wp_update_user( array( 'ID' => $current_user->ID, 'user_pass' => esc_attr( $_POST['pass1'] ) ) );

            if ( !is_int($error) ) {
                $error = 'An error occurred while updating your profile. Please retry.';
            } else {
                $error = false;
            }
        }

        if ( empty($error) ) {
            do_action('edit_user_profile_update', $current_user->ID);
            wp_redirect( site_url('/user/') . '?success=1' );
            exit;
        }
    }
}
 
 ?> 
  
  
  <h1>Registration</h1>

<form name="registerform" action="<?php echo site_url('wp-login.php?action=register', 'login_post') ?>" method="post">
    <p>
        <label for="user_login">Username</label>
        <input type="text" name="user_login" value="">
    </p>
    <p>
        <label for="user_email">E-mail</label>
        <input type="text" name="user_email" id="user_email" value="">
    </p>
    <p style="display:none">
        <label for="confirm_email">Please leave this field empty</label>
        <input type="text" name="confirm_email" id="confirm_email" value="">
    </p>

    <p id="reg_passmail">A password will be e-mailed to you.</p>

    <input type="hidden" name="redirect_to" value="/login/?action=register&success=1" />
    <p class="submit"><input type="submit" name="wp-submit" id="wp-submit" value="Register" />></p>
</form>