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
        if ($model->load(Yii::$app->request->post())) {
//            debugPrint(Yii::$app->request->post());
//            debugPrint($model);
            if ($model->validate()) {
                Yii::$app->session->setFlash('success',
                    'Спасибо за обращение! Ваша форма отправлена и будет рассмотрена в ближайшее время!');
                return $this->refresh();
            } else {
                Yii::$app->session->setFlash('error',
                    'Ошибка');
            }
        }

        $this->layout = 'new';
        $this->view->title = 'Обращение';
        return $this->render('write', compact('model'));
    }
}
