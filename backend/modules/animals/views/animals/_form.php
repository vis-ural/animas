<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Animals */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="animals-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'class')->dropDownList([
           'backend\modules\animals\components\Kat'=> 'Кошка',
            'backend\modules\animals\components\Giraffe'=>'Жираф',
            'backend\modules\animals\components\Dog'=>'Собака',
            'backend\modules\animals\components\Deer'=>'Олень',
            'backend\modules\animals\components\Boar'=>'Кабан',
            'backend\modules\animals\components\Bear'=>'Медведь'
    ]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'discription')->textarea(['rows' => 6]) ?>

    <?php echo $form->field($model, 'picture')->widget(\trntv\filekit\widget\Upload::class, [
        'url'=>['picture-upload']
    ]) ?>


    <?= $form->field($model, 'status')->widget(\kartik\switchinput\SwitchInput::classname(), []); ?>



    <div class="form-group">
        <?= Html::submitButton(Yii::t('animals', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
