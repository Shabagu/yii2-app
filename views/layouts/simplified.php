<?php

/** @var string $content */

use app\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);

?>

<?php $this->beginPage() ?>
<!doctype html>
<html lang=ru>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<!--    --><?php //$this->registerCsrfMetaTags() ?>
<!--    <title>My Yii2 App =)</title>-->
    <title><?= Html::encode($this->title)?></title>

    <?php $this->registerMetaTag(['name'=>'keywords', 'content'=>'yii, yii2, learning']) ?>
    <?php $this->registerMetaTag(['name'=>'description', 'content'=>'моё приложение на фреймворке Yii2 (свой шаблон)']) ?>
<?php $this->head() ?>
</head>

<body>
<?php $this->beginBody() ?>

<?php
    NavBar::begin([
        'brandLabel' => 'Моё приложение',
        'brandUrl' => '?r=site/index2',
        'options' => [
            'class' => 'navbar navbar-expand-md navbar-light bg-light fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav'],
        'items' => [
            ['label' => 'Уроки', 'url' => '?r=site/lessons2'],
            ['label' => 'post/index', 'url' => '?r=post'],
            ['label' => 'post/show2', 'url' => '?r=post/show2'],
            ['label' => 'post/test2', 'url' => '?r=post/test2'],
            ['label' => '[основной шаблон]', 'url' => '/web'],
        ]
    ]);
    NavBar::end();
?>
    <div class="warp">
        <main>
            <div class="container">
                <!--                    <nav class="navbar navbar-expand-lg bg-light">-->
                <!--                        <div class="container-fluid">-->
                <!--                            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">-->
                <!--                                <div class="navbar-nav">-->
                <!--                                    --><?//= Html::a('Основной шаблон', '/web', ['class'=>'nav-link']) ?>
                <!--                                    --><?//= Html::a('Уроки', '?r=site/lessons2', ['class'=>'nav-link']) ?>
                <!--                                    --><?//= Html::a('post/', '?r=post', ['class'=>'nav-link']) ?>
                <!--                                    --><?//= Html::a('post/show2', '?r=post/show2', ['class'=>'nav-link']) ?>
                <!--                                    --><?//= Html::a('post/test2 (1)', '?r=post/test2', ['class'=>'nav-link']) ?>
                <!--                                    --><?//= Html::a('post/test2 (2)', ['post/test2'], ['class'=>'nav-link']) ?>
                <!--                                </div>-->
                <!--                            </div>-->
                <!--                        </div>-->
                <!--                    </nav>-->

                <?= $content ?>

                <?php //debugPrint($this->blocks); //Просмотр массива блоков вида?>

                <?php if (isset($this->blocks['block1'])): ?>
                    <?= $this->blocks['block1'] ?>
                <?php endif; ?>

            </div>
        </main>
    </div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
