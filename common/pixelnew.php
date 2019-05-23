<?php
	$my_title = "Вам автоматически одобрен займ";
	if(!isset($description)) {
	$description = 'Zaimomir - лучший онлайн сервис по выдаче мгновенных займов и кредитов без проверки вашей кредитной истории. Только у нас лучшие кредитные предложения!';
	}

	$site = 'zaimomirsu';
	$site = str_replace("www.", "", $site);

	$this->load->model('offers/offers_model', 'pixelnaya');
	$data = $this->pixelnaya->all(12, 0, '1');

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
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title><?php echo $my_title;?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="Description" content="<?php echo $description;?>" />
	<meta name="Keywords" content="моментальный заем, займы, онлайн, деньги" />
	<meta name="robots" content="all" />
	<meta name="copyright" lang="ru" content="zaimomir.su" /> 
	<meta property="og:title" content="Срочные займы круглосуточно без проверок Онлайн" />
	<meta property="og:description" content="Zaimomir - лучший онлайн сервис по выдаче мгновенных займов и кредитов без проверки вашей кредитной истории.Только у нас лучшие кредитные предложения!"/>
	<meta property="og:image" content="https://zaimomir.su/templates/zaimomirsu/assets/img/creditcard.png"/>
	<meta property="og:type" content="website"/>
	<meta property="og:url" content="https://zaimomir.su/" />
	<meta name="twitter:card" content="https://zaimomir.su/templates/zaimomirsu/assets/img/creditcard.png"/>
	<meta name="twitter:title" content="Срочные займы круглосуточно без проверок Онлайн"/>
	<meta name="twitter:description" content="Zaimomir - лучший онлайн сервис по выдаче мгновенных займов и кредитов без проверки вашей кредитной истории.Только у нас лучшие кредитные предложения!"/>
	<meta name="twitter:image:src" content="https://zaimomir.su/templates/zaimomirsu/assets/img/creditcard.png"/>
	<meta name="twitter:url" content="https://zaimomir.su/"/>
	<meta name="twitter:domain" content="zaimomir.su"/>
	<!-- Favicons -->
	<link rel="shortcut icon" href="/templates/zaimomirsu/favicon/favicon-16x16.png" type="image/png">
	<link rel="apple-touch-icon" sizes="57x57" href="/templates/zaimomirsu/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/templates/zaimomirsu/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/templates/zaimomirsu/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/templates/zaimomirsu/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/templates/zaimomirsu/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/templates/zaimomirsu/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/templates/zaimomirsu/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/templates/zaimomirsu/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/templates/zaimomirsu/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/templates/zaimomirsu/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/templates/zaimomirsu/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/templates/zaimomirsu/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/templates/zaimomirsu/favicon/favicon-16x16.png">
	<link rel="manifest" href="/templates/zaimomirsu/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/templates/zaimomirsu/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff"> 
	<!-- Styles -->
	<link rel="stylesheet" href="/templates/zaimomirsu/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="/templates/zaimomirsu/assets/css/pixelstyle.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<script src="//cdn.sendpulse.com/js/push/2e801fea168aa576cb7129e36291c8e6_1.js" async></script>
</head>
<body>

<!-- header -->
<header data-block-type="headers" class="">
	<div class="container">
		<nav class="navbar navbar-expand-md">
			<a class="navbar-brand" href="/">
				<img src="/templates/zaimomirsu/assets/img/logo.png" height="30" alt="image">
			</a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav3" aria-controls="navbarNav3" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarNav3">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Документы</a>
						<div class="dropdown-menu" aria-labelledby="dropdown01">
							<a class="dropdown-item" href="/oferta">Публичная оферта</a>
							<a class="dropdown-item" href="/soglasie">Согласие на обработку данных</a>
							<a class="dropdown-item" href="/rules">Правила предоставления займов</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/about">О сервисе</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/faq">FAQ</a>
					</li>
				</ul>

				<button class="btn btn-outline-primary ml-md-3 modal-contact" data-toggle="modal" data-target="#askQuestion" href="#">Обратная связь</button>
			</div>
		</nav>
	</div>
</header>
<!-- /header -->


<!-- content -->
<section data-block-type="contents">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col col-md-12 text-center">
				<h1>Согласно вашим данным сформирован список онлайн займов со скидкой до 50%</h1>
				<p class="lead">Оставьте заявку в трех компаниях и повысьте шанс получить займ до 99%</p>
			</div>
		</div>
	</div>
</section>
<section class="pt-0 pt-sm-1 pt-md-2 pt-lg-3" style="min-height: 100vh;">
	<div class="container">
		<div class="row d-flex flex-row">
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
						 
						$temp++;
 
						$sum = number_format($item['amount'],0,'',' ');
						$im = $item['img'];
						$percent = $item['percent'];
						$href= $item['link'];
						$onclick = '"markTarget(\'pixel_result\', \''.$item['title'].'\', \''.$pixel.'\')"';
						$over_sum = number_format( $item['amount'] * ( $item['percent'] + 100) / 100 ,0,'',' ');
						$over_per_day = number_format( $item['amount'] * $item['percent'] / 100 ,0,'',' ');

						$words = array (
								'<div class="grid_offer_title2 grid_title_blue">Одобрение 100% сегодня</div>',
								'<div class="grid_offer_title2 grid_title_yellow">Круглосуточная выдача</div>',
								'<div class="grid_offer_title2 grid_title_blue">Займ без отказов</div>',
								'<div class="grid_offer_title2 grid_title_green">Без документов</div>',
								'<div class="grid_offer_title2 grid_title_yellow">Одобряют каждому</div>',
								'<div class="grid_offer_title2 grid_title_red grid_title_long">С плохой кредитной историей</div>',
						);

						$rand_word = $words[rand(0,5)];
						
						?>
						<div class="col-md-12">
							<a href="<?=$href?>" onclick=<?=$onclick?> target="_blank" >
								<div>
									<div class="grid_offer_img"><img src="/templates/common/img/offers/<?=$im?>.png" onError="this.onerror=null;this.src='/templates/common/img/offers/noimage.png'" alt=""></div>
									<div class="grid_title">
										<div class="grid_offer_title_empty text-warning">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<?php echo (rand(0,1)?'<i class="fas fa-star-half-alt"></i>':'<i class="fas fa-star"></i>')?>
										</div>
										<?php echo rand(0,1)? $rand_word : '' ?>
									</div>
									<div class="grid_offer_info">
										<div><i class="fas fa-ruble-sign"></i> сумма <?=$sum?></div>
										<div><i class="fas fa-percentage"></i> от <?=$percent?>% в день</div>
										<div><i class="fas fa-coins"></i> переплата <?=$over_per_day?> грн.</div>
									</div>
									<div class="grid_offer_button">Получить деньги</div>
								</div>                       
							</a>
						</div>
				<?php } ?>
		</div>
	</div>
</section>
<!-- /content -->


<!-- footer -->
<footer class="fdb-block footer-large bg-dark fp-active" data-block-type="footers">
	<div class="container">
		<div class="row align-items-top text-center text-md-left">
			<div class="col-12 col-sm-12 col-md-12 col-lg-3">
				<a href="/">
					<img src="/templates/zaimomirsu/assets/img/logo-footer.png" width="100%" alt="image">
				</a>
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-9 mt-4 mt-sm-0">
				<p>
					Максимальная процентная ставка по займу составляет 2% в день
					Пример расчета: при сумме займа в 1000 грн., проценты за пользование средствами составят 20 грн. в день, что примерно составляет 2% в день. APR — 730%. Никаких дополнительных комиссий и платежей за пользование кредитом Компания не взимает. Условия продления финансирования (займа): Заёмщик вправе продлить срок займа, оплатив только проценты за пользование. Никаких дополнительных комиссий и платежей Компания не взимает. Выдается на срок от 61 дня до 1 года. ТОВ «СПОЖИВЧИЙ ЦЕНТР», ЄДРПОУ 37356833, 01032, г. Киев, ул. Саксаганского 133-А, тел. (044) 498 10 21, info@zaimomir.su. Лицензия выдана Нацкомфинуслуг, распоряжение от 28.02.2017 р. №438.         
				</p>
			</div>
		</div>
	</div>
</footer>
<!-- /footer -->

<!-- modal contact -->
<div id="askQuestion" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
				<div class="modal-content">
						<div class="modal-body">
								<form>
									<div class="col-12">
										<div class="row">
											<div class="col text-center">
												<h1>Обратная связь</h1>
											</div>
										</div>
										<div class="row align-items-center">
											<div class="col mt-4">
												<input type="name" class="form-control" placeholder="Имя">
											</div>
										</div>
										<div class="row align-items-center mt-4">
											<div class="col">
												<input type="email" class="form-control" placeholder="Email">
											</div>
										</div>
										<div class="row align-items-center mt-4">
											<div class="col">
												<textarea type="text" class="form-control" placeholder="Сообщение"></textarea>
											</div>
										</div>
										<div class="row justify-content-center mt-4">
											<div class="col text-center">
												<button class="btn btn-primary mt-4">Отправить</button>
											</div>
										</div>
									</div>
								</form>
						</div>
				</div>
		</div>
</div>
<!-- /modal contact -->

<!-- scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
	window.jQuery || 
	document.write('<script src="/templates/zaimomirsu/assets/js/jquery-3.4.1.min.js"><\/script>')
</script>
<script src="/templates/zaimomirsu/assets/js/bootstrap-4.3.1.min.js"></script> 
<!-- /scripts -->


<!-- popup08 -->
<?php 
function getDomain2()
{
	$CI =& get_instance();
	return preg_replace("/^[\w]{2,6}:\/\/([\w\d\.\-]+).*$/","$1", $CI->config->slash_item('base_url'));
}
$text = 'Вам одобрено 10 000 <i class="fas fa-hryvnia"></i> <br> после заявки';
$img = 'safezaim';
$url = 'https://t.z24.tech/click?pid=29&offer_id=65&sub1=Popup';
if ($this->uri->segment(1) == 'offerwall' || getDomain2() == 'vamos.su' || getDomain2() == 'zamos.su') {
	$text = 'Вам одобрено 10 000 &#8372;<br>после заявки';
	$img = 'visame';
	$url = 'https://track.leadbrothers.co/sensor/5ccfedf78a5da55786a735ad?s1=Popup';
}
?>
<div class="notificate-wrapper pulse2"><table class="table table-hover table-responsive">
	<thead>
		 <tr> 
			 <td class="popup08"  style="text-align: center;"><i class="fas fa-times close-btn close_spec"></i><span><?=$text?></span></td> 
		</tr>
	</thead>
	<tbody>
		<tr class="popup08">
			<td class="text-center"  ><a id="notificate_url" class="text-center" rel="noopener" href="<?=$url?>" target="_blank"><img class="notice-image img-fluid" id="change_img" style="max-width: 300px;" src="https://zaimomir.su/templates/common/img/offers/<?=$img?>.png" alt="<?=$img?>.png"></a></td> 
		</tr>
		<tr class="popup08">
			<td class="text-center">
				<a id="notificate_url2" href="<?=$url?>" rel="noopener" target="_blank"><div><input type="button" class="btn_popup" value="Оставить заявку"></div></a>
				</td>
		</tr>
	</tbody>
</table>
</div>
<script>
	$('.notificate-wrapper .close-btn').click(function(){
		$('.notificate-wrapper').hide()
	})
</script>
<!-- /popup08 -->

</body>
</html>
