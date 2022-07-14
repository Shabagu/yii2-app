<?php

namespace app\controllers\hypermarket;

use app\controllers\AppController;
use app\models\Goods;

//use Yii;


class GoodsController extends AppController {

    public function actionExplore() {

        $goods = false; // объявление переменной для работы debugPrint() в виде explore.php при отсутствии выборки

//        // Все данные таблицы `goods`
//        $goods = Goods::find()->all();

//        // Сортировка по убыванию значения поля id
//        $goods = Goods::find()->orderBy(['id' => SORT_DESC])->all();

//        // Запрос данных в формате массива (а не объекта) - потребляет мкньше ресурсов, осуществляется только 1 запрос к БД
//        $goods = Goods::find()->asArray()->all();

//        // Метод where()
//        $goods = Goods::find()->asArray()->where('category_id=1')->all();
//        $goods = Goods::find()->asArray()->where(['category_id'=>2])->all();

//        // Параметр 'like' метода where() --> выбирает все значения, состоящая из введённого - 'молОКо','снежОК'
//        $goods = Goods::find()->asArray()->where(['like', 'title', 'ок'])->all();

//        // where() по числовым значениям
//        $goods = Goods::find()->asArray()->where(['>=', 'id', 3])->all();

//        // Метод limit()
//        $goods = Goods::find()->asArray()->where(['category_id'=>2])->limit(1)->all();
//        $goods = Goods::find()->asArray()->where(['category_id'=>2])->orderBy(['id' => SORT_DESC])->limit(1)->all();

//        // Метод one() -> формируется одномерный(!) массив
//        $goods = Goods::find()->asArray()->where(['category_id'=>2])->one();
//        $goods = Goods::find()->asArray()->where(['category_id'=>2])->orderBy(['id' => SORT_DESC])->one();

//        // Метод count() --> считает количество записей
//        $goods = Goods::find()->asArray()->count();

//        // Метод findOne() --> может вернить только объект
//        $goods = Goods::findOne(['category_id'=>2]);

//        // Метод findAll() --> возвращает все объекты
//        $goods = Goods::findAll(['category_id'=>2]);

//        // Метод findBySql() --> отправляет кастомный SQL-запрос
//        $query = <<<SQL
//SELECT * FROM goods WHERE title LIKE '%ок%';
//SQL;
//        $goods = Goods::findBySql($query)->asArray()->all();

//        // Защита от SQL-инъекций
//        $query = "SELECT * FROM goods WHERE title LIKE :search";
//        $goods = Goods::findBySql($query, [':search'=>'%ок%'])->asArray()->all();

        if (!$goods) $goods = 'Выборка не была произведена';

        $this->view->title = 'Каталог товаров';
        $this->layout = 'new';
        return $this->render('explore', ['goods' => $goods]);
    }
}
