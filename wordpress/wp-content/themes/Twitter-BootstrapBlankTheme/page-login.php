 <h1>Login</h1>

<?php wp_login_form(); ?>



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

    <input type="hidden" name="redirect_to" value="<?php echo $_SERVER['REQUEST_URI']; ?>" />
    <p class="submit"><input type="submit" name="wp-submit" id="wp-submit" value="Register" />></p>
</form>


 <h1>Password recovery</h1>

<form name="lostpasswordform" action="<?php echo site_url('wp-login.php?action=lostpassword', 'login_post') ?>" method="post">
    <p>
        <label for="user_login">Username or E-mail:</label>
        <input type="text" name="user_login" id="user_login" value="">
    </p>

    <input type="hidden" name="redirect_to" value="/login/?action=forgot&success=1">
    <p class="submit"><input type="submit" name="wp-submit" id="wp-submit" value="Get New Password" /></p>
</form>




 <h1 class="entry-title">Reset password</h1>

<form name="resetpasswordform" action="<?php echo site_url('wp-login.php?action=resetpass', 'login_post') ?>" method="post">
    <p class="form-password">
        <label for="pass1">New Password</label>
        <input class="text-input" name="pass1" type="password" id="pass1">
    </p>
    <p class="form-password">
        <label for="pass2">Confirm Password</label>
        <input class="text-input" name="pass2" type="password" id="pass2">
    </p>

    <input type="hidden" name="redirect_to" value="/login/?action=resetpass&success=1">
    <p class="submit"><input type="submit" name="wp-submit" id="wp-submit" value="Get New Password" /></p>
</form>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$(".tab_content_login").hide();
		$("ul.tabs_login li:first").addClass("active_login").show();
		$(".tab_content_login:first").show();
		$("ul.tabs_login li").click(function() {
			$("ul.tabs_login li").removeClass("active_login");
			$(this).addClass("active_login");
			$(".tab_content_login").hide();
			var activeTab = $(this).find("a").attr("href");
			if ($.browser.msie) {$(activeTab).show();}
			else {$(activeTab).show();}
			return false;
		});
	});
</script>