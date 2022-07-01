<?php

namespace app\controllers;

//use Yii;

class PostController extends AppController {

    public function actionTest() {
        $bands = ['Meshuggah', 'The Tony Danza Tapdance Extravaganza', 'Ion Dissonance', 'The Dillinger Escape Plan'];

//        var_dump(Yii::$app);
        return $this->render('test', ['bands' => $bands]);
    }
}
