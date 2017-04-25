jQuery(function($) {
    'use strict';

    var form;
    var fieldset = jQuery('.minigo_subscriber_list_form');
    var textarea = fieldset.find('textarea');
    var submit = fieldset.find('input[type="submit"]');
    var takeSpans = jQuery('body.wp-admin #premiothemes_comingsoon_minigo-switch-themes ul li span');

    var MinigoDefault = [];
    var MinigoLight = [];

    MinigoDefault = {"comingsoon-enabled":"coming_soon","display-on":"all","custom-urls-mode":"whitelist","custom-urls-list":"","switch-themes":"minigo-default","site-title":"MiniGO - Uber Minimal Flat Coming Soon WP Plugin","logo":{"url":""},"logo-width":"141","logo-height":"141","favicon":{"url":""},"logo-on-loading":1,"loader-animation":1,"gradient-loader":0,"gradient-loading-backgrounds":{"from":"#928EAA","to":"#4D6168"},"gradient-loader-color-degree":270,"custom-css":"","custom-html":"","contentBackground":0,"content-width":0,"site-page-width":"970","content-units":"px","front-page-content":"[minigo-logo]\n\n<h3>Welcome to MiniGO, a clean, modern coming soon template.<\/h3>\n\n[minigo-countdown]\n\n[minigo-subscribe-form]","close-button-label":"CLOSE","close-button-icon":"fa-times-circle","left-page-enabled":1,"left-page-label":"ABOUT","left-page-icon":"fa-info-circle","left-page-title":"Who we are","left-page-content":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eget nibh at libero fringilla adipiscing nec ut leo. Etiam nec purus arcu. Morbi sollicitudin at risus id malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Etiam sed tincidunt arcu. Donec molestie ante sapien, sed molestie est euismod eget. Maecenas ac metus accumsan, scelerisque massa sed, porta est. Aliquam ut mollis mi. Cras id vulputate purus, ac sollicitudin ante.\n\nInteger condimentum eu lectus quis semper. Sed id metus magna. Morbi ultrices magna id euismod hendrerit. Pellentesque nec mattis odio, vitae laoreet metus. Sed eget sollicitudin est, vitae accumsan nisi. Fusce consequat imperdiet venenatis. Integer mollis hendrerit facilisis. Praesent vel mattis enim. Integer fringilla et urna vitae rutrum.","right-page-enabled":1,"right-page-label":"CONTACT","right-page-icon":"fa-envelope","right-page-title":"Get in touch","right-page-content":"[minigo-contact-info]\n\n[minigo-contact-form]","countdown-enabled":1,"countdown-type":"default","switch-charts":0,"chart-line-width":"6","countdown-startDate":"01\/10\/2015","countdown-startHour":"23","countdown-startMinutes":"59","countdown-targetDate":"01\/24\/2015","countdown-targetHour":"23","countdown-targetMinutes":"59","countdown-labels":"Days,Hours,Minutes,Seconds","background-color":"#000000","background-type":"color","background-slideshow-duration":10,"background-slideshow-kenburns-minScale":1.2,"background-slideshow-kenburns-maxScale":1.7,"background-slideshow-kenburns-minMove":5,"background-slideshow-kenburns-maxMove":15,"background-video-imageFallback":{"url":""},"background-video-volume":0,"background-video-mp4":{"url":""},"background-video-webm":{"url":""},"background-video-ogg":{"url":""},"background-youtube-url":"http:\/\/www.youtube.com\/watch?v=ab0TSkLe-E0","background-youtube-startAt":0,"background-youtube-endAt":0,"gradient-color-switch":1,"gradient-opacity":0.2,"gradient-color-degree":270,"background-pattern":"off","background-patternPreset":"","background-patternCustom":{"url":""},"background-pattern-opacity":0.2,"enable-visual-settings":0,"heading-1":{"font-family":"Lato","font-weight":"100","font-size":"60"},"heading-2":{"font-family":"Lato","font-weight":"300","font-size":"36"},"heading-3":{"font-family":"Lato","font-weight":"300","font-size":"30"},"heading-4":{"font-family":"Lato","font-weight":"300","font-size":"24"},"heading-5":{"font-family":"Lato","font-weight":"300","font-size":"20"},"heading-6":{"font-family":"Lato","font-weight":"300","font-size":"18"},"paragraph-styles":{"font-family":"Lato","font-weight":"300","font-size":"18"},"countdown-numbers":{"font-family":"Lato","font-weight":"400"},"ctw-border":{"border-width":"1","border-style":"solid","border-color":"#fff"},"countdown-typo-labels":{"font-family":"Lato","font-weight":"300"},"prgbar-bg":{"background":"#fff"},"prgbar-border":{"border-width":"1","border-style":"solid","border-color":"#fff"},"side-btns":{"font-family":"Lato","font-weight":"300","font-size":"16px"},"btn-typo":{"font-family":"Lato","font-size":"22px","font-weight":"400"},"btn-border":{"border-color":"#fff","border-width":"1","border-style":"solid"},"btn-hvr-border":{"border-color":"#fff","border-width":"1","border-style":"solid"},"btn-hvr-color":{"color":"#fff"},"input-typo":{"font-family":"Lato","font-weight":"300","font-size":"22px"},"input-border":{"border-color":"#fff","border-width":"1","border-style":"solid"},"input-hvr-border":{"border-color":"#fff","border-width":"1","border-style":"solid"},"contact_info":[{"title":"+1 555 85952","select":"fa-phone","sort":0},{"title":"mail@website.web","url":"mailto:mail@website.web","select":"fa-envelope-o","sort":1},{"title":"345 Rodeo Drive San Jose, CA 95111, USA","select":"fa-map-marker","force_row":1,"sort":2}],"contact-target-address":"","contact-from-address":"","contact-subject-prefix":"MiniGO message from - ","contact-form-name-label":"Your name","contact-form-email-label":"Your e-mail address","contact-form-message-label":"Message","contact-form-button-label":"SEND MESSAGE","contact-form-success-message":"Message sent!","subscribe-form-title":"Get Notified","subscribe-form-email-label":"Your e-mail address","subscribe-form-button-label":"GO","subscribe-form-success-message":"Got it, thank you","subscribe-use_Mailchimp":0,"subscribe-Mailchimp_API_Key":"abc123abc123abc123abc123abc123-us1","subscribe-Mailchimp_list_ID":"b1234346","subscribe-Mailchimp_double_optin":0,"subscribe-Mailchimp_send_welcome":0,"form-validation-required":"This field is required.","form-validation-email":"Please enter a valid email address.","enable-audio":0,"audio-switch":"local","audio-volume":0.2,"audio-controls":1,"audio-autoplay":0,"audio-loop":0,"footer_links":[{"title":"Follow us on Twitter","url":"#","sort":"0","select":"fa-twitter","color":"","color:hover":"","border-color":"","border-color:hover":"","background":"","background:hover":""},{"title":"Like us on Facebook","url":"#","sort":"1","select":"fa-facebook","color":"","color:hover":"","border-color":"","border-color:hover":"","background":"","background:hover":""},{"title":"Join us on LinkedIn","url":"#","sort":"2","select":"fa-linkedin","color":"","color:hover":"","border-color":"","border-color:hover":"","background":"","background:hover":""},{"title":"Pinterest Pinboard","url":"#","sort":"3","select":"fa-pinterest","color":"","color:hover":"","border-color":"","border-color:hover":"","background":"","background:hover":""},{"title":"Our works on Dribbble","url":"#","sort":"4","select":"fa-dribbble","color":"","color:hover":"","border-color":"","border-color:hover":"","background":"","background:hover":""}],"load-other-assets":0,"strip-theme-assets":1,"section-custom-urls-start":"","section-custom-urls-end":"","left-page":"","right-page":"","chart-bar-color":"","chart-track-color":"","background-slideshow-gallery":"","gradient-color":"","section-headings-style":"","section-countdown-style":"","ctw-number-bg":"","progress-bar-section":"","section-buttons-style":"","btn-color":"","btn-bg":"","section-buttons-hvr-style":"","btn-bg-hover":"","section-input-style":"","input-color":"","input-bg":"","placeholder-color":"","section-input-hvr-style":"","input-hvr-color":"","input-hvr-bg":"","contact-form":"","subscribe-form":"","raw_info":"","global-form":"","audio-track":"","url-audio-track":"","song-name":"","meta-title":"","meta-description":"","analytics-code":"","whitelist-ips":"","purchase-key":"","premio_verify_user":"","last_tab":"","redux-backup":"1"};

    MinigoLight = {"last_tab":"0","comingsoon-enabled":"coming_soon","display-on":"all","custom-urls-mode":"whitelist","custom-urls-list":"","switch-themes":"minigo-dark","site-title":"MiniGO - Uber Minimal Flat Coming Soon WP Plugin","logo":{"url":"","id":"","height":"","width":"","thumbnail":""},"logo-width":"141","logo-height":"141","favicon":{"url":"","id":"","height":"","width":"","thumbnail":""},"logo-on-loading":"0","loader-animation":"0","gradient-loader":"1","gradient-loading-backgrounds":{"from":"#ffffff","to":"#ffffff"},"gradient-loader-color-degree":"270","custom-css":"                                            ","custom-html":"                                            ","contentBackground":"0","content-width":"0","site-page-width":"970","content-units":"px","front-page-content":"[minigo-logo]\r\n<h3>Welcome to MiniGO, a clean, modern coming soon template.<\/h3>\r\n[minigo-countdown]\r\n\r\n[minigo-subscribe-form]","close-button-label":"CLOSE","close-button-icon":"fa-times-circle","left-page-enabled":"1","left-page-label":"ABOUT","left-page-icon":"fa-info-circle","left-page-title":"Who we are","left-page-content":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eget nibh at libero fringilla adipiscing nec ut leo. Etiam nec purus arcu. Morbi sollicitudin at risus id malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Etiam sed tincidunt arcu. Donec molestie ante sapien, sed molestie est euismod eget. Maecenas ac metus accumsan, scelerisque massa sed, porta est. Aliquam ut mollis mi. Cras id vulputate purus, ac sollicitudin ante.\r\n\r\nInteger condimentum eu lectus quis semper. Sed id metus magna. Morbi ultrices magna id euismod hendrerit. Pellentesque nec mattis odio, vitae laoreet metus. Sed eget sollicitudin est, vitae accumsan nisi. Fusce consequat imperdiet venenatis. Integer mollis hendrerit facilisis. Praesent vel mattis enim. Integer fringilla et urna vitae rutrum.","right-page-enabled":"1","right-page-label":"CONTACT","right-page-icon":"fa-envelope","right-page-title":"Get in touch","right-page-content":"[minigo-contact-info]\r\n\r\n[minigo-contact-form]","countdown-enabled":"1","countdown-type":"default","switch-charts":"0","chart-bar-color":"","chart-track-color":"","chart-line-width":{"width":""},"countdown-startDate":"01\/10\/2015","countdown-startHour":"23","countdown-startMinutes":"59","countdown-targetDate":"01\/24\/2015","countdown-targetHour":"23","countdown-targetMinutes":"59","countdown-labels":"Days,Hours,Minutes,Seconds","background-color":"#000000","background-type":"color","background-slideshow-duration":"10","background-slideshow-kenburns-minScale":"1.2","background-slideshow-kenburns-maxScale":"1.7","background-slideshow-kenburns-minMove":"5","background-slideshow-kenburns-maxMove":"15","background-slideshow-gallery":"","background-video-imageFallback":{"url":"","id":"","height":"","width":"","thumbnail":""},"background-video-volume":"0","background-video-mp4":{"url":"","id":"","height":"","width":"","thumbnail":""},"background-video-webm":{"url":"","id":"","height":"","width":"","thumbnail":""},"background-video-ogg":{"url":"","id":"","height":"","width":"","thumbnail":""},"background-youtube-url":"http:\/\/www.youtube.com\/watch?v=ab0TSkLe-E0","background-youtube-startAt":"0","background-youtube-endAt":"0","gradient-color-switch":"1","gradient-color":{"from":"#ffffff","to":"#ffffff"},"gradient-opacity":"0.8","gradient-color-degree":"270","background-pattern":"off","background-patternPreset":"","background-patternCustom":{"url":"","id":"","height":"","width":"","thumbnail":""},"background-pattern-opacity":"0.2","enable-visual-settings":"1","heading-1":{"font-family":"Lato","font-options":"","google":"1","font-weight":"100","font-style":"","text-transform":"","font-size":"60px","color":"#000000"},"heading-2":{"font-family":"Lato","font-options":"","google":"1","font-weight":"300","font-style":"","text-transform":"","font-size":"36px","color":"#000000"},"heading-3":{"font-family":"Lato","font-options":"","google":"1","font-weight":"300","font-style":"","text-transform":"","font-size":"30px","line-height":"30px","color":"#000000"},"heading-4":{"font-family":"Lato","font-options":"","google":"1","font-weight":"300","font-style":"","text-transform":"","font-size":"24px","line-height":"24px","color":"#000000"},"heading-5":{"font-family":"Lato","font-options":"","google":"1","font-weight":"300","font-style":"","text-transform":"","font-size":"20px","line-height":"20px","color":"#000000"},"heading-6":{"font-family":"Lato","font-options":"","google":"1","font-weight":"300","font-style":"","text-transform":"","font-size":"18px","line-height":"18px","color":"#000000"},"paragraph-styles":{"font-family":"Lato","font-options":"","google":"1","font-weight":"300","font-style":"","font-size":"18px","line-height":"18px","color":"#000000"},"countdown-numbers":{"font-family":"Lato","font-options":"","google":"1","font-weight":"400","font-style":"","color":"#000000"},"ctw-number-bg":{"background-color":""},"ctw-border":{"border-top":"1px","border-right":"1px","border-bottom":"1px","border-left":"1px","border-style":"solid","border-color":"#000000"},"countdown-typo-labels":{"font-family":"Lato","font-options":"","google":"1","font-weight":"300","font-style":"","color":"#000000"},"prgbar-bg":{"background-color":"#000000"},"prgbar-border":{"border-top":"1px","border-right":"1px","border-bottom":"1px","border-left":"1px","border-style":"solid","border-color":"#000000"},"side-btns":{"font-family":"Lato","font-options":"","google":"1","font-weight":"300","font-style":"","font-size":"16px"},"btn-typo":{"font-family":"Lato","font-options":"","google":"1","font-weight":"400","font-style":"","font-size":"22px"},"btn-border":{"border-top":"1px","border-right":"1px","border-bottom":"1px","border-left":"1px","border-style":"solid","border-color":"#000000"},"btn-color":"#000000","btn-bg":[],"btn-hvr-border":{"border-top":"1px","border-right":"1px","border-bottom":"1px","border-left":"1px","border-style":"solid","border-color":"#000000"},"btn-hvr-color":"#ffffff","btn-bg-hover":{"background-color":"#000000"},"input-typo":{"font-family":"Lato","font-options":"","google":"1","font-weight":"300","font-style":"","font-size":"22px"},"input-border":{"border-top":"1px","border-right":"1px","border-bottom":"1px","border-left":"1px","border-style":"solid","border-color":"#000000"},"input-color":"#000000","input-bg":[],"placeholder-color":"#000000","input-hvr-border":{"border-top":"1px","border-right":"1px","border-bottom":"1px","border-left":"1px","border-style":"solid","border-color":"#000000"},"input-hvr-color":"#000000","input-hvr-bg":[],"contact_info":[{"title":"+1 555 85952","url":"","sort":"0","select":"fa-phone"},{"title":"mail@website.web","url":"mailto:mail@website.web","sort":"1","select":"fa-envelope-o"},{"title":"345 Rodeo Drive San Jose, CA 95111, USA","url":"","sort":"2","select":"fa-map-marker","force_row":"1"}],"contact-target-address":"","contact-from-address":"","contact-subject-prefix":"MiniGO message from - ","contact-form-name-label":"Your name","contact-form-email-label":"Your e-mail address","contact-form-message-label":"Message","contact-form-button-label":"SEND MESSAGE","contact-form-success-message":"Message sent!","subscribe-form-title":"Get Notified","subscribe-form-email-label":"Your e-mail address","subscribe-form-button-label":"GO","subscribe-form-success-message":"Got it, thank you","subscribe-use_Mailchimp":"0","subscribe-Mailchimp_API_Key":"abc123abc123abc123abc123abc123-us1","subscribe-Mailchimp_list_ID":"b1234346","subscribe-Mailchimp_double_optin":"0","subscribe-Mailchimp_send_welcome":"0","form-validation-required":"This field is required.","form-validation-email":"Please enter a valid email address.","enable-audio":"0","audio-switch":"local","audio-track":{"url":"","id":"","height":"","width":"","thumbnail":""},"url-audio-track":"","song-name":"","audio-volume":"0.2","audio-controls":"1","audio-autoplay":"0","audio-loop":"0","footer_links":[{"title":"Follow us on Twitter","url":"#","sort":"0","select":"fa-twitter","color":"#000000","color:hover":"#ffffff","border-color":"#000000","border-color:hover":"#000000","background":"","background:hover":"#000000"},{"title":"Like us on Facebook","url":"#","sort":"1","select":"fa-facebook","color":"#000000","color:hover":"#ffffff","border-color":"#000000","border-color:hover":"#000000","background":"","background:hover":"#000000"},{"title":"Join us on LinkedIn","url":"#","sort":"2","select":"fa-linkedin","color":"#000000","color:hover":"#ffffff","border-color":"#000000","border-color:hover":"#000000","background":"","background:hover":"#000000"},{"title":"Pinterest Pinboard","url":"#","sort":"3","select":"fa-pinterest","color":"#000000","color:hover":"#ffffff","border-color":"#000000","border-color:hover":"#000000","background":"","background:hover":"#000000"},{"title":"Our works on Dribbble","url":"#","sort":"4","select":"fa-dribbble","color":"#000000","color:hover":"#ffffff","border-color":"#000000","border-color:hover":"#000000","background":"","background:hover":"#000000"}],"meta-title":"","meta-description":"","analytics-code":"","load-other-assets":"0","strip-theme-assets":"1","whitelist-ips":"","purchase-key":"","section-custom-urls-start":"","section-custom-urls-end":"","left-page":"","right-page":"","section-headings-style":"","section-countdown-style":"","progress-bar-section":"","section-buttons-style":"","section-buttons-hvr-style":"","section-input-style":"","section-input-hvr-style":"","contact-form":"","subscribe-form":"","raw_info":"","global-form":"","premio_verify_user":"","redux-backup":"1"};


    var skinLIGHT = JSON.stringify(MinigoLight);
    var skinDEFAULT = JSON.stringify(MinigoDefault);

    var spanCount = jQuery('body.wp-admin #premiothemes_comingsoon_minigo-switch-themes ul li').length;

    takeSpans.each(function(spanCount) {
        var that = jQuery(this);
        var spanSlice = that.text().split(' - ');
        var skinAppend = jQuery('<div class="skin-text"><span>Skin</span> #'+ ++spanCount +'</div>');

        skinAppend.appendTo(that.parents('label'));
        jQuery('<div class="skin-images"></div>').prependTo(that.parents('label'));
        jQuery('<a target="_blank" href="http://premiothemes.com/demos/minigo-html/demo-'+ spanCount +'.html" class="button skin-preview"><i class="fa fa-eye"></i> Preview</a><a class="button demo-content-mod">Load Skin</a>').appendTo(that.parents('label'));
        that.text(spanSlice[0]).css({'font-weight': 'bold'}).addClass('skin-title');
        jQuery('<span>'+ spanSlice[1] +'</span>').insertAfter(that);

        if( that.parents('label').find('.skin-preview').attr('href') === 'http://premiothemes.com/demos/minigo-html/demo-2.html' ) {
            that.parents('label').find('.skin-preview').attr('href', 'http://premiothemes.com/demos/minigo-html/demo-4.html')
        }

    });

    jQuery('body.wp-admin #premiothemes_comingsoon_minigo-switch-themes ul li label').each(function() {
        if( jQuery(this).children('input').is(':checked') ) {
            jQuery(this).parent().addClass('active-field');
        }

    });

    /* Modal Skins */
    jQuery('.demo-content-mod').each(function() {

        var disclaimer = 'This is a disclaimer text demo',
            skinModalTitle = '<h1>Demo Loader: '+ jQuery(this).parents('label').children('.skin-title').text() +'</h1>',
            skinModalSubtitle = '<span>This feature allows you to replicate our demo for this file.</span>',
            skinModalInformation = '<p>We craft each one of our theme skins with great care in the hopes of saving some set-up time. So, if you want to use this skin as a base, you can import all our settings and assets, then proceed to customizing it to your needs.</p>',
            disclaimerInfo = '<div class="notice-yellow">Note: Importing a demo will overwrite all MiniGO settings! If this is a fresh instalation ignore this warning, however if you already added text you’d like to keep, either back it up in a text file or use the Import/Export feature.</div>';

        jQuery(this).on('click', function() {

            var skinModModal = jQuery('<div id="'+ jQuery(this).parents('label').children('.skin-title').text() +'" class="skin-modal-holder"><div class="skin-modal-body"><div class="modal-body">'+ skinModalTitle +''+ skinModalSubtitle +''+ skinModalInformation +''+ disclaimerInfo +'<span class="copy-options">Copy options to your server ?</span><div class="import-switcher"><a href="javascript:void(0);" class="button">Yes</a><a href="javascript:void(0);" class="button disable">No</a></div></div><div class="modal-buttons"><a href="javascript:void(0);" class="skin-closer button">Cancel</a><a href="javascript:void(0);" class="skin-import-btn button preview_btn disabled">Confirm</a></div></div></div>');
            skinModModal.appendTo('body');

            jQuery('.skin-closer').on('click', function() {
                skinModModal.remove();
            });

            jQuery('.modal-body .import-switcher > a:first-child').on('click', function() {
                jQuery(this).addClass('enable');
                jQuery('.modal-body .import-switcher > a:last-child').removeClass('disable');
                jQuery('.skin-import-btn').removeClass('disabled');
            });
            jQuery('.modal-body .import-switcher > a:last-child').on('click', function() {
                jQuery(this).addClass('disable');
                jQuery('.modal-body .import-switcher > a:first-child').removeClass('enable');
                jQuery('.skin-import-btn').addClass('disabled');
            });

            jQuery('.skin-import-btn').on('click', function() {
                var skinLoader;
                if( jQuery('.skin-modal-holder').attr('id') === 'MinigoDefault' ) {
                    skinLoader = skinDEFAULT;
                }
                else if( jQuery('.skin-modal-holder').attr('id') === 'MinigoLight' ) {
                    jQuery('#premiothemes_comingsoon_minigo[defaults]').trigger('click');
                    skinLoader = skinLIGHT;
                }
               
                if( !jQuery(this).hasClass('disabled') ) {
                    jQuery('#redux-import-code-button').trigger('click');
                    jQuery('textarea#import-code-value').val(skinLoader);
                    setTimeout(function() {
                        jQuery('#redux-import').trigger('click');
                    }, 300);
                }
            });

        });
    });

    setTimeout(function() {
        form = jQuery('<form action="' + window.location.href + '" method="post"></form>');
        fieldset.wrap(form);
        form = fieldset.parent();

        form.on('submit', function(e) {
            fieldset.find('textarea').attr('name', 'minigo_subscriber_list');
            form.off(e);
            form.submit();
        });
    }, 2000);
    textarea.off('change click submit');
    submit.off('click submit change');

    /* Footer buttons */
    $('#redux-footer').prepend('<div class="minigo-footer-buttons"></div>');
    $('.minigo-footer-buttons').append($('#redux-intro-text .button').clone());

    /* Top icons */
    $('#redux-header').append($('.premiothemes-logo').css('display', '')).append('<div class="nav-icons">' +
            '<div class="vr"></div>' +
            '<a href="mailto:hello@premiothemes.com"><i class="fa fa-pencil-square-o"></i><span>E-mail Support</span></a>' +
            '<a href="http://themeforest.net/user/PremioThemes?ref=PremioThemes" target="_blank"><i class="fa fa-star"></i><span>ThemeForest Portfolio</span></a>' +
            '<div class="vr"></div>' +
            '<a href="https://www.facebook.com/PremioThemes" target="_blank"><i class="fa fa-facebook-square"></i><span>Facebook</span></a>' +
            '<a href="https://twitter.com/premiothemes" target="_blank"><i class="fa fa-twitter-square"></i><span>Twitter</span></a>' +
            '<a href="https://www.pinterest.com/premiothemes/" target="_blank"><i class="fa fa-pinterest"></i><span>Pinterest</span></a>' +
            '<div class="vr"></div>' +
      '</div>');

    /* Language Switcher */
    jQuery('#premiothemes_comingsoon_minigo-lang-switcher').each(function() {
        jQuery(this).parents('tr').addClass('premio--lang-switcher');
        jQuery(this).parents('tr').prependTo('.nav-icons');

        var inputLang = jQuery(this).find('input:checked').attr('value').toLowerCase();

        jQuery(this).find('label').each(function() {
            var splitter = jQuery(this).attr('for').split('lang-switcher-buttonset');
            
            jQuery(this).append('<strong>'+ splitter[1] +'</strong>');
            jQuery(this).addClass(splitter[1]);
        });

        jQuery(this).find('label.' + inputLang).addClass('active-lang');

        jQuery('#redux-header .display_header > span h3').append('<small class="header-lang">Your current language is <strong>'+ inputLang +'</strong></small>');

    });

    /* Fix for wrong wp_editor height */
    $(window).on('load', function() {
        setTimeout(function() {
            var editors = $('.mceIframeContainer iframe');
            if(!editors.length) {
                return;
            }

            editors.each(function() {
                var el = $(this);

                if(el.css('height') !== '28px') {
                    return;
                }

                el.css('height', '300px').parents('.mceLayout').css('height', '');
            });
        }, 1000)
    });

});