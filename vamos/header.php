<?php
    require 'templates/common/new/php/check_bot.php';
    $my_title = ''; $description = ''; $universal_folder = 0; $price = "4 000";
    
    $domen = str_replace('www.','',$_SERVER['HTTP_HOST']);
    $link = str_replace("#site1", ucfirst($domen), $domen);
    $link = str_replace("#site", $domen, $link);

    $domen = $this->uri->segment(1);
    
    if(isset($domen[1]))
        $domen = $domen[1];

    switch($domen)
    {
        case 'p': $domen = "push-".$this->uri->segment(1).'_'.date("d").'_'.date("m"); break;
        case 'e': $domen = "email-".$this->uri->segment(1).'_'.date("d").'_'.date("m"); break;
        default; $domen = "sms-".$this->uri->segment(1).'_'.date("d").'_'.date("m"); break;
    }

    if($this->input->get())
        $link = str_replace("#name#", implode('',$this->input->get())."_".$domen, $link);
    else 
        $link = str_replace("#name#", $domen, $link);

    function getDomainUrl()
    {
        $CI =& get_instance();
        
        return preg_replace("/^[\w]{2,6}:\/\/([\w\d\.\-]+).*$/","$1", $CI->config->slash_item('base_url'));
    }

    $maindomain = getDomainUrl();
    $email = "info@".$maindomain;
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if($this->uri->segment(1) != 'index' && $this->uri->segment(1) != '') echo $my_title; else echo $maindomain.' доступные займы';?></title>
    <meta name="description" content="<?=$description?>">
    <meta property="og:url" content="https://<?=$maindomain?>.su/">
    <meta property="og:title" content="Вам одобрено!">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
    <meta property="og:image" content="/templates/vamos/img/universal/">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="x-dns-prefetch-control" content="on">
    <link rel="canonical" href="https://<?=$maindomain?>/">
    <link rel="shortcut icon" href="/templates/vamos/img/vamos.ico" type="image/x-icon">
    <link rel="stylesheet" href="/templates/vamos/css/universal/0/tilda-grid-3.0.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="/templates/vamos/css/universal/0/tilda-blocks-2.12.css" type="text/css" media="all">
    <link rel="stylesheet" href="/templates/vamos/css/universal/0/tilda-animation-1.0.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="/templates/vamos/css/universal/0/tilda-slds-1.4.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="/templates/vamos/css/universal/0/tilda-zoom-2.0.min.css" type="text/css" media="all">
    <link rel="stylesheet" type="text/css" href="/templates/vamos/css/universal/0/custom.css">
	<script src="/templates/vamos/js/universal/jquery-1.10.2.min.js"></script>
    <script src="/templates/vamos/js/universal/osd.js"></script>
    <script async="" id="tildastatscript" src="/templates/vamos/js/universal/tildastat-0.2.min.js"></script>
    <script async="" id="topmailru-code" src="/templates/vamos/js/universal/code.js"></script>
    <script src="/templates/vamos/js/universal/tilda-scripts-2.8.min.js"></script>
    <script src="/templates/vamos/js/universal/tilda-blocks-2.7.js"></script>
    <script src="/templates/vamos/js/universal/lazyload-1.3.min.js" charset="utf-8"></script>
    <script src="/templates/vamos/js/universal/tilda-animation-1.0.min.js" charset="utf-8"></script>
    <script src="/templates/vamos/js/universal/typed.min.js" charset="utf-8"></script>
    <script src="/templates/vamos/js/universal/tilda-slds-1.4.min.js" charset="utf-8"></script>
    <script src="/templates/vamos/js/universal/hammer.min.js" charset="utf-8"></script>
    <script src="/templates/vamos/js/universal/tilda-zoom-2.0.min.js" charset="utf-8"></script>
    <?php if($maindomain != 'zaimnow.su') {?>
        <script src="//cdn.sendpulse.com/js/push/faf99f725c09282dc9ec8923302e3af9_1.js" async></script>
    <?php } else { ?>
        <script src="//cdn.sendpulse.com/js/push/107abe67dbf5da281944ecd48c0cba39_1.js" async></script>
    <?php }?>
    <style>
    <?php
    echo '.t338__logo{float: unset;max-width: 220px !important;}.t338__title{margin-bottom: 40px;padding-top: 200px;text-align: center;} .t-prefix_1{padding-left: 0;padding-right: 0;}';
    echo '@media (max-width: 450px) {.t338__logo{margin-top: 0;float: initial;margin-bottom:0;} }';
    if($this->uri->segment(1) == 'hz' || $this->uri->segment(1) == 'mz')
    {
        echo '#spec, #spec2 {background-color: #fff !important;padding: 10px !important;border-radius: 10px !important;}';
    }
    if($this->uri->segment(1) == 'bg' || $this->uri->segment(1) == 'dz' || $this->uri->segment(1) == 'mz' || $this->uri->segment(1) == 'oz')
    {
        echo '@media (max-width: 640px) {.t-cover__carrier{background-position: center right !important;} .t-valign_middle{vertical-align: unset !important;}.t338__title{padding-top: 0;} }';
    }
    if($this->uri->segment(1) == 'ek' || $this->uri->segment(1) == 'cr')
    {
        echo '@media (max-width: 640px) {.t-valign_middle{vertical-align: unset !important;}.t338__title{padding-top: 0;} }';
    }
    ?>
    @keyframes shadow-pulse {
	0% {
		-webkit-box-shadow: 1px 1px 10px 0 rgba(0, 0, 0, 0.75);
		-moz-box-shadow: 1px 1px 10px 0 rgba(0, 0, 0, 0.75);
		box-shadow: 1px 1px 10px 0 rgba(0, 0, 0, 0.75)
	}

	100% {
		box-shadow: 0 0 0 15px rgba(0, 0, 0, 0)
	}
}
.t-prefix_1 {
      padding-left: 0;
      padding-right: 0;
      margin-top: 20px;
      vertical-align: unset;
}
.pulse2 {
	animation: shadow-pulse 1s infinite !important;
	-webkit-animation: shadow-pulse 1s infinite !important;
}
.t-container {max-width: 1700px;}
.t-col_11 {max-width: 100%;}
.t338__btn {
    font-size: 18px;
    height: 70px;
}
.t-col_12 {max-width: inherit !important;} 

<?php require "templates/common/new/css/common.css"; ?>
li > a {
    font-size: 16px;
    color: #000;
    margin: 0 auto;
    vertical-align: middle;
    margin-top: 20px;
}
.dropdown-menu {
    left: auto !important;
}
    </style>
</head>
<?php
$previous = '';

if(isset($_SERVER['HTTP_REFERER'])) {
    $previous = $_SERVER['HTTP_REFERER'];

}
?>
<body class="t-body" style="margin: 0px;">
    <header style="margin: 0 20px; top: 0;">
    <nav class="navbar">
		<div class="col-md-12">
			<div class="navbar-header">
				<a href="/" class="navbar-brand">
                    <?php if($maindomain != 'zaimnow.su') {?>
					    <img src="/templates/vamos/img/vamos.png" class="t338__logo t-img">
                    <?php } else { ?>
                        <img src="/templates/vamos/img/zaimnow.png" class="t338__logo t-img">
                    <?php }?>
				</a>
			</div>
			<div class="navbar-collapsem hidden-xs" id="navbar-collapse-1">
				<ul class="nav navbar-nav menu">
					<li>
						<a href="/about">
							О сервисе
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>  
  </header> 
    <?php require 'adsence.php'; ?> 
    <div id="allrecords" class="t-records" data-hook="blocks-collection-content-node" data-tilda-project-id="663907"
        data-tilda-page-id="3385037" data-tilda-page-alias="push" data-tilda-formskey="93c3cbd6dbbe2328e90d7d614020b440"
        style="overflow-x: hidden;">