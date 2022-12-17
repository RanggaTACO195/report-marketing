// Please see documentation at https://docs.microsoft.com/aspnet/core/client-side/bundling-and-minification
// for details on configuring this project to bundle and minify static web assets.

// Write your JavaScript code.
$(document).ready(function () {

    // SideNav Button Initialization
    //-----for slide sidenav 
    //$(".button-collapse").sideNav({
    //    slim: true 
    //});
    //-----------------

    //-----for normal sidenav 
 /*   $(".button-collapse").sideNav();*/
    //-----------------
    // End of SideNav Button Initialization


    // SideNav Scrollbar Initialization
    var sideNavScrollbar = document.querySelector('.custom-scrollbar');
  /*  var ps = new PerfectScrollbar(sideNavScrollbar);*/
});
// Data Picker Initialization

/*$(document).ready(function () {
    $('.datepicker').datepicker();
});*/

$(document).ready(function () {
    $('.mdb-select').materialSelect();
});

$('.carousel.carousel-multi-item.v-2 .carousel-item').each(function () {
    var next = $(this).next();
    if (!next.length) {
        next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));

    for (var i = 0; i < 4; i++) {
        next = next.next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));
    }
});

let curOpen;

$(document).ready(function () {
    curOpen = $('.step')[0];

    $('.next-btn').on('click', function () {
        let cur = $(this).closest('.step');
        let next = $(cur).next();
        $(cur).addClass('minimized');
        setTimeout(function () {
            $(next).removeClass('minimized');
            curOpen = $(next);
        }, 400);
    });

    $('.close-btn').on('click', function () {
        let cur = $(this).closest('.step');
        $(cur).addClass('minimized');
        curOpen = null;
    });

    $('.step .step-content').on('click', function (e) {
        e.stopPropagation();
    });

    $('.step').on('click', function () {
        if (!$(this).hasClass("minimized")) {
            curOpen = null;
            $(this).addClass('minimized');
        }
        else {
            let next = $(this);
            if (curOpen === null) {
                curOpen = next;
                $(curOpen).removeClass('minimized');
            }
            else {
                $(curOpen).addClass('minimized');
                setTimeout(function () {
                    $(next).removeClass('minimized');
                    curOpen = $(next);
                }, 300);
            }
        }
    });
});




(function ($) {
    "use strict"; // Start of use strict

    // Toggle the side navigation
    $("#sidebarToggle, #sidebarToggleTop").on('click', function (e) {
        $("body").toggleClass("sidebar-toggled");
        $(".sidebar").toggleClass("toggled");
        if ($(".sidebar").hasClass("toggled")) {
            $('.sidebar .collapse').collapse('hide');
        };
    });

    // Close any open menu accordions when window is resized below 768px
    $(window).resize(function () {
        if ($(window).width() < 768) {
            $('.sidebar .collapse').collapse('hide');
        };

        // Toggle the side navigation when window is resized below 480px
        if ($(window).width() < 480 && !$(".sidebar").hasClass("toggled")) {
            $("body").addClass("sidebar-toggled");
            $(".sidebar").addClass("toggled");
            $('.sidebar .collapse').collapse('hide');
        };
    });

    // Prevent the content wrapper from scrolling when the fixed side navigation hovered over
    $('body.fixed-nav .sidebar').on('mousewheel DOMMouseScroll wheel', function (e) {
        if ($(window).width() > 768) {
            var e0 = e.originalEvent,
                delta = e0.wheelDelta || -e0.detail;
            this.scrollTop += (delta < 0 ? 1 : -1) * 30;
            e.preventDefault();
        }
    });

    // Scroll to top button appear
    $(document).on('scroll', function () {
        var scrollDistance = $(this).scrollTop();
        if (scrollDistance > 100) {
            $('.scroll-to-top').fadeIn();
        } else {
            $('.scroll-to-top').fadeOut();
        }
    });

    // Smooth scrolling using jQuery easing
    $(document).on('click', 'a.scroll-to-top', function (e) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top)
        }, 1000, 'easeInOutExpo');
        e.preventDefault();
    });

})(jQuery); // End of use strictp



