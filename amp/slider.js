var td_blocks = [];

function td_block() {
    this.id = '';
    this.block_type = 1;
    this.atts = '';
    this.td_column_number = '';
    this.td_current_page = 1;
    this.post_count = 0;
    this.found_posts = 0;
    this.max_num_pages = 0;
    this.td_filter_value = '';
    this.td_filter_ui_uid = '';
    this.is_ajax_running = false;
    this.td_user_action = '';
    this.header_color = '';
    this.ajax_pagination_infinite_stop = '';
}
(function() {
    var html_tag = document.getElementsByTagName("html")[0];
    if (navigator.userAgent.indexOf("MSIE 10.0") > -1) {
        html_tag.className += ' ie10';
    }
    if ( !! navigator.userAgent.match(/Trident.*rv\:11\./)) {
        html_tag.className += ' ie11';
    }
    if (/(iPad|iPhone|iPod)/g.test(navigator.userAgent)) {
        html_tag.className += ' td-md-is-ios';
    }
    var user_agent = navigator.userAgent.toLowerCase();
    if (user_agent.indexOf("android") > -1) {
        html_tag.className += ' td-md-is-android';
    }
    if (navigator.userAgent.indexOf('Mac OS X') != -1) {
        html_tag.className += ' td-md-is-os-x';
    }
    if (/chrom(e|ium)/.test(navigator.userAgent.toLowerCase())) {
        html_tag.className += ' td-md-is-chrome';
    }
    if (navigator.userAgent.indexOf('Firefox') != -1) {
        html_tag.className += ' td-md-is-firefox';
    }
    if (navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1) {
        html_tag.className += ' td-md-is-safari';
    }
})();
var td_viewport_interval_list = [{
    "limit_bottom": 767,
    "sidebar_width": 228
}, {
    "limit_bottom": 1018,
    "sidebar_width": 300
}, {
    "limit_bottom": 1140,
    "sidebar_width": 324
}];
var td_animation_stack_effect = "type0";
var tds_animation_stack = true;
var td_animation_stack_specific_selectors = ".entry-thumb, img";
var td_animation_stack_general_selectors = "";
var td_ajax_url = "https:\/\/mpasho.co.ke\/wp-admin\/admin-ajax.php?td_theme_name=Newspaper&v=6.0";
var td_get_template_directory_uri = "https:\/\/mpasho.co.ke\/wp-content\/themes\/Newspaper";
var tds_snap_menu = "smart_snap_always";
var tds_logo_on_sticky = "show";
var tds_header_style = "3";
var td_please_wait = "Please wait...";
var td_email_user_pass_incorrect = "User or password incorrect!";
var td_email_user_incorrect = "Email or username incorrect!";
var td_email_incorrect = "Email incorrect!";
var tds_more_articles_on_post_enable = "show";
var tds_more_articles_on_post_time_to_wait = "";
var tds_more_articles_on_post_pages_distance_from_top = 2500;
var tds_theme_color_site_wide = "#000000";
var tds_smart_sidebar = "enabled";
var td_theme_v = "Ni4w";
var td_theme_n = "TmV3c3BhcGVy";
var td_magnific_popup_translation_tPrev = "Previous (Left arrow key)";
var td_magnific_popup_translation_tNext = "Next (Right arrow key)";
var td_magnific_popup_translation_tCounter = "%curr% of %total%";
var td_magnific_popup_translation_ajax_tError = "The content from %url% could not be loaded.";
var td_magnific_popup_translation_image_tError = "The image #%curr% could not be loaded.";
var td_ad_background_click_link = "";
var td_ad_background_click_target = "";
var td_uid_1_55c96c32ebd73_nr_of_slides = 6;
jQuery(document).ready(function() {
    jQuery("#td_uid_1_55c96c32ebd73 .td-slide-popup-gallery").magnificPopup({
        delegate: "a",
        type: "image",
        tLoading: "Loading image #%curr%...",
        mainClass: "mfp-img-mobile",
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0, 1]
        },
        image: {
            tError: "<a href='%url%'>The image #%curr%</a> could not be loaded.",
            titleSrc: function(item) {
                return item.el.attr("data-caption") + "<div>" + item.el.attr("data-description") + "<div>";
            }
        },
        zoom: {
            enabled: true,
            duration: 300,
            opener: function(element) {
                return element.find("img");
            }
        },
        callbacks: {
            change: function() {
                jQuery("#td_uid_1_55c96c32ebd73 .td-doubleSlider-1").iosSlider("goToSlide", this.currItem.index + 1);
            }
        }
    });
    jQuery("#td_uid_1_55c96c32ebd73 .td-doubleSlider-1").iosSlider({
        scrollbar: true,
        snapToChildren: true,
        desktopClickDrag: true,
        infiniteSlider: true,
        responsiveSlides: true,
        navPrevSelector: jQuery("#td_uid_1_55c96c32ebd73 .doubleSliderPrevButton"),
        navNextSelector: jQuery("#td_uid_1_55c96c32ebd73 .doubleSliderNextButton"),
        scrollbarHeight: "2",
        scrollbarBorderRadius: "0",
        scrollbarOpacity: "0.5",
        onSliderResize: td_gallery_resize_update_vars_td_uid_1_55c96c32ebd73,
        onSliderLoaded: doubleSlider2Load_td_uid_1_55c96c32ebd73,
        onSlideChange: doubleSlider2Load_td_uid_1_55c96c32ebd73,
        keyboardControls: true
    });
    jQuery("#td_uid_1_55c96c32ebd73 .td-doubleSlider-2 .td-button").each(function(i) {
        jQuery(this).bind("click", function() {
            jQuery("#td_uid_1_55c96c32ebd73 .td-doubleSlider-1").iosSlider("goToSlide", i + 1);
        });
    });
    if (td_uid_1_55c96c32ebd73_nr_of_slides > 7) {
        jQuery("#td_uid_1_55c96c32ebd73 .td-doubleSlider-2").iosSlider({
            desktopClickDrag: true,
            snapToChildren: true,
            snapSlideCenter: true,
            infiniteSlider: true
        });
    } else {
        jQuery("#td_uid_1_55c96c32ebd73 .td-doubleSlider-2").addClass("td_center_slide2");
    }

    function doubleSlider2Load_td_uid_1_55c96c32ebd73(args) {
        jQuery("#td_uid_1_55c96c32ebd73 .td-doubleSlider-2").iosSlider("goToSlide", args.currentSlideNumber);
        jQuery("#td_uid_1_55c96c32ebd73 .td-doubleSlider-2 .td-button .td-border").css("border", "3px solid #ffffff").css("opacity", "0.5");
        jQuery("#td_uid_1_55c96c32ebd73 .td-doubleSlider-2 .td-button").css("border", "0");
        jQuery("#td_uid_1_55c96c32ebd73 .td-doubleSlider-2 .td-button:eq(" + (args.currentSlideNumber - 1) + ") .td-border").css("border", "3px solid #ffffff").css("opacity", "1");
        td_gallery_write_current_slide_td_uid_1_55c96c32ebd73(args.currentSlideNumber);
    }

    function td_gallery_write_current_slide_td_uid_1_55c96c32ebd73(slide_nr) {
        jQuery("#td_uid_1_55c96c32ebd73 .td-gallery-slide-item-focus").html(slide_nr);
    }

    function td_gallery_resize_update_vars_td_uid_1_55c96c32ebd73(args) {
        if (td_detect.is_android) {
            setTimeout(function() {
                jQuery("#td_uid_1_55c96c32ebd73 .td-doubleSlider-1").iosSlider("update");
            }, 1500);
        }
    }
});

var td_uid_21_55c96c3338d49_nr_of_slides = 6;
jQuery(document).ready(function() {
    jQuery("#td_uid_21_55c96c3338d49 .td-slide-popup-gallery").magnificPopup({
        delegate: "a",
        type: "image",
        tLoading: "Loading image #%curr%...",
        mainClass: "mfp-img-mobile",
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0, 1]
        },
        image: {
            tError: "<a href='%url%'>The image #%curr%</a> could not be loaded.",
            titleSrc: function(item) {
                return item.el.attr("data-caption") + "<div>" + item.el.attr("data-description") + "<div>";
            }
        },
        zoom: {
            enabled: true,
            duration: 300,
            opener: function(element) {
                return element.find("img");
            }
        },
        callbacks: {
            change: function() {
                jQuery("#td_uid_21_55c96c3338d49 .td-doubleSlider-1").iosSlider("goToSlide", this.currItem.index + 1);
            }
        }
    });
    jQuery("#td_uid_21_55c96c3338d49 .td-doubleSlider-1").iosSlider({
        scrollbar: true,
        snapToChildren: true,
        desktopClickDrag: true,
        infiniteSlider: true,
        responsiveSlides: true,
        navPrevSelector: jQuery("#td_uid_21_55c96c3338d49 .doubleSliderPrevButton"),
        navNextSelector: jQuery("#td_uid_21_55c96c3338d49 .doubleSliderNextButton"),
        scrollbarHeight: "2",
        scrollbarBorderRadius: "0",
        scrollbarOpacity: "0.5",
        onSliderResize: td_gallery_resize_update_vars_td_uid_21_55c96c3338d49,
        onSliderLoaded: doubleSlider2Load_td_uid_21_55c96c3338d49,
        onSlideChange: doubleSlider2Load_td_uid_21_55c96c3338d49,
        keyboardControls: true
    });
    jQuery("#td_uid_21_55c96c3338d49 .td-doubleSlider-2 .td-button").each(function(i) {
        jQuery(this).bind("click", function() {
            jQuery("#td_uid_21_55c96c3338d49 .td-doubleSlider-1").iosSlider("goToSlide", i + 1);
        });
    });
    if (td_uid_21_55c96c3338d49_nr_of_slides > 7) {
        jQuery("#td_uid_21_55c96c3338d49 .td-doubleSlider-2").iosSlider({
            desktopClickDrag: true,
            snapToChildren: true,
            snapSlideCenter: true,
            infiniteSlider: true
        });
    } else {
        jQuery("#td_uid_21_55c96c3338d49 .td-doubleSlider-2").addClass("td_center_slide2");
    }

    function doubleSlider2Load_td_uid_21_55c96c3338d49(args) {
        jQuery("#td_uid_21_55c96c3338d49 .td-doubleSlider-2").iosSlider("goToSlide", args.currentSlideNumber);
        jQuery("#td_uid_21_55c96c3338d49 .td-doubleSlider-2 .td-button .td-border").css("border", "3px solid #ffffff").css("opacity", "0.5");
        jQuery("#td_uid_21_55c96c3338d49 .td-doubleSlider-2 .td-button").css("border", "0");
        jQuery("#td_uid_21_55c96c3338d49 .td-doubleSlider-2 .td-button:eq(" + (args.currentSlideNumber - 1) + ") .td-border").css("border", "3px solid #ffffff").css("opacity", "1");
        td_gallery_write_current_slide_td_uid_21_55c96c3338d49(args.currentSlideNumber);
    }

    function td_gallery_write_current_slide_td_uid_21_55c96c3338d49(slide_nr) {
        jQuery("#td_uid_21_55c96c3338d49 .td-gallery-slide-item-focus").html(slide_nr);
    }

    function td_gallery_resize_update_vars_td_uid_21_55c96c3338d49(args) {
        if (td_detect.is_android) {
            setTimeout(function() {
                jQuery("#td_uid_21_55c96c3338d49 .td-doubleSlider-1").iosSlider("update");
            }, 1500);
        }
    }
});
jQuery(document).ready(function() {
    jQuery("#td_uid_28_55c96c336ffb9").iosSlider({
        snapToChildren: true,
        desktopClickDrag: true,
        keyboardControls: false,
        responsiveSlideContainer: true,
        responsiveSlides: true,
        autoSlide: true,
        autoSlideTimer: 4000,
        infiniteSlider: true,
        navPrevSelector: jQuery("#td_uid_28_55c96c336ffb9 .prevButton"),
        navNextSelector: jQuery("#td_uid_28_55c96c336ffb9 .nextButton"),
    });
});

