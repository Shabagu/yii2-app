<?php

namespace app\controllers;

//use yii\web\Controller;

class MyController extends AppController
{
    public function actionIndex($id = null) {
        $type = 'Music';
        $genre = 'Math Metal';
        $bands = ['Meshuggah', 'The Tony Danza Tapdance Extravaganza', 'Ion Dissonance', 'The Dillinger Escape Plan'];

        if (!$id) $id ='id не задан!';

//        return $this->render('index', ['about' => $type, 'bands' => $bands]);
        return $this->render('index', compact('type', 'genre', 'bands', 'id'));
    }
}
