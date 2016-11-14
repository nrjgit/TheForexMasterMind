<?php /* Template Name: Advertise with Us */ ?>


<?php get_header(); ?>
<div class="container">

<body style="zoom: 1;">

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



<div class="main nopadding-main" style="
    background: #ffffff!important;
">


        <div class="jumbotron jumbotron08" style="min-height: 464px;background-position: center top;/* width: 100%; */background-color: #ffffff;background-image: url('http://www.medgatetoday.com/upload/articles/adver_with_us.jpg');background-size: 100%;.jumbotron {min-height: 464px;background-repeat: no-repeat;background-position: center top;background-size: cover;position: relative;margin-bottom: 0;  }">
            <div class="container">
                
                <a href="#" class="btn btn-danger btn-xl move-down" style="
    /* height: 11em; */
    /* top: 6em; */
    margin-top: 15em;
">GET STARTED</a>
                <a href="#" class="go-down"><i class="icon-sprite icon-circle-arrow-down"></i></a>
            </div>
        </div>	<div class="container">
            <div class="service-head">
                investorz is a <b>one-stop-shop</b> for everything in forex. we attract a diverse audience to our website, from individuals to institutional traders, affiliates and brokers.

Over 800,000 subscribers and 35% increase in web traffic every quarter make <a href="#">Investorz</a> an undeniable choice for your advertising. &nbsp;<a href="#">Advertise with AtoZForex</a> to boost your brand's outreach, see the difference!            </div>
        </div>


        <div class="service-list">
            <div class="container">
                <div class="service-list__title">our services</div>
                
                <div class="row">
                    <div class="tab-content">
                        <div id="AtoZForex" class="tab-pane fade in active">
                                                            <div class="service-item">
                                    <div class="service-item__img">
                                        <a href="/about/contact-us/">
                                            <img src="http://atozforex.com/wp-content/uploads/2015/10/service-img1.png" alt="Web banners <br />display">
                                        </a>
                                    </div>
                                    <div class="service-item__text">
                                        Web banners <br>display                                    </div>
                                </div>
                                                            <div class="service-item">
                                    <div class="service-item__img">
                                        <a href="/about/contact-us/">
                                            <img src="http://atozforex.com/wp-content/uploads/2015/10/service-img2.png" alt="Forex directory <br />listing ">
                                        </a>
                                    </div>
                                    <div class="service-item__text">
                                        Forex directory <br>listing                                     </div>
                                </div>
                                                            <div class="service-item">
                                    <div class="service-item__img">
                                        <a href="/about/contact-us/">
                                            <img src="http://atozforex.com/wp-content/uploads/2015/10/service-img3.png" alt="Featured Forex <br />directory listing ">
                                        </a>
                                    </div>
                                    <div class="service-item__text">
                                        Featured Forex <br>directory listing                                     </div>
                                </div>
                                                            <div class="service-item">
                                    <div class="service-item__img">
                                        <a href="/about/contact-us/">
                                            <img src="http://atozforex.com/wp-content/uploads/2015/10/service-img4.png" alt="Newsletter <br />banner ">
                                        </a>
                                    </div>
                                    <div class="service-item__text">
                                        Newsletter <br>banner                                     </div>
                                </div>
                                                            <div class="service-item">
                                    <div class="service-item__img">
                                        <a href="/about/contact-us/">
                                            <img src="http://atozforex.com/wp-content/uploads/2015/10/service-img5.png" alt="Newsletter <br />blast">
                                        </a>
                                    </div>
                                    <div class="service-item__text">
                                        Newsletter <br>blast                                    </div>
                                </div>
                                                            <div class="service-item">
                                    <div class="service-item__img">
                                        <a href="/about/contact-us/">
                                            <img src="http://atozforex.com/wp-content/uploads/2015/10/service-img6.png" alt="Sponsored <br />webinars">
                                        </a>
                                    </div>
                                    <div class="service-item__text">
                                        Sponsored <br>webinars                                    </div>
                                </div>
                                                            <div class="service-item">
                                    <div class="service-item__img">
                                        <a href="/about/contact-us/">
                                            <img src="http://atozforex.com/wp-content/uploads/2015/10/service-img7.png" alt="Paid search <br />(PPC) ">
                                        </a>
                                    </div>
                                    <div class="service-item__text">
                                        Paid search <br>(PPC)                                     </div>
                                </div>
                                                            <div class="service-item">
                                    <div class="service-item__img">
                                        <a href="/about/contact-us/">
                                            <img src="http://atozforex.com/wp-content/uploads/2015/10/service-img8.png" alt="Social media <br />features ">
                                        </a>
                                    </div>
                                    <div class="service-item__text">
                                        Social media <br>features                                     </div>
                                </div>
                                                            <div class="service-item">
                                    <div class="service-item__img">
                                        <a href="/about/contact-us/">
                                            <img src="http://atozforex.com/wp-content/uploads/2015/10/service-img9.png" alt="Recruitment solutions <br /><span>(job board on atozforex.com)</span>">
                                        </a>
                                    </div>
                                    <div class="service-item__text">
                                        Recruitment solutions <br><span>(job board on <a href="#">atozforex</a>.com)</span>                                    </div>
                                </div>
                                                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	

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

<div id="fb-root" class=" fb_reset"><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div><iframe name="fb_xdm_frame_http" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" id="fb_xdm_frame_http" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" src="http://staticxx.facebook.com/connect/xd_arbiter/r/P5DLcu0KGJB.js?version=42#channel=f2c99b230f5615c&amp;origin=http%3A%2F%2Fatozforex.com" style="border: none;"></iframe><iframe name="fb_xdm_frame_https" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" src="https://staticxx.facebook.com/connect/xd_arbiter/r/P5DLcu0KGJB.js?version=42#channel=f2c99b230f5615c&amp;origin=http%3A%2F%2Fatozforex.com" style="border: none;"></iframe></div></div><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div></div></div></div><iframe id="rufous-sandbox" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen="true" style="position: absolute; visibility: hidden; display: none; width: 0px; height: 0px; padding: 0px; border: none;"></iframe><div style="display: none; visibility: hidden;"><script src="//load.sumome.com/" data-sumo-site-id="ec6a8af56b86e9c5373ef7fb505345b791680bbd631e100d284f500e150a2b1a" async="async"></script></div>
<script type="text/javascript" id="">var _d_site=_d_site||"B3920413C75C487FAC3AE72D";(function(a,e,b,c,d){a[b]=a[b]||function(){(a[b].q=a[b].q||[]).push(arguments)};c=e.createElement("script");c.async=1;c.src="//widget.privy.com/assets/widget.js";d=e.getElementsByTagName("script")[0];d.parentNode.insertBefore(c,d)})(window,document,"Privy");</script>

<script type="text/javascript" id="">(function(a,c,e,f,d,b){a.hj=a.hj||function(){(a.hj.q=a.hj.q||[]).push(arguments)};a._hjSettings={hjid:207461,hjsv:5};d=c.getElementsByTagName("head")[0];b=c.createElement("script");b.async=1;b.src=e+a._hjSettings.hjid+f+a._hjSettings.hjsv;d.appendChild(b)})(window,document,"//static.hotjar.com/c/hotjar-",".js?sv\x3d");</script>
<iframe id="sumome-jquery-iframe" style="display: none;"></iframe><div id="ads"></div><a href="javascript:void(0);" title="SumoMe" style="background-color: rgb(0, 115, 183); border-radius: 3px 0px 0px 3px; box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 10px; position: fixed; z-index: 2147483647; padding: 0px; width: 44px; height: 40px; text-indent: -10000px; opacity: 1; display: none !important;"><span style="display:block;width:40px;height:40px;background:white;margin-left:4px;-webkit-border-radius: 3px 0 0 3px;-moz-border-radius: 3px 0 0 3px;-ms-border-radius: 3px 0 0 3px;-o-border-radius: 3px 0 0 3px;border-radius: 3px 0 0 3px;background-repeat:no-repeat;background-position:8px 8px;background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAPBJREFUeNpi/P//PwMtAeOoBSPAAobi7fVAuomh15OwTcXbO4AkMxCXEam+mAlIaQLxNCCHkQjDy4G4hAT1liALDgBxBhDPAwoy41BcDzUcBjLwWoJwzAGYBSCQAMSLMCwp3l4BJBuwGIPdEoThIHCAESr4DEhKQgWXAXEiMIx/AcXLgOxOAiE9A4izwHGCavgbIBaDWbAESEYjadoMxHuAeCKRiQVkyUe0YFwLtDSEBeYVNAt8oZhYkIFFDBz0TMgcKgMkC3o97wDJp1Q0HBT+V5F9wAANc2qBg7CMyITuJWoGD10sGC2uRy2gHAAEGACB725KrIq6EgAAAABJRU5ErkJggg==);"></span></a><iframe style="display: none;"></iframe><div style="position:fixed; top:0; left:0; overflow:hidden;"><input style="position:absolute; left:-300px;" type="text" value="" id="focus_retriever" readonly="true"></div></body>

</div>
<?php get_footer(); ?>