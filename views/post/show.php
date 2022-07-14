<?php
//    $this->title = 'Просмотр записи';
?>

<?php $this->beginBlock('block1'); ?>
    <p class='added'> >>> Добавленный блок кода block1 вида post/show2</p>
<?php $this->endBlock(); ?>

<h3>Просмотр поста</h3>

<ul style="margin: 0 15px">
    <li><a href="?r=post/index">post/index</a></li>
    <li><a href="?r=post/test2">post/test2</a></li>
</ul>


<button class="btn btn-success" id="myBtn">Нажми на меня!</button>

<?php $this->registerCss("
    p {font-style: italic}
    button {margin: 15px 15px 30px 15px}
") ?>

<?php //$this->registerJsFile('@web/js/script.js') ?>
<?php $this->registerJsFile('@web/js/script.js', ['depends' => 'yii\web\YiiAsset']) ?>
<?php $this->registerJs(
    "$('main .container').append(`<p class='added'> >>> Добавлено с помощью метода registerJs</p>`)", \yii\web\View::POS_LOAD,
) ?>
<?php
$js = <<<JS
    $('#myBtn').on('click', function() {
        $.ajax({
            url: 'index.php?r=post/show2',
            type: 'POST',
            data: {test: '123'},
            success: function (res) {
                console.log(res)
            },
            error: function () {
                alert('Error!')
            }
        })
    })
JS;

$this->registerJs($js);
?>
