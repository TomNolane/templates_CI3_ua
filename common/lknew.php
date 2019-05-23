<?php
    $my_title = "Вам персональное предложение";

    $site = str_replace("www.", "", $site);
    $site = str_replace(".tomnolane", "", $site);
    $site = str_replace("bzaim5", "bzaim", $site);
    $site = str_replace("zaimomir", "zaimomirsu", $site);
    $site = str_replace("zaimnow", "zaimnowsu", $site);
    $site = str_replace("zaimcoin", "zaimcoinsu", $site);

    $this->load->model('offers/offers_model', 'pixelnaya');
    $data = $this->pixelnaya->all(8, 0);

    // IP
    $this->load->helper('ip');
    // GEO
    require_once FCPATH.'modules/ipgeobase/ipgeobase.php';
    $gb = new IPGeoBase();
    $geo = $gb->getRecord(IP::$ip);
    if ($geo) {
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


    require realpath(__DIR__ . '/..').'/'.$site.'/header_offerwall.php';
?>
<!-- content -->
<section data-block-type="contents" style="padding-bottom: 0;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col col-md-12 text-center">
                <h1>Заявка с таким номером телефона уже существует, но вам предварительно одобрен займ в организациях ниже:</h1>
                <p class="lead">Для 100% вероятности получения денег, заполните заявки в трёх компаниях</p>
            </div>
        </div>
    </div>
</section>
<section class="pt-0 pt-sm-1 pt-md-2 pt-lg-3" style="min-height: 100%;">
    <div class="container">
        <div class="row d-flex flex-row" style="padding-top: 18px !important;">
                <?php 
                function plural_type($n) { 
                        return ($n%10==1 && $n%100!=11 ? 0 : ($n%10>=2 && $n%10<=4 && ($n%100<10 || $n%100>=20) ? 1 : 2)); 
                } 

                $_plural_years = array('год', 'года', 'лет');
                $_plural_months = array('месяц', 'месяца', 'месяцев');
                $_plural_days = array('дня', 'дня', 'дней');
                $_plural_times = array('раз', 'раза', 'раз');
                $temp = 0;
                
                foreach($data as $item)
                {
                        //break;
                        $domen = str_replace('www.','',$_SERVER['HTTP_HOST']);
                        $item['link'] = str_replace("#site1", ucfirst($domen), $item['link']);
                        $item['link'] = str_replace("#site", $domen, $item['link']);

                        if ( $domen == 'zaimhome.ru' ){
                                $item['link'] = str_replace("https://kviku.ru/cards/?promo=nb&utm_source=bzaim5", 'https://kviku.ru/cards/?promo=nb&utm_source=zaimhome', $item['link']);
                        }
                        if ( $domen == 'dengoman.ru' ){
                                $item['link'] = str_replace("https://kviku.ru/cards/?promo=nb&utm_source=bzaim5", 'https://kviku.ru/cards/?promo=nb&utm_source=dengoman', $item['link']);
                        }            
                        if ( $domen == 'dengibystra.ru' ){
                                $item['link'] = str_replace("https://kviku.ru/cards/?promo=nb&utm_source=bzaim5", 'https://kviku.ru/cards/?promo=nb&utm_source=dengibystra', $item['link']);
                        }
 
                        if(strpos($item['link'], "aff_sub1=") == true)
                        {
                                $item['link'] = str_replace( "aff_sub1=#site1", $domen, $item['link']);
                                $item['link'] = str_replace( "aff_sub1=#site", $domen, $item['link']);

                                if(trim($this->input->get('utm_source', TRUE)) != false)
                                        $item['link'] = $item['link'].'&aff_sub2='.$this->input->get('utm_source', TRUE);
                                else
                                        $item['link'] = $item['link'].'&aff_sub2='.$domen;

                                if(trim($this->input->get('utm_campaign', TRUE)) != false)
                                        $item['link'] = $item['link'].'&aff_sub3='.$this->input->get('utm_campaign', TRUE);
                                else if(trim($this->input->get('campaign_id', TRUE)) != false)
                                        $item['link'] = $item['link'].'&aff_sub3='.$this->input->get('campaign_id', TRUE);
                                else if(trim($this->input->get('doi', TRUE)) != false)
                                        $item['link'] = $item['link'].'&aff_sub3=doi';
                                else
                                        $item['link'] = $item['link'].'&aff_sub3='.$domen;

                                if(trim($this->input->get('utm_term', TRUE)) != false)
                                        $item['link'] = $item['link'].'&aff_sub4='.$this->input->get('utm_term', TRUE);
                                else if(trim($this->input->get('utm;_term', TRUE)) != false)
                                        $item['link'] = $item['link'].'&aff_sub4='.$this->input->get('utm;_term', TRUE);
                                else if(trim($this->input->get('keyword', TRUE)) != false)
                                        $item['link'] = $item['link'].'&aff_sub4='.$this->input->get('keyword', TRUE);
                                else
                                        $item['link'] = $item['link'].'&aff_sub4='.$domen;
                        }
                        else if (strpos($item['link'], "aff_sub=") == true) 
                        {
                                $item['link'] = str_replace( "aff_sub=bzaim5.ru", "aff_sub=".$domen, $item['link']);
                                $item['link'] = str_replace( "aff_sub2=#site", "", $item['link']);
                                $item['link'] = str_replace( "aff_sub2=#site1", "", $item['link']);

                                if(trim($this->input->get('utm_source', TRUE)) != false)
                                        $item['link'] = $item['link'].'&aff_sub2='.$this->input->get('utm_source', TRUE);
                                else
                                        $item['link'] = $item['link'].'&aff_sub2='.$domen;

                                if(trim($this->input->get('utm_campaign', TRUE)) != false)
                                        $item['link'] = $item['link'].'&aff_sub3='.$this->input->get('utm_campaign', TRUE);
                                else if(trim($this->input->get('campaign_id', TRUE)) != false)
                                        $item['link'] = $item['link'].'&aff_sub3='.$this->input->get('campaign_id', TRUE);
                                else if(trim($this->input->get('doi', TRUE)) != false)
                                        $item['link'] = $item['link'].'&aff_sub3=doi';
                                else
                                        $item['link'] = $item['link'].'&aff_sub3='.$domen;

                                if(trim($this->input->get('utm_term', TRUE)) != false)
                                        $item['link'] = $item['link'].'&aff_sub4='.$this->input->get('utm_term', TRUE);
                                else if(trim($this->input->get('utm;_term', TRUE)) != false)
                                        $item['link'] = $item['link'].'&aff_sub4='.$this->input->get('utm;_term', TRUE);
                                else if(trim($this->input->get('keyword', TRUE)) != false)
                                        $item['link'] = $item['link'].'&aff_sub4='.$this->input->get('keyword', TRUE);
                                else
                                        $item['link'] = $item['link'].'&aff_sub4='.$domen;
                        }
                        else if (strpos($item['link'], "promo=") == true)
                        {
                                $item['link'] = str_replace( "utm_source=bzaim5", "utm_source=".$domen, $item['link']);

                                if(trim($this->input->get('utm_source', TRUE)) != false)
                                        $item['link'] = $item['link'].'&aff_sub2='.$this->input->get('utm_source', TRUE);
                                else
                                        $item['link'] = $item['link'].'&aff_sub2='.$domen;

                                if(trim($this->input->get('utm_campaign', TRUE)) != false)
                                        $item['link'] = $item['link'].'&aff_sub3='.$this->input->get('utm_campaign', TRUE);
                                else if(trim($this->input->get('campaign_id', TRUE)) != false)
                                        $item['link'] = $item['link'].'&aff_sub3='.$this->input->get('campaign_id', TRUE);
                                else if(trim($this->input->get('doi', TRUE)) != false)
                                        $item['link'] = $item['link'].'&aff_sub3=doi';
                                else
                                        $item['link'] = $item['link'].'&aff_sub3='.$domen;

                                if(trim($this->input->get('utm_term', TRUE)) != false)
                                        $item['link'] = $item['link'].'&aff_sub4='.$this->input->get('utm_term', TRUE);
                                else if(trim($this->input->get('utm;_term', TRUE)) != false)
                                        $item['link'] = $item['link'].'&aff_sub4='.$this->input->get('utm;_term', TRUE);
                                else if(trim($this->input->get('keyword', TRUE)) != false)
                                        $item['link'] = $item['link'].'&aff_sub4='.$this->input->get('keyword', TRUE);
                                else
                                        $item['link'] = $item['link'].'&aff_sub4='.$domen;
                        }

                        if (strpos($item['link'], 'guruleads'))
                            $item['link'] = $item['link'].'?sub1=Vitrina';
                        else if(strpos($item['link'], 'kviku'))
                            $item['link'] = $item['link'].'';
                        else if(strpos($item['link'], 'g24.me'))
                            $item['link'] = $item['link'].'?subid=Vitrina';
                        else if(strpos($item['link'], 'tech'))
                            $item['link'] = $item['link'].'&sub1=Vitrina';
                        else if(strpos($item['link'], 'leadgid'))
                            $item['link'] = $item['link'].'?source=Vitrina';
                        else if(strpos($item['link'], 'leadbrothers'))
                            $item['link'] = $item['link'].'?s1=Vitrina';
                        else
                            $item['link'] = $item['link'].'?source=Vitrina';                      
                         
                        $temp++;
 
                        $sum = $item['amount'];
                        $im = $item['img'];
                        $percent = $item['percent'];
                        $href= $item['link'];
                        $onclick = '"markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')"';
                        $over_sum = number_format( $item['amount'] * ( $item['percent'] + 100) / 100 ,0,'',' ');
                        $over_per_day = round( ((int) $sum * (double) $percent ) / 100, 1);

                        $words = array (
                                '<div class="grid_lk_offer_title2 grid_lk_title_blue">Одобрение 100% сегодня</div>',
                                '<div class="grid_lk_offer_title2 grid_lk_title_yellow">Круглосуточная выдача</div>',
                                '<div class="grid_lk_offer_title2 grid_lk_title_blue">Займ без отказов</div>',
                                '<div class="grid_lk_offer_title2 grid_lk_title_green">Без документов</div>',
                                '<div class="grid_lk_offer_title2 grid_lk_title_yellow">Одобряют каждому</div>',
                                '<div class="grid_lk_offer_title2 grid_lk_title_red grid_title_long">С плохой кредитной историей</div>',
                        );

                        $rand_word = $words[rand(0,5)];
                        
                        ?>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-5 mx-auto p-1 p-lg-2 mb-lg-5 col-xl-3 text-center grid_lk_offer_item align-self-stretch">
                            <a href="<?=$href?>" onclick=<?=$onclick?> target="_blank" class="shadow" >
                                <?php echo rand(0,1)? '<div class="grid_lk_title">'.$rand_word.'</div>' : '' ?>
                                <div class="grid_lk_wrap">
                                    <div class="grid_lk_offer_img"><img src="/templates/common/img/offers/<?=$im?>.png" onError="this.onerror=null;this.src='/templates/common/img/offers/noimage.png'" alt=""></div>
                                    <div class="grid_lk_offer_info">
                                        <div><i class="fas fa-hryvnia"></i> сумма <?=$sum?></div>
                                        <div><i class="fas fa-percentage"></i> от <?php 
                                        echo preg_replace('/\.?0+$/', '', $percent);
                                        ?>% в день</div>
                                        <div><i class="fas fa-coins"></i> переплата <?=$over_per_day?> грн.</div>
                                    </div>
                                    <div class="grid_lk_offer_button">Получить деньги</div>
                                </div>                       
                            </a>
                        </div>
                <?php } ?>
        </div>
    </div>
</section>
<!-- /content -->

<?php require realpath(__DIR__ . '/..').'/'.$site.'/footer_offerwall.php'; ?>
