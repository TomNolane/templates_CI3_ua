//===== Written by gor-sargsyan.info =====//

//-----------------------Initializing--------------------------
$(document).ready(function () {
    //-----------------------Declaration of variables--------------------------
    var c = getParameterByName('amount'); 
    var gg = parseInt(($('#amount').val().trim().length < 1) ? 1000 : $('#amount').val());
    if (c != null) {
        if (c > 10000 || c < 600) {
            c = 1000;
        }
        gg = c;
    }
    var currentLoanSize = gg,
        range = $("#rangeSlider"),
        commissionPercantage = 28,
        rangeUpperValue =  $('.ex-slider-val'),
        rangeTableValue = $('.ex-current-val'),
        timeTable = $('.ex-time'),
        commissionTableSize = $('.ex-Commission'),
        returnTable = $('.ex-total'),
        probabilityTable = $('.irs-single'),
        probabilityTable2 = $('.ex-prob'),
        probability = 95,
        time = '61 день',
        commission = (currentLoanSize * commissionPercantage) / 100,
        returnTotal = currentLoanSize + commission,
        setDynamicProbability = function () {
            if(currentLoanSize >= 600 && currentLoanSize <= 1000){
                probability = 85;
                probabilityTable.text("вероятность " + probability).append('%');
                probabilityTable2.html("<span>"+probability +"%</span>");
            }else if(currentLoanSize <= 2000 && currentLoanSize > 1000){
                probability = 77;
                probabilityTable.text("вероятность " + probability).append('%');;
                probabilityTable2.html("<span>"+probability +"%</span>");
            }else if(currentLoanSize > 4000){
                probability = 65;
                probabilityTable.text("вероятность " + probability).append('%');
                probabilityTable2.html("<span>"+probability +"%</span>");
            }
            else if(currentLoanSize < 4000){
                probability = 95;
                probabilityTable.text("вероятность " + probability).append('%');
                probabilityTable2.html("<span>"+probability +"%</span>");
            }
        },
        setDynamicTimePeriod = function () {

            if (currentLoanSize >= 600 && currentLoanSize <= 1000) {
                time = '61 день';
            } else if (currentLoanSize <= 2000 && currentLoanSize > 1000) {
                time = '130 дней';
            } else if (currentLoanSize > 4000) {
                time = '365 дней';
            } else if (currentLoanSize < 4000) {
                time = '250 дней';
            }

            
            timeTable.html("<span>" + time + "</span>");
        };
    //------------------------Declaration of variables end-------------------------
    rangeUpperValue.append("<span>"+currentLoanSize.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")+"</span><i></i>");
    rangeTableValue.append("<span>"+currentLoanSize.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")+" рублей</span>");
    timeTable.append("<span>"+time+"</span>");
    commissionTableSize.append("<span>"+commission.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")+" </span><i></i>");
    returnTable.append("<span>"+returnTotal.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")+" рублей</span>");
    probabilityTable.text('').append("<span>вероятность "+ probability+"%</span>");
    probabilityTable2.text('').append("<span>"+ probability+"%</span>");
    //-------------------Use this function to get and set range slider current value----------------------//
    range.on("change", function () {
        probabilityTable.css('margin-left', '0');

         if (currentLoanSize <= 1000) {
             $('#period').val('7');
             $('#period2').val('От 61 до 130 дней');
         } else if (currentLoanSize <= 2000) {
             $('#period').val('14');
             $('#period2').val('От 61 до 130 дней');
         } else if (currentLoanSize <= 5000) {
             $('#period').val('30');
             $('#period2').val('От 130 до 250 дней');
         } else {
             $('#period').val('30');
             $('#period2').val('От 250 до 365 дней');
        }
        ;
        currentLoanSize = parseInt($(this).prop("value"));
        commission = (currentLoanSize * commissionPercantage) / 100;
        returnTotal = currentLoanSize + commission;
        var currentLoanToShow = currentLoanSize.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " "),
            commissionToShow = commission.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " "),
            totalToShow = returnTotal.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
        rangeUpperValue.html("<span>"+currentLoanToShow+"</span><i></i>");
        rangeTableValue.html("<span>"+currentLoanToShow+" рублей</span>");
        commissionTableSize.html("<span>"+commissionToShow+"</span><i></i>");
        returnTable.html("<span>"+totalToShow+" рублей</span>");
        setDynamicProbability();
        setDynamicTimePeriod();
    });
});