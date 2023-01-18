<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Article */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="article-form">

    <?php $form = ActiveForm::begin(); ?>

   

    <?php if (empty($categories)): ?>
        <h3> There is no any categories! </h3> 
    <?php else: ?>
        <?= Html::dropDownList('category', $selectedCategory, $categories, ['class'=>'form-control']) ?>
        
        <div class="form-group" style="margin-top: 20px">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-success']) ?>
        </div>
    <?php endif;?>
    

    <?php ActiveForm::end(); ?>

</div>