jQuery(function($) {
    'use strict';
    tinymce.PluginManager.add('my_mce_button', function( editor, url ) {
        editor.addButton( 'my_mce_button', {
            text: 'Shortcodes',
            icon: 'premioThemes-icon',
            type: 'menubutton',
            menu: [
                {
                    text: 'Logo',
                    onclick: function() {
                        editor.windowManager.open( {
                            title: 'PremioThemes Shortcodes',
                            width: 350,
                            height: 50,
                            body: [
                                {
                                    type: 'checkbox',
                                    checked: false,
                                    id: 'logo_check',
                                    label: 'Display Logo ?'
                                }
                            ],
                            onsubmit: function( e ) {
                                if( $('#logo_check').attr('aria-checked') === 'true' ) {
                                    editor.insertContent( '[minigo-logo]');
                                }
                            }
                        });
                    }
                },
                {
                    text: 'Countdown',
                    onclick: function() {
                        editor.windowManager.open( {
                            title: 'PremioThemes Shortcodes',
                            width: 350,
                            height: 50,
                            body: [
                                {
                                    type: 'checkbox',
                                    checked: false,
                                    id: 'countdown_check',
                                    label: 'Display Countdown ?'
                                }
                            ],
                            onsubmit: function( e ) {
                                if( $('#countdown_check').attr('aria-checked') === 'true' ) {
                                    editor.insertContent( '[minigo-countdown]');
                                }
                            }
                        });
                    }
                },
                {
                    text: 'Subscribe Form',
                    onclick: function() {
                        editor.windowManager.open( {
                            title: 'PremioThemes Shortcodes',
                            width: 350,
                            height: 50,
                            body: [
                                {
                                    type: 'checkbox',
                                    checked: false,
                                    id: 'subscribe_check',
                                    label: 'Display Subscribe Form ?'
                                }
                            ],
                            onsubmit: function( e ) {
                                if( $('#subscribe_check').attr('aria-checked') === 'true' ) {
                                    editor.insertContent( '[minigo-subscribe-form]');
                                }
                            }
                        });
                    }
                },
                {
                    text: 'Contact Information',
                    onclick: function() {
                        editor.windowManager.open( {
                            title: 'PremioThemes Shortcodes',
                            width: 350,
                            height: 50,
                            body: [
                                {
                                    type: 'checkbox',
                                    checked: false,
                                    id: 'contact_info_check',
                                    label: 'Contact Information ?'
                                }
                            ],
                            onsubmit: function( e ) {
                                if( $('#contact_info_check').attr('aria-checked') === 'true' ) {
                                    editor.insertContent( '[minigo-contact-info]');
                                }
                            }
                        });
                    }
                },
                {
                    text: 'Contact Form',
                    onclick: function() {
                        editor.insertContent( '[minigo-contact-form]');
                    }
                },
                {
                    text: 'Button',
                    onclick: function() {
                        editor.windowManager.open({
                            title: 'Button',
                            width: 500,
                            height: 500,
                            body: [
                                {
                                    type: 'textbox',
                                    name: 'textBtn',
                                    label: 'Text'
                                },
                                {
                                    type: 'textbox',
                                    name: 'urlButton',
                                    label: 'URL Link'
                                },
                                {
                                    type: 'textbox',
                                    name: 'customBtnClass',
                                    label: 'Custom class'
                                },
                                {
                                    type: 'checkbox',
                                    name: 'openWindow',
                                    label: 'Open in new Window'
                                }
                            ],
                            onsubmit: function( e ) {
                                if( e.data.openWindow ) {
                                    var newWindow = 'target="_blank"';
                                }
                                editor.insertContent( '<a href="' + e.data.urlButton + '" '+ newWindow +' class="btn ' + e.data.customBtnClass + '">' + e.data.textBtn + '</a>');
                            }
                        });
                    }
                },
            ]
        });
    });
});