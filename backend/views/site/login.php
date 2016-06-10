<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;

//Se invoca el componente dado de alta
$component = Yii::$app->Saludo;

// Se declara un evento after para el componente Saludo
$component->on($component::EVENT_AFTER, function ($event) {
    echo "<br>" . $event->data;
}, '###evento disparado despues...');

if (!Yii::$app->user->isGuest) {
    return $this->goHome();
}
?>
<div class="site-login">
    <?php //Evento before ?>
    <h1><?= $component->trigger($component::EVENT_BEFORE); ?><br>
    <?php echo $component->Hola(); ?>
    <?php //Se dispara event_after de la clase componente
        $component->trigger($component::EVENT_AFTER);
    ?>
    </h1>
    <p>Please fill out the following fields to login:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?= $form->field($model, 'rememberMe')->checkbox() ?>

                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
