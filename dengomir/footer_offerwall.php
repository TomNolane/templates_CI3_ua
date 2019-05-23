<!-- adsense -->
<!-- Микроденьги -->
<div class="container text-center my-3">
    <ins class="adsbygoogle"
         style="display:block"
         data-ad-client="ca-pub-4970738258373085"
         data-ad-slot="4467713186"
         data-ad-format="auto"
         data-full-width-responsive="true"></ins>
    <script>
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script>    
</div>
<!-- /adsense -->

<!-- footer -->
<footer class="fdb-block footer-large bg-dark fp-active mt-5" data-block-type="footers">
    <div class="container">
        <div class="row align-items-top text-center text-md-left">
            <div class="col-12 col-sm-12 col-md-12 col-lg-3 text-center">
                <a href="/">
                    <img src="/templates/dengomir/assets/img/icons/logo-footer.png" alt="image">
                </a>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-9 mt-4 mt-sm-0">
                <p>
                    Максимальная процентная ставка по займу составляет 2% в день
                    Пример расчета: при сумме займа в 1000 грн., проценты за пользование средствами составят 20 грн. в день, что примерно составляет 2% в день. APR — 730%. Никаких дополнительных комиссий и платежей за пользование кредитом Компания не взимает. Условия продления финансирования (займа): Заёмщик вправе продлить срок займа, оплатив только проценты за пользование. Никаких дополнительных комиссий и платежей Компания не взимает. Выдается на срок от 61 дня до 1 года. ТОВ «СПОЖИВЧИЙ ЦЕНТР», ЄДРПОУ 37356833, 01032, г. Киев, ул. Саксаганского 133-А, тел. (044) 498 10 21, info@dengomir.su. Лицензия выдана Нацкомфинуслуг, распоряжение от 28.02.2017 р. №438.         
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
<script src="/templates/dengomir/assets/js/bootstrap-4.3.1.min.js"></script> 
<!-- /scripts -->

<?php 
    require 'templates/common/popup.php'; 
    require 'yandexmetrika.php';
    //require 'googleanalytics.php';
    //require 'google_tag_manager.php';

    if ($this->uri->segment(1) == ' ' 
     || $this->uri->segment(1) == '' 
     || $this->uri->segment(1) == 'index' 
     || $this->uri->segment(1) == 'form') 
    { 
        echo '<script src="/templates/mikrodengi/assets/js/loanCalculator.js"></script>';
        if ($this->uri->segment(1) == '' 
         || $this->uri->segment(1) == 'index' 
         || $this->uri->segment(1) == ' ') 
        {
            echo '<script src="/templates/common/new2/js/for_index.js"></script>';
        }
    } 

    if ($this->uri->segment(1) == 'lk' 
     || $this->uri->segment(1) == 'lk1' 
     || $this->uri->segment(1) == 'lk2')
    {
        echo '
        <!-- Global site tag (gtag.js) - Google Ads: 755948010 --> <script async src="https://www.googletagmanager.com/gtag/js?id=AW-755948010"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag(\'js\', new Date()); gtag(\'config\', \'AW-755948010\'); </script> 
        <!-- Event snippet for Микроденьги conversion page --> <script> gtag(\'event\', \'conversion\', {\'send_to\': \'AW-755948010/tj6gCN2-t5oBEOqzu-gC\'}); </script>';
    }
?>

</body>
</html>