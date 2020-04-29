<?php

use \yii\helpers\Html;

/**
 * @var yii\web\View $this
 */
$this->title = Yii::$app->name;
?>
<script type="application/javascript">
    function get(id, name) {
        var xhr = new XMLHttpRequest();
        xhr.open('GET', '/frontend/web/site/ajax?id=' + id + '&name=' + name);
        xhr.onload = function () {
            if (xhr.status === 200) {
                Swal.fire({
                    title: 'Инфо',
                    text: xhr.responseText,
                    icon: 'info',
                    confirmButtonText: 'Ok'
                });
            } else {
                console.log('Request failed.  Returned status of ' + xhr.status);
            }
        };
        xhr.send();
    }
</script>
<div class="site-index">
    <div class="container">
        <div class="jumbotron">
            <h1><?= Yii::t('frontend', 'Animals') ?></h1>
            <p class="lead"><?= Yii::t('frontend', 'Animals info') ?></p>
        </div>
        <?= \yii\widgets\ListView::widget([
            'dataProvider' => $dataProvider,
            'options' => [
                'tag' => 'div',
                'class' => 'row',
                'id' => 'list-wrapper',
            ],
            'layout' => "{items}\n{pager}",
            'itemView' => function ($model, $key, $index, $widget) {
                return $this->render('_list_item', ['model' => $model]);
            },
            'itemOptions' => [
                'tag' => false,
            ],
        ]) ?>
    </div>
</div>