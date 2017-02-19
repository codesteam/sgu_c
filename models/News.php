<?php

namespace app\models;

class News
{
    public static function all()
    {
        return [
            [
                'date' => '13 Февраля 2017',
                'text' => '
                    <p>
                        Сборник материалов II Межрегиональной научно-практической конференции «Перспективные направления развития отечественных информационных технологий» включен в наукометрическую базу РИНЦ.
                    </p>
            '],
            [
                'date' => '14 Сентрября 2016',
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
