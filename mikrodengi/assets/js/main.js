function checkMe() {
    var e = document.getElementById("agree");
    null != e && (e.checked ? $("#my_btn").css("display", "block") : $("#my_btn").css("display", "none"))
}

function checkMee() {
    var e = document.getElementById("agree");
    null != e && (e.checked ? $("#next1f").css("visibility", "visible") : $("#next1f").css("visibility", "hidden"))
}
var equalheight = function (container) {
    var currentTallest = 0,
        currentRowStart = 0,
        rowDivs = new Array(),
        $el,
        topPosition = 0;
    $(container).each(function () {
        $el = $(this);
        $($el).height('auto');
        var topPostion = $el.position().top;
        if (currentRowStart != topPostion) {
            for (var currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
                rowDivs[currentDiv].height(currentTallest);
            }
            rowDivs.length = 0;
            currentRowStart = topPostion;
            currentTallest = $el.height();
            rowDivs.push($el);
        } else {
            rowDivs.push($el);
            currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
        }
        for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
            rowDivs[currentDiv].height(currentTallest);
        }
    });
};


$(document).ready(function () {
    equalheight('.ex-section-3 .ex-wrapper');
    $(document).on('click', function (e) {
        if ($('.ex-aside-menu').hasClass('ex-is-open')) {
            $('.ex-aside-menu').removeClass('ex-is-open');
        }
        if (!$(e.target).is('.panel-body')) {
            $('.collapse').collapse('hide');
        }
    });
    var dropdownToggle = $('.dropdown-toggle'),
        menu = $('.dropdown-menu'),
        askButton = $('.ex-ask-question'),
        footerHeight = $('.ex-sticky-footer').outerHeight();
    $(document).on('click', function () {
        dropdownToggle.hasClass('ex-on-off') ? dropdownToggle.removeClass('ex-on-off') : '';
    });
    dropdownToggle.on('click', function (e) {
        $(this).toggleClass('ex-on-off');
        $(this).parent().css('position', 'initial');
    });
    menu.on('click', function (e) {
        e.stopPropagation();
    });
    askButton.on('click', function (event) {
        $('#askQuestion').modal();
        $('.dropdown.open .dropdown-toggle').dropdown('toggle');
    });
    //Sticky footer functionality, adding body dynamic padding bottom duo to footer height
    $('.ex-sticky').css('padding-bottom', footerHeight);
    $(window).resize(function () {
        var dynamicFooterHeight = $('.ex-sticky-footer').outerHeight();
        $('.ex-sticky').css('padding-bottom', dynamicFooterHeight);
    });

    $('.ex-hamburger').on('click', function (event) {
        event.stopPropagation();
        $('.ex-aside-menu').addClass('ex-is-open');
    });
    $('.ex-close-menu, .ex-ask-question').on('click', function () {
        $('.ex-aside-menu').removeClass('ex-is-open');
    });
    $('.ex-aside-menu').on('click', function (event) {
        event.stopPropagation();
    });
    $('.ex-ask-question').on('click', function (event) {
        $('#askQuestion').modal();
    });


    //Collapse menu hide show events
    $('.panel-collapse').on('show.bs.collapse', function () {
        $(this).prev('.panel-heading').addClass('ex-bg-head')
            .find('.ex-down')
            .removeClass('ex-down')
            .addClass('ex-up');
    });
    $('.panel-collapse').on('hide.bs.collapse', function () {
        $(this).prev('.panel-heading').removeClass('ex-bg-head')
            .find('.ex-up')
            .removeClass('ex-up')
            .addClass('ex-down');
    });
    //******CHANGE ARROW DOWN TO ARROW UP *******//
    $('.ex-dropdown-menu').on('click', function () {
        $(this).find('a').toggleClass('ex-to-click').find('i').toggleClass('ex-to-close');
    });

    if ($('#amount').val() != undefined)
    {
        var c = getParameterByName('amount');
        var gg = parseInt(($('#amount').val().trim().length < 1) ? 4000 : $('#amount').val());
        if (c != null) {
            if (c > 10000 || c < 400) {
                c = 4000;
            }
            gg = c;
        };
        var current1 = parseInt(gg),
            current2 = 61,
            range1 = $("#rangeSlider1"),
            rangeUpperValue1 = $('.ex-slider-val-1'),
            range2 = $("#rangeSlider2"),
            rangeUpperValue2 = $('.ex-slider-val-2');
        var dayz = "<span class='spec_calc'> дней</span>";
        var rub = "<span class='spec_calc'> гривен</span>";
        //------------------------Declaration of variables end-------------------------

        rangeUpperValue1.append(current1.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " "));
        rangeUpperValue2.append("<span>от</span>" + current2);

        $(document).ready(function () {
            //-------------------Use this function to get and set range sliders current values----------------------//
            range1.on("change", function () {
                current1 = parseInt($(this).prop("value"));
                var currentLoanToShow = current1.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
                rangeUpperValue1.html(currentLoanToShow + rub);
            });
            range2.on("change", function () {
                current2 = $(this).prop("value");
                if (current2 == '61') dayz = "<span class='spec_calc'> дня</span>";
                else dayz = "<span class='spec_calc'> дней</span>";
                rangeUpperValue2.html("<span>от</span>" + current2 + dayz);
            });
        });
    }
});