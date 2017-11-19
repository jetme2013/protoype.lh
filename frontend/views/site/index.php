<?php

/*
 * @var $dataProvider Posts
 * @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="blog-content">

    <?php
    echo \yii\widgets\ListView::widget([
        'dataProvider' => $dataProvider,
        'itemView' =>'_one',
    ]);
    ?>

</div>
