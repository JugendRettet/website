/*jslint browser: true*/
/*global $, jQuery, alert*/
/*jslint node: true */
'use strict';
//hide
$('#map, .mehr-klappe, .faq-klappe, .schiff-klappe, .popup, #cross').hide();
//faq
$('.faq').click(function () {
    var that = $(this);
    $('#' + $(this).attr('id') + '-klappe').slideToggle(400, function () {
        var offset = that.position().top,
            header = $('#header-back').height(),
            scrollto = offset - header + 19,
            nachweis = offset - header - 83;
        $('body').animate({
            scrollTop: scrollto
        }, 400);
        if (($(window).width() > 786) && ($('body').height() > $(window).height())) {
            if ($('#' + that.attr('id') + '-nachweis').is(':visible')) {
                $('#' + that.attr('id') + '-nachweis').slideUp(400).css('margin-top', '0');
            } else {
                $('#' + that.attr('id') + '-nachweis').css('margin-top', nachweis).slideDown(400);
            }
        } else if (($(window).width() <= 786) || ($('body').height() <= $(window).height())) {
            if ($('#' + that.attr('id') + '-nachweis').is(':visible')) {
                $('#' + that.attr('id') + '-nachweis').slideUp(400);
            } else {
                $('#' + that.attr('id') + '-nachweis').slideDown(400);
            }
        }
    });
    $('.faq-klappe:not(#' + that.attr('id') + '-klappe)').slideUp(400);
    $('#nachweis .faq-klappe:not(#' + that.attr('id') + '-nachweis)').slideUp(400);
    $('.faq').removeClass('open');
    that.toggleClass('open');
    return false;
    // prevent scrolling to top (on firefox)
});
//schiff
$('.schiff').click(function () {
    var that = $(this);
    $('#' + $(this).attr('id') + '-klappe').slideToggle(400, function () {
        var offset = that.position().top,
            header = $('#header-back').height(),
            scrollto = offset - header + 19,
            nachweis = offset - header - 83;
        if (($(window).width() > 786) && ($('body').height() > $(window).height())) {
            if ($('#' + that.attr('id') + '-nachweis').is(':visible')) {
                $('#' + that.attr('id') + '-nachweis').slideUp(400).css('margin-top', '0');
            } else {
                $('#' + that.attr('id') + '-nachweis').css('margin-top', nachweis).slideDown(400);
            }
        } else if (($(window).width() <= 786) || ($('body').height() <= $(window).height())) {
            if ($('#' + that.attr('id') + '-nachweis').is(':visible')) {
                $('#' + that.attr('id') + '-nachweis').slideUp(400);
            } else {
                $('#' + that.attr('id') + '-nachweis').slideDown(400);
            }
        }
    });
    $('.schiff-klappe:not(#' + that.attr('id') + '-klappe)').slideUp(400);
    $('#nachweis .schiff-klappe:not(#' + that.attr('id') + '-nachweis)').slideUp(400);
    $('.schiff').removeClass('open');
    that.toggleClass('open');
});
//mehr
$('.mehr').click(function () {
    var that = $(this);
    $('#' + $(this).attr('id') + ' .mehr-klappe').slideToggle(400, function () {
        $('.mehr:not(#' + that.attr('id') + ') .mehr-klappe').slideUp(400, function () {
            var offset = that.position().top,
                header = $('#pop-back').height(),
                margin = $('#pop-back').css('margin-top').replace('px', ''),
                scrollto = offset - header + 20 - margin;
            $('body').animate({
                scrollTop: scrollto
            }, 400);
        });
    });
    $('#' + $(this).attr('id') + ' .mehr-btn').toggleClass('opacity-zero');
    $('.mehr:not(#' + that.attr('id') + ') .mehr-btn').removeClass('opacity-zero');
});
$('.mehr#botschafter').click(function botschafter() {
    $('#map').slideToggle(400, function () {
        if ($('#map').hasClass('open')) {
            $('#map').removeClass('open');
            $('.plus-map').removeClass('open');
        } else {
            $('#map').addClass('open');
            $('.plus-map').addClass('open');
        }
    });
});
$('.mehr:not(#botschafter)').click(function () {
    location.hash = '';
    $('#map').removeClass('open');
    $('#map').slideUp(400, function () {
        $('.plus-map').removeClass('open');
    });
});
$(document).ready(function () {
    if (location.hash === '#botschafter') {
        $('body').animate({
            scrollTop: 0
        }, 400);
        $('#cross').removeClass('collapse').fadeIn(0);
        $('#cr-top-stroke').removeClass('rotate-close-top');
        $('#cr-bottom-stroke').removeClass('rotate-close-bottom');
        $('#content').addClass('fixed');
        $('#map, .plus-map').addClass('open');
        $('.indicator, header ul').addClass('pop');
        $('.popup#tun-pop').addClass('opacity-one');
        $('#header-back, #pop-back').addClass('blue');
        $('#botschafter .mehr-btn').addClass('opacity-zero');
        $('.popup#tun-pop, #botschafter .mehr-klappe, #map').slideDown();
    }
    if (location.hash === '#wie') {
        $('body').animate({
            scrollTop: 0
        }, 400);
        $('#cross').removeClass('collapse').fadeIn(0);
        $('#cr-top-stroke').removeClass('rotate-close-top');
        $('#cr-bottom-stroke').removeClass('rotate-close-bottom');
        $('#content').addClass('fixed');
        $('.indicator, header ul').addClass('pop');
        $('.popup#wie-btn-pop').addClass('opacity-one');
        $('#header-back, #pop-back').addClass('blue');
        $('.popup#wie-btn-pop').slideDown();
    }
});
//peek
$('.peek').click(function () {
    $(this).closest('li').toggleClass('indicator foot');
    $('.peekfield#' + $(this).attr('id') + '-peek').slideToggle(400);
    $('.peekfield:not(#' + $(this).attr('id') + '-peek)').slideUp(400);
});
//popup
$('.show').click(function () {
    var that = $(this);
    $('body').animate({
        scrollTop: 0
    }, 400);
    $('#cross').removeClass('collapse').fadeIn(400);
    $('#cr-top-stroke').removeClass('rotate-close-top');
    $('#cr-bottom-stroke').removeClass('rotate-close-bottom');
    $('.indicator, header ul').addClass('pop');
    $('#header-back, #pop-back').addClass('blue');
    $('.popup#' + $(this).attr('id') + '-pop').slideDown(400, function () {
        $('.popup#' + that.attr('id') + '-pop').addClass('opacity-one');
        $('#content').addClass('fixed');
    });
    $('.mehr-btn').removeClass('opacity-zero');
});
$('body, #cross').click(function () {
    var selection = window.getSelection();
    if (selection == 0) {
        location.hash = '';
        $('#cr-top-stroke').addClass('rotate-close-top');
        $('#cr-bottom-stroke').addClass('rotate-close-bottom');
        $('.popup').removeClass('opacity-one').slideUp(200, function () {
            $('#cross').delay(300).queue(function (next) {
                $('#cross').addClass('collapse');
                next();
            });
            $('#header-back, #pop-back').removeClass('blue');
            $('#content').removeClass('fixed');
            $('.indicator, header ul').removeClass('pop');
            $('.mehr-klappe').slideUp(400);
            $('.mehr').fadeTo(400, 1);
            $('#map, .plus-map').removeClass('open');
            $('#map').slideUp(400);
        });
    }
});
$('.show, .mehr, #cross, #bread').click(function (event) {
    event.stopPropagation();
});
//bread-menu
$('#bread').click(function () {
    var scroll = $(window).scrollTop();
    if ($('.popup').is(':visible')) {
        if ($('#cross').hasClass('collapse')) {
            if ($('header ul').is(':visible')) {
                $('#cr-top-stroke').removeClass('rotate-close-top');
                $('#cr-bottom-stroke').removeClass('rotate-close-bottom');
                $('#cross').removeClass('collapse');
            } else {
                $('#cr-top-stroke').addClass('rotate-close-top');
                $('#cr-bottom-stroke').addClass('rotate-close-bottom');
                $('#cross').addClass('collapse');
            }
        } else {
            if (!$('header ul').is(':visible')) {
                $('#cr-top-stroke').addClass('rotate-close-top');
                $('#cr-bottom-stroke').addClass('rotate-close-bottom');
                $('#cross').delay(300).queue(function (next) {
                    $('#cross').addClass('collapse');
                    next();
                });
            } else {
                $('#cr-top-stroke').removeClass('rotate-close-top');
                $('#cr-bottom-stroke').removeClass('rotate-close-bottom');
                $('#cross').delay(300).queue(function (next) {
                    $('#cross').removeClass('collapse');
                    next();
                });
            }
        }
    }
    if ($('header ul').is(':visible')) {
        $('#br-top-stroke').removeClass('rotate-open-top');
        $('#br-bottom-stroke').removeClass('rotate-open-bottom');
        $('nav ul.hidden li:nth-child(6)').removeClass('scale');
        $('nav ul.hidden li:nth-child(5)').removeClass('scale');
        $('nav ul.hidden li:nth-child(4)').delay(50).queue(function (next) {
            $(this).removeClass('scale');
            next();
        });
        $('nav ul.hidden li:nth-child(3)').delay(100).queue(function (next) {
            $(this).removeClass('scale');
            next();
        });
        $('nav ul.hidden li:nth-child(2)').delay(150).queue(function (next) {
            $(this).removeClass('scale');
            next();
        });
        $('nav ul.hidden li:nth-child(1)').delay(200).queue(function (next) {
            $(this).removeClass('scale');
            next();
            $('.popup, .popup-flat, #content').removeClass('fixed');
            $('header ul.hidden').fadeOut(400);
        });
        $('#pop-back').delay(150).queue(function (next) {
            $(this).removeClass('open');
            next();
        });
        $('html').scrollTop(scroll);
    } else {
        $('#br-top-stroke').addClass('rotate-open-top');
        $('#br-bottom-stroke').addClass('rotate-open-bottom');
        $('#pop-back').addClass('open');
        $('header ul.hidden').slideDown(0, function () {
            $('nav ul.hidden li:nth-child(1)').addClass('scale');
            $('nav ul.hidden li:nth-child(2)').delay(50).queue(function (next) {
                $(this).addClass('scale');
                next();
            });
            $('nav ul.hidden li:nth-child(3)').delay(100).queue(function (next) {
                $(this).addClass('scale');
                next();
            });
            $('nav ul.hidden li:nth-child(4)').delay(150).queue(function (next) {
                $(this).addClass('scale');
                next();
            });
            $('nav ul.hidden li:nth-child(5)').delay(150).queue(function (next) {
                $(this).addClass('scale');
                next();
            });
            $('nav ul.hidden li:nth-child(6)').delay(250).queue(function (next) {
                $(this).addClass('scale');
                next();
            });
        });
    }
});
//events
$('a.language-events').click(function () {
    $.urlParam = function (name) {
        var results = new RegExp('[?&]' + name + '=([^&#]*)').exec(window.location.href);
        return results[1] || 0;
    };
    var date = $.urlParam('date');
    location.href = 'http://' + $(this).attr('id') + '.jugendrettet.org/events?date=' + date;
});
$(document).ready(function () {
    $.urlParam = function (name) {
        var results = new RegExp('[?&]' + name + '=([^&#]*)').exec(window.location.href);
        return results[1] || 0;
    };
    var date = $.urlParam('date');
    $('#' + date).delay().fadeIn(200);
});
//phasen
$('#phase .content').hide();
$('#phase .content').delay(2000).fadeIn(500);
$('#phase .ph-container').click(function () {
    var that = $(this),
        selection = window.getSelection();
    if (selection == 0) {
        $('#' + $(this).attr('id') + '-content').slideToggle(200);
        $('#' + $(this).attr('id') + ' .header, hr#' + $(this).attr('id') + '-progress').toggleClass('indicator');
        $('#phase .content:not(#' + $(this).attr('id') + '-content)').slideUp(200);
        $('.ph-container:not(#' + $(this).attr('id') + ' .header, hr:not(#' + $(this).attr('id') + '-progress').removeClass('indicator');
    }
});
$(document).ready(function () {
    $('#phase hr#ph-eins-progress, #phase hr#ph-zwei-progress, #phase hr#ph-drei-progress').addClass('load');
});
//$(footer).sideUp();
/*
var lastScrollTop = 0;
$(window).scroll(function () {
    var st = $(this).scrollTop();
    if (st > lastScrollTop) {
        if ($(this).scrollTop() > 50) {
            $('footer').slideUp(200);
        } else {
            $('footer').slideDown(200);
        }
    } else if ($(window).scrollTop() + $(window).height() == $(document).height()) {
        $('footer').slideDown(200);
    }
    lastScrollTop = st;
});
*/
