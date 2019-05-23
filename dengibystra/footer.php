<?php $from = '15'; 
if(!in_array($this->uri->segment(1), array('lk', 'lk2', 'lk3', 'offerwall', 'offerwall2', 'pixell', 'vitrina')))
{
    //require 'adsence.php';
    echo '<a href="#0" class="cd-top">Наверх</a>';
}
if (!in_array($this->uri->segment(1), array('lk', 'lk2','lk3', 'pixell', 'offerwall', 'offerwall2', 'vitrina'))) 
{
echo '<footer class="ex-start-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <div class="ex-footer-logo">
                    <a href="/">
                        <img src="/templates/dengibystra/assets/img/logo-foot.png" alt="logo-foot.png">
                    </a>
                </div>
                <p class="ex-text">
                    Максимальная процентная ставка по займу составляет 2% в день
Пример расчета: при сумме займа в 1000 грн., проценты за пользование средствами составят 20 грн. в день, что примерно составляет 2% в день. APR — 730%. Никаких дополнительных комиссий и платежей за пользование кредитом Компания не взимает. Условия продления финансирования (займа): Заёмщик вправе продлить срок займа, оплатив только проценты за пользование. Никаких дополнительных комиссий и платежей Компания не взимает. Выдается на срок от 61 дня до 1 года. ТОВ «СПОЖИВЧИЙ ЦЕНТР», ЄДРПОУ 37356833, 01032, г. Киев, ул. Саксаганского 133-А, тел. (044) 498 10 21, info@dengibystra.su. Лицензия выдана Нацкомфинуслуг, распоряжение от 28.02.2017 р. №438.
                </p>
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-3 hidden-xs hidden-sm spec_footer5">
                <p class="ex-list-title">Документы</p>
                <ul>
                    <li>
                        <a href="/documents">Правовые документы</a>
                    </li>
                    <li>
                        <a href="/oferta">Публичная оферта</a>
                    </li>
                    <li>
                        <a href="/contract">Пользовательское соглашение</a>
                    </li>
                    <li>
                        <a href="/agreement">Согласие на обработку данных</a>
                    </li>
                    <li>
                        <a href="/rules">Правила предоставления займов</a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-3 hidden-xs hidden-sm spec_footer6">
                <p class="ex-list-title">Получение денег</p>
                <ul>
                    <li>
                        <a href="/money">Займ на банковскую карту</a>
                    </li>
                    <li>
                        <a href="/money">Займ на QIWI кошелёк</a>
                    </li>
                    <li>
                        <a href="/money">Займ через Contact</a>
                    </li>
                    <li>
                        <a href="/money">Займ на Яндекс.Деньги</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>';
}
else if (in_array($this->uri->segment(1), array('lk3', 'pixell', 'offerwall', 'offerwall2', 'vitrina'))) 
{
    echo '<footer class="ex-footer">
        <div class="container">
            <div class="row">
            <hr/> 
                <div class="ex-footer-logo col-md-3"> 
                    <img src="' . $logo_foot . '" alt="logo.png">
                </div>
                <br>
                <div class="col-xs-12 col-md-9" style="margin-left: -30px !important;">';
                    //require 'adsence.php';
                echo '</div>
            </div>
            <div class="col-sm-12">
                <p class="ex-text">
                    Максимальная процентная ставка по займу составляет 2% в день
Пример расчета: при сумме займа в 1000 грн., проценты за пользование средствами составят 20 грн. в день, что примерно составляет 2% в день. APR — 730%. Никаких дополнительных комиссий и платежей за пользование кредитом Компания не взимает. Условия продления финансирования (займа): Заёмщик вправе продлить срок займа, оплатив только проценты за пользование. Никаких дополнительных комиссий и платежей Компания не взимает. Выдается на срок от 61 дня до 1 года. ТОВ «СПОЖИВЧИЙ ЦЕНТР», ЄДРПОУ 37356833, 01032, г. Киев, ул. Саксаганского 133-А, тел. (044) 498 10 21, info@dengibystra.su. Лицензия выдана Нацкомфинуслуг, распоряжение от 28.02.2017 р. №438.
                </p>
            </div>
        </div>
</footer>';
}
else if (in_array($this->uri->segment(1), array('lk', 'lk2'))) 
{
    echo '<footer class="ex-footer">
        <div class="container">
            <div class="row">
            <hr/> 
                <div class="ex-footer-logo col-md-3"> 
                    <img src="/templates/dengibystra/assets/img/logo.png"  alt="logo.png">
                </div>
                <br>
                <div class="col-xs-12 col-md-9" style="margin-left: -30px !important;">';
                    //require 'adsence.php';
                echo '</div>
            </div>
            <div class="col-sm-12">
                <p class="ex-text">
                    Максимальная процентная ставка по займу составляет 2% в день
Пример расчета: при сумме займа в 1000 грн., проценты за пользование средствами составят 20 грн. в день, что примерно составляет 2% в день. APR — 730%. Никаких дополнительных комиссий и платежей за пользование кредитом Компания не взимает. Условия продления финансирования (займа): Заёмщик вправе продлить срок займа, оплатив только проценты за пользование. Никаких дополнительных комиссий и платежей Компания не взимает. Выдается на срок от 61 дня до 1 года. ТОВ «СПОЖИВЧИЙ ЦЕНТР», ЄДРПОУ 37356833, 01032, г. Киев, ул. Саксаганского 133-А, тел. (044) 498 10 21, info@dengibystra.su. Лицензия выдана Нацкомфинуслуг, распоряжение от 28.02.2017 р. №438.
                </p>
            </div>
        </div>
</footer>';
}
else if($this->uri->segment(1) == 'form' )
{
    echo '<footer class="ex-footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="text-center">
                        <a href="/"><img src="/templates/dengibystra/assets/img/logo-foot.png" alt="logo-foot.png"></a>
                        <p class="spec_footer4">Россия, Ленинградская обл. г. Санкт-Петербург, ул. Осипенко, 12, оф 201<br>'.$email.'</p>
                    </div>
                </div>
                <div class="col-sm-12">
                <hr/>
            </div>
            </div>
        </div>
    </footer>';
}
?>
<!-- [if lt IE 10]>
<script  src="//cdnjs.cloudflare.com/ajax/libs/jquery-ajaxtransport-xdomainrequest/1.0.1/jquery.xdomainrequest.min.js"></script>
<![endif] --> 

<!-- common JS -->
<script>
<?php 
    echo 'try{';
    require 'footer_common_js.php';
    echo '/* private JS */';
    require 'templates/dengibystra/assets/js/main.js'; 
if (in_array($this->uri->segment(1), array(' ', '', 'index', 'form'))) 
{ 
?>
        var slider = $("#rangeSlider").ionRangeSlider({
        hide_min_max: false, 
        keyboard: true, 
        from: <?php 
        if($this->input->get('amount') != '')
        {  
            switch($this->input->get('amount'))
            {
                case '600': $from = '0' ; break;
                case '700': $from = '1' ; break;
                case '800': $from = '2' ; break;
                case '900': $from = '3' ; break;
                case '1000': $from = '4' ; break;
                case '1100': $from = '5' ; break;
                case '1200': $from = '6' ; break;
                case '1300': $from = '7' ; break;
                case '1400': $from = '8' ; break;
                case '1500': $from = '9' ; break;
                case '2000': $from = '10' ; break;
                case '2500': $from = '11' ; break;
                case '3000': $from = '12' ; break;
                case '4000': $from = '13' ; break;
                case '5000': $from = '14' ; break;
                case '6000': $from = '15' ; break;
                case '7000': $from = '16' ; break;
                case '8000': $from = '17' ; break;
                case '9000': $from = '18' ; break;
                case '10000': $from = '19' ; break;
            }
            echo $from; 
        }
        elseif($this->input->post('form_slrd') == '') echo '15'; else echo $this->input->post('form_slrd'); ?>,
        values: [600, 700, 800, 900, 1000, 1100, 1200, 1300, 1400, 1500, 2000, 2500, 3000, 4000, 5000, 6000, 7000, 8000, 9000, 10000],
        onChange: function (range3) {
                 if (range3.from_value <= 10000) {
                    $("#period").val("7");
                    $("#period2").val("От 61 до 130 дней");
                    $('#percent').val('95');
                } else if (range3.from_value <= 15000) {
                    $("#period").val("14");
                    $("#period2").val("От 61 до 130 дней");
                    $('#percent').val('95');
                } else if (range3.from_value <= 20000) {
                    $("#period").val("21");
                    $("#period2").val("От 61 до 130 дней");
                    $('#percent').val('95');
                } else if (range3.from_value <= 30000) {
                    $("#period").val("21");
                    $("#period2").val("От 61 до 130 дней");
                    $('#percent').val('85');
                } else if (range3.from_value <= 50000) {
                    $("#period").val("30");
                    $("#period2").val("От 130 до 250 дней");
                    $('#percent').val('77');
                } else  if (range3.from_value <= 200000 && range3.from_value > 50000) {
                    $("#period").val("30");
                    $("#period2").val("От 250 до 365 дней");
                    $('#percent').val('65');
                } else  if (range3.from_value <= 500000 && range3.from_value > 200000) {
                    $("#period").val("30");
                    $("#period2").val("От 1 до 3 лет");
                    $('#percent').val('58');
                } else {
                    $("#period").val("30");
                    $("#period2").val("От 1 до 5 лет");
                    $('#percent').val('52');
                }
                $("#amount").val(range3.from_value);
                $("#form_slrd").val(range3.from);
                $('.irs-single').text('вероятность ' + $('#percent').val() + '%');
            },
            onFinish: function (range3) {
                $('.irs-single').text('').append("<span>&nbsp;&nbsp;"+ range3.from_value+"&nbsp;&nbsp;гривен&nbsp;&nbsp;</span>");
            }
        });

    <?php if (in_array($this->uri->segment(1), array(' ', '', 'index'))) 
    {
        echo 'traffic("dengibystra.ru",0);'; 
    }
}
else if(in_array($this->uri->segment(1), array('lk', 'lk2', 'lk3', 'offerwall', 'pixell')))
{
    include "templates/common/new/js/lk.js";
    echo 'traffic("dengibystra.ru",4);';
}
else if($this->uri->segment(1) == '404')
{
    echo 'traffic("dengibystra.ru",9);';
}
echo "}";
require 'templates/common/new/js/exeption.js';
require 'templates/common/new/js/settings_form.js';
?>
</script>
<?php
    include "google.php";
    include "yandexmetrika.php"; 
    include "yandex_rtb.php";
    if(in_array($this->uri->segment(1), array('lk', 'lk2', 'lk3')))
    {
        require 'google_lk.php'; 
    }
    else {
        //require 'vk.php'; 
    }
    //require 'mailru.php'; 
?>
</body>
</html>
