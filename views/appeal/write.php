<?php
    use yii\widgets\ActiveForm;
    use yii\helpers\Html;
?>

<h3>Напишите ваше обращение</h3>

<?php
//    debugPrint($model);
?>

<?php
/**
 * @var $model
 */
?>

<?php $form = ActiveForm::begin(['options' => ['id' => 'appealForm']]) ?>
    <?= $form->field($model, 'name')->label('Ваше имя'); ?>
    <?= $form->field($model, 'code')->label('Кодовый номер')->passwordInput(); ?>
    <?= $form->field($model, 'email')->label('Адрес вашей электронной почты')->input('email'); ?>
    <?= $form->field($model, 'text')->label('Текст вашего обращения')->textarea(['rows' => 8]); ?>
    <?= Html::submitButton('Отправить обращение', ['class' => 'btn btn-success']); ?>
<?php ActiveForm::end() ?>

