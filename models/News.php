<?php

namespace app\models;

class News
{
    public static function all()
    {
        return [
            [
                'date' => '13 Сентября 2018',
                'text' => '
                    <p>
                        <p class="text-center"><img src="/assets_app/images/program-2018.jpg" /></p>
                        <p>Информация о конференции:</p>
                        <p><a href="/assets_app/files/2018-09/program.pdf">Программа конференции</a></p>
                        <p>С уважением, Оргкомитет конференции.</p>
                    </p>
            '],
            [
                'date' => '31 Июля 2018',
                'text' => '
                    <p>
                        Договор возмездного оказания услуг по организации участия в IV Межрегиональной научно-практической конференции:
                        <a href="/assets_app/files/2018-09/agreement.doc">«Перспективные направления развития отечественных информационных технологий»</a> (оплата оргвзносов от Организации)
                    </p>
                '
            ],
            [
                'date' => '17 Апреля 2018',
                'text' => '
                    <p><strong>Некролог памяти профессора СевГУ Первухиной Е.Л.</strong></p>
                    <p class="text-center"><img src="/assets_app/images/pervuhina.jpg" /></p>
                    <p>Дорогие родные и близкие, уважаемые друзья и коллеги!</p>
                    <p>13 апреля 2018 года после продолжительной болезни ушла из жизни профессор
                    Первухина Елена Львовна – горячо любимый товарищ, соратник, единомышленник,
                    талантливый ученый, авторитетный руководитель, педагог, воспитатель, организатор,
                    принимавший самое активное участие в деятельности Учебно-методического совета
                    по направлению подготовки «Информационные системы и технологии», Федерального
                    УМО по укрупненной группе специальностей и направлений высшего образования
                    «Информатика и вычислительная техника», профессиональных творческих формирований
                    и общественных организаций.</p>


                        <p>Елена Львовна внесла огромный организационный и творческий вклад в развитие
                        подготовки разработчиков информационных систем и технологий в Севастопольском
                        государственном университете. Ее яркие выступления, неиссякаемая энергия
                        и профессионализм, обаяние и целеустремленность, оптимизм, принципиальность,
                        умение отстаивать свое мнение и настойчивость в достижении поставленной цели всегда
                        привлекали и вдохновляли всех, кто ее окружал, помогали по-новому осознать смысл
                        и значение решаемых профессиональных задач.</p>

                        <p>Жизненный путь Елены Львовны, отмеченный многочисленными достижениями
                        и свершениями, навсегда будет вписан в историю Севастопольского государственного
                        университета, Института информационных технологий и управления в технических
                        системах, кафедры информационных систем, которым она верно служила многие годы,
                        отдавая частицы своего сердца и души.</p>

                        <p>Елена Львовна явилась инициатором и вдохновителем Межрегиональной научно-
                        практической конференции «Перспективные направления развития отечественных
                        информационных технологий», которая объединила усилия представителей органов
                        власти, науки, образования, бизнеса, направленные на обеспечение технологической
                        независимости ИТ-сферы в условиях современных вызовов и санкций, интеграцию
                        Севастополя в образовательное и информационное пространство России, и получила
                        статус регулярного мероприятия всероссийского уровня.</p>
                        <p>Яркая и наполненная жизнь Елены Львовны останется в нашей памяти,
                        в наших сердцах примером преданного служения Российскому образованию и науке.
                        Глубоко скорбим вместе с родными, близкими, коллегами и учениками
                        Елены Львовны, разделяя горечь постигшей всех невосполнимой утраты.
                        Светлая Вам память, дорогая Елена Львовна!</p>
                        <p>С глубоким прискорбием,</p>

                    <p><a href="javascript:void(0)" class="news-read-mode">Читать далее...</a></p>
                    <div class="news-read-mode-content hidden">
                        <div class="row">
                            <div class="col-md-6"><strong>Советов Борис Яковлевич</strong></div>
                            <div class="col-md-6">
                                Почетный председатель Учебно-методического совета по
                                направлению «Информационные системы и технологии»,
                                академик Российской академии образования, заслуженный
                                деятель науки и техники РФ, д.т.н., профессор
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-md-6"><strong>Юсупов Рафаэль Мидхатович</strong></div>
                            <div class="col-md-6">
                                Научный руководитель Санкт-Петербургского института
                                информатики и автоматизации Российской академии наук,
                                член-корреспондент РАН, заслуженный деятель науки и
                                техники РФ, д.т.н., профессор
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-md-6"><strong>Касаткин Виктор Викторович</strong></div>
                            <div class="col-md-6">
                                Ученый секретарь Научного совета по информатизации
                                Санкт-Петербурга, заместитель председателя Учебно-
                                методического совета по направлению «Информационные
                                системы и технологии», с.н.с. Санкт-Петербургского
                                института информатики и автоматизации Российской
                                академии наук, к.т.н., доцент
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-md-6"><strong>Пролетарский Андрей Викторович</strong></div>
                            <div class="col-md-6">
                                Председатель Федерального УМО по укрупненной
                                группе специальностей и направлений высшего
                                образования 09.00.00 «Информатика и вычислительная
                                техника», декан Московского государственного технического
                                университета им. Н.Э. Баумана, д.т.н., профессор
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-md-6"><strong>Строганов Дмитрий Викторович</strong></div>
                            <div class="col-md-6">
                                Председатель Учебно-методического совета по
                                направлению «Информационные системы и
                                технологии», профессор Московского государственного
                                технического университета им. Н.Э. Баумана, д.т.н., доцент
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-md-6"><strong>Жигадло Валентин Эдуардович</strong></div>
                            <div class="col-md-6">
Заместитель генерального директора ЗАО «Институт
телекоммуникаций», председатель Санкт-Петербургского
отделения Академии информатизации образования, д.т.н.,
профессор
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-md-6"><strong>Алексеев Анатолий Владимирович</strong></div>
                            <div class="col-md-6">
Исполнительный директор Института автоматизации
процессов борьбы за живучесть корабля, судна, профессор
Санкт-Петербургского государственного морского
технического университета, д.т.н., профессор
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-md-6"><strong>Барабаш Павел Александрович</strong></div>
                            <div class="col-md-6">
Декан факультета, ученый секретарь Смольного института
Российской академии образования, к.т.н., доцент
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-md-6"><strong>Ивашкин Юрий Алексеевич</strong></div>
                            <div class="col-md-6">
Профессор Московского государственного университета
прикладной биотехнологии, д.т.н., профессор
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-md-6"><strong>Захаров Юрий Никитич</strong></div>
                            <div class="col-md-6">
Первый заместитель директора Санкт-Петербургского
информационно-аналитического центра, к.т.н., профессор
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-md-6"><strong>Ипатов Олег Сергеевич</strong></div>
                            <div class="col-md-6">
Заместитель проректора по научной работе, заведующий
кафедрой Санкт-Петербургского политехнического
университета Петра Великого, д.т.н., профессор
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-md-6"><strong>Калинин Владимир Николаевич</strong></div>
                            <div class="col-md-6">
Профессор Военно-космической академии им.
А.Ф. Можайского, заслуженный деятель науки и техники РФ,
д.т.н., профессор
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-md-6"><strong>Кефели Игорь Федорович</strong></div>
                            <div class="col-md-6">
Директор Центра геополитической экспертизы Северо-
Западного института управления – филиала Российской
академии народного хозяйства и государственной службы при
Президенте РФ, заслуженный работник высшей школы РФ,
д.филос.н., профессор
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-md-6"><strong>Коваленко Александр Николаевич</strong></div>
                            <div class="col-md-6">
Заместитель директора Северо-западного института печати
Санкт-Петербургского государственного университета
технологии и дизайна, к.ф.-м.н., доцент
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-md-6"><strong>Колбанев Михаил Олегович</strong></div>
                            <div class="col-md-6">
Профессор Санкт-Петербургского государственного
экономического университета, д.т.н., профессор
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-md-6"><strong>Коршунов Игорь Львович</strong></div>
                            <div class="col-md-6">
Заведующий кафедрой Санкт-Петербургского
государственного экономического университета,
к.т.н., доцент
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-md-6"><strong>Левкин Игорь Михайлович</strong></div>
                            <div class="col-md-6">
Профессор Северо-Западного института управления –
филиала Российской академии народного хозяйства и
государственной службы при Президенте РФ,
д.воен.н., профессор
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-md-6"><strong>Микони Станислав Витальевич</strong></div>
                            <div class="col-md-6">
Ведущий научный сотрудник Санкт-Петербургского
института информатики и автоматизации Российской
академии наук, д.т.н., профессор
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-md-6"><strong>Микшина Виктория Степановна</strong></div>
                            <div class="col-md-6">
Заведующая кафедрой, профессор Сургутского
государственного университета, к.т.н., доцент
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-md-6"><strong>Мустафин Николай Габдрахманович</strong></div>
                            <div class="col-md-6">
Профессор Санкт-Петербургского государственного
электротехнического университета «ЛЭТИ», к.т.н., доцент
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-md-6"><strong>Нечаев Валентин Викторович</strong></div>
                            <div class="col-md-6">
Профессор Московского государственного института
радиотехники, электроники и автоматики (технического
университета), д.т.н., профессор
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-md-6"><strong>Осипов Леонид Андроникович</strong></div>
                            <div class="col-md-6">
Заведующий кафедрой Санкт-Петербургского
государственного университета аэрокосмического
приборостроения, заслуженный работник высшей школы РФ,
д.т.н., профессор
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-md-6"><strong>Острейковский Владислав
Алексеевич</strong></div>
                            <div class="col-md-6">
Профессор Сургутского государственного университета,
заслуженный деятель науки и техники РФ, д.т.н., профессор
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-md-6"><strong>Паращук Игорь Борисович</strong></div>
                            <div class="col-md-6">
Профессор Военной академии связи им. С.М. Буденного,
заслуженный изобретатель РФ, д.т.н., профессор
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-md-6"><strong>Пухов Геннадий Георгиевич</strong></div>
                            <div class="col-md-6">
Директор ООО «Геонавигатор», к.т.н., профессор
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-md-6"><strong>Pемонтов Андрей Петрович</strong></div>
                            <div class="col-md-6">
Декан факультета, заведующий кафедрой Пензенского
государственного технологического университета,
к.т.н., доцент
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-md-6"><strong>Соколов Борис Владимирович</strong></div>
                            <div class="col-md-6">
Заведующий лабораторией Санкт-Петербургского
института информатики и автоматизации Российской
академии наук, д.т.н., профессор
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-md-6"><strong>Стажков Сергей Михайлович</strong></div>
                            <div class="col-md-6">
Председатель Совета директоров Международного
университетского сетевого проекта «Синергия», заведующий
кафедрой Балтийского государственного технического
университета «ВОЕНМЕХ» им. Д.Ф. Устинова,
д.т.н., профессор
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-md-6"><strong>Тарашнина Светлана Ивановна</strong></div>
                            <div class="col-md-6">
Начальник отдела Санкт-Петербургского информационно-
аналитического центра, доцент Санкт-Петербургского
государственного университета, к.ф.-м.н., доцент
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-md-6"><strong>Терехов Андрей Николаевич</strong></div>
                            <div class="col-md-6">
Заведующий кафедрой системного программирования
Санкт-Петербургского государственного университета,
д.т.н., профессор
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-md-6"><strong>Цехановский Владислав
Владимирович</strong></div>
                            <div class="col-md-6">
Заведующий кафедрой. профессор Санкт-Петербургского
государственного электротехнического университета
«ЛЭТИ», к.т.н., доцент
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-md-6"><strong>Чистякова Тамара Балабековна</strong></div>
                            <div class="col-md-6">
Профессор Санкт-Петербургского государственного
технологического института (технического университета),
заслуженный работник высшей школы РФ, д.т.н., профессор
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-md-6"><strong>Чугунов Андрей Владимирович</strong></div>
                            <div class="col-md-6">
Директор Центра технологий электронного правительства,
заведующий кафедрой Санкт-Петербургского национального
исследовательского университета информационных
технологий, механики и оптики, к.полит.н., профессор
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-md-6"><strong>Шамин Алексей Анатольевич</strong></div>
                            <div class="col-md-6">
Декан Нижегородского государственного инженерно-
экономического института, к.э.н., доцент
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-md-6"><strong>Шарнин Леонид Михайлович</strong></div>
                            <div class="col-md-6">
Профессор Казанского государственного технического
университета имени А.Н. Туполева, заслуженный работник
высшей школы РФ, д.т.н., профессор
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-md-6"><strong>Яковлев Сергей Алексеевич</strong></div>
                            <div class="col-md-6">
Профессор Санкт-Петербургского государственного
электротехнического университета «ЛЭТИ», заслуженный
работник высшей школы РФ, д.т.н., профессор
                            </div>
                        </div>



                        <p><a href="javascript:void(0)" class="news-read-hide">Скрыть</a></p>
                    </div>
            '],
            [
                'date' => '17 Апреля 2018',
                'text' => '
                    <p>
                        <p>Срок приема тезисов продлен до 22 апреля 2018</p>
                    </p>
            '],
            [
                'date' => '19 Сентября 2017',
                'text' => '
                    <p>
                        <p>Информация о конференции:</p>
                        <p><a href="/assets_app/files/2017-09/program.pdf">Программа конференции</a></p>
                        <p>С уважением, Оргкомитет конференции.</p>
                    </p>
            '],
            [
                'date' => '10 Августа 2017',
                'text' => '
                    <p>
                        <p>Уважаемые коллеги!</p>
                        <p>III межрегиональная конференция  «Перспективные направления развития отечественных информационных технологий»  проводится при поддержке РФФИ. В связи с этим  просим проверить имеющуюся в таблице  информацию, <a rel="nofollow" target="_blank" href="https://docs.google.com/document/d/1R-AygRUPG2Bz6LngZY0uOYU1Hr_b1NlVVClV15uFwFc/edit?usp=sharing">https://docs.google.com/document/d/1R-AygRUPG2Bz6LngZY0uOYU1Hr_b1NlVVClV15uFwFc/edit?usp=sharing</a></p>

                        <p>При необходимости, просим исправить или добавить соответствующие сведения. Просим прощения за объективную задержку, что объясняется формальностями, связанными с оформлением договора с РФФИ.</p>
                        <p>Кроме того, дополнительно  просим подтвердить необходимость  бронирования гостиницы.</p>
                        <p>С уважением, Оргкомитет конференции.</p>
                    </p>
            '],
            [
                'date' => '12 Мая 2017',
                'text' => '
                    <p>
                        Информация о конференции:
                        <ul>
                            <li><a href="/assets_app/files/2017-09/pnroit-2017.pdf">Информационное письмо</a><br/></li>
                         </ul>
                    </p>
            '],
            [
                'date' => '13 Февраля 2017',
                'text' => '
                    <p>
                        Сборник материалов II Межрегиональной научно-практической конференции «Перспективные направления развития отечественных информационных технологий» включен в наукометрическую базу РИНЦ.
                    </p>
            '],
            [
                'date' => '14 Сентября 2016',
                'text' => '
                    <p>
                        Информация о конференции:
                        <ul>
                            <li><a href="/assets_app/files/2016-09/programs/Программа_09_11.docx">Программа конференции</a><br/></li>
                            <li><a href="/assets_app/files/2016-09/programs/RRG_PLEN_LAST.docx">Программа пленарного заседания конференции</a><br/></li>
                            <li><a href="/assets_app/files/2016-09/programs/Open_Lectures.docx">Программа открытых лекций конференции</a><br/></li>
                            <li><a href="/assets_app/files/2016-09/programs/PRG_ГИС.docx">Программа секционного заседания "ГИС и ИТ в морехозяйственной деятельности" конференции</a><br/></li>
                            <li><a href="/assets_app/files/2016-09/programs/PRG_Импортозамещение_ИТ_безопасность.docx">Программа секционного заседания "Импортозамещение и информационная безопасность" конференции</a><br/></li>
                            <li><a href="/assets_app/files/2016-09/programs/PRG_ИТ_в_машиностроении.docx">Программа секционного заседания ИТ в "машиностроении, приборостроении" конференции</a><br/></li>
                            <li><a href="/assets_app/files/2016-09/programs/PRG_ИТ_среда.docx">Программа секционного заседания "ИТ-среда" конференции</a><br/></li>
                            <li><a href="/assets_app/files/2016-09/programs/PRG_Подготовка_ИТ_кадров.docx">Программа секционного заседания "Подготовка ИТ-кадров" конференции</a><br/></li>
                            <li><a href="/assets_app/files/2016-09/programs/PRG_Теор_аспекты_инф.docx">Программа секционного заседания "Теоретические проблемы развития перспективных информационных технологий" конференции</a><br/></li>
                        </ul>
                    </p>
            '],
            [
                'date' => '10 Июля 2016',
                'text' => '
                    <p>
                        Сборник трудов конференции будет представлен в наукометрическую базу РИНЦ. В связи с этим изменились правила представления материалов. К материалам доклада необходимо добавить короткие аннотации и ключевые слова на русском и английском языках.
                    </p>
            '],
            [
                'date' => '7 Сентября 2015',
                'text' => '
                    <p>
                        До 20 сентября продлен срок подачи студенческих заявок на конкурс.
                    </p>
            '],
            [
                'date' => '30 Августа 2015',
                'text' => '
                    <p>
                        В рамках конференции при поддержке Севастопольского государственного университета
                        и Правительства Севастополя проводится Молодежный инженерный фестиваль в области
                        информационных технологий «IT-Севастополь»
                    </p>
                    <p>
                        Конкурс научных работ <a href="/assets_app/files/конкурс-научных-работ.pdf">подробности</a>
                    </p>
                    <p>
                        Конкурс проектов <a href="/assets_app/files/конкурс-студенческих-проектов.pdf">подробности</a>
                    </p>
                    <p>
                        Участие в конференции и круглых столах подтвердили представители НП РУССОФТ,
                        компании ИТ-Консалтинг, Диасофт, которые заинтересованы в организации постоянной
                        площадки и полигона для тестирования импортозамещающих продуктов и решений в
                        Крыму и г. Севастополе <a href="http://itcrimea2015.ru/">http://itcrimea2015.ru/</a>
                    </p>
            '],
            [
                'date' => '14 Августа 2015',
                'text' => '
                    <p>
                        Уважаемые коллеги!
                    </p>
                    <p>
                        Учитывая затянувшийся оргпериод, с одной стороны, и большой интерес к конференции потенциальных
                        участников, с другой стороны, заявки будем принимать до начала конференции. Однако присланные после
                        10.09 материалы не смогут быть опубликованы в основном томе Программы.
                        После прочтения материалов учеными секретарями, они отправят Вам электронное уведомление о принятии
                        материалов. После этого участник оплачивает оргвзнос, и мы оформляем официальное письменное
                        приглашение (если необходимо). Для скорости можем отсканированный вариант передать по электронной
                        почте, оригинал можно получить по прибытии.
                    </p>
                    <p>
                        Если приглашение не нужно или участник готов его получить по приезду на конференцию, оргвзнос можно
                        заплатить до 22.09, уведомив Оргкомитет.
                    </p>
            '],
        ];
    }
}
