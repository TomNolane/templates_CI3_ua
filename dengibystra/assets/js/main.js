function checkMe() {
    var e = document.getElementById("agree");
    null != e && (e.checked ? $("#my_btn").css("display", "block") : $("#my_btn").css("display", "none"))
}

function checkMee() {
    var e = document.getElementById("agree");
    null != e && (e.checked ? $("#next1f").css("visibility", "visible") : $("#next1f").css("visibility", "hidden"))
}
var equalheight = function(e) {
    var n, t = 0,
        a = 0,
        i = new Array;
    $(e).each(function() {
        n = $(this), $(n).height("auto");
        var e = n.position().top;
        if (a != e) {
            for (var s = 0; s < i.length; s++) i[s].height(t);
            i.length = 0, a = e, t = n.height(), i.push(n)
        } else i.push(n), t = t < n.height() ? n.height() : t;
        for (s = 0; s < i.length; s++) i[s].height(t)
    })
};
$(document).ready(function() {
    var e = $("body"),
        n = $(".ex-main-footer").outerHeight(),
        t = $(".panel-collapse"),
        a = $(".ex-indicator-scope"),
        i = ($(".ex-first-step"), $(".ex-second-step").find("span"), $(".ex-last-step"), $("#submitOne2")),
        s = $("#submitTwo");
    e.css("padding-bottom", n), $(window).resize(function() {
        n = $(".ex-main-footer").outerHeight(), e.css("padding-bottom", n)
    }), t.on("show.bs.collapse", function() {
        $(this).prev(".panel-heading").find(".ex-plus-icon").removeClass("ex-plus-icon").addClass("ex-minus-icon")
    }), t.on("hide.bs.collapse", function() {
        $(this).prev(".panel-heading").find(".ex-minus-icon").removeClass("ex-minus-icon").addClass("ex-plus-icon")
    }), $(i).on("click", function() {
        a.addClass("ex-on-second-step")
    }), $(s).on("click", function() {
        a.removeClass("ex-on-second-step").addClass("ex-on-last-step")
    });
    var o = $(".ex-hidden"),
        c = $(".ex-collapse");
    o.each(function(e) {
        var n = $(this);
        $.trim(n.html()).length > 0 && n.closest(".ex-info-block").append("<span class='ex-collapse'>+ Подробнее</span>")
    }), $(".ex-info-block").on("click", c, function() {
        $(this).find(o).toggleClass("ex-active"), $(this).find($(".ex-collapse")).toggleClass("ex-blinked"), $(this).find(o).hasClass("ex-active") ? $(this).find($(".ex-collapse")).text("- Закрыть") : $(this).find($(".ex-collapse")).text("+ Подробнее")
    }), $(".ex-hamburger").on("click", function() {
        $(".ex-aside-menu").addClass("ex-is-open")
    }), $(".ex-close-menu").on("click", function() {
        $(".ex-aside-menu").removeClass("ex-is-open")
    })
});
var isMobile = !1;
(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0, 4))) && (isMobile = !0), isMobile ? function(e, n, t, a, i) {
    e[t] = e[t] || [], e[t].push(function() {
        Ya.Context.AdvManager.render({
            blockId: "R-A-247243-1",
            renderTo: "yandex_rtb_R-A-247243-1",
            async: !0
        })
    }), i = n.getElementsByTagName("script")[0], a = n.createElement("script"), a.type = "text/javascript", a.src = "//an.yandex.ru/system/context.js", a.async = !0, i.parentNode.insertBefore(a, i)
}(this, this.document, "yandexContextAsyncCallbacks") : function(e, n, t, a, i) {
    e[t] = e[t] || [], e[t].push(function() {
        Ya.Context.AdvManager.render({
            blockId: "R-A-247243-3",
            renderTo: "yandex_rtb_R-A-247243-3",
            async: !0
        })
    }), i = n.getElementsByTagName("script")[0], a = n.createElement("script"), a.type = "text/javascript", a.src = "//an.yandex.ru/system/context.js", a.async = !0, i.parentNode.insertBefore(a, i)
}(this, this.document, "yandexContextAsyncCallbacks"), $(document).ready(function() {
    var e = getParameterByName("amount");
    if ("undefined" != typeof $("#amount").val()) {
        var n = parseInt($("#amount").val().trim().length < 1 ? 600 : $(".amount").val());
        null != e && ((e > 1e5 || e < 1e3) && (e = 2e4), n = e);
        var t = n,
            a = $("#rangeSlider"),
            i = 13,
            s = $("#ex-slider-val"),
            o = $(".ex-current-val"),
            c = $(".ex-time"),
            p = $(".ex-Commission"),
            l = $(".ex-total"),
            r = $(".irs-single"),
            d = $(".ex-prob"),
            m = $("#percent").val(),
            g = "61 день",
            h = t * i / 100,
            u = t + h,
            x = function() {
                m = t <= 1e4 ? 95 : t <= 15e3 ? 95 : t <= 2e4 ? 95 : t <= 3e4 ? 85 : t <= 5e4 ? 77 : t <= 2e5 && t > 5e4 ? 65 : t <= 5e5 && t > 2e5 ? 58 : 52, r.text("вероятность " + m).append("%"), d.html("<span style='margin-left: 0px !important;'>" + m + "%</span>")
            },
            v = function() {
                g = t <= 1e4 ? "От 61 до 130 дней" : t <= 15e3 ? "От 61 до 130 дней" : t <= 2e4 ? "От 61 до 130 дней" : t <= 3e4 ? "От 61 до 130 дней" : t <= 5e4 ? "От 130 до 250 дней" : t <= 2e5 && t > 5e4 ? "От 250 до 365 дней" : t <= 5e5 && t > 2e5 ? "От 1 до 3 лет" : "От 1 до 5 лет", c.html("<span>" + g + "</span>");
                var e = $("#ex-slider-val").text();
                e = e.split(" ").join(""), $(".amount").val(e);
                a.data("ionRangeSlider")
            };
        s.append("<span>" + t.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ") + "</span><i></i>"), o.append("<span>" + t.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ") + " гривен</span>"), c.append("<span>" + g + "</span>"), p.append("<span>" + h.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ") + " гривен</span>"), l.append("<span>" + u.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ") + " гривен</span>"), r.text("").append("<span>вероятность " + m + "%</span>"), d.text("").append("<span>" + m + "%</span>"), a.on("change", function() {
            r.attr("style", r.attr("style") + ";margin-left: -37px !important"), t = parseInt($(this).prop("value")), h = t * i / 100, u = t + h;
            var e = t.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " "),
                n = h.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " "),
                a = u.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
            s.html("<span>" + e + "</span><i></i>"), o.html("<span>" + e + " гривен</span>"), p.html("<span>" + n + " гривен</span>"), l.html("<span>" + a + " гривен</span>"), x(), v()
        })
    }
});

/*

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
        if($('.ex-aside-menu').hasClass('ex-is-open')){
            $('.ex-aside-menu').removeClass('ex-is-open');
        }
        if (!$(e.target).is('.panel-body')) {
            $('.collapse').collapse('hide');
        }
    });
    var dropdownToggle =  $('.dropdown-toggle'),
        menu = $('.dropdown-menu'),
        askButton = $('.ex-ask-question'),
        footerHeight = $('.ex-sticky-footer').outerHeight();
    $(document).on('click' ,function(){
        dropdownToggle.hasClass('ex-on-off') ? dropdownToggle.removeClass('ex-on-off'): '';
    });
    dropdownToggle.on('click', function (e) {
        $(this).toggleClass('ex-on-off');
        $(this).parent().css('position','initial');
    });
    menu.on('click', function (e) {
        e.stopPropagation();
    });
    askButton.on('click', function (event) {
        $('#askQuestion').modal();
        $('.dropdown.open .dropdown-toggle').dropdown('toggle');
    });
    // $('#submitOne').on('click', function () {
    //     $('.ex-step-counter').addClass('ex-on-second-step');
    // });
    $('#submitTwo').on('click', function () {
        $('.ex-step-counter').removeClass('ex-on-second-step').addClass('ex-on-last-step');
    });
    //Sticky footer functionality, adding body dynamic padding bottom duo to footer height
    $('.ex-sticky').css('padding-bottom', footerHeight);
    $( window ).resize(function() {
        var dynamicFooterHeight = $('.ex-sticky-footer').outerHeight();
        $('.ex-sticky').css('padding-bottom', dynamicFooterHeight);
    });
    $('.ex-hamburger').on('click', function(event){
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
            .find('.ex-arrow-show')
            .removeClass('ex-arrow-show')
            .addClass('ex-arrow-hide');
    });
    $('.panel-collapse').on('hide.bs.collapse', function () {
        $(this).prev('.panel-heading').removeClass('ex-bg-head')
            .find('.ex-arrow-hide')
            .removeClass('ex-arrow-hide')
            .addClass('ex-arrow-show');
    });
    $( ".ex-pin-block" ).hover(
        function() {
            if($( ".ex-pin-block").hasClass("ex-pin-active")) {
                $( ".ex-pin-block").removeClass( "ex-pin-active");
            }
            $(this).addClass( "ex-pin-active");
        }
    );
});


function checkMe()
{ 
    var y = document.getElementById('agree');
    if(y != null)
    {
        if(y.checked)
        { 
            $('#my_btn').css("display", "block");  
        }
        else
        {
            $('#my_btn').css("display", "none");
        } 
    } 
}  

function checkMee()
{ 
    var y2 = document.getElementById('agree');
    if(y2 != null)
    {
        if(y2.checked)
        { 
            $('#submitOne').css("visibility", "visible");  
        }
        else
        {
            $('#submitOne').css("visibility", "hidden");
        } 
    } 
}
$(document).ready(function () {
    //-----------------------Declaration of variables--------------------------
    if($('#amount').val() != undefined)
    {
        var c = getParameterByName('amount'); 
        var gg = parseInt(($('#amount').val().trim().length < 1) ? 600 : $('#amount').val());
        if (c != null) {
            if (c > 100000 || c < 1000) {
                c = 600;
            }
            gg = c;
        }
        var currentLoanSize = gg,
            range = $("#rangeSlider"),
            commissionPercantage = 13,
            bet = 'от 1.27%',
            rangeUpperValue =  $('#ex-slider-val'),
            rangeTableValue = $('.ex-current-val'),
            timeTable = $('.ex-time'),
            betSize = $('.ex-bet'),
            commissionTableSize = $('.ex-Commission'),
            returnTable = $('.ex-total'),
            probabilityTable = $('.irs-single'),
            probabilityTable2 = $('.ex-prob'),
            probability = 95,
            time = '61 дня',
            commission = (currentLoanSize * commissionPercantage) / 100,
            returnTotal = currentLoanSize + commission,
            setDynamicProbability = function () {
                if(currentLoanSize >= 30000 && currentLoanSize < 50000){
                    probability = 85;
                    probabilityTable.text("вероятность " + probability).append('%');
                    probabilityTable2.html("<span>"+probability +"%</span>");
                }else if(currentLoanSize >= 50000 && currentLoanSize < 80000){
                    probability = 77;
                    probabilityTable.text("вероятность " + probability).append('%');;
                    probabilityTable2.html("<span>"+probability +"%</span>");
                }else if(currentLoanSize >= 80000){
                    probability = 65;
                    probabilityTable.text("вероятность " + probability).append('%');
                    probabilityTable2.html("<span>"+probability +"%</span>");
                }
                else if(currentLoanSize <= 25000){
                    probability = 95;
                    probabilityTable.text("вероятность " + probability).append('%');
                    probabilityTable2.html("<span>"+probability +"%</span>");
                }
            },
            setDynamicTimePeriod = function () {
                if(currentLoanSize < 20000){
                    time = '61 дня';
                    timeTable.html("<span>"+time+"</span>");
                }if(currentLoanSize < 8000){
                    time = '61 дня';
                    timeTable.html("<span>"+time+"</span>");
                }if(currentLoanSize >= 20000 && currentLoanSize < 30000){
                    time = '130 дней';
                    timeTable.html("<span>"+time+"</span>");
                }if(currentLoanSize > 30000 && currentLoanSize < 50000){
                    time = '200 дней';
                    timeTable.html("<span>"+time+"</span>");
                }if(currentLoanSize > 50000){
                    time = '250 дней';
                    timeTable.html("<span>"+time+"</span>");
                }
            };
        setDynamicBet = function () {
            if(currentLoanSize > 30000){
                bet = 'от 0,2%';
                betSize.html(bet);
            }else{
                bet = 'от 1.27%';
                betSize.html(bet);
            }
        };
        //------------------------Declaration of variables end-------------------------
        rangeUpperValue.append("<span>"+currentLoanSize.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")+"</span><span> гривен</span>");
        rangeTableValue.append("<span>"+currentLoanSize.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")+" гривен</span>");
        timeTable.append("<span>"+time+"</span>");
        betSize.html(bet);
        commissionTableSize.append("<span>"+commission.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")+" гривен</span>");
        returnTable.append("<span>"+returnTotal.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")+" гривен</span>");
        probabilityTable.text('').append("<span>вероятность "+ probability+"%</span>");
        probabilityTable2.text('').append("<span>"+ probability+"%</span>");
        //-------------------Use this function to get and set range slider current value----------------------//
        range.on("change", function () {
            probabilityTable.css('margin-left', '0');
            currentLoanSize = parseInt($(this).prop("value"));
            commission = (currentLoanSize * commissionPercantage) / 100;
            returnTotal = currentLoanSize + commission;
            var currentLoanToShow = currentLoanSize.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " "),
                commissionToShow = commission.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " "),
                totalToShow = returnTotal.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
            rangeUpperValue.html("<span>"+currentLoanToShow+"</span><span> гривен</span>");
            rangeTableValue.html("<span>"+currentLoanToShow+" гривен</span>");
            commissionTableSize.html("<span>"+commissionToShow+" гривен</span>");
            returnTable.html("<span>"+totalToShow+" гривен</span>");
            setDynamicProbability();
            setDynamicTimePeriod();
            setDynamicBet();
        });
    }
});*/