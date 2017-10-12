<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your chain from controller-view-model.</p>
    </div>

    <div class="body-content">
        <?php yii\helpers\VarDumper::dump($model, 1, true) ?>
    </div>
</div>
