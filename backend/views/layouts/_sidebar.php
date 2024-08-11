<?php

?>


<aside>
    <?php echo \yii\bootstrap5\Nav::widget([
        'items' => [
            ['label' => 'Dashboard', 'url' => ['/site/index']],
            ['label' => 'Videos', 'url' => ['/video/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
            ['label' => 'Hello', 'url' => ['/hello/index']],
        ],
        'options' => ['class' => 'd-flex flex-column nav-pills'],
    ]); ?>
</aside>