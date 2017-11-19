<?php
/**
 * Created by PhpStorm.
 * User: Усиков
 * Date: 16.09.2017
 * Time: 22:00
 */

namespace frontend\services;

use common\models\Posts;
use yii\data\ActiveDataProvider;

class SiteIndexService
{
    public static function prepareAllPosts()
    {
        $query = Posts::find()
            ->andWhere(['status_id' => 1]);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination'=>[
                'pageSize'=>2,
            ],
            'sort'=>[
                'defaultOrder'=>[
                    'id'=>SORT_DESC
                ]
            ]
        ]);

        return $dataProvider;
    }

    public static function prepareOnePost($url)
    {
        $post = Posts::find()
            ->andWhere(['url' => $url])
            ->one();
        return $post;
    }
}