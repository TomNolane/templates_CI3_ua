<?php 
require 'css/index_mobile_css.php'; 
require 'templates/common/new/php/modal.php'; 
?>
<div class="row container3"><div class="col-md-12">
<h2 class="text-center hh hh4"> Для вас подобраны организации для <span class="orange_font">получения займа или кредита</span> в Украине:</h2>
 <h2 class="text-center hh hh4 grey" style="font-size: 18px;line-height:initial">На нашем сайте вы можете найти нужную информацию о кредитах и займах, которые можно получить в Украине. <br>Все публикуемые на сайте организации имеют лицензии и внесены в реестр кредитных организаций.</h2>
    <br>
    <div class="row" id="for_google"></div>
    <?php 
        function plural_type($n) { 
            return ($n%10==1 && $n%100!=11 ? 0 : ($n%10>=2 && $n%10<=4 && ($n%100<10 || $n%100>=20) ? 1 : 2)); 
        } 

        $_plural_years = array('год', 'года', 'лет');
        $_plural_months = array('месяц', 'месяца', 'месяцев');
        $_plural_days = array('дня', 'дня', 'дней');
        $_plural_times = array('раз', 'раза', 'раз');
        $temp = 0;
        echo '<div class="row"><div class="col-md-12 col-xs-12">';
        $temp = 1;
        foreach($data as $item)
        {
            $item['link'] = setUtm($item['link'],'Prelend');
                
            $sum = number_format($item['amount'],0,'',' ');
            $im = $item['img'];
            $percent = $item['percent'];
            $href= $item['link'];
            $onclick = '"markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')"';
            $over_sum = number_format( $item['amount'] * ( $item['percent'] + 100) / 100 ,0,'',' ');
            $over_per_day = number_format( $item['amount'] * $item['percent'] / 100 ,0,'',' ');

            $words = array (
                '',
                '<div class="bem_offer__note">Одобрение 100% сегодня</div>',
                '<div class="bem_offer__note">Круглосуточная выдача</div>',
                '<div class="bem_offer__note">Займа без отказов</div>',
                '<div class="bem_offer__note">Без документов</div>',
                '<div class="bem_offer__note">Одобряют каждому</div>',
                '<div class="bem_offer__note">С плохой кредитной историей</div>',
                ''
            );
            $border =  ($temp % 2 == 0 ) ? 'bo-right' : 'bo-left'; $temp++;
            $rand_word = $words[rand(0,7)];

echo <<<END
    <div class="col-md-6 col-xs-6 my-col">
        <div class="bem_offers__wrapper">
            <a href="$href" onclick=$onclick class="bem_offer $border" target="_blank">
            $rand_word
            <div class="bem_offer__image">
                    <img src="/templates/common/img/offers/$im.png" alt="$im.png">
                </div>
                <div class="bem_offer__info">
                    <div class="info-text-wrap">
                        <div class="info-text-up">Заем:</div>
                        <div class="info-text-down">$sum &#8372;</div>
                    </div>
                    <div class="info-text-wrap">
                        <div class="info-text-up">Процент:</div>
                        <div class="info-text-down">$percent% в день</div>
                    </div>
                    <div class="info-text-wrap">
                        <div class="info-text-up">Переплата:</div>
                        <div class="info-text-down">$over_per_day &#8372;</div>
                    </div>
                </div>
                <div class="bem_offer__button">Получить деньги</div>
            </a>
        </div>
    </div>
END;
        }
        echo '</div></div>';?>
    </div></div>

<br><br>