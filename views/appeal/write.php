<?php
//use yii\widgets\ActiveForm;
//use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

?>

<h1>Напишите ваше обращение</h1>

<?php
/**
 * @var $model
 */

//    debugPrint($model);
?>

<?php
//    // Старый вариант формы
//    $form = ActiveForm::begin(['options' => ['id' => 'appealForm']]);
//    echo $form->field($model, 'name')->label('Ваше имя');
//    echo $form->field($model, 'code')->label('Кодовый номер')->passwordInput();
//    echo $form->field($model, 'email')->label('Адрес вашей электронной почты')->input('email');
//    echo $form->field($model, 'text')->label('Текст вашего обращения')->textarea(['rows' => 8]);
//    echo Html::submitButton('Отправить обращение', ['class' => 'btn btn-success']);
//    ActiveForm::end()
?>

<?php if (Yii::$app->session->hasFlash('success')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= Yii::$app->session->getFlash('success') ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>

<?php if (Yii::$app->session->hasFlash('error')): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?= Yii::$app->session->getFlash('error') ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>

<?php $form = ActiveForm::begin(['options' => ['id' => 'appeal-form']]); ?>
    <?= $form->field($model, 'name'); ?>
    <?= $form->field($model, 'code')->passwordInput(); ?>
    <?= $form->field($model, 'email')->input('email'); ?>
    <?= $form->field($model, 'text')->textarea(['rows' => 8]); ?>
    <?= Html::submitButton('Отправить обращение', ['class' => 'btn btn-success']); ?>
<?php ActiveForm::end() ?>
