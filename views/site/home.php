<?php

use yii\helpers\html;

/** @var yii\web\View $this */

$this->title = 'YII2 CRUD Application';
?>
<div class="site-index">
    <?php if (yii::$app->session->hasFlash('message')): ?>
        <div class="alert alert-dismissible alert-success">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <? echo yii::$app->session->getFlash('message'); ?>
        </div>
    <? endif; ?>
    <div class="jumbotron text-center bg-transparent">
        <h1 style="color:#337ab7">YII2 CRUD Application Tutorial</h1>
    </div>
    <div class="row">
        <span style="margin-bottom: 20px"><?= Html::a('Create', ['/site/create'], ['class' => 'btn btn-primary']) ?></span>
    </div>
    <div class="body-content">
        <div class="row">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php if (count($posts) > 0): ?>
                    <?php foreach ($posts as $post): ?>
                        <tr>
                            <th scope="col"><? echo $post->id; ?></th>
                            <td><? echo $post->title; ?></td>
                            <td><? echo $post->description; ?></td>
                            <td><? echo $post->category; ?></td>
                            <td>
                        <span>
                            <?= Html::a('View', ['view', 'id' => $post->id], ['class' => 'label label-primary']) ?>
                        </span>
                                <span>
                            <?= Html::a('Update', ['update', 'id' => $post->id], ['class' => 'label label-success']) ?>
                        </span>
                                <span>
                            <?= Html::a('Delete', ['delete', 'id' => $post->id], ['class' => 'label label-danger']) ?>
                        </span>
                            </td>
                        </tr>
                    <? endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td>No Records Found!</td>
                    </tr>
                <?php endif; ?>
                </tbody>
            </table>
        </div>

    </div>
</div>
