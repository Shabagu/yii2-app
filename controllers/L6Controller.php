<?php

namespace app\controllers;

use yii\web\Controller;

class L6Controller extends Controller {

    public $layout = 'simplified';

    public function actionAnotherLayout() {
        return $this->render('another-layout');
    }

    public function actionDefaultLayout() {
        $this->layout = 'main';
        return $this->render('another-layout');
    }
}
