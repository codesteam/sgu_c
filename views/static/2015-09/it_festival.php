<?php
use yii\helpers\Html;
use app\helpers\HtmlApplication;

$this->title = 'IT-фестиваль';
$this->params['topMenu'] = 'archive';
?>
<div class="site-login">
    <?=HtmlApplication::h1(Html::encode($this->title))?>
    <p>
        В рамках конференции при поддержке Севастопольского государственного университета
        и Правительства Севастополя проводится Молодежный инженерный фестиваль в области
        информационных технологий «IT-Севастополь»
    </p>
    <p>
        Конкурс научных работ <a href="/assets_app/files/конкурс-научных-работ.pdf">подробности</a>
        (отправка заявок - <strong class="text-danger">sc.pnroit@gmail.com</strong>)
    </p>
    <p>
        Конкурс проектов <a href="/assets_app/files/конкурс-студенческих-проектов.pdf">подробности</a>
        (отправка заявок - <strong class="text-danger">pr.pnroit@gmail.com</strong>)
    </p>
    <p>
        Участие в конференции и круглых столах подтвердили представители НП РУССОФТ,
        компании ИТ-Консалтинг, Диасофт, которые заинтересованы в организации постоянной
        площадки и полигона для тестирования импортозамещающих продуктов и решений в
        Крыму и г. Севастополе <a href="http://itcrimea2015.ru/">http://itcrimea2015.ru/</a>
    </p>
</div>
