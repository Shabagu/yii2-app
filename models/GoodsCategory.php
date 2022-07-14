<?php

namespace app\models;

use yii\db\ActiveRecord;

class GoodsCategory extends ActiveRecord {

//    public static function tableName() {
//        return 'goods_category';
//    }

    public function getGoods () {
        return $this->hasMany(Goods::class, ['category_id'=>'id']);
    }


}
