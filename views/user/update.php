<?php

/**
 * @var yii\base\View $this View
 * @var yii\widgets\ActiveForm $form Form
 * @var vova07\users\models\frontend\User $model Model
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = Yii::t('users', 'FRONTEND_UPDATE_TITLE');
$this->params['breadcrumbs'][] = $this->title;
?>
    <h1><?php echo Html::encode($this->title); ?></h1>
<?php $form = ActiveForm::begin(
    [
        'fieldConfig' => [
            'template' => "<div class=\"row\"><div class=\"col-sm-6\"{label}\n{input}\n{hint}\n{error}</div></div>",
        ]
    ]
); ?>
<?= $form->field($model, 'name')->textInput() ?>
<?= $form->field($model, 'surname')->textInput() ?>
    <div class="row">
        <div class="col-sm-6">
            <?= Html::submitButton(
                Yii::t('users', 'FRONTEND_UPDATE_SUBMIT'),
                [
                    'class' => 'btn btn-primary pull-right'
                ]
            ) ?>
        </div>
    </div>
<?php ActiveForm::end(); ?>