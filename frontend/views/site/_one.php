<h1><?= $model->title ?></h1>
<?= $model->text ?>
<?= \yii\bootstrap\Html::a('view', ['blog/one', 'url' => $model->url], ['class' => 'btn btn-info']); ?>
