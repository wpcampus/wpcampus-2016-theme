jQuery(document).ready(function(e){var n=jQuery("#wpc-header"),a=jQuery("#wpcampus-2016-main-menu");jQuery(".toggle-main-menu").on("touchstart click",function(e){e.stopPropagation(),e.preventDefault(),n.hasClass("open-menu")?(n.removeClass("open-menu"),a.slideUp(400)):(n.addClass("open-menu"),a.slideDown(400))})});