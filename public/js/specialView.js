"use strict";

function makeNormal() {
    $('html').removeClass('blackAndWhite blackAndWhiteInvert');
    $.removeCookie('specialView', { path: '/' });
}

function makeBlackAndWhite() {
    makeNormal();
    $('html').addClass('blackAndWhite');
    $.cookie("specialView", 'blackAndWhite', { path: '/' });
}

function makeBlackAndWhiteDark() {
    makeNormal();
    $('html').addClass('blackAndWhiteInvert');
    $.cookie("specialView", 'blackAndWhiteInvert', { path: '/' });
}

function resetFontSize() {
    $('html').removeClass('biggerFont');
    $.removeCookie("largeFont", { path: '/' });
}

function changeFontSize() {
    $('html').addClass('biggerFont');
    $.cookie("largeFont", true, { path: '/' });
}

function setNarrator() {
    $('head').append($('<script type="text/javascript"><\/script>').attr('src', '/js/narrator.js'));
    narrator.init();
    $.cookie("narrator", 'on', { path: '/' });
    if (typeof($.cookie("speechVolume")) == 'undefined') {
        $("#speechVolume").slider('value', 100);
        $('#speechOptions .sliderText .range').text(100);
    } else {
        var speechVolume = $.cookie("speechVolume");
        $("#speechVolume").slider('value', speechVolume);
        $('#speechOptions .sliderText .range').text(speechVolume);
    }
}

function unsetNarrator() {
    $.cookie("narrator", null, { path: '/' });
    $('#speech').remove();
    removeJsCssFile('narrator.js', 'js');
}

function saveSpeechVolume(val) {
    if (val > 100 || val < 25) {
        val = 100;
    }
    narrator.setVolume(val);
    $.cookie("speechVolume", val, { path: '/' });
}

$(document).ready(function() {
    var appearance = $.cookie("specialView");
    switch (appearance) {
        case 'blackAndWhite':
            makeBlackAndWhite();
            break;
        case 'blackAndWhiteInvert':
            makeBlackAndWhiteDark();
            break;
    }

    if (typeof $.cookie("largeFont") !== 'undefined')
        changeFontSize();

    $('.no-propagation').click(function(e) {
        e.stopPropagation()
    });

    $('.appearance .spcNormal').click(function() {
        makeNormal()
    });

    $('.appearance .spcWhiteAndBlack').click(function() {
        makeBlackAndWhite()
    });

    $('.appearance .spcDark').click(function() {
        makeBlackAndWhiteDark()
    });

    $('.appearance .middleFont').click(function() {
        resetFontSize()
    });

    $('.appearance .largeFont').click(function() {
        changeFontSize()
    });

    $('#_resetAllSettings').click(function() {
        makeNormal();
        resetFontSize();
    });

    $('#speechSwitcher').change(function() {
        if (this.checked) {
            var narratorStatus = $.cookie("narrator");
            $('#speechOptions').slideDown(100);
            setNarrator();
            $(".speech").stop().animate({ opacity: 1 }, "fast").addClass('speechHover');
        } else {
            $('#speechOptions').slideUp(100);
            unsetNarrator();
            $(".speech").stop().removeClass('speechHover');
        }
    });

    $('#speechVolume').slider({
        min: 25,
        max: 100,
        range: "min",
        slide: function(event, ui) {
            $('#speechVolume').prev('.sliderText').children('.range').text(ui.value);
        },
        change: function(event, ui) {
            saveSpeechVolume(ui.value);
        }
    });

    if ($.cookie("narrator") == 'on' && typeof($.cookie("narrator")) != 'undefined') {
        $('#speechSwitcher').prop('checked', true);
        $('#speechSwitcher').trigger('change');
        var speechVolume = $.cookie("speechVolume");
        if (typeof(speechVolume) != 'undefined') {
            $("#speechVolume").slider('value', speechVolume);
            $('#speechOptions .sliderText .range').text(speechVolume);
        }
    }
});
