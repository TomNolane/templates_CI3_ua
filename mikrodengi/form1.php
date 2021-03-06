<section class="ex-main-form">
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
            <div class="form-group has-feedback hidden">
                <label class="control-label col-md-4" for="f">Фамилия</label>
                <div class="col-md-8">
                    <div class="ex-wrapper">
                        <input type="text" class="form-control ec tip special_form" value="Батейко" name="f" id="f" placeholder="Фамилия" title="Введите свою фамилию"
                            data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[-А-я ЁёІіЇїҐґЄє']+$" data-validation-error-msg="Введите свою фамилию">
                            <p class="text-muted helpblock">Пример: Батейко</p>
                    </div>
                </div>
            </div>
            <div class="form-group has-feedback hidden">
                <label class="control-label col-md-4" for="i">Имя</label>
                <div class="col-md-8">
                    <div class="ex-wrapper">
                        <input type="text" class="form-control ec tip special_form" value="Олександр" name="i" id="i" placeholder="Имя" title="Введите свое имя" data-sanitize="capitalize"
                            data-validation="custom" data-validation-regexp="^[-А-я ЁёІіЇїҐґЄє']+$" data-validation-error-msg="Введите свое имя"
                            required>
                            <p class="text-muted helpblock">Пример: Олександр</p>
                    </div>
                </div>
            </div>
            <div class="form-group has-feedback hidden">
                <label class="control-label col-md-4" for="o">Отчество</label>
                <div class="col-md-8">
                    <div class="ex-wrapper">
                        <input type="text" class="form-control ec tip special_form" value="Дмитрович" name="o" id="o" placeholder="Отчество" title="Введите свое отчество"
                            data-sanitize="capitalize" data-validation="custom" data-validation-regexp="^[-А-я ЁёІіЇїҐґЄє']+$" data-validation-error-msg="Введите свое отчество">
                            <p class="text-muted helpblock">Пример: Дмитрович</p>
                    </div>
                </div>
            </div>
            <input type="hidden" id="gender" value="1" name="gender">
            <!-- Скрываем старую форму даты рождения -->
            <div class="form-group hidden">
                <label class="col-sm-4 control-label label-required hidden-xs" for="birth_dd">Дата рождения*</label>
                <div class="col-sm-2">
                    <div class="shadow">
                        <select size="1" class="form-control ec" id="birth_dd" name="birth_dd">
                            <option>выбери</option>
                            <option value="0">День</option>
                            <?php for($i=1;$i<=31;$i++) echo '<option value="'.(($i<10)? '0' : '').$i.'">'.$i.'</option>'; ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="shadow">
                        <label class="col-sm-4 control-label label-required hidden-xs" for="birth_mm">Дата рождения</label>
                        <select size="1" class="form-control ec" id="birth_mm" name="birth_mm">
                            <option>выбери</option>
                            <option value="0">Месяц</option>
                            <option value="01">Январь</option>
                            <option value="02">Февраль</option>
                            <option value="03">Март</option>
                            <option value="04">Апрель</option>
                            <option value="05">Май</option>
                            <option value="06">Июнь</option>
                            <option value="07">Июль</option>
                            <option value="08">Август</option>
                            <option value="09">Сентябрь</option>
                            <option value="10">Октябрь</option>
                            <option value="11">Ноябрь</option>
                            <option value="12">Декабрь</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="shadow">
                        <label class="col-sm-4 control-label label-required hidden-xs" for="birth_yyyy">Дата рождения</label>
                        <select size="1" class="form-control ec" id="birth_yyyy" name="birth_yyyy">
                            <option>выбери</option>
                            <option value="0">Год</option>
                            <?php
				for($i=date('Y', strtotime('-80 years', time()));$i<=date('Y', strtotime('-18 years', time()));$i++)
				echo '<option value="'.$i.'">'.$i.'</option>';
				?>
                        </select>
                    </div>
                </div>
            </div>
            <!-- Скрываем старую форму даты рождения -->
            <div class="form-group has-feedback hidden">
                <label class="control-label col-md-4" for="birthdate">Дата рождения</label>
                <div class="col-md-8">
                    <div class="ex-wrapper">
                        <input type="text" class="form-control ec tip" id="birthdate" name="birthdate" placeholder="Дата рождения" title="Выберете свою дату рождения"
                            data-validation="custom" value="06/02/2000" data-validation-regexp="^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" data-validation-error-msg="Выберите дату рождения"
                            required>
                            <p class="text-muted helpblock">Пример: 06/02/2000</p>
                    </div>
                </div>
            </div>
            <div class="form-group has-feedback">
                <label class="control-label col-md-4" for="phone">Телефон</label>
                <div class="col-md-8">
                    <div class="ex-wrapper">
                        <input type="tel" class="form-control ec tip special_form" name="phone" id="phone" placeholder="Введите свой номер телефона"
                            title="Введите свой номер телефона" data-validation-error-msg="Введите номер телефона" style="text-align:center;" required>
                        <span id="phonestatus" class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <p class="text-muted helpblock" style="float:center;">Пример: 095 725 09 99</p>
                    </div>
                </div>
            </div>
            <div class="form-group has-feedback">
                <label class="control-label col-md-4" for="email">Email</label>
                <div class="col-md-8">
                    <div class="ex-wrapper">
                        <input type="email" class="form-control ec tip special_form" name="email" id="email" title="Введите свой email адрес" placeholder="Email"
                            data-validation="email" data-validation-error-msg="Введите свой email" style="text-align:center;" required>
                            <p class="text-muted helpblock" style="float:center;">Пример: email@mail.ru</p>
                    </div>
                </div>
            </div>
            <div class="form-group has-feedback hidden">
                <label class="control-label col-md-4" for="delays_type">Кредитная история</label>
                <div class="col-md-8">
                    <div class="ex-wrapper ex-arrow">
                        <select class="form-control ec special_form99" name="delays_type" id="delays_type">
                            <option selected value="never">Никогда не брал(а) кредитов</option>
                            <option value="credit_closed_no_delay">Кредиты закрыты, просрочек не было</option>
                            <option value="credit_open_no_delay">Кредиты есть, просрочек нет</option>
                            <option value="credit_closed_had_delay">Кредиты закрыты, просрочки были</option>
                            <option value="had_delay">Просрочки были, сейчас нет</option>
                            <option value="has_delay">Просрочки сейчас есть</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-4 ex-agreement-check">
                    <label class="checkbox-inline">
                        <span> Я согласен на <a href="https://mikrodengi.su/soglasie" target="_blank">обработку персональных данных</a> и с <a href="https://mikrodengi.su/oferta" target="_blank">публичной офертой</a></span>
                        <input type="checkbox" id="agree" value="1" checked>
                        <i></i>
                    </label>
                    <label class="hidden">
                        <input type="checkbox" id="marketing" value="1" checked>
                        <b>Я согласен(на) получать маркетинговые рассылки с предложениями микрозаймов</b>
                    </label>
                </div>
            </div>
            <div class="form-group has-feedback">
                <div class="col-md-8 col-md-offset-4">
                    <a id="submitOne" class="ex-main-btn btn3 text-center">Получить деньги</a>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    .ex-form {
        max-width: 700px;
        padding-bottom: 0 !important;
        box-shadow: 0 1px 10px 0px #ccc;
        border-radius: 0.6rem;
        padding: 0;
        margin: 30px auto;
    }
    .tab-content {
        padding-top: 30px;
        border-bottom-left-radius: 0.6rem;
        border-bottom-right-radius: 0.6rem;
    }
    h1 {
        text-align: center;
        color: #ffffff !important;
        font-size: 24px;
        font-weight: 700;
        line-height: 30px;
        margin-top: 0;
        margin-bottom: 0;
        padding: 20px 24px;
        background-color: #0e6c97;
        border-top-left-radius: 0.6rem;
        border-top-right-radius: 0.6rem;
        text-shadow: 0 2px 4px #004469;
    }
    .control-label {
        font-weight: bold;
    }
    #submitOne {
        background-color: #296c97;
        background: -webkit-linear-gradient(#296c97, #004768);
        background: -o-linear-gradient(#296c97, #004768);
        background: linear-gradient(#296c97, #004768);
    }
    #submitOne:hover {
        text-decoration: none;
        color: #FFF;
    }
    @media (max-width: 767px) {
        .ex-form p {
            font-size: 14px;
            margin-bottom: 15px !important;
        }  
        .ex-wrapper {
            margin-bottom: 12px !important;
        }

        .ex-form {
            margin: 0 10px;
            margin-bottom: 30px;
        }

    }

</style>