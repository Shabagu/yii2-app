<h3>Просмотр поста</h3>

<button class="btn btn-success" id="myBtn">Нажми на меня!</button>

<?php $this->registerCss("
    p {font-style: italic}
    button {margin: 15px}
") ?>

<?php //$this->registerJsFile('@web/js/script.js') ?>
<?php $this->registerJsFile('@web/js/script.js', ['depends' => 'yii\web\YiiAsset']) ?>
<?php $this->registerJs(
    "$('.container').append('<p>Добавлено с помощью метода registerJs</p>')",
    \yii\web\View::POS_LOAD,
) ?>
<?php
$js = <<<JS
    $('#myBtn').on('click', function() {
        $.ajax({
            url: 'index.php?r=post/index',
            type: 'POST',
            data: {test: '123'},
            success: function (res) {
                console.log(res)
            },
            error: function () {
                alert('Error!')
            },
        })
    })
JS;

$this->registerJs($js);
?>
