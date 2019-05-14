<?php 
$sum = "1000"; $period = "7";
if(isset($_GET['amount'])) 
{  
    if($_GET['amount'] >= "600" || $_GET['amount'] <= "10000")
        $sum = $_GET['amount'];
}

if(isset($_POST['period'])) 
{  
    if($_POST['amount'] >= "7" || $_POST['amount'] <= "14")
        $period = $_POST['period'];
}

if(isset($_POST['amount'])) 
{  
    if($_POST['amount'] >= "600" || $_POST['amount'] <= "10000")
        $sum = $_POST['amount'];
}

if(!isset($my_title))
{
    $my_title = 'Подача Заявки на Получение Займа Онлайн | Сервис Zaimcoin';
    $description = 'Хотите получить денежный заем в сжатые сроки?Тогда заполните несложную форму заявка на нашем онлайн-сервисе по выдаче денежных займов на Украине';
}
include "templates/common/new2/php/form_header.php";
include "header.php";
?>
<div class="container ex-form">
    <h1 class="text-center" id="to_scroll">Заполните ваши личные данные</h1>
    <div class="row">
        <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
            <?php $period; ?>
            <form id="anketa" action="/lk" method="post" novalidate autocomplete="off">
                <input type="hidden" name="display" id="display" value="0">
                <input type="hidden" name="referer" value="<?=$referer?>">
                <input type="hidden" name="id" value="">
                <input type="hidden" name="step" value="1">
                <input type="hidden" name="ad_id" value="<?=$ad_id?>"> 
                <input type="hidden" id="amount" name="amount" value="<?=$sum;?>" />
                <input type="hidden" id="period" name="period" value="<?=$period;?>" />
                <input type="hidden" name="fingerprint" id="fingerprint" value="">
                <div class="ex-form-content">
                    <div class="row tab-content">
                        <div role="tabpanel" class="tab-pane fade in active col-xs-12" id="firstTabContent">
                            <?php require 'form1.php'; ?>
                        </div>
                        <div role="tabpanel" class="tab-pane col-xs-12" id="secondTabContent">
                            <?php require 'form2.php'; ?>
                        </div>
                        <div role="tabpanel" class="tab-pane col-xs-12" id="lastTabContent">
                            <?php require 'form3.php'; ?>
                        </div>
                    </div>
                </div> 
            </form>
        </div>
    </div>
</div>
<!-- Modal Iphone -->
<a href="#" data-toggle="modal" id="modal2" data-target="#tosModal2"></a>
<style> 
@media (min-width: 768px) {
    .modal-dialog {
        width: 900px;
        margin: 30px auto;
    } 
}
</style>
<div class="modal fade" id="tosModal2" tabindex="-1" role="dialog" aria-labelledby="tosModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h1 class="modal-title" id="tosModalLabel">Подтвердите адрес электронной почты</h1> 
                
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <p><span id="form_name"></span> на указанный email было отправлено письмо. Подтвердите свою почту и участвуйте в розыгрыше Iphone XS уже 16.11.2018</p>
                        <img class='img-responsive' src="/templates/common/img/iphone2.png">
                        </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="text-center"><button type="button" class="btn btn-primary btn-spec" data-dismiss="modal"> Закрыть </button></div>
            </div>
        </div>
    </div>
</div>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- zaimcoin -->
<ins class="adsbygoogle"
    style="display:block"
    data-ad-client="ca-pub-4970738258373085"
    data-ad-slot="9741339751"
    data-ad-format="auto"
    data-full-width-responsive="true"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<?php include 'footer.php';?>