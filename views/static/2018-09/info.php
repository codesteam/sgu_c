<?php
use yii\helpers\Html;
use app\helpers\HtmlApplication;
use app\models\ConferenceEvent;

$this->title = 'Информация о конференции';
$this->params['topMenu'] = 'info';
$conference = ConferenceEvent::find()->where(['slug' => 'conference-09-2018'])->one();

?>
<div class="site-login">
    <div class="row">
        <div class="col-md-12">
            <br />
            <?=HtmlApplication::h1(Html::encode($this->title))?>
        </div>
        <div class="col-md-9">
            <h2>Уважаемые коллеги!</h2>
            <hr/>
            <p>
                Приглашаем Вас принять участие в IV Межрегиональной научно-технической конференции «Перспективные направления развития отечественныхинформационных технологий», которая состоится 18-22 сентября 2018 года на базе Севастопольского государственного университета (г. Севастополь) при поддержке Законодательного Собрания Севастополя, Правительства Севастополя, Командования Черноморским флотом РФ.
            </p>
            <p>
                К участию в конференции приглашаются ученые, сотрудники научно-исследовательских учреждений и ИТ-компаний, преподаватели ВУЗов, студенты, аспиранты, направление деятельности которых связано с тематикой конференции.
            </p>
            <?=HtmlApplication::h2Queue('Учредители конференции')?>
            <hr/>
            <ul>
                <li>Министерство образования и науки РФ</li>
                <li>Правительство Севастополя</li>
                <li>Законодательное Собрание Севастополя</li>
                <li>Правительство Санкт-Петербурга</li>
                <li>Севастопольский государственный университет</li>
                <li>Ассоциация ИТ-предприятий Севастополя</li>
                <li>Крымский ИТ-кластер</li>
            </ul>
            <?=HtmlApplication::h2Queue('Соустроители конференции')?>
            <hr/>
            <ul>
                <li>Санкт-Петербургский национальный исследовательский университет информационных технологий, механики и оптики</li>
                <li>Учебно-методическое объединение высших учебных заведений Российской Федерации по университетскому политехническому образованию при Московском государственном техническом университете им. Н.Э. Баумана</li>
                <li>Санкт-Петербургский государственный электротехнический университет «ЛЭТИ» им. В.И. Ульянова (Ленина) </li>
                <li>Санкт-Петербургский институт информатики и автоматизации Российской академии наук</li>
                <li>Крымский федеральный университет им. В.И. Вернадского</li>
                <li>Морской гидрофизический институт РАН</li>
                <li>Кузбасский государственный технический университет</li>
                <li>Керченский государственный морской технологический университет</li>
                <li>Волгоградский государственный технический университет</li>
                <li>Санкт-Петербургское отделение Академии информатизации образования</li>
                <li>Некоммерческое Партнерство РУССОФТ</li>
                <li>Издательство «Инновационное машиностроение»</li>
                <li>Компания ALT Linux</li>
                <li>ООО «Солар-Лаб»</li>
            </ul>
            <?=HtmlApplication::h2Queue('Организационный комитет')?>
            <hr/>
            <table class="table">
                <thead>
                    <tr>
                        <th>Сопредседатели</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Нечаев Владимир Дмитриевич</td>
                        <td>Исполняющий обязанности ректора Севастопольского государственного университета</td>
                    </tr>
                    <tr>
                        <td>Юсупов Рафаэль Мидхатович</td>
                        <td>Директор Санкт-Петербургского института информатики и автоматизации РАН, член-корреспондент Российской академии наук</td>
                    </tr>
                </tbody>
            </table>
            <table class="table">
                <thead>
                    <tr>
                        <th>Заместитель председателя</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Первухина Елена Львовна</td>
                        <td>Профессор кафедры ИС Севастопольского государственного университета</td>
                    </tr>
                </tbody>
            </table>
            <?=HtmlApplication::h2Queue('Программный комитет конференции')?>
            <table class="table">
                <thead>
                    <tr>
                        <th>Председатель</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td nowrap="nowrap">Советов Борис Яковлевич</td>
                        <td>Сопредседатель Научного совета по информатизации Санкт-Петербурга, академик Российской академии образования </td>
                    </tr>
                </tbody>
            </table>
            <a href="/assets_app/files/2017-09/organizers.doc">Подробнее</a>
            <?=HtmlApplication::h2Queue('Информационное обеспечение')?>
            <ul>
                <li>Журнал «Экспертный союз»</li>
                <li>Журнал «Информационно-управляющие системы» </li>
                <li>Журнал «Региональная информатика и информационная безопасность»</li>
                <li>Журнал «Сборка в машиностроении, приборостроении»</li>
                <li>Севастопольское телевидение</li>
                <li>Интернет-портал «Флот – XXI век»</li>
            </ul>
            <?=HtmlApplication::h2Queue('Программа конференции')?>
            <p>
                Скачать программу конференции можно по
                <a href="/assets_app/files/2017-09/program.pdf">ссылке</a>
            </p>
            <?=HtmlApplication::h2Queue('Тематические направления')?>
            <ul>
                <? foreach ($conference->conferenceCategories as $category) :?>
                    <li><?=$category->name?></li>
                <? endforeach ?>
            </ul>
            <h3>Круглые столы</h3>
            <p>Подготовка ИТ-кадров в контексте развития цифровой экономики в Российской Федерации </p>
            <p>Требования к поставщикам услуг по разработке ПО</p>
            <p>Геоинформационные системы</p>
            <p>Морская информатика </p>
            <h3>Учебные семинары</h3>
            <p>Разработка технологических проектов в сфере финансов</p>
            <p>Управление качеством разработки ПО</p>
            <h3>Презентации</h3>
            <p>Технологии и платформы для импортозамещения базового ПО с целью устранения риска и последствий применения санкций </p>
            <?=HtmlApplication::h2Queue('Условия участия в  конференции')?>
            <p>
                Для того, чтобы зарегистрироваться в качестве участника Конференции, необходимо
                заполнить заполнить <a href='/site/application'>форму на сайте</a>, указав сведения о перечислении
                организационного целевого взноса предприятия.
            </p>
            <p>
                Авторам докладов необходимо также приложить тезисы доклада, подготовленные в соответствии с требованиями к оформлению.
            </p>
                Статьи, связанные. с аннотациями докладов, представленных на Конференции, будут рассмотрены
                Программным Комитетом для опубликования в специальных выпусках научных журналов и сборниках трудов.
            </p>
            <p>
                По окончании Конференции будет издан сборник трудов, куда войдут материалы докладов, рекомендованных к опубликованию Программным комитетом.
            </p>
            <?=HtmlApplication::h2Queue('Финансирование конференции')?>
            <p>
                Подготовка и проведение Конференции «Перспективные направления развития
                отечественных информационных технологий» осуществляется при поддержке Правительства Севастополя
                и Законодательного собрания Севастополя и других организаций с привлечением организационных целевых
                взносов (добровольных пожертвований) организаций-соучредителей Конференции.
                Минимальный размер организационного целевого взноса участника Конференции составляет 2000 рублей.
            </p>
            <p>
                В соответствии со сметой указанные средства расходуются на подготовку и проведение
                Конференции, в т.ч. аренду помещений, издание трудов Конференции, других информационных
                материалов.
            </p>
            <p>
                Проживание в гостинице, забронированной по предварительной заявке, питание
                участники оплачивают самостоятельно.
            </p>
            <p>В платежном поручении следует указать:</p>
            <p><strong>Получатель:</strong></p>
            <p>Банк получателя: ОТДЕЛЕНИЕ СЕВАСТОПОЛЬ Г. СЕВАСТОПОЛЬ</p>
            <p>БИК  046711001</p>
            <p>ИНН  9201012877</p>
            <p>КПП  920101001</p>
            <p>ОКТМО  67000000</p>
            <p>Р/счет № 40501810367112000001</p>
            <p>Получатель  УФК по г. Севастополю (ФГАОУ ВО «Севастопольский государственный </p>
            <p>университет»  л/с 30746Э24530)</p>
            <p>КБК  00000000000000000130</p>
            <p>
                <strong>Назначение платежа</strong>:
            </p>
            <p>
                Назначение платежа: КБК 00000000000000000130
                (указать название конференции «Перспективные направления развития отечественных информационных технологий», Ф.И.О. участника конференции).
            </p>
            <p>
                <a href="/assets_app/files/2016-09/requisites.doc">Скачать реквизиты</a>
            </p>
            <?=HtmlApplication::h2Queue('Форма проведения')?>
            <p>Работа конференции предусматривает выступления с научными докладами, проведение круглых столов и дискуссий, учебные семинары, презентацию программных продуктов.</p>
            <?=HtmlApplication::h2Queue('Рабочие языки')?>
            <p>Русский, английский.</p>
            <?=HtmlApplication::h2Queue('Материалы конференции')?>
            <p>
                Аннотации докладов будут опубликованы в томе Программы конференции «Перспективные направления развития отечественных информационных технологий» в
                печатном и электронном виде. По окончании конференции материалы докладов
                будут изданы в виде статей в журналах
                <ul>
                    <li>«Экспертный союз» (<a href="http://unionexpert.ru/">http://unionexpert.ru/</a>)</li>
                    <li>«Информационно-управляющие системы» (<a href="http://www.i-us.ru/">http://www.i-us.ru/</a>)</li>
                    <li>«Региональная информатика и информационная безопасность»</li>
                    <li>«Сборка в машиностроении, приборостроении» (<a href="http://www.mashin.ru/eshop/journals/sborka_v_mashinostroenii_priborostroenii/">http://www.mashin.ru/eshop/journals/sborka_v_mashinostroenii_priborostroenii/</a>)</li>
                </ul>
            </p>
            <?=HtmlApplication::h2Queue('Важные даты')?>
            <br/>
            <?= $this->render('/static/_conference_dates', ['dates' => $conference->conferenceEventDates]) ?>

            <?=HtmlApplication::h2Queue('Требования к оформлению материалов')?>
            <p>
                Материалы для представления на конференции «Перспективные направления развития
                отечественных информационных технологий" представляются в печатном виде (1 - 2
                полные стр. формата А5, включая рисунки), плюс электронная копия текста,
                подготовленная в среде Microsoft Word.
            </p>
            <p>Оргкомитет устанавливает следующие виды выступлений:</p>
            <ul>
                <li>доклад на пленарном заседании (до 30 мин.);</li>
                <li>доклад на заседании секций (до 20 мин.);</li>
                <li>сообщение на заседании секции (до 10 мин.);</li>
                <li>стендовый доклад;</li>
                <li>участие в заседании «круглого стола»;</li>
                <li>организация учебного семинара;</li>
                <li>презентация программного обеспечения.</li>
            </ul>
            <p>
                Полный перечень требований к оформлению материалов можно найти по
                <a href="/assets_app/files/2016-09/requirements.pdf">ссылке</a>.
            </p>
        </div>
        <div class="col-md-3">
            <div class="bs-docs-sidebar">
                <ul class="nav bs-docs-sidenav">
                    <? $first = true; ?>
                    <? foreach (HtmlApplication::$h2Queue as $slug => $title) :?>
                        <li>
                            <a href="#<?=$slug?>"><?=$title?></a>
                        </li>
                        <? $first = false ?>
                    <? endforeach ?>
                </ul>
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
