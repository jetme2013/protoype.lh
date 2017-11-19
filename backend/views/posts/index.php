<?php

use yii\helpers\Html;

use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PostsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Posts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="posts-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Posts', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'url',
            ['attribute' => 'status_id', 'filter' => \common\models\Posts::getStatusList(), 'value' => 'statusName'
                //гет функцию можно написать как аттрибут
                /*function($model){
                   return $model->getStatusName();
                }*/],
            // 'sort',

            ['class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update}',
                //$url это ссылка на действие
                'buttons' =>
                    ['update' => function ($url, $model, $key) {
                       return Html::a('update',$url,['class'=>'btn btn-info']);
                    }]
            ],
        ],
    ]); ?>
    <?php Pjax::end(); ?></div>
