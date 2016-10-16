<?php


use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\HtmlPurifier;

/* @var $this yii\web\View */
/* @var $model app\models\Session */
/* @var $form yii\widgets\ActiveForm */
?>

    <div class="session-form">

    <div class="exercise-item">
        <h4><?= Html::encode($model->header) ?>
            <?= $users=\app\models\User::find()->where('sub', $model->id)->all()?>
            <?php
            foreach ($users as $user){
                if ($user->sub===$model->id){
                    print $user->name;
                    print ' ';
                    print $user->email;
                    print '<br>';

                }
            }
            ?>
            <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-default']) ?>
            <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Вы действительно хотите удалить это упражнение?',
                    'method' => 'post',
                ],
            ]) ?></h4>
        <br>
        <br>
    </div>


    </div><?php
