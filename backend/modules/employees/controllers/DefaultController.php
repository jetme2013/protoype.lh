<?php

namespace app\modules\employees\controllers;

use backend\controllers\CommonController;


/**
 * Default controller for the `employees` module
 */
class DefaultController extends CommonController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

}
