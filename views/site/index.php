<?php
use yii\helpers\Html;
use app\helpers\HtmlApplication;

$this->title = 'Межрегиональная научно-практическая конференция Перспективные направления развития
 отечественных информационных технологий';
?>

<div class="site-index">
    <div class="header-main hidden-xs hidden-sm">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-main-logo">
                        <div class="pull-left main-logo-img">
                            <img src="/assets_app/images/logo-big.png" />
                        </div>
                        <div class="pull-left text-left main-logo-title">
                            <div class="part-1">Перспективные направления развития</div>
                            <div class="part-2">отечественных информационных технологий</div>
                        </div>
                    </div>
                    <div class="navigation" >
                        <?= Html::a('Контакты', ['/contact'], ['class' => 'btn btn-lg pull-right']) ?>
                        <?= Html::a('Информация о конференции', ['/info'], ['class' => 'btn btn-lg btn-success pull-right']) ?>
                    </div>
                </div>
            </div>
            <div class="row main-title">
                <div class="col-lg-12 text-center">
                    <h2>Межрегиональная научно-практическая конференция</h2>
                    <p>23-25 сентября 2015<p>
                </div>
            </div>
            <div class="row main-info">
                <div class="col-lg-6 text-left main-info-text">
                    <div class="info-point">
                        <div class="pull-left info-point-img">
                           <img src="/assets_app/images/checkbox.png" />
                        </div>
                        <div class="pull-left info-point-text">
                            <div class="line-1">Место проведения:</div>
                            <div class="line-2">Севастопольский государственный университет</div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="info-point">
                        <div class="pull-left info-point-img">
                           <img src="/assets_app/images/checkbox.png" />
                        </div>
                        <div class="pull-left info-point-text">
                            <div class="line-1">Представление тезисов докладов:</div>
                            <div class="line-2">до 10 сентября 2015 г.</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 main-info-actions">
                    <?= Html::a('Подать заявку на участие', ['/site/application'], ['class' => 'btn btn-lg btn-success-filled pull-right']) ?>
                    <div class="clearfix"></div>
                    <br/>
                    <?= Html::a('Cвязаться с нами', ['/site/feedback'], ['class' => 'btn btn-lg btn-info-filled pull-right']) ?>
                </div>
            </div>
        </div>
    </div>

    <div class="main-categories">
        <div class="container">
            <div class="body-content">
                <div class="row">
                    <div class="col-lg-12">
                        <?=HtmlApplication::h2('Тематические направления', 'text-info')?>
                        <div class="row categories-text">
                            <div class="col-md-6">
                                <ul>
                                    <li>Политика информатизации и стратегия развития информационного общества</li>
                                    <li>Импортозамещение и технологическая ИТ-независимость</li>
                                    <li>Информационные технологии в ОПК и критических инфраструктурах</li>
                                    <li>Безопасный интеллектуальный район-город-регион </li>
                                    <li>Информационная среда и телекоммуникационная инфраструктура</li>
                                    <li>ИТ-специалисты и кадровый резерв/кадровый потенциал промышленных предприятий региона</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul>    
                                    <li>Образовательные и профессиональные стандарты в ИТ-сфере</li>
                                    <li>Информационные технологии в бизнесе и банковской сфере</li>
                                    <li>Информационные технологии в социальной сфере (здравоохранении, занятости населения,…)</li>
                                    <li>Теоретические проблемы информатизации</li>
                                    <li>Информационная безопасность и защита информации</li>
                                    <li>Подготовка и переподготовка ИТ-специалистов</li>
                                </ul>
                            </div>
                        </div>
                        <div class="text-center categories-actions">
                            <a class="btn btn-lg btn-success" href="/info#l-categories">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-dates">
        <div class="container">
            <div class="body-content">
                <div class="row">
                    <div class="col-lg-12">
                        <?=HtmlApplication::h2('Важные даты', 'text-default')?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <br/>
                        <table class="table">
                            <tbody>
                                <? foreach ($dates as $date) :?>
                                <tr>
                                    <td><?=$date['title']?></td>
                                    <td><?=$date['date']?></td>
                                </tr>
                                <? endforeach ?>
                            </tbody>
                        </table>
                        <!-- <img src="/assets_app/images/main-dates.png" class="img-responsive" /> -->
                        <!-- <table class="table text-left">
                            <tbody>
                                <tr>
                                    <td>Представление тезисов докладов</td>
                                    <td class="text-right">до 15.08.2015 г.</td>
                                </tr>
                                <tr>
                                    <td>Оплата за участие в конференции</td>
                                    <td class="text-right">до 15.08.2015 г. (после получения второго информационного письма) </td>
                                </tr>                    
                                <tr>
                                    <td>Рассылка приглашений и программы конференции (после оплаты оргвзноса)</td>
                                    <td class="text-right">до 15.08.2015 г.</td>
                                </tr>                    
                                <tr>
                                    <td>Представление заявок участников конференции</td>
                                    <td class="text-right">до 28.08.2015 г.</td>
                                </tr>
                                <tr>
                                    <td>Сообщение о включении доклада в программу конференции</td>
                                    <td class="text-right">до 31.08.2015 г.</td>
                                </tr>
                                <tr>
                                    <td>День заезда, поселение, регистрация</td>
                                    <td class="text-right">22.09.2015 г.</td>
                                </tr>
                                <tr>
                                    <td>Открытие и работа конференции</td>
                                    <td class="text-right">23.09.2015 г.</td>
                                </tr>
                                <tr>
                                    <td>Закрытие конференции и день отъезда</td>
                                    <td class="text-right">25.09.2015 г.</td>
                                </tr>

                            </tbody>
                        </table> -->
                        <div class="text-center main-dates-actions">
                            <a class="btn btn-lg btn-info" href="/info#l-dates">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
