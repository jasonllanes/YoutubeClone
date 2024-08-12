<?php

?>


<aside class="shadow-sm">
    <?php echo \yii\bootstrap5\Nav::widget([
        'items' => [
            ['label' => 'Dashboard', 'url' => ['/site/index']],
            ['label' => 'Videos', 'url' => ['/video/about']],
        ],
        'options' => ['class' => 'd-flex flex-column nav-pills'],
    ]); ?>
</aside>