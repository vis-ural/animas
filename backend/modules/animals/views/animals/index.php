<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel common\models\AnimalsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('animals', 'Animals');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="animals-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('animals', 'Create Animals'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'picture',
                'format' => 'html',
                'value' => function ($data) {
                    return Html::img($data->getPicture(), [
                        'width' => '100',
                        'alt' => $data->getNameClass(),
                        'title' => $data->name." ({$data->getNameClass()})",
                    ]);
                },

            ],
            [
                'attribute' => 'name',
                'format' => 'html',
                'value' => function ($data) {
                    return $data->name." ({$data->getNameClass()})";
                },

            ],
            [
                'class' => \common\grid\EnumColumn::class,
                'attribute' => 'status',
                'enum' => \common\models\Animals::statuses(),
                'filter' => \common\models\Animals::statuses(),
            ],
            [
                'attribute' => 'created_at',
                'format' => 'datetime',
                'filter' => \kartik\widgets\DatePicker::widget([
                    'model' => $searchModel,
                    'attribute' => 'created_at',
                    'type' => \kartik\widgets\DatePicker::TYPE_COMPONENT_APPEND,
                    'pluginOptions' => [
                        'format' => 'dd-mm-yyyy',
                        'showMeridian' => true,
                        'todayBtn' => true,
                        'endDate' => '0d',
                    ],
                ]),
            ],
            [
                'attribute' => 'updated_at',
                'format' => 'datetime',
                'filter' => \kartik\widgets\DatePicker::widget([
                    'model' => $searchModel,
                    'attribute' => 'updated_at',
                    'type' => \kartik\widgets\DatePicker::TYPE_COMPONENT_APPEND,
                    'pluginOptions' => [
                        'format' => 'dd-mm-yyyy',
                        'showMeridian' => true,
                        'todayBtn' => true,
                        'endDate' => '0d',
                    ],
                ]),
            ],
//

            [
                'class' => \common\widgets\ActionColumn::class,
                'template' => '{swim} {hunt} {voice} {view} {update} {delete}',
                'options' => ['style' => 'width: 240px'],
                'buttons' => [
                    'swim' => function ($url) {
                        return Html::a(
                            \rmrevin\yii\fontawesome\FAS::icon('water',
                                ['aria' => ['hidden' => true], 'class' => ['fa-fw']]),
                            $url,
                            [
                                'title' => Yii::t('backend', 'Плавать'),
                                'class' => ['btn', 'btn-xs', 'btn-secondary'],
                            ]
                        );
                    },
                    'hunt' => function ($url) {
                        return Html::a(
                            \rmrevin\yii\fontawesome\FAS::icon('arrow-right',
                                ['aria' => ['hidden' => true], 'class' => ['fa-fw']]),
                            $url,
                            [
                                'title' => Yii::t('backend', 'Охотиться'),
                                'class' => ['btn', 'btn-xs', 'btn-secondary'],
                            ]
                        );
                    },
                    'voice' => function ($url) {
                        return Html::a(
                            \rmrevin\yii\fontawesome\FAS::icon('volume-up',
                                ['aria' => ['hidden' => true], 'class' => ['fa-fw']]),
                            $url,
                            [
                                'title' => Yii::t('backend', 'Издавать звуки'),
                                'class' => ['btn', 'btn-xs', 'btn-secondary'],
                            ]
                        );
                    },
                ],
                'visibleButtons' => [
                    'swim' => function ($data) {
                        return $data->getShowBtn('swim');
                    },
                    'hunt' => function ($data) {
                        return $data->getShowBtn('hunt');
                    },
                    'voice' => function ($data) {
                        return $data->getShowBtn('voice');
                    },
                ],

            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
