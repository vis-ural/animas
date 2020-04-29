<?php
// _list_item.php
use yii\helpers\Html;
use yii\helpers\Url;
?>
<div class="col-md-2" style="margin:5px;padding:15px;border:solid 1px #CCC;border-radius: 25px;"
     data-key="<?= $model->id; ?>">
    <div class="text-center">
        <?= Html::img($model->getPicture(), [
            'width' => '100',
            'alt' => $model->getNameClass(),
            'title' => $model->name." ({$model->getNameClass()})",
            'class' => 'img-responsive',
        ]); ?>
    </div>
    <h5 class="">
        <?= Html::encode($model->name." ({$model->getNameClass()})") ?>
    </h5>
    <div class="text-center">
        <?php if ($model->getShowBtn('swim')): ?>
            <?= Html::button(
                \rmrevin\yii\fontawesome\FAS::icon('water',
                    ['aria' => ['hidden' => true], 'class' => ['fa-fw']]),
                [
                    'title' => Yii::t('backend', 'Плавать'),
                    'class' => ['btn', 'btn-xs', 'btn-secondary'],
                    'onclick' => new \yii\web\JsExpression("get(".$model->id.",'swim')"),
                ]
            ); ?>
        <?php endif; ?>
        <?php if ($model->getShowBtn('hunt')): ?>
            <?= Html::button(
                \rmrevin\yii\fontawesome\FAS::icon('arrow-right',
                    ['aria' => ['hidden' => true], 'class' => ['fa-fw']]),

                [
                    'title' => Yii::t('backend', 'Охотиться'),
                    'class' => ['btn', 'btn-xs', 'btn-secondary'],
                    'onclick' => new \yii\web\JsExpression("get(".$model->id.",'hunt')"),
                ]
            ); ?>
        <?php endif; ?>
        <?php if ($model->getShowBtn('voice')): ?>
            <?= Html::button(
                \rmrevin\yii\fontawesome\FAS::icon('volume-up',
                    ['aria' => ['hidden' => true], 'class' => ['fa-fw']]),

                [
                    'title' => Yii::t('backend', 'Издавать звуки'),
                    'class' => ['btn', 'btn-xs', 'btn-secondary'],
                    'onclick' => new \yii\web\JsExpression("get(".$model->id.",'voice')"),
                ]
            ); ?>
        <?php endif; ?>
    </div>

</div>