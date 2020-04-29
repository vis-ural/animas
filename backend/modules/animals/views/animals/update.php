<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Animals */

$this->title = Yii::t('animals', 'Update Animals: {name}', [
    'name' => $model->name,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('animals', 'Animals'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('animals', 'Update');
?>
<div class="animals-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
