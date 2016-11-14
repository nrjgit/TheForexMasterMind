<?php /* Template Name: Our Team*/ ?> 


<?php get_header(); ?>
<div class="container">


<div class="header-padding"></div>

<div class="header-logo mobile">
  <a href="http://atozforex.com"><img alt="AtoZForex" src="http://atozforex.com/wp-content/themes/atoz_2016/assets/images/logo.png"></a>
</div>
<div class="menu-toggle">
  <a href="#">
    <i class="fa fa-bars" aria-hidden="true"></i>
    <i class="fa fa-times" aria-hidden="true"></i>
  </a>
</div>
<a href="#" class="go-top" style="display: none;">
  <i class="icon-sprite icon-side-arrow"></i>
</a>


        <div class="zHiddenBlock">
            <div class="atoz-modal" id="lostPassword">
              <div class="modal-header">
                <h4>
                  Lost Password
                </h4>
              </div>
              <form method="post" action="#" id="lost-password-form">
                <div class="modal-body">
                  <input type="hidden" name="action" id="action" value="ajax_lost_password">
                  <div class="zForm-row">
                    <input type="email" name="email" id="lost-password-email" placeholder="Email" value="" class="whiteInput" required="required">
                  </div>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-send" id="lost-password-button">send</button>
                </div>
              </form>
              <div class="loginForm-notification" id="register-notifications"></div>
            </div>
          
            <div class="atoz-modal" id="loginForm">
              <div class="modal-header">
                <h4>
                  Login
                </h4>
              </div>
              <form method="post" action="#">
                <div class="modal-body">
                  <input type="hidden" name="action" id="action" value="ajax_login">
                  <input type="hidden" id="_wpnonce" name="_wpnonce" value="1483ae6de2"><input type="hidden" name="_wp_http_referer" value="/">
                  <div class="zForm-row">
                    <div class="zForm-col">
                      <input type="text" name="username" placeholder="Email" value="" class="whiteInput" required="required">
                    </div>
                    <div class="zForm-col">
                      <input type="password" name="password" value="" placeholder="Password" class="whiteInput" required="required">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <div class="zForm-row buttonRow">
                    <div class="zForm-col">
                      <button class="btn btn-send" id="log-in-button">send</button>
                    </div>
                    <div class="zForm-col">
                      <a href="#lostPassword" class="lostPassword fancybox-popup">Lost Password?</a>
                    </div>
                  </div>
                </div>
              </form>
              <div class="loginForm-notification"></div>
            </div>

            <div class="atoz-modal" id="signUp">
              <div class="modal-header">
                <h4>
                  Sign Up
                </h4>
              </div>
              <form id="register-form">
                <div class="modal-body">
                  <input type="hidden" id="_wpnonce" name="_wpnonce" value="88ffaed586"><input type="hidden" name="_wp_http_referer" value="/">                    <div class="zForm-row">
                    <div class="zForm-col">
                      <input type="text" name="first_name" class="whiteInput" placeholder="First Name" required="required">
                    </div>
                    <div class="zForm-col">
                      <input type="text" name="last_name" class="whiteInput" placeholder="Last Name" required="required">
                    </div>
                  </div>
                  <div class="zForm-row">
                    <select name="country">
                      <option value="" disabled="" selected="">Country</option>
                      <option value="AF">Afghanistan (&#8235;افغانستان&#8236;&lrm;)</option>
                      <option value="AX">Åland Islands (Åland)</option>
                      <option value="AL">Albania (Shqipëri)</option>
                      <option value="DZ">Algeria (&#8235;الجزائر&#8236;&lrm;)</option>
                      <option value="AS">American Samoa</option>
                      <option value="AD">Andorra</option>
                      <option value="AO">Angola</option>
                      <option value="AI">Anguilla</option>
                      <option value="AQ">Antarctica</option>
                      <option value="AG">Antigua and Barbuda</option>
                      <option value="AR">Argentina</option>
                      <option value="AM">Armenia (Հայաստան)</option>
                      <option value="AW">Aruba</option>
                      <option value="AC">Ascension Island</option>
                      <option value="AU">Australia</option>
                      <option value="AT">Austria (Österreich)</option>
                      <option value="AZ">Azerbaijan (Azərbaycan)</option>
                      <option value="BS">Bahamas</option>
                      <option value="BH">Bahrain (&#8235;البحرين&#8236;&lrm;)</option>
                      <option value="BD">Bangladesh (বাংলাদেশ)</option>
                      <option value="BB">Barbados</option>
                      <option value="BY">Belarus (Беларусь)</option>
                      <option value="BE">Belgium (België)</option>
                      <option value="BZ">Belize</option>
                      <option value="BJ">Benin (Bénin)</option>
                      <option value="BM">Bermuda</option>
                      <option value="BT">Bhutan (འབྲུག)</option>
                      <option value="BO">Bolivia</option>
                      <option value="BA">Bosnia and Herzegovina (Босна и Херцеговина)</option>
                      <option value="BW">Botswana</option>
                      <option value="BV">Bouvet Island</option>
                      <option value="BR">Brazil (Brasil)</option>
                      <option value="IO">British Indian Ocean Territory</option>
                      <option value="VG">British Virgin Islands</option>
                      <option value="BN">Brunei</option>
                      <option value="BG">Bulgaria (България)</option>
                      <option value="BF">Burkina Faso</option>
                      <option value="BI">Burundi (Uburundi)</option>
                      <option value="KH">Cambodia (កម្ពុជា)</option>
                      <option value="CM">Cameroon (Cameroun)</option>
                      <option value="CA">Canada</option>
                      <option value="IC">Canary Islands (islas Canarias)</option>
                      <option value="CV">Cape Verde (Kabu Verdi)</option>
                      <option value="BQ">Caribbean Netherlands</option>
                      <option value="KY">Cayman Islands</option>
                      <option value="CF">Central African Republic (République centrafricaine)</option>
                      <option value="EA">Ceuta and Melilla (Ceuta y Melilla)</option>
                      <option value="TD">Chad (Tchad)</option>
                      <option value="CL">Chile</option>
                      <option value="CN">China (中国)</option>
                      <option value="CX">Christmas Island</option>
                      <option value="CP">Clipperton Island</option>
                      <option value="CC">Cocos (Keeling) Islands (Kepulauan Cocos (Keeling))</option>
                      <option value="CO">Colombia</option>
                      <option value="KM">Comoros (&#8235;جزر القمر&#8236;&lrm;)</option>
                      <option value="CD">Congo (DRC) (Jamhuri ya Kidemokrasia ya Kongo)</option>
                      <option value="CG">Congo (Republic) (Congo-Brazzaville)</option>
                      <option value="CK">Cook Islands</option>
                      <option value="CR">Costa Rica</option>
                      <option value="CI">Côte d’Ivoire</option>
                      <option value="HR">Croatia (Hrvatska)</option>
                      <option value="CU">Cuba</option>
                      <option value="CW">Curaçao</option>
                      <option value="CY">Cyprus (Κύπρος)</option>
                      <option value="CZ">Czech Republic (Česká republika)</option>
                      <option value="DK">Denmark (Danmark)</option>
                      <option value="DG">Diego Garcia</option>
                      <option value="DJ">Djibouti</option>
                      <option value="DM">Dominica</option>
                      <option value="DO">Dominican Republic (República Dominicana)</option>
                      <option value="EC">Ecuador</option>
                      <option value="EG">Egypt (&#8235;مصر&#8236;&lrm;)</option>
                      <option value="SV">El Salvador</option>
                      <option value="GQ">Equatorial Guinea (Guinea Ecuatorial)</option>
                      <option value="ER">Eritrea</option>
                      <option value="EE">Estonia (Eesti)</option>
                      <option value="ET">Ethiopia</option>
                      <option value="FK">Falkland Islands (Islas Malvinas)</option>
                      <option value="FO">Faroe Islands (Føroyar)</option>
                      <option value="FJ">Fiji</option>
                      <option value="FI">Finland (Suomi)</option>
                      <option value="FR">France</option>
                      <option value="GF">French Guiana (Guyane française)</option>
                      <option value="PF">French Polynesia (Polynésie française)</option>
                      <option value="TF">French Southern Territories (Terres australes françaises)</option>
                      <option value="GA">Gabon</option>
                      <option value="GM">Gambia</option>
                      <option value="GE">Georgia (საქართველო)</option>
                      <option value="DE">Germany (Deutschland)</option>
                      <option value="GH">Ghana (Gaana)</option>
                      <option value="GI">Gibraltar</option>
                      <option value="GR">Greece (Ελλάδα)</option>
                      <option value="GL">Greenland (Kalaallit Nunaat)</option>
                      <option value="GD">Grenada</option>
                      <option value="GP">Guadeloupe</option>
                      <option value="GU">Guam</option>
                      <option value="GT">Guatemala</option>
                      <option value="GG">Guernsey</option>
                      <option value="GN">Guinea (Guinée)</option>
                      <option value="GW">Guinea-Bissau (Guiné Bissau)</option>
                      <option value="GY">Guyana</option>
                      <option value="HT">Haiti</option>
                      <option value="HM">Heard &amp; McDonald Islands</option>
                      <option value="HN">Honduras</option>
                      <option value="HK">Hong Kong (香港)</option>
                      <option value="HU">Hungary (Magyarország)</option>
                      <option value="IS">Iceland (Ísland)</option>
                      <option value="IN">India (भारत)</option>
                      <option value="ID">Indonesia</option>
                      <option value="IR">Iran (&#8235;ایران&#8236;&lrm;)</option>
                      <option value="IQ">Iraq (&#8235;العراق&#8236;&lrm;)</option>
                      <option value="IE">Ireland</option>
                      <option value="IM">Isle of Man</option>
                      <option value="IL">Israel (&#8235;ישראל&#8236;&lrm;)</option>
                      <option value="IT">Italy (Italia)</option>
                      <option value="JM">Jamaica</option>
                      <option value="JP">Japan (日本)</option>
                      <option value="JE">Jersey</option>
                      <option value="JO">Jordan (&#8235;الأردن&#8236;&lrm;)</option>
                      <option value="KZ">Kazakhstan (Казахстан)</option>
                      <option value="KE">Kenya</option>
                      <option value="KI">Kiribati</option>
                      <option value="XK">Kosovo (Kosovë)</option>
                      <option value="KW">Kuwait (&#8235;الكويت&#8236;&lrm;)</option>
                      <option value="KG">Kyrgyzstan (Кыргызстан)</option>
                      <option value="LA">Laos (ລາວ)</option>
                      <option value="LV">Latvia (Latvija)</option>
                      <option value="LB">Lebanon (&#8235;لبنان&#8236;&lrm;)</option>
                      <option value="LS">Lesotho</option>
                      <option value="LR">Liberia</option>
                      <option value="LY">Libya (&#8235;ليبيا&#8236;&lrm;)</option>
                      <option value="LI">Liechtenstein</option>
                      <option value="LT">Lithuania (Lietuva)</option>
                      <option value="LU">Luxembourg</option>
                      <option value="MO">Macau (澳門)</option>
                      <option value="MK">Macedonia (FYROM) (Македонија)</option>
                      <option value="MG">Madagascar (Madagasikara)</option>
                      <option value="MW">Malawi</option>
                      <option value="MY">Malaysia</option>
                      <option value="MV">Maldives</option>
                      <option value="ML">Mali</option>
                      <option value="MT">Malta</option>
                      <option value="MH">Marshall Islands</option>
                      <option value="MQ">Martinique</option>
                      <option value="MR">Mauritania (&#8235;موريتانيا&#8236;&lrm;)</option>
                      <option value="MU">Mauritius (Moris)</option>
                      <option value="YT">Mayotte</option>
                      <option value="MX">Mexico (México)</option>
                      <option value="FM">Micronesia</option>
                      <option value="MD">Moldova (Republica Moldova)</option>
                      <option value="MC">Monaco</option>
                      <option value="MN">Mongolia (Монгол)</option>
                      <option value="ME">Montenegro (Crna Gora)</option>
                      <option value="MS">Montserrat</option>
                      <option value="MA">Morocco (&#8235;المغرب&#8236;&lrm;)</option>
                      <option value="MZ">Mozambique (Moçambique)</option>
                      <option value="MM">Myanmar (Burma) (မြန်မာ)</option>
                      <option value="NA">Namibia (Namibië)</option>
                      <option value="NR">Nauru</option>
                      <option value="NP">Nepal (नेपाल)</option>
                      <option value="NL">Netherlands (Nederland)</option>
                      <option value="NC">New Caledonia (Nouvelle-Calédonie)</option>
                      <option value="NZ">New Zealand</option>
                      <option value="NI">Nicaragua</option>
                      <option value="NE">Niger (Nijar)</option>
                      <option value="NG">Nigeria</option>
                      <option value="NU">Niue</option>
                      <option value="NF">Norfolk Island</option>
                      <option value="MP">Northern Mariana Islands</option>
                      <option value="KP">North Korea (조선 민주주의 인민 공화국)</option>
                      <option value="NO">Norway (Norge)</option>
                      <option value="OM">Oman (&#8235;عُمان&#8236;&lrm;)</option>
                      <option value="PK">Pakistan (&#8235;پاکستان&#8236;&lrm;)</option>
                      <option value="PW">Palau</option>
                      <option value="PS">Palestine (&#8235;فلسطين&#8236;&lrm;)</option>
                      <option value="PA">Panama (Panamá)</option>
                      <option value="PG">Papua New Guinea</option>
                      <option value="PY">Paraguay</option>
                      <option value="PE">Peru (Perú)</option>
                      <option value="PH">Philippines</option>
                      <option value="PN">Pitcairn Islands</option>
                      <option value="PL">Poland (Polska)</option>
                      <option value="PT">Portugal</option>
                      <option value="PR">Puerto Rico</option>
                      <option value="QA">Qatar (&#8235;قطر&#8236;&lrm;)</option>
                      <option value="RE">Réunion (La Réunion)</option>
                      <option value="RO">Romania (România)</option>
                      <option value="RU">Russia (Россия)</option>
                      <option value="RW">Rwanda</option>
                      <option value="BL">Saint Barthélemy (Saint-Barthélemy)</option>
                      <option value="SH">Saint Helena</option>
                      <option value="KN">Saint Kitts and Nevis</option>
                      <option value="LC">Saint Lucia</option>
                      <option value="MF">Saint Martin (Saint-Martin (partie française))</option>
                      <option value="PM">Saint Pierre and Miquelon (Saint-Pierre-et-Miquelon)</option>
                      <option value="WS">Samoa</option>
                      <option value="SM">San Marino</option>
                      <option value="ST">São Tomé and Príncipe (São Tomé e Príncipe)</option>
                      <option value="SA">Saudi Arabia (&#8235;المملكة العربية السعودية&#8236;&lrm;)</option>
                      <option value="SN">Senegal (Sénégal)</option>
                      <option value="RS">Serbia (Србија)</option>
                      <option value="SC">Seychelles</option>
                      <option value="SL">Sierra Leone</option>
                      <option value="SG">Singapore</option>
                      <option value="SX">Sint Maarten</option>
                      <option value="SK">Slovakia (Slovensko)</option>
                      <option value="SI">Slovenia (Slovenija)</option>
                      <option value="SB">Solomon Islands</option>
                      <option value="SO">Somalia (Soomaaliya)</option>
                      <option value="ZA">South Africa</option>
                      <option value="GS">South Georgia &amp; South Sandwich Islands</option>
                      <option value="KR">South Korea (대한민국)</option>
                      <option value="SS">South Sudan (&#8235;جنوب السودان&#8236;&lrm;)</option>
                      <option value="ES">Spain (España)</option>
                      <option value="LK">Sri Lanka (ශ්&zwj;රී ලංකාව)</option>
                      <option value="VC">St. Vincent &amp; Grenadines</option>
                      <option value="SD">Sudan (&#8235;السودان&#8236;&lrm;)</option>
                      <option value="SR">Suriname</option>
                      <option value="SJ">Svalbard and Jan Mayen (Svalbard og Jan Mayen)</option>
                      <option value="SZ">Swaziland</option>
                      <option value="SE">Sweden (Sverige)</option>
                      <option value="CH">Switzerland (Schweiz)</option>
                      <option value="SY">Syria (&#8235;سوريا&#8236;&lrm;)</option>
                      <option value="TW">Taiwan (台灣)</option>
                      <option value="TJ">Tajikistan</option>
                      <option value="TZ">Tanzania</option>
                      <option value="TH">Thailand (ไทย)</option>
                      <option value="TL">Timor-Leste</option>
                      <option value="TG">Togo</option>
                      <option value="TK">Tokelau</option>
                      <option value="TO">Tonga</option>
                      <option value="TT">Trinidad and Tobago</option>
                      <option value="TA">Tristan da Cunha</option>
                      <option value="TN">Tunisia (&#8235;تونس&#8236;&lrm;)</option>
                      <option value="TR">Turkey (Türkiye)</option>
                      <option value="TM">Turkmenistan</option>
                      <option value="TC">Turks and Caicos Islands</option>
                      <option value="TV">Tuvalu</option>
                      <option value="UM">U.S. Outlying Islands</option>
                      <option value="VI">U.S. Virgin Islands</option>
                      <option value="UG">Uganda</option>
                      <option value="UA">Ukraine (Україна)</option>
                      <option value="AE">United Arab Emirates (&#8235;الإمارات العربية المتحدة&#8236;&lrm;)</option>
                      <option value="GB">United Kingdom</option>
                      <option value="US">United States</option>
                      <option value="UY">Uruguay</option>
                      <option value="UZ">Uzbekistan (Oʻzbekiston)</option>
                      <option value="VU">Vanuatu</option>
                      <option value="VA">Vatican City (Città del Vaticano)</option>
                      <option value="VE">Venezuela</option>
                      <option value="VN">Vietnam (Việt Nam)</option>
                      <option value="WF">Wallis and Futuna</option>
                      <option value="EH">Western Sahara (&#8235;الصحراء الغربية&#8236;&lrm;)</option>
                      <option value="YE">Yemen (&#8235;اليمن&#8236;&lrm;)</option>
                      <option value="ZM">Zambia</option>
                      <option value="ZW">Zimbabwe</option>
                    </select>
                  </div>
                  <div class="zForm-row">
                    <div class="zForm-col">
                      <input type="email" name="email" class="whiteInput" placeholder="Email" required="required">
                    </div>
                    <div class="zForm-col">
                      <select name="account_type">
                        <option value="" disabled="" selected="">Account Type</option>
                        <option value="trader">Trader</option>
                        <option value="broker">Broker</option>
                        <option value="affiliate">Affiliate</option>
                      </select>
                    </div>
                  </div>
                  <div class="zForm-row">
                    <div class="zForm-col">
                      <input type="password" name="password1" class="whiteInput" placeholder="Password" required="required">
                    </div>
                    <div class="zForm-col">
                      <input type="password" name="password2" class="whiteInput" placeholder="Confirm Password" required="required">
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-send" id="register_button">Register</button>
                </div>
              </form>
              <div class="registerForm-notification"></div>
            </div>
          </div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
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
</script>

<div class="main">


    <div class="jumbotron jumbotron07" style="">
        <div class="container">
            <h2 class="subheading">Who We Are</h2>
            <a href="#" class="go-down"><i class="icon-sprite icon-circle-arrow-down"></i></a>
        </div>
    </div>	
    
    <div class="container team-wrapper">
        <div class="accent-block">
            We are a dedicated team of Trader, Analyst; Risk & Strategic thinkers who are passionate about helping fellow traders reach their goals. We live and breathe everything and anything happening in financial world.
We aim to be one stop destination for all your trading & investment needs.
        </div>
		
		<div class="team-head">
            <h2 class="subheading">What we do</h2>
            <div class="subheading-text">
                We provide powerful and profitable insights for traders by delivering precise technical and market driven analysis; which allows you to project the highest probability of outcomes for all your investing need. 
          
				</div>
				
        </div>
		
		
        <div class="team-head">
            <h2 class="subheading">The Team</h2>
            <div class="subheading-text">
                Established by industry leading financial services professionals Investorz delivers topnotch FX and FInancial news to your finger-tips. Every team member has at least 5 years worth of finance and forex experience, and is heavily involved in curating website content and operations of the portal.           
				</div>
				
        </div>

                <div class="team-list">
                            <div class="team-list__item">
                    <div class="team-list__item-inner">
                        <div class="team-list__photo">
                            <img src="http://atozforex.com/wp-content/uploads/2015/03/member3.png" alt="Quyen Nong">
                        </div>
                        <div class="team-list__name">
                            <a href="http://atozforex.com/team/quyen-nong/">
                                Quyen Nong                            </a>
                        </div>
                        <div class="team-list__vacancy">Marketing Project Manager</div>
                        <div class="team-list__bio">
                            Quyen has international work experience in export, retail and ecommerce throughout Europe and Asia. He brings his innovative mindset for the team and liaises between the team members and investorz Partners.                         </div>
                        <a href="http://atozforex.com/team/quyen-nong/" class="btn btn-danger btn-short">learn more</a>
                                                <div class="team-list__socs">
                            <span>Connect with Quyen Nong</span>
                            <ul class="socs-list">
                                                                                                        <li><a href="https://twitter.com/CQnong"><i class="icon-sprite icon-twitter-s"></i></a></li>
                                                                                                        <li><a href="https://www.facebook.com/quyen.nong.9"><i class="icon-sprite icon-facebook-s"></i></a></li>
                                                                                                        <li><a href="http://nl.linkedin.com/in/qnong"><i class="icon-sprite icon-instagram-s"></i></a></li>
                                                            </ul>
                        </div>
                                            </div>
                </div>
                            <div class="team-list__item">
                    <div class="team-list__item-inner">
                        <div class="team-list__photo">
                            <img src="http://atozforex.com/wp-content/uploads/2015/03/member2.png" alt="Youwei Jay Neo">
                        </div>
                        <div class="team-list__name">
                            <a href="http://atozforex.com/team/youwei-jay-neo/">
                                Youwei Jay Neo                            </a>
                        </div>
                        <div class="team-list__vacancy">Head of SEA</div>
                        <div class="team-list__bio">
                            Jay is a full time professional trader and trainer since 2010. He has trained hundreds across South East Asia based on his responsive technical analysis trading method. Jay is the person behind daily Technical Analysis.                         </div>
                        <a href="http://atozforex.com/team/youwei-jay-neo/" class="btn btn-danger btn-short">learn more</a>
                                                <div class="team-list__socs">
                            <span>Connect with Youwei Jay Neo</span>
                            <ul class="socs-list">
                                                                                                        <li><a href="https://www.linkedin.com/profile/view?id=332461302"><i class="icon-sprite icon-instagram-s"></i></a></li>
                                                                                                        <li><a href="https://twitter.com/jayyouwei"><i class="icon-sprite icon-twitter-s"></i></a></li>
                                                            </ul>
                        </div>
                                            </div>
                </div>
                            <div class="team-list__item">
                    <div class="team-list__item-inner">
                        <div class="team-list__photo">
                            <img src="http://atozforex.com/wp-content/uploads/2015/03/member1.png" alt="Yury Safronau">
                        </div>
                        <div class="team-list__name">
                            <a href="http://atozforex.com/team/yury-safronau/">
                                Yury Safronau                            </a>
                        </div>
                        <div class="team-list__vacancy">Chief Currency Strategist</div>
                        <div class="team-list__bio">
                            Yury is a full time professional trader since 2009. He holds a Masters Degree in Economic Sciences with core focus on "The use of non-linear dynamic models to predict the behavior of financial markets". Yury is the person behind investorz Signals.                         </div>
                        <a href="http://atozforex.com/team/yury-safronau/" class="btn btn-danger btn-short">learn more</a>
                                                <div class="team-list__socs">
                            <span>Connect with Yury Safronau</span>
                            <ul class="socs-list">
                                                                                                        <li><a href="http://www.linkedin.com/pub/yury-safronau/66/757/a263"><i class="icon-sprite icon-instagram-s"></i></a></li>
                                                            </ul>
                        </div>
                                            </div>
                </div>
                    </div>
        
    </div>
</div>



<div class="footer_placeholder" style="height: 605px;"></div>
<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-7 colum-1">
        <div class="menu-footer-menu-container"><ul id="menu-footer-menu-1" class="menu"><li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-22841"><a href="/news/">NEWS</a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-22843"><a href="http://atozforex.com/category/market-news/fundamental-analysis/">Fundamental Analysis</a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-22844"><a href="http://atozforex.com/category/market-news/technical-analysis/">Technical Analysis</a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-22845"><a href="http://atozforex.com/category/industry-news/">Industry News</a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-22846"><a href="http://atozforex.com/category/industry-news/regulator-news/">Regulator News</a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-22847"><a href="http://atozforex.com/category/industry-news/retail-forex/">Retail FX</a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-22848"><a href="http://atozforex.com/category/industry-news/institutional-fx/">Institutional FX</a></li>
	<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-22849"><a href="http://atozforex.com/category/guest-post/">Guest Post</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-22850"><a href="/directory/forex-brokers/">DIRECTORY</a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-23096"><a href="http://atozforex.com/directory/">Forex Broker Search</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-22851"><a href="http://atozforex.com/all-brokers/">Forex Brokers</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-22852"><a href="/forex-education/">EDUCATION</a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-23047"><a href="/webinars/">Forex Webinars</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-22853"><a href="http://atozforex.com/ebooks/">Forex ebooks</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-22857"><a href="http://atozforex.com/forex-education/">Forex Education</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-22855"><a href="http://atozforex.com/forex-glossary/">Forex Glossary</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-22858"><a href="/trading-tools/">TOOLS</a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-22860"><a href="/trading-tools/forex-indicators/">Trading indicators</a></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-22861"><a href="/trading-tools/fibonacci-calculator/">Fibonacci calculator</a></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-22862"><a href="/trading-tools/pip-calculator/">Pip calculator</a></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-22863"><a href="/trading-tools/pivot-calculator/">Pivot Calculator</a></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-22864"><a href="/trading-tools/forex-signals/">Free forex signals</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-22865"><a href="/events/">EVENTS</a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-23063"><a href="/events/all-you-need-in-forex-now-on-facebook-live/">Facebook Live</a></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-22866"><a href="/events/2016-china-forex-expo/">Expos</a></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-22867"><a href="/events/pro-trader-challenge-2016/">ProTrader Challenge</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-event menu-item-23970"><a href="http://atozforex.com/events/baltics-traders-union-2016-vilnius/">Baltics traders union 2016 Vilnius</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current-menu-ancestor current-menu-parent menu-item-has-children menu-item-22868"><a href="/about/">ABOUT</a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-6150 current_page_item menu-item-22869"><a href="http://atozforex.com/about/">Our team</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-22870"><a href="http://atozforex.com/about/advertise-us/">Advertise</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-22871"><a href="http://atozforex.com/about/contact-us/">Contact us</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-22872"><a href="#">MORE</a>
<ul class="sub-menu">
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-22873"><a href="http://atozforex.com/careers/">Careers</a></li>
	<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-22874"><a href="/forums/">Traders Forums</a></li>
	<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-22875"><a href="http://atozforex.com/2016-forex-awards/">2016 Forex Awards</a></li>
</ul>
</li>
</ul></div>      </div>
      <div class="col-xs-12 col-sm-6 col-md-5">
        <div class="news-group top-stories">
          <h2 class="news-group-title">Top stories</h2>
          <div class="news-list">
                <div class="news-item featured row">
      <div class="col-xs-12 col-md-5">
                  <a class="news-image" href="http://atozforex.com/news/meet-andrea-nuciforo-a-future-fx-leader/" style="background-image: url('http://atozforex.com/wp-content/uploads/2016/09/Andrea-Nuciforo-219x124.jpg');"></a>
              </div>
      <div class="col-xs-12 col-md-7 np-left">
        <h3><a href="http://atozforex.com/news/meet-andrea-nuciforo-a-future-fx-leader/">Meet Andrea Nuciforo: A Future FX leader driven by Results</a></h3>
        <p>The 40 Future FX Leaders under 40 interviews aim to identify the next Industry Leaders. Today we meet Andrea Nucifo...</p>
        <span class="date fl">27 September 2016</span>
        <a href="http://atozforex.com/news/meet-andrea-nuciforo-a-future-fx-leader/" class="read-more fr"></a>
      </div>
    </div>
    <div class="clearfix"></div>
      <div class="news-item featured row">
      <div class="col-xs-12 col-md-5">
                  <a class="news-image" href="http://atozforex.com/news/boj-july-meeting-minutes-bullish-usdjpy/" style="background-image: url('http://atozforex.com/wp-content/uploads/2016/03/Japan.jpg');"></a>
              </div>
      <div class="col-xs-12 col-md-7 np-left">
        <h3><a href="http://atozforex.com/news/boj-july-meeting-minutes-bullish-usdjpy/">BoJ July Meeting Minutes:  Bullish USDJPY?</a></h3>
        <p>BoJ July meeting minutes outlines policymakers frustrations over weak inflation and uncertainty towards the future....</p>
        <span class="date fl">27 September 2016</span>
        <a href="http://atozforex.com/news/boj-july-meeting-minutes-bullish-usdjpy/" class="read-more fr"></a>
      </div>
    </div>
    <div class="clearfix"></div>
            </div>
          <div class="clearfix"></div>
        </div>
        
        <!-- Subscribe for exclusive updates -->
        <div class="green-box">
  <form method="POST" id="form-exclusive-updates" action="#">
    <h3>Subscribe to investorz <span>exclusive updates!</span></h3>
    <div class="input-box">
      <input type="text" name="email" placeholder="Email" value="">
      <input type="button" class="subscribe-to-atoz" value="Submit">
    </div>
  </form>
</div>
        <!-- Social links -->
        <ul class="header__soc">
          <li><a target="_blank" href="https://www.facebook.com/atozmarkets"><i class="icon icon-facebook-h"></i></a></li>
          <li><a target="_blank" href="https://twitter.com/AtoZForex"><i class="icon icon-twitter-h"></i></a></li>
          <li><a target="_blank" href="https://plus.google.com/+Atozforex/posts"><i class="icon icon-google-h"></i></a></li>
          <li><a target="_blank" href="https://www.linkedin.com/company/atoz-forex"><i class="icon icon-instagram-h"></i></a></li>
          <li><a target="_blank" href="https://www.youtube.com/channel/UC3r7Yq1x-LmCsnnWg7aA5ug"><i class="icon icon-youtube-h"></i></a></li>
        </ul>

      </div>
    </div>

    <!--baner-->
    <div class="banner-footer ads-group">
      <div id="execphp-70" class="widget widget_execphp">			<div class="execphpwidget"><center><a href="http://www.ads-securities.co.uk/secure-broker/?utm_source=cpm&amp;utm_medium=broker-profile&amp;utm_campaign=2015-q4-atozforex&amp;cmp=atozforex" target="_blank"><img src="/wp-content/uploads/2016/09/spreadsB_sep_550x90_en.jpg" width="700" height="114"></a></center></div>		</div>    </div>
    <!--end banner-->
  </div>

  <div class="footer-botom">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mail">
            <div class="row">
              <div class="col-md-6">
                <span class="letter">Questions? Contact us today at </span>
                <a href="mailto:info@atozforex.com">info@Investorz.com</a>
                <div class="sth">
                  <iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" class="twitter-follow-button twitter-follow-button-rendered" title="Twitter Follow Button" src="http://platform.twitter.com/widgets/follow_button.c6def25548e9590b13abaa1b3330b811.en.html#dnt=false&amp;id=twitter-widget-0&amp;lang=en&amp;screen_name=AtoZForex&amp;show_count=true&amp;show_screen_name=false&amp;size=m&amp;time=1474980799177" style="position: absolute; visibility: hidden; width: 0px; height: 0px;"></iframe><a class="twitter-follow-button" href="https://twitter.com/AtoZForex" data-show-screen-name="false" data-show-count="true" data-size="small" data-twitter-extracted-i1474980798765220572="true">
                    Follow @Investorz
                  </a>
                  <div class="fb-like" data-href="https://www.facebook.com/atozmarkets" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="false"></div>
                </div>
              </div>
              <div class="col-md-6">
                <span class="copy">Copyright © 2016 AtoZFX. All Rights Reserved.</span>
                                <span class="terms">
                                      <a href="http://atozforex.com/terms-and-conditions/">Terms &amp; Conditions</a>
                                      <a href="http://atozforex.com/terms-and-conditions/">Risk Disclaimer</a>
                                      <a href="http://atozforex.com/privacy-policy/">Privacy Policy</a>
                                  </span>
              </div>
            </div>
          </div>					
        </div>
      </div>
    </div>
  </div>
</footer>

<script type="text/javascript">
/* <![CDATA[ */
var rlArgs = {"script":"swipebox","selector":"lightbox","customEvents":"","activeGalleries":"1","animation":"1","hideCloseButtonOnMobile":"0","removeBarsOnMobile":"0","hideBars":"1","hideBarsDelay":"5000","videoMaxWidth":"1080","useSVG":"1","loopAtEnd":"0"};
/* ]]> */
</script>
<script type="text/javascript">
/* <![CDATA[ */
var pollsL10n = {"ajax_url":"http:\/\/atozforex.com\/wp-admin\/admin-ajax.php","text_wait":"Your last request is still being processed. Please wait a while ...","text_valid":"Please choose a valid poll answer.","text_multiple":"Maximum number of choices allowed: ","show_loading":"1","show_fading":"1"};
/* ]]> */
</script>
<script type="text/javascript" src="http://atozforex.com/wp-content/plugins/bwp-minify/min/?f=wp-content/plugins/bbpress/templates/default/js/editor.js,wp-content/plugins/responsive-lightbox/assets/swipebox/js/jquery.swipebox.min.js,wp-content/plugins/responsive-lightbox/js/front.js,wp-content/plugins/wp-polls/polls-js.js,verstka/js/jquery.min.js,verstka/js/jquery.browser.min.js,verstka/js/selectivizr-min.js,verstka/js/bootstrap/bootstrap.min.js,verstka/js/jquery.validate.min.js,verstka/js/jquery.znice.validate.js"></script>
<script type="text/javascript" src="http://atozforex.com/wp-content/plugins/bwp-minify/min/?f=verstka/js/jquery.znice.js,verstka/js/slick.js,verstka/js/jquery-ui.min.js,verstka/js/jquery.mobile.custom.min.js,verstka/js/star-rating.js,verstka/js/Calculators.js,verstka/js/Fibonacci.js,verstka/js/Pivot.js,verstka/js/Dialog.js,verstka/js/jquery.rotate.js"></script>
<script type="text/javascript" src="http://atozforex.com/wp-content/plugins/bwp-minify/min/?f=verstka/js/jClocksGMT.js,verstka/fancybox/jquery.fancybox.pack.js,verstka/js/masonry.pkgd.min.js,verstka/js/modernizr.js,verstka/js/jquery.watermark.min.js,verstka/js/jquery.mixitup.js,verstka/js/scr.js,wp-includes/js/wp-embed.min.js"></script>

<script>(function (i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r;
    i[r] = i[r] || function () {
      (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date();
    a = s.createElement(o), m = s.getElementsByTagName(o)[0];
    a.async = 1;
    a.src = g;
    m.parentNode.insertBefore(a, m)
  })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
  ga('create', 'UA-41475023-3', 'auto');
  ga('send', 'pageview');</script>

<script>
  window.twttr = (function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0],
            t = window.twttr || {};
    if (d.getElementById(id))
      return t;
    js = d.createElement(s);
    js.id = id;
    js.src = "https://platform.twitter.com/widgets.js";
    fjs.parentNode.insertBefore(js, fjs);

    t._e = [];
    t.ready = function (f) {
      t._e.push(f);
    };

    return t;
  }(document, "script", "twitter-wjs"));</script>


<script>(function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id))
      return;
    js = d.createElement(s);
    js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

<script type="text/javascript">/* <![CDATA[ */(function(d,s,a,i,j,r,l,m,t){try{l=d.getElementsByTagName('a');t=d.createElement('textarea');for(i=0;l.length-i;i++){try{a=l[i].href;s=a.indexOf('/cdn-cgi/l/email-protection');m=a.length;if(a&&s>-1&&m>28){j=28+s;s='';if(j<m){r='0x'+a.substr(j,2)|0;for(j+=2;j<m&&a.charAt(j)!='X';j+=2)s+='%'+('0'+('0x'+a.substr(j,2)^r).toString(16)).slice(-2);j++;s=decodeURIComponent(s)+a.substr(j,m-j)}t.innerHTML=s.replace(/</g,'&lt;').replace(/>/g,'&gt;');l[i].href='mailto:'+t.value}}catch(e){}}}catch(e){}})(document);/* ]]> */</script>

<div style="display: none; visibility: hidden;"><script src="//load.sumome.com/" data-sumo-site-id="ec6a8af56b86e9c5373ef7fb505345b791680bbd631e100d284f500e150a2b1a" async="async"></script></div><div id="ads"></div></body>

<!-- Google Tag Manager -->
<noscript>&lt;iframe src="//www.googletagmanager.com/ns.html?id=GTM-N32P6X"
height="0" width="0" style="display:none;visibility:hidden"&gt;&lt;/iframe&gt;</noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-N32P6X');</script>
<!-- End Google Tag Manager -->


<script type="text/javascript" id="">var _d_site=_d_site||"B3920413C75C487FAC3AE72D";(function(a,e,b,c,d){a[b]=a[b]||function(){(a[b].q=a[b].q||[]).push(arguments)};c=e.createElement("script");c.async=1;c.src="//widget.privy.com/assets/widget.js";d=e.getElementsByTagName("script")[0];d.parentNode.insertBefore(c,d)})(window,document,"Privy");</script>

<script type="text/javascript" id="">(function(a,c,e,f,d,b){a.hj=a.hj||function(){(a.hj.q=a.hj.q||[]).push(arguments)};a._hjSettings={hjid:207461,hjsv:5};d=c.getElementsByTagName("head")[0];b=c.createElement("script");b.async=1;b.src=e+a._hjSettings.hjid+f+a._hjSettings.hjsv;d.appendChild(b)})(window,document,"//static.hotjar.com/c/hotjar-",".js?sv\x3d");</script>






</div>
<?php get_footer(); ?>