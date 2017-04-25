/* global redux_change, wp */

jQuery(document).ready(function () {

    if( jQuery('.buyer-informer').length > 0 ) {
    	// var notifier_icon = jQuery('<i class="el-icon-info-sign"></i>');
        // notifier_icon.appendTo('#10_section_group_li_a span');
        jQuery('#10_section_group_li_a .el-icon-upload').removeClass('el-icon-upload').addClass('el-icon-info-sign');
    }

    jQuery('#premiothemes_comingsoon_minigo-premio_verify_user').parent().parent().children('th').remove();
    jQuery('#premiothemes_comingsoon_minigo-premio_verify_user').parent().parent().children('td').attr('colspan', '100%');

});