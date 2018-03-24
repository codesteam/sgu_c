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
                К участию в конференции приглашаются студенты, аспиранты, преподаватели ВУЗов, ученые, сотрудники научно-исследовательских учреждений и ИТ-компаний, направление деятельности которых связано с тематикой конференции.
            </p>
            <?=HtmlApplication::h2Queue('Учредители конференции')?>
            <hr/>
            <ul>
                <li>Министерство образования и науки РФ</li>
                <li>Правительство Севастополя</li>
                <li>Законодательное Собрание Севастополя</li>
                <li>Правительство Санкт-Петербурга</li>
                <li>Севастопольский государственный университет</li>
                <li>Санкт-Петербургский институт информатики и автоматизации Российской академии наук</li>
                <li>Крымский ИТ-кластер</li>
            </ul>
            <?=HtmlApplication::h2Queue('Соустроители конференции')?>
            <hr/>
            <ul>
                <li>Российский фонд фундаментальных исследований</li>
                <li>Федеральное Учебно-методическое объединение по укрупненной группе специальностей и направлений высшего образования 09.00.00 «Информатика и вычислительная техника»</li>
                <li>Санкт-Петербургский национальный исследовательский университет информационных технологий, механики и оптики</li>
                <li>Санкт-Петербургский государственный электротехнический университет «ЛЭТИ» им. В.И. Ульянова (Ленина)</li>
                <li>Морской гидрофизический институт Российской академии наук</li>
                <li>Санкт-Петербургское отделение Академии информатизации образования</li>
                <li>Некоммерческое Партнерство РУССОФТ</li>
                <li>Издательство «Инновационное машиностроение»</li>
                <li>Компания ALT Linux</li>
                <li>ООО «Алвион-Европа»</li>
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
                        <td>Бондарев Владимир Николаевич</td>
                        <td>Директор института информационных технологий и управления в технических системах Севастопольского государственного университета</td>
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
            <a href="/assets_app/files/2018-09/organizers.docx">Подробнее</a>
            <?=HtmlApplication::h2Queue('Информационное обеспечение')?>
            <ul>
                <li>Отдел Маркетинга и PR Севастопольского государственного университета</li>
                <li>Журнал «Труды СПИИРАН»</li>
                <li>Журнал «Информационно-управляющие системы»</li>
                <li>Журнал «Сборка в машиностроении, приборостроении» </li>
                <li>Журнал «Региональная информатика и информационная безопасность» </li>
                <li>Севастопольское телевидение</li>
            </ul>
            <!-- <?=HtmlApplication::h2Queue('Программа конференции')?>
            <p>
                Скачать программу конференции можно по
                <a href="/assets_app/files/2018-09/program.pdf">ссылке</a>
            </p> -->
            <?=HtmlApplication::h2Queue('Тематические направления')?>
            <ul>
                <? foreach ($conference->conferenceCategories as $category) :?>
                    <li><?=$category->name?></li>
                <? endforeach ?>
            </ul>
            <h3>Круглые столы</h3>
            <p>Подготовка ИТ-кадров в контексте развития цифровой экономики в Российской Федерации </p>
            <p>Требования к поставщикам услуг по разработке ПО</p>
            <p>Геоинформационные технологии в территориальном управлении </p>
            <p>Морская информатика</p>
            <p>Умный город</p>
            <p>В программе конференции предусмотрено проведение заседания Федерального УМО
по укрупненной группе специальностей и направлений высшего образования 09.00.00 «Информатика и вычислительная техника», презентаций, учебных семинаров, организация выставочных площадок.</p>
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
                Финансирование подготовки и проведения Конференции осуществляется за счет организационных целевых взносов участников и организаций-соустроителей при поддержке и учредителей и спонсоров Конференции.
            </p>
            <p>
               Минимальный размер организационного целевого взноса участника Конференции составляет 2000 руб., для студентов и аспирантов – 1000 руб.
            </p>
            <p>
                В соответствии со сметой указанные средства расходуются на подготовку и проведение Конференции, издание трудов и информационных материалов Конференции.
            </p>
            <p>
                Проживание в гостинице, забронированной по предварительной заявке, и питание участники оплачивают самостоятельно.
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
                <a href="/assets_app/files/2018-09/requisites.doc">Скачать реквизиты</a>
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
                Материалы для опубликования в изданиях IV Межрегиональной научно-практической конференции «Перспективные направления развития отечественных информационных технологий» представляются в печатном виде: 1 - 2 полные стр. формата А5, включая рисунки, плюс электронная копия текста в Microsoft Word.
            </p>
            <p>Оргкомитет устанавливает следующие формы участия в Конференции:</p>
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
                <a href="/assets_app/files/2018-09/requirements.docx">ссылке</a>.
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
