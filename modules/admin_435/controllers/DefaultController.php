<?php

namespace app\modules\admin_435\controllers;

use yii\web\admin_435\AppAdminController;

/**
 * Default controller for the `admin_435` module
 */
class DefaultController extends AppAdminController
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
