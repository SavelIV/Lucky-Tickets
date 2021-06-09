<?php

/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = 'My Lucky Ticket';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Hello!</h1>

        <p class="lead">To count an amount of all Lucky Tickets click here.</p>

        <p><a class="btn btn-lg btn-success" href="<?php echo Url::to(['count']); ?>">Count Lucky Tickets</a></p>
    </div>

    <div class="body-content">


    </div>
</div>
