<?php
use yii\helpers\html;
use yii\widgets\ActiveForm;
/** @var yii\web\View $this */

$this->title = 'YII2 CRUD Application';
?>
<div class="site-index">
    <h1>VIEW POST</h1>

    <div class="body-content">
        <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <? echo $post-> title;?>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <? echo $post-> description;?>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <? echo $post-> category;?>
            </li>
        </ul>

        <div class="row">
            <a href='<? echo yii::$app->homeUrl;?>' class="btn btn-primary" style="margin-top:20px">Go Back</a>
        </div>
    </div>
</div>

