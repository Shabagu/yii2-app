<?php

/** @var string $content */

use app\assets\AppAsset;
use yii\helpers\Html;

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
    <title>My Yii2 App =)</title>

<?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

    <div class="wrap">
        <div class="container">

            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <?= Html::a('Основной шаблон', '/web/', ['class'=>'nav-link']) ?>
                            <?= Html::a('Уроки', '?r=site/lessons2', ['class'=>'nav-link']) ?>
                            <?= Html::a('post/', '?r=post', ['class'=>'nav-link']) ?>
                            <?= Html::a('post/show2', '?r=post/show2', ['class'=>'nav-link']) ?>
                            <?= Html::a('post/test2 (1)', '?r=post/test2', ['class'=>'nav-link']) ?>
                            <?= Html::a('post/test2 (2)', ['post/test2'], ['class'=>'nav-link']) ?>
                        </div>
                    </div>
                </div>
            </nav>

            <?= $content ?>

        </div>
    </div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
