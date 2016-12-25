<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Photos */
/* @var $newPhotoDetail app\models\PhotosDetail */
/* @var $detailModelList array */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => '产品管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    .img-thumbnail{max-width: 150px;max-height: 150px;}
</style>
<div class="content-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= $this->render('_detail_form', [
            'model' => $newPhotoDetail,
        ]) ?>
    </p>
    <div class="row">
        <div class="col-lg-3"><img src="<?=$model->image?>"/></div>
    </div>

    <div class="row" id="photo-list">
        <?php if(isset($detailModelList) && is_array($detailModelList)):foreach($detailModelList as $item):?>
        <div class="col-lg-3"><img src="<?=$item->file_url?>" class="img-thumbnail"/></div>
        <?php endforeach;endif;?>
    </div>
</div>