<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
/** @var yii\web\View $this */
/** @var app\models\PetRequests $model */

$this->title = 'Обновление инорфмации о заявке: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Заявки', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновление заявки';
?>
<div class="pet-requests-update">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'status_id')->dropDownList(
        ($model->status_id == 1) ? ['2' => 'Принята', '3' => 'Отклонена'] : ['4' => 'Найден', '5' => 'Не найден'],
        ['prompt' => 'Выберите статус']
    ) ?>

    <?= $form->field($model, 'admin_message')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Обновить заявку', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
