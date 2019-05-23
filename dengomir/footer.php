<?php $from = '15';
if($this->uri->segment(1) != 'form' && $this->uri->segment(1) != 'lk' && $this->uri->segment(1) != 'lk2' && $this->uri->segment(1) != 'lk3' && $this->uri->segment(1) != 'offerwall')
{
    if ($this->uri->segment(1) != ' ' && $this->uri->segment(1) != '' && $this->uri->segment(1) != 'index') {
        /*echo '<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- dengomir -->
        <ins class="adsbygoogle"
            style="display:block"
            data-ad-client="ca-pub-4970738258373085"
            data-ad-slot="4639511728"
            data-ad-format="auto"
            data-full-width-responsive="true"></ins>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
        </script>';*/
    }
    /*echo '<ins class="adsbygoogle"
            style="display:block"
            data-ad-client="ca-pub-4970738258373085"
            data-ad-slot="4639511728"
            data-ad-format="auto"
            data-full-width-responsive="true"></ins>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
        </script>';*/
    echo '<a href="#0" class="cd-top">Наверх</a>';
} 
?>
<style>
.black {
    color: #000;
}
</style>

<footer class="ex-main-footer ex-sticky-footer">
    <div class="container">
        <div class="row">
        <?php if ($this->uri->segment(1) != 'lk' && $this->uri->segment(1) != 'lk2' && $this->uri->segment(1) != 'lk3' && $this->uri->segment(1) != 'offerwall') { ?>
            <div class="col-md-7">
        <?php } else { ?>
             <div class="col-md-12">
        <?php } ?>
                <div class="row">
                        <?php if ($this->uri->segment(1) == 'lk' || $this->uri->segment(1) == 'lk2' || $this->uri->segment(1) == 'lk3' || $this->uri->segment(1) == 'offerwall') { ?>
                         <div class="col-md-3 hidden-xs ex-foot-logo">
                            <img src="/templates/dengomir/assets/img/icons/logo-header.png" alt="logo-footer.png">
                        </div>
                        <?php } else { ?>
                             <div class="col-md-3 ex-foot-logo">
                                <img src="/templates/dengomir/assets/img/icons/logo-footer.png" alt="logo-footer.png" class="logo-spec">
                             </div>
                        <?php } ?>
                   
                    <div class="col-md-9 col-xs-12">
                    <?php if ($this->uri->segment(1) != 'lk' && $this->uri->segment(1) != 'lk2' && $this->uri->segment(1) != 'lk3' && $this->uri->segment(1) != 'offerwall') { ?>
                    
                        <p>
                        Максимальная процентная ставка по займу составляет 2% в день
                        Пример расчета: при сумме займа в 1000 грн., проценты за пользование средствами составят 20 грн. в день, что примерно составляет 2% в день. APR — 730%. Никаких дополнительных комиссий и платежей за пользование кредитом Компания не взимает. Условия продления финансирования (займа): Заёмщик вправе продлить срок займа, оплатив только проценты за пользование. Никаких дополнительных комиссий и платежей Компания не взимает. Выдается на срок от 61 дня до 1 года. ТОВ «СПОЖИВЧИЙ ЦЕНТР», ЄДРПОУ 37356833, 01032, г. Киев, ул. Саксаганского 133-А, тел. (044) 498 10 21, <a href="mailto:info@dengomir.su" target="_blank">info@dengomir.su</a>. Лицензия выдана Нацкомфинуслуг, распоряжение от 28.02.2017 р. №438.
                        </p>
                    
                    <?php } else { ?>
                        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                         <!-- dengomir -->
                        <ins class="adsbygoogle"
                            style="display:block"
                            data-ad-client="ca-pub-4970738258373085"
                            data-ad-slot="4639511728"
                            data-ad-format="auto"
                            data-full-width-responsive="true"></ins>
                        <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    <?php } ?>
                    </div>
                </div>
            </div>
            <?php if ($this->uri->segment(1) != 'lk' && $this->uri->segment(1) != 'lk2' && $this->uri->segment(1) != 'lk3' && $this->uri->segment(1) != 'offerwall') : ?>
            <div class="col-md-5 hidden-xs hidden-sm">
                <div class="col-md-6">
                    <p class="ex-list-title">Документы</p>
                    <ul>
                        <li><a href="/oferta">Публичная оферта</a></li>
                        <li><a href="/soglasie">Согласие на обработку данных</a></li>
                        <li><a href="/rules">Правила предоставления займов</a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <p class="ex-list-title">Получение денег</p>
                    <ul>
                        <li><a href="/zaim-card">Займ на банковскую карту</a></li>
                        <li><a href="/zaim-qiwi">Займ на QIWI кошелёк</a></li>
                        <li><a href="/zaim-contact">Займ через Contact</a></li>
                        <li><a href="/zaim-yandex">Займ на Яндекс.Деньги</a></li>
                        <li><a href="/zaim-bank">Займ на банковский счёт</a></li>
                    </ul>
                </div>
            </div>
            <?php endif; ?>
            <div class="col-sm-12">
                <hr/>
                <?php if ($this->uri->segment(1) == 'lk' || $this->uri->segment(1) == 'lk2' || $this->uri->segment(1) == 'lk3') { 
                    echo '
                    <div class="col-sm-12">
                    <p class="black">
                        Сервис по подбору выгодных онлайн займов находящийся по адресу:
                    г. Киев, ул. Саксаганского 133-А, тел. (044) 498 10 21, <a href="mailto:info@dengomir.su" target="_blank">info@dengomir.su</a>
                    </p>
                </div>';
                } ?>
                 <?php if ($this->uri->segment(1) != 'lk' && $this->uri->segment(1) != 'lk2' && $this->uri->segment(1) != 'lk3' && $this->uri->segment(1) != 'form') { ?>

                 <?php } ?>
            </div>
        </div>
    </div>
</footer> 
<!-- [if lt IE 10]>
<script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxtransport-xdomainrequest/1.0.1/jquery.xdomainrequest.min.js"></script>
<![endif] --> 

<!-- common JS -->
<script>
<?php
    echo 'try{';
    require 'footer_common_js.php';
    echo '/* private JS */';
    require 'templates/dengomir/assets/js/main.js'; 

if ($this->uri->segment(1) == '' || $this->uri->segment(1) == 'index' || $this->uri->segment(1) == 'form') { ?>
 
        $("#rangeSlider").ionRangeSlider({
        hide_min_max: true,
        hide_from_to: true,
        keyboard: true,
        grid: false,
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
        onFinish: function (data) {
            $('#amount').val(data.from_value);
            $('#form_slrd').val(data.from);
        }, 
        onLoad: function (data) {
            $('#amount').val(data.from_value);
            $('#form_slrd').val(data.from);
        },
        onChange: function (range3) {
                 if (range3.from_value <= 10000) {
                    $("#period").val("7");
                    $("#period2").val("От 61 до 130 дней"); 
                } else if (range3.from_value <= 15000) {
                    $("#period").val("14");
                    $("#period2").val("От 61 до 130 дней"); 
                } else if (range3.from_value <= 20000) {
                    $("#period").val("21");
                    $("#period2").val("От 61 до 130 дней"); 
                } else if (range3.from_value <= 30000) {
                    $("#period").val("21");
                    $("#period2").val("От 61 до 130 дней"); 
                } else if (range3.from_value <= 50000) {
                    $("#period").val("30");
                    $("#period2").val("От 130 до 250 дней"); 
                } else  if (range3.from_value <= 200000 && range3.from_value > 50000) {
                    $("#period").val("30");
                    $("#period2").val("От 250 до 365 дней"); 
                } else  if (range3.from_value <= 500000 && range3.from_value > 200000) {
                    $("#period").val("30");
                    $("#period2").val("От 1 до 3 лет"); 
                } else {
                    $("#period").val("30");
                    $("#period2").val("От 1 до 5 лет"); 
                }

                $("#amount").val(range3.from_value);
                $("#form_slrd").val(range3.from);
            }
        }); 
        <?php if ($this->uri->segment(1) == '' || $this->uri->segment(1) == 'index') {?>
        $(document).ready(function () {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 40,
                nav: false,
                items: 2,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplaySpeed: 1000,
                autoplayHoverPause: true,
                responsive: {
                    1200: {
                        items: 2
                    },
                    320: {
                        items: 1
                    }
                }
            });
        });
        $(".ex-fast-start").click(function() {
            $(".ex-fast-start").toggleClass("ex-fast-active");
        });
        var slider = $('#rangeSlider').data('ionRangeSlider');
        var slider_plus = true;
        var n = 10;

        slider.update({
            from: 4
        });
        $('#amount').val(1000);

        traffic("dengomir.su",0);
<?php }
}
elseif($this->uri->segment(1) == 'lk' || $this->uri->segment(1) == 'lk2' || $this->uri->segment(1) == 'lk3')
{
    include "templates/common/new/js/lk.js";      
    echo 'traffic("dengomir.su",4);'; 

}
elseif($this->uri->segment(1) == '404')
{
    echo 'traffic("dengomir.su",9);'; 
}
else if($this->uri->segment(1) == 'form')
{ } 
echo "}";
require 'templates/common/new/js/exeption.js';
?>
</script>
<?php
    include "google.php";
    include "yandexmetrika.php"; 
    include "yandex_rtb.php";
    if($this->uri->segment(1) == 'lk' || $this->uri->segment(1) == 'lk2' || $this->uri->segment(1) == 'lk3')
    {     
        echo '<!-- Google Code for  
        &#1050;&#1086;&#1085;&#1074;&#1077;&#1088;&#1089;&#1080;&#1103; Conversion  
        Page -->
        <script>
        /* <![CDATA[ */
        var google_conversion_id = 823384433;
        var google_conversion_label = "GUrSCJuU2HoQ8bLPiAM";
        var google_remarketing_only = false;
        /* ]]> */
        </script>
        <script  
        src="//www.googleadservices.com/pagead/conversion.js">
        </script>
        <noscript>
        <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt=""  
        src="//www.googleadservices.com/pagead/conversion/823384433/?label=GUrSCJuU2HoQ8bLPiAM&amp;guid=ON&amp;script=0"/>
        </div>
        </noscript>'; 
    }
?>
<!-- Rating@Mail.ru counter -->
<script>
var _tmr = window._tmr || (window._tmr = []);
_tmr.push({id: "3052547", type: "pageView", start: (new Date()).getTime(), pid: "USER_ID"});
(function (d, w, id) {
if (d.getElementById(id)) return;
var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;
ts.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//top-fwz1.mail.ru/js/code.js";
var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
})(document, window, "topmailru-code");
</script><noscript><div>
<img src="//top-fwz1.mail.ru/counter?id=3052547;js=na" style="border:0;position:absolute;left:-9999px;" alt="" />
</div></noscript>
<!-- //Rating@Mail.ru counter -->
<!-- Rating@Mail.ru counter dynamic remarketing appendix -->
<script>
var _tmr = _tmr || [];
_tmr.push({
type: 'itemView',
productid: 'VALUE',
pagetype: 'VALUE',
list: 'VALUE',
totalvalue: 'VALUE'
});
</script>
<!-- // Rating@Mail.ru counter dynamic remarketing appendix -->
<?php
//require 'templates/common/new/php/modal3_close.php';
?>
</body>
</html>