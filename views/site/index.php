<?php
use yii\helpers\Html;

$this->title = 'Конференция кафедры информационных систем СевГУ';
?>
<div class="site-index">
    <div class="jumbotron">
        <h2>Севастопольский государственный университет</h2>
        <h2>Кафедра информационных систем</h2>
        <h1>Региональная конференция 2015</h1>
        <p class="lead">Для подачи заявки необходимо заполнить небольшую форму</p>
        <p>
            <?= Html::a('Подать заявку на участие', ['/site/application'], ['class' => 'btn btn-lg btn-success']) ?>
            &nbsp;
            &nbsp;
            <?= Html::a('Cвязаться с нами', ['/site/contact'], ['class' => 'btn btn-lg btn-info']) ?>
        </p>
    </div>
    <div class="wrap">
        <div class="container">
            <div class="body-content">
                <div class="row">
                    <div class="col-lg-4 text-center">
                        <img width="85" height="88" alt="secure" src="/images/fast_img.png">
                        <h2>Общая информация</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                            fugiat nulla pariatur.</p>

                        <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Подробнее &raquo;</a></p>
                    </div>
                    <div class="col-lg-4 text-center">
                        <img width="85" height="88" alt="secure" src="/images/secure_img.png">
                        <h2>Тематические направления</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                            fugiat nulla pariatur.</p>
                        <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Подробнее &raquo;</a></p>
                    </div>
                    <div class="col-lg-4 text-center">
                        <img width="85" height="88" alt="secure" src="/images/support_img.png">
                        <h2>Правила участия</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                            fugiat nulla pariatur.</p>
                        <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Подробнее &raquo;</a></p>
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
