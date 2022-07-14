<?php
/**
 * @var $goods
 */
?>

<h1>Каталог товаров</h1>

<?php
//    // Вывод данных БД при запросе объектов
//    foreach ($goods as $product) {
//        echo $product->id . ' - ' . $product->title . '<br>';
//    }

//    // Вывод данных БД при запросе массива данных
//    foreach ($goods as $product) {
//        echo $product['id'] . ' - ' . $product['title'] . '<br>';
//    }

?>


<?php
// Lazy load - ленивая (отложенная) загрузка
// Controller: $goods = GoodsCategory::findOne(...);

// * в данном случае $goods - это категории товаров: $goods = GoodsCategory::...


//    debugPrint($goods);
//    // Не будет произведена выборка самих товаров по категории, т.к. не формируется соответствующий SQL-запрос

//    echo count($goods->goods);
//    debugPrint($goods);
//    // Выборка товаров будет произведена, т.к. в ходе выполнения count() были вызваны соответствующие SQL-запросы
?>

<?php
// Greedy load - жадная загрузка
// Controller: $goods = GoodsCategory::find()->with('goods')->where('id=1')->all();

// * в данном случае $goods - это категории товаров: $goods = GoodsCategory::...


//    debugPrint($goods);
?>

<?php
// Lazy load - ленивая (отложенная) загрузка
// Controller: $goods = GoodsCategory::find()->all();

// Greedy load - жадная загрузка
// Controller: $goods = GoodsCategory::find()->all();

// * в данном случае $goods - это категории товаров: $goods = GoodsCategory::...


    foreach ($goods as $product) {
        echo '<ul>';
            echo '<li>' . $product->title . '</li>';
            $commodities = $product->goods; // actual goods
            foreach ($commodities as $commodity) {
                echo '<ul>';
                    echo '<li>' . $commodity->title . '</li>';
                echo '</ul>';
            }
        echo '</ul>';
    }
?>
