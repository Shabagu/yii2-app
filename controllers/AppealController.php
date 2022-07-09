<?php

namespace app\controllers;
use Yii;
use app\models\AppealForm;


class AppealController extends AppController {
    public function actionWrite() {

        if (Yii::$app->request->isAjax) {
            debugPrint(Yii::$app->request->post());
            return 'Ajax request worked!';
        }

        $model = new AppealForm();

        $this->layout = 'new';
        $this->view->title = 'Обращение';
        return $this->render('write', compact('model'));
    }
}
