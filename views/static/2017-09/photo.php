<?php
use yii\helpers\Html;
use app\helpers\HtmlApplication;
use app\models\ConferenceEvent;

$this->title = 'Информация о конференции';
$this->params['topMenu'] = 'archive';
$this->params['pageHideSubmenu'] = true;
$conference = ConferenceEvent::find()->where(['slug' => 'conference-09-2017'])->one();

?>
<div class="site-login">
    <div class="row">
        <div class="col-md-12">
            <br />
            <?=HtmlApplication::h1(Html::encode($this->title))?>
        </div>
        <div class="col-md-9">
            <h2>Фотоматериалы и ссылки</h2>
            <hr/>
            <p>
                Фотоматериалы и ссылки III Межрегиональной научно-практической конференции «Перспективные  направления развития отечественных информационных технологий» Севастополь, 19-23 сентября 2017 г.
            </p>
            <img src="/assets_app/files/2017-09/photos/001.jpg" class="img-responsive" />
            <p>
                Председатель программного комитета конференции, Сопредседатель Научного совета по информатизации Санкт-Петербурга, академик Российской академии образования Советов Борис Яковлевич
            </p>
            <img src="/assets_app/files/2017-09/photos/002.jpg" class="img-responsive" />
            <br/>
            <img src="/assets_app/files/2017-09/photos/003.jpg" class="img-responsive" />
            <p>
                Регистрация участников, 20 сентября 2017 года
            </p>
            <img src="/assets_app/files/2017-09/photos/004.jpg" class="img-responsive" />
            <p>
                Открытие конференции, 20 сентября 2017 года. Выступление И.о. ректора Севастопольского государственного университета В.Д. Нечаева.
            </p>
            <img src="/assets_app/files/2017-09/photos/005.jpg" class="img-responsive" />
            <br/>
            <img src="/assets_app/files/2017-09/photos/006.png" class="img-responsive" />
            <br/>
            <img src="/assets_app/files/2017-09/photos/007.png" class="img-responsive" />
            <p>
                Заседания секций и круглых столов (выборочно) «ИТ-продукты и услуги», «Требования к поставщикам услуг по разработке ПО»
            </p>
            <img src="/assets_app/files/2017-09/photos/008.png" class="img-responsive" />
            <br/>
            <img src="/assets_app/files/2017-09/photos/009.png" class="img-responsive" />
            <br/>
            <img src="/assets_app/files/2017-09/photos/010.png" class="img-responsive" />
            <br/>
            <img src="/assets_app/files/2017-09/photos/011.png" class="img-responsive" />
            <p>
                Круглый стол «Геоинформационные системы» с участием студентов и преподавателей СевГУ, МГУ им. М.В. Ломоносова и представителей ИТ-компаний
            </p>
            <img src="/assets_app/files/2017-09/photos/012.jpg" class="img-responsive" />
            <br/>
            <img src="/assets_app/files/2017-09/photos/013.jpg" class="img-responsive" />
            <br/>
            <img src="/assets_app/files/2017-09/photos/014.jpg" class="img-responsive" />
            <br/>
            <img src="/assets_app/files/2017-09/photos/015.jpg" class="img-responsive" />
            <br/>
            <img src="/assets_app/files/2017-09/photos/016.jpg" class="img-responsive" />
            <p>
                Информационные материалы конференции (фотомакеты)
            </p>
            <img src="/assets_app/files/2017-09/photos/018.jpg" class="img-responsive" />
            <p>Ссылки на информационные сообщения о конференции на сайте СевГУ:</p>
            <a href="https://www.sevsu.ru/rus/univers/iituts/item/2741-iii-mezhregionalnaya-nauchno-prakticheskaya-konferentsiya-perspektivnye-napravleniya-razvitiya-otechestvennykh-informatsionnykh-tekhnologij">
                https://www.sevsu.ru/rus/univers/iituts/item/2741-iii-mezhregionalnaya-nauchno-prakticheskaya-konferentsiya-perspektivnye-napravleniya-razvitiya-otechestvennykh-informatsionnykh-tekhnologij
            </a>
            <br/>
            <a href="https://www.sevsu.ru/rus/nauka/science-news/">
                https://www.sevsu.ru/rus/nauka/science-news/item/2757-na-it-konferentsii-rossijskie-uchenye-predlagayut-novye-sposoby-primeneniya-tekhnologij
            </a>
            <br/>
            <br/>
            <p>Видеосюжеты на телевидении (Независимое телевидение Севастополя – www.nts-tv.com)</p>
            <a href="https://youtu.be/kETTmfaqHdA?t=14m48s">https://youtu.be/kETTmfaqHdA?t=14m48s</a><br/>
            <a href="https://youtu.be/gDQn5r6mvuY?t=17m10s">https://youtu.be/gDQn5r6mvuY?t=17m10s</a>
        </div>
    </div>
</div>
