<?php $from = '4';
if( $this->uri->segment(1) != 'lk2' && $this->uri->segment(1) != 'lk3')
{
    require 'adsence.php';
} 
?>
<footer class="ex-main-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <div class="ex-foot-logo">
                    <a href="/"><img src="/templates/mikrodengi/assets/img/logo-footer.png" alt="logo-footer.png"></a>
                </div>
            </div>
            <div class="col-md-10">
                <p>Максимальная процентная ставка по займу составляет 2% в день<br>
                   Пример расчета: при сумме займа в 1000 грн., проценты за пользование средствами составят 20 грн. в день, что примерно составляет 2% в день. APR — 730%. Никаких дополнительных комиссий и платежей за пользование кредитом Компания не взимает.
                    Условия продления финансирования (займа): Заёмщик вправе продлить срок займа, оплатив только проценты за пользование. Никаких дополнительных комиссий и платежей Компания не взимает. Выдается на срок от 61 дня до 1 года.
                    ТОВ «СПОЖИВЧИЙ ЦЕНТР», ЄДРПОУ 37356833, 01032, г. Киев, ул. Саксаганского 133-А, тел. (044) 498 10 21, info@mikrodengi.su. Лицензия выдана Нацкомфинуслуг, распоряжение от 28.02.2017 р. №438. 
                </p>
            </div>
        </div>
    </div>
</footer>

<!-- [if lt IE 10]>
<script  src="//cdnjs.cloudflare.com/ajax/libs/jquery-ajaxtransport-xdomainrequest/1.0.1/jquery.xdomainrequest.min.js"></footer>
<![endif] --> 
<!-- common JS --> 
<script>
<?php 
    echo 'try{';
    require 'footer_common_js.php';
    echo '/* private JS */';
    require 'templates/mikrodengi/assets/js/main.js'; 

if (in_array($this->uri->segment(1), array(' ', '', 'index', 'form'))) 
{ ?>

    $(document).ready(function () 
    {
        $('[data-toggle="popover"]').popover();
        <?php if($this->uri->segment(1) != 'form'){ ?>
            $("#rangeSlider2").ionRangeSlider({
            hide_min_max: true,
            hide_from_to: true,
            keyboard: true,
            grid: false,
            from_fixed: true,
            from: 1,
            values: [61, 130, 200, 250]
        });
   
        var slider5 = $('#rangeSlider2').data('ionRangeSlider');
        <?php } ?> 
        $("#rangeSlider1").ionRangeSlider({
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
        elseif($this->input->post('form_slrd') == '') echo '4'; else echo $this->input->post('form_slrd');
        ?>,
        values: [600, 700, 800, 900, 1000, 1100, 1200, 1300, 1400, 1500, 2000, 2500, 3000, 4000, 5000, 6000, 7000, 8000, 9000, 10000],
        onFinish: function (data) {
            $('#amount').val(data.from_value);
            $('#form_slrd').val(data.from);
        }, 
        onLoad: function (data) {
            $('#amount').val(data.from_value);
            $('#form_slrd').val(data.from);
        },
        onChange: function (range) {

            $('#period').val('4');
            $('#period2').val('3-14 дней');
 
            $('#amount').val(range.from_value);
            $('#form_slrd').val(range.from); 
        },
    }); 
});
<?php } if (in_array($this->uri->segment(1), array(' ', '', 'index'))) { ?>
    $(document).ready(function () {
    //******  HOVER ARTICLE  *******//
    $(".ex-art-block").hover(function () {
        $(".ex-art-block").removeClass("ex-art-active");
        $(this).addClass("ex-art-active");
    });
});
<?php }
else if(in_array($this->uri->segment(1), array('lk', 'lk2', 'lk3', 'offerwall', 'pixell')))
{  
    include "templates/common/new/js/lk.js";
    echo 'traffic("mikrodengi.su",4);';
}
elseif($this->uri->segment(1) == '404')
{
    echo 'traffic("mikrodengi.su",9);'; 
}
else if($this->uri->segment(1) == 'form')
{ } 
echo "}";
require 'templates/common/new/js/exeption.js';
?>  
</script>
<?php
 require 'yandexmetrika.php';
 require 'googleanalytics.php';
 require 'google_tag_manager.php';

if(in_array($this->uri->segment(1), array('lk', 'lk2', 'lk3')))
        require 'google_lk.php';
?>
</body>
</html>