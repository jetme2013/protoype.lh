<?php
/**
 * Created by PhpStorm.
 * User: Усиков
 * Date: 24.09.2017
 * Time: 16:10
 */

namespace frontend\controllers;


use frontend\services\SiteIndexService;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class BlogController extends Controller
{
    public function actionOne($url)
    {
        $post = SiteIndexService::prepareOnePost($url);
        if($post){
            return $this->render('one',
                ['post'=>$post]);
        }
        throw new NotFoundHttpException('Нет такого псто');
    }
}