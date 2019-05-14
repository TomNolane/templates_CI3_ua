<?php
    $my_title = "Мгновенные займы на карту";
    $site = str_replace("www.", "", $site);
    $site = str_replace(".tomnolane", "", $site);
    $site = str_replace("bzaim5", "bzaim", $site);
    $site = str_replace("zaimomir", "zaimomirsu", $site);
    $site = str_replace("zaimnow", "zaimnowsu", $site);
    $site = str_replace("zaimcoin", "zaimcoinsu", $site);

    require realpath(__DIR__ . '/..').'/'.$site.'/header.php';
    $this->load->model('offers/offers_model', 'offers');
    
    (isset($_GET['loan']) && $_GET['loan']) ? $loan = 0 : $loan = 0;
    
    $data = $this->offers->all(18, 0);
    
    // IP
    $this->load->helper('ip');
    // GEO
    require_once FCPATH.'modules/ipgeobase/ipgeobase.php';
    $gb = new IPGeoBase();
    $geo = $gb->getRecord(IP::$ip);
    if ($geo)
    {
        if (isset($geo['region'])) $region_name = $geo['region'];
    }
    // Список регионов
    $this->load->model('geo/geo_model', 'geo');
    $regions = $this->geo->regions();
    
    //pixel stat
    $this->load->model('pixel/pixel_model', 'pixel');
    $base_url = str_replace("/","",base_url());
    $base_url = str_replace("https:","",$base_url);
    $base_url = str_replace("http:","",$base_url);
    $pixel = $this->pixel->stat($base_url);

    $email = 'support@'.getDomain2();
    $logo_foot = '-foot';
    switch ($this->uri->segment(1)) {
        case 'offerwall': $logo_foot = '-fanzaim'; $email = 'support@fanzaim.ru'; break;
        case 'pixell': $logo_foot = '-fanzaim'; $email = 'support@fanzaim.ru'; break;
        case 'offerwall2': $logo_foot = '-edenga'; $email = 'support@edenga.ru'; break;
        default: break;
    }

	if($setting_array['is_mobile'] != 'мобила') {
    
?>
<div><style scoped>
	table {
    margin-top: 20px;
    width: 100%; 
}
td {
    text-align: right;
}
tr>td:first-child {
    text-align: left;
}
h2.hh {
    color: #000000;
}
figure.hh1 {
    padding-left: 12px;
    padding-right: 12px;
    padding-top:30px;
    padding-bottom:40px;
    outline: 1px solid #FFDD2D;
    transition: all 0.5s ease-out;
    border-radius: 5px;
}
figure.hh2:hover {
    border: none;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
    background-color: #f7f7f7;
}
figure.hh2 {
    height: 150px !important; 
    margin: 0 !important;
    padding: 0 !important;
    transition: all 0.5s ease-out;
    border-radius: 5px;
}
figure.hh1:hover {
    border: none;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
    background-color: #f7f7f7;
}
.offers { 
    padding-left: 20px;
    padding-right: 20px;
    border-radius: 4px;
}
.ex-main-btn {
    width: 100%;
    margin-top: 20px;
    padding-top: 15px;
    padding-bottom: 15px;
    color: black;
    font-weight: 700;
    outline: none;
    border: none;
    background: #FFDD2D;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.09);
    border-radius: 4px;
}

.wordwrap { 
   white-space: nowrap; /* IE */
}
.container3 {
    background-color: #ffffff;
    padding-left: 0;
    padding-right: 0;
}
@media screen and (min-width: 441px) {
	.col-md-12 {
	padding-right: 15px !important;
    padding-left: 15px !important;
}
}
@media screen and (max-width: 440px) {
    .container3 {
    background-color: #ffffff;
    padding-left: 0;
    padding-right: 0;
} 
.col-md-12 {
	padding-right: 0 !important;
    padding-left: 0 !important;
}
}
.ex-checked-stars {
    color: #f8e71c !important;
}
.lk-img {
    margin: 0 auto !important;
} 
.fa-star {
   
}
.row {
    margin-right: 25px!important;
    margin-left: 25px !important;
} 

</style></div>
<div>
<style scoped>
@font-face{font-family:"'Dosis'";src:url(/templates/common/new2/fonts/Dosis-Regular.eot);src:url(/templates/common/new2/fonts/Dosis-Regular.eot?#iefix) format("embedded-opentype"),url(/templates/common/new2/fonts/Dosis-Regular.woff) format("woff"),url(/templates/common/new2/fonts/Dosis-Regular.ttf) format("truetype");font-weight:400;font-style:normal}
.hh4 {
    font-family: Dosis !important;
    font-size: 34px;
}
ins, .adsbygoogle{
	text-align: center !important;
    max-height: none !important;
}
h2 {font-weight: 700;}
.gold {
    background-color: gold;
    border-radius: 15px;
    color: #000;
    padding: 10px;
    
}
.green {
    background-color: green;
    border-radius: 15px;
    color: #fff;
    padding: 10px;
    
}
.green_special {
    background-color: green; 
    color: #fff;
    padding: 15px;
    display: grid;
    font-size: 2em;
    text-align: center;
}
.yellow {
    background-color: yellow;
    border-radius: 15px;
    color: #000;
    padding: 10px;
    
}
.blue {
    background-color: blue;
    border-radius: 15px;
    color: #fff;
    padding: 10px;
    
} 
.empty {
    background-color: transparent;
    border-radius: 15px;
    color: #fff !important;
    padding: 10px;
    
}
.grey {color: #6b6b6b  !important;}
.gold_font {color: gold;}
figure.hh1 {
    border: 0 solid #FFDD2D;
	border: none !important;
}
tr>td:first-child {
    font-size: 16px;
}
.imgg {
    width: 70%;
    padding: 20px;
}
.lk_special_offer {
    font-size: 1.8em;
    font-weight: 700; 
  color: #00da00; 
} 
@media (max-width: 450px) { 
    .font08 {
        font-size: .8em;
    }
    .bem_param {
        font-size: 14px !important;
        text-align: center;
    }
	.wordwrap{
		font-size: 0.9em;
	}
    .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
        padding: 4px;
    }
    figure.hh1 {
        padding-left: 0;
        padding-right: 0;
        padding-top: 10px;
        padding-bottom: 0px;
    }
    .ex-main-btn {
        font-size: .9em;
        margin-top: 0;
    }
    tr>td:first-child {
        font-size: 12px;
    }
    .col-xs-6 {
        padding-right: 5px !important;
        padding-left: 5px !important;
    }
    .gold, .empty, .blue, .yellow, .green {
        font-size: 11px !important;
    }
    .hh4 {
        padding: 5px;
        font-size: 1.4em;
    }
    .imgg {
        width: 100%;
    }
    .lk_special_offer { 
        font-size: 1em;
    }
}
.bem_offer {
    display: flex;
    margin-bottom: 55px;
    padding-left: 10px;
    padding-right: 10px;
    position: relative;
    text-decoration: none;
    transition: 0.2s;
    font-family: "Calibri";
    height: 111px;
    border: 1px solid white;
    box-shadow: 0 1px 8px rgb(0, 0, 0);
}
.bem_offer__note {
    background-color: #e74142;
    color: #fff;
    font-size: 14px;
    left: 20px;
    padding: 0px 13px 0px;
    position: absolute;
    top: -25px;
    transition: 0.2s;
    height: 25px;
    line-height: 25px;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}
.bem_offer:hover {
    border: 1px solid #ebb700;
}
.bem_offer__image {
    text-align: left;
    display: flex;
    align-items: center;
}
.bem_offer__info {
    color: #000;
    width: auto;
    flex: auto;
    display: flex;
    align-items: center;
    text-align: left;
    padding: 0 15px;
}
.bem_offer__info-wrapper {
    display: flex;
    justify-content: space-evenly;
    width: 100%;
}
.bem_param {
    font-size: 18px;
    font-weight: 700;
    line-height: 26px;
    padding-right: 10px;
}
.bem_offer__get {
    max-width: 285px;
    align-items: center;
    display: flex;
    text-align: right;
    vertical-align: middle;
    position: relative;
}
.bem_offer__button {
    width: 241px;
    height: 50px;
    border-radius: 18px;
    background-color: #57b029;
    line-height: 50px;
    text-align: center;
    color: white;
    font-size: 16px;
    text-transform: uppercase;
    text-shadow: 1px 1px 0 rgba(0,0,0,0.15);
    transition: 0.2s;
}
@media (max-width: 470px) {
    .bem_offer__image > img {padding: 10px 0; width: 100%;}
    .bem_offer {
        display: block;
        padding-left: 0;
        padding-right: 0;
        height: unset;
    }
    .bem_offer__image {padding: 10px 0;}
    .bem_offer__info {padding: 10px;}
    .bem_offer__get{margin-bottom: 20px;}
    .bem_offer__button{width: 100%;}
}
.red2 {background-color: #e8392c}  
.darkred2 {background-color: #cb2d4b}
.orange2 {background-color: #ff9d11}
.green2 {background-color: #2a823f}
.pink2 {background-color: #cb2d4b}
@media (max-width: 1100px)
{
.bem_offers__wrapper {
        margin-bottom: 40px;
    display: grid;
    grid-template-rows: repeat(auto-fit, minmax(262px, 1fr));
    grid-template-columns: repeat(auto-fit, minmax(279px, 1fr));
    grid-gap: 35px 20px;
}
}


@media (max-width: 1100px)
{
.bem_offer {
    flex-wrap: initial;
    height: auto;
    margin: 0;
}
}

@media (max-width: 480px)
{
.bem_offer {
    display: block;
    margin-right: 0;
    padding: 15px;
    width: auto;
}
}
@media (max-width: 480px)
{
.bem_offer__image {
    width: 144px;
}
}

@media (max-width: 1100px)
{
.bem_offer__image {
    margin-bottom: 21px;
    width: 100%;
}
}

@media (max-width: 1100px)
{
.bem_offer__info {
    padding: 0;
}
}
 

@media (max-width: 1100px)
{
.bem_offer__info-wrapper>div {
    width: 50%;
    margin-bottom: 16px;
}
}

@media (max-width: 1100px)
{
.bem_offer__get {
    width: 100%;
    max-width: 100%;
    align-items: baseline;
}
}

@media (max-width: 1200px)
{
.bem_offer__button {
    width: 230px;
    font-size: 22px;
    height: 50px;
    line-height: 50px;
}
}

@media (max-width: 1100px)
{
.bem_offer__button {
    width: 100%;
}
}








.bottom-text.fa {color: #777 !important;}

.top-text {
    font-weight: normal !important;
    font-size: 85% !important;
    color: #AAA !important;
}
.bottom-text {
    font-weight: normal !important;
}

.bem_offer {
    display: flex !important;
    margin-bottom: 38px !important;
    padding-left: 10px !important;
    padding-right: 10px !important;
    position: relative !important;
    text-decoration: none !important;
    transition: 0.2s !important;
    font-family: "Calibri" !important;
    height: 82px !important;

    border: 1px solid #2cbd04 !important;
    border-radius: 6px !important;
    transition: all 0.3s ease !important;
    text-decoration: none !important;
    box-shadow: none !important;
}

.bem_offer__note {
    color: #fff !important;
    font-size: 14px !important;
    left: 20px !important;
    padding: 0px 13px 0px !important;
    position: absolute !important;
    top: -20px !important;
    transition: 0.2s !important;
    height: 20px !important;
    line-height: 20px !important;
    border-top-left-radius: 10px !important;
    border-top-right-radius: 10px !important;
}

@keyframes pop{
  50%  {transform: scale(1.05);}
}

.bem_offers__wrapper {
    width: 85% !important;
    margin: 0 auto !important;
}
.bem_offers__wrapper:hover {
  -webkit-animation: pop 0.4s ease !important;
   -webkit-animation-iteration-count: 1 !important;
   animation-iteration-count: 1 !important;
   animation: pop 0.4s linear 1 !important;
}

.bem_offer__image {
    text-align: left !important;
    display: flex !important;
    align-items: center !important;
}
.bem_offer__info {
    color: #777 !important;
    width: auto !important;
    flex: auto !important;
    display: flex !important;
    align-items: center !important;
    text-align: left !important;
    padding: 0 15px !important;
}
.bem_offer__info-wrapper {
    display: flex !important;
    justify-content: space-evenly !important;
    width: 100% !important;
}
.bem_param {
    font-size: 18px !important;
    font-weight: 700 !important;
    line-height: 26px !important;
    padding-right: 10px !important;
}
.bem_offer__get {
    max-width: 285px !important;
    align-items: center !important;
    display: flex !important;
    text-align: right !important;
    vertical-align: middle !important;
    position: relative !important;
}
.bem_offer__button {
    width: 210px !important;
    height: 40px !important;
    border-radius: 18px !important;
    line-height: 40px !important;
    text-align: center !important;
    font-size: 16px !important;
    text-transform: uppercase !important;
    transition: 0.2s !important;
    font-weight: bold !important;

    background: rgba(88,255,46,1);
    background: -moz-linear-gradient(top, rgba(88,255,46,1) 0%, rgba(44,189,4,1) 50%, rgba(42,184,2,1) 51%, rgba(88,255,46,1) 100%);
    background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(88,255,46,1)), color-stop(50%, rgba(44,189,4,1)), color-stop(51%, rgba(42,184,2,1)), color-stop(100%, rgba(88,255,46,1)));
    background: -webkit-linear-gradient(top, rgba(88,255,46,1) 0%, rgba(44,189,4,1) 50%, rgba(42,184,2,1) 51%, rgba(88,255,46,1) 100%);
    background: -o-linear-gradient(top, rgba(88,255,46,1) 0%, rgba(44,189,4,1) 50%, rgba(42,184,2,1) 51%, rgba(88,255,46,1) 100%);
    background: -ms-linear-gradient(top, rgba(88,255,46,1) 0%, rgba(44,189,4,1) 50%, rgba(42,184,2,1) 51%, rgba(88,255,46,1) 100%);
    background: linear-gradient(to bottom, rgba(88,255,46,1) 0%, rgba(44,189,4,1) 50%, rgba(42,184,2,1) 51%, rgba(88,255,46,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#58ff2e', endColorstr='#58ff2e', GradientType=0 );
    color: #FFF !important;
}
</style>
</div> 

<div class="row container3"><div class="col-md-12">
<? if (!file_exists(realpath(__DIR__ . '/..').'/common/new2/special-header-1.php')) : ?>
<h2 class="text-center hh hh4"> Для вас подобраны организации для <span class="gold_font">получения займа или кредита</span> в Украине:</h2>
<? else : require(realpath(__DIR__ . '/..').'/common/new2/special-header-1.php'); endif; ?>
<? if (!file_exists(realpath(__DIR__ . '/..').'/common/new2/special-header-2.php')) : ?>
<h2 class="text-center hh hh4 grey" style="font-size: 18px;line-height:initial">На нашем сайте вы можете найти нужную информацию о кредитах и займах, которые можно получить в Украине. <br>Все публикуемые на сайте организации имеют лицензии и внесены в реестр кредитных организаций.</h2>
<? else : require(realpath(__DIR__ . '/..').'/common/new2/special-header-2.php'); endif; ?>
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
        
        echo '<div class="row"><div class="col-md-12 col-xs-12">';

        foreach($data as $item)
        {
            $domen = str_replace('www.','',$_SERVER['HTTP_HOST']);
            
            if (strpos($item['link'], 'guruleads'))
                $item['link'] = $item['link'].'?sub1=Offerwall';
            else if(strpos($item['link'], 'kviku'))
                $item['link'] = $item['link'].'';
            else if(strpos($item['link'], 'tech'))
                $item['link'] = $item['link'].'&ref_id=Offerwall';
            else if(strpos($item['link'], 'leadgid'))
                $item['link'] = $item['link'].'?source=Offerwall';
            else if(strpos($item['link'], 'leadbrothers'))
                $item['link'] = $item['link'].'?s1=Offerwall';
            else
                $item['link'] = $item['link'].'?source=Offerwall';

                $sum = number_format($item['amount'],0,'',' ');
                $im = $item['img'];
                $percent = $item['percent'];
                $href= $item['link'];
                $onclick = '"markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')"';
                $over_sum = number_format( $item['amount'] * ( $item['percent'] + 100) / 100 ,0,'',' ');
                $over_per_day = number_format( $item['amount'] * $item['percent'] / 100 ,0,'',' ');

                $words = array (
                    '<span></span>',
                    '<span class="bem_offer__note red2">Одобрение 100% сегодня</span>',
                    '<span class="bem_offer__note darkred2">Круглосуточная выдача</span>',
                    '<span class="bem_offer__note orange2">Займы без отказов</span>',
                    '<span class="bem_offer__note green2">Без документов</span>',
                    '<span class="bem_offer__note darkred2">Одобряют каждому</span>',
                    '<span class="bem_offer__note orange2">С плохой кредитной историей</span>',
                    '<span></span>'
                );
                $rand_word = $words[rand(0,7)];
                
                echo <<<END
                <div class="bem_offers__wrapper">
                <a href="$href" onclick=$onclick class="bem_offer" target="_blank" >$rand_word<div class="bem_offer__image"><img src="/templates/common/img/offers/$im.png" alt=""></div><div class="bem_offer__info"><div class="bem_offer__info-wrapper"><div class="bem_param bem_param_type_summ"><div class="top-text">
                Заем
                </div><div class="bottom-text">
                $sum &#8372;</div></div><div class="bem_offer__next-arrow"></div><div class="bem_param bem_param_type_percent"><div class="top-text">
                Процент
                </div><div class="bottom-text">
                от $percent% в день </div></div><div class="bem_offer__next-arrow"></div><div class="bem_param bem_param_type_commission"><div class="top-text">
                Переплата
                </div><div class="bottom-text">
                $over_per_day &#8372; </div></div>
                
                </div></div><div class="bem_offer__get"><div class="bem_offer__button">Получить деньги</div></div></a> </div>
END;
            } 
             
        echo '</div></div>'; 
            ?>
    </div></div>

<br><br>
<?php } else {  
    echo '<div><style scoped>';
    require realpath(__DIR__ . '/..').'/common/new2/css/lk2.php';
    echo '</style></div>'; 
    ?>

<div>
<style scoped>
@font-face{font-family:"'Dosis'";src:url(/templates/common/new2/fonts/Dosis-Regular.eot);src:url(/templates/common/new2/fonts/Dosis-Regular.eot?#iefix) format("embedded-opentype"),url(/templates/common/new2/fonts/Dosis-Regular.woff) format("woff"),url(/templates/common/new2/fonts/Dosis-Regular.ttf) format("truetype");font-weight:400;font-style:normal}
.hh4 {
    font-family: Dosis !important;
    font-size: 34px;
}
.hh3 {
  border-radius: 6px;
  background-color: rgb(255, 255, 255);
  max-height: 369px;
  margin-bottom: 20px;
  padding-top: 20px;
  border: 2px solid rgb(42, 130, 63);
  box-shadow: 0 1px 8px rgb(0, 0, 0);
}
.container3 {
    background: #f8f8f8 !important;
}
.caption {
  position: inherit;
  padding: 7px;
  text-align: center;
  width: 100%;
  height: 50px;
  font-size: 18px;
  color: #fff;
}
.lk-img2 {
    padding: 20px 0;
}
.lk-text {
    text-align: center;
    padding-top: 10px;
    font-size: 18px;
}
.center2 {text-align: center !important;}
.ex-main-btn2 {
    border-radius: 24px;
    background-color: rgb(255, 221, 45);
    max-width: 220px;
    color: #000;
    padding: 15px 20px;
    margin: 18px 10px;
    font-size: 18px;
    font-weight: 700;
    border: none;
}
@media (max-width: 470px) { 
    .caption {font-size: 16px; padding-top: 4px;}
    .lk-text{padding-top: 0; font-size: 14px;}
    .ex-main-btn2 {font-size: 15px;}
    .lk-img2 {padding: 10px 0;}
}
.red2 {background-color: #e8392c}  
.darkred2 {background-color: #cb2d4b}
.orange2 {background-color: #ff9d11}
.green2 {background-color: #2a823f}
.pink2 {background-color: #cb2d4b}
#img_agree {padding: 0 0 20px 0;}
h2 {margin: 20px 0 0 0 !important;font-weight: 700;}

ins, .adsbygoogle{
	text-align: center !important;
    max-height: none !important;
    height: none !important;
}
.gold {
    background-color: gold;
    border-radius: 15px;
    color: #000;
    padding: 10px;
    
}
.green {
    background-color: green;
    border-radius: 15px;
    color: #fff;
    padding: 10px;
    
}
.green_special {
    background-color: green; 
    color: #fff;
    padding: 15px;
    display: grid;
    font-size: 2em;
    text-align: center;
}
.yellow {
    background-color: yellow;
    border-radius: 15px;
    color: #000;
    padding: 10px;
    
}
.blue {
    background-color: blue;
    border-radius: 15px;
    color: #fff;
    padding: 10px;
    
} 
.empty {
    background-color: transparent;
    border-radius: 15px;
    color: #fff !important;
    padding: 10px;
    
}
.grey {color: #6b6b6b  !important;}
.gold_font {color: gold;}
figure.hh1 {
    border: 0 solid #FFDD2D;
	border: none !important;
}
tr>td:first-child {
    font-size: 16px;
}
.imgg {
    width: 70%;
    padding: 20px;
}
.lk_special_offer {
    font-size: 1.8em;
    font-weight: 700; 
     color: #00da00; 
} 
@media (max-width: 450px) { 
    .font08 {
        font-size: .8em;
    }
	.wordwrap{
		font-size: 0.9em;
	}
    .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
        padding: 4px;
    }
    figure.hh1 {
        padding-left: 0;
        padding-right: 0;
        padding-top: 10px;
        padding-bottom: 0px;
    }
    .ex-main-btn {
        font-size: .9em;
        margin-top: 0;
    }
    tr>td:first-child {
        font-size: 12px;
    }
    .col-xs-6 {
        padding-right: 5px !important;
        padding-left: 5px !important;
    }
    .gold, .empty, .blue, .yellow, .green {
        font-size: 11px !important;
    }
    .hh4 {
        padding-top: 0;
        font-size: 1.4em;
    }
    .imgg {
        width: 100%;
    }
    .lk_special_offer { 
        font-size: 1em;
    }
}
</style>
</div>
 

<div class="row container3"><div class="col-md-12">
<h2 class="text-center hh hh4"> Вам предварительно <span class="gold_font">одобрен займ</span> в этих организациях:</h2>
<h2 class="text-center hh hh4 grey" style="font-size: 19px;">Для 100% вероятности получения денег, заполните заявки во всех компаниях ниже</h2>
    <br>
    <div class="row" id="for_google"></div>
    
	 <div class="text-center hidden-xs" id="img_agree"><img src="/templates/common/img/stamp.png" /></div>
     
    <?php 
        function plural_type($n) { 
            return ($n%10==1 && $n%100!=11 ? 0 : ($n%10>=2 && $n%10<=4 && ($n%100<10 || $n%100>=20) ? 1 : 2)); 
        } 

        $_plural_years = array('год', 'года', 'лет');
        $_plural_months = array('месяц', 'месяца', 'месяцев');
        $_plural_days = array('дня', 'дня', 'дней');
        $_plural_times = array('раз', 'раза', 'раз');

        echo '<div class="row"><div class="col-md-12 col-xs-12">';

        foreach($data as $item)
        {
            $domen = str_replace('www.','',$_SERVER['HTTP_HOST']);

            if (strpos($item['link'], 'guruleads'))
                $item['link'] = $item['link'].'?sub1=Offerwall';
            else if(strpos($item['link'], 'kviku'))
                $item['link'] = $item['link'].'';
            else if(strpos($item['link'], 'tech'))
                $item['link'] = $item['link'].'&ref_id=Offerwall';
            else if(strpos($item['link'], 'leadgid'))
                $item['link'] = $item['link'].'?source=Offerwall';
            else
                $item['link'] = $item['link'].'?source=Offerwall';

            $words = array (
                '<div class="caption empty"><span></span></div>',
                '<div class="caption red2"><span>Одобрение 100% сегодня</span></div>',
                '<div class="caption darkred2"><span>Круглосуточная выдача</span></div>',
                '<div class="caption orange2"><span>Займа без отказов</span></div>',
                '<div class="caption green2"><span>Без документов</span></div>',
                '<div class="caption pink2"><span>Одобряют каждому</span></div>',
                '<div class="caption orange2"><span>С плохой кредитной историей</span></div>',
                '<div class="caption empty"><span></span></div>'
            );

            echo '<div class="col-md-3 col-xs-6" >
            <figure class="hh3">
                '.$words[rand(0,7)].'
                <img class="lk-img2 img-responsive" src="/templates/common/img/offers/'.$item['img'].'.png" alt="'.$item['title'].'">
                <div class="lk-text">Сумма: до '.number_format($item['amount'],0,'',' ').' &#8372;</div>
                <div class="lk-text">Основная ставка: '.$item['percent'].' <i class="fa fa-percent"></i></div>
                <div class="lk-text">Возраст: от '.$item['min_year'].' до '.$item['max_year'].' <i class="fa fa-user"></i></div>
                <div class="center2"><a href="'.$item['link'].'" onclick="markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')" target="_blank"><button type="button" class="ex-main-btn2">Получить деньги</button></a></div>
            </figure>
            </div>';
        }
        echo '</div></div>';?>
    </div></div>

<br><br>

<?php } ?> 
<?php require realpath(__DIR__ . '/..').'/'.$site.'/footer.php';?>