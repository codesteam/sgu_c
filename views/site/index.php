<?php
use yii\helpers\Html;

$this->title = 'Межрегиональная научно-практическая конференция Перспективные направления развития
 отечественных информационных технологий';
?>
<div class="site-index">
    <div class="jumbotron">
        <h2>МЕЖРЕГИОНАЛЬНАЯ НАУЧНО-ПРАКТИЧЕСКАЯ КОНФЕРЕНЦИЯ</h2>
        <h1>ПЕРСПЕКТИВНЫЕ НАПРАВЛЕНИЯ РАЗВИТИЯ ОТЕЧЕСТВЕННЫХ ИНФОРМАЦИОННЫХ ТЕХНОЛОГИЙ</h1>
        <p>
            <?= Html::a('Подать заявку на участие', ['/site/application'], ['class' => 'btn btn-lg btn-success']) ?>
            &nbsp;
            &nbsp;
            <?= Html::a('Cвязаться с нами', ['/site/feedback'], ['class' => 'btn btn-lg btn-info']) ?>
        </p>
    </div>
    <div class="wrap">
        <div class="container">
            <div class="body-content">
                <div class="row">
                    <div class="col-lg-6 text-center">
                        <img width="85" height="88" alt="secure" src="/images/support_img.png">
                        <h2>Тематические направления</h2>
                        <ul>
                            <li>Политика информатизации и стратегия развития информационного общества</li>
                            <li>Импортозамещение и технологическая ИТ-независимость</li>
                            <li>Информационные технологии в ОПК и критических инфраструктурах</li>
                            <li>Безопасный интеллектуальный район-город-регион </li>
                            <li>Информационная среда и телекоммуникационная инфраструктура</li>
                            <li>ИТ-специалисты и кадровый резерв/кадровый потенциал промышленных предприятий региона</li>
                            <li>Образовательные и профессиональные стандарты в ИТ-сфере</li>
                            <li>Информационные технологии в бизнесе и банковской сфере</li>
                            <li>Информационные технологии в социальной сфере (здравоохранении, занятости населения,…)</li>
                            <li>Теоретические проблемы информатизации</li>
                            <li>Информационная безопасность и защита информации</li>
                            <li>Подготовка и переподготовка ИТ-специалистов</li>
                        </ul>
                        <p><a class="btn btn-default" href="/info#l-categories">Подробнее &raquo;</a></p>
                    </div>
                    <!--div class="col-lg-4 text-center">
                        <img width="85" height="88" alt="secure" src="/images/fast_img.png">
                        <h2>Общая информация</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                            fugiat nulla pariatur.</p>

                        <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Подробнее &raquo;</a></p>
                    </div-->
                    <div class="col-lg-6 text-center">
                        <img width="85" height="88" alt="secure" src="/images/secure_img.png">
                        <h2>Важные даты</h2>
            <table class="table">
                <tbody>
                    <tr>
                        <td>Представление тезисов докладов</td>
                        <td>до 15.08.2015 г.</td>
                    </tr>
					<tr>
                        <td>Оплата за участие в конференции</td>
                        <td>до 15.08.2015 г. (после получения второго информационного письма) </td>
                    </tr>                    
					<tr>
                        <td>Рассылка приглашений и программы конференции (после оплаты оргвзноса)</td>
                        <td>до 15.08.2015 г.</td>
                    </tr>                    
                    <tr>
                        <td>Представление заявок участников конференции</td>
                        <td>до 28.08.2015 г.</td>
                    </tr>
                    <tr>
                        <td>Сообщение о включении доклада в программу конференции</td>
                        <td>до 31.08.2015 г.</td>
                    </tr>
                    <tr>
                        <td>День заезда, поселение, регистрация</td>
                        <td>22.09.2015 г.</td>
                    </tr>
                    <tr>
                        <td>Открытие и работа конференции</td>
                        <td>23.09.2015 г.</td>
                    </tr>
                    <tr>
                        <td>Закрытие конференции и день отъезда</td>
                        <td>25.09.2015 г.</td>
                    </tr>

                </tbody>
            </table>
                        <p><a class="btn btn-default" href="/info#l-dates">Подробнее &raquo;</a></p>
                    </div>
                </div>
            </div>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
        </div>
    </div>
</div>
