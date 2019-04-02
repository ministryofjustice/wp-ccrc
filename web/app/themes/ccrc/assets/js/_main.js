/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 *
 * Google CDN, Latest jQuery
 * To use the default WordPress version of jQuery, go to lib/config.php and
 * remove or comment out: add_theme_support('jquery-cdn');
 * ======================================================================== */

import 'bootstrap';
import 'bootstrap/js/dist/collapse';

(function ($) {

// Use this variable to set up the common and page specific functions. If you
// rename this variable, you will also need to rename the namespace below.
    var Roots = {
        // All pages
        common: {
            init: function () {
                // JavaScript to be fired on all pages
            }
        },
        // Home page
        home: {
            init: function () {
                // JavaScript to be fired on the home page
            }
        },
        // Home page
        page_id_12: {
            init: function () {
                $.get(ajax_url + '?action=get_offences_terms', ccrc_run.offences);
            }
        },
        // About us page, note the change from about-us to about_us.
        about_us: {
            init: function () {
                // JavaScript to be fired on the about us page
            }
        }
    };

// The routing fires all common scripts, followed by the page specific scripts.
// Add additional events for more control over timing e.g. a finalize event
    var UTIL = {
        fire: function (func, funcname, args) {
            var namespace = Roots;
            funcname = (funcname === undefined) ? 'init' : funcname;
            if (func !== '' && namespace[func] && typeof namespace[func][funcname] === 'function') {
                namespace[func][funcname](args);
            }
        },
        loadEvents: function () {
            UTIL.fire('common');

            $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function (i, classnm) {
                UTIL.fire(classnm);
            });
        }
    };

    $(document).ready(UTIL.loadEvents);

    //Add class to last menu item for old IE
    $('.navbar-default .navbar-nav li:last-child a, .news ul li:last-child').addClass('last-child');

})(jQuery); // Fully reference jQuery after this point.

var ccrc_run = {
    offences: function (data, text_status) {
        if (text_status === "success") {
            var array = [], item;
            for (item in data) {
                array.push(ccrc_run.entities(data[item]));
            }

            $('.typeahead').autocomplete({
                source: array,
                autoFocus: true,
                create: ccrc_run.offenceCountInit,
                open: ccrc_run.offenceCount,
                close: ccrc_run.offenceCountDestroy
            });
        }
    },
    offenceCountInit: function(event, ui) {
        var len = $('.ui-autocomplete > li').length, ele, digit, text;
        digit = $('<span />').attr('class', 'digit').text(len);
        text = $('<span />').attr('class', 'text').text(' results)');
        ele = $('<span />')
            .attr('id', 'offence_counter')
            .html('&nbsp;&nbsp;&nbsp;(')
            .append(digit)
            .append(text);

        $('#prefetch label').append(ele);
        if (len === 0) {
            $('#offence_counter').hide();
        }
        console.log('created #offence_counter');
    },
    offenceCount: function (event, ui) {
        var len = $('.ui-autocomplete > li').length;

        if ($('#offence_counter').length === 0) {
            ccrc_run.offenceCountInit(null, null);
        }

        if (len > 0) {
            $('#offence_counter').show();
            $('#offence_counter .digit').text(len);
        }
        else {
            $('#offence_counter').hide();
        }

    },
    offenceCountDestroy: function(event, ui) {
        $('#offence_counter').remove();
    },
    entities: function (string) {
        var textarea = document.createElement('textarea');
        textarea.innerHTML = string;
        return textarea.value;
    }
};
