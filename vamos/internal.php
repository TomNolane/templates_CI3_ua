<?php
if ($this->uri->segment(1) == 'robots.txt'){
    header("Content-type: text/plain");
    require 'internal-robots.txt.php';
} else {
    $my_title = ''; $description = ''; $universal_folder = 0; $price = "4 000"; $prefix = '?aff_sub1=#name#&aff_sub=#name#&source=#name#&s1=#name#&subid=#name#&sub1=#name#'; $prefix2 = '&aff_sub1=#name#&aff_sub=#name#&source=#name#&s1=#name#&subid=#name#&sub1=#name#';
    switch($this->uri->segment(1)){
        case 'dineron':
        case 'dinerok':
        case 'dineroq':
        case 'dinerog':
        case 'dinerow':
            $main = 'dinero';
            $link = 'https://pxl.leads.su/click/f8575011212d4ad48b894d278b8c2ad8'.$prefix;
            $my_title = 'Dinero Лучший Онлайн Сервис На Украине по Подбору Выгодных Займов'; 
            $description = 'Dinero осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'checkmoneyn':
        case 'checkmoneyk':
        case 'checkmoneyq':
        case 'checkmoneyg':
        case 'checkmoneyw':
            $main = 'checkmoney';
            $link = 'https://gl.guruleads.ru/click/40/75'.$prefix;
            $my_title = 'Сheckmoney Лучший Онлайн Сервис На Украине по Подбору Выгодных Займов'; 
            $description = 'Сheckmoney осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'mycreditn':
        case 'mycreditk':
        case 'mycreditq':
        case 'mycreditg':
        case 'mycreditw':
            $main = 'mycredit';
            $link = 'https://pxl.leads.su/click/850c2ebaa542cd97790292cd6933cb7c'.$prefix;
            $my_title = 'Mycredit Лучший Онлайн Сервис На Украине по Подбору Выгодных Займов'; 
            $description = 'Mycredit осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'miloann':
        case 'miloank':
        case 'miloanq':
        case 'miloang':
        case 'miloanw':
            $main = 'miloan';
            $link = 'https://pxl.leads.su/click/4e9d18adeadcc929e1e96afd5148bd83'.$prefix;
            $my_title = 'Miloan Лучший Онлайн Сервис На Украине по Подбору Выгодных Займов'; 
            $description = 'Miloan осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'mywalletn':
        case 'mywalletk':
        case 'mywalletq':
        case 'mywalletg':
        case 'mywalletw':
            $main = 'mywallet';
            $link = 'https://pxl.leads.su/click/c90dc5af727cac66e191f742ebbe7051'.$prefix;
            $my_title = 'Mywallet Лучший Онлайн Сервис На Украине по Подбору Выгодных Займов'; 
            $description = 'Mywallet осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        case 'safezaimn':
        case 'safezaimk':
        case 'safezaimq':
        case 'safezaimg':
        case 'safezaimw':
            $main = 'safezaim';
            $link = 'https://t.z24.tech/click?pid=29&offer_id=65&ref_id=Push_6'.$prefix2;
            $my_title = 'Safezaim Лучший Онлайн Сервис На Украине по Подбору Выгодных Займов'; 
            $description = 'Safezaim осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
        default:
            $main = 'dinero';
            $link = 'https://pxl.leads.su/click/f8575011212d4ad48b894d278b8c2ad8'.$prefix;
            $my_title = 'Dinero Лучший Онлайн Сервис На Украине по Подбору Выгодных Займов'; 
            $description = 'Dinero осуществляет посреднические услуги между клиентом, который хочет получить деньги в заём, и кредитным учреждением, чья деятельность лицензирована';
            break;
    }
    
    if ($this->uri->segment(1) == 'about') require 'templates/vamos/internal-about.php';
    elseif ($this->uri->segment(1) == 'faq') require 'templates/vamos/internal-faq.php';
    elseif ($this->uri->segment(1) == 'rules') require 'templates/vamos/internal-rules.php';
	elseif ($this->uri->segment(1) == 'oferta') require 'templates/vamos/internal-oferta.php';
	elseif ($this->uri->segment(1) == 'soglasie') require 'templates/vamos/internal-soglasie.php';
	elseif ($this->uri->segment(1) == 'zaim-bank') require 'templates/vamos/internal-zaim-bank.php'; 
	elseif ($this->uri->segment(1) == 'zaim-qiwi') require 'templates/vamos/internal-zaim-qiwi.php';
	elseif ($this->uri->segment(1) == 'zaim-yandex') require 'templates/vamos/internal-zaim-yandex.php';
	elseif ($this->uri->segment(1) == 'zaim-contact') require 'templates/vamos/internal-zaim-contact.php';
	elseif ($this->uri->segment(1) == 'zaim-card') require 'templates/vamos/internal-zaim-card.php';
	elseif ($this->uri->segment(1) == 'personal-data') require 'templates/vamos/internal-personal-data.php';
	elseif ($this->uri->segment(1) == 'calls') require 'templates/vamos/internal-calls.php';
	elseif ($this->uri->segment(1) == 'regulation') require 'templates/vamos/internal-regulation.php';
	elseif ($this->uri->segment(1) == 'safety') require 'templates/vamos/internal-safety.php';
    else require 'templates/vamos/universal.php';
    //file_put_contents('log', $this->uri->segment(2).PHP_EOL, FILE_APPEND);
    }