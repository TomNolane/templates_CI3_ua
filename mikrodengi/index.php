<?php require 'header.php'; ?>
<main>
    <form id="anketa" action="/form<?=$utm;?>" method="post">
        <input type="hidden" id="amount" name="amount" value="1000" />
        <input type="hidden" id="period" name="period" value="7" />
        <input type="hidden" id="form_slrd" name="form_slrd" value="4" />
        <input type="hidden" name="fingerprint" id="fingerprint" value="">
        <input type="hidden" name="ip" id="ip" value="<?php echo $ip;?>">
        <input type="hidden" name="referer" value="<?php if (isset($_SERVER['HTTP_REFERER'])) echo $_SERVER['HTTP_REFERER']; ?>">
        <?php if (!empty($_REQUEST['ad_id'])) echo '<input type="hidden" name="ad_id" value="'.$_REQUEST['ad_id'].'">'; ?>
        <div class="container ">
        <div class="ex-main-section">
            <div class="row">
                <div class="col-md-6">
                    <div class="ex-main-left">
                        <h1>деньги<br>
                            за 7 минут,
                            <span>независимо<br>
                            от кредитной
                            истории</span>
                        </h1>
                        <ul class="ex-cards hidden-xs hidden-sm">
                            <li class="active"><a data-toggle="tab" href="/zaim-card"><img src="/templates/mikrodengi/assets/img/visa-color.png" alt="visa-color.png"></a></li>
                            <li><a data-toggle="tab" href="/zaim-card"><img src="/templates/mikrodengi/assets/img/mastercard-color.png" alt="mastercard-color.png"></a>
                            </li>
                            <li><a data-toggle="tab" href="/zaim-card"><img src="/templates/mikrodengi/assets/img/maestro-color.png" alt="maestro-color.png"></a></li>
                            <li><a data-toggle="tab" href="/zaim-card"><img src="/templates/mikrodengi/assets/img/mir-color.png" alt="mir-color.png"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ex-calc-block">
                        <div class="ex-wrapper">
                            <div class="ex-slider-block">
                                <div class="row">
                                    <div class="col-md-8"><p class="ex-slider-val-1"></p></div>
                                    <div class="col-md-4"><p class="ex-slider-val-2"></p></div>
                                </div>

                            </div>
                            <div class="ex-range-slider-ruble ex-pr">
                                <div class="ex-info">
                                    <span>сумма (в гривнах)</span>
                                </div>
                                <input id="rangeSlider1" name="rangeSlider"/>
                            </div>
                            <div class="ex-range-slider-time ex-pr">
                                <div class="ex-info">
                                    <span>срок (в днях)</span>
                                </div>
                                <input id="rangeSlider2" name="rangeSlider2"/>
                            </div>
                            <div class="ex-action">
                                <button id="ex-main-btn" class="ex-main-btn">Получить деньги</button>
                            </div>
                        </div>
                    </div>
                    <p>Бесплатный подбор займов – без справок и отказов</p>
                </div>
            </div>
        </div>
    </div>
    <div class="ex-articles">
        <div class="container">
        <?php echo '<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- Микроденьги -->
        <ins class="adsbygoogle text-center desctop-only"
             style="display:block"
             data-ad-client="ca-pub-2018999784099007"
             data-ad-slot="1587330252"
             data-ad-format="auto"></ins>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
        '; ?>
            
                <div class="ex-why-get-money">
                <h2>Как получить деньги?</h2>
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-lg-offset-2">
                        <ul class="timeline">
                            <li class="timeline-inverted">
                                <div class="timeline-badge d-flex align-items-center justify-content-center">
                                    <!--i class="ex-timline-icon1"></i-->
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="timeline-title">Выберите сумму займа</h4>
                                        <p>Поставьте курсор в онлайн кулькулятре на комфортных вам значениях.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="timeline-badge d-flex align-items-center justify-content-center">
                                    <!--i class="ex-timline-icon2"></i-->
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="timeline-title">Заполните анкету</h4>
                                        <p>Для этого нужен лишь мобильный телефон и ваш email.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-inverted">
                                <div class="timeline-badge d-flex align-items-center justify-content-center">
                                    <!--i class="ex-timline-icon3"></i-->
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4 class="timeline-title">Получите деньги</h4>
                                        <p>Удобные варианты получения: на карту или наличными.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-4 col-lg-offset-4">
                        <button id="ex-main-btn2" class="ex-main-btn"> Получить деньги </button>
                    </div>
                </div>
            </div>         
            
            <!--
            <h2 class="text-center ">Статьи</h2>
            <div class="row">
                <a href="/delay">
                <div class="col-md-4">
                    <div class="ex-art-block ex-on-small-device ex-art-active">
                        <div class="ex-art-img ex-art-img1">
                        </div>
                        <h3>Что такое отсрочка
                            погашения займа?</h3>
                        <p class="">
                            При обращении в микрофинансовую организацию (МФО) будущий заёмщик надеется на своевременное
                            закрытие долга. Что же делать, если не удаётся вовремя закрыть взятый онлайн займ из-за
                            сложившихся обстоятельств? Идеальный
                        </p>
                       Читать далее >>
                    </div>
                </div>
                </a>
                <a href="/steps">
                <div class="col-md-4">
                    <div class="ex-art-block ex-on-small-device">
                        <div class="ex-art-img ex-art-img2">
                        </div>
                        <h3>Основные способы
                            получения онлайн займов</h3>
                        <p class="">
                            В данной статье осветим наиболее распространённые варианты получения онлайн займов.<br>
                            -На банковскую карту VISA или Maestro. По традиции это самый популярный вариант получить
                            займ.
                        </p>
                        Читать далее >>
                    </div>
                </div>
                </a>
                <a href="/choice">
                <div class="col-md-4">
                    <div class="ex-art-block ex-on-small-device">
                        <div class="ex-art-img ex-art-img3">
                        </div>
                        <h3>Как выбрать микрофинансовую
                            организацию?</h3>
                        <p class="">
                            При выборе микрофинансовой организации (МФО) для взятия личного займа онлайн необходимо
                            учитывать ряд параметров.
                            - Присутствие данной компании в официальном реестре микрофинансовых организаций. Реестр
                            ведётся и
                        </p>
                       Читать далее >>
                    </div>
                </div>
                </a>
            </div>
            -->
        </div>
    </div>
    <!-- div class="ex-about adsence_about_desctop">
        <div class="container">
            <h2 class="text-center">Отзывы о нас</h2>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="ex-about-block">
                        <p>Срочно понадобились деньги на подарок, сынишке 5 лет, и никто не мог занять… У родственников
                            тоже
                            проблемы, да и просить неудобно. В итоге залезла в интернет, прочитала на этом сайте, что
                            займ
                            выдают за 15 минут!! Не поверила конечно, но попробовала, и правда, сразу же пришли деньги,
                            и
                            проблема решена! Спасибо что помогли и бесплатно подобрали срочный займ, всё верну с
                            зарплатой!!</p>
                        <div class="ex-review">
                        <span class="ex-stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                         </span>
                            <h3>Юлия Мордвинова, 29 лет, г. Карловка</h3>
                        </div>
                    </div>
                    <div class="ex-about-block">
                        <p>Ура! Это единственное место, где я получил займ без отказа. Мне нужно было срочно снять
                            квартиру, а родственников почти нет, никто не поможет… И все банки в отказ, потому что я
                            студент. А здесь даже лишнего вопроса не задали, я только указал паспортные данные! Займ я
                            снял минут через 10 после одобрения. И кстати, услуги сервиса бесплатны, это правда, ни
                            гривны не взяли!</p>
                        <div class="ex-review">
                        <span class="ex-stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                         </span>
                            <h3>Юрий Белкин, 21 год, г. Броды</h3>
                        </div>
                    </div>
                    <div class="ex-about-block">
                        <p>Попал в минуса по бизнесу, и нужно было срочно оплатить аренду! Тут друг посоветовал сервис
                            Микроденьги, сказал, что здесь не надо показывать справки и искать поручителей. А мне как
                            раз это и надо, времени совсем в обрез!!! Онлайн займ срочно перечислили на карту, я ждал
                            несколько минут, здесь не обманывают!! Супер услуга, теперь за займом только к вам, но
                            надеюсь не понадобится))</p>
                        <div class="ex-review">
                        <span class="ex-stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                         </span>
                            <h3>Сергей Калугин, 32 года, г. Киев</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div -->
    </form> 
</main>
<style>
    @media (max-width: 767px) {
        .ex-home .ex-main-section .ex-main-left h1 {
            font-size: 31px !important;
            line-height: 40px !important;
            margin-bottom: 10px !important;
        }  
        .ex-home .ex-main-section .ex-calc-block .ex-wrapper .ex-slider-block {
            padding-bottom: 20px !important;
        }      
    }

</style>
<?php require 'footer.php'; ?>