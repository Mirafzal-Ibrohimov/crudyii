<?php
use yii\helpers\html;
use yii\widgets\ActiveForm;
/** @var yii\web\View $this */

$this->title = 'YII2 CRUD Application';
?>
<div class="site-index">
    <h1>CREATE POST</h1>

    <div class="body-content">
        <?
        $form = ActiveForm::begin()
        ?>
        <div class="row">
            <div class="form-group">
                <div class="col-lg-6">
                    <?= $form->field($post,'title');?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group">
                <div class="col-lg-6">
                    <?= $form->field($post,'description')->textarea(['rows'=>'6']);?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group">
                <div class="col-lg-6">
                    <?$items = ['e-commerce'=>'e-commerce', 'CMS'=>'CMS', 'MVC'=>'MVC',];?>
                    <?= $form->field($post,'category')->dropDownList($items, ['promt'=>'Select']);?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group">
                <div class="col-lg-6">
                  <div class="col-lg-3" style="margin-top:20px;">
                      <?= Html::submitButton('Create Post', ['class'=>'btn btn-primary']);?>
                  </div>
                  <div class="col-lg-2">
                      <a href='<? echo yii::$app->homeUrl;?>' class="btn btn-primary" style="margin-top:20px">Go Back</a>
                  </div>
                </div>
            </div>
        </div>

        <? ActiveForm::end()?>
    </div>
</div>
