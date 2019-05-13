<?php $from = '4';
if ($this->uri->segment(1) != 'lk' && $this->uri->segment(1) != 'lk2' && $this->uri->segment(1) != 'lk3') 
{
    echo '';
}
if($this->uri->segment(1) != 'lk' && $this->uri->segment(1) != 'lk2' && $this->uri->segment(1) != 'lk3')
{
    if ($this->uri->segment(1) != ' ' && $this->uri->segment(1) != '' && $this->uri->segment(1) != 'index' && $this->uri->segment(1) != 'form') 
    {
        echo '';
    }

    if($this->uri->segment(1) != 'form')
    {
        echo '';
    }
    
}
if ($this->uri->segment(1) == '' || $this->uri->segment(1) == 'index' || $this->uri->segment(1) == ' ') 
{
echo '<footer class="ex-main-footer">
    <div class="container">
        <div class="ex-foot-logo text-center">
            <a href="/"><img src="/templates/zaimcoinsu/assets/img/logo-footer.png" alt="logo-footer.png"></a>
        </div>
        <p class="spec_footer5">Максимальная процентная ставка по займу составляет 2% в день<br>
                   Пример расчета: при сумме займа в 1000 грн., проценты за пользование средствами составят 20 грн. в день, что примерно составляет 2% в день. APR — 730%. Никаких дополнительных комиссий и платежей за пользование кредитом Компания не взимает.
                    Условия продления финансирования (займа): Заёмщик вправе продлить срок займа, оплатив только проценты за пользование. Никаких дополнительных комиссий и платежей Компания не взимает. Минимальный срок погашения долга – 1 день, а максимальный — 3 года.
                    ТОВ «СПОЖИВЧИЙ ЦЕНТР», ЄДРПОУ 37356833, 01032, г. Киев, ул. Саксаганского 133-А, тел. (044) 498 10 21, info@zaimcoin.su. Лицензия выдана Нацкомфинуслуг, распоряжение от 28.02.2017 р. №438. </p>
            <hr/>
    </div> 
</footer>';
}
else
{
    echo '
    <footer class="ex-main-footer-bg">
        <div class="container">';
                if ($this->uri->segment(1) != 'lk' && $this->uri->segment(1) != 'lk2' && $this->uri->segment(1) != 'lk3') 
                {
                    echo '<div class="ex-foot-logo text-center">
                        <img src="/templates/zaimcoinsu/assets/img/logo-footer.png" alt="logo-footer.png">
                    </div>
                     <p class="spec_footer5">Максимальная процентная ставка по займу составляет 2% в день<br>
                   Пример расчета: при сумме займа в 1000 грн., проценты за пользование средствами составят 20 грн. в день, что примерно составляет 2% в день. APR — 730%. Никаких дополнительных комиссий и платежей за пользование кредитом Компания не взимает.
                    Условия продления финансирования (займа): Заёмщик вправе продлить срок займа, оплатив только проценты за пользование. Никаких дополнительных комиссий и платежей Компания не взимает. Минимальный срок погашения долга – 1 день, а максимальный — 3 года.
                    ТОВ «СПОЖИВЧИЙ ЦЕНТР», ЄДРПОУ 37356833, 01032, г. Киев, ул. Саксаганского 133-А, тел. (044) 498 10 21, info@zaimcoin.su. Лицензия выдана Нацкомфинуслуг, распоряжение от 28.02.2017 р. №438.</p>';
                } 
                else 
                {
                    echo '<div class="row">
                            <div class="col-md-3 hidden-xs">
                                <div class="ex-foot-logo text-center">
                                    <img src="/templates/zaimcoinsu/assets/img/logo-footer.png" alt="logo-footer.png" class="logo-spec">
                                </div>
                            </div>
                            <div class="col-md-9 col-xs-12">
                            <br>
                                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                                <!-- zaimcoin su Google adsence-->
                                 
                            </div>
                        </div>';
                }
                echo '<hr/>';
                if ($this->uri->segment(1) != 'form') {
                    echo '<!-- ya rtb -->';
                }
                echo '
        </div>
    </footer>';
}
?>
<!-- [if lt IE 10]>
<script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxtransport-xdomainrequest/1.0.1/jquery.xdomainrequest.min.js"></script>
<![endif] --> 

<!-- common JS -->
<script>
<?php
    echo 'try{';
    require 'footer_common_js.php';
    echo '/* private JS */';
    require 'templates/zaimcoinsu/assets/js/main.js'; 
    echo 'function goToUp() {
        $(\'html, body\').animate({
            scrollTop: $(\'.toUp\').offset().top
        }, 1000);
    }';
if ($this->uri->segment(1) == '' || $this->uri->segment(1) == 'index' || $this->uri->segment(1) == 'form') { ?>

    <?php if ($this->uri->segment(1) == '' || $this->uri->segment(1) == 'index') {?>
    function GetMoney() {
        $('form#anketa').submit();
    }
    jQuery.fn.swap = function(b) 
    {
        b = jQuery(b)[0];
        var a = this[0],
            a2 = a.cloneNode(true),
            b2 = b.cloneNode(true),
            stack = this;

        a.parentNode.replaceChild(b2, a);
        b.parentNode.replaceChild(a2, b);

        stack[0] = a2;
        return this.pushStack( stack );
    }; 
    var client_w = screen.width; 
    var pathname = window.location.pathname,  substring = "/", substring2 = "index", substring4 = "lk";
        
    if(pathname.indexOf(substring) !== -1 || pathname.indexOf(substring2) !== -1)
    {
        if(Number(client_w) > 767)
        {
            
        } 
        else
        {
            $("#specialIndex").swap("#specialIndex2");
            $("#ex-slider-val").css("margin-top","0");
        }
    };
    <?php } ?>
    $("#rangeSlider").ionRangeSlider({
        hide_min_max: true,
        hide_from_to: true,
        keyboard: true,
        grid: false,
        from: <?php 
        if(isset($_GET['amount'])) 
        {  
            switch($_GET['amount'])
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
        elseif(!isset($_POST['form_slrd'])) echo '4'; else echo $_POST['form_slrd']; ?>,
        values: [600, 700, 800, 900, 1000, 1100, 1200, 1300, 1400, 1500, 2000, 2500, 3000, 4000, 5000, 6000, 7000, 8000, 9000, 10000],
        onFinish: function (data) {
            $('#amount').val(data.from_value);
            $('#form_slrd').val(data.from);
        },
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
        }
        }); 
        <?php if ($this->uri->segment(1) == '' || $this->uri->segment(1) == 'index') {?>
       
        $(document).ready(function () {
        var slider = $('#rangeSlider').data('ionRangeSlider');
        var slider_plus = true;
        var n = 4;
        var slider_init = setInterval(function () {
            if (slider_plus) {
                n++;
            } else {
                n--;
            }
            if (n == 19 && n != <?php echo $from; ?>) {
                slider_plus = false;
            }else if (n == <?php echo $from; ?> && slider_plus == false) {
                clearInterval(slider_init);
            }else if (n == 19 && n == <?php echo $from; ?>) {
                clearInterval(slider_init);
            }

            slider.update({
                from: n
            });

            $('#amount').val(slider.result.from_value);
            $("#form_slrd").val(slider.result.from);

        }, 50); 
        traffic("zaimcoin.su",0);
    });
<?php }
}
elseif($this->uri->segment(1) == 'lk' || $this->uri->segment(1) == 'lk2' || $this->uri->segment(1) == 'lk3')
{
    include "templates/common/new2/js/lk.js";      
    echo 'traffic("zaimcoin.su",4);'; 

}
elseif($this->uri->segment(1) == '404')
{
    echo 'traffic("zaimcoin.su",9);'; 
}
else if($this->uri->segment(1) == 'form')
{ } 
echo "}";
require 'templates/common/new2/js/exeption.js';
?>
</script>
<?php
    include "google.php";
    include "facebook.php";
    include "yandexmetrika.php"; 
    //include "yandex_rtb.php";
    if($this->uri->segment(1) == 'lk' || $this->uri->segment(1) == 'lk2' || $this->uri->segment(1) == 'lk3')
    {     
        

    }
    else {
        echo  '';
    }
?>
</body>
</html>