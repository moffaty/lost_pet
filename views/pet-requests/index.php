<?php

use app\models\PetRequests;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Заявки';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pet-requests-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать заявку', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'name',
            'description:ntext',
            'admin_message:ntext',
            'missing_date',
            [
                'attribute' => 'user_id',
                'content' => function ($model) {
                    return $model->user;
                },
                'visible' => Yii::$app->user->identity->role_id == 1,
            ],
            [
                'attribute' => 'status_id',
                'content' => function ($model) {
                    return $model->status;
                },
                'contentOptions' => function ($model) {
                    $options = [];
                    echo $model->status_id;
                    switch ($model->status_id) {
                        case 1: $options['style'] = 'background-color: #f8eaff;'; break;
                        case 2: $options['style'] = 'background-color: aliceblue;'; break;
                        case 3: $options['style'] = 'background-color: #ffa7a7;'; break;
                        case 4: $options['style'] = 'background-color: #b7ffb7;'; break;
                        case 5: $options['style'] = 'background-color: pink;'; break;
                    }
                    return $options;
                },
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, PetRequests $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                },
                'visible' => Yii::$app->user->identity->role_id == 1,
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
