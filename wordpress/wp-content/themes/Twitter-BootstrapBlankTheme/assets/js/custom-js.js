
  var current_page = 'home';

  // Globals
  var GLOB = {
        is_sticky : false,
        is_adminbar: false
      },
      jQuerydocument = jQuery(document),
      jQuerywindow = jQuery(window),
      jQueryheaderTop = jQuery('.header-top');
  
  // Search
  jQuerydocument.on('mouseenter click', '.searchsubmit', function() {
    // focus on hover and click
    var jQuerythis = jQuery(this),
        jQueryinput = jQuerythis.find('input');
    jQuerythis.addClass('active');
    jQueryinput.val().trim() === '' && jQueryinput.focus();
  })
  .on('mouseleave', '.searchsubmit', function() {
    // remove focus on mouseleave if input is empty
    var jQuerythis = jQuery(this);
    jQuerythis.find('input').val().trim() === '' && jQuerythis.removeClass('active');
  })
  .on('click', '#searchsubmit', function() {
    // prevent from triggering an empty search
    var jQueryform = jQuery(this).closest('form'),
        jQueryinput = jQueryform.find('input'),
        value = jQueryinput.val().trim();
    if (value === '') {
      jQueryinput.focus();
      return false;
    } else {
      jQueryform.submit();
    }
  });

  // Menu
  jQuerydocument.on('click', '.menu-toggle', function() {
    jQuery('header').toggle('slide');
    jQuery('.menu-toggle .fa-bars').toggle('show');
    jQuery('.menu-toggle .fa-times').toggle('show');
    jQuery('.menu-mobile-center').toggle('show');
    jQuery('.header-logo.mobile').toggle('hide');
  }).on('click', '.menu-all', function() {
    jQuery('.all-head-menu').toggle('slide');
    jQuery('.fa-bars').toggle('show');
    jQuery('.fa-times').toggle('show');
    jQuery('.header-logo.mobile').toggle('show');
  });
  
  // more efficient header scroll
  jQuerywindow.scroll(function() {
    var jQuerythis = jQuery(this),
        scroll = jQuerythis.scrollTop(),
        scroll_init = jQueryheaderTop.is(':visible') ? jQueryheaderTop.height() : 0;

    if (GLOB.is_sticky && scroll > scroll_init) {
      return;
    }
    
    var jQueryheader = jQuery('header'),
        jQuerypadding = jQuery('.header-padding');

    if (scroll > scroll_init) {
      jQueryheader.addClass('sticky');
      jQuerypadding.addClass('active');
      GLOB.is_adminbar && jQueryheader.addClass('admin');
      GLOB.is_sticky = true;
    } else {
      jQueryheader.removeClass('sticky');
      jQuerypadding.removeClass('active');
      GLOB.is_sticky = false;
    }
  });
  
  // Ignore # links
  jQuerydocument.on('click', 'a[href="#"]', function(e) {
    e.preventDefault();
  })
  
  var form_subscribtion = function(jQueryform, e, action) {
    var email = jQueryform.find('input').val(),
        emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?jQuery/;
    
    e.preventDefault();
		document.activeElement.blur();
		jQuery('input').blur();
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
			jQuery.post(ajaxurl, {
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

  jQuerydocument.on('click', '#form-exclusive-updates input[type="button"]', function(e) {
    form_subscribtion(jQuery(this).closest('form'), e, 'subscribe_from_home_page_email');
  });
  
  jQuerydocument.on('click', '#form-signals input[type="button"]', function(e) {
    form_subscribtion(jQuery(this).closest('form'), e, 'subscribe_to_signals');
  });
  
  jQuerydocument.on('click', '.user-profile', function() {
    var jQuerythis = jQuery(this),
        jQuerymenu = jQuerythis.find('.user-menu');
    
    if (jQuerymenu.hasClass('active')) {
      jQuerymenu.removeClass('active').slideUp();
    } else {
      jQuerymenu.addClass('active').slideDown();
    }
  });
  
  // INIT
  jQuery(function(){
    // set adminbar
    GLOB.is_adminbar = jQuery('#wpadminbar').length > 0;
  });
  
  
  
  
  
  var current_page = 'home';

  // Globals
  var GLOB = {
        is_sticky : false,
        is_adminbar: false
      },
      jQuerydocument = jQuery(document),
      jQuerywindow = jQuery(window),
      jQueryheaderTop = jQuery('.header-top');
  
  // Search
  jQuerydocument.on('mouseenter click', '.searchsubmit', function() {
    // focus on hover and click
    var jQuerythis = jQuery(this),
        jQueryinput = jQuerythis.find('input');
    jQuerythis.addClass('active');
    jQueryinput.val().trim() === '' && jQueryinput.focus();
  })
  .on('mouseleave', '.searchsubmit', function() {
    // remove focus on mouseleave if input is empty
    var jQuerythis = jQuery(this);
    jQuerythis.find('input').val().trim() === '' && jQuerythis.removeClass('active');
  })
  .on('click', '#searchsubmit', function() {
    // prevent from triggering an empty search
    var jQueryform = jQuery(this).closest('form'),
        jQueryinput = jQueryform.find('input'),
        value = jQueryinput.val().trim();
    if (value === '') {
      jQueryinput.focus();
      return false;
    } else {
      jQueryform.submit();
    }
  });

  // Menu
  jQuerydocument.on('click', '.menu-toggle', function() {
    jQuery('header').toggle('slide');
    jQuery('.menu-toggle .fa-bars').toggle('show');
    jQuery('.menu-toggle .fa-times').toggle('show');
    jQuery('.menu-mobile-center').toggle('show');
    jQuery('.header-logo.mobile').toggle('hide');
  }).on('click', '.menu-all', function() {
    jQuery('.all-head-menu').toggle('slide');
    jQuery('.fa-bars').toggle('show');
    jQuery('.fa-times').toggle('show');
    jQuery('.header-logo.mobile').toggle('show');
  });
  
  // more efficient header scroll
  jQuerywindow.scroll(function() {
    var jQuerythis = jQuery(this),
        scroll = jQuerythis.scrollTop(),
        scroll_init = jQueryheaderTop.is(':visible') ? jQueryheaderTop.height() : 0;

    if (GLOB.is_sticky && scroll > scroll_init) {
      return;
    }
    
    var jQueryheader = jQuery('header'),
        jQuerypadding = jQuery('.header-padding');

    if (scroll > scroll_init) {
      jQueryheader.addClass('sticky');
      jQuerypadding.addClass('active');
      GLOB.is_adminbar && jQueryheader.addClass('admin');
      GLOB.is_sticky = true;
    } else {
      jQueryheader.removeClass('sticky');
      jQuerypadding.removeClass('active');
      GLOB.is_sticky = false;
    }
  });
  
  // Ignore # links
  jQuerydocument.on('click', 'a[href="#"]', function(e) {
    e.preventDefault();
  })
  
  var form_subscribtion = function(jQueryform, e, action) {
    var email = jQueryform.find('input').val(),
        emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?jQuery/;
    
    e.preventDefault();
		document.activeElement.blur();
		jQuery('input').blur();
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
			jQuery.post(ajaxurl, {
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

  jQuerydocument.on('click', '#form-exclusive-updates input[type="button"]', function(e) {
    form_subscribtion(jQuery(this).closest('form'), e, 'subscribe_from_home_page_email');
  });
  
  jQuerydocument.on('click', '#form-signals input[type="button"]', function(e) {
    form_subscribtion(jQuery(this).closest('form'), e, 'subscribe_to_signals');
  });
  
  jQuerydocument.on('click', '.user-profile', function() {
    var jQuerythis = jQuery(this),
        jQuerymenu = jQuerythis.find('.user-menu');
    
    if (jQuerymenu.hasClass('active')) {
      jQuerymenu.removeClass('active').slideUp();
    } else {
      jQuerymenu.addClass('active').slideDown();
    }
  });
  
  // INIT
  jQuery(function(){
    // set adminbar
    GLOB.is_adminbar = jQuery('#wpadminbar').length > 0;
  });

