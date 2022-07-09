<?php

namespace app\controllers;

use yii\web\Controller;

class LessonsController extends Controller {

    public $layout = 'new';

    public function actionL6AnotherLayout() {
        return $this->render('lesson6');
    }

    public function actionL6DefaultLayout() {
        $this->layout = 'main';
        return $this->render('lesson6');
    }

    public function actionL7() {
        return $this->render('lesson7');
    }
}
