<?php
use yii\helpers\Html;
use yii\helpers\StringHelper;
use app\helpers\HtmlApplication;
use app\models\ConferenceEventDate;

$this->title = 'Межрегиональная научно-практическая конференция Перспективные направления развития
 отечественных информационных технологий';
?>

<div class="site-index">
    <div class="header-main hidden-xs hidden-sm">
        <div class="container">
            <?= $this->render('/layouts/_top_menu', ['mainPage' => true]) ?>
            <div class="row main-title">
                <div class="col-lg-12 text-center">
                    <h2>Межрегиональная научно-практическая конференция</h2>
                    <p><?=HtmlApplication::datesInterval($this->params['currentConference']->start_at, $this->params['currentConference']->end_at) ?><p>
                </div>
            </div>
            <div class="row main-info">
                <div class="col-lg-6 text-left main-info-text">
                    <div class="info-point">
                        <div class="pull-left info-point-img">
                           <img src="/assets_app/images/checkbox.png" />
                        </div>
                        <div class="pull-left info-point-text">
                            <div class="line-1">Библиографическая база РИНЦ:</div>
                            <div class="line-2">Сборник материалов будет размещен в базе РИНЦ</div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="info-point">
                        <div class="pull-left info-point-img">
                           <img src="/assets_app/images/checkbox.png" />
                        </div>
                        <div class="pull-left info-point-text">
                            <div class="line-1">Место проведения:</div>
                            <div class="line-2">Севастопольский государственный университет</div>
                        </div>
                    </div>
                    <? foreach ($this->params['currentConference']->getConferenceEventDates()->limit(1)->all() as $date) :?>
                        <div class="clearfix"></div>
                        <div class="info-point">
                            <div class="pull-left info-point-img">
                               <img src="/assets_app/images/checkbox.png" />
                            </div>
                            <div class="pull-left info-point-text">
                                <div class="line-1"><?=StringHelper::truncate($date->action, 45)?>:</div>
                                <div class="line-2">
                                    <? if($date->action_at_border == ConferenceEventDate::ACTION_AT_BORDER_LT) :?>
                                        до
                                    <? endif ?>
                                    <?=HtmlApplication::date($date->action_at)?>
                                </div>
                            </div>
                        </div>
                    <? endforeach ?>
                </div>
                <div class="col-lg-6 main-info-actions">
                    <?= Html::a('Подать заявку на участие', ['/site/application'], ['class' => 'btn btn-lg btn-success-filled pull-right']) ?>
                    <div class="clearfix"></div>
                    <br/>
                    <?= Html::a('Cвязаться с нами', ['/site/feedback'], ['class' => 'btn btn-lg btn-info-filled pull-right']) ?>
                    <div class="clearfix"></div>
                    <br/>
                    <a href="/assets_app/files/2019-09/program.pdf" class="btn btn-lg btn-info-filled pull-right" style="border-color: #661b93;background-color: #621188">
                        Программа конференции
                    </a>
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
                            <? $conferenceCategories = $this->params['currentConference']->conferenceCategories ?>
                            <? foreach (array_chunk($conferenceCategories, ceil(count($conferenceCategories) / 2)) as $categoriesChunk) :?>
                                <div class="col-md-6">
                                    <ul>
                                        <? foreach ($categoriesChunk as $category) :?>
                                            <li><?=$category->name?></li>
                                        <? endforeach ?>
                                    </ul>
                                </div>
                            <? endforeach ?>
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
                        <?= $this->render('/static/_conference_dates', ['dates' => $this->params['currentConference']->conferenceEventDates]) ?>
                        <div class="text-center main-dates-actions">
                            <a class="btn btn-lg btn-info" href="/info#l-dates">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
