<?php require 'header.php'; ?>
<main>
    <form id="anketa" action="/form<?=$utm;?>" method="post">
        <input type="hidden" id="amount" name="amount" value="600" />
        <input type="hidden" id="period" name="period" value="7" />
        <input type="hidden" id="form_slrd" name="form_slrd" value="4" />
        <input type="hidden" name="fingerprint" id="fingerprint" value="">
        <input type="hidden" name="ip" id="ip" value="<?php echo $ip;?>">
        <input type="hidden" name="referer" value="<?php if (isset($_SERVER['HTTP_REFERER'])) echo $_SERVER['HTTP_REFERER']; ?>">
        <?php if (!empty($_REQUEST['ad_id'])) echo '<input type="hidden" name="ad_id" value="'.$_REQUEST['ad_id'].'">'; ?>
        <section class="ex-section-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="text-center">Dengomir – мир выгодных займов</h1>
                        <p class="hidden-xs hidden-sm">Бесплатный подбор займов: без залога, проверок,
                            <br> справок и поручителей</p>
                        <div class="ex-range-slider-block">
                            <div class="ex-range-scope">
                                <p class="ex-slider-val"></p>
                                <div id="ex-main-slider-range">
                                    <figure class="ex-range-slider">
                                        <input type="text" id="rangeSlider" name="rangeSlider" value="600" />
                                    </figure>
                                </div>
                            </div>
                            <div class="ex-calc-wraper">
                                <div class="ex-tab-section">
                                    <div class="ex-calc-block ">
                                        <div class="row ">
                                            <div class="col-md-4 ex-mb">
                                                <div class="row">
                                                    <div class="col-md-4 col-xs-6 ">
                                                        <div class="ex-icon-bg">
                                                            <img src="/templates/dengomir/assets/img/icons/1.png" alt="1.png">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8 col-xs-6">
                                                        <div class="ex-val-block">
                                                            <span class="ex-unique">Сумма займа</span>
                                                            <span class="ex-slider-val ex-result-style"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 ex-mb ">
                                                <div class="row">
                                                    <div class="col-md-4 col-xs-6">
                                                        <div class="ex-icon-bg">
                                                            <img src="/templates/dengomir/assets/img/icons/2.png" alt="2.png">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8 col-xs-6">
                                                        <div class="ex-crumbs">
                                                            <span class="ex-unique">К возврату</span>
                                                            <span class="ex-total ex-result-style"></span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-4 ex-mb">
                                                <div class="row">
                                                    <div class="col-md-4 col-xs-6 ">
                                                        <div class="ex-icon-bg">
                                                            <img src="/templates/dengomir/assets/img/icons/3.png" alt="3.png">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8 col-xs-6 ">
                                                        <div class="ex-crumbs">
                                                            <span class="ex-unique">Срок займа</span>
                                                            <span class="ex-ot">от</span>
                                                            <span class="ex-time ex-result-style"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3">
                                    <div class="ex-for-button">
                                        <button class="ex-main-btn main-btn-offerwall">Получить деньги</button>
                                    </div>
                                </div>
                            </div>
                             <?php if($setting_array['is_mobile'] != 'мобила') { ?>
                            <br><br><br><br>
                             <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- dengomir 
                    <ins class="adsbygoogle"
                        style="display:block"
                        data-ad-client="ca-pub-4970738258373085"
                        data-ad-slot="4639511728"
                        data-ad-format="auto"
                        data-full-width-responsive="true"></ins>
                    <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>-->
                             <?php } ?>
                        </div>
                       
                    </div>
                    
                </div>
            </div>
        </section>
        
        <a class="anchor" name="id2"></a>
        <section class="ex-section-2 hidden-xs hidden-sm">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h2>Как получить деньги
                            <br> на банковскую карту VISA, MasterCard?</h2>
                        <p>Заполните анкету (2 минуты) и выберите способ получения займа – «На банковскую карту». Введите номер
                            карты и подтвердите его через SMS-сообщение. Дождитесь одобрения займа (около 7 минут) и получите
                            ваши деньги на карту мгновенно – без проверок, поручителей и залога. Займ на карту – это безопасно
                            и быстро.</p>
                        <div class="row">
                            <div class="col-md-6">
                                <button class="ex-main-btn main-btn-offerwall">Получить деньги</button>
                            </div>
                            <div class="col-md-6">
                                <button class="ex-white-btn next">Узнать о других способах</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="ex-for-img">

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <a class="anchor" name="id3"></a>
        <section class="ex-section-3 hidden-xs hidden-sm">
            <div class="ex-rus-map">
                <div class="container">
                    <h2>
                        Как это работает?
                    </h2>
                    <div class="ex-why-work">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="ex-steps ex-fl">
                                    <h3>Выберите</h3>
                                    <p>в калькуляторе сумму займа</p>
                                    <div class="ex-work-block ">
                                        <div class="ex-number-img">
                                            <img src="/templates/dengomir/assets/img/1.png" alt="1.png">
                                        </div>
                                        <p>Просто продвиньте курсор
                                            <br> до нужных значений.</p>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="ex-steps ex-fl">
                                    <h3>Ответьте</h3>
                                    <p>на вопросы в анкете (2 минуты)</p>
                                    <div class="ex-work-block">
                                        <div class="ex-number-img">
                                            <img src="/templates/dengomir/assets/img/2.png" alt="2.png">
                                        </div>
                                        <p>Для этого не нужно лишних
                                            <br> документов. Достаточно
                                            <br> одного паспорта.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="ex-steps ex-fl">
                                    <h3>Получите ваш займ</h3>
                                    <p>без проверок через 15 минут</p>
                                    <div class="ex-work-block ">
                                        <div class="ex-number-img">
                                            <img src="/templates/dengomir/assets/img/3.png" alt="3.png">
                                        </div>
                                        <p>5 способов получения:
                                            <br> на карту, счёт, через
                                            <br> систему CONTACT
                                            <br> или на электронный кошелёк.</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <a class="anchor" name="id4"></a>
        <section class="ex-section-4 hidden-xs hidden-sm">
            <div class="container">
                <h2>О нас говорят</h2>
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <figure>
                            <figcaption>
                                Уже несколько месяцев беру здесь онлайн займы, очень выручают! Не верьте другим сервисам! Они берут плату, и займ выходит
                                дороже, чем есть на самом деле!! А на этом сайте весь сервис БЕСПЛАТНО!! Недавно заняла здесь
                                7000 грн., через несколько дней вернула, проценты реально минимальные. А ещё за то что быстренько
                                вернула деньги, мне здесь подняли лимит, наконец-то хоть где-то всё честно!!
                            </figcaption>
                            <h3>Евгения Вяткина, 32 г., г. Киев</h3>
                        </figure>
                    </div>
                    <div class="item">
                        <figure>
                            <figcaption>
                                Огромнейшее спасибо ребятам за займ на карту! У моей семьи форсмажор – затопило квартиру и появилась куча расходов... Уже
                                почти решили заложить машину и взять кредит в банке. Но я тут набрел на ваш сайт и мне сразу
                                одобрили онлайн микрозайм без всяких залогов и проверок. Я ждал реально минут 10, не больше!!
                                Спасибо, что помогаете в трудных ситуациях. Благо Дарю!!
                            </figcaption>
                            <h3>Юрий Гербер, 38 лет, г. Харьков</h3>
                        </figure>
                    </div>
                    <div class="item">
                        <figure>
                            <figcaption>
                                Ну неужели мне хоть где-то оформили кредит?? А то я уже разочаровался. Я студент, все банки обошел у себя на районе, только
                                разводят руками, везде отказ((. Друзья по универу посоветовали ваш Zaimsoon, у нас оказывается
                                к вам пол-универа обращается! Мне автоматом одобрили сразу несколько займов, я только выбрал,
                                через 9 минут уже снимал скарты. Вы меня спасли!!
                            </figcaption>
                            <h3>Артур Манукян, 20 лет, г. Одесса</h3>
                        </figure>
                    </div>
                    <div class="item">
                        <figure>
                            <figcaption>
                                Я вообще боюсь занимать деньги на незнакомых сайтах. Потому что большинство сервисов берут плату за услуги, и еще мало ли
                                куда мои данные попадут! А тут с бывшей работы подсказали по секрету, что у вас бесплатный
                                подбор займов на карту и конфиденциально. А мне как раз младшую в детский сад вести, деньги
                                позарез надо. Микрозайм я получила через несколько минут!!! За услуги сервис плату не берет,
                                это правда!
                            </figcaption>
                            <h3>Эльмира Закирова, 28 лет, г. Львов</h3>
                        </figure>
                    </div> 
                    <div class="item">
                        <figure>
                            <figcaption>
                                Вот не знаю, как на других сайтах, но у этих ребят все честно и ещё прогрессивная шкала. У меня плохая кредитная история,
                                так уж получилось…. А тут сразу же одобрили всё и дали займ по паспорту. Средства поступили
                                минут через 10. Никто, слышите, никто лишних вопросов не задал!! И справки не спросил!
                            </figcaption>
                            <h3>Владислав Юрченко, 34 года, г. Житомир</h3>
                        </figure>
                    </div>
                </div>
            </div>
        </section>
    </form>
</main>
<style>
@media (max-width: 991.98px) {
    .ex-section-1 {
        margin-top: 35px;
    }
    .ex-section-1 p {
        margin-bottom: 0px;
    }
    .ex-range-slider-block .ex-mb {
        margin-bottom: 9px;
    }
}
</style>
<a class="anchor" name="id5"></a>
<?php require 'footer.php'; ?>