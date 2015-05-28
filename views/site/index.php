<?php
use yii\helpers\Html;

$this->title = 'Межрегиональная научно-практическая конференция Перспективные направления развития
 отечественных информационных технологий';
?>
<div class="site-index">
    <div class="jumbotron">
        <h1>Перспективные направления развития отечественных информационных технологий</h1>
        <h3>Межрегиональная научно-практическая конференция</h3>
        <br/>
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
                        <br/>
                        <table class="table text-left" >
                            <tbody>
                                <tr><td>Политика информатизации и стратегия развития информационного общества</td></tr>
                                <tr><td>Импортозамещение и технологическая ИТ-независимость</td></tr>
                                <tr><td>Информационные технологии в ОПК и критических инфраструктурах</td></tr>
                                <tr><td>Безопасный интеллектуальный район-город-регион </td></tr>
                                <tr><td>Информационная среда и телекоммуникационная инфраструктура</td></tr>
                                <tr><td>ИТ-специалисты и кадровый резерв/кадровый потенциал промышленных предприятий региона</td></tr>
                                <tr><td>Образовательные и профессиональные стандарты в ИТ-сфере</td></tr>
                                <tr><td>Информационные технологии в бизнесе и банковской сфере</td></tr>
                                <tr><td>Информационные технологии в социальной сфере (здравоохранении, занятости населения,…)</td></tr>
                                <tr><td>Теоретические проблемы информатизации</td></tr>
                                <tr><td>Информационная безопасность и защита информации</td></tr>
                                <tr><td>Подготовка и переподготовка ИТ-специалистов</td></tr>
                            </tbody>
                        </table>
                        <p><a class="btn btn-info" href="/info#l-categories">Подробнее &raquo;</a></p>
                    </div>
                    <div class="col-lg-6 text-center">
                        <img width="85" height="88" alt="secure" src="/images/secure_img.png">
                        <h2>Важные даты</h2>
                        <br/    >
                        <table class="table text-left" >
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
                        </table>
                        <p><a class="btn btn-info" href="/info#l-dates">Подробнее &raquo;</a></p>
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
