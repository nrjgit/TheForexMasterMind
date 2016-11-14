<?php


session_start();
/**
 * Default Page Header
 *
 * @package WP-Bootstrap
 * @subpackage WP-Bootstrap
 */

?>


<!DOCTYPE html>
<html <?php language_attributes(); ?> xmlns="http://www.facebook.com/2008/fbml">
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri();?>/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="<?php echo get_stylesheet_directory_uri();?>/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
          href="<?php echo get_stylesheet_directory_uri();?>/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
          href="<?php echo get_stylesheet_directory_uri();?>/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed"
          href="<?php echo get_stylesheet_directory_uri();?>/assets/ico/apple-touch-icon-57-precomposed.png">


<?php
function my_styles_method() {
	
	wp_enqueue_style('custom-style',get_template_directory_uri());
        
        $custom_css = "			

	html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video {
    margin: 0;
    padding: 0;
    border: 0;
    font-size: 100%;
    font: inherit;
    vertical-align: baseline;
}
				
				
body {
    min-height: 100%;
    min-width: 320px;
    font-family: 'Open Sans',sans-serif;
    font-size: 16px;
    background: #fff;
    color: #000;
    position: relative;
	  
}


html {
    height: 100%;
    font-size: 10px;
    -webkit-tap-highlight-color: transparent;

}		


.webinars.one-liner .label, .breaking-news.one-liner .label {
    color: #00b098!important;
    font-weight: 600;
    padding: 0;
    background-color: #fff;
}


 .modal-backdrop.fade.in {
    opacity: 0.005;
        width: 0%;

}



    
    
    .modal-dialog
    {
        margin: 0px!important;
    }	
    
    
    
    #myModal 
{
width: 60%;
    position: fixed;
    left: 0px;
    right: 0px;
    top: 0px;
    bottom: 0px;
    margin: auto;
    height: 596px;

}
	

   #modal-dialog
{
width: 100%;
    position: relative;
    left: 0px;
    right: 0px;
    top: 0px;
    bottom: 0px;
    margin: auto;
    height: 596px;

}

				
 .signup_container label {
    display: block;
    margin-bottom: 5px;
}


				";
        wp_add_inline_style( 'custom-style', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'my_styles_method' );
?>


<header class="tesrr">		 
<div class="header-top" style="height:34px;">
		<div class="header-inner container">
      <div class="row">
          <!-- Webinars -->
          <div class="col-xs-12 col-sm-4">
           <form role="search" method="get" id="searchform" action="../external.html?link=http://atozforex.com/">       
  <div class="searchsubmit">
    <input type="text" value="" name="s" id="searchtext" placeholder="Search from AtoZ...">
    <button type="submit" id="searchsubmit">
      <i class="glyphicon glyphicon-search" aria-hidden="true"></i>
    </button>
  </div>
</form>
          </div>
          <div class="col-xs-12 col-sm-4">
            <!-- Breaking News -->
            <div class="breaking-news one-liner">
            <!--  <span class="label" style="margin-left:1em;">Breaking news:</span>
              <div class="list">
                <a href="news/5-australian-dollar-note/index.html">What is so good about new 5 Australian Dollar note?</a>                
              </div>-->
            </div>
          </div>
		  
		  
		   <div class="col-xs-12 col-sm-4" style="top:6px;">
		   <div class="row" style="margin-left:2px;">
		   
		    <div class="col-sm-4"><a href="http://theforexmastermind.com/wordpress/"><span style="color:white;background : #181a1d;padding:2px;margin-top:10px;font-size: 16px;">Contact us</span></a></div>
		    
      <div class="col-sm-4"><a href="http://theforexmastermind.com/wordpress/"><span style="color:white;background:#181a1d;padding:2px;margin-top:10px;font-size: 16px;">Write a Story</span></a></div>
	 
	  <div class="col-sm-4">
	  
	  <ul class="header__soc">
  <li><a target="_blank" href="https://www.facebook.com/atozmarkets"><i class="icon icon-facebook-h"></i></a></li>
  <li><a target="_blank" href="https://twitter.com/AtoZForex"><i class="icon icon-twitter-h"></i></a></li>
  <li><a target="_blank" href="https://plus.google.com/+Atozforex/posts"><i class="icon icon-google-h"></i></a></li>
  <li><a target="_blank" href="https://www.linkedin.com/company/atoz-forex"><i class="icon icon-instagram-h"></i></a></li>
</ul>

</div>
		   </div>

<div>  </div>

          </div>
		  
		 

        </div>
	 </div>

	     </div>
	
	
	
  <div class="header-middle">
    <div class="header-inner container">
      <div class="header-right on-middle">
       
<div class="user-links">
			  
			  						  <?php if (is_user_logged_in() && isset($_SESSION['status']) && $_SESSION['status'] == 'verified') { ?>
    	<a href="<?php echo wp_logout_url( home_url() ); ?>">Logout</a>
<?php } else { 

?>            	
        <a class="fancybox-popup" class="login_button" id="show_login" href="#loginForm">Login</a>
        <a class="fancybox-popup" class="login_button" id="show_signup" href="#SignUpForm">register</a>
		
<?php } ?>





  </div>
  

<!-- Language switcher -->

<!-- Social links -->




  </div>
  
    </div>
  </div>	
	
		<div class="header-bottom" >
		<div class="header-inner container">
      <div class="row">
        <div class="col-md-12">
          <!-- Logo -->
          <div class="header-logo">
          <!--  ../wordpress/wp-content/themes/Twitter-BootstrapBlankTheme/assets/images/logo.png -->
           <!-- <a href="index.html"><img src="" alt="InvesterZ"></a>-->
          </div>
      
          <!-- Menu -->
          <div class="menu-header">
		  
		     <?php wp_head(); ?>
			 
			 <body <?php body_class(); ?>  data-spy="scroll" data-target=".bs-docs-sidebar" data-offset="10">
    	
	<div id="site-header-menu" class="site-header-menu">
						<?php if ( has_nav_menu( 'primary' ) ) : ?>
							<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'primary',
										'menu_class'     => 'primary-menu',
											'walker' => new CSS_Menu_Walker()
									 ) );
								?>
							</nav><!-- .main-navigation -->
						<?php endif; ?>


					</div><!-- .site-header-menu -->
					
					
    <!-- End Header. Begin Template Content -->
	</body>
			  
	</div>


          <div class="header-right on-bottom" style="float:none">

              <div class="user-links">

  <?php if ((is_user_logged_in())) { ?>
               	<a href="<?php echo wp_logout_url( home_url() ); ?>">Logout</a>
    	
    	
<?php } else { 


?>            	
       
<!-- signin Popup start -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin:auto;height:39em;">
   
            <div class="col-xs-12 clearfix signIn_wrapper">
          <div class="col-xs-12 signInUp_header">
            <div class="pull-left logoDiv"> <img src="../wordpress/wp-content/themes/Twitter-BootstrapBlankTheme/assets/images/logo.png">
            </div>
            <div class="pull-right signInUp_btn">
                <a href="javascript:void(0);" class="btn btn-default active" id="signIn_btn"> Sign in</a>
                <a href="javascript:void(0);" class="btn btn-default" id="signUp_btn"> Sign up</a>
            </div>
        </div>
		
		<div id="signindiv" >

        <div class=" col-xs-6 signInUp_box">
            <div class=" col-xs-12 signIn_container">
            
            <!-- SignIn Form -->

            <form id="login" class="ajax-auth" action="" method="post" style="display: block;">
    
    <label for="username"  style="color: black;" >Username</label>
    <input id="username" type="text" class="required" name="username">
    <label for="password"  style="color: black;" >Password</label>
    <input id="password" type="password" class="required" name="password">
     <div class="form-group signIn_captchaBox" >
   <div class="g-recaptcha" data-sitekey="6LffGgoUAAAAAACC0Z8ShRfh0Ewy-8wBkc4YM14V"></div>
             </div>
                          
             
    <a class="text-link" href="http://theforexmastermind.com/wordpress/my-account/lost-password/">Lost password?</a>
 <input id="btnlogin" class="submit_button" type="submit" value="LOGIN">
	 
</form>


            <!-- Sign Form Ends -->
			
			
			
           
            </div>

 <!-- start of forgot password -->
            <div class="col-xs-12 forgotPassword_containerBox">
               <form class="col-xs-12 forgotPassword_emailDiv ng-pristine ng-valid ng-valid-email" novalidate="">
                   <div class="form-group col-xs-12 forgotPassword_emailDivInput">
                     <input type="email" class="form-control ng-pristine ng-untouched ng-valid ng-valid-email" placeholder="Email Address" name="emailAddress" ng-model="forgotPasswordEmailId" ng-focus="requestingPasswordChange()">
                     <p ng-show="wrongEmail" class="ng-hide"> <i class="material-icons">warning</i> <span ng-bind="errorMessage" class="ng-binding">Wrong Email Address</span></p>
                   </div>
                   <!-- ngIf: forgotPasswordEmailId && checkEmail -->
                 <div class="col-xs-12 forgotPasswordBtn" style="margin: auto;float: none;">                      
                      <a href="javascript:void(0)" class="forgotPasswordBack"> <i class="material-icons">keyboard_arrow_left</i> </a>
                      <a href="javascript:void(0);" ng-click="requestPasswordChange(forgotPasswordEmailId)"> Submit </a>
                 </div>                   
               </form>
           </div>
             <!-- end of forgot password -->
             <!-- start of password change -->
             <div class=" col-xs-12 passwordChange_container" style="display: none;">
               <form class="col-xs-12 passwordChange_pcDiv ng-pristine ng-valid" novalidate="" style="display: block;">
                   <div class="form-group col-xs-12 " style="padding: 0px 0px; padding-right:3px;margin-bottom: 35px;">
                     <input type="text" class="form-control" placeholder="New Password" name="newPassword">
                     <input type="text" class="form-control" placeholder="Confirm Password" name="confirmPassword">
                     <p> <i class="material-icons">warning</i> <span>Password not match</span></p>
                 </div>
                   <p class="text-center">Password Changed Successfully</p>
                   <a href="javascript:void(0);"> Change Password </a>
                   
               </form>
           </div>

             <!-- end of password change -->
             

        </div>
        
            <div class="col-xs-1 signin_divider"> 
               <img src="//cdn.wittyfeed.com/assets_main/images/signin_divider.png">
            </div>
    
    <!-- Social Media Login -->
    
     <div class="col-xs-5 text-center signin_socialBtn">
                <p> Sign in with your <span> social profile </span> </p>

                <form action="account/login" method="post" class="ng-pristine ng-valid">

                <input type="hidden" name="provider" id="providerInput" value="internal">
                     <input type="hidden" id="e_id" name="e_id" ng-value="storyRootId">
                     <!-- <input type="hidden" name="u_id" ng-value="userRootId"> -->
                     <input type="hidden" id="r_url" name="r_url" ng-value="rootUrl" value="https://www.wittyfeed.com/story">
                     <input type="hidden" id="u_action" name="u_action">
                      
                     <div class="signin_facebookBtn">
                     
                         <div id="login-button">
    <fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
    </fb:login-button>  
       </div>
                     </div>

<!--  Twitter Login -->
                     
                     <div class="col-xs-12 signin_twitterBtn">
         
	<?php
	 if(!(isset($_SESSION['status']) && $_SESSION['status'] == 'verified') ) 
	{
		//Display login button
		echo '<a href="../wordpress/wp-content/themes/Twitter-BootstrapBlankTheme/process.php"><img src="http://www.dld-conference.com/assets/sign_up_with_twitter-d9605a61d809d3bd4b295a46dd6ee1e5.png" width="151" height="24" border="0" style="zoom:3;"/></a>';
	}
?> 
                     </div>

<!--  Twitter Login ends-->


                    
                </form>
				
			
			
			
            </div>
            
            <!--  Social Login Ends  -->
			
		</div>	
		
		
		<div id="signupdiv">

		
		 <div class=" col-xs-12 signInUp_box">
            <div class=" col-sm-6 col-md-offset-3  signup_container">
           
<!-- Sign up Form  Start-->

            <form id="signup" class="ajax-auth" action="" method="post" style="display: block;">
<h1>Registration</h1>
					<label  style="color: black;"> Name</label>
					<input id="reg_name"class="required"  type="text" />
					<br />

					<label  style="color: black;">Email Address</label>
					<input id="reg_email" class="required" type="email" />
					<br />

					<label  style="color: black;">  Password</label>
					<input id="reg_pass" class="required" type="password" />
					<br /><br />

				<div class="action_btns">
						<div class="one_half last"><a href="#" class="register_button" style="font-size: 13px;
						float:right;
    color: #FFF;
    border: 1px solid #b34336;
    background-color: #e25c4c;
    border-radius: 3px;
    text-shadow: 0 1px 0 #ba3f31;">Register</a></div>
					</div>
					

  
  				</form>
						
			<!-- Sign up Form  Ends -->

					</div>
    
</div>
		</div>
    
</div>

	
<a class="close" href="">(close)</a>  

			

</div>


<!--  Popup Ends-->


<button id="myBtn" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">SignIn</button>




<?php } ?>




  </div>
 

</div>



<!-- Language switcher -->


<div class="clearfix"></div>          
</div>


</div>


        </div>
      </div>
	  

    </div>
    
	
	
   </header>

    
  <!---   FB Login Script  ---->
  
  
  <script src="https://connect.facebook.net/en_US/all.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<script>


   function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }
  
	    function statusChangeCallback(response) {
    if (response.status === 'connected') {

      testAPI();
    } else if (response.status === 'not_authorized') {

      document.getElementById('status').innerHTML = 'Please log ' +
        'into your facebook app.';
    } else {

    }
  }


  window.fbAsyncInit = function() {
  FB.init({
    appId      : '1045152205601285',
    cookie     : true,  // enable cookies to allow the server to access 
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.5' // use graph api version 2.5
  });

  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  
  function testAPI() {
    
     FB.api('/me', { locale: 'en_US', fields: 'id ,name, email' },
  function(response) {
	
	 $.post("wp-content/themes/Twitter-BootstrapBlankTheme/abc.php",
        {
          id: response.id,
          name: response.name,
		  email:response.email
        },
        function(data){
        
		  document.getElementById('login-button').style.display = 'none';
	  
			  location.reload(); 
		
        });
		
      
	
		
    });
  }

</script>


<!---   FB Login Script  ---->

   
</head>




<!-- Google Tag Manager -->
<noscript>&lt;iframe src="//www.googletagmanager.com/ns.html?id=GTM-N32P6X"
height="0" width="0" style="display:none;visibility:hidden"&gt;&lt;/iframe&gt;</noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-N32P6X');</script>
<!-- End Google Tag Manager -->




<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script type="text/javascript" id="">var _d_site=_d_site||"B3920413C75C487FAC3AE72D";(function(a,e,b,c,d){a[b]=a[b]||function(){(a[b].q=a[b].q||[]).push(arguments)};c=e.createElement("script");c.async=1;c.src="//widget.privy.com/assets/widget.js";d=e.getElementsByTagName("script")[0];d.parentNode.insertBefore(c,d)})(window,document,"Privy");</script>

<script type="text/javascript" id="">(function(a,c,e,f,d,b){a.hj=a.hj||function(){(a.hj.q=a.hj.q||[]).push(arguments)};a._hjSettings={hjid:207461,hjsv:5};d=c.getElementsByTagName("head")[0];b=c.createElement("script");b.async=1;b.src=e+a._hjSettings.hjid+f+a._hjSettings.hjsv;d.appendChild(b)})(window,document,"//static.hotjar.com/c/hotjar-",".js?sv\x3d");</script>

<script>
  var current_page = 'about';

  // Globals
  var GLOB = {
        is_sticky : false,
        is_adminbar: false
      },
      $document = $(document),
      $window = $(window),
      $headerTop = $('.header-top');
  
  // Search
  $document.on('mouseenter click', '.searchsubmit', function() {
    // focus on hover and click
    var $this = $(this),
        $input = $this.find('input');
    $this.addClass('active');
    $input.val().trim() === '' && $input.focus();
  })
  .on('mouseleave', '.searchsubmit', function() {
    // remove focus on mouseleave if input is empty
    var $this = $(this);
    $this.find('input').val().trim() === '' && $this.removeClass('active');
  })
  .on('click', '#searchsubmit', function() {
    // prevent from triggering an empty search
    var $form = $(this).closest('form'),
        $input = $form.find('input'),
        value = $input.val().trim();
    if (value === '') {
      $input.focus();
      return false;
    } else {
      $form.submit();
    }
  });

  // Menu
  $document.on('click', '.menu-toggle', function() {
    $('header').toggle('slide');
    $('.menu-toggle .fa-bars').toggle('show');
    $('.menu-toggle .fa-times').toggle('show');
    $('.menu-mobile-center').toggle('show');
    $('.header-logo.mobile').toggle('hide');
  }).on('click', '.menu-all', function() {
    $('.all-head-menu').toggle('slide');
    $('.fa-bars').toggle('show');
    $('.fa-times').toggle('show');
    $('.header-logo.mobile').toggle('show');
  });
  
  // more efficient header scroll
  $window.scroll(function() {
    var $this = $(this),
        scroll = $this.scrollTop(),
        scroll_init = $headerTop.is(':visible') ? $headerTop.height() : 0;

    if (GLOB.is_sticky && scroll > scroll_init) {
      return;
    }
    
    var $header = $('header'),
        $padding = $('.header-padding');

    if (scroll > scroll_init) {
      $header.addClass('sticky');
      $padding.addClass('active');
      GLOB.is_adminbar && $header.addClass('admin');
      GLOB.is_sticky = true;
    } else {
      $header.removeClass('sticky');
      $padding.removeClass('active');
      GLOB.is_sticky = false;
    }
  });
  
  // Ignore # links
  $document.on('click', 'a[href="#"]', function(e) {
    e.preventDefault();
  })
  
  var form_subscribtion = function($form, e, action) {
    var email = $form.find('input').val(),
        emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    
    e.preventDefault();
		document.activeElement.blur();
		$('input').blur();
    console.log(email);

		if(email =='') {
			Dialog.show({ status: 'error', title: 'Subscribe', message: 'Please fill in your email address.' });
		
    } else if(!emailReg.test(email)) {
			Dialog.show({ status: 'error', title: 'Subscribe', message: 'Please enter a valid email address' });
		
    } else {
      console.log(ajaxurl);
      console.log({
				action: action,
				email: email
			});
			$.post(ajaxurl, {
				action: action,
				email: email
			}, function(data) {
        if (typeof data.status !== 'undefined' && data.status === 'success') {
          Dialog.show({ status: 'success', title: 'Subscribe', message: data.message });
        } else if (typeof data.message !== 'undefined') {
          Dialog.show({ status: 'error', title: 'Subscribe', message: data.message });
        } else {
          Dialog.show({ status: 'error', title: 'Subscribe', message: 'There was a problem with the subscribtion request. Please try again.' });
        }
      });
		}
  };

  $document.on('click', '#form-exclusive-updates input[type="button"]', function(e) {
    form_subscribtion($(this).closest('form'), e, 'subscribe_from_home_page_email');
  });
  
  $document.on('click', '#form-signals input[type="button"]', function(e) {
    form_subscribtion($(this).closest('form'), e, 'subscribe_to_signals');
  });
  
  $document.on('click', '.user-profile', function() {
    var $this = $(this),
        $menu = $this.find('.user-menu');
    
    if ($menu.hasClass('active')) {
      $menu.removeClass('active').slideUp();
    } else {
      $menu.addClass('active').slideDown();
    }
  });
  
  // INIT
  $(function(){
    // set adminbar
    GLOB.is_adminbar = $('#wpadminbar').length > 0;
  });
  
  
  
  function deselect(e) {
  $('.pop').slideFadeToggle(function() {
    e.removeClass('selected');
  });    
}

$(function() {
  $('#contact').on('click', function() {
    if($(this).hasClass('selected')) {
      deselect($(this));               
    } else {
      $(this).addClass('selected');
      $('.pop').slideFadeToggle();
    }
    return false;
  });

  $('.close').on('click', function() {
    deselect($('#contact'));
    return false;
  });
});

$.fn.slideFadeToggle = function(easing, callback) {
  return this.animate({ opacity: 'toggle', height: 'toggle' }, 'fast', easing, callback);
};



$('#popupClose').on('click', function() {
alert('myBtn');
  });
  


    
    	// Calling Register Form
		$("#signUp_btn").click(function(){
			$("#signindiv").hide();
			$("#signupdiv").show();
			return false;
		});
		
		
		
    	// Calling Login Form
		$("#signIn_btn").click(function(){
			$("#signupdiv").hide();
			$("#signindiv").show();
			return false;
		});


</script>



<script>
 $('#btnlogin').click(function(){

var URL= '/wordpress/wp-content/themes/Twitter-BootstrapBlankTheme/login.php';


    jQuery.ajax({
 
    type    : 'POST',
    url     : URL,
 data: {username: $('#username').val(),password:$('#password').val()},

    success : function(response) {
    
    
    
        location.reload();
     
        }
      });
         
    });




 $('.register_button').click(function(){

var URL= '/wordpress/wp-content/themes/Twitter-BootstrapBlankTheme/login.php';


    jQuery.ajax({
 
    type    : 'POST',
    url     : URL,
    data: {reg_name: $('#reg_name').val(),reg_email:$('#reg_email').val(),reg_pass:$('#reg_pass').val()},
    success : function(response) {

        location.reload();
     
        }
      });
         
    });






</script>




      



